<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
    //Constructor del controlador
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Europe/Madrid');

        $this->load->model('blog_model');               
    }
//Carga las entradas y las envia a la vista show_entries para mostrarlas
public function index(){
    $data['entries'] = $this->blog_model->getEntries();  

    if ($this->session->userdata('is_logged_in')) {
        $username = $this->session->userdata('username');
        $data['my_entries'] = $this->blog_model->getMyEntries($username);  
    }
    $this->load->view('show_entries', $data);
}
//Carga la vista new_entry
public function entry(){

    $this->load->view('new_entry');

}
//Carga la vista wurrflTest
public function wurfl(){
    $this->load->view('wurrflTest');
}

//Guarda los datos obtenidos en variables y luegolas inserta en la 
//tablas entries y wurfldata y redirecciona a la url base
public function insert_entry(){

    $data['entries'] = $this->blog_model->getEntries(); 
    $data['tags'] = $this->blog_model->getTags(); 
    $data['wurfl'] = $this->blog_model->getWurfl(); 
    login_site();
    $entry = array(
        'permalink'  => permalink($this->input->post('title')),
        'author' => $this->session->userdata('username'),
        'title' => $this->input->post('title'),
        'image'=> $this->input->post('image'),
        'content' => $this->input->post('content'),
        'date' => date('Y-m-d H:i:s'),
        'tags' => $this->input->post('tags'),        
        
        ); 
    $wurflEnviar=array(
        'complete_device_name'=>$this->input->post('complete_device_name'),
        'is_mobile'=>$this->input->post('is_mobile'),
        'date' => date('Y-m-d H:i:s'),
        'user' => $this->session->userdata('username'),
        'form_factor'=>$this->input->post('form_factor'),
        'ip_address'=>$_SERVER['REMOTE_ADDR'],
        'remote_host'=>$_SERVER['REMOTE_HOST']
        );

    $this->blog_model->insert('wurfldata', $wurflEnviar);
    $this->blog_model->insert('entries', $entry);

    redirect(base_url());
}
//Obtiene las datos de las tablas y carga la vista view_entry 
public function view(){
    $entry_id = $this->uri->segment(3);
    $data['entry'] = $this->blog_model->getEntry($entry_id);
    $data['comments'] = $this->blog_model->getComments($entry_id);
    $this->load->view('view_entry', $data);
}
//Guarda los datos y luego los inserta en la tabla comments de la base de datos.
public function comment(){
    $id_blog = $this->input->post('id_blog');
    $comment = array(
        'id_blog' => $id_blog,
        'author' => $this->session->userdata('username'),
        'comment' => $this->input->post('comment'),
        'date' => date('Y-m-d H:i:s')
        );
    $this->blog_model->insert('comments', $comment);
    redirect(base_url().'index.php/blog/view/'.$id_blog);
}
//Obtiene los datos de la tabla y luego carga la vista edit_entry
public function edit() {
  $id_entry = $this->uri->segment(3);
  $data['entry_data'] = $this->blog_model->getEntryData($id_entry);  

  $this->load->view('edit_entry', $data);
}
//Actualiza los datos de la tabla entries y redirecciona a la vista con los nuevos datos cargados.
public function update_entry()
{
    $id = $this->input->post('id');
    $entry = array(
        'title'     => $this->input->post('title'),
        'content'   => $this->input->post('content'),
        'image'=> $this->input->post('image'),
        'tags'      => $this->input->post('tags'),
        'editInfo'=>'<br/><br/><i> Editado por: '.$this->session->userdata('username').' a las '.date('H:i:s').' del '.date('d-m-Y').'</i>',
        );

    $this->blog_model->updateEntry($id, $entry);

    redirect(base_url() . 'index.php/blog/view/' . $id);
}

//Elimina la entrada que se le indique y redirecciona a la url base
public function delete(){
    $id_entry = $this->uri->segment(3);

    $this->blog_model->deleteEntry($id_entry);

    redirect(base_url());
}

//Carga la vista con las entradas del usuario
public function MyEntries(){
    $checkAuthor=$this->session->userdata('name');   
    $data['entries'] = $this->blog_model->getUserEntry($checkAuthor);   
    $this->load->view('show_user_entries', $data);

}
//Carga la vista que contiene las datatables y le pasa los datos que usaran
public function userDatatables(){
    $data['user_datatables']=$this->blog_model->getUserDatatables();
    $data['comments_datatables']=$this->blog_model->getCommentsDatatables();
    $data['entries_datatables']=$this->blog_model->getEntriesDatatables();
    $data['wurfl_datatables']=$this->blog_model->getWurflDatatables();

    $this->load->view('datatables',$data);
}
/*public function commentsDatatables(){
    $data['comments_datatables']=$this->blog_model->getCommentsDatatables();
    $this->load->view('datatables',$data);
}*/



}
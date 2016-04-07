<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('blog_model');               
    }

    public function index(){
       $data['entries'] = $this->blog_model->getEntries();  

       if ($this->session->userdata('is_logged_in')) {
          $username = $this->session->userdata('username');
          $data['my_entries'] = $this->blog_model->getMyEntries($username);  
      }

      $this->load->view('show_entries', $data);
  }
  public function entry(){
    $this->load->view('new_entry');
}

public function insert_entry(){

    $data['entries'] = $this->blog_model->getEntries(); 
    $data['tags'] = $this->blog_model->getTags(); 
    login_site();
    $entry = array(
        'permalink'  => permalink($this->input->post('title')),
        'author' => $this->session->userdata('username'),
        'title' => $this->input->post('title'),
        'image'=> $this->input->post('image'),
        'content' => $this->input->post('content'),
        'date' => date('Y-m-d H:i:s'),
        'tags' => $this->input->post('tags')
        
        ); 

   /*$tag=array(
        'tag' => $this->input->post('tags')
        ); 
    $tagimplode=implode(",",$tag);
    
    $longitud=strlen($tagimplode);
    $contador=0;-->
*/
    $this->blog_model->insert('entries', $entry);
    /*
    while ($longitud <= 10) {
        $this->blog_model->insert('tags',$tagimplode[$longitud]);
        $longitud=$contador+1;
    }*/
    redirect(base_url());
}
public function view(){
    $entry_id = $this->uri->segment(3);
    $data['entry'] = $this->blog_model->getEntry($entry_id);
    $data['comments'] = $this->blog_model->getComments($entry_id);
    $this->load->view('view_entry', $data);
}
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
public function edit() {
  $id_entry = $this->uri->segment(3);
  $data['entry_data'] = $this->blog_model->getEntryData($id_entry);  

  $this->load->view('edit_entry', $data);
}
public function update_entry()
{
    $id = $this->input->post('id');
    $entry = array(
        'title'     => $this->input->post('title'),
        'content'   => $this->input->post('content'),
        'image'=> $this->input->post('image'),
        'tags'      => $this->input->post('tags'),
        );

    $this->blog_model->updateEntry($id, $entry);

    redirect(base_url() . 'index.php/blog/view/' . $id);
}

public function delete(){
    $id_entry = $this->uri->segment(3);

    $this->blog_model->deleteEntry($id_entry);

    redirect(base_url());
}

public function MyEntries(){
    $checkAuthor=$this->session->userdata('name');   
    $data['entries'] = $this->blog_model->getUserEntry($checkAuthor);   
    $this->load->view('show_user_entries', $data);

}
public function userDatatables(){
    $data['user_datatables']=$this->blog_model->getUserDatatables();
    $data['comments_datatables']=$this->blog_model->getCommentsDatatables();
    $data['entries_datatables']=$this->blog_model->getEntriesDatatables();

    $this->load->view('datatables',$data);
}
/*public function commentsDatatables(){
    $data['comments_datatables']=$this->blog_model->getCommentsDatatables();
    $this->load->view('datatables',$data);
}*/

}
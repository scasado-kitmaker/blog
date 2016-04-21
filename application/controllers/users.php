<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller{
        //Constructor del controlador users.php, llama al constructor padre
        public function __construct()
        {
                parent::__construct();
                $this->load->model('blog_model');
        }
        //Carga la vista signin
        public function signin()
        {
                $this->load->view('signin');
        }
        //Carga la vista signup
        public function signup()
        {
                $this->load->view('signup');
        }
        //Funcion que crea la cuenta de usuario guardando los datos en la base de datos
        //e inicia sesión con la cuenta registrada.
        public function register()
        {
                $name = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = array(
                        'name' => $name,
                        'username' => $username,
                        'password' => md5($password)
                        );
                if($this->blog_model->insert('users', $user)){
                        $session = array(
                                'name' => $name,
                                'username' => $username,
                                'is_logged_in' => TRUE,                        
                                );
                        $this->session->set_userdata($session);
                        redirect(base_url());
                }
        }
        //Valida que los datos introducidos existen en los registros de la base de datos,en caso
        //de no ser así devolvera error, en caso de se correctos se iniciara la sesión del usuario.
        public function validate()
        {            
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                if($user = $this->blog_model->validate_credentials($username, $password)){
                        $session = array(
                                'name' => $user->name,
                                'username' => $username,
                                'is_logged_in' => TRUE,                        
                                );
                        $this->session->set_userdata($session);
                        redirect(base_url());
                }
                else{
                        $this->load->view('signin', array('error'=>TRUE));
                }
        }
        //Cierra la sesion del usuario
        public function logout()
        {
                if($this->session->userdata('is_logged_in'))
                        $this->session->sess_destroy();        
                redirect(base_url());                  
        }
}
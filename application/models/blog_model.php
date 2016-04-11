<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model {
	//obtiene las entradas de la bbdd y las devuelve en orden descente
	public function getEntries(){
		$this->db->order_by('date DESC');
		return $this->db->get('entries')->result();
	}
	//Obtiene las etiquetas de la bbdd y las devuelve
	public function getTags(){
		$this->db->order_by('id DESC');
		return $this->db->get('tags')->result();
	}
	//Inserta valores que se le pasan en la tabla que se le indique
	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
	//Valida las credenciales al hacer login
	public function validate_credentials($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users')->row();
	}
	//Obtiene las entradas de la id que se le pasa
	public function getEntry($id){
		$this->db->where('id', $id);
		return $this->db->get('entries')->row();
	}
	//Obtiene los comentarios de la id que se le pasa
	public function getComments($id){
		$this->db->where('id_blog', $id);
		return $this->db->get('comments')->result();
	}
	//Obtiene los datos de las entradas donde el usuario sea igual a $username
	public function getMyEntries($username)
	{
		$this->db->select('id');
		$this->db->where('author', $username );
		$res = $this->db->get('entries')->result();

		$results = array();
		if (!empty($res)) {
			foreach ($res as $k => $v) {
				array_push($results, $v->id);
			}    
		}

		return $results;
	}
	//Obtiene el contenido de la tabla entries donde la id sea igual a $entry
	public function getEntryData($entry)
	{
		$this->db->where('id', $entry);
		$q = $this->db->get('entries');

		return $q->row();
	}
	
	//Actualiza el contenido de la tabla entries
	public function updateEntry($id, $data)
	{
		$this->db->where('id', $id);

		return $this->db->update('entries', $data);
	}
	//Borra en contenido de la entrada que corresponde al id pasado
	public function deleteEntry($id)
	{
		return $this->db->delete('entries', array('id' => $id)); 
	}
	//Obtiene los datos de la tabla entries donde el autor sea igual $checkAuthor
	public function getUserEntry($checkAuthor){
		$this->db->where('author',$checkAuthor);
		return $this->db->get('entries')->result();
	}
	//Obtiene los datos de la tabla users 
	public function getUserDatatables(){
		return $this->db->get('users')->result();
	}
	//Obtiene los datos de la taba commnets
	public function getCommentsDatatables(){
		return $this->db->get('comments')->result();
	}
	//Obtiene los datos de la tabla entries
	public function getEntriesDatatables(){
		return $this->db->get('entries')->result();
	}
	//Obtiene los datos de la tabla wurfldata
	public function getWurflDatatables(){
		return$this->db->get('wurfldata')->result();
	}
	//Obtiene los datos de la tabla wurfldata
	public function getWurfl(){
		
		return $this->db->get('wurfldata')->result();
	}
	
}

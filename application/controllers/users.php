<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('usersModel');
	}


	public function addPost(){

		$data = array(
			"name" => $this->input->post('name'),
			"lastName" => $this->input->post('lastName'),
			"email" => $this->input->post('email')
		);

		$this->db->insert('users', $data);
		echo "Usuario insertado";
	}

	public function getUsers(){
		echo "<h3> Mis Usuarios son: </h3>";

		$users = $this->db->get('users');

		foreach ($users->$result() as $row) {
			echo $row->name;
		}

		
	}
}

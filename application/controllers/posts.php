<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('postModel');
	}


	public function addPost(){

		$data = array(
			"name" => $this->input->post('name'),
			"title" => $this->input->post('title'),
			"content" => $this->input->post('cont')
		);

		$this->db->insert('posts', $data);
		echo "Post Creado";
	}

	public function getPost(){
		echo "<h3> Posts: </h3>";

		$query_result = $this->postModel->getPosts();
		
		$data = $query_result;

		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/


  		foreach ($data  as $row) {

  			echo $row['name']."<br>";
  			echo $row['title']."<br>";
  			echo $row['content']."<br>";

  		}
		
	}
}

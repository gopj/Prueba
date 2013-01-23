<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class postModel extends CI_Model {

	function __construct() {
		parent::__construct();

	}
	

	 function getPosts(){

        $query = $this->db->query("SELECT * FROM posts");
        
        if ($query->num_rows() > 0){

            $params = $query->result_array();

            $result['params'] = $params[0];

        } else
            $result['params'] = 0;
       
        return $result;

    }
}

<?php

class Books_model extends CI_Model {
	
	public function get_all(){
		$books = $this->db->get("books")->result_array();
		return $books;
	}
}

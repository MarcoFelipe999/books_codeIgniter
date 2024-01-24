<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Livros_model extends CI_Model {
	
	public function get_all(){
		$this->db->select("livros.*,categorias.titulo as categoria");
		$this->db->from("livros");
		$this->db->join("categorias","categorias.id=livros.categoria_id");
		return $this->db->get();
	}
	public function store($data){
		$this->db->insert('livros', $data);
	}
	public function get_by_id($id){
		$book = $this->db->where('id',$id)->get('livros')->row();
		return $book;
	}
	public function update($id,$data){
		$this->db->where('id',$id)->update('livros',$data);
	}
	public function delete($id){
		$this->db->where('id',$id)->delete('livros');
	}

}

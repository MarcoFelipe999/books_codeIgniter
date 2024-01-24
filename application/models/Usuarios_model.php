<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios_model extends CI_Model {

	public function get($id=null,$vendedor = null){
		$this->db->select('*');
		$this->db->from('usuarios');
		if($id != null){
			$this->db->where('id',$id);
		}
		if($vendedor != null){
			$this->db->where('vendedor', $vendedor);
		}
		$query = $this->db->get();
		return $query;
	}
}

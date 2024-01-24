<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('livros_model');
	}

	public function index(){
		$livros = $this->livros_model->get_all()->result();
		$categoria_vendedor_id = $this->session->userdata('user')->categoria_id;
		$this->load->view("livros\index",compact('livros','categoria_vendedor_id'));
		
	}
	public function create(){
		$this->load->view('livros\create');
	}
	public function store(){
		$data = $this->input->post();
		$data['categoria_id'] = $this->session->userdata('user')->categoria_id;
		$this->livros_model->store($data);
		redirect(base_url('livro/index'));
	}
	public function edit($id){
		$livro = $this->livros_model->get_by_id($id);
		$categoria_vendedor_id = $this->session->userdata('user')->categoria_id;
		if($categoria_vendedor_id != $livro->categoria_id){
			redirect(base_url('livro/index'));
		}
		$this->load->view('livros\edit',compact('livro'));
	}
	public function update($id){
		$data = $this->input->post();
		$livro = $this->livros_model->get_by_id($id);
		$categoria_vendedor_id = $this->session->userdata('user')->categoria_id;
		if($categoria_vendedor_id != $livro->categoria_id){
			redirect(base_url('livro/index'));
		}
		$this->livros_model->update($id,$data);
		redirect(base_url('livro\index'));
	}
	public function delete($id){
		$this->livros_model->delete($id);
		redirect(base_url('livro\index'));
	}
}

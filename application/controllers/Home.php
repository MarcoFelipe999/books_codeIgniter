<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('usuarios_model');
		$vendedores = $this->usuarios_model->get(null,1)->result();
		$this->load->view('auth/login',compact('vendedores'));
	}
	public function logar(){
		$user_id = $this->input->post('user_id');
		$this->load->model('usuarios_model');
		$vendedor = $this->usuarios_model->get($user_id)->row();
		$this->session->set_userdata(['user'=>$vendedor]);
		redirect(base_url('Livro'));
	}
	public function edit($id){
		$book = $this->usuarios_model->get($id);
		$this->load->view('livros/edit',compact('book'));
	}
}

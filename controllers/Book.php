<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	
	public function index(){
		// $this->load->model('books_model');
		// $books = $this->books_model->get_all();
		
		$books = [
			[
				"title" => "Odisseia",
				"author" => "Homero",
				"price" => 10.0,
			],
			[
				"title" => " A cabana do Pai Tomás",
				"author" => "Harriet Beecher Stowe",
				"price" => 30.0,
			],
			[
				"title" => "Dom Quixote",
				"author" => "Miguel de Cervantes",
				"price" => 20.0,
			],
		];
		$this->load->view("books\index",compact('books'));
	}
}

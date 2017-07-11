<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Review_model');
	}
	
	// public function reply(){
	// 	$a = $this->uri->segment(3);
	// 	$this->Review_model->reply();
	// 	redirect('books/details/'.$this->uri->segment());	
	// }

	public function allComment(){
		// $this->load->model('Review_model');
	}

	public function del($id){
		$this->Review_model->delComment($id);
		redirect('home','refresh');
	}

}
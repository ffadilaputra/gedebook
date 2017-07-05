<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Like extends CI_Controller{

	public function index(){
		$this->load->model('Like_model');
		$this->Like_model->put_like();
		redirect('home');
	}
}
<?php  

class User extends CI_Controller
{
	public function register(){
		$this->load->view('register');
	}

	public function login(){
		$this->load->view('login');	
	}

}
?>
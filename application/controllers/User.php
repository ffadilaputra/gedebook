<?php 

class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }else{
            redirect('auth/login','refresh');
        }
	}

	public function index(){

	}

}


 ?>
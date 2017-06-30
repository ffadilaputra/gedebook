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
            redirect('login','refresh');
        }
	}

	public function index(){

		$this->load->view('user');

	}

	public function profile(){

		$this->load->model('User_model');
		$session_data = $this->session->userdata('logged_in');

		$data['profile'] = $this->User_model->getProfil($session_data['id_pengguna']);
		$this->load->view('user_profile',$data);
	}

	public function browse(){
		$this->load->view('user_browse');
	}

}
?>
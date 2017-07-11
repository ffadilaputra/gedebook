<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); //Konstruktor
		//Instansiasi Model
		$this->load->model('User_model');
	}

	public function register(){

		//Set Validasi
		$this->form_validation->set_rules('fullname','fullname','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('gender','gender','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register'); //Validasi gagal lari kesini
		}else { //Validasi Benar
			$this->User_model->register();
			redirect('login');
		}

	}

	public function login(){
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}else{	
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
					if ($session_data['role'] == 'user') {
						redirect('home','refresh');
					}elseif($session_data['role'] == 'writer'){
						redirect('home','refresh');
					}//Penutub Else IF
			}//Penutub if Pertama
		}

	}

	public function cekDb($password){
		$user = $this->input->post('username');
		$result = $this->User_model->login($user,$password);

		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id_pengguna' => $row->id_pengguna,
					'username' => $row->username,
					'ava' => $row->ava,
					'nama' => $row->nama,
					'role' => $row->role
				 );
				$this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}
?>
<?php  

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
			redirect('Auth/login');
		}

	}

	public function login(){
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
			//var_dump($_POST);
		}else{
			redirect('User','refresh');
		}

	}

	public function cekDb($password)
	{
		$username = $this->input->post('username');
		$result = $this->User_model->login($username,$password);

		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id_pengguna' => $row->id_pengguna,
					'username' => $row->username
				 );
				$this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}
		else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
	}

}
?>
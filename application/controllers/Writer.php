<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id_pengguna'] = $session_data['id_pengguna'];

            if ($session_data['role'] != 'writer') {
            	redirect('user','refresh');
            }

        }else{
            redirect('login','refresh');
        }
	}

	public function index(){
		//$this->load->view('partials/header-penulis');
	}

	public function profile(){

		$this->load->model('User_model');
		$session_data = $this->session->userdata('logged_in');

		$data['profile'] = $this->User_model->getProfil($session_data['id_pengguna']);
		$this->load->view('writer_profile',$data);
	}

	public function updateProfil($id){

		$this->load->model('User_model');

		$this->form_validation->set_rules('fullname','fullname','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('gender','gender','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('writer/profil'); //Validasi gagal lari kesini
		}else { //Validasi Benar

			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = '1000000000';

        	$this->load->library('upload', $config);

        	if (!$this->upload->do_upload('ava')) {
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); // Tampil Error Ketika gambar gagal simpan
        	}else{

        		$path = "assets/uploads/"; // Tempat simpan gambar
            	$get_record = $this->User_model->getProfil($id); // Ambil data melalui ID
            	$file = $get_record[0]->ava; // Kolom Gambar
            	unlink($path . $file); //Menghapus gambar yang akan diganti dengan gmbr baru

        		$this->User_model->update($id); //Proses Update
        		redirect('home','refresh');
        	}

		}

	}

}

?>
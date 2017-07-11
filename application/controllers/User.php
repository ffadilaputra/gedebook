<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }else{
            redirect('login','refresh');
        }
	}

	public function index(){

		$this->load->view('home');

	}

	public function books(){
		$this->load->view('detail_book');
	}

	public function profile(){
		$this->load->model('User_model');
		$session_data = $this->session->userdata('logged_in');
		$data['profile'] = $this->User_model->getProfil($session_data['id_pengguna']);
		$this->load->view('user_profile',$data);
	}

	public function us($id){
		$this->load->model('User_model');
		$this->load->model('Books_model');

		$data['books']   = $this->Books_model->bookById($id);
		$data['profile'] = $this->User_model->getProfil($id);

		if($this->session->userdata('logged_in')){
			$session_data= $this->session->userdata('logged_in');

			if ($session_data['role'] === 'writer') {
				
    			$this->load->view('partials/header-penulis');
				$this->load->view('writer_profile_show',$data);
				$this->load->view('partials/footer');
    		}elseif($session_data['role'] === 'user'){
    			
    			$this->load->view('partials/header-user');
    			$this->load->view('writer_profile_show',$data);;
				$this->load->view('partials/footer');
    		}
		}else{
			redirect('login','refresh');
		}	
	}

	public function browse(){

		$this->load->model('Books_model');

		$data['book'] = $this->Books_model->bookAll();

		$this->load->view('user_browse',$data);
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
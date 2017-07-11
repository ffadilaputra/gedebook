<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model');
        $this->load->model('User_model');
        $this->load->helper('text');

    }

    public function index(){

        //Handle Header 
    	if ($this->session->userdata('logged_in')) {
    		$session_data = $this->session->userdata('logged_in');
    		if ($session_data['role'] === 'writer') {
    			$this->load->view('partials/header-penulis');
    		}elseif($session_data['role'] === 'user'){
    			$this->load->view('partials/header-user');
    		}
    	}else{
    		$this->load->view('partials/header');
    	}
	       	
        $data['uwer'] = $this->User_model->getWriter();
        $data['book'] = $this->Books_model->bookAll();
        
        $this->load->view('home', $data);    
    }

    public function buku(){
        // $data['buku'] = $this->Books_model->bookById($session_data['id_pengguna']);
        // $this->load->view('partials/header-user');
        // $this->load->view('writer_book',$data);        
        // $this->load->view('partials/footer');

        $session_data = $this->session->userdata('logged_in');
        $data['role'] = $session_data['role'];

        if ($session_data['role'] != 'user') { //Ini buat handle biar penulis doang yang bisa akses
                // redirect('writer','refresh');
        
        $data['buku'] = $this->Books_model->bookById($session_data['id_pengguna']);
        $this->load->view('writer_book',$data);
        }

    }



}


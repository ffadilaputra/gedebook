<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	       	$this->load->view('home');
    }

}


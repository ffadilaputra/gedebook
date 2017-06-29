<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){

    	if ($this->session->userdata('logged_in')) {
    		$this->load->view('partials/header-penulis');
    	}else{
    		$this->load->view('partials/header');
    	}

       $this->load->view('home');
    }

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('url','file');
	}

	public function index($id){
		$data['buku']=$this->Cetak_model->getIdBuku($id);
	
		$this->load->view('preview_buku', $data);
	}

	public function cetakBuku($id){
		$data['buku']=$this->Cetak_model->getIdBuku($id);
		$this->load->view('print_buku', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Sinopsis_Buku.pdf");
		unset($html);
		unset($dompdf);
	}

	public function cetakExcel()
 	{
 		$data = array( 'title' => 'Buku Excel',
		'buku' => $this->Cetak_model->view());
		$this->load->view('print_excel',$data);
 	}

	


}

/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */
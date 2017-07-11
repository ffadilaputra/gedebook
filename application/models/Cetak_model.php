<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak_model extends CI_Model {

	public function view(){
		$this->db->select("kd_buku, judul, penulis, img, penerbit, genre, sinopsis");
		$query = $this->db->get('buku');
		return $query->result();
	}

	public function getIdBuku($id){
		$this->db->where('kd_buku',$id);
		$query = $this->db->get('buku');
		return $query->result();
	}

	

	
	

}
/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */
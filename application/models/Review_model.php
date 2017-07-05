<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model{
	
	public function reply(){
		$data = array(
			'komentar' => $this->input->post('reply'),
			'id_pengguna' => $this->input->post('id_user'),
			'kd_buku' => $this->input->post('id_buku'),
			'comment_at' => date("h:i:sa")
		);
		$this->db->insert('comment',$data);
	}

	public function getComment($id_buku){

		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('pengguna','pengguna.id_pengguna = comment.id_pengguna','left');
		$query = $this->db->get();
		return $query->result();
	}

	public function delComment($id){
		$this->db->where('id_comment',$id);
		$delete = $this->db->delete('comment');
	}
	
}
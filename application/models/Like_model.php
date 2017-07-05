<?php 

class Like_model extends CI_Model {
 	
 	public function put_like(){

 		$data = array(
 			'id_pengguna' => $this->input->post('kd_pengguna'),
 			'fk_buku' => $this->input->post('kd_buku')
 		);

 		$this->db->insert('like', $data);
 	}

 	public function count_like(){
 		$query = $this->db->count_all('like');
 		return $query->result();
 	}
 	
 } 

<?php 

class Like_model extends CI_Model {
 	public function put_like(){

 		$data = array(
 			'id_pengguna' => $this->input->post('kd_pengguna'),
 			'fk_buku' => $this->input->post('kd_buku'),
 			'flag' => '1',
 			'at_date' => date("Y-m-d")
 		); 

 		$this->db->insert('like', $data);
 	}

 	public function filter($id_bulu){
	
		$this->db->where('fk_buku',$id_bulu);
		$this->db->where('flag','1');
		$query = $this->db->get('like');
				
			if($query->num_rows() == 1){
					return $query->result();
				}else{
					return false;
			}
	}

 	public function count_like($id_bulu){
 		$this->db->select('fk_buku');
		$this->db->from('like');
		$this->db->where('fk_buku' , $id_bulu);
		$uery = $this->db->count_all_results();
		return $uery;
 	}
 	
 } 

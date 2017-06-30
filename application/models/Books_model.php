<?php 

class Books_model extends CI_Model{

	public function publish(){

		$arr_genre = implode(',',$this->input->post('subjects')); // Inputan Array

		$data = array(
			'judul' => $this->input->post('title'),
			'penulis' => $this->input->post('writer'),
			'penerbit' => $this->input->post('publisher'),
			'genre' => $arr_genre,
			'sinopsis' => $this->input->post('synopsys'),
			'posted_by' => $this->input->post('posted_by')
		);

		$this->db->insert('buku',$data);

	}

	public function bookAll(){
		$query = $this->db->get('buku');
		return $query->result();
	}

	public function bookById($id_writer){
		
		$this->db->where('posted_by',$id_writer);
		$query = $this->db->get('buku');

		return $query->result();

	}
	
}

?>
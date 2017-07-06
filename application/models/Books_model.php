<?php
class Books_model extends CI_Model{

	public function publish(){
		
		$arr_genre = implode(',',$this->input->post('subjects')); // Inputan Array
		
		$data = array(
			'judul' => $this->input->post('title'),
			'penulis' => $this->input->post('writer'),
			'img' => $this->upload->data('file_name'),
			'penerbit' => $this->input->post('publisher'),
			'genre' => $arr_genre,
			'sinopsis' => $this->input->post('synopsys'),
			'posted_by' => $this->input->post('posted_by')
		);
		$this->db->insert('buku',$data);
	}

	public function bookAll(){
		
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('pengguna','pengguna.id_pengguna = buku.posted_by','left');
		$query = $this->db->get();
		return $query->result();
	}

	public function bookById($id_writer){
		
		$this->db->where('posted_by',$id_writer);
		$query = $this->db->get('buku');
		return $query->result();
	}
	
	public function detailById($id){
	
		$this->db->where('kd_buku',$id);
		$query = $this->db->get('buku');
				
			if($query->num_rows() == 1){
					return $query->result();
				}else{
					return false;
			}
	}

	public function UpdateById($id){
		$data=array
		(
			'judul' => $this->input->post('title'),
			'penulis' => $this->input->post('writer'),
			'img' => $this->upload->data('file_name'),
			'penerbit' => $this->input->post('publisher'),
			'genre' => $arr_genre,
			'sinopsis' => $this->input->post('synopsys'),
			'posted_by' => $this->input->post('posted_by')
		);
		$this->db->where('kd_buku',$id);
		$this->db->update('buku',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('kd_buku',$id);
		$this->db->delete('buku');
	}
	
}

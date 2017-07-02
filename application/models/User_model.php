<?php 

class User_model extends CI_Model {
		
		public function register(){

			$data = array(
				'nama' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'jk' => $this->input->post('gender'),
				'ava' => 'NULL',
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'role' => $this->input->post('role'),
			);
			$this->db->insert('pengguna',$data);
		}

		public function login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',md5($password));
			$query = $this->db->get('pengguna');
			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				return false;
			}

		}

		public function getProfil($id){
			$this->db->where('id_pengguna',$id);
			$query = $this->db->get('pengguna');
				
			if($query->num_rows() == 1){
				return $query->result();
			}else{
				return false;
			}	
		}

		public function update($id){

			$data = array(
				'nama' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'jk' => $this->input->post('gender'),
				'ava' => $this->upload->data('file_name'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'role' => $this->input->post('role'),
			);

			$this->db->where('id_pengguna',$id);
			$this->db->update('pengguna',$data);

		}	


}

?>
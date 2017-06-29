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
				'role' => 'user',
			);
			$this->db->insert('pengguna',$data);
		}

		public function login($username,$password){
		//$this->db->select('id_pengguna','username','password');
		//$this->db->from('pengguna');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('pengguna');
		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}

	}
}

?>
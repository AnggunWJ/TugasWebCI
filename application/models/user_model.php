<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->select('id,username,password,level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

	public function register()
	{
		$uname = $this->input->post('username');
			$pass = $this->input->post('password');

		$data = array(
			'username' => $uname, 'password' => MD5($pass), 'level' => 'user'
		);

		$this->db->insert('user', $data);
	}

	public function ambilUsername($username)
	{
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('username', $username);
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

}

?>

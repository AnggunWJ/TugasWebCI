<?php

class M_data_crud extends CI_Model{

	function Get_crud(){
		$query = $this->db->query('select * from blog');
		return $query->result();
	}
}
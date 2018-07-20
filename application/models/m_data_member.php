<?php

class M_data_member extends CI_Model{

	function getData(){
		$query = $this->db->query('select * from user');
		return $query->result();
	}

	 
  
  // Fungsi untuk menyimpan data ke database
  public function simpandData(){
    $data = array(
      'username'=>$this->input->post('username'),
      'password'=>MD5($this->input->post('password')),
      'level' => 'user',
    );
    
    $this->db->insert('user', $data);
  }

  public function getDatadetail($id){
  		$this->db->where('id',$id);
  	return	$this->db->get_where('user');
  }

  public function deleteData($id){
  	$this->db->where('id',$id);
  	$this->db->delete('user');
  }

  

 
}
	

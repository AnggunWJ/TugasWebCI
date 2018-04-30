<?php

class M_data_kategori extends CI_Model{

	function getData(){
		$query = $this->db->query('select * from kategori');
		return $query->result();
	}

	 
  
  // Fungsi untuk menyimpan data ke database
  public function simpandData(){
    $data = array(
      'kategori'=>$this->input->post('kategori'),
      'deskripsi'=>$this->input->post('deskripsi'),
    );
    
    $this->db->insert('kategori', $data);
  }

  public function getDatadetail($id){
  		$this->db->where('id_blog',$id);
  	return	$this->db->get_where('blog');
  }

  public function deleteData($id){
  	$this->db->where('id_kategori',$id);
  	$this->db->delete('kategori');
  }

  

 
}
	

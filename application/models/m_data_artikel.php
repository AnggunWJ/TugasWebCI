<?php 

class Artikel extends CI_Model{

	function Get_artikel(){
		$query = $this->db->query('select * from artikel');
		return $query;
	}
	function Get_single($id){
		$data = array();
  		$options = array('id_atk' => $id);
  		$Q = $this->db->get_where('artikel',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
      		}
  		$Q->free_result();
 		return $data;
	}
}
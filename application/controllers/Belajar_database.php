<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_database extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('action');
	}

	function user(){
		$data['data'] = $this->action->get_query_manual_array();
		$this->load->view('viewbelajar_database.php',$data);
	}

}
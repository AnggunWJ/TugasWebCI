<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('artikel');
	}

	public function index()
	{
		$data['data'] = $this->artikel->Get_artikel();
		$this->load->view('home_view',$data);
	}

	public function detail()
	{
		$data['data'] = $this->artikel->Get_single($this->uri->segment(3));
		$this->load->view('home_detail',$data);
	}
}


  

     
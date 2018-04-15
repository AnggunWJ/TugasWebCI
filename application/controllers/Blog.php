<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_crud');
	}

	public function index()
	{
		$data1['query'] = $this->m_data_crud->getData();
		$this->load->view('header');
		$this->load->view('blog', $data1);
	}

	public function detail(){
		$data1['query'] = $this->m_data_crud->getData();
		$this->load->view('header');
		$this->load->view('blog', $data1);
	}
}


  

     
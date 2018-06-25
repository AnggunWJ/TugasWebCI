<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_crud');
		if($this->session->userdata('masuk')){
			$sessData = $this->session->userdata('masuk');
			$data['username'] = $sessData['username'];
			$data['level'] = $sessData['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(!$this->acl->is_public($current_controller))
			 {
			 	if(!$this->acl->is_allowed($current_controller, $data['level']))
			 	{
			 		redirect('login/logout','refresh');
			 	}
			 }

		}else{
			redirect('login','refresh');
		}

	}

	public function index()
	{
		$sessData = $this->session->userdata('masuk');
		$data['username'] = $sessData['username'];
		
		$this->load->view('header',$data);
		$data1['query'] = $this->m_data_crud->getDataJoin();

		$this->load->view('blog', $data1);
	}

	public function detail(){
		$data1['query'] = $this->m_data_crud->getData();
		$this->load->view('header');
		$this->load->view('blog', $data1);
	}
}


  

     
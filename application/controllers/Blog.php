<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_crud');
		$this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database('ci');
        $config['base_url']=base_url()."/localhost/TugasWebCI/Blog";
            $config['total_rows']= $this->db->query("SELECT * FROM blog;")->num_rows();
            $config['per_page']=3;
        $config['num_links'] = 2;
            $config['uri_segment']=3;
            $this->pagination->initialize($config);
 
	}

	public function index()
	{
		$data1['query'] = $this->m_data_crud->getDataJoin();
		$this->load->view('header');
		$this->load->view('blog', $data1);
	}

	public function detail(){
		$data1['query'] = $this->m_data_crud->getData();
		$this->load->view('header');
		$this->load->view('blog', $data1);
	}
}


  

     
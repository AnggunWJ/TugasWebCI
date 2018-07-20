<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


		function __construct(){
		parent::__construct();
		$this->load->model('m_data_member');
	
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
		$data['level'] = $sessData['level'];
		$this->load->view('header',$data);
		$data1['query'] = $this->m_data_member->getData();
		$this->load->view('main_member', $data1);
	}

	public function tambah()
	{
		
		$this->load->view('header');
		$this->load->view('tambah_member');
		
		if(isset($_POST['simpan'])){
				$this->m_data_member->simpandData();
				redirect('/member','refresh');
			
	}
	}

	public function hapus($id){
		$this->m_data_member->deleteData($id);
		redirect('/member','refresh');
	}


}

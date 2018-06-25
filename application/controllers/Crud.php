<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

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
		$data1['query'] = $this->m_data_crud->getData();
		$this->load->view('header');
		$this->load->view('main_crud', $data1);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul','title', 'trim|required');
		$this->form_validation->set_rules('konten','konten', 'trim|required');
		$this->form_validation->set_rules('tanggal','tanggal', 'trim|required');
		$this->form_validation->set_rules('jenis','Jenis', 'trim|required');
		$this->form_validation->set_rules('sumber','Sumber', 'trim|required');
		$this->form_validation->set_rules('pengarang','Pengarang', 'trim|required');
		if($this->form_validation->run()==False){
			$data['kategori']  = $this->m_data_crud->getKategori();
		$this->load->view('header');
		$this->load->view('tambah_data',$data);
		}else{
			$upload = $this->m_data_crud->upload();
			if($upload['result'] == "success"){
				$this->m_data_crud->simpandData($upload);
				redirect('/crud','refresh');
			}
	}
	}

	public function hapus($id){
		$this->m_data_crud->deleteData($id);
		redirect('/crud','refresh');
	}

	public function edit($id){
		$data['detail'] = $this->m_data_crud->getDatadetail($id);
		$data['kategori']  = $this->m_data_crud->getKategori();
		$this->load->view('header');
		$this->load->view('edit_data',$data);
		if(isset($_POST['simpan'])){
			if($this->input->post('ganti')=="y"){
				$upload = $this->m_data_crud->upload();
			if($upload['result'] == "success"){
				$this->m_data_crud->updateData($id,$upload);
				redirect('/crud','refresh');
			}
			}else{
				$this->m_data_crud->updateDataOnly($id);
				redirect('/crud','refresh');
			}
		}
	}
}

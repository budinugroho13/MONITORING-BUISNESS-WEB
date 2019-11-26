<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaArusKasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keuangan');
		$this->load->model('Cabang');
	}

	public function index()
	{
		
		$owner = $this->session->userdata('owner');
		$data = $this->Cabang->getAllData($owner["idOwner"]);
		$this->load->view('Fixed/Header');
		$this->load->view('ArusKas/KelolaArusKas',['cabang' => $data]);
		$this->load->view('Fixed/Footer');

	}

	public function setSaranOwner()
	{
		# code...
		$id = $this->input->post('id');
		$saran = $this->input->post('saran');
		$data = array('saranOwner' => $saran);
		$this->Cabang->setSaran($data,$id);
		$this->session->set_flashdata('ok', '1');
		redirect('KelolaArusKasController');
		
	}


}

/* End of file KelolaArusKas.php */
/* Location: ./application/controllers/KelolaArusKas.php */
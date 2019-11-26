<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatHasilController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keuangan');
	}


	public function index()
	{

		
		$owner = $this->session->userdata('owner');
		$data = $this->Keuangan->getKeuntungan($owner['idOwner']);
		
		$this->load->view('Fixed/Header');
		$this->load->view('ArusKas/LihatHasil');
		$this->load->view('Fixed/Footer');		
	}

	public function getData()
	{
		$owner = $this->session->userdata('owner');
		$data = $this->Keuangan->getKeuntungan($owner['idOwner']);

		echo json_encode($data);

	}

}

/* End of file LihatHasilController.php */
/* Location: ./application/controllers/LihatHasilController.php */
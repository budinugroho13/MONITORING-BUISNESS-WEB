<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaArusKasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keuangan');
	}

	public function index()
	{
		$data = $this->Keuangan->getDataKeuangan()
		$this->load->view('Fixed/Header');
		$this->load->view('ArusKas/KelolaArusKas',"keuangan");
		$this->load->view('Fixed/Footer');

	}


}

/* End of file KelolaArusKas.php */
/* Location: ./application/controllers/KelolaArusKas.php */
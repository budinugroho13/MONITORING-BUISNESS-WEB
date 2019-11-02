<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaArusKasController extends CI_Controller {

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('ArusKas/KelolaArusKas');
		$this->load->view('Fixed/Footer');

	}

	public function getDataKeuangan()
	{
		
	}

}

/* End of file KelolaArusKas.php */
/* Location: ./application/controllers/KelolaArusKas.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputDataKeuanganController extends CI_Controller {

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Cabang/InputDataKeuangan');
		$this->load->view('Fixed/Footer');
	}

}

/* End of file InputDataKeuanganController.php */
/* Location: ./application/controllers/InputDataKeuanganController.php */
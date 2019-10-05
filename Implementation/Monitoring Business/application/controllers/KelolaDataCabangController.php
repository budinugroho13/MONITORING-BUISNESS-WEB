<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataCabangController extends CI_Controller {

	public function index()
	{
		$this->load->view('Cabang/KelolaDataCabang');
		$this->load->view('Fixed/Footer');		
	}

}

/* End of file KelolaDataCabangController.php */
/* Location: ./application/controllers/KelolaDataCabangController.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataOwnerController extends CI_Controller {

	public function index()
	{
		$this->load->view('Owner/KelolaDataOwner');
		$this->load->view('Fixed/Footer');		
	}

}

/* End of file KelolaDataOwnerController.php */
/* Location: ./application/controllers/KelolaDataOwnerController.php */
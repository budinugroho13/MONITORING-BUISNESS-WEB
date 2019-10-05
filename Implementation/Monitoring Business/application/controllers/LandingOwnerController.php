<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingOwnerController extends CI_Controller {

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Landing/LandingPageOwner');
		$this->load->view('Fixed/Footer');
	}

}

/* End of file LandingOwnerController.php */
/* Location: ./application/controllers/LandingOwnerController.php */
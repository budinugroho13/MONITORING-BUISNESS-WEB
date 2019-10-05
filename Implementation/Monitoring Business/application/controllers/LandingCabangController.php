<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingCabangController extends CI_Controller {

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Landing/LandingPageCabang');
		$this->load->view('Fixed/Footer');
	}

}

/* End of file LandingCabangController.php */
/* Location: ./application/controllers/LandingCabangController.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingOwnerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
	}

	public function index()
	{
		// $akun = $this->session->userdata('owner');
		// var_dump($akun['idOwner']);
		// exit();
		// $data = $this->Owner->getDataOwner($akun['username']);
		$this->load->view('Fixed/Header');
		$this->load->view('Landing/LandingPageOwner');
		$this->load->view('Fixed/Footer');
	}

}

/* End of file LandingOwnerController.php */
/* Location: ./application/controllers/LandingOwnerController.php */
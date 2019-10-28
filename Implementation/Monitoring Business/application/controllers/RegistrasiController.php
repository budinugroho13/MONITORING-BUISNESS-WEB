<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiController extends CI_Controller {

	public function index()
	{
			// $this->load->view('Fixed/Header');
			$this->load->view('Login/Registrasi');
			$this->load->view('Fixed/Footer');
	}

}

/* End of file RegistrasiController.php */
/* Location: ./application/controllers/RegistrasiController.php */
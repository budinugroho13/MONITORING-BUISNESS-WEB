<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatHasilController extends CI_Controller {

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('ArusKas/LihatHasil');
		$this->load->view('Fixed/Footer');		
	}

}

/* End of file LihatHasilController.php */
/* Location: ./application/controllers/LihatHasilController.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
	}

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Landing/LandingPage');
		$this->load->view('Fixed/Footer');
	}

	public function loginOwner()
	{
		# code...
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$dataAkun = $this->Owner->getDataOwner($username);
		// var_dump($dataAkun);
		// exit();
		if($pass == $dataAkun->password && isset($pass)){
			$dataLogin = array(
				'idOwner' => $dataAkun->idOwner,
				'username' => $dataAkun->username,
				'nama' => $dataAkun->nama
			);
			$this->session->set_userdata('owner', $dataLogin);
			redirect('LandingOwnerController');	
		}else{
			redirect('LandingController ');
		}
	}

	public function logoutOwner()
	{
		# code...
		$this->session->sess_destroy();
		redirect('LandingController');
	}

}

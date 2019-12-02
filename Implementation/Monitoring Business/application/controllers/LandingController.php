<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
		$this->load->model('Cabang');
	}

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Landing/LandingPage');
		$this->load->view('Fixed/Footer');
	}

	public function loginCabang()
	{
		# code...
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$dataAkun = $this->Cabang->getDataCabang($username);
		if($pass == $dataAkun->password && isset($pass)){
			$dataLogin = array(
				'username' => $dataAkun->username,
				'namaCabang' => $dataAkun->namaCabang,
				'idCabang' => $dataAkun->idCabang,
				'alamat' => $dataAkun->alamatCabang
			);
			$this->session->set_userdata('cabang', $dataLogin);
			$data = $this->session->userdata('cabang');
        	$cabang = $this->Cabang->getDataCabang($data["username"]);
			redirect('LandingCabangController');	
		}else{
			redirect('LandingController ');
		}
	}

	public function loginOwner()
	{
		# code...
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$dataAkun = $this->Owner->getDataOwner($username);
		if($pass == $dataAkun->password && isset($pass)){
			$dataLogin = array(
				'idOwner' => $dataAkun->idOwner,
				'username' => $dataAkun->username,
				'nama' => $dataAkun->nama,
				'email' => $dataAkun->email,
				'alamat' => $dataAkun->alamat,
				'jenis_bisnis' => $dataAkun->jenis_bisnis,
				'nama_bisnis' => $dataAkun->nama_bisnis,
				'no_telp' => $dataAkun->no_telpon,
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

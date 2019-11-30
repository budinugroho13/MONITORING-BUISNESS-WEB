<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataCabangController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cabang');
		$this->load->model('Keuangan');
		$this->load->model('Aruskas');
		$this->load->model('Labarugi');
	}

	public function index()
	{
		if (!empty($this->session->userdata('owner'))) {
			$owner = $this->session->userdata('owner');
			$x = $this->Cabang->getAllData($owner['idOwner']);
			$this->load->view('Cabang/KelolaDataCabang',['cabang' => $x]);
			$this->load->view('Fixed/Footer');		
		}
	}

	public function add()
	{

		$this->form_validation->set_rules('name', 'Nama Cabang', 'required|max_length[100]');
		$this->form_validation->set_rules('lokasi', 'Lokasi Cabang', 'required|max_length[100]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[8]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$owner = $this->session->userdata('owner');
			$data = array(
				'namaCabang' => $this->input->post('name'),
				'alamatCabang' => $this->input->post('lokasi'),
				'password' => $this->input->post('pass'),
				'username' => $this->input->post('username'),
				'idOwner' => $owner['idOwner']
			);

			// $emailTujuan = $this->input->post('email');
			// $this->sendEmail($emailTujuan);

			$x = $this->Cabang->getDataCabang($data['username']);
			if(empty($x)) {
				$this->Cabang->insertData($data);
				$this->session->set_flashdata('CabangSukses', 'Berhasil Dibuat');
				redirect('KelolaDataCabangController');
				# code...
			}else{
				$this->session->set_flashdata('CabangGagal', 'Username Telah Terpakai');
				redirect('KelolaDataCabangController');
			}

		}else{
			$salah =  validation_errors();
			$this->session->set_flashdata('Cabang', $salah);
			redirect('KelolaDataCabangController');
		}
	}
	
	public function Edit($idCabang = null)
	{
		$this->form_validation->set_rules('name', 'Nama Cabang', 'required|max_length[100]');
		$this->form_validation->set_rules('lokasi', 'Lokasi Cabang', 'required|max_length[100]');
		if ($this->form_validation->run() == TRUE) {

			$idCabang = $this->input->post('id');
			$owner = $this->session->userdata('owner');
			$data = array(
				'namaCabang' => $this->input->post('name'),
				'alamatCabang' => $this->input->post('lokasi'),
			);
			
			$this->Cabang->editData($data,$idCabang);
			$this->session->set_flashdata('CabangSukses', 'Berhasil DiEdit');
			redirect('KelolaDataCabangController');
		
		}

	}

	public function hapus($idCabang) {


		$idKeuangan = $this->Keuangan->getIdKeuangan($idCabang);

		foreach ($idKeuangan as $id) {
			# code...
			$this->Aruskas->hapusData($id->idKeuangan);
			$this->Labarugi->hapusData($id->idKeuangan);
		}
			
		$this->Cabang->hapusDataCabang($idCabang);
		redirect('KelolaDataCabangController');

	}
}

/* End of file KelolaDataCabangController.php */
/* Location: ./application/controllers/KelolaDataCabangController.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataOwnerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
		$this->load->model('Cabang');
	}

	public function index()
	{
		$this->load->view('Owner/KelolaDataOwner');
		$this->load->view('Fixed/Footer');
	}
	public function editData()
	{
		# code...

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('oldPass', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('newPass', 'Confirm Password', 'required|min_length[8]');
		$this->form_validation->set_rules('hp', 'Handphone', 'required|alpha_numeric|min_length[11]');
		$this->form_validation->set_rules('nb', 'Nama Bisnis', 'required');
		$this->form_validation->set_rules('jb', 'Jenis Bisnis', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nama' => $this->input->post('nama'),
				'password' => $this->input->post('newPass'),
				'email' => $this->input->post('email'),
				'nama_bisnis' => $this->input->post('nb'),
				'jenis_bisnis' => $this->input->post('jb'),
				'no_telpon' => $this->input->post('hp'),
				'alamat' => $this->input->post('alamat'),
			);
			$id = $this->input->post('id');

			$this->Owner->editOwner($id,$data);
			$this->session->set_flashdata('owner_sukses', 'Berhasil Diubah');
			redirect('KelolaDataOwnerController');
		}else{
			// $this->session->flashdata("");
			$this->session->set_flashdata('owner_gagal', 'Gagal Diubah');
			redirect('KelolaDataOwnerController');
		}
	}

}

/* End of file KelolaDataOwnerController.php */
/* Location: ./application/controllers/KelolaDataOwnerController.php */
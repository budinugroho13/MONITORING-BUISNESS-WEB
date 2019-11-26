<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Owner');
	}

	public function index()
	{
			$this->load->view('Login/Registrasi');
			$this->load->view('Fixed/Footer');
	}

	public function add()
	{

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[pass]|min_length[8]');
		$this->form_validation->set_rules('hp', 'Handphone', 'required|alpha_numeric');
		$this->form_validation->set_rules('nb', 'Nama Bisnis', 'required');
		$this->form_validation->set_rules('jb', 'Jenis Bisnis', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
 
		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array(
				'nama' => $this->input->post('name'),
				'password' => $this->input->post('pass'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('email'),
				'nama_bisnis' => $this->input->post('nb'),
				'jenis_bisnis' => $this->input->post('jb'),
				'no_telpon' => $this->input->post('alamat'),
			);

			$x = $this->Owner->getDataOwner($data['username']);
			
			if(empty($x)) {
				$this->Owner->insertData($data);
				$this->session->set_flashdata('sukses','Berhasil');
				redirect('LandingController');
			}else{
				$this->session->set_flashdata('hasil', 'Username Telah Terpakai');
				redirect('RegistrasiController');
			}

		}else{
			$salah =  validation_errors();
			$this->session->set_flashdata('hasil', $salah);
			redirect('RegistrasiController');
		}
	}

}

/* End of file RegistrasiController.php */
/* Location: ./application/controllers/RegistrasiController.php */
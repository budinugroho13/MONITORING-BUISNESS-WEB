<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataCabangController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Cabang');
	}

	public function index()
	{
		if (!empty($this->session->userdata('owner'))) {
			# code...
			$owner = $this->session->userdata('owner');
			$x = $this->Cabang->getAllData($owner['idOwner']);
			$this->load->view('Cabang/KelolaDataCabang',['cabang' => $x]);
			$this->load->view('Fixed/Footer');		
		}
	}

	// public function sendEmail($tujuan)
	// {
	// 	# code...
	// 	$from_email = "monitoring.businesss@gmail.com"; 
         

 //         $config = array(
 //                'protocol' => 'smtp',
 //                'smtp_host' => 'ssl://smtp.googlemail.com',
 //                'smtp_port' => '587',
 //                'smtp_user' => $from_email,
 //                'smtp_pass' => 'bud1j3l3k',
 //                'mailtype'  => 'html', 
 //                'charset'   => 'iso-8859-1'
 //        );

 //        $this->load->library('email', $config);
 //        $this->email->set_newline("\r\n");   

 //         $this->email->from($from_email, '’Azmi’'); 
 //         $this->email->to($tujuan);
 //         $this->email->subject('Test Pengiriman Email'); 
 //         $this->email->message('VOba'); 

 //         //Send mail 
 //         if($this->email->send()){
 //                // $this->session->set_flashdata("notif","Email berhasil terkirim."); 
 //         		var_dump("Suksss");
 //         }else {
 //         		var_dump("Sukssadsas");
 //                // $this->session->set_flashdata("notif","Email gagal dikirim."); 
 //                // $this->load->view(‘home’);/ 
 //         } 
 //         exit();
	

	// 	}

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

}

/* End of file KelolaDataCabangController.php */
/* Location: ./application/controllers/KelolaDataCabangController.php */
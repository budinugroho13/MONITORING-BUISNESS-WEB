<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputDataKeuanganController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
	}

	public function index()
	{
		$this->load->view('Fixed/Header');
		$this->load->view('Cabang/InputDataKeuangan');
		$this->load->view('Fixed/Footer');
	}

	 public function add()
        {
                $config['upload_path']          = './assets/datakeuangan';
                $config['allowed_types']        = 'csv';
                $config['max_size']             = 100;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('filename'))
                {
     				$this->session->set_flashdata('not', 1);
     				redirect('InputDataKeuanganController');
                }
                else
                {
                	$file = $this->upload->data();
     				$this->session->set_flashdata('upload', 1);
     				redirect('InputDataKeuanganController');  						
                }
        }

}

/* End of file InputDataKeuanganController.php */
/* Location: ./application/controllers/InputDataKeuanganController.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputDataKeuanganController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner');
		$this->load->model('Cabang');
		$this->load->model('Keuangan');
        $this->load->model('Aruskas');
        $this->load->model('Labarugi');
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
                	$data = $this->session->userdata('cabang');
                	$cabang = $this->Cabang->getDataCabang($data["username"]);
                	$file = $this->upload->data();
                	$dataKeuangan = array(
						'idCabang' => $cabang->idCabang,
						'file_keuangan' => $file["file_name"]
					);

                    $insert = $this->Keuangan->insert($dataKeuangan);
                    $idKeuangan = $this->Keuangan->getDataKeuanganTerbaru($dataKeuangan["idCabang"]);
                    $this->parsingDataKeuangan($file["file_name"],$idKeuangan[0]->idKeuangan);
                
                    $this->session->set_flashdata('upload', 1);
     				redirect('InputDataKeuanganController');  						
                }
    }

    public function parsingDataKeuangan($filename,$idKeuangan)
    {
        $the_big_array = []; 

        if (($h = fopen("./assets/datakeuangan/{$filename}", "r")) !== FALSE) 
        {
          while (($data = fgetcsv($h, 1000, ";")) !== FALSE) 
          {
            $the_big_array[] = $data;       
          }
          fclose($h);
        }

        $hutang = (int)$the_big_array[1][0];
        $piutang = (int)$the_big_array[1][1];
        $pendapatan = (int)$the_big_array[1][2];
        $biaya = (int)$the_big_array[1][3];
        $kas = ($pendapatan + $piutang) - ($hutang + $biaya); 

        $labaRugi = $pendapatan - ($hutang + $bebanBiaya);

        $keuntungan = array(
                'keuntungan' => $labaRugi/0.01,
                'idKeuangan' => $idKeuangan
                 ); 

        $dataKas = array(
                'hutang' => $hutang,
                'piutang' => $piutang,
                'pendapatan' => $pendapatan,
                'bebanBiaya' => $biaya,
                'idKeuangan' => $idKeuangan,
                'kas' => $kas
        );

        $keuangan = array(
                    'Aruskas' => $dataKas, 
                    'Labarugi' => $keuntungan
                );

        $insert = $this->Aruskas->insertData($dataKas);
        $insert = $this->Labarugi->insertData($keuntungan);
        
        return $keuangan;
    }

}












/* End of file InputDataKeuanganController.php */
/* Location: ./application/controllers/InputDataKeuanganController.php */
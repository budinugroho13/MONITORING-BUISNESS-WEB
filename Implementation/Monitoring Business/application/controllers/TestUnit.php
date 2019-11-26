<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestUnit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');	
		//Do your magic here
	}

	private function loadModelAndLibrary(){

		$x = is_null($this->load->library('form_validation'));
		$y = is_null($this->load->model('Owner'));
		if(($x == false) && ($y == false)){
			return true;
		}else{
			return false;
		}
	}

	private function redirectRegistracionPage()
	{
		 $x = base_url("Login/Registrasi");
		 $y = base_url("Fixed/Footer");

		 $temp = [$x,$y];
		 return $temp;
	}


	private function add($data)
	{
		if((strlen($data["nama"])<=100) && ($data["email"] != "") && (strlen($data["pass"]) >= 8) && ($data["confpass"] == $data["pass"]) && (is_numeric($data["hp"])) && ($data["nmbisnis"] != "") && ($data["jnbisnis"] != "") && ($data["alamat"] != "")){
			
			$databaseOwner = "azmi@gmail.com";
			if($databaseOwner != $data["email"]) {
				return True;
			}else{
				return False;
			}		
		}else{
			return False;
		}
	}

	public function index()
	{
		$testing = $this->loadModelAndLibrary();
		$expected_result = True;
		$label = "Pengecekan isi dari Database Owner dan Libary Form Validation";
		echo $this->unit->run($testing,$expected_result,$label);
		
		$testing = $this->redirectRegistracionPage();
		$expected_result = "http://localhost/mb/Login/Registrasi";
		$label = "Testing Redirect Ke Halaman Registrasi";
		echo $this->unit->run($testing[0],$expected_result,$label);
		
		$data = array(
			'nama' => "Azmi",
			'email' => "azmqi@gmail.com",
			'pass' => "azmiazmi",
			'confpass' => "azmiazmi",
			'hp' => "0812002190",
			'nmbisnis' => "Azmi",
			'jnbisnis' => "Azmi",
			'alamat' => "Azmi",
			 );

		$testing = $this->add($data);
		$expected_result = True;
		$label = "Pengecekan Inputan User";
		echo $this->unit->run($testing,$expected_result,$label);





	}	

}

/* End of file TestUnit.php */
/* Location: ./application/controllers/TestUnit.php */
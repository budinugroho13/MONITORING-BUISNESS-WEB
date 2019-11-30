<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labarugi extends CI_Model {

	public function insertData($data)
	{
		$this->db->insert('Labarugi', $data);
	}

	public function hapusData($idKeuangan)
	{
		$this->db->where('idKeuangan', $idKeuangan);
		$this->db->delete('Labarugi');
		return;
		
	}	

}

/* End of file Labarugi.php */
/* Location: ./application/models/Labarugi.php */
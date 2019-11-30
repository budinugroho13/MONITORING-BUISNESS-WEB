<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aruskas extends CI_Model {
	

	public function getData()
	{
		# code...
		$this->db->select('*');
        $this->db->from('aruskas');
        $query = $this->db->get();
        return $query->result();
	}

	public function insertData($data)
	{
		$this->db->insert('aruskas', $data);	
	}	

	public function hapusData($idKeuangan)
	{
		$this->db->where('idKeuangan', $idKeuangan);
		$this->db->delete('aruskas');
		return;
	}

}

/* End of file Aruskas.php */
/* Location: ./application/models/Aruskas.php */
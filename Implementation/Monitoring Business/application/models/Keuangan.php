<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Model {

	public function insert($data)
	{
		return $this->db->insert('Keuangan', $data);
		# code...
	}

	public function getData($idCabang)
	{
		# code...
		$this->db->select('cabang.namaCabang,keuangan.file_keuangan');
		$this->db->from('keuangan');
		$this->db->join('cabang', 'cabang.idCabang = keuangan.idCabang');
		$this->db->where('cabang.idCabang', $idCabang);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Keuangan.php */
/* Location: ./application/models/Keuangan.php */
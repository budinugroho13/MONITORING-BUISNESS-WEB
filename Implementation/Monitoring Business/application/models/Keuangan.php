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

	public function getDataKeuanganTerbaru($idCabang)
	{
		# code...
		$this->db->select('idKeuangan');
		$this->db->from('keuangan');
		$this->db->where('idCabang', $idCabang);
		$this->db->order_by('tanggal_upload', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
		// SELECT * FROM my_table -- standard stuff
		// WHERE user_2 = 22 -- predicate
		// ORDER BY timestamp DESC -- this means highest number (most recent) first
		// LIMIT 1; -- just want the first row
	

	}

}

/* End of file Keuangan.php */
/* Location: ./application/models/Keuangan.php */
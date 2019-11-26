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
	}

	public function getDataKeuangan()
	{
		# code...
		// ngambil keuangan terbaru
		$this->db->select('*');
		$this->db->from('keuangan');
		$this->db->join('aruskas', 'aruskas.idKeuangan = keuangan.idKeuangan');
		$this->db->join('labarugi', 'keuangan.idKeuangan = labarugi.idKeuangan');
		$this->db->order_by('keuangan.tanggal_upload', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getKeuntungan($idOwner)
	{
		# code...
		$this->db->select('cabang.namaCabang,labarugi.keuntungan');
		$this->db->from('keuangan');
		$this->db->join('cabang','cabang.idCabang = keuangan.idCabang');
		$this->db->join('owner','owner.idOwner = cabang.idOwner');
		$this->db->join('labarugi', 'keuangan.idKeuangan = labarugi.idKeuangan');
		$this->db->where('owner.idOwner', $idOwner);
		$query = $this->db->get();
		return $query->result();
	}
	
	// public function getDataKeuanganOwner($idOwner)
	// {
	// 	# code...
	// 	$this->db->select('*');
	// 	$this->db->from('keuangan');
	// 	$this->db->join('cabang','cabang.idCabang = keuangan.idCabang');
	// 	$this->db->join('owner','owner.idOwner = cabang.idOwner');
	// 	$this->db->join('labarugi', 'keuangan.idKeuangan = labarugi.idKeuangan');
	// 	$this->db->where('owner.idOwner', $idOwner);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }




}

/* End of file Keuangan.php */
/* Location: ./application/models/Keuangan.php */
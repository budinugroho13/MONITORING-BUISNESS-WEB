<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Model {

	public function getDataCabang($uname)
	{
		# code...
		$this->db->select('*');
        $this->db->where('username',$uname);
        $this->db->from('cabang');
        $query = $this->db->get();
        return $query->row();
	}


	public function getAllData($idOwner)
	{
		$this->db->select('owner.jenis_bisnis,idCabang,namaCabang,alamatCabang');
		$this->db->from('cabang');
		$this->db->join('owner', 'cabang.idOwner = owner.idOwner');
		$this->db->where('owner.idOwner', $idOwner);
		$query = $this->db->get();
		return $query->result();
		# code...
	}	

	public function setSaran($data,$id)
	{
		# code...
		$this->db->where('idCabang', $id);
		$this->db->update('cabang', $data);
	}

	public function getSemuaIdCabang($idOwner)
	{
		$this->db->select('idCabang');
		$this->db->from('cabang');
		$this->db->join('owner', 'cabang.idOwner = owner.idOwner');
		$this->db->where('owner.idOwner', $idOwner);
		$query = $this->db->get();
		return $query->result();
		# code...
	}

	public function insertData($data)
	{
		# code...
		$this->db->insert('cabang', $data);
		return;
	}
	

}

/* End of file Model.php */
/* Location: ./application/models/Model.php */
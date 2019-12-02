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

	public function getAllDataCabang($idCabang)
	{
		$this->db->select('*');
		$this->db->from('cabang');
		$this->db->join('owner', 'owner.idOwner = cabang.idCabang');
		$this->db->where('idCabang', $idCabang);
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
// 	$where = "name='Joe' AND status='boss' OR status='active'";
// $this->db->where($where);

	public function insertData($data)
	{
		# code...
		$this->db->insert('cabang', $data);
		return;
	}
	

	public function editData($data,$idCabang)
	{
		$this->db->where('idCabang',$idCabang);
		$this->db->update('cabang',$data);
		return;
	} 

	public function hapusDataCabang($idCabang){
	

		$tables = array('keuangan','cabang');
		$this->db->where('idCabang', $idCabang);
		$this->db->delete($tables);
		return;


	}

}

/* End of file Model.php */
/* Location: ./application/models/Model.php */
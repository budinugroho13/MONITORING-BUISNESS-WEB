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

	public function insertData($data)
	{
		# code...
		$this->db->insert('cabang', $data);
		return;
	}
	

}

/* End of file Model.php */
/* Location: ./application/models/Model.php */
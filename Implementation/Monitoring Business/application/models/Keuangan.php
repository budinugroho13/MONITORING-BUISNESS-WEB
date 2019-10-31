<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Model {

	public function insert($data)
	{
		return $this->db->insert('Keuangan', $data);
		# code...
	}
}

/* End of file Keuangan.php */
/* Location: ./application/models/Keuangan.php */
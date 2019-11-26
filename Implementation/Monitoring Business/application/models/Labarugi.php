<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labarugi extends CI_Model {

	public function insertData($data)
	{
		$this->db->insert('Labarugi', $data);
	}	

}

/* End of file Labarugi.php */
/* Location: ./application/models/Labarugi.php */
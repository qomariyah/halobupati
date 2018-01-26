<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfront extends CI_Model {

	public function register($data){
		$this->db->insert('tb_user', $data);
	}

}

/* End of file Mfront.php */
/* Location: ./application/models/Mfront.php */
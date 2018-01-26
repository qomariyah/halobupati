<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mopd extends CI_Model {

	public function read(){
		$this->db->order_by('id_opd', 'asc');
		return $this->db->get('tb_opd')->result();
	}

}

/* End of file Minstansi.php */
/* Location: ./application/models/Minstansi.php */
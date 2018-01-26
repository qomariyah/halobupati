<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msektor extends CI_Model {

	function read(){
		$this->db->join('tb_admin', 'tb_sektor.id_admin = tb_admin.id_admin');
		$this->db->order_by('sektor', 'asc');
		return $this->db->get('tb_sektor')->result();
	}

	function create($data){
		$this->db->insert('tb_sektor', $data);
	}

	function update($data){
		$this->db->update('tb_sektor', $data);
	}

	function getSektor($id){
		$this->db->where('id_sektor', $id);
		return $this->db->get('tb_sektor')->result();
	}

	function delete($id){
		$this->db->where('id_sektor', $id);
		$this->db->delete('tb_sektor');
	}

}

/* End of file Msektor.php */
/* Location: ./application/models/Msektor.php */
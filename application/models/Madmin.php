<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function read(){
        $this->db->order_by('id_admin', 'desc');
        return $this->db->get('tb_admin')->result();
    }

    function create($data){
    	return $this->db->insert('tb_admin', $data);
    }

    function delete($id){
    	$this->db->where('id_admin', $id);
        return $this->db->delete('tb_admin');
    }

    function update($id, $data){
    	$this->db->where('id_admin', $id);
        return $this->db->update('tb_admin', $data);
    }

    function getadmin($id){
    	$this->db->where('id_admin', $id);
        return $this->db->get('tb_admin')->result();
    }

    function createID(){
    	$this->db->order_by('id_admin', 'desc');
        return $this->db->get('tb_admin')->result();
    }

    function aktifkan($id){
    	$data = array(
            'aktif' => '1'
        );
        $this->db->where('id_admin', $id); //where
        return $this->db->update('tb_admin', $data);
    }
    function nonaktifkan($id){
    	$data = array(
            'aktif' => '0'
        );
        $this->db->where('id_admin', $id); //where
        return $this->db->update('tb_admin', $data);
    }

}

/* End of file Mhbadmin.php */
/* Location: ./application/models/Mhbadmin.php */
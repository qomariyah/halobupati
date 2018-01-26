<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hbadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('madmin');
        $this->load->model('mopd');
        $this->load->model('msektor');
        $this->load->model('maktivitas');

        if($this->session->userdata('status') != 'loginberhasil'){
            redirect(base_url('sysadminlogin/oauth'));
        }
	}

    function elfinder_init(){
        $this->load->helper('general_helper');
        $opts = initialize_elfinder();
        $this->load->library('elfinder_lib', $opts);   
    }

    public function filemanager(){
        $data['title'] = "File Manager";
        $data['content'] = "filemanager";
        $data['breadcrumb'] = "File Manager";
        $data['Filemanager'] = "active";
        $this->load->view('view_admin/hbadmin', $data);
    }

	public function index(){
		$data['title'] = "Admin Halo Bupati";
        $data['content'] = "dashboard";
        $data['breadcrumb'] = "Dashboard";
        $data['Dashboard'] = "active";
        $data['aktivitas'] = $this->maktivitas->read();
        $data['jml_aktivitas'] = $this->maktivitas->read();
		$this->load->view('view_admin/hbadmin', $data);
	}

	public function administrator(){
		$data['title'] = "Data Adimistrator - Admin Halo Bupati";
        $data['content'] = "administrator";
        $data['breadcrumb'] = "Data Administrator";
        $data['Administrator'] = "active";
        $data['data_administrator'] = "active";
        $data['data_admin'] = $this->madmin->read();
		$this->load->view('view_admin/hbadmin', $data);
	}

	public function tambah_administrator(){
		$data['title'] = "Tambah Data Adimistrator - Admin Halo Bupati";
        $data['content'] = "tambah-administrator";
        $data['breadcrumb'] = "Tambah Data Adimistrator";
        $data['Administrator'] = "active";
        $data['tambah_administrator'] = "active";
        $data['data_id'] = $this->madmin->createID();
		$this->load->view('view_admin/hbadmin', $data);
	}
	public function edit_admin($id){
		$data['title'] = "Edit Data Adimistrator - Admin Halo Bupati";
        $data['content'] = "edit-administrator";
        $data['breadcrumb'] = "Edit Data Adimistrator";
        $data['Administrator'] = "active";
        $data['data_admin'] = $this->madmin->getadmin($id);
		$this->load->view('view_admin/hbadmin', $data);
	}

	public function create_admin(){
		$nm_file = "admin_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/administrator/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);
        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/administrator/source/'.$data_upload['file_name'],
                    'new_image' => './files/administrator/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );
                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();
                $data = array(
                    'id_admin' => $this->input->post('id_admin'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('pass'),
                    'no_telepon' => $this->input->post('no_telepon'),
                    'email' => $this->input->post('email'),
                    'foto' => $data_upload['file_name'],
                    'thumbnail' => $nm_file.'_thumb'.$data_upload['file_ext'],
                    'alamat' => $this->input->post('alamat'),
                    'nama_admin' => $this->input->post('nama_admin'),
                    'level' => $this->input->post('level'),
                    'aktif' => '0'
                );
                $this->madmin->create($data);
                redirect('hbadmin/administrator/tambah_berhasil');
            }
        }
	}

	public function update_admin(){
		$nm_file = "admin_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/administrator/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);
        if(!empty($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/administrator/source/'.$data_upload['file_name'],
                    'new_image' => './files/administrator/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );
                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('pass'),
                    'no_telepon' => $this->input->post('no_telepon'),
                    'email' => $this->input->post('email'),
                    'foto' => $data_upload['file_name'],
                    'thumbnail' => $nm_file.'_thumb'.$data_upload['file_ext'],
                    'alamat' => $this->input->post('alamat'),
                    'nama_admin' => $this->input->post('nama_admin'),
                    'level' => $this->input->post('level')
                );
                $id = $this->input->post('id_admin');
                $this->madmin->update($id, $data);
				$foto = $this->input->post('ft');
				$thumb = $this->input->post('tm');
				$path1 = "./files/administrator/source/".$foto;
				$path2 = "./files/administrator/thumb/".$thumb;
				unlink($path1);
				unlink($path2);
                redirect('hbadmin/administrator/tambah_berhasil');
            }
        }else{
        	$data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('pass'),
                'no_telepon' => $this->input->post('no_telepon'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'nama_admin' => $this->input->post('nama_admin'),
                'level' => $this->input->post('level')
                );
                $id = $this->input->post('id_admin');
                $this->madmin->update($id, $data);
                redirect('hbadmin/administrator/tambah_berhasil');
        }
	}

	public function aktifkan_admin($id){
		$this->madmin->aktifkan($id);
		redirect('hbadmin/administrator/berhasil');
	}
	public function nonaktifkan_admin($id){
		$this->madmin->nonaktifkan($id);
		redirect('hbadmin/administrator/berhasil');
	}

	public function delete_admin($id){
		$foto = $this->uri->segment(4);
		$thumb = $this->uri->segment(5);
		$path1 = "./files/administrator/source/".$foto;
		$path2 = "./files/administrator/thumb/".$thumb;
		unlink($path1);
		unlink($path2);
		$this->madmin->delete($id);
		redirect('hbadmin/administrator/berhasil');
	}

    public function opd(){
        $data['title'] = "Data OPD - Admin Halo Bupati";
        $data['content'] = "opd";
        $data['breadcrumb'] = "Data OPD";
        $data['dopd'] = "active";
        $data['opd'] = "active";
        $data['data_opd'] = $this->mopd->read();
        $this->load->view('view_admin/hbadmin', $data);
    }

    public function tambahopd(){
        $data['title'] = "Tambah Data OPD - Admin Halo Bupati";
        $data['content'] = "tambah-opd";
        $data['breadcrumb'] = "Tambah Data OPD";
        $data['opd'] = "active";
        $data['topd'] = "active";
        $this->load->view('view_admin/hbadmin', $data);
    }

    public function create_opd(){
        $nm_file = "opd_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/opd/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);
        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/opd/source/'.$data_upload['file_name'],
                    'new_image' => './files/opd/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );
                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();
                $data = array(
                    'id_opd' => $this->input->post('id_opd'),
                    'nama_opd' => $this->input->post('nama_opd'),
                    'singkatan' => $this->input->post('singkatan_opd'),
                    'nama_kepala' => $this->input->post('kepala_opd'),
                    'alamat' => $this->input->post('alamat_opd'),
                    'foto' => $data_upload['file_name'],
                    'thumbnail' => $nm_file.'_thumb'.$data_upload['file_ext'],
                    'telp_opd' => $this->input->post('no_telp'),
                    'email' => $this->input->post('email_opd'),
                    'fax' => $this->input->post('fax_opd'),
                    'website' => $this->input->post('website_opd'),
                    'id_admin' => $this->input->post('id_admin')
                );
                $this->madmin->create($data);
                redirect('hbadmin/administrator/tambah_berhasil');
            }
        }
    }

	public function aduan_hari_ini(){
		$data['title'] = "Data Aduan Hari Ini - Admin Halo Bupati";
        $data['content'] = "aduan-hari-ini";
        $data['breadcrumb'] = "Data Aduan Hari Ini";
        $data['Aduan'] = "active";
        $data['aduan_hari_ini'] = "active";
		$this->load->view('view_admin/hbadmin', $data);
	}

    public function sektor(){
        $data['title'] = "Data Sektor - Admin Halo Bupati";
        $data['content'] = "sektor";
        $data['breadcrumb'] = "Data Sektor";
        $data['Sektor'] = "active";
        $data['ssektor'] = "active";
        $data['data_sektor'] = $this->msektor->read();
        $this->load->view('view_admin/hbadmin', $data);
    }

    public function tambahsektor(){
        $data['title'] = "Tambah Data Sektor - Admin Halo Bupati";
        $data['content'] = "tambah-sektor";
        $data['breadcrumb'] = "Tambah Data Sektor";
        $data['Sektor'] = "active";
        $data['tsektor'] = "active";
        $data['data_sektor'] = $this->msektor->read();
        $this->load->view('view_admin/hbadmin', $data);
    }

    public function editsektor($id){
        $data['title'] = "Edit Data Sektor - Admin Halo Bupati";
        $data['content'] = "edit-sektor";
        $data['breadcrumb'] = "Tambah Data Sektor";
        $data['Sektor'] = "active";
        $data['tsektor'] = "active";
        $data['data_sektor'] = $this->msektor->getSektor($id);
        $this->load->view('view_admin/hbadmin', $data);
    }

    public function create_sektor(){
        $data = array(
            'id_sektor' => '',
            'sektor' => $this->input->post('sektor'),
            'id_admin' => $this->session->userdata('id_admin')
        );
        $this->msektor->create($data);
        $aktivitas = array(
            'id_aktivitas' => '',
            'id_admin' => $this->session->userdata('id_admin'),
            'aktivitas' => 'Membuat sektor baru bernama '.$this->input->post('sektor')
        );
        $this->maktivitas->create($aktivitas);
        redirect('hbadmin/sektor/tambah-berhasil');
    }

    public function update_sektor(){
        $data = array(
            'id_sektor' => $this->input->post('id'),
            'sektor' => $this->input->post('sektor'),
            'id_admin' => $this->session->userdata('id_admin')
        );
        $this->msektor->update($data);
        $aktivitas = array(
            'id_aktivitas' => '',
            'id_admin' => $this->session->userdata('id_admin'),
            'aktivitas' => 'Mengubah sektor '.str_replace("%20", " ", $this->input->post('sektor_lama')).' menjadi '.$this->input->post('sektor')
        );
        $this->maktivitas->create($aktivitas);
        redirect('hbadmin/sektor/edit-berhasil');
    }

    public function delete_sektor($id){
        $notif['status'] = 'sukses';
        $this->msektor->delete($id);
        $aktivitas = array(
            'id_aktivitas' => '',
            'id_admin' => $this->session->userdata('id_admin'),
            'aktivitas' => 'Menghapus sektor '.$this->uri->segment(4)
        );
        $this->maktivitas->create($aktivitas);
        redirect('hbadmin/sektor/hapus-berhasil');
    }

    function logout() {
        $data_session_unset = array(
                'id_admin',
                'nama_admin',
                'level',
                'foto',
                'thumb',
                'email',
                'status'
            );
        $this->session->unset_userdata($data_session_unset);
        redirect(base_url('sysadminlogin'));
    }

}

/* End of file Hbadmin.php */
/* Location: ./application/controllers/Hbadmin.php */
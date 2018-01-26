<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hb extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mfront');
		$this->load->model('mopd');
		
	}

	public function create_captcha(){
        $option = array (
            'img_path'		=> './files/captcha/',
            'img_url'		=> base_url('files/captcha'),
            'img_width'		=> '190',
            'img_height'	=> '45',
            'word_length'	=> 5,
            'font_size'		=> 30,
            'pool'			=> '0123456789',
            'expiration'	=> 7200
        );

        $cap = create_captcha($option);
        $image = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
    }

    public function check_captcha(){
        if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
            return true;
        }else{
            return false;
        }
    }

    public function register() {
    	$data = array(
    		'id_user'	=> '',
    		'no_ktp'	=> $this->input->post('ktp'),
    		'nama_user'	=> $this->input->post('nama'),
    		'username'	=> $this->input->post('username'),
    		'password'	=> $this->input->post('pass'),
    		'email' 	=> $this->input->post('email'),
    		'no_telepon'=> $this->input->post('telp')
    	);
    	$this->mfront->register($data);
    }

	public function index() {
		$data['title'] = "Halo Bupati";
		$data['content'] = "home";
		$data['image'] = $this->create_captcha();
		$this->load->view('view_front/hbfront', $data);
	}

	public function tentang_hb() {
		$data['title'] = "Tentang Halo Bupati - Halo Bupati";
		$data['content'] = "tentang-hb";
		$data['judul'] = "Tentang Halo Bupati";
		$data['breadcrumb'] = "Tentang Halo Bupati";
		$this->load->view('view_front/hbfront', $data);
	}

	public function kontak() {
		$data['title'] = "Kontak - Halo Bupati";
		$data['content'] = "kontak";
		$data['judul'] = "Kontak";
		$data['breadcrumb'] = "Kontak";
		$this->load->view('view_front/hbfront', $data);
	}

	public function profil() {
		$data['title'] = "Profil Saya - Halo Bupati";
		$data['content'] = "profil";
		$this->load->view('view_front/hbfront', $data);
	}

	public function lihat_aduan_saya() {
		$data['title'] = "Aduan Saya - Halo Bupati";
		$data['content'] = "lihat-aduan-saya";
		$this->load->view('view_front/hbfront', $data);
	}

	public function detail_aduan() {
		$data['title'] = "Detail Aduan - Halo Bupati";
		$data['content'] = "detail-aduan";
		$this->load->view('view_front/hbfront', $data);
	}

	public function petunjuk_syarat() {
		$data['title'] = "Petunjuk & Syarat - Halo Bupati";
		$data['content'] = "petunjuk-dan-syarat";
		$this->load->view('view_front/hbfront', $data);
	}

	public function data_opd() {
		$data['title'] = "Data OPD - Halo Bupati";
		$data['content'] = "data-opd";
		$data['judul'] = "Data OPD";
		$data['breadcrumb'] = "Data OPD";
		$data['data_opd'] = $this->mopd->read();
		$this->load->view('view_front/hbfront', $data);
	}

	public function detail_opd() {
		$data['title'] = "Detail OPD - Halo Bupati";
		$data['content'] = "detail-opd";
		$data['judul'] = "Detail OPD";
		$data['breadcrumb'] = "Detail OPD";
		$this->load->view('view_front/hbfront', $data);
	}

}

/* End of file Hb.php */
/* Location: ./application/controllers/Hb.php */
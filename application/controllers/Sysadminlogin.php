<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sysadminlogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('mlogin');

        if($this->session->userdata('status')){
            redirect(base_url('hbadmin'));
        }
	}

    public function create_captcha(){
        $option = array (
            'img_path' => './files/captcha/',
            'img_url' => base_url('files/captcha'),
            'img_width' => '150',
            'img_height' => '40',
            'word_length'   => 5,
            'font_size'     => 30,
            'pool' => '0123456789',
            'expiration' => 7200
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

	public function index() {
		$data['title'] = "Halo Bupati - Admin Login";
        $data['error'] = "";
        $data['image'] = $this->create_captcha();
        $this->load->view('view_admin/login', $data);
    }

    public function auth() {
        if ($this->input->post('captcha') != $this->session->userdata('captchaword')) {
            $data['title'] = "Halo Bupati - Admin Login";
            $data['error'] = "
            <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                <strong>Kode Salah!</strong> silahkan masukkan kode yang benar!
                </div>";
            $data['image'] = $this->create_captcha();
            $this->load->view('view_admin/login', $data);
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->mlogin->login($username, $password);
            if($result->num_rows() > 0 ){
                foreach ($result->result() as $row){
                $data_session = array(
                    'id_admin' => $row->id_admin,
                    'nama_admin' => $row->nama_admin,
                    'level' => $row->level,
                    'foto' => $row->foto,
                    'thumb' => $row->thumbnail,
                    'email' => $row->email,
                    'status' => 'loginberhasil'
                );
                }
                $this->session->set_userdata($data_session);
                if($this->session->userdata('level') == 'Instansi'){
                    redirect('hbinstansi');
                }else{
                    redirect('hbadmin','refresh');
                }
            }else{
                $data['title'] = "Halo Bupati - Admin Login";
                $data['error'] = "
                <div class='alert alert-danger' role='alert'>
                    <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                    <strong>Salah!</strong> username/password yang anda masukkan salah!
                </div>";
                $data['image'] = $this->create_captcha();
                $this->load->view('view_admin/login', $data);
            }
        }
    }

    public function oauth() {
        $data['title'] = "Halo Bupati - Admin Login";
        $data['error'] = "
        <div class='alert alert-danger' role='alert'>
                <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                <strong>Anda belum login!</strong> silahkan masukkan username & password!
            </div>";
            $data['image'] = $this->create_captcha();
        $this->load->view('view_admin/login', $data);
    }


}

/* End of file Adminlogin.php */
/* Location: ./application/controllers/Adminlogin.php */
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logins extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
	
		//check sudah login atau belum
		if($this->session->userdata('is_login')){
			redirect('admin/homes');
		}else {
			$data['title'] = "Login | SIPEPENG";
			$this->load->view('public/login', $data);
		 }
    }

    public function process_login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->users_model->checkLogin($username, $password);
            if (!empty($user)) {
                $sessionData['id_pengguna'] = $user['id_pengguna'];
                $sessionData['username'] = $user['username'];
                $sessionData['nama'] = $user['nama'];
                $sessionData['email'] = $user['email'];
                $sessionData['id_jenis_pengguna'] = $user['id_jenis_pengguna'];
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);

                if ($this->session->userdata('id_jenis_pengguna') == 1) {
                    redirect('admin/homes');
                } else {
                    redirect('admin/homes');
                }
            } else {
                $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah '. $this->session->userdata('id_jenis_pengguna'));
                redirect('public/logins');
            }
        } else {
            $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah ');
            $data['title'] = "Login | SIPEPENG";
            $this->load->view('public/login', $data);
        }
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect('public/homes');
    }
}
?>
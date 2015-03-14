<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logins extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        $data['title'] = "Sign In | Adney's Shop";
        $this->load->view('public/login', $data);
    }

    public function process_login() {
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');

//            $user = $this->users_model->check_login($user_email, $user_password);
            $user = $this->users_model->checkLogin($user_email, $user_password);
            if (!empty($user)) {
//                $query = $this->users_model->get_users($user_email, $user_password);
//                $data = $query->row_array();
                $sessionData['id_user'] = $user['id_user'];
                $sessionData['user_email'] = $user['user_email'];
                $sessionData['user_name'] = $user['user_name'];
                $sessionData['id_status'] = $user['id_status'];
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);
                $this->users_model->updateLastLogin($user['id_user']);

                if ($this->session->userdata('id_status') == 1) {
                    redirect('admin/homes');
                } else {
                    redirect('public/homes');
                }
            } else {
                $this->session->set_flashdata('message', 'Login Failed!, email and password combination was wrong '. $this->session->userdata('id_status'));
                redirect('public/logins');
            }
        } else {
            $this->session->set_flashdata('message', 'Login Failed!, email and password combination was wrong ');
            $data['title'] = "Login | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect('public/homes');
    }
}
?>

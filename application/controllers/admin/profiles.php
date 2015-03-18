<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profiles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('states_model');
        $this->load->model('country_model');
    }

    public function index() {
        $data['title'] = "Profil | SIPEPENG";
        $data['username'] = $this->session->userdata('user_name');
        $data['email'] = $this->session->userdata('email');
        $data['users'] = $this->users_model->get_user_by_id($this->session->userdata('id_pengguna'));
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $this->load->view('admin/profile',$data);
    }
    
    public function edit($id_user) {
        $data['idUser'] = $id_user;
        $data['user_name'] = $this->session->userdata('user_name');
        $data['user_email'] = $this->session->userdata('user_email');
        $data['title'] = "Edit Profile | Adney's Shop";
        $data['users'] = $this->users_model->get_user_by_id($id_user);
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/profile_edit', $data);
    }

    public function process() {
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_name', 'Name', 'required');
        $this->form_validation->set_rules('first_address', 'First Address', 'required');
        $this->form_validation->set_rules('user_phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('user_city', 'City', 'required');
        $this->form_validation->set_rules('user_zip', 'Zip', 'required');
        $this->form_validation->set_rules('id_state', 'State', 'required');
        $this->form_validation->set_rules('id_status', 'Level', 'required');
        $this->form_validation->set_rules('id_country', 'Country', 'required');
        $this->form_validation->set_rules('user_agree', 'User Agree', 'required');
        if (($this->input->post('user_password'))||($this->input->post('confirm_password'))) {
            $this->form_validation->set_rules('user_password', 'Password', 'required|matches[confirm_password]');
            $this->form_validation->set_rules('confirm_password', 'Retype Password', 'required');
        }
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->users_model->update_admin($this->input->post('id_user'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> User ' . $this->input->post('user_name') . ' Success Update </div>');
                redirect('admin/profiles');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> User ' . $this->input->post('user_name') . ' Failed Update </div>');
                redirect('admin/profiles');
            }
        } else {
            $data['idUser'] = $this->input->post('id_user');
            $data['user_name'] = $this->session->userdata('user_name');
            $data['user_email'] = $this->session->userdata('user_email');
            $data['users'] = $this->users_model->get_user_by_id($this->input->post('id_user'));
            $data['title'] = "Edit Profile | Adney's Shop";
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/profile_edit', $data);
        }
    }
}

?>

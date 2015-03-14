<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('states_model');
        $this->load->model('country_model');
    }

    public function index() {
        $data['title'] = "Register | Adney's Shop";
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $this->load->view('public/register', $data);
    }
    
    public function process($action, $id_user = null){
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Retype Password', 'required');
        $this->form_validation->set_rules('user_name', 'Name', 'required');
        $this->form_validation->set_rules('first_address', 'First Address', 'required');
        $this->form_validation->set_rules('user_phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('user_city', 'City', 'required');
        $this->form_validation->set_rules('user_zip', 'Zip', 'required');
        $this->form_validation->set_rules('id_state', 'State', 'required');
        $this->form_validation->set_rules('id_country', 'Country', 'required');
        $this->form_validation->set_rules('user_agree', 'User Agree', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');
        
        if ($this->form_validation->run() == TRUE) {
            $data['id_status'] = $this->input->post('id_status');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_password'] = $this->input->post('user_password');
            $data['confirm_password'] = $this->input->post('confirm_password');
            $data['user_name'] = $this->input->post('user_name');
            $data['first_address'] = $this->input->post('first_address');
            $data['second_address'] = $this->input->post('second_address');
            $data['user_phone'] = $this->input->post('user_phone');
            $data['user_city'] = $this->input->post('user_city');
            $data['user_zip'] = $this->input->post('user_zip');
            $data['id_state'] = $this->input->post('id_state');
            $data['id_country'] = $this->input->post('id_country');
            $data['user_agree'] = $this->input->post('user_agree');
            $data['created'] = date('Y-m-d H:i:s', time()+60*60*6);
            if ($action == 'add') {
                $this->users_model->add($data);
            }            
            $this->session->set_flashdata('message', 'Registration success, please login with your account !');
            redirect('public/logins');
        } else {
            $data['title'] = "Register | Adney's Shop";
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $this->load->view('public/register', $data);
        }
    }

}

?>

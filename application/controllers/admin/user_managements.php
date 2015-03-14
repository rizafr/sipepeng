<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('states_model');
        $this->load->model('country_model');
    }
    
    public function index() {
        $data['title'] = "User Management List | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['users_list'] = $this->users_model->select_all()->result();
        $this->load->view('admin/user_management_list',$data);
    }
    
    public function edit($id_user) {
        $data['idUser'] = $id_user;
        $data['title'] = "Edit Data User | Adney's Shop";
        $data['users'] = $this->users_model->getUserById($id_user);
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/user_management_edit', $data);
    }

    function delete($id_user) {
        if (empty($id_user)) {
            $this->session->set_flashdata('message', 'Error Invalid user');
            redirect('admin/user_managements');
        } else {
            $this->users_model->delete($id_user);
            $this->session->set_flashdata('message', 'Success User deleted');
            redirect('admin/user_managements');
        }
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
            $hasil = $this->users_model->update($this->input->post('id_user'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> User ' . $this->input->post('user_name') . ' Success Update </div>');
                redirect('admin/user_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> User ' . $this->input->post('user_name') . ' Failed Update </div>');
                redirect('admin/user_managements');
            }
        } else {
            $data['title'] = "Edit Data User | Adney's Shop";
            $data['idUser'] = $this->input->post('id_user');
            $data['users'] = $this->users_model->getUserById($this->input->post('id_user'));
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/user_management_edit', $data);
        }
    }
    
    public function gotoFormAdd() {
        $data['title'] = "Add Data User | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $this->load->view('admin/user_management_add', $data);
    }
    
    public function process_add($action, $id_user = null){
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
        $this->form_validation->set_rules('id_status', 'Level', 'required');
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
                $this->users_model->add_from_admin($data);
            }            
            $this->session->set_flashdata('message', 'Add User' . $this->input->post('user_name') . 'Success!');
            $data['user_name'] = $this->session->userdata('user_name');
            redirect('admin/user_managements',$data);
        } else {
            $data['title'] = "Add Data User | Adney's Shop";
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $data['user_name'] = $this->session->userdata('user_name');
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/user_management_add', $data);
        }
    }
    
    public function view($id_user){
        $data['idUser'] = $id_user;
        $data['title'] = "View Data User | Adney's Shop";
        $data['users'] = $this->users_model->getUserById($id_user);
        $data['view'] = $this->users_model->get_user_by_id($id_user);
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/user_management_view',$data);
    }
}

?>


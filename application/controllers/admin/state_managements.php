<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class State_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('states_model');
    }
   
    public function index(){
        $data['title'] = "State List | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['states'] = $this->states_model->select_all()->result();
        $this->load->view('admin/state_management_list',$data);
    }
    
    public function gotoFormAdd() {
        $data['title'] = "Add Data State | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/state_management_add', $data);
    }
    
    public function process_add($action, $id_state = null){
        $this->form_validation->set_rules('state', 'State', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data['state'] = $this->input->post('state');
             if ($action == 'add') {
                $this->states_model->add($data);
            }
            $data['user_name'] = $this->session->userdata('user_name');
            $data['states'] = $this->states_model->select_all()->result();
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Data State ' . $this->input->post('state') . ' Success Added </div>');
            redirect('admin/state_managements',$data);
        } else {
            $data['title'] = "Add Data State | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/state_management_add', $data);
        }
    }
    
    public function delete($id_state) {
        if (empty($id_state)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Error Invalid State </div>');
            redirect('admin/state_managements');
        } else {
            $this->states_model->delete($id_state);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success Deleted State </div>');
            redirect('admin/state_managements');
        }
    }
    
    public function edit($id_state) {
        $data['idState'] = $id_state;
        $data['title'] = "Edit Data State | Adney's Shop";
        $data['states'] = $this->states_model->getStateById($id_state);
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/state_management_edit', $data);
    }
    
    public function process() {
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->states_model->update($this->input->post('id_state'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data State ' . $this->input->post('state') . ' Success Update </div>');
                redirect('admin/state_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> Data State ' . $this->input->post('state') . ' Failed Update </div>');
                redirect('admin/state_managements');
            }
        } else {
            $data['idState'] = $this->input->post('id_state');
            $data['title'] = "Edit Data State | Adney's Shop";
            $data['states'] = $this->states_model->getStateById($this->input->post('id_state'));
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/state_management_edit', $data);
        }
    }
}

?>

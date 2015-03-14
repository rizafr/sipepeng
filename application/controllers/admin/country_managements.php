<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('country_model');
    }
   
    public function index(){
        $data['title'] = "Country List | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['countries'] = $this->country_model->select_all()->result();
        $this->load->view('admin/country_management_list',$data);
    }
    
    public function gotoFormAdd() {
        $data['title'] = "Add Data Country | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/country_management_add', $data);
    }
    
    public function process_add($action, $id_country = null){
        $this->form_validation->set_rules('country_name', 'Country Name', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data['country_name'] = $this->input->post('country_name');
             if ($action == 'add') {
                $this->country_model->add($data);
            }
            $data['user_name'] = $this->session->userdata('user_name');
            $data['countries'] = $this->country_model->select_all()->result();
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Country ' . $this->input->post('country_name') . ' Success Added </div>');
            redirect('admin/country_managements',$data);
        } else {
            $data['title'] = "Add Data Country | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/country_management_add', $data);
        }
    }
    
    public function delete($id_country) {
        if (empty($id_country)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Error Invalid Country </div>');
            redirect('admin/country_managements');
        } else {
            $this->country_model->delete($id_country);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success Deleted Country </div>');
            redirect('admin/country_managements');
        }
    }
    
    public function edit($id_country) {
        $data['idCountry'] = $id_country;
        $data['title'] = "Edit Data Country | Adney's Shop";
        $data['countries'] = $this->country_model->getCountryById($id_country);
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/country_management_edit', $data);
    }
    
    public function process() {
        $this->form_validation->set_rules('country_name', 'Country Name', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->country_model->update($this->input->post('id_country'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Country ' . $this->input->post('country_name') . ' Success Update </div>');
                redirect('admin/country_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> Data Country ' . $this->input->post('country_name') . ' Failed Update </div>');
                redirect('admin/country_managements');
            }
        } else {
            $data['title'] = "Edit Data Country | Adney's Shop";
            $data['countries'] = $this->country_model->getCountryById($id_country);
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/country_management_edit', $data);
        }
    }
}

?>

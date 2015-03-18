<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Drainase_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('drainase_model');
		 $this->load->model('menu_model');
    }
    
    public function index() {
        $data['title'] = "Drainase | SIPEPENG";
        $data['username'] = $this->session->userdata('username');
		 $data['menu_list'] = $this->menu_model->select_all()->result();
        $data['drainase_list'] = $this->drainase_model->select_all()->result();
        $this->load->view('admin/drainase/drainase_list',$data);
    }
    
    public function edit($id_pengguna) {
        $data['idUser'] = $id_pengguna;
        $data['title'] = "Edit Data User | SIPEPENG";
        $data['users'] = $this->users_model->getUserById($id_pengguna);       
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/user_management_edit', $data);
    }

    function delete($id_pengguna) {
        if (empty($id_pengguna)) {
            $this->session->set_flashdata('message', 'Error Invalid user');
            redirect('admin/user_managements');
        } else {
            $this->users_model->delete($id_pengguna);
            $this->session->set_flashdata('message', 'Success User deleted');
            redirect('admin/user_managements');
        }
    }

    public function process() {
        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
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
            $hasil = $this->users_model->update($this->input->post('id_pengguna'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> User ' . $this->input->post('username') . ' Success Update </div>');
                redirect('admin/user_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> User ' . $this->input->post('username') . ' Failed Update </div>');
                redirect('admin/user_managements');
            }
        } else {
            $data['title'] = "Edit Data User | Adney's Shop";
            $data['idUser'] = $this->input->post('id_pengguna');
            $data['users'] = $this->users_model->getUserById($this->input->post('id_pengguna'));
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/user_management_edit', $data);
        }
    }
    
    public function gotoFormAdd() {
        $data['title'] = "Tambah Pengguna | SIPEPENG";
        $data['username'] = $this->session->userdata('username');
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $this->load->view('admin/user_management_add', $data);
    }
    
    public function process_add($action, $id_pengguna = null){
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('telp', 'Phone Number', 'required|number');      
        $this->form_validation->set_rules('id_jenis_pengguna', 'Level', 'required');
       
        $this->form_validation->set_error_delimiters('', '<br/>');
        
        if ($this->form_validation->run() == TRUE) {
            $data['id_jenis_pengguna'] = $this->input->post('id_jenis_pengguna');
            $data['nip'] = $this->input->post('nip');
            $data['nama'] = $this->input->post('nama');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['telp'] = $this->input->post('telp');
            if ($action == 'add') {
                $this->users_model->add_from_admin($data);
            }            
            $this->session->set_flashdata('message', 'Tambah Pengguna' . $this->input->post('nama') . 'Success!');
            $data['username'] = $this->session->userdata('username');
            redirect('admin/user_managements',$data);
        } else {
            $data['title'] = "Add Data User | Adney's Shop";        
            $data['username'] = $this->session->userdata('username');
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/user_management_add', $data);
        }
    }
    
    public function view($id_pengguna){
        $data['idUser'] = $id_pengguna;
        $data['title'] = "View Data User | Adney's Shop";
        $data['users'] = $this->users_model->getUserById($id_pengguna);
        $data['view'] = $this->users_model->get_user_by_id($id_pengguna);
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/user_management_view',$data);
    }
}

?>
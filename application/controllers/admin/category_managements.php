<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_managements extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index() {
        $data['title'] = "Product Category List | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['categories'] = $this->category_model->select_all()->result();
        $this->load->view('admin/product/category_management_list', $data);
    }

    public function gotoFormAdd() {
        $data['title'] = "Add Product Category | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/product/category_management_add', $data);
    }

    public function process_add($action, $id_category = null) {
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        if ($this->form_validation->run() == TRUE) {
            if ($action == 'add') {
                $this->category_model->add();
            }
            $data['user_name'] = $this->session->userdata('user_name');
            $data['categories'] = $this->category_model->select_all()->result();
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Product Category ' . $this->input->post('category_name') . ' Success Added </div>');
            redirect('admin/category_managements', $data);
        } else {
            $data['title'] = "Add Product Category | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/product/category_management_add', $data);
        }
    }

    public function delete($id_category) {
        if (empty($id_category)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Error Invalid Product Category </div>');
            redirect('admin/category_managements');
        } else {
            $this->category_model->delete($id_category);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success Deleted Product Category </div>');
            redirect('admin/category_managements');
        }
    }

    public function edit($id_category) {
        $data['idCategory'] = $id_category;
        $data['title'] = "Edit Product Category | Adney's Shop";
        $data['categories'] = $this->category_model->getCategoryById($id_category);
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/product/category_management_edit', $data);
    }
    
    public function process() {
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->category_model->update($this->input->post('id_category'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Product Category ' . $this->input->post('category_name') . ' Success Update </div>');
                redirect('admin/category_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> Product Category ' . $this->input->post('category_name') . ' Failed Update </div>');
                redirect('admin/category_managements');
            }
        } else {
            $data['idCategory'] = $this->input->post('id_category');
            $data['title'] = "Edit Product Category | Adney's Shop";
            $data['categories'] = $this->category_model->getCategoryById($this->input->post('id_category'));
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/product/category_management_edit', $data);
        }
    }

}

?>

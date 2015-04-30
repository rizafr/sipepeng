<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index() {
        //check sudah login atau belum
        if ($this->session->userdata('is_login')) {
            $this->load->view('admin/home');
        } else {
            redirect('public/homes');
        }
    }

}

?>

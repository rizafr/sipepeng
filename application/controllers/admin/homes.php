<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = "Home Admin | SIPEPENG";
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/home',$data);
    }
}

?>

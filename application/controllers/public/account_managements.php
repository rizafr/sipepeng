<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_managements extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        $data['title'] = "My Account | Adney's Shop";
        $this->load->view('public/myaccount/account',$data);
    }
}

?>

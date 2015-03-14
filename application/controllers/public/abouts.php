<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Abouts extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "About | Adney's Shop";
        $this->load->view('public/about', $data);
    }

}

?>
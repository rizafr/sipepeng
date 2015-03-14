<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['title'] = "Sistem Informasi Pemetaan Pembangunan - SIPEPENG";
        $this->load->view('public/home',$data);
    }
}

?>

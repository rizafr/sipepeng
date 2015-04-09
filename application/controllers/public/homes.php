<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();		
		 $this->load->model('public_model');
    }
    
    public function index(){
        $data['title'] = "Sistem Informasi Pemetaan Pembangunan - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/home',$data);
    }

	public function renja(){
        $data['title'] = "RENJA - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/renja',$data);
    }
}

?>

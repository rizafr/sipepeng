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
		if($this->session->userdata('is_login')){		
			$data['title'] = "Home Admin | SIPEPENG";
			$data['user_name'] = $this->session->userdata('user_name');
			 $data['menu_list'] = $this->menu_model->select_all()->result();
			$this->load->view('admin/home',$data);
		}else {
              redirect('public/homes');
          }
	}
}

?>

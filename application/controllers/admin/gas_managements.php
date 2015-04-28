<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ekonomi_managements extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

    function __construct() {
        parent::__construct();
        $this->load->model('ekonomi_model');
        $this->load->model('menu_model');
        $this->load->model('home_model');
        $this->load->helper(array('form', 'url', 'pemberitahuan'));
    }

    public function index() {
        //check sudah login atau belum
        if ($this->session->userdata('is_login')) {
            //menampilkan menu
            #menampilkan menu sesuai hak ases
            #admin
            if ($this->session->userdata('id_jenis_pengguna') == 1) {
                $data['menu_list'] = $this->menu_model->select_all()->result();
            }
            #dkp
            if ($this->session->userdata('id_jenis_pengguna') == 2) {
                $data['menu_list'] = $this->menu_model->select_dkp()->result();
            }
            #pu
            if ($this->session->userdata('id_jenis_pengguna') == 3) {
                $data['menu_list'] = $this->menu_model->select_pu()->result();
            }
            
            $data['title'] = "DAFTAR PANGKALAN GAS LPG - SIPEPENG";
			$data['data_list'] = $this->gas_model->select_all()->result();
			$this->load->view('admin/gas/gas_list', $data);
        } else {
            redirect('public/homes');
        }
    }  

}

?>					
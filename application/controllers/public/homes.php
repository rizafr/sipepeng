<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();		
		 $this->load->model('public_model');
		 # menampilkan google map
		 $this->load->library('googlemaps');
    }
    #halaman utama
    public function index(){
        $data['title'] = "Sistem Informasi Pemetaan Pembangunan - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/home',$data);
    }
	# halaman profil
	public function profil(){
        $data['title'] = "Profil - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/profil',$data);
    }
	
	# halaman peta
	public function peta(){
        $data['title'] = "Peta - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
		
		#google map yg bisa di klik otomatis dapetin koordinatnya
		$config['center'] = '-6.900282, 107.530010';
		 $config['map_height'] = '650px';
		$config['zoom'] = 'auto';
		$config['sensor'] = TRUE;
		$config['onclick']= 'getLokasi(event.latLng.lat(), event.latLng.lng());';
		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();
		#end google map
		
        $this->load->view('public/peta',$data);
    }
	#halaman peraturan
	public function peraturan(){
        $data['title'] = "Peraturan - SIPEPENG";
		$data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/peraturan',$data);
    }
}

?>

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();		
		 $this->load->model('public_model');
		 $this->load->model('drainase_model');
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
		
		//ambil koordinator drainase_list
		$drainase_list = $this->drainase_model->select_all()->result();
		//var_dump($drainase_list);
		
		#google map yg bisa di klik otomatis dapetin koordinatnya
		$config['center'] = '-6.900282, 107.530010';
		 $config['map_height'] = '650px';
		$config['zoom'] = 'auto';
		$config['sensor'] = TRUE;		
		$this->googlemaps->initialize($config);
		
		#tampilkan data koordinat drainase
		foreach ($drainase_list as $row) {
			$polyline = array();
			$polyline['points'] = array($row->lat_awal.",". $row->long_awal,$row->lat_akhir.",".$row->long_akhir);
			$this->googlemaps->add_polyline($polyline);
			
			$marker = array();
			$marker['position'] = $row->lat_awal.",". $row->long_awal;
			$marker['infowindow_content'] = "RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		
			$marker = array();
			$marker['position'] = $row->lat_akhir.",".$row->long_akhir;
			$marker['infowindow_content'] = "RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		
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

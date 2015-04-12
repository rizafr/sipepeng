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
		
		//ambil koordinator artesis_list
		$artesis_list = $this->public_model->artesis_all()->result();
		//ambil koordinator drainase_list
		$drainase_list = $this->public_model->drainase_all()->result();
		//ambil koordinator jalan_list
		$jalan_list = $this->public_model->jalan_all()->result();
		//ambil koordinator kirmir_list
		$kirmir_list = $this->public_model->kirmir_all()->result();
		//ambil koordinator mck_list
		$mck_list = $this->public_model->mck_all()->result();
		//ambil koordinator septictank_list
		$septictank_list = $this->public_model->septictank_all()->result();
		//ambil koordinator drainase_list
		$septictank_komunal_list = $this->public_model->septictank_komunal_all()->result();
		//ambil koordinator sumur_dangkal_list
		$sumur_dangkal_list = $this->public_model->sumur_dangkal_all()->result();
		//ambil koordinator drainase_list
		$sumur_resapan_list = $this->public_model->sumur_resapan_all()->result();
		
		#google map yg bisa di klik otomatis dapetin koordinatnya
		$config['center'] = '-6.900282, 107.530010';
		 $config['map_height'] = '650px';
		$config['zoom'] = 'auto';
		$config['sensor'] = TRUE;		
		$this->googlemaps->initialize($config);
		
		#tampilkan data koordinat artesis
		foreach ($artesis_list as $row) {
		
			#ambil fotonya jika ada
			$foto = isset($row->foto) ? "<img src='".base_url()."assets/upload/foto/".$row->foto."' height='150px' width='250px'/>" : 'Belum Ada foto';
			
			$polyline = array();
			$polyline['points'] = array($row->lat_awal.",". $row->long_awal,$row->lat_akhir.",".$row->long_akhir);
			$this->googlemaps->add_polyline($polyline);
			
			$marker = array();
			$marker['position'] = $row->lat_awal.",". $row->long_awal;
			$marker['infowindow_content'] = "Drainase <br /> RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat."<br />	".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		
			$marker = array();
			$marker['position'] = $row->lat_akhir.",".$row->long_akhir;
			$marker['infowindow_content'] = "Drainase <br />RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat ."<br />".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		#end tampilkan data koordinat artesis 
                
		#tampilkan data koordinat drainase
		foreach ($drainase_list as $row) {
		
			#ambil fotonya jika ada
			$foto = isset($row->foto) ? "<img src='".base_url()."assets/upload/foto/".$row->foto."' height='150px' width='250px'/>" : 'Belum Ada foto';
			
			$polyline = array();
			$polyline['points'] = array($row->lat_awal.",". $row->long_awal,$row->lat_akhir.",".$row->long_akhir);
			$this->googlemaps->add_polyline($polyline);
			
			$marker = array();
			$marker['position'] = $row->lat_awal.",". $row->long_awal;
			$marker['infowindow_content'] = "Drainase <br /> RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat."<br />	".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		
			$marker = array();
			$marker['position'] = $row->lat_akhir.",".$row->long_akhir;
			$marker['infowindow_content'] = "Drainase <br />RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat ."<br />".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		#end tampilkan data koordinat drainase 
               
		#tampilkan data koordinat mck
		foreach ($mck_list as $row) {
		
			#ambil fotonya jika ada
			$foto = isset($row->foto) ? "<img src='".base_url()."assets/upload/foto/".$row->foto."' height='150px' width='250px'/>" : 'Belum Ada foto';
			
			$marker = array();
			$marker['position'] = $row->lat.",".$row->long;
			$marker['infowindow_content'] = "MCK <br />RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat ."<br />".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=M|4999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		#end tampilkan data koordinat mck 
                
		#tampilkan data koordinat septictank
		foreach ($septictank_list as $row) {
		
			#ambil fotonya jika ada
			$foto = isset($row->foto) ? "<img src='".base_url()."assets/upload/foto/".$row->foto."' height='150px' width='250px'/>" : 'Belum Ada foto';
			
			$marker = array();
			$marker['position'] = $row->lat.",".$row->long;
			$marker['infowindow_content'] = "Septictank <br />RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat ."<br />".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=M|4999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		#end tampilkan data koordinat septictank 
                
		#tampilkan data koordinat septictank_komunal
		foreach ($septictank_komunal_list as $row) {
		
			#ambil fotonya jika ada
			$foto = isset($row->foto) ? "<img src='".base_url()."assets/upload/foto/".$row->foto."' height='150px' width='250px'/>" : 'Belum Ada foto';
			
			$marker = array();
			$marker['position'] = $row->lat.",".$row->long;
			$marker['infowindow_content'] = "Septictank Komunal <br />RW : ".$row->rw ." <br /> Alamat:  ". $row->alamat ."<br />".$foto ;
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=M|4999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		#end tampilkan data koordinat septictank_komunal 
		
		
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

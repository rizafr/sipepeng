<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('public_model');
        $this->load->model('umkm_model');
        $this->load->model('perusahaan_model');
        $this->load->model('gas_model');
        $this->load->model('minimarket_model');
        # menampilkan google map
        $this->load->library('googlemaps');
    }

    #halaman utama

    public function index() {
        $data['title'] = "Sistem Informasi Pemetaan Pembangunan - SIPEPENG";
        $data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/home', $data);
    }

    # halaman profil

    public function profil() {
        $data['title'] = "Profil - SIPEPENG";
        $data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/profil', $data);
    }

    # halaman peta

    public function peta() {
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
		$config['kmlLayerURL'] =  'http://sipepeng/assets/kml/cimahi.kml';
        $this->googlemaps->initialize($config);

        // #tampilkan data koordinat artesis
        // foreach ($artesis_list as $row) {

            // #ambil fotonya jika ada
            // $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            // $polyline = array();
            // $polyline['points'] = array($row->lat_awal . "," . $row->long_awal, $row->lat_akhir . "," . $row->long_akhir);
            // $this->googlemaps->add_polyline($polyline);

            // $marker = array();
            // $marker['position'] = $row->lat_awal . "," . $row->long_awal;
            // $marker['infowindow_content'] = "Drainase <br /> RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />	" . $foto;
            // $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
            // $this->googlemaps->add_marker($marker);

            // $marker = array();
            // $marker['position'] = $row->lat_akhir . "," . $row->long_akhir;
            // $marker['infowindow_content'] = "Drainase <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            // $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
            // $this->googlemaps->add_marker($marker);
        // }
        #end tampilkan data koordinat artesis 
        #tampilkan data koordinat drainase
        foreach ($drainase_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $polyline = array();
            $polyline['points'] = array($row->lat_awal . "," . $row->long_awal, $row->lat_akhir . "," . $row->long_akhir);
            $this->googlemaps->add_polyline($polyline);

            $marker = array();
            $marker['position'] = $row->lat_awal . "," . $row->long_awal;
            $marker['infowindow_content'] = "Drainase <br /> RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />	" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/drainase.png";
            $this->googlemaps->add_marker($marker);

            $marker = array();
            $marker['position'] = $row->lat_akhir . "," . $row->long_akhir;
            $marker['infowindow_content'] = "Drainase <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/drainase.png";
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat drainase 
		 #tampilkan data koordinat drainase
        foreach ($jalan_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $polyline = array();
            $polyline['strokeColor'] = #FF8000;
            $polyline['strokeWeight'] = 5;
            $polyline['points'] = array($row->lat_awal . "," . $row->long_awal, $row->lat_akhir . "," . $row->long_akhir);
            $this->googlemaps->add_polyline($polyline);

            $marker = array();
			$polyline['strokeColor'] = #FF8000;
            $polyline['strokeWeight'] = 5;
            $marker['position'] = $row->lat_awal . "," . $row->long_awal;
            $marker['infowindow_content'] = "Jalan <br /> RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />	" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/icy_road.png";
            $this->googlemaps->add_marker($marker);

            $marker = array();
            $marker['position'] = $row->lat_akhir . "," . $row->long_akhir;
            $marker['infowindow_content'] = "Jalan <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/icy_road.png";
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat drainase 
        #tampilkan data koordinat mck
        foreach ($mck_list as $row) {
            $path = base_url();
            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "MCK <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/mck.png";
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat mck 
        #tampilkan data koordinat septictank
        foreach ($septictank_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "Septictank <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/septictank.png";
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat septictank 
        #tampilkan data koordinat septictank_komunal
        foreach ($septictank_komunal_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "Septictank Komunal <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=SK|ffeb3b|000000';
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat septictank_komunal 


        $data['map'] = $this->googlemaps->create_map();
        #end google map

        $this->load->view('public/peta', $data);
    }

    #halaman peraturan
    public function peraturan() {
        $data['title'] = "Peraturan - SIPEPENG";
        $data['data_list'] = $this->public_model->select_all()->result();
        $this->load->view('public/peraturan', $data);
    }
	
	#halaman umkm
    public function umkm() {
        $data['title'] = "Data UMKM - SIPEPENG";
        $data['data_list'] = $this->umkm_model->select_all()->result();
        $this->load->view('public/umkm', $data);
    }
	
	#halaman perusahaan
    public function perusahaan() {
        $data['title'] = "Data Perusahaan - SIPEPENG";
        $data['data_list'] = $this->perusahaan_model->select_all()->result();
        $this->load->view('public/perusahaan', $data);
    }
	
	#halaman gas
    public function gas() {
        $data['title'] = "DAFTAR PANGKALAN GAS LPG - SIPEPENG";
        $data['data_list'] = $this->gas_model->select_all()->result();
        $this->load->view('public/gas', $data);
    }
	
	#halaman minimarket
    public function minimarket() {
        $data['title'] = "DAFTAR MINIMARKET - SIPEPENG";
        $data['data_list'] = $this->minimarket_model->select_all()->result();
        $this->load->view('public/minimarket', $data);
    }
	
	#halaman kos
    public function kos() {
        $data['title'] = "DATA PEMILIK RUMAH KOS - SIPEPENG";
        $data['data_list'] = $this->minimarket_model->select_all()->result();
        $this->load->view('public/kos', $data);
    }

}

?>

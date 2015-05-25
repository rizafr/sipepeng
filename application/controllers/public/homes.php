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
        $this->load->model('kos_model');
        $this->load->model('berita_model');
        $this->load->model('menu_model');

        $this->load->model('artesis_model');
        $this->load->model('drainase_model');
        $this->load->model('jalan_model');
        $this->load->model('mck_model');
        $this->load->model('septictank_model');
        $this->load->model('septictank_komunal_model');
        $this->load->model('sumur_dangkal_model');
        $this->load->model('sumur_resapan_model');

        # menampilkan google map
        $this->load->library('googlemaps');
    }

    #halaman utama

    public function index() {
        $data['title'] = "Sistem Informasi Pemetaan Pembangunan - SIPEPENG";
        $data['jum_artikel'] = $this->berita_model->jum_artikel();
        $data['berita_list'] = $this->berita_model->artikel();

        //grafik kegiatan perencanaan
        $data['artesis_awal'] = count($this->home_model->artesis_awal()->result());
        $data['drainase_awal'] = count($this->home_model->drainase_awal()->result());
        $data['mck_awal'] = count($this->home_model->mck_awal()->result());
        $data['jalan_awal'] = count($this->home_model->jalan_awal()->result());
        $data['septictank_awal'] = count($this->home_model->septictank_awal()->result());
        $data['septictank_komunal_awal'] = count($this->home_model->septictank_komunal_awal()->result());
        $data['sumur_dangkal_awal'] = count($this->home_model->sumur_dangkal_awal()->result());
        $data['sumur_resapan_awal'] = count($this->home_model->sumur_resapan_awal()->result());
        $data['lain_awal'] = count($this->home_model->lain_awal()->result());


        //grafik kegiatan dilaksanakan
        $data['artesis_dilaksanakan'] = count($this->home_model->artesis_dilaksanakan()->result());
        $data['drainase_dilaksanakan'] = count($this->home_model->drainase_dilaksanakan()->result());
        $data['mck_dilaksanakan'] = count($this->home_model->mck_dilaksanakan()->result());
        $data['jalan_dilaksanakan'] = count($this->home_model->jalan_dilaksanakan()->result());
        $data['septictank_dilaksanakan'] = count($this->home_model->septictank_dilaksanakan()->result());
        $data['septictank_komunal_dilaksanakan'] = count($this->home_model->septictank_komunal_dilaksanakan()->result());
        $data['sumur_dangkal_dilaksanakan'] = count($this->home_model->sumur_dangkal_dilaksanakan()->result());
        $data['sumur_resapan_dilaksanakan'] = count($this->home_model->sumur_resapan_dilaksanakan()->result());
        $data['lain_dilaksanakan'] = count($this->home_model->lain_dilaksanakan()->result());

        $data['artesis_galeri'] = ($this->home_model->artesis_dilaksanakan()->result());
        $data['drainase_galeri'] = ($this->home_model->drainase_dilaksanakan()->result());
        $data['mck_galeri'] = ($this->home_model->mck_dilaksanakan()->result());
        $data['jalan_galeri'] = ($this->home_model->jalan_dilaksanakan()->result());
        $data['septictank_galeri'] = ($this->home_model->septictank_dilaksanakan()->result());
        $data['septictank_komunal_galeri'] = ($this->home_model->septictank_komunal_dilaksanakan()->result());
        $data['sumur_dangkal_galeri'] = ($this->home_model->sumur_dangkal_dilaksanakan()->result());
        $data['sumur_resapan_galeri'] = ($this->home_model->sumur_resapan_dilaksanakan()->result());
        $data['lain_galeri'] = ($this->home_model->lain_dilaksanakan()->result());

        //grafik kegiatan tidak dilaksanakan
        $data['artesis_tidak_dilaksanakan'] = count($this->home_model->artesis_tidak_dilaksanakan()->result());
        $data['drainase_tidak_dilaksanakan'] = count($this->home_model->drainase_tidak_dilaksanakan()->result());
        $data['mck_tidak_dilaksanakan'] = count($this->home_model->mck_tidak_dilaksanakan()->result());
        $data['jalan_tidak_dilaksanakan'] = count($this->home_model->jalan_tidak_dilaksanakan()->result());
        $data['septictank_tidak_dilaksanakan'] = count($this->home_model->septictank_tidak_dilaksanakan()->result());
        $data['septictank_komunal_tidak_dilaksanakan'] = count($this->home_model->septictank_komunal_tidak_dilaksanakan()->result());
        $data['sumur_dangkal_tidak_dilaksanakan'] = count($this->home_model->sumur_dangkal_tidak_dilaksanakan()->result());
        $data['sumur_resapan_tidak_dilaksanakan'] = count($this->home_model->sumur_resapan_tidak_dilaksanakan()->result());
        $data['lain_tidak_dilaksanakan'] = count($this->home_model->lain_tidak_dilaksanakan()->result());

        $data['getJumlahKlasifikasiPerusahaan'] = ($this->home_model->getJumlahKlasifikasiPerusahaan()->result());
        $data['getJumlahJenisKelamin'] = ($this->home_model->getJumlahJenisKelamin()->result());

        $this->load->view('public/home', $data);
    }

    #berita

    function berita($offset) {
        $data['berita_list'] = $this->berita_model->artikel($offset);
        $this->load->view('public/berita', $data);
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

        $data['menu_list'] = $this->menu_model->select_all()->result();

        $kegiatan = $this->uri->segment(3);

        $artesis_list = ($this->home_model->artesis_dilaksanakan()->result());
        $drainase_list = ($this->home_model->drainase_dilaksanakan()->result());
        $mck_list = ($this->home_model->mck_dilaksanakan()->result());
        $jalan_list = ($this->home_model->jalan_dilaksanakan()->result());
        $septictank_list = ($this->home_model->septictank_dilaksanakan()->result());
        $septictank_komunal_list = ($this->home_model->septictank_komunal_dilaksanakan()->result());
        $sumur_dangkal_list = ($this->home_model->sumur_dangkal_dilaksanakan()->result());
        $sumur_resapan_list = ($this->home_model->sumur_resapan_dilaksanakan()->result());
        $lain_list = ($this->home_model->lain_dilaksanakan()->result());

//        //ambil koordinator artesis_list
//        $artesis_list = $this->public_model->artesis_all()->result();
//        //ambil koordinator drainase_list
//
//        $drainase_list = $this->public_model->drainase_all()->result();
//        //ambil koordinator jalan_list
//        $jalan_list = $this->public_model->jalan_all()->result();
//        //ambil koordinator kirmir_list
//        $kirmir_list = $this->public_model->kirmir_all()->result();
//        //ambil koordinator mck_list
//        $mck_list = $this->public_model->mck_all()->result();
//        //ambil koordinator septictank_list
//        $septictank_list = $this->public_model->septictank_all()->result();
//        //ambil koordinator drainase_list
//        $septictank_komunal_list = $this->public_model->septictank_komunal_all()->result();
//        //ambil koordinator sumur_dangkal_list
//        $sumur_dangkal_list = $this->public_model->sumur_dangkal_all()->result();
//        //ambil koordinator drainase_list
//        $sumur_resapan_list = $this->public_model->sumur_resapan_all()->result();

        #google map yg bisa di klik otomatis dapetin koordinatnya
        $config['center'] = '-6.900282, 107.530010';
        $config['map_height'] = '650px';
        $config['zoom'] = 'auto';
        $config['sensor'] = TRUE;
        $config['kmlLayerURL'] = 'http://sipepeng/assets/kml/cimahi.kml';
        $this->googlemaps->initialize($config);

        #tampilkan data koordinat artesis
        foreach ($artesis_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "Artesis <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
            $this->googlemaps->add_marker($marker);
        }
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
            $marker['icon'] = base_url() . "assets/public/map-icon/jalan.png";
            $this->googlemaps->add_marker($marker);

            $marker = array();
            $marker['position'] = $row->lat_akhir . "," . $row->long_akhir;
            $marker['infowindow_content'] = "Jalan <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = base_url() . "assets/public/map-icon/jalan.png";
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
        #tampilkan data koordinat sumur_dangkal_list
        foreach ($sumur_dangkal_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "Sumur DANGKAL <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=SD|ffeb3b|000000';
            $this->googlemaps->add_marker($marker);
        }
        #end tampilkan data koordinat septictank_komunal 
        #tampilkan data koordinat sumur_dangkal_list
        foreach ($sumur_resapan_list as $row) {

            #ambil fotonya jika ada
            $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

            $marker = array();
            $marker['position'] = $row->lat . "," . $row->long;
            $marker['infowindow_content'] = "Sumur RESAPAN <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=SR|eee|000000';
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
        $data['data_list'] = $this->kos_model->select_all()->result();
        $this->load->view('public/kos', $data);
    }

    #halaman kontak

    public function kontak() {
        $data['title'] = "KONTAK - SIPEPENG";
        $this->load->view('public/kontak', $data);
    }

    #halaman artesis

    public function artesis() {
        $data['title'] = "DATA ARTESIS - SIPEPENG";
        $data['data_list'] = $this->artesis_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/artesis', $data);
    }

    #halaman drainase

    public function drainase() {
        $data['title'] = "DATA DRAINASE - SIPEPENG";
        $data['data_list'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/drainase', $data);
    }

    #halaman jalan

    public function jalan() {
        $data['title'] = "DATA JALAN - SIPEPENG";
        $data['data_list'] = $this->jalan_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/jalan', $data);
    }

    #halaman mck

    public function mck() {
        $data['title'] = "DATA MCK - SIPEPENG";
        $data['data_list'] = $this->mck_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/mck', $data);
    }

    #halaman septictank

    public function septictank() {
        $data['title'] = "DATA SEPTICTANK - SIPEPENG";
        $data['data_list'] = $this->septictank_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/septictank', $data);
    }

    #halaman septictank_komunal

    public function septictank_komunal() {
        $data['title'] = "DATA SEPTICTANK - SIPEPENG";
        $data['data_list'] = $this->septictank_komunal_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/septictank_komunal', $data);
    }

    #halaman sumur_dangkal

    public function sumur_dangkal() {
        $data['title'] = "DATA SUMUR DANGKAL - SIPEPENG";
        $data['data_list'] = $this->sumur_dangkal_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/sumur_dangkal', $data);
    }

    #halaman sumur_resapan

    public function sumur_resapan() {
        $data['title'] = "DATA SUMUR RESAPAN - SIPEPENG";
        $data['data_list'] = $this->sumur_resapan_model->select_all_sudah_dilaksanakan()->result();
        $this->load->view('public/sumur_resapan', $data);
    }

}

?>

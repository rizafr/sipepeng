<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboards extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('home_model');
        $this->load->model('public_model');
        # menampilkan google map
        $this->load->library('googlemaps');

        $this->load->model('artesis_model');
        $this->load->model('drainase_model');
        $this->load->model('jalan_model');
        $this->load->model('mck_model');
        $this->load->model('septictank_model');
        $this->load->model('septictank_komunal_model');
        $this->load->model('sumur_dangkal_model');
        $this->load->model('sumur_resapan_model');
    }

    public function index() {
        //check sudah login atau belum
        if ($this->session->userdata('is_login')) {


            //dipanggil

            $data['title'] = "Home Admin | SIPEPENG";
            $data['user_name'] = $this->session->userdata('user_name');
             /////////////////////// KOPI DI TIAP FUNGSI /////////////////////////////
            #menampilkan menu
            #menampilkan menu sesuai hak ases				
            $akses = $this->access_lib->hak_akses($this->session->userdata('id_jenis_pengguna'));
            $data['menu_list'] = $akses;
            #end menampilkan menu sesuai hak ases	
            #jumlah status menu
            
            /////////////////////// END KOPI DI TIAP FUNGSI /////////////////////////////
            #jumlah status menu
            #drainase
            $data['jumDrainaseVerifikasi'] = ($this->home_model->getJumlahDrainaseVerifikasi());
            $data['jumDrainaseBelumDilaksanakan'] = ($this->home_model->getJumlahDrainaseBelumDilaksanakan());
            $data['jumDrainaseBelumSelesai'] = ($this->home_model->getJumlahDrainaseBelumSelesai());
            $data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];

            $data['jumPengguna'] = count($this->home_model->getJumlahPengguna());

            //grafik kegiatan perencanaan
            $data['artesis_awal'] = count($this->home_model->artesis_awal()->result());
            $data['drainase_awal'] = count($this->home_model->drainase_awal()->result());
            $data['mck_awal'] = count($this->home_model->mck_awal()->result());
            $data['jalan_awal'] = count($this->home_model->jalan_awal()->result());
            $data['septictank_awal'] = count($this->home_model->septictank_awal()->result());
            $data['septictank_komunal_awal'] = count($this->home_model->septictank_komunal_awal()->result());
            $data['sumur_dangkal_awal'] = count($this->home_model->sumur_dangkal_awal()->result());
            $data['sumur_resapan_awal'] = count($this->home_model->sumur_resapan_awal()->result());


            //grafik kegiatan dilaksanakan
            $data['artesis_dilaksanakan'] = count($this->home_model->artesis_dilaksanakan()->result());
            $data['drainase_dilaksanakan'] = count($this->home_model->drainase_dilaksanakan()->result());
            $data['mck_dilaksanakan'] = count($this->home_model->mck_dilaksanakan()->result());
            $data['jalan_dilaksanakan'] = count($this->home_model->jalan_dilaksanakan()->result());
            $data['septictank_dilaksanakan'] = count($this->home_model->septictank_dilaksanakan()->result());
            $data['septictank_komunal_dilaksanakan'] = count($this->home_model->septictank_komunal_dilaksanakan()->result());
            $data['sumur_dangkal_dilaksanakan'] = count($this->home_model->sumur_dangkal_dilaksanakan()->result());
            $data['sumur_resapan_dilaksanakan'] = count($this->home_model->sumur_resapan_dilaksanakan()->result());

            //grafik kegiatan tidak dilaksanakan
            $data['artesis_tidak_dilaksanakan'] = count($this->home_model->artesis_tidak_dilaksanakan()->result());
            $data['drainase_tidak_dilaksanakan'] = count($this->home_model->drainase_tidak_dilaksanakan()->result());
            $data['mck_tidak_dilaksanakan'] = count($this->home_model->mck_tidak_dilaksanakan()->result());
            $data['jalan_tidak_dilaksanakan'] = count($this->home_model->jalan_tidak_dilaksanakan()->result());
            $data['septictank_tidak_dilaksanakan'] = count($this->home_model->septictank_tidak_dilaksanakan()->result());
            $data['septictank_komunal_tidak_dilaksanakan'] = count($this->home_model->septictank_komunal_tidak_dilaksanakan()->result());
            $data['sumur_dangkal_tidak_dilaksanakan'] = count($this->home_model->sumur_dangkal_tidak_dilaksanakan()->result());
            $data['sumur_resapan_tidak_dilaksanakan'] = count($this->home_model->sumur_resapan_tidak_dilaksanakan()->result());

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

            $this->load->view('admin/dashboard', $data);
        } else {
            redirect('public/homes');
        }
    }

}

?>

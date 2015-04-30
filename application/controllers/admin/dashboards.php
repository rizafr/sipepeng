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
    }

    public function index() {
        //check sudah login atau belum
        if ($this->session->userdata('is_login')) {


            //dipanggil

            $data['title'] = "Home Admin | SIPEPENG";
            $data['user_name'] = $this->session->userdata('user_name');
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

            #rekap data
            $data['jumPengguna'] = $this->home_model->getJumlahPengguna();
            #jumlah semua data
            $data['jumArtesis'] = $this->home_model->getJumlahArtesis();
            $data['jumDrainase'] = $this->home_model->getJumlahDrainase();
            $data['jumJalan'] = $this->home_model->getJumlahJalan();
            $data['jumKirmir'] = $this->home_model->getJumlahKirmir();
            $data['jumMck'] = $this->home_model->getJumlahMck();
            $data['jumSeptictank'] = $this->home_model->getJumlahSeptictank();
            $data['jumSeptictankKomunal'] = $this->home_model->getJumlahSeptictankKomunal();
            $data['jumSumurDangkal'] = $this->home_model->getJumlahSumurDangkal();
            $data['jumSumurResapan'] = $this->home_model->getJumlahSumurResapan();
            $data['jumlahData'] = $data['jumArtesis'] + $data['jumDrainase'] + $data['jumJalan'] + $data['jumKirmir'] + $data['jumMck'] + $data['jumSeptictank'] + $data['jumSeptictankKomunal'] + $data['jumSumurDangkal'] + $data['jumSumurResapan'];

            #persentasi jumlah semua data
            $data['persenArtesis'] = ($data['jumArtesis'] / $data['jumlahData'] ) * 100;
            $data['persenDrainase'] = ($data['jumDrainase'] / $data['jumlahData'] ) * 100;
            $data['persenJalan'] = ($data['jumJalan'] / $data['jumlahData'] ) * 100;
            $data['persenKirmir'] = ($data['jumKirmir'] / $data['jumlahData'] ) * 100;
            $data['persenMck'] = ($data['jumMck'] / $data['jumlahData'] ) * 100;
            $data['persenSeptictank'] = ($data['jumSeptictank'] / $data['jumlahData'] ) * 100;
            $data['persenSeptictankKomunal'] = ($data['jumSeptictankKomunal'] / $data['jumlahData'] ) * 100;
            $data['persenSumurDangkal'] = ($data['jumSumurDangkal'] / $data['jumlahData'] ) * 100;
            $data['persenSumurResapan'] = ($data['jumSumurResapan'] / $data['jumlahData'] ) * 100;

            #jumlah status menu
            #drainase
            $data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
            $data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
            $data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
            $data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];

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
                $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';

                $polyline = array();
                $polyline['points'] = array($row->lat_awal . "," . $row->long_awal, $row->lat_akhir . "," . $row->long_akhir);
                $this->googlemaps->add_polyline($polyline);

                $marker = array();
                $marker['position'] = $row->lat_awal . "," . $row->long_awal;
                $marker['infowindow_content'] = "Drainase <br /> RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />	" . $foto;
                $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
                $this->googlemaps->add_marker($marker);

                $marker = array();
                $marker['position'] = $row->lat_akhir . "," . $row->long_akhir;
                $marker['infowindow_content'] = "Drainase <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
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

            $this->load->view('admin/dashboard', $data);
        } else {
            redirect('public/homes');
        }
    }

}

?>

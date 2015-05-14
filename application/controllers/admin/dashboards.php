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
				
				//grafik kegiatan perencanaan
		 $data['artesis_awal'] = count($this->artesis_model->select_all_data_awal()->result());
		 $data['drainase_awal'] = count($this->drainase_model->select_all_data_awal()->result());
		 $data['mck_awal'] = count($this->mck_model->select_all_data_awal()->result());
		 $data['jalan_awal'] = count($this->jalan_model->select_all_data_awal()->result());
		 $data['septictank_awal'] = count($this->septictank_model->select_all_data_awal()->result());
		 $data['septictank_komunal_awal'] = count($this->septictank_komunal_model->select_all_data_awal()->result());
		 $data['sumur_dangkal_awal'] = count($this->sumur_dangkal_model->select_all_data_awal()->result());
		 $data['sumur_resapan_awal'] = count($this->sumur_resapan_model->select_all_data_awal()->result());
		 
		 
		//grafik kegiatan dilaksanakan
		 $data['artesis_dilaksanakan'] = count($this->artesis_model->select_all_sudah_dilaksanakan()->result());
		 $data['drainase_dilaksanakan'] = count($this->drainase_model->select_all_sudah_dilaksanakan()->result());
		 $data['mck_dilaksanakan'] = count($this->mck_model->select_all_sudah_dilaksanakan()->result());
		 $data['jalan_dilaksanakan'] = count($this->jalan_model->select_all_sudah_dilaksanakan()->result());
		 $data['septictank_dilaksanakan'] = count($this->septictank_model->select_all_sudah_dilaksanakan()->result());
		 $data['septictank_komunal_dilaksanakan'] = count($this->septictank_komunal_model->select_all_sudah_dilaksanakan()->result());
		 $data['sumur_dangkal_dilaksanakan'] = count($this->sumur_dangkal_model->select_all_sudah_dilaksanakan()->result());
		 $data['sumur_resapan_dilaksanakan'] = count($this->sumur_resapan_model->select_all_sudah_dilaksanakan()->result());
		 
		 //grafik kegiatan tidak dilaksanakan
		 $data['artesis_tidak_dilaksanakan'] = count($this->artesis_model->select_all_tidak_dilaksanakan()->result());
		 $data['drainase_tidak_dilaksanakan'] = count($this->drainase_model->select_all_tidak_dilaksanakan()->result());
		 $data['mck_tidak_dilaksanakan'] = count($this->mck_model->select_all_tidak_dilaksanakan()->result());
		 $data['jalan_tidak_dilaksanakan'] = count($this->jalan_model->select_all_tidak_dilaksanakan()->result());
		 $data['septictank_tidak_dilaksanakan'] = count($this->septictank_model->select_all_tidak_dilaksanakan()->result());
		 $data['septictank_komunal_tidak_dilaksanakan'] = count($this->septictank_komunal_model->select_all_tidak_dilaksanakan()->result());
		 $data['sumur_dangkal_tidak_dilaksanakan'] = count($this->sumur_dangkal_model->select_all_tidak_dilaksanakan()->result());
		 $data['sumur_resapan_tidak_dilaksanakan'] = count($this->sumur_resapan_model->select_all_tidak_dilaksanakan()->result());
		 
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
				
				// #tampilkan data koordinat artesis
				// foreach ($artesis_list as $row) {
				
				// $path = base_url();
                // #ambil fotonya jika ada
                // $foto = isset($row->foto) ? "<img src='" . base_url() . "assets/upload/foto/" . $row->foto . "' height='150px' width='250px'/>" : 'Belum Ada foto';
				
                // $marker = array();
                // $marker['position'] = $row->lat . "," . $row->long;
                // $marker['infowindow_content'] = "MCK <br />RW : " . $row->rw . " <br /> Alamat:  " . $row->alamat . "<br />" . $foto;
                // $marker['icon'] = base_url() . "assets/public/map-icon/mck.png";
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

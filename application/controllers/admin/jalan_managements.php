<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Jalan_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		
		function __construct() {
			parent::__construct();
			$this->load->model('jalan_model');
			$this->load->model('menu_model');
			$this->load->helper(array('form', 'url'));
			
			# menampilkan google map
			$this->load->library('googlemaps');
			
			
			
		}
		
		public function index() {
			//check sudah login atau belum
			if ($this->session->userdata('is_login')) {
				
				$data['title'] = "Jalan | SIPEPENG";
				$data['username'] = $this->session->userdata('username');
				
				/////////////////////// KOPI DI TIAP FUNGSI /////////////////////////////
				#menampilkan menu
				#menampilkan menu sesuai hak ases				
				$akses = $this->access_lib->hak_akses($this->session->userdata('id_jenis_pengguna'));
				$data['menu_list'] = $akses;
			#end menampilkan menu sesuai hak ases	
            #jumlah status menu
            #drainase
            $data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
            $data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
            $data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
            $data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];
            /////////////////////// END KOPI DI TIAP FUNGSI /////////////////////////////
			
            //mengambil uri status
            $status = $this->uri->segment(4);
			
            //status 1 = data awal
            if ($status == '1') {
                $data['jalan_list'] = $this->jalan_model->select_all_data_awal()->result();
                $jumlahJalan = count($data['jalan_list']);
			}
			
            //status 2 = data verifikasi
            if ($status == '2') {
                $data['jalan_list'] = $this->jalan_model->select_all_verifikasi()->result();
			}
			
            //status 3 = data progress
            if ($status == '3') {
                $data['jalan_list'] = $this->jalan_model->select_all_sedang_dilaksanakan()->result();
			}
			
            //status 4 = data sudah dilaksanakan
            if ($status == '4') {
                $data['jalan_list'] = $this->jalan_model->select_all_sudah_dilaksanakan()->result();
			}
			
            //status 5 = data tidak dilaksanakan
            if ($status == '5') {
                $data['jalan_list'] = $this->jalan_model->select_all_tidak_dilaksanakan()->result();
			}
			
            $data['status'] = $status;
            $this->load->view('admin/jalan/jalan_list', $data);
			} else {
            redirect('public/homes');
		}
	}
	
    public function gotoForm() {
        //check sudah login atau belum
        if ($this->session->userdata('is_login')) {
			
            $data['title'] = "Data Awal Jalan | SIPEPENG";
            $data['judulForm'] = "Data Awal Jalan";
            $data['username'] = $this->session->userdata('username');
			
            //mengambil uri aksi
            $data['aksi'] = $this->uri->segment(4);
			
			/////////////////////// KOPI DI TIAP FUNGSI /////////////////////////////
            #menampilkan menu
            #menampilkan menu sesuai hak ases				
            $akses = $this->access_lib->hak_akses($this->session->userdata('id_jenis_pengguna'));
            $data['menu_list'] = $akses;
		#end menampilkan menu sesuai hak ases	
		#jumlah status menu
		#drainase
		$data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
		$data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
		$data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
		$data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];
		/////////////////////// END KOPI DI TIAP FUNGSI /////////////////////////////
		
		#ratih kopi paste dari sini
		#google map yg bisa di klik otomatis dapetin koordinatnya
		$config['center'] = '-6.900282, 107.530010';
		$config['zoom'] = 'auto';
		
		$this->googlemaps->initialize($config);
		
		#marker A
		$marker = array();
		$marker['position'] = '-6.900282, 107.530010'; //posisi awal
		$marker['draggable'] = true;
		$marker['ondragend'] = 'getLokasi(event.latLng.lat(), event.latLng.lng());'; //buat javascript di viewnya namanya getLokasi
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);
		
		#marker B
		$marker = array();
		$marker['position'] = '-6.900232, 107.530030'; //posisi akhir
		$marker['draggable'] = true;
		$marker['ondragend'] = 'getLokasiAkhir(event.latLng.lat(), event.latLng.lng());'; //buat javascript di viewnya namanya getLokasiAkhir
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
		$this->googlemaps->add_marker($marker);
		
		//fungsi untuk membuat peta 
		$data['map'] = $this->googlemaps->create_map();
	#end google map
# end ratih kopi paste dari sini

if ($data['aksi'] == 'edit') {
	//mengambil uri aksi
	$id_jalan = $this->uri->segment(5);
	$data['jalan_list'] = $this->jalan_model->getJalanById($id_jalan);
}

$this->load->view('admin/jalan/jalan_olahdata', $data);
} else {
redirect('public/homes');
}
}

public function process() {
	/////////////////////// KOPI DI TIAP FUNGSI /////////////////////////////
	#menampilkan menu
	#menampilkan menu sesuai hak ases				
	$akses = $this->access_lib->hak_akses($this->session->userdata('id_jenis_pengguna'));
	$data['menu_list'] = $akses;
#end menampilkan menu sesuai hak ases	
#jumlah status menu
#drainase
$data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
$data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
$data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
$data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];
/////////////////////// END KOPI DI TIAP FUNGSI /////////////////////////////

$aksi = $this->input->post('aksi');
$data['aksi'] = $aksi;
$id_jalan = $this->input->post('id_jalan');

$this->form_validation->set_rules('rt', 'RT', 'trim|required|number');
$this->form_validation->set_rules('rw', 'RW', 'trim|required|number');
$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
$this->form_validation->set_rules('panjang', 'Panjang', 'trim|required');
$this->form_validation->set_rules('lebar', 'Lebar', 'trim|required');


//$this->form_validation->set_error_delimiters('', '<br/>');
$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

if ($this->form_validation->run() == TRUE) {
	$data['rt'] = $this->input->post('rt');
	$data['rw'] = $this->input->post('rw');
	$data['alamat'] = $this->input->post('alamat');
	$data['panjang'] = $this->input->post('panjang');
	$data['lebar'] = $this->input->post('lebar');
	$data['kategori_jalan'] = $this->input->post('kategori_jalan');
	$data['anggaran'] = $this->input->post('anggaran');
	$data['sumber_data'] = $this->input->post('sumber_data');
	$data['tahun_usulan'] = $this->input->post('tahun_usulan');
	$data['lat_awal'] = $this->input->post('lat_awal');
	$data['long_awal'] = $this->input->post('long_awal');
	$data['lat_akhir'] = $this->input->post('lat_akhir');
	$data['long_akhir'] = $this->input->post('long_akhir');
	$data['ket'] = $this->input->post('ket');
	$ket = "jalan";
	
	//mengecek apakah foto di upload
	if ($_FILES['foto']['name'] != "") {
		$foto = $this->upload_foto($ket, $data['tahun_usulan'], $data['rw'], $data['alamat']);
	}
	$data['foto'] = $foto;
	
	//mengecek apakah dokumen di upload
	if ($_FILES['dokumen']['name'] != "") {
		$dokumen = $this->upload_dokumen($ket, $data['tahun_usulan'], $data['rw'], $data['alamat']);
	}
	$data['dokumen'] = $dokumen;
	
	//mengecek aksi
	# jika tambah
	if ($aksi == 'add') {
		//proses menginput ke model
		$hasil = $this->jalan_model->add($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
	}
	# jika edit
	if ($aksi == 'edit') {
		
		//proses menginput ke model
		$hasil = $this->jalan_model->update($id_jalan);
		if ($hasil == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
			} else {
			$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
		}
	}
	
	$data['username'] = $this->session->userdata('username');
	redirect('admin/jalan_managements/index/1', $data);
	} else {
	$data['title'] = "Data Awal Jalan | SIPEPENG";
	$data['judulForm'] = "Data Awal Jalan";
	$data['username'] = $this->session->userdata('username');
	$data['jalan_list'] = $this->jalan_model->getJalanById($id_jalan);
	$this->load->view('admin/jalan/jalan_olahdata', $data);
}
}

function delete() {
	$id_jalan = $this->uri->segment(4);
	$status = $this->uri->segment(5);
	if (empty($id_jalan)) {
		$this->session->set_flashdata('message', 'Error Invalid');
		redirect('admin/jalan_managements/index/' . $status);
        } else {
		$this->jalan_model->delete($id_jalan);
		$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
		redirect('admin/jalan_managements/index/' . $status);
	}
}

//fungsi menampilkan berdasarkan id yg dipilih
public function view($id_jalan) {
	/////////////////////// KOPI DI TIAP FUNGSI /////////////////////////////
	#menampilkan menu
	#menampilkan menu sesuai hak ases				
	$akses = $this->access_lib->hak_akses($this->session->userdata('id_jenis_pengguna'));
	$data['menu_list'] = $akses;
#end menampilkan menu sesuai hak ases	
#jumlah status menu
#drainase
$data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
$data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
$data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
$data['jumStatusDrainase'] = $data['jumDrainaseVerifikasi'] + $data['jumDrainaseBelumDilaksanakan'] + $data['jumDrainaseBelumSelesai'];
/////////////////////// END KOPI DI TIAP FUNGSI /////////////////////////////
$data['id_jalan'] = $id_jalan;
$data['title'] = "View Data Jalan | SIPEPENG";
$data['judulForm'] = "Detail Jalan";
$data['jalan_list'] = $this->jalan_model->getJalanById($id_jalan);
// var_dump($data['jalan_list']['lat_awal']);
$data['username'] = $this->session->userdata('username');

# menampilkan google map ke dalam view berdasarkan koordinat didalam database
$config['center'] = '-6.900282, 107.530010';
$config['zoom'] = '16';
$this->googlemaps->initialize($config);

#garis di google map
$polyline = array();
$polyline['points'] = array($data['jalan_list']['lat_awal'] . "," . $data['jalan_list']['long_awal'], $data['jalan_list']['lat_akhir'] . "," . $data['jalan_list']['long_akhir']);
$this->googlemaps->add_polyline($polyline);

#marker / tanda di google map
$marker = array();
$marker['position'] = $data['jalan_list']['lat_awal'] . "," . $data['jalan_list']['long_awal'];
$marker['infowindow_content'] = "RW : " . $data['jalan_list']['rw'] . " <br /> Alamat:  " . $data['jalan_list']['alamat'];
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
$this->googlemaps->add_marker($marker);

#marker / tanda di google map
$marker = array();
$marker['position'] = $data['jalan_list']['lat_akhir'] . "," . $data['jalan_list']['long_akhir'];
$marker['infowindow_content'] = "RW : " . $data['jalan_list']['rw'] . " <br /> Alamat:  " . $data['jalan_list']['alamat'];
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
$this->googlemaps->add_marker($marker);

#buat peta google map
$data['map'] = $this->googlemaps->create_map();

# end menampilkan google map ke dalam view berdasarkan koordinat didalam database
# kopi sampe sini

$this->load->view('admin/jalan/jalan_view', $data);
} 

//fungsi menampilkan berdasarkan id yg dipilih
public function cetak($id_jalan) {
	//Format Tanggal Berbahasa Indonesia 
	
	// Array Hari
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
	$hari = $array_hari[date('N')];
	
	//Format Tanggal 
	$tanggal = date ('j');
	
	//Array Bulan 
	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember'); 
	$bulan = $array_bulan[date('n')];
	
	//Format Tahun 
	$tahun = date('Y');
	
	$data['jalan_list'] = $this->jalan_model->getJalanById($id_jalan);
	
	$this->load->library('Word');
	
	
	$document = $this->word->loadTemplate('etc/data/template/JalanTemplate.docx');
	
	$document->setValue('tanggalSurat', $tanggal ." ". $bulan ." ". $tahun);
	$document->setValue('rt', $data['jalan_list']['rt'] );
	$document->setValue('rw', $data['jalan_list']['rw'] );
	$document->setValue('alamat',$data['jalan_list']['alamat'] );
	
	$path = 'C:SIPEPENG';
	if (!file_exists($path)) {
		mkdir($path , 0777, true);
	}
	
	$document->save($path.'/SURAT USULAN JALAN RT '.$data['jalan_list']['rt'].' RW '.$data['jalan_list']['rw'].'_'.$tanggal .' '. $bulan .' '. $tahun.'.docx');
	
	// $file = "SURAT USULAN JALAN RT " .$data['jalan_list']['rt']." RW ".$data['jalan_list']['rw']."_".$tanggal ." ". $bulan ." ". $tahun.".docx";
	// header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    // header('Content-Disposition: attachment; filename="'.basename($file).'"' );
    // header('Content-Transfer-Encoding: binary');
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate');
    // header('Pragma: public');
    // header('Content-Length: ' . filesize($file));
	
	$this->session->set_flashdata('message', '<div class="alert alert-success">Surat Usulan Berhasil Didownload. Silakan lihat di C:SIPEPENG</div>');
	redirect('admin/jalan_managements/view/'.$id_jalan);
}

function update_status_data_awal() {
	$id_jalan = $this->uri->segment(4);
	$hasil = $this->jalan_model->update_status_data_awal($id_jalan);
	//message berhasil loncat
	$this->session->set_flashdata('message', '<div class="alert alert-success"> Data berhasil diverifikasi. <br /> Klik menu Data Verifikasi </div>');
	redirect('admin/jalan_managements/index/1');
}

function update_status_verifikasi() {
	$id_jalan = $this->uri->segment(4);
	$hasil = $this->jalan_model->update_status_verifikasi($id_jalan);
	//message berhasil loncat
	$this->session->set_flashdata('message', '<div class="alert alert-success"> Data berhasil diproses. <br /> Klik menu Data Sedang dilaksanakan </div>');
	
	redirect('admin/jalan_managements/index/2');
}

function update_status_sedang_dilaksanakan() {
	$id_jalan = $this->uri->segment(4);
	$hasil = $this->jalan_model->update_status_sedang_dilaksanakan($id_jalan);
	//message berhasil loncat
	$this->session->set_flashdata('message', '<div class="alert alert-success"> Data berhasil dilaksanakan. <br /> Klik menu Data Sudah Dilaksanakan </div>');
	
	redirect('admin/jalan_managements/index/3');
}

function update_status_sudah_dilaksanakan() {
	$id_jalan = $this->uri->segment(4);
	$hasil = $this->jalan_model->update_status_data_awal($id_jalan);
	
	redirect('admin/jalan_managements/index/4');
}

function update_status_tidak_dilaksanakan() {
	$id_jalan = $this->input->post('id');
	$hasil = $this->jalan_model->update_status_tidak_dilaksanakan($id_jalan);
	//message berhasil loncat
	$this->session->set_flashdata('message', '<div class="alert alert-success"> Data permintaan ditolak. <br /> Klik menu Data Tidak Dilaksanakan </div>');
	
	redirect('admin/jalan_managements/index/2');
    }
	
	# Upload Foto
	
    function upload_foto($ket, $tahun_usulan, $rw, $alamat) {
	$this->load->library('upload');
	
	$image_foto = "noimage.jpg";
	$field_name = "foto";
	$file_name = $_FILES['foto']['name'];
	
	if ($file_name != "") {
	$config = array(
	'file_name' => preg_replace("/[^A-Za-z0-9_-\s]/", "", $ket . "_" . $tahun_usulan . "_" . $rw . "_" . $alamat),
	'overwrite' => TRUE,
	'remove_spaces' => TRUE,
	'allowed_types' => 'jpg|JPG|jpeg|JPEG|gif|png',
	'upload_path' => './assets/upload/foto',
	'max_size' => 5000
	);
	$this->upload->initialize($config);
	
	if ($this->upload->do_upload($field_name)) {
	$image_data = $this->upload->data();
	$image_foto = $image_data['file_name'];
	}
	}
	
	return $image_foto;
    }
	
	# Upload Dokumen
	
    function upload_dokumen($ket, $tahun_usulan, $rw, $alamat) {
	$this->load->library('upload');
	
	$image_dokumen = "no_image.jpg";
	$field_name = "dokumen";
	$file_name = $_FILES['dokumen']['name'];
	
	if ($file_name != "") {
	$config = array(
	'file_name' => preg_replace("/[^A-Za-z0-9_-\s]/", "", $ket . "_" . $tahun_usulan . "_" . $rw . "_" . $alamat),
	'overwrite' => TRUE,
	'remove_spaces' => TRUE,
	'allowed_types' => 'jpg|JPG|jpeg|JPEG|gif|png',
	'upload_path' => './assets/upload/dokumen',
	'max_size' => 5000
	);
	$this->upload->initialize($config);
	
	if ($this->upload->do_upload($field_name)) {
	$image_data = $this->upload->data();
	$image_dokumen = $image_data['file_name'];
	}
	}
	
	return $image_dokumen;
    }
	
	}
	
	?>					
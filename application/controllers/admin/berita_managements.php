<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Berita_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('berita_model');
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
				
				$data['title'] = "LIST BERITA  - SIPEPENG";
				$data['data_list'] = $this->berita_model->select_all()->result();
				$this->load->view('admin/berita/berita_list', $data);
				} else {
				redirect('public/homes');
			}
		}  
		
		
		function gotoForm() {
			$data['aksi'] = $this->uri->segment(4);
			
			if ($data['aksi'] == 'edit') {
				//mengambil uri aksi
				$id_berita = $this->uri->segment(5);
				$data['berita_list'] = $this->berita_model->getBeritaById($id_berita);
			}
			
			$data['judulForm'] = "Data Berita";
			$data['title'] = "LIST BERITA - SIPEPENG";
			$this->load->view('admin/berita/berita_olahdata', $data);		 
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
			$id_berita = $this->input->post('id_berita');
			
			  $this->form_validation->set_rules('judul_berita', 'RT', 'trim|required');
			//$this->form_validation->set_error_delimiters('', '<br/>');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {
				$data['judul_berita'] = $this->input->post('judul_berita');
				$data['isi_berita'] = $this->input->post('isi_berita');
				$data['tgl_berita'] = $this->input->post('tgl_berita');
				$ket = "Berita";
				
				//mengecek apakah foto di upload
				if($_FILES['foto']['name'] != "")
				{
					$foto = $this->upload_foto($ket, $data['judul_berita']);
				}
				 $data['foto'] = $foto;
				 
				 //mengecek apakah dokumen di upload
				if($_FILES['dokumen']['name'] != "")
				{
					$dokumen = $this->upload_dokumen($ket, $data['judul_berita']);
				}
					$data['dokumen'] = $dokumen;
					
				//mengecek aksi
				# jika tambah
				if ($aksi == 'add') {
					//proses menginput ke model
					$hasil = $this->berita_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if ($aksi == 'edit') {
					//proses menginput ke model
					$hasil = $this->berita_model->update($id_berita);
					if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
						} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/berita_managements/index', $data);
				} else {
					$data['judulForm'] = "Data Berita";
					$data['title'] = "LIST BERITA - SIPEPENG";
					$data['username'] = $this->session->userdata('username');
					$data['berita_list'] = $this->berita_model->getBeritaById($id_berita);
					$this->load->view('admin/berita/berita_olahdata', $data);
			}
		}
		
		function delete() {
			$id_berita = $this->uri->segment(4);
			if (empty($id_berita)) {
				$this->session->set_flashdata('message', 'Error Invalid');
				redirect('admin/berita_managements/index');
			} else {
				$this->berita_model->delete($id_berita);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
				redirect('admin/berita_managements/index');
			}
    }
	
	//fungsi menampilkan berdasarkan id yg dipilih
		public function view($id_berita){
			
			$data['id_berita'] = $id_berita;
			$data['title'] = "View Data Berita | SIPEPENG";
			$data['judulForm'] = "Detail Berita";
			$data['berita_list'] = $this->berita_model->getBeritaById($id_berita);
			$data['username'] = $this->session->userdata('username');
			
			$this->load->view('admin/berita/berita_view',$data);
		}
	}
	
	# Upload Foto
		function upload_foto($ket,$judul_berita)
		{
			$this->load->library('upload');
			
			$image_foto = "noimage.jpg";
			$field_name = "foto";
			$file_name = $_FILES['foto']['name'];
			
			if($file_name != "")
			{
				$config = array(
					'file_name'		=> preg_replace("/[^A-Za-z0-9_-\s]/", "", $ket."_".$judul_berita),
					'overwrite'		=> TRUE,
					'remove_spaces'	=> TRUE,
					'allowed_types' => 'jpg|JPG|jpeg|JPEG|gif|png',
					'upload_path'	=> './assets/upload/foto',
					'max_size' 		=> 5000
				);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload($field_name))
				{
					$image_data = $this->upload->data();
					$image_foto = $image_data['file_name'];
				}
			}
			
			return $image_foto;
		}
	
?>					
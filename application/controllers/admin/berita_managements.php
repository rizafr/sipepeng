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
			//menampilkan menu..wajib ada
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
			// end menampilkan menu..wajib ada
			
			$aksi = $this->input->post('aksi');
			$data['aksi'] = $aksi;
			$id_berita = $this->input->post('id_berita');
			
			if ($this->form_validation->run() == TRUE) {
				$data['judul_berita'] = $this->input->post('judul_berita');
				$data['isi_berita'] = $this->input->post('isi_berita');
				$data['tgl_berita'] = $this->input->post('tgl_berita');
				
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
	}
	
?>					
<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Umkm_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('umkm_model');
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
				
				$data['title'] = "DAFTAR UMKM - SIPEPENG";
				$data['data_list'] = $this->umkm_model->select_all()->result();
				$this->load->view('admin/umkm/umkm_list', $data);
				} else {
				redirect('public/homes');
			}
		}  
		
		
		function gotoForm() {
			$data['aksi'] = $this->uri->segment(4);
			
			if ($data['aksi'] == 'edit') {
				//mengambil uri aksi
				$id_umkm = $this->uri->segment(5);
				$data['umkm_list'] = $this->umkm_model->getUmkmById($id_umkm);
			}
			
			$data['judulForm'] = "Data Umkm";
			$data['title'] = "DAFTAR UMKM - SIPEPENG";
			$this->load->view('admin/umkm/umkm_olahdata', $data);		 
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
			$id_umkm = $this->input->post('id_umkm');
			$this->form_validation->set_rules('rt', 'RT', 'trim|required|number');
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|number');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {
				$data['kota'] = $this->input->post('kota');
				$data['kecamatan'] = $this->input->post('kecamatan');
				$data['kelurahan'] = $this->input->post('kelurahan');
				$data['nbs'] = $this->input->post('nbs');
				$data['rw'] = $this->input->post('rw');
				$data['rt'] = $this->input->post('rt');
				$data['klasifikasi_perusahaan'] = $this->input->post('klasifikasi_perusahaan');
				$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
				$data['alamat_perusahaan'] = $this->input->post('alamat_perusahaan');
				$data['kegiatan_utama'] = $this->input->post('kegiatan_utama');
				$data['jenis_usaha'] = $this->input->post('jenis_usaha');
				$data['jk_pengusaha'] = $this->input->post('jk_pengusaha');
				$data['prov_tempat_lahir_pengusaha'] = $this->input->post('prov_tempat_lahir_pengusaha');
				$data['kota_tempat_lahir_pengusaha'] = $this->input->post('kota_tempat_lahir_pengusaha');
				$data['bentuk_badan_hukum'] = $this->input->post('bentuk_badan_hukum');
				$data['tahun_mulai_operasi'] = $this->input->post('tahun_mulai_operasi');
				$data['gabung_paguyuban'] = $this->input->post('gabung_paguyuban');
				$data['bermitra'] = $this->input->post('bermitra');
				$data['bentuk_kemitraan'] = $this->input->post('bentuk_kemitraan');
				$data['pembinaan_pemerintah'] = $this->input->post('pembinaan_pemerintah');
				$data['pemberi_pembinaan'] = $this->input->post('pemberi_pembinaan');
				$data['eksport'] = $this->input->post('eksport');
				$data['persentase_eksport'] = $this->input->post('persentase_eksport');
				$data['import'] = $this->input->post('import');
				$data['persentase_import'] = $this->input->post('persentase_import');
								
				//mengecek aksi
				# jika tambah
				if ($aksi == 'add') {
					//proses menginput ke model
					$hasil = $this->umkm_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if ($aksi == 'edit') {
					//proses menginput ke model
					$hasil = $this->umkm_model->update($id_umkm);
					if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
						} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/umkm_managements/index', $data);
				} else {
					$data['judulForm'] = "Data Umkm";
					$data['title'] = "DAFTAR UMKM - SIPEPENG";
					$data['username'] = $this->session->userdata('username');
					$data['umkm_list'] = $this->umkm_model->getUmkmById($id_umkm);
					$this->load->view('admin/umkm/umkm_olahdata', $data);
			}
		}
		
		function delete() {
			$id_umkm = $this->uri->segment(4);
			if (empty($id_umkm)) {
				$this->session->set_flashdata('message', 'Error Invalid');
				redirect('admin/umkm_managements/index');
			} else {
				$this->umkm_model->delete($id_umkm);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
				redirect('admin/umkm_managements/index');
			}
    }
	}
	
?>					
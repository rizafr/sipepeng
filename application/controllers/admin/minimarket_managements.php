<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Minimarket_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('minimarket_model');
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
				
				$data['title'] = "DAFTAR MINIMARKET - SIPEPENG";
				$data['data_list'] = $this->minimarket_model->select_all()->result();
				$this->load->view('admin/minimarket/minimarket_list', $data);
				} else {
				redirect('public/homes');
			}
		}  
		
		
		function gotoForm() {
			$data['aksi'] = $this->uri->segment(4);
			
			if ($data['aksi'] == 'edit') {
				//mengambil uri aksi
				$id_minimarket = $this->uri->segment(5);
				$data['minimarket_list'] = $this->minimarket_model->getMinimarketById($id_minimarket);
			}
			
			$data['judulForm'] = "Data Minimarket";
			$data['title'] = "DAFTAR MINIMARKET - SIPEPENG";
			$this->load->view('admin/minimarket/minimarket_olahdata', $data);		 
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
			$id_minimarket = $this->input->post('id_minimarket');
			$this->form_validation->set_rules('rt', 'RT', 'trim|required|number');
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|number');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {
				$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
				$data['bentuk_perusahaan'] = $this->input->post('bentuk_perusahaan');
				$data['alamat'] = $this->input->post('alamat');
				$data['rt'] = $this->input->post('rt');
				$data['rw'] = $this->input->post('rw');
				$data['nama_pemilik'] = $this->input->post('nama_pemilik');
				$data['jml_pekerja'] = $this->input->post('jml_pekerja');
				$data['jam_kerja'] = $this->input->post('jam_kerja');
				$data['status_tanah'] = $this->input->post('status_tanah');
				$data['luas_bangunan'] = $this->input->post('luas_bangunan');
				$data['luas_ruang_usaha'] = $this->input->post('luas_ruang_usaha');
				$data['no_ijin'] = $this->input->post('no_ijin');
				
				//mengecek aksi
				# jika tambah
				if ($aksi == 'add') {
					//proses menginput ke model
					$hasil = $this->minimarket_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if ($aksi == 'edit') {
					//proses menginput ke model
					$hasil = $this->minimarket_model->update($id_minimarket);
					if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
						} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/minimarket_managements/index', $data);
				} else {
					$data['judulForm'] = "Data Minimarket";
					$data['title'] = "DAFTAR MINIMARKET - SIPEPENG";
					$data['username'] = $this->session->userdata('username');
					$data['minimarket_list'] = $this->minimarket_model->getMinimarketById($id_minimarket);
					$this->load->view('admin/minimarket/minimarket_olahdata', $data);
			}
		}
		
	function delete() {
        $id_minimarket = $this->uri->segment(4);
        if (empty($id_minimarket)) {
            $this->session->set_flashdata('message', 'Error Invalid');
            redirect('admin/minimarket_managements/index');
        } else {
            $this->minimarket_model->delete($id_minimarket);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
            redirect('admin/minimarket_managements/index');
        }
    }
		
	}
			
<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Kos_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('kos_model');
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
				
				$data['title'] = "DAFTAR RUMAH KOS DAN TOKO JAMU  - SIPEPENG";
				$data['data_list'] = $this->kos_model->select_all()->result();
				$this->load->view('admin/kos/kos_list', $data);
				} else {
				redirect('public/homes');
			}
		}  
		
		
		function gotoForm() {
			$data['aksi'] = $this->uri->segment(4);
			
			if ($data['aksi'] == 'edit') {
				//mengambil uri aksi
				$id_kos = $this->uri->segment(5);
				$data['kos_list'] = $this->kos_model->getKosById($id_kos);
			}
			
			$data['judulForm'] = "Data Rumah Kos dan Toko Jamu";
			$data['title'] = "DAFTAR RUMAH KOS DAN TOKO JAMU - SIPEPENG";
			$this->load->view('admin/kos/kos_olahdata', $data);		 
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
			$id_kos = $this->input->post('id_kos');
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|number');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {
				$data['nama_pemilik'] = $this->input->post('nama_pemilik');
				$data['alamat_pemilik'] = $this->input->post('alamat_pemilik');
				$data['rw'] = $this->input->post('rw');
				$data['jml_kamar'] = $this->input->post('jml_kamar');
				$data['jml_orang_perkamar'] = $this->input->post('jml_orang_perkamar');
				$data['ijin_usaha'] = $this->input->post('ijin_usaha');
				$data['harga_sewa'] = $this->input->post('harga_sewa');
				$data['ket'] = $this->input->post('ket');
				
				//mengecek aksi
				# jika tambah
				if ($aksi == 'add') {
					//proses menginput ke model
					$hasil = $this->kos_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if ($aksi == 'edit') {
					//proses menginput ke model
					$hasil = $this->kos_model->update($id_kos);
					if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
						} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/kos_managements/index', $data);
				} else {
					$data['judulForm'] = "Data Rumah Kos dan Toko Jamu";
					$data['title'] = "DAFTAR RUMAH KOS DAN TOKO JAMU - SIPEPENG";
					$data['username'] = $this->session->userdata('username');
					$data['kos_list'] = $this->kos_model->getKosById($id_kos);
					$this->load->view('admin/kos/kos_olahdata', $data);
			}
		}
		
		function delete() {
			$id_kos = $this->uri->segment(4);
			if (empty($id_kos)) {
				$this->session->set_flashdata('message', 'Error Invalid');
				redirect('admin/kos_managements/index');
			} else {
				$this->kos_model->delete($id_kos);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
				redirect('admin/kos_managements/index');
			}
    }
	}
	
?>					
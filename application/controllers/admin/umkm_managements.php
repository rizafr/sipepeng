<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Gas_managements extends CI_Controller {
		
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('gas_model');
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
				
				$data['title'] = "DAFTAR PANGKALAN GAS LPG - SIPEPENG";
				$data['data_list'] = $this->gas_model->select_all()->result();
				$this->load->view('admin/gas/gas_list', $data);
				} else {
				redirect('public/homes');
			}
		}  
		
		
		function gotoForm() {
			$data['aksi'] = $this->uri->segment(4);
			
			if ($data['aksi'] == 'edit') {
				//mengambil uri aksi
				$id_gas = $this->uri->segment(5);
				$data['gas_list'] = $this->gas_model->getGasById($id_gas);
			}
			
			$data['judulForm'] = "Data Pangkalan Gas LPG";
			$data['title'] = "DAFTAR PANGKALAN GAS LPG - SIPEPENG";
			$this->load->view('admin/gas/gas_olahdata', $data);		 
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
			$id_gas = $this->input->post('id_gas');
			$this->form_validation->set_rules('rt', 'RT', 'trim|required|number');
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|number');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {
				$data['nama_pemilik'] = $this->input->post('nama_pemilik');
				$data['alamat'] = $this->input->post('alamat');
				$data['rt'] = $this->input->post('rt');
				$data['rw'] = $this->input->post('rw');
				$data['kelurahan'] = $this->input->post('kelurahan');
				$data['telp'] = $this->input->post('telp');
				$data['sp_agen'] = $this->input->post('sp_agen');
				$data['qty'] = $this->input->post('qty');
				$data['lat'] = $this->input->post('lat');
				$data['long'] = $this->input->post('long');
				$data['no_ijin'] = $this->input->post('no_ijin');
				
				//mengecek aksi
				# jika tambah
				if ($aksi == 'add') {
					//proses menginput ke model
					$hasil = $this->gas_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if ($aksi == 'edit') {
					//proses menginput ke model
					$hasil = $this->gas_model->update($id_gas);
					if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
						} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal diubah </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/gas_managements/index', $data);
				} else {
					$data['judulForm'] = "Data Pangkalan Gas LPG";
					$data['title'] = "DAFTAR PANGKALAN GAS LPG - SIPEPENG";
					$data['username'] = $this->session->userdata('username');
					$data['gas_list'] = $this->gas_model->getGasById($id_gas);
					$this->load->view('admin/gas/gas_olahdata', $data);
			}
		}
		
		function delete() {
			$id_gas = $this->uri->segment(4);
			if (empty($id_gas)) {
				$this->session->set_flashdata('message', 'Error Invalid');
				redirect('admin/gas_managements/index');
			} else {
				$this->gas_model->delete($id_gas);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
				redirect('admin/gas_managements/index');
			}
    }
	}
	
?>					
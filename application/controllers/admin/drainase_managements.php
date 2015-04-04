<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Drainase_managements extends CI_Controller {
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct() {
			parent::__construct();
			$this->load->model('drainase_model');
			$this->load->model('menu_model');
			$this->load->helper(array('form', 'url'));
			
			# menampilkan google map
			$this->load->library('googlemaps');
		}
		
		public function index() {
			//check sudah login atau belum
			if($this->session->userdata('is_login')){
				//menampilkan menu
				$data['menu_list'] = $this->menu_model->select_all()->result();
				$data['title'] = "Drainase | SIPEPENG";
				$data['username'] = $this->session->userdata('username');	
				
				//mengambil uri status
				$status=$this->uri->segment(4);
				
				//status 1 = data awal
				if($status=='1'){       	
					$data['drainase_list'] = $this->drainase_model->select_all_data_awal()->result();
				}
				
				//status 2 = data verifikasi
				if($status=='2'){       	
					$data['drainase_list'] = $this->drainase_model->select_all_verifikasi()->result();
				}
				
				//status 3 = data progress
				if($status=='3'){       	
					$data['drainase_list'] = $this->drainase_model->select_all_sedang_dilaksanakan()->result();
				}
				
				//status 4 = data ssudah dilaksanakan
				if($status=='3'){       	
					$data['drainase_list'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
				}
				
				//status 5 = data ssudah dilaksanakan
				if($status=='5'){       	
					$data['drainase_list'] = $this->drainase_model->select_all_tidak_dilaksanakan()->result();
				}		
				
				$data['status']= $status;
				$this->load->view('admin/drainase/drainase_list',$data);
				
				}else {
				redirect('public/homes');
			}
		}
		
		public function gotoForm() {
			//check sudah login atau belum
			if($this->session->userdata('is_login')){
				//menampilkan menu..wajib ada
				$data['menu_list'] = $this->menu_model->select_all()->result();
				// end menampilkan menu..wajib ada
				$data['title'] = "Data Awal Drainase | SIPEPENG";
				$data['judulForm'] = "Data Awal Drainase";
				$data['username'] = $this->session->userdata('username');
				
				//mengambil uri aksi
				$data['aksi']=$this->uri->segment(4);
				
				#google map yg bisa di klik otomatis dapetin koordinatnya
				$config['center'] = '-6.900282, 107.530010';
				$config['zoom'] = 'auto';
				$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
				$this->googlemaps->initialize($config);
				$data['map'] = $this->googlemaps->create_map();
				#end google map
				
				if($data['aksi']=='edit'){
				//mengambil uri aksi
				$id_drainase =$this->uri->segment(5);
				$data['drainase_list'] = $this->drainase_model->getDrainaseById($id_drainase);
				}
				
				$this->load->view('admin/drainase/drainase_olahdata', $data);
			}else {
				redirect('public/homes');
			}
		}
		
		public function process() {
			//menampilkan menu..wajib ada
			$data['menu_list'] = $this->menu_model->select_all()->result();
			// end menampilkan menu..wajib ada
			
			$aksi = $this->input->post('aksi');		
			$data['aksi']=$aksi;
			$id_drainase = $this->input->post('id_drainase');
			
			$this->form_validation->set_rules('rt', 'RT', 'required|number');
			$this->form_validation->set_rules('rw', 'RW', 'required|number');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('panjang', 'Panjang', 'required');
			$this->form_validation->set_rules('lebar', 'Lebar', 'required');
			$this->form_validation->set_rules('kedalaman', 'Kedalaman', 'required');
			$this->form_validation->set_rules('ketersediaan_lahan', 'Ketersediaan Lahan', 'required');
			
			
			//$this->form_validation->set_error_delimiters('', '<br/>');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
			
			if ($this->form_validation->run() == TRUE) {						
				$data['rt'] = $this->input->post('rt');
				$data['rw'] = $this->input->post('rw');
				$data['alamat'] = $this->input->post('alamat');
				$data['panjang'] = $this->input->post('panjang');
				$data['lebar'] = $this->input->post('lebar');
				$data['kedalaman'] = $this->input->post('kedalaman');
				$data['ketersediaan_lahan'] = $this->input->post('ketersediaan_lahan');
				$data['anggaran'] = $this->input->post('anggaran');
				$data['sumber_data'] = $this->input->post('sumber_data');
				$data['tahun_usulan'] = $this->input->post('tahun_usulan');
				$data['lat_awal'] = $this->input->post('lat_awal');
				$data['lat_akhir'] = $this->input->post('lat_akhir');
				$data['long_awal'] = $this->input->post('long_awal');
				$data['long_akhir'] = $this->input->post('long_akhir');
				$data['ket'] = $this->input->post('ket');
				$ket = "drainase";
				
				//mengecek apakah foto di upload
				if($_FILES['foto']['name'] != "")
				{
					$foto = $this->upload_foto($ket,$data['tahun_usulan'],$data['rw'],$data['alamat']);
				}
				 $data['foto'] = $foto;
				 
				 //mengecek apakah dokumen di upload
				if($_FILES['dokumen']['name'] != "")
				{
					$dokumen = $this->upload_dokumen($ket,$data['tahun_usulan'],$data['rw'],$data['alamat']);
				}
					$data['dokumen'] = $dokumen;
				
				//mengecek aksi
				# jika tambah
				if($aksi=='add'){
					//proses menginput ke model
					$hasil = $this->drainase_model->add($data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil ditambah </div>');
				}
				# jika edit
				if($aksi=='edit'){
					
					//proses menginput ke model
					$hasil = $this->drainase_model->update($id_drainase);					
					 if ($hasil == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil diubah </div>');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-error"> Gagal ditambahkan </div>');
					}
				}
				
				$data['username'] = $this->session->userdata('username');
				redirect('admin/drainase_managements/index/1',$data);
				
			} else {
				$data['title'] = "Data Awal Drainase | SIPEPENG";
				$data['judulForm'] = "Data Awal Drainase";
				$data['username'] = $this->session->userdata('username');
				$data['drainase_list'] = $this->drainase_model->getDrainaseById($id_drainase);
				$this->load->view('admin/drainase/drainase_olahdata', $data);
			}
			
			
		}
		
		
		function delete($id_drainase) {
			$id_drainase=$this->uri->segment(4);
			$status=$this->uri->segment(5);
			if (empty($id_drainase)) {
				$this->session->set_flashdata('message', 'Error Invalid');
				redirect('admin/drainase_managements/index/'.$status);
				} else {
				$this->drainase_model->delete($id_drainase);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
				redirect('admin/drainase_managements/index/'.$status);
			}
		}
		
		//fungsi menampilkan berdasarkan id yg dipilih
		public function view($id_drainase){
			//menampilkan menu..wajib ada
			$data['menu_list'] = $this->menu_model->select_all()->result();
			// end menampilkan menu..wajib ada
			$data['id_drainase'] = $id_drainase;
			$data['title'] = "View Data Drainase | SIPEPENG";
			$data['judulForm'] = "Detail Drainase";
			$data['drainase_list'] = $this->drainase_model->getDrainaseById($id_drainase);
			$data['username'] = $this->session->userdata('username');
			
			$config['center'] = '-6.900282, 107.530010';
			$config['zoom'] = 'auto';
			$this->googlemaps->initialize($config);

			$polyline = array();
			$polyline['points'] = array('-6.905027, 107.525885',
							'-6.904228, 107.528964');
			$this->googlemaps->add_polyline($polyline);
			$data['map'] = $this->googlemaps->create_map();
			# end google map
			
			$this->load->view('admin/drainase/drainase_view',$data);
		}
		
		# Upload Foto
		function upload_foto($ket,$tahun_usulan,$rw,$alamat)
		{
			$this->load->library('upload');
			
			$image_foto = "noimage.jpg";
			$field_name = "foto";
			$file_name = $_FILES['foto']['name'];
			
			if($file_name != "")
			{
				$config = array(
					'file_name'		=> preg_replace("/[^A-Za-z0-9_-\s]/", "", $ket."_".$tahun_usulan."_".$rw."_".$alamat),
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
		
		# Upload Dokumen
		function upload_dokumen($ket,$tahun_usulan,$rw,$alamat)
		{
			$this->load->library('upload');
			
			$image_dokumen = "no_image.jpg";
			$field_name = "dokumen";
			$file_name = $_FILES['dokumen']['name'];
			
			if($file_name != "")
			{
				$config = array(
					'file_name'		=> preg_replace("/[^A-Za-z0-9_-\s]/", "", $ket."_".$tahun_usulan."_".$rw."_".$alamat),
					'overwrite'		=> TRUE,
					'remove_spaces'	=> TRUE,
					'allowed_types' => 'jpg|JPG|jpeg|JPEG|gif|png',
					'upload_path'	=> './assets/upload/dokumen',
					'max_size' 		=> 5000
				);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload($field_name))
				{
					$image_data = $this->upload->data();
					$image_dokumen = $image_data['file_name'];
				}
			}
			
			return $image_dokumen;
		}
	}
	
?>
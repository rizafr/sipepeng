<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Drainase_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('drainase_model');
		 $this->load->model('menu_model');
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

    public function gotoFormAdd() {
        //check sudah login atau belum
        if($this->session->userdata('is_login')){
            //menampilkan menu..wajib ada
            $data['menu_list'] = $this->menu_model->select_all()->result();
            // end menampilkan menu..wajib ada
            $data['title'] = "Tambah Data Awal Drainase | SIPEPENG";
            $data['judulForm'] = "Tambah Data Awal Drainase";
            $data['username'] = $this->session->userdata('username');
            $this->load->view('admin/drainase/drainase_add', $data);
        }else {
             redirect('public/homes');
        }
    }

    public function process() {
        //menampilkan menu..wajib ada
         $data['menu_list'] = $this->menu_model->select_all()->result();
         // end menampilkan menu..wajib ada

        $this->form_validation->set_rules('rt', 'RT', 'required|number');
        $this->form_validation->set_rules('rw', 'RW', 'required|number');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('panjang', 'Panjang', 'required|number');
        $this->form_validation->set_rules('lebar', 'Lebar', 'required|number');
        $this->form_validation->set_rules('kedalaman', 'Kedalaman', 'required');
        $this->form_validation->set_rules('ketersediaan_lahan', 'Ketersediaan Lahan', 'required');
        $this->form_validation->set_rules('long_awal', 'Longitude Awal', 'required');
        $this->form_validation->set_rules('long_akhir', 'Longitude Akhir', 'required');
        $this->form_validation->set_rules('lat_awal', 'Latitude Awal', 'required');
        $this->form_validation->set_rules('lat_akhir', 'Latitude Akhir', 'required');
        $this->form_validation->set_rules('anggaran', 'Anggaran', 'required|number');
        $this->form_validation->set_rules('sumber_data', 'Sumber Data', 'required');
        $this->form_validation->set_rules('tahun_asal', 'Tahun Asal', 'required');
        

        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data['rt'] = $this->input->post('rt');
            $data['rw'] = $this->input->post('rw');
            $data['alamat'] = $this->input->post('alamat');
            $data['panjang'] = $this->input->post('panjang');
            $data['lebar'] = $this->input->post('lebar');
            $data['kedalaman'] = $this->input->post('kedalaman');
            $data['ketersediaan_lahan'] = $this->input->post('ketersediaan_lahan');
           
            $hasil = $this->drainase_model->add($data);
           
            $this->session->set_flashdata('message', 'Tambah Drainase Success!');
            $data['username'] = $this->session->userdata('username');
            redirect('admin/drainase_managements/index/1',$data);
        } else {
             $data['title'] = "Tambah Data Awal Drainase | SIPEPENG";
            $data['judulForm'] = "Tambah Data Awal Drainase";
            $data['username'] = $this->session->userdata('username');
            $this->load->view('admin/drainase/drainase_add', $data);
        }

        
    }
    
    
    
    public function process_add($action, $id_drainase = null){
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
       $this->form_validation->set_rules('telp', 'Phone Number', 'required|number');      
        $this->form_validation->set_rules('id_jenis_pengguna', 'Level', 'required');
       
        $this->form_validation->set_error_delimiters('', '<br/>');
        
        if ($this->form_validation->run() == TRUE) {
            $data['id_jenis_pengguna'] = $this->input->post('id_jenis_pengguna');
            $data['nip'] = $this->input->post('nip');
            $data['nama'] = $this->input->post('nama');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['telp'] = $this->input->post('telp');
            if ($action == 'add') {
                $this->users_model->add_from_admin($data);
            }            
            $this->session->set_flashdata('message', 'Tambah Pengguna' . $this->input->post('nama') . 'Success!');
            $data['username'] = $this->session->userdata('username');
            redirect('admin/user_managements',$data);
        } else {
            $data['title'] = "Add Data User | Adney's Shop";        
            $data['username'] = $this->session->userdata('username');
            $data['level_list'] = $this->users_model->get_dropdown_list();
            $this->load->view('admin/user_management_add', $data);
        }
    }
    
    public function edit($id_status,$id_drainase) {
        $data['id_drainase'] = $id_drainase;
        $data['id_status'] = $id_status;
        $data['title'] = "Edit Data User | SIPEPENG";
        $data['users'] = $this->users_model->getUserById($id_drainase);       
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/user_management_edit', $data);
    }

    function delete($id_drainase) {
        if (empty($id_pengguna)) {
            $this->session->set_flashdata('message', 'Error Invalid Drainase');
            redirect('admin/user_managements');
        } else {
            $this->users_model->delete($id_drainase);
            $this->session->set_flashdata('message', 'Success Drainase deleted');
            redirect('admin/user_managements');
        }
    }

    
    
    public function view($id_drainase){
        $data['id_drainase'] = $id_drainase;
        $data['title'] = "View Data Drainase | SIPEPENG";
        $data['users'] = $this->users_model->getUserById($id_pengguna);
        $data['view'] = $this->users_model->get_user_by_id($id_pengguna);
        $data['states_list'] = $this->states_model->get_dropdown_list();
        $data['country_list'] = $this->country_model->get_dropdown_list();
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/user_management_view',$data);
    }
}

?>
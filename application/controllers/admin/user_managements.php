<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_managements extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('menu_model');
    }
    
    public function index() {
	//check sudah login atau belum
	 if($this->session->userdata('is_login')){
		$data['title'] = "User Management List | SIPEPENG";
		$data['username'] = $this->session->userdata('username');
		$data['menu_list'] = $this->menu_model->select_all()->result();
		$data['users_list'] = $this->users_model->select_all()->result();
		$this->load->view('admin/user_management_list',$data);
	 }else { // klo belum balik lagi ke home
		 redirect('public/homes');
	   }
    }
    
    public function edit($id_pengguna) {
		 if($this->session->userdata('is_login')){
				//menampilkan menu..wajib ada
					$data['menu_list'] = $this->menu_model->select_all()->result();
				// end menampilkan menu..wajib ada
				$data['idUser'] = $id_pengguna;
				$data['title'] = "Edit Data User | SIPEPENG";
				$data['users'] = $this->users_model->getUserById($id_pengguna);       
				$data['level_list'] = $this->users_model->get_dropdown_list();
				$data['username'] = $this->session->userdata('username');
				$this->load->view('admin/user_management_edit', $data);
		 }else {
		 redirect('public/homes');
	   }
    }

    function delete($id_pengguna) {
        if (empty($id_pengguna)) {
            $this->session->set_flashdata('message', 'Error Invalid user');
            redirect('admin/user_managements');
        } else {
            $this->users_model->delete($id_pengguna);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Berhasil Dihapus </div>');
            redirect('admin/user_managements');
        }
    }

    
    
    public function gotoFormAdd() {
		//menampilkan menu..wajib ada
			$data['menu_list'] = $this->menu_model->select_all()->result();
		// end menampilkan menu..wajib ada
        $data['title'] = "Tambah Pengguna | SIPEPENG";
        $data['username'] = $this->session->userdata('username');
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $this->load->view('admin/user_management_add', $data);
    }
    
	# menambah dan mengedit pengguna
    public function process(){
		$action = $this->uri->segment(4);	
           
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
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Tambah Pengguna  '. $this->input->post("nama") .' Berhasil  </div>');
		}  
		if ($action == 'edit') {
			$id_pengguna = $this->input->post('id_pengguna');
			$hasil = $this->users_model->update($id_pengguna);
			
			 if ($hasil == 1) {
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Ubah Pengguna  '. $hasil .' Berhasil  </div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-error"> Ubah Pengguna  '. $hasil .' Gagal  </div>');
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Ubah Pengguna  '. $hasil .' Berhasil  </div>'); 
		}            
		
		$data['username'] = $this->session->userdata('username');
		redirect('admin/user_managements',$data);
		
       
    }
    
    public function view($id_pengguna){
        $data['idUser'] = $id_pengguna;
        $data['title'] = "View Data User | SIPEPENG";
        $data['users'] = $this->users_model->getUserById($id_pengguna);
        $data['view'] = $this->users_model->get_user_by_id($id_pengguna);
        $data['level_list'] = $this->users_model->get_dropdown_list();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/user_management_view',$data);
    }
}

?>
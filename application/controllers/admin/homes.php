<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();
		 $this->load->model('menu_model');
		 $this->load->model('home_model');
    }
    
    public function index() {
		//check sudah login atau belum
		if($this->session->userdata('is_login')){		
			$data['title'] = "Home Admin | SIPEPENG";
			$data['user_name'] = $this->session->userdata('user_name');
			
			#menampilkan menu sesuai hak ases
			#admin
			if($this->session->userdata('id_jenis_pengguna')==1){
				$data['menu_list'] = $this->menu_model->select_all()->result();
			}
			#dkp
			if($this->session->userdata('id_jenis_pengguna')==2){
				$data['menu_list'] = $this->menu_model->select_dkp()->result();
			}
			#pu
			if($this->session->userdata('id_jenis_pengguna')==3){
				$data['menu_list'] = $this->menu_model->select_pu()->result();
			}
			
			#rekap data
			$data['jumPengguna'] = $this->home_model->getJumlahPengguna();
			#jumlah semua data
			$data['jumArtesis'] = $this->home_model->getJumlahArtesis();
			$data['jumDrainase'] = $this->home_model->getJumlahDrainase();
			$data['jumJalan'] = $this->home_model->getJumlahJalan();
			$data['jumKirmir'] = $this->home_model->getJumlahKirmir();
			$data['jumMck'] = $this->home_model->getJumlahMck();
			$data['jumSeptictank'] = $this->home_model->getJumlahSeptictank();
			$data['jumSeptictankKomunal'] = $this->home_model->getJumlahSeptictankKomunal();
			$data['jumSumurDangkal'] = $this->home_model->getJumlahSumurDangkal();
			$data['jumSumurResapan'] = $this->home_model->getJumlahSumurResapan();
			$data['jumlahData'] = $data['jumArtesis'] + $data['jumDrainase'] + $data['jumJalan'] + $data['jumKirmir'] + $data['jumMck']+$data['jumSeptictank'] 
									+ $data['jumSeptictankKomunal'] + $data['jumSumurDangkal'] +  $data['jumSumurResapan'];
			
                        #persentasi jumlah semua data
			$data['persenArtesis'] = ($data['jumArtesis']/ $data['jumlahData'] )* 100;
			$data['persenDrainase'] = ($data['jumDrainase']/ $data['jumlahData'] )* 100;
			$data['persenJalan'] = ($data['jumJalan']/ $data['jumlahData'] )* 100;
			$data['persenKirmir'] = ($data['jumKirmir']/ $data['jumlahData'] )* 100;
			$data['persenMck'] = ($data['jumMck']/ $data['jumlahData'] )* 100;
			$data['persenSeptictank'] = ($data['jumSeptictank']/ $data['jumlahData'] )* 100;
			$data['persenSeptictankKomunal'] = ($data['jumSeptictankKomunal']/ $data['jumlahData'] )* 100;
			$data['persenSumurDangkal'] = ($data['jumSumurDangkal']/ $data['jumlahData'] )* 100;
			$data['persenSumurResapan'] = ($data['jumSumurResapan']/ $data['jumlahData'] )* 100;
			
                        #jumlah status menu
                        #drainase
                       $data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
                       $data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
                       $data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
                       $data['jumStatusDrainase']=  $data['jumDrainaseVerifikasi'] +  $data['jumDrainaseBelumDilaksanakan'] +  $data['jumDrainaseBelumSelesai'];
                   	
			$this->load->view('admin/home',$data);
		}else {
              redirect('public/homes');
          }
	}
}

?>

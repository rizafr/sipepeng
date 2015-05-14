<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Laporan_managements extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('laporan_model');
			$this->load->model('menu_model');
			$this->load->model('home_model');
			$this->load->helper(array('form', 'url', 'pemberitahuan'));
			
			$this->load->model('artesis_model');
			$this->load->model('drainase_model');
			$this->load->model('jalan_model');
			$this->load->model('mck_model');
			$this->load->model('septictank_model');
			$this->load->model('septictank_komunal_model');
			$this->load->model('sumur_dangkal_model');
			$this->load->model('sumur_resapan_model');
			
			# menampilkan google map
			$this->load->library('googlemaps');
		}
		
		public function index() {    
			//mengambil uri status
			$data['status'] = $this->uri->segment(4);
			$data['title'] = "Laporan | SIPEPENG";
			$data['rw'] = $this->laporan_model->get_dropdown_rw();
			$data['kegiatan'] = $this->laporan_model->get_dropdown_kegiatan();
			
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
		
		$this->load->view('admin/laporan/laporan_list',$data);
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
	
	$data['rw'] = $this->input->post('rw');
	$data['kegiatan'] = $this->input->post('kegiatan');
	$data['status'] = $this->input->post('status');
	
	
	
	if($data['status']== 6 ){	
		$data['title'] = "Laporan Keseluruhan | SIPEPENG";
		//artesis
		$data['artesis_awal'] = $this->artesis_model->select_all_data_awal()->result();    
		$data['artesis_dilaksanakan'] = $this->artesis_model->select_all_sudah_dilaksanakan()->result();
		$data['artesis_tidak_dilaksanakan'] = $this->artesis_model->select_all_tidak_dilaksanakan()->result();
        
		//drainase
		$data['drainase_awal'] = $this->drainase_model->select_all_data_awal()->result();    
		$data['drainase_dilaksanakan'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
		$data['drainase_tidak_dilaksanakan'] = $this->drainase_model->select_all_tidak_dilaksanakan()->result();
        
		
		//jalan
		$data['drainase_awal'] = $this->drainase_model->select_all_data_awal()->result();    
		$data['drainase_dilaksanakan'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
		$data['drainase_tidak_dilaksanakan'] = $this->drainase_model->select_all_tidak_dilaksanakan()->result();
        
		
		//mck
		$data['mck_awal'] = $this->mck_model->select_all_data_awal()->result();    
		$data['mck_dilaksanakan'] = $this->mck_model->select_all_sudah_dilaksanakan()->result();
		$data['mck_tidak_dilaksanakan'] = $this->mck_model->select_all_tidak_dilaksanakan()->result();
        
		
		//septictank
		$data['septictank_awal'] = $this->septictank_model->select_all_data_awal()->result();    
		$data['septictank_dilaksanakan'] = $this->septictank_model->select_all_sudah_dilaksanakan()->result();
		$data['septictank_tidak_dilaksanakan'] = $this->septictank_model->select_all_tidak_dilaksanakan()->result();
        
		
		//septictank_komunal
		$data['septictank_komunal_awal'] = $this->septictank_komunal_model->select_all_data_awal()->result();    
		$data['septictank_komunal_dilaksanakan'] = $this->septictank_komunal_model->select_all_sudah_dilaksanakan()->result();
		$data['septictank_komunal_tidak_dilaksanakan'] = $this->septictank_komunal_model->select_all_tidak_dilaksanakan()->result();
        
		
		//sumur_dangkal
		$data['sumur_dangkal_awal'] = $this->sumur_dangkal_model->select_all_data_awal()->result();    
		$data['sumur_dangkal_dilaksanakan'] = $this->sumur_dangkal_model->select_all_sudah_dilaksanakan()->result();
		$data['sumur_dangkal_tidak_dilaksanakan'] = $this->sumur_dangkal_model->select_all_tidak_dilaksanakan()->result();
        
		
		//sumur_resapan
		$data['sumur_resapan_awal'] = $this->sumur_resapan_model->select_all_data_awal()->result();    
		$data['sumur_resapan_dilaksanakan'] = $this->sumur_resapan_model->select_all_sudah_dilaksanakan()->result();
		$data['sumur_resapan_tidak_dilaksanakan'] = $this->sumur_resapan_model->select_all_tidak_dilaksanakan()->result();
        
		$this->load->view('admin/laporan/laporan_keseluruhan', $data);
		
		
		}else{
		$data['title'] = "Laporan | SIPEPENG";
		//model
		//jika kegiatan diisi, maka tampilkan berdasarkan kegiatan
		if($data['kegiatan']!=NULL){
			$hasil = $this->laporan_model->pilih($data)->result();
			$data['hasil']= $hasil;
			$this->load->view('admin/laporan/laporan_view', $data);
			}else{ // jika kegiatan kosong, maka tampilkan data berdasarkan rw di seluruh kegiatan
			$artesis = $this->laporan_model->artesis($data)->result();
			$drainase = $this->laporan_model->drainase($data)->result();
			$jalan = $this->laporan_model->jalan($data)->result();
			$kirmir = $this->laporan_model->kirmir($data)->result();
			$mck = $this->laporan_model->mck($data)->result();
			$septictank = $this->laporan_model->septictank($data)->result();
			$septictank_komunal = $this->laporan_model->septictank_komunal($data)->result();
			$sumur_dangkal = $this->laporan_model->sumur_dangkal($data)->result();
			$sumur_resapan = $this->laporan_model->sumur_resapan($data)->result();
			
			$data['artesis']= $artesis;
			$data['drainase']= $drainase;
			$data['jalan']= $jalan;
			$data['kirmir']= $kirmir;
			$data['mck']= $mck;
			$data['septictank']= $septictank;
			$data['septictank_komunal']= $septictank_komunal;
			$data['sumur_dangkal']= $sumur_dangkal;
			$data['sumur_resapan']= $sumur_resapan;
			$this->load->view('admin/laporan/laporan_view_rw', $data);
		}
	}
	
}
public function cetak_keseluruhan() {
	//artesis
	$data['artesis_awal'] = $this->artesis_model->select_all_data_awal()->result();    
	$data['artesis_dilaksanakan'] = $this->artesis_model->select_all_sudah_dilaksanakan()->result();
	$data['artesis_tidak_dilaksanakan'] = $this->artesis_model->select_all_tidak_dilaksanakan()->result();
	
	//drainase
	$data['drainase_awal'] = $this->drainase_model->select_all_data_awal()->result();    
	$data['drainase_dilaksanakan'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
	$data['drainase_tidak_dilaksanakan'] = $this->drainase_model->select_all_tidak_dilaksanakan()->result();
	
	
	//jalan
	$data['drainase_awal'] = $this->drainase_model->select_all_data_awal()->result();    
	$data['drainase_dilaksanakan'] = $this->drainase_model->select_all_sudah_dilaksanakan()->result();
	$data['drainase_tidak_dilaksanakan'] = $this->drainase_model->select_all_tidak_dilaksanakan()->result();
	
	
	//mck
	$data['mck_awal'] = $this->mck_model->select_all_data_awal()->result();    
	$data['mck_dilaksanakan'] = $this->mck_model->select_all_sudah_dilaksanakan()->result();
	$data['mck_tidak_dilaksanakan'] = $this->mck_model->select_all_tidak_dilaksanakan()->result();
	
	
	//septictank
	$data['septictank_awal'] = $this->septictank_model->select_all_data_awal()->result();    
	$data['septictank_dilaksanakan'] = $this->septictank_model->select_all_sudah_dilaksanakan()->result();
	$data['septictank_tidak_dilaksanakan'] = $this->septictank_model->select_all_tidak_dilaksanakan()->result();
	
	
	//septictank_komunal
	$data['septictank_komunal_awal'] = $this->septictank_komunal_model->select_all_data_awal()->result();    
	$data['septictank_komunal_dilaksanakan'] = $this->septictank_komunal_model->select_all_sudah_dilaksanakan()->result();
	$data['septictank_komunal_tidak_dilaksanakan'] = $this->septictank_komunal_model->select_all_tidak_dilaksanakan()->result();
	
	
	//sumur_dangkal
	$data['sumur_dangkal_awal'] = $this->sumur_dangkal_model->select_all_data_awal()->result();    
	$data['sumur_dangkal_dilaksanakan'] = $this->sumur_dangkal_model->select_all_sudah_dilaksanakan()->result();
	$data['sumur_dangkal_tidak_dilaksanakan'] = $this->sumur_dangkal_model->select_all_tidak_dilaksanakan()->result();
	
	
	//sumur_resapan
	$data['sumur_resapan_awal'] = $this->sumur_resapan_model->select_all_data_awal()->result();    
	$data['sumur_resapan_dilaksanakan'] = $this->sumur_resapan_model->select_all_sudah_dilaksanakan()->result();
	$data['sumur_resapan_tidak_dilaksanakan'] = $this->sumur_resapan_model->select_all_tidak_dilaksanakan()->result();
	$this->load->view('admin/laporan/laporan_cetak_keseluruhan', $data);
	
}
public function cetak($rw,$kegiatan,$status) {
	$data['rw'] = $this->uri->segment(4); 
	$data['kegiatan'] = $this->uri->segment(5);
	$data['status'] = $this->uri->segment(6);
	
	$data['title'] = "Laporan | SIPEPENG";
	//model
	//jika kegiatan diisi, maka tampilkan berdasarkan kegiatan
	
	if($kegiatan == '0') { // jika kegiatan kosong, maka tampilkan data berdasarkan rw di seluruh kegiatan
		$artesis = $this->laporan_model->artesis($data)->result();
		$drainase = $this->laporan_model->drainase($data)->result();
		$jalan = $this->laporan_model->jalan($data)->result();
		$kirmir = $this->laporan_model->kirmir($data)->result();
		$mck = $this->laporan_model->mck($data)->result();
		$septictank = $this->laporan_model->septictank($data)->result();
		$septictank_komunal = $this->laporan_model->septictank_komunal($data)->result();
		$sumur_dangkal = $this->laporan_model->sumur_dangkal($data)->result();
		$sumur_resapan = $this->laporan_model->sumur_resapan($data)->result();
		
		$data['artesis']= $artesis;
		$data['drainase']= $drainase;
		$data['jalan']= $jalan;
		$data['kirmir']= $kirmir;
		$data['mck']= $mck;
		$data['septictank']= $septictank;
		$data['septictank_komunal']= $septictank_komunal;
		$data['sumur_dangkal']= $sumur_dangkal;
		$data['sumur_resapan']= $sumur_resapan;
		$this->load->view('admin/laporan/laporan_cetak_rw', $data);
		}else  {
		$hasil = $this->laporan_model->cetak($data)->result();
		$data['hasil']= $hasil;
		$this->load->view('admin/laporan/laporan_cetak', $data);
	}
}


}

?>						
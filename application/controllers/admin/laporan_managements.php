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
		 $data['rw'] = $this->input->post('rw');
		 $data['kegiatan'] = $this->input->post('kegiatan');
		 $data['status'] = $this->input->post('status');
		 
		 $data['title'] = "Laporan | SIPEPENG";
		 
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
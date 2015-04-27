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
		$this->load->view('admin/laporan/laporan_list',$data);
    }
	
	public function process() {
		 $data['rw'] = $this->input->post('rw');
		 $data['kegiatan'] = $this->input->post('kegiatan');
		 $data['status'] = $this->input->post('status');
		 
		 $data['title'] = "Laporan | SIPEPENG";
		 //model
		 $hasil = $this->laporan_model->pilih($data)->result();
		 $data['hasil']= $hasil;
		 $this->load->view('admin/laporan/laporan_view', $data);
	}
	
	public function cetak() {
		 $data['rw'] = $this->uri->segment(4); 
		 $data['kegiatan'] = $this->uri->segment(5);
		 $data['status'] = $this->uri->segment(6);
		 
		 $data['title'] = "Laporan | SIPEPENG";
		 //model
		 $hasil = $this->laporan_model->cetak($data)->result();
		 $data['hasil']= $hasil;
		 $this->load->view('admin/laporan/laporan_cetak', $data);
	}
    

}

?>					
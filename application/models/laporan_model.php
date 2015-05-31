<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    var $table = 'drainase';

    // var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna

    public function __construct() {
        parent::__construct();
    }

    function get_dropdown_rw() {
        $this->db->from('rw');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Pilih RW--";
            foreach ($result->result_array() as $row) {
                $return[$row['rw']] = $row['rw'];
            }
        }
        return $return;
    }
	
	function get_dropdown_kegiatan() {
        $this->db->from('menu');
        $this->db->order_by('menu', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Pilih Kegiatan--";
            foreach ($result->result_array() as $row) {
                $return[$row['nama_tabel']] = $row['nama_tabel'];
            }
        }
        return $return;
    }
	// cetak berdasrkan kegiatan
	function pilih($data) {
		// $data = array(
			// 'rw' => $this->input->post('rw'),
			// 'kegiatan' => $this->input->post('kegiatan'),
			// 'status' => $this->input->post('status')
		// );
		
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get($data['kegiatan']);
		return $query;
	}
	
	function cetak($data) {
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		if($data['rw']!=0){
			$this->db->where('rw', $data['rw']);
		}
		
		$query = $this->db->get($data['kegiatan']);
		return $query;
	}
	
	// cetak berdasrkan rw
	function artesis($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('artesis');
		return $query;
	}
	
	function drainase($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('drainase');
		return $query;
	}
	
	function jalan($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('jalan');
		return $query;
	}
	
	function kirmir($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('kirmir');
		return $query;
	}
	
	function mck($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('mck');
		return $query;
	}
	
	function septictank($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('septictank');
		return $query;
	}
	
	function septictank_komunal($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('septictank_komunal');
		return $query;
	}
	
	function sumur_dangkal($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('sumur_dangkal');
		return $query;
	}
	
	function sumur_resapan($data) {
			
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '0');			
			$this->db->where('status_sedang_dilaksanakan', '0');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '0');			
			$this->db->where('status_tidak_dilaksanakan', '0');				
		}
		
		if($data['status'] == 4){
			$this->db->where('status_data_awal', '1');			
			$this->db->where('status_verifikasi', '1');			
			$this->db->where('status_sedang_dilaksanakan', '1');			
			$this->db->where('status_sudah_dilaksanakan', '1');			
			$this->db->where('status_tidak_dilaksanakan', '0');					
		}
		if($data['status'] == 5){
			$this->db->where('status_tidak_dilaksanakan', '1');			
		}
		
		if($data['rw']!=NULL){ //jika rw dipilih maka tampilkan berdasarkan rw
			$this->db->where('rw', $data['rw']);
		}
		$query = $this->db->get('sumur_resapan');
		return $query;
	}
	
	
}

?>

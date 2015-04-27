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
	
	function pilih($data) {
		$data = array(
			'rw' => $this->input->post('rw'),
			'kegiatan' => $this->input->post('kegiatan'),
			'status' => $this->input->post('status')
		);
		
		$this->db->select('*');
		
		if($data['status'] == 1){
			$this->db->where('status_data_awal', '1');			
		}
		
		if($data['status'] == 3){
			$this->db->where('status_sedang_dilaksanakan', '1');			
		}
		
		if($data['status'] == 4){
			$this->db->where('status_sedang_dilaksanakan', '1');			
		}
		
		$this->db->where('rw', $data['rw']);
		$this->db->from($data['kegiatan']);
		
		$query = $this->db->get();
		return $query;
	}

}

?>

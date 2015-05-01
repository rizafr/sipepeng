<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Kos_model extends CI_Model {
	
	var $table = '';
	
	// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
	
	public function __construct() {
		parent::__construct();
	}
	
	//select public
	public function select_all() {
		$sql = "select * from ekonomi_kos";
		return $this->db->query($sql);
	}
	
	public function getKosById($id_kos) {
		$this->db->select('*');
		$this->db->where('id_kos', $id_kos);
		$query = $this->db->get('ekonomi_kos', 1);
		
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}	
	
	public function update($id_kos) {
        $data = array(
            'nama_pemilik' => $this->input->post('nama_pemilik')
            , 'alamat_pemilik' => $this->input->post('alamat_pemilik')
            , 'rw' => $this->input->post('rw')
            , 'jml_kamar' => $this->input->post('jml_kamar')
            , 'jml_orang_perkamar' => $this->input->post('jml_orang_perkamar')
            , 'ijin_usaha' => $this->input->post('ijin_usaha')
            , 'harga_sewa' => $this->input->post('harga_sewa')
            , 'ket' => $this->input->post('ket')
        );

        $this->db->where('id_kos', $id_kos);
        return $this->db->update('ekonomi_kos', $data);
    }
	
	public function add($data) {
		$data = array(
		'nama_pemilik' 			=> $data['nama_pemilik']
		, 'alamat_pemilik' 		=> $data['alamat_pemilik']
		, 'rw' 					=> $data['rw']
		, 'jml_kamar' 			=> $data['jml_kamar']
		, 'jml_orang_perkamar' 	=> $data['jml_orang_perkamar']
		, 'ijin_usaha' 			=> $data['ijin_usaha']
		, 'harga_sewa' 			=> $data['harga_sewa']
		, 'ket' 				=> $data['ket']
		);
		return $this->db->insert('ekonomi_kos', $data);
	}
	
	public function search_all($keyword) {
		$sql = "select * from ekonomi_kos where nama_pemilik like '%" . $keyword . "%'";
		return $this->db->query($sql);
	}
	
	//delete
	public function delete($id_kos) {
		$this->db->delete('ekonomi_kos', array('id_kos' => $id_kos));
	}
	
	
	
}

?>

<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Minimarket_model extends CI_Model {
	
	var $table = '';
	
	// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
	
	public function __construct() {
		parent::__construct();
	}
	
	//select public
	public function select_all() {
		$sql = "select * from ekonomi_minimarket";
		return $this->db->query($sql);
	}
	
	public function search_all($keyword) {
		$sql = "select * from ekonomi_minimarket where nama_perusahaan like '%" . $keyword . "%'";
		return $this->db->query($sql);
	}
	
	//add user as public
	public function add($data) {
		$data = array(
		'nama_perusahaan' 			=> $data['nama_perusahaan']
		, 'bentuk_perusahaan' 		=> $data['bentuk_perusahaan']
		, 'alamat'					=> $data['alamat']
		, 'rt' 						=> $data['rt']
		, 'rw' 						=> $data['rw']
		, 'nama_pemilik' 			=> $data['nama_pemilik']
		, 'jml_pekerja' 			=> $data['jml_pekerja']
		, 'jam_kerja' 				=> $data['jam_kerja']
		, 'status_tanah' 			=> $data['status_tanah']
		, 'luas_bangunan' 			=> $data['luas_bangunan']
		, 'luas_ruang_usaha'		=> $data['luas_ruang_usaha']
		, 'no_ijin'					=> $data['no_ijin']
		);
		return $this->db->insert('ekonomi_minimarket', $data);
	}
	
	//update user    
	public function update($id_minimarket) {
		$data = array(
		'nama_perusahaan' 			=> $this->input->post('nama_perusahaan')
		, 'bentuk_perusahaan' 		=> $this->input->post('bentuk_perusahaan')
		, 'alamat'					=> $this->input->post('alamat')
		, 'rt' 						=> $this->input->post('rt')
		, 'rw' 						=> $this->input->post('rw')
		, 'nama_pemilik' 			=> $this->input->post('nama_pemilik')
		, 'jml_pekerja' 			=> $this->input->post('jml_pekerja')
		, 'jam_kerja' 				=> $this->input->post('jam_kerja')
		, 'status_tanah' 			=> $this->input->post('status_tanah')
		, 'luas_bangunan' 			=> $this->input->post('luas_bangunan')
		, 'luas_ruang_usaha' 		=> $this->input->post('luas_ruang_usaha')
		, 'no_ijin' 				=> $this->input->post('no_ijin')
		);
		
		$this->db->where('id_minimarket', $id_minimarket);
		return $this->db->update('ekonomi_minimarket', $data);
	}
	
	public function getMinimarketById($id_minimarket) {
		$this->db->select('*');
		$this->db->where('id_minimarket', $id_minimarket);
		$query = $this->db->get('ekonomi_minimarket', 1);
		
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}
	
	public function getekonomi_minimarketById($id_minimarket) {
		$this->db->select('*');
		$this->db->where('id_minimarket', $id_minimarket);
		$query = $this->db->get('ekonomi_minimarket', 1);
		
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}
	
	//delete
	public function delete($id_minimarket) {
		$this->db->delete('ekonomi_minimarket', array('id_minimarket' => $id_minimarket));
	}
	
	
	
}

?>

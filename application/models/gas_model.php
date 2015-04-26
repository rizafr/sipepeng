<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Gas_model extends CI_Model {
	
	var $table = '';
	
	// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
	
	public function __construct() {
		parent::__construct();
	}
	
	//select public
	public function select_all() {
		$sql = "select * from ekonomi_gas";
		return $this->db->query($sql);
	}
	
	
	
	public function search_all($keyword) {
		$sql = "select * from ekonomi_gas where nama_perusahaan like '%" . $keyword . "%'";
		return $this->db->query($sql);
	}
	
	//add user as public
	public function add($data) {
		$data = array(
		'rt' 						=> $data['rt']
		, 'rw' 						=> $data['rw']
		, 'kota'					=> $data['kota']
		, 'kecamatan' 				=> $data['kecamatan']
		, 'kelurahan' 				=> $data['kelurahan']
		, 'nbs' 					=> $data['nbs']
		, 'klasifikasi_perusahaan' 	=> $data['klasifikasi_perusahaan']
		, 'nama_perusahaan' 		=> $data['nama_perusahaan']
		, 'alamat_perusahaan' 		=> $data['alamat_perusahaan']
		, 'kegiatan_utama' 			=> $data['kegiatan_utama']
		, 'jenis_usaha' 			=> $data['jenis_usaha']
		, 'jk_pengusaha' 			=> $data['jk_pengusaha']
		, 'prov_tempat_lahir_pengusaha' => $data['prov_tempat_lahir_pengusaha']
		, 'kota_tempat_lahir_pengusaha' => $data['kota_tempat_lahir_pengusaha']
		, 'bentuk_badan_hukum' 		=> $data['bentuk_badan_hukum']
		, 'tahun_mulai_operasi' 	=> $data['tahun_mulai_operasi']
		, 'tahun_mulai_operasi' 	=> $data['tahun_mulai_operasi']
		, 'gabung_paguyuban' 		=> $data['gabung_paguyuban']
		, 'bermitra' 				=> $data['bermitra']
		, 'bentuk_kemitraan' 		=> $data['bentuk_kemitraan']
		, 'pembinaan_pemerintah' 	=> $data['pembinaan_pemerintah']
		, 'pemberi_pembinaan' 		=> $data['pemberi_pembinaan']
		, 'eksport' 				=> $data['eksport']
		, 'persentase_eksport' 		=> $data['persentase_eksport']
		, 'import' 					=> $data['import']
		, 'persentase_import' 		=> $data['persentase_import']
		
		);
		return $this->db->insert('ekonomi_gas', $data);
	}
	
	//update user    
	public function update($id_gas) {
		$data = array(
		'rt' 						=> $this->input->post('rt')
		, 'rw' 						=> $this->input->post('rw')
		, 'kota'					=> $this->input->post('kota')
		, 'kecamatan' 				=> $this->input->post('kecamatan')
		, 'kelurahan' 				=> $this->input->post('kelurahan')
		, 'nbs' 					=> $this->input->post('nbs')
		, 'klasifikasi_perusahaan' 	=> $this->input->post('klasifikasi_perusahaan')
		, 'nama_perusahaan' 		=> $this->input->post('nama_perusahaan')
		, 'alamat_perusahaan' 		=> $this->input->post('alamat_perusahaan')
		, 'kegiatan_utama' 			=> $this->input->post('kegiatan_utama')
		, 'jenis_usaha' 			=> $this->input->post('jenis_usaha')
		, 'jk_pengusaha' 			=> $this->input->post('jk_pengusaha')
		, 'prov_tempat_lahir_pengusaha' => $this->input->post('prov_tempat_lahir_pengusaha')
		, 'kota_tempat_lahir_pengusaha' => $this->input->post('kota_tempat_lahir_pengusaha')
		, 'bentuk_badan_hukum' 		=> $this->input->post('bentuk_badan_hukum')
		, 'tahun_mulai_operasi' 	=> $this->input->post('tahun_mulai_operasi')
		, 'tahun_mulai_operasi' 	=> $this->input->post('tahun_mulai_operasi')
		, 'gabung_paguyuban' 		=> $this->input->post('gabung_paguyuban')
		, 'bermitra' 				=> $this->input->post('bermitra')
		, 'bentuk_kemitraan' 		=> $this->input->post('bentuk_kemitraan')
		, 'pembinaan_pemerintah' 	=> $this->input->post('pembinaan_pemerintah')
		, 'pemberi_pembinaan' 		=> $this->input->post('pemberi_pembinaan')
		, 'eksport' 				=> $this->input->post('eksport')
		, 'persentase_eksport' 		=> $this->input->post('persentase_eksport')
		, 'import' 					=> $this->input->post('import')
		, 'persentase_import' 		=> $this->input->post('persentase_import')
		);
		
		$this->db->where('id_gas', $id_gas);
		return $this->db->update('ekonomi_gas', $data);
	}
	
	public function getekonomi_gasById($id_gas) {
		$this->db->select('*');
		$this->db->where('id_gas', $id_gas);
		$query = $this->db->get('ekonomi_gas', 1);
		
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}
	
	//delete
	public function delete($id_gas) {
		$this->db->delete('ekonomi_gas', array('id_gas' => $id_gas));
	}
	
	
	
}

?>

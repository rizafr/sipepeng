<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Jalan_model extends CI_Model{
		
		var $table = 'jalan';
		// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
		
		public function __construct() {
			parent::__construct();
		}
		
		//select 
		public function select_all_data_awal() {
			$sql = "select * from jalan where status_verifikasi='0' ";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_verifikasi() {
			$sql = "select * from jalan where status_sedang_dilaksanakan='0' and status_tidak_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sedang_dilaksanakan() {
			$sql = "select * from jalan where status_sudah_dilaksanakan='0' and status_tidak_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sudah_dilaksanakan() {
			$sql = "select * from jalan where status_sudah_dilaksanakan='1' and status_tidak_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_tidak_dilaksanakan() {
			$sql = "select * from jalan where status_tidak_dilaksanakan='1'";
			return $this->db->query($sql);
		}
		
		
		
		
		
		//search
		public function select_by_id($id_jalan) {
			$sql = " select * from dra where id_jalan=" . $id_jalan;
			$query = $this->db->query($sql);
			return $query;
		}
		
		public function search_all($keyword) {
			$sql = "select * from pengguna where username like '%" . $keyword . "%'";
			return $this->db->query($sql);
		}
		
		//add user as public
		public function add($data) {
			$data = array(
			'rt' => $data['rt']
            , 'rw' => $data['rw']
            , 'alamat' => $data['alamat']
            , 'panjang' => $data['panjang']
            , 'lebar' => $data['lebar']
            , 'kedalaman' => $data['kedalaman']
            , 'ketersediaan_lahan' => $data['ketersediaan_lahan']
			, 'lat_awal' => $data['lat_awal']
            , 'lat_akhir' => $data['lat_akhir']
			, 'long_awal' => $data['long_awal']
            , 'long_akhir' => $data['long_akhir']
			, 'anggaran' => $data['anggaran']
            , 'sumber_data' => $data['sumber_data']
            , 'tahun_usulan' => $data['tahun_usulan']
            , 'ket' => $data['ket']
            , 'foto' =>  $data['foto']
            , 'dokumen' =>  $data['dokumen']
            , 'status_data_awal' => '1'
            , 'status_verifikasi' => '0'
            , 'status_sedang_dilaksanakan' => '0'
            , 'status_sudah_dilaksanakan' => '0'
            , 'status_tidak_dilaksanakan' => '0'
			);
			return $this->db->insert('jalan', $data);
		}
		
		
		
		//update user    
		public function update($id_jalan) {	
			$data = array(
			'rt' => $this->input->post('rt')
			, 'rw' => $this->input->post('rw')
			, 'alamat' => $this->input->post('alamat')
			, 'panjang' => $this->input->post('panjang')
			, 'lebar' => $this->input->post('lebar')
			, 'kedalaman' => $this->input->post('kedalaman')
			, 'ketersediaan_lahan' => $this->input->post('ketersediaan_lahan')
			, 'long_awal' => $data['long_awal']
			, 'long_akhir' => $data['long_akhir']
			, 'lat_awal' => $data['lat_awal']
			, 'lat_akhir' => $data['lat_akhir']
			, 'anggaran' =>  $this->input->post('anggaran')
			, 'sumber_data' =>  $this->input->post('sumber_data')
			, 'tahun_usulan' => $this->input->post('tahun_usulan')
			, 'ket' => $this->input->post('ket')
			);
			
			$this->db->where('id_jalan', $id_jalan);
			return $this->db->update('jalan', $data);
		}
		
		
		public function getjalanById($id_jalan) {
			$this->db->select('*');
			$this->db->where('id_jalan', $id_jalan);
			$query = $this->db->get('jalan', 1);
			
			if ($query->num_rows() == 1) {
				return $query->row_array();
			}
		}
			
		
		//delete
		public function delete($id_jalan) {
			$this->db->where('id_jalan',$id_jalan);
			$query = $this->db->get('jalan');
			$row = $query->row();
			
			//menghapus file
			$foto = $row->foto;
			$dokumen = $row->dokumen;
			// lokasi folder image
			$map = $_SERVER['DOCUMENT_ROOT'];
			
			$pathImage = $map . '/assets/upload/foto/';
			$pathDocument = $map . '/assets/upload/dokumen/';
			
			//lokasi gambar secara spesifik
			$image = $pathImage.$foto;
			$document = $pathDocument.$dokumen;
			
			//hapus image
			unlink($image);
			unlink($document);
			
			$this->db->delete('jalan', array('id_jalan' => $id_jalan));
			
		}
		///////////////////////////////////////////////////////////////////////
		//FUNGSI MERUBAH STATUS
		////////////////////////////////////////////////////////////////////////
		
		
		# update data awal menjadi verifikasi   
		public function update_status_data_awal($id_jalan) {	
			$data = array(
			'status_verifikasi' => "1"			
			);
			
			$this->db->where('id_jalan', $id_jalan);
			return $this->db->update('jalan', $data);
		}
	
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_verifikasi($id_jalan) {	
			$data = array(
			'status_sedang_dilaksanakan' => "1"			
			);
			
			$this->db->where('id_jalan', $id_jalan);
			return $this->db->update('jalan', $data);
		}
		
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_sedang_dilaksanakan($id_jalan) {	
			$data = array(
				'status_tidak_dilaksanakan' => "1"
				,'ket' => $this->input->post('ket')
			);
			
			$this->db->where('id_jalan', $id_jalan);
			return $this->db->update('jalan', $data);
		}
		
			
	
	
	
	
	}
?>

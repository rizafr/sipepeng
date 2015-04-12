<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Mck_model extends CI_Model{
		
		var $table = 'mck';
		// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
		
		public function __construct() {
			parent::__construct();
		}
		
		//select 
		public function select_all_data_awal() {
			$sql = "select * from mck where status_verifikasi='0' ";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_verifikasi() {
			$sql = "select * from mck where status_sedang_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sedang_dilaksanakan() {
			$sql = "select * from mck where status_sudah_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sudah_dilaksanakan() {
			$sql = "select * from mck where status_sudah_dilaksanakan='1'";
			return $this->db->query($sql);
		}
		
		 //select
		public function select_all_tidak_dilaksanakan() {
			$sql = "select * from mck where status_tidak_dilaksanakan='1'";
			return $this->db->query($sql);
		}
		
		//search
		public function select_by_id($id_mck) {
			$sql = " select * from dra where id_mck=" . $id_mck;
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
            , 'ketersediaan_lahan' => $data['ketersediaan_lahan']
			, 'long' => $data['long']
			, 'lat' => $data['lat']
			, 'anggaran' => $data['anggaran']
            , 'sumber_data' => $data['sumber_data']
            , 'tahun_usulan' => $data['tahun_usulan']
            , 'persetujuan_warga' => $data['persetujuan_warga']
            , 'ket' => $data['ket']
            , 'foto' =>  $data['foto']
            , 'dokumen' =>  $data['dokumen']
            , 'status_data_awal' => '1'
            , 'status_verifikasi' => '0'
            , 'status_sedang_dilaksanakan' => '0'
            , 'status_sudah_dilaksanakan' => '0'
            , 'status_tidak_dilaksanakan' => '0'
			);
			return $this->db->insert('mck', $data);
		}
		
		
		
		//update user    
		public function update($id_mck) {	
			$data = array(
			'rt' => $this->input->post('rt')
			, 'rw' => $this->input->post('rw')
			, 'alamat' => $this->input->post('alamat')
			, 'ketersediaan_lahan' => $this->input->post('ketersediaan_lahan')
			, 'long' => $this->input->$post['long']
			, 'lat' => $this->input->$post['lat']
			, 'anggaran' =>  $this->input->post('anggaran')
			, 'sumber_data' =>  $this->input->post('sumber_data')
			, 'tahun_usulan' => $this->input->post('tahun_usulan')
			, 'persetujuan_warga' => $this->input->post('persetujuan_warga')
			, 'ket' => $this->input->post('ket')
			);
			
			$this->db->where('id_mck', $id_mck);
			return $this->db->update('mck', $data);
		}
		
		
		public function getMckById($id_mck) {
			$this->db->select('*');
			$this->db->where('id_mck', $id_mck);
			$query = $this->db->get('mck', 1);
			
			if ($query->num_rows() == 1) {
				return $query->row_array();
			}
		}
			
		
		//delete
		public function delete($id_mck) {
			$this->db->where('id_mck',$id_mck);
			$query = $this->db->get('mck');
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
			
			$this->db->delete('mck', array('id_mck' => $id_mck));
			
		}
		///////////////////////////////////////////////////////////////////////
		//FUNGSI MERUBAH STATUS
		////////////////////////////////////////////////////////////////////////
		
		
		# update data awal menjadi verifikasi   
		public function update_status_data_awal($id_mck) {	
			$data = array(
			'status_verifikasi' => "1"			
			);
			
			$this->db->where('id_mck', $id_mck);
			return $this->db->update('mck', $data);
		}
	
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_verifikasi($id_mck) {	
			$data = array(
			'status_sedang_dilaksanakan' => "1"			
			);
			
			$this->db->where('id_mck', $id_mck);
			return $this->db->update('mck', $data);
		}
		
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_sedang_dilaksanakan($id_mck) {	
			$data = array(
			'status_sudah_dilaksanakan' => "1"			
			);
			
			$this->db->where('id_mck', $id_mck);
			return $this->db->update('mck', $data);
		}
		
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_tidak_dilaksanakan($id_mck) {
			$data = array(
				'status_tidak_dilaksanakan' => "1"
			);

			$this->db->where('id_mck', $id_mck);
			return $this->db->update('mck', $data);
		}	
	
	
	
	
	}
?>

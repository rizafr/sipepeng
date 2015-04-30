<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Sumur_dangkal_model extends CI_Model{
		
		var $table = 'sumur_dangkal';
		// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
		
		public function __construct() {
			parent::__construct();
		}
		
		//select 
		public function select_all_data_awal() {
			$sql = "select * from sumur_dangkal where status_verifikasi='0' ";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_verifikasi() {
			$sql = "select * from sumur_dangkal where status_sedang_dilaksanakan='0' and status_tidak_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sedang_dilaksanakan() {
			$sql = "select * from sumur_dangkal where status_sudah_dilaksanakan='0'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_sudah_dilaksanakan() {
			$sql = "select * from sumur_dangkal where status_sudah_dilaksanakan='1'";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all_tidak_dilaksanakan() {
			$sql = "select * from sumur_dangkal where status_tidak_dilaksanakan='1'";
			return $this->db->query($sql);
		}
		
		
		
		//search
		public function select_by_id($id_sumur_dangkal) {
			$sql = " select * from dra where id_sumur_dangkal=" . $id_sumur_dangkal;
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
			return $this->db->insert('sumur_dangkal', $data);
		}
		
		
		
		//update user    
		public function update($id_sumur_dangkal) {	
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
			
			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			return $this->db->update('sumur_dangkal', $data);
		}
		
		
		public function getSumurDangkalById($id_sumur_dangkal) {
			$this->db->select('*');
			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			$query = $this->db->get('sumur_dangkal', 1);
			
			if ($query->num_rows() == 1) {
				return $query->row_array();
			}
		}
			
		
		//delete
		public function delete($id_sumur_dangkal) {
			$this->db->where('id_sumur_dangkal',$id_sumur_dangkal);
			$query = $this->db->get('sumur_dangkal');
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
			
			$this->db->delete('sumur_dangkal', array('id_sumur_dangkal' => $id_sumur_dangkal));
			
		}
		///////////////////////////////////////////////////////////////////////
		//FUNGSI MERUBAH STATUS
		////////////////////////////////////////////////////////////////////////
		
		
		# update data awal menjadi verifikasi   
		public function update_status_data_awal($id_sumur_dangkal) {	
			$data = array(
			'status_verifikasi' => "1"			
			);
			
			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			return $this->db->update('sumur_dangkal', $data);
		}
	
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_verifikasi($id_sumur_dangkal) {	
			$data = array(
			'status_sedang_dilaksanakan' => "1"			
			);
			
			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			return $this->db->update('sumur_dangkal', $data);
		}
		
		# update data verifikasi menjadi sedang dilaksanakan   
		public function update_status_sedang_dilaksanakan($id_sumur_dangkal) {	
			$data = array(
			'status_sudah_dilaksanakan' => "1"			
			);
			
			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			return $this->db->update('sumur_dangkal', $data);
		}
		
		# update data verifikasi menjadi tidak dilaksanakan   
		public function update_status_tidak_dilaksanakan($id_sumur_dangkal) {
			$data = array(
				'status_tidak_dilaksanakan' => "1"
				,'ket' => $this->input->post('ket')
			);

			$this->db->where('id_sumur_dangkal', $id_sumur_dangkal);
			return $this->db->update('sumur_dangkal', $data);
		}
	
	
	
	
	
	}
?>

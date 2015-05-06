<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Berita_model extends CI_Model {
	
	var $table = '';
	
	// var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
	
	public function __construct() {
		parent::__construct();
	}
	
	//select public
	public function select_all() {
		$sql = "select * from berita";
		return $this->db->query($sql);
	}
	
	public function getBeritaById($id_berita) {
		$this->db->select('*');
		$this->db->where('id_berita', $id_berita);
		$query = $this->db->get('berita', 1);
		
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}	
	
	public function update($id_berita) {
        $data = array(
            'judul_berita' => $this->input->post('judul_berita')
            , 'isi_berita' => $this->input->post('isi_berita')
            , 'tgl_berita' => $this->input->post('tgl_berita')
        );

        $this->db->where('id_berita', $id_berita);
        return $this->db->update('berita', $data);
    }
	
	public function add($data) {
		$data = array(
		'judul_berita' 		=> $data['judul_berita']
		, 'isi_berita' 		=> $data['isi_berita']
		, 'tgl_berita' 		=> $data['tgl_berita']
		, 'foto' =>  $data['foto']
		);
		return $this->db->insert('berita', $data);
	}
	
	public function search_all($keyword) {
		$sql = "select * from berita where judul_berita like '%" . $keyword . "%'";
		return $this->db->query($sql);
	}
	
	//delete
	public function delete($id_berita) {
		$this->db->where('id_berita',$id_berita);
		$query = $this->db->get('berita');
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
		
		$this->db->delete('berita', array('id_berita' => $id_berita));
	}
	
	
	
}

?>

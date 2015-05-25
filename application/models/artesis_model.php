<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artesis_model extends CI_Model {

    var $table = 'artesis';

    // var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna

    public function __construct() {
        parent::__construct();
    }

    //select 
    public function select_all_data_awal() {
        $sql = "SELECT *
					FROM `artesis`
					WHERE 
					status_data_awal = '1'
					and status_verifikasi='0' and status_sedang_dilaksanakan='0' and status_sudah_dilaksanakan='0'  and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }
	
	#data usulan
		public function getJumlahartesisAwal() {
			 $sql = "SELECT *
					FROM `artesis` ";
			return $this->db->query($sql);
		}
		
    //select
    public function select_all_verifikasi() {
        $sql = "select * from artesis where status_data_awal='1' and status_verifikasi='1' and status_sedang_dilaksanakan='0' and status_sudah_dilaksanakan='0'  and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_sedang_dilaksanakan() {
        $sql = "select * from artesis where status_data_awal='1' and status_verifikasi='1' and status_sedang_dilaksanakan='1' and status_sudah_dilaksanakan='0'  and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_sudah_dilaksanakan() {
        $sql = "select * from artesis where status_data_awal='1' and status_verifikasi='1' and status_sedang_dilaksanakan='1' and status_sudah_dilaksanakan='1'  and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_tidak_dilaksanakan() {
        $sql = "select * from artesis where status_tidak_dilaksanakan='1'";
        return $this->db->query($sql);
    }

    //search
    public function select_by_id($id_artesis) {
        $sql = " select * from artesis where id_artesis=" . $id_artesis;
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
            , 'jml_pemakai' => $data['jml_pemakai']
            , 'long' => $data['long']
            , 'lat' => $data['lat']
            , 'anggaran' => $data['anggaran']
            , 'sumber_data' => $data['sumber_data']
            , 'tahun_usulan' => $data['tahun_usulan']
            , 'persetujuan_warga' => $data['persetujuan_warga']
            , 'ket' => $data['ket']
            , 'foto' => $data['foto']
            , 'dokumen' => $data['dokumen']
            , 'status_data_awal' => '1'
            , 'status_verifikasi' => '0'
            , 'status_sedang_dilaksanakan' => '0'
            , 'status_sudah_dilaksanakan' => '0'
            , 'status_tidak_dilaksanakan' => '0'
        );
        return $this->db->insert('artesis', $data);
    }

    //update user    
    public function update($data, $id_artesis) {
        $data = array(
             'rt' => $data['rt']
            , 'rw' => $data['rw']
            , 'alamat' => $data['alamat']
            , 'ketersediaan_lahan' => $data['ketersediaan_lahan']
            , 'jml_pemakai' => $data['jml_pemakai']
            , 'long' => $data['long']
            , 'lat' => $data['lat']
            , 'anggaran' => $data['anggaran']
            , 'sumber_data' => $data['sumber_data']
            , 'tahun_usulan' => $data['tahun_usulan']
            , 'persetujuan_warga' => $data['persetujuan_warga']
            , 'ket' => $data['ket']
            , 'foto' => $data['foto']
            , 'dokumen' => $data['dokumen']
        );

        $this->db->where('id_artesis', $id_artesis);
        return $this->db->update('artesis', $data);
    }

    public function getArtesisById($id_artesis) {
        $this->db->select('*');
        $this->db->where('id_artesis', $id_artesis);
        $query = $this->db->get('artesis', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //delete
    public function delete($id_artesis) {
        $this->db->where('id_artesis', $id_artesis);
        $query = $this->db->get('artesis');
        $row = $query->row();

        //menghapus file
        $foto = $row->foto;
        $dokumen = $row->dokumen;
        // lokasi folder image
        $map = $_SERVER['DOCUMENT_ROOT'];

        $pathImage = $map . '/assets/upload/foto/';
        $pathDocument = $map . '/assets/upload/dokumen/';

        //lokasi gambar secara spesifik
        $image = $pathImage . $foto;
        $document = $pathDocument . $dokumen;

        //hapus image
        unlink($image);
        unlink($document);

        $this->db->delete('artesis', array('id_artesis' => $id_artesis));
    }

    ///////////////////////////////////////////////////////////////////////
    //FUNGSI MERUBAH STATUS
    ////////////////////////////////////////////////////////////////////////
    # update data awal menjadi verifikasi   
    public function update_status_data_awal($id_artesis) {
        $data = array(
            'status_verifikasi' => "1"
        );

        $this->db->where('id_artesis', $id_artesis);
        return $this->db->update('artesis', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_verifikasi($id_artesis) {
        $data = array(
            'status_sedang_dilaksanakan' => "1"
        );

        $this->db->where('id_artesis', $id_artesis);
        return $this->db->update('artesis', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_sedang_dilaksanakan($id_artesis) {
        $data = array(
            'status_sudah_dilaksanakan' => "1"
        );

        $this->db->where('id_artesis', $id_artesis);
        return $this->db->update('artesis', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_tidak_dilaksanakan($id_artesis) {
        $data = array(
            'status_tidak_dilaksanakan' => "1"
            , 'ket' => $this->input->post('ket')
        );

        $this->db->where('id_artesis', $id_artesis);
        return $this->db->update('artesis', $data);
    }

}

?>

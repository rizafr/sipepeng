<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lain_model extends CI_Model {

    var $table = 'lain';

    // var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna

    public function __construct() {
        parent::__construct();
    }

    //select 
    public function select_all_data_awal() {
        $sql = "select * from lain where status_verifikasi='0' ";
        return $this->db->query($sql);
    }

    //select
    public function select_all_verifikasi() {
        $sql = "select * from lain where status_sedang_dilaksanakan='0' and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_sedang_dilaksanakan() {
        $sql = "select * from lain where status_sudah_dilaksanakan='0' and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_sudah_dilaksanakan() {
        $sql = "select * from lain where status_sudah_dilaksanakan='1' and status_tidak_dilaksanakan='0'";
        return $this->db->query($sql);
    }

    //select
    public function select_all_tidak_dilaksanakan() {
        $sql = "select * from lain where status_tidak_dilaksanakan='1'";
        return $this->db->query($sql);
    }

    //search
    public function select_by_id($id_lain) {
        $sql = " select * from dra where id_lain=" . $id_lain;
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
            , 'nama_kegiatan' => $data['nama_kegiatan']
            , 'alamat' => $data['alamat']
            , 'ketersediaan_lahan' => $data['ketersediaan_lahan']
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
        return $this->db->insert('lain', $data);
    }

    //update user    
    public function update($data,$id_lain) {
        $data = array(
           'rt' => $data['rt']
            , 'rw' => $data['rw']
            , 'nama_kegiatan' => $data['nama_kegiatan']
            , 'alamat' => $data['alamat']
            , 'ketersediaan_lahan' => $data['ketersediaan_lahan']
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

        $this->db->where('id_lain', $id_lain);
        return $this->db->update('lain', $data);
    }

    public function getlainById($id_lain) {
        $this->db->select('*');
        $this->db->where('id_lain', $id_lain);
        $query = $this->db->get('lain', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //delete
    public function delete($id_lain) {
        $this->db->where('id_lain', $id_lain);
        $query = $this->db->get('lain');
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

        $this->db->delete('lain', array('id_lain' => $id_lain));
    }

    ///////////////////////////////////////////////////////////////////////
    //FUNGSI MERUBAH STATUS
    ////////////////////////////////////////////////////////////////////////
    # update data awal menjadi verifikasi   
    public function update_status_data_awal($id_lain) {
        $data = array(
            'status_verifikasi' => "1"
        );

        $this->db->where('id_lain', $id_lain);
        return $this->db->update('lain', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_verifikasi($id_lain) {
        $data = array(
            'status_sedang_dilaksanakan' => "1"
        );

        $this->db->where('id_lain', $id_lain);
        return $this->db->update('lain', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_sedang_dilaksanakan($id_lain) {
        $data = array(
            'status_sudah_dilaksanakan' => "1"
        );

        $this->db->where('id_lain', $id_lain);
        return $this->db->update('lain', $data);
    }

    # update data verifikasi menjadi sedang dilaksanakan   

    public function update_status_tidak_dilaksanakan($id_lain) {
        $data = array(
            'status_tidak_dilaksanakan' => "1"
            , 'ket' => $this->input->post('ket')
        );

        $this->db->where('id_lain', $id_lain);
        return $this->db->update('lain', $data);
    }

}

?>

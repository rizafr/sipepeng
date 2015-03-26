<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Drainase_model extends CI_Model{
    
   // var $table = 'drainase';
   // var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
    
    public function __construct() {
        parent::__construct();
    }

    //select 
    public function select_all_data_awal() {
        $sql = "select * from drainase where status_data_awal='1'";
        return $this->db->query($sql);
    }

	//select
    public function select_all_verifikasi() {
        $sql = "select * from drainase where status_verifikasi='1'";
        return $this->db->query($sql);
    }
	
	//select
    public function select_all_sedang_dilaksanakan() {
        $sql = "select * from drainase where status_sedang_dilaksanakan='1'";
        return $this->db->query($sql);
    }
	
	//select
    public function select_all_sudah_dilaksanakan() {
        $sql = "select * from drainase where status_sudah_dilaksanakan='1'";
        return $this->db->query($sql);
    }
	
	//select
    public function select_all_tidak_dilaksanakan() {
        $sql = "select * from drainase where status_tidak_dilaksanakan='1'";
        return $this->db->query($sql);
    }
	


   

    //search
    public function select_by_id($id_drainase) {
        $sql = " select * from dra where id_drainase=" . $id_drainase;
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
            , 'status_data_awal' => '1'
            , 'status_verifikasi' => '0'
            , 'status_sedang_dilaksanakan' => '0'
            , 'status_sudah_dilaksanakan' => '0'
            , 'status_tidak_dilaksanakan' => '0'
        );
       return $this->db->insert('drainase', $data);
    }
    
   

    //update user    
    public function update($id_pengguna) {
        if ($this->input->post('password')) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'username' => $this->input->post('username'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'username' => $this->input->post('username'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        }
        $this->db->where('id_pengguna', $id_pengguna);
        return $this->db->update($this->table, $data);
    }
    
    //update profile admin
    public function update_admin($id_pengguna) {
        if ($this->input->post('password')) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'username' => $this->input->post('username'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'username' => $this->input->post('username'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        }
        $this->db->where('id_pengguna', $id_pengguna);
        return $this->db->update($this->table, $data);
    }
    
    public function getUserById($id_pengguna) {
        $this->db->select('*');
        $this->db->where('id_pengguna', $id_pengguna);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function get_user_by_id($id_pengguna) {
        $sql = "select u.*, us.jenis_pengguna as jenis_pengguna 
                from pengguna u, jenis_pengguna us
                where u.id_jenis_pengguna = us.id_jenis_pengguna  and u.id_pengguna = '$id_pengguna'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1){
            return $query->row_array();
        }
    }

    //delete
    public function delete($id_drainase) {
        $sql = "delete from drainase where id_drainase = " . $id_drainase;
        $query = $this->db->query($sql);
    }

   
    function get_dropdown_list() {
        $this->db->from($this->jenis_pengguna_level);
        $this->db->order_by('jenis_pengguna', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Level--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_jenis_pengguna']] = $row['jenis_pengguna'];
            }
        }
        return $return;
    }
}
?>

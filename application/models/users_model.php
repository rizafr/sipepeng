<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model{
    
    var $table = 'pengguna';
    var $jenis_pengguna_level = 'jenis_pengguna'; //Tabel jenis_pengguna
    
    public function __construct() {
        parent::__construct();
    }

    //select
    public function select_all() {
        $sql = "select u.*, us.jenis_pengguna from pengguna u, jenis_pengguna us where u.id_jenis_pengguna = us.id_jenis_pengguna";
        return $this->db->query($sql);
    }

    public function select_all_paging($limit = array()) {
        $sql = "select * from pengguna";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    //search
    public function select_by_id($id_pengguna) {
        $sql = " select * from pengguna where id_pengguna=" . $id_pengguna;
        $query = $this->db->query($sql);
        return $query;
    }

    public function search_all($keyword) {
        $sql = "select * from pengguna where username like '%" . $keyword . "%'";
        return $this->db->query($sql);
    }

        
    //add user from admin
    public function add_from_admin($data) {
        $data = array(
				'id_pengguna' => ''
            , 'id_jenis_pengguna' => $data['id_jenis_pengguna']
            , 'username' => $data['username']
            , 'password' => md5($data['password'])
            , 'nama' => $data['nama']
            , 'email' => $data['email']
            , 'nip' => $data['nip']
            , 'alamat' => $data['alamat']
            , 'telp' => $data['telp']
        );
        $this->db->insert($this->table, $data);
    }

    //update user    
    public function update($id_pengguna) {
        if (!empty($this->input->post('password'))) {
            $data = array(
			'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna')
            , 'username' => $this->input->post('username')
            , 'password' => md5($this->input->post('password'))
            , 'nama' => $this->input->post('nama')
            , 'email' => $this->input->post('email')
            , 'nip' => $this->input->post('nip')
            , 'alamat' => $this->input->post('alamat')
            , 'telp' => $this->input->post('telp')
            );
        } else {
            $data = array(
            'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna')
            , 'username' => $this->input->post('username')
            , 'nama' => $this->input->post('nama')
            , 'email' => $this->input->post('email')
            , 'nip' => $this->input->post('nip')
            , 'alamat' => $this->input->post('alamat')
            , 'telp' => $this->input->post('telp')
            );
        }
        $this->db->where('id_pengguna', $id_pengguna);
        return $this->db->update('pengguna', $data);
    }
    
    //update profile admin
    public function update_admin($id_pengguna) {
        if (!empty($this->input->post('password'))) {
            $data = array(
			'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna')
            , 'username' => $this->input->post('username')
            , 'password' => md5($this->input->post('password'))
            , 'nama' => $this->input->post('nama')
            , 'email' => $this->input->post('email')
            , 'nip' => $this->input->post('nip')
            , 'alamat' => $this->input->post('alamat')
            , 'telp' => $this->input->post('telp')
            );
        } else {
            $data = array(
            'id_jenis_pengguna' => $this->input->post('id_jenis_pengguna')
            , 'username' => $this->input->post('username')
            , 'nama' => $this->input->post('nama')
            , 'email' => $this->input->post('email')
            , 'nip' => $this->input->post('nip')
            , 'alamat' => $this->input->post('alamat')
            , 'telp' => $this->input->post('telp')
            );
        }
        $this->db->where('id_pengguna', $id_pengguna);
        return $this->db->update('pengguna', $data);
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
    public function delete($id_pengguna) {
        $sql = "delete from pengguna where id_pengguna = " . $id_pengguna;
        $query = $this->db->query($sql);
    }

    //check_login
    public function check_login($username, $password) {
        $query = $this->db->get_where($this->table, array('username' => $username, 'password' => $password), 1, 0);
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function checkLogin($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get($this->table, 1);
        
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //get user for sessions
    public function get_users($username, $password) {
		$password= md5($password);
        return $this->db->query("SELECT u.id_pengguna, u.username, u.username, u.id_jenis_pengguna, us.jenis_pengguna 
                                FROM pengguna u, jenis_pengguna us 
                                WHERE u.id_jenis_pengguna = us.id_jenis_pengguna AND u.username='$username' AND u.password='$password'");
    }
    
    function updateLastLogin($id_pengguna) {
        $data = array(
            'last_login' => date('Y-m-d H:i:s', time()+60*60*6)
        );
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update($this->table, $data);
    }
	
    #memilih level dari pengguna
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

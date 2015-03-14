<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model{
    
    var $table = 'users_tabel';
    var $status_level = 'users_status'; //Tabel Users_status
    
    public function __construct() {
        parent::__construct();
    }

    //select
    public function select_all() {
        $sql = "select u.*, us.status from users_tabel u, users_status us where u.id_status = us.id_status";
        return $this->db->query($sql);
    }

    public function select_all_paging($limit = array()) {
        $sql = "select * from users_tabel";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    //search
    public function select_by_id($id_user) {
        $sql = " select * from users_tabel where id_user=" . $id_user;
        $query = $this->db->query($sql);
        return $query;
    }

    public function search_all($keyword) {
        $sql = "select * from users_tabel where user_name like '%" . $keyword . "%'";
        return $this->db->query($sql);
    }

    //add user as public
    public function add($data) {
        $data = array(
            'id_user' => ''
            , 'id_status' => '2'
            , 'user_email' => $data['user_email']
            , 'user_password' => $data['user_password']
            , 'confirm_password' => $data['confirm_password']
            , 'user_name' => $data['user_name']
            , 'first_address' => $data['first_address']
            , 'second_address' => $data['second_address']
            , 'user_phone' => $data['user_phone']
            , 'user_city' => $data['user_city']
            , 'user_zip' => $data['user_zip']
            , 'id_state' => $data['id_state']
            , 'id_country' => $data['id_country']
            , 'user_agree' => $data['user_agree']
            , 'created' => $data['created']
        );
        $this->db->insert($this->table, $data);
    }
    
    //add user from admin
    public function add_from_admin($data) {
        $data = array(
            'id_user' => ''
            , 'id_status' => $data['id_status']
            , 'user_email' => $data['user_email']
            , 'user_password' => $data['user_password']
            , 'confirm_password' => $data['confirm_password']
            , 'user_name' => $data['user_name']
            , 'first_address' => $data['first_address']
            , 'second_address' => $data['second_address']
            , 'user_phone' => $data['user_phone']
            , 'user_city' => $data['user_city']
            , 'user_zip' => $data['user_zip']
            , 'id_state' => $data['id_state']
            , 'id_country' => $data['id_country']
            , 'user_agree' => $data['user_agree']
            , 'created' => $data['created']
        );
        $this->db->insert($this->table, $data);
    }

    //update user    
    public function update($id_user) {
        if ($this->input->post('user_password')) {
            $data = array(
                'user_email' => $this->input->post('user_email'),
                'user_password' => $this->input->post('user_password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'user_name' => $this->input->post('user_name'),
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
                'user_email' => $this->input->post('user_email'),
                'user_name' => $this->input->post('user_name'),
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
        $this->db->where('id_user', $id_user);
        return $this->db->update($this->table, $data);
    }
    
    //update profile admin
    public function update_admin($id_user) {
        if ($this->input->post('user_password')) {
            $data = array(
                'user_email' => $this->input->post('user_email'),
                'user_password' => $this->input->post('user_password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'user_name' => $this->input->post('user_name'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'id_status' => $this->input->post('id_status'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        } else {
            $data = array(
                'user_email' => $this->input->post('user_email'),
                'user_name' => $this->input->post('user_name'),
                'first_address' => $this->input->post('first_address'),
                'second_address' => $this->input->post('second_address'),
                'user_phone' => $this->input->post('user_phone'),
                'user_city' => $this->input->post('user_city'),
                'user_zip' => $this->input->post('user_zip'),
                'id_country' => $this->input->post('id_country'),
                'id_state' => $this->input->post('id_state'),
                'id_status' => $this->input->post('id_status'),
                'user_agree' => $this->input->post('user_agree'),
                'modified' => date('Y-m-d H:i:s', time()+60*60*6)
            );
        }
        $this->db->where('id_user', $id_user);
        return $this->db->update($this->table, $data);
    }
    
    public function getUserById($id_user) {
        $this->db->select('*');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function get_user_by_id($id_user) {
        $sql = "select u.*, us.status as status, s.state as state, c.country_name as country_name 
                from users_tabel u, users_status us, states_tabel s, country_tabel c 
                where u.id_status = us.id_status and c.id_country = u.id_country and s.id_state = u.id_state and u.id_user = '$id_user'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1){
            return $query->row_array();
        }
    }

    //delete
    public function delete($id_user) {
        $sql = "delete from users_tabel where id_user = " . $id_user;
        $query = $this->db->query($sql);
    }

    //check_login
    public function check_login($user_email, $user_password) {
        $query = $this->db->get_where($this->table, array('user_email' => $user_email, 'user_password' => $user_password), 1, 0);
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function checkLogin($user_email, $user_password) {
        $this->db->select('*');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', $user_password);
        $query = $this->db->get($this->table, 1);
        
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //get user for sessions
    public function get_users($user_email, $user_password) {
        return $this->db->query("SELECT u.id_user, u.user_name, u.user_email, u.id_status, us.status 
                                FROM users_tabel u, users_status us 
                                WHERE u.id_status = us.id_status AND u.user_email='$user_email' AND u.user_password='$user_password'");
    }
    
    function updateLastLogin($id_user) {
        $data = array(
            'last_login' => date('Y-m-d H:i:s', time()+60*60*6)
        );
        $this->db->where('id_user', $id_user);
        $this->db->update($this->table, $data);
    }
    
    function get_dropdown_list() {
        $this->db->from($this->status_level);
        $this->db->order_by('status', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Level--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_status']] = $row['status'];
            }
        }
        return $return;
    }
}
?>

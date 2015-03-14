<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class States_model extends CI_Model {

    var $table = 'states_tabel';

    public function __construct() {
        parent::__construct();
    }

    //select
    public function select_all() {
        $sql = "select * from states_tabel";
        return $this->db->query($sql);
    }

    public function select_all_paging($limit = array()) {
        $sql = "select * from states_tabel";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    function getStates() {
        $sql = "SELECT * FROM states_tabel";
        $data = $this->db->query($sql);
        return $data;
    }

    public function getStateById($id_state) {
        $this->db->select('*');
        $this->db->where('id_state', $id_state);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function get_dropdown_list() {
        $this->db->from('states_tabel');
        $this->db->order_by('state', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a State--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_state']] = $row['state'];
            }
        }
        return $return;
    }
    
    public function add($data){
        $data = array(
            'id_state' => ''
            ,'state' => $data['state']
        );
        $this->db->insert($this->table, $data);
    }
    
    //delete
    public function delete($id_state) {
        $sql = "delete from states_tabel where id_state = " . $id_state;
        $query = $this->db->query($sql);
    }
    
    //update
    public function update($id_state){
        $data = array(
            'state' => $this->input->post('state')
        );
        $this->db->where('id_state', $id_state);
        return $this->db->update($this->table, $data);
    }

}
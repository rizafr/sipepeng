<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country_model extends CI_Model {
    
    var $table = 'country_tabel';
    
    function __construct() {
        parent::__construct();
    }
    
    //select
    public function select_all() {
        $sql = "select * from country_tabel";
        return $this->db->query($sql);
    }

    public function select_all_paging($limit = array()) {
        $sql = "select * from country_tabel";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    function getCountry() {
        $sql = "SELECT * FROM country_tabel";
        $data = $this->db->query($sql);
        return $data;
    }
    
    public function getCountryById($id_country) {
        $this->db->select('*');
        $this->db->where('id_country', $id_country);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function get_dropdown_list() {
        $this->db->from($this->table);
        $this->db->order_by('country_name', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Country--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_country']] = $row['country_name'];
            }
        }
        return $return;
    }
    
    //add
     public function add($data){
        $data = array(
            'id_country' => ''
            ,'country_name' => $data['country_name']
        );
        $this->db->insert($this->table, $data);
    }
    
    //delete
    public function delete($id_country) {
        $sql = "delete from country_tabel where id_country = " . $id_country;
        $query = $this->db->query($sql);
    }
    
    //update
    public function update($id_country){
        $data = array(
            'country_name' => $this->input->post('country_name')
        );
        $this->db->where('id_country', $id_country);
        return $this->db->update($this->table, $data);
    }
}

?>

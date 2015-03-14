<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {
    
    var $table = 'product_categories';
    
    public function __construct() {
        parent::__construct();
    }
    
    //select
    public function select_all(){
        $sql = "select * from product_categories";
        return $this->db->query($sql);
    }
    
    public function select_all_paging($limit = array()) {
        $sql = "select * from product_categories";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    function getCategories() {
        $sql = "SELECT * FROM product_categories";
        $data = $this->db->query($sql);
        return $data;
    }
    
    public function getCategoryById($id_category) {
        $this->db->select('*');
        $this->db->where('id_category', $id_category);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function get_dropdown_list() {
        $this->db->from($this->table);
        $this->db->order_by('category_name', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Category--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_category']] = $row['category_name'];
            }
        }
        return $return;
    }
    
    public function add(){
        $data = array(
            'id_category' => ''
            ,'category_name' => $this->input->post('category_name')
            ,'deskripsi' => $this->input->post('deskripsi')
            ,'created_at' => date('Y-m-d H:i:s', time()+60*60*6)
        );
        $this->db->insert($this->table, $data);
        
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }
    
    //delete
    public function delete($id_category) {
        $sql = "delete from product_categories where id_category = " . $id_category;
        $query = $this->db->query($sql);
        return $query;
    }
    
    //update
    public function update($id_category){
        $data = array(
            'category_name' => $this->input->post('category_name')
            ,'deskripsi' => $this->input->post('deskripsi')
            ,'modified_at' => date('Y-m-d H:i:s', time()+60*60*6)
        );
        $this->db->where('id_category', $id_category);
        return $this->db->update($this->table, $data);
    }
}

?>

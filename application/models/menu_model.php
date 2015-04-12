<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_model extends CI_Model {
    
    var $table = 'menu';
    
    public function __construct() {
        parent::__construct();
    }
    
    //select all
    public function select_all(){
        $sql = "select * from menu order by menu asc";
        return $this->db->query($sql);
    } 
	
	//select menu pu
    public function select_pu(){
        $sql = "select * from menu  where id_jenis_pengguna = 3 order by menu asc";
        return $this->db->query($sql);
    }
    
    //select menu dkp
    public function select_dkp(){
        $sql = "select * from menu where id_jenis_pengguna = 2 order by menu asc";
        return $this->db->query($sql);
    }
    
    public function select_all_paging($limit = array()) {
        $sql = "select * from product_categories";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }
    
    
  
   
}

?>

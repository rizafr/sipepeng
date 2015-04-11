<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Public_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    #ambil data artesis
    public function artesis_all() {
        $sql = "select * from artesis";
        return $this->db->query($sql);
    }
    #ambil data drainase
    public function drainase_all() {
        $sql = "select * from drainase";
        return $this->db->query($sql);
    }
    #ambil data jalan
    public function jalan_all() {
        $sql = "select * from jalan";
        return $this->db->query($sql);
    }
    #ambil data kirmir
    public function kirmir_all() {
        $sql = "select * from kirmir";
        return $this->db->query($sql);
    }
    #ambil data mck
    public function mck_all() {
        $sql = "select * from mck";
        return $this->db->query($sql);
    }
    #ambil data septictank
    public function septictank_all() {
        $sql = "select * from septictank";
        return $this->db->query($sql);
    }
    #ambil data septictank_komunal
    public function septictank_komunal_all() {
        $sql = "select * from septictank_komunal";
        return $this->db->query($sql);
    }
    #ambil data sumur_dangkal
    public function sumur_dangkal_all() {
        $sql = "select * from sumur_dangkal";
        return $this->db->query($sql);
    }
    #ambil data sumur_dangkal
    public function sumur_resapan_all() {
        $sql = "select * from sumur_resapan";
        return $this->db->query($sql);
    }

    #jumlah user
    public function getJumlahPengguna() {
        return $this->db->count_all('pengguna');
    }

    #jumlah artesis

    public function getJumlahArtesis() {
        return $this->db->count_all('artesis');
    }

    #jumlah drainase

    public function getJumlahDrainase() {
        return $this->db->count_all('drainase');
    }

    #jumlah jalan

    public function getJumlahJalan() {
        return $this->db->count_all('jalan');
    }

    #jumlah kirmir

    public function getJumlahKirmir() {
        return $this->db->count_all('kirmir');
    }

    #jumlah mck

    public function getJumlahMck() {
        return $this->db->count_all('mck');
    }

    #jumlah septictank

    public function getJumlahSeptictank() {
        return $this->db->count_all('septictank');
    }

    #jumlah septictank_komunal

    public function getJumlahSeptictankKomunal() {
        return $this->db->count_all('septictank_komunal');
    }

    #jumlah sumur_dangkal

    public function getJumlahSumurDangkal() {
        return $this->db->count_all('sumur_dangkal');
    }

    #jumlah sumur_resapan

    public function getJumlahSumurResapan() {
        return $this->db->count_all('sumur_resapan');
    }

    //select
    public function select_all() {
        $sql = "select * from menu";
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

}

?>

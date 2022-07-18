<?php
class M_kategori extends CI_Model{
    public function data_skincare(){
       return $this->db->get_where("tb_barang", array('kategori' => 'skincare'));
    }
}
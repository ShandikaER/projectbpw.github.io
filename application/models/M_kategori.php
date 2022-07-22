<?php
class M_kategori extends CI_Model{
    public function data_whitening(){
       return $this->db->get_where('product', array('id_jenis' => '2'));
    }
    public function data_acne(){
        return $this->db->get_where('product', array('id_jenis' => '1'));
     }
     public function data_ultimate(){
        return $this->db->get_where('product', array('id_jenis' => '4'));
     }
     public function data_luminous(){
        return $this->db->get_where('product', array('id_jenis' => '3'));
     }
}
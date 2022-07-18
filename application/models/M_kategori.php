<?php
class M_kategori extends CI_Model{
    public function data_whitening(){
       return $this->db->get_where('product', array('kategori' => 'Whitening Series'));
    }
    public function data_acne(){
        return $this->db->get_where('product', array('kategori' => 'Acne Series'));
     }
     public function data_ultimate(){
        return $this->db->get_where('product', array('kategori' => 'Ultimate Series'));
     }
     public function data_luminous(){
        return $this->db->get_where('product', array('kategori' => 'Luminous Series'));
     }
}
<?php

class M_product extends CI_Model{
    public function tampil_data(){
        return $this->db->get('product');
    }
    public function detail_product($id_product){
        $result = $this->db->where('id_product', $id_product)->get('product');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}
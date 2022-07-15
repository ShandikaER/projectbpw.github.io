<?php

class M_login extends CI_Model {

    function show_all(){
        return $this->db->get('user');
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $query = $this->db->update($table,$data);
        if($query){
            redirect('auth/index');
        }else{
            echo "Tidak Berhasil";
        }
    }
}
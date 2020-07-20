<?php
class M_jurusan extends CI_Model{

  function jumlah_jurusan(){
    return $this->db->get('paket_keahlian');
  }

  function jurusan_profile($where ,$table){
    return $this->db->get_where($table,$where);
  }
}

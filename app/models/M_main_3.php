<?php
class M_main_3 extends CI_Model{

  function data_guru($number,$offset){
    return $query = $this->db->get('guru',$number,$offset)->result();
  }

  function jumlah_guru(){
    return $this->db->get('guru')->num_rows();
  }

  function guru_profile($where ,$table){
    return $this->db->get_where($table,$where);
  }

//Galeri

  function tampil_galeri_list(){
    return $this->db->get('foto_kategori');
  }
}

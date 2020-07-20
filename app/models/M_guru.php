<?php
class M_guru extends CI_Model{

  function data_guru($number,$offset){
    return $query = $this->db->get('guru',$number,$offset)->result();
  }

  function jumlah_guru(){
    return $this->db->get('guru')->num_rows();
  }

  function guru_profile($where ,$table){
    return $this->db->get_where($table,$where);
  }

  function asal(){
    $query = $this->db->query("SELECT * FROM PELAJARAN_GURU, guru, PELAJARAN WHERE
      guru.id_guru = PELAJARAN_GURU.id_guru
      AND PELAJARAN_GURU.id_pelajaran = PELAJARAN.id_pelajaran
      ORDER BY guru.id_guru ASC");
      $result = $query->result();
      return $result;
  }
}

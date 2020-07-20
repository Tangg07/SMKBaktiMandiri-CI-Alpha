<?php
class M_main_2 extends CI_Model{

  function jumlah_jurusan(){
    return $this->db->get('paket_keahlian');
  }

  function row_jurusan(){
    $query = $this->db->get('paket_keahlian');
    return $query->num_rows();
  }

  function jurusan_profile($where ,$table){
    return $this->db->get_where($table,$where);
  }

//berita
  function read_berita(){
    return $this->db->get('berita');
  }

  function jumlah_berita(){
    return $this->db->get('berita')->num_rows();
  }

  function jurusan_view($where ,$table){
    return $this->db->get_where($table,$where);
  }

  function data_berita($number,$offset){
    return $query = $this->db->get('berita',$number,$offset)->result();
  }

  function tambah_aksi($data, $table){
    $this->db->insert($table, $data);
  }

  function ubah_data($where ,$table){
    return $this->db->get_where($table,$where);
  }

  function ubah_data_aksi($where ,$data, $table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
//Akhir Berita
}

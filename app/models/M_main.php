<?php
class M_Main extends CI_Model{

//Visi dan misi
  function read_visi(){
    return $this->db->get('_visi');
  }
//misi
  function read_misi(){
    return $this->db->get('_misi');
  }
  function misi_edit($where ,$table){
    return $this->db->get_where($table,$where);
  }
  function misi_edit_aksi($where ,$data, $table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
///////////////////////////////////////////////////////////////////////////////
//Image SLider home_view
  function tampil_slider(){
    $this->db->from('image_slider');
    $this->db->limit(8);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    return $query;
  }

  function tampil_slider_admin(){
    $this->db->from('image_slider');
    $query = $this->db->get();
    return $query;
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
//Akhir Image slider Home
///////////////////////////////////////////////////////////////////////////////
  function tambah_ck($data, $table){
    $this->db->insert($table, $data);
  }
}

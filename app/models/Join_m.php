<?php
/**
 *
 */
class Join_m extends CI_Model
{
  function tampil_join(){
      return $this->db->get('1_guru');
  }

  function profile_join($id){
    $this->db->select('*');
    $this->db->from('1_guru');
    $this->db->join('1_pelajaran', '1_pelajaran.id_guru = 1_guru.id');
    $this->db->where('1_pelajaran.id_guru', $id);
    $query = $this->db->get();
    return $query;
  }
}
 ?>

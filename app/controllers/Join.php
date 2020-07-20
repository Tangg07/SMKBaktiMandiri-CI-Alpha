<?php
class Join extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Join_m');
  }

  function index(){
    $data['join'] = $this->Join_m->tampil_join()->result();
    $this->load->view('join_v', $data);
  }

  function profile_join($id){
    $data['join_profile'] = $this->Join_m->profile_join($id)->result();
    $this->load->view('profile_join_v', $data);
  }
}

 ?>

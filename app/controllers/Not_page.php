<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Not_page extends CI_Controller {

  public function index(){
    $this->load->view('404_no_page');
  }
}

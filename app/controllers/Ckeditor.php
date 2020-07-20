<?php
class Ckeditor extends CI_controller{
	 public $data_ckeditor = array();

	function __construct(){
		parent::__construct();
		$this->load->model('M_main');
	}

  function index(){
    $data['ckeditor'] = array('id'=>'content','path' =>'asset/ckeditor','config'=>array('toolbar'=>"Full",),'styles'=>array('style 1'=>array('name'=>'Blue Title','element'=>'h2','styles'=>array('color'=>'Blue','font-weight'=>'bold')),'style 2' => array ('name'=>'Red Title','element'=>'h2','styles'=>array('color'=>'Red','font-weight'=>'bold','text-decoration'=>'underline'))));
    $this->load->view('tampilan_ckeditor', $data);
  }

	function tambah_aksi_ck(){
		$deskripsi = $this->input->post('deskripsi');
			$data = array(
				'deskripsi' => $deskripsi,
			);
		$this->M_main->tambah_ck($data,'image_slider');
		redirect('Ckeditor');
	}
}
?>

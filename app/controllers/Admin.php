<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_main_3');
    $this->load->model('M_main_2');
    $this->load->model('M_main');
  }

  function index(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['nama'];
      $this->load->view('admin/home_view', $data);
    } else  {
      //If no session, redirect to login page
      redirect('Login', 'refresh');
	   }
  }

//Image slider
  function image_slider(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['slider'] = $this->M_main->tampil_slider_admin()->result();
      $data['username'] = $session_data['nama'];
      $this->load->view('admin/image_slider', $data);
    } else  {
      //If no session, redirect to login page
      redirect('Login', 'refresh');
	   }
  }

  function image_slider_tambah(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['nama'];
      $data['berita'] = $this->M_main_2->read_berita()->result();
      $this->load->view('admin/image_slider/tambah', $data);
    } else  {
      //If no session, redirect to login page
      redirect('Login', 'refresh');
     }
  }

  function image_slider_tambah_aksi(){
    $config['upload_path']          = 'asset/image/upload/slider';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;
      $char = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF", ".jpeg", ".JPEG");
      $name =$_FILES["userfile"]['name'];
      $old_name =str_replace($char ,"" ,$name);
    $userfile = $old_name."_".time();
    $config['file_name'] = $userfile;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ( !$this->upload->do_upload('userfile'))
    {
        redirect('Admin/image_slider_tambah');
    }
    else
    {
      $gbr = $this->upload->data();
      $efek_text = $this->input->post('efek_text');
      $judul = $this->input->post('judul');
      $deskripsi = $this->input->post('deskripsi');
      $link_berita = $this->input->post('link_berita');
        $data = array(
          'efek_text' => $efek_text,
          'judul' => $judul,
          'deskripsi' => $deskripsi,
          'link_berita' => $link_berita,
          'image' => $gbr['file_name'],
          'tipe_gbr' => $gbr['file_type'],
        );
    $this->M_main->tambah_aksi($data,'image_slider');
    redirect('admin/image_slider');
    }
  }

  function image_slider_edit($id){
    if($this->session->userdata('logged_in'))
      {
        $where = array('id' => $id);
        $session_data = $this->session->userdata('logged_in');
        $data['berita'] = $this->M_main_2->read_berita()->result();
        $data['edit_slider'] = $this->M_main->ubah_data($where, 'image_slider')->result();
        $data['username'] = $session_data['nama'];
        $this->load->view('admin\image_slider\edit.php', $data);
      } else {
        //If no session, redirect to login page
        redirect('Login', 'refresh');
       }
  }

  function image_slider_edit_aksi(){
    $config['upload_path']          = 'asset/image/upload/slider';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;
      $char = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF", ".jpeg", ".JPEG");
      $name =$_FILES["userfile"]['name'];
      $old_name =str_replace($char ,"" ,$name);
    $userfile = $old_name."_".time();
    $config['file_name'] = $userfile;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('userfile')){
      //Jika tidak edit foto maka hanya text yg di update
        $id = $this->input->post('id');
        $efek_text = $this->input->post('efek_text');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $link_berita = $this->input->post('link_berita');
        $data = array(
          'efek_text' => $efek_text,
          'judul' => $judul,
          'deskripsi' => $deskripsi,
          'link_berita' => $link_berita,
        );
        $where = array(
          'id' => $id,
        );
      $this->M_main->ubah_data_aksi($where, $data, 'image_slider');
      redirect('Admin/image_slider');
    } else  {
      //Jika Foto juga di edit maka semuanya di update
        $gbr = $this->upload->data();
        $id = $this->input->post('id');
        $efek_text = $this->input->post('efek_text');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $link_berita = $this->input->post('link_berita');
        $data = array(
          'efek_text' => $efek_text,
          'judul' => $judul,
          'deskripsi' => $deskripsi,
          'link_berita' => $link_berita,
          'image' => $gbr['file_name'],
          'tipe_gbr' => $gbr['file_type'],
        );
        $where = array(
          'id' => $id,
        );
      $this->M_main->ubah_data_aksi($where, $data, 'image_slider');
      redirect('Admin/image_slider');
    }
  }

  function image_slider_delete($id){
        $where = array('id' => $id);
        $this->M_main->hapus_data($where, 'image_slider');
        redirect('Admin/image_slider');
  }
//Akhir image slider
/////////////////////////////////////////////////////////////////////////////////
//Visi dan misi
  function visi_misi(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['visi'] = $this->M_main->read_visi()->result();
      $data['misi'] = $this->M_main->read_misi()->result();
      $data['username'] = $session_data['nama'];
      $this->load->view('admin/visi_misi/visi_misi', $data);
    } else  {
      //If no session, redirect to login page
      redirect('Login', 'refresh');
     }
  }
    //////////////////////////////
    //Misi
  function misi_edit($id){
    if($this->session->userdata('logged_in'))
      {
        $where = array('id' => $id);
        $session_data = $this->session->userdata('logged_in');
        $data['misi_edit'] = $this->M_main->misi_edit($where, '_misi')->result();
        $data['username'] = $session_data['nama'];
        $this->load->view('admin/visi_misi/misi_edit.php', $data);
      } else {
        //If no session, redirect to login page
        redirect('Login', 'refresh');
       }
  }

  function misi_edit_aksi(){
    $config['upload_path']          = 'asset/image/upload/misi';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;
      $char = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF", ".jpeg", ".JPEG");
      $name =$_FILES["userfile"]['name'];
      $old_name =str_replace($char ,"" ,$name);
    $userfile = $old_name."_".time();
    $config['file_name'] = $userfile;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('userfile')){
      //Jika tidak edit foto maka hanya text yg di update
        $id = $this->input->post('id');
        $misi = $this->input->post('misi');
        $data = array(
          'misi' => $misi,
        );
        $where = array(
          'id' => $id,
        );
      $this->M_main->misi_edit_aksi($where, $data, '_misi');
      redirect('Admin/visi_misi');
    } else  {
      //Jika Foto juga di edit maka semuanya di update
        $gbr = $this->upload->data();
        $id = $this->input->post('id');
        $misi = $this->input->post('misi');
        $data = array(
          'misi' => $misi,
          'foto' => $gbr['file_name'],
        );
        $where = array(
          'id' => $id,
        );
      $this->M_main->misi_edit_aksi($where, $data, '_misi');
      redirect('Admin/visi_misi');
    }
  }
//Akhir visi dan misi
//////////////////////////////////////////////////////////////////////////////////
//berita
function berita(){
  if($this->session->userdata('logged_in'))
  {
    $session_data = $this->session->userdata('logged_in');
    $data['berita'] = $this->M_main_2->read_berita()->result();
    $data['username'] = $session_data['nama'];
    $this->load->view('admin/berita/berita', $data);
  } else  {
    //If no session, redirect to login page
    redirect('Login', 'refresh');
   }
 }

 function berita_tambah(){
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['ckeditor'] = array('id'=>'content','path' =>'asset/ckeditor','config'=>array('toolbar'=>"Full",),'styles'=>array('style 1'=>array('name'=>'Blue Title','element'=>'h2','styles'=>array('color'=>'Blue','font-weight'=>'bold')),'style 2' => array ('name'=>'Red Title','element'=>'h2','styles'=>array('color'=>'Red','font-weight'=>'bold','text-decoration'=>'underline'))));
     $data['ckeditor1'] = array('id'=>'content2','path' =>'asset/ckeditor','config'=>array('toolbar'=>"Full",),'styles'=>array('style 1'=>array('name'=>'Blue Title','element'=>'h2','styles'=>array('color'=>'Blue','font-weight'=>'bold')),'style 2' => array ('name'=>'Red Title','element'=>'h2','styles'=>array('color'=>'Red','font-weight'=>'bold','text-decoration'=>'underline'))));
     $data['username'] = $session_data['nama'];
     $this->load->view('admin/berita/tambah', $data);
   } else  {
     //If no session, redirect to login page
     redirect('Login', 'refresh');
    }
 }

 function berita_tambah_aksi(){
   $config['upload_path']          = 'asset/image/upload/berita';
   $config['allowed_types']        = 'gif|jpg|png|jpeg';
   $config['max_size']             = 10000;
     $char = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF", ".jpeg", ".JPEG");
     $name =$_FILES["userfile"]['name'];
     $old_name =str_replace($char ,"" ,$name);
   $userfile = $old_name."_".time();
   $config['file_name'] = $userfile;
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ( !$this->upload->do_upload('userfile'))
   {
       redirect('Admin/berita_tambah');
   }
   else
   {
     $gbr = $this->upload->data();
     $judul = $this->input->post('judul');
     $berita_singkat = $this->input->post('berita_singkat');
     $berita_lengkap = $this->input->post('berita_lengkap');
     $last_update = $this->input->post('last_update');
     $admin = $this->input->post('admin');
       $data = array(
         'judul' => $judul,
         'foto' => $gbr['file_name'],
         'berita_singkat' => $berita_singkat,
         'berita_lengkap' => $berita_lengkap,
         'last_update' => $last_update,
         'admin' => $admin,
       );
   $this->M_main_2->tambah_aksi($data,'berita');
   redirect('admin/berita');
   }
 }

 function berita_edit($id){
   if($this->session->userdata('logged_in'))
     {
       $where = array('id' => $id);
       $session_data = $this->session->userdata('logged_in');
       $data['ckeditor'] = array('id'=>'content','path' =>'asset/ckeditor','config'=>array('toolbar'=>"Full",),'styles'=>array('style 1'=>array('name'=>'Blue Title','element'=>'h2','styles'=>array('color'=>'Blue','font-weight'=>'bold')),'style 2' => array ('name'=>'Red Title','element'=>'h2','styles'=>array('color'=>'Red','font-weight'=>'bold','text-decoration'=>'underline'))));
       $data['ckeditor1'] = array('id'=>'content2','path' =>'asset/ckeditor','config'=>array('toolbar'=>"Full",),'styles'=>array('style 1'=>array('name'=>'Blue Title','element'=>'h2','styles'=>array('color'=>'Blue','font-weight'=>'bold')),'style 2' => array ('name'=>'Red Title','element'=>'h2','styles'=>array('color'=>'Red','font-weight'=>'bold','text-decoration'=>'underline'))));
       $data['edit_berita'] = $this->M_main_2->ubah_data($where, 'berita')->result();
       $data['username'] = $session_data['nama'];
       $this->load->view('admin\berita\edit', $data);
     } else {
       //If no session, redirect to login page
       redirect('Login', 'refresh');
      }
 }

 function berita_edit_aksi(){
   $config['upload_path']          = 'asset/image/upload/berita';
   $config['allowed_types']        = 'gif|jpg|png|jpeg';
   $config['max_size']             = 10000;
     $char = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF", ".jpeg", ".JPEG");
     $name =$_FILES["userfile"]['name'];
     $old_name =str_replace($char ,"" ,$name);
   $userfile = $old_name."_".time();
   $config['file_name'] = $userfile;
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if (!$this->upload->do_upload('userfile')){
     //Jika tidak edit foto maka hanya text yg di update
     $id = $this->input->post('id');
     $judul = $this->input->post('judul');
     $berita_singkat = $this->input->post('berita_singkat');
     $berita_lengkap = $this->input->post('berita_lengkap');
     $last_update = $this->input->post('last_update');
     $admin = $this->input->post('admin');
       $data = array(
         'judul' => $judul,
         'berita_singkat' => $berita_singkat,
         'berita_lengkap' => $berita_lengkap,
         'last_update' => $last_update,
         'admin' => $admin,
       );
       $where = array(
         'id' => $id,
       );
     $this->M_main_2->ubah_data_aksi($where, $data, 'berita');
     redirect('Admin/berita');
   } else  {
     //Jika Foto juga di edit maka semuanya di update
     $gbr = $this->upload->data();
     $id = $this->input->post('id');
     $judul = $this->input->post('judul');
     $berita_singkat = $this->input->post('berita_singkat');
     $berita_lengkap = $this->input->post('berita_lengkap');
     $last_update = $this->input->post('last_update');
     $admin = $this->input->post('admin');
       $data = array(
         'judul' => $judul,
         'foto' => $gbr['file_name'],
         'berita_singkat' => $berita_singkat,
         'berita_lengkap' => $berita_lengkap,
         'last_update' => $last_update,
         'admin' => $admin,
       );
       $where = array(
         'id' => $id,
       );
     $this->M_main_2->ubah_data_aksi($where, $data, 'berita');
     redirect('Admin/berita');
   }
 }

 function berita_delete($id){
       $where = array('id' => $id);
       $this->M_main_2->hapus_data($where, 'berita');
       redirect('Admin/berita', 'refresh');
 }
//AKhir berita
/////////////////////////////////////////////////////////////////////////////////
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Admin', 'refresh');
  }
}

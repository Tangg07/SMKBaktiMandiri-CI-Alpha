<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SBM extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_main_3');
		$this->load->model('M_main_2');
		$this->load->model('M_main');
		$this->load->helper(array('string','text'));
	}


	function index(){
		$data['berita'] = $this->M_main_2->read_berita()->result();
		$data['slider'] = $this->M_main->tampil_slider()->result();
		$this->load->view('home', $data);
	 }

	function lokasi(){
		$this->load->view('lokasi');
	}

	function visi_misi(){
		//visi
		$data['visi'] = $this->M_main->read_visi()->result();
		$data['misi'] = $this->M_main->read_misi()->result();
		$this->load->view('visimisi', $data);
	}

 	function guru(){
		$jumlah_data = $this->M_main_3->jumlah_guru();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'sbm/guru/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 8;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['list_guru'] = $this->M_main_3->data_guru($config['per_page'],$from);
		$this->load->view('guru',$data);
	}

	function profile_guru($id_guru){
		$where = array('id_guru' => $id_guru);
		$data['guru'] = $this->M_main_3->guru_profile($where, 'guru')->result();
		$this->load->view('guru_view', $data);
	}

	function jurusan(){
		$data['list_jurusan'] = $this->M_main_2->jumlah_jurusan()->result();
		$data['row_jurusan'] = $this->M_main_2->row_jurusan();
		$this->load->view('jurusan', $data);
	}

	function jurusan_view($id){
		$where = array('id' => $id);
		$data['jurusan_view'] = $this->M_main_2->jurusan_profile($where, 'paket_keahlian')->result();
		$this->load->view('jurusan_view', $data);
	}

	function berita(){
		$jumlah_data = $this->M_main_2->jumlah_berita();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'SBM/berita/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 8;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['berita'] = $this->M_main_2->data_berita($config['per_page'],$from);
		$this->load->view('berita',$data);
	}

	function berita_view($id){
		$where = array('id' => $id);
		$data['berita_view'] = $this->M_main_2->jurusan_view($where, 'berita')->result();
		$this->load->view('berita_view', $data);
	}

	function galeri(){
		$data['galeri_list'] = $this->M_main_3->tampil_galeri_list()->result();
		$this->load->view('galeri_list', $data);
	}
}

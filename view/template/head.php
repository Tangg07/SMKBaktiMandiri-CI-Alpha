<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
<?php $this->load->view('template/head/link') ?>
	</head>
	<body class="grey lighten-4">
		<nav class="N/A transparent hide-on-large-only" style="box-shadow:none;">
			<div class="nav-wrapper">
				<ul class="side-nav grey lighten-5" id="mobile-demo" style="width:85%;">
					<li>
						<div class="userView light-blue darken-4">
							<img src="<?php echo base_url('asset/image/logo.png');?>" style="max-width:100%;">
						</div>
					</li>
					<li><a href="<?php echo base_url('SBM');?>"><i class="material-icons">navigation</i>HOME</a></li>
					<li><div class="divider"></div></li>
					<li><a href="<?php echo base_url('SBM/lokasi');?>">Lokasi</a></li>
					<li><a href="<?php echo base_url('SBM/visi_misi');?>">Visi & Misi</a></li>
					<li><a href="<?php echo base_url('SBM/guru');?>">Daftar Guru</a></li>
					<li><a href="<?php echo base_url('SBM/jurusan');?>">Paket Keahlian</a></li>
					<li><br><br></li>
				</ul>
			</div>
		</nav>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="container">
<!--lOGO-->
<div class="row">
	<div class="poly col l4 s12">
		<a href="#" data-activates="mobile-demo" class="button-collapse hide-on-large-only">
			<i class="small material-icons right white-text">menu</i>
		</a>
		<img src="<?php echo base_url('asset/image/poly.png')?>">
	</div>
	<div class="col l6 s12 header-flash">
		<img src="<?php echo base_url('asset/image/smkbaktibanner.png')?>" class="responsive-img">
	</div>
</div>
<!--/Logo-->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
	<div class="box grey lighten-4 row">
		<div class="col l2 hide-on-med-and-down">
			<ul class="right-align sidebar">
				<li><a href="<?php echo base_url('SBM');?>">Home</a></li>
				<li><a href="<?php echo base_url('SBM/lokasi');?>">Lokasi</a></li>
				<li><a href="<?php echo base_url('SBM/visi_misi');?>">Visi & Misi</a></li>
				<li><a href="<?php echo base_url('SBM/guru');?>">Daftar Guru</a></li>
				<li><a href="<?php echo base_url('SBM/jurusan');?>">Paket Keahlian</a></li>
				<li>&nbsp;</li>
				<li><a href="<?php echo base_url('SBM/berita');?>"> Berita </a></li>
				<li><a href="<?php echo base_url('SBM/galeri');?>"> Galeri </a></li>
				<li><a href="<?php echo base_url('SBM/agenda');?>"> Agenda </a></li>
				<li><a href="#Lokasi">Informasi</a></li>
				<li><a href="#ListGuru">Lowongan Kerja</a></li>
			</ul>
		</div>

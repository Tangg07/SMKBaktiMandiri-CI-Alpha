<?php
$this->load->view('admin/template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Home
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active">Home</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php echo form_open_multipart('admin/berita_tambah_aksi');?>
      <input type="hidden" name="admin" value="<?= $username;?>">
      <?php
        $hari = array("","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
        $bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $ubahFormat = $hari[date("w")].", ".date("j")." ".$bulan[date("n")]." ".date("Y"); ?>
      <input type="hidden" name="last_update" value="<?= date('H:i')." - ".$ubahFormat; ?>">
          <div class="form-group col-md-7">
            <label for="judul"> <h3>Judul</h3> </label>
            <input type="text" id="judul"  class="form-control" name="judul" placeholder="Judul">
          </div>
          <div class="form-group col-md-10">
            <label for="high"> <h3>Highlight</h3> </label>
            <textarea class="form-control" name="berita_singkat" id="content" placeholder="Highlight" rows="3"></textarea>
            <?php echo display_ckeditor($ckeditor); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="des"> <h3>Berita</h3> </label>
            <textarea class="form-control" name="berita_lengkap" id="content2" placeholder="Berita" rows="6"></textarea>
            <?php echo display_ckeditor($ckeditor1); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="file">File input</label>
            <input type="file" id="file" name="userfile" size="20" />
          </div>
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah </button>
          </div>
        <?php echo form_close(); ?>
    </div>
  </div>
</section>
<!-- /.content -->


<?php
$this->load->view('admin/template/js');
?>

<!--tambahkan custom js disini-->

<?php
  $this->load->view('admin/template/foot');
?>

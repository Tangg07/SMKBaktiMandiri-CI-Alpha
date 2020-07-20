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
      Misi Edit
      <small>Control panel</small><br><br>
      <br>
  </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active">Home</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <?php foreach ($misi_edit as $k){ ?>
        <?php echo form_open_multipart('Admin/misi_edit_aksi');?>
        <input type="hidden" name="id" value="<?php echo $k->id ?>">
        <div class="form-group">
          <label for="des">Deskripsi</label>
          <textarea class="form-control" id="des" name="misi" placeholder="Deskripsi" rows="3"><?= $k->misi;?></textarea>
        </div>
        <input type="file" name="userfile" size="20"/>
        <br /><br />
        <input type="submit" value="upload" />
        <?php echo form_close(); ?>
      <?php } ?>
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

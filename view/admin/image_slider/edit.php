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
    <div class="col-md-6">
      <?php echo form_open_multipart('Admin/image_slider_edit_aksi');?>
      <?php foreach ($edit_slider as $k){ ?>
        <input type="hidden" name="id" value="<?php echo $k->id ?>">
      <div class="form-group">
        <label for="efek"> Efek Text </label>
          <select class="form-control" name="efek_text">
            <option value="center">center</option>
            <option value="right">right</option>
            <option value="left">left</option>
          </select>
        </div>
          <div class="form-group">
            <label for="judul"> Judul </label>
            <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul" value="<?= $k->judul;?>">
          </div>
          <div class="form-group">
            <label for="Berita"> Link Berita </label>
              <select class="form-control" name="link_berita">
                <?php foreach ($berita as $b): ?>
                  <option value="<?= $b->id;?>"><?= $b->judul;?></option>
                <?php endforeach; ?>
              </select>
            </div>
          <div class="form-group">
            <label for="des">Deskripsi</label>
            <textarea class="form-control" id="des" name="deskripsi" placeholder="Deskripsi" rows="3"><?= $k->deskripsi;?></textarea>
          </div>
          <div class="form-group">
            <label for="file">File input</label>
            <input type="file" id="file" name="userfile" size="20" />
          </div>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-circle-o"></i> Edit </button>
          <?php } ?>
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

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
        Image Slider
        <small>Control panel</small><br><br>
          <a class="btn btn-success btn-lg" href="<?php echo site_url('admin/image_slider_tambah') ?>" role="button">
            <i class="fa fa-plus"></i> Tambah</a>
        <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active">Image Slider</li>
    </ol>
</section>

<!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12 table-responsive">
          <table class="table table-striped">
            <thead  style="height:50px;">
                <tr>
                  <th> No </th>
                  <th> Image </th>
                  <th> Text Efek </th>
                  <th> Judul </th>
                  <th> Link Berita </th>
                  <th> deskripsi</th>
                  <th> Action </th>
                </tr>
            </thead>
            <?php
            $no = 1;
             foreach ($slider as $k): ?>
            <tr>
              <td width="30px"> <?= $no++; ?> </td>
              <td width="300px"><img class="img-responsive" style="height:100%;width:100%;" src="<?= base_url()?>/asset/image/upload/slider/<?= $k->image;?>"> </td>
              <td width="50px"> <?= $k->efek_text; ?> </td>
              <td width="100px"> <?= $k->judul; ?> </td>
              <td width="150px"> <?= $k->link_berita; ?> </td>
              <td width="300px"> <?= word_limiter($k->deskripsi, 35); ?> </td>
              <td width="100px">
                <a class="btn btn-primary" href="<?php echo site_url('admin/image_slider_edit/').$k->id; ?>" role="button">Edit</a>
                  <br><br>
                <a class="btn btn-danger" href="<?php echo site_url('admin/image_slider_delete/').$k->id; ?>" role="button">Hapus</a>
               </td>
            </tr>
          <?php endforeach; ?>
          </table>
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

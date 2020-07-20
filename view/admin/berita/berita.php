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
      Berita Sekolah
      <small>Control panel</small><br><br>
        <a class="btn btn-success btn-lg" href="<?php echo site_url('admin/berita_tambah'); ?>" role="button">
          <i class="fa fa-plus"></i> Tambah Berita</a>
      <br>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
      <li class="active">Berita</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12 table-responsive" style="border:1px solid black;">
      <table class="table table-striped">
        <thead  style="height:50px;">
            <tr>
              <th> No </th>
              <th> foto </th>
              <th> judul </th>
              <th> Highlight </th>
              <th> Berita </th>
              <th> Action </th>
            </tr>
        </thead>
        <?php
        $no = 1;
         foreach ($berita as $k): ?>
        <tr>
          <td width="30px"> <?= $no++; ?> </td>
          <td width="100px"><img class="img-responsive" style="height:100%;width:100%;" src="<?= base_url()?>/asset/image/upload/berita/<?= $k->foto;?>"> </td>
          <td width="50px"> <?= $k->judul; ?> </td>
          <td width="200px"> <?php echo word_limiter($k->berita_singkat,35); ?> </td>
          <td width="350px"> <?php echo word_limiter($k->berita_lengkap,45); ?> </td>
          <td width="100px">
            <a class="btn btn-primary" href="<?php echo site_url('admin/berita_edit/').$k->id; ?>" role="button">Edit</a>
              <br><br>
            <a class="btn btn-danger" href="<?php echo site_url('admin/berita_delete/').$k->id; ?>" role="button">Hapus</a>
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

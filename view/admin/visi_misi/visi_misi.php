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
      Visi & Misi
      <small>Control panel</small><br><br>
      <br>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
      <li class="active">Visi_Misi</li>
  </ol>
</section>

<!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="row">
          <div class="col-md-1">
            &nbsp;
          </div>
          <div class="col-md-3">
            <h1> Visi </h1>
          </div>
        </div>
        <div class="col-md-12 table-responsive">
          <table class="table table-striped">
            <thead  style="height:50px;">
                <tr>
                  <th> No </th>
                  <th> Icons </th>
                  <th> Nama </th>
                  <th> Visi </th>
                  <th> Action </th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($visi as $k): ?>
            <tr>
              <td width="30px"> <?= $no++; ?> </td>
              <td width="100px"><i class="material-icons large"><?php echo $k->icon; ?></td>
              <td width="50px"> <?= $k->nama; ?> </td>
              <td width="50px"> <?= $k->arti; ?> </td>
              <td width="100px">
                <a class="btn btn-primary" href="<?php echo site_url('admin/visi_edit/').$k->id; ?>" role="button">Edit</a>
               </td>
            </tr>
          <?php endforeach; ?>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="row">
          <div class="col-md-1">
            &nbsp;
          </div>
          <div class="col-md-3">
            <h1> Misi </h1>
          </div>
        </div>
        <div class="col-md-12 table-responsive" style="border:1px solid black;">
          <table class="table table-striped">
            <thead  style="height:50px;">
                <tr>
                  <th> No </th>
                  <th> Image </th>
                  <th> Misi </th>
                  <th> Action </th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($misi as $u): ?>
            <tr>
              <td width="30px"> <?= $no++; ?> </td>
              <td width="200px"><img class="img-responsive" style="height:50%;width:50%;" src="<?php echo base_url('asset/image/upload/misi/').$u->foto;?>"> </td>
              <td width="50px"> <?= $u->misi; ?> </td>
              <td width="100px">
                <a class="btn btn-primary" href="<?php echo site_url('admin/misi_edit/').$u->id; ?>" role="button">Edit</a>
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

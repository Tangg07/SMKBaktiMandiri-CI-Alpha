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
  ini konten
</section>
<!-- /.content -->


<?php
$this->load->view('admin/template/js');
?>

<!--tambahkan custom js disini-->

<?php
  $this->load->view('admin/template/foot');
?>

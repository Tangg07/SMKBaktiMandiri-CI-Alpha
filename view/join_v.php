<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($join as $u){ ?>
      <a href="<?php echo base_url('join/profile_join/').$u->id; ?>">
      <?php echo $u->nama_guru; ?>
      <?php echo $u->jabatan; ?>
      </a><br>
    <?php } ?>
  </body>
</html>

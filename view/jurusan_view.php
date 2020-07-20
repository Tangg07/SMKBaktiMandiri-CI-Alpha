<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
	</center>
	<?php foreach($jurusan_view as $u){ ?>
<?php echo $u->id ?><br>
<?php echo $u->nama_jurusan; ?><br>
<?php echo $u->tentang_jurusan ?>
	<?php } ?>
</body>
</html>

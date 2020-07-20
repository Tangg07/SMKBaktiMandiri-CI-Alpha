<!DOCTYPE html>
  <html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>
  <body>
    <?php echo form_open_multipart('Ckeditor/tambah_aksi_ck');?>
      <textarea name="deskripsi" id="content"><p>Example data</p></textarea>
      <?php echo display_ckeditor($ckeditor); ?>
<input type="submit" name="submit" value="">
  </body>
  </html>

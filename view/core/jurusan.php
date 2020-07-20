<div class="row">
<?php
foreach($list_jurusan as $u){
?>
  <div class="col s12 m12 l4">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <?php
        if ($u->foto == FALSE )
        { ?>
          <!--Jika Foto tidak ada-->
            <img class="responsive-img" src="<?= base_url('asset/image/1.png');?>"><?php
        } elseif($u->foto == TRUE ) { ?>
          <!--Jika Foto ada di db-->
            <img class="responsive-img" src="<?= base_url()?>/asset/image/<?= $u->foto;?>"><?php
        }
         ?>
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4"><?= $u->nama_jurusan; ?><i class="material-icons right">more_vert</i></span>
        <p><a href="<?= base_url('sbm/jurusan_view/').$u->id; ?>">Lihat Selengkapnya..</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><?= $u->nama_jurusan; ?><i class="material-icons right">close</i></span>
        <p><?= $u->tentang_jurusan; ?></p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

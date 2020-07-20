<?php foreach ($berita_view as $k): ?>

  <div class="row">
    <div class="col l10 s12">
      <h2> <?= $k->judul; ?></h2>
    </div>
    <div class="col l11 s12">
      <img src="<?= base_url('asset/image/upload/berita/').$k->foto;?>" class="img-responsive" style="height:auto;width:100%;">
    </div>
  </div>
    <div class="col l10 s12">
      <span style="font-size:10pt;" class="grey-text text-darken-1 right">
        <?= $k->last_update; ?>
        <i class="grey-text text-darken-3"> Posted By : <?= $k->admin; ?> </i>
      </span>
    </div>
  <div class="row">
    <div class="col l11 s12">
      <i class="grey-text text-darken-2" style="font-size:12pt;"> <?= $k->berita_singkat; ?></i>
    </div>
  </div>
  <div class="col l9 s12">
    <div class="justify">
      <?= $k->berita_lengkap; ?>
    </div>
  </div>
  <div class="col l3 s12">
    <div class="col l12 s12">
      <h6><b>Share To :</b></h6>
    </div>
    <div class="col l12 s12">
      <div class="social">
        <a title="Share on Facebook" target="_blank" rel="external" href="http://www.facebook.com/share.php?u=<?= base_url('SBM/berita_view/').$k->id;?>"><i id="facebook" class="icon-facebook fa fa-facebook-square"></i></a>
        <a title="Share on Twitter" target="_blank" rel="external" href="http://twitter.com/share?text=<?=$k->judul;?>&url=<?= base_url('SBM/berita_view/').$k->id;?>"><i id="twitter" class="icon-twitter fa fa-twitter-square"></i></a>
        <a title="Share on LinkedIn" target="_blank" rel="external" href="http://www.linkedin.com/shareArticle?mini=true&url=<?= base_url('SBM/berita_view/').$k->id;?>&title=<?= $k->judul;?>"><i id="linkedin" class="icon-linkedin fa fa-linkedin-square"></i></a>
        <a title="Share on Google+" target="_blank" rel="external" href="https://plusone.google.com/_/+1/confirm?url=<?= base_url('SBM/berita_view/').$k->id;?>"><i id="plus" class="icon-google-plus fa fa-google-plus-square"></i></a>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<div class="row">
  <div class="col l12 s12 m12">
    <?php foreach ($berita as $k){ ?>
    <div class="col l12 card-panel grey lighten-5">
      <a href="<?= base_url('SBM/berita_view/').$k->id;?>">
        <div class="col l12">
          <div class="col l8">
            <h4><?= $k->judul; ?></h4>
          </div>
          <div class="col l4">
            <h6 class="grey-text text-lighten-1 center"> <?= $k->last_update; ?></h6>
          </div>
        </div>
        <div class="col l2">
          <ul>
            <li class="center">
              <img class="responsive-img" src="<?= base_url('asset/image/upload/berita/').$k->foto;?>" style="margin-bottom:15px;max-width:80%;max-height:80%;">
            </li>
          </ul>
        </div>
        <div class="col l9" style="margin-bottom:15px;">
          <?php echo word_limiter($k->berita_singkat,45); ?>
        </div>
      </a>
    </div>
  <?php } ?>
  </div>
</div>

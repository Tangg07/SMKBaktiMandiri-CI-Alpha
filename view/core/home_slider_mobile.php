<div class="slider">
    <ul class="slides">
      <?php foreach ($slider as $s): ?>
        <li class="slidex">
        <img class="responsive-img" src="<?= base_url()?>/asset/image/upload/slider/<?= $s->image;?>">
        <?php if ($s->link_berita > 0){ ?>
          <a href="<?= base_url('SBM/berita_view/').$s->link_berita ;?>">
        <?php } ?>
            <div class="caption <?= $s->efek_text.'-align'; ?>" style="background-color:rgba(255,255,255,0.4);">
                <h3 class="grey-text text-darken-3 center-align"><?= $s->judul; ?></h3>
              <h5 class="light grey-text text-darken-1 center-align"><?= word_limiter($s->deskripsi, 25); ?></h5>
            </div>
          </a>
      </li>
    <?php endforeach; ?>
  </ul>
  </div>

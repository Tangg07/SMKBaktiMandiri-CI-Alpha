<div class="row">
  <?php foreach ($misi as $u){ ?>
  <div class="col l10 offset-l2">
      <div class="row card-panel">
        <h3 class="center">Misi</h3>
        <div class="col l3">
          <img src="<?php echo base_url('asset/image/upload/misi/').$u->foto;?>" class="responsive-img">
        </div>
        <div class="col l9">
          <br>
          <h5><b>"</b><i class="flow-text">
            <?php echo $u->misi; ?>
          </i><strong>"</strong></h5>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

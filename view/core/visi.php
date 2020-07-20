<div class="row">
  <div class="col l12">
    <div class="row">
      <div class="col l12">
        <h3>Visi</h3>
        <h5><i class="flow-text"> Menjadikan SMK yang, </i></h5>
        <br>
          <div class="row">
            <?php
              foreach($visi as $u){
            ?>
      	      <div class="col l3 s12">
      					<ul>
      						<li class="center"><i class="material-icons medium"><?php echo $u->icon; ?></i></li>
                  <li class="center"><h4><?php echo $u->nama; ?></h4></li>
      						<li class="center">
                    <?php echo $u->arti; ?>
                  </li>
      					</ul>
      	      </div>
              <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <?php
    if (isset($list_guru)) {
      $no = $this->uri->segment('3') + 1;
      foreach($list_guru as $u){ ?>
      <div class="col s12 m4 l3">
        <ul class="guru">
          <li>
            <ul class="center card-panel hoverable">
            <a href="<?php echo base_url('sbm/profile_guru/').$u->id_guru; ?>">
              <li>
                <?php
                if ($u->foto == FALSE )
                {
                  if($u->kelamin == 'Pria'){ ?>
                    <img class="circle responsive-img" src="<?= base_url('asset/image/1.png');?>"><?php
                  } elseif ($u->kelamin == 'Wanita'){ ?>
                    <img class="circle responsive-img" src="<?= base_url('asset/image/1.jpg');?>"><?php
                  }
                } elseif($u->foto == TRUE ) { ?>
                  <img class="circle responsive-img" src="<?= base_url()?>/asset/image/<?= $u->foto;?>"><?php
                }
                 ?>
              </li>
              <li><div class="divider"></div></li>
              <li><?php echo word_limiter($u->nama,1); ?></li>
            </a>
            </ul>
          </li>
        </ul>
      </div>
    <?php  }
        }
     ?>
</div>
 <br><br><br>
 <?php
 /*
 if (isset($asal)) {
   foreach($asal as $u){

     echo $u->id_pelajaran_guru."/";
     echo $u->id_guru."/";
     echo $u->nama."/";
     echo $u->kelamin."/";
     echo $u->nama_pelajaran."/";
     echo $u->id_pelajaran."<br>";
   }
     }
    */
  ?>

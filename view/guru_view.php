<?php
  if (!$guru == 0) {
      foreach($guru as $u){ ?>

<title>Profile Guru<?php echo $u->nama ?></title>

<?php $this->load->view('template/head/link'); ?>
<nav class="N/A transparent" style="box-shadow:none;position:absolute;">
 <div class="nav-wrapper">
   <ul>
     <li><a type="button" value="Go Back" onclick="history.back(-1)" /><i class="material-icons">arrow_back</i></a></li>
   </ul>
 </div>
</nav>
 <div class="pagecontent">
         <ul class="guru">
           <li>
             <ul class="center">
               <li>
                 <?php
                 if ($u->foto == FALSE ) {
                   if($u->kelamin == 'Pria'){ ?>
                     <img class="circle responsive-img" src="<?= base_url('asset/image/1.png');?>"><?php
                   } elseif ($u->kelamin == 'Wanita'){ ?>
                     <img class="circle responsive-img" src="<?= base_url('asset/image/1.jpg');?>"><?php
                   }
                 } elseif($u->foto == TRUE ) { ?>
                   <img class="circle responsive-img" src="<?= base_url()?>/asset/image/<?= $u->foto;?>"><?php
                 }
               }
                 ?>
               </li>
               <li><?php echo $u->nama ?></li>
             </ul>
           </li>
         </ul>
   <?php
     } else {
       echo "Guru Tidak Ada";
     }
   ?>
  </div>
 </div>
 <div style="clear:both;"><?php $this->load->view('template/footer'); ?></div>
 </body>
 <?php $this->load->view('template/head/js'); ?>
</html>

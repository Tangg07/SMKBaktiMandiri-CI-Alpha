 <title>SMK BAKTI MANDIRI</title>

 <?php $this->load->view('template/head'); ?>
 		<div class="col l10 s12 hide-on-med-and-down">
 			<div class="pagecontent">
        <?php $this->load->view('core/guru'); ?>
 			</div>
 		</div>
 			<div class="col l10 s12 hide-on-large-only pagecontent-mob">
 				<div class="pagecontent">
          <?php $this->load->view('core/guru'); ?>
        </div>
 			</div>
 		<div class="subpagecontent">
      <div class="center">
        <?php
          echo "<div class='pagination'>".$this->pagination->create_links()."</div>"
         ?>
      </div>
 		</div>
 	</div>

 <?php $this->load->view('template/footer'); ?>
 <?php $this->load->view('modal'); ?>
 	</body>
 	<?php $this->load->view('template/head/js'); ?>
 </html>

<title>S.B.M | Paket Keahlian</title>
<?php $this->load->view('template/head'); ?>
		<div class="col l10 s12 hide-on-med-and-down">
			<div class="pagecontent">
        <?php $this->load->view('core/jurusan'); ?>
			</div>
		</div>
			<div class="col l10 s12 hide-on-large-only  pagecontent-mob">
				<div class="pagecontent">
          <?php $this->load->view('core/jurusan'); ?>
				</div>
			</div>
		<div class="subpagecontent">
			<div class="row">
			  <?php foreach($list_jurusan as $u){ ?>
			  <div class="col l10 offset-l2">
			      <div class="row card-panel">
			        <h3><?php echo $u->nama_jurusan; ?>

								<?php echo $row_jurusan; ?>
</h3>
			        <div class="col l3">
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
			        <div class="col l9">
			          <br>
			          <h5><b>"</b><i class="flow-text">
			            <?php echo $u->tentang_jurusan; ?>
			          </i><strong>"</strong></h5>
			        </div>
			      </div>
			    </div>
			  <?php } ?>
			</div>

		</div>
	</div>

<?php $this->load->view('template/footer.php'); ?>
<?php $this->load->view('modal.php'); ?>
	</body>
	<?php $this->load->view('template/head/js.php'); ?>
</html>

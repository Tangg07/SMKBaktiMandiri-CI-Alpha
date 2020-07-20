<title>S.B.M | Berita Sekolah</title>
<?php $this->load->view('template/head'); ?>
		<div class="col l10 s12 hide-on-med-and-down">
			<div class="pagecontent">
				<?php $this->load->view('core/berita'); ?>
			</div>
		</div>
			<div class="col l10 s12 hide-on-large-only  pagecontent-mob">
				<div class="pagecontent">
					<?php $this->load->view('core/berita'); ?>
				</div>
			</div>
		<div class="subpagecontent">
			<div class="center">
				<?php
					echo '<div class="pagination">'.$this->pagination->create_links().'</div>'
				 ?>
			</div>
		</div>
	</div>

<?php $this->load->view('template/footer.php'); ?>
<?php $this->load->view('modal.php'); ?>
	</body>
	<?php $this->load->view('template/head/js.php'); ?>
</html>

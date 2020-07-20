<title>S.B.M | Lokasi</title>
<?php $this->load->view('template/head'); ?>
		<div class="col l10 s12 hide-on-med-and-down">
			<div class="pagecontent">
				<?php $this->load->view('core/lokasi'); ?>
			</div>
		</div>
			<div class="col l10 s12 hide-on-large-only  pagecontent-mob">
				<div class="pagecontent">
					<?php $this->load->view('core/lokasi'); ?>
				</div>
			</div>
		<div class="subpagecontent">
		</div>
	</div>

<?php $this->load->view('template/footer.php'); ?>
<?php $this->load->view('modal.php'); ?>
	</body>
	<?php $this->load->view('template/head/js.php'); ?>
</html>

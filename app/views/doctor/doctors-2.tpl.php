<?php echo $header; ?>
<!-- Start Doctor List Section -->
<div class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="row text-center">
			<?php
			if (!empty($doctors)) { foreach ($doctors as $value) {
				$value['about'] = json_decode($value['about'], true);
				$value['social'] = json_decode($value['social'], true);
				?>
				<div class="col-sm-6 col-md-4">
					<?php include DIR.'app/views/doctor/doctor-card-2.tpl.php'; ?>
				</div>
			<?php } } ?>
		</div>
	</div>
</div><!-- End Doctor List Section -->

<?php echo $departments; echo $footer; ?>
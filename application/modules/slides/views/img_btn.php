
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white picture"></i><span class="break"></span>Image Options</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<p><?php echo $btn_info; ?></p>
		<?php 
		if ($got_pic==FALSE) { ?>
		<a href="<?php echo base_url(); ?>slides/upload_image/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary" >Upload Image</button></a>
		<?php } else { ?>
		<img src="<?php echo $pic_path; ?>" alt="slider picture">
		<?php } ?>
		<a href="<?php echo base_url(); ?>slides/deleteconf/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger" <?php echo $btn_style; ?>>Delete Slide</button></a>
		
		</div>
	</div><!--/span-->

</div><!--/row-->

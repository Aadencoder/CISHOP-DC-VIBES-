<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}
?>



<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Blog Entry Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<?php 
		$form_location = base_url()."blog/create/".$update_id;
		?>
			<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
			  <fieldset>
			  	<div class="control-group">
			  	  <label class="control-label" for="Blog Entry Title">Date Published </label>
			  	  <div class="controls">
					<input type="text" name="date_published" class="input-xlarge datepicker" id="date01" value="<?php echo $date_published; ?>">			  	  
				  </div>
			  	</div>
				<div class="control-group">
				  <label class="control-label" for="Blog Entry Title">Blog Entry Title </label>
				  <div class="controls">
					<input type="text" class="span6" name="page_title" value="<?php echo $page_title; ?>">
				  </div>
				</div>
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Blog Entry Keywords</label>
				  <div class="controls">
					<textarea rows="3" class="span6" name="page_keywords"><?php echo $page_keywords; ?></textarea>
				  </div>
				</div>
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Blog Entry Description</label>
				  <div class="controls">
					<textarea rows="3" class="span6" name="page_description"><?php echo $page_description; ?></textarea>
				  </div>
				</div>
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Blog Entry Content</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3" name="page_content"><?php echo $page_content; ?></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="Author">Author </label>
				  <div class="controls">
					<input type="text" class="span6" name="author" value="<?php echo $author; ?>">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save changes</button>
				  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>

	</div><!--/span-->
	<?php
	if (is_numeric($update_id)) {
	?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Additional Options</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">

			<?php  if ( $picture =="") { ?>
			<a href="<?php echo base_url();?>blog/upload_image/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Upload Blog Image</button></a>
			<?php } else { ?>
			<a href="<?php echo base_url();?>blog/delete_image/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger">Delete Blog Image</button></a>
			<?php } 

			if ($update_id >2){
				?>
				<a href="<?php echo base_url();?>blog/deleteconf/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger">Delete Blog Entry</button></a>
				<?php } ?>
				<a href="<?php echo base_url().$page_url;?>"><button type="button" class="btn btn-success">View Blog Entry</button></a>
			</div>
		</div><!--/span-->

	</div><!--/row-->
	<?php } ?>
	<?php 
	if ($picture!==""){
		?>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Blog Image</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<img src="<?php echo base_url(); ?>blog_pics/<?php echo $picture; ?>">
			</div>
		</div><!--/span-->

	</div><!--/row-->
	<?php } ?>


</div><!--/row-->



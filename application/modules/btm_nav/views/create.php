<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}
if (is_numeric($update_id)) {
?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Options</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<a href="<?php echo base_url();?>btm_nav/manage"><button type="button" class="btn btn-success">Back</button></a>
		<a href="<?php echo base_url();?>homepage_offers/update/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Update Associated Offers</button></a>
		
		<a href="<?php echo base_url();?>btm_nav/deleteconf/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger">Delete Navigation Links</button></a>
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } 
?>

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white edit"></i><span class="break"></span>homepage offer Details</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	<?php 
	$form_location = base_url()."btm_nav/create/".$update_id;
	?>
		<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
		  <fieldset>
			<div class="control-group">
			  <label class="control-label" for="Block Title">Navigation Links Block Title </label>
			  <div class="controls">
				<input type="text" class="span6" name="block_title" value="<?php echo $block_title; ?>">
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

</div><!--/row-->



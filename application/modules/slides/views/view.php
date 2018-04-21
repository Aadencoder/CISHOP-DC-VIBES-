<h1><?php echo $headline; ?></h1>
<?php 
$form_location = base_url().'slides/submit/'.$update_id;
?>
	<a href="<?php echo base_url(); ?>slides/update_group/<?php echo $parent_id; ?>"><button type="submit" class="btn btn-primary">Back </button></a>
<?php

echo Modules::run('slides/_draw_img_btn', $update_id);

?>
<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white edit"></i><span class="break"></span><?php echo $entity_name; ?> Details</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
		  <fieldset>
			<div class="control-group">
			  <label class="control-label" for="Item Title"> Target URL </label>
			  <div class="controls">
				<input type="text" class="span2" name="target_url" value="<?php echo $target_url; ?>">
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="Item Title">alt Text</label>
			  <div class="controls">
				<input type="text" class="span2" name="alt_text" value="<?php echo $alt_text; ?>">
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

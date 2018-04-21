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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Item Options</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">

		<?php  
		if ( $got_gallery_pic == TRUE ) {
			echo '<div class="alert alert-info">';
			echo "Note : you have gallery picture for this item";
			echo '</div>';
			$gallery_btn_theme = 'success';
			$delete_btn_text = 'Delete Main Image';
		} else {	
			$gallery_btn_theme = 'primary';
			$delete_btn_text = 'Delete Item Image';
		}

		if ( $big_pic =="") { ?>
		<a href="<?php echo base_url();?>store_items/upload_image/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Upload Item Image</button></a>
		<?php } else { ?>
		<a href="<?php echo base_url();?>store_items/delete_image/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger"><?php echo $delete_btn_text; ?></button></a>
		<?php } ?>
		<a href="<?php echo base_url();?>item_galleries/update_group/<?php echo $update_id; ?>"><button type="button" class="btn btn-<?php echo $gallery_btn_theme; ?>">Manage Item Gallery</button></a>
		<a href="<?php echo base_url();?>store_item_colors/update/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Update Item Color</button></a>
		<a href="<?php echo base_url();?>store_item_sizes/update/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Update Item Size</button></a>
		<a href="<?php echo base_url();?>store_cat_assign/update/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Update Item Categories</button></a>
		<a href="<?php echo base_url();?>store_items/deleteconf/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger">Delete Item</button></a>
		<a href="<?php echo base_url();?>store_items/view/<?php echo $update_id; ?>"><button type="button" class="btn btn-default">View Item In Shop</button></a>
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } ?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Item Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php 
					$form_location = base_url()."store_items/create/".$update_id;
					?>
						<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="Item Title">Item Title </label>
							  <div class="controls">
								<input type="text" class="span6" name="item_title" value="<?php echo $item_title; ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="Item Title">Item Price </label>
							  <div class="controls">
								<input type="text" class="span2" name="item_price" value="<?php echo $item_price; ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="Item Title">Was Price (optional)</label>
							  <div class="controls">
								<input type="text" class="span2" name="was_price" value="<?php echo $was_price; ?>">
							  </div>
							</div>
							 <div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <?php 
								  $additional_dd_code = 'id="selectError3"';
								  $options = array(
								  	'' => 'Please Select...',
								  	'1' => 'Active',
								  	'0' => 'Inactive'
								  	
								  	);
								  echo form_dropdown('status',$options, $status, $additional_dd_code);
								  ?>
								</div>
							  </div>
							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  -->        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Item Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="item_description"><?php echo $item_description; ?></textarea>
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


			<?php 
			if ($big_pic!==""){
				?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Item Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<img src="<?php echo base_url(); ?>big_pics/<?php echo $big_pic;	 ?>">
					</div>
				</div><!--/span-->

			</div><!--/row-->
			<?php } ?>

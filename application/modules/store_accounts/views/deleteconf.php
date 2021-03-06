<h2><?php echo $headline; ?></h2>

<?php 
if(isset($flash)){
	echo $flash; 
}
?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Confirm Delete</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<p>Are you sure you want to delete the account?</p>

		<?php
		$attributes = array('class' => 'form-horizontal');
		echo form_open_multipart('store_accounts/delete/'.$update_id, $attributes);
		?>
			  <fieldset>
				<div class="control-group">
				  <button type="submit" name="submit" class="btn btn-danger" value="Yes - Delete">Yes - Delete Account</button>
				   <button type="submit" class="btn btn-default" value="Cancel" name="submit">Cancel</button>				  
				</div> 
			  </fieldset>
			</form> 
		</div>
	</div><!--/span-->

</div><!--/row-->

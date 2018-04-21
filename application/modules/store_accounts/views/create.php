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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Account Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		
		<a href="<?php echo base_url();?>store_accounts/update_pword/<?php echo $update_id; ?>"><button type="button" class="btn btn-primary">Update Password</button></a>
		<a href="<?php echo base_url();?>store_accounts/deleteconf/<?php echo $update_id; ?>"><button type="button" class="btn btn-danger">Delete Account</button></a>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } ?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Account Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?php 
					$form_location = base_url()."store_accounts/create/".$update_id;
					?>
						<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
						  <fieldset>
						 <div class="control-group"> <label class="control-label" for="typehead">Username </label> <div class="controls"> <input type="text" class="span6" name="username" value="<?php echo "$username"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Firstname </label> <div class="controls"> <input type="text" class="span6" name="firstname" value="<?php echo "$firstname"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Lastname </label> <div class="controls"> <input type="text" class="span6" name="lastname" value="<?php echo "$lastname"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Company </label> <div class="controls"> <input type="text" class="span6" name="company" value="<?php echo "$company"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Address1 </label> <div class="controls"> <input type="text" class="span6" name="address1" value="<?php echo "$address1"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Address2 </label> <div class="controls"> <input type="text" class="span6" name="address2" value="<?php echo "$address2"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Town </label> <div class="controls"> <input type="text" class="span6" name="town" value="<?php echo "$town"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Country </label> <div class="controls"> <input type="text" class="span6" name="country" value="<?php echo "$country"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Postcode </label> <div class="controls"> <input type="text" class="span6" name="postcode" value="<?php echo "$postcode"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Telnum </label> <div class="controls"> <input type="text" class="span6" name="telnum" value="<?php echo "$telnum"; ?>"> </div> </div>
						 <div class="control-group"> <label class="control-label" for="typehead">Email </label> <div class="controls"> <input type="text" class="span6" name="email" value="<?php echo "$email"; ?>"> </div> </div>
							  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save changes</button>
							  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>

				</div><!--/span-->

			</div><!--/row-->
			
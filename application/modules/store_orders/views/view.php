<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
} 
?>
<p class="text-right">
	<a href="<?php echo base_url(); ?>invoices/test" class="btn btn-success">View Invoice</a>
</p>
<?php echo Modules::run('paypal/_display_summary_info', $paypal_id);
if (is_numeric($update_id)) { ?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Order Status: <?php echo $status_title; ?></h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<p>Choose an option</p>
		<?php 
			$form_location = base_url()."store_orders/submit_order_status/".$update_id;
		?>
		<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
		  <fieldset>
			 <div class="control-group">
				<label class="control-label" for="selectError3">Order Status</label>
				<div class="controls">
				  <?php 
				  $additional_dd_code = 'id="selectError3"';
				  echo form_dropdown('order_status',$options, $order_status, $additional_dd_code);
				  ?>
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
<?php } ?>
<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white edit"></i><span class="break"></span>Customer Detail</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	<p style="text-align: right;">
		<a href="<?php echo base_url(); ?>store_accounts/create/<?php echo $shopper_id; ?>"><button type="submit" class="btn btn-primary text-right">Edit Account Detail</button></a>
	</p>

	<table class="table table-striped table-bordered">
		<tr>
			<td class="span3">First Name</td>
			<td><?php echo $store_accounts_data['firstname']; ?></td>
		</tr>
		<tr>
			<td>last Name</td>
			<td><?php echo $store_accounts_data['lastname']; ?></td>
		</tr>
		<tr>
			<td>Company</td>
			<td><?php echo $store_accounts_data['company']; ?></td>
		</tr>
		<tr>
			<td>Tel Num</td>
			<td><?php echo $store_accounts_data['telnum']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $store_accounts_data['email']; ?></td>
		</tr>

		<tr>
			<td>Customer Address</td>
			<td><?php echo $customer_address; ?></td>
		</tr>

	</table>

	</div>

</div><!--/span-->

</div><!--/row-->

<?php 
$user_type = 'admin';
echo Modules::run('cart/_draw_cart_contents', $query, $user_type);

?>


			
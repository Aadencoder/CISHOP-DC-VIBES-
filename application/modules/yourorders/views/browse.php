<h1>Your Orders</h1>
<?php 

if ($num_rows < 1){ 
echo "<b>No Order has been made so far !!</b>";
} else {

echo $showing_statement; 
echo "<br>";
echo $pagination;


 ?>


<table class="table table-striped table-bordered bootstrap-datatable datatable">
  <thead>
	  <tr style="background-color: #666; color: #fff">

		  <th>Order Ref</th>
		  <th>Order Value</th>
		  <th>Date Created</th>
		  <th>Order Status</th>
		  <th>Actions</th>
	  </tr>
  </thead>   
  <tbody>
  <?php 
  $this->load->module('timedate');
  foreach ($query->result() as $row) {

  	$view_order_url = base_url()."yourorders/view/".$row->order_ref;
  	$date_created = $this->timedate->get_nice_date($row->date_created, 'cool');
   	$order_status = $row->order_status;//order status  = 0;
   	$order_status_title = $order_status_options[$order_status];

  	?>
  	
	<tr>
		<td><?php echo $row->order_ref; ?></td>
		<td><?php echo  $row->mc_gross; ?></td>
		<td><?php echo $date_created; ?></td>
		<td><?php echo  $order_status_title; ?></td>
 		<td class="center">
			<a class="btn btn-default" href="<?php echo $view_order_url; ?>">
			<i class="glyphicon glyphicon-eye-open"></i>  
			
		</td>
	</tr><?php
  }

?>
	
  </tbody>
</table> 

<?php } ?>           
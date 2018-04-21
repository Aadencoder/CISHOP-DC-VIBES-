<h1>Your <?php echo $folder_type; ?></h1>

<?php 
if(isset($flash)){
	echo $flash; 
}

	$create_message_url = base_url()."yourmessages/create";
	?>

<p style="margin-top: 30px;">
	<a href="<?= $create_message_url; ?>"><button type="submit" class="btn btn-primary">Compose Message</button></a>
</p>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white envelope"></i><span class="break"></span><?php echo $folder_type; ?></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr style="background-color: #666; color: #fff">
				  	  <th>&nbsp;</th>
					  <th>Date sent</th>
					  <th>Sent By</th>
					  <th>Subject</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  <?php 
			  $this->load->module('site_setting');
			  $this->load->module('store_accounts');
			  $this->load->module('timedate');

			  $team_name = $this->site_settings->_get_support_team_name();

			  foreach ($query->result() as $row) {
			  	$view_url = base_url()."yourmessages/view/".$row->code;
			  	$opened = $row->opened;
			  	$customer_data['firstname'] = $row->firstname;
			  	$customer_data['lastname'] = $row->lastname;
			  	$customer_data['company'] = $row->company;
			  	if($opened == 1 ){
			  		$icon = "<span class='glyphicon glyphicon-envelope'></span>";
			  	} else {
			  		$icon = "<span class='glyphicon glyphicon-envelope' style='color: orange;'></span>";
			  	}

			  	$date_sent = $this->timedate->get_nice_date($row->date_created, 'mini');

			  	if ($row->sent_by==0){
			  		$sent_by = $team_name;
			  	} else {
			  		$sent_by = $this->store_accounts->_get_customer_name($row->sent_by, $customer_data);
			  	}
			  	?>
			  	
				<tr >
					 <td class="span1"><?php echo $icon; ?></td>
					  <td><?php echo $date_sent; ?></td>
					  <td><?php echo $sent_by; ?></td>
					  <td><?php echo $row->subject; ?></td>
					  <td class="span1">
					  	<a class="btn btn-default" href="<?php echo $view_url; ?>">
					  		<span class="glyphicon glyphicon-eye-open"></span> view  
					  	</a>
					  </td>
				</tr><?php
			  } ?>
				
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

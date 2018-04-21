<h1><?php echo $headline; ?></h1>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}

  $this->load->module('store_accounts');
  $this->load->module('timedate');

  foreach ($query->result() as $row) {
  	$view_url = base_url()."enquiries/view/".$row->id;
  	$opened = $row->opened;
  	if($opened == 0 ){
  		$icon = "<i class='icon-envelope'></i>";
  	} else {
  		$icon = "<i class='icon-envelope-alt' style = 'color: orange'></i>";
  	}

  	$date_sent = $this->timedate->get_nice_date($row->date_created, 'full');

  	if ($row->sent_by==0){
  		$sent_by = "Admin";
  	} else {
  		$sent_by = $this->store_accounts->_get_customer_name($row->sent_by);
  	}

  	$subject = $row->subject;
  	$message = $row->message;
  	$ranking = $row->ranking;
 }
?>
<p style="margin-top: 30px;">
	<a href="<?php echo base_url(); ?>enquiries/create/<?php echo $update_id; ?>"><button type="submit" class="btn btn-primary">Reply</button></a>
<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Post Comment</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Comment</h4>
      </div>
      <div class="modal-body">
      <?php $form_location = base_url()."comments/submit"; ?>
	   <form class="form-horizontal" action="<?php echo $form_location; ?>" method="post">
        <p>
    	  <div class="form-group">
    	    <label class="control-label col-sm-2">Commnet :</label>
    	    <div class="col-sm-10">
			  <textarea rows="4" name="comment"></textarea>
    	    </div>
    	  </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="submit" value="Submit">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?php 
      echo form_hidden('comment_type', 'e');
      echo form_hidden('update_id', $update_id);
      ?>
    </form>
    </div>

  </div>
</div></p>
<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white edit"></i><span class="break"></span>Category Details</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	<?php 
	$form_location = base_url()."enquiries/submit_ranking/".$update_id;
	?>
		<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
		  <fieldset>
			 <div class="control-group">
				<label class="control-label" for="selectError3">Ranking </label>
				<div class="controls">
				  <?php 
				  if ( $ranking>0){
				  	unset($options['']);
				  }
			  		echo form_dropdown('ranking', $options, $ranking);
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

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Enquiry Detail</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">

			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <tbody>
			  
			  	<tr>
			  		<td style="font-weight: bold;">Date Sent</td><td><?php echo $date_sent; ?></td>
			  	</tr>
			  	<tr>
			  		<td style="font-weight: bold;">Sent By</td><td><?php echo $sent_by; ?></td>
			  		</tr>
			  		<tr>
			  		<td style="font-weight: bold;">Subject </td><td><?php echo $subject; ?></td>
			  		</tr><tr>
			  		<td style="font-weight: bold; vertical-align: top;">Msg</td><td style="vertical-align: top;"><?php echo nl2br($message); ?></td>
			  		</tr>
			  	</tr>
				
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

<?php echo Modules::run('comments/_draw_comments', 'e', $update_id); 
?>
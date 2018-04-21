<div class="row">
<div class="col-sm-8">
<p style="margin-top: 30px;">Message sent on <?php echo $date_created; ?></p>
<p style="margin-top: 30px;">
	<a href="<?php echo base_url(); ?>yourmessages/create/<?php echo $code; ?>"><button type="submit" class="btn btn-default">Reply</button></a>
</p>
<h2><?php echo $subject; ?></h2>
<p><?php echo $message; ?></p>
</div>
</div>
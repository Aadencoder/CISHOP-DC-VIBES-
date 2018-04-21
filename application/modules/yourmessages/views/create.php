<h3><?php echo $headline; ?></h3>
<?php
$form_location = current_url();
echo  validation_errors("<p style='color: red;'>","</p>");
?>
<div class="row">
  <div class="col-sm-8">
    <form action="<?php echo $form_location; ?>" method="post">
    <?php if ($code=="") { ?>
      <div class="form-group">
        <label >Subject</label>
        <input type="text" class="form-control" name="subject" value="<?php echo $subject; ?>" placeholder="Enter your subject">
      </div>
      <?php } else {
        echo form_hidden('subject', $subject);
        } ?>
      <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" rows="8" name="message" placeholder="enter your message here..."><?php echo $message; ?></textarea>
      </div>
     
      <div class="checkbox">
        <label>
          <input type="checkbox" name="urgent" value="1"
    		<?php if($urgent == 1) { echo " checked"; }?>
          > Urgent
        </label>
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit your message</button>
      <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
        <?php
              echo form_hidden('token', $token); ?>

    </form>
  </div>
</div>
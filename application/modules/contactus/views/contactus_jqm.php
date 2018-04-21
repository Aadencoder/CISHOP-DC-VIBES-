<?php echo form_open($form_location); ?>
<div class="ui-body ui-body-a ui-corner-all">
	<h3>Contact Us</h3>

	<?php echo validation_errors("<p style='color:red;'>", "</p>"); ?>

	<label for="text-basic">Name:</label>
	<input type="text" name="yourname" id="text-basic" value="<?php echo $yourname; ?>">

	<label for="text-basic">Email:</label>
	<input type="text" name="email" id="text-basic" value="<?php echo $email; ?>">

	<label for="text-basic">Tel Number :</label>
	<input type="text" name="telnum" id="text-basic" value="<?php echo $telnum; ?>">


	<label for="textarea">Textarea:</label>
	<textarea cols="40" rows="8" name="message" id="textarea"><?php echo $message; ?></textarea>

	<button type="submit" name="submit" class="ui-shadow ui-btn ui-corner-all" value="Submit">Submit</button>
</div>
<?php echo form_close(); ?>
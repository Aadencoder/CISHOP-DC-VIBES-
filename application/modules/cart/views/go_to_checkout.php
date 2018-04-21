<h1>Would you like to create an account to continue your checkout process.</h1>
<div class="col-sm-10 text-left">
<?php echo form_open('cart/submit_choice'); ?>
<button class="btn btn-success"  name="submit" value="Yes- Let's Do It" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> Yes- Let's Do It</button>

<button class="btn btn-warning"  name="submit" value="No Thanks" type="submit"><span class="glyphicon glyphicon-thumbs-down"></span> No Thanks</button>

<a href="<?php echo base_url(); ?>youraccount/login" ><button class="btn btn-primary"  name="submit" value="No Thanks" type="button"><span class="glyphicon glyphicon-log-in"></span> Already have account (login)</button></a>
<?php 

echo form_hidden('checkout_token', $checkout_token);
echo form_close(); ?>
</div>
<?php 
$form_location = base_url().'youraccount/submit';

?>
<h1>Create Account</h1>
<?php echo validation_errors(); ?>
<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
<fieldset>

<!-- Form Name -->
<legend>Create user</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="textinput" name="username" type="text" value="<?php echo $username; ?>" placeholder="Enter your username" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" value="<?php echo $email; ?>" placeholder="Email" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="textinput" type="password" name="pword" value="<?php echo $pword; ?>" placeholder="Please enter password" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Repeat Password</label>  
  <div class="col-md-4">
  <input id="textinput" type="password" name="repeat_pword" value="<?php echo $repeat_pword; ?>" placeholder="Please repeat password" class="form-control input-md" required="">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Create Account?</label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" value="Submit" class="btn btn-primary">Yes</button>
  </div>
</div>

</fieldset>
</form>

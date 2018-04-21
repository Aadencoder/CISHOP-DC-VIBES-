<div class="row">
  <div class="col-md-12" style="margin-top: 12px;">
    <ol class="breadcrumb">
      <?php 
      foreach ($breadcrumbs_array as $key => $value) {
      	?>
       	<li><a href="<?php echo $key; ?>"> <?php echo $value; ?></a></li>
	  <?php       }  ?>
      <li class="active"><?php echo $current_page_title; ?></li>
    </ol>
  </div>
</div>
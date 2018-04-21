<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}

if (is_numeric($update_id)) {
?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Success</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<div class="alert alert-success">Your image was successfully uploaded!</div>
		<!--<img src="<?php echo base_url(); ?>small_pics/<?php echo $row->small_pic; ?>">-->
		<ul>
		<?php foreach ($upload_data as $item => $value):?>
		<li><?php echo $item;?>: <?php echo $value;?></li>
		<?php endforeach; ?>
		</ul>

		<p>
		<?php 
		$edit_url = base_url()."blog/create/".$update_id; ?>
		<a href="<?php echo $edit_url; ?>"><button type="button" class="btn btn-primary">Return Update Blog Detail Page</button></a></p>
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } ?>
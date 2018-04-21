<h1><?php echo $headline; ?></h1><br>
<h2><?php echo $sub_headline; ?></h2>

	<?php 
	$create_page_url = base_url()."blog/create";

	if (isset($flash_msg)){
		echo $flash_msg;
	}
?>
<p style="margin-top: 30px;">
	<a href="<?php echo base_url(); ?>store_items/create/<?php echo $parent_id; ?>"><button type="submit" class="btn btn-default">Back </button>
</a>
<a href="<?php echo base_url(); ?>item_galleries/upload_image/<?php echo $parent_id; ?>">
<button type="button" class="btn btn-primary btn-lg">Upload Picture</button>
</a>
</p>

<?php
	 if ($num_rows = 0) {
	 	echo "<b>No any gallery picture for  ".$entity_name." for ".$parent_title."</b>";
	 } else {
	?>



<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white file"></i><span class="break"></span>Existing Picture</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
				  	  <th>Picture</th>
					  <th class="span2">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  <?php 
			  foreach ($query->result() as $row) {
			  	$delete_url = base_url()."item_galleries/deleteconf/".$row->id;
				$picture = $row->picture;
				$pic_path = base_url().'item_galleries_pics/'.$picture;
			  	?>
			  	
				<tr>
					<?php if ($picture != '' ){ ?>
					<td><img src="<?php echo $pic_path; ?>" width="20%" height="20%"></td></td>
					<?php } ?>
					<td class="center">

						<a class="btn btn-danger" href="<?php echo $delete_url; ?>">
							<i class="halflings-icon white trash"></i>  
						</a>

					</td>
				</tr><?php
			  } ?>
				
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } ?>
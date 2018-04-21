<h1><?php echo $headline; ?></h1>


	<?php 
	$create_page_url = base_url()."blog/create";

	if (isset($flash_msg)){
		echo $flash_msg;
	}

	 echo Modules::run('slides/_draw_create_modal', $parent_id);

	 if ($num_rows = 0) {
	 	echo "<b>So far you have not upload any  ".$entity_name." for ".$parent_title."</b>";
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

			  	$target_url = $row->target_url;
			  	$edit_page_url = base_url()."slides/view/".$row->id;

			  	if ($target_url!='') {
			  		$view_page_url = $target_url;
			  	}
				$picture = $row->picture;
				$pic_path = base_url().'slider_pics/'.$picture;
			  	?>
			  	
				<tr>
					<?php if ($picture != '' ){ ?>
					<td><img src="<?php echo $pic_path; ?>" width="20%" height="20%"></td></td>
					<?php } ?>
					<td class="center">
					<?php if (isset($view_page_url)) { ?>
						<a class="btn btn-success" href="<?php echo $view_page_url; ?>">
							<i class="halflings-icon white eye-open"></i>  
						</a>
					<?php } ?>
						<a class="btn btn-info" href="<?php echo $edit_page_url; ?>">
							<i class="halflings-icon white edit"></i>  
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
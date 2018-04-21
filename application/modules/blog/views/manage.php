<h1>Content Management System</h1>


	<?php 
	$create_page_url = base_url()."blog/create";

	if (isset($flash_msg)){
		echo $flash_msg;
	}
	?>

<p style="margin-top: 30px;">
	<a href="<?= $create_page_url; ?>"><button type="submit" class="btn btn-primary">Create New Blog Entry</button></a>
</p>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white file"></i><span class="break"></span>Custom Blog</h2>
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
				  	  <th>Date Published</th>
				  	  <th>Author</th>
					  <th>Blog URL</th>
					  <th>Blog Headline</th>
					  <th class="span2">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  <?php 
			  $this->load->module('timedate');
			  foreach ($query->result() as $row) {
			  	$edit_page_url = base_url()."blog/create/".$row->id;
			  	$view_page_url = base_url().$row->id;
				$date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
				$picture = $row->picture;
				$thumbnail_name = str_replace('.', '_thumb.', $picture);
				$thumbnail_path = base_url().'blog_pics/'.$thumbnail_name;
			  	?>
			  	
				<tr>
					<td><img src="<?php echo $thumbnail_path; ?>" alt="<?php echo $row->page_title; ?>"></td></td>
					<td><?php echo  $date_published;?></td>
					<td><?php echo $row->author; ?></td>

					<td><?php echo $view_page_url; ?></td>
					<td class="center"><?php echo $row->page_title; ?></td>
					
					<td class="center">
						<a class="btn btn-success" href="<?php echo $view_page_url; ?>">
							<i class="halflings-icon white eye-open"></i>  
						</a>
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

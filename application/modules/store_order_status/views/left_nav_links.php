<li>
	<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Manage Order</span><!-- <span class="label label-important"> 3 </span> --></a>
	<ul>
	<?php 
	$target_url = base_url()."store_orders/browse/status0";
	?>
	<li><a class="submenu" href="<?php echo $target_url; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> <?php echo "Orders Submitted"; ?></span></a></li>
	<?php 

	foreach ($query_sos->result() as $row) {
		$target_url = base_url()."store_orders/browse/status".$row->id;
	?>	<li><a class="submenu" href="<?php echo $target_url; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> <?php echo $row->status_title; ?></span></a></li>
	<?php } ?>
	</ul>	
</li>

<style type="text/css">
	.sort{
		list-style: none;
		border: 1px #333 solid;
		color: #999;
		padding: 10px;
		margin-bottom: 5px;
	}
</style>
<ul id="sortlist">
<?php 
$this->load->module('homepage_blocks');
$this->load->module('homepage_offers');

foreach ($query->result() as $row) {
	
	$edit_item_url = base_url()."homepage_blocks/create/".$row->id;
	$view_item_url = base_url()."homepage_blocks/view/".$row->id;
	$block_title = $row->block_title;
	


?>
	<li class="sort" id="<?php echo $row->id; ?>"><i class="icon-sort"></i> <?php echo $row->block_title;?>
	
	<?php  
	$num_items= $this->homepage_offers->count_where('block_id', $row->id);

	

		if ($num_items == 1) {
			$entity = "homepage offer";
		} else {
			$entity = "Homepage Offers";
		}

		$sub_cat_url = base_url()."homepage_blocks/manage/".$row->id;
	?>
	<a class="btn btn-default" href="<?php echo base_url(); ?>">
		<i class="halflings-icon white eye-open"></i>   
	</a>

	<a class="btn btn-info" href="<?php echo $edit_item_url; ?>">
		 <i class="halflings-icon white edit"></i>  
	</a>

	</li>
	<?php } ?>
</ul>
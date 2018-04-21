
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
foreach ($query->result() as $row) {
$delete_item_url = base_url().'btm_nav/delete/'.$row->id;

 ?>
	<li class="sort" id="<?php echo $row->id; ?>"><i class="icon-sort"></i>
	<b>Page URL : </b><?php echo $row->page_url;?>
     | 
	<b>Page Title : </b><?php echo $row->page_title; ?>
	<?php if (!in_array($row->page_id, $special_pages)) { ?>
	<a class="btn btn-danger" href="<?php echo $delete_item_url; ?>">
		 <i class="halflings-icon white trash"></i>  
	</a>
	<?php } ?>
	</li>
	<?php } ?>
</ul>
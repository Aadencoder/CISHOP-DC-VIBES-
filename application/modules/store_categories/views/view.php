<h1><?php echo  $cat_title; ?></h1>
<p><?php echo $showing_statement; ?></p>
<?php echo $pagination; ?>
<div class="row">
<?php 
foreach ($query->result() as $row) { 
	$item_title = $row->item_title;
	$item_price = $row->item_price;
	$was_price = $row->was_price;
	$small_pic = $row->small_pic;
	$small_pic_path = base_url()."small_pics/".$small_pic;
	$item_page = base_url().$item_segments.$row->item_url;
	?>
  <div class="col-md-2 img-thumbnail"  style="margin: 8px; height: 300px;">
  	<a href="<?php echo $item_page; ?>"><img src="<?php echo "$small_pic_path"; ?>" class="img-responsive" title="<?php echo $item_title; ?>"></a>
	<h6><a href="<?php echo $item_page; ?>"><?php echo $item_title; ?></a></h6>
	<div style="clear: both; color: red; font-weight: bold;">
		<?php echo $currency_symbol.number_format($item_price,2);

		if ( $was_price > 0 ) { ?>
		<span style="font-weight: normal; text-decoration: line-through;"><?php echo $currency_symbol.$was_price; ?></span>
		<?php } ?>
	</div>
  </div>
<?php } ?>

</div>
<?php echo $pagination; ?>
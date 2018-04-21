<?php
foreach ($query->result() as $row) {
	$item_title = $row->item_title;
	$item_price = $row->item_price;
	$was_price = $row->was_price;
	$small_pic = $row->small_pic;
	$small_pic_path = base_url()."small_pics/".$small_pic;
	$item_page = base_url().$item_segments.$row->item_url;
	$item_price = number_format($row->item_price, 2);
	$item_price = str_replace('.00', '', $item_price);
	?>
	<div class="col-xs-3">
        <div class="offer offer-<?php echo $theme; ?>"  style="min-height: 400px;">
          <div class="shape">
            <div class="shape-text">
              <i class="glyphicon glyphicon-star" style="font-size: 15px;"></i>              
            </div>
          </div>
          <div class="offer-content">
            <h3 class="lead">
              $<?= $item_price; ?>
            </h3>
            <a href="<?php echo $item_page; ?>"><img src="<?php echo "$small_pic_path"; ?>" class="img-responsive" title="<?php echo $item_title; ?>"></a>           
            <p>
              <a href="<?= $item_page ?>"><?= $item_title; ?></a>
            </p>
          </div>
         </div>
      </div>
      <?php
}
?>
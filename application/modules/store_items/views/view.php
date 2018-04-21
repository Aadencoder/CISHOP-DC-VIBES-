<?php 
echo Modules::run('templates/_draw_breadcrumbs', $breadcrumbs_data);

if(isset($flash)){
  echo $flash; 
}
?>
<div class="row">
  <div class="col-md-2" style="background: #fff; margin-top: 20px;">
  	<a href="#" data-featherlight="<?php echo base_url(); ?>big_pics/<?php echo $big_pic; ?>">
    <img src="<?php echo base_url(); ?>big_pics/<?php echo $big_pic; ?>" class="img-responsive" alt="<?php echo $item_title; ?>">
    </a>
  </div>
  <div class="col-md-7" style="padding: 20px">
  	<h1><?php 

    echo$item_title; ?></h1>
    <h2 style="color: Red;"> Our Price <?php echo  $currency_symbol.$item_price ; ?></h2>
  	<div style="clear: both;">
  		<?php  echo nl2br($item_description); ?>
  	</div>
  </div>
  <div class="col-md-3" style="background: #f1f2f7; margin-top: 20px;">
  	<?php 
     echo  Modules::run('cart/_draw_add_to_cart', $update_id);
  	?>
  </div>
</div>

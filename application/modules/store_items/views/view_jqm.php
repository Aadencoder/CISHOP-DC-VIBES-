<?php 
//echo Modules::run('templates/_draw_breadcrumbs', $breadcrumbs_data);

if(isset($flash)){
  echo $flash; 
}
?>
<style type="text/css">
	.ui-bar {
		border: 1px silver solid;
	}
</style>
<h3><?php echo $item_title; ?></h3>
<div class="row">
    <div style="margin-top: 20px;">
    	<img src="<?php echo base_url(); ?>big_pics/<?php echo $big_pic; ?>"   width="100%">
	    </div>
     	 <h3 style="color: #333;"> Our Price : <?php echo  $currency_symbol.$item_price ; ?></h3>
    	<div style="clear: both;">
    		<?php  echo nl2br($item_description); ?>
    	</div>
	</div>
</div>
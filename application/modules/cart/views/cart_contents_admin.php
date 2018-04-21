

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white shopping-cart"></i><span class="break"></span>Shopping Basket</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	<table class="table table-bordered" >
	<?php 
	$grand_total = 0;
	foreach ($query->result() as $row) { 
		$sub_total = $row->price*$row->item_qty;
		$sub_total_desc = number_format($sub_total, 2);
		$grand_total = $grand_total + $sub_total;

		?>
		<tr>
			<td class="col-sm-2">
			<?php if ($row->small_pic!=""){ ?>
				<img src="<?php echo base_url(); ?>small_pics/<?php echo $row->small_pic; ?>">
				<?php } else {
					echo "No Image";
					} ?>
			</td>
			<td class="col-sm-8">
				Item Number : <?php echo $row->id; ?><BR>
				<b><?php echo $row->item_title; ?></b><BR>
				Quantity : <?php echo $row->item_qty; ?><br>
			</td>
			<td class="col-sm-2"><?php echo $currency_symbol.$sub_total_desc; ?></td>
		</tr>

		<tr>

		<?php } ?>
		<tr>
			<td class="col-sm-2">
			$nbspShipping
			</td>
			<td class="col-sm-8 text-right">
				Shipping : <?php
				$grand_total = $grand_total + $shipping;

				?>
			</td>
			<td class="col-sm-2"><?php echo $currency_symbol.$shipping; ?></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: right;">Total</td>
			<td><?php 
			$grand_total_desc = number_format($grand_total, 2);
			echo $currency_symbol.$grand_total_desc; ?></td>
		</tr>
	</table>
	</div>
</div>
</div>
			
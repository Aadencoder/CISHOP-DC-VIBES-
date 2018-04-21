<?php 
$first_bit = $this->uri->segment(1);
?>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-striped table-bordered" style="margin-top: 36px;">
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
				
					<?php
					if ($first_bit!='yourorders') {
					 echo anchor('store_basket/remove/'.$row->id, 'Remove');
					}
					?>
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


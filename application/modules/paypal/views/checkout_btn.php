<?php
echo form_open($form_location);

echo form_hidden('upload', '1');
echo form_hidden('cmd', '_cart');
echo form_hidden('business', $paypal_email);
echo form_hidden('currency_code', $currency_code);
echo form_hidden('custom', $custom);
echo form_hidden('return', $return);
echo form_hidden('cancel_return', $cancel_return);


$count = 0;

foreach ($query->result() as $row) {
	$count++;
	$item_title = $row->item_title;
	$price = $row->price;
	$item_qty = $row->item_qty;
	$item_size = $row->item_size;
	$item_color = $row->item_color;

	echo form_hidden('item_name_'.$count, $item_title);
	echo form_hidden('amount_'.$count, $price);
	echo form_hidden('item_qty_'.$count, $item_qty);
	if ($item_color!= ''){
		echo form_hidden('on0_'.$count, 'Color');
		echo form_hidden('os0_'.$count, $item_color);
	}

	if ( $item_size!=''){
		echo form_hidden('on1_'.$count, 'Size');
		echo form_hidden('os1_'.$count, $item_size);
	}
}
echo form_hidden('shipping_'.$count, $shipping);
?>
<div class="col-sm-10 col-sm-offset-1 text-center">
<button class="btn btn-success" name="submit" value="Submit" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Go To Checkout</button>
</div>
<?php
echo form_close();

if ($on_test_mode == TRUE) {
	echo "<div style='clear:bloth; text-align:center; margin-top:44px'>";
	echo form_open('paypal/submit_test');
	echo "<br>";
	echo "Enter number of order you would like to simulate: ";
	echo form_input('num_orders');
	echo form_submit('submit', 'Submit');
	echo form_hidden('custom', $custom); 
	echo form_close();
}

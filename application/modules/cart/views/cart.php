<h1>Your Shopping Cart</h1>
<?php 

if ($num_rows<1){
	echo " You have no Items in the basket";
} else {
	echo $showing_statment;
}
$user_type = 'public';
echo Modules::run('cart/_draw_cart_contents', $query, $user_type);
echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
?>
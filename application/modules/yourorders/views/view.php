<h1><?php echo $order_ref; ?></h1>
<p>Date Created : <?php echo $date_created; ?></p>
<p>Order Status : <?php echo $order_status_title; ?></p>

<?php 
$user_type = 'public';
echo Modules::run('cart/_draw_cart_contents', $query, $user_type);

?>
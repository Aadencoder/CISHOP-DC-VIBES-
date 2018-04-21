<?php 
function _attemp_make_active($linked_text)
{
	if ((current_url()==base_url().'youraccount/welcome') AND ($linked_text=="Your Messages")){
		echo "class='active'";
	}
}
?>

<ul class="nav nav-tabs" style="margin-top: 25px">
  <li role="presentation" <?php _attemp_make_active('Your Messages'); ?>>
  	<a href="<?php echo base_url(); ?>youraccount/welcome">Your messages</a>
  </li>
  <li role="presentation"><a href="<?php echo base_url(); ?>yourorders/browse">Orders</a></li>
  <li role="presentation"><a href="#">PRofile</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>youraccount/logout">Logout</a></li>
</ul>
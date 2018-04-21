<?php
class Site_settings extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function is_mobile()
{
    $this->load->library('user_agent');
    $is_mobile = $this->agent->is_mobile();
    //$is_mobile = TRUE;
    return $is_mobile;
}

function _get_map_code()
{
    $code = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.645082926793!2d87.28173941449244!3d26.46716708550087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef741501651053%3A0xeb9020523aa15cb!2sDelta+Tech+Nepal!5e0!3m2!1sen!2snp!4v1493656473998" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
    return $code;
}

function _get_support_team_name()
{
    $name = "Customer Support";
    return $name;
}

function _get_paypal_email()
{
    $email = 'deltatech@gmail.com';
    return $email;
}

function _get_welcome_message($customer_id)
{
    $this->load->module('store_accounts');
    $customer_name = $this->store_accounts->_get_customer_name($customer_id);

    $msg = "Hello".$customer_name."<br><br>";
    $msg .= "Thank for creating an account with CISHOP. GOT any quiries related t0 product & services. We qould be happy to help you";
    $msg .= "regards,";
    $msg .= "-metalhead101-";
    return $msg;
}

function _get_cookie_name()
{
    $cookie_name = 'htrgahe';
    return $cookie_name;
}
function _get_currency_symbol()
{
	$symbol = "$";
	return $symbol;
}

function _get_currency_code()
{
    $code = "USD";
    return $code;   
}
function _get_item_segments()
{

    //return the segments  for store item pages
    $segment = "musical/instrument/";
    return $segment;
}

function _get_items_segments()
{

    //return the segments 
    $segment = "music/instruments/";
    return $segment;
}

function _get_page_not_found_msg()
{
	$msg = "<h1>Page Not Found</h1>";
	return $msg;
}
}
<?php
class Site_security extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function _check_admin_login_detail($username, $pword)
{
	$target_uername = "admin";
	$target_pass = "password";

	if (($username == $target_uername) && ($pword == $target_pass)) {
		return TRUE;
	} else {
		return FALSE;
	}
}
function _make_sure_logged_in()
{
	//make sure the customer is logged in
	$user_id = $this->_get_user_id();
	if(!is_numeric($user_id)){
		redirect('youraccount/login');
	}
}
function _get_user_id()
{
	//attempt to get the id of the user

	//start by checking for a session variable\
	$user_id = $this->session->userdata('user_id');
	if(!is_numeric($user_id)){
		//check for valid cookie
		$this->load->module('site_cookies');
		$user_id = $this->site_cookies->_attempt_get_user_id();
	}

	return $user_id;

}

function generate_random_string($length)
{
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for($i = 0; $i < $length; $i++){
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
		return $randomString;
}
function _hash_string($str) 
{
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array(

		'cost' => 11

		));
	return $hashed_string;
}

function _decrypt_string($str)
{
	$this->load->library('encryption');
	$decrypted_string = $this->encryption->decrypt($str);
	return $decrypted_string;
}


function _encrypt_string($str)
{
	$this->load->library('encryption');
	$encrypted_string = $this->encryption->encrypt($str);
	return $encrypted_string;
}

function _verify_hash($plain_text_str,$hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result;
}
function _make_sure_is_admin() 
{
   $is_admin = $this->session->userdata('is_admin');
   if ($is_admin== 1){
		return TRUE;
   } else {
   		redirect('site_setting/not_allowed');
   }

   if ($is_admin!=TRUE) {
    redirect('site_security/not_allowed');
   } 
}

function not_allowed()
{
    echo "your are not allowed here !!";
}
} 
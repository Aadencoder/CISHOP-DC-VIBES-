<?php
class Anthem extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->form_validation->CI =& $this;
}

function index()
{
	$data['username'] = $this->input->post('username', TRUE);
     $this->load->module('templates');
     $this->templates->login($data);
}
function submit_login()
{
	// foreach ($_POST as $key => $value) {
	// 	echo "key of ".$key." has value of ".$value."<br>";
	// }

	$submit =$this->input->post('submit', TRUE);

    if ($submit == "Submit"){
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[60]|callback_username_check');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[4]|max_length[35]');
 
        if ($this->form_validation->run() == TRUE) {
            
           $this->_in_you_go();

        } else {
        	echo validation_errors();
        }
    }
}

function logout()
{
	unset($_SESSION['is_admin']);
	redirect(base_url());
}

function _in_you_go()
{
		//set the session 
		$this->session->set_userdata('is_admin', '1');

	//send to  admin dashboard
	redirect('dashboard/home');
}

function username_check($str)
{   

	$this->load->module('site_security');
	$error_msg = "Credential invalid";
	$pword = $this->input->post('pword', TRUE);

	$result = $this->site_security->_check_admin_login_detail($str, $pword);

	if ($result ==FALSE) {
		$this->form_validation->set_message('username_check', $error_msg);
		return FALSE;
	} else {
		$this->form_validation->set_message('username_check', $error_msg);
		return TRUE;
	}
}

}
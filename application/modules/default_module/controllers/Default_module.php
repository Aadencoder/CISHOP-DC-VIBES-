<?php
class Default_module extends MX_Controller 
{

function __construct() {
parent::__construct();
}


function index()
{
    $first_bit = trim($this->uri->segment(1));

    $this->load->module('webpages');
    $query = $this->webpages->get_where_custom('page_url', $first_bit);
    $num_rows = $query->num_rows();

    if ($num_rows>0){
    	//we have content!
    	foreach ($query->result() as $row) {
	    	$data['page_title'] = $row->page_title;
	    	$data['page_url'] = $row->page_url;
	    	$data['page_keywords'] = $row->page_keywords;
	    	$data['page_content'] = $row->page_content;    
	    	$data['page_description'] = $row->page_description;
	    }
    }else {
    	$this->load->module('site_settings');
    	$data['page_content'] = $this->site_settings->_get_page_not_found_msg();
    }

    $this->load->module('site_settings');
    $is_mobile = $this->site_settings->is_mobile();

    if ($is_mobile == TRUE) {
        $template = 'public_jqm';
    } else {
        $template = 'public_bootstrap';
    }


    $this->load->module('templates');
    $this->templates->$template($data);
}

}
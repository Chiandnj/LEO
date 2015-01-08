<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_view extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  

	function dash_admin()
	{
	$this->load->view('admin_header');
	$this->load->view('admin_dash');
	$this->load->view('leo_footer');
	
	}
	}
	
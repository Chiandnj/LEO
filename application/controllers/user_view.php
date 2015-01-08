<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_view extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  

	function dash_user()
	{
	$this->load->view('user_dash');
	}
	}
	
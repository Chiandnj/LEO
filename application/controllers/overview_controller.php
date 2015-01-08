<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview_controller extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('overview','',TRUE);
		$this->load->helper(array('form', 'url','html'));
	}

 function show_cat(){
 $this->load->view('admin_header');
 $result['result']=$this->overview->display_category();
 $this->load->view('forum_overview',$result);




	

}
 function show_user(){
 $this->load->view('user_header');
 $result['result']=$this->overview->display_category();
 $this->load->view('user_overview',$result);




	

}
	}
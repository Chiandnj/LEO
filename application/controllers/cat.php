<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('open_category','',TRUE);
	}

 function view_cat(){
 
 $this->load->view('admin_header');
 $result['result']=$this->open_category->view_topics();
// $result['row'] = $id;
 /*var_dump($result['result']);
 die();*/
 
 $this->load->view('category_view',$result);

 



	

}
function user_cat(){
 
 $this->load->view('user_header');
 $result['result']=$this->open_category->view_topics();
// $result['row'] = $id;
 /*var_dump($result['result']);
 die();*/
 
 $this->load->view('category_user',$result);	

}
	}
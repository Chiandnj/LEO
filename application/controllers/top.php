<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('open_topic','',TRUE);
	}

 function view_top(){
 
 $this->load->view('admin_header');
 $result['result']=$this->open_topic->show_topic();
 //$result['row'] =
 /*var_dump($result['result']);
 die();*/
 
 $this->load->view('topic_view',$result);}
 
  function user_top(){
 
 $this->load->view('user_header');
 $result['result']=$this->open_topic->show_topic();
 //$result['row'] =
 /*var_dump($result['result']);
 die();*/
 
 $this->load->view('user_topic',$result);}
	}
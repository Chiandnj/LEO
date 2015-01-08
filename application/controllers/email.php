<?php
/**
 * SENDS EMAILS WITH GMAIL
 */
class Email extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('chiandanj@gmail.com','Chianda Njogu');
		$this->email->to('chiandanj@gmail.com');
		$this->email->subject('This is an email test');
		$this->email->message('It is working,Great!');
		
		if($this->email->send())
		{
		echo 'Your email was sent,fool.';	
		}
		else {
			show_error($this->email->print_debugger());
			
		}
	}
	
	
}

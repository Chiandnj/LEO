<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  

	function member_sub()
	{
	
	 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('bank', 'Bank' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('department', 'Department', 'trim|required|xss_clean');
		$this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', ' Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpass]|min_length[6]|xss_clean');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|xss_clean');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('receive');
		}
		else
		{*/
			$data = 
						array(
			'receive_bank'=> $this->input->post('receive_bank'),
			'receive_date'=> $this->input->post('receive_date'),
			'receive_amount'=> $this->input->post('receive_amount'),
			'receive_method'=> $this->input->post('receive_method'),
			'receive_description'=> $this->input->post('receive_description'),
			
			
			
			
			);
						
			$result= $this->db->insert('payments',$data);
			//$this->db->insert('user', $data);
			$this->load->view('member_subscription');
		    //echo "Entry successfully";
			
		}
	
		
}



?>
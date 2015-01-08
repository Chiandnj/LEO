<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscription extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  function load_subscription(){
   
   $this->load->view('admin_header');
   $this->load->view('sub_view');
   $this->load->view('leo_footer');

}
	
  

	function sub()
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
				if($this->db->insert('payments',$data))
			{
		   
		   echo "<div class='alert alert-info'><button class='close' data-dismiss='alert'>&time;</button><strong>Success!</strong></div>";
		   
										
   $this->load->view('admin_header');
   $this->load->view('sub_view');
   $this->load->view('leo_footer');						
				}
						
			
			
		}
	
		
}



?>
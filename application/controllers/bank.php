<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bank extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  function load_bank(){
   $this->load->view('admin_header');
   $this->load->view('add_bank');
   $this->load->view('leo_footer');

}
  
  

	function add_bank()
	{
	
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('bank_name', 'Bank' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('account_name', 'Account Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('account_no', 'Account.No', 'trim|required|xss_clean');
		$this->form_validation->set_rules('asset_value', 'Asset Value', 'trim|required|xss_clean');
		$this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_header');
            $this->load->view('add_bank');
            $this->load->view('leo_footer');
		}
		else
		{
			$data = 
						array(
			'bank_name'=> $this->input->post('bank_name'),
			'bank_date'=> $this->input->post('bank_date'),
			'account_name'=> $this->input->post('account_name'),
			'account_no'=> $this->input->post('account_no'),
			'balance'=> $this->input->post('balance'),
			'branch'=> $this->input->post('branch'),
			'reasons'=> $this->input->post('reasons'),
			
			
			
			
			);
						if($this->db->insert('bank_accounts',$data))
			{
		   
		    //"<div class='alert alert-info'><button class='close' data-dismiss='alert'>&time;</button><strong>Success!</strong></div>";
		   echo"<div class='alert alert-success alert-block'>
										<a class='close' data-dismiss='alert'>&times;</a>
										<h4 class='alert-heading'>Success!</h4>
										New bank account added!
									</div>";
						
			//$result= $this->db->insert('bank_accounts',$data);
			//$this->db->insert('user', $data);
			$this->load->view('admin_header');
			$this->load->view('add_bank');
			$this->load->view('leo_footer');
		    //echo "Entry successfully";
			
		}
	
		
}
}
}

?>
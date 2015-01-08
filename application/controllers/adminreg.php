<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminreg extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  function load_reg(){
  	//$this->load->view('admin_header');
	$this->load->view('admin_reg');
	//$this->load->view('leo_footer');
  }
  

	function reg()
	{
	$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('national_id', 'Identification', 'trim|alphanumeric|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('postal_address', 'Postal Address', 'trim|alphanumeric|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
		$this->form_validation->set_rules('occupation', 'Occupation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|alphanumeric|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		
	 //This method will have the credentials validation
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			//$this->load->view('header_view');
			$this->load->view('admin_reg');
		}
		else
		{
			$data = 
						array(
				'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
			'national_id'=>$this->input->post('national_id'),
			'postal_address'=>$this->input->post('postal_address'),
			'mobile_no'=>$this->input->post('mobile_no'),
			'location'=>$this->input->post('location'),
			'occupation'=>$this->input->post('occupation'),
			'avatar'=>$this->input->post('avatar'),
			'role'=>$this->input->post('role'),
			'password'=>md5($this->input->post('password')),
			
			
			
			
			);
						
			//$result= $this->db->insert('user',$data);
			//$this->db->insert('user', $data);
						if($this->db->insert('user',$data))
			{
		   
   $this->load->view('admin_header');
   $this->load->view('mem_success',$data);
   $this->load->view('leo_footer');
}
			
			
		    //echo "Entry successfully";
			
		}
	
		
}
}



?>
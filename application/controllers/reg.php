<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  

	function load_reg(){
		$this->load->view('header_view');
	    $this->load->view('registration_view');
	   
		
	}
	function userreg()
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
		
		
        
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header_view');
			$this->load->view('registration_view');
		}
		else
		{
		$config['upload_path']   =   'files/avatar/';
        $config['allowed_types'] =   "gif|jpg|jpeg|png";
		$config['max_width']  = '1024000000';
		$config['max_height']  = '768000000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error =$this->upload->display_errors();
			echo $error;
		}
		    $finfo=$this->upload->data();
            $data2= array('upload_data' => $this->upload->data());
			$data=array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
			'national_id'=>$this->input->post('national_id'),
			'postal_address'=>$this->input->post('postal_address'),
			'mobile_no'=>$this->input->post('mobile_no'),
			'location'=>$this->input->post('location'),
			'occupation'=>$this->input->post('occupation'),
			'role'=>$this->input->post('role'),
			'password'=>md5($this->input->post('password')),
			'avatar' => $config['upload_path'].$finfo['raw_name'].$finfo['file_ext']);
			//var_dump($config['upload_path'].$finfo['raw_name'].$finfo['file_ext']);
			//die();
			
            
			
			
			
			
						
			$this->db->insert('user', $data);
			$this->load->view('header_view');
			$this->load->view('thank_view');
		    //echo "Entry successfully";
			
		}
		}
		}
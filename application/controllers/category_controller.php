<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('category','',TRUE);
	}
	
		//the user has admin rights
		function create_category(){
		
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('cat_description', 'Category Description', 'trim|required|min_length[4]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		
	
	{
		//the form hasn't been posted yet, display it
		 
		$this->load->view('admin_header');
		//$result['result']=$this->overview->display_category();
		$this->load->view('add_category');
		$this->load->view('leo_footer');
	}
	
        else
		{
			$data=array(
			'cat_name'=>$this->input->post('cat_name'),
			'cat_description'=>$this->input->post('cat_description'));
		//the form has been posted, so save it
		
	        $this->db->insert('categories', $data);
			$this->load->view('admin_header');
		    $this->load->view('cat_success');
		    $this->load->view('leo_footer');
	}
	}
	

	}
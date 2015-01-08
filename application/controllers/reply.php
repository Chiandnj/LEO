<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reply extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->model('topic',TRUE);
		$this->load->helper(array('form', 'url','html'));
	}
	
		//the user has admin rights
function reply_post($topicid){
         $this->load->library('form_validation');
		// field name, error message, validation rules
	
		$this->form_validation->set_rules('post_content', 'Post content', 'trim|required|min_length[4]|xss_clean');
           $data=array(   'post_content'=>$this->input->post('post_content'),
						  
						  'post_topic'=>$topicid,
						  'post_by'=>$this->session->userdata('username'));
				
						
		    $result=$this->db->insert('posts',$data);
		//the form has been posted, so save it
			if(!$result)
		{
			echo 'Your reply has not been saved, please try again later.';
		}
		else
		{
			//echo 'Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
			$this->load->view('admin_header');
		    $this->load->view('post_success');
		    $this->load->view('leo_footer');
		}
		
			
			

}
function reply_user($topicid){
         $this->load->library('form_validation');
		// field name, error message, validation rules
	
		$this->form_validation->set_rules('post_content', 'Post content', 'trim|required|min_length[4]|xss_clean');
           $data=array(   'post_content'=>$this->input->post('post_content'),
						  
						  'post_topic'=>$topicid,
						  'post_by'=>$this->session->userdata('username'));
				
						
		    $result=$this->db->insert('posts',$data);
		//the form has been posted, so save it
			if(!$result)
		{
			echo 'Your reply has not been saved, please try again later.';
		}
		else
		{
			//echo 'Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
			$this->load->view('user_header');
		    $this->load->view('user_success');
		    $this->load->view('leo_footer');
		}
		
			
			

}
}
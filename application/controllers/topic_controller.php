<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->model('topic',TRUE);
		$this->load->helper(array('form', 'url','html'));
	}
	
		//the user has admin rights
function load_topic(){
        
	
		$this->load->view('admin_header');
		//$result['result']=$this->topic->create_topic();
		$this->load->view('create_topic');
		$this->load->view('leo_footer');


}		
function create_topic(){
		$sql = "SELECT cat_name FROM categories";
		
		     $result=$this->db->query($sql);
			 $categories=$result->result_array();
			 $data['categories']=$categories;
			
	
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('topic_subject', 'Topic Subject', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('post_content', 'Post content', 'trim|required|min_length[4]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		
	
	{
		//the form hasn't been posted yet, display it
		 
		$this->load->view('admin_header');
		//$result['result']=$this->overview->display_category();
		$this->load->view('create_topic', $data);
		$this->load->view('leo_footer');
	}
	else{
			 
		$data=array(
			                   'topic_subject'=>$this->input->post('topic_subject'),
							   'topic_cat'=>$this->input->post('topic_cat_id'),
							   'topic_by'=>$this->session->userdata('username')
							   );
							   $this->db->insert('topics', $data);
							   $topicid=$this->db->insert_id();
						       
							
							  
							   //the first query worked, now start the second, posts query
				              //retrieve the id of the freshly created topic for usage in the posts query
				               			   			
										
		                       $data2=array('post_content'=>$this->input->post('post_content'),
							                 'post_topic'=>$topicid,
							                 'post_by'=>$this->session->userdata('username') );
			
		//the form has been posted, so save it
		
	        
	        $this->db->insert('posts', $data2);
	        
			$this->load->view('admin_header');
		    $this->load->view('top_success');
		    $this->load->view('leo_footer');
			}
			}
		
function get_id(){
	$category=$this->input->post('ct_id');
	$this->db->select('cat_id')
			->FROM('categories')
			->where('cat_name',$category);
	$query = $this->db->get();
	$result = $query->result();
	echo json_encode($result[0]);
	}
}
	
	
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('admin_header');
		$this->load->view('upload', array('error' => ' ' ));
		$this->load->view('leo_footer');
	}

	function do_upload()
	{
		$config['upload_path'] = './files/minutes/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|zip|rar';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin_header');
			$this->load->view('upload', $error);
			$this->load->view('leo_footer');
		}
		else
		{
			$finfo=$this->upload->data();
		    $data3=array('upload_data'=>$this->upload->data());
			$data2=array(
			'minute_date'=>$this->input->post('minute_date'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'userfile'=>$config['upload_path'].$finfo['raw_name'].$finfo['file_ext']);
			/*var_dump($data2);
			die();
			*/
			$this->db->insert('minutes',$data2);
			
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('admin_header');
			$this->load->view('upload_success', $data);
			$this->load->view('leo_footer');
		
		}
	}
	function download()
	{
	$sql="select * from minutes";
	$result=$this->db->query($sql);
	$data['file']=$result->result_array();

    $this->load->view('admin_header',$data);
    $this->load->view('minute_table',$data);
    $this->load->view('leo_footer',$data);

	}
	function user_download()
	{
	$sql="select * from minutes";
	$result=$this->db->query($sql);
	$data['file']=$result->result_array();

    $this->load->view('user_header',$data);
    $this->load->view('minute_table',$data);
    $this->load->view('leo_footer',$data);

	}
}
?>
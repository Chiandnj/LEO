<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->model('topic',TRUE);
		$this->load->helper(array('form', 'url','html'));
	}
	

public function member($page='profile2')
    {
    //$this->load->model('studentprofile');
    //$data['profiledetails']= $this->studentprofile->getProfile();
    //$data['title']='SSCVoting ';
    $this->load->view('admin_header');
    $this->load->view($page);
    $this->load->view('leo_footer');
    }
	public function user($page='profile3')
    {
    //$this->load->model('studentprofile');
    //$data['profiledetails']= $this->studentprofile->getProfile();
    //$data['title']='SSCVoting ';
    $this->load->view('user_header');
    $this->load->view($page);
    $this->load->view('leo_footer');
    }
	}
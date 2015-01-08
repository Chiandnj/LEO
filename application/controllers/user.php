<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view('registration_view',$data);
			$this->load->view('footer_view',$data);
		}
	}
	

	
	public function welcome()
	{
		$data['title']= 'Welcome';
		$this->load->view('header_view',$data);
		$this->load->view('welcome_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	/*public function login()
		{
    //This method will have the credentials validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean|');
    $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
	
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
   
	$this->index();
	
    }
	
	}
	  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');
    
    //query the database
    $result = $this->loginModel->login($username, $password);
    
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array('email' => $row->email,'password' => $row->password,'');
        $this->session->set_userdata($sess_array);
       
		$this->load->view('admin_dash');

      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
	


	public function thank()
	{
		$data['title']= 'login';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php',$data);
		$this->load->view('footer_view',$data);
		
		
	}
	*/
	public function registration()

	{
		
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('national_id', 'Identification', 'trim|alphanumeric|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('postal_address', 'Postal Address', 'trim|alphanumeric|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
		$this->form_validation->set_rules('occupation', 'Occupation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mobile_no', 'Location', 'trim|alphanumeric|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$result=$this->user_model->add_user();
			$this->load->view('login_view');
		} 
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
}
?>
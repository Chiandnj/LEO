<?php
class Login_controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('loginModel','',TRUE);
	}
	
	public function index($page='login_view')
	{
    //This method will have the credentials validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean|');
    $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
	
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
   
	$this->load->view('login_view');
	$this->load->view('footer_view');
	
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
        $sess_array = array('username' => $row->username,
		'role' => $row->role,
		'first_name' => $row->first_name,
		'last_name' =>$row->last_name,
		'email'=>$row->email,
		'avatar'=>$row->avatar,
		'mobile_no'=>$row->mobile_no,
		'user_id'=>$row->user_id);
        $this->session->set_userdata($sess_array); 
	$role =$this->session->userdata('role');
		
       if ($role==1)
	   {
	   $this->load->view('admin_header');
	   redirect('home_chart/index');
	   $this->load->view('leo_footer');
	   } 
	   else if($role==0)
	   {
	   $this->load->view('user_header');	
	   redirect('user_home/index');
	   $this->load->view('leo_footer');
	   
	   }
		
		/*redirect('user/thank');*/

      
      }
	  return TRUE;
	  
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
  function logout ()
  {
  $this->session->unset_userdata('username');
   $this->session->unset_userdata('email');
   	redirect('login_controller');
  }

   public function changepwd(){
$this->load->library('form_validation');
$this->form_validation->set_rules('opassword','Old Password','required|trim|xss_clean|callback_change');
$this->form_validation->set_rules('npassword','New Password','required|trim');
$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[npassword]');

if($this->form_validation->run()!= TRUE)
{
$this->load->view('admin_header');
$this->load->view('pass_view');
//$this->load->view('leo_footer');
}
}
public function change() // we will load models here to check with database
{
$sql = $this->db->select("*")->from("user")->where("email",$this->session->userdata('email'))->get();

foreach ($sql->result() as $my_info) {

$db_password = $my_info->password;
$db_id = $my_info->user_id;

}

if(md5($this->input->post("opassword")) == $db_password){

$fixed_pw = mysql_real_escape_string(md5($this->input->post("npassword")));
$update = $this->db->query("Update `user` SET `password`='$fixed_pw' WHERE `user_id`='$db_id'")or die(mysql_error());
$this->form_validation->set_message('change','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Password Updated!</strong></div>');
return false;

}else{
	$this->form_validation->set_message('change','<div class="alert alert-error"><a href="#"" class="close" data-dismiss="alert">&times;</a>
<strong>Wrong Old Password!</strong> </div>');

return false;
}


}
}
?>
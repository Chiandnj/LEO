<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	/*function login($email,$password)
    {
		$this->db->where("email",$email);
        $this->db->where("password",$password);
            
        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'user_id' 		=> $rows->id,
						'first_name'    =>$rows->firstname,
						'last_name'    =>$rows->lastname,
                    	'user_name' 	=> $rows->username,
						'national_id'   =>$rows->nationalid,
						'postal_address' =>$rows->postaladdress,
						'location' =>$rows->location,
						'mobile_no' =>$rows->mobileno,
		                'email'    => $rows->email,
		                'occupation'    => $rows->occupation,
		                'gender'    => $rows->gender,
		                'kin_fname'    => $rows->kinfname,
		                'kin_lname'    => $rows->kinlname,
		                'kin_id'    => $rows->kinid,
		                'kin_phone'    => $rows->kinphone,
		                'kin_email'    => $rows->kinemail,
		                'relation'    => $rows->relation,
		                'role'    => $rows->role,
		                'password'    => $rows->password,
		                'con_password'    => $rows->conpassword,
	                    'logged_in' 	=> TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }*/
	/*public function select_user($userid,$firstname,$lastname)
	{
	$this->db->select('user_id','firstname','lastname')
			 ->from('user')
			 ->where('username = ' . "'" . $username . "'")
			 ->where('password = ' . "'" . $password . "'")
			 -> limit(1);
	}
	*/
	public function add_user()
	{
		$data=array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'user_name'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email'),
			'national_id'=>$this->input->post('national_id'),
			'postal_address'=>$this->input->post('postal_address'),
			'location'=>$this->input->post('location'),
			'mobile_no'=>$this->input->post('mobile_no'),
			'occupation'=>$this->input->post('occupation'),
			'gender'=>$this->input->post('gender'),
			'kin_fname'=>$this->input->post('kin_fname'),
			'kin_lname'=>$this->input->post('kin_lname'),
			'kin_id'=>$this->input->post('kin_id'),
			'kin_phone'=>$this->input->post('kin_phone'),
			'kin_email'=>$this->input->post('kin_email'),
			'relation'=>$this->input->post('relation'),
			'role'=>$this->input->post('role'),
			'password'=>md5($this->input->post('password'))
			
			
			
			);
		$result= $this->db->insert('user',$data);
	}
	/*public function userData($username) 
{ 
$this->db->select('user_name'); 
$this->db->select('first_name'); 
$this->db->where('user_name', $username); 
$query = $this->db->get('user'); 
return $query->row(); 
}
*/
}
?>
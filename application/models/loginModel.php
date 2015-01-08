<?php
class LoginModel extends CI_model
{
	function login($username,$password)
	{
	$password = md5($password);
	$this->db->select('*')
			 ->from('user')
			 /*->where('firstname = ' . "'" . $firstname . "'")
			 ->where('lastname = ' . "'" . $lastname . "'")*/
			 ->where('username = ' . "'" . $username . "'")
			 ->where('password = ' . "'" . $password . "'")
			 -> limit(1);

	$query = $this->db->get();
	
	if($query->num_rows() ==1)
	{
	return $query->result();
	}
	else
	{
	/*echo $password;*/
		return false;
	}
	}
	
}
?>
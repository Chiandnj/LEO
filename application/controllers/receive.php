<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Receive extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
//query for users and banks dropdown   
function pay(){
$sql = "SELECT username FROM user";
$sql2 = "SELECT bank_name,account_no FROM bank_accounts";		
		     
			 $result=$this->db->query($sql);
			 $result2=$this->db->query($sql2);
			 $firstnames=$result->result_array();
			 $banks=$result2->result_array();
			 $data['firstnames']=$firstnames;
		     $data['banks']=$banks;
		
		    // var_dump($result);
			// die();
			 
			 
     
 $this->load->view('admin_header');
 $this->load->view('payment_view',$data);
 $this->load->view('leo_footer');
}
//query for selecting user_id to post in payments table
//AJAX function in leo_footer
function get_user($username){
	//$username=$this->input->post('ct_id');var_dump(); die();
	$this->db->select('user_id');
	$this->db->FROM('user');
	$this->db->where('username',$username);
	$query = $this->db->get();
	$result= $query->result();
	
	echo json_encode($result[0]);
	}
	
	function repay()

	{
	$sql = "SELECT username FROM user";
$sql2 = "SELECT bank_name,account_no FROM bank_accounts";		
		     
			 $result=$this->db->query($sql);
			 $result2=$this->db->query($sql2);
			 $firstnames=$result->result_array();
			 $banks=$result2->result_array();
			 $data['firstnames']=$firstnames;
		     $data['banks']=$banks;
	
	   
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('receive_amount', 'Amount' , 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_header');
			$this->load->view('payment_view',$data);
			$this->load->view('leo_footer');
		}
		else
		{
			$payment_from = $this->input->post('payment_from');
			$user=$this->input->post('user');
			$receive_bank= $this->input->post('receive_bank');
			$receive_date= $this->input->post('receive_date');
			$receive_amount= $this->input->post('receive_amount');
			$penalty= $this->input->post('penalty');
			$receive_method= $this->input->post('receive_method');
			$receive_description= $this->input->post('receive_description');
			$actual_amt = $receive_amount - $penalty  ;
			
			
			
			$data = 
			array(
			
			'payment_from'=> $payment_from,
			'user'=>$user,
			'receive_bank'=> $receive_bank,
			'receive_date'=> $receive_date,
			'receive_amount'=> $receive_amount,
			'actual_amt'=> $actual_amt,
			'penalty'=>$penalty,
			'receive_method'=> $receive_method,
			'receive_description'=> $receive_description,
			
			
			
			
			);
						
			//$result= $this->db->insert('payments',$data);

			//$this->db->insert('user', $data);
			if($this->db->insert('payments',$data))
			{
		   
		    //"<div class='alert alert-info'><button class='close' data-dismiss='alert'>&time;</button><strong>Success!</strong></div>";
		  
		   
										
			$this->load->view('admin_header');
            $this->load->view('payments_success');
            $this->load->view('leo_footer');					
				}						
			
		
	    
		
}

    
	
}
function payment_table()
{
$sql="select * from payments";
$sql2="select sum(receive_amount) as total from payments";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}



$data['pay']=$result->result_array();


$this->load->view('payment_table',$data);


}

}

?>
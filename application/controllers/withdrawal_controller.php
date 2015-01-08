<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Withdrawal_controller extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function load_withdrawal(){
$sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
  $this->load->view('admin_header');
   $this->load->view('withdrawal_view',$data);
   $this->load->view('leo_footer');

}
	
	function add_withdrawal()
	{
	$sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
	
	   
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('withdrawal_bank', 'Bank Account' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('withdrawal_amount', 'Withdrawal Amount', 'trim|required|xss_clean');
		$this->form_validation->set_rules('withdrawal_reason', 'Reason', 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_header');
			$this->load->view('withdrawal_view',$data);
			$this->load->view('leo_footer');
		}
		else
		{
			$data = 
						array(
			'withdrawal_bank'=> $this->input->post('withdrawal_bank'),
			'withdrawal_amount'=> $this->input->post('withdrawal_amount'),
			'withdrawal_reason'=> $this->input->post('withdrawal_reason'),
			'withdrawal_date'=> $this->input->post('withdrawal_date'),
			
			
			
			
			
			);
						
			//$result= $this->db->insert('deposits',$data);

			//$this->db->insert('user', $data);
			if($this->db->insert('withdrawals',$data))
			{
		  
		   
										
			$this->load->view('admin_header');
            $this->load->view('withdrawal_success');
            $this->load->view('leo_footer');				
				}
		
		
		/*function select_user()
		{
		$sql="SELECT firstname from user";
		$result=$this->db->query($sql);
		$firstnames=$result->result_array();
		$data['firstname']=$firstname;
		
		$this->load->view($receive_payment,$data);
	}*/
	
		
}
}
function withdraw_tab()
{
$sql="select * from withdrawals";
$sql2="select sum(withdrawal_amount) as total from withdrawals";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}
$data['withdrawal']=$result->result_array();

$this->load->view('admin_header');
$this->load->view('withdraw_table',$data);
$this->load->view('leo_footer');
}				
	
}



?>
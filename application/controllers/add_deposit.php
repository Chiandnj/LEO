<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_deposit extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function load_deposit(){
$sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;	
   $this->load->view('admin_header');
   $this->load->view('deposit_view',$data);
   $this->load->view('leo_footer');

}
	
	function deposit()
	{
	$sql = "SELECT bank_name,account_no FROM bank_accounts";
   $result=$this->db->query($sql);
   $banks=$result->result_array();
   $data['banks']=$banks;	
	
	   
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('deposited_by', 'Depositor' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('deposit_amount', 'Amount', 'trim|required|xss_clean');
		
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_header');
   $this->load->view('deposit_view',$data);
   $this->load->view('leo_footer');
		}
		else
		{
			$data = 
						array(
			'deposit_bank'=> $this->input->post('deposit_bank'),
			
			'deposited_by'=> $this->input->post('deposited_by'),
			'deposit_date'=> $this->input->post('deposit_date'),
			'deposit_amount'=> $this->input->post('deposit_amount'),
			
			
			
			
			);
						
			//$result= $this->db->insert('deposits',$data);

			//$this->db->insert('user', $data);
			if($this->db->insert('deposits',$data))
			{
		   	
		  
		  
		   
										
			$this->load->view('admin_header');
            $this->load->view('deposit_success');
            $this->load->view('leo_footer');					
				}
		
		
		
	
		
}
}
function table()
{
$sql="select * from deposits";
$sql2="select sum(deposit_amount) as total from deposits";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}



$data['depo']=$result->result_array();

//$this->load->view('admin_header',$data);
$this->load->view('deposit_table',$data);
//$this->load->view('leo_footer',$data);

}
function dash_table()
{
$sql="select * from deposits";
$sql2="select sum(deposit_amount) as total from deposits";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}



$data['depo']=$result->result_array();

$this->load->view('admin_header',$data);
$this->load->view('admin_dash',$data);
$this->load->view('leo_footer',$data);

}
function dt(){
$this->load->view('dt');
}				
	
}



?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Expense_controller extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function load_expense(){
   $sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
  $this->load->view('admin_header');
   $this->load->view('expense_view',$data);
   $this->load->view('leo_footer');

}
	
	function add_expense()
	{
	   $sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
	   
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('expense_ref', 'Asset Reference' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('expense_amount', 'Amount', 'trim|required|xss_clean');
		$this->form_validation->set_rules('expense_bank', 'Bank', 'trim|required|xss_clean');
		$this->form_validation->set_rules('expense_description', 'Description', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_header');
			$this->load->view('expense_view',$data);
			 $this->load->view('leo_footer');
		}
		else
		{
			$data = 
						array(
			'expense_ref'=> $this->input->post('expense_ref'),
			'expense_amount'=> $this->input->post('expense_amount'),
			'expense_bank'=> $this->input->post('expense_bank'),
			'expense_description'=> $this->input->post('expense_description'),
			'expense_date'=> $this->input->post('expense_date'),
			
			
			
			
			);
						
			//$result= $this->db->insert('deposits',$data);

			//$this->db->insert('user', $data);
			if($this->db->insert('expenses',$data))
			{
		   	
		  
		   //echo "<div class='alert alert-info'><button class='close' data-dismiss='alert'>&time;</button><strong>Success!</strong></div>";
		   
										
			$this->load->view('admin_header');
            $this->load->view('expense_success');
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
function expense_tab()
{
$sql="select * from expenses";
$sql2="select sum(expense_amount) as total from expenses";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}



$data['expense']=$result->result_array();

$this->load->view('admin_header',$data);
$this->load->view('expense_table',$data);
$this->load->view('leo_footer',$data);

}				
	
}



?>
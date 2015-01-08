<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asset_controller extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function load_asset(){
   $sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
  $this->load->view('admin_header');
   $this->load->view('add_asset',$data);
   $this->load->view('leo_footer');


}
	
	function add_asset()
	{
	
	   $sql = "SELECT bank_name,account_no FROM bank_accounts";
$result=$this->db->query($sql);
$banks=$result->result_array();
$data['banks']=$banks;
	 //This method will have the credentials validation
		

		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('asset_ref', 'Asset Reference' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('asset_value', 'Value', 'trim|required|xss_clean');
		$this->form_validation->set_rules('asset_bank', 'Bank', 'trim|required|xss_clean');
		$this->form_validation->set_rules('asset_description', 'Description', 'trim|required|xss_clean');
		
		
		if ($this->form_validation->run() == FALSE)
		{ $this->load->view('admin_header');
			$this->load->view('add_asset',$data);
			 $this->load->view('leo_footer');
		}
		else
		{
			$data = 
						array(
			'asset_ref'=> $this->input->post('asset_ref'),
			'asset_value'=> $this->input->post('asset_value'),
			'asset_bank'=> $this->input->post('asset_bank'),
			'asset_date'=> $this->input->post('asset_date'),
			'asset_description'=> $this->input->post('asset_description'),
			
			
			
			
			
			);
						
			//$result= $this->db->insert('deposits',$data);

			//$this->db->insert('user', $data);
			if($this->db->insert('assets',$data))
			{
		  
									
   $this->load->view('admin_header');
   $this->load->view('asset_success');
   $this->load->view('leo_footer');
}
	}
		
		/*function select_user()
		{
		$sql="SELECT firstname from user";
		$result=$this->db->query($sql);
		$firstnames=$result->result_array();
		$data['firstname']=$firstname;
		
		$this->load->view($receive_payment,$data);
	}*/
	
		
//}
}
function asset_tab()
{
$sql="select * from assets";
$sql2="select sum(asset_value) as total from assets";
$result=$this->db->query($sql);
$result2=$this->db->query($sql2);
$result2 = $result2->result_array();
$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}



$data['asset']=$result->result_array();

$this->load->view('admin_header',$data);
$this->load->view('asset_table',$data);
$this->load->view('leo_footer',$data);

}				
	
}



?>
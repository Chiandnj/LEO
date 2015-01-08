<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_report extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function user_repo() {
$sess=$this->session->userdata('user_id');
	
	$this->db->select ('receive_date,receive_amount,receive_bank,receive_method,receive_description')
			->from('payments')
	        ->where ('user',$this->session->userdata('user_id'));
	$query=$this->db->get();
	$result=$query->result_array();
	$this->db->select('sum(receive_amount) as total')
	         ->from('payments')
			 ->where('user',$sess);
    $query=$this->db->get();
    //$sql2="select sum(receive_amount) as total from payments where ('user',$sess)";
	//$result2=$this->db->query($sql2);
	$result2 = $query->result_array();
	//$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}
	$data['payments']=$result;
	
	//$total=0;
	$data = "";
	$fname=$this->session->userdata('first_name');
	$lname=$this->session->userdata('last_name');
	
$data .= "<div class='span9' id='content'>
                      <!-- morris stacked chart -->
                    <div class='row-fluid'>
                        
                        <!-- /block -->
                    </div>
					  <div class='row-fluid'>
                        <!-- block -->
                        <div class='block'>
						
                            <div class='navbar navbar-inner block-header'>
                                <div class='row-fluid'>";
    $data.="</div>
   <h3 style='text-align:center;'>Leo Venturi Investments</h3>
								<h5 style='text-align:center;'>Payments Report as at:" . date('Y-m-d')." </h5>
								<h6 style='text-align:center;'>".$fname."&nbsp;".$lname."</h6>";
								
								
								
								 $data .= "<style>
						table.data-table 
						{
							table-layout: relative;
							width: 700px;
							border-collapse:collapse;
							border:1px solid black;
							margin-left:100px;
						}
						table.data-table td, th 
						{
							width: 50px;
							border: 1px solid black;
						}
						.leftie{
							text-align: left !important;
						}
						.right{
							text-align: right !important;
						}
						.center{
							text-align: center !important;
						}
					</style>
					";
					$data .= "<table class='data-table'>";
  									
										$data .= "<thead>
											<tr>
												<th>Date</th>
												<th>Bank</th>
												<th>Payment Method</th>
												<th>Description</th>
												<th>Amount</th>
											
											</tr>
										</thead>
										<tbody>";
			
			foreach ($result as $row){
				$data .= "<tr class='odd gradeX'>
												<td>".$row ['receive_date']."</td>
												<td>".$row['receive_bank']."</td>
												<td>".$row ['receive_method']."</td>	
												<td>".$row['receive_description']."</td>
												<td>".$row['receive_amount']."</td>";
										
						$data .="</tr>";				
						
							}
							$data .= "<tr class='odd gradeX'>
												<td colspan='4'><strong>Total</strong></td>
												<td> ".$result2[0]['total']."</td>
											</tr>";
					
                   														
						$data .="</tbody>
									</table>
                            
							</div>
							<h6 style='text-align:center;'>&copy; Leo Venturi Investments 2014</h6>
							 
							
							 </div>
							  </div>
							   </div>";					



		$this -> load -> library('mpdf');
		$this->load->helper('file');
		$this -> mpdf = new mPDF('', 'A4-L',0,"",40,15,16,16,9,9,"");
		$this -> mpdf -> SetTitle('Deposits Report');
		$this -> mpdf-> use_kwt = true;
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($data);
		$this -> mpdf -> Output($report_name, 'I');
		exit;
		
		
	}
	function user_r()
{

$sess=$this->session->userdata('user_id');
	
	$this->db->select ('receive_date,receive_amount,receive_bank,receive_method,receive_description')
			->from('payments')
	        ->where ('user',$this->session->userdata('user_id'));
	$query=$this->db->get();
	$result=$query->result_array();
	$this->db->select('sum(receive_amount) as total')
	         ->from('payments')
			 ->where('user',$sess);
    $query=$this->db->get();
    //$sql2="select sum(receive_amount) as total from payments where ('user',$sess)";
	//$result2=$this->db->query($sql2);
	$result2 = $query->result_array();
	//$total=0;

foreach($result2 as $row){
	
	$data['total'] = $row['total'];
	
}
	$data['payments']=$result;
	$this->load->view('user_header');
    $this->load->view('user_rep',$data);
    

}
	}



?>
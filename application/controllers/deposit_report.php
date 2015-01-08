<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deposit_report extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function dep_repo() {
	
   $sql="select * from deposits";
   $sql2="select sum(deposit_amount) as total from deposits";
   $result=$this->db->query($sql);
   $result2=$this->db->query($sql2);
   $depo=$result->result_array();
   $total=$result2->result_array();
   //$total = mysql_fetch_assoc($result2);
   //print_r($total[0]['total']);
   //exit;
	
	$data = "";
	
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
   <h5 style='text-align:center;'>Deposits Report as at:" . date('Y-m-d')." </h5>
								";
								
								
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
												<th>Paid in by</th>
												<th>Bank/Account.No</th>
												<th>Amount</th>
											
											</tr>
										</thead>
										<tbody>";
			
			foreach ($depo as $row){
				$data .= "<tr class='odd gradeX'>
												<td>".$row ['deposit_date']."</td>
												<td>".$row['deposited_by']."</td>
												<td>".$row ['deposit_bank']."</td>	
												<td>".$row['deposit_amount']."</td>";
										
						$data .="</tr>";				
						
							}
							$data .= "<tr class='odd gradeX'>
												<td colspan='3'><strong>Total</strong></td>
												<td> ".$total[0]['total']."</td>
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
	function depo_r()
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

$this->load->view('admin_header');
$this->load->view('deposit_rep',$data);

}
	}



?>
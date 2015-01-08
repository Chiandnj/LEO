<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deposit_report extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  
function dep_repo() 
	{
	$sql="select * from risk_valuation";
	$result=$this->db->query($sql);
	$vall = $result->result_array();
	
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
								<h5 style='text-align:center;'>Payment Report</h5>";
								
								
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
			
			foreach ($vall as $row){
				$data .= "<tr class='odd gradeX'>
												<td> <?php echo $row ['deposit_date'];?></td>
												<td><?php echo $row['deposited_by'];?></td>
												<td><?php echo $row ['deposit_bank'];?></td>
												<td> <?php echo $row['deposit_amount'];?></td>";
										
						$data .="</tr>";				
						
							}
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
		$this -> mpdf -> Output($report_name, 'D');
		exit;
		
		
	}
	}



?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Regforms extends CI_Controller

{

 function __construct()
  {
    parent::__construct();
	$this->load->helper(array('form', 'url','html'));
  }
  

	function reg()
	{
	
	 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		$this->form_validation->set_rules('id', 'ID' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('fullname', 'Fullname' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[con_password]|md5');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required');
		$this->form_validation->set_rules('usertype', 'Usertype' , 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users');
		}
		else
		{*/
			$data = array(
							
							'ID' => $this->input->post('id'),
							'Fullname' => $this->input->post('fullname'),
							'Username' => $this->input->post('username'),
							'Password' =>md5($this->input->post('password')),
							'UserType' => $this->input->post('usertype')		
						);
						
			$this->db->insert('users', $data);
			$this->load->view('user_registration');
		    //echo "Entry successfully";
			
		}
		function apl()
		{
		 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('name', 'Name' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nationality', 'Nationality', 'trim|required|xss_clean');
		$this->form_validation->set_rules('idpass', ' Id No.', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rim', 'Rim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('dob', 'Dob', 'trim|required|xss_clean');		
		$this->form_validation->set_rules('dapl', 'Dapl', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ownwership', 'Ownership' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('lrno', 'LRno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('county', 'County', 'trim|required|xss_clean');
		$this->form_validation->set_rules('purpose', ' Purpose', 'trim|required|xss_clean');
		$this->form_validation->set_rules('total', 'Total', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lrnos', 'LRnos', 'trim|required|xss_clean');
		$this->form_validation->set_rules('size', 'Size', 'trim|required|xss_clean');
		$this->form_validation->set_rules('livestock', 'Livestock', 'trim|required|xss_clean');
		$this->form_validation->set_rules('machinery', 'Machinery', 'trim|required|xss_clean');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('appl');
		}
		else
		{*/
			                 $data=array(
							'Name' => $this->input->post('name'),
							'Address' => $this->input->post('address'),
							'Nationality' => $this->input->post('nationality'),
							'Idpass' => $this->input->post('idpass'),
							'RIM' => $this->input->post('rim'),
							'Dob' => $this->input->post('dob'),
							'dapl' => $this->input->post('dapl'),
							'Ownership' => $this->input->post('ownership'),
							'LRno' => $this->input->post('lrno'),
							'County' => $this->input->post('county'),
							'Purpose' => $this->input->post('purpose'),
							'Total' => $this->input->post('total'),
							'LRnos' => $this->input->post('lrnos'),
							'Size' => $this->input->post('size'),
							'Livestock' => $this->input->post('livestock'),
							'Machinery' => $this->input->post('machinery')
						);
			$this->db->insert('loan_application', $data);
			$this->load->view('appl');
		    //echo "Entry successfully";
		}
		
		function risk()
		{
		 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		
		$this->form_validation->set_rules('rim', 'Rim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Names' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('lamount', 'lamount', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pav', 'pav', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ltv', ' ltv', 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('appl');
		}
		else
		{*/
			$data = array(
							
							'rim' => $this->input->post('rim'),
							'name' => $this->input->post('cname'),
							'lamount' => $this->input->post('ctotal'),
							'pav' => $this->input->post('pav'),
							'ltv' => $this->input->post('ltv')
							
						);
						
			$this->db->insert('risk_valuation', $data);
			redirect (menu/rs);
		    //echo "Entry successfully";
		}
		function status()
		{
		 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		
		$this->form_validation->set_rules('rim', 'Rim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Names' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('lamount', 'lamount', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pav', 'pav', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ltv', ' ltv', 'trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('status', ' status', 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('appl');
		}
		else
		{*/
			$data = array(
							
							'rim' => $this->input->post('rim'),
							'name' => $this->input->post('cname'),
							'lamount' => $this->input->post('ctotal'),
							'pav' => $this->input->post('pav'),
							'ltv' => $this->input->post('ltv'),
							'date' => $this->input->post('date'),
							'status' => $this->input->post('status'),
							'comment' => $this->input->post('comment')
							
							
						);
						
			$this->db->insert('application_status', $data);
			redirect (menu/st);
		    //echo "Entry successfully";
		}
		function asn()
		{
		 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		
		$this->form_validation->set_rules('name', 'Names' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('rim', 'Rim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('clname', 'Client Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('address', ' Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|xss_clean');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('appl');
		}
		else
		{*/
			$data = array(
							
							'name' => $this->input->post('fullname'),
							'rim' => $this->input->post('rim'),
							'clname' => $this->input->post('clname'),
							'address' => $this->input->post('address'),
							'contact' => $this->input->post('contact')
							
						);
						
			$this->db->insert('field_assignment', $data);
			redirect(menu/get_asng);
		    
		}
		function fld()
		{
		 //This method will have the credentials validation
		

	/*	$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('rim', 'Rim' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean');
		$this->form_validation->set_rules('idproperty', 'idproperty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('descproperty', 'descproperty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('loanpurpose', 'loanpurpose' , 'trim|required|xss_clean');
		$this->form_validation->set_rules('assumptions', 'assumptions', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lconditions', 'lconditions', 'trim|required|xss_clean');
		$this->form_validation->set_rules('purpose', ' Purpose', 'trim|required|xss_clean');
		$this->form_validation->set_rules('procedures', 'procedures', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pav', 'pav', 'trim|required|xss_clean');
		$this->form_validation->set_rules('relationship', 'relationship', 'trim|required|xss_clean');
		$this->form_validation->set_rules('opinion', 'opinion', 'trim|required|xss_clean');
		$this->form_validation->set_rules('documentation', 'documentation', 'trim|required|xss_clean');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('appl');
		}
		else
		{*/
			$data = array(
							
							'rim' => $this->input->post('rim'),
							'name' => $this->input->post('name'),
							'date' => $this->input->post('date'),
							'branch' => $this->input->post('branch'),
							'idproperty' => $this->input->post('idproperty'),
							'descproperty' => $this->input->post('descproperty'),
							'loanpurpose' => $this->input->post('loanpurpose'),
							'assumptions' => $this->input->post('assumptions'),
							'lconditions' => $this->input->post('lconditions'),
							'procedures' => $this->input->post('procedures'),
							'pav' => $this->input->post('pav'),
							'relationship' => $this->input->post('relationship'),
							'opinion' => $this->input->post('opinion'),
							'documentation' => $this->input->post('documentation')
							
						);
						
			$this->db->insert('loan_appraisal', $data);
			$this->load->view('appl');
		    //echo "Entry successfully";
		}
		
		function valuation_v()
{
$sql="select * from risk_valuation";
$result=$this->db->query($sql);
$data['vl']=$result->result_array();
$this->load->view('valuation_table',$data);

}	
function field_v()
{
$ses= $this->session->userdata('Fullname');
$this->db->select('*')
		 ->From('field_assignment')
		 ->where('name',$ses);
$query = $this->db->get();
$result=$query->result_array();
$data['fas']=$result;
$this->load->view('field_table',$data);

}	

function home_v()
{
$sql="select * from field_assignment";
$result=$this->db->query($sql);
$data['fas']=$result->result_array();
$this->load->view('home',$data);

}	
function appraisals_v()
{
$sql="select * from loan_appraisal";
$result=$this->db->query($sql);
$data['apr']=$result->result_array();
$this->load->view('aprs_report',$data);

}	
function valuation_r()
{
$sql="select * from risk_valuation";
$result=$this->db->query($sql);
$data['vall']=$result->result_array();
$this->load->view('valuation_report',$data);

}	
function status_r()
{
$sql="select rim, name, date, status from application_status";
$result=$this->db->query($sql);
$data['stt']=$result->result_array();
$this->load->view('status_report',$data);

}	
function valuation_report() 
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
    $data.="<div class='span12 pagination-centered'><img src='".base_url()."assets/images/afc.jpg' alt='header' style='position:fixed; margin-left:400px; width:96px; height:100px; top:0px; left:100px;'/>
    </div></div>
    <h3 style='text-align:center;'>Loan Valuation Summary Report</h3>
								<h5 style='text-align:center;'>Reporting Period from:  to: </h5>";
								
								
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
												<th>RIM</th>
												<th>Client Name</th>
												<th>Loan Amount</th>
												<th>PAV</th>
												<th>LTV</th>
											
											</tr>
										</thead>
										<tbody>";
			
			foreach ($vall as $row){
				$data .= "<tr class='odd gradeX'>
							<td> ".$row ['rim']."</td>
							<td>".$row['name']."</td>
							<td>".$row ['lamount']."</td>
							<td>".$row ['pav']."</td>
							<td>".$row['ltv']."</td>";
										
						$data .="</tr>";				
						
							}
						$data .="</tbody>
									</table>
                            
							</div>
							<h6 style='text-align:center;'>Agricultural Finance Corporation</h6>
							<h6 style='text-align:center;'>Head Office Development House, Moi Avenue Nairobi</h6>
							
					
							<h6 style='text-align:center;'>Telephone:+254-020-317199/ 3272000 </h6>
							<h6 style='text-align:center;'> Email:info@agrifinance.org</h6>
							 
							
							 </div>
							  </div>
							   </div>";					



		$this -> load -> library('mpdf');
		$this->load->helper('file');
		$this -> mpdf = new mPDF('', 'A4-L',0,"",40,15,16,16,9,9,"");
		$this -> mpdf -> SetTitle('Loan Summary');
		$this -> mpdf-> use_kwt = true;
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($data);
		$this -> mpdf -> Output($report_name, 'D');
		exit;
		$report_name = "Loan Summary";
		$path = $_SERVER["DOCUMENT_ROOT"];
		$handler = $path . "/codeig/application/controller/regforms/generatePDF/" . $report_name;
		write_file($handler,$this -> mpdf -> Output($report_name, 'D'));
		
		
	}	
	
function appraisal_report() 
	{
	$sql="select * from loan_appraisal";
	$result=$this->db->query($sql);
	$apr = $result->result_array();
	
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
    $data.="<div class='span12 pagination-centered'><img src='".base_url()."assets/images/afc.jpg' alt='header' style='position:fixed; margin-left:400px; width:96px; height:100px; top:0px; left:100px;'/>
    </div></div>
    <h3 style='text-align:center;'>Loan Appraisal Summary Report</h3>
								<h5 style='text-align:center;'>Reporting Period from:  to: </h5>";
								
								
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
												<th>RIM</th>
												<th>Client Name</th>
												<th>Date</th>
												<th>Branch</th>
												<th>Property</th>
												<th>Pav</th>
											
											
											</tr>
										</thead>
										<tbody>";
			
			foreach ($apr as $row){
				$data .= "<tr class='odd gradeX'>
							<td> ".$row ['RIM']."</td>
							<td>".$row['Name']."</td>
							<td>".$row ['Date']."</td>
							<td>".$row ['Branch']."</td>
							<td>".$row['idproperty']."</td>
							<td>".$row['pav']."</td>";			
						$data .="</tr>";				
						
							}
						$data .="</tbody>
									</table>
                            
							</div>
							<h6 style='text-align:center;'>Agricultural Finance Corporation</h6>
							<h6 style='text-align:center;'>Head Office Development House, Moi Avenue Nairobi</h6>
							
					
							<h6 style='text-align:center;'>Telephone:+254-020-317199/ 3272000 </h6>
							<h6 style='text-align:center;'> Email:info@agrifinance.org</h6>
							 
							
							 </div>
							  </div>
							   </div>";					



		$this -> load -> library('mpdf');
		$this->load->helper('file');
		$this -> mpdf = new mPDF('', 'A4-L',0,"",40,15,16,16,9,9,"");
		$this -> mpdf -> SetTitle('Loan Summary');
		$this -> mpdf-> use_kwt = true;
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($data);
		$this -> mpdf -> Output($report_name, 'D');
		exit;
		$report_name = "Loan Summary";
		$path = $_SERVER["DOCUMENT_ROOT"];
		$handler = $path . "/codeig/application/controller/regforms/generatePDF/" . $report_name;
		write_file($handler,$this -> mpdf -> Output($report_name, 'D'));
		
		
	}	
function status_report() 
	{
	$sql="select rim, name, date, status from application_status";
	$result=$this->db->query($sql);
	$stt = $result->result_array();
	
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
    $data.="<div class='span12 pagination-centered'><img src='".base_url()."assets/images/afc.jpg' alt='header' style='position:fixed; margin-left:400px; width:96px; height:100px; top:0px; left:100px;'/>
    </div></div>
    <h3 style='text-align:center;'>Loan Status Summary Report</h3>
								<h5 style='text-align:center;'>Reporting Period from:  to: </h5>";
								
								
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
												<th>RIM</th>
												<th>Client Name</th>
												<th>Date</th>
												<th>Status</th>
											
											
											</tr>
										</thead>
										<tbody>";
			
			foreach ($stt as $row){
				$data .= "<tr class='odd gradeX'>
							<td> ".$row ['rim']."</td>
							<td>".$row['name']."</td>
							<td>".$row ['date']."</td>
							<td>".$row ['status']."</td>";			
						$data .="</tr>";				
						
							}
						$data .="</tbody>
									</table>
                            
							</div>
							<h6 style='text-align:center;'>Agricultural Finance Corporation</h6>
							<h6 style='text-align:center;'>Head Office Development House, Moi Avenue Nairobi</h6>
							
					
							<h6 style='text-align:center;'>Telephone:+254-020-317199/ 3272000 </h6>
							<h6 style='text-align:center;'> Email:info@agrifinance.org</h6>
							 
							
							 </div>
							  </div>
							   </div>";					



		$this -> load -> library('mpdf');
		$this->load->helper('file');
		$this -> mpdf = new mPDF('', 'A4-L',0,"",40,15,16,16,9,9,"");
		$this -> mpdf -> SetTitle('Loan Summary');
		$this -> mpdf-> use_kwt = true;
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($data);
		$this -> mpdf -> Output($report_name, 'D');
		exit;
		$report_name = "Loan Summary";
		$path = $_SERVER["DOCUMENT_ROOT"];
		$handler = $path . "/codeig/application/controller/regforms/generatePDF/" . $report_name;
		write_file($handler,$this -> mpdf -> Output($report_name, 'D'));
		
		
	}				
				
			
		
		
}



?>
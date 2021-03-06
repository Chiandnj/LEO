<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lipa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		
		include_once('OAuth.php');
		
        
    } 



function load_pesa(){
$this->load->view('user_header');
$this->load->view('member_subscription');
$this->load->view('leo_footer');

}
function pesa (){

	//pesapal params
$token = $params = NULL;

/*
PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and 
when you are ready to go live change to https://www.pesapal.com.
*/
$consumer_key = 'QMwqe2wd/7eHBfq0xmyebi3cmFQOCFJZ';//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
$consumer_secret = 'olmzHjlxEjCVw6ysIJaIQm7DGoU=';// Use the secret from your test
                   //account on demo.pesapal.com. When you are ready to go live make sure you 
                   //change the secret to the live account registered on www.pesapal.com!
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'http://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to      
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//get form details
$this->load->view('pesa_header');

$amount = $_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places

$desc = $_POST['description'];
$type = $_POST['type']; //default value = MERCHANT
$reference = $_POST['reference'];//unique order id of the transaction, generated by merchant
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phonenumber = '';//ONE of email or phonenumber is required
$callback= base_url().'index.php/lipa_success/load_success';

$callback_url = $callback;  //callback url the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//$this->load->view('admin_header');




//display pesapal - iframe and pass iframe_src
?><?php
if(!$this->session->userdata('username')){
redirect ('login_controller/logout');
}
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
	<meta charset="utf-8">
        <title>Leo Venturi Investments Management System</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/assets/styles.css" rel="stylesheet" media="screen">
	
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Leo Venturi Investments Management System</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>  <?php echo $this->session->userdata('username');?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><?=anchor('profile/user','<i class="icon-eye-open"></i>Profile');?></li>
                                    
									<li class="divider"></li>
                                    <li><?=anchor('login_controller/logout','<i class="icon-share-alt"></i> Logout');?></li>
									
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active"><?=anchor('user_home/index','<i class="icon-home"></i>Dashboard');?></li>
						<li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-calendar"></i>Monthly Subscription<b class="caret"></b> 
							
							</a>
							  <ul class="dropdown-menu" >
								
								<li><?=anchor('lipa/load_pesa','<i class="icon-folder-open"></i>Pay Subscription');?></li>
								<li><?=anchor('lipa/user_payments','<i class="icon-list"></i>View Payment History');?></li>
								
                        </li>
						</ul>
                        
                       
                        
                        
                         <li class="dropdown">
                            <a href="#"data-toggle="dropdown" class="dropdown-toggle"><i class="icon-comment"></i> Forum <b class="caret"></b></a>
							<ul class="dropdown-menu" >
							<li> <?=anchor('overview_controller/show_user','<i class="icon-inbox"></i>Forum Overview');?></li>
							</ul>
							
                        </li>
						
						<li> <?=anchor('user_report/user_r','<i class="icon-tasks"></i>Reports');?></li>
						<li> <?=anchor('upload/user_download','<i class="icon-hdd"></i>Minutes Repository');?></li>
						
						
						
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                   
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <?=anchor('user_home/index','Dashboard');?> <span class="divider">/</span>	
	                                    </li>
	                                    
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                   
                    
<iframe src="<?php echo $iframe_src;?>"<div class="block"width="100%" height="700px"  scrolling="no" frameBorder="0"></div><p>Browser unable to load iFrame</p></iframe>
<hr>
            <footer>
                <p>&copy; Leo Venturi Investments 2014</p> 
				
            </footer>	
<?php
}
function user_payments(){
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
    $this->load->view('user_payments',$data);
    $this->load->view('leo_footer');
	}
}
?>
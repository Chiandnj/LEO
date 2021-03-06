<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesapal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		
		include_once('OAuth.php');
		
        
    } 



function load_pesa(){
$this->load->view('admin_header');
$this->load->view('pay_subscription');
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
$callback= base_url().'index.php/pay_success/load_success';

$callback_url = $callback;  //callback url the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);


//$this->load->view('leo_footer');



//display pesapal - iframe and pass iframe_src
?>
<?php
if(!$this->session->userdata('username')){
redirect ('login_controller/logout');
}
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Leo Venturi Investments Management System</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        <link href="<?php echo base_url()?>assets/assets/styles.css" rel="stylesheet" media="screen">
        
        <link href="<?php echo base_url()?>assets/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
        <script src="<?php echo base_url()?>assets/bootstrap/js/site.js"></script>
        	
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $this->session->userdata('username');?> <i class="caret"></i>

                                </a>
                                
								<ul class="dropdown-menu">
                                    <li><?=anchor('profile/member','<i class="icon-eye-open"></i>Profile');?></li>
                                    
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
                         <li class="active"><?=anchor('home_chart/index','<i class="icon-home"></i>Dashboard');?></li>
				
                
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Members<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							<li><?=anchor('adminreg/load_reg','<i class="icon-plus"></i>Register Member');?></li>
							<li><?=anchor('member_crud/application_member','<i class="icon-list"></i>View Member List');?></li>
							
                                   
                                    
                                   
                                </ul>
                        </li>
                        
						<li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-briefcase"></i> Payments<b class="caret"></b> 
							
							</a>
							  <ul class="dropdown-menu" >
							  <li><?=anchor('receive/pay','<i class="icon-download-alt"></i>Receive Payment');?></li>
							  <li><?=anchor('payment_crud/application_pay','<i class="icon-list"></i>View Payment History');?></li>
							  
							  </ul>
						
								
								
								
	
                        </li>
							<li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-calendar"></i>Monthly Subscriptions<b class="caret"></b> 
							
							</a>
							  <ul class="dropdown-menu" >
								<li><?=anchor('pesapal/load_pesa','<i class="icon-folder-open"></i>Pay Subscription');?></li>
								
								
								
								</ul>
                        </li>
						
                        <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-lock"></i> Bank Accounts <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" >
								<li><?=anchor('bank/load_bank','<i class="icon-plus-sign"></i>Add Bank Account');?></li>
                                <li><?=anchor('bank_crud/application_bank','<i class="icon-list"></i>List Bank Accounts');?></li>
								<li> <?=anchor('add_deposit/load_deposit','<i class="icon-plus"></i>Deposit Money');?> </li>
								<li><?=anchor('add_deposit/table','<i class="icon-list-alt"></i>View Deposits');?></li>
								<li> <?=anchor('withdrawal_controller/load_withdrawal','<i class="icon-share-alt"></i>Withdraw Money');?> </li>
								<li><?=anchor('withdrawal_controller/withdraw_tab','<i class="icon-list-alt"></i>View Withdrawals');?></li>
								
							
								
								</ul>
                        </li>
                       <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-plus-sign"></i> Assets <b class="caret"></b>

                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('asset_controller/load_asset','<i class="icon-plus"></i>Add Asset');?> </li>
								<li> <?=anchor('asset_controller/asset_tab','<i class="icon-list-alt"></i>View Assets');?> </li>
								
								
								</ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-minus-sign"></i> Expenses <b class="caret"></b>
                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('expense_controller/load_expense','<i class="icon-plus"></i>Add Expense');?> </li>
								<li> <?=anchor('expense_controller/expense_tab','<i class="icon-list-alt"></i>Expenditure History');?> </li>
								<li> <?=anchor('expense_crud/application_expense','<i class="icon-pencil"></i>Edit Expenses');?> </li>
								
								</ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#"data-toggle="dropdown" class="dropdown-toggle"><i class="icon-comment"></i> Forum <b class="caret"></b></a>
							<ul class="dropdown-menu" >
							<li> <?=anchor('overview_controller/show_cat','<i class="icon-inbox"></i>Forum Overview');?></li>
							<li> <?=anchor('category_controller/create_category','<i class="icon-envelope"></i>Create Category');?></li>
							<li> <?=anchor('cat_crud/app_cat','<i class="icon-edit"></i>Manage Categories');?></li>
							<li> <?=anchor('topic_controller/create_topic','<i class="icon-pencil"></i>Create Topic');?></li>
							<li> <?=anchor('top_crud/app_top','<i class="icon-wrench"></i>Manage Topics');?></li>
							
							
							</ul>
							
                        </li>
						 <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-tasks"></i>Reports<b class="caret"></b>
                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('chart/index','<i class="icon-signal"></i>Payments Chart');?></li>
								<li> <?=anchor('dash/index','<i class="icon-signal"></i>Deposits Chart');?></li>
								<li> <?=anchor('deposit_report/depo_r','<i class="icon-file"></i>Deposits Report');?></li>
								
								</ul>
                        </li>
						
					
							
								<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-hdd"></i>Minutes Repository<b class="caret"></b>
                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('upload/index','<i class="icon-arrow-up"></i>Upload Minutes');?></li>
								<li> <?=anchor('upload/download','<i class="icon-download"></i>Download Minutes');?></li>
								<li> <?=anchor('minute_crud/application_minute','<i class="icon-wrench"></i>Manage Repository');?></li>
								
								
								</ul>
						</li>
						
						
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
	                                        <?=anchor('home_chart/index','Dashboard');?> <span class="divider">/</span>	
	                                    </li>
	                                    
	                                </ul>
                            	</div>
                        	</div>
<iframe src="<?php echo $iframe_src;?>"<div class="block"width="80%" height="700px"  scrolling="no" frameBorder="0"></div><p>Browser unable to load iFrame</p></iframe>
<hr>
            <footer>
                <p align="left">&copy; Leo Venturi Investments 2014</p> 
				
            </footer>
 <script src="<?php echo base_url()?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>


       
        
   
       
        <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url()?>assets/assets/scripts.js"></script>
       
		
        <link href="<?php echo base_url()?>assets/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/chosen.min.css" rel="stylesheet" media="screen">

        

        <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.js"></script>
        
        <script src="<?php echo base_url()?>assets/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url()?>assets/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url()?>assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>


        <script src="<?php echo base_url()?>assets/assets/scripts.js"></script>
        <script>
              $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
		<script>
			$(function() {
				$('#topic_cat').change(function(){
				
					var ct_id=$(this).val();
					var link='<?php echo base_url()."index.php/topic_controller/get_id"; ?>';
					$.ajax({
						url:link,
						type:'POST',
						dataType:'JSON',
						data:{'ct_id':ct_id},
						success: function(result){
							var topic_cat_id= result.cat_id;
							$("#topic_cat_id").val(topic_cat_id);		
						}
					});
					
				});
			});
    </script>
	
	<script>
			$(function() {
				$('#payment_from').change(function(){
					var u_id=$(this).val();
					var link='<?php echo base_url()."index.php/receive/get_user/"; ?>'+ u_id +'';
					$.ajax({
						url:link,
						type:'POST',
						dataType:'JSON',
						data:{'u_id':u_id},
						success: function(result){
							var user= result.user_id;
							
							$("#user").val(user);		
						}
						
					});
					
				});
			});
    </script>
	
    </body>

</html>			
<?php
}
}
?>
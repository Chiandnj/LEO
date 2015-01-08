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
                                    <li class="divider"></li>

                                    <li><?=anchor('login_controller/changepwd','<i class="icon-warning-sign"></i> Change password');?></li>
									
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
							  <li><?=anchor('receive/payment_table','<i class="icon-list"></i>View Payment History');?></li>
							  <li><?=anchor('payment_crud/application_pay','<i class="icon-wrench"></i>Manage Payments');?></li>
							  
							  
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
                    	
						
                        
                   
                    
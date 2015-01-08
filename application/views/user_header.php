<?php
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
                   
                    
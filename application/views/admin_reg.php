<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Leo Venturi Investments Management System</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/assets/styles.css" rel="stylesheet" media="screen">
	
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<style type="text/css">
	      	      body, html {
	          height: 100%;
	          margin: 0;
	          -webkit-font-smoothing: antialiased;
	          font-weight: 100;
	          background: #ffffff;
	          align:center;
			  font-family:'Helvetica';
	         
	      }
	      
	      .tabs input[type=radio] {
	          position: absolute;
	          top: -9999px;
	          left: -9999px;
	      }
	      .tabs {
	        width: 850px;
	        float: none;
	        list-style: none;
	        position: relative;
	        padding: 0;
	        margin: 75px auto;
	      }
	      .tabs li{
	        float: left;
	      }
	      .tabs label {
		      -webkit-font-smoothing: antialiased;
	          display: block;
	          padding: 10px 20px;
	          border-radius: 2px 2px 0 0;
	          color: #08C;
	          font-size: 18px;
	          font-weight: normal;
	          font-family: 'Helvetica';
	          background: rgba(255,255,255,0.2);
	          cursor: pointer;
	          position: relative;
	          top: 3px;
	          -webkit-transition: all 0.2s ease-in-out;
	          -moz-transition: all 0.2s ease-in-out;
	          -o-transition: all 0.2s ease-in-out;
	          transition: all 0.2s ease-in-out;
	      }
	      .tabs label:hover {
	        background: rgba(255,255,255,0.5);
	        top: 0;
	      }
	      
	      [id^=tab]:checked + label {
	        background: #08C;
	        color: white;
	        top: 0;
	      }
	      
	      [id^=tab]:checked ~ [id^=tab-content] {
	          display: block;
	      }
	      .tab-content{
	        z-index: 2;
	        display: none;
	        text-align: left;
	        width: 100%;
	        font-size: 18px;
	        line-height: 140%;
	        padding-top: 10px;
	        background: #ffffff;
	        padding: 15px;
	        color: white;
	        position: absolute;
	        top: 53px;
	        left: 0;
	        box-sizing: border-box;
	        -webkit-animation-duration: 0.5s;
	        -o-animation-duration: 0.5s;
	        -moz-animation-duration: 0.5s;
	        animation-duration: 0.5s;
	      }
	    </style>
		
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
                                    <li>
                                        <a tabindex="-1" href="#"><i class="icon-eye-open"></i> Profile</a>
                                    </li>
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
								
								<li>
								<a href="#"><i class="icon-list"></i>View Subscription History</a>
								</li>
								
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
								
							
								
								</ul>
                        </li>
                       <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-plus-sign"></i> Assets <b class="caret"></b>

                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('asset_controller/load_asset','<i class="icon-plus"></i>Add Asset');?> </li>
								<li> <?=anchor('asset_controller/asset_tab','<i class="icon-list-alt"></i>View Assets');?> </li>
								<li> <?=anchor('asset_crud/application_asset','<i class="icon-pencil"></i>Edit Assets');?> </li>
								
								</ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="icon-minus-sign"></i> Expenses <b class="caret"></b>
                                </a>
								<ul class="dropdown-menu" >
								<li> <?=anchor('expense_controller/load_expense','<i class="icon-plus"></i>Add Expense');?> </li>
								<li>
								<a href="#"><i class="icon-list-alt"></i>Expenditure History</a>
								</li>
								</ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#"data-toggle="dropdown" class="dropdown-toggle"><i class="icon-comment"></i> Forum <b class="caret"></b></a>
							<ul class="dropdown-menu" >
							<li> <?=anchor('overview_controller/show_cat','<i class="icon-inbox"></i>Forum Overview');?></li>
							<li> <?=anchor('category_controller/create_category','<i class="icon-envelope"></i>Create Category');?></li>
							<li> <?=anchor('topic_controller/create_topic','<i class="icon-pencil"></i>Create Topic');?></li>
							
							
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
								
								<li>
								<a href="#"><i class="icon-download"></i>View Minutes</a>
								</li>
								</ul>
						</li>
						
						
                    </ul>
                </div>
				  
				
				<div class="span9" id="content">
                    <div class="row-fluid">
                        
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                   
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="index.html">Dashboard</a> <span class="divider">/</span>	
	                                    </li>
	                                    
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
				 <div class="row-fluid">
                  <div class="span6">
<?php echo form_open('adminreg/reg');?>				  
	       	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">Basic Information</label>
			          <div id="tab-content1" class="tab-content animated fadeIn">
			            <div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	
	<input type="text" class="input-xlarge" id="first_name" name="first_name" placeholder="*First Name" value="<?php echo set_value('first_name'); ?>"><?php echo form_error('first_name','<div class="alert alert-error"><p>', '</p></div>');?>                                                                      
	</div>
	</div>
	
	<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                                
																				<input type="text" class="input-xlarge" id="last_name" name="last_name" placeholder="*Last Name" value="<?php echo set_value('last_name'); ?>"><?php echo form_error('last_name','<div class="alert alert-error"><p>', '</p></div>');?>                                                                         </div>
                                                                </div>
																
																<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                                
																				<input type="text" class="input-xlarge"id=" username" name="username" placeholder="*User Name" value="<?php echo set_value('username'); ?>"><?php echo form_error('username','<div class="alert alert-error"><p>', '</p></div>');?>
																				</div>
																				
                                                                </div>
																
																<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                               
																				<input type="text" class="input-xlarge"id=" national_id" name="national_id" placeholder="*Passport/IDno" value="<?php echo set_value('national_id');?>"><?php echo form_error('national_id','<div class="alert alert-error"><p>', '</p></div>');?>                                                                       </div>
                                                                </div>
																
																	<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                               
																				<input type="text" class="input-xlarge"id=" occupation" name="occupation" placeholder="*Occupation" value="<?php echo set_value('occupation'); ?>"><?php echo form_error('occupation','<div class="alert alert-error"><p>', '</p></div>');?>                                                                      </div>
                                                                </div>
																
                                                                	
																																			<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                                
																				
																				
																				<select name="role" id="role" class="input">
																				
           
			                
							<option value="">Member Designation</option>
							<option value="1">Management Staff</option>
			                <option value="0">Regular Member</option>
			                
			               
			              </select>                                                                       </div>
						  </div>
					
						  
						  
															
																</div>
		
			          
						  
						  </li>
						  <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">Contact Information</label>
			          <div id="tab-content2" class="tab-content animated fadeIn">
					   <div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                                
																				<input type="text" class="input-xlarge"id=" email" name="email" placeholder="*Email address" value="<?php echo set_value('email'); ?>"><?php echo form_error('email','<div class="alert alert-error"><p>', '</p></div>');?>
																				</div>
                                                                </div>
																
			           
                                                                       <div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                               
																				<input type="text" class="input-xlarge"id=" mobile_no" name="mobile_no" placeholder="*Mobile/Phone number" value="<?php echo set_value('mobile_no'); ?>"><?php echo form_error('mobile_no','<div class="alert alert-error"><p>', '</p></div>');?>                                                                       </div>
                                                                </div>
																
																<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                               
																				<input type="text" class="input-xlarge"id=" postal_address" name="postal_address" placeholder="Postal address" value="<?php echo set_value('postal_address'); ?>"><?php echo form_error('postal_address','<div class="alert alert-error"><p>', '</p></div>');?> 
																				</div>
                                                                </div>
															
																<div class="control-group">
                                                                        <div class="controls">
						
						  
						  <select name="location" id="location">
						  <option value="Country">Country</option>
	<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
	<option value="Aland Islands" title="Åland Islands">Aland Islands</option>
	<option value="Albania" title="Albania">Albania</option>
	<option value="Algeria" title="Algeria">Algeria</option>
	<option value="American Samoa" title="American Samoa">American Samoa</option>
	<option value="Andorra" title="Andorra">Andorra</option>
	<option value="Angola" title="Angola">Angola</option>
	<option value="Anguilla" title="Anguilla">Anguilla</option>
	<option value="Antarctica" title="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina" title="Argentina">Argentina</option>
	<option value="Armenia" title="Armenia">Armenia</option>
	<option value="Aruba" title="Aruba">Aruba</option>
	<option value="Australia" title="Australia">Australia</option>
	<option value="Austria" title="Austria">Austria</option>
	<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas" title="Bahamas">Bahamas</option>
	<option value="Bahrain" title="Bahrain">Bahrain</option>
	<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
	<option value="Barbados" title="Barbados">Barbados</option>
	<option value="Belarus" title="Belarus">Belarus</option>
	<option value="Belgium" title="Belgium">Belgium</option>
	<option value="Belize" title="Belize">Belize</option>
	<option value="Benin" title="Benin">Benin</option>
	<option value="Bermuda" title="Bermuda">Bermuda</option>
	<option value="Bhutan" title="Bhutan">Bhutan</option>
	<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
	<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
	<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana" title="Botswana">Botswana</option>
	<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
	<option value="Brazil" title="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
	<option value="Burundi" title="Burundi">Burundi</option>
	<option value="Cambodia" title="Cambodia">Cambodia</option>
	<option value="Cameroon" title="Cameroon">Cameroon</option>
	<option value="Canada" title="Canada">Canada</option>
	<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
	<option value="Chad" title="Chad">Chad</option>
	<option value="Chile" title="Chile">Chile</option>
	<option value="China" title="China">China</option>
	<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia" title="Colombia">Colombia</option>
	<option value="Comoros" title="Comoros">Comoros</option>
	<option value="Congo" title="Congo">Congo</option>
	<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
	<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
	<option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
	<option value="Croatia" title="Croatia">Croatia</option>
	<option value="Cuba" title="Cuba">Cuba</option>
	<option value="Curaçao" title="Curaçao">Curaçao</option>
	<option value="Cyprus" title="Cyprus">Cyprus</option>
	<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
	<option value="Denmark" title="Denmark">Denmark</option>
	<option value="Djibouti" title="Djibouti">Djibouti</option>
	<option value="Dominica" title="Dominica">Dominica</option>
	<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador" title="Ecuador">Ecuador</option>
	<option value="Egypt" title="Egypt">Egypt</option>
	<option value="El Salvador" title="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea" title="Eritrea">Eritrea</option>
	<option value="Estonia" title="Estonia">Estonia</option>
	<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
	<option value="Fiji" title="Fiji">Fiji</option>
	<option value="Finland" title="Finland">Finland</option>
	<option value="France" title="France">France</option>
	<option value="French Guiana" title="French Guiana">French Guiana</option>
	<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
	<option value="Gabon" title="Gabon">Gabon</option>
	<option value="Gambia" title="Gambia">Gambia</option>
	<option value="Georgia" title="Georgia">Georgia</option>
	<option value="Germany" title="Germany">Germany</option>
	<option value="Ghana" title="Ghana">Ghana</option>
	<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
	<option value="Greece" title="Greece">Greece</option>
	<option value="Greenland" title="Greenland">Greenland</option>
	<option value="Grenada" title="Grenada">Grenada</option>
	<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
	<option value="Guam" title="Guam">Guam</option>
	<option value="Guatemala" title="Guatemala">Guatemala</option>
	<option value="Guernsey" title="Guernsey">Guernsey</option>
	<option value="Guinea" title="Guinea">Guinea</option>
	<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana" title="Guyana">Guyana</option>
	<option value="Haiti" title="Haiti">Haiti</option>
	<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras" title="Honduras">Honduras</option>
	<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
	<option value="Hungary" title="Hungary">Hungary</option>
	<option value="Iceland" title="Iceland">Iceland</option>
	<option value="India" title="India">India</option>
	<option value="Indonesia" title="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq" title="Iraq">Iraq</option>
	<option value="Ireland" title="Ireland">Ireland</option>
	<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
	<option value="Israel" title="Israel">Israel</option>
	<option value="Italy" title="Italy">Italy</option>
	<option value="Jamaica" title="Jamaica">Jamaica</option>
	<option value="Japan" title="Japan">Japan</option>
	<option value="Jersey" title="Jersey">Jersey</option>
	<option value="Jordan" title="Jordan">Jordan</option>
	<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
	<option value="Kenya" title="Kenya">Kenya</option>
	<option value="Kiribati" title="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait" title="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia" title="Latvia">Latvia</option>
	<option value="Lebanon" title="Lebanon">Lebanon</option>
	<option value="Lesotho" title="Lesotho">Lesotho</option>
	<option value="Liberia" title="Liberia">Liberia</option>
	<option value="Libya" title="Libya">Libya</option>
	<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania" title="Lithuania">Lithuania</option>
	<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
	<option value="Macao" title="Macao">Macao</option>
	<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar" title="Madagascar">Madagascar</option>
	<option value="Malawi" title="Malawi">Malawi</option>
	<option value="Malaysia" title="Malaysia">Malaysia</option>
	<option value="Maldives" title="Maldives">Maldives</option>
	<option value="Mali" title="Mali">Mali</option>
	<option value="Malta" title="Malta">Malta</option>
	<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
	<option value="Martinique" title="Martinique">Martinique</option>
	<option value="Mauritania" title="Mauritania">Mauritania</option>
	<option value="Mauritius" title="Mauritius">Mauritius</option>
	<option value="Mayotte" title="Mayotte">Mayotte</option>
	<option value="Mexico" title="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco" title="Monaco">Monaco</option>
	<option value="Mongolia" title="Mongolia">Mongolia</option>
	<option value="Montenegro" title="Montenegro">Montenegro</option>
	<option value="Montserrat" title="Montserrat">Montserrat</option>
	<option value="Morocco" title="Morocco">Morocco</option>
	<option value="Mozambique" title="Mozambique">Mozambique</option>
	<option value="Myanmar" title="Myanmar">Myanmar</option>
	<option value="Namibia" title="Namibia">Namibia</option>
	<option value="Nauru" title="Nauru">Nauru</option>
	<option value="Nepal" title="Nepal">Nepal</option>
	<option value="Netherlands" title="Netherlands">Netherlands</option>
	<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
	<option value="New Zealand" title="New Zealand">New Zealand</option>
	<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
	<option value="Niger" title="Niger">Niger</option>
	<option value="Nigeria" title="Nigeria">Nigeria</option>
	<option value="Niue" title="Niue">Niue</option>
	<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway" title="Norway">Norway</option>
	<option value="Oman" title="Oman">Oman</option>
	<option value="Pakistan" title="Pakistan">Pakistan</option>
	<option value="Palau" title="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama" title="Panama">Panama</option>
	<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay" title="Paraguay">Paraguay</option>
	<option value="Peru" title="Peru">Peru</option>
	<option value="Philippines" title="Philippines">Philippines</option>
	<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
	<option value="Poland" title="Poland">Poland</option>
	<option value="Portugal" title="Portugal">Portugal</option>
	<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
	<option value="Qatar" title="Qatar">Qatar</option>
	<option value="Réunion" title="Réunion">Réunion</option>
	<option value="Romania" title="Romania">Romania</option>
	<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
	<option value="Rwanda" title="Rwanda">Rwanda</option>
	<option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
	<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa" title="Samoa">Samoa</option>
	<option value="San Marino" title="San Marino">San Marino</option>
	<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal" title="Senegal">Senegal</option>
	<option value="Serbia" title="Serbia">Serbia</option>
	<option value="Seychelles" title="Seychelles">Seychelles</option>
	<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
	<option value="Singapore" title="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia" title="Slovakia">Slovakia</option>
	<option value="Slovenia" title="Slovenia">Slovenia</option>
	<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
	<option value="Somalia" title="Somalia">Somalia</option>
	<option value="South Africa" title="South Africa">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="South Sudan" title="South Sudan">South Sudan</option>
	<option value="Spain" title="Spain">Spain</option>
	<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
	<option value="Sudan" title="Sudan">Sudan</option>
	<option value="Suriname" title="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland" title="Swaziland">Swaziland</option>
	<option value="Sweden" title="Sweden">Sweden</option>
	<option value="Switzerland" title="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
	<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand" title="Thailand">Thailand</option>
	<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
	<option value="Togo" title="Togo">Togo</option>
	<option value="Tokelau" title="Tokelau">Tokelau</option>
	<option value="Tonga" title="Tonga">Tonga</option>
	<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia" title="Tunisia">Tunisia</option>
	<option value="Turkey" title="Turkey">Turkey</option>
	<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
	<option value="Uganda" title="Uganda">Uganda</option>
	<option value="Ukraine" title="Ukraine">Ukraine</option>
	<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
	<option value="United States" title="United States">United States</option>
	<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay" title="Uruguay">Uruguay</option>
	<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
	<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
	<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
	<option value="Yemen" title="Yemen">Yemen</option>
	<option value="Zambia" title="Zambia">Zambia</option>
	<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
						  
						  </select>
						<?php echo form_error('location','<div class="alert alert-error"><p>', '</p></div>');?>
						  </div>
                                                                </div>
																 
																
																</div>
														
																
			        </li>
		
			        <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">Login Details</label>
			          <div id="tab-content3" class="tab-content animated fadeIn">
			            <div class="control-group">
						<div class="controls">
                                                                               
																				<input type="text" class="input-xlarge"id=" email" name="email" placeholder="*Email Address" value="<?php echo set_value('email'); ?>"><?php echo form_error('email','<div class="alert alert-error"><p>', '</p></div>');?>

	</div>

	</div>
	
	<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                               
																				<input type="password" class="input-xlarge"id=" password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"><?php echo form_error('password','<div class="alert alert-error"><p>', '</p></div>');?>
																				</div>
                                                                </div>
																
																<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                                
																				<input type="password" class="input-xlarge"id=" con_password" name="con_password" placeholder=" Confirm Password" value="<?php echo set_value('con_password'); ?>"><?php echo form_error('con_password','<div class="alert alert-error"><p>', '</p></div>');?> 
																				</div>
                                                                </div>
																
																<div class="control-group">
		
	      <div class="controls">
	       <button type="submit" class="btn btn-success"  value="submit">Complete Registration</button>
	       
	      </div>
		  
		  
		  
	
	</div>
<?php echo form_close(); ?>
	
			          
			        </div>
					</li>
			        
			    </ul>
				
				</div>
				</div>
				
				
</div>
</div>
</div>

<!--/.fluid-container-->
        <script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/jGrowl/jquery.jgrowl.js"></script>
        <script src="<?php echo base_url();?>assets/assets/scripts.js"></script>
        <script>
        $(function() {
            $('.tooltip').tooltip();	
			$('.tooltip-left').tooltip({ placement: 'left' });	
			$('.tooltip-right').tooltip({ placement: 'right' });	
			$('.tooltip-top').tooltip({ placement: 'top' });	
			$('.tooltip-bottom').tooltip({ placement: 'bottom' });

			$('.popover-left').popover({placement: 'left', trigger: 'hover'});
			$('.popover-right').popover({placement: 'right', trigger: 'hover'});
			$('.popover-top').popover({placement: 'top', trigger: 'hover'});
			$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

			$('.notification').click(function() {
				var $id = $(this).attr('id');
				switch($id) {
					case 'notification-sticky':
						$.jGrowl("Stick this!", { sticky: true });
					break;

					case 'notification-header':
						$.jGrowl("A message with a header", { header: 'Important' });
					break;

					default:
						$.jGrowl("Check your email to receive activation link");
					break;
				}
			});
        });
        </script>
                
                <!--/span-->
				
				</body>

</html>
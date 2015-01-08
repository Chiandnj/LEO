

<script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.js"></script>

 <!--/span-->
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        
                        <!-- /block -->
                    </div>
					

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
						
                            <div class="navbar navbar-inner block-header">
                                <div class="row-fluid">
								
                                <a href="<?php echo base_url();?>index.php/deposit_report/dep_repo" button class="btn" style="align:right"><i class="icon-download"></i>Download</button></a>
							
                                
                                 </div>
								<h3 style='text-align:center;'>Leo Venturi Investments</h3>
								<h5 style='text-align:center;'>Deposits Report as at:&nbsp<?php echo date('Y-m-d');?> </h5>
								
								
								<div class="row-fluid">
                        <!-- block -->
                      
                           
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Date</th>
												<th>Paid in by</th>
												<th>Bank/Account.No</th>
												<th>Amount</th>
											
											
											</tr>
										</thead>
										<tbody>
											<?php
										foreach ($depo as $row){?>
										
										
						
											<tr class="odd gradeX">
												<td> <?php echo $row ['deposit_date'];?></td>
												<td><?php echo $row['deposited_by'];?></td>
												<td><?php echo $row ['deposit_bank'];?></td>
												<td> <?php echo $row['deposit_amount'];?></td>
												
												
												
												
											</tr>
											<?php
											}
											?>
												<tr class="odd gradeX">
												<td colspan="3"><strong>Total</strong></td>
												<td><?php echo $total;?></td>
											</tr>
											</tbody>
									</table>
                            
							</div>
							<h6 style='text-align:center;'>&copy; Leo Venturi Investments 2014</h6>
							
							 
							
							 </div>
							  </div>
							   </div>
							   </div>
							   </div>
							  
            <footer>
                <p>&copy; Leo Venturi Investments 2014</p> 
				
            </footer>
							    <!--/.fluid-container-->
        <link href="<?php echo base_url();?>assets/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url();?>assets/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

       
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url();?>assets/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url();?>assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


        <script src="<?php echo base_url();?>assets/assets/scripts.js"></script>
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
							   
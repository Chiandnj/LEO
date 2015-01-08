
                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Receive Payment</div>
                                    <div class="pull-right">
									<a href="payment_tables.html"><i class="icon-list"></i> View Recent Payments  </a>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('receive/repay');?>
								<div class="control-group">
						 
						  <label class="control-label"><strong>Payment From</strong></label>
						  <div class="controls">
						  						      <select id="name" name="name" class="chzn-select">
                                              
                                            <?php
											foreach($first_name as $name){
												echo '<option>'.$name.'</option>';
											
											}
											?>
											
                                            </select>
												
											
                                                                                            

                                                                                           
																						   </div>
                                    
                                </div>
							
								

								<!--<div class="span3">-->
								<div class="control-group">
                                                                                            <label class="control-label"><strong>Date Received</strong></label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="receive_date" id="receive_date" value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
                            <!--</div>-->
							
							
							<div class="control-group">
						  <label class="control-label"><strong>Payment method</strong></label>
						  <div class="controls">
						  						      <select id="receive_method" name="receive_method" class="chzn-select">
                                              <option>Choose Payment method</option>
                                           
                                              <option>Mpesa</option>
                                              <option>Cash</option>
                                              <option>Cheque</option>
                                            </select>
											<?php echo form_error('receive_method','<div class="alert alert-info"><p>', '</p></div>');?>
                                                                                            

                                                                                            </div>
                                    
                                </div>
								
							
							
							
							<div class="control-group">
                                                                                            <label class="control-label"><strong>Bank Account</strong></label>
                                                                                            <div class="controls">
																							<select id="receive_bank" name="receive_bank" class="chzn-select">
                                             
                                           
<option value="ABC Bank (Kenya)">ABC Bank (Kenya)</option>
<option value="Bank of Africa">Bank of Africa</option>
<option value="Bank of Baroda">Bank of Baroda</option>
<option value="Bank of India">Bank of India</option>
<option value="Barclays Bank">Barclays Bank</option>
<option value="CFC Stanbic Bank">CFC Stanbic Bank</option>
<option value="Chase Bank (Kenya)">Chase Bank (Kenya)</option>
<option value="Citibank">Citibank</option>
<option value="Commercial Bank of Africa">Commercial Bank of Africa</option>
<option value="Consolidated Bank of Kenya">Consolidated Bank of Kenya</option>

                                            </select>
											
                                                                                            

                                                                                            </div>
                                    
                                </div>
								<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label"><strong>Description</strong></label>
	<input type="text" class="input-xlarge" id="receive_decription" name="receive_description" value="<?php echo set_value('receive_description'); ?>"><?php echo form_error('receive_description','<div class="alert alert-info"><p>', '</p></div>');?>                                                                      
	</div>
	</div>
							
							
							
							<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label" ><strong>Total Amount</strong></label>
	<input type="text" class="input" id="receive_amount" name="receive_amount" value="<?php echo set_value('receive_amount'); ?>"><?php echo form_error('receive_amount','<div class="alert alert-info"><p>', '</p></div>');?>                                                                      
	</div>
	</div>
	 
	<button class="btn btn-primary"  type="submit" value="submit">Receive Payment</button>
	

	
							
							</div>
							<?php echo form_close(); ?>
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
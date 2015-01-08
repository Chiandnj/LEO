
                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Receive Payment</div>
                                    <div class="pull-right">
									 <?=anchor('payment_crud/application_pay','<i class="icon-list"></i>View Recent Payments');?>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('receive/repay');?>
								<input type="hidden" name="user" id="user"/>
								<div class="control-group">
						   <label class="control-label"><span style="color:red">*</span>Payment From:</label>
						  <div class="controls">
						  						      <select id="payment_from" name="payment_from" class="chzn-select">
													  <option>Select member</option>
                                              
                                            <?php
											foreach($firstnames as $firstname){
											
												echo '<option>'.$firstname['username'].'</option>';
											}
											?>
											
											
                                            </select>
												
											
                                                                                            

                                                                                           
																						   </div>
                                    
                                </div>
							
								

								<!--<div class="span3">-->
								<div class="control-group">
                                                                                             <label class="control-label"><span style="color:red">*</span>Date received:</label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="receive_date" id="receive_date" value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
                            <!--</div>-->
							
							
							<div class="control-group">
						   <label class="control-label"><span style="color:red">*</span>Payment Method:</label>
						  <div class="controls">
						  						      <select id="receive_method" name="receive_method" class="chzn-select" required/>
                                              <option>Choose Payment method</option>
                                           
                                              <option>Mpesa</option>
                                              <option>Cash</option>
                                              <option>Cheque</option>
                                            </select>
											<?php echo form_error('receive_method','<div class="alert alert-info"><p>', '</p></div>');?>
                                                                                            

                                                                                            </div>
                                    
                                </div>
								
							
							
							
							<div class="control-group">
                             <label class="control-label"><span style="color:red">*</span>Receiving Account:</label>
                            <div class="controls">
			                <select id="receive_bank" name="receive_bank" class="chzn-select">                                          
                            <option>Select Bank</option>
                            <?php
							foreach($banks as $bank){
							echo '<option>'.$bank['bank_name'].'-'.$bank['account_no'].'</option>';
											}
											?>


                                            </select>
											
                                                                                            

                                                                                            </div>
                                    
                                </div>
								<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label">Description:</label>
	<textarea name="receive_description" id="receive_description"value="<?php echo set_value('receive_description'); ?>"></textarea>                                                                     
	</div>
	</div>
	
							
							
							
							<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label">Contribution Amount:</label>
	 <div class="input-prepend input-append">
	 <span class="add-on">KES</span>
<input type="text" name="receive amount"  id="receive_amount"  class="validate[required] span6 m-wrap" value="<?php echo set_value('receive_amount'); ?>"><span class="add-on">.00</span>
							 </div>
							 </div>
							 <?php echo form_error('receive_amount','<div class="alert alert-error"><p>', '</p></div>');?>
							 
	</div>
	<label class="control-label">Penalty Charged:</label>
	 <div class="input-prepend input-append">
	 <span class="add-on">KES</span>
<input type="text" name="penalty"  id="penalty"  class="validate[required] span6 m-wrap" value="<?php echo set_value('penalty'); ?>"><span class="add-on">.00</span>
							 </div>
							 </div>
							 <?php echo form_error('penalty','<div class="alert alert-error"><p>', '</p></div>');?>
							 
	</div>
	<button class="btn btn-primary"  type="submit" value="submit">Receive Payment</button>
	</div>
	
	

	
							
							</div>
							<?php echo form_close(); ?>
							
												
	 
	
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    

                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Deposit Money</div>
                                    <div class="pull-right">
									<?=anchor('add_deposit/table','<i class="icon-list-alt"></i>View Deposits');?>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('add_deposit/deposit');?>
<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label"><span style="color:red">*</span>Paid in by:</label>
	<input type="text" class="input" id="deposited_by" name="deposited_by" value="<?php echo set_value('deposited_by'); ?>"><?php echo form_error('deposited_by','<div class="alert alert-error"><p>', '</p></div>');?>                                                                     
	</div>
	</div>								
								  
								 
								 
									 <div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Receiving Account:</label>
						  <div class="controls">
						  						      <select name="deposit_bank" id="deposit_bank" class="chzn-select" required/>
<option value="Select a bank">Select a Bank</option>
<?php
							foreach($banks as $bank){
							echo '<option>'.$bank['bank_name'].'-'.$bank['account_no'].'</option>';
											}
											?>
</select>						  </div>
						 </div>  
						 
								
																		   
								   
								  <div class="control-group">
                                                                                            <label class="control-label"><span style="color:red">*</span>Date:</label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="deposit_date" id="deposit_date" value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
								 
								   
								   <div class="control-group">
									  <label class="control-label">Please enter  amount to Deposit</label>
									  <div class="controls">
										 <div class="input-prepend input-append">
										   <span class="add-on">KES</span>
										 <input type="text" name="deposit_amount"  id="deposit_amount" class=" span6 m-wrap"value="<?php echo set_value('deposit_amount'); ?>">						
										   <span class="add-on">.00</span>
										 </div>
										 <?php echo form_error('deposit_amount','<div class="alert alert-error"><p>', '</p></div>');?>	
									  </div>
								   </div>
								 

										   	   
									
								   
						   
                                          <button class="btn btn-primary"  type="submit" value="submit">Deposit</button>
                                          
                                
						<?php echo form_close(); ?>
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                   
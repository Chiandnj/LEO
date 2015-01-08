
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Add Withdrawal</div>
                                    <div class="pull-right">
									<a href="payment_tables.html"><i class="icon-list"></i> View Withdrawals  </a>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('withdrawal_controller/add_withdrawal');?>		
					
					<div class="widget first">
					<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Bank Account Withdrawn from</span></label>
						  <div class="controls">
						  						      <select name="withdrawal_bank" id="withdrawal_bank" class="chzn-select" required/>
<option value="Select a bank">Select an account</option>
<?php
							foreach($banks as $bank){
							echo '<option>'.$bank['bank_name'].'-'.$bank['account_no'].'</option>';
											}
											?>

</select>						  </div>
						 </div>
						
																
						
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Withdrawal Amount</label>
						  <div class="controls">
							 <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="withdrawal_amount"  id="withdrawal_amount"  class="validate[required] span6 m-wrap" value="<?php echo set_value('withdrawal_amount'); ?>">							   <span class="add-on">.00</span>
							 
							 </div>
							 <?php echo form_error('withdrawal_amount','<div class="alert alert-error"><p>', '</p></div>');?>
						  </div>
					   </div>
																
						<div class="control-group">
							<label class="control-label" for="date"><span style="color:red">*</span>Date</label>
							<div class="controls">
								 <input type="text" class="datepicker" name="withdrawal_date" id="withdrawal_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description"><span style="color:red">*</span>Reasons</span></label>
							<div class="controls">
								<textarea name="withdrawal_reason" cols="60" rows="5" id="withdrawal_reason" class="auto  span6 m-wrap" value="<?php echo set_value('withdrawal_reason'); ?>"></textarea>							</div>
								<?php echo form_error('withdrawal_reason','<div class="alert alert-error"><p>', '</p></div>');?>
						</div>					
						
						

                                          <button class="btn btn-primary"  type="submit" value="submit">Withdraw</button>
                                          
                                        
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                   

                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Add Expense</div>
                                    <div class="pull-right">
									
									<?=anchor('expense_controller/expense_tab','<i class="icon-list-alt"></i>View Expenses');?>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('expense_controller/add_expense');?>		
				<fieldset>	
					<div class="widget first">
						
																
						<div class="control-group">
							<label class="control-label" for="refno"><span style="color:red">*</span>Reference Number(e.g Receipt No.):</label>
							<div class="controls">
							  <input type="text" name="expense_ref" id="expense_ref" class=" span6 m-wrap" value="<?php echo set_value('expense_ref'); ?>"><?php echo form_error('expense_ref','<div class="alert alert-error"><p>', '</p></div>');?>							</div>
							<div class="fix"></div>
						</div>
													<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Associated Bank Account:</span></label>
						  <div class="controls">
						  						      <select name="expense_bank" id="expense_bank" class="chzn-select" required/>
<option value="Select a bank">Select an account</option>
<?php
							foreach($banks as $bank){
							echo '<option>'.$bank['bank_name'].'-'.$bank['account_no'].'</option>';
											}
											?>

</select>						  </div>
						 </div>
						
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Amount:</label>
						  <div class="controls">
							 <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="expense_amount"  id="expense_amount"  class="validate[required] span6 m-wrap" value="<?php echo set_value('expense_amount'); ?>">	<span class="add-on">.00</span>
							 </div>
							 <?php echo form_error('expense_amount','<div class="alert alert-error"><p>', '</p></div>');?>
						  </div>
					   </div>
																
						<div class="control-group">
							<label class="control-label" for="date"><span style="color:red">*</span>Date:</label>
							<div class="controls">
								 <input type="text" class="datepicker" name="expense_date" id="expense_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description"><span style="color:red">*</span>Expense Description:</label>
							<div class="controls">
								<textarea name="expense_description" cols="60" rows="5" id="expense_description" class="auto  span6 m-wrap" value="<?php echo set_value('expense_description'); ?>"></textarea>							</div>
								<?php echo form_error('expense_description','<div class="alert alert-error"><p>', '</p></div>');?>
						</div>					
						
						
					
                                          <button class="btn btn-primary"  type="submit" value="submit">Add Expense</button>
                                          
                                        
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                  
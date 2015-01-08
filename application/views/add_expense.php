
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('expense_controller/add_expense');?>		
				<fieldset>	
					<div class="widget first">
						
																
						<div class="control-group">
							<label class="control-label" for="refno"><strong>Reference Number(e.g Receipt No.)</strong></label>
							<div class="controls">
							  <input type="text" name="expense_ref" id="expense_ref" class=" span6 m-wrap" value=""  >							</div>
							<div class="fix"></div>
						</div>
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span><strong>Asset Value</strong></label>
						  <div class="controls">
							 <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="expense_amount"  id="expense_amount"  class="validate[required] span6 m-wrap" value="">							   <span class="add-on">.00</span>
							 </div>
						  </div>
					   </div>
																
						<div class="control-group">
							<label class="control-label" for="date"><span style="color:red">*</span><strong>Date</strong></label>
							<div class="controls">
								 <input type="text" class="datepicker" name="expense_date" id="expense_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description"><strong>Asset Description</strong></label>
							<div class="controls">
								<textarea name="expense_description" cols="60" rows="5" id="expense_description" class="auto  span6 m-wrap" value=""></textarea>							</div>
						</div>					
						
						
						<div class="form-actions">
                                          <button class="btn btn-primary"  type="submit" value="submit">Add Expense</button>
                                          
                                        </div>
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
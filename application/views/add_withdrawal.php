
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Add Withdrawal</div>
                                    <div class="pull-right">
									<a href="add_asset.html"><i class="icon-plus-sign"></i> New Withdrawal  </a>
									<a href="payment_tables.html"><i class="icon-list"></i> View Withdrawal  </a>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('withdrawal_controller/load_withdrawal');?>		
				<fieldset>	
					<div class="widget first">
					<div class="control-group">
						  <label class="control-label"><strong>Bank Account Withdrawn from</strong></label>
						  <div class="controls">
						  						      <select name="withdrawal_bank" id="withdrawal_bank" class="chzn-select" required>
<option value="Select a bank">Select a Bank</option>
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
<option value="Cooperative Bank of Kenya">Cooperative Bank of Kenya</option>

</select>						  </div>
						 </div>
						
																
						
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span><strong>Withdrawal Amount</strong></label>
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
								 <input type="text" class="datepicker" name="withdrawal_date" id="withdrawal_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description"><strong>Reasons</strong></label>
							<div class="controls">
								<textarea name="withdrawal_reason" cols="60" rows="5" id="withdrawal_reason" class="auto  span6 m-wrap" value=""></textarea>							</div>
						</div>					
						
						
					<div class="form-actions">
                                          <button class="btn btn-primary"  type="submit" value="submit">Withdraw</button>
                                          
                                        </div>
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				</form>
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    

                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Pay Subscription</div>
                                    <div class="pull-right">
									<!--<a href="payment_tables.html"><i class="icon-list"></i> View Subscription History  </a>-->

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('subscription/sub');?>
								<input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
																						<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label"><strong>First Name:</strong><span style="color:red">*</span></label>
	<input type="text" class="input" name="receive_amount" value="">                                                                  
	</div>
	</div>
															<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label"><strong>Last Name:</strong><span style="color:red">*</span></label>
	<input type="text" class="input"  name="receive_amount" value="">                                                                     
	</div>
	</div>
							
															<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label"><strong>Email Address:</strong><span style="color:red">*</span></label>
	<input type="text" class="input" name="receive_amount" value="">                                                                     
	</div>
	</div>
								

								
								<div class="control-group">
                                                                                            <label class="control-label"><strong>Date Received:</strong></label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="receive_date"  value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
                            
							
							
							
							
							
							
	
								  <div class="control-group">
							<label class="control-label" for="description"><strong>Description:</strong><span style="color:red">*</span></label>
							<div class="controls">
								<textarea name="description" cols="60" rows="5" id="asset_description" class="auto  span6 m-wrap" value="<?php echo set_value('asset_description'); ?>"></textarea>							</div>
						</div>
								
							<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                        	<div class="input-prepend input-append">
							   
																		

	
	<label class="control-label"><strong>Total Amount</strong><span style="color:red">*</span></label>
	<span class="add-on">KES</span><input type="text" class="input" id="receive_amount" name="receive_amount" value="">                                                                     
	</div>
	</div>
	</div>
	
	<button class="btn btn-primary"  type="submit" value="submit">Pay Subscription</button>
	
	
							
							
							
												
							
							
							<?php echo form_close(); ?>
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
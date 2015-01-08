
                        
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Pay Subscription</div>
                                    <div class="pull-right">
									<!--<a href="payment_tables.html"><i class="icon-list"></i> View Subscription History  </a>-->
									
                                  <img  width="90" height="750" src="<?php echo base_url('assets/images/pesapal.jpg');?>" width="20" height="105" />
                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('pesapal/pesa');?>
								<input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
								<input type="hidden" name="reference" value="<?php echo(rand(1,1000));?>"/>
																		<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label" for="disabledInput">First Name<span style="color:red">*</span></label>
	<input class="input-xlarge disabled" id="disabledInput" type="text" class="input" name="first_name" placeholder="<?php echo $this->session->userdata('first_name');?>"   value="<?php echo $this->session->userdata('first_name');?>">                                                                 
	</div>
	</div>
															<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label" for="disabledInput">Last Name<span style="color:red">*</span></label>
	<input class="input-xlarge disabled" id="disabledInput" type="text" class="input"  name="last_name" placeholder="<?php echo $this->session->userdata('last_name');?>"value="<?php echo $this->session->userdata('last_name');?>">                                                                      
	</div>
	</div>
							
															<div class="control-group">
                                                                        
                                                                        <div class="controls">
																		

	
	<label class="control-label" for="disabledInput">Email Address<span style="color:red">*</span></label>
	<input class="input-xlarge disabled" id="disabledInput" type="text" class="input" name="email" placeholder="<?php echo $this->session->userdata('email');?>" value="<?php echo $this->session->userdata('email');?>">                                                                   
	</div>
	</div>
	
								  <div class="control-group">
							<label class="control-label" for="description">Description<span style="color:red">*</span></label>
							<div class="controls">
								<textarea name="description" cols="60" rows="5"  class="auto  span6 m-wrap" value="<?php echo set_value('description'); ?>" required/> </textarea>							</div>
						</div>
								
							<div class="control-group">
                                                                        
                                                                        <div class="controls">
                                                                        	<div class="input-prepend input-append">
							   
																		

	
	<label class="control-label">Total Amount<span style="color:red">*</span></label>
	<span class="add-on">KES</span><input type="text" class="input"  name="amount" value="<?php echo set_value('amount'); ?>" required/>                                                                     
	</div>
	</div>
	</div>
	
	<button class="btn btn-primary"  type="submit" value="submit">Pay Subscription</button>
	
	
	
							
							
							
												
							
							
							<?php echo form_close(); ?>
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
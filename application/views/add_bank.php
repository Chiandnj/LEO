<!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    
                                    <div class="pull-right">
									<?=anchor('bank_crud/application_bank','<i class="icon-list"></i>View Bank Accounts');?>

									
									
									

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
						<?php echo form_open('bank/add_bank');?>

						<div class="control-group">
						 <label class="control-label"><span style="color:red">*</span>Bank Name:</label>
						
						  <div class="controls">
						  						      <select id="bank_name" name="bank_name" class="chzn-select">
													  
<option>Select bank</option>
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
<option value="Credit Bank">Credit Bank</option>
<option value="Development Bank of Kenya">Development Bank of Kenya</option>
<option value="Diamond Trust Bank">Diamond Trust Bank</option>
<option value="Dubai Bank Kenya">Dubai Bank Kenya</option>
<option value="Ecobank">Ecobank</option>
<option value="Equatorial Commercial Bank">Equatorial Commercial Bank</option>
<option value="Equity Bank">Equity Bank</option>
<option value="Family Bank">Family Bank</option>
<option value="Fidelity Commercial Bank Limited">Fidelity Commercial Bank Limited</option>
<option value="Fina Bank">Fina Bank</option>
<option value="First Community Bank">First Community Bank</option>
<option value="Giro Commercial Bank">Giro Commercial Bank</option>
<option value="Guardian Bank">Guardian Bank</option>
<option value="Gulf African Bank">Gulf African Bank</option>
<option value="Habib Bank">Habib Bank</option>
<option value="Habib Bank AG Zurich">Habib Bank AG Zurich</option>
<option value="I&amp;M Bank">I&amp;M Bank</option>
<option value="Imperial Bank Kenya">Imperial Bank Kenya</option>
<option value="Jamii Bora Bank">Jamii Bora Bank</option>
<option value="Kenya Commercial Bank">Kenya Commercial Bank</option>
<option value="K-Rep Bank">K-Rep Bank</option>
<option value="Middle East Bank Kenya">Middle East Bank Kenya</option>
<option value="National Bank of Kenya">National Bank of Kenya</option>
<option value="NIC Bank">NIC Bank</option>
<option value="Oriental Commercial Bank">Oriental Commercial Bank</option>
<option value="Paramount Universal Bank">Paramount Universal Bank</option>
<option value="Prime Bank (Kenya)">Prime Bank (Kenya)</option>
<option value="Standard Chartered Kenya">Standard Chartered Kenya</option>
<option value="Trans National Bank Kenya">Trans National Bank Kenya</option>
<option value="United Bank for Africa">United Bank for Africa</option>
<option value="Faulu Kenya DTM Limited">Faulu Kenya DTM Limited</option>
<option value="Kenya Women Finance Trust DTM Limited">Kenya Women Finance Trust DTM Limited</option>
<option value="SMEP Deposit Taking Microfinance Limited">SMEP Deposit Taking Microfinance Limited</option>
<option value="Remu DTM Limited">Remu DTM Limited</option>
<option value="Rafiki Deposit Taking Microfinance">Rafiki Deposit Taking Microfinance</option>
<option value="UWEZO Deposit Taking Microfinance Limited">UWEZO Deposit Taking Microfinance Limited</option>
<option value="Century Deposit Taking Microfinance Limited">Century Deposit Taking Microfinance Limited</option>
<option value="SUMAC DTM Limited">SUMAC DTM Limited</option>
<option value="U&amp;I Deposit Taking Microfinance Limited">U&amp;I Deposit Taking Microfinance Limited</option>
<option value="Victoria Commercial Bank">Victoria Commercial Bank</option>
</select>						  </div>
						 </div>
						 <div class="control-group">
                                                                                             <label class="control-label"><span style="color:red">*</span>Date opened</label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="bank_date" id="bank_date" value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
						 
						<div class="control-group">
						   <label class="control-label"><span style="color:red">*</span>Account name:</label>
						  <div class="controls">
						       <input type="text" name="account_name"  id="account_name"value="<?php echo set_value('account_name'); ?>"><?php echo form_error('account_name','<div class="alert alert-error"><p>', '</p></div>');?>						  </div>
						 </div>
						 
						<div class="control-group">
						   <label class="control-label"><span style="color:red">*</span>Account No:</label>
						  <div class="controls">
						        <input type="text" name="account_no" id="account_no" value="<?php echo set_value('account_no'); ?>"><?php echo form_error('account_no','<div class="alert alert-error"><p>', '</p></div>');?>						  </div>
						 </div>
						 
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Opening Balance:</label>
						  <div class="controls">
						   <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="balance"  id="balance"  class="validate[required] span6 m-wrap" value="<?php echo set_value('balance'); ?>"><span class="add-on">.00</span>
							 </div>
							 <?php echo form_error('balance','<div class="alert alert-error"><p>', '</p></div>');?>
						       </div>
						 </div>
						 
						<div class="control-group">
						   <label class="control-label"><span style="color:red">*</span>Branch Name:</label>
						  <div class="controls">
						        <input type="text" name="branch"  id="branch" value="<?php echo set_value('branch'); ?>"><?php echo form_error('branch','<div class="alert alert-error"><p>', '</p></div>');?>   				  </div>
						 </div>
								 <div class="control-group">
								  <label class="control-label">Reasons:</label>
								  <div class="controls">
								 
								   <textarea name="reasons" id="reasons" name="reasons" value="<?php echo set_value('reasons'); ?>">   </textarea>								
								  </div>
							   </div>  	   
							
						   
			
                                          <button class="btn btn-primary"  type="submit" value="submit">Save</button>
                                          
                                      
				
							
												
							<?php echo form_close(); ?>
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                   
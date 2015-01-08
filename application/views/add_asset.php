
                            <!-- block -->
                            <div class="block">
                            	 <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Add Asset</div>
                                    <div class="pull-right">
									<?=anchor('asset_controller/asset_tab','<i class="icon-list-alt"></i>View Assets');?>
									

                                    </div>
                   
                                </div>
                                
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('asset_controller/add_asset');?>		
				<fieldset>	
					<div class="widget first">
						
																
						<div class="control-group">
							<label class="control-label" for="refno">Reference Number(e.g Receipt No.):</label>
							<div class="controls">
							  <input type="text" name="asset_ref" id="asset_ref" class=" span6 m-wrap" value="">							</div>
							  <?php echo form_error('asset_ref','<div class="alert alert-error"><p>', '</p></div>');?>
							
						</div>
										<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Associated Bank Account:</span></label>
						  <div class="controls">
						  						      <select name="asset_bank" id="asset_bank" class="chzn-select" required/>
<option value="Select a bank">Select an account</option>
<?php
							foreach($banks as $bank){
							echo '<option>'.$bank['bank_name'].'-'.$bank['account_no'].'</option>';
											}
											?>

</select>						  </div>
						 </div>
						
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Asset Value:</label>
						  <div class="controls">
							 <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="asset_value"  id="asset_value"  class="validate[required] span6 m-wrap" value="">							   <span class="add-on">.00</span>
							 </div>
							 <?php echo form_error('asset_value','<div class="alert alert-error"><p>', '</p></div>');?>
						  </div>
					   </div>
																
						<div class="control-group">
							<label class="control-label" for="date"><span style="color:red">*</span>Date:</label>
							<div class="controls">
								 <input type="text" class="datepicker" name="asset_date" id="asset_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							<div class="fix"></div>
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description">Asset Description:</label>
							<div class="controls">
								<textarea name="asset_description" cols="60" rows="5" id="asset_description" class="auto  span6 m-wrap" value=""></textarea>							</div>
						</div>	
<?php echo form_error('asset_description','<div class="alert alert-error"><p>', '</p></div>');?>						
						
						
                                          <button class="btn btn-primary"  type="submit" value="submit">Add Asset</button>
                                          
                                        
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
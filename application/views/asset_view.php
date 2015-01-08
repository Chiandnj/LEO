
                            <!-- block -->
                            <div class="block">
                                
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('asset_controller/add_asset');?>		
				<fieldset>	
					<div class="widget first">
						
																
						<div class="control-group">
							<label class="control-label" for="refno">Reference Number(e.g Receipt No.)</label>
							<div class="controls">
							  <input type="text" name="asset_ref" id="asset_ref" class=" span6 m-wrap" value=""  >							</div>
							<div class="fix"></div>
						</div>
						<div class="control-group">
						  <label class="control-label"><span style="color:red">*</span>Asset Value</label>
						  <div class="controls">
							 <div class="input-prepend input-append">
							   <span class="add-on">KES</span>
							 <input type="text" name="asset_value"  id="asset_value"  class="validate[required] span6 m-wrap" value="">							   <span class="add-on">.00</span>
							 </div>
						  </div>
					   </div>
																
						<div class="control-group">
							<label class="control-label" for="date"><span style="color:red">*</span>Date</label>
							<div class="controls">
								 <input type="text" class="datepicker" name="asset_date" id="asset_date" value="" data-date-format="yyyy-mm-dd" required/>							 
							</div>
							<div class="fix"></div>
						</div>
													
						
						 											

													
					  <div class="control-group">
							<label class="control-label" for="description">Asset Description</label>
							<div class="controls">
								<textarea name="asset_description" cols="60" rows="5" id="asset_description" class="auto  span6 m-wrap" value=""></textarea>							</div>
						</div>					
						<div class="control-group">
							<label class="control-label" for="receipt">Upload Associated Files</label>
							<div class="controls">
							  <input type="file" name="receipt" value="#" id="receipt" class=" span6 m-wrap">							  							</div>
						<div class="fix"></div>
						</div>
						
						<div class="form-actions">
                                          <button class="btn btn-primary"  type="submit" value="submit">Add Asset</button>
                                          
                                        </div>
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    

                            <!-- block -->
                            <div class="block">
							 <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left">Profile</div>
                   
                                </div>
                                
                            	
                                
                                <div class="block-content collapse in">
								<div class="span6">
								<?php echo form_open('profile/member');?>		
				<fieldset>	
					<div class="widget first">
					<ul class="thumbnails gallery">
                                                        <li id="image-1" class="thumbnail">
                                <a style="background:url(img/gallery/thumbs/1.jpg)" title="Sample Image 1" ><img class="grayscale" src="<?php echo base_url().$this->session->userdata('avatar');?>" style="max-width: 200px; max-height: 200px; line-height: 20px;"  alt="Sample Image 1"></a>
								
                            </li></ul>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">First Name:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('first_name');?>" >
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">Last Name:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('last_name');?>" >
                                </div>
                              </div>
                               <div class="control-group">
                                <label class="control-label" for="disabledInput">Username:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('username');?>">
                                </div>
                              </div>
                                   <div class="control-group">
                                <label class="control-label" for="disabledInput">Email:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('email');?>">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">Mobile no:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('mobile_no');?>">
                                </div>
                              </div>
							  
                         <div class="control-group">     
						<button class="btn btn-primary"  type="submit" value="submit">Update Profile</button>
							</div>									
						
						
					</div>
					<?php echo form_close(); ?>
				</fieldset>

				
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
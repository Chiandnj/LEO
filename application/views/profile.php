         
            
            <div id="content" class="span10">
            <!-- content starts -->
            

          
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i>Profile</h2>
                    </div>
                    <div class="box-content">
                        <?php
                        $attributes=array('class'=>'form-horizontal');
                        echo form_open_multipart('',$attributes)
                        ?>
                            <fieldset>
                                <ul class="thumbnails gallery">
                                                        <li id="image-1" class="thumbnail">
                                <a style="background:url(img/gallery/thumbs/1.jpg)" title="Sample Image 1" href="img/gallery/1.jpg"><img class="grayscale" src="<?php echo base_url()?>/files/me.jpg" alt="Sample Image 1"></a>
                            </li></ul>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">Admission Number:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('Adm');?>" disabled="">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">Name:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php foreach ($profiledetails as $profiledetails)
                                  {
                                      echo $profiledetails->Full_name;
                                  ?>" disabled="">
                                </div>
                              </div>
                               <div class="control-group">
                                <label class="control-label" for="disabledInput">Course:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $profiledetails->course_name?>" disabled="">
                                </div>
                              </div>
                                   <div class="control-group">
                                <label class="control-label" for="disabledInput">Year:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $profiledetails->year_of_study?>" disabled="">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="disabledInput">Email:</label>
                                <div class="controls">
                                  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $profiledetails->Email;}?>" disabled="">
                                </div>
                              </div>
                              <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Edit Email</button>
                                
                              </div>
                            </fieldset>
                          </form>
                    
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->
    
                    <!-- content ends -->
            </div><!--/#content.span10-->
                <!--/fluid-row-->
                

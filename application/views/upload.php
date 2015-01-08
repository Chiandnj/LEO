
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Upload files</div>
                                    <div class="pull-right">
									<?=anchor('upload/download','<i class="icon-list"></i>All files');?>
									

                                    </div>
                                </div>
                                <div class="block-content collapse in">
								<div class="span6">
<?php echo $error;?>
<?php echo form_open_multipart('upload/do_upload');?>
	<div class="widget first">
		<div class="head">
			<!--<h5 class="iList">Fill in the form and click save to insert or update records.</h5>-->
		</div>
												
											<div class="control-group">
                                                                                            <label class="control-label">Upload Date</label>
                                                                                            <div class="controls">
                                                                                               <!--Date -->
                                                                                              <input type="text" class="datepicker" name="minute_date" id="minute_date" value="" data-date-format="yyyy-mm-dd" required/>
                                                                                            </div>
                                                                                            </div>
											<div class="control-group">
												<label class="control-label" for="title"><span style="color:red">*</span> Title</label>
												<div class="controls">
												  <input type="text" name="title" value="" id="title" class="validate[required] span6 m-wrap">												</div>
<div class="fix"></div>
</div>											<div class="control-group">
												<label class="control-label" for="description"> Description</label>
												<div class="controls">
													<textarea name="description" cols="60" rows="8" id="description" class="auto  span6 m-wrap"></textarea>												</div>
											</div>											
				<div class="control-group">
												<label class="control-label" for="document"> Document</label>
												<div class="controls">
									
												  <input type="file" name="userfile" value=""  id="userfile" size="20" class=" span6 m-wrap" />
												 
												  												  												</div>
<div class="fix"></div>
</div>
		<div class="rowElem noborder">
			&nbsp;
			<div class="formRight">
				<button type="submit" name="btnAction" class="btn btn-info">Upload</button>
			</div>
			<div class="fix"></div>
		</div>
		
	</div>
</fieldset>

</form>
							
												
							
							
							
                            </div>
							</div>
                            <!-- /block -->
                        </div>
                        
                        
                        
                    
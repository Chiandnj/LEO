
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Create Category</div>
                            </div>
                            <div class="block-content collapse in">
							<?php echo form_open('category_controller/create_category');?>
			             Category name: <input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>"><?php echo form_error('cat_name','<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button><p>', '</p></div>');?><br /><br />
						 
			             Category description:<br /> <textarea name="cat_description"  value=""></textarea><br /><br />
			             <input type="submit" value="Add category" class="btn btn-info" />
		                 <?php echo form_close();?>
                                
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

		
		   
							 
							
                  
                       

                
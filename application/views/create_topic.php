<script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1"></script>


                    <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Create Topic</div>
                            </div>
                            <div class="block-content collapse in">
							<?php echo form_open('topic_controller/create_topic');?>
			             Subject: <input type="text" name="topic_subject" id="topic_subject" value="<?php echo set_value('topic_subject'); ?>"><?php echo form_error('topic_subject','<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button><p>', '</p></div>');?><br /><br />
			             <input type="hidden" name="topic_cat_id" id="topic_cat_id" >
						 Category:<select name="topic_cat" class="chzn-select" id="topic_cat"><option>Select category</option><?php foreach ($categories as $category){echo '<option>'.$category['cat_id'].$category['cat_name'].'</option>';}?></select><br />
			             Message:<br /><textarea name="post_content" id="post_content" /></textarea><br /><br />
			             <input type="submit" value="Add Topic" class="btn btn-info" />
		               <?php echo form_close(); ?>
                                
                            </div>
                        </div>
                        <!-- /block -->
                    
   <!-- block -->

<?php
if(!$result)

{
	echo 'No topics found!';
}

	else {
	//while($row = mysql_fetch_assoc($result))
	foreach ($result as $row)
	
			//display post data
			echo '<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<tr>
						<th colspan="2">' . $row->topic_subject .'</th>
					</tr>';
		$ed = mysql_real_escape_string($_GET['id']);
		///echo $ed;
		//exit;
			//fetch the posts from the database

			$posts_sql = "SELECT
						post_topic,
						post_content,
						post_date,
						post_by
						
						
					   FROM
						posts
						
						WHERE
							post_topic = " .$ed;
						
						$query=$this->db->query($posts_sql);
			            $posts_result= $query->result();
			//var_dump($posts_result);
			//exit;
			//$posts_result=$this->db->query($posts_sql);
			//$posts_result = mysql_query($posts_sql);
	         //return $posts_result;
			//$posts_result= $query->posts_sql();
			/*var_dump($posts_result);
			die();*/
			
			if(!$posts_result)
			{
				echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
			}
			else
			{
			 foreach ($posts_result as $posts_row)
			//while($posts_row = mysql_fetch_assoc($posts_result))
				{
					echo '<tr class="topic-post">
							<td class="user-post">' . $posts_row->post_by . '<br/>' . date('d-m-Y H:i', strtotime($posts_row->post_date)) . '</td>
							<td class="post-content">' . htmlentities(stripslashes($posts_row->post_content)) . '</td>
							
					
						  </tr>';
						  
						 
						  
				}
				?>
				<tr><td colspan="2"><h2>Reply:</h2><br /><?php echo form_open('reply/reply_post/'.$row->topic_id .'')?>
						<textarea name="post_content"id="post_content" value="<?php echo set_value('post_content'); ?>"><?php echo form_error('post_content','<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button><p>', '</p></div>');?> </textarea><br /><br />
						<input type="submit" value="Submit reply" />
					</form></td></tr>
			<?php
			}
			
			//finish the table
			echo '</table>';
		
	}

							?>
							  
                        <!-- /block -->
                    
        <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url()?>assets/assets/scripts.js"></script>        
		<script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>

                
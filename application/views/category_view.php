
							<?php
							  if(!empty($topicresult))
	{
		echo 'There are no topics in this category.';
	}
	else{
	echo '<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					  <tr>
						<th>Topic</th>
						<th>Created at</th>
					  </tr>';
					  $table=count($result);
					  if ($table==0){
					  echo'<tr><td colspan="2">No data Found</td></tr>';
					  
					  }
					  else{
					  
					  foreach ($result as $topicrow){					  
					  
	echo '<tr><td><a href="'.base_url().'index.php/top/view_top?id=' . $topicrow->topic_id .'">' . $topicrow->topic_subject . '</a></td><td>  ' . date('d-m-Y', strtotime($topicrow->topic_date));
							echo '</td>';
			                echo '</tr>';
							
							
					}
					}
					}

	               
	/*else
	{
		
		
				
		
while($topicrow = mysql_fetch_assoc($topicsresult))
		//foreach ($topicresult as $topicrow){
		
		//fetch last topic for each cat
				
					
					
							
							
						
					}
		/*if(!$topicsresult)
					{
						
						echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> at ' . date('d-m-Y', strtotime($topicrow['topic_date']));
						//echo 'Last topic could not be displayed.';
					}
					else
					{
						if(mysql_num_rows($topicsresult) == 0)
						{
							echo 'no topics';
						}
						else{
						
						foreach ($topicresult as $topicrow){
							//while($topicrow = mysql_fetch_assoc($topicsresult))
							echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> at ' . date('d-m-Y', strtotime($topicrow['topic_date']));
						
					}
					}*/
				
		

	
	
	
	
		
		
		

	
	
	?>
                                
                            
<script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url()?>assets/assets/scripts.js"></script>        <script>
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

                

                        

                         <!-- block -->
                           
                             
                                
							<?php
							if(empty($result))
	{
		echo 'No categories defined yet.';
	}
	else
	{
		//prepare the table
		echo '
  			  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			  <tr>
				<th>Category</th>
				<th>Last topic</th>
			  </tr>
			 '
			  
			  ;	
		foreach ($result as $row)
		{				
		echo '<td class="leftpart">';
				?>
				<h3><a href ="<?php echo base_url().'index.php/cat/user_cat?id='.$row->cat_id?>"><?php echo $row->cat_name;?></a></h3><?php echo $row->cat_description?>
				<?php
				echo '</td>';
				echo '<td class="rightpart">';
				
				//fetch last topic for each cat
					$topicsql = "SELECT
									topic_id,
									topic_subject,
									topic_date,
									topic_cat
								FROM
									topics
								WHERE
									topic_cat = " . $row->cat_id . "
								ORDER BY
									topic_date
								DESC
								LIMIT
									1";
								
					$topicsresult = mysql_query($topicsql);
				
					if(!$topicsresult)
					{
						echo 'Last topic could not be displayed.';
					}
					else
					{
						if(mysql_num_rows($topicsresult) == 0)
						{
							echo 'no topics';
						}
						else
						{
							while($topicrow = mysql_fetch_assoc($topicsresult))
							echo '<a href="'.base_url().'index.php/top/user_top?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> at ' . date('d-m-Y', strtotime($topicrow['topic_date']));
						}
					}
				echo '</td>';
			echo '</tr>';
		}
		
	}

							?>
				
		
		   <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.min.js"></script>
           <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
           <script src="<?php echo base_url()?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
							 
							
                  
                       

                
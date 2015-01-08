
  </div>
            </div>
            
            
        </div>  
<hr>
            <footer>
                <p>&copy; Leo Venturi Investments 2014</p> 
				
            </footer>
        </div>
          
        
        <script src="<?php echo base_url()?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>


       
        
   
       
        <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url()?>assets/assets/scripts.js"></script>
       
		
        <link href="<?php echo base_url()?>assets/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url()?>assets/vendors/chosen.min.css" rel="stylesheet" media="screen">

        

        <script src="<?php echo base_url()?>assets/vendors/jquery-1.9.1.js"></script>
        
        <script src="<?php echo base_url()?>assets/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url()?>assets/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url()?>assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>


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
		<script>
			$(function() {
				$('#topic_cat').change(function(){
				
					var ct_id=$(this).val();
					var link='<?php echo base_url()."index.php/topic_controller/get_id"; ?>';
					$.ajax({
						url:link,
						type:'POST',
						dataType:'JSON',
						data:{'ct_id':ct_id},
						success: function(result){
							var topic_cat_id= result.cat_id;
							$("#topic_cat_id").val(topic_cat_id);		
						}
					});
					
				});
			});
    </script>
	
	<script>
			$(function() {
				$('#payment_from').change(function(){
					var u_id=$(this).val();
					var link='<?php echo base_url()."index.php/receive/get_user/"; ?>'+ u_id +'';
					$.ajax({
						url:link,
						type:'POST',
						dataType:'JSON',
						data:{'u_id':u_id},
						success: function(result){
							var user= result.user_id;
							
							$("#user").val(user);		
						}
						
					});
					
				});
			});
    </script>
	
    </body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Leo Venturi Investments</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>assets/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
   <div class="container">
      
      <?php 
	 $attributes=array('class'=>'form-signin');
									  echo form_open('login_controller', $attributes);
									?>
	  
	  
	  
	    <img align="center"src="<?php echo base_url('assets/images/logo.png');?>"/>
        
        <input type="text" class="input-block-level" id="username" name="username" placeholder="username"><?php echo form_error('username','<div class="alert alert-error"><p>', '</p></div>');?>
        
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password"><?php echo form_error('password','<div class="alert alert-error"><p>', '</p></div>');?>
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
		
		<button  class="btn btn-large btn-block btn-primary" type="submit">Log in</button>
        
		<h3>Don't have an account?</h3>
		<p> <h4 align="center"><?php echo anchor('reg/load_reg','Create an account');?>
		</h4>
       </p> 
		
		<?php echo form_close(); ?>
			 
               
      </form>
	  

    </div>
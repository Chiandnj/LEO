<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leo Venturi Investments Management System</title>

<!--STYLESHEETS-->
<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url()?>assets/login/css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->

<?php 
	 $attributes=array('class'=>'login-form');
									  echo form_open('login_controller', $attributes);
									?>
 
	<!--HEADER-->
    <div class="header">
	
    <img align="center"src="<?php echo base_url('assets/images/logo.png');?>"/>
    <!--DESCRIPTION--><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	
	<!--USERNAME--><input name="username" type="text" class="input username"   placeholder="Username"  onfocus="this.value=''"/><?php echo form_error('username','<div class="alert alert-error"><p>', '</p></div>');?><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password"  placeholder="Password" onfocus="this.value=''"/><?php echo form_error('password','<div class="alert alert-error"><p>', '</p></div>');?><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
	 
	
    <!--REGISTER BUTTON--><a href="<?php echo base_url();?>index.php/reg/load_reg"  class="btn btn-success btn-large"></i>Register</button></a>
	<!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
    <!--END FOOTER-->


    <!--LOGIN BUTTON--><!--END LOGIN BUTTON-->
    
    </div>
	
	
<?php echo form_close(); ?>
</form>
<!--END LOGIN FORM-->
            
            <div  align="center">
<footer>
    	<p>&copy; Leo Venturi Investments 2014</p> All Rights Reserved.
		</footer>
    </div>
</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->


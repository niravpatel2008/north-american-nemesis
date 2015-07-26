<?php
if(isset($this->front_session) && $this->front_session['u_id'] > 0)
	$isLogin = true;
else
	$isLogin = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>One</title>
    <link href="<?=public_path()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=public_path()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=public_path()?>css/flexslider.css" rel="stylesheet">
    <link href="<?=public_path()?>css/stylenew.css" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
   
</head><!--/head-->

<body>
<?php if($isLogin == true ){?>
<div class="signup-btn" style="float: right;">
	<a href="<?=base_url()?>dashboard/">Dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<?=base_url()?>dashboard/change_password" >Change Password</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=base_url()?>index/signout/" >Log Out</a>
</div>
<?php } ?>
<?php if($isLogin == false) { ?>
<div class="signup-btn"  style="float: right;">
	<a class="banner_btn2"  href="<?=base_url()?>signin">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=base_url()?>signup" class="banner_btn2" >Sign Up</a>
</div>
<?php }?>
<div class="header">
  <div class="container"> <a class="navbar-brand" href="index.html"><i class="fa fa-paper-plane"></i> Chat Support</a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="<?=public_path()?>images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li <?php if($this->router->fetch_method()=='index'){echo 'class="current"';} ?>><a href="<?=base_url()?>">Home</a></li>
        <li <?php if($this->router->fetch_method()=='about'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/about">About Us </a></li>
        <li <?php if($this->router->fetch_method()=='services'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/services">Services</a></li>
        <li <?php if($this->router->fetch_method()=='contact'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/contact">Contact Us</a></li>
        <div class="clear"></div>
      </ul>
    </div>
  </div>
</div>
   
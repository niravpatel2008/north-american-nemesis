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
	<title>Reception zone | Support provider</title>
    <link href="<?=public_path()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=public_path()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=public_path()?>css/flexslider.css" rel="stylesheet">
    <link href="<?=public_path()?>css/stylenew.css" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
   	<script src="<?=public_path()?>js/jquery.js"></script>
</head><!--/head-->

<body>

<div class="header">
  <div class="container pos-rel"> <a class="navbar-brand logo" href="<?=base_url()?>"><img src='<?=public_path()?>/images/logo.png' title='Reception Zone' alt='Reception Zone'></a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="<?=public_path()?>images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li <?php if($this->router->fetch_method()=='index'){echo 'class="current"';} ?>><a href="<?=base_url()?>">Home</a></li>
        <li <?php if($this->router->fetch_method()=='services'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/services">Services</a></li>
        <li <?php if($this->router->fetch_method()=='price'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/price">Pricing </a></li>
		<li <?php if($this->router->fetch_method()=='about'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/about">About Us </a></li>
		<li <?php if($this->router->fetch_method()=='contact'){echo 'class="current"';} ?>><a href="<?=base_url()?>index/contact">Contact Us</a></li>
		<li class='mobile-hide'>|</li>
		<?php if($isLogin == false) { ?>
		<li><a href="<?=base_url()?>signin">Sign in</a></li>
		<li><a href="<?=base_url()?>signup">Sign Up</a></li>
		<?php }else {?>
		<li><a href="<?=base_url()?>dashboard/">Dashboard</a></li>
		<li><a href="<?=base_url()?>dashboard/change_password" >Change Password</a></li>
		<li><a href="<?=base_url()?>index/signout/" >Log Out</a></li>
		<?php } ?>
      </ul>
    </div>
  </div>
</div>
   
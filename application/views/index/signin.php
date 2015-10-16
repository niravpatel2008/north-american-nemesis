<!--div class="register-container container" style="width:540px;margin:0 auto;">
	<div class="row">
		
		<div class="register span6">
			<form class="login-form" method="post" id="frmLogin" name="frmLogin" accept-charset="UTF-8">
				<h2>Sign in</h2>
				<label for="firstname"><span class="red">* </span>Username</label>
				<input name="email" title="User Name" type="text" class="input username validate[required]" value="<?= set_value('email'); ?>" id="email" placeholder="User Name" /><?= form_error('email') ?>
				
				<label for="lastname"><span class="red">* </span>Password</label>
				<input name="password" id="password" title="Password" type="password" class="input password validate[required] allow-enter" value="" placeholder="Password" /><?= form_error('password') ?>
				

				<button type="button" class="btn btn-primary btn-lg sumitbtn"  id="btnLogin" name="btnLogin" title="Login" onclick="javascript:userSignup('frmLogin');">Sign in</button>
				</br>
				</br>
				<a href="<?=base_url()?>index/forgetpassword/" id="" class="frgtLink" title="Forget Password">Forget Password</a>
			</form>
		</div>
	</div>
</div-->
<div class="register-container container" style="">
<div class="login-box clearfix animated flipInY">
		<div class="page-icon animated bounceInDown">
			 <i class="fa fa-sign-in"></i>
		</div>
		<div class="login-logo">
			<h2>Sign in</h2>
		</div> 
		<hr>
		<div class="login-form register span6">
			<form id="frmLogin" class="login-form" accept-charset="UTF-8" name="frmLogin" method="post">
				 <input type="text" id="email" class="input username validate[required] input-field" placeholder="User name"> 
				 <input type="password" id="password" class="input password validate[required] allow-enter input-field" placeholder="Password"> 
				 <button id="btnLogin" class="feature_btn" onclick="javascript:userSignup('frmLogin');" title="Login" name="btnLogin" type="button">Sign in</button>
			</form>	
			<div class="login-links"> 
				<a href="<?=base_url()?>index/forgetpassword/">
				   Forgot password?
				</a>
				<br>
				<a href="<?=base_url()?>signup">
				  Don't have an account? <strong>Sign Up</strong>
				</a>
			</div>      		
		</div> 			        	
   </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$("#frmLogin").validationEngine();
});
</script>

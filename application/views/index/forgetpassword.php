
<!--div class="register-container container" style="width:540px;margin:0 auto;">
	<div class="row">
		<div class="register span6">

			<form id="frmForgetPwd" name="frmForgetPwd" method="post">
				<h2>Forget password</h2>

				<label for="email">Email</label>
				<input type="text" name="email" placeholder="enter your email..." class="validate[required,custom[email]] allow-enter" id="email" value="<?= set_value('email'); ?>" ><?= form_error('email') ?>

				<button type="button" class="btn btn-primary btn-lg sumitbtn"  id="btnForgetPwd" name="btnForgetPwd" title="Forget Password" onclick="javascript:userSignup('frmForgetPwd');">Submit</button>
			</form>
		</div>
	</div>
</div-->

<div class="register-container container" style="width:540px;margin:50px auto;">
<div class="login-box clearfix animated flipInY">
		<div class="page-icon animated bounceInDown">
			 <i class="fa fa-key"></i>
		</div>
		<div class="login-logo">
			<h2>Forget password</h2>
		</div> 
		<hr>
		<div class="login-form register span6">
			<form class="login-form" id="frmForgetPwd" name="frmForgetPwd" method="post">
				 <label for="email">Email</label>
				<input type="text" name="email" placeholder="enter your email..." class="validate[required,custom[email]] allow-enter input-field" id="email" value="<?= set_value('email'); ?>" ><?= form_error('email') ?>

				<button type="button" class="btn btn-login btn-primary btn-lg sumitbtn"  id="btnForgetPwd" name="btnForgetPwd" title="Forget Password" onclick="javascript:userSignup('frmForgetPwd');">Submit</button>
			</form>	
			<div class="login-links"> 
				<a href="<?=base_url()?>signin">
				  Already have an account? <strong>Sign In</strong>
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
	$("#frmForgetPwd").validationEngine();
});
</script>

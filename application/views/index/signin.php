<div class="register-container container" style="width:540px;margin:0 auto;">
	<div class="row">
		
		<div class="register span6">
			<!--<form action="" method="post">-->
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
</div>

<script type="text/javascript">
$(document).ready(function() {
	$("#frmLogin").validationEngine();
});
</script>

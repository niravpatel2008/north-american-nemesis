<!-- div class="register-container container" style="width:540px;margin:0 auto;">
	<div class="row">
		
		<div class="register span6">
		
			<form id="frmSignup" name="frmSignup" method="post" accept-charset="UTF-8">
				<h2>REGISTER</h2>
				<label for="firstname"><span class="red">* </span>First Name</label>
				<input type="text" placeholder="enter your first name..." name="fname" id="fname" value="<?= set_value('fname'); ?>" class="validate[required]"><?= my_form_error('fname') ?>
				
				<label for="lastname"><span class="red">* </span>Last Name</label>
				<input type="text" placeholder="enter your first name..." name="lname" class="validate[required]" id="lname" value="<?= set_value('lname'); ?>" ><?= my_form_error('lname') ?>
				
				<label for="email"><span class="red">* </span>Email<span style="font-size:10px;color:#777;"> (email must be unique)</span></label>
				<input type="text" name="email" placeholder="enter your email..." class="validate[required,custom[email]]" id="email" value="<?= set_value('email'); ?>" ><?= my_form_error('email') ?>

				<label for="password"><span class="red">* </span>Password</label>
				<input type="password" id="password" name="password" class="validate[required,minSize[5]]" placeholder="choose a password..."><?= my_form_error('password'); ?>

				<label for="password2"><span class="red">* </span>Confirm Password</label>
				<input type="password" id="password2" name="password2" class="validate[required,equals[password]]" placeholder="Enter password again..."><?= my_form_error('password2'); ?>

				<label for="phone">Phone</label>
				<input type="text" placeholder="enter your phone no..." name="phone" id="phone" value="<?= set_value('phone'); ?>" maxlength="12"><?= my_form_error('phone') ?>

				<label for="website"><span class="red">* </span>Website
				<span style="font-size:10px;color:#777;"> (website must be unique)</span>
				</label>
				<input type="text" name="website" id="website" placeholder="enter your website..." class="validate[required,url]" value="<?= set_value('website'); ?>" ><?= my_form_error('website') ?>

				<label for="subdomain"><span class="red">* </span>Subdomain Name <span style="font-size:10px;color:#777;">(e.g.{subdomain}.chat.com & it must be unique)</span></label>
				<input type="text" name="subdomain" id="subdomain" placeholder="enter your subdomain prefix..." class="validate[required]" value="<?= set_value('subdomain'); ?>" ><?= my_form_error('subdomain') ?>

				<label for="plan">Select Plan</label>
				<select id="planSelect" name="planSelect">
					<?php
					foreach ($packages as $k=>$item) {?>
						<option value="<?= $item->package_id;?>"><?= $item->package_name." - $".$item->package_price." for ".$item->package_description;?></option>
					<?php }?>
				</select>

				
				<button type="submit" class="btn btn-primary btn-lg"  id="btnRegUser" name="btnRegUser" title="Register">REGISTER</button>
			</form>
		</div>
	</div>
</div -->


<div class="register-container container" style="">
<div class="login-box clearfix animated flipInY">
		<div class="page-icon animated bounceInDown">
			 <i class="fa fa-user"></i>
		</div>
		<div class="login-logo">
			<h2>Sign Up</h2>
		</div> 
		<hr>
		<div class="login-form register">
			<form id="frmSignup" class="login-form" name="frmSignup" method="post" accept-charset="UTF-8">
				<label for="firstname"><span >* </span>First Name</label>
				<input type="text" placeholder="enter your first name..." name="fname" id="fname" value="<?= set_value('fname'); ?>" class="validate[required] input-field"><?= my_form_error('fname') ?>
				
				<label for="lastname"><span >* </span>Last Name</label>
				<input type="text" placeholder="enter your first name..." name="lname" class="validate[required] input-field" id="lname" value="<?= set_value('lname'); ?>" ><?= my_form_error('lname') ?>
				
				<label for="email"><span >* </span>Email<span style="font-size:10px;"> (email must be unique)</span></label>
				<input type="text" name="email" placeholder="enter your email..." class="validate[required,custom[email]] input-field" id="email" value="<?= set_value('email'); ?>" ><?= my_form_error('email') ?>

				<label for="password"><span >* </span>Password</label>
				<input type="password" id="password" name="password" class="validate[required,minSize[5]] input-field" placeholder="choose a password..."><?= my_form_error('password'); ?>

				<label for="password2"><span >* </span>Confirm Password</label>
				<input type="password" id="password2" name="password2" class="validate[required,equals[password]] input-field" placeholder="Enter password again..."><?= my_form_error('password2'); ?>

				<label for="phone">Phone</label>
				<input type="text" placeholder="enter your phone no..." name="phone" id="phone" value="<?= set_value('phone'); ?>" maxlength="12" class='input-field'><?= my_form_error('phone') ?>

				<label for="website"><span >* </span>Website
				<span style="font-size:10px;"> (website must be unique)</span>
				</label>
				<input type="text" name="website" id="website" placeholder="enter your website..." class="validate[required,url] input-field" value="<?= set_value('website'); ?>" ><?= my_form_error('website') ?>

				<label for="subdomain"><span >* </span>Subdomain Name <span style="font-size:10px;">(e.g.{subdomain}.chat.com & it must be unique)</span></label>
				<input type="text" name="subdomain" id="subdomain" placeholder="enter your subdomain prefix..." class="validate[required] input-field" value="<?= set_value('subdomain'); ?>" ><?= my_form_error('subdomain') ?>

				<label for="plan">Select Plan</label>
				<select id="planSelect" name="planSelect" class="input-field">
					<?php
					foreach ($packages as $k=>$item) {?>
						<option value="<?= $item->package_id;?>"><?= $item->package_name." - $".$item->package_price." for ".$item->package_description;?></option>
					<?php }?>
				</select>
				<button type="submit" class="feature_btn"  id="btnRegUser" name="btnRegUser" title="Register">REGISTER</button>
			</form>
			<div class="login-links"> 
				<a href="<?=base_url()?>signin">
				  Already have an account? <strong>Sign In</strong>
				</a>
			</div>      		
		</div> 			        	
   </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$("#frmSignup").validationEngine();
});
</script>

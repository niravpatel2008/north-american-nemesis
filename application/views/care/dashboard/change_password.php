<section class="content-header">
	<h1>Change password</h1>
</section>

<section class="content">
<div class="col-md-6">
	<div class='box box-solid'>
		<div class="box-body">
			<form id="frmChangePwd" data-validate="true" name="frmChangePwd" method="post" accept-charset="UTF-8">
				<div class="form-group">
                    <label for="firstname"><span class="red">* </span>New Password</label>
					<input type="password" id="password" name="password" class="form-control validate[required]" placeholder="enter current password..."><?= form_error('password'); ?>
				</div>

				<div class="form-group">
                    <label for="lastname"><span class="red">* </span>Confirm Password</label>
					<input type="password" id="password2" name="password2" class="form-control validate[required,equals[password]]" placeholder="enter new password ..."><?= form_error('password2'); ?>
				</div>

				<div class="form-group">
					<button type="button" class="btn btn-primary btn-lg"  id="btnChangePwd" name="btnChangePwd" title="Change Password" onclick="javascript:userSignup('frmChangePwd');">Change Password</button>
				</div>
			</form>
		</div>
	</div>
</section>

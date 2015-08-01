<section class="content-header">
	<h1>Edit Profile</h1>
</section>

<section class="content">
<div class="col-md-6">
	<div class='box box-solid'>
		<div class="box-body">
			<form id="frmProfile" data-validate="true" name="frmProfile" method="post" accept-charset="UTF-8">
				<div class="form-group">
                    <label for="firstname"><span class="red">* </span>First Name</label>
					<input type="text" placeholder="enter your first name..." name="fname" id="fname" value="<?php echo $user->u_fname; ?>" class="form-control validate[required]"><?= my_form_error('fname') ?>
				</div>

				<div class="form-group">
                    <label for="lastname"><span class="red">* </span>Last Name</label>
					<input type="text" placeholder="enter your first name..." name="lname" class="form-control validate[required]" id="lname" value="<?php echo $user->u_lname; ?>" ><?= my_form_error('lname') ?>
				</div>

				<div class="form-group">
                    <label for="phone">Phone</label>
					<input type="text" placeholder="enter your phone no..." class='form-control' name="phone" id="phone" value="<?php echo $user->u_phone; ?>" maxlength="12"><?= my_form_error('phone') ?>
				</div>

				<div class="form-group">
                    <label for="email">Email: </label>
					<span class='form-control'><b><?php echo $user->u_email; ?></b></span>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg"  id="btnRegUser" name="btnRegUser" title="Register">UPDATE</button>
				</div>
			</form>
		</div>
	</div>
</section>
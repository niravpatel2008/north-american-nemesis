<section class="content-header">
	<h1>Complaint box</h1>
</section>

<section class="content">
	<div class="col-md-6">
	<div class='box box-solid'>
		<div class="box-body">
			<form id="frmComplaint" name="frmComplaint" method="post" accept-charset="UTF-8">
				<div class="form-group">
                    <label for="firstname"><span class="red">* </span>Subdomain</label>
					<select id="subdomain" name="subdomain" class=" form-control validate[required]">
					<?php 
						foreach ($user_plan as $k=>$item)
						{
						?>
							<option value="<?= $item->up_subdomain;?>"><?=$item->up_subdomain;?></option>
						<?php  }?>
					</select>
				</div>
				
				<!--<input type="text" placeholder="enter your subdomain..." name="subdomain" id="subdomain" class="validate[required]" value="<?= set_value('subdomain'); ?>"><?= my_form_error('subdomain') ?>-->
				
				<div class="form-group">
					<label for="lastname"><span class="red">* </span>Name</label>
					<input type="text" placeholder="enter your name..." name="name" class="form-control validate[required]" id="name" readonly value="<?= $this->front_session['u_name']; ?>" ><?= my_form_error('name') ?>
				</div>
				
				<div class="form-group">
					<label for="email"><span class="red">* </span>Email</label>
					<input type="text" name="email" placeholder="enter your email..." class="form-control validate[required,custom[email]]" readonly id="email" value="<?=$this->front_session['u_email']; ?>" ><?= my_form_error('email') ?>
				</div>

				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" placeholder="enter your phone no..." class='form-control' name="phone" id="phone" value="<?= set_value('phone'); ?>" maxlength="12"><?= my_form_error('phone') ?>
				</div>
			
				<div class="form-group">
					<label for="subdomain"><span class="red">* </span>Comment</label>
					<textarea name="comment" id="comment" placeholder="enter your comment..." class="validate[required] form-control" ><?= set_value('comment'); ?></textarea><?= my_form_error('subdomain') ?>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg"  id="btnCompUser" name="btnCompUser" title="Submit complain">SUBMIT</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</section>
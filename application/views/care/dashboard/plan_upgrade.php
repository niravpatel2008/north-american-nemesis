<section class="content-header">
	<h1>Upgrade Plan</h1>
</section>

<section class="content" id="purchasePlan">
<div class="col-md-6">
	<div class='box box-solid'>
		<div class="box-body">
			<form id="frmPlanUpgrade" role='form' name="frmPlanUpgrade" method="post">
				<input type="hidden" id="hdnUid" name="hdnUid" value="<?=$user->u_id;?>" />
				<div class="form-group">
					<label for="email">Name: </label>
					<span class='form-control'><b><?= $user->u_fname." ".$user->u_lname; ?></b></span>
				</div>
				<div class="form-group">
					<label for="email">Username : </label>
					<span class='form-control'><b><?php echo $user->u_email;?></b></span>
				</div>
				<div class="form-group">
					<label>Select domain:</label>
					<select id="domainSelect" name="domainSelect" class='form-control'>
					<?php 
						foreach ($user_plan as $k=>$item)
						{
						?>
							<option value="<?= $item->up_id;?>"><?= $item->up_website." - ".$item->up_subdomain;?></option>
						<?php  }?>
					</select>
				</div>
				<div class="form-group">
					<label>Select Plan:</label>
					<select id="planSelect" name="planSelect" class='form-control'>
					<!--<option value=""> </option>-->
					<?php 
					foreach ($packages as $k=>$item)
					{
					if($item->package_id!=1) {
					?>
						<option value="<?= $item->package_id;?>"><?= $item->package_name." - $".$item->package_price." for ".$item->package_description;?></option>
					<?php } }?>
				</select>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg"  id="btnUpgradePlan" name="btnUpgradePlan" title="Upgrade Plan">Upgrade Plan</button>
				</div>
			</form>
		</div>
	</div>
</div>
</section>
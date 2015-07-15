<section class="content-header">
	<h1>Purchase more domain</h1>
</section>

<section class="content">
	<div class="col-md-6">
	<div class='box box-solid'>
		<div class="box-body">
			<form id="frmPurchase" role="form" name="frmPurchase" method="post" accept-charset="UTF-8">
				<div class="form-group">
                    <label for="website"><span class="red">* </span>Website (website must be unique)</label>
					<input type="text" name="website" id="website" placeholder="enter your website..." class="form-control validate[required,url]" value="<?= set_value('website'); ?>" ><?= my_form_error('website') ?>
				</div>

				<div class="form-group">
                    <label for="website"><span class="red">* </span>Subdomain Name (e.g.{subdomain}.chat.com & it must be unique)</label>
					<input type="text" name="subdomain" id="subdomain" placeholder="enter your subdomain prefix..." class="form-control validate[required]" value="<?= set_value('subdomain'); ?>" ><?= my_form_error('subdomain') ?>
				</div>

				<div class="form-group">
                    <label for="plan">Select Plan</label>
					<select id="planSelect" name="planSelect" class='form-control'>
						<?php
						foreach ($packages as $k=>$item) {?>
							<option value="<?= $item->package_id;?>"><?= $item->package_name." - $".$item->package_price." for ".$item->package_description;?></option>
						<?php }?>
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg"  id="btnRegUser" name="btnRegUser" title="Register">PURCHASE</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	$("#frmPurchase").validationEngine();
});
</script>

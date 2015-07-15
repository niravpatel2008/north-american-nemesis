<section class="content-header">
</section>
<section class="content" id="dashboard">
<?php
$packageArr = getPackages();
?>
		<div class="box_care">
			<div class="gap">
				<div class="center">
				<h4>Give 24/7 support to your customer</h4>
				<h4>Grow your business with us</h4>
				</div>
				<div class="row">
                    <div class="col-lg-3 col-md-6">
						<div class="small-box bg-aqua">
							<div class="inner"><h3>5</h3><p>Agents!</p></div>
							<div class="icon"><i class="fa fa-users"></i></div>
							<a class="small-box-footer" href="#">More info<i class="fa fa-arrow-circle-right"></i></a>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
						<div class="small-box bg-green">
							<div class="inner"><h3>12</h3><p>Pending users!</p></div>
							<div class="icon"><i class="fa fa-tasks"></i></div>
							<a class="small-box-footer" href="#">More info<i class="fa fa-arrow-circle-right"></i></a>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
						<div class="small-box bg-yellow">
							<div class="inner"><h3>124</h3><p>New Chats!</p></div>
							<div class="icon"><i class="fa fa-tasks"></i></div>
							<a class="small-box-footer" href="#">More info<i class="fa fa-arrow-circle-right"></i></a>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
						<div class="small-box bg-red">
							<div class="inner"><h3>13</h3><p>New Chats!</p></div>
							<div class="icon"><i class="fa fa-support"></i></div>
							<a class="small-box-footer" href="#">Support Tickets!<i class="fa fa-arrow-circle-right"></i></a>
						</div>
                    </div>
                </div>
				<div class="row">
				<?php foreach($user as $domain) { ?>
					<div class=" col-sm-6">
						<div class="box box-success">
								<div class="box-header">
									<h3 class="box-title">Account detail for " <?php echo $domain->up_subdomain?> "</h3>
								</div>
								<div class="box-body">
									<dl class="dl-horizontal">
										<dt>Your account url</dt>
										<dd><a href="http://<?php echo $domain->up_subdomain?>.chat.com" target="_blank"> <?php echo $domain->up_subdomain?>.chat.com</a></dd>
										<dt>Username</dt>
										<dd><?php echo $domain->up_subdomain;?></dd>
										<dt>Your Plan</dt>
										<dd><?=$packageArr[$domain->up_package_id-1]->package_name;?></dd>
										<dt>Plan Expiry date</dt>
										<dd><?php echo $domain->up_package_expiry_date?></dd>
									</dl>
								</div>
						</div>
					</div>
				<?php } ?>
					<div class=" col-sm-6">
					<div class="box box-warning">
							<div class="box-header">
								<h3 class="box-title">Profile</h3>
							</div>
							<div class="box-body">
								<dl class="dl-horizontal">
									<dt>Email</dt>
									<dd><?php echo $user[0]->u_email;?></dd>
									<dt>Phone number</dt>
									<dd><?php echo $user[0]->u_phone;?></dd>
									<dt>Status</dt>
									<dd><?php if($user[0]->u_active==1) { echo "Active"; } else { echo "Inactive"; } ?></dd>
								</dl>
							</div>
					</div>
					</div>
                </div>
				<div class='row'>
				<?php foreach($user as $domain) { ?>
					<div class="col-md-12 code">
					<p>Copy the code from the below textarea to the page where you want your status to appear on this site <b><?php echo $domain->up_subdomain?></b></p>
						<textarea name="chatcode" rows="14" class="form-control" id="chatcode"><script type="text/javascript">
						var LHCChatOptions = {};
						LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
						(function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						var refferer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
						var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
						po.src = '//<?php echo $domain->up_subdomain?>.chat.com/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+refferer+'&l='+location;
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						})();
					</script>	
					
					</textarea>
					</div>
				<?php } ?>
				</div>
			<div style="clear:both;"></div>
		</div><!--/.box-->
	</div><!--/.container-->
</section>
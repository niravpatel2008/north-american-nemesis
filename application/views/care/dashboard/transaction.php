<section class="content-header">
	<h1>Transaction History</h1>
</section>

<section class="content">
	<div class="col-md-12">
	<div class='box box-solid'>
		<div class="box-body">
				<?php
				  if(empty($user_plan))
				  {
						echo "No Transaction has been made yet.";
				  }
				  else
				  {
				?>
				<table class="table table-bordered">
					<thead>
						  <tr>
							  <th><i class="fa fa-bookmark"></i> Website</th>
							  <th><i class="fa fa-bookmark"></i> Subdomain</th>
							  <th><i class="fa fa-bookmark"></i> Package</th>
							  <th><i class="fa fa-bookmark"></i> Expiry Date</th>
							  <th><i class=" fa fa-edit"></i> Status</th>
							  <th></th>
						  </tr>
						  </thead>
						  <tbody>
						  <?php
						  foreach($user_plan as $k=>$v)
						  {
							  if(strtolower($v->up_status) == 'active')
								  $cls = "label label-success";
							  else
								  $cls ="label label-danger";
							  ?>
							<tr>
								<td><?=$v->up_website;?></td>
								<td><?=$v->up_subdomain;?></td>
								<td><?=$v->package_name.' - $'.$v->package_price;?></td>
								<td><?=date('Y-m-d',strtotime($v->up_package_expiry_date));?></td>
								<td><span class="<?=$cls;?>"><?=$v->up_status;?></span></td>
							</tr>
						  <?php }
						  ?>
						</tbody>
				</table>
				<?php }?>
		</div>
	</div>
	</div>
</section>
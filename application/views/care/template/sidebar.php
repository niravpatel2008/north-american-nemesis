<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<!--<div class="pull-left image">
			<img alt="User Image" class="img-circle" src="img/avatar3.png">
		</div> -->
		<div class="pull-left info">
			<p>Hello, <?php echo $this->front_session['u_name'];?></p>
			<!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
		</div>
	</div>
	<!-- search form -->
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
		<li <?php if($this->router->fetch_class()=='dashboard' && $this->router->fetch_method()=='index'){ echo"class='active'";} ?> >
			<a href="<?=base_url()?>dashboard/">Dashboard</a>
		</li>
		<li <?php if($this->router->fetch_class()=='dashboard' && $this->router->fetch_method()=='plan_upgrade'){ echo"class='active'";} ?>>
			<a href="<?=base_url()?>dashboard/plan_upgrade">Upgrade Plan</a>
		</li>
		<li <?php if($this->router->fetch_class()=='dashboard' && $this->router->fetch_method()=='profile'){ echo"class='active'";} ?>>
			<a href="<?=base_url()?>dashboard/profile">Profile</a>
		</li>
		<li <?php if($this->router->fetch_class()=='dashboard' && $this->router->fetch_method()=='purchase'){ echo"class='active'";} ?>>
			<a href="<?=base_url()?>dashboard/purchase">Purchase more domain</a>
		</li>
		<li <?php if($this->router->fetch_class()=='dashboard' && $this->router->fetch_method()=='transaction'){ echo"class='active'";} ?>>
			<a href="<?=base_url()?>dashboard/transaction">Transactions</a>
		</li>
		<li <?php if($this->router->fetch_class()=='complaint' && $this->router->fetch_method()=='index'){ echo"class='active'";} ?>>
			<a href="<?=base_url()?>complaint">Complaint</a>
		</li>
	</ul>
</section>
<!-- /.sidebar -->
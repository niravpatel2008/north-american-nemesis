<a class="logo" href="<?=base_url()?>">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav role="navigation" class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a role="button" data-toggle="offcanvas" class="sidebar-toggle" href="#">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span><?=$this->front_session['u_name'];?> <i class="fa fa-angle-down"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url()?>" target="_blank">Home</a></li>
								<li><a href="<?=base_url()?>dashboard/change_password" >Change Password</a></li>
								<li><a href="<?=base_url()?>index/signout/" >Log Out</a></li>
							</ul>
                        </li>
                    </ul>
                </div>
            </nav>

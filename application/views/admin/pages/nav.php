<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?=site_url();?>admin_home">Admin</a>
	</div>

	<ul class="nav navbar-top-links navbar-right">
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
				</li>
				<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
				</li>
				<li class="divider"></li>
				<li><a href="<?=site_url();?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
		</li>
	</ul>

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				
				<li>
					<a class="navid" href="<?=site_url();?>admin_home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
				</li>
				
				<li>
					<a class="navid" href="<?=site_url();?>admin_gallery"><i class="fa fa-image fa-fw"></i>Gallery</a>
				</li>
				
				<li>
					<a class="navid" href="<?=site_url();?>admin_note"><i class="fa fa-sticky-note fa-fw"></i>Add Notes</a>
				</li>
				
				<li>
					<a class="navid" href="<?=site_url();?>admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>

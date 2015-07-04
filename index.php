<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Konter Pintar</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="ace/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="ace/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="ace/assets/css/font-awesome.min.css" />
		<script src="Js/jquery.min.js"></script>

		<!--[if IE 7]>
		  <link rel="stylesheet" href="ace/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="ace/assets/css/ace.min.css" />
		<link rel="stylesheet" href="ace/assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="ace/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="ace/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
	<?php
	include 'inc/koneksi.php';
	?>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="index.php" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Konter Pintar
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success" id="jumlah1"></span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer" id="load-pesan">

							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="ace/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<?php 
				@$page  = $_GET['page'];
				?>
				<ul class="nav nav-list">
					<li <?php if ($page == "") { ?>class="active"<?php } ?>>
						<a href="index.php">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					<li <?php if ($page == "inbox") { ?>class="active"<?php } ?>>
						<a href="?page=inbox">
							<i class="icon-inbox"></i>
							<span class="menu-text"> Kotak Masuk </span>
						</a>
					</li>
					<li <?php if ($page == "outbox") { ?>class="active"<?php } ?>>
						<a href="?page=outbox">
							<i class="icon-envelope"></i>
							<span class="menu-text"> Kotak Keluar </span>
						</a>
					</li>
					<li <?php if ($page == "sentitem") { ?>class="active"<?php } ?>>
						<a href="?page=sentitem">
							<i class="icon-external-link"></i>
							<span class="menu-text"> Pesan Terkirim </span>
						</a>
					</li>
					<li <?php if ($page == "setting") { ?>class="active"<?php } ?>>
						<a href="?page=setting">
							<i class="icon-cogs"></i>
							<span class="menu-text"> Pengaturan </span>
						</a>
					</li>
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="page-content">
				<?php
					include 'inc/content.php';
				?>
				</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='ace/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="ace/assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="ace/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="ace/assets/js/jquery.ui.touch-punch.min.js"></script>


		<!--ace scripts-->

		<script src="ace/assets/js/ace-elements.min.js"></script>
		<script src="ace/assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

	</body>
	<script type="text/javascript">
	setInterval(function() { $("#jumlah1").load("inc/check-inbox.php"); $("#jumlah").load("inc/check-inbox.php");
		$("#load-pesan").load("inc/tampil-pesan.php");
}, 100);
	</script>
		</html>

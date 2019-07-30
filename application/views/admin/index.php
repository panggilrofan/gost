<body class="">
	<div class="wrapper ">
		<!-- SideBar -->
		<div class="sidebar" data-color="azure" data-background-color="white"
			data-image="<?php echo base_url('assets/img/sidebar-1.jpg')?>">
			<!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					E41172094
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('admin/timdev'); ?>">
							<i class="material-icons">person</i>
							<p>Tim Dev</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('admin/portofolio') ?>">
							<i class="material-icons">table_chart</i>
							<p>Portofolio</p>
						</a>
					</li>

				</ul>
			</div>
		</div>
		<!-- End SideBar -->
		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="index.php?product">Tabel</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<form class="navbar-form" action="#" method="post">
							<div class="input-group no-border">
								<button type="submit" name="logout" value="ok" class="btn btn-danger btn-round">
									<i class="material-icons">power_settings_new</i> Logout
									<div class="ripple-container"></div>
								</button>
							</div>
						</form>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-warning card-header-icon">
									<div class="card-icon">
										<i class="material-icons">content_copy</i>
									</div>
									<p class="card-category">Jumlah Barang</p>
									<h3 class="card-title">
										<small>Data</small>
									</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-danger">warning</i>
										<a href="#pablo">Get More Space...</a>
									</div>
								</div>
							</div>
						</div>


					</div>


				</div>
			</div>

<body class="">
	<div class="wrapper ">
		<!-- SideBar -->
		<div class="sidebar" data-color="orange" data-background-color="white"
			data-image="<?php echo base_url('assets/img/sidebar-1.jpg')?>">
			<!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
			<div class="logo">
				<a href="#" class="simple-text logo-normal">
					E41172094
				</a>
			</div>
			<!-- sebenarnya menu side bar bisa di buat dinamis tapi males wkwk -->
			<!-- BEGIN MENU BAR -->
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item">
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
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('admin/portofolio/tambahPortofolio') ?>">
							<i class="material-icons">table_chart</i>
							<p>Tambah Portofolio</p>
						</a>
					</li>

				</ul>
			</div>
			<!-- END MENU BAR -->
		</div>
		<!-- End SideBar -->
		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="index.php?page=profile">Tambah Barang</a>
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

						<div class="col-md-8">

							<div class="card">
								<div class="card-header card-header-warning">
									<h4 class="card-title">Form Barang</h4>
									<p class="card-category">Menambahkan data baru</p>
								</div>
								<div class="card-body">
									<form action="<?= base_url('admin/portofolio/tambahPortofolio') ?>" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="bmd-label-floating" for="nama_barang">Judul
													</label>
													<input type="text" name="judul"
														value="<?php echo set_value('judul') ?>" class="form-control"
														id="judul">
												</div>
											</div>
										</div>
										<?= form_error('judul', '<small class="text-danger">','</small>'); ?>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="bmd-label-floating" for="link">Link
													</label>
													<input type="text" name="link"
														value="<?php echo set_value('link') ?>" class="form-control"
														id="link">
												</div>
											</div>
										</div>
										<?= form_error('link', '<small class="text-danger">','</small>'); ?>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating" for="jenis">Jenis </label>
													<input type="text" value="<?php echo set_value('jenis'); ?>"
														name="jenis" class="form-control">
												</div>
											</div>
										</div>
										<?= form_error('jenis', '<small class="text-danger">','</small>'); ?>
										<div class="row">
											<div class="col-md-7">
												<div class="form-group form-file-upload form-file-multiple">
													<input type="file" multiple="" class="inputFileHidden">
													<label class="bmd-label-floating" for="gambar">Gambar barang
													</label>
													<div class="input-group">
														<input type="text" class="form-control inputFileVisible"
															name="gambar">
														<span class="input-group-btn">
															<button type="button"
																class="btn btn-fab btn-round btn-primary">
																<i class="material-icons">attach_file</i>
															</button>
														</span>
													</div>
												</div>
											</div>
										</div>
										<?= form_error('gambar', '<small class="text-danger">','</small>'); ?>
										<a href="<?= base_url('admin/portofolio'); ?>" class="btn btn-danger pull-right">Kembali
											<i class="material-icons">cancel</i>
											<div class="ripple-container"></div>
										</a>
										<button type="submit" class="btn btn-primary pull-right">
											Simpan
											<i class="material-icons">send</i>
											<div class="ripple-container"></div>
										</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="<?= base_url('admin_assets/img/faces/user.png'); ?>" />
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-gray">Admin</h6>
									<h4 class="card-title">Ferdian Nada</h4>
									<p class="card-description">
										Melakukan penambahan data!
									</p>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

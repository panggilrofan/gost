<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color="green" data-background-color="white"
			data-image="<?php echo base_url('admin_assets/img/sidebar-1.jpg')?>">
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
						<a class="nav-link" href="<?php echo base_url('admin/portofolio') ?>">
							<i class="material-icons">table_chart</i>
							<p>Portofolio</p>
						</a>
					</li>

				</ul>
			</div>
		</div>
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

								<a href="<?= base_url('admin/portofolio/tambahPortofolio'); ?>" class="btn btn-success btn-round">
									<i class="material-icons">add_circle</i> Tambah Data
									<div class="ripple-container"></div>
								</a>

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
						<div class="col-md-12">
							<div class="col-md-5">

							</div>
							<div class="card">
								<div class="card-header card-header-success">
									<h4 class="card-title ">Daftar Portofolio</h4>
									<p class="card-category"> Di bawah merupakan <b>Data Portofolio</b></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class=" text-warning">
												<th>ID</th>
												<th>Judul</th>
												<th>Jenis</th>
												<th>Link</th>
												<th>Gambar</th>
												<th>Menu</th>
											</thead>
											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($daftar_portofolio as $dp): ?>
												<tr>
													<td><?= $i; ?></td>
													<td><?= $dp['judul']; ?></td>
													<td class="text-danger">
														<b><?= $dp['jenis']; ?></b></td>
													<td><?= $dp['link']; ?></td>
													<td><?= $dp['gambar']; ?></td>
													<td class="td-actions">
														<a href="<?= base_url(); ?>admin/portofolio/editPortofolio/<?= $dp['id']; ?>"
															rel="tooltip" title="Edit Task"
															class="btn btn-primary btn-link btn-sm">
															<i class="material-icons">edit</i>
														</a>
														<a href="<?= base_url(); ?>admin/portofolio/hapusPortofolio/<?= $dp['id']; ?>"
															onclick="return confirm('yakin?')" rel="tooltip"
															title="Remove" class="btn btn-danger btn-link btn-sm">
															<i class="material-icons">close</i>
														</a>
														<button type="button" rel="tooltip" title="Detil"
															class="btn btn-warning btn-link btn-sm">
															<i class="material-icons">info</i>
														</button>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endforeach; ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

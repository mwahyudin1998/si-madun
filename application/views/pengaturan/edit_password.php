<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Navbar Menu -->
		<?php $this->load->view("admin/_partials/navbar.php") ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Pengaturan User</h1>
						</div>
						<div class="col-sm-6">

						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<!-- /.card-header -->

								<?php if ($this->session->flashdata('success')) : ?>
									<div class="alert alert-success" role="alert">
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								<?php elseif ($this->session->flashdata('failed')) : ?>
									<div class="alert alert-danger" role="alert">
										<?php echo $this->session->flashdata('failed'); ?>
									</div>
								<?php endif; ?>

								<!-- Card  -->
								<div class="card mb-3">
									<div class="card-header">
										<a href="<?php echo site_url('admin/dashboard') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
									</div>
									<div class="card-body">

										<ul class="nav nav-tabs">
											<li class="nav-item">
												<a class="nav-link <?php echo $this->uri->segment(2) == 'data' ? 'active' : '' ?>" aria-current="page" href="<?= site_url('pengaturan/data') ?>">Ubah Data User</a>
											</li>
											<li class="nav-item">
												<a class="nav-link <?php echo $this->uri->segment(2) == 'password' ? 'active' : '' ?>" aria-current="page" href="<?= site_url('pengaturan/password') ?>">Ubah Password</a>
											</li>
										</ul>

										<form action="" method="post" enctype="multipart/form-data">

											<div class="card-body">
												<h4 class="upper"><b>Ubah Password</b></h4>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="old_password">Password Lama</label>
												<div class="col-sm-9 px-0">
													<input class="form-control <?php echo form_error('old_password') ? 'is-invalid' : '' ?>" type="password" id="old_password" name="old_password" value="<?= isset($old_password) ? $old_password : "" ?>" placeholder="Masukan password lama" />
													<div class="invalid-feedback">
														<?php echo form_error('old_password') ?>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="password">Password Baru</label>
												<div class="col-sm-9 px-0">
													<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" id="password" name="password" value="<?= isset($password) ? $password : "" ?>" placeholder="Masukan password baru" />
													<div class="invalid-feedback">
														<?php echo form_error('password') ?>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="confirm_password">Verifikasi Password</label>
												<div class="col-sm-9 px-0">
													<input class="form-control <?php echo form_error('confirm_password') ? 'is-invalid' : '' ?>" type="password" id="confirm_password" name="confirm_password" value="<?= isset($confirm_password) ? $confirm_password : "" ?>" placeholder="Konfirmasi password baru" />
													<div class="invalid-feedback">
														<?php echo form_error('confirm_password') ?>
													</div>
												</div>
											</div>

											<input class="btn btn-success" type="submit" value="Simpan" />
										</form>

									</div>
								</div>

								<!-- /.container-fluid -->

								<!-- Sticky Footer -->
								<?php $this->load->view("admin/_partials/footer.php") ?>

							</div>
							<!-- /.content-wrapper -->

						</div>
						<!-- /#wrapper -->

						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<?php $this->load->view("admin/_partials/js.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>
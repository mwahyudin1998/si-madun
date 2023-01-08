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
							<h1>Form Ubah Data User</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><?php $this->load->view("admin/_partials/breadcrumb.php") ?></li>
							</ol>
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
								<?php endif; ?>

								<!-- Card  -->
								<div class="card mb-3">
									<div class="card-header">
										<a href="<?php echo site_url('admin/users') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
									</div>
									<div class="card-body">

										<form action="" method="post" enctype="multipart/form-data">

											<input type="hidden" name="id" value="<?php echo $users->user_id ?>" />

											<div class="card-body">
												<h4 class="upper"><b>Data User</b></h4>
											</div>

											<div class="form-group row">
												<label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
												<input class="col-sm-9 form-control <?php echo form_error('full_name') ? 'is-invalid' : '' ?>" type="text" id="name" name="full_name" placeholder="Nama Lengkap" value="<?php echo $users->full_name ?>" />
											</div>

											<div class="form-group row">
												<label for="username" class="col-sm-3 col-form-label">Username</label>
												<input class="col-sm-9 form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" id="username" name="username" placeholder="Username" value="<?php echo $users->username ?>" />
											</div>

											<div class="form-group row">
												<div class="col-sm-3 col-form-label">
													<label class="col-form-label" for="akses">Hak Akses</label>
												</div>
												<div class="form-check form-check-inline <?php echo form_error('role') ? 'is-invalid' : '' ?>">
													<label class="form-check-label" for="admin">
														<input class="form-check-input" type="radio" name="role" id="admin" value="admin" <?php if ($users->role == 'admin') echo 'checked' ?>>Admin</label>
												</div>
												<div class="form-check form-check-inline">
													<label class="form-check-label" for="staff">
														<input class="form-check-input" type="radio" name="role" id="staff" value="staff" <?php if ($users->role == 'staff') echo 'checked' ?>>Staff</label>
												</div>
											</div>

											<div class="form-group row">
												<label for="email" class="col-sm-3 col-form-label">Email</label>
												<input class="col-sm-9 form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" id="email" name="email" placeholder="Email" value="<?php echo $users->email ?>" />
											</div>

											<div class="form-group row">
												<label for="phone" class="col-sm-3 col-form-label">Nomor Handphone</label>
												<input class="col-sm-9 form-control <?php echo form_error('phone') ? 'is-invalid' : '' ?>" type="text" id="phone" name="phone" placeholder="Nomor Handphone" value="<?php echo $users->phone ?>" />
											</div>

											<div class="card-body card-header"></div>
											<div class="card-body">
												<h4 class="upper"><b>Ubah Password</b></h4>
											</div>

											<input type="hidden" name="old_password" value="<?php echo $users->password ?>" />
											
											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="password">Password Baru</label>
												<div class="col-sm-9 px-0">
													<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" id="password" name="password" placeholder="Masukan password baru" />
													<div class="invalid-feedback">
														<?php echo form_error('password') ?>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="confirm_password">Verifikasi Password</label>
												<div class="col-sm-9 px-0">
													<input class="form-control <?php echo form_error('confirm_password') ? 'is-invalid' : '' ?>" type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru" />
													<div class="invalid-feedback">
														<?php echo form_error('confirm_password') ?>
													</div>
												</div>
											</div>

											<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
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
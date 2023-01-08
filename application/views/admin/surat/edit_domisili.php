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
							<h1>Form Ubah Data Surat</h1>
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
										<a href="<?php echo site_url('admin/surat/domisili') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
									</div>
									<div class="card-body">

										<form action="" method="post" enctype="multipart/form-data">

											<input type="hidden" name="id" value="<?php echo $surats->id_surat ?>" />

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="nik-autocomplete">NIK</label>
												<input style="cursor:not-allowed" readonly class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" id="nik-autocomplete" name="nik" placeholder="Nomor Induk Kependudukan" value="<?php echo $surats->nik ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="nama">Nama Lengkap</label>
												<input style="cursor:not-allowed" readonly class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid' : '' ?>" type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $surats->nama_lengkap ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="kelamin">Jenis Kelamin</label>
												<input style="cursor:not-allowed" readonly class="col-sm-9 form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" type="text" id="kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $surats->jenis_kelamin ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="lahir">Tempat / Tanggal Lahir</label>
												<input style="cursor:not-allowed" readonly id="lahir" class="col-sm form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $surats->tempat_lahir ?>" />
												<h3> / </h3>
												<input style="cursor:not-allowed" readonly id="lahir" class="col-sm-3 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $surats->tgl_lahir ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="agama">Agama</label>
												<input style="cursor:not-allowed" readonly class="col-sm-9 form-control <?php echo form_error('agama') ? 'is-invalid' : '' ?>" type="text" id="agama" name="agama" placeholder="Agama" value="<?php echo $surats->agama ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="kawin">Status Perkawinan</label>
												<input style="cursor:not-allowed" readonly class="col-sm-9 form-control <?php echo form_error('status_kawin') ? 'is-invalid' : '' ?>" type="text" id="kawin" name="status_kawin" placeholder="Status Perkawinan" value="<?php echo $surats->status_kawin ?>" />
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="alamat">Alamat Lengkap</label>
												<input style="cursor:not-allowed" readonly class="col-sm-5 form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..." value="<?php echo $surats->alamat ?>" />

												<div class="form-group row col-md">
													<label class="col-sm-3 col-form-label" for="rt">RT</label>
													<select style="cursor:not-allowed" readonly name="rt" id="rt" class="col-sm form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>">
														<option selected><?php echo $surats->rt ?></option>
														<option value="001">001</option>
														<option value="002">002</option>
														<option value="003">003</option>
														<option value="004">004</option>
														<option value="005">005</option>
														<option value="006">006</option>
													</select>
												</div>
												
												<div class="form-group row col-md">
													<label class="col-sm-3 col-form-label" for="rw">RW</label>
													<select style="cursor:not-allowed" readonly name="rw" id="rw" class="col-sm form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>">
														<option selected><?php echo $surats->rw ?></option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label" for="keterangan">Keterangan</label>
												<textarea class="col-sm-9 form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" type="text" id="keterangan" name="keterangan" placeholder="" rows="3"><?php echo $surats->keterangan ?></textarea>
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
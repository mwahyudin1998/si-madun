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
							<h1>Data Anggota Keluarga</h1>
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
							<div class="card-header">
						<a href="<?php echo site_url('admin/keluarga') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>

								<!-- /.card-header -->

								<?php if ($this->session->flashdata('success')) : ?>
									<div class="alert alert-success" role="alert">
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								<?php endif; ?>

								<div class="card-body">
								<!-- <a href="<?php echo site_url('print/keluarga') ?>" target="_blank" data-toggle="tooltip" title="Print Data Anggota Keluarga" class="btn btn-sm btn-primary">
									<i class="fas fa-print"> Print</i>
								</a> -->
									<table id="example2" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Nomor KK</th>
												<th>NIK</th>
								   			<th>Nama Lengkap</th>
												<th>Status Keluarga</th>
												<th>Jenis Kelamin</th>
												<th>Alamat</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($anggota_keluarga as $penduduk) : ?>
												<tr class="upper">
													<td>
														<?php echo $penduduk->no_kk ?>
													</td>
													<td>
														<?php echo $penduduk->nik ?>
													</td>
													<td>
														<?php echo $penduduk->nama_lengkap ?>
													</td>
													<td>
														<?= $penduduk->status_keluarga ?>
														<?= $penduduk->is_kepala_keluarga == 1 ? "(KEPALA KELUARGA)" : " " ?>
													</td>
													<td>
														<?php echo $penduduk->jenis_kelamin ?>
													</td>
													<td>
														<?php echo $penduduk->alamat ?>
														 RT. <?php echo $penduduk->rt ?> RW. <?php echo $penduduk->rw ?> 
														 Desa Salembaran Jati
													</td>
													<td>
                          <div class="d-flex flex-nowrap">
                            <a href="<?php echo site_url('admin/keluarga/print/'.$penduduk->no_kk) ?>"
                              target="_blank" data-toggle="tooltip" title="Print Data Keluarga"
                              class="btn btn-sm btn-primary"><b class="fas fa-print">Print</b></a> 
                          </div>
                          </td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
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
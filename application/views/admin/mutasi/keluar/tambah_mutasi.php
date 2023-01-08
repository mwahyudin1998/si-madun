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
              <h1>Form Tambah Data Mutasi Penduduk Keluar</h1>
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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mutasi/keluar') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/mutasi/keluar/tambah') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="keluar">Tanggal Penduduk Keluar</label>
								<input style="cursor:not-allowed" id="keluar" class="col-sm-2 form-control <?php echo form_error('tgl_keluar') ? 'is-invalid':'' ?>"
								type="date" name="tgl_keluar" placeholder="Tanggal Mutasi Keluar"/>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nik-autocomplete">NIK</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik-autocomplete" name="nik" placeholder="Cari Nomor Induk Kependudukan" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama">Nama Lengkap</label>
								<input style="cursor:not-allowed" class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" disabled />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="lahir">Tempat / Tanggal Lahir</label>
								<input style="cursor:not-allowed" id="lahir" class="col-sm form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" disabled />
								<h3> / </h3>
								<input style="cursor:not-allowed" id="lahir" class="col-sm-3 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								type="date" name="tgl_lahir" placeholder="Tanggal Lahir" disabled />
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="penduduk">Status Penduduk </label>
								<input style="cursor:not-allowed" class="col-sm-9 form-control"
								 type="text" id="penduduk" name="status_penduduk" placeholder="Status Penduduk" value="KELUAR" disabled/>
							</div>

							<input class="btn btn-success" type="submit" href="<?php echo site_url('admin/mutasi/keluar/tambah') ?>"/>
						</form>

					</div>

				</div>
				<div class="card-footer small text-muted">
						<i></i>
					</div>
			</div>
		</div>
          <!-- /.col -->
       </div>
        <!-- /.row -->
     </div><!--/. container-fluid -->
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
	<script type="text/javascript">
		$(document).ready(function() {
			$("#nik-autocomplete").autocomplete({
				source: "<?php echo site_url('admin/mutasi/keluar/get_autocomplete/?');?>",
				select: function (event, ui) {
					const hariIni = new Date().toISOString().split("T")[0];
					$('[name="nik"]').val(ui.item.value);
					$('[name="tgl_keluar"]').val(hariIni);
                    $('[name="nama_lengkap"]').val(ui.item.nama_lengkap); 
                    $('[name="tempat_lahir"]').val(ui.item.tempat_lahir);
					$('[name="tgl_lahir"]').val(ui.item.tgl_lahir);
                }
			})
		})
	</script>

</body>
</html>
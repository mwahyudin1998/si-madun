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
              <h1>Form Tambah Data Kematian</h1>
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
						<a href="<?php echo site_url('admin/kematian') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/kematian/tambah') ?>" method="post" enctype="multipart/form-data" >

							<div class="card-body">
								<h4 class="upper"><b>Data Kematian Penduduk</b></h4>
							</div>

							<!--div class="form-group row">
								<label class="col-sm-3 col-form-label" for="cari">Pencarian Data Kematian</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="cari" name="" placeholder="NIK / Nama (minimal 2 karalter)" />
							</div-->
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nik-autocomplete">NIK</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik-autocomplete" name="nik" placeholder="Cari Nomor Induk Kependudukan" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama_lengkap">Nama</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
								<input class="col-sm-9 form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
								 type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="alamat">Alamat Lengkap</label>
								<input class="col-sm-5 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..."/>

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rt">RT</label>
								 <input class="col-sm-5 form-control <?php echo form_error('rt') ? 'is-invalid':'' ?>"
								 type="text" id="rt" name="rt" placeholder="RT"/>
								 </div>
								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rw">RW</label>
								 <input class="col-sm-5 form-control <?php echo form_error('rw') ? 'is-invalid':'' ?>"
								 type="text" id="rw" name="rw" placeholder="RW"/>
								 </div>
							  </div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tanggal">Tanggal Kematian</label>
								<input id="tanggal" class="col-sm-4 form-control <?php echo form_error('tanggal_meninggal') ? 'is-invalid':'' ?>"
								type="date" name="tanggal_meninggal" placeholder="Tanggal Kematian"/>
								<label class="col"></label>
								<label class="col col-form-label" for="waktu">Waktu Kematian</label>
								<input id="waktu" class="col form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
								type="time" name="waktu" placeholder="Waktu Kematian"/>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="penyebab">Penyebab Kematian</label>
								<input class="col-sm-9 form-control <?php echo form_error('penyebab') ? 'is-invalid':'' ?>"
								 type="text" id="penyebab" name="penyebab" placeholder="Penyebab Kematian" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tempat">Tempat Kematian</label>
								<input class="col-sm-9 form-control <?php echo form_error('tempat_kematian') ? 'is-invalid':'' ?>"
								 type="text" id="tempat" name="tempat_kematian" placeholder="Tempat kematian" />
							</div>

							<div class="card-body card-header"></div>
							<div class="card-body">
								<h4 class="upper"><b>Data Pelapor</b></h4>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="pelapor">Nama Pelapor</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_pelapor') ? 'is-invalid':'' ?>"
								 type="text" id="pelapor" name="nama_pelapor" placeholder="Nama Pelapor" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="hubungan">Hubungan Pelapor</label>
								<input class="col-sm-9 form-control <?php echo form_error('hubungan_pelapor') ? 'is-invalid':'' ?>"
								 type="text" id="hubungan" name="hubungan_pelapor" placeholder="Hubungan Pelapor" />
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" href="<?php echo site_url('admin/penduduk') ?>"/>
						</form>

					</div>

				</div>
				<div class="card-footer small text-muted">
						<i>Data yang diisi harus sesuai pada Kartu Tanda Penduduk (KTP)</i>
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
				source: "<?php echo site_url('admin/kematian/get_autocomplete/?');?>",
				select: function (event, ui) {
					const hariIni = new Date().toISOString().split("T")[0];
					$('[name="nik"]').val(ui.item.value);
                    $('[name="nama_lengkap"]').val(ui.item.nama_lengkap); 
                    $('[name="jenis_kelamin"]').val(ui.item.jenis_kelamin); 
                    $('[name="alamat"]').val(ui.item.alamat); 
                    $('[name="rt"]').val(ui.item.rt); 
                    $('[name="rw"]').val(ui.item.rw); 
                }
			})
		})
	</script>

</body>
</html>
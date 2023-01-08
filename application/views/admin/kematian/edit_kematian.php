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
              <h1>Form Ubah Data Kematian Penduduk</h1>
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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/kematian') ?>"><i class="fas fa-arrow-left"></i>  Kembali</a>
					</div>
					<div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $kematians->nik?>" />
							<div class="card-body">
								<h4 class="upper"><b>Data Kematian Penduduk</b></h4>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nik-autocomplete">NIK</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik-autocomplete" name="nik" placeholder="Cari Nomor Induk Kependudukan"
								 value="<?php echo $kematians->nik ?>" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama_lengkap">Nama</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap"
								 value="<?php echo $kematians->nama_lengkap ?>" />
							</div>

							<div class="form-group row">
								<div class="col-sm-3 col-form-label">
									<label class="col-form-label" for="kelamin">Jenis Kelamin</label>
								</div>
								<div class="form-check form-check-inline <?php echo form_error('kelamin') ? 'is-invalid':'' ?>">
								  <label class="form-check-label" for="Laki-laki">
								  	<input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="LAKI-LAKI"
								  <?php if($kematians->jenis_kelamin=='LAKI-LAKI') echo 'checked'?>>LAKI-LAKI</label>
								</div>
								<div class="form-check form-check-inline">
								  <label class="form-check-label" for="Perempuan">
								  	<input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="PEREMPUAN" 
								  	<?php if($kematians->jenis_kelamin=='PEREMPUAN') echo 'checked'?>>PEREMPUAN</label>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="alamat">Alamat Lengkap</label>
								<input class="col-sm-5 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..."
								 value="<?php echo $kematians->alamat ?>" />

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rt">RT</label>
								 <select class="col-sm form-control <?php echo form_error('rt') ? 'is-invalid':'' ?>"
								 type="text" id="rt" name="rt" placeholder="RT" value="<?php echo $kematians->rt ?>">
								 <option selected><?php echo $kematians->rt ?></option>
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
								 <select class="col-sm form-control <?php echo form_error('rw') ? 'is-invalid':'' ?>"
								 type="text" id="rw" name="rw" placeholder="RW" value="<?php echo $kematians->rw ?>">
								 <option selected><?php echo $kematians->rw ?></option>
							          <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
								 </select>
								 </div>
							  </div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tanggal">Tanggal Kematian</label>
								<input id="tanggal" class="col-sm-4 form-control <?php echo form_error('tanggal_meninggal') ? 'is-invalid':'' ?>"
								type="date" name="tanggal_meninggal" placeholder="Tanggal Kematian" value="<?php echo $kematians->tanggal_meninggal ?>"/>
								<label class="col"></label>
								<label class="col col-form-label" for="waktu">Waktu Kematian</label>
								<input id="waktu" class="col form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
								type="time" name="waktu" placeholder="Waktu Kematian" value="<?php echo $kematians->waktu ?>"/>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="penyebab">Penyebab Kematian</label>
								<input class="col-sm-9 form-control <?php echo form_error('penyebab') ? 'is-invalid':'' ?>"
								 type="text" id="penyebab" name="penyebab" placeholder="Penyebab Kematian" 
								 value="<?php echo $kematians->penyebab ?>"/>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tempat">Tempat Kematian</label>
								<input class="col-sm-9 form-control <?php echo form_error('tempat_kematian') ? 'is-invalid':'' ?>"
								 type="text" id="tempat" name="tempat_kematian" placeholder="Tempat kematian"
								 value="<?php echo $kematians->tempat_kematian ?>" />
							</div>

							<div class="card-body card-header"></div>
							<div class="card-body">
								<h4 class="upper"><b>Data Pelapor</b></h4>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="pelapor">Nama Pelapor</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_pelapor') ? 'is-invalid':'' ?>"
								 type="text" id="pelapor" name="nama_pelapor" placeholder="Nama Pelapor"
								 value="<?php echo $kematians->nama_pelapor ?>" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="hubungan">Hubungan Pelapor</label>
								<input class="col-sm-9 form-control <?php echo form_error('hubungan_pelapor') ? 'is-invalid':'' ?>"
								 type="text" id="hubungan" name="hubungan_pelapor" placeholder="Hubungan Pelapor"
								 value="<?php echo $kematians->hubungan_pelapor ?>" />
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>
				</div>


					<div class="card-footer small text-muted">
						<i>Data yang diisi harus sesuai pada Kartu Tanda Penduduk (KTP)</i>
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

</body>

</html>
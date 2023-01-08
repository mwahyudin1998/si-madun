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
              <h1>Form Tambah Data Kelahiran</h1>
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
						<a href="<?php echo site_url('admin/kelahiran') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/kelahiran/tambah') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tgl-lahir">Tanggal Lahir</label>
								<input class="col-sm-9 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" id="tgl-lahir" name="tgl_lahir" placeholder="Masukan tanggal lahir bayi" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama-bayi">Nama Bayi</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_bayi') ? 'is-invalid':'' ?>"
								 type="text" id="nama-bayi" name="nama_bayi" placeholder="Masukan nama bayi" />
							</div>


							<div class="form-group row">
								<div class="col-sm-3 col-form-label">
									<label class="col-form-label" for="kelamin">Jenis Kelamin</label>
								</div>
								<div class="form-check form-check-inline <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="LAKI-LAKI">
								  <label class="form-check-label" for="Laki-laki">LAKI-LAKI</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="PEREMPUAN">
								  <label class="form-check-label" for="Perempuan">PEREMPUAN</label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="berat-bayi">Berat Bayi</label>
								<input class="col-sm-9 form-control <?php echo form_error('berat_bayi') ? 'is-invalid':'' ?>"
								 type="number" id="berat-bayi" name="berat_bayi" placeholder="Masukan berat bayi (Kg)" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="panjang-bayi">Panjang Bayi</label>
								<input class="col-sm-9 form-control <?php echo form_error('panjang_bayi') ? 'is-invalid':'' ?>"
								 type="number" id="panjang-bayi" name="panjang_bayi" placeholder="Masukan panjang bayi (cm)" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama-ayah">Nama Ayah</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_ayah') ? 'is-invalid':'' ?>"
								 type="text" id="nama-ayah" name="nama_ayah" placeholder="Masukan nama Ayah" />
							</div>

							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama-ibu">Nama Ibu</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_ibu') ? 'is-invalid':'' ?>"
								 type="text" id="nama-ibu" name="nama_ibu" placeholder="Masukan nama Ibu" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="tempat-lahir">Tempat Lahir</label>
								<input class="col-sm-9 form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" id="tempat-lahir" name="tempat_lahir" placeholder="Masukan tempat bayi dilahirkan" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="alamat">Alamat Lengkap</label>
								<input class="col-sm-5 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..."/>

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rt">RT</label>
							        <select name="rt" id="rt" class="col-sm form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RT--</option>
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
							        <select name="rw" id="rw" class="col-sm form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RW--</option>
							          <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
							        </select>
								 </div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" href="<?php echo site_url('admin/kelahiran') ?>"/>
						</form>

					</div>

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

</body>
</html>
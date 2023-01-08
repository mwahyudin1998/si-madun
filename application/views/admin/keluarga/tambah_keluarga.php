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
              <h1>Form Tambah Data Penduduk</h1>
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
						<a href="<?php echo site_url('admin/keluarga') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/penduduk/tambah') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="no_kk">Nomor KK</label>
								<input class="form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
								 type="text" id="no_kk" name="no_kk" placeholder="Nomor Kartu Keluarga" />
								<div class="invalid-feedback">
									<?php echo form_error('no_kk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nik">NIK</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="nama">Nama Lengkap</label>
								<input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_lengkap') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="lahir">Tempat / Tanggal Lahir</label>
								<div class="form-row">
									<div class="col">
										<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
										 type="text" id="lahir" name="tempat_lahir" placeholder="Tempat Lahir"/>
									</div>
									<h3> / </h3>
									<div class="col">
										<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
										 type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
									</div>
								</div>
							</div>

							<div class="form-group">
							    <label for="agama">Agama</label>
							    <select name="agama" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="agama">
							      <option>--Pilih Agama--</option>
							      <option value="Islam">Islam</option>
							      <option value="Protestan">Protestan</option>
							      <option value="Katolik">Katolik</option>
							      <option value="Hindu">Hindu</option>
							      <option value="Budha">Budha</option>
							      <option value="Khonghucu">Khonghucu</option>
							    </select>
							  </div>

							<div class="form-group">
							    <label for="kawin">Status Perkawinan</label>
							    <select name="status_kawin" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="kawin">
							      <option class="form-control">--Pilih Status Perkawinan--</option>
							      <option value="Belum Kawin">Belum Kawin</option>
							      <option value="Kawin">Kawin</option>
							      <option value="Cerai Hidup">Cerai Hidup</option>
							      <option value="Cerai Mati">Cerai Mati</option>
							      </select>
							  </div>

							
							<div class="form-group">
								<div>
									<label for="kelamin">Jenis Kelamin</label>
								</div>
								<div class="form-check form-check-inline <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="LAKI-LAKI">
								  <label class="form-check-label" for="Laki-laki">LAKI-LAKI</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="PEREMPUAN">
								  <label class="form-check-label" for="Perempuan">PEREMPUAN</label>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
							    <label for="keluarga">Status Keluarga</label>
							    <select name="status_keluarga" 
							     class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="keluarga">
							      <option>--Pilih Status Keluarga--</option>
							      <option value="Suami">Suami</option>
							      <option value="Istri">Istri</option>
							      <option value="Anak">Anak</option>
							      <option value="Famili Lain">Famili Lain</option>
							      </select>
							  </div>

							  <div class="form-group">
							    <label for="pendidikan">Pendidikan</label>
							    <select name="pendidikan" 
							     class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="pendidikan">
							      <option>--Pilih Pendidikan--</option>
							      <option value="Tidak/ Belum Sekolah">Tidak/ Belum Sekolah</option>
							      <option value="Belum Tamat SD">Belum Tamat SD</option>
							      <option value="Tamat SD">Tamat SD</option>
							      <option value="SLTP/ Sederajat">SLTP/ Sederajat</option>
							      <option value="SLTA/ Sederajat">SLTA/ Sederajat</option>
							      <option value="Diploma I">Diploma I</option>
							      <option value="Diploma II">Diploma II</option>
							      <option value="Diploma III">Diploma III</option>
							      <option value="Strata I">Strata I</option>
							      <option value="Strata II">Strata II</option>
							      <option value="Strata III">Strata III</option>
							      </select>
							  </div>

							  <div class="form-group">
							    <label for="pekerjaan">Pekerjaan</label>
							    <select name="pekerjaan" 
							     class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="pekerjaan">
							      <option>--Pilih Pekerjaan--</option>
							      <option value="Belum/ Tidak Bekerja">Belum/ Tidak Bekerja</option>
							      <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
							      <option value="Pelajar/ Mahasiswa">Pelajar/ Mahasiswa</option>
							      <option value="Karyawan Swasta">Karyawan Swasta</option>
							      <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
							      <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
							      <option value="Wiraswasta">Wiraswasta</option>
							      <option value="Lain-lain">Lain-lain</option>
							      </select>
							  </div>

							  <div class="form-row">
							      <div class="form-group col-md-8">
							        <label for="alamat">Alamat Lengkap</label>
							        <input type="text" name="alamat" placeholder="Alamat Lengkap JL./ Kampung..."
							         class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" />
							      </div>
							      <div class="form-group col-md-2">
							        <label for="rt">RT</label>
							        <select name="rt" id="rt" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RT--</option>
							          <option value="001">001</option>
							          <option value="002">002</option>
							          <option value="003">003</option>
							          <option value="004">004</option>
							          <option value="005">005</option>
							          <option value="006">006</option>
							        </select>
							      </div>
							      <div class="form-group col-md-2">
							        <label for="rw">RW</label>
							        <select name="rw" id="rw" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RW--</option>
							          <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
							        </select>
							      </div>
							   </div>

							  <div class="form-group">
								<label for="telp">Nomor Telepon/ Handphone</label>
								<input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
								 type="text" id="telp" name="no_telp" placeholder="Nomor Telepon/ Handphone" />
								<div class="invalid-feedback">
									<?php echo form_error('no_telp') ?>
								</div>
							  </div>

							  <div class="form-group">
							  	<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							  </div>							

							<input class="btn btn-success" type="submit" name="btn" value="Save" href="<?php echo site_url('admin/penduduk') ?>"/>
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

</body>
</html>
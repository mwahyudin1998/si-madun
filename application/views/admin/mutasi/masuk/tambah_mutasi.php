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
              <h1>Form Tambah Data Mutasi Penduduk Masuk</h1>
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
						<a href="<?php echo site_url('admin/mutasi/masuk') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/mutasi/masuk/tambah') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="masuk">Tanggal Masuk Penduduk</label>
								<input id="masuk" class="col-sm-2 form-control <?php echo form_error('tgl_masuk') ? 'is-invalid':'' ?>"
								type="date" name="tgl_masuk" placeholder="Tanggal Masuk"/>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="no_kk">Nomor KK</label>
								<input class="col-sm-9 form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
								 type="text" id="no_kk" name="no_kk" placeholder="Nomor Kartu Keluarga" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nik">NIK</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" />
							</div>


							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama">Nama Lengkap</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="lahir">Tempat / Tanggal Lahir</label>
								<input id="lahir" class="col-sm form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir"/>
								<h3> / </h3>
								<input id="lahir" class="col-sm-3 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="agama">Agama</label>
							    <select name="agama" class="col-sm-9 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="agama">
							      <option>--Pilih Agama--</option>
							      <option value="Islam">Islam</option>
							      <option value="Protestan">Protestan</option>
							      <option value="Katolik">Katolik</option>
							      <option value="Hindu">Hindu</option>
							      <option value="Budha">Budha</option>
							      <option value="Khonghucu">Khonghucu</option>
								</select>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="kawin">Status Perkawinan</label>
							    <select name="status_kawin" class="col-sm-9 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="kawin">
							      <option class="form-control">--Pilih Status Perkawinan--</option>
							      <option value="Belum Kawin">Belum Kawin</option>
							      <option value="Kawin">Kawin</option>
							      <option value="Cerai Hidup">Cerai Hidup</option>
							      <option value="Cerai Mati">Cerai Mati</option>
							    </select>
							</div>

							<div class="form-group row">
								<div class="col-sm-3 col-form-label">
									<label class="col-form-label" for="kelamin">Jenis Kelamin</label>
								</div>
								<div class="form-check form-check-inline <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="LAKI-LAKI">
								  <label class="form-check-label" for="Laki-laki">LAKI-LAKI</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="PEREMPUAN">
								  <label class="form-check-label" for="Perempuan">PEREMPUAN</label>
								</div>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="keluarga">Status Keluarga</label>
							    <select name="status_keluarga" 
							     class="col-sm-9 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="keluarga">
							      <option>--Pilih Status Keluarga--</option>
							      <option value="Suami">Suami</option>
							      <option value="Istri">Istri</option>
							      <option value="Anak">Anak</option>
							      <option value="Famili Lain">Famili Lain</option>
							    </select>
							</div>

							<div class="form-group row">
								<div class="col-sm-3 col-form-label">
									<label class="col-form-label" for="kepala">Apakah Kepala Keluarga?</label>
								</div>
								<div class="form-check form-check-inline <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
								  <input class="form-check-input" type="radio" name="is_kepala_keluarga" id="ya" value="1">
								  <label class="form-check-label" for="ya">YA</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="is_kepala_keluarga" id="tidak" value="0">
								  <label class="form-check-label" for="tidak">TIDAK</label>
								</div>
							</div>

							  <div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="pendidikan">Pendidikan</label>
							    <select name="pendidikan" 
							     class="col-sm-9 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="pendidikan">
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

							  <div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="pekerjaan">Pekerjaan</label>
							    <select name="pekerjaan" 
							     class="col-sm-9 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="pekerjaan">
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

							  <div class="form-group row">
								<label class="col-sm-3 col-form-label" for="telp">Nomor Telepon/ Handphone</label>
								<input class="col-sm-9 form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
								 type="text" id="telp" name="no_telp" placeholder="Nomor Telepon/ Handphone" />
							  </div>

							  <div class="form-group row">
							  	<label class="col-sm-3 col-form-label" for="name">Photo</label>
								<input class="col-form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							  </div>							

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" href="<?php echo site_url('admin/mutasi/masuk') ?>"/>
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
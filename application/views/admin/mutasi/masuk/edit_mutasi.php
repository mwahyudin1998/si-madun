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
              <h1>Ubah Data Mutasi Penduduk Masuk</h1>
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
						<a href="<?php echo site_url('admin/mutasi/masuk') ?>"><i class="fas fa-arrow-left"></i>  Kembali</a>
					</div>
					<div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $penduduks->nik?>" />

							<div class="form-group row">
								<label for="masuk" class="col-sm-3 col-form-label">Tanggal Mutasi Masuk</label>
								<input class="col-sm-2 form-control <?php echo form_error('tgl_masuk') ? 'is-invalid':'' ?>"
								 type="date" id="masuk" name="tgl_masuk" placeholder="Tanggal Mutasi Masuk" value="<?php echo $penduduks->tgl_masuk ?>" />
								 <label class="col"></label>
								<label class="col col-form-label" for="penduduk">Status Penduduk </label>
								<select id="penduduk" name="status_penduduk" class="upper col-sm-3 form-control <?php echo form_error('status_penduduk') ? 'is-invalid':'' ?>" >
							      <option><?php echo $penduduks->status_penduduk ?></option>
							      <option value="tetap">Penduduk Tetap</option>
							      <option value="keluar">Penduduk Keluar</option>
							      <option value="sementara">Penduduk Sementara</option>
							    </select>
								<div class="invalid-feedback">
									<?php echo form_error('masuk') ?>
								</div>
							</div>

							<div class="form-group row">
								<label for="KK" class="col-sm-3 col-form-label">Nomor Kartu Keluarga (No.KK)</label>
								<input class="col-sm-9 form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
								 type="number" id="KK" name="no_kk" placeholder="Nomor Kartu Keluarga" value="<?php echo $penduduks->no_kk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KK') ?>
								</div>
							</div>

							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">Nomor Induk Kependudukan (NIK)</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="number" id="nik" name="nik" min="0" placeholder="Nomor Induk Kependudukan" value="<?php echo $penduduks->nik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>

							<div class="form-group row">
								<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
								<input class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $penduduks->nama_lengkap ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group row">
								<label for="tempat" class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
								<input id="tempat" class="col-sm form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $penduduks->tempat_lahir ?>"/>
								<h3> / </h3>
								<input id="tempat" class="col-sm-3 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $penduduks->tgl_lahir ?>"/>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="agama">Agama</label>
							    <select id="agama" name="agama" class="col-sm-9 form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama">
							      <option><?php echo $penduduks->agama ?></option>
							      <option value="ISLAM">ISLAM</option>
							      <option value="PROTESTAN">PROTESTAN</option>
							      <option value="KATOLIK">KATOLIK</option>
							      <option value="HINDU">HINDU</option>
							      <option value="BUDHA">BUDHA</option>
							      <option value="KHONGHUCU">KHONGHUCU</option>
							    </select>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="kawin">Status Perkawinan</label>
							    <select id="kawin" name="status_kawin" class="col-sm-9 form-control <?php echo $penduduks->status_kawin ?>" id="kawin">
							      <option><?php echo $penduduks->status_kawin ?></option>
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
								  <label class="form-check-label" for="Laki-laki">
								  	<input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="LAKI-LAKI"
								  <?php if($penduduks->jenis_kelamin=='LAKI-LAKI') echo 'checked'?>>LAKI-LAKI</label>
								</div>
								<div class="form-check form-check-inline">
								  <label class="form-check-label" for="Perempuan">
								  	<input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="PEREMPUAN" 
								  	<?php if($penduduks->jenis_kelamin=='PEREMPUAN') echo 'checked'?>>PEREMPUAN</label>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="keluarga">Status Keluarga</label>
							    <select name="status_keluarga" class="col-sm form-control <?php echo $penduduks->status_keluarga ?>" id="keluarga">
							      <option><?php echo $penduduks->status_keluarga ?></option>
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
								  <input class="form-check-input" type="radio" name="is_kepala_keluarga" id="ya" value="1"
								  <?php if($penduduks->is_kepala_keluarga=='1') echo 'checked'?>>
								  <label class="form-check-label" for="ya">YA</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="is_kepala_keluarga" id="tidak" value="0"
								  <?php if($penduduks->is_kepala_keluarga=='0') echo 'checked'?>>
								  <label class="form-check-label" for="tidak">TIDAK</label>
								</div>
							  </div>

							  <div class="form-group row">
							    <label class="col-sm-3 col-form-label" for="pendidikan">Pendidikan</label>
							    <select name="pendidikan" class="col-sm-9 form-control <?php echo $penduduks->pendidikan ?>" id="pendidikan">
							      <option><?php echo $penduduks->pendidikan ?></option>
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
							    <select name="pekerjaan" class="col-sm-9 form-control <?php echo $penduduks->pekerjaan ?>" id="pekerjaan">
							      <option><?php echo $penduduks->pekerjaan ?></option>
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
								 type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..." value="<?php echo $penduduks->alamat ?>" />

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rt">RT</label>
							        <select name="rt" id="rt" class="col-sm form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>">
							          <option selected><?php echo $penduduks->rt ?></option>
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
							          <option selected><?php echo $penduduks->rw ?></option>
									  <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
							        </select>
								 </div>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							  </div>

							  <div class="form-group row">
								<label class="col-sm-3 col-form-label" for="telp">Nomor Telepon/ Handphone</label>
								<input class="col-sm-9 form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
								 type="number" id="telp" name="no_telp" placeholder="Nomor Telepon/ Handphone" value="<?php echo $penduduks->no_telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_telp') ?>
								</div>
							  </div>

							  <div class="form-group row">
							  	<label class="col-sm-3 col-form-label" for="name">Photo</label>
								<input class="col-form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								 <input type="hidden" name="old_image" value="<?php echo $penduduks->image ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
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
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
              <h1>Detail Data Penduduk Sementara</h1>
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

						<div class="media">
						  <div class="media-body">
						    <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->no_kk ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">NIK</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->nik ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Nama Lengkap</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->nama_lengkap ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->tempat_lahir ?>, <?php echo $penduduks->tgl_lahir ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Agama</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->agama ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Status Perkawinan</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->status_kawin ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->jenis_kelamin ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Status Keluarga</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->is_kepala_keluarga == 1 ? "KEPALA KELUARGA" : $penduduks->status_keluarga ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Pendidikan</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->pendidikan ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Pekerjaan</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->pekerjaan ?></p>
							   </div>
							   <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->alamat ?>
							     	RT. <?php echo $penduduks->rt ?> 
							     	RW. <?php echo $penduduks->rw ?> DESA SALEMBARAN JATI</p>
							     <p class="col-form-label upper"> Kecamatan Kosambi - Kabupaten Tangerang</p>
							   </div>
							   <label class="col-sm-3 col-form-label">No. Telp</label>
							   <div class="col-sm-9">
							     <p class="col-form-label upper">: <?php echo $penduduks->no_telp ?></p>
							   </div>

							</div>	
						  </div>
						  <img src="<?php echo base_url ('upload/penduduk/'.$penduduks->image)?>" Height="200" class="ml-3" alt="...">
						</div>

						<button class="btn btn-success" onclick="window.location.href='<?php echo site_url('admin/mutasi/masuk/edit/'.$penduduks->nik) ?>'"><i class="fas fa-edit"></i> Ubah Data</button>
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
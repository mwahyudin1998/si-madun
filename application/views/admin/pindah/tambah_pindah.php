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
              <h1>Form Pindah Alamat RT/RW</h1>
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
						<a href="<?php echo site_url('admin/pindah') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/pindah/edit') ?>" method="post" enctype="multipart/form-data" >

							<div class="card-body">
								<h5 class="upper"><b>Data Penduduk Sebelum Pindah</b></h5>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nik-autocomplete">NIK</label>
								<input class="col-sm-9 form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" id="nik-autocomplete" name="nik" placeholder="Nomor Induk Kependudukan" />
							</div>


							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="nama">Nama Lengkap</label>
								<input style="cursor:not-allowed" disabled
									class="col-sm-9 form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
								 	type="text" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" />
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="lahir">Tempat / Tanggal Lahir</label>
								<input id="lahir" style="cursor:not-allowed" disabled
									class="col-sm form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir"/>
								<h3> / </h3>
								<input id="lahir" style="cursor:not-allowed" disabled
									class="col-sm-3 form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="alamat">Alamat Lengkap</label>
								<input class="col-sm-5 form-control " style="cursor:not-allowed" disabled
								 type="text" id="alamat" name="alamat" placeholder="Alamat Jl./ Kampung..."/>

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rt">RT</label>
											<select name="rt" id="rt" style="cursor:not-allowed" disabled
												class="col-sm form-control <?php echo form_error('rt') ? 'is-invalid':'' ?>">
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
											<select name="rw" id="rw" style="cursor:not-allowed" disabled
												class="col-sm form-control <?php echo form_error('rw') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RW--</option>
							          <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
							        </select>
								 </div>
							</div>

							<div class="card-body card-header"></div>
							<div class="card-body">
								<h5 class="upper"><b>alamat RT/RW yang dituju</b></h5>
							</div>

														
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" for="alamatt">Alamat Tujuan</label>
								<input class="col-sm-5 form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" id="alamatt" name="alamat" placeholder="Alamat Jl./ Kampung..."/>

								 <div class="form-group row col-md">
								 <label class="col-sm-3 col-form-label" for="rtt">RT</label>
							        <select name="rt" id="rtt" class="col-sm form-control <?php echo form_error('rt') ? 'is-invalid':'' ?>">
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
								 <label class="col-sm-3 col-form-label" for="rww">RW</label>
							        <select name="rw" id="rww" class="col-sm form-control <?php echo form_error('rw') ? 'is-invalid':'' ?>">
							          <option selected>--Pilih RW--</option>
							          <option value="01">01</option>
							          <option value="02">02</option>
							          <option value="03">03</option>
							          <option value="04">04</option>
							          <option value="05">05</option>
							        </select>
								 </div>
							  </div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan"/>
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
				source: "<?php echo site_url('admin/pindah/get_autocomplete/?');?>",
				select: function (event, ui) {
					const hariIni = new Date().toISOString().split("T")[0];
					$('[name="nik"]').val(ui.item.value);
                    $('[name="nama_lengkap"]').val(ui.item.nama_lengkap); 
                    $('[name="tempat_lahir"]').val(ui.item.tempat_lahir); 
                    $('[name="tgl_lahir"]').val(ui.item.tgl_lahir); 
                    $('[name="alamat"]').val(ui.item.alamat); 
                    $('[name="rt"]').val(ui.item.rt); 
                    $('[name="rw"]').val(ui.item.rw); 
                }
			})
		})
	</script>


</body>
</html>
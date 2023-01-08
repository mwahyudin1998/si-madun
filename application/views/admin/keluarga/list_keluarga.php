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
              <h1>Data Kepala Keluarga</h1>
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

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nomor KK</th>
						          <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>No. Telp</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
          						<th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($penduduks as $penduduk): ?>
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
                            <?php echo $penduduk->no_telp ?>
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
                            <a href="<?php echo site_url('admin/keluarga/lihat/'.$penduduk->no_kk) ?>"
                              data-toggle="tooltip" title="Lihat Anggota Keluarga"
                              class="btn btn-sm btn-primary"><b>Detail Keluarga</b></a> 
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
<!-- Gua bisa save, bisa edit juga -->
<!-- Bisa juga buka semua file, cuma ga bisa buka browsernya -->
<!-- Gua buka file list penduduk nih -->

<!-- -->
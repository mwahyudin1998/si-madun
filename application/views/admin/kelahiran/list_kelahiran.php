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
              <h1>Data Kelahiran</h1>
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
                <div class="card-header">
                  <a href="<?php echo site_url('admin/kelahiran/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data Kelahiran</a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tanggal Lahir</th>
						          <th>Nama Bayi</th>
                      <th>Jenis Kelamin</th>
                      <th>Berat</th>
                      <th>Panjang</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Tempat Kelahiran</th>
          						<th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($kelahirans as $kelahiran): ?>
                        <tr>
                          <td>
                            <?php echo $kelahiran->tgl_lahir ?>
                          </td>
                          <td class="upper">
                            <?php echo $kelahiran->nama_bayi ?>
                          </td>
                          <td class="upper">
                            <?php echo $kelahiran->jenis_kelamin ?>
                          </td>
                          <td>
                            <?php echo $kelahiran->berat_bayi ?> Kg
                          </td>
                          <td>
                            <?php echo $kelahiran->panjang_bayi ?> cm
                          </td>
                           <td class="upper">
                            <?php echo $kelahiran->nama_ayah ?>
                          </td>
                           <td class="upper">
                            <?php echo $kelahiran->nama_ibu ?>
                          </td>
                           <td class="upper">
                            <?php echo $kelahiran->tempat_lahir ?>
                          </td>
                          <td>
                          <div class="d-flex flex-nowrap">
                            <a href="<?php echo site_url('admin/kelahiran/edit/'.$kelahiran->id_kelahiran) ?>"
                              data-toggle="tooltip" title="Ubah Data Kelahiran"
                              class="btn btn-small"><i class="fas fa-edit"></i> </a>
                            <a onclick="deleteConfirm('<?php echo site_url('admin/kelahiran/delete/'.$kelahiran->id_kelahiran) ?>')" data-toggle="tooltip" title="Hapus Data Kelahiran"
                              class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
                            <a href="<?php echo site_url('admin/kelahiran/print/'.$kelahiran->id_kelahiran) ?>"
                              target="_blank" data-toggle="tooltip" title="Print Surat"
                              class="btn btn-small text-primary"><i class="fas fa-print"></i></a> 
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


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
              <h1>Surat - Surat</h1>
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

                <?php if ($this->session->flashdata('success')) : ?>
                  <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
                <?php endif; ?>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Surat</th>
                        <th>Jenis Surat</th>
                        <th width="85">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--?php foreach ($surats as $surat): ?-->
                      <tr class="upper">
                        <td>SKTM</td>
                        <td>Surat Keterangan Tidak Mampu</td>
                        <td>
                          <div>
                            <a href="<?php echo site_url('admin/surat/sktm') ?>" data-toggle="tooltip" 
                              title="Lihat Data Surat" class="btn btn-sm btn-primary">
                              <b class="fas fa-eye kapital"> Lihat Data</b></a>
                          </div>
                        </td>
                      </tr>
                      <tr class="upper">
                        <td>SKU</td>
                        <td>Surat Keterangan Usaha</td>
                        <td>
                          <div>
                            <a href="<?php echo site_url('admin/surat/sku') ?>" data-toggle="tooltip" 
                              title="Lihat Data Surat" class="btn btn-sm btn-primary">
                              <b class="fas fa-eye kapital"> Lihat Data</b></a>
                          </div>
                        </td>
                      </tr>
                      <tr class="upper">
                        <td>SKD</td>
                        <td>Surat Keterangan Domisili</td>
                        <td>
                          <div>
                            <a href="<?php echo site_url('admin/surat/domisili') ?>" data-toggle="tooltip" 
                              title="Lihat Data Surat" class="btn btn-sm btn-primary">
                              <b class="fas fa-eye kapital"> Lihat Data</b></a>
                          </div>
                        </td>
                      </tr>
                      <tr class="upper">
                        <td>SKPD</td>
                        <td>Surat Pengantar Desa</td>
                        <td>
                          <div>
                            <a href="<?php echo site_url('admin/surat/pengantar') ?>" data-toggle="tooltip" 
                              title="Lihat Data Surat" class="btn btn-sm btn-primary">
                              <b class="fas fa-eye kapital"> Lihat Data</b></a>
                          </div>
                        </td>
                      </tr>
                      <!--?php endforeach; ?-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
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
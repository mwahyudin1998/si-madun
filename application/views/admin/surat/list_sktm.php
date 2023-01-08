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
              <h1>Data Surat Keterangan Tidak Mampu</h1>
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
                  <div class="row">
                    <div class="col-sm-10">
                      <a href="<?php echo site_url('admin/surat/daftar_surat') ?>">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="col">
                      <a href="<?php echo site_url('admin/surat/sktm/tambah') ?>">
                        <i class="fas fa-plus"></i> Tambah Data Surat</a>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($surats as $surat) : ?>
                        <tr class="upper">
                          <td>
                            <?php echo $surat->nik ?>
                          </td>
                          <td>
                            <?php echo $surat->nama_lengkap ?>
                          </td>
                          <td>
                            <?php echo $surat->jenis_kelamin ?>
                          </td>
                          <td>
                            <?php echo $surat->alamat ?>
                            RT. <?php echo $surat->rt ?>
                            RW. <?php echo $surat->rw ?> Desa Salembaran Jati
                          </td>
                          <td>
                            <?php echo $surat->keterangan ?>
                          </td>
                          <td>
                            <div class="d-flex flex-nowrap">
                              <a href="<?php echo site_url('admin/surat/sktm/edit/' . $surat->id_surat) ?>" data-toggle="tooltip" title="Ubah Keterangan Surat" class="btn btn-small"><i class="fas fa-edit"></i> </a>
                              <a onclick="deleteConfirm('<?php echo site_url('admin/surat/sktm/delete/' . $surat->id_surat) ?>')" data-toggle="tooltip" title="Hapus Data Surat" class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
                              <a href="<?php echo site_url('admin/surat/sktm/print/' . $surat->id_surat) ?>" data-toggle="tooltip" title="Print Surat" class="btn btn-small text-primary"><i class="fas fa-print"></i> </a>
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
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
              <h1>Data Users</h1>
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
                  <!-- <a href="<?php echo site_url('admin/penduduk/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data Penduduk</a> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Hak Akses</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $user) : ?>
                        <tr>
                          <td>
                            <?php echo $user->full_name ?>
                          </td>
                          <td>
                            <?php echo $user->username ?>
                          </td>
                          <td>
                            <?php echo $user->email ?>
                          </td>
                          <td>
                            <?php echo $user->phone ?>
                          </td>
                          <td>
                            <?php echo $user->role ?>
                          </td>
                          <td>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="<?= $user->user_id ?>" <?= $user->is_active == 1 ? "checked='true'" : "" ?>" data-fullname="<?php echo $user->full_name ?>">
                              <label class="custom-control-label" for="<?= $user->user_id ?>">
                                <?= $user->is_active == 1 ? "Terverifikasi" : "Tidak terverifikasi" ?>
                              </label>
                            </div>
                          </td>
                          <td>
                          <div class="d-flex flex-nowrap">
                            <a href="<?php echo site_url('admin/users/edit/'.$user->user_id) ?>"
                              data-toggle="tooltip" title="Ubah Data User"
                              class="btn btn-small"><i class="fas fa-edit"></i> </a>
                            <a onclick="deleteConfirm('<?php echo site_url('admin/users/delete/'.$user->user_id) ?>')"
                              data-toggle="tooltip" title="Hapus Data User"
                               class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
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
  <script type="text/javascript">
    $(document).ready(function() {
      let res;
      <?php
      if (isset($res)) {
        $resFromPHP = json_encode($res);
        echo "res = " . $resFromPHP . ";\n";
      }
      $base_url = json_encode(base_url());
      echo "const baseURL = " . $base_url . ";\n";
      ?>
      const switches = $(".custom-control-input");

      if (res) {
        Swal.fire(
          'Berhasil!',
          `${res.full_name} telah ${res.is_active == 1 ? "diaktifkan" : "dinonaktifkan"}.`,
          'success'
        );
      }

      [...switches].forEach((switchComponent) => {
        $(switchComponent).on("click", (e) => {
          e.preventDefault();
          const {
            fullname
          } = $(switchComponent).data();
          const labelSwitch = switchComponent.nextElementSibling;
          const urlVerify = `${baseURL}admin/users/verify/${switchComponent.id}`;
          const urlUnverify = `${baseURL}admin/users/unverify/${switchComponent.id}`;

          if (!switchComponent.checked) {
            Swal.fire({
              title: `Apakah kamu yakin ingin menonaktifkan ${fullname}?`,
              text: `${fullname} tidak akan bisa login sampai diaktifkan kembali.`,
              icon: 'warning',
              reverseButtons: true,
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#ADB5BD',
              confirmButtonText: 'Iya, nonaktifkan!',
              cancelButtonText: 'Ngga jadi'
            }).then((result) => {
              if (result.isConfirmed) {
                switchComponent.checked = false;
                labelSwitch.innerHTML = "Tidak terverifikasi";
                window.location.replace(urlUnverify);
                // Swal.fire(
                //   'Berhasil!',
                //   `${fullname} telah dinonaktifkan.`,
                //   'success'
                // )
              }
            })
          } else {
            Swal.fire({
              title: `Apakah kamu yakin ingin mengaktifkan ${fullname}?`,
              icon: 'warning',
              reverseButtons: true,
              showCancelButton: true,
              confirmButtonColor: '#007BFF',
              cancelButtonColor: '#ADB5BD',
              confirmButtonText: 'Iya, aktifkan!',
              cancelButtonText: 'Ngga jadi'
            }).then((result) => {
              if (result.isConfirmed) {
                switchComponent.checked = true;
                labelSwitch.innerHTML = "Terverifikasi";
                window.location.replace(urlVerify);
                // Swal.fire(
                //   'Berhasil!',
                //   `${fullname} telah diaktifkan.`,
                //   'success'
                // )
              }
            })
          }
        });
      })

    })
  </script>

</body>

</html>
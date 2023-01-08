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
              <h1>Data Penduduk</h1>
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
                  <a href="<?php echo site_url('admin/penduduk/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data Penduduk</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
						          <th>NIK</th>
                      <th>Nomor KK</th>
                      <th>Nama Lengkap</th>
                      <th>No. Telp</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
          						<th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($penduduks as $penduduk): ?>
                        <tr  class="upper">
                          <td>
                            <?php echo $penduduk->nik ?>
                          </td>
                          <td>
                            <?php echo $penduduk->no_kk ?>
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
                            RT. <?php echo $penduduk->rt ?> 
                            RW. <?php echo $penduduk->rw ?> Desa Salembaran Jati
                          </td>
                          <td>
                          <div class="d-flex flex-nowrap">
                            <a href="<?php echo site_url('admin/penduduk/edit/'.$penduduk->nik) ?>"
                              data-toggle="tooltip" title="Ubah Data Penduduk"
                              class="btn btn-small"><i class="fas fa-edit"></i> </a>
                            <a onclick="deleteConfirm('<?php echo site_url('admin/penduduk/delete/'.$penduduk->nik) ?>')"
                              data-toggle="tooltip" title="Hapus Data Penduduk"
                               class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
                            <a href="<?php echo site_url('admin/penduduk/lihat/'.$penduduk->nik) ?>"
                              data-toggle="tooltip" title="Lihat Lengkap Data Penduduk"
                               class="btn btn-small text-primary"><i class="fas fa-eye"></i> </a> 
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

<!-- itu kalo komennya ada dua barus yg kek copy baris yg ada krusornya aja ya -->
<!-- gimana maksudnya? -->


<!-- itu dia git bash ane gatau  bang 
                        coba tonton tutorial git bash di windows
                        atau blog
-->


<!-- okehh bang coba nanti ane cari tutornya
      sorkat buat rapihin tab otomatis tadi apadah bang ctrl+shift sama apa -->

<!-- 
  coba lu ctrl + ` 
  
  shortcut buka terminal itu
  

  gua udah minta request edit terminal
-->

<!-- udah bang kebuka terminalnya 

udah ane make bang -->
<!--  
  Coba install dulu git bash nya udah belum tadi yg di download?
--> 

<!-- yang gambar kek mnc bukan || seh iya wkwk  -->

<!-- okeh ane instal nihh 

nanti kalo udah beres install
Kill terminalnya, pencet tombol tong sampah, terus buka lagi yg baru

-->


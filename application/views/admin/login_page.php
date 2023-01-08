<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="login-page">
  <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php elseif ($this->session->flashdata('failed')) : ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $this->session->flashdata('failed'); ?>
    </div>
  <?php elseif ($this->session->flashdata('warning')) : ?>
    <div class="alert alert-warning" role="alert">
      <?php echo $this->session->flashdata('warning'); ?>
    </div>
  <?php endif; ?>

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= site_url() ?>" class="h3"><b>Sistem</b> Manajemen Kependudukan
          <br>Desa <b>Salembaran Jati</b></br /></a>
      </div>
      <div class="card-body">
        <!---p class="login-box-msg">Masuk untuk memuai sesi Anda</p--->

        <form action="<?= base_url('login') ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Email / Username" />
            <div class="input-group-append">
              <div class="input-group-text">
                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M22,4H14V7H10V4H2A2,2 0 0,0 0,6V20A2,2 0 0,0 2,22H22A2,2 0 0,0 24,20V6A2,2 0 0,0 22,4M8,9A2,2 0 0,1 10,11A2,2 0 0,1 8,13A2,2 0 0,1 6,11A2,2 0 0,1 8,9M12,17H4V16C4,14.67 6.67,14 8,14C9.33,14 12,14.67 12,16V17M20,18H14V16H20V18M20,14H14V12H20V14M20,10H14V8H20V10M13,6H11V2H13V6Z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <p class="mb-1">
                <!-- <a href="forgot-password.html">Lupa Password?</a><br> -->
                 Belum punya akun? <a href="<?php echo site_url('register') ?>">Daftar</a>
              </p>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
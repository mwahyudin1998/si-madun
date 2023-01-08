<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="hold-transition login-page">

  <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php elseif ($this->session->flashdata('failed')) : ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $this->session->flashdata('failed'); ?>
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

        <form action="" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <input type="text" class="form-control <?php echo form_error('full_name') ? 'is-invalid' : '' ?>" name=" full_name" value="<?= set_value('full_name') ?>" placeholder="Full Name" />
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fa fa-address-card" aria-hidden="true"></i>
              </div>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('full_name') ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" name="username" value="<?= set_value('username') ?>" placeholder="Username" />
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fa fa-address-book" aria-hidden="true"></i>
              </div>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('username') ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" name="email" value="<?= set_value('email') ?>" placeholder="Email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('email') ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="tel" class="form-control <?php echo form_error('phone') ? 'is-invalid' : '' ?>" name="phone" value="<?= set_value('phone') ?>" placeholder="Phone Number" />
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('phone') ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" name="password" value="<?= set_value('password') ?>" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </div>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('password') ?>
            </div>
          </div>
          <div class="row">
            <div class="col-8 d-flex align-items-center">
              <p class="mb-0">
                Sudah memiliki akun? <a href="<?php echo site_url('login') ?>">Login</a>
              </p>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
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
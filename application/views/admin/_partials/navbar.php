<nav class="main-header navbar navbar-expand navbar-blue navbar-dark" ng-controller="HeaderController">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
      <a href="<?php echo site_url('admin/dashboard') ?>" class="nav-link">Home</a>
    </li>
    <?php if ($this->session->userdata('user_logged')->role == "admin") { ?>
      <li class="nav-item d-none d-sm-inline-block <?php echo $this->uri->segment(2) == 'users' ? 'active' : '' ?>">
        <a href="<?php echo site_url('admin/users') ?>" class="nav-link">Data Users</a>
      </li>
    <?php } ?>
  </ul>

  <!-- Right navbar Account -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <?= $this->session->userdata('user_logged')->role == "staff" ? "Staff - " : "Admin - " ?>
        <?= $this->session->userdata('user_logged')->full_name ?>
        <svg style="width:30px;height:30px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
        </svg>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="<?= site_url('pengaturan/data') ?>" class="dropdown-item dropdown-footer nav-icon fas fa-exit">
          <i class="nav-icon fas fa-cogs"> Pengaturan</i>
        </a>
        <a onclick="logoutConfirm('<?= site_url('login/logout') ?>')" class="dropdown-item dropdown-footer">
          <i style="cursor:pointer" class="nav-icon fa fa-power-off"> Logout</i>
        </a>
    </li>
  </ul>
</nav>
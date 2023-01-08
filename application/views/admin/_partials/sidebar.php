<aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url ('admin/dashboard')?>" class="brand-link">
      <img src="<?php echo base_url ('imgs/Kabupaten_Tangerang.png')?>" alt="Kabupaten Tangerang" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Desa Salembaran Jati</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" class="navbar-nav" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url('admin/penduduk')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'penduduk' ? 'active': '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Penduduk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/keluarga')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'keluarga' ? 'active': '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kepala Keluarga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kelahiran')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'kelahiran' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="2 2 24 24">
                  <path fill="currentColor" d="M12,2A3,3 0 0,1 15,5A3,3 0 0,1 12,8A3,3 0 0,1 9,5A3,3 0 0,1 12,2M20,18L18,12.56C17.65,11.57 17.34,10.71 16,10C14.62,9.3 13.62,9 12,9C10.37,9 9.38,9.3 8,10C6.66,10.71 6.35,11.57 6,12.56L4,18C3.68,19.35 6.36,20.44 8.11,21.19V19C8.11,18.05 8.97,17.38 10.69,16.97C10.85,16.93 11,16.91 11.12,16.89C10.58,16.07 10.36,15.34 10.34,15.28L12.11,14.68C12.12,14.7 12.63,16.27 13.84,17.06C14.05,17.13 14.26,17.21 14.46,17.3C15.23,17.64 15.69,18.08 15.84,18.61C14.5,19.14 13.22,19.41 12,19.41L11,19.31V21.94L12,22C13.37,22 14.67,21.72 15.89,21.19C17.64,20.44 20.25,19.13 20,18M15.5,17A1.5,1.5 0 0,1 14,15.5A1.5,1.5 0 0,1 15.5,14A1.5,1.5 0 0,1 17,15.5A1.5,1.5 0 0,1 15.5,17Z" />
                  </svg>
              <p>
                Kelahiran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kematian')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'kematian' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="2 2 24 24">
                <path fill="currentColor" d="M7.5,4A5.5,5.5 0 0,0 2,9.5C2,10 2.09,10.5 2.22,11H6.3L7.57,7.63C7.87,6.83 9.05,6.75 9.43,7.63L11.5,13L12.09,11.58C12.22,11.25 12.57,11 13,11H21.78C21.91,10.5 22,10 22,9.5A5.5,5.5 0 0,0 16.5,4C14.64,4 13,4.93 12,6.34C11,4.93 9.36,4 7.5,4V4M3,12.5A1,1 0 0,0 2,13.5A1,1 0 0,0 3,14.5H5.44L11,20C12,20.9 12,20.9 13,20L18.56,14.5H21A1,1 0 0,0 22,13.5A1,1 0 0,0 21,12.5H13.4L12.47,14.8C12.07,15.81 10.92,15.67 10.55,14.83L8.5,9.5L7.54,11.83C7.39,12.21 7.05,12.5 6.6,12.5H3Z" />
                </svg>
              <p>
                Kematian
              </p>
            </a>
          </li>
          <!--li class="nav-item">
            <a href="#" class="nav-link  <?php echo $this->uri->segment(2) == 'Menikah' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="2 2 24 24">
                <path fill="currentColor" d="M14 3.5C14 4.33 13.33 5 12.5 5S11 4.33 11 3.5 11.67 2 12.5 2 14 2.67 14 3.5M8.5 5C7.67 5 7 5.67 7 6.5S7.67 8 8.5 8 10 7.33 10 6.5 9.33 5 8.5 5M14 12L13.22 9.75H16.18L18.34 8.67C18.71 8.5 18.86 8.04 18.67 7.67C18.5 7.3 18.04 7.14 17.67 7.33L16.85 7.74L16.36 6.9C16.07 6.25 15.36 5.88 14.66 6.04L12.19 6.57C11.5 6.72 11 7.35 11 8.07V8.77L8.57 10.39H8.58C8.5 10.46 8.39 10.55 8.33 10.67L7.44 12.44L5.66 13.33C5.29 13.5 5.14 13.97 5.33 14.34C5.46 14.6 5.73 14.75 6 14.75C6.11 14.75 6.23 14.73 6.34 14.67L8.56 13.56L9.6 11.5L11 13C10 16 3 20 3 20S7 22 12 22 21 20 21 20 16 16 14 12M16.85 11.09L16.53 11.25H15.33L15.39 11.41C15.91 12.44 16.67 13.5 17.5 14.44L16.97 11.03L16.85 11.09Z" />
                </svg>
              <p>
                Menikah
              </p>
            </a>
          </li-->
          <li class="nav-item <?php echo $this->uri->segment(2) == 'mutasi' ? 'menu-open': '' ?>">
            <a href="<?php echo base_url('admin/mutasi/masuk')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'mutasi' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="2 2 24 24">
                <path fill="currentColor" d="M19,21V19H15V17H19V15L22,18L19,21M10,4A4,4 0 0,1 14,8A4,4 0 0,1 10,12A4,4 0 0,1 6,8A4,4 0 0,1 10,4M10,14C11.15,14 12.25,14.12 13.24,14.34C12.46,15.35 12,16.62 12,18C12,18.7 12.12,19.37 12.34,20H2V18C2,15.79 5.58,14 10,14Z" />
                </svg>
              <p>
                Mutasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/mutasi/masuk')?>" class="nav-link  <?php echo $this->uri->segment(3) == 'masuk' ? 'active': '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mutasi Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/mutasi/keluar')?>" class="nav-link  <?php echo $this->uri->segment(3) == 'keluar' ? 'active': '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mutasi Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/pindah')?>" class="nav-link  <?php echo $this->uri->segment(2) == 'pindah' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13Z" />
                  </svg>
              <p>
                Pindah RT/RW
              </p>
            </a>
          </li>
          <!--li class="nav-item">
            <a href="#" class="nav-link  <?php echo $this->uri->segment(2) == 'Domisili' ? 'active': '' ?>">
              <svg style="width:24px;height:24px" class="nav-icon" viewBox="2 2 24 24">
                <path fill="currentColor" d="M4,6H2V20A2,2 0 0,0 4,22H18V20H4V6M20,2A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H8A2,2 0 0,1 6,16V4A2,2 0 0,1 8,2H20M17,7A3,3 0 0,0 14,4A3,3 0 0,0 11,7A3,3 0 0,0 14,10A3,3 0 0,0 17,7M8,15V16H20V15C20,13 16,11.9 14,11.9C12,11.9 8,13 8,15Z" />
                </svg>
              <p>
                Data Domisili
              </p>
            </a>
          </li-->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/surat/daftar_surat')?>" class="nav-link  
            <?php echo $this->uri->segment(2) == 'surat' ? 'active': '' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Surat - Surat
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
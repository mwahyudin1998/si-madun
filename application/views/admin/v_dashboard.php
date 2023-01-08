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
              <h1>Dashboard</h1>
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
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info flex-shrink-0 elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">JUMLAH PENDUDUK</span>
                <span class="info-box-number">
                  <?= $jumlah_penduduk ?> 
                  <small>Orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger flex-shrink-0 elevation-1"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">JUMLAH KELUARGA</span>
                <span class="info-box-number">
                  <?= $jumlah_keluarga ?> 
                  <small>Keluarga</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success flex-shrink-0 elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">JUMLAH LAKI-LAKI</span>
                <span class="info-box-number">
                  <?= $jumlah_laki ?> 
                  <small>Orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-pink flex-shrink-0 elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">JUMLAH PEREMPUAN</span>
                <span class="info-box-number">
                  <?= $jumlah_perempuan ?> 
                  <small>Orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- PIE CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Grafik Jumlah Penduduk dalam RW</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

          <!-- /.col (LEFT) -->
          <div class="col-md-6">

            <!-- BAR CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Grafik Jumlah Laki-laki & Perempuan dalam RW</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

<script>
  $(function () {
    let arrayRW = [];
    let arrayLPRW = [];
    <?php
      if (isset($jumlah_RW)) {
        $rw_array = json_encode($jumlah_RW);
        echo "arrayRW = ". $rw_array . ";\n";
      }
      if (isset($jumlah_LPRW)) {
        $jumlah_laki_perempuan_rw_array = json_encode($jumlah_LPRW);
        echo "arrayLPRW = ". $jumlah_laki_perempuan_rw_array . ";\n";
      }
    ?>

    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    function groupBy(arr, property, property2) {
      return arr.reduce(function(memo, x) {
        if (!memo[x[property]]) { memo[x[property]] = []; }
        memo[x[property]].push(x[property2]);
        return memo;
      }, {});
    }


    const arrayLabelRW = arrayRW.map(data => `RW. ${data.rw}`);
    const arrayTotalRW = arrayRW.map(data => data.Total);

    const dataLakiPerempuanRW = groupBy(arrayLPRW, "rw", "jenis_kelamin");

    const dataLakiRW = arrayRW
      .map(data => (dataLakiPerempuanRW[data.rw]
      .filter(filtered => filtered === "LAKI-LAKI").length));

    const dataPerempuanRW = arrayRW
      .map(data => (dataLakiPerempuanRW[data.rw]
      .filter(filtered => filtered === "PEREMPUAN").length));

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');

    var pieData = {
      labels: arrayLabelRW,
      datasets: [
        {
          data: arrayTotalRW, 
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = {
      labels  : arrayLabelRW,
      datasets: [
        {
          label               : 'Laki-laki',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : dataLakiRW
        },
        {
          label               : 'Perempuan',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : dataPerempuanRW
        },
      ]
    }

    var barChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  })

</script>

</body>
</html>

<html>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      font: 12pt "Arial";
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      margin: 0;
    }

    h6 {
      line-height: 25pt;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table *,
    .col {
      font-size: 12px;
    }

    table th {
      text-align: center;
    }

    table,
    th,
    td {
      border: 1px solid black;
      padding: 2px;
    }

    table thead tr:last-child th {
      background-color: #f0f0f0;
    }

    .page {
      width: 210mm;
      position: relative;
      size: portrait;
      padding: 10mm;
      margin: 0mm auto;
      border: 1px #D3D3D3 solid;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    .isi {
      padding-left: 70px;
      padding-right: 70px;
    }

    .content-wrapper {
      position: relative;
      width: 100%;
    }

    .garuda {
      position: absolute;
      padding-top: 30px;
      padding-left: 40px;
      width: auto;
      height: 150px;
      left: 0;
      top: 0;
    }

    hr.letter-separator {
      border: none;
      border-top: 4px solid black;
      border-bottom: 1.7px solid black;
      height: 2px;
    }

    .isi-surat {
      width: 200mm;
      margin: 0 auto;
    }

    @page {
      size: portrait;
      margin: 0;
    }

    @media print {

      /* html, body {
            width: 297mm;
            height: 210mm;        
        } */
      .page {
        size: portrait;
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
      }
    }
  </style>
</head>

<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed">
  <!-- Main content -->
  <?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="page">
              <div class="kop-surat">
                <img src="<?php echo base_url('imgs/Kabupaten_Tangerang.png') ?>" alt="logo Garuda" class="garuda" />
                <center>
                  <h4><b>PEMERINTAH KABUPATEN TANGERANG</b></h4>
                  <h4><b>KECAMATAN KOSAMBI</b></h4>
                  <h4><b>DESA SALEMBARAN JATI</b></h4>
                  <h6 style="line-height: 15pt;">Jl. Salembaran Jati No.01 RT.01 / RW.01 Desa Salembaran Jati
                    <br>Kec. Kosambi Kab. Tangerang - Banten 15214
                  </h6>
                  <hr class="letter-separator">
                </center><br>
              </div>
              <div class="isi">
                <center>
                  <u>
                    <h5><b>SURAT KETERANGAN KELAHIRAN</b></h5>
                  </u>
                  <h5>No. <?= $kelahirans->id_kelahiran ?>/DSSJ/SK-LHR/<?php echo date('m/Y'); ?></h5>
                </center>
                <br>
                <br>
                <div class="row">
                  <div class="col">
                    <h6> Yang bertanda tangan dibawah ini Kepala Desa Salembaran Jati Kecamatan Kosambi
                      Kabupaten Tangerang, menerangkan dengan sesungguhnya bahwa telah lahir:
                    </h6>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <div class="col" style="padding-left: 20px;">
                      <div class="row">
                        <div class="col-4">
                          <h6>Nama Bayi</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kelahirans->nama_bayi ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Tempat tanggal lahir</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kelahirans->tempat_lahir ?>, <?= strftime("%d %B %Y", strtotime($kelahirans->tgl_lahir)) ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Jenis Kelamin</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kelahirans->jenis_kelamin ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Berat Bayi</h6>
                        </div>
                        <div class="col">
                          <h6>: <?= $kelahirans->berat_bayi ?> Kg</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Panjang bayi</h6>
                        </div>
                        <div class="col">
                          <h6>: <?= $kelahirans->panjang_bayi ?> cm</h6>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                      <div class="col">
                        <h6>Dari pasangan suami istri:</h6>
                      </div>
                    </div>
                    <div class="col" style="padding-left: 20px;">
                      <div class="row">
                        <div class="col-4">
                          <h6>Nama Ayah Kandung</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kelahirans->nama_ayah ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Nama Ibu Kandung</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kelahirans->nama_ibu ?></h6>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                      <div class="col">
                        <h6>Demikian Surat Keterangan Kelahiran ini dibuat untuk dapat dipergunakan seperlunya. </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><br><br><br><br><br><br>
              <div class="row">
                <div class="col">
                  <div class="row">
                    <div class="col-4 offset-8">
                      <center>
                        <h6 style="line-height: 10pt;"> Tangerang, <?php echo strftime("%d %B %Y"); ?></h6>
                        <h6>Kepala Desa Salembaran Jati</h6>
                        <br><br><br><br><br><br><br><br>
                        <h6><b><u>H. AGUS SETIAWAN, S.IP</u></b></h6>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
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

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <?php $this->load->view("admin/_partials/js.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>
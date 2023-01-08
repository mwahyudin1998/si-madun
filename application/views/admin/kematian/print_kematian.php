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
                  <h6 style="line-height: 15pt;">Jl. Salembaran Jati No.1 RT.01 / RW.01 Desa Salembaran Jati
                    <br>Kec. Kosambi Tangerang Banten 15214
                  </h6>
                  <hr class="letter-separator">
                </center><br>
              </div>
              <div class="isi">
                <center>
                  <u>
                    <h5><b>SURAT KETERANGAN KEMATIAN</b></h5>
                  </u>
                  <h5>No. <?= $kematians->id_kematian ?>/DSSJ/SK-KMT/<?php echo date('m/Y'); ?></h5>
                </center>
                <br>
                <br>
                <div class="row">
                  <div class="col">
                    <h6> Yang bertanda tangan dibawah ini Kepala Desa Salembaran Jati Kecamatan Kosambi
                      Kabupaten Tangerang, menerangkan dengan sesungguhnya bahwa:
                    </h6>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <div class="col" style="padding-left: 20px;">
                      <div class="row">
                        <div class="col-4">
                          <h6>NIK</h6>
                        </div>
                        <div class="col">
                          <h6>: <?= $kematians->nik ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Nama</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <b> <?= $kematians->nama_lengkap ?></b></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Jenis Kelamin</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kematians->jenis_kelamin ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Alamat</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kematians->alamat ?> RT.<?= $kematians->rt ?>/RW.<?= $kematians->rw ?>
                            <br> &nbsp; DESA SALEMBARAN JATI KECAMATAN KOSAMBI
                          </h6>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <h6>Telah meninggal dunia pada:</h6>
                      </div>
                    </div>
                    <div class="col" style="padding-left: 20px;">
                      <div class="row">
                        <div class="col-4">
                          <h6>Tanggal</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= strftime("%d %B %Y", strtotime($kematians->tanggal_meninggal)) ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Jam</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kematians->waktu ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Di</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kematians->tempat_kematian ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <h6>Didebabkan Karena</h6>
                        </div>
                        <div class="col">
                          <h6 class="upper">: <?= $kematians->penyebab ?></h6>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <h6>Surat keterangan ini dibuat atas dasar sebenarnya</h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <h6>Nama Pelapor</h6>
                      </div>
                      <div class="col">
                        <h6 class="upper">: <?= $kematians->nama_pelapor ?></h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <h6>Hubungan Pelapor</h6>
                      </div>
                      <div class="col">
                        <h6 class="upper">: <?= $kematians->hubungan_pelapor ?></h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <h6>Demikian Surat Keterangan Kematian ini dibuat untuk dapat dipergunakan seperlunya. </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><br><br><br><br><br>
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
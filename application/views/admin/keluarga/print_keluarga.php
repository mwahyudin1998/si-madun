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
      width: 100%;
      size: landscape;
      padding: 10mm;
      margin: 0mm auto;
      border: 1px #D3D3D3 solid;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
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
      height: 120px;
      left: 0;
      top: 0;
    }

    @page {
      size: landscape;
      margin: 0;
    }

    @media print {

      /* html, body {
            width: 297mm;
            height: 210mm;        
        } */
      .page {
        size: landscape;
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
              <img src="<?php echo base_url('imgs/garuda.png') ?>" alt="logo Garuda" class="garuda" />
              <center>
                <h2><b>SALINAN KARTU KELUARGA</b></h2>
                <h5><b>No. <?= $anggota_keluarga['kepala_keluarga']->no_kk ?></b></h5>
              </center><br><br>
              <div class="row mb-3">
                <div class="col-4">
                  <div class="row">
                    <div class="col">Nama Kepala Keluarga</div>
                    <div class="col">: <?= $anggota_keluarga['kepala_keluarga']->nama_lengkap ?></div>
                  </div>
                  <div class="row">
                    <div class="col">Alamat</div>
                    <div class="col">: <?= $anggota_keluarga['kepala_keluarga']->alamat ?></div>
                  </div>
                  <div class="row">
                    <div class="col">RT / RW</div>
                    <div class="col">
                      : <?= $anggota_keluarga['kepala_keluarga']->rt ?>
                      /
                      <?= $anggota_keluarga['kepala_keluarga']->rw ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">kelurahan / Desa</div>
                    <div class="col">: SALEMBARAN JATI</div>
                  </div>
                </div>
                <div class="col-4 offset-4">
                  <div class="row">
                    <div class="col">Kecamatan</div>
                    <div class="col">: KOSAMBI</div>
                  </div>
                  <div class="row">
                    <div class="col">Kabupaten / Kota</div>
                    <div class="col">: TANGERANG</div>
                  </div>
                  <div class="row">
                    <div class="col">Kode Pos</div>
                    <div class="col">: 15214</div>
                  </div>
                  <div class="row">
                    <div class="col">Provinsi</div>
                    <div class="col">: BANTEN</div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <table>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th width="1%">NIK</th>
                      <th>Jenis<br>Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Pendidikan</th>
                      <th>Pekerjaan</th>
                    </tr>
                    <tr>
                      <th> </th>
                      <th>(1)</th>
                      <th>(2)</th>
                      <th>(3)</th>
                      <th>(4)</th>
                      <th>(5)</th>
                      <th>(6)</th>
                      <th>(7)</th>
                      <th>(8)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($anggota_keluarga['list_keluarga'] as $key => $penduduk) : ?>
                      <tr class="upper">
                        <td>
                          <center>
                            <?= $key + 1 ?>
                          </center>
                        </td>
                        <td>
                          <?php echo $penduduk->nama_lengkap ?>
                        </td>
                        <td width="1%">
                          <?php echo $penduduk->nik ?>
                        </td>
                        <td>
                          <center>
                            <?php echo $penduduk->jenis_kelamin ?>
                          </center>
                        </td>
                        <td>
                          <?= $penduduk->tempat_lahir ?>
                        </td>
                        <td>
                          <?php echo date("d-m-Y", strtotime($penduduk->tgl_lahir)) ?>
                        </td>
                        <td>
                          <?php echo $penduduk->agama ?>
                        </td>
                        <td>
                          <?php echo $penduduk->pendidikan ?>
                        </td>
                        <td>
                          <?php echo $penduduk->pekerjaan ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="row mb-4">
                <table>
                  <thead>
                    <tr>
                      <th rowspan="2">No</th>
                      <th rowspan="2">Status Perkawinan</th>
                      <th rowspan="2">Status Hubungan<br>Dalam Keluarga</th>
                      <th rowspan="2">Kewarganegaraan</th>
                      <th colspan="2">Dokumen Imigrasi</th>
                      <th colspan="2">Nama Orang Tua</th>
                    </tr>
                    <tr>
                      <th>No. Paspor</th>
                      <th>No. KITAS/KITAP</th>
                      <th>Ayah</th>
                      <th>Ibu</th>
                    </tr>
                    <tr>
                      <th> </th>
                      <th>(9)</th>
                      <th>(10)</th>
                      <th>(11)</th>
                      <th>(12)</th>
                      <th>(13)</th>
                      <th>(14)</th>
                      <th>(15)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($anggota_keluarga['list_keluarga'] as $key => $penduduk) : ?>
                      <tr class="upper">
                        <td>
                          <center>
                            <?= $key + 1 ?>
                          </center>
                        </td>
                        <td>
                          <?php echo $penduduk->status_kawin ?>
                        </td>
                        <td>
                          <?php echo $penduduk->status_keluarga ?>
                        </td>
                        <td>
                          <center>
                            WNI
                          </center>
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          -
                        </td>
                        <td>
                          <?= strtolower($penduduk->status_keluarga) == "anak"
                            ? $anggota_keluarga['list_keluarga'][array_search(
                              'suami',
                              array_map(
                                'strtolower',
                                array_column(
                                  $anggota_keluarga['list_keluarga'],
                                  "status_keluarga"
                                )
                              )
                            )]->nama_lengkap
                            : "-" ?>
                        </td>
                        <td>
                          <?= strtolower($penduduk->status_keluarga) == "anak"
                            ? $anggota_keluarga['list_keluarga'][array_search(
                              'istri',
                              array_map(
                                'strtolower',
                                array_column(
                                  $anggota_keluarga['list_keluarga'],
                                  "status_keluarga"
                                )
                              )
                            )]->nama_lengkap
                            : "-" ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-6 offset-3">
                  <br>
                  <center>
                    <h6>Kepala Keluarga,</h6>
                    <br><br><br><br><br><br>
                    <h6><b><u><?= $anggota_keluarga['kepala_keluarga']->nama_lengkap ?></u></b></h6>
                  </center>
                </div>
                <div class="row">
                  <div class="col">
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

</body>

</html>



<!-- <head>
  <title>Sistem Kependudukan</title>
  <link rel="icon" href="<?php echo base_url('imgs/Kabupaten_Tangerang.png') ?>">
</head> -->




<!-- <div class="page">
  <div class="content-wrapper">
    <img src="<?php echo base_url('imgs/garuda.png') ?>" alt="logo Garuda" class="garuda" />
    <center class="page">
      <h1>SALINAN KARTU KELUARGA</h1>
      <h3>No. </h3>
    </center><br><br>
    <table>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
      </tr>
      <tr>
        <td>1</td>
        <td>H. AGUS SETIAWAN, S.IP</td>
      </tr>
      <tr>
        <td>February</td>
        <td>$80</td>
      </tr>
    </table>
  </div>
</div> -->

<!-- <script type="text/javascript">
    window.print();
  </script> -->

<script type="text/javascript">
  window.print();
</script>
</body>

</html>
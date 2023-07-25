<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <?= $this->include("templates/head") ?>
</head>

<body class="light">
  <div id="app">
    <div id="main" class="layout-horizontal">
      <?= $this->include("templates/navbar") ?>

      <div class="content-wrapper container">
        <div class="page-heading">
          <h3>Settlement Penjualan Tiket</h3>
          <small>Penuntasan transasaki penjualan tiket</small>
        </div>

        <?php if (session()->getFlashdata('status')) : ?>
          <div class="alert alert-light-primary color-primary alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('status'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-2">Data Paket</h5>
                        <div class="row">
                          <table class="table table-hover">
                            <thead>
                              <thead>

                              </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($tampildata as $item) : ?>



                                <tr>
                                  <td>
                                    <div class="list-group">


                                      <div class="list-group-item">
                                        <div class="d-flex align-items-center">
                                          <div class="p-2">
                                            <img src="icon/box.svg" alt="box" width="64px">
                                          </div>

                                          <div class="p-2 flex-fill">
                                            <span class="text-info clearfix fw-bold"><?= $item->point_keberangkatan; ?></span>
                                            <small class="fw-bold">Pengirim</small> <br>
                                            <span><?= $item->nomor_pengirim; ?></span> / <span><?= $item->pengirim; ?></span>
                                            <br>
                                            <small class="fw-bold">Penerima</small> <br>
                                            <span><?= $item->nomor_penerima; ?></span> / <span><?= $item->penerima; ?></span>
                                          </div>

                                          <div class="p-2 flex-fill">
                                            <small class="fw-bold">Berat/Jumlah</small> <br>
                                            <span><?= $item->berat; ?> KG</span> / <span><?= $item->jumlah_koli; ?> Koli</span>
                                            <br>
                                            <small class="fw-bold">Jenis/Isi</small> <br>
                                            <span><?= $item->jenis; ?></span> <br> <span><?= $item->isi; ?></span>
                                          </div>

                                          <div class="p-2 text-right">
                                            <strong><?= "Rp. " . number_format($item->harga, 0, ',', '.'); ?></strong> <!-- Format angka ke format "Rp. 45,000" -->
                                            <br>
                                            <button class="btn btn-outline-dark btn-sm" onclick="window.open('<?php echo base_url('pdfslippaket/' . $item->id); ?>', '', 'width=500, height=500')"><i class="bi bi-printer-fill"></i></button>
                                          </div>
                                        </div>

                                      </div>


                                    </div>
                                  </td>


                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>


                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-2">Rekap Tagihan</h5>
                        <div class="form-group mb-3">

                          <table class="table table-hover">

                            <head>
                              <tr>
                                <th>Point Tujuan</th>
                                <th>KG</th>
                                <th>Koli</th>
                                <th>Jumlah</th>
                              </tr>
                            </head>
                            <tbody>
                              <?php $no = 1;
                              foreach ($tampildata as $item) : ?>
                                <tr>
                                  <td>
                                    <?= $item->point_keberangkatan; ?>

                                  </td>
                                  <td> <?= $item->berat; ?></td>
                                  <td> <?= $item->jumlah_koli; ?></td>


                                  <td with="10"> <?= $item->harga; ?></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                            <tr>
                              <td></td>
                              <td align="right">
                                <h3><?= $totaldata['total_berat']; ?></h3>
                              </td>
                              <td align="right">
                                <h3><?= $totaldata['total_koli']; ?></h3>
                              </td>
                              <td align="right">
                                <h3><?= number_format($totaldata['total_harga'], 0, ',', '.'); ?>
                                </h3>
                              </td>
                            </tr>
                          </table>

                          <form action="settlementpaket" method="POST">
                            <textarea class="form-control my-2" placeholder="Catatan..." name="catatan"></textarea>
                            <label><input type="checkbox" required> Dengan ini Saya menyatakan telah menyetorkan Uang hasil penjualan  sesuai dengan besar tagihan.</label>
                            <button type="submit" class="mr-auto btn btn-primary">Settlement</button>
                          </form>



                        </div>
                      </div>
                    </div>
                  </div>






                </div>

            </div>

            <?= $this->include("templates/footer") ?>
        </div>

      </div>

      <?= $this->include("templates/js") ?>

      <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
      </script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
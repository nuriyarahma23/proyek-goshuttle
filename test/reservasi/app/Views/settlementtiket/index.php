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
                        <h5 class="card-title mb-2">Data Tiket</h5>
                        <div class="row">
                          <table class="table table-hover">
                            <thead>

                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($tampildata as $item) : ?>
                                <tr>
                                  <td>
                                    <?= $item->tanggal_pembayaran ?>&nbsp<br>
                                    Seat :<?= $item->nomor_kursi ?> <br>
                                    <?= $item->point_keberangkatan ?> - <?= $item->tujuan ?><br>
                                    <?= $item->nama ?> / <?= $item->nomor_telepon ?><br>
                                  </td>
                                  <td>&nbsp <?= 'Rp. ' . number_format($item->harga, 0, ',', '.') ?> </td>
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

                          <!-- <table class="table table-hover">
                            <tbody>
                              <?php $no = 1;
                              foreach ($tampilrekap as $item) : ?>
                                <tr>
                                  <td>
                                    <?= $item->tanggal_pembayaran ?><br>
                                    <?= $item->metode_pembayaran ?><br>
                                    <?= $item->harga ?> <br>
                                  </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table> -->


                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>QRIS</td>
                                <td align="right">Rp. <?= number_format(isset($qris['total_harga']) ? $qris['total_harga'] : 0, 0, ',', '.'); ?>,-</td>
                              </tr>

                              <tr>
                                <td>CASH PAYMENT</td>
                                <td align="right">Rp. <?= number_format(isset($bayarDitempat['total_harga']) ? $bayarDitempat['total_harga'] : 0, 0, ',', '.'); ?>,-</td>
                              </tr>

                              <tr>
                                <td>BANK TRANSFER</td>
                                <td align="right">Rp. <?= number_format(isset($bankBca['total_harga']) ? $bankBca['total_harga'] : 0, 0, ',', '.'); ?>,-</td>
                              </tr>


                            </tbody>
                          </table>
                          <form action="save/settlement" method="POST">
                            <textarea class="form-control my-2" placeholder="Catatan..." name="catatan"></textarea>
                            <label><input type="checkbox" required> Dengan ini Saya menyatakan telah menyetorkan Uang hasil penjualan sesuai dengan besar tagihan.</label>
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
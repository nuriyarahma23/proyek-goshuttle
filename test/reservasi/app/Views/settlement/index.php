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
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="table1">
                      <thead>
                        
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($tampildata as $item) : ?>
                          <tr>
                            <td>
                            <?= $item->tanggal ?><br>
                             <?= $item->status ?><br>Catatan : <?= $item->catatan ?>
                            </td>
                            <td with="10"><a href="#" data-href="<?= base_url("hapusdata-mobil/$item->id") ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-primary"><i class="bi bi-printer"></i> Cetak</a></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
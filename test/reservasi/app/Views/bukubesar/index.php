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
          <h3>Buku Besar</h3>
          <button type="button" class="btn icon icon-left btn-primary block" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle-fill"></i> Tambah Data
          </button>
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
                        <tr>
                          <th rowspan="2">ID</th>
                          <th rowspan="2">Tanggal</th>
                          <th rowspan="2">Kategori</th>
                          <th rowspan="2">Deskripsi</th>
                          <th colspan="2" style="text-align: center">Mutasi</th>
                          <th rowspan="2">Saldo</th>
                          <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                          <th style="text-align: center">Debet</th>
                          <th style="text-align: center">Kredit</th>
                        </tr>

                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($tampildata as $item) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $item->tanggal ?></td>
                            <td><?= $item->kategori ?></td>
                            <td><?= $item->keterangan ?></td>
                            <td><?= number_format($item->nominal, 0, ",", "."); ?></td>
                            <td><?= number_format($item->nominal, 0, ",", "."); ?></td>
                            <td><?= number_format($item->nominal, 0, ",", "."); ?></td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#editModal<?= $item->id ?>"><i class="bi bi-pencil"></i></a>
                              <a href="#" data-href="<?= base_url("hapusdata-bukubesar/$item->id") ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                          </tr>

                          <!-- Modal Edit -->
                          <div class="modal fade" id="editModal<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalTitle">
                                    Edit Data Buku Besar
                                  </h5>
                                  <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="<?= base_url('prosesedit-bukubesar') ?>" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <input type="hidden" name="id" id="id" value="<?= $item->id ?>">
                                    <div class="form-group">
                                      <label>Tanggal</label>
                                      <input class="form-control" type="date" name="tanggal" value="<?= $item->tanggal ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Kategori</label>
                                      <input class="form-control" type="text" name="kategori" value="<?= $item->kategori ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Keterangan</label>
                                      <input class="form-control" type="text" name="keterangan" value="<?= $item->keterangan ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Tipe</label>
                                        <select class="form-control form-control-sm" name="tipe">
                                        <option value="">Pilihan</option>
                                        <option value="Masuk">Masuk</option>
                                        <option value="Keluar">Keluar</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Jumlah</label>
                                      <input class="form-control" type="number" name="nominal" value="<?= $item->nominal ?>" required>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                      <span class="d-none d-sm-block">Close</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                      <span class="d-none d-sm-block">Submit</span>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal Edit -->
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <?= $this->include("bukubesar/tambahModal") ?>

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="hapusModalTitle">
                  Hapus Data Buku Besar
                </h5>
                <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                  <span class="d-none d-sm-block">Close</span>
                </button>
                <a id="delete-button" href="#" class="btn btn-danger">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Hapus -->

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

  <script>
    function confirmToDelete(el) {
      $("#delete-button").attr("href", el.dataset.href);
      $("#hapusModal").modal('show');
    }
  </script>

</body>

</html>
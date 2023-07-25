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
          <h3>Data Mobil</h3>
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
                          <th>ID</th>
                          <th>Identitas</th>
                          <th>Nomor Polisi</th>
                          <th>Kilometer Terakhir</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($tampildata as $item) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $item->identitas ?></td>
                            <td><?= $item->nopol ?></td>
                            <td><?= $item->km_terakhir ?></td>
                            <td>
                              <?php if ($item->status == 'Aktif') : ?>
                                <span class="badge bg-success"><?= $item->status ?></span>
                              <?php else : ?>
                                <span class="badge bg-danger"><?= $item->status ?></span>
                              <?php endif; ?>
                            </td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#editModal<?= $item->id ?>"><i class="bx bx-edit-alt"></i>Edit</a>
                              <a href="#" data-href="<?= base_url("hapusdata-mobil/$item->id") ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                          </tr>

                          <!-- Modal Edit -->
                          <div class="modal fade" id="editModal<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalTitle">
                                    Edit Data Mobil
                                  </h5>
                                  <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="<?= base_url('prosesedit-mobil') ?>" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <input type="hidden" name="id" id="id" value="<?= $item->id ?>">
                                    <div class="form-group">
                                      <label>Identitas</label>
                                      <input class="form-control" type="text" name="identitas" value="<?= $item->identitas ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Nomor Polisi</label>
                                      <input class="form-control" type="text" name="nopol" value="<?= $item->nopol ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Kilometer Terakhir</label>
                                      <input class="form-control" type="number" name="km_terakhir" value="<?= $item->km_terakhir ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Status</label>
                                      <select class="form-control form-control-sm" name="status" required>
                                        <option value="">Pilihan</option>
                                        <?php if ($item->status == 'Aktif') : ?>
                                          <option selected="true" value="Aktif">Aktif</option>
                                          <option value="Tidak Aktif">Tidak Aktif</option>
                                        <?php else : ?>
                                          <option value="Aktif">Aktif</option>
                                          <option selected="true" value="Tidak Aktif">Tidak Aktif</option>
                                        <?php endif; ?>
                                      </select>
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

        <?= $this->include("master/mobil/tambahModal") ?>

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="hapusModalTitle">
                  Hapus Data Mobil
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
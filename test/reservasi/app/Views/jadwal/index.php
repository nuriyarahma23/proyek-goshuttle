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
          <h3>Data Jadwal</h3>
          <button type="button" class="btn icon icon-left btn-primary block" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle-fill"></i> Tambah Jadwal
          </button>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
          <div class="alert alert-light-primary color-primary alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('success'); ?>
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
                          <!-- <th>Dari Tanggal</th>
                          <th>Sampai Tanggal</th> -->
                          <th>Tanggal keberangkatan</th>
                          <th>Tujuan</th>
                          <th>Jumlah Kursi</th>
                          <th>Harga Tiket</th>
                          <th>Point Keberangkatan</th>
                          <th>Jam Keberangkatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($tampildata as $row) : ?>
                          <tr>
                            <td><?= $row->id_reservasi ?></td>
                            <td><?= $row->tanggal_reservasi ?></td>

                            <td><?= $row->tujuan ?></td>
                            <td><?= $row->jml_kursi ?></td>
                            <td><?= $row->harga_tiket ?></td>
                            <td><?= $row->point_keberangkatan ?></td>
                            <td><?= $row->jam ?></td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#editModal<?= $row->id_reservasi ?>"><i class="bx bx-edit-alt"></i>Edit</a>
                              <a href="#" data-href="<?= base_url("hapus-jadwal/$row->id_reservasi") ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                          </tr>

                          <!-- Modal Edit -->
                          <div class="modal fade" id="editModal<?= $row->id_reservasi ?>" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalTitle">
                                    Edit Jadwal
                                  </h5>
                                  <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="<?= base_url('update-jadwal') ?>" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <input type="hidden" name="id_reservasi" id="id_reservasi" value="<?= $row->id_reservasi ?>">

                                    <!-- <div class="form-group">
                                      <label>Dari Tanggal</label>
                                      <input class="form-control" type="date" id="edit_dari_tgl" name="dari_tgl" value="<?= $row->tanggal_reservasi ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Sampai Tanggal</label>
                                      <input class="form-control" type="date" id="edit_sampai_tgl" name="sampai_tgl" value="<?= $row->tanggal_reservasi ?>" required>
                                    </div> -->
                                    <div class="form-group">
                                      <label>Tanggal Reservasi</label>
                                      <input class="form-control" type="date" id="edit_dari_tgl" name="tanggal_reservasi" value="<?= $row->tanggal_reservasi ?>" required>
                                    </div>



                                    <div class="form-group">
                                      <label>Tujuan</label>
                                      <select class="form-control form-control-sm" name="tujuan" required>
                                        <option value="">Pilih Tujuan</option>

                                        <?php foreach ($grup_kota as $grup) : ?>
                                          <optgroup label="<?php echo $grup ?>">
                                            <?php foreach ($kota[$grup] as $ktd) : ?>
                                              <option value="<?php echo $ktd['id_kota'] ?>" <?php echo ($row->tujuan == $ktd['kode_kota']) ? 'selected' : '' ?>>
                                                <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                              </option>
                                            <?php endforeach; ?>
                                          </optgroup>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Jumlah Kursi</label>
                                      <input class="form-control" type="number" id="edit_jml_kursi" name="jml_kursi" value="<?= $row->jml_kursi ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Harga Tiket</label>
                                      <input class="form-control" type="number" id="edit_harga_tiket" name="harga_tiket" value="<?= $row->harga_tiket ?>" required>
                                    </div>

                                    <div class="form-group">
                                      <label>Point Keberangkatan</label>
                                      <select class="form-control form-control-sm" name="point_keberangkatan" required>
                                        <option value="">Pilih Keberangkatan</option>
                                        <?php foreach ($grup_kota as $grup) : ?>
                                          <optgroup label="<?php echo $grup ?>">
                                            <?php foreach ($kota[$grup] as $ktd) : ?>
                                              <option value="<?php echo $ktd['id_kota'] ?>" <?php echo ($row->point_keberangkatan == $ktd['kode_kota']) ? 'selected' : '' ?>>
                                                <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                              </option>
                                            <?php endforeach; ?>
                                          </optgroup>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Jam Keberangkatan</label>
                                      <input class="form-control" type="time" id="edit_jam" name="jam" value="<?= $row->jam ?>" required>
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

        <?= $this->include("jadwal/tambahModal") ?>

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="hapusModalTitle">
                  Hapus Jadwal
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
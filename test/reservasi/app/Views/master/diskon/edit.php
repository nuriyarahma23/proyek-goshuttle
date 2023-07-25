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
          <h3>Edit Data Mobil</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <?php $validation = \Config\Services::validation(); ?>
                  <form action="<?= base_url('prosesedit-diskon') ?>" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id_diskon" id="id_diskon" value="<?= $tampildata->id_diskon ?>">

                    <div class="form-group">
                      <label for="kode_diskon">Kode</label>
                      <input class="form-control" type="text" name="kode_diskon" id="kode_diskon" value="<?= $tampildata->kode_diskon ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nama_diskon">Nama Diskon</label>
                      <input class="form-control" type="text" name="nama_diskon" id="nama_diskon" value="<?= $tampildata->nama_diskon ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select class="form-control form-control-sm" name="type" id="type" required>
                        <option value="">Pilihan</option>
                        <?php if ($tampildata->type == 'Amount') : ?>
                          <option selected="true" value="Amount">Amount</option>
                          <option value="Percentage">Percentage</option>
                        <?php else : ?>
                          <option value="Amount">Amount</option>
                          <option selected="true" value="Percentage">Percentage</option>
                        <?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="besaran">Besaran</label>
                      <input class="form-control" type="number" name="besaran" id="besaran" value="<?= $tampildata->besaran ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="aktif">Aktif</label>
                      <select class="form-control form-control-sm" name="aktif" id="aktif" required>
                        <option value="">Pilihan</option>
                        <?php if ($tampildata->aktif == 'Aktif') : ?>
                          <option selected="true" value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                        <?php else : ?>
                          <option value="Aktif">Aktif</option>
                          <option selected="true" value="Tidak Aktif">Tidak Aktif</option>
                        <?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan Edit</button>
                    </div>
                  </form>
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
</body>

</html>
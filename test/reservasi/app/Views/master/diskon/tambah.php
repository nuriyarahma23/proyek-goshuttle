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
                  <form action="<?= base_url('prosestambah-diskon') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Kode</label>
                      <input class="form-control" type="text" name="kode_diskon" placeholder="Kode Diskon" required>
                    </div>
                    <div class="form-group">
                      <label>Nama Diskon</label>
                      <input class="form-control" type="text" name="nama_diskon" placeholder="Nama Diskon" required>
                    </div>
                    <div class="form-group">
                      <label>Type</label>
                      <select class="form-control form-control-sm" name="type">
                        <option value="">Pilihan</option>
                        <option value="amount">Amount</option>
                        <option value="percentage">Percentage</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Besaran</label>
                      <input class="form-control" type="text" name="besaran" placeholder="Besaran" required>
                    </div>
                    <div class="form-group">
                      <label>Aktif</label>
                      <select class="form-control form-control-sm" name="aktif">
                        <option value="">Pilihan</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
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
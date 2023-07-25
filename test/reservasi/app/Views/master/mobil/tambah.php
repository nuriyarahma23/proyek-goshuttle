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
                  <form action="<?= base_url('prosestambah-mobil') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Identitas</label>
                      <input class="form-control" type="text" name="kode_unit" placeholder="Identitas" required>
                    </div>
                    <div class="form-group">
                      <label>Nomor Polisi</label>
                      <input class="form-control" type="text" name="nopol" placeholder="Nomor Polisi" required>
                    </div>
                    <div class="form-group">
                      <label>Kilometer Terakhir</label>
                      <input class="form-control" type="number" name="km_terakhir" placeholder="Kilometer Terakhir" required>
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control form-control-sm" name="status">
                        <option value="">Pilihan</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
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
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
          <h3>Kelola Jadwal</h3>
          <p>Pilih jadwal yang akan dikelola</p>
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
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-2">Pilih jadwal</h5>
                      <div class="form-group mb-3">
                        <label for="">Tanggal</label>
                        <input class="form-control" id="tanggal" type="date" name="tanggal">
                      </div>

                      <div class="form-group mb-3">
                        <label for="">Asal - Tujuan</label>
                        <select class="form-control" id="asal" name="asal">
                          <option value="">Asal</option>
                          <?php foreach ($grup_kota as $grup) : ?>
                            <optgroup label="<?php echo $grup ?>">
                              <?php foreach ($kota[$grup] as $ktd) : ?>
                                <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
                              <?php endforeach; ?>
                            </optgroup>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <select class="form-control" id="tujuan" name="tujuan">
                          <option value="">Tujuan</option>
                          <?php foreach ($grup_kota as $grup) : ?>
                            <optgroup label="<?php echo $grup ?>">
                              <?php foreach ($kota[$grup] as $ktd) : ?>
                                <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
                              <?php endforeach; ?>
                            </optgroup>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="form-group mb-3 pt-3">
                        <button type="submit" class="btn btn-block btn-primary" id="cariButton">Cari</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="row" id="daftar_jadwal">

                  </div>

                </div>
                <script>
                  var cariButton = document.getElementById("cariButton");
                  if (cariButton) {
                    cariButton.addEventListener("click", function(e) {
                      e.preventDefault();

                      var tanggal = document.getElementById("tanggal").value;
                      var asal = document.getElementById("asal").value;
                      var tujuan = document.getElementById("tujuan").value;

                      var xhr = new XMLHttpRequest();
                      xhr.open("POST", "<?php echo base_url('cari-jadwal'); ?>");
                      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                      xhr.onload = function() {
                        if (xhr.status === 200) {
                          // Menampilkan halaman daftar jadwal dalam elemen dengan ID 'daftar_jadwal'
                          document.getElementById("daftar_jadwal").innerHTML = xhr.responseText;
                        } else {
                          alert("Terjadi kesalahan dalam memuat halaman daftar jadwal.");
                        }
                      };
                      xhr.onerror = function() {
                        alert("Terjadi kesalahan dalam memuat halaman daftar jadwal.");
                      };
                      xhr.send("tanggal=" + tanggal + "&asal=" + asal + "&tujuan=" + tujuan);
                    });
                  }
                </script>
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
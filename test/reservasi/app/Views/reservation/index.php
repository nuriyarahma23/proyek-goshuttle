<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <?= $this->include("templates/head") ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="light">
  <div id="app">
    <div id="main" class="layout-horizontal">
      <?= $this->include("templates/navbar") ?>

      <div class="content-wrapper container">
        <div class="page-heading">
          <h3>Reservasi Keberangkatan</h3>
         
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
                <div class="col-12 col-lg-6">
                  <div class="card">
                    <div class="card-body">

                      <form action="/reservation/listReservasi" method="post" id="isiReservasi">
                        <div class="row">

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                              <input type="date" name="tanggal_keberangkatan" class="form-control" id="tanggal_keberangkatan" placeholder="Tanggal Keberangkatan">
                            </div>
                            <button type="submit" class="btn btn-primary">Cari</button>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="asal_tujuan">Asal - Tujuan</label>
                              <select class="form-control form-control-sm" id="departurePointId" name="asal">
                                <option value="">Berangkat dari</option>
                                <?php foreach ($grup_kota as $grup) : ?>
                                  <optgroup label="<?php echo $grup ?>">
                                    <?php foreach ($kota[$grup] as $ktd) : ?>
                                      <option value="<?php echo $ktd['id_kota'] ?>"><?php echo $ktd['nama_kota'] ?></option>
                                    <?php endforeach; ?>
                                  </optgroup>
                                <?php endforeach; ?>
                              </select>

                              <select class="form-control form-control-sm mt-2" id="arrivalPointId" name="tujuan">
                                <option value="">Tujuan</option>
                                <?php foreach ($grup_kota as $grup) : ?>
                                  <optgroup label="<?php echo $grup ?>">
                                    <?php foreach ($kota[$grup] as $ktd) : ?>
                                      <option value="<?php echo $ktd['id_kota'] ?>"><?php echo $ktd['nama_kota'] ?></option>
                                    <?php endforeach; ?>
                                  </optgroup>
                                <?php endforeach; ?>
                              </select>

                            </div>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <div id="listreservasi">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div id="kursi_pelanggan">
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

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <script>
    // Tangkap peristiwa submit formulir
    $('#isiReservasi').submit(function(event) {
      event.preventDefault(); // Mencegah aksi default pengiriman formulir

      // Ambil nilai input
      var tanggalKeberangkatan = $('#tanggal_keberangkatan').val();
      var asal = $('#departurePointId').val();
      var tujuan = $('#arrivalPointId').val();


      // Buat objek data yang akan dikirim melalui Ajax
      var data = {
        tanggal_keberangkatan: tanggalKeberangkatan,
        asal: asal,
        tujuan: tujuan
      };

      // Kirim permintaan Ajax
      $.ajax({
        url: '/reservation/listReservasi',
        type: 'POST',
        data: data,
        success: function(response) {
          $('#listreservasi').html(response); // Mengisi div dengan HTML yang diterima dari controller
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
        }
      });
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</body>

</html>
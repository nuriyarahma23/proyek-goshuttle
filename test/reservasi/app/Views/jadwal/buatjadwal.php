<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<?php
$data_form = session()->getFlashdata('data_form');

?>

<head>
  <?= $this->include("templates/head") ?>
  <!-- Select 2 -->
 

</head>

<body class="light">
  <div id="app">
    <div id="main" class="layout-horizontal">
      <?= $this->include("templates/navbar") ?>

      <div class="content-wrapper container">
        <div class="page-heading">
          <h3>Buat Jadwal</h3>
          <p>Buka jadwal baru untuk periode tertentu</p>
         

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
              <form action="<?= base_url("jadwalmultiroute/tambah") ?>" method="post" enctype="multipart/form-data">
                <div class="row">


                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-body">


                        <h5 class="card-title mb-2">Tentukan tanggal</h5>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group mb-3">
                              <label for="">Dari tanggal</label>
                              <input class="form-control" id="tanggal_awal" type="date" name="tanggal_awal" value="<?= set_value('tanggal_awal', isset($data_form['tanggal_awal']) ? $data_form['tanggal_awal'] : '') ?>">
                              <?php if (isset($validation) && $validation->hasError('tanggal_awal')) : ?>
                                <p class="text-danger"><?= $validation->getError('tanggal_awal') ?></p>
                              <?php endif; ?>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group mb-3">
                              <label for="">Sampai tanggal</label>
                              <input class="form-control" id="tanggal_akhir" type="date" name="tanggal_akhir" value="<?= set_value('tanggal_akhir',  isset($data_form['tanggal_akhir']) ? $data_form['tanggal_akhir'] : '') ?>">

                              <?php if (isset($validation) && $validation->hasError('tanggal_akhir')) : ?>
                                <p class="text-danger"><?= $validation->getError('tanggal_akhir') ?></p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-2">Tentukan kursi</h5>
                        <div class="form-group mb-3">
                          <label for="">Jumlah kursi</label>
                          <!-- Your form input -->
                          <input class="form-control" id="jumlah_kursi" type="number" min="8" name="jumlah_kursi" onchange="correctValue()" value="<?= set_value('jumlah_kursi', isset($data_form['jumlah_kursi']) ? $data_form['jumlah_kursi'] : '8') ?>">

                          <!-- JavaScript function to check and correct the value -->
                          <script>
                            function correctValue() {
                              // Get the input element
                              const jumlahKursiInput = document.getElementById('jumlah_kursi');

                              // Get the current value
                              let currentValue = parseInt(jumlahKursiInput.value);

                              // Check if the value is less than 8
                              if (currentValue < 8 || isNaN(currentValue)) {
                                // Set the value to 8 if it's less than 8 or not a number
                                jumlahKursiInput.value = 8;
                              }
                            }
                          </script>


                          <?php if (isset($validation) && $validation->hasError('jumlah_kursi')) : ?>
                            <p class="text-danger"><?= $validation->getError('jumlah_kursi') ?></p>
                          <?php endif; ?>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-2">Tentukan keberangkatan</h5>
                        <div class="alert alert-light-primary color-primary">
                          <p>
                            <strong>AM</strong> 00:00 sd 11:59 <br>
                            <strong>PM</strong> 12:00 sd 23:59
                          </p>
                        </div>

                        <div class="table-responsive">
                          <table class="table table-hover" id="table1">
                            <thead>
                              <tr>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Jam</th>
                                <th>Harga</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>

                                  <select class="form-control" id="asal" name="asal[]">
                                    <option value="">Asal</option>
                                    <?php foreach ($grup_kota as $grup) : ?>
                                      <optgroup label="<?php echo $grup ?>">
                                        <?php foreach ($kota[$grup] as $ktd) : ?>
                                          <option value="<?php echo $ktd['id_kota'] ?>" <?php echo (isset($data_form['asal'][0]) && $ktd['id_kota'] === $data_form['asal'][0]) ? 'selected' : ''; ?>>
                                            <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                          </option>
                                        <?php endforeach; ?>
                                      </optgroup>
                                    <?php endforeach; ?>
                                  </select>
                                </td>
                                <td>
                                  <select class="form-control" id="tujuan" name="tujuan[]">
                                    <option value="">Tujuan</option>
                                    <?php foreach ($grup_kota as $grup) : ?>
                                      <optgroup label="<?php echo $grup ?>">
                                        <?php foreach ($kota[$grup] as $ktd) : ?>
                                          <option value="<?php echo $ktd['id_kota'] ?>" <?php echo (isset($data_form['tujuan'][0]) && $ktd['id_kota'] === $data_form['tujuan'][0]) ? 'selected' : ''; ?>>
                                            <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                          </option>
                                        <?php endforeach; ?>
                                      </optgroup>
                                    <?php endforeach; ?>
                                  </select>
                                </td>
                                <td>
                                  <input type="time" class="form-control" name="jam[]" id="jam" value="<?= set_value('jam[0]',  isset($data_form['jam'][0]) ? $data_form['jam'][0] : '') ?>">

                                  <?php if (isset($validation) && $validation->hasError('jam[0]')) : ?>
                                    <p class="text-danger"><?= $validation->getError('jam[0]') ?></p>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <input type="text" class="form-control" name="harga[]" id="harga" value="<?= set_value('harga[0]', isset($data_form['harga'][0]) ? $data_form['harga'][0] : '') ?>">


                                  <?php if (isset($validation) && $validation->hasError('harga[0]')) : ?>
                                    <p class="text-danger"><?= $validation->getError('harga[0]') ?></p>
                                  <?php endif; ?>
                                </td>
                              </tr>
                              <hr>
                              <tr>
                                <td>
                                  <select class="form-control" name="asal[]" id="asal">
                                    <option value="">Asal</option>
                                    <?php foreach ($grup_kota as $grup) : ?>
                                      <optgroup label="<?php echo $grup ?>">
                                        <?php foreach ($kota[$grup] as $ktd) : ?>
                                          <option value="<?php echo $ktd['id_kota'] ?>" <?php echo (isset($data_form['asal'][1]) && $ktd['id_kota'] === $data_form['asal'][1]) ? 'selected' : ''; ?>>
                                            <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                          </option>
                                        <?php endforeach; ?>
                                      </optgroup>
                                    <?php endforeach; ?>
                                  </select>
                                </td>
                                <td>
                                  <select class="form-control" name="tujuan[]" id="tujuan">
                                    <option value="">Tujuan</option>
                                    <?php foreach ($grup_kota as $grup) : ?>
                                      <optgroup label="<?php echo $grup ?>">
                                        <?php foreach ($kota[$grup] as $ktd) : ?>
                                          <option value="<?php echo $ktd['id_kota'] ?>" <?php echo (isset($data_form['tujuan'][1]) && $ktd['id_kota'] === $data_form['tujuan'][1]) ? 'selected' : ''; ?>>
                                            <?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?>
                                          </option>
                                        <?php endforeach; ?>
                                      </optgroup>
                                    <?php endforeach; ?>
                                  </select>
                                </td>
                                <td>
                                  <input type="time" class="form-control" name="jam[]" id="jam" value="<?= set_value('jam[1]',  isset($data_form['jam'][1]) ? $data_form['jam'][1] : '') ?>">



                                  <?php if (isset($validation) && $validation->hasError('jam[1]')) : ?>
                                    <p class="text-danger"><?= $validation->getError('jam[1]') ?></p>
                                  <?php endif; ?>
                                </td>
                                <td>

                                  <input type="text" class="form-control" name="harga[]" id="harga" value="<?= set_value('harga[1]',  isset($data_form['harga'][1]) ? $data_form['harga'][1] : '') ?>">




                                  <?php if (isset($validation) && $validation->hasError('harga[1]')) : ?>
                                    <p class="text-danger"><?= $validation->getError('harga[1]') ?></p>
                                  <?php endif; ?>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="form-group mt-2">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </form>
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
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
  </script>

</body>

</html>
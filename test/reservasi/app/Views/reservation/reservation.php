<style>
  .empty-seat-card {
    background-image: url('https://sys.goshuttle.co.id/images/icons/seat.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;

  }

  .seat-card {
    background-image: url('https://sys.goshuttle.co.id/images/icons/seat.svg');
    background-repeat: no-repeat;
    background-position: left bottom;
    background-size: contain;
  }
</style>

<div class="card mb-4">
  <div class="card-header">
    <div wire:id="Qf87eY2RjVJmLOEcPhhY">
      <strong>
        <?php echo $reservasi['point_keberangkatan'] . ' - ' . $reservasi['tujuan'];  ?> |
        <?php
        date_default_timezone_set('Asia/Jakarta'); // Atur zona waktu sesuai kebutuhan
        $now = date('l, d M Y', strtotime($reservasi['tanggal_reservasi'])) . ' ' . date('H:i', strtotime($reservasi['jam'])); // Format tanggal dan waktu
        echo $now; ?>
      </strong>
      <br>
      <a class="text-info my-4" style="cursor:pointer;" onclick="ubahSopirdanMobil()">
        <i class="bi bi-pencil-square"></i>
        <?= $reservasi['identitas']; ?> |
        <?= $reservasi['nama_sopir']; ?> |
        BOP Rp.468,000
      </a>
      |

      <span><?php echo $reservasi['status_reservasi']; ?></span>
      |
      <a style="cursor:pointer;" class="text-info" onclick="if (window.confirm('Yakin cetak manifest untuk point CIHAMPELAS')) window.open('<?= base_url('pdfmanifest/'.$reservasi['id_reservasi']);?>', '', 'width=500,height=500')">
        <i class="bi bi-printer-fill"></i> Cetak Manifest
      </a>
      |
      <?php
      $waktuReservasi = strtotime($reservasi['tanggal_reservasi'] . ' ' . $reservasi['jam']);
      $waktuSaatIni = time();

      if ($waktuReservasi < $waktuSaatIni) {
        echo '<div class="alert alert-danger">
           <span class="fw-bold">Batas waktu reservasi sudah lewat!</span>
       </div>';
      }

      ?>

      <!-- Modal Ubah Sopir dll -->
      <div id="SopirdanMobil1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ResevationDetailLabel">Jadwal #<?php echo $reservasi['id_reservasi']; ?></h5>
              <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form action="/reservations/update/<?php echo $reservasi['id_reservasi']; ?>" method="POST" id="formspirdanmbil">

              <div class="modal-body">
                <div class="form-group">
                  <label>Mobil</label>
                  <select class="form-control form-control-sm" name="id_mobil">
                    <option value="">Pilih ..</option>
                    <?php foreach ($mobil as $dataMobil) : ?>
                      <option value='<?php echo $dataMobil->id; ?>' <?php if ($dataMobil->id == $reservasi['id_mobil']) echo 'selected'; ?>><?php echo $dataMobil->identitas . 'Nopol.' . $dataMobil->nopol; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Sopir</label>
                  <select class="form-control form-control-sm" name="id_sopir">
                    <option value="">Pilih ..</option>
                    <?php foreach ($sopir as $datasopir) : ?>
                      <option value='<?php echo $datasopir->id; ?>' <?php if ($datasopir->id == $reservasi['id_sopir']) echo 'selected'; ?>><?php echo $datasopir->nama_sopir; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kas Jalan</label>
                  <select class="form-control form-control-sm" wire:model="costs">
                    <option value="0">Rp. 0</option>
                    <option value="419000">Rp. 419,000</option>
                    <option value="444000">Rp. 444,000</option>
                    <option value="468000">Rp. 468,000</option>
                    <option value="553000">Rp. 553,000</option>
                  </select>
                </div>


              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                  <span class="d-none d-sm-block">Simpan</span>
                </button>
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                  <span class="d-none d-sm-block">Close</span>
                </button>

              </div>
            </form>
          </div>
          <script>
            $(document).ready(function() {
              $('#formspirdanmbil').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();

                $.ajax({
                  url: url,
                  type: "POST",
                  data: formData,
                  success: function(response) {
                    $('#SopirdanMobil1').modal('hide');



                    $.ajax({
                      url: "<?php echo base_url('reservation/getReservasi/') . $reservasi['id_reservasi']; ?>", // URL ke controller untuk memuat HTML
                      type: "GET",
                      success: function(response) {
                        $('#kursi_pelanggan').html(response); // Mengisi div dengan HTML yang diterima dari controller
                      },
                      error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
                      }
                    });
                  },
                  error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                  }
                });
              });
            });
          </script>
          <script>
            $(document).ready(function() {
              $('#reservationForm').submit(function(e) {
                e.preventDefault(); // Menghentikan submit form secara default

                var form = $(this);
                var url = form.attr('action');
                var method = form.find('input[name="_method"]').val();
                var formData = form.serialize();

                $.ajax({
                  url: url,
                  type: method,
                  data: formData,
                  success: function(response) {
                    // Proses sukses setelah pengiriman AJAX
                    console.log(response);
                    // Lakukan tindakan atau perbarui halaman jika diperlukan
                  },
                  error: function(xhr, status, error) {
                    // Tangani kesalahan saat pengiriman AJAX
                    console.log(xhr.responseText);
                    // Tampilkan pesan kesalahan atau lakukan tindakan lain
                  }
                });
              });
            });
          </script>
        </div>
      </div>

      <script>

      </script>

      <script>
        function ubahSopirdanMobil(scheduleId) {
          // Menampilkan modal dengan id #SopirdanMobil1 menggunakan jQuery
          $('#SopirdanMobil1').modal('show');

          // Mengirimkan data scheduleId ke fungsi atau proses yang sesuai
          // Di sini Anda dapat melakukan apa pun dengan data scheduleId yang dikirimkan
          // Misalnya, mengambil data detail jadwal menggunakan AJAX dan menampilkan di dalam modal
        }
      </script>

      <ul class="nav nav-tabs" id="midSide" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="seatLayout" data-bs-toggle="tab" onclick="seatAndPackage(this)" href="#tab-seatLayout" role="tab" aria-controls="tab-scheduleSearch" aria-selected="true" title="Penumpang">
            Penumpang
          </a>
        </li>

        <li class="nav-item" role="presentation">
          <a class="nav-link" id="packageLayout" data-bs-toggle="tab" onclick="seatAndPackage(this)" href="#tab-packageLayout" role="tab" aria-controls="tab-scheduleSearch" aria-selected="true" title="Penumpang">
            Paket
          </a>
        </li>
      </ul>
    </div>
  </div>


  <div class="card-body" id="tampilanseatdanpackage">
  </div>


  <script>
    seatAndPackage($('#seatLayout'));

    function seatAndPackage(element) {
      var clickedId = element.id; // Mengambil ID elemen yang diklik
      // Menampilkan ID dalam alert
      // alert('Clicked ID: ' + clickedId);
      switch (clickedId) {
        case 'packageLayout':
          $.ajax({
            url: '/paket/<?= $reservasi['id_reservasi']; ?>',
            method: 'GET',
            success: function(response) {
              $('#tampilanseatdanpackage').html(response);
            },
            error: function(xhr, status, error) {
              console.log(error);
            }
          });
          break;
        default:
          $.ajax({
            url: '/reservation/getKursireservasi/<?= $reservasi['id_reservasi']; ?>',
            method: 'GET',
            success: function(response) {


              $('#tampilanseatdanpackage').html(response);
            },
            error: function(xhr, status, error) {
              console.log(error);
            }
          })
          break;
      }

    }

    // Refresh Reservasi
    function checkSessionStorageChanges() {
      var reservasi = sessionStorage.getItem('statusperubahanreservasi');

      if (reservasi === 'true') {

        seatAndPackage($('#seatLayout'));


        sessionStorage.setItem('statusperubahanreservasi', false);


      } else {
        // console.log('Session berisi kosong atau bukan true');
      }


    }
    setInterval(checkSessionStorageChanges, 700);
  </script>

  <!-- ========== Paket Section ========== -->
</div>
<div class="log">
  <div wire:id="w6RQRzbXWPgYY3svVLfF">
    <strong class="">Schedule Log Activities</strong>
    <ul class="list-group list-group-flush">
      <?php foreach ($logreservasi as $log) : ?>
        <li class="list-group-item border-right-0 border-left-0 bg-transparent">
          <div class="btn btn-primary">[<?= $log['tipe_aktivitas'] ?>] </div> <?= $log['keterangan_aktivitas']; ?> By <span class="text-primary"><?= $log['nama_terlibat']; ?></span> <span class="float-right"><?= date('l, d M Y H:m:i', strtotime($log['created_at'])); ?></span>
        </li>
      <?php endforeach; ?>
      <li class="list-group-item border-right-0 border-left-0 bg-transparent">
        [MANIFEST] point CHM mencetak manifest by <span class="text-primary">Alif Fitriyono</span> <span class="float-right">22 Jul 2023 04:58:51</span>
      </li>
      <li class="list-group-item border-right-0 border-left-0 bg-transparent">
        [ARRIVED] mobil sampai point tujuan by <span class="text-primary">Sarah Alifania</span> <span class="float-right">22 Jul 2023 07:11:57</span>
      </li>
      <li class="list-group-item border-right-0 border-left-0 bg-transparent">
        [ARRIVED] mobil sampai point tujuan by <span class="text-primary">Annisa Fitriani</span> <span class="float-right">22 Jul 2023 07:18:36</span>
      </li>
    </ul>
  </div>
</div>
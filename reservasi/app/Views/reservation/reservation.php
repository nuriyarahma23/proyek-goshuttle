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
                <?php echo $reservasi['asal_kota'] . ' - ' . $reservasi['tujuan_kota'];  ?> |
                <?php

                date_default_timezone_set('Asia/Jakarta'); // Atur zona waktu sesuai kebutuhan

                $now = date('l, d M Y H:i', strtotime($reservasi['waktu'])); // Format tanggal dan waktu

                echo $now; ?>

            </strong>
            <br>
            <a class="text-info my-4" style="cursor:pointer;" onclick="ubahSopirdanMobil(38086)">
                <i class="fa fa-edit"></i>
                <?= $reservasi['identitas']; ?> |
                <?= $reservasi['nama_sopir']; ?> |
                BOP Rp.468,000
            </a> |
            <span>arrived</span>
            |
            <a style="cursor:pointer;" class="text-info" onclick="if (window.confirm('Yakin cetak manifest untuk point CIHAMPELAS')) window.open('https://sys.goshuttle.co.id/print/manifest/38086', '', 'width=500,height=500')">
                <i class="fa fa-print"></i> Cetak Manifest
            </a>
            |

            <?php


            $waktuReservasi = strtotime($reservasi['waktu']);
            $waktuSaatIni = time();

            if ($waktuReservasi < $waktuSaatIni) {
                echo '<div class="alert alert-danger mt-2">
            <h5>Batas waktu reservasi sudah lewat!</h5>
        </div>';
            }
            ?>
            <!-- Modal Ubah Sopir dll -->
            <div id="SopirdanMobil1" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ResevationDetailLabel">Jadwal #<?php echo $reservasi['id_reservasi']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/reservations/update/<?php echo $reservasi['id_reservasi']; ?>" method="POST">

                                <div class="form-group">
                                    <label>Mobil</label>
                                    <select class="form-control" name="id_mobil">
                                        <option value="">Pilih ..</option>
                                        <?php foreach ($mobil as $dataMobil) : ?>
                                            <option value='<?php echo $dataMobil->id; ?>' <?php if ($dataMobil->id == $reservasi['id_mobil']) echo 'selected'; ?>><?php echo $dataMobil->identitas . 'Nopol.' . $dataMobil->nopol; ?></option>


                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sopir</label>
                                    <select class="form-control" name="id_sopir">
                                        <option value="">Pilih ..</option>
                                        <?php foreach ($sopir as $datasopir) : ?>
                                            <option value='<?php echo $datasopir->id; ?>' <?php if ($datasopir->id == $reservasi['id_sopir']) echo 'selected'; ?>><?php echo $datasopir->nama_sopir; ?></option>

                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Kas Jalan</label>
                                    <select class="form-control" wire:model="costs">
                                        <option value="0">Rp. 0</option>
                                        <option value="419000">Rp. 419,000</option>
                                        <option value="444000">Rp. 444,000</option>
                                        <option value="468000">Rp. 468,000</option>
                                        <option value="553000">Rp. 553,000</option>
                                    </select>
                                </div>
                                <hr>
                                <button type="submit"  class="btn btn-primary btn-lg">Simpan</button>
                            </form>
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
                </div>
            </div>

            <script>
                function ubahSopirdanMobil(scheduleId) {
                    // Menampilkan modal dengan id #SopirdanMobil1 menggunakan jQuery
                    $('#SopirdanMobil1').modal('show');

                    // Mengirimkan data scheduleId ke fungsi atau proses yang sesuai
                    // Di sini Anda dapat melakukan apa pun dengan data scheduleId yang dikirimkan
                    // Misalnya, mengambil data detail jadwal menggunakan AJAX dan menampilkan di dalam modal
                }
            </script>

            <ul class="nav nav-pills my-4" id="midSide" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="seatLayout" data-toggle="tab" onclick="seatAndPackage(this)" href="#tab-seatLayout" role="tab" aria-controls="tab-scheduleSearch" aria-selected="true" title="Penumpang">
                        Penumpang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="packageLayout" data-toggle="tab" onclick="seatAndPackage(this)" href="#tab-packageLayout" role="tab" aria-controls="tab-scheduleSearch" aria-selected="true" title="Penumpang">
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
    </script>
















    <!-- ========== Paket Section ========== -->


</div>


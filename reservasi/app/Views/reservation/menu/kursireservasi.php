<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="" width="33.333333333333%">
                <div>
                    <?php if ($Nomorkursi[1]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>1</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?php echo $Nomorkursi[1]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[1]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[1]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>1</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[1]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
            <td class="" width="33.333333333333%">
                <h4></h4>
            </td>
            <td class="" width="33.333333333333%" style="vertical-align: middle; text-align: center">
                <img src="https://sys.goshuttle.co.id/images/icons/steer.svg" alt="driver" style="width: 3rem">
                <br>
                <strong>Wawan setiawan</strong>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <?php if ($Nomorkursi[2]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>2</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" data-target="#ResevationDetail" onclick="openModal(<?php echo $Nomorkursi[2]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[2]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[2]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>2</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[2]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
            <td></td>
            <td>
                <div>
                    <?php if ($Nomorkursi[3]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>3</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" data-target="#ResevationDetail" onclick="openModal(<?php echo $Nomorkursi[3]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[3]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[3]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>3</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[3]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <?php if ($Nomorkursi[4]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>4</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" onclick="openModal(<?php echo $Nomorkursi[4]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[4]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[4]['nama']; ?></span>
                                    </div>
                                </a>



                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>4</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[4]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
            <td></td>
            <td>
                <div>
                    <?php if ($Nomorkursi[5]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>5</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" onclick="openModal(<?php echo $Nomorkursi[5]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[5]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[5]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>5</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[5]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <?php if ($Nomorkursi[6]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>6</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" onclick="openModal(<?php echo $Nomorkursi[6]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[6]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[6]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>6</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[6]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>


            <td>
                <div>
                    <?php if ($Nomorkursi[7]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>7</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" onclick="openModal(<?php echo $Nomorkursi[7]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[7]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[7]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>7</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[7]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
            <td>
                <div>
                    <?php if ($Nomorkursi[8]['nomor_telepon'] != null) : ?>
                        <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                            <div class=" seat-card ">

                                <div class="d-flex">
                                    <div>
                                        <h4>8</h4>
                                    </div>
                                    <div>
                                        <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                    </div>
                                    <div class="flex-fill text-right">



                                    </div>
                                </div>

                                <a href="#ResevationDetail" data-toggle="modal" onclick="openModal(<?php echo $Nomorkursi[8]['id_kursi']; ?>)">
                                    <div class="text-center  bg-primary text-white  rounded">
                                        <small class="clearfix"><?= $Nomorkursi[8]['nomor_telepon']; ?></small>
                                        <span class="clearfix "><?= $Nomorkursi[8]['nama']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="border p-2 rounded ">
                            <div class="empty-seat-card">
                                <div class="d-flex justify-content-between">
                                    <h4>8</h4>

                                </div>


                                <button class="btn btn-sm btn-primary" id="pickSeats_<?= $Nomorkursi[8]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </td>
        </tr>


    </tbody>
</table>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Konten modal -->
            <form id="formReservasi" action="<?= route_to('simpanReservasi') ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="nomorTelepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomorTelepon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <input type="hidden" name="kursi_reservasi" id="kursiReservasiInput">




                </div>

                <!-- Tombol close modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal Reservation Detail-->
<div class="modal fade" id="ReservationDetail" tabindex="-1" role="dialog" aria-labelledby="ReservationDetail1Label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ResevationDetailLabel">Reservasi #53281</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="reservatin-info-tab" data-toggle="tab" href="#reservatin-info" role="tab" aria-controls="reservatin-info" aria-selected="true">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reservation-log-tab" data-toggle="tab" href="#reservation-log" role="tab" aria-controls="reservation-log" aria-selected="false">Log</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-2" id="reservatin-info" role="tabpanel" aria-labelledby="reservatin-info-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Data Pemesan</h5>
                                <p>
                                    <small>Kode</small><br>
                                    <strong id="kode1"></strong>
                                </p>
                                <p>
                                    <small>Nomor Telepon</small><br>
                                    <strong id="nomorTelepon1"></strong>
                                </p>
                                <p>
                                    <small>Nama Pemesan</small><br>
                                    <strong id="Pemesan"></strong>
                                </p>

                                <p>
                                    <small>Note</small><br>
                                    <strong id="Note"></strong>
                                </p>
                            </div>
                            <div class="col-md-8" id="data_tiket">
                                <h5>Data Tiket</h5>
                                <div id="canvas">

                                    <ul class="list-group" id="tickets">
                                        <li class="list-group-item d-flex align-items-center">
                                            <div class="mr-2">
                                                <small class="clearfix">Seat 4</small>
                                                <img class="rounded mr-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                                            </div>
                                            <div class="flex-fill">
                                                <small>Selasa, 04 Jul 2023 08:00</small><br>
                                                <small>BANDUNG CIHAMPELAS</small> -
                                                <small>JAKARTA JATIWARINGIN</small><br>
                                                <span>ARIEF</span> /
                                                <span>081297753369</span>
                                            </div>
                                            <div class="text-right">
                                                <strong>Rp. 105,000</strong>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <div class="flex-fill">
                                                <span>Total</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>Rp. 105,000</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="reservation-log" role="tabpanel" aria-labelledby="reservation-log-tab">
                        <strong class="m-4">Logs</strong>
                        <ul class="list-group">
                            <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                                new reservation by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
                            </li>
                            <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                                payment by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
                            </li>
                            <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                                Whatasapp by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
                            </li>
                            <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                                customer checkin 4 by <span class="text-primary">Mohammad Azhar Pratama</span> <span class="float-right">22 jam yang lalu</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary mr-2">
                                Cetak Tiket
                            </button>

                            <button type="button" class="btn btn-danger mr-2" onclick="confirm('Yakin batalkan pembayaran?') || event.stopImmediatePropagation()" wire:click="cancelPayment">
                                Batalkan Pembayaran
                            </button>
                            <button type="button" data-toggle="modal" data-target="#Reschedule" data-backdrop="static" class="btn btn-warning mr-2" onclick="openRescheduleModal()">Reschedule</button>
                        </div>

                    </div>
                </div>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button> -->
            </div>
        </div>
    </div>
</div>


<!-- Modal Reschedule -->
<div class="modal fade" id="rescheduleModal" tabindex="-1" role="dialog" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ResevationDetailLabel">Reschedule #53281</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <label>Asal</label>


                        <select class="form-control form-control-sm" wire:model="departurePointId">
                            <option value="">Berangkat dari</option>
                            <optgroup label="BANDUNG">
                                <option value="1"> CIHAMPELAS</option>
                            </optgroup>
                            <optgroup label="JAKARTA">
                                <option value="3"> BEKASI</option>
                                <option value="4"> CIBUBUR</option>
                                <option value="5"> DEPOK</option>
                                <option value="2"> JATIWARINGIN</option>
                            </optgroup>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>


                        <select class="form-control form-control-sm" wire:model="arrivalPointId">
                            <option value="">Berangkat dari</option>
                            <optgroup label="BANDUNG">
                                <option value="1"> CIHAMPELAS</option>
                            </optgroup>
                            <optgroup label="JAKARTA">
                                <option value="3"> BEKASI</option>
                                <option value="4"> CIBUBUR</option>
                                <option value="5"> DEPOK</option>
                                <option value="2"> JATIWARINGIN</option>
                            </optgroup>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" min="2023-07-05" wire:model="date" wire:change="findNewDeparture">
                    </div>
                    <div class="form-group">
                        <label>Nomor Kursi</label>


                        <select class="form-control form-control-sm" wire:model="arrivalPointId">
                            <option value="">Berangkat dari</option>
                            <optgroup label="BANDUNG">
                                <option value="1"> CIHAMPELAS</option>
                            </optgroup>
                            <optgroup label="JAKARTA">
                                <option value="3"> BEKASI</option>
                                <option value="4"> CIBUBUR</option>
                                <option value="5"> DEPOK</option>
                                <option value="2"> JATIWARINGIN</option>
                            </optgroup>
                        </select>

                    </div>




                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {



        // Event saat formulir dikirim (submit)
        $("#formReservasi").submit(function(e) {
            e.preventDefault();

            // Mendapatkan data dari formulir
            var kursiReservasi = $("#kursiReservasiInput").val();

            var nomorTelepon = $("#nomorTelepon").val();
            var nama = $("#nama").val();

            // Mengirim data ke server menggunakan AJAX
            $.ajax({
                url: $(this).attr("action"),
                method: "POST",
                data: {
                    kursi_reservasi: kursiReservasi,
                    nomor_telepon: nomorTelepon,
                    nama: nama
                },
                success: function(response) {
                    // Menghandle respons dari server, misalnya menampilkan pesan sukses    
                    $.ajax({
                        url: "<?php echo base_url('reservation/getReservasi/') . $idReservasi; ?>", // URL ke controller untuk memuat HTML
                        type: "GET",
                        success: function(response) {
                            $('#kursi_pelanggan').html(response); // Mengisi div dengan HTML yang diterima dari controller
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
                        }
                    });
                },
                error: function() {
                    // Menghandle error, misalnya menampilkan pesan error
                    alert("Terjadi kesalahan saat menyimpan data");
                }
            });

            // Menutup modal
            $("#myModal").modal("hide");
        });

    });
</script>
<script>
    function openRescheduleModal(id) {
        $('#exampleModal').modal('hide'); // Menutup modal pertama
        $('#rescheduleModal').modal('show'); // Menampilkan modal reschedule


    }

    function openModal(id) {
        $('#reservasiId').val(id); // Mengisi value field dengan ID yang ditangkap
        $('#ReservationDetail').modal('show'); // Menampilkan modal

        $.ajax({
            url: 'kursipenumpang/' + id, // Ganti dengan URL yang sesuai
            method: 'GET', // Ganti dengan metode HTTP yang sesuai
            success: function(response) {
                // Callback fungsi ini akan dijalankan saat permintaan Ajax berhasil
                // Ambil data yang diterima dari server
                // Menguraikan respons JSON menjadi objek JavaScript
                var data = JSON.parse(response);
                alert(JSON.stringify(data.note));

                // Mengambil nilai dari objek data
                var kode = data.kode;
                var nomorTelepon1 = data.nomor_telepon;
                var nama = data.nama;
                var note = data.note;


                // Menampilkan nilai dalam elemen HTML menggunakan jQuery
                $('#kode1').text(kode);
                $('#nomorTelepon1').text(nomorTelepon1);
                $('#Pemesan').text(nama);
                $('#Note').text(note);
            },
            error: function() {
                // Callback fungsi ini akan dijalankan jika terjadi kesalahan saat permintaan Ajax
                console.log('Error: Gagal mengambil data dari server');
            }
        });
    }
</script>
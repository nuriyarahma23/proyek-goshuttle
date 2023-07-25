<div>
    <form id="cekjadwal">
        <div class="form-group">
            <label>Asal</label>


            <select class="form-control form-control-sm" id="departurePointId" name="asal">
                <option value="">Berangkat dari</option>
                <?php
                foreach ($grup_kota as $grup) :
                ?>
                    <optgroup label="<?php echo $grup ?>">
                        <?php foreach ($kota[$grup] as $ktd) : ?>
                            <option value="<?php echo $ktd['id_kota'] ?>"><?php echo $ktd['nama_kota'] ?></option>
                        <?php endforeach; ?>
                    </optgroup>

                <?php endforeach;



                ?>
            </select>

        </div>
        <div class="form-group">
            <label>Tujuan</label>


            <select class="form-control form-control-sm" id="arrivalPointId" name="tujuan">
                <option value="">Berangkat dari</option>
                <?php
                foreach ($grup_kota as $grup) :
                ?>
                    <optgroup label="<?php echo $grup ?>">
                        <?php foreach ($kota[$grup] as $ktd) : ?>
                            <option value="<?php echo $ktd['id_kota'] ?>"><?php echo $ktd['nama_kota'] ?></option>
                        <?php endforeach; ?>
                    </optgroup>

                <?php endforeach;



                ?>
            </select>

        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input class="form-control" type="date" min="2023-07-05" name="tanggal_keberangkatan" class="form-control" id="tanggal_keberangkatan" placeholder="Tanggal Keberangkatan">
        </div>
        <input type="hidden" name="id_kursi" value="<?php echo $id_kursi; ?>">
        <button type="submit" class="btn btn-primary">Cari Jadwal</button>


        <!-- <div class="form-group" id="">
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

    </div> -->




    </form>

    <form id="ubahjadwal" action="/kursipenumpang/reschedule/simpan" method="POST">
        <input type="hidden" name="id_kursi_sebelumnya" value="<?php echo $id_kursi; ?>">

        <div id="isiJadwal">
        </div>

    </form>
</div>

<script>
    $(document).ready(function() {
        // Menangkap submit form
        $('#cekjadwal').submit(function(event) {
            event.preventDefault(); // Mencegah refresh halaman

            // Mengambil data form
            var formData = $(this).serialize();

            // Mengirim data form menggunakan AJAX
            $.ajax({
                url: "kursipenumpang/jadwaltersedia/<?= $id_kursi; ?>",
                type: "GET",
                data: formData,
                success: function(response) {

                    $('#isiJadwal').html(response); // Mengisi div dengan HTML yang diterima dari controller
                },
                error: function(xhr, status, error) {
                    // Proses error
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
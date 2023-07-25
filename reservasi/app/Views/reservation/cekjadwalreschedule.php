<div class="form-group">
    <label>List Jadwal</label>
    <select class="form-control form-control-sm" id="arrivalPointId" name="jadwal">
        <option value="">============ PILIH JADWAL =================</option>
        <?php
        foreach ($reservasi as $datares) :
        ?>
            <optgroup label="<?php echo $datares['asal_kota'] . '-' . $datares['tujuan_kota'] . ' / ' . $datares['waktu'];?>">
                <?php foreach ($datares['kursitersedia'] as $datakursi ) : ?>
                    <option value="<?php echo $datakursi['id_kursi'];?>">Nomor Kursi : <?php echo $datakursi['nomor_kursi'] ?></option>
                <?php endforeach; ?>
            </optgroup>

        <?php endforeach;



        ?>
    </select>
</div>

<button type="submit" class="btn btn-primary">Ubah Jadwal Jadwal</button>
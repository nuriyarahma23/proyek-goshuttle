<div class="form-group pt-3">
  <label>List Jadwal</label>
  <select class="form-control form-control-sm" id="arrivalPointId" name="jadwal">
    <option value="">============ PILIH JADWAL =================</option>
    <?php foreach ($reservasi as $datares) : ?>
      <optgroup label="<?php echo $datares['point_keberangkatan'] . '-' . $datares['tujuan'] . ' / ' . $datares['tanggal_reservasi'] . ' ' . $datares['jam']; ?>">
        <?php foreach ($datares['kursitersedia'] as $datakursi) : ?>
          <option value="<?php echo $datakursi['id_kursi']; ?>">Nomor Kursi : <?php echo $datakursi['nomor_kursi'] ?></option>
        <?php endforeach; ?>
      </optgroup>
    <?php endforeach; ?>
  </select>
</div>

<button type="submit" id="btn92ubahjadwal" class="btn btn-primary">Ubah Jadwal</button>

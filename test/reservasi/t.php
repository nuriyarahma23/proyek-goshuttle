<form action="<?= base_url('update-jadwal') ?>" method="post" enctype="multipart/form-data">
  <div class="modal-body">
    <input type="hidden" name="id" id="id" value="<?= $row->id_jadwal ?>">
    <div class="form-group">
      <label>Dari Tanggal</label>
      <input class="form-control" type="date" id="edit_dari_tgl" name="dari_tgl" value="<?= $row->dari_tgl ?>" required>
    </div>
    <div class="form-group">
      <label>Sampai Tanggal</label>
      <input class="form-control" type="date" id="edit_sampai_tgl" name="sampai_tgl" value="<?= $row->sampai_tgl ?>" required>
    </div>

    <div class="form-group">
      <label>Tujuan</label>
      <select class="form-control form-control-sm" name="tujuan" required>
        <option value="">Pilih Tujuan</option>
        <?php foreach ($grup_kota as $grup) : ?>
          <optgroup label="<?php echo $grup ?>">
            <?php foreach ($kota[$grup] as $ktd) : ?>
              <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
            <?php endforeach; ?>
          </optgroup>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label>Jumlah Kursi</label>
      <input class="form-control" type="number" id="edit_jml_kursi" name="jml_kursi" value="<?= $row->jml_kursi ?>" required>
    </div>
    <div class="form-group">
      <label>Harga Tiket</label>
      <input class="form-control" type="number" id="edit_harga_tiket" name="harga_tiket" value="<?= $row->harga_tiket ?>" required>
    </div>

    <div class="form-group">
      <label>Point Keberangkatan</label>
      <select class="form-control form-control-sm" name="point_keberangkatan" required>
        <option value="">Pilih Keberangkatan</option>
        <?php foreach ($grup_kota as $grup) : ?>
          <optgroup label="<?php echo $grup ?>">
            <?php foreach ($kota[$grup] as $ktd) : ?>
              <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
            <?php endforeach; ?>
          </optgroup>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label>Jam Keberangkatan</label>
      <input class="form-control" type="time" id="edit_jam" name="jam" value="<?= $row->jam ?>" required>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
      <span class="d-none d-sm-block">Close</span>
    </button>
    <button type="submit" class="btn btn-primary">
      <span class="d-none d-sm-block">Submit</span>
    </button>
  </div>
</form>
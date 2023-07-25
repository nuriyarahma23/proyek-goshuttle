<!-- app/Views/pelanggan/index.php -->
<?= $this->extend('templates/template') ?>

<!-- Main content -->
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-dark mb-2">Buat Jadwal</h2>
                <p class="card-text">
                    Buka jadwal baru untuk periode tertentu
                </p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url("jadwal/tambah") ?>"
                            enctype="multipart/form-data">
                            <h5 class="card-title">Tentukan tanggal</h5>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="">Dari tanggal</label>
                                        <input class="form-control" id="tanggal_awal" type="date" name="tanggal_awal">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="">Sampai tanggal</label>
                                        <input class="form-control" id="tanggal_akhir" type="date" name="tanggal_akhir">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tentukan kursi</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="">Jumlah kursi</label>
                                    <input class="form-control" id="jumlah_kursi" type="number" min="1"
                                        name="jumlah_kursi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tentukan keberangkatan</h5>
                        <br>
                        <div class="alert alert-info">
                            <p>
                                <strong>AM</strong> 00:00 sd 11:59 <br>
                                <strong>PM</strong> 12:00 sd 23:59
                            </p>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
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
                                                <optgroup label="BANDUNG">
                                                    <option value="1">CIHAMPELAS</option>
                                                </optgroup>
                                                <optgroup label="JAKARTA">
                                                    <option value="3">BEKASI</option>
                                                    <option value="4">CIBUBUR</option>
                                                    <option value="5">DEPOK</option>
                                                    <option value="2">JATIWARINGIN</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="tujuan" name="tujuan[]">
                                                <option value="">Tujuan</option>
                                                <optgroup label="BANDUNG">
                                                    <option value="1">CIHAMPELAS</option>
                                                </optgroup>
                                                <optgroup label="JAKARTA">
                                                    <option value="3">BEKASI</option>
                                                    <option value="4">CIBUBUR</option>
                                                    <option value="5">DEPOK</option>
                                                    <option value="2">JATIWARINGIN</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="time" class="form-control" name="jam[]" id="jam">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="harga[]" id="harga">
                                        </td>
                                    </tr>
                                    <hr>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="asal[]" id="asal">
                                                <option value="">Asal</option>
                                                <optgroup label="BANDUNG">
                                                    <option value="1">CIHAMPELAS</option>
                                                </optgroup>
                                                <optgroup label="JAKARTA">
                                                    <option value="3">BEKASI</option>
                                                    <option value="4">CIBUBUR</option>
                                                    <option value="5">DEPOK</option>
                                                    <option value="2">JATIWARINGIN</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="tujuan[]" id="tujuan">
                                                <option value="">Tujuan</option>
                                                <optgroup label="BANDUNG">
                                                    <option value="1">CIHAMPELAS</option>
                                                </optgroup>
                                                <optgroup label="JAKARTA">
                                                    <option value="3">BEKASI</option>
                                                    <option value="4">CIBUBUR</option>
                                                    <option value="5">DEPOK</option>
                                                    <option value="2">JATIWARINGIN</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="time" class="form-control" name="jam[]" id="jam">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="harga[]" id="harga">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    



</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<script src="script.js" defer></script>

<?= $this->endSection() ?>
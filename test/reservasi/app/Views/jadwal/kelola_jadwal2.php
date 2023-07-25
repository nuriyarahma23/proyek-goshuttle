<!-- app/Views/pelanggan/index.php -->
<?= $this->extend('templates/template') ?>

<!-- Main content -->
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-dark mb-2 ">Kelola Jadwal</h2>
                <p class="card-text">Pilih jadwal yang akan dikelola</p>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <h5 class="card-title">Pilih jadwal</h5>
                                    <br>
                                    <div class="form-group mb-3">
                                        <label for="">Tanggal</label>
                                        <input class="form-control" id="tanggal" type="date" name="tanggal">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Asal - Tujuan</label>
                                        <select class="form-control" id="asal" name="asal">
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
                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="form-control" id="tujuan" name="tujuan">
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
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-block btn-primary">Cari</button>
                                    </div>
                            
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">ASAL | TUJUAN | TANGGAL</h5>
                            </div>
                            <div class="card-body">
                                <label for="">Jam Keberangkatan (Format 24 jam)</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <input class="form-control" id="" type="text" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <input class="form-control" id="" type="text" name="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Harga Tiket</label>
                                    <input class="form-control" id="harga" type="text" name="harga">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Status Jadwal</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="">Available</option>
                                        <option value="">Not Available</option>
                                    </select>
                                    <p>*Departed and Arrived tidak dapat dipilih dari menu ini</p>
                                </div>

                                <div class="form-group ">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<script src="script.js" defer></script>

<?= $this->endSection('content') ?>
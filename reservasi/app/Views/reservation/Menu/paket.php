<div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <div wire:id="kWaPwrYJEWRNSh5RVJzO">
                <ul class="list-group">
                    <?php foreach ($paket as $datapaket) {
                    ?>

                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="p-2">
                                    <img src="icon/box.svg" alt="box" width="64px">
                                </div>
                                <div class="p-2 flex-fill">
                                    <span class="text-info clearfix"><?= $datapaket->asal_kota; ?></span>
                                    <small> Pengirim</small> <br>
                                    <span><?= $datapaket->nomor_pengirim; ?></span> / <span><?= $datapaket->pengirim; ?></span>
                                    <br>

                                    <small> Penerima</small> <br>
                                    <span><?= $datapaket->nomor_penerima; ?></span> / <span><?= $datapaket->penerima; ?></span>
                                </div>
                                <div class="p-2 flex-fill">
                                    <small> Berat/Jumlah</small> <br>
                                    <span><?= $datapaket->berat; ?> KG</span> / <span><?= $datapaket->jumlah_koli; ?> Koli</span>
                                    <br>

                                    <small> Jenis/Isi</small> <br>
                                    <span><?= $datapaket->jenis; ?></span> <br> <span><?= $datapaket->isi; ?></span>
                                </div>
                                <div class="p-2 text-right">
                                    <strong><?= "Rp. " . number_format($datapaket->harga, 0, ',', '.'); // Format angka ke format "Rp. 45,000";
                                            ?></strong>
                                    <br>
                                    <button class="btn btn-outline-dark btn-sm" onclick="window.open('https://sys.goshuttle.co.id/print/package/1163', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                                </div>
                            </div>

                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div wire:id="9LV8tNveZwXhP9zSS2lT">
                <div class="card">
                    <div class="card-body">
                        <h4>Paket Baru</h4>
                        <form onsubmit="return confirm('Konfirmasi Pembayaran Paket?');" action="/paket/store" method="POST">
                            <input type="hidden" name="id_reservasi" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label>Pengirim</label>
                                <input type="text" name="sender_name" placeholder="nama pengeirim" class="form-control form-control-sm mb-2" required="">
                                <input type="text" name="sender_phone" placeholder="nomor pengeirim" class="form-control form-control-sm mb-2" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>

                            <div class="form-group">
                                <label>Penerima</label>
                                <input type="text" name="receiver_name" placeholder="nama penerima" class="form-control form-control-sm mb-2" required="">
                                <input type="text" name="receiver_phone" placeholder="nomor penerima" class="form-control form-control-sm mb-2" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <input type="number" name="weight" class="form-control form-control-sm mb-2" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Koli</label>
                                        <input type="number" name="piece" class="form-control form-control-sm mb-2" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jenis</label>
                                <input type="text" id="package-type" list="package-types" name="type" class="form-control form-control-sm mb-2" required="">
                                <datalist id="package-types"></datalist>
                            </div>

                            <div class="form-group">
                                <label>Isi</label>
                                <input type="text" name="content" class="form-control form-control-sm mb-2" required="">
                            </div>

                            <div class="alert alert-info p-2 text-center">
                                <span>Total</span>
                                <h4 id="hargaBayar1">Rp.0</h4>
                                <input type="hidden" name="harga" id="hargaInput" value="0">
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Bayar</button>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Tangkap perubahan pada input berat dan jumlah koli
                                    $('input[name="weight"], input[name="piece"]').on('input', function() {
                                        var berat = parseFloat($('input[name="weight"]').val()); // Ambil nilai berat dari input
                                        var koli = parseInt($('input[name="piece"]').val()); // Ambil nilai jumlah koli dari input

                                        // Hitung harga berdasarkan nilai berat dan jumlah koli
                                        // Atur berat sebagai 0 jika tidak ada angka yang dimasukkan
                                        if (isNaN(berat)) {
                                            berat = 0;
                                        }
                                        // Atur koli sebagai 0 jika tidak ada angka yang dimasukkan
                                        if (isNaN(koli)) {
                                            berat = 0;
                                        }
                                        var inputBerat = isNaN(berat) ? 0 : berat;
                                        var inputKoli = isNaN(koli) ? 0 : koli;

                                        var harga = inputBerat * 2000 + inputKoli * 2000;

                                        // Format harga ke format "Rp. xxx,xxx"
                                        var formatHarga = "Rp. " + harga.toLocaleString();

                                        // Tampilkan harga dalam elemen dengan ID "hargaBayar1"
                                        $('#hargaBayar1').text(formatHarga);
                                        $('#hargaInput').val(harga);
                                    });
                                });
                            </script>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
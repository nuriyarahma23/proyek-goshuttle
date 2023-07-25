<div style="display: flex; flex-direction: row;">
    <form action="<?php echo base_url('pembayaran/melakukanpembayaran/' . $id); ?>" class="d-flex" id="melakukanpembayaran">

        <div class="form-group" style="margin-right:20px;">
            <label for="metodePembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metodePembayaran" name="metodePembayaran">

                <option value="bayarTempat">Bayar di Tempat</option>
                <option value="qris">QRIS</option>
                <option value="bankbca">Transfer BCA</option>

            </select>


        </div>
        <div class="form-group mt-auto mb-auto" style="margin-right:20px;">
            <button type="button" class="btn btn-primary">
                <span class="d-none d-sm-block" id="tmblbayar">Bayar</span>
            </button>
        </div>


    </form>
    <script>
        var bayar = document.getElementById('tmblbayar');
        var form = document.getElementById('melakukanpembayaran');

        bayar.addEventListener('click', function(event) {
            var dataForm = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 400) {
                    // Tanggapan dari server berhasil diterima
                    var response = xhr.responseText;
                    $('#ReservationDetail').modal('hide'); // Menampilkan modal

                    sessionStorage.setItem('statusperubahanreservasi', true);

                    console.log('Berhasil melakukan pembayaran:', response);
                } else {
                    // Terjadi kesalahan saat memproses permintaan
                    console.error('Terjadi kesalahan saat melakukan pembayaran.');
                }
            };
            xhr.onerror = function() {
                // Terjadi kesalahan saat mengirim permintaan
                console.error('Terjadi kesalahan saat mengirim permintaan.');
            };
            xhr.send(dataForm);
        });
    </script>
    <!-- <form action="<?php echo base_url('reservasi/batalkan/' . $id); ?>" class="d-flex" method="POST">

        <div class="mt-auto mb-auto ">
            <button type="submit" class="btn btn-danger"   onclick="confirm('Yakin batalkan pembayaran?')">
                <span class="d-none d-sm-block">Batalkan Reservasi</span>
            </button>
        </div>
    </form> -->
</div>
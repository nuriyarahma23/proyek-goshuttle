<button class="btn btn-primary" onclick="window.open('<?= base_url('pdfslipreservasi/' . $id) ?>', '', 'width=500,height=500')">
    <span class="d-none d-sm-block">Cetak Tiket</span>
</button>
<?php if (session('role') == 'Staff1' || session('role') == 'Staff2') : ?>
    <button type="button" class="btn btn-danger mr-2" onclick="batalkanPembayaran()" wire:click="cancelPayment">
        Batalkan Pembayaran
    </button>

    <script>
        function batalkanPembayaran() {
            // Menggunakan jQuery untuk membuat permintaan Ajax
            var isconfirmed = confirm('Yakin batalkan pembayaran?');
            if (isconfirmed) {
                $.ajax({
                    url: '<?= base_url('pembayaran/batalkan/'); ?>', // Ganti dengan URL yang benar ke pembatalan pembayaran
                    type: 'POST', // Ubah ke metode HTTP yang benar jika diperlukan
                    data: {
                        id: <?= $id; ?>
                    },
                    success: function(response) {
                        // Tambahkan kode yang harus dijalankan jika permintaan berhasil
                        console.log(response);
                        $('#ReservationDetail').modal('hide'); // Menampilkan modal
                        sessionStorage.setItem('statusperubahanreservasi', true);

                        // Lakukan tindakan lain setelah pembatalan berhasil, jika diperlukan.
                    },
                    error: function(error) {
                        // Tambahkan kode yang harus dijalankan jika permintaan gagal
                        console.error('Gagal melakukan pembatalan pembayaran.');
                        // Lakukan tindakan lain jika pembatalan gagal, jika diperlukan.
                    }
                });
            }

        }
    </script>

<?php endif; ?>
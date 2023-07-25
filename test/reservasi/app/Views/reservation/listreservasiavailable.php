<style>
  .list-group#listReservasi {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    max-height: 109px;
    /* Tentukan tinggi maksimum daftar */
    overflow-y: auto;
    /* Tambahkan scroll vertikal jika terlalu banyak item */
  }
</style>

<ul class="list-group" id="listReservasi">
  <?php foreach ($reservasi as $datareservasi) : ?>
    <li class="list-group-item" onclick="toggleSelection(this, <?php echo $datareservasi['id_reservasi']; ?>)">
      <div class="d-flex align-items-center" style="cursor:pointer;">
        <div class="flex-fill">
          <span><?php echo $datareservasi['point_keberangkatan'] . '-' . $datareservasi['tujuan']; ?></span>
          <?php
          $waktu = $datareservasi['jam'];
          $jamMenit = date('H:i', strtotime($waktu));
          echo $jamMenit; // Output: 09:00
          ?><br>
          <small>
            <?php
            $harga = $datareservasi['harga_tiket'];
            $hargaFormat = 'Rp. ' . number_format($harga, 0, ',', '.');
            echo $hargaFormat; // Output: Rp. 125.000
            ?>
          </small>
        </div>
        <div>
          <div>
            <span class="badge bg-success badge-pill badge-round ms-1" title="Kursi tersedia"><?= $datareservasi['total_tersedia']; ?></span>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

<script>
  var selectedElement = null;

  function toggleSelection(element, idReservation) {
    if (selectedElement !== null) {
      $(selectedElement).removeClass('bg-primary text-white');
    }

    if (selectedElement !== element) {
      $(element).addClass('bg-primary text-white');
      selectedElement = element;
      $.ajax({
        url: "<?php echo base_url('reservation/getReservasi/'); ?>" + idReservation, // URL ke controller untuk memuat HTML
        type: "GET",
        success: function(response) {
          $('#kursi_pelanggan').html(response); // Mengisi div dengan HTML yang diterima dari controller
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
        }
      });

    } else {
      selectedElement = null;
    }
  }

  $(document).ready(function() {
    $('.d-flex.align-items-center').click(function() {
      var idReservation = $(this).data('id-reservation');
      toggleSelection(this, idReservation);
    });
  });
</script>
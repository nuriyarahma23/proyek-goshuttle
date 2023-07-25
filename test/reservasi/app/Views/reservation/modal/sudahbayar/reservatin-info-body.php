<div class="row">
    <div class="col-md-4">
        <h5>Data Pemesan</h5>
        <p>
            <small>Kode</small><br>
            <strong id="kode1"><?php echo $kursipenumpang['kode']; ?></strong>
        </p>
        <p>
            <small>Nomor Telepon</small><br>
            <strong id="nomorTelepon1"><?php echo $kursipenumpang['nomor_telepon']; ?></strong>
        </p>
        <p>
            <small>Nama Pemesan</small><br>
            <strong id="Pemesan"><?php echo $kursipenumpang['nama']; ?></strong>
        </p>
        <p>
            <small>Note</small><br>
            <strong id="Note"><?php echo $kursipenumpang['note']; ?></strong>
        </p>
    </div>

    <div class="col-md-8" id="data_tiket">
        <h5>Data Tiket</h5>
        <div id="canvas">
            <ul class="list-group" id="tickets">
                <li class="list-group-item d-flex align-items-center">
                    <div class="mr-2">
                        <small class="clearfix">Seat <?= $kursipenumpang['nomor_kursi']; ?></small>
                        <img class="rounded mr-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div class="flex-fill">
                        <small><?php 
                          $date = new DateTime($reservasi['tanggal_reservasi'] . ' ' . $reservasi['jam']);
                        echo  $date->format('D, d M Y H:i');
                        
                        ?></small><br>
                        <small><?php echo $kota['kota_asal'][0]['grup_kota'] . " " . $kota['kota_asal'][0]['nama_kota'];?></small> -
                        <small><?php echo $kota['kota_tujuan'][0]['grup_kota'] . " " . $kota['kota_asal'][0]['nama_kota'];?></small><br>
                        <span><?php echo $kursipenumpang['nama']; ?></span> /
                        <span><?php echo $kursipenumpang['nomor_telepon']; ?></span>
                    </div>
                    <div class="text-right">
                        
                        <strong><?php echo "Rp." . number_format($pembayaran['harga'],0,',','.') ;?></strong>
                    </div>
                </li>
                <li class="list-group-item d-flex align-items-center">
                    <div class="flex-fill">
                        <span>Total</span>
                    </div>
                    <div class="text-right">
                        <h5><?php echo "Rp." . number_format($pembayaran['harga'],0,',','.') ;?></h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
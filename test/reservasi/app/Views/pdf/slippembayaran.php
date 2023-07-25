<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Pembayaran</title>
    <style>
        * {
            font-family: Arial, sans-serif;
        }
        .wrapper {


            text-align: center;
        }

        .wrapper .imagelogo {
            margin: auto auto;
        }

        .border-top-bottom {
            border-top: 3px solid black;
            border-bottom: 3px solid black;
            padding: 30px 0;
        }


        /* style.css */
        .detailtiket {
            
            padding: 20px;
            /* border: 1px solid #ccc; */
            width: 300px;
        }

        .detailtiket p,
        .detailtiket h2 {
            margin: 0;
            padding: 5px 0;
            text-align: left;
        }

        .detailtiket h2 {
            font-size: 18px;
            font-weight: bold;
        }
        .seat {
            float: right;
            font-size: 32px;
            font-weight: bold;
        }
        h1 {
            font-size: 18px;
        }

        .harga-detail {
            width: 100%;
            padding: auto 40px;
        }

        .clearfix {
            content: "";
            display: table;
            clear: both;
        }

        .footer {
            text-align: left;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="wrapper" style="width: 100%; page-break-before: always" >
        <img src="<?= $logo ?>" class="imagelogo" alt="Logo">

        <p>#luxuryShuttleService</p>
        <p class="border-top-bottom">
            TKT06293
        </p>

        <p></p>
        <div class="detailtiket">
            <p class="left-align">Tanggal / Jam Keberangkatan</p>
            <h2 class="left-align bold"><?php echo date('l, d F Y', strtotime($tiketData['tanggal_reservasi']));?> / <?php echo date('H:i', strtotime($tiketData['jam']));?></h2>
            <p class="left-align">Keberangkatan</p>
            <h2 class="left-align bold"><?php echo strtoupper($kodekota[$tiketData['point_keberangkatan']]['grup_kota']) . ' - ' . strtoupper($kodekota[$tiketData['point_keberangkatan']]['nama_kota']);?></h2>
            <p class="left-align">Tujuan</p>
            <h2 class="left-align bold"><?php echo strtoupper($kodekota[$tiketData['tujuan']]['grup_kota']) . ' - ' . strtoupper($kodekota[$tiketData['tujuan']]['nama_kota']);?></h2>
            <p class="left-align">Penumpang</p>
            <h2 class="left-align bold"><?php echo strtoupper($kursiReservasiData['nama']);?> / <?php echo strtoupper('****' . substr($kursiReservasiData['nomor_telepon'], 4)); ?></h2>
        </div>

        <div class="seat">

            <?php echo "Seat " .  $kursiReservasiData['nomor_kursi'];?>
        </div>

        <div class="harga-detail clearfix" style="border-top: 3px solid black; border-bottom: 3px solid black;">
            <div class="tipe" style="float: left;">
                <h1><?=$kursiReservasiData['id_diskon'] ? $diskon[$kursiReservasiData['id_diskon']]['kode_diskon'] : 'UMUM';?></h1>
            </div>
            <div class="harga" style="float: right;">
                <h1><?php echo 'Rp. ' . number_format($pembayaranData['harga'], 0, ',', '.');?> </h1>
            </div>
        </div>
        <div class="footer">
            <p>
                Kritik, saran dan pemesanan hubungi :
            <h1>0811 2088 988</h1>

            <!-- 2023-07-12:37:06 dicetak oleh Dimas Adjie Pramudya -->
            <?= date('Y-m-d H:m:i') . ' dicetak oleh '. session('nama'); ?>
            </p>
        </div>


    </div>
</body>

</html>
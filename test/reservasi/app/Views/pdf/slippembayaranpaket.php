<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
    <style>
        html * {
            font-family: "Karla", sans-serif;
        }
    </style>
    <title>Cetak Resi Paket</title>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 1px;
        }
    </style>
</head>

<body onload="window.print()">
    <div style="width: 100%; page-break-before: always">
        <div style="text-align: center; margin-top: 5px">
            <img src="https://sys.goshuttle.co.id/images/icons/go_kurir_logo1.png" alt="logo" width="120">
        </div>
        <br>
        <div style="border: 1px black solid; padding: 5px; text-align: center">
            <h4><?php echo  strtoupper($kodekota[$tiketData['point_keberangkatan']]['grup_kota']) . ' → ' . strtoupper($kodekota[$tiketData['point_keberangkatan']]['nama_kota']); ?></h4>
            <small>PKT001163 (Unfinished)</small>
        </div>
        <div>
            <small>Tanggal / Jam Kbrgktn</small><br>
            <strong><?php echo date('l, d F Y', strtotime($tiketData['tanggal_reservasi']));?> / <?php echo date('H:i', strtotime($tiketData['jam']));?></strong>
        </div>
        <div>
            <small>Pengirim</small><br>
            <strong><?php echo $paketData['pengirim']; ?></strong> / <strong><?php echo $paketData['nomor_pengirim'];?></strong>
        </div>
        <div>
            <small>Penerima</small><br>
            <strong><?php echo $paketData['penerima']; ?></strong> / <strong><?php echo $paketData['nomor_penerima']; ?></strong>
        </div>
        <div>
            <small> Berat/Jumlah</small> <br>
            <strong><?php echo $paketData['berat']; ?> KG</strong> / <strong><?php echo $paketData['jumlah_koli']; ?> Koli</strong>
        </div>
        <div>
            <small> Jenis/Isi</small> <br>
            <strong><?php echo $paketData['jenis']; ?></strong> / <br>  <strong><?php echo $paketData['isi']; ?></strong>
        </div>
        <hr>
        <div style="text-align: right">
            <h4><?php echo 'Rp. ' . number_format($paketData['harga'], 0, ',', '.');?></h4>
        </div>
        <hr>
        <div style="margin-bottom: 1em">
            <p>Kritik, saran dan pemesanan hubungi:</p>
            <p><strong>0811 2088 988</strong></p>
            <small>2023-07-18 16:14:26 dicetak oleh Jhon Erastus</small>
        </div>



    </div>
</body>

</html>
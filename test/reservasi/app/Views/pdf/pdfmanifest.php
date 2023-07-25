<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Manifest</title>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 1px;
        }

        body {
            font-family: "Tahoma", sans-serif
        }
    </style>
</head>

<body onload="window.print()">
    <div style="width: 300px; page-break-before: always">
        <div style="text-align: center; margin-top: 5px">
            <img src="<?= $logo; ?>" alt="logo" width="200px"><br>
            <small>#luxuryShuttleService</small>
        </div>
        <br>
        <h2>Manifest</h2>
        <table style="font-size: small">
            <tbody>
                <tr>
                    <td>No</td>
                    <td>: CHM-JTR-230720-0900-38164 (Belum Selesai)</td>
                </tr>
                <tr>
                    <td>Rute</td>
                    <td>: <?= $tiketData['point_keberangkatan'] . ' - ' . $tiketData['tujuan']; ?> </td>
                </tr>
                <tr>
                    <td>Tgl/Jam</td>
                    <td>: <?= date('l, d M Y / H:m', strtotime($tiketData['tanggal_reservasi'] . ' ' . $tiketData['jam'])); ?></td>
                </tr>
                <tr>
                    <td>Sopir</td>
                    <td>: <?= $sopirData['nama_sopir']; ?></td>
                </tr>
                <tr>
                    <td>Mobil</td>
                    <td>: <?= $mobilData['identitas'] . ' / ' . $mobilData['nopol']; ?></td>
                </tr>
                <tr>
                    <td>BOP</td>
                    <td>: 468,000 (Belum Selesai)</td>
                </tr>
                <tr>
                    <td>Pt. Kbrgktn</td>
                    <td>: <?= $kodekota[$tiketData['point_keberangkatan']]['nama_kota']; ?> </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <strong><small>PENUMPANG</small></strong>
        <table width="100%" style="font-size: small">
            <tbody>
                <tr style="font-weight: bold">
                    <td>Krs</td>
                    <td>Pnp</td>
                    <td>Tiket</td>
                    <td>Bayar</td>
                    <td>Harga</td>
                </tr>
                <?php foreach ($kursiReservasiData as $krsiReservasiDt) : ?>

                    <tr>
                        <td><?= $krsiReservasiDt['nomor_kursi']; ?></td>
                        <td><?= $krsiReservasiDt['nama'] ?></td>
                        <td><?= $krsiReservasiDt['id_diskon'] ?  $diskon[$krsiReservasiDt['id_diskon']]['kode_diskon'] : 'UMUM'; ?></td>
                        <td><?= $krsiReservasiDt['metode_pembayaran'] ?></td>
                        <td align="right"><?= $krsiReservasiDt['harga']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        Resume
       
        <table width="100%" style="font-size: small">
            <tbody>
                <tr>
                    <td>Give Away</td>
                    <td>: 1</td>
                </tr>
                <tr>
                    <td>Umum</td>
                    <td>: 4</td>
                </tr>
            </tbody>
        </table>
        <br>
        (Bawah Belum Selesai)
        <table width="100%" style="font-size: small">
            <tbody>
                <tr>
                    <td>CASH PAYMENT</td>
                    <td align="right"> <strong>0</strong></td>
                </tr>
                <tr>
                    <td>BANK TRANSFER</td>
                    <td align="right"> <strong>420,000</strong></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <strong><small>PAKET</small></strong>
        <table width="100%" style="font-size: small">
            <tbody>
                <tr style="font-weight: bold">
                    <td>Pnrma</td>
                    <td>Paket</td>
                    <td>KG/Koli</td>
                    <td>Bayar</td>
                    <td>Jumlah</td>
                </tr>

                <tr>
                    <td></td>
                    <td>Kosong</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="right">
                        <strong>
                            0
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>

        Resume
        <table width="100%" style="font-size: small">
            <tbody>
                <tr>
                    <td>Kosong</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <hr>
        <br>

        <table width="100%" style="font-size: small">
            <tbody>
                <tr>
                    <td align="center">
                        CSO<br><br><br>
                        Jhon Erastus
                    </td>

                    <td align="center">
                        Sopir <br><br><br>
                        Iyan suryana
                    </td>
                </tr>
            </tbody>
        </table>



    </div>


</body>

</html>
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 05.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_reservasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jadwal`
--

CREATE TABLE `detail_jadwal` (
  `id_detail_jadwal` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `harga_tiket` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(20) NOT NULL,
  `kode_diskon` varchar(50) NOT NULL,
  `nama_diskon` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `besaran` varchar(20) NOT NULL,
  `aktif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `kode_diskon`, `nama_diskon`, `type`, `besaran`, `aktif`) VALUES
(1, 'JB40', 'Promo Juli', 'Percentage', '20', 'Aktif'),
(4, 'JB41', 'Promo Agustus', 'Amount', '10000', 'Aktif'),
(9, '12', '22', 'Percentage', '12', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `dari_tgl` date NOT NULL,
  `sampai_tgl` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jml_kursi` int(11) NOT NULL,
  `harga_tiket` decimal(10,2) NOT NULL,
  `point_keberangkatan` varchar(255) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `dari_tgl`, `sampai_tgl`, `tujuan`, `jml_kursi`, `harga_tiket`, `point_keberangkatan`, `jam`) VALUES
(3, '2023-06-07', '2023-09-07', 'BEKASI', 5, '120000.00', 'JATIWARINGIN', '07:08:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(5) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `grup_kota` varchar(255) NOT NULL,
  `kode_kota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `grup_kota`, `kode_kota`) VALUES
(1, 'CIHAMPELAS', 'BANDUNG', 'CHM'),
(2, 'BEKASI', 'JAKARTA', 'BKS'),
(3, 'CIBUBUR', 'JAKARTA', 'CBB'),
(4, 'DEPOK', 'JAKARTA', 'DPK'),
(5, 'JATIWARINGIN', 'JAKARTA', 'JTR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi_penumpang`
--

CREATE TABLE `kursi_penumpang` (
  `id_kursi` int(5) UNSIGNED NOT NULL,
  `id_reservasi` int(10) UNSIGNED NOT NULL,
  `nomor_kursi` varchar(10) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `note` text DEFAULT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kursi_penumpang`
--

INSERT INTO `kursi_penumpang` (`id_kursi`, `id_reservasi`, `nomor_kursi`, `nomor_telepon`, `nama`, `note`, `kode`) VALUES
(1, 1, '1', '0813483', 'dfgdr', NULL, ''),
(2, 1, '2', '', '', NULL, ''),
(3, 1, '3', '', '', NULL, ''),
(4, 1, '4', '', '', NULL, ''),
(5, 1, '5', '', '', NULL, ''),
(6, 1, '6', '', '', NULL, ''),
(7, 1, '7', '', '', NULL, ''),
(8, 1, '8', '', '', NULL, ''),
(9, 2, '1', '', '', NULL, ''),
(10, 2, '2', '', '', NULL, ''),
(11, 2, '3', '', '', NULL, ''),
(12, 2, '4', '', '', NULL, ''),
(13, 2, '5', '', '', NULL, ''),
(14, 2, '6', '', '', NULL, ''),
(15, 2, '7', '', '', NULL, ''),
(16, 2, '8', '', '', NULL, ''),
(17, 3, '1', '', '', NULL, ''),
(18, 3, '2', '', '', NULL, ''),
(19, 3, '3', '4535353', 'jil', NULL, ''),
(20, 3, '4', '', '', NULL, ''),
(21, 3, '5', '', '', NULL, ''),
(22, 3, '6', '', '', NULL, ''),
(23, 3, '7', '', '', NULL, ''),
(24, 3, '8', '', '', NULL, ''),
(25, 4, '1', '02374837', 'tanzil', NULL, ''),
(26, 4, '2', '', '', NULL, ''),
(27, 4, '3', '', '', NULL, ''),
(28, 4, '4', '', '', NULL, ''),
(29, 4, '5', '', '', NULL, ''),
(30, 4, '6', '', '', NULL, ''),
(31, 4, '7', '', '', NULL, ''),
(32, 4, '8', '', '', NULL, ''),
(33, 5, '1', '', '', NULL, ''),
(34, 5, '2', '', '', NULL, ''),
(35, 5, '3', '', '', NULL, ''),
(36, 5, '4', '', '', NULL, ''),
(37, 5, '5', '', '', NULL, ''),
(38, 5, '6', '', '', NULL, ''),
(39, 5, '7', '', '', NULL, ''),
(40, 5, '8', '', '', NULL, ''),
(41, 6, '1', '', '', NULL, ''),
(42, 6, '2', '', '', NULL, ''),
(43, 6, '3', '', '', NULL, ''),
(44, 6, '4', '', '', NULL, ''),
(45, 6, '5', '', '', NULL, ''),
(46, 6, '6', '', '', NULL, ''),
(47, 6, '7', '', '', NULL, ''),
(48, 6, '8', '', '', NULL, ''),
(49, 7, '1', '', '', NULL, ''),
(50, 7, '2', '', '', NULL, ''),
(51, 7, '3', '', '', NULL, ''),
(52, 7, '4', '08976654321', 'Raffa Akbar', NULL, ''),
(53, 7, '5', '018293', 'har', NULL, ''),
(54, 7, '6', '', '', NULL, ''),
(55, 7, '7', '', '', NULL, ''),
(56, 7, '8', '', '', NULL, ''),
(57, 8, '1', '2394277', 'tanzil', NULL, ''),
(58, 8, '2', '', '', NULL, ''),
(59, 8, '3', '', '', NULL, ''),
(60, 8, '4', '', '', NULL, ''),
(61, 8, '5', '', '', NULL, ''),
(62, 8, '6', '', '', NULL, ''),
(63, 8, '7', '', '', NULL, ''),
(64, 8, '8', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(8, '2023-07-04-021112', 'App\\Database\\Migrations\\Sopir', 'default', 'App', 1688818894, 1),
(9, '2023-07-04-031113', 'App\\Database\\Migrations\\Mobil', 'default', 'App', 1688818894, 1),
(10, '2023-07-04-041114', 'App\\Database\\Migrations\\Reservasi', 'default', 'App', 1688818894, 1),
(11, '2023-07-04-041632', 'App\\Database\\Migrations\\Kursipenumpang', 'default', 'App', 1688818894, 1),
(12, '2023-07-04-042708', 'App\\Database\\Migrations\\User', 'default', 'App', 1688818894, 1),
(13, '2023-07-04-122605', 'App\\Database\\Migrations\\Kota', 'default', 'App', 1688818894, 1),
(14, '2023-07-05-170028', 'App\\Database\\Migrations\\Paket', 'default', 'App', 1688818894, 1),
(15, '2023-07-08-011556', 'App\\Database\\Migrations\\CreatePelangganTable', 'default', 'App', 1688818894, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(5) UNSIGNED NOT NULL,
  `identitas` varchar(20) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `km_terakhir` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `identitas`, `nopol`, `km_terakhir`, `status`) VALUES
(1, 'GS-001', 'B 7235 NAA', '', ''),
(2, 'GS-002', 'B 7798 KDA', '', ''),
(3, 'GS-003', 'B 7141 TDB', '', ''),
(4, 'GS-004', 'DK 7450 FA', '', ''),
(5, 'GS-005', 'N 7375 A', '', ''),
(6, 'GS-006', 'F 7954 WA', '', ''),
(7, 'GS-007', 'N 7804 US', '', ''),
(8, 'GS-008', 'B 7084 TDB', '', ''),
(9, 'GS-101', 'AE 7301 BB', '', ''),
(10, 'GS-105', 'DK 7376 FA', '100', 'Aktif'),
(11, 'GS-102', 'B 7401 TDA', '', ''),
(12, 'GS-103', 'DK 7513 FA', '', ''),
(13, 'GS-104', 'B 7644 FDA', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_reservasi` int(10) UNSIGNED NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `nomor_pengirim` varchar(20) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `nomor_penerima` varchar(20) NOT NULL,
  `berat` int(5) NOT NULL,
  `jumlah_koli` int(5) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `isi` text DEFAULT NULL,
  `harga_tiket` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `id_reservasi`, `pengirim`, `nomor_pengirim`, `penerima`, `nomor_penerima`, `berat`, `jumlah_koli`, `jenis`, `isi`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(1, 8, 'can', '18289', 'tanzil', '138712', 2, 1, 'afas', 'sfdf', '6000', '2023-07-09 12:41:44', '2023-07-09 12:41:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) UNSIGNED NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jml_reservasi` int(5) NOT NULL DEFAULT 0,
  `jml_reservasi_lunas` int(5) NOT NULL DEFAULT 0,
  `status` enum('Aktif','NonAktif') NOT NULL DEFAULT 'NonAktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `no_telepon`, `nama`, `alamat`, `jml_reservasi`, `jml_reservasi_lunas`, `status`) VALUES
(2, '08977654321', 'Raffa Akbar', 'Karangjati', 1, 1, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(5) UNSIGNED NOT NULL,
  `point_keberangkatan` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `harga_tiket` decimal(10,2) NOT NULL,
  `tanggal_reservasi` date NOT NULL,
  `id_sopir` int(10) UNSIGNED NOT NULL,
  `id_mobil` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `point_keberangkatan`, `tujuan`, `waktu`, `harga_tiket`, `tanggal_reservasi`, `id_sopir`, `id_mobil`) VALUES
(1, 'CHM', 'CBB', '2023-07-01 09:00:00', '150000.00', '2023-07-01', 1, 1),
(2, 'CHM', 'CBB', '2023-07-02 10:00:00', '200000.00', '2023-07-02', 1, 1),
(3, 'CHM', 'CBB', '2023-07-04 09:00:00', '150000.00', '2023-07-04', 1, 1),
(4, 'CHM', 'CBB', '2023-07-04 10:00:00', '150000.00', '2023-07-04', 1, 1),
(5, 'CHM', 'CBB', '2023-07-04 11:00:00', '150000.00', '2023-07-04', 1, 1),
(6, 'CHM', 'CBB', '2023-07-10 12:00:00', '150000.00', '2023-07-10', 1, 1),
(7, 'CHM', 'CBB', '2023-07-11 13:00:00', '150000.00', '2023-07-11', 1, 1),
(8, 'CHM', 'CBB', '2023-07-12 14:00:00', '150000.00', '2023-07-12', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir`
--

CREATE TABLE `sopir` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_sopir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sopir`
--

INSERT INTO `sopir` (`id`, `nama_sopir`) VALUES
(1, 'A. Djunaedi'),
(2, 'Achmad Solihin'),
(3, 'Agus Rahmat'),
(4, 'Ahmad Saefullah'),
(5, 'Alif Firmansyah'),
(6, 'Anto Purwanto'),
(7, 'Anwar Sadat'),
(8, 'Cecep Iwan'),
(9, 'Doni Sehabudin'),
(10, 'Hanterli'),
(11, 'Iyan Suryana'),
(12, 'Riki'),
(13, 'Solahudin'),
(14, 'Taufik Hidayat'),
(15, 'Wawan Kurniawan'),
(16, 'Wawan Setiawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'john@example.com', '$2y$10$92tCpfUGJPq/mpOU7ytHte/BWijet7bFBts9jQLHl.PnH5Y8pXfiq', 'John Doe'),
(2, 'jane@example.com', '$2y$10$YxwpPdDYAoTIJGj23eDx9.hOHCyAhxB/TxSeH4c2RJCLW2knSEDvG', 'Jane Smith');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD PRIMARY KEY (`id_detail_jadwal`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `kursi_penumpang`
--
ALTER TABLE `kursi_penumpang`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `kursi_penumpang_id_reservasi_foreign` (`id_reservasi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_id_reservasi_foreign` (`id_reservasi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `reservasi_id_sopir_foreign` (`id_sopir`),
  ADD KEY `reservasi_id_mobil_foreign` (`id_mobil`);

--
-- Indeks untuk tabel `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kursi_penumpang`
--
ALTER TABLE `kursi_penumpang`
  MODIFY `id_kursi` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sopir`
--
ALTER TABLE `sopir`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kursi_penumpang`
--
ALTER TABLE `kursi_penumpang`
  ADD CONSTRAINT `kursi_penumpang_id_reservasi_foreign` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_id_reservasi_foreign` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_id_mobil_foreign` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_id_sopir_foreign` FOREIGN KEY (`id_sopir`) REFERENCES `sopir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

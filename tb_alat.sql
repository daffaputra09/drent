-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 08.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_drent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(50) DEFAULT NULL,
  `harga_alat` int(10) DEFAULT NULL,
  `stok_alat` int(10) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `gambar_alat1` varchar(255) NOT NULL,
  `gambar_alat2` text NOT NULL,
  `ket1` varchar(30) DEFAULT NULL,
  `ket2` varchar(30) DEFAULT NULL,
  `ket3` varchar(30) DEFAULT NULL,
  `ket4` varchar(30) DEFAULT NULL,
  `ket5` varchar(30) DEFAULT NULL,
  `ket6` varchar(30) DEFAULT NULL,
  `ket7` varchar(30) DEFAULT NULL,
  `spek1` varchar(50) DEFAULT NULL,
  `spek2` varchar(50) DEFAULT NULL,
  `spek3` varchar(50) DEFAULT NULL,
  `spek4` varchar(50) DEFAULT NULL,
  `spek5` varchar(50) DEFAULT NULL,
  `spek6` varchar(50) DEFAULT NULL,
  `spek7` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `nama_alat`, `harga_alat`, `stok_alat`, `kategori`, `gambar_alat1`, `gambar_alat2`, `ket1`, `ket2`, `ket3`, `ket4`, `ket5`, `ket6`, `ket7`, `spek1`, `spek2`, `spek3`, `spek4`, `spek5`, `spek6`, `spek7`) VALUES
(29, 'Sony Alpha A6000', 110000, 10, 'Kamera', 'A6000.png', '', 'Sensor', 'Max ISO', 'LCD', 'Shutter Speed', 'Video', 'Autofokus', 'Berat', 'CMOS 24 MP', '25600', '3 inch, 921.000 titik', '30’’ sampai 1/4000  detik', 'Full HD 1080p', '179 phase detect', '285 Gram'),
(36, 'Sony Alpha A6300', 140000, 10, 'Kamera', 'A6300.png', '', 'Sensor type', 'Format Sensor', 'Max Iso', 'Resolusi Video', 'Berat', '', '', 'CMOS', 'APS-C ', '51200', '4K', '361 gram', '', ''),
(37, 'Sony Alpha A6400', 150000, 10, 'Kamera', 'A6400.png', '', 'Megapixels', 'Max Iso', 'Tipe Sensor', 'Format Sensor', 'Resolusi Video', 'Kelajuan Shutter', 'Berat', '24MP', '32000', 'CMOS', 'APS-C', '4K', '1/4000 - 30 sec', '403 Gram'),
(38, 'Sony Alpha A6500', 160000, 10, 'Kamera', 'A6500.png', '', 'Megapixels', 'Max ISO', 'Tipe Sensor', 'Format Sensor', 'Resolusi Video', 'Kelajuan Shutter', 'Berat', '24.2MP', '51200', 'CMOS', 'APS-C', '4K', '1/4000 - 30 sec', '453 Gram'),
(39, 'Sony Alpha A7ii', 240000, 10, 'Kamera', 'A72.png', '', 'Megapixels', 'Max ISO', 'Tipe Sensor', 'Format Sensor', 'Resolusi Video', 'Kelajuan Shutter', 'Berat', '24.3MP', '25600', 'CMOS', 'APS-C', '4K', 'Kelajuan Shutter', '556 Gram'),
(40, 'Sony Alpha A7iii', 290000, 10, 'Kamera', 'A73.png', '', 'Megapixels', 'Max ISO', 'Tipe Sensor', 'Format Sensor', 'Resolusi Video', 'Berat', '', '24.2MP', '51200', 'CMOS', 'APS-C', '4K', '650 Gram', ''),
(41, 'Sony Alpha A7Siii', 480000, 10, 'Kamera', 'A7S3.png', '', 'Megapixels', 'Max ISO', 'Tipe Sensor', 'Resolusi Video', 'Viewfinder', 'Berat', '', '12.1MP', '102400', 'CMOS', 'Full HD', 'Elektronik', '614 Gram', ''),
(42, 'Fujifilm X-M1', 80000, 10, 'Kamera', 'X-M1.png', '', 'Resolusi ', 'Max ISO', 'Jenis Sensor', 'LCD Monitor', 'Berat ', '', '', '16,3MP', '25600', 'CMOS', '3.0 inch', '330 Gram', '', ''),
(43, 'Fujifilm X-A2', 80000, 10, 'Kamera', 'X A2.png', '', 'Megapixels', 'Max ISO', 'Tipe Sensor', 'Format Sensor', 'Resolusi Video', 'Kelajuan Shutter', 'Berat', '16.3MP', '25600', 'CMOS', 'APS-C', 'Full HD', '1/4000', '350 Gram'),
(45, 'Fujifilm X-A3', 100000, 1, 'Kamera', 'X A3.png', '', 'x', 'x', 'x', 'x', 'x', 'x', 'd', 'x', 'x', 'x', 'x', 'x', 'x', 'x'),
(46, 'Fujifilm X-A5', 110000, 10, 'Kamera', 'X A5.png', '', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 'ss', 's', 's'),
(47, 'Fujifilm X-T30', 110000, 10, 'Kamera', 'X T30.png', '', 's', 's', 's', 's', 's', 's', 'ss', 's', 's', 's', 's', 's', 's', 's'),
(48, 'Canon EOS M10', 80000, 10, 'Kamera', 'm3.png', '', 's', 'ss', 's', 's', 'ss', 's', 's', 's', 's', 's', 's', 's', 's', ''),
(49, 'Canon EOS M3', 100000, 10, 'Kamera', 'm10.png', '', 's', 's', 's', 's', 's', 's', 's', 's', 's', 'd', 's', 's', 's', 's'),
(50, 'Canon 1300D', 90000, 10, 'Kamera', '1300D.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', ''),
(51, 'Canon 700D', 110000, 10, 'Kamera', '700D.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w'),
(52, 'Canon 60D', 120000, 10, 'Kamera', '60D.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w'),
(53, 'Canon 6D', 280000, 10, 'Kamera', '6D.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', ''),
(54, 'Canon 5Diii', 325000, 10, 'Kamera', '5Diii.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w'),
(55, 'Sony HXR NX100P', 400000, 5, 'Kamera', 'NX100.png', '', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'ww');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

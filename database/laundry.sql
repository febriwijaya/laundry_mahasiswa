-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 02.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(11) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `telepon`, `jenkel`, `username`, `password`) VALUES
(2, 'febri wijaya hutagalung', 'Medan', 2147483647, 'laki-laki', 'febri1', '$2y$10$RRgxTeVcIKikUaR7kKRJb..60x4Da.MINSIeIE97WwmG4w0jZt20G'),
(3, 'Oscar', 'Medan', 2147483647, 'laki-laki', 'oscar', '$2y$10$NIiKk6kxxqhZvPN2D18vhudAy42qtfdDtw0w8yM96U9OgLQYV2TBG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cucian`
--

CREATE TABLE `cucian` (
  `id` int(11) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `pengerjaan` varchar(50) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `kemeja` int(11) NOT NULL,
  `kaos` int(11) NOT NULL,
  `celana_panjang` int(11) NOT NULL,
  `celana_pendek` int(11) NOT NULL,
  `celana_panjang_jeans` int(11) NOT NULL,
  `rok` int(11) NOT NULL,
  `blezer` int(11) NOT NULL,
  `jaket_sweater` int(11) NOT NULL,
  `daster` int(11) NOT NULL,
  `singlet` int(11) NOT NULL,
  `handuk` int(11) NOT NULL,
  `sarung` int(11) NOT NULL,
  `mukena` int(11) NOT NULL,
  `sajadah` int(11) NOT NULL,
  `jilbab` int(11) NOT NULL,
  `sapu_tangan` int(11) NOT NULL,
  `kain_pantai` int(11) NOT NULL,
  `kaos_kaki` int(11) NOT NULL,
  `baju_coass` int(11) NOT NULL,
  `bed_cover` int(11) NOT NULL,
  `sprei` int(11) NOT NULL,
  `sarung_bantal` int(11) NOT NULL,
  `gorden` int(11) NOT NULL,
  `kebaya` int(11) NOT NULL,
  `jas` int(11) NOT NULL,
  `boneka` int(11) NOT NULL,
  `gaun` int(11) NOT NULL,
  `selimut` int(11) NOT NULL,
  `teng_top` int(11) NOT NULL,
  `cd` int(11) NOT NULL,
  `karpet` int(11) NOT NULL,
  `pewangi` int(11) NOT NULL,
  `total_kilogram` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `total_pcs` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` int(13) NOT NULL,
  `komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id`, `nama`, `email`, `nohp`, `komentar`) VALUES
(1, 'terserah lah kamu', 'sukaku@gmail.com', 2147483647, 'terserah lah ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jenkel`, `alamat`, `telepon`, `gambar`) VALUES
(1, 'khasdhas', 'perempuan', 'ahjsdgjasd', 89798677, '5e1ae2d22e64d.png'),
(2, 'u8isydiusidf', 'perempuan', 'hjjgsjdhjfhsd', 8726374, '5e1ae2ec488fa.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pel` int(11) NOT NULL,
  `kode_pel` varchar(50) NOT NULL,
  `nama_pel` varchar(100) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `kode_pel`, `nama_pel`, `kode_jenis`, `alamat`, `telepon`) VALUES
(0, '123abc', 'terserah', '123bca', 'medan', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `nama`, `jenkel`, `alamat`, `email`, `hp`, `gambar`, `komentar`) VALUES
(1, 'formen', 'silahkan pilih', 'medan', 'terserah@gmail.com', 2147483647, '', 'kwkkwkkwkooo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cucian`
--
ALTER TABLE `cucian`
  ADD PRIMARY KEY (`id`,`kode_jenis`);

--
-- Indeks untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pel`,`kode_pel`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

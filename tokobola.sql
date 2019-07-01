-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jan 2018 pada 16.43
-- Versi server: 10.1.25-MariaDB-1
-- Versi PHP: 7.1.8-1ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `images` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama_kategori`, `images`) VALUES
(1, 'Bola', 'image/bola.png'),
(2, 'Deker', 'image/deker.png'),
(3, 'Jersey', 'image/jersey.png'),
(4, 'Sepatu', 'image/sepatu.png'),
(5, 'Kaoskaki', 'image/kaoskaki.png'),
(6, 'Sarungtangan', 'image/sarungtangan.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(10) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_lengkap`, `email`, `gender`, `alamat`, `username`, `password`, `password2`) VALUES
(24, 'Syuhada Dwi Agung Keren', 'syuhadadwiagung@gmail.com', 'L', 'Bekasi', 'agungtrue', '804b7634c3e71d3e014cccbebd2e7455', '804b7634c3e71d3e014cccbebd2e7455'),
(29, 'Eden Hazard', 'edenhazard@gmail.com', 'L', 'London', 'hazardeden10', '804b7634c3e71d3e014cccbebd2e7455', '804b7634c3e71d3e014cccbebd2e7455');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `spesifikasi_produk` text NOT NULL,
  `images` varchar(400) NOT NULL,
  `no_hp_penjual` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga_produk`, `id_kategori_produk`, `id_member`, `spesifikasi_produk`, `images`, `no_hp_penjual`) VALUES
(1, 'UCL Ball Final 2016', '250000', 1, 29, 'Dijual Cepat', 'image/bola/bola11.jpg', '087769675686'),
(2, 'Molten Viper Shoot', '149000', 1, 24, 'Dijual Lambat Hubungin Nomer Di bawah ini', 'image/bola/bola.jpg', '081285751448'),
(3, 'Adidas UCL FInal 2015', '250000', 1, 24, 'Dijual Cepat Hubungin Nomer Dibawah Ini', 'image/bola/bola12.jpg', '08967514531'),
(4, 'Nike La Liga 2016', '200000', 1, 24, 'Dijual Sekarang Hubungin Nomer Dibawah Ini', 'image/bola/bola9.jpg', '0856987625'),
(5, 'Specs Animal Yellow', '120000', 1, 24, 'Dijual Lambat Hubungin Nomer Dibawah Ini', 'image/bola/bola7.jpg', '08957643719'),
(6, 'Mitre Yellow Flash', '125000', 1, 24, 'Dijual Besok Senin Harga Naik', 'image/bola/bola8.jpg', '08345786541'),
(7, 'Adidas WC Russia 2018', '250000', 1, 24, 'Dijual Kemaren Lusa Barang Habis', 'image/bola/ball2018.png', '08978690005'),
(8, 'Adidas UCL Final 2017', '250000', 1, 24, 'Dijual Sekarang Hubungin Nomer Dibawah', 'image/bola/bola13.jpg', '087900765544'),
(9, 'Nike Atom Deker ', '100000', 2, 24, 'Dijual Lambat Hubungin Nomer Dibawah Ini', 'image/deker/deker4.jpg', '0812856490097'),
(10, 'Nike Barcelona Deker', '120000', 2, 24, 'Dijual Cepat Hubungin Nomer Dibawah Ini', 'image/deker/deker13.jpeg', '087698766666'),
(11, 'Deker Custom Sport', '100000', 2, 24, 'Dijual Lambat Hubungin Nomer Dibawah Ini', 'image/deker/deker15.jpg', '081456777768'),
(12, 'Nike Deker Custom', '100000', 2, 24, 'lo nawar gua jual', 'image/deker/deker14.jpg', '081351993687'),
(13, 'Maicca Deker Custom', '85000', 2, 24, 'lo jual gua beli', 'image/deker/deker7.jpg', '087654321234'),
(14, 'Primere Original Deker', '100000', 2, 24, 'Di jual murah', 'image/deker/deker9.jpg', '081364404231'),
(15, 'Adidas Deker Chelsea FC', '130000', 2, 24, 'Dijual lagi', 'image/deker/deker17.jpg', '085343210517'),
(16, 'Mitre Deker Black', '100000', 2, 24, 'D beli sekarang', 'image/deker/deker16.jpg', '081364534218'),
(17, 'Chelsea Home 17/18', '100000', 3, 24, 'Di Jual dong', 'image/jersey/jersey.jpg', '081364987654'),
(18, 'Arsenal Home 17/18', '100000', 3, 24, 'Di Jual cepat', 'image/jersey/jersey1.jpg', '0813643211632'),
(19, 'Inter Milan Home 17/18', '100000', 3, 24, 'Di Jual Bos', 'image/jersey/jersey2.jpg', '0813644165431'),
(20, 'Real Madrid Home 17/18', '100000', 3, 24, 'Di jual cuy', 'image/jersey/jersey3.jpg', '0813642131421'),
(21, 'Liverpool Home 17/18', '100000', 3, 24, 'Di Jual ', 'image/jersey/jersey4.jpg', '0813644190800'),
(22, 'Indonesia Home 16/17', '100000', 3, 24, 'D jual murah', 'image/jersey/jersey5.jpg', '0813644135421'),
(23, 'Persib Home 17/18', '100000', 3, 24, 'di Jual lagi', 'image/jersey/persib.png', '085363214321'),
(24, 'Persija Home 17/18', '100000', 3, 24, 'Di Jual balik', 'image/jersey/persija.png', '081364674532'),
(38, 'Nike Speed Explore', '250000', 4, 24, 'Di jual', 'image/sepatu/sepatu10.jpeg', '081364413212'),
(39, 'Nike CR7 Exclusive', '500000', 4, 24, 'Dijual Cepat Hubungin Nomer Dibawah Ini', 'image/sepatu/sepatu3.jpg', '089766580098'),
(40, 'Specs Basic Custom', '100000', 4, 24, 'Engga Dijual Tapi Kalo Mau Beli Boleh', 'image/sepatu/sepatu2.jpg', '081234576690'),
(41, 'Puma Atom Rocket', '130000', 4, 24, 'Dijual Cepat Hubungin Nomer Dibawah Ini', 'image/sepatu/sepatu7.jpg', '087698880333'),
(42, 'EX Power Speed', '200000', 4, 24, 'Dijual Sekarang', 'image/sepatu/sepatu8.jpg', '0897666500009'),
(43, 'Adidas Yellow Flash', '300000', 4, 24, 'Dijual Cepat', 'image/sepatu/sepatu9.jpg', '085678990111'),
(62, 'Adidas ultimate Red', '250000', 4, 24, 'Dijual Cepat', 'image/sepatu/sepatu1.jpg', '0897776666666'),
(63, 'Puma Socks Black', '10000', 5, 24, 'Dijual Lambat', 'image/kaoskaki/kaoskaki0.jpg', '0812987760111'),
(64, 'Adidas Socks Red', '100000', 5, 24, 'Dijual Cepat Barang Oke', 'image/kaoskaki/kaoskaki1.jpg', '0895353225364'),
(65, 'Socks Custom FC Barcelona', '100000', 5, 24, 'Dijual Cepat', 'image/kaoskaki/kaoskaki8.jpg', '0813267723587'),
(66, 'Nike Socks Sky Blue', '130000', 5, 24, 'Dijual Cepat', 'image/kaoskaki/kaoskaki3.jpg', '0882346464727'),
(67, 'Socks Custom FC Barcelona 2', '100000', 5, 24, 'Dijual Cepat Barang Oke', 'image/kaoskaki/kaoskaki2.jpg', '0896264522726'),
(68, 'Adidas Socks Black', '100000', 5, 24, 'Duual Cepat', 'image/kaoskaki/kaoskaki5.jpg', '0811737856725'),
(69, 'Adidas Socks Custom', '150000', 5, 24, 'Dijual Cepat', 'image/kaoskaki/kaoskaki6.jpg', '0812243536565'),
(70, 'Socks Custom Napoli', '150000', 5, 24, 'Dijual Cepat', 'image/kaoskaki/kaoskaki10.jpg', '0823435645367'),
(71, 'Reusch Glove Basic', '150000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung1.jpg', '0813526226242'),
(72, 'Adidas Glove Yellow', '150000', 6, 24, 'Dijual Lambat', 'image/sarungtangan/sarung11.jpg', '085224872627'),
(73, 'Adidas Predator Red', '150000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung3.jpg', '089764543565'),
(74, 'Reusch Glove Yellow', '130000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung13.png', '083542625272'),
(75, 'Mitre Glove Master', '100000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung12.jpg', '083737373637'),
(76, 'Janus Glove Basic', '200000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung7.jpg', '085837378373'),
(77, 'Janus Glove  BAsic', '150000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarung9.jpg', '089367345636'),
(78, 'Nike Power Glove', '150000', 6, 24, 'Dijual Cepat', 'image/sarungtangan/sarungtangan-nike.jpeg', '087363523656'),
(87, 'Puma Rockstar Blue', '250000', 4, 0, 'Dijual Cepat', 'image/sepatu/sepatu5.jpg', '085778453768');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

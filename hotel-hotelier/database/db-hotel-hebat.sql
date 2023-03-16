-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 09:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-hotel-hebat`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(30) NOT NULL,
  `ket_fasilitas` text NOT NULL,
  `gambar_fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `ket_fasilitas`, `gambar_fasilitas`) VALUES
(3, 'Kolam Renang', 'Kolam renang outdoor yang akan menampilkan pemandangan pantai yang indah nan eksotis.', '640cd1a9cf674.jpg'),
(4, 'Restaurant', 'Nikmati hidangan mewah dengan Chef bersertifikat Internasional dengan menu-menu yang dapat membuat pengalaman menginap anda semakin berkesan.', '640b67bfbb5d5.jpg'),
(5, 'Convention Center', 'Acara anda akan terasa sangat mewah ketika menggunakan convention center kami, dengan ruangan yang luas dan nyaman bagi tamu undangan anda.', '640b67d80ddb0.jpg'),
(6, 'Kids Club', 'Area bermain untuk anak-anak yang aman dan luas, dengan berbagai permainan edukasi dan petugas yang menjaga anak-anak ketika bermain.', '640b67eb0cde9.jpg'),
(8, 'Kolam Renang Jumbo', 'Kolam renang outdoor yang akan menampilkan pemandangan pantai yang indah nan eksotis dengan ukuran besar', '640ca26a22c50.jpg'),
(9, 'View Pantai', 'Nikmati pemandangan pantai langsung saat membuka jendela.', '640ca2aa2e89e.jpg'),
(10, 'View Sunset', 'Nikmati pemandangan sunset matahari terbenam saat menginap di hotel kami', '640ca2e4a3f21.jpg'),
(11, 'Restaurant Bintang 5', 'Nikmati hidangan berstandar hotel bintang 5, dengan Chef bersertifikat Internasional dengan menu-menu yang dapat membuat pengalaman menginap anda semakin berkesan.', '640ca3196a08d.jpg'),
(12, 'Gedung Serbaguna', 'Acara anda akan terasa sangat megah ketika menggunakan gedung serbaguna kami, dengan ruangan yang luas dan nyaman untuk memaksimalkan acara anda.', '640ca3770b9ae.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `ket_kamar` text NOT NULL,
  `jumlah_kasur` int(2) NOT NULL,
  `harga_kamar` int(30) NOT NULL,
  `ukuran_kamar` varchar(2) NOT NULL,
  `gambar_kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `ket_kamar`, `jumlah_kasur`, `harga_kamar`, `ukuran_kamar`, `gambar_kamar`) VALUES
(3, 'Duluxe Room', 'Televisi LED, Sofa , View Pantai, Kulkas.', 1, 150000, '15', '640b6ec86065c.jpg'),
(4, 'Family Room', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang.', 3, 300000, '30', '640b6f71eebfe.jpg'),
(5, 'Exclusive Room', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja.', 1, 200000, '25', '640b6fb5eea7b.jpg'),
(6, 'Superior Room', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja, Dapur.', 1, 150000, '20', '640b6fdf10cb6.jpg'),
(8, 'Kamar Duluxe Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas 2x.', 2, 150000, '30', '640ca159d99a0.jpg'),
(9, 'Kamar Superior Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja, Dapur', 3, 250000, '30', '640ca17844529.jpg'),
(10, 'Kamar Keluarga Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang.', 6, 500000, '40', '640ca19a328ec.jpg'),
(11, 'Kamar Exclusive Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja', 2, 1000000, '40', '640ca1c63989a.jpg'),
(12, 'Kamar View Alam Terbuka', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang', 1, 300000, '20', '640ca2282694e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `judul` char(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `judul`, `pesan`) VALUES
(1, 'Rizky', 'rizky@gmail.com', 'Bagaimana cara memesan kamar?', 'Saya bingung bagaimana cara pesan kamar melalui website ini karena tampilannya statis');

-- --------------------------------------------------------

--
-- Table structure for table `langganan`
--

CREATE TABLE `langganan` (
  `id_langganan` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langganan`
--

INSERT INTO `langganan` (`id_langganan`, `email`) VALUES
(1, 'rizky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `check_in` varchar(15) NOT NULL,
  `check_out` varchar(15) NOT NULL,
  `jumlah_kamar` int(2) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `check_in`, `check_out`, `jumlah_kamar`, `nama_kamar`, `email`, `no_hp`, `catatan`) VALUES
(3, 'Rizky', '2023-03-11', '2023-03-12', 2, 'Family Room', 'rizky@gmail.com', '085173200421', 'Saya akan segera kesana'),
(4, 'Tes', '2202-02-02', '2222-02-22', 22, 'Duluxe Room', 'tes@gmail.com', '22', '22'),
(5, 'tes', '1111-11-11', '1111-11-11', 11, 'Family Room', 'tes@gmail', '11', '11'),
(6, 'tes', '1111-11-11', '1111-11-11', 11, 'Family Room', 'tes@gmail', '11', '11'),
(8, 'Rizky Fahrezi', '2023-03-11', '2023-03-12', 1, 'Exclusive Room', 'rizkyfahrezi@gmail.com', '085173200421', 'YES'),
(9, 'Rizky', '2023-02-22', '2222-02-22', 1, 'Superior Room', 'rizky@gmail.com', '1', '2121'),
(10, 'r', '111111-11-11', '111111-11-11', 1, 'Kamar Keluarga Jumbo', 'rizky@gmail.com', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `percakapan`
--

CREATE TABLE `percakapan` (
  `id_percakapan` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `percakapan`
--

INSERT INTO `percakapan` (`id_percakapan`, `nama_pengirim`, `level`, `jam`, `tanggal`, `pesan`) VALUES
(1, 'Admin Rizky', 'admin', '01:20 AM', '12 Mar', 'rizky'),
(2, 'Admin Rizky', 'admin', '01:20 AM', '12 Mar', 'rizky'),
(3, 'Admin Rizky', 'admin', '01:20 AM', '12 Mar', 'rizky'),
(4, 'Resepsionis Rizky', 'resepsionis', '01:25 AM', '12 Mar', 'P'),
(5, 'Resepsionis Rizky', 'resepsionis', '01:25 AM', '12 Mar', 'YEs'),
(6, 'Admin Rizky', 'admin', '01:26 AM', '12 Mar', 'ttt'),
(7, 'Admin Rizky', 'admin', '01:37 AM', '12 Mar', 'Kenapa ini woy'),
(8, 'Admin Rizky', 'admin', '01:38 AM', '12 Mar', 'loremipsumadadadadaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(9, 'Admin Rizky', 'admin', '01:41 AM', '12 Mar', 'y'),
(10, 'Admin Rizky', 'admin', '01:41 AM', '12 Mar', 'dadad'),
(11, 'Resepsionis Rizky', 'resepsionis', '01:43 AM', '12 Mar', 'dadad');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `level` enum('admin','resepsionis') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `level`, `username`, `password`) VALUES
(1, 'Admin Rizky', 'admin', 'adminrizky', '202cb962ac59075b964b07152d234b70'),
(2, 'Resepsionis Rizky', 'resepsionis', 'rsprizky', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id_langganan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `percakapan`
--
ALTER TABLE `percakapan`
  ADD PRIMARY KEY (`id_percakapan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id_langganan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `percakapan`
--
ALTER TABLE `percakapan`
  MODIFY `id_percakapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

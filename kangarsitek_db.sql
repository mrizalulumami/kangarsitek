-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 10:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kangarsitek_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsitek`
--

CREATE TABLE `tb_arsitek` (
  `id_arsitek` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `perusahaan` text NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `instagram` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_arsitek`
--

INSERT INTO `tb_arsitek` (`id_arsitek`, `nama`, `alamat`, `pekerjaan`, `perusahaan`, `no_wa`, `foto`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Raodatul Aini', 'Masbagik', 'Desainer 3D Building', 'CV. KangArchitect', '081917123321', 'assets/arsitek/img/rodah.jpg', '@raodatulaini', '2022-10-28 17:53:00', '2022-10-28 17:53:00'),
(4, 'Momon', 'Lendang Bedurik', 'Desainer 3D', 'CV. Ngarang', '0895383219997', 'assets/arsitek/img/profile1.jpg', '@marthanata_', '2022-10-29 16:47:19', '2022-10-29 16:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `judul` text NOT NULL,
  `jenis` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `id_arsitek` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `judul`, `jenis`, `gambar`, `deskripsi`, `id_arsitek`, `created_at`, `updated_at`) VALUES
(1, 'Paket VIP Rumah Mewah', 'filter-app', 'assets/paket/img/rmh_mwh_1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2022-10-28 16:37:27', '2022-10-28 18:32:22'),
(2, 'Paket VIP 2', 'filter-product', 'assets/paket/img/rmh2.jpg', 'test saja', 1, '2022-10-29 13:53:40', '2022-10-29 13:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider_gambar`
--

CREATE TABLE `tb_slider_gambar` (
  `id_slider` int(11) NOT NULL,
  `id_arsitek` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arsitek`
--
ALTER TABLE `tb_arsitek`
  ADD PRIMARY KEY (`id_arsitek`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_slider_gambar`
--
ALTER TABLE `tb_slider_gambar`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_arsitek`
--
ALTER TABLE `tb_arsitek`
  MODIFY `id_arsitek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_slider_gambar`
--
ALTER TABLE `tb_slider_gambar`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

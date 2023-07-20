-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 11:11 AM
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
-- Database: `20222_wp2_412021023`
--

-- --------------------------------------------------------

--
-- Table structure for table `addres`
--

CREATE TABLE `addres` (
  `admin_id` int(11) NOT NULL,
  `admin_telp` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_addres` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `link`, `foto`) VALUES
(10, 'Tampil Elegan Dengan Koleksi Gamis Nyentrik Dari Tuneeca', '', 'https://blog.tuneeca.com/fashion-news/tampil-elegan-dengan-koleksi-gamis-nyentrik-dari-tuneeca/', 'foto1688693361.png'),
(11, 'Sporty Feminine nan Stylish untuk Sehari-Hari dengan Tuneeca Daily', '', 'https://blog.tuneeca.com/fashion-news/sporty-feminine-nan-stylish-untuk-sehari-hari-dengan-tuneeca-daily/', 'foto1688693390.png'),
(12, 'Busana Simple Style Sporty Feminim by Tuneeca Daily', '', 'https://blog.tuneeca.com/fashion-knowledge/busana-simple-style-sporty-feminim-by-tuneeca-daily/', 'foto1688693413.png'),
(13, 'Busana Batik Bertajuk ‘Noble’, Rekomendasi Outfit Kerja Untuk Ladies', '', 'https://blog.tuneeca.com/fashion-news/busana-batik-bertajuk-noble-rekomendasi-outfit-kerja-untuk-ladies/', 'foto1688693598.png'),
(14, 'Belanja Busana Eksklusif Dengan Harga Hemat di Payday Sale', '', 'https://blog.tuneeca.com/fashion-news/belanja-busana-eksklusif-dengan-harga-hemat-di-payday-sale/', 'foto1688693895.png'),
(15, 'Sporty Feminine nan Stylish untuk Sehari-Hari dengan Tuneeca Daily', '', 'https://blog.tuneeca.com/fashion-news/sporty-feminine-nan-stylish-untuk-sehari-hari-dengan-tuneeca-daily/', 'foto1688693966.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `tanggal_buat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `email`, `kata_sandi`, `tanggal_buat`) VALUES
(10, 'itswhoopy', 'evelyn@gmail.com', '$2y$10$X3HZsTEPNS3IvC4NXWX2jeQl5aq1JszOU3X6c2cYln2lM81Yw682i', '2022-06-30 17:54:32'),
(11, 'ahulda', 'ahuldadutu@gmail.com', '$2y$10$M/J0qZm5LmqtiWq3S5bZ1OIWmeTSiwd/p72oHMJTE2PbJG3uVyafm', '2022-06-30 17:59:57'),
(12, 'Evelyn Dutu', 'dutu@gmail.com', '$2y$10$exjcfZOWcEssjU7kQD8/YuQmFCnoOEaQ5B368kL9YJlEoJ/ZzgwiC', '2022-07-02 09:33:19'),
(13, 'ahulda', 'ahulda.2018tin026@civitas.ukrida.ac.id', '$2y$10$48bNN7tac2vXtiGcoGC6BuRm4qSGsfKX5ge9CTsEWs5zBhrDh8AM2', '2022-07-04 10:27:03'),
(14, 'rahel', 'rahelkezia110775@gmail.com', '$2y$10$iw14/J39LFsiGrU66d99x.1GMfFXDIZXs5.BZvdbmjaWwendibC/6', '2023-07-04 14:06:53'),
(15, 'sasa', 'sasa@gmail.com', '$2y$10$VDqmvRCYPkJ3OQbz1OW9COleSlgWLtSJS.SvUX5a1uNXuJc6wpr/S', '2023-07-07 03:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_addres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_addres`) VALUES
(3, 'admin', 'admin', '25d55ad283aa400af464c76d713c07ad', '081240262339', 'admin@gmial.com', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(13, 'Dress Wanita'),
(14, 'Dress Anak - Anak'),
(15, 'Jas Pria');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Rahel kezia', 'yanajuly4@gmail.com', 'jhsbzjsbncbjsa', '2023-07-08 09:07:24'),
(2, 'felsi', 'Yosuareformasi3@gmail.com', 'rahel atasan\r\n', '2023-07-08 09:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `prodeuct_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_creates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `prodeuct_image`, `product_status`, `data_creates`) VALUES
(32, 14, 'princess belle', 440000, '<p>dress princess belle ini dress yang sangat cantik, yang di desain untuk anak-anak</p>\r\n\r\n<p>Size : S</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688557744.jpeg', 1, '2023-07-05 11:49:04'),
(33, 14, 'princess belle', 250000, '<p>dress ini memiliki banyak ukuran untuk sekitaran anak-anak, princess belle dress ini dress yang sangat cantik dan menawan</p>\r\n\r\n<p>Size : S/M</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688557904.jpg', 1, '2023-07-05 11:51:44'),
(34, 14, 'twinkle stars ', 530000, '<p>twinkle stars dress ini adalah dress untuk ukuran anak-anak yang memiliki banyak ukuran, dress yang menawan dan banyak diminati oleh anak-anak karna memiliki bahan yang sangat bagus</p>\r\n\r\n<p>Size : S</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688564492.jpeg', 1, '2023-07-05 13:41:32'),
(35, 14, 'flower power ', 300000, '<p>flower power dress ini memiliki bahan yang sangat bagus dan banyak diminati, dress ini juga banyak memiliki ukuran untuk anak-anak</p>\r\n\r\n<p>Size : S/M</p>\r\n\r\n<p>Material :brokat</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1688564755.jpeg', 1, '2023-07-05 13:45:55'),
(36, 14, 'princess belle', 550000, '<p>Size : S/M</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688564884.jpg', 1, '2023-07-05 13:48:04'),
(37, 13, 'camellia', 440000, '<p>Size : oversize</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688570993.jpeg', 1, '2023-07-05 15:29:53'),
(38, 13, 'h&m', 500000, '<p>Size : M</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571090.jpg', 1, '2023-07-05 15:31:30'),
(39, 13, 'princess belle', 229000, '<p>Size : S/M/L/XL</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571234.jpeg', 1, '2023-07-05 15:33:54'),
(40, 13, 'zara', 339000, '<p>Size : S/M</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571385.jpeg', 1, '2023-07-05 15:36:25'),
(41, 13, 'zara', 800000, '<p>Size : S/M/L/XL</p>\r\n\r\n<p>bahan : katun</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1688571502.jpg', 1, '2023-07-05 15:38:22'),
(42, 15, 'jacamo', 550000, '<p>Size : S/M/L/XL</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571781.jpg', 1, '2023-07-05 15:43:01'),
(43, 15, 'jacamo', 330000, '<p>Size : S/M/L/XL</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571870.jpg', 1, '2023-07-05 15:44:30'),
(44, 13, 'jacamo', 449000, '<p>Size : S/M/L/XL</p>\r\n\r\n<p>Material : Shining Wool</p>\r\n\r\n<p>Cutting : Slim Fit</p>\r\n', 'produk1688571939.jpg', 1, '2023-07-05 15:45:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addres`
--
ALTER TABLE `addres`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

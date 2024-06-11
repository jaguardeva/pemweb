-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 06:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image_path`) VALUES
(5, 'Berita ke 4', 'sadasddsad', 'IMG665cbeae03996.png'),
(7, 'Menjelajahi Kelezatan Surabaya: 7 Rekomendasi Kuliner Khas yang Wajib Dicoba', 'Surabaya, 7 Juni 2024 - Kota Surabaya tidak hanya terkenal dengan keberaniannya dalam sejarah, tetapi juga dengan kelezatan kuliner khasnya yang menggugah selera. Berikut adalah tujuh rekomendasi kuliner asli Surabaya yang patut Anda coba saat berkunjung ke Kota Pahlawan ini:\r\n\r\nRawon Setan Mbak Endang\r\nSalah satu makanan khas Surabaya yang terkenal adalah rawon. Namun, pengalaman kuliner yang berbeda bisa Anda temukan di Rawon Setan Mbak Endang. Terletak di Jalan Embong Malang, rawon khas Surabaya ini memanjakan lidah dengan kuah kental yang kaya rempah, disajikan dengan daging sapi empuk dan telur asin.\r\n\r\nSoto Ayam Cak Har\r\nSoto ayam adalah hidangan populer di seluruh Indonesia, tetapi Soto Ayam Cak Har di Jalan Kupang Baru memiliki cita rasa yang unik dan lezat. Dengan kuah yang gurih dan daging ayam yang empuk, soto ini menjadi pilihan sempurna untuk sarapan atau makan siang.\r\n\r\nLontong Balap Pak Gendut\r\nLontong balap adalah hidangan khas Surabaya yang terdiri dari lontong, tauge, tahu goreng, dan lentho (bakso dari kacang kedelai), disiram dengan kuah kental kacang dan bumbu khas. Nikmati kelezatannya di Lontong Balap Pak Gendut di Jalan Kupang Jaya.\r\n\r\nRujak Cingur Mbak Darmi\r\nRujak cingur adalah salah satu makanan tradisional Jawa Timur yang wajib Anda coba. Di Rujak Cingur Mbak Darmi di Jalan Rajawali, Anda akan menemukan rujak cingur yang segar dengan campuran daging cingur, sayuran, dan buah-buahan yang disajikan dengan bumbu petis khas Surabaya.\r\n\r\nPecel Lele Lela\r\nPecel lele adalah hidangan yang populer di Surabaya, dan Pecel Lele Lela di Jalan Arjuno menawarkan cita rasa yang istimewa. Lele goreng yang renyah disajikan dengan nasi, lalapan, dan sambal khas Surabaya yang pedas dan menggugah selera.\r\n\r\nTahu Tek Mbah Jingkrak\r\nTahu tek adalah makanan khas Surabaya yang terdiri dari tahu goreng yang disajikan dengan kuah kacang, kecap manis, dan irisan ketupat. Di Tahu Tek Mbah Jingkrak di Jalan Manyar Kertoarjo, Anda bisa menikmati tahu tek dengan cita rasa autentik dan bumbu yang kaya.\r\n\r\nNasi Goreng Jancuk\r\nNasi goreng Jancuk adalah hidangan legendaris di Surabaya yang terkenal dengan rasa pedas dan gurihnya. Di warung Nasi Goreng Jancuk di Jalan Kutai, Anda bisa menikmati nasi goreng yang lezat dengan pilihan topping seperti ayam, udang, atau sapi.', 'IMG66631b2e34d90.png'),
(9, 'Penemuan Fosil di Indonesia Mengubah Pemahaman Tentang Dinosaurus Asia', 'Isi:\r\nPara arkeolog di Indonesia telah menemukan fosil dinosaurus baru yang berusia sekitar 120 juta tahun di kawasan pegunungan Sulawesi. Penemuan ini menawarkan wawasan baru tentang keberadaan dan evolusi dinosaurus di Asia Tenggara. Menurut tim peneliti, fosil ini merupakan salah satu yang terlengkap yang pernah ditemukan di wilayah ini dan dapat memberikan informasi penting tentang migrasi dinosaurus di benua Asia.', 'IMG666892e6291b8.png');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `title`, `body`, `type`, `img`, `status`, `created_at`, `user_id`) VALUES
(22, 'asfsfa', 'sfasfasf', 'pengaduan', 'IMG664c2f0921736.jpeg', 0, '2024-05-21 05:20:09', 15),
(23, 'hidfihopdwhivd]yda]suivauvauiroposd avserfiaoouvfanperv wveraweurv', 'wefwaiefhopweaeff waehfiwhefhfehweidhw efrhnsfishdfieiehtityh dfghdgfhidhfhdididhwe8ihfsidfh sdfhdeifwehweifthjnwefhiwefw wefhwegfhweghj ', 'aspirasi', 'IMG664c72a9f2d57.png', 0, '2024-05-21 10:08:41', 15),
(24, 'fsdfsdf sdfsvsdvsdhijbsadf asdf uh uhads uh uhdfs h dfshfdgs', 'dshfsdghsidfhgi sdogdihfshiofsdghipfds fsdghfdghgfshifghfgh piogherhgeos hiuweo rttphoeurrhteorwphgherghie859468t324867528y ', 'pengaduan', 'IMG664c751eee1fa.png', 0, '2024-05-21 10:19:10', 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(15, 'Jaguar Deva Nanggalasakti Oktavian', 'jaguardeva@gmail.com', '$2y$10$CLPOAVubn9XhxatEtx1roeoOrk2IXmlBiuHJGzAnX1ggBq6pkkCxq', 1),
(17, 'Bambang Pamungkas', 'bambang@gmail.com', '$2y$10$y/IUJMVvGnzPXR3R.a9Ku.uKa4ybWuXPpEbjnmc2vGl/TVt2Q1RJe', 1),
(18, 'Admin Ganteng', 'admin@gmail.com', '$2y$10$WpV9bIQqT2ATzO5G.bRO3.hIUqO7b52qwLYgMo2/qliKD7m0EqNdi', 0),
(19, 'syahrialrizky', 'syahrialrizky04@gmail.com', '$2y$10$2pBEBcFa.oIcmCQ6MIPPwe8Eedd5bDHSlubHYq1grDAS0kZrrVDJG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

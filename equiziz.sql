-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2025 at 04:22 AM
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
-- Database: `equiziz`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `benar` int DEFAULT NULL,
  `salah` int DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `waktu` int DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `id_user`, `benar`, `salah`, `nilai`, `waktu`, `mapel`) VALUES
(1, 1, 0, 0, 0, NULL, NULL),
(2, 1, 0, 0, 0, NULL, NULL),
(3, 2, 5, 0, 50, NULL, NULL),
(4, 2, 5, 0, 100, NULL, NULL),
(5, 2, 4, 1, 80, NULL, NULL),
(6, 2, 4, 1, 80, 10, NULL),
(7, 2, 5, 0, 100, 12, NULL),
(8, 7, 5, 0, 100, 10, NULL),
(9, 1, 20, 0, 100, 70, NULL),
(10, 9, 0, 20, 0, 7, NULL),
(11, 10, 1, 19, 5, 3, NULL),
(12, 1, 0, 20, 0, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int NOT NULL,
  `soal` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `jawaban` char(1) DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `soal`, `a`, `b`, `c`, `d`, `jawaban`, `mapel`) VALUES
(1, 'Apa fungsi utama dari CPU dalam sebuah komputer?', 'Menyimpan data', 'Menampilkan gambar', 'Melakukan pemrosesan data', 'Menghubungkan ke internet', 'C', NULL),
(2, 'Bahasa pemrograman manakah yang paling sering digunakan untuk membuat website?', 'Python', 'HTML', 'Java', 'C++', 'B', NULL),
(3, 'Apa singkatan dari \"IT\"?', 'Internal Technology', 'Information Technology', 'Input Transfer', 'Internet Tool', 'B', NULL),
(4, 'Apa nama sistem operasi yang dikembangkan oleh Microsoft?', 'Linux', 'Ubuntu', 'MacOS', 'Windows', 'D', NULL),
(5, 'Manakah yang merupakan perangkat lunak (software)?', 'RAM', 'Keyboard', 'Microsoft Word', 'Printer', 'C', NULL),
(6, 'Dalam jaringan komputer, perangkat yang digunakan untuk menghubungkan dua jaringan berbeda disebut?', 'Router', 'Modem', 'Switch', 'Kabel LAN', 'A', NULL),
(7, 'Yang termasuk bahasa pemrograman tingkat tinggi adalah:', 'Assembly', 'Machine code', 'Java', 'Binary', 'C', NULL),
(8, 'Untuk menyimpan data jangka panjang di komputer digunakan:', 'RAM', 'Cache', 'HaRegisterrd Disk', 'Hard Disk', 'D', NULL),
(9, 'Apa fungsi dari HTML dalam pengembangan web?', 'Menampilkan struktur halaman web', 'Mengatur logika program', 'Menyimpan data', 'Menganalisa data', 'A', NULL),
(10, 'Apa arti dari istilah \"bug\" dalam pemrograman?', 'Virus komputer', 'Kesalahan dalam kode program', 'Perangkat keras yang rusak', 'Bahasa pemrograman', 'B', NULL),
(11, 'Apa fungsi utama dari RAM pada komputer?', 'Menyimpan data permanen', 'Memproses sinyal suara', 'Menyimpan data sementara saat program berjalan', 'Menghubungkan komputer dengan jaringan', 'C', NULL),
(12, 'Apa ekstensi file dari halaman web HTML?', '.doc', '.html', '.exe', '.css', 'B', NULL),
(13, 'Apa nama alat input berikut ini?', 'Keyboard', 'Flashdisk', 'Monitor', 'Printer', 'A', NULL),
(14, 'Di bawah ini yang termasuk perangkat keras (hardware) adalah:', 'Microsoft Excel', 'Google Chrome', 'Motherboard', 'Windows 10', 'C', NULL),
(15, 'Apa yang dimaksud dengan software open source?', 'Software yang tidak bisa diubah', 'Software dengan kode sumber terbuka dan bebas digunakan', 'Software berbayar dengan lisensi', 'Software yang hanya bisa digunakan di Windows', 'B', NULL),
(16, 'Bahasa CSS digunakan untuk:', 'Menghubungkan server dan database', '', 'Menyimpan file secara online', 'Mengatur tampilan dan desain halaman web', 'D', NULL),
(17, 'Manakah dari berikut ini merupakan contoh sistem operasi?', 'Google', 'Instagram', 'Linux', 'Photoshop', 'C', NULL),
(18, 'Apa nama tempat penyimpanan data di internet yang bisa diakses kapan saja?', 'Hard drive', 'SSD', 'Cloud storage', 'CD-ROM', 'C', NULL),
(19, 'Apa itu URL?', 'Jenis bahasa pemrograman', 'Alamat unik untuk suatu halaman di internet', 'Jenis protokol jaringan', 'Format file video', 'B', NULL),
(20, 'Fungsi utama dari database adalah:', 'Mencetak data', 'Menyimpan dan mengatur data secara terstruktur', 'Menampilkan halaman web', 'Memindahkan file antar komputer', 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','siswa') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Naura', 'admin', '0909', 'siswa'),
(2, 'Naila Dewi Enria', 'naila_', '2508', 'siswa'),
(3, 'Naura Dewi Enria', 'naura_', '2909', 'siswa'),
(9, 'Naura Dewi Enria', 'siswa', '@naila25250', 'siswa'),
(10, 'haila azzura', 'guru', '@naila25250', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

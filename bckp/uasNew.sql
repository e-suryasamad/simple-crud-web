-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jun 2018 pada 20.49
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` varchar(50) NOT NULL,
  `artikel_judul` varchar(200) NOT NULL,
  `artikel_penulis` varchar(100) NOT NULL,
  `artikel_abstrak` text NOT NULL,
  `artikel_status` enum('non_valid','valid','pending','unknown') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_judul`, `artikel_penulis`, `artikel_abstrak`, `artikel_status`) VALUES
('A123', 'Pemanfaatan teknologi Nuklir sebagai penunjang kehidupan para jomblo', 'Nunuk 123', 'Dikarenakan banyaknya jomblo yang tidak sanggup menjalani kehidupannya , dan juga banyak diantara mereka yang dicampakan dari kehidupan masyarakat. Maka dari itu diperlukan dorongan tenaga untuk para jomblo yang mengalami gejala-gejala seperti diatas untuk itu kami membuat trobosan baru dengan cara memberikan tenaga nuklir kepada para jomblo tersebut.', 'pending'),
('A124', 'Codeigniter Vs Laravel', 'David Naista', 'Buku ini bukan membahasa tentang mana diantara kedua framework tersebut yang lebih unggul tapi lebih menekankan kepada mana diantara kedua Framework tersebut yang paling cocok untuk anda dan sesuai dengan kebutuhan anda.', 'pending'),
('B123', 'Aku Jodi Jomblo di tinggal Pergi', 'Budi', 'lucu lucu lucu', 'pending'),
('N123', 'Cinta Bertepuk Sebelah Tangan', 'Nunuk Mahendra', 'Sakitnya Tuh Disini', 'valid'),
('R123', 'Dududu cinta cinta', 'Ayam Goreng', '123', 'pending'),
('V123', 'Cinta kamu', 'Lucu LUcu', 'Hemmm', 'valid');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumpemakalah`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `jumpemakalah` (
`jumlah_pemakalah` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumpeserta`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `jumpeserta` (
`jumlah_peserta` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakalah`
--

CREATE TABLE `pemakalah` (
  `pemakalah_id` int(11) NOT NULL,
  `pemakalah_tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pemakalah_nama` varchar(100) NOT NULL,
  `pemakalah_telp` varchar(50) NOT NULL,
  `pemakalah_email` varchar(100) NOT NULL,
  `pemakalah_bank` varchar(50) NOT NULL,
  `pemakalah_nama_rek` varchar(100) NOT NULL,
  `pemakalah_bukti` text NOT NULL,
  `pemakalah_pesan` text,
  `artikel_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemakalah`
--

INSERT INTO `pemakalah` (`pemakalah_id`, `pemakalah_tgl`, `pemakalah_nama`, `pemakalah_telp`, `pemakalah_email`, `pemakalah_bank`, `pemakalah_nama_rek`, `pemakalah_bukti`, `pemakalah_pesan`, `artikel_id`) VALUES
(123, '2018-06-14 16:10:21', 'Nunuk Hendrawan', '082340803646', 'nunuk.123@gmail.com', 'BRI', 'Nunuk Ajah', 'wer43tgfdbdsfhsdfhdfb', NULL, 'A123'),
(124, '2018-06-16 15:50:46', 'Budi', '082340803646', 'nyomanaman17@gmail.com', 'BRI', 'Budi Artawan', 'user/img/noimage.png', NULL, 'B123'),
(125, '2018-06-16 17:19:20', 'Nunuk Mahendra', '32343634', 'n@gmail.com', 'BRI', 'nu2k', 'public/bukti/GtGqoinfaZqBbyh4C53ArU5zZ1Pkjv2FnehcBvzW.jpeg', NULL, 'N123'),
(126, '2018-06-16 18:15:09', 'Ayam Goreng', '321', '123@gmail.com', 'BRI', 'Ayam Goreng', 'storage/bukti/mvURIGSd8uvJOga9cwX6VeLPHxo7rJ2oxoMXqwZn.jpeg', NULL, 'R123'),
(127, '2018-06-16 18:36:04', 'Lucu LUcu', '0987653728', 'we@gmail.com', 'BTN', 'cinta', 'storage/bukti/8qtne98xvmF2FZNpBUTQjh5ALjpEB7isspnZI2K1.jpeg', NULL, 'V123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` int(11) NOT NULL,
  `peserta_nama` varchar(100) NOT NULL,
  `peserta_telp` varchar(50) NOT NULL,
  `peserta_email` varchar(100) NOT NULL,
  `peserta_bank` varchar(50) NOT NULL,
  `peserta_nama_rek` varchar(100) NOT NULL,
  `peserta_bukti` text NOT NULL,
  `peserta_status` enum('non_valid','valid','pending','unknown') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`peserta_id`, `peserta_nama`, `peserta_telp`, `peserta_email`, `peserta_bank`, `peserta_nama_rek`, `peserta_bukti`, `peserta_status`) VALUES
(1, 'Ricky darmawan', '082340803646', 'Ricky.darmawan@gmail.com', '82379-1234-2242-3', 'Ricky darmawan', 'uwsjnsbaklsuenek', 'valid'),
(2, 'Nyoman Juli Budi Artawan', '0823444555666', 'nyomanaman17@gmail.com', '12341-3453-24552-76', 'Nyoman Juli Budi Artawan', 'kjksdhui3874hbs93ujne', 'pending');

-- --------------------------------------------------------

--
-- Struktur untuk view `jumpemakalah`
--
DROP TABLE IF EXISTS `jumpemakalah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumpemakalah`  AS  select count(`pemakalah`.`pemakalah_id`) AS `jumlah_pemakalah` from `pemakalah` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `jumpeserta`
--
DROP TABLE IF EXISTS `jumpeserta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumpeserta`  AS  select count(`peserta`.`peserta_id`) AS `jumlah_peserta` from `peserta` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `pemakalah`
--
ALTER TABLE `pemakalah`
  ADD PRIMARY KEY (`pemakalah_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemakalah`
--
ALTER TABLE `pemakalah`
  MODIFY `pemakalah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

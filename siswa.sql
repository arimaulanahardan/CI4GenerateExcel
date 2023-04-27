-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 05:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `UTS` int(5) NOT NULL,
  `UAS` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIM`, `NAMA`, `UTS`, `UAS`) VALUES
(211511001, 'Achmadya Ridwan Ilyawan', 80, 92),
(211511002, 'Adilla Pradana', 83, 93),
(211511003, 'Aldrin Rayhan Putra', 88, 90),
(211511004, 'Ananta Destawardhana', 80, 91),
(211511005, 'Andre Lutfiansyah', 83, 93),
(211511006, 'Aprillia Rahmawati', 85, 95),
(211511007, 'Ari Maulana Hardan', 100, 100),
(211511008, 'Ariana Rahmawati', 81, 93),
(211511009, 'Arief Rahman Ahmadhusein', 89, 92),
(211511010, 'Aurell Dhiendra Niecel Putri', 83, 90),
(211511011, 'Devina Lusiana', 80, 90),
(211511012, 'Evic Nur Avivah', 82, 91),
(211511013, 'Fahmi Ahmad Fadilah', 84, 91),
(211511014, 'Fathan Falatansya Firdaus', 86, 94),
(211511015, 'Hilman Permana', 84, 93),
(211511016, 'Ibrahim Kevin Arrasyid', 83, 95),
(211511017, 'Irfan Khoerul Mupid Setiadi', 86, 97),
(211511018, 'Lolla Mariah', 81, 92),
(211511019, 'Luthfie Yannuardy', 84, 90),
(211511020, 'M. Fatur Maulidan Azzahra', 88, 91),
(211511021, 'Meisya Puteri Ghefira', 80, 92),
(211511022, 'Muhamad Ardi Nur Insan', 80, 93),
(211511023, 'Muhammad Andhika Prasetya', 83, 94),
(211511024, 'Muhammad Fadhil Maulana', 84, 90),
(211511025, 'Muhammad Wafda Rizkiansyah', 89, 92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

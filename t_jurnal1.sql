-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2018 pada 04.51
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `komen`) VALUES
(67011710, 'devi', 'delafildzania76@gmail.com', ''),
(67000, 'devi', 'njkjnj', ''),
(67011710, 'ssss', 'delafildzania@gmail.com', ''),
(2147483647, 'Devi Fildzania', 'mi17@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

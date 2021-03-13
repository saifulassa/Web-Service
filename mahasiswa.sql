-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 13 Mar 2021 pada 16.00
-- Versi server: 10.4.15-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u603544040_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `prodi` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
('09.3.00012', 'Siswanto', 'TI-D3'),
('09.5.00056', 'Bejo', 'TI-S1'),
('09.5.00031', 'Suwondo', 'TI-S1'),
('09.3.00051', 'Rani', 'TI-D3'),
('10.5.00043', 'Parjo', 'TI-S1'),
('12.3.00405', 'Wardoyo Guntur Pamungkas', 'TI-S1'),
('10.5.00001', 'Warno', 'TI-S1'),
('10.5.00002', 'Wahyono', 'TI-S1'),
('09.3.00013', 'Wahyono', 'TI-S1'),
('10.3.00032', 'Bagas', 'TI-S1'),
('12.5.00013', 'Adi ', 'TI-S1'),
('12.4.00013', 'Setiyowati', 'SI-S1'),
('12.5.00045', 'Wahyu_Sudewo', 'TI-S1'),
('12.5.00046', 'Bagas Adi Purnama', 'TI-S1'),
('12.4.00041', 'Widodo Saputro Duwe Boto', 'SI-S1'),
('10182930', 'andri', 'SI-T1'),
('18.01.5334', 'Assaidi', 'SI-T1'),
('10.13.0056', 'Anwar', 'S1-SI'),
('18.01.2023', 'Saiful', 'S1-TI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

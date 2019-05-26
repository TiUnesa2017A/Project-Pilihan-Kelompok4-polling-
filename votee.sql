-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2019 pada 07.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nis` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `status_vote` varchar(13) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nis`, `username`, `nama_lengkap`, `kelas`, `jurusan`, `status_vote`) VALUES
('17051204044', 'bayu', 'Krisna Bayu', 'Teknik Informatika', 'Teknik Inofrmatika', '1'),
('17051204046', 'shinta', 'Shinta Yuan', 'Teknik Informatika', 'Teknik Inofrmatika', '0'),
('17051204051', 'elok', 'Elok Nur', 'Teknik Informatika', 'Teknik Inofrmatika', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_vote`
--

CREATE TABLE `log_vote` (
  `user` text NOT NULL,
  `tanggal_waktu` varchar(255) NOT NULL,
  `add_log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `log_vote`
--

INSERT INTO `log_vote` (`user`, `tanggal_waktu`, `add_log`) VALUES
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 08:58:14 +0700', 'Login'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 08:58:33 +0700', 'ketua2,wakil1'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 09:00:28 +0700', 'ketua3,wakil3'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 09:00:31 +0700', 'Logout'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 09:02:52 +0700', 'Login'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 09:03:53 +0700', 'ketua1,wakil3'),
('Joviandro nopier marbun,12,RPL', 'Fri, 06 Oct 2017 09:03:56 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 06 Oct 2017 19:38:53 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 06 Oct 2017 19:42:25 +0700', 'Logout'),
('Muhammad Aqsyal,12,RPL', 'Sat, 07 Oct 2017 17:23:59 +0700', 'Login'),
('Aldin abb,12,RPL', 'Sat, 07 Oct 2017 17:25:49 +0700', 'Login'),
('Aldin abb,12,RPL', 'Sat, 07 Oct 2017 17:26:59 +0700', 'ketua1,wakil1'),
('Muhammad Aqsyal,12,RPL', 'Sat, 07 Oct 2017 17:26:59 +0700', 'ketua1,wakil1'),
('Aldin abb,12,RPL', 'Sat, 07 Oct 2017 17:27:03 +0700', 'Logout'),
('Muhammad Aqsyal,12,RPL', 'Sat, 07 Oct 2017 17:27:03 +0700', 'Logout'),
('Yiek alfian,12,RPL', 'Sat, 07 Oct 2017 17:27:38 +0700', 'Login'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 07 Oct 2017 17:27:48 +0700', 'Login'),
('Yiek alfian,12,RPL', 'Sat, 07 Oct 2017 17:28:17 +0700', 'ketua1,wakil1'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 07 Oct 2017 17:28:17 +0700', 'ketua1,wakil1'),
('Yiek alfian,12,RPL', 'Sat, 07 Oct 2017 17:28:20 +0700', 'Logout'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 07 Oct 2017 17:28:20 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Sat, 07 Oct 2017 17:32:45 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Sat, 07 Oct 2017 17:33:43 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Sat, 07 Oct 2017 18:36:52 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Sat, 07 Oct 2017 19:15:58 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Mon, 16 Oct 2017 15:18:28 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Mon, 16 Oct 2017 15:20:13 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Mon, 16 Oct 2017 17:15:41 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 07:38:00 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 07:46:26 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 07:47:00 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 07:58:21 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 08:05:44 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 08:40:11 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Tue, 17 Oct 2017 08:44:50 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Tue, 17 Oct 2017 08:45:10 +0700', 'ketua3,wakil3'),
('Fahrizal Syaripdin,12,RPL', 'Tue, 17 Oct 2017 08:45:13 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 11:55:24 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 15:54:49 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 16:14:36 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 16:15:12 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 16:15:24 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 16:17:18 +0700', 'Logout'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 16:27:40 +0700', 'Login'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 17:17:58 +0700', 'ketua3,wakil3'),
('Kevin Hendra Wijaya,12,RPL', 'Tue, 17 Oct 2017 17:17:59 +0700', 'Logout'),
('Joviandro nopier marbun,12,RPL', 'Fri, 24 May 2019 10:55:43 +0700', 'Login'),
('Joviandro nopier marbun,12,RPL', 'Fri, 24 May 2019 11:17:30 +0700', 'Login'),
('Joviandro nopier marbun,12,RPL', 'Fri, 24 May 2019 11:18:07 +0700', 'ketua2,wakil2'),
('Joviandro nopier marbun,12,RPL', 'Fri, 24 May 2019 11:18:12 +0700', 'Logout'),
('Yiek alfian,12,RPL', 'Fri, 24 May 2019 16:11:24 +0700', 'Login'),
('Yiek alfian,12,RPL', 'Fri, 24 May 2019 16:48:04 +0700', 'ketua3,wakil2'),
('Yiek alfian,12,RPL', 'Fri, 24 May 2019 16:48:06 +0700', 'Logout'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 24 May 2019 16:49:31 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 24 May 2019 20:42:40 +0700', 'Login'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 24 May 2019 20:46:19 +0700', 'ketua1,wakil2'),
('Fahrizal Syaripdin,12,RPL', 'Fri, 24 May 2019 20:46:22 +0700', 'Logout'),
('Muhammad Aqsyal,12,RPL', 'Fri, 24 May 2019 20:47:46 +0700', 'Login'),
('Muhammad Aqsyal,12,RPL', 'Fri, 24 May 2019 20:51:51 +0700', 'ketua2,wakil2'),
('Muhammad Aqsyal,12,RPL', 'Fri, 24 May 2019 20:51:52 +0700', 'Logout'),
('Aldin abb,12,RPL', 'Sat, 25 May 2019 09:43:59 +0700', 'Login'),
('Aldin abb,12,RPL', 'Sat, 25 May 2019 09:44:59 +0700', 'ketua1,wakil3'),
('Aldin abb,12,RPL', 'Sat, 25 May 2019 09:45:01 +0700', 'Logout'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 25 May 2019 10:01:45 +0700', 'Login'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 25 May 2019 10:36:19 +0700', 'ketua2,wakil3'),
('Fadlawalad dimas Zo Charli siregar,12,RPL', 'Sat, 25 May 2019 10:36:28 +0700', 'Logout'),
('Krisna Bayu,Teknik Informatika,Teknik Inofrmatika', 'Sat, 25 May 2019 12:21:56 +0700', 'Login'),
('Krisna Bayu,Teknik Informatika,Teknik Inofrmatika', 'Sat, 25 May 2019 12:44:33 +0700', 'ketua1,wakil2'),
('Krisna Bayu,Teknik Informatika,Teknik Inofrmatika', 'Sat, 25 May 2019 12:44:36 +0700', 'Logout');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `calon` varchar(33) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `deskripsi_calon` text NOT NULL,
  `foto_calon` text NOT NULL,
  `jumlah_vote` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`calon`, `nama_calon`, `deskripsi_calon`, `foto_calon`, `jumlah_vote`) VALUES
('ketua1', 'Krisna', 'Saya anak muda berbakat', 'KETUA1.jpg', 1),
('ketua2', 'Elok', 'Saya suka memancing', 'KETUA2.jpg', 1),
('ketua3', 'Nung', 'Saya suka makan wortel', 'KETUA3.jpg', 0),
('wakil1', 'Bayu', 'Saya bangga Indonesia', 'WAKIL1.jpg', 0),
('wakil2', 'Fauzi', 'Saya suka nasi goreng', 'WAKIL2.jpg', 1),
('wakil3', 'Shinta', 'Saya wanita', 'WAKIL3.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`calon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

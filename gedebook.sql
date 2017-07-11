-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11 Jul 2017 pada 17.59
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedebook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kd_buku` int(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `posted_by` int(20) NOT NULL,
  `posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul`, `penulis`, `img`, `penerbit`, `genre`, `sinopsis`, `posted_by`, `posted_date`) VALUES
(5, 'Game Of Thrones', 'Najwa Rahma Putra', 'buku_got.jpg', 'George G Martin', 'horror', 'Adaptasi dari A Song of Ice and Fire, sebuah novel serial fantasi karya George R. R. Martin, yang edisi pertamanya berjudul A Game of Thrones. Difilmkan di sebuah studi Belfast dan lokasi pengambilan gambarnya dilakukan di Irlandia Utara, Malta, Skotlandi', 9, '2017-07-11'),
(6, 'Laskar Pelangi', 'Najwa Rahma Putra', 'buku_lp1.jpg', 'Ivan Corp.', 'life', 'Laskar Pelangi merupakan buku pertama dari Tetralogi Laskar Pelangi. Buku berikutnya adalah Sang Pemimpi, Edensor dan Maryamah Karpov. Buku ini tercatat sebagai buku sastra Indonesia terlaris sepanjang sejarah.\r\n\r\nCerita terjadi di desa Gantung, Belitung', 9, '2017-07-02'),
(17, 'Maze Runner', 'Salsabiela Cahyahaq', 'maze.jpg', 'Kan Main Bang', 'comedy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 13, '2017-07-03'),
(18, 'Bunga Di Tepi Jalan', 'Salsabiela Cahyahaq', 'Orange-Background-Wallpaper.jpg', 'Semenanjung Malaya Corp', 'fiksi', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang', 13, '2017-07-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(8) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `id_pengguna` int(10) NOT NULL,
  `kd_buku` int(10) NOT NULL,
  `comment_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `komentar`, `id_pengguna`, `kd_buku`, `comment_at`) VALUES
(2, 'hahah', 9, 5, '03:27:46'),
(3, 'Keren bang', 13, 5, '03:34:14'),
(5, 'Komen bang', 9, 2, '07:19:54'),
(6, 'Makan Bang', 8, 2, '08:49:27'),
(7, 'Makan', 8, 5, '08:59:44'),
(8, 'hai', 9, 6, '12:10:47'),
(9, 'Hahahaha', 8, 6, '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `like`
--

CREATE TABLE `like` (
  `id` int(100) NOT NULL,
  `id_pengguna` int(8) NOT NULL,
  `fk_buku` int(20) NOT NULL,
  `flag` int(2) NOT NULL,
  `at_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `like`
--

INSERT INTO `like` (`id`, `id_pengguna`, `fk_buku`, `flag`, `at_date`) VALUES
(29, 8, 5, 1, '2017-07-07'),
(30, 8, 6, 1, '2017-07-09'),
(31, 9, 5, 1, '2017-07-11'),
(32, 9, 6, 1, '2017-07-11'),
(33, 9, 6, 1, '2017-07-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(8) NOT NULL,
  `ava` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `email`, `jk`, `ava`, `username`, `password`, `role`) VALUES
(8, 'Ivan Fadila Putra', 'i.fadilaputra@gmail.com', 'male', 'wut1.png', 'ffadilaputra', '65120b88a47377517fca650618bf76a5', 'user'),
(9, 'Najwa Rahma Putra', 'najwa@gmail.com', 'female', '1500x5001.jpg', 'cuek', 'c8520774f9240cfe9d240d2ee7b9fb1f', 'writer'),
(10, 'Nava Ovia', 'nava@gmail.com', 'male', '15940520_1525490900814356_1050309957468263313_n.jpg', 'nava', '533078acd91fffef2a525239de4a3dc9', 'writer'),
(11, 'Warni Astutik', 'w@gmail.com', 'female', 'NULL', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'writer'),
(12, 'Al Fatih', 'a@gmail.com', 'male', 'NULL', 'al', '97282b278e5d51866f8e57204e4820e5', 'user'),
(13, 'Salsabiela Cahyahaq', 'salsabielac@gmail.com', 'female', 'makan_bang.png', 'cabela', '90c68b505adc92f4daa4f60031c8281b', 'writer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id_penulis` int(8) NOT NULL,
  `kd_buku` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_penulis`,`kd_buku`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kd_buku` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(8) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`),
  ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`kd_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

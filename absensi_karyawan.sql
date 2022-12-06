-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for absensi
CREATE DATABASE IF NOT EXISTS `absensi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `absensi`;

-- Dumping structure for table absensi.tbl_absensi
CREATE TABLE IF NOT EXISTS `tbl_absensi` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `absen` varchar(20) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table absensi.tbl_absensi: ~2 rows (approximately)
REPLACE INTO `tbl_absensi` (`nik`, `nama`, `absen`, `tanggal_absen`, `jabatan`, `email`) VALUES
	('2044534', 'Fahran', 'Hadir', '2022-11-15', 'Sekretaris', 'mhaizulfahran@gmail.co.id'),
	('2055202026', 'abet', 'Hadir', '2022-11-14', 'Gudang', 'abet@gmail.com'),
	('31231', 'bowo', 'Hadir', '2022-11-10', 'Administrasi', 'albertaakbar@yahoo.com'),
	('3123142342', 'bowoo', 'Izin', '2022-11-07', 'Komputer', 'bowo@gmail.co.id'),
	('858427444', 'Albertaaa', 'Hadir', '0000-00-00', 'Sekretaris', 'cafumadrid@gmail.com'),
	('89284038', 'amel', 'Hadir', '2022-11-23', 'Sekretaris', 'albertaakbar@yahoo.com');

-- Dumping structure for table absensi.tbl_profile
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `id_karyawan` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `no_telphone` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table absensi.tbl_profile: ~1 rows (approximately)
REPLACE INTO `tbl_profile` (`id_karyawan`, `nama`, `jk`, `tanggal_lahir`, `alamat`, `no_telphone`, `jabatan`, `email`) VALUES
	('11111', 'faran', 'Laki-Laki', '2022-11-07', 'jalan tiung', '0812574252', 'Sekretaris', 'faran@gmail.com'),
	('14552', 'albertaa', 'Laki-Laki', '2022-11-15', 'jalan tiung', '0812574252', 'Sekretaris', 'albertaakbarm@gmail.com'),
	('2055202020', 'bowo', 'Laki-Laki', '2022-11-14', 'jalan tiung', '0812574252', 'Manajer', 'albertaakbarm@gmail.com'),
	('2055202026', 'alberttt', 'Laki-Laki', '2022-11-14', 'jalan nangka', '0812574252', 'Bendahara', 'albertaakbarm@gmail.com');

-- Dumping structure for table absensi.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table absensi.user: ~2 rows (approximately)
REPLACE INTO `user` (`id`, `email`, `username`, `password`) VALUES
	(9, 'albert@gmail.com', 'albert', '202cb962ac59075b964b07152d234b70'),
	(10, 'albertaakbarm@gmail.com', 'alberta', '202cb962ac59075b964b07152d234b70'),
	(11, 'albertaakbarmmm@gmail.com', 'scrool', '2d36c8f68ce275b398e7f6d98587578c'),
	(12, 'amel@gmail.com', 'amel', '202cb962ac59075b964b07152d234b70');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

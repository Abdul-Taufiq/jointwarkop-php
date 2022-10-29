/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.10-MariaDB : Database - jointwarkop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jointwarkop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `jointwarkop`;

/*Table structure for table `develop` */

DROP TABLE IF EXISTS `develop`;

CREATE TABLE `develop` (
  `id_dev` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(15) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') DEFAULT NULL,
  `jns_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `nohp` char(13) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_dev`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `develop` */

insert  into `develop`(`id_dev`,`nim`,`nama`,`ttl`,`alamat`,`agama`,`jns_kelamin`,`nohp`,`gambar`) values 
(1,'  5180311019','  Abdul Taufiq  ','  Blora, 17-12-2000  ','															Ds.Ngilen Dk.Jatal, Kunduran, Blora   ','Islam','Laki-Laki','  08213534125','topik.jpg  ');

/*Table structure for table `homepage` */

DROP TABLE IF EXISTS `homepage`;

CREATE TABLE `homepage` (
  `id_h` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_h`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `homepage` */

insert  into `homepage`(`id_h`,`gambar`) values 
(1,'h0.jpg'),
(2,'h1.jpg'),
(3,'h2.jpg');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`id`,`username`,`password`) values 
(1,'admin','admin'),
(2,'a','a');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') DEFAULT NULL,
  `jns_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `nohp` char(13) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`nama`,`ttl`,`alamat`,`agama`,`jns_kelamin`,`nohp`,`gambar`) values 
(1,'Ibnu','Blora, 11-02-2001','Ds. Ngilen Dk.Jatal, Kunduran,Blora','Islam','Laki-Laki','085228180910','ibnu.jpg'),
(2,' Nino Kuncoro ',' Blora, 21 - 12 - 2000 ','Ds. Ngilen\r\nDk. Jatal, Kunduran , Blora ','Islam','Laki-Laki','0822225222111','WhatsApp Image 2021-01-12 at 10.19.11 PM.jpeg');

/*Table structure for table `pemilik` */

DROP TABLE IF EXISTS `pemilik`;

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') DEFAULT NULL,
  `jns_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `nohp` char(13) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_pemilik`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemilik` */

insert  into `pemilik`(`id_pemilik`,`nama`,`ttl`,`alamat`,`agama`,`jns_kelamin`,`nohp`,`gambar`) values 
(1,'Andrean March','Blora, 01-03-1999','Ds.Ngilen Dk.Jatal, Kunduran, Blora','Islam','Laki-Laki','082335489545','andre.jpg');

/*Table structure for table `sedia` */

DROP TABLE IF EXISTS `sedia`;

CREATE TABLE `sedia` (
  `id_sedia` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kategori` enum('Makanan','Minuman') DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `dskp` varchar(200) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sedia`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sedia` */

insert  into `sedia`(`id_sedia`,`nama`,`kategori`,`harga`,`dskp`,`gambar`) values 
(1,'  Kopi Tubruk  ','Minuman',5000,'Kopi Hangat Yang Dibuat Dengan Cita Rasa Tiada Dua','KopiTubruk.jpg'),
(2,' Nasi Kucing ','Minuman',2000,'Nasi Kucing ala-ala angkringan dengan harga yang bersahabat','nasi kuuc.jpg'),
(3,'  Es Josua  ','Minuman',7000,'Minuman segar yang terbuat dari susu putih dengan kukubima, cocok untuk mengembalikan tenaga','joss.jpg'),
(4,'Indomie Rebus','Makanan',6000,'Indomie yang direbus','indomi kuah.jpg'),
(6,'Indomie Rebus + Telur','Makanan',8000,'Indomie yang direbus + telur dadar spesial','indomi kuah.jpg'),
(7,'Indomie Goreng','Makanan',6000,'Indomie Goreng','indomi goreng.jpg'),
(8,'Indomie Goreng +Telur','Makanan',8000,'Indomie goreng dengan Telur dadar spesial','indomi goreng.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

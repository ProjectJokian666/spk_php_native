/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - efikasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`efikasi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `efikasi`;

/*Table structure for table `data_cetak` */

DROP TABLE IF EXISTS `data_cetak`;

CREATE TABLE `data_cetak` (
  `id` int DEFAULT NULL,
  `header` text,
  `size_header` int DEFAULT NULL,
  `location` text,
  `size_location` int DEFAULT NULL,
  `judul` text,
  `size_judul` int DEFAULT NULL,
  `wilayah` text,
  `konselor` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `data_cetak` */

insert  into `data_cetak`(`id`,`header`,`size_header`,`location`,`size_location`,`judul`,`size_judul`,`wilayah`,`konselor`) values 
(1,'DEPATEMEN PENDIDIKAN PERGURUAN NEGERI MALANG',23,'Jl Yos Sat Set Wat Wet',12,'LAPORAN HASIL EFIKASI DIRI TERHADAP MAHASIWA',20,'kediri','aaaaa');

/*Table structure for table `data_interpretasi` */

DROP TABLE IF EXISTS `data_interpretasi`;

CREATE TABLE `data_interpretasi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `klasifikasi` varchar(255) DEFAULT NULL,
  `batas_bawah` int DEFAULT NULL,
  `batas_atas` int DEFAULT NULL,
  `interpretasi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `data_interpretasi` */

insert  into `data_interpretasi`(`id`,`klasifikasi`,`batas_bawah`,`batas_atas`,`interpretasi`) values 
(1,'Rendah',1,33,'Mahasiswa kurang memahami  dirinya sehingga sering merasa kesulitan dan mudah menyerah dalam melaksanakan kegiatan akademik dengan kondisi yang berbeda dari biasannya. hendaknya lebih bersemangat tekun dalam berusaha, tidak mudah takut dalam menghadapi tantangan baru, tidak mudah menyerah dalam mencapai tujuan, memiliki komitmen tinggi dalam pekerjaannya, mampu mengembangkan diri lebih baik dari orang lain'),
(2,'Sedang',34,65,'Mahasiswa cukup mampu memahami potensi diri dan cukup gigih dalam menyelesaikan tugas akademik. hendaknya lebih bersemangat tekun dalam berusaha, tidak mudah takut dalam menghadapi tantangan baru, tidak mudah menyerah dalam mencapai tujuan, memiliki komitmen tinggi dalam pekerjaannya, mampu mengembangkan diri lebih baik dari orang lain'),
(3,'Tinggi',66,100,'Mahasiswa mampu memahami dirinya, mampu memilih dan melakukan berbagai kegiatan akademik sesuai dengan kemampuannya dan gigih menyelesaikan tugas akademik. semakin kuatnya keyakinan diri dalam melakukan suatu usaha yang lebih maksimal');

/*Table structure for table `hasil_kuesioner` */

DROP TABLE IF EXISTS `hasil_kuesioner`;

CREATE TABLE `hasil_kuesioner` (
  `id` varchar(255) DEFAULT NULL,
  `tanggal_test` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `hasil_tes` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `hasil_kuesioner` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`) values 
(1,'admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Enterprise v10.42 
MySQL - 5.6.21 : Database - db_uts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uts` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_uts`;

/*Table structure for table `tb_buku` */

DROP TABLE IF EXISTS `tb_buku`;

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `id_pengarang` int(11) DEFAULT NULL,
  `jumlah_halaman` int(11) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `addby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penerbit` (`id_penerbit`),
  KEY `id_pengarang` (`id_pengarang`),
  KEY `addby` (`addby`),
  CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`),
  CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_pengarang`) REFERENCES `tb_pengarang` (`id_pengarang`),
  CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`addby`) REFERENCES `tb_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `tb_buku` */

insert  into `tb_buku`(`id`,`judul`,`id_penerbit`,`id_pengarang`,`jumlah_halaman`,`tahun_terbit`,`addby`) values (4,'Koala Kumal',1,1,200,2006,1),(6,'Udayana',2,1,300,2004,1),(7,'tes',1,1,1,2011,1),(9,'Woee',1,1,1,2011,2),(11,'jadul',1,1,234,3009,1);

/*Table structure for table `tb_buku_detail` */

DROP TABLE IF EXISTS `tb_buku_detail`;

CREATE TABLE `tb_buku_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) DEFAULT NULL,
  `kode_buku` varchar(30) DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_buku` (`id_buku`),
  KEY `id_kondisi` (`id_kondisi`),
  CONSTRAINT `tb_buku_detail_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tb_buku_detail_ibfk_2` FOREIGN KEY (`id_kondisi`) REFERENCES `tb_kondisi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tb_buku_detail` */

insert  into `tb_buku_detail`(`id`,`id_buku`,`kode_buku`,`id_kondisi`) values (1,6,'U1000',1),(5,6,'fvtgbybtvt',1);

/*Table structure for table `tb_kondisi` */

DROP TABLE IF EXISTS `tb_kondisi`;

CREATE TABLE `tb_kondisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_kondisi` */

insert  into `tb_kondisi`(`id`,`kondisi`) values (1,'Baik'),(2,'Rusak');

/*Table structure for table `tb_penerbit` */

DROP TABLE IF EXISTS `tb_penerbit`;

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tb_penerbit` */

insert  into `tb_penerbit`(`id_penerbit`,`nama_penerbit`,`alamat`,`telepon`) values (1,'Udayana Press','Kampus Sudirman Denpasar','0361-8888888'),(2,'Putra Penerbit','Ubung Kaja','12003949'),(3,'Deridya','Ubud','84451231'),(4,'tes2','tes2','1111'),(5,'woe','Bali','200500');

/*Table structure for table `tb_pengarang` */

DROP TABLE IF EXISTS `tb_pengarang`;

CREATE TABLE `tb_pengarang` (
  `id_pengarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tb_pengarang` */

insert  into `tb_pengarang`(`id_pengarang`,`nama_pengarang`,`alamat`,`telepon`) values (1,'Wijaya','Jl. Kenanga 13 Denpasar','0812374287'),(2,'Dewa Putra Semara','Ubung','600800'),(3,'tes2','tes','11111'),(4,'deri','ubud','009837463747');

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id`,`username`,`password`,`nama`,`alamat`,`telepon`) values (1,'admin','0192023a7bbd73250516f069df18b500','Admin','Denpasar','090978374'),(2,'tgkrisna','827ccb0eea8a706c4c34a16891f84e7b','Krisna Cahaya','Amerika','80090012'),(3,'dewa_uta96','827ccb0eea8a706c4c34a16891f84e7b','Putra Semara Bagus','Ubung','1239239123'),(4,'Tes','28b662d883b6d76fd96e4ddc5e9ba780','tes','tes','1111');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

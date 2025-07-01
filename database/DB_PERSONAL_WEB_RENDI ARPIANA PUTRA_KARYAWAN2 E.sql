/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_rendi_d1a241007
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rendi_d1a241007` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_rendi_d1a241007`;

/*Table structure for table `tbl_about` */

DROP TABLE IF EXISTS `tbl_about`;

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL AUTO_INCREMENT,
  `about` text DEFAULT NULL,
  KEY `id_about` (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_about` */

insert  into `tbl_about`(`id_about`,`about`) values 
(8,'Terima kasih telah mengunjungi website saya.'),
(9,'Saya percaya bahwa desain yang baik harus sederhana dan fungsional. Dalam setiap proyek yang saya kerjakan, saya selalu berusaha untuk memberikan hasil yang tidak hanya memenuhi ekspektasi, tetapi juga melampauinya. \r\n'),
(10,'saya Memiliki ketertarikan yang mendalam terhadap teknologi modern dan penerapannya dalam memecahkan masalah dunia nyata.'),
(11,'Halo! Nama saya Rendi Arpiana Putra, seorang Mahasiswa Universitas Subang Fakultas Ilmu Komputer Program Studi Sistem Informasi, saya telah mengembangkan keterampilan dalam HTML, CSS, dan JavaScript. Selama tugas kuliah saya,. ');

/*Table structure for table `tbl_artikel` */

DROP TABLE IF EXISTS `tbl_artikel`;

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `nama_artikel` text DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_artikel` */

insert  into `tbl_artikel`(`id_artikel`,`nama_artikel`,`isi_artikel`) values 
(4,'Mengenal Artificial Intelligence (AI): Pengertian, Sejarah, Kegunaan, dan Contoh Penerapannya','Dunia teknologi semakin berkembang pesat, dan salah satu inovasi paling menarik yang telah merevolusi cara kita hidup adalah Artificial Intelligence atau AI. Teknologi ini telah menjadi pilar penting dalam berbagai bidang, membawa dampak besar dalam cara kita bekerja, berinteraksi, dan mengambil keputusan. Dalam artikel ini, kita akan menjelajahi apa itu AI, bagaimana sejarahnya berkembang, jenis-jenisnya, manfaatnya dalam berbagai aspek kehidupan, serta kelebihan dan kekurangannya.'),
(5,'Keamanan Siber di Era Digital','Keamanan siber di era digital sangatlah krusial. Era digital yang ditandai dengan kemajuan teknologi dan konektivitas internet yang pesat, juga menghadirkan risiko keamanan yang perlu diwaspadai. Keamanan siber mencakup upaya untuk melindungi sistem, jaringan, dan data dari serangan digital yang bertujuan mencuri, mengubah, atau menghancurkan informasi sensitif, serta mengganggu operasional bisnis atau bahkan memeras uang. \r\n'),
(6,'Perkembangan Teknologi 5G','Teknologi 5G terus mengalami perkembangan dan penerapannya semakin meluas di berbagai negara, termasuk Indonesia. Jaringan 5G menawarkan kecepatan internet yang jauh lebih tinggi, latensi rendah, dan kapasitas yang lebih besar dibandingkan dengan generasi sebelumnya, 4G. Hal ini membuka peluang untuk berbagai inovasi dan transformasi digital di berbagai sektor. \r\n'),
(7,'Perkembangan AI dan Masa Depan Pekerjaan','Perkembangan AI akan mengubah lanskap pekerjaan di masa depan, menciptakan peluang baru sekaligus menimbulkan tantangan. Otomatisasi tugas-tugas rutin oleh AI dapat mengurangi beberapa jenis pekerjaan, tetapi juga membuka lapangan kerja baru di bidang pengembangan, pemeliharaan, dan penerapan teknologi AI. Penting bagi tenaga kerja untuk beradaptasi melalui pendidikan dan pelatihan ulang untuk mengembangkan keterampilan yang dibutuhkan di era AI'),
(8,'Didukung Teknologi NVIDIA, Solusi ‘Beautiful AI’ Perfect Corp. Tawarkan Personalisasi Kecantikan dan Fesyen Berbasis AI','Pemanfaatan komputasi akselerasi dan platform AI dari NVIDIA ini bertujuan untuk memperkuat rangkaian solusi “Beautiful AI” dari Perfect Corp., guna menghadirkan pengalaman yang sangat dipersonalisasi dengan tingkat realisme, akurasi, dan kecepatan yang lebih tinggi.\r\n\r\nSolusi dari Perfect Corp. dirancang untuk menjembatani kesenjangan antara dunia digital dan fisik dalam industri kecantikan dan fesyen. Fitur seperti uji coba virtual dan rekomendasi berbasis AI bertujuan mengatasi ketidakpastian konsumen saat berbelanja secara online, yang pada akhirnya membantu para peritel mengurangi tingkat pengembalian barang dan meningkatkan konversi penjualan.');

/*Table structure for table `tbl_gallery` */

DROP TABLE IF EXISTS `tbl_gallery`;

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL AUTO_INCREMENT,
  `judul` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  KEY `id_gallery` (`id_gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_gallery` */

insert  into `tbl_gallery`(`id_gallery`,`judul`,`foto`) values 
(2,'Liburan Pantai','galery1.jpg'),
(3,'Liburan Pantai 2','galery2.jpg'),
(4,'Diner ','galery3.jpg'),
(5,'Kerja ','galery4.jpg'),
(6,'liburan Curug','wisata2.jpg'),
(7,'Mendaki','mendaki.jpg');

/*Table structure for table `tbl_pesan` */

DROP TABLE IF EXISTS `tbl_pesan`;

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_pesan` */

insert  into `tbl_pesan`(`id_pesan`,`nama`,`jenis_kelamin`,`email`,`no_hp`,`pesan`) values 
(4,'Sianida','perempuan','sianida.12@gmail.com','08123456','bolehkan saya bekerja sama dengan km terkait projek ilmiah tentang HTML klw misalkan bisa hubungi no saya yah '),
(5,'Wawan Ciple','laki-laki','wawan223@gmail.com','0822546987','Saran saya untuk webnya itu bagus cuman harus di tingkatkan lagi belajarnya banyak-banyakin ikut pelatihan dan seminar agar tetap terasah ?'),
(6,'Surti Surtini','perempuan','surtini569@yahoo.com','085199634568','Senang bisa bekerja sama dengan anda terkait projek tugas yang kita buat. semangat dan terus belajar bersama');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`username`,`password`) values 
('admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

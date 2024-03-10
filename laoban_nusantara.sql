/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - laoban_nusantara
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laoban_nusantara` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `laoban_nusantara`;

/*Table structure for table `cabang` */

DROP TABLE IF EXISTS `cabang`;

CREATE TABLE `cabang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL COMMENT 'nama file photo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `cabang` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL COMMENT 'nama file photo',
  `tipe_makanan` int(10) DEFAULT NULL COMMENT '1 : makanan berat, 2 : snack, 3 : dimsum, 4 : hot drink, 5 : cold drink, 6 : si bikin seger',
  `favorit` smallint(1) DEFAULT NULL COMMENT '1 : favorit',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`name`,`description`,`photo`,`tipe_makanan`,`favorit`) values 
(1,'Nasi Lemak','Nasi dengan rempah santan dengan ayam ungkep bumbu dikombinasikan dengan kacang teri yang memanjakan lidah kalian. Sambelnya juga mantap.\r\n','NasiLemakPotrait.jpg',1,NULL),
(2,'Nasi Mala','Nasi putih dengan rempah mala sechuan yang rasanya pedas asin gurih. Pecinta pedas? Wajib cobain!','NasiMalaSechuanPotrait.jpg',1,1),
(3,'Nasi Hainan','Nasi berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam yang disiram bumbu coklat yang muantab.','NasiHainanPotrait.jpg',1,1),
(4,'Nasi Jasio','Nasi berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu merah yang tebel dan juicy!','NasiJasioPotrait.jpg',1,0),
(5,'Nasi Salted Egg','Nasi putih dengan ayam bumbu telor asin yang siap memanjakan lidah + telor sunny side up juga loh!','NasiSaltedEggPotrait.jpg',1,1),
(6,'Mie Laksa','Mie dengan kaldu seafood gurih dilengkapi dengan bakso sea food, udang, dan telor yang jadi favorit kaum wanita, must try!!','MieLaksaPotrait.jpg',1,1),
(7,'Mie Hainan','Mie berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu coklat yang muantab!','MieHainanPotrait.jpg',1,0),
(8,'Mie Jasio','Mie berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu merah yang tebel dan juicy!','MieAyamJasioPotrait.jpg',1,NULL),
(9,'Bubur Laoban','Bubur Special Laoban adalah bubur dengan cita rasa kaldu ayam istimewa yang lezat.','BuburLaobanPotrait.jpg',1,1),
(10,'Butter Kaya Toast','Favorit semua orang karena roti dan selai kayanya home made, harus cobain deh 1x seumur hidup!','KayaButterToastPotrait.jpg',2,1),
(11,'Choco Toast','Solusi para kaum suka badmood!','ChocoToastPotrait.jpg',2,1),
(12,'Cheesy Toast','Ya jelas isinya selai keju kalau selai coklat namanya choco toast.','CheesyToastPotrait.jpg',2,NULL),
(13,'Peanut Toast','Pakai selai kacang kalau dikacangin itu kamu.','PeanutToastPotrait.jpg',2,NULL),
(14,'Telur 1/2 matang','Lezat, sehat dan bergiji apalagi dicocol kaya toast mantul!','Telur1_2MatangPotrait.jpg',2,NULL),
(15,'Pisang Goreng Wijen','Pisang goreng sepesial laoban pake wijen.','PisangGorengWijenPotrait.jpg',2,1),
(16,'Siomay Ayam','Siomay lezat berisi daging ayam yang lembut dan gurih.','SiomayAyamPotrait.jpg',3,1),
(17,'Siomay Volcano','Siomay untuk pecinta pedas! pedasnya bikin nampol !','SiomayVolcanoPotrait.jpg',3,1),
(18,'Ceker','Ceker ayam dengan bumbu gurih manis tentunya bikin nagih!','CekerPotrait.jpg',3,NULL),
(19,'Pao Pasir Emas','Camilan kukus pao isian telor asin tapi manis!','BakpaoPasirEmasPotrait.jpg',3,1),
(20,'Pao Durian','Pao dengan tekstur yang lembut berisi lumeran durian yang lezatt.','BakpaoDurianPotrait.jpg',3,NULL),
(21,'Ngohiong','Jajanan olahan ayam dengan perpaduan 5 bumbu rempah rempah khas cina.','NgohiongPotrait.jpg',3,NULL),
(22,'Lumpia','Gorengan istimewa berisi sayuran dan daging yang gurih. Favorit semua orang!','LumpiaGorengPotrait.jpg',3,NULL),
(23,'Kulit Tahu','Lapisan kulit tahu yang renyah dengan isian daging ayam yang gurih.','KulitGorengPotrait.jpg',3,1),
(24,'Mantau','Roti khas tiongkok yang digoreng dengan Zuzu kental maniez.','MantauPotrait1.jpg',3,NULL),
(25,'Kaki Naga','Bukan kakinya naga beneran ini Olahan daging ayam yang digoreng.','KakiNagaPotrait.jpg',3,1),
(26,'Gyoza','Gyoza, hidangan Jepang yg digoreng! Mirip pangsit goreng isi ayam sayur.','KakiNagaPotrait.jpg',3,NULL),
(27,'Kopi Laoban','Kopi blend robusta arabica yg pas! Sruput nendang!','KopiLaoban.jpg',4,1),
(28,'Kopi Susu Laoban','Rasa kekayaan kopi dan susu kental manis yang menghangatkan.','KopiSusuLaoban.jpg',4,1),
(29,'Teh Laoban','Teh asli malaysia dengan aroma yang menenangkan dan menghangatkan.','TehLaoban.jpg',4,1),
(30,'Teh Tarik','Minuman teh yang ditarik dengan susu yang menghangatkan.','TehTarik.jpg',4,1),
(31,'Coklat Butter','Perpaduan lezat antara coklat creamy dan butter yang tentunya pas dilidah. Para pecinta coklat wajib coba sih!','CoklatButter.jpg',4,NULL),
(32,'Kopi Butter','Sensasi kaya rasa kopi susu dengan sentuhan lembut butter yang creamy.','KopiButter.jpg',4,1),
(33,'Kopi Jahe','Perpaduan kopi dan jahe yang hangat dan menggugah selera para pecinta kehangatan.','KopiJahe.jpg',4,NULL),
(34,'Milo Thailand','Milo hangat creamy dengan taburan bubuk milo mirip milo dino di thailand.','MiloThailand.jpg',4,1),
(35,'Kopi Rhum','Kopi Hitam blend dicampur sirup Rhum!','KopiRhumPotrait.jpg',4,NULL),
(36,'Kopi Telor Vietnam','Minuman kopi tradisional dengan foam telur lembut yang creamy. Laoban\'s Signature!','KopiTelurVeitnam.jpg',4,NULL),
(37,'Es Kopi Laoban','Kenikmatan ngopi yang segar, meningkatkan semangat dan kesegaran tubuh.','EsKopiLaoban.jpg',5,1),
(38,'Es Kopi Susu Laoban','Kesegaran Kopi Susu ala laoban yang memikat.','EsKopiSusu.jpg',5,1),
(39,'Es Teh Laoban','Kenikmatan teh khas Laoban yang dingin dan nyegerin.','EsTehLaoban.jpg',5,1),
(40,'Es Teh Tarik','Favorit semua orang! teh ditarik dengan susu yang pas menyegarkan!','EsTehTarik.jpg',5,1),
(41,'Es Kopi Rhum','Kopi blend pake sirup Rhum! ini halal ya...','EsKopiRhumPotrait.jpg',5,NULL),
(42,'Es Milo Thailand','Milo tapi lebih creamy dikasi bubuk milo lagi. Mirip milo dino yg di Thailand','EsMilo.jpg',5,1),
(43,'Es Burung Dara','Zeger tanpa susu dan tanpa kopi. Bersoda dan manis yg bikin fresh hari-harimu','EsBurungDara.jpg',5,1),
(44,'Es Coklat Laoban','Es Coklat rahasia dari Uncle Osh! mirip lah sama yg di cafe2 mendunia.','EsCoklatLaoban.jpg',5,NULL),
(45,'Es Sumo','Perpaduan pas antara susu dan sirup mocha yg bikin zeger\r\n','EsSumo.jpg',5,NULL),
(46,'Air Mineral','Air mineral adalah air alami yang kaya mineral penting untuk kesehatan.',NULL,5,NULL),
(47,'Es ABCD','Es nya Upin Ipin, singkatan dari Ais Batu Campur Deh. Isian kacang merah, nangka, es krim vanilla, dan jagung Maniez... ','EsABCD.jpg',6,1),
(48,'Es Coklat Uncle','Perpaduan es krim coklat dan toping semangka, choco ball, dan kacang crumble.','EsCoklatFountain.jpg',6,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

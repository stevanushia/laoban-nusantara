/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - laoban_nusantara
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`name`,`description`,`photo`,`tipe_makanan`) values 
(1,'Nasi Lemak','Nasi dengan rempah santan dengan ayam ukep bumbu dikombinasikan dengan kacang teri yang memanjakan lidah kalian. Sambelnya juga mantap.\r\n',NULL,1),
(2,'Nasi Mala','Nasi putih dengan rempah mala sechuan pedas asin gurih. Pecinta pedas? Cobain',NULL,1),
(3,'Nasi Hainan','Nasi berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam yang disiram bumbu coklat yang muantab.',NULL,1),
(4,'Nasi Jasio','Nasi berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu merah yang tebel dan juicy!',NULL,1),
(5,'Nasi Salted Egg','Nasi putih dengan ayam bumbu telor asin yang siap memanjakan lidah + telor sunny side up juga loh!',NULL,1),
(6,'Mie Laksa','Mie dengan kaldu seafood gurih dilengkapi dengan bakso sea food, udang, dan telor yang jadi favorit kaum wanita, must try!!',NULL,1),
(7,'Mie Hainan','Mie berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu coklat yang muantab!',NULL,1),
(8,'Mie Jasio','Mie berbumbu putih rahasia khas laoban yang pastinya sedap dicampur ayam jasio bumbu merah yang tebel dan juicy!',NULL,1),
(9,'Bubur Laoban','Bubur Special Laoban adalah bubur dengan cita rasa kaldu ayam istimewa yang lezat.',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

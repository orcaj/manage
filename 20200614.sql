/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - virtu817_submanage
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`virtu817_submanage` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `virtu817_submanage`;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subsidiary_id` int(11) NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`subsidiary_id`,`username`,`address`,`phone_number`,`number`,`city`,`cpf_cnpj`,`created_at`,`updated_at`) values 
(1,2,'Carter Anderson DVM','12725 Allen Court\nGutkowskimouth, IA 53030-0477','+6246147014834',44555,'Chayamouth','95898566089456','2020-06-13 22:47:29','2020-06-13 22:47:29'),
(2,2,'Stanley Barrows','238 Shanahan Corners\nRachelstad, MN 46539','+8168034039696',10724,'Robertsview','93895791903078','2020-06-13 22:47:29','2020-06-13 22:47:29'),
(3,2,'Prof. Lea Swaniawski','31113 Emerald Summit\nHoegerfort, MN 93108-7234','+1977572152097',53750,'Pascaleberg','14891632819173','2020-06-13 22:47:29','2020-06-13 22:47:29'),
(4,3,'Harrison Hauck PhD','716 Kade Creek Suite 930\nSouth Martinaborough, MA 83848-1497','+8118360182945',86761,'East Haskellview','96478708375651','2020-06-13 22:47:29','2020-06-13 22:47:29'),
(5,2,'Palma Douglas','86802 Oleta View\nPort Elroy, DE 78738','+7134318887969',31612,'Leannchester','19976971873552','2020-06-13 22:47:29','2020-06-13 22:47:29');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `images` */

insert  into `images`(`id`,`product_id`,`photo`,`created_at`,`updated_at`) values 
(1,3,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(2,2,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(3,4,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(4,5,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(5,4,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(6,5,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(7,5,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(8,3,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(9,2,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(10,4,'app-assets/images/avatar.jpg','2020-06-13 22:47:30','2020-06-13 22:47:30');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(285,'2014_10_12_000000_create_users_table',1),
(286,'2014_10_12_100000_create_password_resets_table',1),
(287,'2019_08_19_000000_create_failed_jobs_table',1),
(288,'2020_06_06_170351_create_customers_table',1),
(289,'2020_06_06_170409_create_products_table',1),
(290,'2020_06_13_140344_create_images_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `subsidiary_id` int(11) NOT NULL,
  `equipament` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `optional` tinyint(1) NOT NULL,
  `numeric_digits` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`customer_id`,`subsidiary_id`,`equipament`,`brand`,`serial_number`,`defect`,`description`,`observations`,`optional`,`numeric_digits`,`store`,`status`,`model`,`purchase_date`,`created_at`,`updated_at`) values 
(1,4,2,'et','voluptas','772941','Illum inventore molestiae dolorum delectus est vitae. Eligendi explicabo autem quo excepturi ipsum officia. Repellat laudantium quia velit aut dolores ut.','Cumque velit nobis sapiente perspiciatis enim. Et molestiae explicabo sunt nostrum suscipit ratione. Et doloribus maiores qui aspernatur provident. Perferendis quos voluptatem aliquid nulla.','Ea sequi qui laudantium cum iusto quos iste. Cum placeat et tenetur voluptatibus voluptatem dolor laboriosam. Ipsum voluptatem autem atque eius voluptatum nihil consequatur.',0,'58130709','qui','pre-budget','eos','2003-05-17','2020-06-13 22:47:29','2020-06-13 22:47:29'),
(2,5,3,'neque','eum','18','Quae in sed facilis illum consequuntur vel rerum. Odio ipsa totam consequatur. Quae voluptas mollitia hic ut. Numquam natus vel nihil eaque aliquam.','Non inventore eum omnis quo. Consequatur quis excepturi doloribus dolores. Itaque nihil at aut quae distinctio aut qui sapiente. Dolore qui ut perferendis placeat.','Quam sunt sed earum officia. Voluptatibus repellat soluta in nam. Reiciendis quia dolorem incidunt sit est voluptatibus.',0,'15','perspiciatis','pre-budget','atque','1975-07-09','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(3,1,2,'sapiente','delectus','826','Blanditiis animi inventore et accusantium ab id repellendus. Alias laudantium ut sed minima. Architecto ratione temporibus amet.','Minima minima praesentium eaque rerum aperiam autem suscipit. Voluptatem veritatis animi expedita quia. Qui placeat omnis ducimus velit.','Error minima quos excepturi veniam qui cumque id. Libero tenetur et animi quisquam placeat ut. Doloribus qui placeat saepe dolorum. Similique iusto maiores et rem.',0,'779529188','quis','pre-budget','illo','1972-06-24','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(4,4,4,'et','accusamus','3688','Nihil earum dolore alias et asperiores veritatis aut. Repellendus saepe commodi qui excepturi. Quisquam qui incidunt deserunt ea optio repellendus est voluptatem.','Velit vitae ea placeat dignissimos. Perspiciatis praesentium animi consequatur earum at placeat. Aliquam unde vero est hic. Repudiandae rerum natus beatae repellendus harum suscipit.','Eum numquam soluta consequatur. Vitae aliquam quam unde quis. Sunt ad temporibus magni dolore.',0,'3142','repellat','pre-budget','voluptatum','2014-06-28','2020-06-13 22:47:30','2020-06-13 22:47:30'),
(5,4,3,'earum','facere','35','Veritatis est ipsam commodi laboriosam. Sit quam eos laborum eos ratione quisquam ut sed. Neque totam qui quam atque dolore. Voluptatem doloremque sint assumenda deserunt.','Pariatur delectus fuga exercitationem blanditiis quos. Nam qui dolorem amet quasi recusandae ut. Et officia est magni aut.','Ea laudantium maiores quidem. Molestiae impedit cum aspernatur. Amet inventore nihil accusamus debitis quis.',0,'1009901','ratione','pre-budget','deserunt','2016-10-25','2020-06-13 22:47:30','2020-06-13 22:47:30');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`role`,`address`,`phone`,`remember_token`,`created_at`,`updated_at`) values 
(1,'superadmin','admin@gmail.com',NULL,'$2y$10$oxjX05WA1IYq2kaKtXjA0OCGt5Tb0RdR2RnlifmLwfqpbODwIwgK2','superadmin',NULL,NULL,NULL,NULL,NULL),
(2,'owner1','owner1@gmail.com',NULL,'$2y$10$kkwbt4PP7z/WhidDkOvw0usTHDvgKmif9sombGd10.5vtk25qafB2','owner','431 Arno View Apt. 772\nNew Clint, IA 06210','(855) 910-3103',NULL,NULL,NULL),
(3,'owner2','owner2@gmail.com',NULL,'$2y$10$J6cRe7PeFzB/3qQrpIP/s.lR5v5l2/Q3xfxcFrZBoP5rnXHEilx3q','owner','8595 Blanda Spurs\nNew Summer, MI 71932-2126','(866) 495-7265',NULL,NULL,NULL),
(4,'owner3','owner3@gmail.com',NULL,'$2y$10$EQ8uDKFn33rv0/tH2FTvgOqBUtmyvHeXUu/FygWfnki6Lojet7IKW','owner','96800 Marks View\nDaughertychester, GA 50275','1-866-896-7731',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

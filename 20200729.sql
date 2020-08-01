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
  `uf` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`subsidiary_id`,`username`,`address`,`uf`,`phone_number`,`number`,`city`,`cpf_cnpj`,`created_at`,`updated_at`) values 
(1,2,'Rosetta Walter','1616 Schmeler Square\nPort Leo, AL 71648','uf','+9110520013485',93934,'Port Jerrod','78498345236649','2020-07-28 19:30:35','2020-07-28 19:30:35'),
(2,4,'Janice Runte DDS','1432 Hilpert Plaza Suite 389\nReeceshire, WI 92173-7341','uf','+7176649055350',87960,'South Turner','68053452253476','2020-07-28 19:30:35','2020-07-28 19:30:35'),
(3,2,'Prof. Modesta Stoltenberg','75602 Maybell Islands Suite 292\nKunzetown, KY 82082-5072','uf','+7519759146617',40404,'Tremblaybury','5392513822846','2020-07-28 19:30:35','2020-07-28 19:30:35'),
(4,2,'Dr. Yvonne Mertz','2760 Witting Views Apt. 549\nWest Anita, ID 32587-0585','uf','+2307743278303',87154,'Jovanyshire','53367795914553','2020-07-28 19:30:35','2020-07-28 19:30:35'),
(5,4,'Glennie Hayes','280 Reichel Bypass Apt. 766\nRunolfsdottirshire, CO 39777','uf','+9183152928818',66785,'West Oran','23328680416383','2020-07-28 19:30:35','2020-07-28 19:30:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `images` */

insert  into `images`(`id`,`product_id`,`photo`,`created_at`,`updated_at`) values 
(1,2,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(2,1,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(3,4,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(4,5,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(5,5,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(6,5,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(7,1,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(8,5,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(9,2,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(10,1,'app-assets/images/avatar.jpg','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(11,6,'upload/1595964784675.jpg','2020-07-28 19:33:04','2020-07-28 19:33:04');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2020_06_06_170351_create_customers_table',1),
(5,'2020_06_06_170409_create_products_table',1),
(6,'2020_06_13_140344_create_images_table',1);

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
  `sn` int(11) NOT NULL,
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
  `access` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`sn`,`customer_id`,`subsidiary_id`,`equipament`,`brand`,`serial_number`,`defect`,`description`,`observations`,`optional`,`numeric_digits`,`store`,`status`,`access`,`model`,`purchase_date`,`created_at`,`updated_at`) values 
(1,24200,4,3,'id','corrupti','165371','Est soluta ullam sunt ut perferendis. Error ratione quam nihil corrupti sapiente eligendi vel. Quidem sequi quam iure sed ducimus ipsum enim quisquam. Animi nesciunt quis voluptatem saepe.','Iusto et molestiae minus reiciendis nostrum veritatis. Amet qui vel vel itaque nesciunt. Aliquid numquam voluptas enim quaerat eaque quidem.','Incidunt a facilis nisi ipsam qui velit magni reiciendis. Delectus illo ipsa ut doloremque. Voluptates quaerat veniam quia quod nostrum iure.',0,'1608630','expedita','pre-budget','access','laudantium','1981-06-19','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(2,24200,3,3,'tempore','quasi','79606608','Nihil blanditiis eum natus rem explicabo. Aut labore asperiores aut sint. Est tenetur facere delectus nihil nostrum. Et iusto dignissimos enim autem.','Sed omnis consectetur est dignissimos. Qui labore et facilis quibusdam voluptatem est vitae. Et blanditiis id dolore omnis nostrum ab voluptas. Incidunt ipsum ipsa quo ut qui.','Sit beatae consectetur ducimus ea repellendus quo. Qui ea expedita quibusdam laudantium illo nihil. Sit id neque possimus magnam rem.',0,'1498790','esse','pre-budget','access','incidunt','2018-02-22','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(3,24200,5,3,'debitis','quas','272','Natus consequatur vitae dolorem quia. Velit commodi tempore sunt. Nihil blanditiis enim ex eius. Eum quidem ut in culpa consectetur iste rerum quia.','In iste aliquid error et qui quidem. Explicabo labore ratione animi architecto laborum. Iste minima nisi autem sapiente qui consectetur est magnam.','At labore minima iusto. Totam quo dolor eius fugiat distinctio velit. Cum corrupti aut quidem qui reiciendis eaque. Sit tempore odit explicabo id.',0,'92115','delectus','pre-budget','access','nihil','2018-04-14','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(4,24200,4,4,'eaque','unde','16313708','Autem non sed aperiam aut unde molestias. Dolorum non adipisci aperiam voluptatem earum autem. Nemo doloremque quae necessitatibus ab et ea.','Quidem odio est ipsum. Ea quam repellendus beatae et expedita quas. Aspernatur qui qui corporis voluptates molestiae.','Et reprehenderit ut accusamus ut ut et laboriosam. Pariatur neque qui error laboriosam sit voluptas. Saepe tenetur non molestiae illum dolores voluptas.',0,'2515','hic','pre-budget','access','est','1981-02-02','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(5,24200,3,2,'sed','quas','408640238','Alias inventore sed adipisci voluptates. Qui cum a eum et. Sit officiis et reprehenderit ipsum alias beatae provident. Et fugiat culpa sed beatae.','Aperiam minus voluptas tenetur autem qui aliquid quam. Enim voluptas quia vel tempore. Laborum animi totam voluptate totam similique adipisci. Facere sed aspernatur maiores cum sint perferendis.','Reprehenderit voluptatem excepturi totam architecto odit rem illo. Et quo eum nam nostrum rerum. Nam numquam aspernatur totam et rem debitis. Atque earum non dolorem aut assumenda fuga.',0,'37','cumque','pre-budget','access','non','1999-10-31','2020-07-28 19:30:36','2020-07-28 19:30:36'),
(6,24205,3,2,'asdf','asdf','asdf','asdf','asdfa','sdfasdf',0,'','','Aguardando Resposta','accesssdf','adsf','','2020-07-28 19:33:04','2020-07-28 19:37:02');

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
(1,'superadmin','admin@gmail.com',NULL,'$2y$10$HT9fjW4uYkKkoziN7BfSWO9H9pdeyKE1tHecbbsLiJHFhjerL1SLi','superadmin',NULL,NULL,NULL,NULL,NULL),
(2,'owner1','owner1@gmail.com',NULL,'$2y$10$jQVKH5GColJfjq3AwsBeluCuli/FWjxzHD9QvL18Vrlk.eA5f0/hG','owner','395 Maximus Ports\nJosefaville, NV 92321','877.708.8075',NULL,NULL,NULL),
(3,'owner2','owner2@gmail.com',NULL,'$2y$10$ZdkoUJEQz7TdZi1nsFaLaefhc3k5u24f050RXCFJ3jXwl4WyjDTyO','owner','3446 Bayer Heights\nJamaalville, WY 98258','888-764-0451',NULL,NULL,NULL),
(4,'owner3','owner3@gmail.com',NULL,'$2y$10$GOqlxuAGVhYZ6DVty7wEW.3K5yz0/2GezyqVLUD423jSBp9Fofogm','owner','39555 Alexie Drive Suite 410\nTellyborough, IN 50586-7664','877.328.7030',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

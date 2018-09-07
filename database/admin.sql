-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-05-31 23:30:13'),(2,0,10,'系统管理','fa-tasks',NULL,NULL,'2018-09-07 05:01:13'),(3,2,11,'管理员','fa-users','auth/users',NULL,'2018-09-07 05:01:13'),(4,2,12,'角色','fa-user','auth/roles',NULL,'2018-09-07 05:01:13'),(5,2,13,'权限','fa-ban','auth/permissions',NULL,'2018-09-07 05:01:13'),(6,2,14,'菜单','fa-bars','auth/menu',NULL,'2018-09-07 05:01:13'),(7,2,15,'操作日志','fa-history','auth/logs',NULL,'2018-09-07 05:01:13'),(8,0,2,'用户管理','fa-users','/users','2018-05-31 23:54:14','2018-05-31 23:55:10'),(9,0,4,'商品管理','fa-cubes','/products','2018-06-01 00:28:19','2018-09-05 03:15:02'),(10,0,8,'订单管理','fa-rmb','/orders','2018-06-05 02:45:54','2018-09-07 05:01:13'),(11,0,9,'优惠券管理','fa-tags','/coupon_codes','2018-06-05 07:33:54','2018-09-07 05:01:13'),(12,0,3,'类目管理','fa-bars','/categories','2018-09-05 03:14:54','2018-09-05 03:15:02'),(13,9,6,'众筹商品','fa-flag-checkered','/crowdfunding_products','2018-09-05 04:41:28','2018-09-05 04:42:33'),(14,9,5,'普通商品','fa-cubes','/products','2018-09-05 04:41:49','2018-09-05 04:41:54'),(15,9,7,'秒杀商品','fa-bolt','/seckill_products','2018-09-07 05:01:10','2018-09-07 05:01:13');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2018-05-31 23:57:45','2018-05-31 23:58:55'),(7,'商品管理','products','','/products*','2018-06-05 21:07:20','2018-06-05 21:07:20'),(8,'订单管理','orders','','/orders*','2018-06-05 21:07:36','2018-06-05 21:07:36'),(9,'优惠券管理','coupon_codes','','/coupon_codes*','2018-06-05 21:07:52','2018-06-05 21:07:52');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-05-31 23:27:29','2018-05-31 23:27:29'),(2,'运营','operator','2018-06-01 00:13:12','2018-06-01 00:13:12');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$OznUPzz7OoiDZ/l4/qS1HeUULZUt20z7gxnHD8t5SIVHJK/kgINES','Administrator',NULL,'T0Z0y7MHmNNjw0r8NvnOmOLL4tKg4GGUziYtjYOoabrzhuTLs1JWEO1QRjuZ','2018-05-31 23:27:29','2018-05-31 23:27:29'),(2,'operator','$2y$10$YcmXJVEVHFAERGt14fjM6.IHDKdUEuNRhRjuYAZ39qoRBD9g29I8q','运营',NULL,'miIX5uwGont5AjaGsu84n2iMnzJLONPmYpmtb0Qhe7dgvgFgiJp52VpMxNSO','2018-06-01 00:13:51','2018-06-01 00:13:51');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-06 21:03:10

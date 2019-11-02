-- MySQL dump 10.13  Distrib 8.0.17, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-shop-6
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,NULL,'2019-10-01 01:55:55'),(2,0,7,'系统管理','fa-tasks',NULL,NULL,NULL,'2019-11-02 06:40:33'),(3,2,8,'管理员','fa-users','auth/users',NULL,NULL,'2019-11-02 06:40:33'),(4,2,9,'角色','fa-user','auth/roles',NULL,NULL,'2019-11-02 06:40:33'),(5,2,10,'权限','fa-ban','auth/permissions',NULL,NULL,'2019-11-02 06:40:33'),(6,2,11,'菜单','fa-bars','auth/menu',NULL,NULL,'2019-11-02 06:40:33'),(7,2,12,'操作日志','fa-history','auth/logs',NULL,NULL,'2019-11-02 06:40:33'),(8,0,3,'用户管理','fa-users','/users',NULL,'2019-10-01 02:02:46','2019-11-02 06:40:33'),(9,0,4,'商品管理','fa-cubes','/products',NULL,'2019-10-01 02:14:16','2019-11-02 06:40:33'),(10,0,5,'订单管理','fa-rmb','/orders',NULL,'2019-10-05 08:59:12','2019-11-02 06:40:33'),(11,0,6,'优惠券管理','fa-tags','/coupon_codes',NULL,'2019-10-05 09:37:43','2019-11-02 06:40:33'),(12,0,2,'类目管理','fa-bars','/categories',NULL,'2019-11-02 06:40:00','2019-11-02 06:40:33');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2019-10-01 02:09:15','2019-10-01 02:09:15'),(7,'商品管理','products','','/products*','2019-10-05 10:02:17','2019-10-05 10:02:17'),(8,'优惠券管理','coupon_codes','','/coupon_codes*','2019-10-05 10:02:39','2019-10-05 10:02:39'),(9,'订单管理','orders','','/orders*','2019-10-05 10:02:51','2019-10-05 10:02:51');
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
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2019-10-01 01:46:41','2019-10-01 01:46:41'),(2,'运营','operation','2019-10-01 02:09:44','2019-10-01 02:09:44');
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
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$U/YRWLT396VmKRsJvDDBeu3eb4TKC7am3pyMlYoWHZJBaepgJ9TPe','Administrator',NULL,'lbrM3JAwVyr25RW3mejPCaYAkrE2OFRDwk7uzgl20hYe3iE4tCC9wbGar9YT','2019-10-01 01:46:41','2019-10-01 01:46:41'),(2,'operator','$2y$10$BPsNXq9g26Rx7FWss9./h.SO1dAikVzXqOxj/N.Y24/laUiR/nSrq','运营',NULL,'p0IAQptnrA4CrtBep0MG9EOqQimlrg0xEqcEftfDjDfNCucRXao4ln7QvoOK','2019-10-01 02:10:18','2019-10-01 02:10:18');
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

-- Dump completed on 2019-11-02  6:42:58

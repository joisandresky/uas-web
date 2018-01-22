/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : logistra

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2018-01-22 11:10:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_customers
-- ----------------------------
DROP TABLE IF EXISTS `data_customers`;
CREATE TABLE `data_customers` (
  `id_customer` varchar(15) NOT NULL,
  `nama_customer` varchar(100) DEFAULT NULL,
  `alamat_customer` text,
  `no_telp` varchar(12) DEFAULT NULL,
  `no_fax` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_customers
-- ----------------------------
INSERT INTO `data_customers` VALUES ('CUS-1', 'PT. NESTLE INDONESIA', 'Jl. Cikarang no.2 Bekasi', '021-573783', '021-573790', 'nestle@nestle.co.id');

-- ----------------------------
-- Table structure for data_jenis_muatan
-- ----------------------------
DROP TABLE IF EXISTS `data_jenis_muatan`;
CREATE TABLE `data_jenis_muatan` (
  `id_jenis_muatan` varchar(15) NOT NULL,
  `jenis_muatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_muatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_jenis_muatan
-- ----------------------------
INSERT INTO `data_jenis_muatan` VALUES ('MT-1', 'CARGO');

-- ----------------------------
-- Table structure for data_jenis_truk
-- ----------------------------
DROP TABLE IF EXISTS `data_jenis_truk`;
CREATE TABLE `data_jenis_truk` (
  `id_jenis_truk` varchar(15) NOT NULL,
  `jenis_truk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_truk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_jenis_truk
-- ----------------------------
INSERT INTO `data_jenis_truk` VALUES ('T-CT', 'Container');
INSERT INTO `data_jenis_truk` VALUES ('T-FS', 'Fuso');
INSERT INTO `data_jenis_truk` VALUES ('T-JB', 'Jumbo');
INSERT INTO `data_jenis_truk` VALUES ('T-MD', 'Medium');
INSERT INTO `data_jenis_truk` VALUES ('T-SCT', 'Semi Container');
INSERT INTO `data_jenis_truk` VALUES ('T-SM', 'Small');
INSERT INTO `data_jenis_truk` VALUES ('T-TR', 'Tronton');

-- ----------------------------
-- Table structure for data_rute
-- ----------------------------
DROP TABLE IF EXISTS `data_rute`;
CREATE TABLE `data_rute` (
  `id_rute` varchar(15) NOT NULL,
  `origin` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `deskripsi_rute` varchar(100) DEFAULT NULL,
  `jumlah_tagihan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_rute
-- ----------------------------
INSERT INTO `data_rute` VALUES ('RT-1', 'Cikarang', 'Bandung', 'Cikarang - Bandung', '550000');

-- ----------------------------
-- Table structure for data_supir
-- ----------------------------
DROP TABLE IF EXISTS `data_supir`;
CREATE TABLE `data_supir` (
  `id_supir` varchar(15) NOT NULL,
  `nama_supir` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_plat_truk` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_supir`),
  KEY `fk_truk` (`no_plat_truk`),
  CONSTRAINT `fk_truk` FOREIGN KEY (`no_plat_truk`) REFERENCES `data_truck` (`no_plat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_supir
-- ----------------------------
INSERT INTO `data_supir` VALUES ('SP-1', 'Sarjono', 'Pria', 'Surabaya', '1978-03-08', 'L8112JU');
INSERT INTO `data_supir` VALUES ('SP-2', 'Sutarji', 'Pria', 'Banyuwangi', '1980-01-10', 'H8712SU');

-- ----------------------------
-- Table structure for data_truck
-- ----------------------------
DROP TABLE IF EXISTS `data_truck`;
CREATE TABLE `data_truck` (
  `no_plat` varchar(15) NOT NULL,
  `merk_truk` varchar(50) DEFAULT NULL,
  `id_jenis_truk` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no_plat`),
  KEY `fk_jenis_truk` (`id_jenis_truk`),
  CONSTRAINT `fk_jenis_truk` FOREIGN KEY (`id_jenis_truk`) REFERENCES `data_jenis_truk` (`id_jenis_truk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_truck
-- ----------------------------
INSERT INTO `data_truck` VALUES ('H8712SU', 'Hino', 'T-JB');
INSERT INTO `data_truck` VALUES ('L8112JU', 'Hino', 'T-JB');
INSERT INTO `data_truck` VALUES ('L8221EOP', 'Mercedez', 'T-JB');

-- ----------------------------
-- Table structure for data_ujs
-- ----------------------------
DROP TABLE IF EXISTS `data_ujs`;
CREATE TABLE `data_ujs` (
  `id_ujs` varchar(15) NOT NULL,
  `id_rute` varchar(15) DEFAULT NULL,
  `uang_jalan` int(11) DEFAULT NULL,
  `id_jenis_truk` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_ujs`),
  KEY `fk_ujs_rute` (`id_rute`),
  KEY `fk_jenis_truk_ujs` (`id_jenis_truk`),
  CONSTRAINT `fk_jenis_truk_ujs` FOREIGN KEY (`id_jenis_truk`) REFERENCES `data_jenis_truk` (`id_jenis_truk`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ujs_rute` FOREIGN KEY (`id_rute`) REFERENCES `data_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_ujs
-- ----------------------------
INSERT INTO `data_ujs` VALUES ('UJS-1', 'RT-1', '350000', 'T-FS');

-- ----------------------------
-- Table structure for data_users
-- ----------------------------
DROP TABLE IF EXISTS `data_users`;
CREATE TABLE `data_users` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_users
-- ----------------------------
INSERT INTO `data_users` VALUES ('ADM-001', 'jois', '123456', 'Jois Andresky', 'administrator');

-- ----------------------------
-- Table structure for driver_assignment
-- ----------------------------
DROP TABLE IF EXISTS `driver_assignment`;
CREATE TABLE `driver_assignment` (
  `no_assignment` int(11) NOT NULL AUTO_INCREMENT,
  `id_work_order` varchar(30) DEFAULT NULL,
  `id_rute` varchar(15) DEFAULT NULL,
  `id_ujs` varchar(15) DEFAULT NULL,
  `id_supir` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no_assignment`),
  KEY `fk_wo_da` (`id_work_order`),
  KEY `fk_supir_da` (`id_supir`),
  KEY `fk_ujs_da` (`id_ujs`),
  KEY `fk_rute_da` (`id_rute`),
  CONSTRAINT `fk_rute_da` FOREIGN KEY (`id_rute`) REFERENCES `data_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_supir_da` FOREIGN KEY (`id_supir`) REFERENCES `data_supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ujs_da` FOREIGN KEY (`id_ujs`) REFERENCES `data_ujs` (`id_ujs`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_wo_da` FOREIGN KEY (`id_work_order`) REFERENCES `work_orders` (`id_work_order`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of driver_assignment
-- ----------------------------

-- ----------------------------
-- Table structure for sales_orders
-- ----------------------------
DROP TABLE IF EXISTS `sales_orders`;
CREATE TABLE `sales_orders` (
  `id_sales_order` varchar(30) NOT NULL,
  `id_customer` varchar(15) DEFAULT NULL,
  `id_rute` varchar(15) DEFAULT NULL,
  `no_shipment` int(15) DEFAULT NULL,
  `id_jenis_muatan` varchar(15) DEFAULT NULL,
  `status_so` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_sales_order`),
  KEY `fk_customer` (`id_customer`),
  KEY `fk_rute_so` (`id_rute`),
  KEY `fk_jenis_muatan` (`id_jenis_muatan`),
  CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `data_customers` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_rute_so` FOREIGN KEY (`id_rute`) REFERENCES `data_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_orders
-- ----------------------------
INSERT INTO `sales_orders` VALUES ('SO-1', 'CUS-1', 'RT-1', '2147483647', 'Process to WO', 'MT-1');
INSERT INTO `sales_orders` VALUES ('SO-2', 'CUS-1', 'RT-1', '1231232121', 'MT-1', 'Process to');
INSERT INTO `sales_orders` VALUES ('SO-3', 'CUS-1', 'RT-1', '1236172637', 'MT-1', 'Process WO');

-- ----------------------------
-- Table structure for work_orders
-- ----------------------------
DROP TABLE IF EXISTS `work_orders`;
CREATE TABLE `work_orders` (
  `id_work_order` varchar(30) NOT NULL,
  `id_sales_order` varchar(30) DEFAULT NULL,
  `no_sbm` varchar(15) DEFAULT NULL,
  `uang_bongkar_muat` int(11) DEFAULT NULL,
  `status_wo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_work_order`),
  KEY `fk_so` (`id_sales_order`),
  CONSTRAINT `fk_so` FOREIGN KEY (`id_sales_order`) REFERENCES `sales_orders` (`id_sales_order`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of work_orders
-- ----------------------------

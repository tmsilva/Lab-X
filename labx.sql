/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : labx

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-09-09 02:40:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for produto
-- ----------------------------
DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `id_produto` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `codigo_barras` varchar(255) DEFAULT NULL,
  `quantidade` double(10,0) DEFAULT NULL,
  `valor` double(10,0) DEFAULT NULL,
  `validade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

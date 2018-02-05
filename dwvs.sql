/*
Navicat MySQL Data Transfer

Source Server         : demo
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dwvs

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-02-05 20:55:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `Id` int(11) NOT NULL,
  `rest` varchar(255) DEFAULT NULL,
  `own` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('1', '1', '666');

-- ----------------------------
-- Table structure for caffaine
-- ----------------------------
DROP TABLE IF EXISTS `caffaine`;
CREATE TABLE `caffaine` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT,
  `itemcode` varchar(15) DEFAULT NULL,
  `itemdisplay` varchar(500) DEFAULT NULL,
  `itemname` varchar(50) DEFAULT NULL,
  `itemdesc` varchar(1000) DEFAULT NULL,
  `categ` varchar(200) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of caffaine
-- ----------------------------
INSERT INTO `caffaine` VALUES ('1', 'XVWA0987', 'img/XVWA0987.png', 'Affogato', 'An affogato (Italian, \"drowned\") is a coffee-based beverage. It usually takes the form of a scoop of vanilla gelato or ice cream topped with a shot of hot espresso. Some variations also include a shot of Amaretto or other liqueur.', 'Espresso,Vanilla Gelato', '4.69');
INSERT INTO `caffaine` VALUES ('2', 'XVWA3876', 'img/XVWA3876.png', 'Americano', 'An affogato (Italian, \"drowned\") is a coffee-based beverage. It usually takes the form of a scoop of vanilla gelato or ice cream topped with a shot of hot espresso. Some variations also include a shot of Amaretto or other liqueur.', 'Espresso', '5');
INSERT INTO `caffaine` VALUES ('3', 'XVWA4589', 'img/XVWA4589.png', 'Bicerin', 'An Americano is an espresso-based drink designed to resemble coffee brewed in a drip filter, considered popular in the United States of America. This drink consists of a single or double-shot of espresso combined with up to four or five ounces of hot water in a two-demitasse cup.', 'Espresso, Chocolate, Milk', '8.9');
INSERT INTO `caffaine` VALUES ('4', 'XVWA7619', 'img/XVWA7619.png', 'Café Bombón', 'Cafe Bombon was made popular in Valencia, Spain, and spread gradually to the rest of the country. It might have been re-created and modified to suit European tastebuds as in many parts of Asia such as Malaysia, Thailand and Singapore the same recipe for coffee which is called \"Kopi Susu Panas\" (Malaysia) or \"Kafe Ron\" (Thailand) has already been around for decades and is very popular in \"mamak\" stalls or \"kopitiams\" in Malaysia.', 'Espresso, Sweetened Milk', '7.08');
INSERT INTO `caffaine` VALUES ('5', 'XVWA5642', 'img/XVWA5642.png', 'Café au lait', 'Café au lait is a French coffee drink. In Europe, \"café au lait\" stems from the same continental tradition as \"caffè latte\" in Italy, \"café con leche\" in Spain, \"kawa biała\" (\"white coffee\") in Poland, \"Milchkaffee\" in Germany, \"Grosser Brauner\" in Austria, \"koffie verkeerd\" in Netherlands, and \"café com leite\" in Portugal, simply \"coffee with milk\".', 'Coffee, Milk', '10.15');
INSERT INTO `caffaine` VALUES ('6', 'XVWA7569', 'img/XVWA7569.png', 'Caffé corretto', 'Caffè corretto is an Italian beverage that consists of a shot of espresso with a shot of liquor, usually grappa, and sometimes sambuca or brandy. It is also known (outside of Italy) as an \"espresso corretto\". It is ordered as \"un caffè corretto alla grappa,\" \"[…] corretto alla sambuca,\" or \"[…] corretto al cognac,\" depending on the desired liquor.', 'Espresso, Liquor Shot', '6.01');
INSERT INTO `caffaine` VALUES ('7', 'XVWA3671', 'img/XVWA3671.png', 'Caffé latte', 'In Italy, latte means milk. What in English-speaking countries is now called a latte is shorthand for \"caffelatte\" or \"caffellatte\" (\"caffè e latte\"). The Italian form means \"coffee and milk\", similar to the French café au lait, the Spanish café con leche and the Portuguese café com leite. Other drinks commonly found in shops serving caffè lattes are cappuccinos and espressos. Ordering a \"latte\" in Italy will get the customer a glass of hot or cold milk. Caffè latte is a coffee-based drink made primarily from espresso and steamed milk. It consists of one-third espresso, two-thirds heated milk and about 1cm of foam. Depending on the skill of the barista, the foam can be poured in such a way to create a picture. Common pictures that appear in lattes are love hearts and ferns. Latte art is an interesting topic in itself.', 'Espresso, Milk', '6.04');
INSERT INTO `caffaine` VALUES ('8', 'XVWA1672', 'img/XVWA1672.png', 'Café mélange', 'In Italy, latte means milk. What in English-speaking countries is now called a latte is shorthand for \"caffelatte\" or \"caffellatte\" (\"caffè e latte\"). The Italian form means \"coffee and milk\", similar to the French café au lait, the Spanish café con leche and the Portuguese café com leite. Other drinks commonly found in shops serving caffè lattes are cappuccinos and espressos. Ordering a \"latte\" in Italy will get the customer a glass of hot or cold milk. Caffè latte is a coffee-based drink made primarily from espresso and steamed milk. It consists of one-third espresso, two-thirds heated milk and about 1cm of foam. Depending on the skill of the barista, the foam can be poured in such a way to create a picture. Common pictures that appear in lattes are love hearts and ferns. Latte art is an interesting topic in itself.', 'White Creame', '3.06');
INSERT INTO `caffaine` VALUES ('9', 'XVWA4276', 'img/XVWA4276.png', 'Cafe mocha', 'Café mélange is a black coffee mixed (french \"mélange\") or covered with whipped cream, very popular in Austria, Switzerland and the Netherlands.', 'Latte, Chocolate', '4.05');
INSERT INTO `caffaine` VALUES ('10', 'XVWA9680', 'img/XVWA9680.png', 'Cappuccino', 'Caffè Mocha or café mocha, is an American invention and a variant of a caffe latte, inspired by the Turin coffee beverage Bicerin. The term \"caffe mocha\" is not used in Italy nor in France, where it is referred to as a \"mocha latte\". Like a caffe latte, it is typically one third espresso and two thirds steamed milk, but a portion of chocolate is added, typically in the form of sweet cocoa powder, although many varieties use chocolate syrup. Mochas can contain dark or milk chocolate.', 'Espresso, Milk', '3.06');

-- ----------------------------
-- Table structure for dwvs_admin_message
-- ----------------------------
DROP TABLE IF EXISTS `dwvs_admin_message`;
CREATE TABLE `dwvs_admin_message` (
  `DWVS_admin_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `DWVS_admin_name` varchar(20) NOT NULL,
  `DWVS_admin_passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`DWVS_admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dwvs_admin_message
-- ----------------------------

-- ----------------------------
-- Table structure for dwvs_message
-- ----------------------------
DROP TABLE IF EXISTS `dwvs_message`;
CREATE TABLE `dwvs_message` (
  `DWVS_mes_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `DWVS_message` text NOT NULL,
  `DWVS_mes_time` date NOT NULL,
  `DWVS_mes_name` varchar(60) DEFAULT NULL,
  `DWVS_uid` int(5) unsigned NOT NULL,
  PRIMARY KEY (`DWVS_mes_id`),
  KEY `fk_uid` (`DWVS_uid`),
  CONSTRAINT `fk_uid` FOREIGN KEY (`DWVS_uid`) REFERENCES `dwvs_user_message` (`DWVS_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dwvs_message
-- ----------------------------

-- ----------------------------
-- Table structure for dwvs_user_message
-- ----------------------------
DROP TABLE IF EXISTS `dwvs_user_message`;
CREATE TABLE `dwvs_user_message` (
  `DWVS_user_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `DWVS_user_name` varchar(60) DEFAULT NULL,
  `DWVS_user_passwd` varchar(50) NOT NULL,
  `DWVS_user_favicon` varchar(60) DEFAULT NULL,
  `DWVS_user_enr_time` date NOT NULL,
  PRIMARY KEY (`DWVS_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dwvs_user_message
-- ----------------------------

-- ----------------------------
-- Table structure for dwvs_vulnerability
-- ----------------------------
DROP TABLE IF EXISTS `dwvs_vulnerability`;
CREATE TABLE `dwvs_vulnerability` (
  `DWVS_Vulne_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `DWVS_Vulne_name` varchar(50) NOT NULL,
  `DWVS_Vulne_type` varchar(50) NOT NULL,
  `DWVS_Vulne_position` varchar(50) NOT NULL,
  `DWVS_Vulne_correlate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DWVS_Vulne_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dwvs_vulnerability
-- ----------------------------
INSERT INTO `dwvs_vulnerability` VALUES ('1', 'SQL联合查询注入', 'SQL注入漏洞', '/user/logCheck.php 、/user/updateName.php', 'http://www.jianshu.com/p/399881e79b1f');
INSERT INTO `dwvs_vulnerability` VALUES ('2', 'SQL搜索型注入', 'SQL注入漏洞', '/search.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('3', 'SQL报错型注入', 'SQL注入漏洞', '/messageSub.php 、/user/updateName.php', 'http://vinc.top/2017/04/06/');
INSERT INTO `dwvs_vulnerability` VALUES ('4', 'SQL数字型注入', 'SQL注入漏洞', '/bug/sql_injection/sql_num.php', 'http://blog.csdn.net/wizardforcel/article/details/');
INSERT INTO `dwvs_vulnerability` VALUES ('5', 'SQL字符型注入', 'SQL注入漏洞', '/bug/sql_injection/sql_string.php', 'https://www.cnblogs.com/zaki-Gui/p/5719920.html');
INSERT INTO `dwvs_vulnerability` VALUES ('6', 'SQL基于时间的盲注', 'SQL注入漏洞', '/user/updatePass.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('7', 'SQL逻辑注入', 'SQL注入漏洞', '/admin/logCheack.php', 'http://blog.csdn.net/greyfreedom/article/details/4');
INSERT INTO `dwvs_vulnerability` VALUES ('8', 'SQL搜索型注入2', 'SQL注入漏洞', '/bug/sql_injection/sql_search.php', 'http://blog.csdn.net/cnbird2008/article/details/77');
INSERT INTO `dwvs_vulnerability` VALUES ('9', '反射型 XSS', 'XSS漏洞', '/bug/xss/reflect_xss.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('10', '存储型 XSS', 'XSS漏洞', '/bug/xss/stored_xss.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('11', 'demo型 XSS', 'XSS漏洞', '/bug/xss/dom_xss.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('12', 'demo型 XSS 2', 'XSS漏洞', '/search.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('13', '反射型 XSS 2', 'XSS漏洞', '/search.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('14', '存储型 XSS 2', 'XSS漏洞', '/message.php', 'http://www.freebuf.com/articles/web/42727.html');
INSERT INTO `dwvs_vulnerability` VALUES ('15', '暴力破解', '其他', '/user/login.php 、/admin/logCheack.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('16', 'PHP远程命令执行漏洞', '命令执行漏洞', '/ping.php、/bug/code_exec/exec.php', 'https://www.cnblogs.com/xiaozi/p/7831529.html');
INSERT INTO `dwvs_vulnerability` VALUES ('17', '本地文件包含漏洞', '文件包含漏洞', '/Info.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('18', '任意文件包含漏洞', '文件包含漏洞', '/bug/file_include/any_include.php', 'http://blog.csdn.net/hitwangpeng/article/details/4');
INSERT INTO `dwvs_vulnerability` VALUES ('19', '任意代码读取漏洞', '文件包含漏洞', '/Info.php、/bug/others/file_read.php', 'http://blog.csdn.net/hitwangpeng/article/details/4');
INSERT INTO `dwvs_vulnerability` VALUES ('20', '目录限制文件包含', '文件包含漏洞', ' /bug/file_include/include_1.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('21', '修改任意用户密码漏洞', '逻辑错误漏洞', '/user/updatePass.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('22', 'Session劫持漏洞', 'Session劫持漏洞', '/user/updateName.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('23', 'Apache文件解析漏洞', '上传漏洞', '/user/updeteAvatar.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('24', '任意文件上传漏洞', '上传漏洞', '/bug/file_upload/any_upload.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('25', 'JS限制文件上传', '上传漏洞', '/bug/file_upload/upload_js.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('26', 'MIME限制文件上传', '上传漏洞', '/bug/file_upload/upload_mime.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('27', '扩展名限制文件上传', '上传漏洞', '/bug/file_upload/upload_name.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('28', '内容限制文件上传', '上传漏洞', '/bug/file_upload/upload_content.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('29', '任意代码执行', '代码执行漏洞', '/bug/code_exec/code.php ', null);
INSERT INTO `dwvs_vulnerability` VALUES ('30', 'ssrf', 'SSRF漏洞', '/bug/ssrf/ssrf.php ', null);
INSERT INTO `dwvs_vulnerability` VALUES ('31', '无验证码爆破', '其他', '/bug/others/baopo.php ', 'http://blog.csdn.net/ls1120704214/article/details/');
INSERT INTO `dwvs_vulnerability` VALUES ('32', '源码泄漏', '其他', '/bug/Source_code/code1 ', null);
INSERT INTO `dwvs_vulnerability` VALUES ('33', '本地文件包含漏洞2', '文件包含漏洞', '/bug/file_include2 ', null);
INSERT INTO `dwvs_vulnerability` VALUES ('34', 'php://input伪协议', '协议', '/bug/phpinput ', 'http://www.cnblogs.com/LittleHann/p/3665062.html');
INSERT INTO `dwvs_vulnerability` VALUES ('35', 'php://filter伪协议', '协议', '/bug/xieyi/filter', 'http://www.cnblogs.com/LittleHann/p/3665062.html');
INSERT INTO `dwvs_vulnerability` VALUES ('36', 'data://伪协议', '协议', '/bug/xieyi/data', 'http://www.cnblogs.com/LittleHann/p/3665062.html');
INSERT INTO `dwvs_vulnerability` VALUES ('37', 'phar://伪协议1', '协议', '/bug/xieyi/phar1/include.php', 'http://www.cnblogs.com/LittleHann/p/3665062.html');
INSERT INTO `dwvs_vulnerability` VALUES ('38', 'phar://伪协议2', '协议', '/bug/xieyi/phar2', 'http://www.cnblogs.com/LittleHann/p/3665062.html');
INSERT INTO `dwvs_vulnerability` VALUES ('39', 'sql盲注', 'SQL注入漏洞', '/bug/sql_injection/sqli_blind', null);
INSERT INTO `dwvs_vulnerability` VALUES ('40', 'strcmp', 'PHP', '/bug/php/md5.php', null);
INSERT INTO `dwvs_vulnerability` VALUES ('41', '弱类型', 'PHP', '/bug/php/code.php', 'https://www.cnblogs.com/Mrsm1th/p/6745532.html');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'Bugku', 'Bugku is very good.');
INSERT INTO `news` VALUES ('2', 'Harry', 'Harry are very cool.');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `pwd` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `bill` float NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'a123456', '50.9899');

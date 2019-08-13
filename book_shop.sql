/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : book_shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-22 19:15:16
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `ADMINID` varchar(50) DEFAULT NULL,
  `ADMINPSD` varchar(50) DEFAULT NULL,
  `ADMINNAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin2019', 'admin2019', '宿孟');

-- ----------------------------
-- Table structure for `book`
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `BOOKID` int(50) DEFAULT NULL,
  `BOOKNAME` varchar(30) DEFAULT NULL,
  `BOOKWRITER` varchar(30) DEFAULT NULL,
  `BOOKPRICE` varchar(50) DEFAULT NULL,
  `BOOKTYPE` varchar(20) DEFAULT NULL,
  `BOOKSYNOPSIS` varchar(255) DEFAULT NULL,
  `BOOKIMG` varchar(100) DEFAULT NULL,
  `BOOKREC` int(10) DEFAULT '0',
  `BOOKNUM` int(20) DEFAULT '999',
  `ISDEL` int(5) DEFAULT '1',
  `CREATETIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1015 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('1001', '20191001', '西游记', '吴承恩', '32.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m6.ddimg.cn/89/33/104336-1_w_3.jpg', '0', '999', '1', '2019-06-19 09:27:29');
INSERT INTO `book` VALUES ('1002', '20191002', '水浒传', '施耐庵', '32.00', '古典文学', '主要描写的是北宋末年，以宋江为首的一百零八条好汉在山东梁山泊聚义的故事。', 'http://img3m2.ddimg.cn/35/7/105272-1_w_1.jpg', '0', '999', '1', '2019-06-19 09:28:00');
INSERT INTO `book` VALUES ('1003', '20191003', '红楼梦', '曹雪芹', '32.00', '古典文学', '小说以贾、史、王、薛四大家族的兴衰为背景，以富贵公子贾宝玉为视角，描绘了一批举止见识出于须眉之上的闺阁佳人的人生百态，展现了真正的人性美和悲剧美，可以说是一部从各个角度展现女性美的史诗。', 'http://img3m1.ddimg.cn/9/22/102771-1_w_5.jpg', '0', '999', '1', '2019-06-19 09:28:35');
INSERT INTO `book` VALUES ('1004', '20191004', '三国演义', '罗贯中', '32.00', '古典文学', '描写了从东汉末年到西晋初年之间近百年的历史风云，以描写战争为主，诉说了东汉末年的群雄割据混战和魏、蜀、吴三国之间的政治和军事斗争，最终司马炎一统三国，建立晋朝的故事。反映了三国时代各类社会斗争与矛盾的', 'http://img3m2.ddimg.cn/10/23/102772-1_w_2.jpg', '0', '999', '1', '2019-06-19 09:29:02');
INSERT INTO `book` VALUES ('1005', '20191005', '史记', '司马迁', '28.00', '纪传体史书', '是中国历史上第一部纪传体通史，记载了上至上古传说中的黄帝时代，下至汉武帝太初四年间共3000多年的历史。', 'http://img3m4.ddimg.cn/3/11/24159864-1_w_4.jpg', '0', '999', '1', '2019-06-19 09:27:01');
INSERT INTO `book` VALUES ('1006', '20191006', '史记', '司马迁', '56.00', '纪传体史书', '是中国历史上第一部纪传体通史，记载了上至上古传说中的黄帝时代，下至汉武帝太初四年间共3000多年的历史。', 'http://img3m9.ddimg.cn/36/15/24059709-1_w_5.jpg', '0', '999', '1', '2019-06-19 17:12:59');
INSERT INTO `book` VALUES ('1007', '20191007', '红楼梦', '曹雪芹', '56.00', '古典文学', '小说以贾、史、王、薛四大家族的兴衰为背景，以富贵公子贾宝玉为视角，描绘了一批举止见识出于须眉之上的闺阁佳人的人生百态，展现了真正的人性美和悲剧美，可以说是一部从各个角度展现女性美的史诗。', 'http://img3m5.ddimg.cn/12/15/25216995-1_b_3.jpg', '0', '999', '1', '2019-06-20 09:50:20');
INSERT INTO `book` VALUES ('1008', '20191008', '西游记', '吴承恩', '25.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m8.ddimg.cn/90/1/23845428-1_b_4.jpg', '0', '999', '1', '2019-06-20 17:23:48');
INSERT INTO `book` VALUES ('1009', '20191009', '西游记', '吴承恩', '25.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m0.ddimg.cn/63/36/23992020-1_b_9.jpg', '0', '999', '1', '2019-06-20 17:30:16');
INSERT INTO `book` VALUES ('1010', '20191010', '西游记', '吴承恩', '25.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m4.ddimg.cn/91/11/25181434-1_b_4.jpg', '0', '999', '1', '2019-06-20 17:30:17');
INSERT INTO `book` VALUES ('1011', '20191011', '西游记', '吴承恩', '25.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m2.ddimg.cn/79/9/25111132-1_b_8.jpg', '0', '999', '1', '2019-06-20 17:30:18');
INSERT INTO `book` VALUES ('1012', '20191012', '西游记', '吴承恩', '25.00', '古典文学', '该剧讲述的是孙悟空、猪八戒、沙僧辅保大唐高僧玄奘去西天取经，师徒四人一路抢滩涉险，降妖伏怪，历经八十一难，取回真经，终修正果的故事。', 'http://img3m5.ddimg.cn/40/11/25141585-1_b_1.jpg', '0', '999', '1', '2019-06-20 17:30:19');
INSERT INTO `book` VALUES ('1014', '20191013', '三体', '刘慈欣', '46.50', '科幻文学', '作品讲述了地球人类文明和三体文明的信息交流、生死搏杀及两个文明在宇宙中的兴衰历程。', 'http://img3m4.ddimg.cn/32/35/23579654-1_b_2.jpg', '0', '500', '1', '2019-06-22 19:04:41');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `ID` int(102) NOT NULL DEFAULT '0',
  `USERID` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for `recommend`
-- ----------------------------
DROP TABLE IF EXISTS `recommend`;
CREATE TABLE `recommend` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `BOOKID` int(30) DEFAULT NULL,
  `BOOKNAME` varchar(30) DEFAULT NULL,
  `BOOKWRITER` varchar(50) DEFAULT NULL,
  `BOOKPRICE` varchar(50) DEFAULT NULL,
  `BOOKIMG` varchar(100) DEFAULT NULL,
  `BOOKTYPE` varchar(20) DEFAULT NULL,
  `ISDEL` int(5) DEFAULT '1',
  `CREATETIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1007 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of recommend
-- ----------------------------
INSERT INTO `recommend` VALUES ('1001', '20191001', '西游记', '吴承恩', '32.00', 'http://img3m6.ddimg.cn/89/33/104336-1_w_3.jpg', '古典文学', '1', '2019-06-19 09:34:52');
INSERT INTO `recommend` VALUES ('1002', '20191002', '水浒传', '施耐庵', '32.00', 'http://img3m2.ddimg.cn/35/7/105272-1_w_1.jpg', '古典文学', '1', '2019-06-19 09:35:37');
INSERT INTO `recommend` VALUES ('1003', '20191003', '红楼梦', '曹雪芹', '32.00', 'http://img3m5.ddimg.cn/23/24/25220075-1_w_2.jpg', '古典文学', '1', '2019-06-19 14:15:40');
INSERT INTO `recommend` VALUES ('1004', '20191004', '三国演义', '罗贯中', '32.00', 'http://img3m2.ddimg.cn/10/23/102772-1_w_2.jpg', '古典文学', '1', '2019-06-19 09:56:55');
INSERT INTO `recommend` VALUES ('1005', '20191005', '史记', '司马迁', '28.00', 'http://img3m4.ddimg.cn/3/11/24159864-1_w_4.jpg', '古典文学', '1', '2019-06-19 10:00:41');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERID` varchar(50) NOT NULL,
  `USERPSD` varchar(50) NOT NULL,
  `USEREMAIL` varchar(50) NOT NULL DEFAULT '未绑定',
  `USERPHONE` varchar(100) NOT NULL,
  `ISDEL` int(5) DEFAULT '1',
  `USERSYNOPSIS` varchar(200) DEFAULT '此人有点懒，什么都没写!',
  `CREATETIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `USERNAME` varchar(28) DEFAULT '未设置',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1008', '201640885', 'love70', '未绑定', '2147483647', '1', '此人有点懒，什么都没写!', '2019-06-19 00:46:25', '未设置');
INSERT INTO `user` VALUES ('1015', '201640880', 'love70', '未绑定', '2147483647', '1', '此人有点懒，什么都没写!', '2019-06-22 17:22:19', '未设置');
INSERT INTO `user` VALUES ('1010', '201942293', '123456', '未绑定', '2147483647', '1', '此人有点懒，什么都没写!', '2019-06-20 10:47:46', '未设置');
INSERT INTO `user` VALUES ('1016', '201640806', 'love70', '未绑定', '18048649256', '1', '此人有点懒，什么都没写!', '2019-06-22 17:23:47', '未设置');

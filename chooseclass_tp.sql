/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50018
Source Host           : 127.0.0.1:3306
Source Database       : chooseclass_tp

Target Server Type    : MYSQL
Target Server Version : 50018
File Encoding         : 65001

Date: 2017-06-07 16:21:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cc
-- ----------------------------
DROP TABLE IF EXISTS `cc`;
CREATE TABLE `cc` (
  `xid` int(11) NOT NULL auto_increment,
  `sid` int(11) default NULL,
  `cid` int(11) default NULL,
  `cscore` int(9) default NULL,
  PRIMARY KEY  (`xid`),
  KEY `sid` (`sid`),
  KEY `cid` (`cid`),
  CONSTRAINT `cc_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  CONSTRAINT `cc_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc
-- ----------------------------
INSERT INTO `cc` VALUES ('1', '1', '1', '80');
INSERT INTO `cc` VALUES ('2', '1', '3', '86');
INSERT INTO `cc` VALUES ('3', '1', '4', '92');
INSERT INTO `cc` VALUES ('7', '1', '5', '68');
INSERT INTO `cc` VALUES ('8', '1', '7', '98');
INSERT INTO `cc` VALUES ('9', '1', '10', '82');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `cid` int(11) NOT NULL auto_increment,
  `cname` varchar(20) default NULL,
  `cteacher` int(11) default NULL,
  `ctime` varchar(50) default NULL,
  `cdep` varchar(255) default NULL,
  `cmax` int(20) default NULL,
  `cxuefen` decimal(10,0) default NULL,
  `cxueshi` int(5) default NULL,
  `cdidian` varchar(255) default NULL,
  `cyixuan` int(20) default NULL,
  PRIMARY KEY  (`cid`),
  KEY `cteacher` (`cteacher`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`cteacher`) REFERENCES `teacher` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '计算机系统结构', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '2');
INSERT INTO `course` VALUES ('2', '计算机系统结构', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '4');
INSERT INTO `course` VALUES ('3', '计算机系统结构', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '3');
INSERT INTO `course` VALUES ('4', '计算机系统结构2', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '4');
INSERT INTO `course` VALUES ('5', '计算机系统结构3', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '10');
INSERT INTO `course` VALUES ('6', '计算机系统结构4', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '4');
INSERT INTO `course` VALUES ('7', '计算机系统结构5', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '12');
INSERT INTO `course` VALUES ('8', '计算机系统结构6', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '22');
INSERT INTO `course` VALUES ('9', '计算机系统结构7', '1', '周四七八节', '计算机科学与技术', '40', '4', '20', '公共楼 405', '32');
INSERT INTO `course` VALUES ('10', '软件工程', '1', '周五一二节', '软件工程', '41', '4', '20', '计通楼512', '12');
INSERT INTO `course` VALUES ('15', '11', '1', '1', '1', '123', '1', '1', '1', null);
INSERT INTO `course` VALUES ('16', '11', '1', '1', '1', '6', '6', '6', '6', null);
INSERT INTO `course` VALUES ('17', '41', '1', '4', '1', '4', '4', '4', '4', null);

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sid` int(11) NOT NULL auto_increment,
  `sname` varchar(20) default NULL,
  `spassword` varchar(50) default NULL,
  `semail` varchar(255) default NULL,
  `stel` varchar(255) default NULL,
  `stel2` varchar(255) default NULL,
  `sdizhi` varchar(255) default NULL,
  `sqq` varchar(255) default NULL,
  `stx` varchar(255) default NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', '谭鹏', '1', 'admin@tanpeng.net', '13167422813', '131324234', '', '613258200', 'touxiang.jpeg');
INSERT INTO `student` VALUES ('170000', '2', '2', '', '13790276115', '', '湖南省株洲市天元区泰山西路湖南工业大学35栋', '', null);
INSERT INTO `student` VALUES ('170001', '3', '3', '', '13790276115', '', '湖南省株洲市天元区泰山西路湖南工业大学35栋', '', null);
INSERT INTO `student` VALUES ('170002', '5', '5', '', '13790276115', '', '湖南省株洲市天元区泰山西路湖南工业大学35栋', '', null);
INSERT INTO `student` VALUES ('170003', '1', '1', '', '13790276115', '', '湖南省株洲市天元区泰山西路湖南工业大学35栋', '', null);
INSERT INTO `student` VALUES ('170004', '1', '1', '', '13790276115', '', '湖南省株洲市天元区泰山西路湖南工业大学35栋', '', null);
INSERT INTO `student` VALUES ('170005', '2', '2', '2@qq', null, null, null, null, null);
INSERT INTO `student` VALUES ('170006', '1', '1', '1@22.com', null, null, null, null, null);

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tname` varchar(20) default NULL,
  `tpassword` varchar(255) default NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '邓晓军', '1');

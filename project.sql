/*
 Navicat Premium Data Transfer

 Source Server         : connection
 Source Server Type    : MySQL
 Source Server Version : 50527
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MySQL
 Target Server Version : 50527
 File Encoding         : 65001

 Date: 18/09/2019 22:24:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info`  (
  `NeedyID` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Age` int(3) NULL DEFAULT NULL,
  `BloodGroup` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `IDnumber` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Mobile` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `City` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MedicalHistory` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `OrignalName` varchar(700) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`NeedyID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('101', 'Sunchit Bansal', 19, 'O+', '567890987654', '9803772820', 'mlk', 'Bathinda', ',,,,', '');

-- ----------------------------
-- Table structure for ngoinfo
-- ----------------------------
DROP TABLE IF EXISTS `ngoinfo`;
CREATE TABLE `ngoinfo`  (
  `RegistrationNo` int(7) NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `City` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Contact` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `President` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PresidentMobile` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Year` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NoOfMembers` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `OtherInformation` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`RegistrationNo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `DonorID` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Age` int(3) NULL DEFAULT NULL,
  `BloodGroup` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `City` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Mobile` int(12) NULL DEFAULT NULL,
  `NoOfTimes` int(2) NULL DEFAULT NULL,
  `MedicalHistory` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `OrignalName` varchar(700) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`DonorID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('101', 'Sunchit Bansal', 19, 'O_po', 'xyz', 'Bathinda', 2147483647, 2, 'nil', 'dfghj.jpg');
INSERT INTO `profile` VALUES ('102', 'Vishal Bansal', 40, 'O_po', 'xyz', 'Bathinda', 2147483647, 2, 'nil', 'ironmask.jpeg');
INSERT INTO `profile` VALUES ('103', 'Riddhi', 11, 'B_po', 'jhgcfgh', 'Bathinda', 2147483647, 3, 'kiuygtftgyhjk', 'photo (5).jpg');

-- ----------------------------
-- Table structure for signup
-- ----------------------------
DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup`  (
  `UserName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Mobile` int(12) NULL DEFAULT NULL,
  PRIMARY KEY (`UserName`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of signup
-- ----------------------------
INSERT INTO `signup` VALUES ('9', '9', 9);
INSERT INTO `signup` VALUES ('abc@gmail.com', '123', 7896523);
INSERT INTO `signup` VALUES ('bansalriddhi123@gmail.com', '456', 2147483647);
INSERT INTO `signup` VALUES ('bansalsunny212@yahoo.in', 'poiu', 9876554);
INSERT INTO `signup` VALUES ('bansalsunny222@yahoo.in', '123', 123456);
INSERT INTO `signup` VALUES ('bansalsunny22@yahoo.in', 'opop', 2147483647);
INSERT INTO `signup` VALUES ('bn', '1', 78);
INSERT INTO `signup` VALUES ('dd', '55', 55);
INSERT INTO `signup` VALUES ('diksha123@gmail.com', '123', 2147483647);
INSERT INTO `signup` VALUES ('diksha@gmail.com', '123', 2147483647);
INSERT INTO `signup` VALUES ('ggggg', '9876543', 3456789);
INSERT INTO `signup` VALUES ('harshil@yahoo', '345', 2147483647);
INSERT INTO `signup` VALUES ('kkkk', '8888', 8888);
INSERT INTO `signup` VALUES ('kkkk@', 'oijh', 0);
INSERT INTO `signup` VALUES ('llll@', 'llllllllll', 0);
INSERT INTO `signup` VALUES ('ssssss', '5467', 5678);
INSERT INTO `signup` VALUES ('vvv', '6666', 5555);
INSERT INTO `signup` VALUES ('xyz@gmail.com', '1098', 2147483647);

SET FOREIGN_KEY_CHECKS = 1;

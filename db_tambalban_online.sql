/*
 Navicat Premium Data Transfer

 Source Server         : serverMariaDB
 Source Server Type    : MariaDB
 Source Server Version : 100604
 Source Host           : localhost:3306
 Source Schema         : db_tambalban_online

 Target Server Type    : MariaDB
 Target Server Version : 100604
 File Encoding         : 65001

 Date: 04/02/2022 21:38:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for garage
-- ----------------------------
DROP TABLE IF EXISTS `garage`;
CREATE TABLE `garage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deleted` int(1) DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address_detail` text DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `photo1` text DEFAULT NULL,
  `photo2` text DEFAULT NULL,
  `photo3` text DEFAULT NULL,
  `owner` varchar(50) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `verification` int(1) NOT NULL DEFAULT 0,
  `verification_note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of garage
-- ----------------------------
BEGIN;
INSERT INTO `garage` VALUES (1, 0, 2, 'Tambal Ban Barokah Ya', 'Jl. Raya Mayor Oking Jaya Atmaja No.132, Cirimekar, Cibinong, Kabupaten Bogor, Jawa Barat 16918, Indonesia', 'dekat tukang cilokk', '-6.4733236', '106.8630171', '085656432875', 'b1_1.jpeg', '', '', 'Renaldi', 'BUKA', 1, '', '2022-02-01 13:23:45', '2022-02-01 13:23:45');
INSERT INTO `garage` VALUES (2, 0, 2, 'Tambal Ban Minang Raya', 'Gunungbatu, RT.01/RW.09, Gunungbatu, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16118, Indonesia', 'Dekat mie ayam enak banget', '-6.591786099999999', '106.7750696', '098976565434', 'b2.jpeg', '', '', 'Bewin', 'TUTUP', 1, '', '2022-02-01 13:23:47', '2022-02-01 13:23:47');
INSERT INTO `garage` VALUES (3, 0, 2, 'Tambal Ban Sederhana', 'Jl. Bojong Sari No.132, Ciapus, Ciomas, Kabupaten Bogor, Jawa Barat 16610, Indonesia', 'Dekat Pecel lele', '-6.592741452177292', '106.75135363278808', '085678732878', 'b3.jpeg', '', '', 'Rijal Ahmad', 'BUKA', 1, NULL, '2022-02-01 13:23:50', '2022-02-01 13:23:50');
INSERT INTO `garage` VALUES (4, 0, 2, 'Bengkel Barokah Cabang 1', 'Jl. Jambu 2 No.15, RT.08/RW.06, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143, Indonesia', 'dekat tukang bakso', '-6.6195643', '106.8217576', '081234567868', 'b5.jpeg', '', '', 'Renaldi', 'BUKA', 1, NULL, '2022-02-01 13:23:52', '2022-02-01 13:23:52');
INSERT INTO `garage` VALUES (5, 0, 2, 'Bengkel Barokah Cabang 2', 'Jl. Sukasari 1 No.16 A, Sukasari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16142, Indonesia', 'Dekat tukang seblak', '-6.6180778', '106.8141505', '08123456869', 'b4.jpeg', '', '', 'Bewin', 'TUTUP', 2, 'Bengkel tidak sesuai titik', '2022-02-01 13:23:54', '2022-02-01 13:23:54');
INSERT INTO `garage` VALUES (6, 0, 2, 'Bengkel Barokah Cabang 2', 'Jl. Warban No.51, RT.03/RW.05, Bondongan, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16131, Indonesia', 'Pinggir jalan banget bengkelnya', '-6.614084999999999', '106.8065043', '098623456986', 'b6.jpeg', '', '', 'Fadil', 'BUKA', 1, NULL, '2022-02-01 13:23:56', '2022-02-01 13:23:56');
INSERT INTO `garage` VALUES (7, 0, 2, 'Bengkel Suryadi Sejahtera', 'Jl. Raya Tajur No.303, RT.03/RW.04, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16137, Indonesia', 'Dekat tukang bakso ya', '-6.6447344', '106.8401049', '087783056360', 'b6_1.jpeg', '', '', 'Agus', 'TUTUP', 0, NULL, '2022-02-01 13:23:59', '2022-02-01 13:23:59');
INSERT INTO `garage` VALUES (8, 0, 4, 'Bengkel Makmur Jaya Ya', 'Jl. Raya Pajajaran No.25, RT.03/RW.01, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128, Indonesia', 'Dekat Penjual Seblak', '-6.5931045364871155', '106.80475269073791', '08989898989', 'b5_1.jpeg', '', '', 'Bwin', 'BUKA', 1, '', '2022-02-02 14:34:29', '2022-02-02 14:34:29');
INSERT INTO `garage` VALUES (9, 0, 2, 'Bengkel Baru Buka', 'Jl. Pahlawan No.98, RT.01/RW.16, Empang, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132, Indonesia', 'Pinggir Jalan', '-6.6117152', '106.8006616', '012345678', 'b6_2.jpeg', '', '', 'Fadil', 'BUKA', 1, '', '2022-02-04 14:34:51', '2022-02-04 14:34:51');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deleted` int(1) DEFAULT 0,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `role_user` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 0, 'Superuser', 'superuser', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'superuser@gmail.com', NULL, 0, '2022-02-01 13:23:17', '2022-02-01 13:23:17');
INSERT INTO `users` VALUES (2, 0, 'muhammad agus suryadi', 'muhammadagussuryadiii', NULL, 'muhammadagussuryadiii@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJy3nObFcYlioeR4CwD-uf0Gb3k6IwanpG8Lbeq1=s96-c', 2, '2022-02-01 13:23:34', '2022-02-01 13:23:34');
INSERT INTO `users` VALUES (3, 0, 'Administrator 1', 'admin1', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'admin1@gmail.com', NULL, 1, '2022-02-04 14:20:53', '2022-02-04 14:20:53');
INSERT INTO `users` VALUES (4, 0, 'suryadi media', 'suryadimedia24', NULL, 'suryadimedia24@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJwBXpRDQLPEVpfmC4l0vu0oVA1wn38MjnDoOMoL=s96-c', 2, '2022-02-02 14:24:52', '2022-02-02 14:24:52');
INSERT INTO `users` VALUES (5, 0, 'Administrator 2', 'admin2', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'admin2@gmail.com', NULL, 1, '2022-02-02 14:30:42', '2022-02-02 14:30:42');
INSERT INTO `users` VALUES (6, 0, 'Administrator 3 Ya', 'admin3', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'admin3@gmail.com', NULL, 1, '2022-02-04 14:33:17', '2022-02-04 14:33:17');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

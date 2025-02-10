-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2025 at 01:19 PM
-- Server version: 10.5.26-MariaDB-0+deb11u2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BIBI GLOW`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'ROM&ND Dewy·Ful Water Tint', 'ริมฝีปากฉ่ำแบบมงลง เนื้อสัมผัสบางเบาและฉ่ำโกลว์ ทาแบบไม่มองกระจกก็ยังสวย', 390.00, 'png.', 3),
(2, 'MERREZCA Skin Up Water Base', 'เมคอัพเบสเนื้อสัมผัสบางเบา เกลี่ยง่าย กันน้ำ กันเหงื่อ ติดทนนาน ช่วยปรับสภาพผิวก่อนลงรองพื้น อำพรางความหมองคล้ำบนใบหน้า และปรับสีผิวให้ดูสม่ำเสมอ เผยผิวดูเรียบเนียนกระจ่างใสอย่างเป็นธรรมชาติ พร้อมควบคุมความมันบนใบหน้า และเติมความชุ่มชื้นให้กับผิว ', 790.00, 'png.', 1),
(3, 'MILLE Oil Control Collagen Translucent Loosed Powder', 'แป้งฝุ่นคอลลาเจน ช่วยให้ความชุ่มชื้นแก่ผิวให้ผิวสุขภาพดีพร้อมด้วยการปกปิดรูขุมขน ให้ใบหน้าเรียบเนียนอย่างเป็นธรรมชาติ', 500.00, 'png.', 1),
(4, '2P ORIGINAL Oh My Blush\r\n', 'บลัชออนไร้ฝุ่น 2P ORIGINAL Oh My Blush รุ่นใหม่ล่าสุดที่เพิ่มความพิเศษกว่ารุ่นเดิมคือ มี 2 เนื้อสัมผัสในตลับเดียว ทั้งเนื้อแมตต์และชิมเมอร์ \r\n', 299.00, 'png.', 1),
(5, 'ROM&ND Better Than Palette\r\n', 'พาเลทอายแชโดว์ 10 เฉดสี มีทั้งเนื้อแมท ชิมเมอร์ และกลิตเตอร์ เกลี่ยง่าย เม็ดสีแน่น ติดทนนาน ช่วยเพิ่มความโดดเด่นให้กับดวงตา และดูมีมิติมากยิ่งขึ้น\r\n', 890.00, 'png.', 1),
(6, 'JUDYDOLL Highlight & Contour\r\n', 'พาเลทคอนทัวร์ 4 หลุม ไฮไลท์แบบแมทท์และชิมเมอร์ คอนทัวร์สีเข้มและสีอ่อน ครบจบในหนึ่งพาเลท แต่งหน้าง่าย ให้ฟินิชลุคสวยแบบมือโปร สีแสงและเงาเลียนแบบแสงธรรมชาติ เนรมิตกรอบหน้าชัดมีมิติ\r\n', 435.00, 'png.', 2),
(7, 'JUDYDOLL Traceless Cloud Touch Concealer\r\n', 'ปกปิดทุกริ้วรอยให้เนียนได้ในแท่งเดียวด้วยคอนซีลเลอร์ สำหรับผิวขาว มอบการปกปิดได้ทุกรอยคล้ำใต้ตา ร่องน้ำตา ร่องแก้ม และรอยแดง พร้อมเติมความชุ่มชื้น ติดทนนาน ไม่ตกร่อง\r\n', 239.00, 'png.', 1),
(8, 'MIZUMI UV Water Serum SPF50+ PA++++\r\n', 'ครีมกันแดดสูตรน้ำ ปราศจากสารกันแดดแบบเคมี  (100% Physical Sunscreen) สูตร ใช้ทุกวัน\r\n', 890.00, 'png.', 4),
(9, 'MIZUMI Smooth Cleansing Water\r\n', 'คลีนซิ่ง วอเตอร์ สูตรลดแรงเสียดสีผิว สำหรับทำความสะอาดเครื่องสำอางบนผิวหน้า ให้ความรู้สึก \"นุ่มลื่น\" เมื่อเช็ดเหมือนไม่ได้ใช้สำลี ลดโอกาสการเกิดริ้วรอย คงความชุ่มชื้น ผิวไม่แห้งตึงหลังเช็ด อ่อนโยนแม้ผิวที่บอบบาง แพ้ง่าย เป็นสิว\r\n', 490.00, 'png.', 4),
(10, 'NU FORMULA Derma Facial Cotton\r\n', '\"สำลีแผ่นชนิดนุ่ม จากใยฝ้ายธรรมชาติ 100%\r\nการันตีด้วยมาตรฐานการผลิตจากประเทศอังกฤษและสหรัฐอเมริกา จึงสะอาดปลอดภัยปราศจากสารเคมีในการขึ้นรูปแผ่นสำลี ทำให้ได้สำลีที่มีเนื้อสัมผัสนุ่มกว่า อ่อนโยนต่อผิวและไม่เป็นขุยง่าย\"\r\n', 139.00, 'png.', 4),
(11, 'HADALABO Hydating Lotion\r\n', 'โลชั่นบำรุงผิวหน้าเพื่อผิวชุ่มชื่นล้ำลึก\r\n', 520.00, 'png.', 4),
(12, 'FAITH IN FACE Truly Waterly Cleansing Water\r\n', 'ผลิตภัณฑ์เช็ดทำความสะอาดเครื่องสำอางค์สูตรน้ำอ่อนโยนสำหรับทุกสภาพผิวแม้ผิวแพ้ง่าย พร้อมสารสกัดจากธรรมชาติ 14 ชนิดช่วยเติมความชุ่มชื้นให้ผิว พร้อมเป็นโทนเนอร์เพื่อเตรียมผิวสำหรับขั้นตอนต่อไป ***ผ่านการทดสอบการระคายเคืองโดยแพทย์ผิวหนังจากเกาหลี จึงอ่อนโยนต่อทุกสภาพผิว*** ไม่มีส่วนผสมของพาราเบน,แอลกอฮอลล์,น้ำมันแร่,น้ำหอมและสี\r\n', 369.00, 'png.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

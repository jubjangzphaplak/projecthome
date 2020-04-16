-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 04:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ID_Content` int(10) NOT NULL,
  `HEAD_Content` varchar(500) NOT NULL,
  `Detail_Content` text NOT NULL,
  `PIC_Content` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID_Content`, `HEAD_Content`, `Detail_Content`, `PIC_Content`) VALUES
(1, '4 ไอเดียแต่งบ้านให้สวยปิ๊ง', '1. การเพ้นต์ลวดลายบนผนัง\r\n2 . เลือกผ้าม่านในแบบที่ชอบ\r\n3 . ทาสีผนังบ้านใหม่\r\n4 . หมอนอิงสีสดทำให้โลกทั้งใบสุขสันต์', 'content1.jpg'),
(2, '5 เทคนิคแต่งบ้านสวย สบายเป๋า', '1. เปลี่ยนฝาครอบสวิตซ์ไฟใหม่\r\n2. เปลี่ยนสีมือจับประตูใหม่\r\n3. เปลี่ยนโทนสีหลอดไฟให้บ้านดูอลังการ\r\n4. เปลี่ยนตำแหน่งเฟอร์นิเจอร์ในบ้านใหม่\r\n5. แต่งผนังให้ไฉไลขึ้นกว่าเดิม', 'content2.jpg'),
(3, 'แต่งบ้านแนวมินิมอล', '1. สีพื้นลามิเนต เข้มไป ไม่เข้ากับเฟอร์นิเจอร์ที่เล็งไว้\r\n\r\n2. ตึกมีปัญหาความชื้น ซึ่งคุยกับวิศวกรและสถาปนิกแล้ว ถ้าเปลี่ยนเป็นพื้นกระเบื้องจะพอแก้ปัญหาได้\r\n\r\n3. ไม่มีประตูกั้นระหว่างครัว – พื้นที่ส่วนกลางของห้อง\r\n\r\n4. ราวบันได เชยมากจ้า', 'content3.jpg'),
(6, 'ตกแต่งบ้านสวย ประหยัด', '1. ถ้าหากมีความรู้ความสามารถมากพอ ลองเน้นใช้เฟอร์นิเจอร์ DIY 2. ปลูกต้นไม้รอบบ้านแต่พองาม 3. ควารมีระเบียงพร้อมโต๊ะนั่งเล่นหน้าบ้าน 4.ตกแต่งผนังบ้านด้วยภาพวาดและภาพถ่าย', 'bg-title-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `name`, `level`, `email`) VALUES
(1, 'admin', 'admin', 'waiyawut', 'admin', 'home2@mail.com'),
(2, 'john', '222', 'devtai', 'member', 'dev@mail.com'),
(3, 'Suhynee', '123', 'suhynee', 'member', 'suhynee@gmail.com'),
(4, 'nutdear', '111', 'nutdear', 'member', 'nutdear@gmail.com'),
(5, 'pokpak', '111', 'pawit', 'member', 'pawit@gmail.com'),
(6, 'eink', '123', 'einkeink', 'member', 'eink@mail.com'),
(7, 'jam', '222', 'pappot', 'member', 'jam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testhome`
--

CREATE TABLE `testhome` (
  `ID_HOME` int(11) NOT NULL,
  `NAME_HOME` varchar(20) NOT NULL,
  `PRICE_HOME` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `LATI_HOME` float NOT NULL,
  `LONG_HOME` float NOT NULL,
  `PIC_HOME` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testhome`
--

INSERT INTO `testhome` (`ID_HOME`, `NAME_HOME`, `PRICE_HOME`, `City`, `LATI_HOME`, `LONG_HOME`, `PIC_HOME`) VALUES
(1, 'Condo Plus', '2,000,000', 'สงขลา', 7.00465, 100.459, 'condoplus.jpg'),
(2, 'บ้านแก้ว 2', '350,000', 'สงขลา', 7.00465, 100.459, 'home1.jpg'),
(4, 'โครงการบ้านพฤกษ์ลดา', '3,690,000', 'สงขลา', 7.02798, 100.456, 'home2.jpg'),
(30, 'บ้านโครงการหลวง 2', '2,500,000', 'หาดใหญ่', 6.99549, 100.429, 'home2.JPG'),
(31, 'บ้านราคาดี', '2,500,000', 'สงขลา', 6.99549, 100.429, 'bg-01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testhome`
--
ALTER TABLE `testhome`
  ADD PRIMARY KEY (`ID_HOME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testhome`
--
ALTER TABLE `testhome`
  MODIFY `ID_HOME` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

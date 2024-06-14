-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbandongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idDH` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `soLuong1` int(11) DEFAULT NULL,
  `gia1` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idDH`, `idSP`, `soLuong1`, `gia1`) VALUES
(35, 47, 99, 500),
(36, 47, 1, 250),
(36, 52, 1, 1300),
(36, 58, 1, 700),
(36, 69, 1, 100),
(37, 44, 99, 200),
(37, 45, 99, 300),
(37, 47, 198, 250),
(38, 47, 99, 500),
(39, 44, 99, 200),
(40, 44, 1, 200),
(41, 47, 99, 500),
(42, 47, 99, 500),
(43, 47, 99, 250),
(43, 49, 99, 150);

-- --------------------------------------------------------

--
-- Table structure for table `chitietquyendanhmuc`
--

CREATE TABLE `chitietquyendanhmuc` (
  `idQuyen` int(11) NOT NULL,
  `idDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietquyendanhmuc`
--

INSERT INTO `chitietquyendanhmuc` (`idQuyen`, `idDM`) VALUES
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(0, 5),
(0, 6),
(0, 7),
(1, 1),
(1, 2),
(1, 7),
(3, 4),
(3, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucquyen`
--

CREATE TABLE `danhmucquyen` (
  `idDM` int(11) NOT NULL,
  `tenDM` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucquyen`
--

INSERT INTO `danhmucquyen` (`idDM`, `tenDM`) VALUES
(1, 'quanlydonha'),
(2, 'quanlykhach'),
(3, 'quanlynhanv'),
(4, 'quanlyquyen'),
(5, 'quanlysanph'),
(6, 'quanlytaikh'),
(7, 'trangadmin');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `thoiDiemDat` date DEFAULT NULL,
  `thoiDiemGiao` date DEFAULT NULL,
  `diaChiGiao` varchar(100) DEFAULT NULL,
  `sdt` text NOT NULL,
  `email` text NOT NULL,
  `tongTien` double DEFAULT NULL,
  `trangThai` bit(1) DEFAULT NULL,
  `nguoiLapDon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`idDH`, `idKH`, `thoiDiemDat`, `thoiDiemGiao`, `diaChiGiao`, `sdt`, `email`, `tongTien`, `trangThai`, `nguoiLapDon`) VALUES
(35, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 49500, b'1', 20),
(36, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 2350, b'0', 0),
(37, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 99000, b'0', 0),
(38, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 49500, b'0', 0),
(39, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 19800, b'0', 0),
(40, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 200, b'0', 0),
(41, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 49500, b'0', 0),
(42, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 49500, b'0', 0),
(43, 16, '2022-05-19', '2022-05-22', '123', '0123456784', '1@gmail.com', 39600, b'0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `idTK` int(11) NOT NULL,
  `hoTen` varchar(50) DEFAULT NULL,
  `sdt` text DEFAULT NULL,
  `diaChi` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `idTK`, `hoTen`, `sdt`, `diaChi`, `email`) VALUES
(16, 17, 'duc', '0123456784', '123', '1@gmail.com'),
(17, 19, 'hua vinh duc', '0123456789', '123a ,mn,nm', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNV` int(11) NOT NULL,
  `idTK` int(11) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `sdt` text NOT NULL,
  `diaChi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `idQuyen` int(11) NOT NULL,
  `tenQuyen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`idQuyen`, `tenQuyen`) VALUES
(0, 'quanli'),
(1, 'nhanvien'),
(2, 'khachhang'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idTH` int(11) NOT NULL,
  `tenSP` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idTH`, `tenSP`, `img`, `gia`, `soLuong`) VALUES
(44, 2, 'Casio AE-1200WHD-1AVDF', 'Casio AE-1200WHD-1AVDF.jpg', 200, 99),
(45, 2, 'Casio LTP-VT01GL-9BUDF', 'Casio LTP-VT01GL-9BUDF.jpg', 300, 99),
(47, 2, 'Casio MTP-1374L-1AVDF', 'Casio MTP-1374L-1AVDF.jpg', 250, 99),
(49, 2, 'Casio MTP-VT01G-7BUDF Nam Quartz', 'Casio MTP-VT01G-7BUDF Nam Quartz.jpg', 150, 99),
(50, 2, 'Casio MTP-VT01GL-2BUDF', 'Casio MTP-VT01GL-2BUDF.jpg', 900, 99),
(51, 2, 'CASIO-MTP-VT01GL-2BUDF-1', 'CASIO-MTP-VT01GL-2BUDF-1.jpg', 1500, 99),
(52, 2, 'CASIO-MTP-VT01GL-2BUDF-2', 'CASIO-MTP-VT01GL-2BUDF-2.jpg', 1300, 99),
(53, 1, 'Fossil FS5383', 'Fossil FS5383.jpg', 150, 99),
(54, 1, 'Fossil FS5404', 'Fossil FS5404.jpg', 300, 99),
(55, 1, 'Fossil FS5440', 'Fossil FS5440.jpg', 100, 99),
(56, 1, 'Fossil FS5464', 'Fossil FS5464.jpg', 500, 99),
(57, 1, 'Fossil ME1138', 'Fossil ME1138.jpg', 100, 99),
(58, 1, 'FOSSIL-FS5381-2', 'FOSSIL-FS5381-2.jpg', 700, 99),
(59, 1, 'Fossil-FS5383-1', 'Fossil-FS5383-1.jpg', 300, 99),
(60, 1, 'FOSSIL-FS5404-2', 'FOSSIL-FS5404-2-399x399.jpg', 500, 99),
(61, 1, 'FOSSIL-FS5404-3', 'FOSSIL-FS5404-3.jpg', 150, 99),
(62, 3, 'T137', 'T137.jpg', 100, 99),
(63, 3, 'T926', 'T926.jpg', 150, 99),
(64, 3, 'T9261', 'T9261.jpg', 100, 99),
(65, 3, 'Tissot 1063 1', 'Tissot 1063 1.jpg', 250, 99),
(66, 3, 'Tissot 1063 2', 'Tissot 1063 2.jpg', 150, 99),
(67, 3, 'Tissot T063', 'Tissot T063.jpg', 500, 99),
(68, 3, 'Tissot T097 1', 'Tissot T097 1.jpg', 500, 99),
(69, 3, 'Tissot T097 2', 'Tissot T097 2.jpg', 100, 99),
(70, 3, 'Tissot T097', 'Tissot T097.jpg', 500, 99),
(77, 2, 'Casio AE-1200WHD-1AVDF', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idTK` int(11) NOT NULL,
  `tenTK` varchar(20) DEFAULT NULL,
  `matKhau` char(25) DEFAULT NULL,
  `idQuyen` int(11) NOT NULL,
  `ngayTao` date NOT NULL,
  `tinhTrangTTK` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idTK`, `tenTK`, `matKhau`, `idQuyen`, `ngayTao`, `tinhTrangTTK`) VALUES
(0, 'quanli', 'quanli', 0, '2022-05-19', b'1'),
(3, 'hao', '123', 0, '2022-05-19', b'1'),
(15, 'admin', 'admin', 3, '2022-05-19', b'1'),
(17, '1', '1', 2, '2022-05-19', b'0'),
(19, 'asd123', '123123', 2, '2022-05-19', b'1'),
(20, '3', '3', 1, '2022-05-20', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `idTH` int(11) NOT NULL,
  `tenTH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`idTH`, `tenTH`) VALUES
(1, 'Fossil'),
(2, 'Casio'),
(3, 'Tissot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD UNIQUE KEY `idDH_2` (`idDH`,`idSP`),
  ADD KEY `idDH` (`idDH`),
  ADD KEY `idSP` (`idSP`);

--
-- Indexes for table `chitietquyendanhmuc`
--
ALTER TABLE `chitietquyendanhmuc`
  ADD UNIQUE KEY `idQuyen` (`idQuyen`,`idDM`),
  ADD KEY `idDM` (`idDM`);

--
-- Indexes for table `danhmucquyen`
--
ALTER TABLE `danhmucquyen`
  ADD PRIMARY KEY (`idDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `fk_dk` (`idKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`),
  ADD KEY `idTK` (`idTK`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNV`),
  ADD UNIQUE KEY `idTK` (`idTK`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `fk_sp` (`idTH`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idTK`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`idTH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `idTH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`);

--
-- Constraints for table `chitietquyendanhmuc`
--
ALTER TABLE `chitietquyendanhmuc`
  ADD CONSTRAINT `chitietquyendanhmuc_ibfk_2` FOREIGN KEY (`idDM`) REFERENCES `danhmucquyen` (`idDM`),
  ADD CONSTRAINT `chitietquyendanhmuc_ibfk_3` FOREIGN KEY (`idQuyen`) REFERENCES `quyen` (`idQuyen`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_dk` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`idKH`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `taikhoan` (`idTK`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `taikhoan` (`idTK`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`idTH`) REFERENCES `thuonghieu` (`idTH`),
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idTH`) REFERENCES `thuonghieu` (`idTH`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`idQuyen`) REFERENCES `quyen` (`idQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

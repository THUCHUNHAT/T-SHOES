-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 12:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `TenNguoiDung` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayBinhLuan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `MaSanPham`, `TenNguoiDung`, `NoiDung`, `NgayBinhLuan`) VALUES
(21, 11, 'thuch', 'Giày rất tốt mn nên mua !!!', '2024-05-17 09:31:24'),
(24, 11, 'khach', 'kk', '2024-05-17 10:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`MaDanhMuc`, `TenDanhMuc`) VALUES
(14, 'Giày thể thao'),
(15, 'Giày lười'),
(16, 'Giày cao gót'),
(17, 'Giày boots'),
(18, 'Giày sandal');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `Username` varchar(50) DEFAULT NULL,
  `MaDonHang` int(11) NOT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `MaGioHang` int(11) DEFAULT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `MaDanhMuc` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `NgayDat` datetime NOT NULL,
  `HangSanXuat` varchar(255) DEFAULT NULL,
  `SoLuongDaBan` int(11) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`Username`, `MaDonHang`, `MaSanPham`, `MaGioHang`, `TenSanPham`, `HinhAnh`, `MaDanhMuc`, `MoTa`, `SoLuong`, `NgayDat`, `HangSanXuat`, `SoLuongDaBan`, `TrangThai`, `TongTien`) VALUES
(NULL, 2, 10, 13, 'Giày nike', 'custom-nike-dunk-low-by-you.png', 14, 'Giày nike giá hạt rẻ', 123, '2024-05-19 18:03:43', 'nike', 4, 'Đang bán', 0),
(NULL, 3, 11, 14, 'Giày Thể Thao Nam Biti\'s Hunter Street Còn Gì Dùng Đó HSM006300', 'custom-nike-dunk-low-by-you.png', 14, 'Giày nike hàng au', 300000, '2024-05-19 18:08:37', 'Nike', 120, 'Đang bán', 12000000),
('thuch', 4, 11, 15, 'Giày Thể Thao Nam Biti\'s Hunter Street Còn Gì Dùng Đó HSM006300', 'custom-nike-dunk-low-by-you.png', 14, 'Giày nike hàng au', 300000, '2024-05-19 18:11:59', 'Nike', 120, 'Đang bán', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `Username` varchar(50) DEFAULT NULL,
  `MaGioHang` int(11) NOT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `MaDanhMuc` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `NgayDat` datetime NOT NULL,
  `HangSanXuat` varchar(255) DEFAULT NULL,
  `SoLuongDaBan` int(11) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `PhanQuyen` enum('nhanvien','khachhang') DEFAULT 'khachhang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`HoTen`, `DiaChi`, `Email`, `SoDienThoai`, `Username`, `Password`, `PhanQuyen`) VALUES
('Chu Hữu Thư', 'Số 12 ngõ179 đường tây tựu', 'thuchunhat171202@gmail.com', '09698799', 'catkk', '12345678', 'khachhang'),
('Chu Hữu Thư', 'Số 12 ngõ 179 đường Tây Tựu', 'chuhuuthu456@gmail.com', '0969879995', 'chuhuuthu', '$2y$10$hiSZut/w6QctAqo.aRTDLue6fspgJOimXRRcvEwNP9B4K15vi46n.', 'nhanvien'),
('Chu Hữu thư', 'Số 12 ngõ 179 đường Tây Tựu', 'thuchunhat171202@gmail.com', '0969879995', 'thuch', '12345678', 'khachhang'),
('Chu Hữu Thư', 'Tay Tuu', '20111062379@hunre.edu.vn', '0934374389', 'thuch123', '12345678', 'nhanvien'),
('Chu Hữu Trung', 'Tay Tuu', 'chuhuutrung456@gmail.com', '0934374389', 'trungchu', '12345678', 'nhanvien');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `MaDanhMuc` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `HangSanXuat` varchar(255) DEFAULT NULL,
  `SoLuongDaBan` int(11) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `Gia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhAnh`, `MaDanhMuc`, `MoTa`, `SoLuong`, `HangSanXuat`, `SoLuongDaBan`, `TrangThai`, `Gia`) VALUES
(9, 'Giày', 'custom-nike-dunk-low-by-you.png', 14, 'Giày', 9, 'nike', 4, 'Đang bán', NULL),
(10, 'Giày nike', 'custom-nike-dunk-low-by-you.png', 14, 'Giày nike giá hạt rẻ', 123, 'nike', 4, 'Đang bán', NULL),
(11, 'Giày Thể Thao Nam Biti\'s Hunter Street Còn Gì Dùng Đó HSM006300', 'custom-nike-dunk-low-by-you.png', 14, 'Giày nike hàng au', 300000, 'Nike', 120, 'Đang bán', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `MaThanhToan` int(11) NOT NULL,
  `MaDonHang` int(11) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `PhuongThucThanhToan` varchar(50) DEFAULT NULL,
  `NgayThanhToan` datetime NOT NULL,
  `TrangThaiThanhToan` varchar(50) DEFAULT NULL,
  `SoTienThanhToan` float DEFAULT NULL,
  `SoDu` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`MaThanhToan`, `MaDonHang`, `Username`, `PhuongThucThanhToan`, `NgayThanhToan`, `TrangThaiThanhToan`, `SoTienThanhToan`, `SoDu`) VALUES
(1, NULL, 'thuch', NULL, '0000-00-00 00:00:00', NULL, NULL, 1e20),
(2, NULL, 'thuch', NULL, '0000-00-00 00:00:00', NULL, NULL, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`),
  ADD KEY `Username` (`Username`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`),
  ADD KEY `Username` (`Username`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`MaThanhToan`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `MaThanhToan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmucsanpham` (`MaDanhMuc`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `nguoidung` (`Username`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmucsanpham` (`MaDanhMuc`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `nguoidung` (`Username`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmucsanpham` (`MaDanhMuc`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `nguoidung` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

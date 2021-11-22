-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 10:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(11) NOT NULL COMMENT 'Mã bình luận',
  `chuDe` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Chủ đề',
  `noiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung bình luận',
  `danhGia` int(1) NOT NULL COMMENT 'Đánh giá sao',
  `ngayTao` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo bình luận',
  `hienThi` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Hiển thị bình luận (ẩn 0, hiện 1)',
  `maKH` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `maSP` int(11) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`maBL`, `chuDe`, `noiDung`, `danhGia`, `ngayTao`, `hienThi`, `maKH`, `maSP`) VALUES
(12, 'xấu', 'sản phẩm xấu', 4, '2021-10-09 12:48:05', 1, 13, 82),
(19, 'qwe', '324234we', 4, '2021-10-09 13:29:24', 1, 13, 74),
(20, 'qweqwe', 'qweqwe', 5, '2021-10-09 16:11:38', 1, 13, 79);

-- --------------------------------------------------------

--
-- Table structure for table `diachidonhang`
--

CREATE TABLE `diachidonhang` (
  `maDiaChi` int(5) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghiChu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `maHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diachidonhang`
--

INSERT INTO `diachidonhang` (`maDiaChi`, `hoTen`, `SDT`, `diaChi`, `ghiChu`, `maHD`) VALUES
(3, 'Hoàng Trọng', '06845874510', 'Nghĩa Bình,Thạch thất', 'ok', 37),
(4, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqweqw', 38),
(5, 'qwe', 'qwe', 'qwe', 'qwascwe', 39),
(6, 'Nguyễn Thành Đức', '012345678', 'Bình Thạnh, HCM', 'ok', 40),
(7, 'Ngô Thịnh', '089542845715', 'Tây Thạnh, Tân Phú', 'ok', 42),
(8, 'Hoàng Hồng', '0542458924', 'Hà Nội', 'ok', 43),
(9, 'thành đức ', '0923434', 'hcm', 'ok', 44);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL COMMENT 'Mã hóa đơn',
  `maKH` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `ngayTao` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo hóa đơn',
  `trangThai` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'Đang xử lý' COMMENT 'Trạng thái thanh toán ( chưa thanh toán 0 – đã thanh toán 1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `maKH`, `ngayTao`, `trangThai`) VALUES
(37, 11, '2021-10-08 21:27:46', 'Đang xử lý'),
(38, 13, '2021-10-08 21:37:46', 'Đang xử lý'),
(39, 13, '2021-10-08 21:38:24', 'Đang xử lý'),
(40, 13, '2021-10-09 09:49:57', 'Đang xử lý'),
(41, 13, '2021-10-09 12:10:18', 'Đang xử lý'),
(42, 13, '2021-10-09 12:10:45', 'Đang xử lý'),
(43, 13, '2021-10-09 12:13:02', 'Đang xử lý'),
(44, 13, '2021-10-09 16:12:45', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `maHDCT` int(11) NOT NULL COMMENT 'Mã hóa đơn chi tiết',
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên sản phẩm',
  `gia` int(11) NOT NULL COMMENT 'Giá một sản phẩm',
  `tongGia` float NOT NULL COMMENT 'Tổng giá trị sản phẩm',
  `soLuongSP` int(11) NOT NULL COMMENT 'Số lượng sản phẩm',
  `maHD` int(11) NOT NULL COMMENT 'Mã hóa đơn',
  `maSP` int(11) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`maHDCT`, `tenSP`, `gia`, `tongGia`, `soLuongSP`, `maHD`, `maSP`) VALUES
(25, 'Seiko SRPF71K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 39570000, 3, 37, 79),
(26, 'Seiko SRPF75K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 37, 80),
(27, 'Seiko SRPF65K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 37, 81),
(28, 'Seiko SRPF70K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 38, 74),
(29, 'Seiko SRPF69K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 38, 82),
(30, 'Seiko SRPF71K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 39, 79),
(31, 'Seiko SRPF75K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 13190000, 1, 39, 80),
(32, 'G-Shock GG-1000-1ADR – Nam – Quartz (Pin) – Dây Cao Su', 9525000, 28575000, 3, 40, 84),
(33, 'G-Shock GG-1000-1A5DR – Nam – Quartz (Pin) – Dây Cao Su', 9525000, 9525000, 1, 40, 85),
(34, 'Seiko SRPF75K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 65950000, 5, 42, 80),
(35, 'Casio AE-1200WHB-1BVDF – Nam – Kính Nhựa – Quartz (Pin) – Dây Vải', 1160000, 11600000, 10, 43, 83),
(36, 'Seiko SRPF71K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 39570000, 3, 44, 79),
(37, 'Seiko SRPF75K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 13190000, 52760000, 4, 44, 80);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email khách hàng',
  `trangThai` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái kích hoạt ( không 0 – có 1)',
  `hoTenKH` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên khách hàng',
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Số điện thoại',
  `hinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user.png' COMMENT 'Ảnh đại diện khách hàng',
  `matKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mật khẩu khách hàng',
  `vaiTro` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Vai trò(admin 1 – user 0)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `email`, `trangThai`, `hoTenKH`, `SDT`, `hinhAnh`, `matKhau`, `vaiTro`) VALUES
(11, 'ducthanh@gmail.com', 1, 'Nguyễn Thành Đức', '0968671917', 'user.png', '202cb962ac59075b964b07152d234b70', 0),
(12, 'quan@gmail.com', 1, 'Đỗ Trung Quân', '0948254001', 'user.png', '202cb962ac59075b964b07152d234b70', 0),
(13, 'ducthanh.developer@gmail.com', 1, 'Đức Thành', '012345678', 'user.png', '202cb962ac59075b964b07152d234b70', 0),
(14, 'admin@gmail.com', 1, 'Thành Đức', '', 'user.png', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maLoai` int(11) NOT NULL COMMENT 'Mã loại sản phẩm',
  `tenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại sản phẩm',
  `hienThi` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Hiển thị loại sản phẩm( ẩn 0 – hiện 1)',
  `thuTu` int(3) NOT NULL COMMENT 'Thứ tự loại sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maLoai`, `tenLoai`, `hienThi`, `thuTu`) VALUES
(34, 'Limited Edition', 1, 0),
(35, 'Đồng Hồ Quân Đội', 1, 0),
(36, 'Đồng Hồ Điện Tử', 1, 0),
(37, 'Đồng Hồ Đính Kim Cương', 1, 0),
(38, 'Đồng Hồ Xà Cừ', 1, 0),
(39, 'Đồng Hồ Trẻ Em', 1, 0),
(78, 'Đồng hồ hải triều', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL COMMENT 'Mã sản phẩm',
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên sản phẩm',
  `moTa` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả sản phẩm',
  `giaSP` float NOT NULL COMMENT 'Giá sản phẩm',
  `giamGia` int(3) DEFAULT 0 COMMENT 'Phần trăm giảm giá',
  `hinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Hình ảnh sản phẩm',
  `soLuongSP` int(11) DEFAULT 1000 COMMENT 'Số lượng sản phẩm',
  `ngayThem` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày thêm sản phẩm',
  `luotXem` int(3) DEFAULT 0 COMMENT 'Lượt xem',
  `luotMua` int(5) DEFAULT 0 COMMENT 'Lượt mua',
  `hienThi` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Hiển thị sản phẩm ( ẩn 0 – hiện 1)',
  `maLoai` int(11) NOT NULL COMMENT 'Mã loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `moTa`, `giaSP`, `giamGia`, `hinhAnh`, `soLuongSP`, `ngayThem`, `luotXem`, `luotMua`, `hienThi`, `maLoai`) VALUES
(74, 'Seiko SRPF70K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 'Mẫu Seiko SRPF70K1 dây đeo phiên bản dây vải phối tone màu cam thời trang năng động, cùng với các chi tiết kim chỉ cùng cọc vạch số được phủ dạ quang nổi bật trên nền mặt số size 42.5mm.', 13190000, 0, 'SRPF70K1-699x699.jpg', 1000, '2021-10-06 10:03:51', 22, 154, 1, 34),
(79, 'Seiko SRPF71K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 'Mẫu Seiko SRPF71K1 dây đeo phiên bản dây vải phối tone màu xám nam tính, cùng với các chi tiết kim chỉ được phủ dạ quang nổi bật trên nền mặt số size 42.5mm.', 13190000, 0, 'SRPF71K1-699x699.jpg', 1000, '2021-10-06 10:11:21', 3, 545, 1, 34),
(80, 'Seiko SRPF75K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 'Mẫu Seiko SRPF75K1 dây đeo phiên bản dây vải phối tone màu xám nam tính, điểm nổi bật với các chi tiết kim chỉ cùng cọc vạch số được phủ dạ quang trên nền mặt số size 42.5mm.', 13190000, 0, 'SRPF75K1.jpg', 1000, '2021-10-06 10:11:21', 0, 549, 1, 34),
(81, 'Seiko SRPF65K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 'Mẫu Seiko SRPF65K1 phiên bản số lượng giới hạn chỉ 6500 chiếc trên toàn thế giới, với thiết kế các chi tiết kim chỉ cùng các cọc chấm tròn được tạo hình dày dặn phủ dạ quang nổi bật.', 13190000, 0, 'SRPF65K1-699x699.jpg', 1000, '2021-10-06 10:11:21', 0, 154, 1, 34),
(82, 'Seiko SRPF69K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 42.5mm – Limited Edition', 'Mẫu Seiko SRPF69K1 phiên bản số lượng giới hạn chỉ 6500 chiếc trên toàn thế giới, với thiết kế các chi tiết kim chỉ được tạo hình dày dặn phủ dạ quang nổi bật trên nền mặt số size 42.5mm.', 13190000, 0, 'SRPF69K1-699x699.jpg', 1000, '2021-10-06 10:11:21', 76, 200, 1, 34),
(83, 'Casio AE-1200WHB-1BVDF – Nam – Kính Nhựa – Quartz (Pin) – Dây Vải', 'Đồng hồ nam Casio AE-1200WHB-1BVDF với thiết kế mạnh mẽ, vỏ máy tông màu xanh lục chủ đạo kết hợp cùng màu đen của viền bên ngoài tinh tế, phối cùng bộ dây đeo bằng vải tạo nên phong cách đậm chất cá tính.', 1160000, 0, '12_AE-1200WHB-1BVDF-699x699.jpg', 1000, '2021-10-06 10:26:45', 0, 10, 1, 35),
(84, 'G-Shock GG-1000-1ADR – Nam – Quartz (Pin) – Dây Cao Su', 'Đồng hồ G-Shock GG-1000-1ADR có mặt số tròn to, kim chỉ và vạch số màu trắng trang nhã nổi bật trên nền số điện tử, dây đeo cao su cao cấp  màu đen đem đến phong cách trẻ trung năng động dành cho phái mạnh.', 9525000, 0, 'GG-1000-1ADR-699x699.jpg', 1000, '2021-10-06 10:26:45', 0, 98, 1, 35),
(85, 'G-Shock GG-1000-1A5DR – Nam – Quartz (Pin) – Dây Cao Su', 'Đồng hồ G-Shock GG-1000-1A5DR có mặt số tròn to với vỏ màu đen mạnh mẽ, kim chỉ và vạch số phủ màu vàng nổi bật trên nền số điện tử, dây đeo cao su đem lại phong cách thời trang trẻ trung năng động.', 9525000, 0, 'GG-1000-1A5DR-699x699.jpg', 1000, '2021-10-06 10:26:45', 0, 150, 1, 35),
(86, 'Citizen BM8475-00F – Nam – Eco-Drive (Năng Lượng Ánh Sáng) – Dây Vải', 'Đồng hồ Citizen BM8475-00F có kim chỉ và vạch số được là nổi độc đáo trên nền số màu đen mạnh mẽ, ô lịch ngày lịch thứ vị trí 3h tinh tế, dây đeo bằng chất liệu dây vải mang phong cách thời trang cá tính.', 5990000, 0, 'BM8475-00F-1-699x699.jpg', 1000, '2021-10-06 10:26:45', 0, 100, 1, 35),
(87, 'Seiko SRPB53K1 – Nam – Automatic (Tự Động) – Dây Cao Su', 'Một trong các đặc điểm nổi bật tạo vẻ ngoài đậm chất thể thao của mẫu đồng hồ Seiko SRPB53K1 với kiểu dáng vỏ máy to dày dặn bên trong chứa đựng cả một trải nghiệm đầy nam tính của bộ máy cơ, phần vỏ viền ngoài được tạo hình viền số kết hợp cùng độ chịu nước lên đến 20ATM.', 11290000, 0, 'SRPB53K1-699x699.jpg', 1000, '2021-10-06 10:26:45', 0, 200, 1, 35),
(88, 'Seiko SRPE65K1 – Nam – Automatic (Tự Động) – Dây Vải – Mặt Số 40mm', 'Mẫu Seiko SRPE65K1 phiên bản dây vải phối tone màu xanh trẻ trung năng động cùng với thiết kế các chi tiết kim chỉ cùng cọc vạch số được phủ dạ quang nổi bật trên nền mặt số size 40mm.', 6820000, 0, 'SRPE65K1-699x699.jpg', 1000, '2021-10-09 14:53:01', 0, 0, 1, 35),
(89, 'Seiko SUR323P1 – Nam – Quartz (Pin) – Dây Vải', 'Mẫu Seiko SUR323P1 phiên bản dây cao su lót vải tone màu xanh phong cách năng động, nổi bật cùng với khả năng chịu nước 10atm.', 5870000, 0, 'SUR323P1-699x699.jpg', 1000, '2021-10-09 14:53:01', 0, 0, 1, 35),
(90, 'Seiko SUR325P1 – Nam – Quartz (Pin) – Dây Vải', 'Mẫu Seiko SUR325P1 phiên bản dây cao su lót vải tone màu xanh phong cách năng động, mặt số đen size 40mm nổi bật cùng với khả năng chịu nước 10atm.', 6120000, 0, 'SUR325P1-699x699.jpg', 1000, '2021-10-09 14:53:01', 1, 0, 1, 35),
(91, 'SEIKO SRPD77K1 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY VẢI', 'Mẫu Seiko SRPD77K1 với phần vỏ máy cơ bề dày 13mm đi kèm khả năng chống nước lên đến 10ATM, vẻ ngoài nam tính không kém cạnh thời trang với mẫu dây vải tone xanh.', 8060000, 0, '18_SRPD77K1-699x699.jpg', 1000, '2021-10-09 14:53:01', 0, 0, 1, 35),
(92, 'CITIZEN BJ6501-28A – NAM – ECO-DRIVE (NĂNG LƯỢNG ÁNH SÁNG) – DÂY DA', 'Lịch lãm nam tính cùng mẫu Citizen BJ6501-28A với kiểu dáng giản dị của chiếc đồng hồ 3 kim ẩn chứa bên trong cùng trang bị công nghệ hiện đại Eco-Drive (Năng Lượng Ánh Sáng) nổi bật.', 4700000, 0, '156_BJ6501-28A-699x699.jpg', 1000, '2021-10-09 14:53:01', 0, 0, 1, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `maKH` (`maKH`),
  ADD KEY `maSP` (`maSP`);

--
-- Indexes for table `diachidonhang`
--
ALTER TABLE `diachidonhang`
  ADD PRIMARY KEY (`maDiaChi`),
  ADD KEY `diachidonhang_ibfk_1` (`maHD`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKH` (`maKH`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`maHDCT`),
  ADD KEY `maHD` (`maHD`),
  ADD KEY `maSP` (`maSP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maLoai` (`maLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `diachidonhang`
--
ALTER TABLE `diachidonhang`
  MODIFY `maDiaChi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `maHDCT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn chi tiết', AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại sản phẩm', AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`) ON DELETE CASCADE;

--
-- Constraints for table `diachidonhang`
--
ALTER TABLE `diachidonhang`
  ADD CONSTRAINT `diachidonhang_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON DELETE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE;

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON DELETE CASCADE,
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maLoai`) REFERENCES `loaisanpham` (`maLoai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

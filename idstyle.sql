-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2023 lúc 05:20 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `idstyle`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id_chitiet` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`id_chitiet`, `id_giohang`, `masp`, `soluong`, `gia`) VALUES
(13, 22, 15, 1, 200000),
(12, 21, 15, 1, 200000),
(11, 20, 14, 1, 500000),
(10, 20, 28, 1, 125000),
(9, 19, 14, 1, 500000),
(14, 22, 14, 1, 500000),
(15, 22, 14, 1, 500000),
(16, 23, 27, 1, 300000),
(17, 24, 0, 0, 0),
(18, 24, 14, 3, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(500) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhanh` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mota` text NOT NULL,
  `danhgia` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `malsp` int(11) NOT NULL,
  `ngaythem` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`masp`, `tensp`, `gia`, `hinhanh`, `mota`, `danhgia`, `khuyenmai`, `malsp`, `ngaythem`) VALUES
(14, 'Quần Tây Đen', 500000, '401.jpg', '', 4, 10, 4, '2017-12-07'),
(15, 'Quần jean Trắng', 200000, 'images (1).jpg', 'Quàn jean Trắng', 1, 0, 2, '2017-12-08'),
(16, 'Quần jean co dãn', 300000, 'images (2).jpg', 'Quần jean co dãn', 3, 10, 2, '2017-12-08'),
(17, 'Quần jean co dãn', 300000, 'images (3).jpg', 'Quần jean co dãn', 4, 30, 2, '2017-12-08'),
(18, 'Quần Tây Đen', 300000, 'images (4).jpg', 'Quần Tây Đen', 3, 30, 4, '2017-12-08'),
(19, 'Quần Tây Trắng', 500000, 'images (5).jpg', 'Quần Tây Trắng', 1, 0, 4, '2017-12-08'),
(20, 'Áo Sơ mi xanh', 200000, 'images (6).jpg', 'Áo Sơ mi trắng', 2, 0, 1, '2017-12-08'),
(21, 'Áo Sơ mi trắng', 200000, 'images (7).jpg', '', 1, 0, 1, '2017-12-08'),
(22, 'Áo Sơ mi Xanh Đậm', 200000, 'images (8).jpg', 'Áo Sơ mi Xanh Đậm', 1, 10, 1, '2017-12-08'),
(23, 'Áo thun xám', 150000, 'images (10).jpg', 'Áo thun xám', 1, 20, 3, '2017-12-08'),
(26, 'Áo thun đen', 150000, 'aothunden.jpg', 'Áo thun đen', 4, 40, 3, '2017-12-08'),
(25, 'Áo thun đen xám', 150000, 'aothundenxam.jpg', 'Áo thun đen xám', 3, 30, 3, '2017-12-08'),
(27, 'Quần Tây Xám', 300000, 'quantayxam.jpg', 'Quần Tây Xám', 4, 20, 4, '2017-12-08'),
(28, 'Áo thun real', 125000, 'images (10).jpg', '123', 5, 12, 1, '2017-12-14'),
(29, 'Giày màu đỏ', 6900000, 'shoe1.png', 'amogus', 6, 0, 5, '2023-05-20'),
(30, 'Giày Buckle', 420000, 'bucklemyshoe.png', 'one two buckle my shoe', 3, 12, 5, '2023-05-20'),
(31, 'Áo fashion màu đen', 769000, 'trongtruonghop.png', 'trong truong hop', 7, 7, 6, '2023-05-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ngaydat` date NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `diachinhanhang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trangthai` tinyint(1) DEFAULT 0,
  `ghichu` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `username`, `ngaydat`, `hoten`, `sodienthoai`, `diachinhanhang`, `trangthai`, `ghichu`) VALUES
(19, 'tiendat', '2017-12-16', 'Nguyễn Huỳnh Lam1', '01677770931', '27 tran thi ki', 1, ''),
(20, 'huynhlamid0000000000000', '2017-12-16', 'Nguyễn Huỳnh Lam', '01677770931', '27 trần thị kỉ', 2, 'không nhận hàng'),
(21, 'huynhlamid', '2017-12-16', 'Nguyễn Huỳnh Lam', '01677770931', '27 Trần Thị kỉ', 2, 'đã giao'),
(22, 'huynhlamid', '2017-12-16', 'Nguyễn Huỳnh Lam', '01677770931', 'aaaaaaaaaaaa', 1, ''),
(23, 'huynhlamid', '2017-12-16', 'Nguyễn Huỳnh Lam', '01677770931', 'zxcvbnnnnn', 1, NULL),
(24, 'datbi', '2023-05-20', 'quoc dat', '069420', 'ok', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `malsp` int(11) NOT NULL,
  `tenloaisanpham` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`malsp`, `tenloaisanpham`) VALUES
(1, 'Áo sơ mi'),
(2, 'Quần Jean'),
(3, 'Áo Thun'),
(4, 'Quần Tây'),
(5, 'Giày'),
(6, 'Áo khoác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `quyen` varchar(30) NOT NULL DEFAULT 'Khách Hàng',
  `gioitinh` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `email`, `quyen`, `gioitinh`) VALUES
(1, 'huynhlamid', '12345', 'huynhlamid@gmail.com', 'Admin', 'Nam'),
(2, 'huynhlamid46541', '25574321', '25574321', 'Khách Hàng', 'Nu'),
(3, 'tiendat', '12345', 'tttttt', 'Khách Hàng', 'Nam'),
(4, 'huynhlamid222', '241245', 'huynhlamid', 'Khách Hàng', 'Nu'),
(5, 'huynhlamid555', '335345345', 'huynhlamid@gmail.com', 'Khách Hàng', 'Nu'),
(6, 'datbi', '1234', 'samplemail@gmail.com', 'Admin', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`malsp`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `malsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

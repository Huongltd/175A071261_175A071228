-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 10:47 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qld`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdiem`
--

CREATE TABLE `dsdiem` (
  `MalopHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiemQT` double NOT NULL,
  `DiemThiKT` double NOT NULL,
  `DiemKTHP` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dsdiem`
--

INSERT INTO `dsdiem` (`MalopHP`, `MaSV`, `HoTen`, `DiemQT`, `DiemThiKT`, `DiemKTHP`) VALUES
('59th1-cnw1', '175A071261', 'Diệu Hường', 8, 7, 7.4),
('59th1-Lttt', '175A071261', 'Diệu Hường', 9.9, 9, 9.3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BoMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `HoTen`, `Khoa`, `BoMon`) VALUES
('gv000', 'Kiều Tuấn Dũng', 'CNTT    ', 'Hệ thống thông tin'),
('gv002', 'Đặng Thị Thu Hiền', 'CNTT       ', 'Hệ thống thông tin'),
('gv003', 'Nguyễn Quỳnh Diệp', 'CNTT      ', 'Công nghệ phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenHP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `SoCT` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`, `SoCT`) VALUES
('CSE376', 'Ly thuyết tính toán', 3),
('CSE485', 'Công nghệ web', 3),
('CSE486', 'Hệ quản trị cơ sở dữ liệu', 2),
('CSE489', 'Mạng máy  tính', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophp`
--

CREATE TABLE `lophp` (
  `MalopHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoSV` int(11) NOT NULL,
  `Giaidoan` smallint(6) NOT NULL,
  `HocKy` smallint(6) NOT NULL,
  `NamHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophp`
--

INSERT INTO `lophp` (`MalopHP`, `MaHP`, `SoSV`, `Giaidoan`, `HocKy`, `NamHoc`) VALUES
('59th1-cnw1', 'CSE485', 35, 1, 1, '2019-2020'),
('59th1-Lttt', 'CSE376', 60, 2, 1, '2019-2020'),
('59th1-nnlt', 'CSE376', 35, 1, 2, '2018-2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanconggv`
--

CREATE TABLE `phanconggv` (
  `MaGV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MalopHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `CMT` int(10) NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Malop` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `CMT`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Malop`) VALUES
('175A071260', 1234456789, 'Trung Đức', '1999-12-09', 'Nam', 'Tuyên Quang', '59TH1'),
('175A071261', 1234567890, 'Diệu Hường', '0000-00-00', 'Nữ', 'Bắc Ninh', '59TH1'),
('175A071262', 1123456789, 'Khổng Hường', '0000-00-00', 'Nữ', 'Hải Phòng', '59TH1'),
('175A071265', 1223456789, 'Hoàng Hằng', '0000-00-00', 'Nữ', 'Hà Tĩnh', '59TH1'),
('175A071267', 1233456789, 'Minh Lý ', '0000-00-00', 'Nữ', 'Hà Nội', '59TH2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dsdiem`
--
ALTER TABLE `dsdiem`
  ADD PRIMARY KEY (`MalopHP`,`MaSV`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Chỉ mục cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD PRIMARY KEY (`MalopHP`) USING BTREE,
  ADD KEY `MaHP` (`MaHP`);

--
-- Chỉ mục cho bảng `phanconggv`
--
ALTER TABLE `phanconggv`
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `fk_lopHP` (`MalopHP`),
  ADD KEY `MaHP` (`MaHP`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD UNIQUE KEY `CMT` (`CMT`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tk` (`taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dsdiem`
--
ALTER TABLE `dsdiem`
  ADD CONSTRAINT `dsdiem_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `dsdiem_ibfk_2` FOREIGN KEY (`MalopHP`) REFERENCES `lophp` (`MalopHP`);

--
-- Các ràng buộc cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD CONSTRAINT `lophp_ibfk_1` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);

--
-- Các ràng buộc cho bảng `phanconggv`
--
ALTER TABLE `phanconggv`
  ADD CONSTRAINT `fk_lopHP` FOREIGN KEY (`MalopHP`) REFERENCES `lophp` (`MalopHP`),
  ADD CONSTRAINT `phanconggv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `phanconggv_ibfk_2` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

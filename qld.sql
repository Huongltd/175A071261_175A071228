-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 08:49 PM
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
-- Cấu trúc bảng cho bảng `danhsachdiemsv`
--

CREATE TABLE `danhsachdiemsv` (
  `MalopHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` int(11) NOT NULL,
  `Diem1` int(11) DEFAULT NULL,
  `Diem2` int(11) DEFAULT NULL,
  `Diem3` int(11) DEFAULT NULL,
  `Diem4` int(11) DEFAULT NULL,
  `Diem5` int(11) DEFAULT NULL,
  `DiemGiuaKy` int(11) NOT NULL,
  `DiemCC` int(11) NOT NULL,
  `DiemQT` int(11) NOT NULL,
  `DiemThiKT` int(11) NOT NULL,
  `DiemKTHP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BoMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `GiaiDoan` int(11) NOT NULL,
  `HocKy` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NamHoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Malop` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `CMT`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `email`, `Malop`) VALUES
('175A071260', 1234456789, 'Trung Đức', '0000-00-00', 'Nam', 'Tuyên Quang', 'ducbt@gmail.com', '59TH1'),
('175A071261', 1234567890, 'Diệu Hường', '0000-00-00', 'Nữ', 'Bắc Ninh', 'huong@gmail.com', '59TH1'),
('175A071262', 1123456789, 'Khổng Hường', '0000-00-00', 'Nữ', 'Hải Phòng', 'huongkt@gmail.com', '59TH1'),
('175A071265', 1223456789, 'Hoàng Hằng', '0000-00-00', 'Nữ', 'Hà Tĩnh', 'hanght@gmail.com', '59TH1'),
('175A071267', 1233456789, 'Minh Lý ', '0000-00-00', 'Nữ', 'Hà Nội', 'lyntm@gmail.com', '59TH2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsachdiemsv`
--
ALTER TABLE `danhsachdiemsv`
  ADD UNIQUE KEY `unique` (`MaSV`),
  ADD KEY `MalopHP` (`MalopHP`);

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
  ADD PRIMARY KEY (`MalopHP`,`MaHP`),
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
  ADD UNIQUE KEY `taikhoan` (`taikhoan`),
  ADD UNIQUE KEY `matkhau` (`matkhau`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhsachdiemsv`
--
ALTER TABLE `danhsachdiemsv`
  ADD CONSTRAINT `danhsachdiemsv_ibfk_1` FOREIGN KEY (`MalopHP`) REFERENCES `lophp` (`MalopHP`),
  ADD CONSTRAINT `fk_masv` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

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

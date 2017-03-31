-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 11:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denlonghoian`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhduan`
--

CREATE TABLE `anhduan` (
  `MaAnh` int(11) NOT NULL,
  `MaDuAn` int(11) NOT NULL,
  `Url` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anhduan`
--

INSERT INTO `anhduan` (`MaAnh`, `MaDuAn`, `Url`) VALUES
(1, 1, 'asset/Images/nen.jpg'),
(2, 1, 'asset/Images/nen.jpg'),
(3, 1, 'asset/Images/nen.jpg'),
(4, 2, 'asset/Images'),
(5, 2, 'asset/Images/nen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `MaAnh` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MaMauSP` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`MaAnh`, `MaSP`, `Url`, `MaMauSP`) VALUES
(1, 1, 'asset/Images/product.jpg', 'ed1b24'),
(2, 1, 'asset/Images/item.jpg', 'fef200'),
(3, 1, 'asset/Images/product.jpg', 'ed008c');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdh`
--

CREATE TABLE `chitietdh` (
  `MaDH` int(11) NOT NULL,
  `TenKh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Sodienthoai` int(11) NOT NULL,
  `Mausac` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Kichthuoc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Soluong` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Ngaymua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdh`
--

INSERT INTO `chitietdh` (`MaDH`, `TenKh`, `Diachi`, `Sodienthoai`, `Mausac`, `Kichthuoc`, `Soluong`, `MaSP`, `Ngaymua`) VALUES
(22, 'Trần Công Thịnh', 'quảng nam', 935454654, 'màu đỏ', '50 50', 1, 9, '0000-00-00'),
(23, 'Trần Văn a0', 'Quảng nam', 94545343, 'đỏ', '6', 1, 9, '0000-00-00'),
(24, 'Trần văn c', 'quảng nam', 934543432, 'đỏ', '60', 1, 9, '2017-03-17'),
(25, 'Trần Công Thịnh', 'Thăng bình, quảng nam', 935294654, 'màu đỏ', '50 50', 1, 9, '2017-03-18'),
(26, ',m,m;lm', 'lklk', 0, 'lklk', '././..', 2, 16, '2017-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThai` int(1) NOT NULL DEFAULT '0',
  `ngaydathang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `slug`) VALUES
(1, 'Phòng Khách', 'phong-khach'),
(2, 'Trang Trí', 'trang-tri'),
(3, 'Đèn Lồng Mới', 'den-long-moi');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaMauSP` int(11) NOT NULL,
  `MaChiTietDH` int(11) NOT NULL,
  `MaKichThuoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `MaDuAn` int(11) NOT NULL,
  `TenDuAn` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MoTaDA` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`MaDuAn`, `TenDuAn`, `MoTaDA`) VALUES
(1, 'dự án 1', 'Mô tả dự án 1'),
(2, 'dự án 2', 'mô tả dự án 2'),
(3, 'dự án 3', 'mô tả dự án 3'),
(4, 'dự án 4', 'mô tả dự án 4'),
(5, 'dự án 5', 'mô tả dự án 5'),
(6, 'dự án 6', 'mô tả dự án 6'),
(7, 'dự án 7', 'mô tả dự án 7'),
(8, 'dự án 8', 'mô tả dự án 8'),
(9, 'dự án 9', 'mô tả dự án 9'),
(10, 'dự án 10', 'mô tả dự án 10');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ktsp`
--

CREATE TABLE `ktsp` (
  `MaKichThuoc` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `GiaTriKT` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ktsp`
--

INSERT INTO `ktsp` (`MaKichThuoc`, `MaSP`, `GiaTriKT`) VALUES
(1, 1, '50x50cm'),
(2, 1, '100x100cm');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoaiSP` int(11) NOT NULL,
  `TenLoaiSP` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug_loaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MaLoaiSP`, `TenLoaiSP`, `slug_loaisp`) VALUES
(1, 'Đèn Lồng Việt', 'den-long-viet'),
(2, 'Đèn Lồng Hội An', 'den-long-hoi-an'),
(3, 'Đèn Lễ Hội', 'den-le-hoi'),
(4, 'Đèn Trang Trí', 'den-trang-tri'),
(5, 'Đèn bàn', 'den-ban');

-- --------------------------------------------------------

--
-- Table structure for table `mausp`
--

CREATE TABLE `mausp` (
  `MaMauSP` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenMau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriMau` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mausp`
--

INSERT INTO `mausp` (`MaMauSP`, `MaSP`, `TenMau`, `GiaTriMau`) VALUES
(1, 1, 'Màu đỏ', 'ed1b24'),
(2, 1, 'Màu Vàng', 'fef200'),
(3, 1, 'Màu Hồng', 'ed008c');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaUser` int(11) NOT NULL,
  `NameUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `random` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaUser`, `NameUser`, `Pass`, `random`) VALUES
(1, 'admin', 'db5955764cee41d460b78190b8066c65\n\n', '3103deb68465747643608bb0f506dee6');

-- --------------------------------------------------------

--
-- Table structure for table `phukien`
--

CREATE TABLE `phukien` (
  `MaPK` int(11) NOT NULL,
  `TenPK` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` int(11) NOT NULL,
  `AnhPK` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phukien`
--

INSERT INTO `phukien` (`MaPK`, `TenPK`, `MaSP`, `AnhPK`) VALUES
(1, 'not', 1, 'asset/Images/img.jpg'),
(2, '', 1, 'asset/Images/img.jpg\r\n'),
(3, '', 1, 'asset/Images/img.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiSP` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `QuiCachSP` text COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MoTaSp` text COLLATE utf8_unicode_ci,
  `slug_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anhsp1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhsp2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhsp3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhsp4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauanhsp1` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauanhsp2` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauanhsp3` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauanhsp4` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaLoaiSP`, `Gia`, `QuiCachSP`, `AnhDaiDien`, `MoTaSp`, `slug_sp`, `anhsp1`, `anhsp2`, `anhsp3`, `anhsp4`, `mauanhsp1`, `mauanhsp2`, `mauanhsp3`, `mauanhsp4`) VALUES
(0, 'Den long ngoai san', 1, 1000000, 'qui cach den long ngoai san', '/ckfinder/userfiles/images/__thumbs/Den-hoa-sen-HS-VL016.jpg/Den-hoa-sen-HS-VL016__177x177.jpg', '<p>mo ta den long ngoai san</p>\r\n', 'den-long-ngoai-san', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL016.jpg', '/ckfinder/userfiles/images/list-sp.jpg', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', '', NULL, NULL, NULL, NULL),
(1, 'Đèn lồng 10', 1, 100000, 'Qui cách sản phẩm 1', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', '', 'den-long-10', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(2, 'Đèn lồng 2', 1, 200000, 'Qui cách sản phẩm 2', '/ckfinder/userfiles/images/Den-ngu-cao-cap-DN-CC76.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-2', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(3, 'Đèn lồng 3', 1, 300000, 'Qui cách sản phẩm 3', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL0181.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-3', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(4, 'Đèn lồng 4', 1, 400000, 'Qui cách sản phẩm 4', '/ckfinder/userfiles/images/121e.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-4', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(5, 'Đèn lồng 5', 1, 500000, 'Qui cách sản phẩm 5', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL0181.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-5', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(6, 'Đèn lồng 6', 2, 600000, 'Qui cách sản phẩm 6', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL015.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-6', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(7, 'Đèn lồng 7', 2, 700000, 'Qui cách sản phẩm 7', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL015.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-7', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(8, 'Đèn lồng 8', 2, 800000, 'Qui cách sản phẩm 8', '/ckfinder/userfiles/images/Den-trang-tri-DT-VL079.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-8', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(9, 'Đèn lồng 9', 2, 900000, 'Qui cách sản phẩm 9', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-9', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(11, 'Đèn lồng 10', 5, 100000, 'Qui cách sản phẩm 1', '/ckfinder/userfiles/images/Den-ngu-cao-cap-DN-CC76.jpg', '', 'den-long-10', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(12, 'Đèn trang trí', 1, 200000, 'Đèn hoa sen vải lụa HS-VL020 – sản phẩm thủ công truyền thồng của Việt Nam là trong những vẻ đẹp đáng chiêm ngưỡng trong nghệ thuật ứng dụng. Đèn hoa sen được làm từ chất liệu khung sắt, dán vải lụa , tạo hình cánh sen duyên dáng, mềm mại.', '/ckfinder/userfiles/images/__thumbs/Den-hoa-sen-HS-VL0181.jpg/Den-hoa-sen-HS-VL0181__480x480.jpg', '', 'den-trang-tri', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(14, 'den long moi', 1, 100000, 'qui cach san pham moi', '/ckfinder/userfiles/images/__thumbs/Den-hoa-sen-HS-VL015(1).jpg/Den-hoa-sen-HS-VL015(1)__205x320.jpg', 'pppppmo-ta-san-pham-moippppp', 'den-long-moi', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(15, 'Ten san pham den long', 1, 10000000, 'qui cach san pham den long', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL016.jpg', '<p>mo ta san pham den long</p>\r\n', 'ten-san-pham-den-long', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', '/ckfinder/userfiles/images/list-sp.jpg', '/ckfinder/userfiles/images/img.jpg', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL0181.jpg', NULL, NULL, NULL, NULL),
(16, 'Đèn lồng vẽ tranh phong cảnh Việt Nam', 1, 200000, 'Đèn lồng vẽ tranh  phong cảnh Việt Nam là loại đèn lồng đặc trưng của Đèn lồng Hội An. Đèn lồng lụa Hội An là sản phẩm đèn lồng truyền thống của Hội An, mang đậm chất thuần Việt. Với loại kích thước nhỏ bao gồm cỡ đó là 35cm và 30cm. Đèn cũng có các kích thước lớn lên đến 2m.', '/ckfinder/userfiles/images/__thumbs/Den-trang-tri-DT-VL079.jpg/Den-trang-tri-DT-VL079__320x320.jpg', 'ppemstronga-hrefhttpdenlongcomden-long-hoi-anhtml-targetblank-titleden-longden-longanbspve-tranhnbspstrongemstrongnbspphong-canhnbspa-hrefhttpdenlongvietvn-targetblank-titleviet-namviet-namanbspstrongla-loainbspa-hrefhttpdenlongcomden-long-hoi-anhtml-targetblank-titleden-longden-longanbspdac-trung-cuanbspa-hrefhttpdenlongcomden-long-hoi-anhtml-targetblank-titleden-long-hoi-anden-long-hoi-ananbspa-hrefhttpdenlongvietvnden-long-lua-targetblank-titleden-long-lua-hoi-anden-long-lua-hoi-ananbspla-san-phamnbspa-hrefhttpdenlongcomden-long-hoi-anhtml-targetblank-titleden-longden-longanbsptruyen-thong-cua-hoi-an-mang-dam-chat-thuan-viet-voi-loai-kich-thuoc-nho-bao-gom-co-do-la-35cm-va-30cm-den-cung-co-cac-kich-thuoc-lon-len-den-2mpp', 'den-long-ve-tranh-phong-canh-viet-nam', '/ckfinder/userfiles/images/121e.jpg', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL015.jpg', '/ckfinder/userfiles/images/Den-trang-tri-DT-VL079.jpg', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', '#000000', '#000000', '#000000', '#000000'),
(17, 'Tên sản phẩm', 1, 10000, 'rdfd', '/ckfinder/userfiles/files/121e.jpg', '<p>dfđ</p>\r\n', 'ten-san-pham', '', '', '', '', '#000000', '#000000', '#000000', '#000000'),
(18, 'Đèn lồng 3', 1, 300000, 'Qui cách sản phẩm 3', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL0181.jpg', 'plorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elitp', 'den-long-3', '', '', '', '', '#000000', '#000000', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `tin`
--

CREATE TABLE `tin` (
  `MaTin` int(11) NOT NULL,
  `TieuDe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `NgayDang` date NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MaDanhMuc` int(11) NOT NULL,
  `slug` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin`
--

INSERT INTO `tin` (`MaTin`, `TieuDe`, `MoTa`, `NgayDang`, `NoiDung`, `AnhDaiDien`, `MaDanhMuc`, `slug`) VALUES
(1, 'Tiêu đề tin 1', 'Mô tả nội dung tin 1', '2017-03-17', '<p>Nội dung tin 1</p>', 'asset/Images/new.jpg', 1, 'tieu-de-tin-1'),
(2, 'Tiêu đề tin 2', 'Mô tả nội dung tin 2', '2017-03-17', '<p>Nội dung tin 2</p>', 'asset/Images/new.jpg', 1, 'tieu-de-tin-2'),
(3, 'Tiêu đề tin 3', 'Mô tả nội dung tin 3', '2017-03-01', 'Nội dung tin 3', 'asset/Images/new.jpg', 1, 'tieu-de-tin-3'),
(4, 'Tiêu đề tin 4', 'Mô tả nội dung tin 4', '2017-03-01', 'Nội dung tin 4', 'asset/Images/new.jpg', 1, 'tieu-de-tin-4'),
(5, 'Tiêu đề tin 5', 'Mô tả nội dung tin 5', '2017-03-01', 'Nội dung tin 5', 'asset/Images/new.jpg', 1, 'tieu-de-tin-5'),
(6, 'Tiêu đề tin 6', 'Mô tả nội dung tin 6', '2017-03-17', '<p>Nội dung tin 6</p>', 'asset/Images/new.jpg', 2, 'tieu-de-tin-6'),
(8, 'Tiêu đề tin 8', 'Mô tả nội dung tin 8', '2017-03-01', 'Nội dung tin 8', 'asset/Images/new.jpg', 2, 'tieu-de-tin-8'),
(9, 'Tiêu đề tin 9', 'Mô tả nội dung tin 9', '2017-03-01', 'Nội dung tin 9', 'asset/Images/new.jpg', 2, 'tieu-de-tin-9'),
(10, 'Tiêu đề tin 10', 'Mô tả nội dung tin 10', '2017-03-01', 'Nội dung tin 10', 'asset/Images/new.jpg', 2, 'tieu-de-tin-10'),
(11, 'Đèn Lồng Hội An tiếp theo', 'Mô tả đèn lồng nội dung tiếp theo', '2017-03-17', '<p>Nội dung đèn lồng tiếp theo</p>', '/asset/images/sp.jpg', 1, 'den-long-hoi-an-tiep-theo'),
(13, 'Tin moi', 'mo ta moi', '2017-03-20', '<p>noi dung moi</p>', '/ckfinder/userfiles/images/Den-hoa-sen-HS-VL019.jpg', 1, 'tin-moi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhduan`
--
ALTER TABLE `anhduan`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `fk_anhduan_duan` (`MaDuAn`);

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `fk_anhsp_sanpham` (`MaSP`);

--
-- Indexes for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `FK_chitietdh_sanpham` (`MaSP`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDH`),
  ADD KEY `fk_chitietdonhang_khachhang` (`MaKH`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `fk_donhang_sanpham` (`MaSP`),
  ADD KEY `fk_donhang_chitietdonhang` (`MaChiTietDH`);

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`MaDuAn`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `ktsp`
--
ALTER TABLE `ktsp`
  ADD PRIMARY KEY (`MaKichThuoc`),
  ADD KEY `fk_ktsp_sanpham` (`MaSP`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Indexes for table `mausp`
--
ALTER TABLE `mausp`
  ADD PRIMARY KEY (`MaMauSP`),
  ADD KEY `fk_mausp_sanpham` (`MaSP`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaUser`);

--
-- Indexes for table `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`MaPK`),
  ADD KEY `fk_phukien_sanpham` (`MaSP`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk_sanpham_loaisanpham` (`MaLoaiSP`);

--
-- Indexes for table `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`MaTin`),
  ADD KEY `fk_tin_danhmuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhduan`
--
ALTER TABLE `anhduan`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `anhsp`
--
ALTER TABLE `anhsp`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaChiTietDH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `MaDuAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ktsp`
--
ALTER TABLE `ktsp`
  MODIFY `MaKichThuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MaLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mausp`
--
ALTER TABLE `mausp`
  MODIFY `MaMauSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phukien`
--
ALTER TABLE `phukien`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tin`
--
ALTER TABLE `tin`
  MODIFY `MaTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhduan`
--
ALTER TABLE `anhduan`
  ADD CONSTRAINT `fk_anhduan_duan` FOREIGN KEY (`MaDuAn`) REFERENCES `duan` (`MaDuAn`);

--
-- Constraints for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD CONSTRAINT `fk_anhsp_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `FK_chitietdh_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdonhang_khachhang` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_chitietdonhang` FOREIGN KEY (`MaChiTietDH`) REFERENCES `chitietdonhang` (`MaChiTietDH`),
  ADD CONSTRAINT `fk_donhang_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `ktsp`
--
ALTER TABLE `ktsp`
  ADD CONSTRAINT `fk_ktsp_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `mausp`
--
ALTER TABLE `mausp`
  ADD CONSTRAINT `fk_mausp_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `phukien`
--
ALTER TABLE `phukien`
  ADD CONSTRAINT `fk_phukien_sanpham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loaisanpham` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);

--
-- Constraints for table `tin`
--
ALTER TABLE `tin`
  ADD CONSTRAINT `fk_tin_danhmuc` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

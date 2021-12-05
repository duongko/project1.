-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 10:27 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL DEFAULT 0,
  `name` varchar(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `total` int(10) NOT NULL,
  `ngaydathang` varchar(225) NOT NULL,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Dang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(10) NOT NULL DEFAULT 0,
  `thanhtien` int(10) NOT NULL DEFAULT 0,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(84, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 62),
(85, 'galaxyA72.jpg', 'samsung glaxy s10', 1000, 1, 1000, 63),
(86, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 63),
(87, 'pk8.png', '', 0, 1, 0, 64),
(88, 'pk5.png', '', 12, 1, 12, 64),
(89, 'pk8.png', '', 0, 1, 0, 65),
(90, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 66),
(91, 'pk8.png', '', 0, 1, 0, 67),
(92, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 68),
(93, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 69),
(94, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 70),
(95, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 8, 1, 8, 74),
(96, 'sansung1.png', 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 22, 1, 22, 75);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(10) NOT NULL,
  `id_pro` int(10) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_mail` varchar(255) NOT NULL,
  `comm_date` varchar(255) NOT NULL,
  `comm_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comm_id`, `id_pro`, `comm_name`, `comm_mail`, `comm_date`, `comm_details`) VALUES
(56, 19, 'minh anh', 'duongko412000s@gmail.com', '10:18:35am 03/12/21', 'sam sung đẹp quá'),
(57, 35, 'duong', 'abc@gmail.com', '10:20:44am 03/12/21', 'hàng tốt'),
(58, 34, 'đfd', 'duongko412000s@gmail.com', '03:37:07pm 05/12/21', 'dfsdfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(45, 'Phụ kiện'),
(46, 'SamSung'),
(69, 'OPPO'),
(78, 'Iphone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `view` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `phukien` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddanhmuc`, `baohanh`, `phukien`, `tinhtrang`, `trangthai`) VALUES
(10, 'oppo note 7', 0.00, 'iphone12smax.jpg', '', 0, 69, '', '', '', 0),
(11, 'samsung glaxy', 250.00, 'samsungglaxy.jpg', 'ngon bổ rẻ', 0, 46, '', '', '', 0),
(12, 'samsung\r\n', 1000.00, 'samsung-galaxy-s20-fan-edition-090320-040338-600x600.jpg', 'sdfadsfsdfadfsf', 0, 46, '', '', '', 0),
(13, 'Samsung Galaxy Z Fold ', 2123.00, 'samsung-galaxy-z-fold-3-green-1-600x600.jpg', 'Galaxy Z Fold 3 5G 512GB là phiên bản nâng cấp của Galaxy Z Fold 2 5G. Việc sở hữu nhiều tính năng hấp dẫn cùng mức giá khá tốt giúp sản phẩm trở nên nổi bật hơn. \r\nĐiện thoại màn hình gập Galaxy Z Fold3 5G 512GB thế hệ mới của c', 0, 46, '', '', '', 0),
(15, 'iphone 11 pro', 1000.00, 'ip11.jpg', 'iPhone 11 Pro 64GB cũ là một trong 3 mẫu điện thoại của Apple trong năm 2019. Siêu phẩm này được Apple tập trung khá nhiều cho việc nâng cấp phần cứng và hiệu năng iPhone 11 Pro. Không những thế, chức năng chụp hình, quay phim của thiết bị cũng không phải', 0, 78, '', '', '', 0),
(17, 'samsung glaxy smax', 123.00, 'glaxys10plus.jpg', '', 0, 46, '', '', '', 0),
(18, 'samsung glaxy s21', 2000.00, 'glaxys21.jpg', '', 0, 46, '', '', '', 0),
(19, 'samsung glaxy s10', 1000.00, 'galaxyA72.jpg', '', 0, 46, '', '', '', 0),
(20, 'iphone 12 pro', 2000.00, 'iphone12.jpg', '', 0, 78, '', '', '', 0),
(23, 'oppo', 250.00, '(600x600)_crop_oppo-reno-5.png', '', 0, 69, '', '', '', 0),
(24, 'loa bluetooth', 20.00, 'pk1.png', '', 0, 45, '', '', '', 0),
(25, 'tai nghe không dây', 20.00, 'pk2.png', '', 0, 45, '', '', '', 0),
(26, '', 12.00, 'pk5.png', '', 0, 45, '', '', '', 0),
(27, 'tai nghe bluetooth', 23.00, 'pk4.png', '', 0, 45, '', '', '', 0),
(28, '', 0.00, 'pk6.png', '', 0, 45, '', '', '', 0),
(29, '', 0.00, 'pk7.png', '', 0, 45, '', '', '', 0),
(30, '', 0.00, 'pk8.png', '', 0, 45, '', '', '', 0),
(31, '', 0.00, 'pk9.png', '', 0, 45, '', '', '', 0),
(32, '', 0.00, 'pk10.png', '', 0, 45, '', '', '', 0),
(33, '', 0.00, 'pk11.png', '', 0, 45, '', '', '', 0),
(34, '', 0.00, 'pk12.png', '', 0, 45, '', '', '', 0),
(35, 'Điện thoại di động Samsung Galaxy A52 - Chính hãng', 22.00, 'sansung1.png', 'Màn hình OLED có hỗ trợ HDR là một sự nâng cấp mới của Apple thay vì màn hình LCD với IPS được tìm thấy trên iPhone 8 và iPhone 8 Plus đem đến tỉ lệ tương phản cao hơn đáng kể là 1.000.000: 1, so với 1.300: 1 ( iPhone 8 Plus ) và 1.400: 1 ( iPhone 8 ).\r\n\r\nMàn hình OLED mà Apple đang gọi màn hình Super Retina HD có thể hiển thị tông màu đen sâu hơn. Điều này được thực hiện bằng cách tắt các điểm ảnh được hiển thị màu đen còn màn hình LCD thông thường, những điểm ảnh đó được giữ lại. Không những thế, màn hình OLED có thể tiết kiệm pin đáng kể.\r\n\r\nCả ba mẫu iPhone mới đều có camera sau 12MP và 7MP cho camera trước, nhưng chỉ iPhone X và iPhone 8 Plus có thêm một cảm biến cho camera sau. Camera kép trên máy như thường lệ: một góc rộng và một tele. Vậy Apple đã tích hợp những gì vào camera của iPhone X?\r\n\r\nChống rung quang học (OIS) là một trong những tính năng được nhiều hãng điện thoại trên thế giới áp dụng. Đối với iPhone X, hãng tích hợp chống rung này cho cả hai camera, không như IPhone 8 Plus chỉ có OIS trên camera góc rộng nên camera tele vẫn rung và chất lượng bức hình không đảm bảo.\r\n\r\nThứ hai, ống kính tele của iPhone 8 Plus có khẩu độ f / 2.8, trong khi iPhone X có ống kính tele f / 2.2, tạo ra một đường cong nhẹ và có thể chụp thiếu sáng tốt hơn với ống kính tele trên iPhone X.\r\n\r\nPortrait Mode là tính năng chụp ảnh xóa phông trước đây chỉ có với camera sau của iPhone 7 Plus, hiện được tích hợp trên cả iPhone 8 Plus và iPhone X. Tuy nhiên, nhờ sức mạnh của cảm biến trên mặt trước của iPhone X, Camera TrueDepth cũng có thể chụp với Potrait mode.', 0, 46, '12 tháng', 'hộp, sạc, dây sạc, pin', 'mới 100%', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `roles` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `phone`, `adress`, `roles`) VALUES
(1, 'duong', '123', 'duong@gmail.com', NULL, NULL, 1),
(6, 'truong', '123', 'truong12@gmail.com', NULL, NULL, 0),
(8, 'minhanh', '123', 'manh@gmail.com', NULL, NULL, 1),
(9, 'adc', '123', 'abc@gmail.com', NULL, NULL, 0),
(10, 'duong', '123', 'admin@gmail.com', NULL, NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

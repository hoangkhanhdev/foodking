-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2024 lúc 04:52 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_nhanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_danhmuc` int(5) NOT NULL,
  `danhmuc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_danhmuc`, `danhmuc`) VALUES
(1, 'Đồ ăn vặt'),
(2, 'Đồ uống'),
(3, 'mỳ'),
(4, 'bơger');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_donhang`
--

CREATE TABLE `ds_donhang` (
  `id` int(5) NOT NULL,
  `id_hoadon` int(5) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `soluong` varchar(20) NOT NULL,
  `gia` varchar(20) NOT NULL,
  `ngaydat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_donhang`
--

INSERT INTO `ds_donhang` (`id`, `id_hoadon`, `ten`, `tenkh`, `soluong`, `gia`, `ngaydat`) VALUES
(1, 1, 'bánh', 'hoang khánh', '4', '200.000', '2024-03-23 06:57:47'),
(2, 2, 'Bún bò huế', 'nam', '2', '45.000.000', '2024-03-23 08:18:08'),
(3, 4, 'Bún bò huế', 'khánh', '2', '45.000.000', '2024-03-23 08:18:08'),
(4, 5, 'bánh xeo', 'oanh', '4', '200.000', '2024-03-23 06:57:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_lienhe`
--

CREATE TABLE `ds_lienhe` (
  `id` int(5) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `danhgia` text NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_lienhe`
--

INSERT INTO `ds_lienhe` (`id`, `ten`, `email`, `danhgia`, `ngay`) VALUES
(1, 'Lê hoàng nam', 'aduy2260@gmail.com', 'ngon ngon', '2024-04-21 13:14:12'),
(3, 'khanhdz', 'duyk26424@gmail.com', 'fds', '2024-04-21 13:14:12'),
(4, 'khanhdz', 'duyk26424@gmail.com', 'banhs boger ngon\r\n', '2024-04-21 13:14:12'),
(5, 'Hoang Duy khánh', 'aduy2260@gmail.com ', 'ngon', '2024-04-21 13:14:37'),
(6, 'Đặng oanh', 'oanh', 'tra sữa quá Ngọt', '2024-04-21 13:16:37'),
(13, 'khanhdz', 'duyk26424@gmail.com', 'co van de\r\n', '2024-04-23 16:30:42'),
(14, 'khanhdz', 'duyk26424@gmail.com', 'co van de\r\n', '2024-04-23 16:42:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_nhanvien`
--

CREATE TABLE `ds_nhanvien` (
  `id` int(10) NOT NULL,
  `image` char(250) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `sdt` int(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `chucvu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_nhanvien`
--

INSERT INTO `ds_nhanvien` (`id`, `image`, `ten`, `diachi`, `sdt`, `ngaysinh`, `gioitinh`, `email`, `chucvu`) VALUES
(1, 'av.jpg', 'Hoàng Quốc Khánh ', 'Tân Thành -Hữu Lũng -Lạng Sơn ', 12345, '2003-09-02', 'Nam', 'anhduy2260@gmail.com', 'Quản lý'),
(2, 'av.jpg', 'Lê Hoàng nam ', 'Hải Dương', 123456, '2024-05-18', 'Nam', 'nam@gmail.com ', 'Nhân viên'),
(3, 'av1.jpg', 'Đặng oanh ', 'bắc giang city ', 2345673, '2024-05-10', 'Nữ', 'dangoanh@gmail.com', 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_sanpham`
--

CREATE TABLE `ds_sanpham` (
  `id` int(5) NOT NULL,
  `image` char(50) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `gia` varchar(30) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `id_danhmuc` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_sanpham`
--

INSERT INTO `ds_sanpham` (`id`, `image`, `ten`, `gia`, `mota`, `id_danhmuc`) VALUES
(2, 'trasua.jpg', 'Trà sữa trân châu đường đen', '25000', 'Trà sữa, Trà sữa Trân châu hay Trà sữa Đài Loan đều là tên gọi của một thức uống, nó được bắt nguồn từ Đài Trung, Đài Loan vào những năm 1980. Lúc bấy giờ, Nancy Yang - 1 ông chủ người Đài Loan đã kết hợp giữa siro, trái cây, khoai lang tẩm đường và trân châu vào ly trà sữa, 1 thức uống mới lạ và độc đáo ra đời.', 2),
(12, 'burger-2.png', 'bánh Bơger', '50000', 'Bánh mì hamburger (có cách đọc là hăm-bơ-gơ hay hem-bơ-gơ) là một dạng đồ ăn nhanh, được coi là dành cho người luôn bận rộn, không có nhiều thời gian. Chiếc bánh được miêu tả bao gồm 2 nửa bánh mì hình tròn, ở giữa có kẹp thịt (thường là thịt bò) và 1 số loại rau, củ, gia vị', 4),
(16, 'ruti.png', 'bánh cuận ', '28000', 'bánh làm từ bột cuộn với nhiều topping cho ra 1 món ăn hấp dẫn chấm với nước sốt thần thánh ngon tuyệt vời', 1),
(64, 'chicken.png', 'cánh gà chiên', '30000', 'Cánh gà chiên là món ăn ngon và hấp dẫn, được chế biến từ cánh gà tươi ngon, thường được ngâm trong một hỗn hợp gia vị trước khi chiên. Thịt cánh gà bên trong thường mềm mại và đậm đà vị ngọt, trong khi lớp vỏ ngoài là lớp vỏ giòn, màu vàng hấp dẫn', 1),
(66, 'sưa đau.jpg', 'Sữa đậu nành', '15000', 'Sữa đậu nành là một thức uống dinh dưỡng quen thuộc với người Việt và cũng như những nước Châu Á bởi hương vị đậm đà, thơm ngon, giàu dinh dưỡng và siêu dễ uống với các các công dụng đặc biệt như: chống lão hóa da, giảm cân, giảm nguy cơ mắc bệnh tim mạch, ngăn ngừa bệnh loãng xương,...', 2),
(65, 'french-fry-4.png', 'Khoai tây chiên', '38000', 'Khoai tây chiên vàng ươm với lớp vỏ giòn tan, bên trong mềm xốp, được tẩm ướp và chế biến theo phong cách Pháp, làm mới lạ món ăn tưởng như đã quá quen thuộc trong khẩu phần người Việt Nam.', 1),
(57, 'trasua.jpg', 'tra sua dac biet', '15000', 'được làm từ bột với trứng', 2),
(63, 'big-pizza.png', 'pizaa', '50000', 'Pizza là loại bánh có hình tròn được nướng lên với 3 thành phần chính là đế bánh, nhân bánh và phô mai phủ. Trong đó, đế bánh được chế biến từ quá trình ủ bột mì, nấm men và nước, sau đó được nhào nặn thành hình tròn. Phần topping pizza đa dạng gồm hải sản, xúc xích, phô mai, ….', 1),
(52, 'noodles.png', 'Mỳ ý', '46000', 'Mỳ Ý hay còn được gọi là Spaghetti, đây là một loại pasta có sợi dài, nhỏ hình trụ. Mỳ Ý được biết đến là loại thực phẩm thiết yếu và đặc trưng của nền ẩm thực Ý truyền thống. Thông thường, mỳ Ý được ăn kèm với nước sốt đặc biệt và các loại gia vị khác.', 3),
(68, 'nuoc dua.jpg', 'Nước dừa', '35000', ' nước dừa thường xuyên được chứng minh là rất tốt cho sức khỏe đấy như chúng có thể giúp ngăn ngừa sỏi thận, làm đẹp da, cải thiện sức khỏe tim mạch, chống oxy hóa, giảm cân,....', 2),
(67, 'atiso.jpg', 'nước Atiso', '25000', 'Trà atiso nổi tiếng với nhiều công dụng tốt cho sức khỏe như giúp ổn định đường huyết, tăng cường khả năng miễn dịch, giúp ngăn ngừa ung thư, hỗ trợ giảm cân, ổn định đường huyết,...', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_taikhoan`
--

CREATE TABLE `ds_taikhoan` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `gioitinh` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(10) NOT NULL,
  `level` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_taikhoan`
--

INSERT INTO `ds_taikhoan` (`id`, `username`, `password`, `ten`, `ngaysinh`, `diachi`, `gioitinh`, `email`, `sdt`, `level`) VALUES
(18, 'khanh', '37693cfc748049e45d87b8c7d8b9aacd', 'khanhdz', '0000-00-00', 'bắc giang', '1', 'duyk26424@gmail.com', 12345, 'user'),
(21, 'admin', 'a591024321c5e2bdbd23ed35f0574dde', 'khanh', '2003-09-02', 'Tân Thành -Hữu Lũng -Lạng Sơn', '1', 'anhduy2260@gmail.com', 123455, 'admin'),
(23, 'Nam', '202cb962ac59075b964b07152d234b70', 'Lê Hoàng nam', '4444-03-02', 'Tân Thành -Hữu Lũng -Lạng Sơn', '1', 'duyk26424@gmail.com', 12345678, 'user'),
(24, 'duy khanh', 'a591024321c5e2bdbd23ed35f0574dde', 'hoang khanh', '2000-04-03', 'bắc giang', '1', 'aduy2260@gmail.com', 1234556, 'user'),
(25, 'khanh123', '202cb962ac59075b964b07152d234b70', 'khanhssd', '2003-04-03', 'Tân Thành -Hữu Lũng -Lạng Sơn', '1', 'aduy2260@gmail.com', 12345, 'user'),
(26, 'khanh321', '202cb962ac59075b964b07152d234b70', 'k', '4444-03-02', 'vieynam', '1', 'duyk26424@gmail.com', 12345, 'user'),
(27, 'oanh', 'c4ca4238a0b923820dcc509a6f75849b', 'khanhdz', '2024-04-11', 'bắc giang', '0', 'aduy2260@gmail.com', 12345, 'user'),
(28, 'khanh23', 'c4ca4238a0b923820dcc509a6f75849b', 'Bánh xèo', '2024-04-11', 'bắc giang', '1', 'aduy2260@gmail.com', 123452, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_order` varchar(10) NOT NULL,
  `oderdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tenkh` varchar(30) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `thanhtoan` varchar(30) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `id_khachhang`, `code_order`, `oderdate`, `tenkh`, `sdt`, `diachi`, `ghichu`, `thanhtoan`, `order_status`) VALUES
(10, 23, '8971', '2024-05-03 12:09:20', 'Lê Hoàng nam', 12345678, 'hai duong', 'lay du dung cu awn ', '', 0),
(11, 24, '5978', '2024-05-03 12:09:21', 'hoang khanh', 1234556, '12 ta thanh oai-thanh tri -ha ', 'phai ngon', '', 0),
(12, 21, '2407', '2024-05-03 12:09:22', 'khanh', 123455, 'ha noi', 'khn', '', 0),
(13, 23, '8061', '2024-05-03 12:11:01', 'Lê Hoàng nam', 12345678, 'sfvv', 'ssf', '', 0),
(15, 23, '514', '2024-05-03 17:24:15', 'Lê Hoàng nam', 12345678, 'q', 'q', '', 0),
(25, 23, '703', '2024-05-03 16:08:18', 'Lê Hoàng nam', 12345678, 'u', '', '', 1),
(26, 23, '6345', '2024-05-03 17:24:17', 'Lê Hoàng nam', 12345678, 'l', '', '', 0),
(27, 23, '6777', '2024-05-03 17:03:55', 'Lê Hoàng nam', 12345678, 'g', '', '', 1),
(29, 23, '3138', '2024-05-03 17:24:22', 'Lê Hoàng nam', 12345678, 'hj', '', 'Tiền mặt', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_detail` int(11) NOT NULL,
  `code_order` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`id_detail`, `code_order`, `id_sanpham`, `soluongmua`, `gia`) VALUES
(12, '8971', 66, 1, 15000),
(13, '8971', 67, 1, 25000),
(14, '8971', 63, 1, 50000),
(15, '8971', 57, 1, 15000),
(16, '5978', 65, 2, 38000),
(17, '5978', 66, 2, 15000),
(18, '5978', 64, 3, 30000),
(19, '2407', 64, 1, 30000),
(20, '8061', 67, 1, 25000),
(21, '8061', 66, 1, 15000),
(22, '8061', 65, 1, 38000),
(23, '230', 52, 1, 46000),
(24, '230', 16, 1, 28000),
(25, '514', 66, 1, 15000),
(26, '1640', 64, 1, 30000),
(27, '2742', 67, 1, 25000),
(28, '3203', 66, 1, 15000),
(29, '3941', 66, 1, 15000),
(30, '3689', 68, 1, 35000),
(31, '5468', 67, 1, 25000),
(34, '7143', 66, 1, 15000),
(35, '703', 64, 1, 30000),
(36, '6345', 64, 1, 30000),
(37, '6777', 63, 1, 50000),
(38, '5053', 67, 1, 25000),
(39, '3138', 65, 1, 38000),
(40, '4061', 68, 1, 35000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `ds_donhang`
--
ALTER TABLE `ds_donhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_hoadon` (`id_hoadon`) USING BTREE;

--
-- Chỉ mục cho bảng `ds_lienhe`
--
ALTER TABLE `ds_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ds_nhanvien`
--
ALTER TABLE `ds_nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ds_sanpham`
--
ALTER TABLE `ds_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ds_taikhoan`
--
ALTER TABLE `ds_taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_danhmuc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ds_donhang`
--
ALTER TABLE `ds_donhang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ds_lienhe`
--
ALTER TABLE `ds_lienhe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ds_nhanvien`
--
ALTER TABLE `ds_nhanvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ds_sanpham`
--
ALTER TABLE `ds_sanpham`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `ds_taikhoan`
--
ALTER TABLE `ds_taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

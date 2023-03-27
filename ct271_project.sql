-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2023 lúc 06:39 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct271_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `full_name`, `email`, `phone_number`, `pass_word`) VALUES
(1, 'Trường', 'truong.lnt123@gmail.com', '0966899548', '$2y$10$3s9h0sHNlebztxF5rru6henp9n2RPYl.TkB2x9uhjdGRL9SzJe0c6'),
(2, 'Lê Nhựt Trường', 'truong@gmail.com', '0999999999', '$2y$10$zD0.kOVh4J.cDDzoT0jmc.Xbym3zxsD6EYAjGlWMum9AVkW0JtN9K'),
(3, 'Trường Lê ', 'truongle.lnt123@gmail.com', '1111111111', '$2y$10$k9ajdu22hj.zGqY2KOPP3uvLQWXZ5lx2T6pYWfy9SyuKgAjZ4IXGO'),
(4, 'Trường Lê ', 'truongle@gmail.com', '1111111111', '$2y$10$gjub9r1MfRJU9.wW3OBVWuNF7BvbA4u1zZeCO1Smqy.D3jkzWIycO'),
(5, 'Admin', 'admin@gmail.com', '0966899548', '$2y$10$COavZovNx4q/C3CyG0EyBOeI8SOWD3rbefhu4DgKNqpwOjKXUOdxy'),
(6, 'Trường Đẹp Trai', 'truongdeptrai@gmail.com', '0345639739', '$2y$10$XRQqm130fdeL.JDTv.kGOOQTexS4GJ05CXNBl86GcLplzrGfomVRq'),
(7, 'tô anh duy', 'duy@gmail.com', '9879879879', '$2y$10$G5vpPc1Qex5VnfDe5w46jODD/oowzvWttfT4f5YjAarbqFyCpuRoe'),
(8, 'duy', 'duy1@gmail.com', '9879879879', '$2y$10$C03AgY5CyKRGePEcItpOpuA7jOPqFUjfQlrymfC8.rsWE7weQPowm'),
(9, 'Hồng Cẩm', 'hongcam@gmail.com', '0342389962', '$2y$10$5gU.CGsDcqbDZr2ZOn/shuTyv4tS7v9R/4NVOgoBnE2Zqb2J.0OEi'),
(10, 'Lê Nhựt Trườngg', 'truongg@gmail.com', '0987654321', '$2y$10$BYAwe57ex759Aq598xIC6uMX6GHpouWp1XjQ3jE8nVaj/L9Z50V9S'),
(11, 'Lê Thanh Trọng', 'trong@gmail.com', '0345639739', '$2y$10$aUSRIporDLMZyFeIyruyg.AqlwOumWSM6s2/HYc90XZukseOg0P8m'),
(13, 'Trường', 'nhuttruong@gmail.com', '0966899548', '$2y$10$4bCLhLZjTuVntnGEgv.b/OnQ9yfEUJmjGPH2uEPIt5cjAikrxBGiq');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Đồng hồ nam'),
(2, 'Đồng hồ nữ'),
(3, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `status` text NOT NULL DEFAULT 'Đang xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `address`, `phone_number`, `email`, `total`, `payment`, `status`) VALUES
(35, 'Trường', 'Vĩnh Bình Châu Thành An Giang', '0966899548', 'truong.lnt123@gmail.com', 12930000, 'Thanh toán tiền mặt khi nhận hàng (COD)', 'Đã hủy'),
(36, 'Trường', 'Tân Phú Tân Châu An Giang', '0966899548', 'truong.lnt123@gmail.com', 53230000, 'Thanh toán qua thẻ tín dụng', 'Đang giao hàng'),
(37, 'Trường', 'Cái Khế Ninh Kiều Cần Thơ', '0966899548', 'truong.lnt123@gmail.com', 11230000, 'Thanh toán chuyển khoản (Internet Banking)', 'Đang giao hàng'),
(38, 'Trường', 'Hóc Môn Châu Thành Cần Thơ', '0966899548', 'truong.lnt123@gmail.com', 2030000, 'Thanh toán qua thẻ tín dụng', 'Đang xử lý'),
(39, 'Trường', 'An Bình Ninh Kiều Cần Thơ', '0966899548', 'truong.lnt123@gmail.com', 3990000, 'Thanh toán chuyển khoản (Internet Banking)', 'Đã hủy'),
(40, 'Trường', 'Số 10 Tri Tôn An Giang', '0966899548', 'truong.lnt123@gmail.com', 14030000, 'Thanh toán chuyển khoản (Internet Banking)', 'Đang xử lý'),
(41, 'Trường', 'Số 5 Châu Thành An Giang', '0966899548', 'truong.lnt123@gmail.com', 25430000, 'Thanh toán tiền mặt khi nhận hàng (COD)', 'Đang giao hàng'),
(42, 'Trường', 'Vĩnh Bình, Châu Thành, An Giang', '0966899548', 'nhuttruong@gmail.com', 10030000, 'Thanh toán qua thẻ tín dụng', 'Đang xử lý'),
(43, 'Hồng Cẩm', 'asdasdasdasdasdasdasdasdasd', '0342389962', 'hongcam@gmail.com', 3230000, 'Thanh toán chuyển khoản (Internet Banking)', 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` text NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_name`, `product_img`, `price`, `amount`, `thanhtien`, `id_orders`) VALUES
(70, 'MVMT Rodeo', 'rodeo.png', 3500000, 3, 10500000, 35),
(71, 'MVMT Twist Cuff', 'twist_cuff.png', 2400000, 1, 2400000, 35),
(72, 'Hublot Axiom', 'axiom.png', 4600000, 10, 46000000, 36),
(73, 'Daniel Wellington Sherry', 'sherry.png', 3600000, 2, 7200000, 36),
(74, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 4, 11200000, 37),
(75, 'Sofa góc Bella', 'sofa_goc_bella.png', 2000000, 1, 2000000, 38),
(76, 'Trường đẹp trai', 'a2.png', 990000, 4, 3960000, 39),
(77, 'MV A1', 'a1.png', 3000000, 4, 12000000, 40),
(78, 'MV A2', 'a2.png', 1000000, 2, 2000000, 40),
(79, 'Sofa băng BELLA', 'sofa_bang_bella.png', 3100000, 4, 12400000, 41),
(80, 'MV A1', 'a1.png', 3000000, 3, 9000000, 41),
(81, 'MV A2', 'a2.png', 2000000, 2, 4000000, 41),
(82, 'MVMT Black Link', 'black_link.png', 3200000, 1, 3200000, 42),
(83, 'MVMT Bloom Rosé', 'bloom_rose.png', 4400000, 1, 4400000, 42),
(84, 'MVMT Twist Cuff', 'twist_cuff.png', 2400000, 1, 2400000, 42),
(85, 'MVMT Black Link', 'black_link.png', 3200000, 1, 3200000, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `category_id`, `description`, `color`, `brand`, `img`) VALUES
(25, 'MVMT Black Link', 3200000, 1, 'Đồng hồ MVMT Black Link dòng Classic với thiết kế tối giản tinh tế cho các quý ông hiện đại. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!', 'đen', 'MVMT', 'black_link.png'),
(26, 'MVMT Slate', 5600000, 1, 'Đồng hồ MVMT Slate dòng Voyager với mặt 42mm cho phép xem 2 múi giờ song song, dây thép dạng mesh và khả năng chịu nước 10ATM.', 'đen', 'MVMT', 'slate.png'),
(27, 'MVMT Rose Gold Brown', 3500000, 1, 'Đồng hồ MVMT Rose Gold Brown dòng 40 Series với thiết kế mới nhất cùng dây đeo có thể dễ dàng thay đổi. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!', 'nâu vàng', 'MVMT', 'rose_gold_brown.png'),
(28, 'MVMT Ralley Green Gunmetal', 5700000, 1, 'Đồng hồ MVMT Ralley Green Gunmetal nằm trong bộ sưu tập Blacktop mới với mặt 47mm thể hiện phẩm chất lịch lãm của những quý ông năm 1960.Nhập khẩu chính hãng từ US. Free Ship toàn quốc!', 'xanh Gunmetal', 'MVMT', 'ralley_green_gunmetal.png'),
(29, 'MVMT Desert', 4100000, 1, 'Đồng hồ MVMT Desert dòng Voyager với mặt 42mm cho phép xem 2 múi giờ song song, dây đeo nylon NATO và khả năng chịu nước 10ATM.', 'vàng cát', 'MVMT ', 'desert.png'),
(30, 'Rolex Opar', 4900000, 1, 'Đồng hồ Rolex Opar nằm trong bộ sưu tập mới Revolver, với thiết kế mặt 41mm phù hợp cho cổ tay vừa và nhỏ.', 'bạc ', 'Rolex', 'opar.png'),
(31, 'Hublot Axiom', 4600000, 1, 'Đồng hồ Rolex Axiom với cấu trúc mặt 40mm cùng thiết kế tối giản mang hơi thở của thời đại không gian, hướng tới tương lai. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!', 'bạc', 'Hublot', 'axiom.png'),
(32, 'Orient Champion Gold', 5700000, 1, 'Đồng hồ Orient Champion Gold thuộc bộ sưu tập Blacktop. BST Nhập khẩu chính hãng từ US. Free Ship toàn quốc!', 'vàng gold', 'Orient', 'champion_gold.png'),
(33, 'MVMT Coronada Blanc', 3800000, 2, 'Đồng hồ MVMT Coronada Blanc dòng Coronada thuộc bộ sưu tập Malibu Fade Edition mới nhất. Với tông màu ngọt ngào trẻ trung, phối màu Malibu Fade mới nhất của chúng tôi sẽ là điểm nhấn thú vị cho mùa hè tuyệt vời của bạ', 'scream', 'MVMT', 'coronada_blanc.png'),
(34, 'MVMT Bloom Rosé', 4400000, 2, 'Đồng hồ MVMT Bloom Rosé dòng thuộc bộ sưu tập Malibu Fade Edition mới nhất. Với tông màu ngọt ngào trẻ trung, phối màu Malibu Fade mới nhất của chúng tôi sẽ là điểm nhấn thú vị cho mùa hè tuyệt vời của bạn', 'hồng', 'MVMT ', 'bloom_rose.png'),
(35, 'MVMT Rodeo', 3500000, 2, 'Đồng hồ MVMT Rodeo thuộc bộ BST Boulevard Collection với phong cách tối giản trẻ trung, tinh tế và đầy quyến rũ. Nhập khẩu chính hãng từ US. Free Shipping toàn quốc!', 'hồng nhạt', 'MVMT', 'rodeo.png'),
(36, 'MVMT Ashen Taupe', 3200000, 2, 'Đồng hồ MVMT Ashen Taupe thuộc bộ sưu tập Signature II mới nhất. Bộ sưu tập Signature II nổi bật với mặt kính 34mm, điểm nhấn vỏ với vát cắt kim cương sang trọng tinh tế, đơn giản nhưng vẫn tôn lên vẻ quý phái cho người phụ nữ. ', 'đen vàng gold', 'MVMT', 'ashen_taupe.png'),
(37, 'Rolex S1', 2800000, 2, 'Đồng hồ Rolex S1 nằm trong bộ sưu tập mới Mod, với thiết kế mặt 32mm dành riêng cho người có cổ tay nhỏ. Đồng hồ được lấy cảm hứng từ những đường thẳng và khối hình hoàn hảo của lối kiến trúc đơn giản, sẽ đem đến vẻ hiện đại và tinh tế cho người đeo nó.', 'bạc', 'Rolex', 's1.png'),
(38, 'Orient Aubrey', 4600000, 2, 'Đồng hồ Orient Aubrey thuộc bộ sưu tập The Signature Square. Lấy cảm hứng từ hình bóng của những bức tranh chân dung hoài cổ. Mặt đồng hồ với hình dáng cổ điển kết hợp đường nét hiện đại, bao quanh mặt được tô điểm bằng đường viền mềm mại nhưng đầy thanh lịch.  ', 'xanh trắng', 'Orient ', 'aubrey.png'),
(39, 'Hublot Hayden', 5300000, 2, 'Đồng hồ Hublot Hayden thuộc bộ sưu tập The Signature Square. Lấy cảm hứng từ hình bóng của những bức tranh chân dung hoài cổ. Mặt đồng hồ với hình dáng cổ điển kết hợp đường nét hiện đại, bao quanh mặt được tô điểm bằng đường viền mềm mại nhưng đầy thanh lịch.  ', 'vàng gold', 'Hublot ', 'hayden.png'),
(40, 'Daniel Wellington Sherry', 3600000, 2, 'Đồng hồ trang sức Daniel Wellington Sherry thuộc bộ BST Gala Collection với phong cách tối giản sang trọng, tinh tế và đầy quyến rũ. Nhập khẩu chính hãng từ US. Free Shipping toàn quốc!', 'vàng đen', 'Daniel Wellington', 'sherry.png'),
(41, 'MVMT Minimal Cuff', 1600000, 3, 'Vòng tay MVMT Minimal Cuff với chất liệu Stainless Steel, kiểu khóa mở cùng kích thước chiều rộng 4mm và chu vi 160mm phù hợp với người có cổ tay trung bình trở lên.', 'vàng', 'MVMT', 'minimal_cuff.png'),
(42, 'MVMT Twist Cuff', 2400000, 3, 'Những bước đầu của chúng tôi dành cho trang sức nam nhằm tôn vinh thiết kế chỉ giữ lại những yếu tố thiết yếu của nó với các đường nét mạnh mẽ, hình học đơn giản và vật liệu hiện đại.', 'bạc ', 'MVMT', 'twist_cuff.png'),
(43, 'MVMT Crown Cuff', 2300000, 3, 'Vòng tay MVMT Crown Cuff, được làm từ Stainless Steel với kiểu dáng trẻ trung và phong cách, là phụ kiện không thể thiếu được của người phụ nữ hiện đại.', 'vàng', 'MVMT', 'crown_cuff.png'),
(44, 'MVMT Charm Cuff', 2400000, 3, 'Vòng tay MVMT Charm Cuff, được làm từ Stainless Steel với kiểu dáng trẻ trung và phong cách, là phụ kiện không thể thiếu được của người phụ nữ hiện đại.', 'vàng', 'MVMT', 'charm_cuff.png'),
(47, 'MVMT Origin Bracelet', 2800000, 3, 'Vòng tay MVMT Origin Bracelet, được làm từ Stainless Steel với kiểu dáng trẻ trung và phong cách, là phụ kiện không thể thiếu được của người phụ nữ hiện đại', 'bạc', 'MVMT', 'origin_bracelet.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orders` (`id_orders`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

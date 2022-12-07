-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 12:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct271_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `full_name`, `email`, `phone_number`, `pass_word`) VALUES
(1, 'Trường', 'truong.lnt123@gmail.com', '0966899548', '$2y$10$yCmcFMdfUXvYyu6C.U9qMucr6p3H/4ttBxWN4GztQh4Hixbxs/bae'),
(2, 'Lê Nhựt Trường', 'truong@gmail.com', '0999999999', '$2y$10$kU7OFYKClpFrRvogoc6PEuAo0g0JuRO/Mbk/4/ZIIwzCC.iNSssoe'),
(3, 'Trường Lê ', 'truongle.lnt123@gmail.com', '1111111111', '$2y$10$k9ajdu22hj.zGqY2KOPP3uvLQWXZ5lx2T6pYWfy9SyuKgAjZ4IXGO'),
(4, 'Trường Lê ', 'truongle@gmail.com', '1111111111', '$2y$10$gjub9r1MfRJU9.wW3OBVWuNF7BvbA4u1zZeCO1Smqy.D3jkzWIycO'),
(5, 'Admin', 'admin@gmail.com', '0966899548', '$2y$10$COavZovNx4q/C3CyG0EyBOeI8SOWD3rbefhu4DgKNqpwOjKXUOdxy'),
(6, 'Trường Đẹp Trai', 'truongdeptrai@gmail.com', '0345639739', '$2y$10$XRQqm130fdeL.JDTv.kGOOQTexS4GJ05CXNBl86GcLplzrGfomVRq'),
(7, 'tô anh duy', 'duy@gmail.com', '9879879879', '$2y$10$G5vpPc1Qex5VnfDe5w46jODD/oowzvWttfT4f5YjAarbqFyCpuRoe'),
(8, 'duy', 'duy1@gmail.com', '9879879879', '$2y$10$C03AgY5CyKRGePEcItpOpuA7jOPqFUjfQlrymfC8.rsWE7weQPowm'),
(9, 'Hồng Cẩm', 'hongcam@gmail.com', '0342389962', '$2y$10$5gU.CGsDcqbDZr2ZOn/shuTyv4tS7v9R/4NVOgoBnE2Zqb2J.0OEi'),
(10, 'Lê Nhựt Trườngg', 'truongg@gmail.com', '0987654321', '$2y$10$BYAwe57ex759Aq598xIC6uMX6GHpouWp1XjQ3jE8nVaj/L9Z50V9S');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'đồng hồ nam'),
(2, 'đồng hồ nữ'),
(3, 'phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `address`, `phone_number`, `email`, `total`, `payment`) VALUES
(1, 'Lê Nhựt Trường', 'vĩnh bình châu thành   an giang', '0966899548', 'truong.lnt@gmail.com', 55600000, 'Thanh toán tiền mặt khi nhận hàng (COD)'),
(2, 'Trường', 'trường đại học cần thơ', '0988422744', 't@gmail.cm', 42630000, 'Thanh toán chuyển khoản (Internet Banking)'),
(3, 'Trường', 'sa đéc sóc trăng an giang', '0966899548', 'truong.lnt123@gmail.com', 41630000, 'Thanh toán qua thẻ tín dụng'),
(4, 'Trường Lê', 'akjgdkajwdgjagwdkajg', '0988422744', 'truongle@gmail.com', 43030000, 'Thanh toán qua thẻ tín dụng'),
(5, 'Duy ', 'an giang châu thành, asdasd', '8979879877', 'duy@gmail.com', 51030000, 'Thanh toán chuyển khoản (Internet Banking)'),
(6, 'Trường Lê ', 'an giangfsafasfasfsafasfas', '1111111111', 'truongle@gmail.com', 5430000, 'Thanh toán qua thẻ tín dụng'),
(7, 'Trường', 'aaaaaaaaaaaaaaaaaaaaaa', '0966899548', 'truong.lnt123@gmail.com', 6430000, 'Thanh toán qua thẻ tín dụng'),
(8, 'Trường', 'bbbbbbbbbbbbbbbbbbbbb', '0966899548', 'truong.lnt123@gmail.com', 17230000, 'Thanh toán tiền mặt khi nhận hàng (COD)'),
(9, 'lê nhựt truòng', 'aksjdhkasdhjuagwdwkgdjwgdjawgdg', '0000000000', '2awd@gmail.com', 2830000, 'Thanh toán qua thẻ tín dụng'),
(10, 'lê nhựt truòng', 'aksjdhkasdhjuagwdwkgdjwgdjawgdg', '0000000000', '2awd@gmail.com', 2830000, 'Thanh toán qua thẻ tín dụng'),
(11, 'Lê Nhựt Trường', 'vĩnh bình châu thành an giang', '0966899548', 'truong.lnt123456789@gmail.com', 23030000, 'Thanh toán chuyển khoản (Internet Banking)'),
(12, 'tô anh duy', 'asjhdkajshdiuhaskfasufhaksdhka', '9879879879', 'duy@gmail.com', 2830000, 'Thanh toán qua thẻ tín dụng'),
(13, 'Trung', '6546546543213215198as7dasd', '9879879787', 'trung@gmail.com', 121030000, 'Thanh toán tiền mặt khi nhận hàng (COD)'),
(14, 'lê nhựt truòng', 'an giang chầu thành awiaidhjdihadil', '0988422744', 'b1910015@student.ctu.edu.vn', 8430000, 'Thanh toán chuyển khoản (Internet Banking)'),
(15, 'lê nhựt trường 123', 'an giang vĩnh bình tân phú', '9879879879', 'truong112222@gmail.com', 114230000, 'Thanh toán qua thẻ tín dụng'),
(16, 'lê nhựt truòng', '987987987987987987897897897', '9879879879', 'truongle@gmail.com', 22730000, 'Thanh toán qua thẻ tín dụng'),
(17, 'Lê Nhựt Trường', 'Tổ 10 242, ấp Vĩnh Thọ, xã Vĩnh Bình, huyện Châu Thành, tỉnh An Giang', '0988422744', 'truongcute@gmail.com', 26030000, 'Thanh toán tiền mặt khi nhận hàng (COD)'),
(18, 'Lê Nhựt Trường kkkkk', 'Vĩnh Bình Châu Thành Kiên Giang', '0912345678', 'truongg@gmail.com', 102730000, 'Thanh toán chuyển khoản (Internet Banking)'),
(19, 'Lê Nhựt Trườngg bbbb', 'cái khế ninh kiều an giang', '0111222333', 'truongg@gmail.com.vn', 52230000, 'Thanh toán qua thẻ tín dụng');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
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
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_name`, `product_img`, `price`, `amount`, `thanhtien`, `id_orders`) VALUES
(1, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 10, 38000000, 1),
(2, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 5, 16000000, 1),
(3, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 1, 1600000, 1),
(4, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 3, 9600000, 2),
(5, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 7, 26600000, 2),
(6, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 4, 6400000, 2),
(7, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 8, 30400000, 3),
(8, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 3, 9600000, 3),
(9, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 1, 1600000, 3),
(10, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 5, 16000000, 4),
(11, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 5, 19000000, 4),
(12, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 5, 8000000, 4),
(13, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 10, 32000000, 5),
(14, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 5, 19000000, 5),
(15, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 1, 3800000, 6),
(16, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 1, 1600000, 6),
(17, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 2, 6400000, 7),
(18, 'Black Link', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp10-c071025e-52d6-4c86-8e35-21f600ee136b.jpg?v=1632724245000', 3200000, 2, 6400000, 8),
(19, 'Coronada Blanc', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp19.jpg?v=1632716413000', 3800000, 2, 7600000, 8),
(20, 'Minimal Cuff', 'https://bizweb.dktcdn.net/thumb/large/100/438/171/products/sp24-4.jpg?v=1632902539000', 1600000, 2, 3200000, 8),
(21, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 1, 2800000, 9),
(22, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 1, 2800000, 10),
(23, 'Orient Aubrey', 'aubrey.png', 4600000, 5, 23000000, 11),
(24, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 1, 2800000, 12),
(25, 'Rolex S1', 's1.png', 2800000, 25, 70000000, 13),
(26, 'MVMT Ralley Green Gunmetal', 'ralley_green_gunmetal.png', 5700000, 2, 11400000, 13),
(27, 'Daniel Wellington Sherry', 'sherry.png', 3600000, 11, 39600000, 13),
(28, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 3, 8400000, 14),
(29, 'Orient Aubrey', 'aubrey.png', 4600000, 8, 36800000, 15),
(30, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 3, 8400000, 15),
(31, 'Hublot Axiom', 'axiom.png', 4600000, 15, 69000000, 15),
(32, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 5, 14000000, 16),
(33, 'MVMT Minimal Cuff', 'minimal_cuff.png', 1600000, 1, 1600000, 16),
(34, 'MVMT Twist Cuff', 'twist_cuff.png', 2400000, 1, 2400000, 16),
(35, 'MVMT Charm Cuff', 'charm_cuff.png', 2400000, 1, 2400000, 16),
(36, 'MVMT Crown Cuff', 'crown_cuff.png', 2300000, 1, 2300000, 16),
(37, 'Rolex S1', 's1.png', 2800000, 6, 16800000, 17),
(38, 'Hublot Axiom', 'axiom.png', 4600000, 2, 9200000, 17),
(39, 'MVMT Origin Bracelet', 'origin_bracelet.png', 2800000, 15, 42000000, 18),
(40, 'Orient Aubrey', 'aubrey.png', 4600000, 10, 46000000, 18),
(41, 'Rolex Opar', 'opar.png', 4900000, 3, 14700000, 18),
(42, 'MVMT Desert', 'desert.png', 4100000, 6, 24600000, 19),
(43, 'Daniel Wellington Sherry', 'sherry.png', 3600000, 3, 10800000, 19),
(44, 'MVMT Charm Cuff', 'charm_cuff.png', 2400000, 7, 16800000, 19);

-- --------------------------------------------------------

--
-- Table structure for table `product`
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
-- Dumping data for table `product`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orders` (`id_orders`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

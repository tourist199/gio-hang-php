-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 09:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products_carts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `id_product`, `quantity`, `username`) VALUES
(8, 1, 2, 'khanh'),
(10, 2, 1, 'khanh');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `star` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `desc`, `description`, `star`, `category_id`, `image`) VALUES
(1, 'Iphone 6 plus', 700, 'Điện thoại của Apple', 'Ngoài một số nhược điểm như hệ điều hành khó sử dụng hay không có phím trở lại, tuy nhiên khi bạn đã quen sử dụng iPhone bạn sẽ luôn muốn sử dụng tiếp theo các dòng mới của hãng, vì thiết kế sang trọng, tinh tế, máy thao tác nhanh, chụp ảnh đẹp.\r\n\r\n          Công nghệ màn hình	LED-backlit IPS LCD\r\n          Độ phân giải	Full HD (1080 x 1920 Pixels)\r\n          Màn hình rộng	5.5\"\r\n          Mặt kính cảm ứng	Kính oleophobic (ion cường lực)\r\n          Độ phân giải	8 MP\r\n          Quay phim	Quay phim FullHD 1080p@60fps\r\n          Đèn Flash	Có\r\n          Chụp ảnh nâng cao	Tự động lấy nét, Chạm lấy nét, Nhận diện khuôn mặt, HDR, Panorama, Chống rung quang học (OIS)\r\n          Độ phân giải	1.2 MP\r\n          Videocall	Có\r\n          Thông tin khác	Tự động lấy nét, Nhận diện khuôn mặt, Tự động cân bằng sáng\r\n          Hệ điều hành	iOS 9\r\n          Chipset (hãng SX CPU)	Apple A8 2 nhân 64-bit\r\n          Tốc độ CPU	1.4 GHz\r\n          Chip đồ họa (GPU)	PowerVR GX6450\r\n          RAM	1 GB\r\n          Bộ nhớ trong	16 GB\r\n          Bộ nhớ còn lại (khả dụng)	13.5 GB\r\n          Thẻ nhớ ngoài	Không\r\n          Mạng di động	3G, 4G LTE Cat 4\r\n          SIM	1 Nano SIM\r\n          Wifi	Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot\r\n          GPS	A-GPS, GLONASS\r\n          Bluetooth	A2DP, V4.0\r\n          Cổng kết nối/sạc	Lightning\r\n          Jack tai nghe	3.5 mm\r\n          Kết nối khác	Không\r\n          Thiết kế	Nguyên khối, mặt kính cong 2.5D\r\n          Chất liệu	Hợp kim nhôm\r\n          Kích thước	Dài 158.1 mm - Ngang 77.8 mm - Dày 7.1 mm\r\n          Trọng lượng	172 g\r\n          Dung lượng pin	2915 mAh\r\n          Loại pin	Pin chuẩn Li-Ion\r\n          Công nghệ pin	Tiết kiệm pin\r\n          Bảo mật nâng cao	Mở khóa bằng vân tay\r\n          Tính năng đặc biệt	Mặt kính 2.5D\r\n          Ghi âm	Có\r\n          Radio	Không\r\n          Xem phim	MP4, AVI, WMV, H.263, H.264(MPEG4-AVC), DivX, Xvid\r\n          Nghe nhạc	AMR, MP3, WAV, WMA, eAAC+', '4', 1, 'https://cdn.tgdd.vn/Products/Images/42/87846/iphone-6s-plus-32gb-400x460.png'),
(2, 'Samsung galaxy s10', 2000, 'Điện thoại của Samsung', 'Tuyệt tác của thiết kế với màn hình Infinity-O độc đáo lần đầu tiên đã xuất hiện. Không đơn thuần là một chiếc điện thoại, Samsung S10 còn là đỉnh cao của công nghệ.\r\n\r\n          Samsung S10\r\n          \r\n          Màn hình vô cực Infinity-O, xóa bỏ mọi giới hạn\r\n          Gần như toàn bộ phần viền màn hình đã được loại bỏ trên Samsung Galaxy S10, không có tai thỏ, không bị hạn chế tầm nhìn, trước mắt bạn là màn hình cực lớn 6,1 inch hiển thị vô cùng sống động. Viền cong siêu mỏng tràn cả 4 cạnh kết hợp cùng các đường cắt laser chuẩn xác khéo léo giấu kín camera nằm ngay trên màn hình. Galaxy S10 xứng đáng được gọi là một kiệt tác ngay trên tay bạn.\r\n          \r\n          Màn hình Samsung S10\r\n          \r\n          Công nghệ màn hình Dynamic AMOLED thế hệ mới mang đến hình ảnh chuẩn HDR10+, độ phân giải Quad HD+ siêu sắc nét. Mọi khung hình đều hiện lên chân thực, độ tương phản cao và màu sắc vô cùng sống động. Màn hình hiển thị chuẩn điện ảnh, kết hợp cùng hệ thống âm thanh nổi của loa ngoài stereo, công nghệ Dolby Atmos khiến Samsung S10 trở thành phương tiện giải trí di động hoàn hảo nhất.\r\n          \r\n          Tương lai của công nghệ bảo mật với cảm biến vân tay siêu âm\r\n          Không còn cảm biến vân tay ở mặt lưng nữa, giờ đây với công nghệ vân tay siêu âm, Galaxy S10 đã tích hợp cảm biến vân tay ngay trên màn hình chính. Đây là một bước tiến lớn trong công nghệ bảo mật. Cảm biến sẽ sử dụng sóng siêu âm để nhận dạng 3D vân tay của bạn, giúp bạn là người duy nhất có thể truy cập vào máy, vô cùng tiện lợi và an toàn tuyệt đối.', '5', 2, 'https://static.bhphoto.com/images/images500x500/samsung_sm_g973uzbaxaa_galaxy_s10_sm_g973u_128gb_1550829635_1456401.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `password`) VALUES
('khanh', 'khánh', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f3` (`id_product`),
  ADD KEY `f4` (`username`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`id_product`),
  ADD KEY `fk2` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `f3` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `f4` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

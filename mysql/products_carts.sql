-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 02:48 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `products_carts`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_product`, `quantity`, `date`, `username`) VALUES
(4, 1, 1, '2019-11-26 04:17:56', 'khanh'),
(8, 2, 2, '2019-12-02 20:06:33', 'khanh'),
(9, 4, 2, '2019-12-03 07:43:27', 'test'),
(10, 2, 1, '2019-12-03 07:43:27', 'test'),
(11, 1, 1, '2019-12-03 07:43:27', 'test'),
(12, 2, 2, '2019-12-10 08:09:53', 'khanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `id_product`, `quantity`, `username`) VALUES
(38, 2, 1, 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Nokia'),
(4, 'Vinsmart');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `desc`, `description`, `star`, `category_id`, `image`) VALUES
(1, 'Iphone 6 plus ++', 700, 'Điện thoại của Apple', '<p><img alt=\"\" src=\"upload/624121331.jpg\" style=\"height:96px; width:96px\" />Ngo&agrave;i một số nhược điểm như hệ điều h&agrave;nh kh&oacute; sử dụng hay kh&ocirc;ng c&oacute; ph&iacute;m trở lại, tuy nhi&ecirc;n khi bạn đ&atilde; quen sử dụng iPhone bạn sẽ lu&ocirc;n muốn sử dụng tiếp theo c&aacute;c d&ograve;ng mới của h&atilde;ng, v&igrave; thiết kế sang trọng, tinh tế, m&aacute;y thao t&aacute;c nhanh, chụp ảnh đẹp. C&ocirc;ng nghệ m&agrave;n h&igrave;nh LED-backlit IPS LCD Độ ph&acirc;n giải Full HD (1080 x 1920 Pixels) M&agrave;n h&igrave;nh rộng 5.5&quot; Mặt k&iacute;nh cảm ứng K&iacute;nh oleophobic (ion cường lực) Độ ph&acirc;n giải 8 MP Quay phim Quay phim FullHD 1080p@60fps Đ&egrave;n Flash C&oacute; Chụp ảnh n&acirc;ng cao Tự động lấy n&eacute;t, Chạm lấy n&eacute;t, Nhận diện khu&ocirc;n mặt, HDR, Panorama, Chống rung quang học (OIS) Độ ph&acirc;n giải 1.2 MP Videocall C&oacute; Th&ocirc;ng tin kh&aacute;c Tự động lấy n&eacute;t, Nhận diện khu&ocirc;n mặt, Tự động c&acirc;n bằng s&aacute;ng Hệ điều h&agrave;nh iOS 9 Chipset (h&atilde;ng SX CPU) Apple A8 2 nh&acirc;n 64-bit Tốc độ CPU 1.4 GHz Chip đồ họa (GPU) PowerVR GX6450 RAM 1 GB Bộ nhớ trong 16 GB Bộ nhớ c&ograve;n lại (khả dụng) 13.5 GB Thẻ nhớ ngo&agrave;i Kh&ocirc;ng Mạng di động 3G, 4G LTE Cat 4 SIM 1 Nano SIM Wifi Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot GPS A-GPS, GLONASS Bluetooth A2DP, V4.0 C&ocirc;̉ng k&ecirc;́t n&ocirc;́i/sạc Lightning Jack tai nghe 3.5 mm Kết nối kh&aacute;c Kh&ocirc;ng Thiết kế Nguy&ecirc;n khối, mặt k&iacute;nh cong 2.5D Chất liệu Hợp kim nh&ocirc;m K&iacute;ch thước D&agrave;i 158.1 mm - Ngang 77.8 mm - D&agrave;y 7.1 mm Trọng lượng 172 g Dung lượng pin 2915 mAh Loại pin Pin chuẩn Li-Ion C&ocirc;ng nghệ pin Tiết kiệm pin Bảo mật n&acirc;ng cao Mở kh&oacute;a bằng v&acirc;n tay T&iacute;nh năng đặc biệt Mặt k&iacute;nh 2.5D Ghi &acirc;m C&oacute; Radio Kh&ocirc;ng Xem phim MP4, AVI, WMV, H.263, H.264(MPEG4-AVC), DivX, Xvid Nghe nhạc AMR, MP3, WAV, WMA, eAAC+</p>\r\n', '4', 1, 'upload/817987901.jpeg'),
(2, 'Samsung galaxy s10', 2000, 'Điện thoại của Samsung', 'Tuyệt tác của thiết kế với màn hình Infinity-O độc đáo lần đầu tiên đã xuất hiện. Không đơn thuần là một chiếc điện thoại, Samsung S10 còn là đỉnh cao của công nghệ.\r\n\r\n          Samsung S10\r\n          \r\n          Màn hình vô cực Infinity-O, xóa bỏ mọi giới hạn\r\n          Gần như toàn bộ phần viền màn hình đã được loại bỏ trên Samsung Galaxy S10, không có tai thỏ, không bị hạn chế tầm nhìn, trước mắt bạn là màn hình cực lớn 6,1 inch hiển thị vô cùng sống động. Viền cong siêu mỏng tràn cả 4 cạnh kết hợp cùng các đường cắt laser chuẩn xác khéo léo giấu kín camera nằm ngay trên màn hình. Galaxy S10 xứng đáng được gọi là một kiệt tác ngay trên tay bạn.\r\n          \r\n          Màn hình Samsung S10\r\n          \r\n          Công nghệ màn hình Dynamic AMOLED thế hệ mới mang đến hình ảnh chuẩn HDR10+, độ phân giải Quad HD+ siêu sắc nét. Mọi khung hình đều hiện lên chân thực, độ tương phản cao và màu sắc vô cùng sống động. Màn hình hiển thị chuẩn điện ảnh, kết hợp cùng hệ thống âm thanh nổi của loa ngoài stereo, công nghệ Dolby Atmos khiến Samsung S10 trở thành phương tiện giải trí di động hoàn hảo nhất.\r\n          \r\n          Tương lai của công nghệ bảo mật với cảm biến vân tay siêu âm\r\n          Không còn cảm biến vân tay ở mặt lưng nữa, giờ đây với công nghệ vân tay siêu âm, Galaxy S10 đã tích hợp cảm biến vân tay ngay trên màn hình chính. Đây là một bước tiến lớn trong công nghệ bảo mật. Cảm biến sẽ sử dụng sóng siêu âm để nhận dạng 3D vân tay của bạn, giúp bạn là người duy nhất có thể truy cập vào máy, vô cùng tiện lợi và an toàn tuyệt đối.', '5', 2, 'https://static.bhphoto.com/images/images500x500/samsung_sm_g973uzbaxaa_galaxy_s10_sm_g973u_128gb_1550829635_1456401.jpg'),
(3, 'Nokia 1202', 300, 'Điện thoại nokia', 'Nokia 1202 Chính Hãng\r\n          \r\n          Tên sản phẩm: Nokia 1202\r\n          Kích thước: 105.3 x 45 x 13.1 mm, nặng 78g\r\n          Main chính hãng Nokia 1202 vỏ làm lại mới\r\n          Cam kết chỉ bán hàng MAIN 100% NOKIA\r\n          Phụ kiện: 1 pin + sạc\r\n          Màu sắc: đen và xanh dương\r\n          Bảo hành 12 tháng, đổi máy trong 7 ngày nếu bị lỗi của NSX\r\n          Giao nhận và bảo hành toàn quốc', '5', 3, 'https://didongso.com.vn/wp-content/uploads/2018/09/nokia12-2.png'),
(4, 'Vinsmart Joy1', 700, 'Điện thoại của Vin', 'Đặc điểm nổi bật của Vsmart Joy 1 32GB\r\n\r\n          Vsmart Joy 1, người em út trong gia đình điện thoại Vsmart mới ra mắt, nổi trội với nhiều trang bị hấp dẫn khiến nhiều đối thủ của nó phải ganh tỵ, điển hình là lối thiết kế tràn viền, hiệu năng ổn và còn có cả chuẩn USB Type-C hiện đại.\r\n          Thiết kế đầy trẻ trung, năng động\r\n          Dù thuộc phân khúc smartphone giá rẻ nhưng Vsmart Joy 1 vẫn được chăm chút khá kỹ lưỡng về ngoại hình khi sở hữu lối thiết kế unibody tuyệt đẹp.\r\n          \r\n          Thiết kế điện thoại Vsmart Joy 1\r\n          \r\n          Phần khung được bo cong mềm mại ở các góc giúp bạn luôn cảm thấy thoải mái, dễ chịu khi cầm nắm máy trong thời gian dài.\r\n          \r\n          Phần khung khe sim điện thoại Vsmart Joy 1\r\n          \r\n          Các chi tiết trên máy đều được gia công một cách tỷ mỉ nên sẽ không hề có hiện tượng ọp ẹp nhờ Joy 1 được hoàn thiện nguyên khối và chắc chắn.\r\n          \r\n          Màn hình rộng rãi trên kích thước 5.45 inch\r\n          Nhờ được trang bị màn hình tỷ lệ 18:9 nên bạn sẽ được một không gian vô cùng rộng rãi để thưởng thức những bộ phim hay', '5', 4, 'https://cdn.fptshop.com.vn/Uploads/Originals/2018/12/11/636801240961123743_vsmart-joy1-plus-den-1.png'),
(5, 'samsung galaxy a70 2018', 300, 'Điện thoại của Samsung', 'Đặc điểm nổi bật của Samsung Galaxy A70\r\n          Tìm hiểu thêm\r\n          Bộ sản phẩm chuẩn: Sạc,Tai nghe,Sách hướng dẫn,Hộp,Cây lấy sim,Ốp lưng,Cáp\r\n          \r\n          Samsung Galaxy A70 là một phiên bản phóng to của chiếc Samsung Galaxy A50 đã ra mắt trước đó với nhiều cải tiến tới từ bên trong.\r\n          Màn hình kích thước lớn, trải nghiệm \"đã hơn\"\r\n          Màn hình của chiếc Galaxy A70 có kích thước khá lớn lên đến 6.7 inch độ phân giải Full HD+ trên tấm nền Super AMOLED.\r\n          \r\n          Các cạnh viền bezel được tinh chỉnh mỏng hơn, điều này giúp máy trông gọn gàng và cân xứng hơn rất nhiều.\r\n          \r\n          Samsung vẫn trang bị cho Galaxy A70 một mặt lưng vẫn bằng nhựa, nhưng sử dụng chất liệu cao cấp hơn mà Samsung gọi là “3D Graffitistic”.\r\n          Ngôn ngữ nhựa giả thủy tinh này cho trải nghiệm tốt hơn, cứng cáp và chắc chắn, khi nhấn vào không bị ọp ẹp như chất liệu nhựa.\r\n          Galaxy A70 có 3 màu sắc bán ra tương tự các dòng sản phẩm thấp hơn trước đó là \"Đen, Trắng và Xanh\". Cả 3 phiên bản này đều được trang bị thêm hiệu ứng lấp lánh nhiều màu khi nghiêng theo góc nhìn rất đẹp mắt.\r\n          Cảm biến vân tay dưới màn hình tiên tiến\r\n          Tương tự như người anh em Galaxy A50 thì Galaxy A70 vẫn sở hữu cho mình công nghệ cảm biến vân tay dưới màn hình đang rất hot hiện nay.\r\n          Tốc độ nhận diện và mở khóa máy khá nhanh giúp bạn tiết kiệm được thời gian so với việc nhập mật khẩu thông thường.', '4', 2, 'https://cdn.fptshop.com.vn/Uploads/Originals/2019/4/13/636907475981220637_samsung-galaxy-a70-den-1.png'),
(6, 'Iphone Xs max', 1000, 'Điện thoại mới nhì của Apple', 'Màn hình\r\n          Công nghệ màn hình :	Super AMOLED\r\n          Màu màn hình :	16 Triệu\r\n          Chuẩn màn hình :	Super Retina HD\r\n          Độ phân giải màn hình :	1242 x 2688 Pixels\r\n          Màn hình :	6.5 inchs\r\n          Mặt kính màn hình :	Kính Cường Lực\r\n          Camera Trước\r\n          Độ phân giải :	7.0 MP\r\n          Thông tin khác :	Selfie ngược sáng HDR, Camera góc rộng, Nhận diện khuôn mặt\r\n          Camera Sau\r\n          Độ phân giải :	Dual Camera 12.0 MP\r\n          Quay phim :	4K\r\n          Đèn Flash :	Có\r\n          Chụp ảnh nâng cao :	Zoom quang học, Chụp ảnh xóa phông, A.I Camera, HDR, Panorama, Chống rung quang học\r\n          Cấu hình phần cứng\r\n          Tốc độ CPU :	Đang cập nhật\r\n          Số nhân :	6\r\n          Chipset :	Apple A12 Bionic\r\n          RAM :	4 GB\r\n          Chip đồ họa (GPU) :	Apple GPU 4 nhân\r\n          Cảm biến :	3D Touch\r\n          Bộ nhớ & Lưu trữ\r\n          Danh bạ lưu trữ :	Không giới hạn', '5', 1, 'https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-400x460.png'),
(13, 'Iphone 1002sad', 1144, 'đt apple', '<p><em>Dt asdasdsa d&aacute; dsadsaddsada<strong>dsadsadsadsa</strong></em></p>\r\n\r\n<p><em><strong><img alt=\"\" src=\"upload/1260199328.png\" style=\"height:300px; width:300px\" /></strong></em></p>\r\n', '1', 1, 'upload/66309837_2328033627251759_8435825921264451584_n.jpg'),
(15, 'Iphone SE', 1222, 'Điện thoại Apple', '<h3><strong>Cấu h&igrave;nh mạnh mẽ nhất hiện nay</strong></h3>\r\n\r\n<p>Tuy l&agrave; phi&ecirc;n bản với m&agrave;n h&igrave;nh b&eacute; nhưng kh&ocirc;ng v&igrave; thế m&agrave; iPhone SE bị cắt giảm đi cấu h&igrave;nh so với thế hệ iPhone 6s hay 6s Plus. M&aacute;y vẫn được trang bị bộ vi xử l&yacute;&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chip-xu-ly-apple-a9-tren-iphone-6s-va-6s-plus-733695\" target=\"_blank\">Apple A9</a>&nbsp;+ M9 motion processor với 2 nh&acirc;n tốc độ 1.8 GHz, đồ họa PowerVR GT7600 mới nhất v&agrave; mạnh mẽ nhất đến từ Apple.</p>\r\n\r\n<p><img alt=\"\" src=\"upload/1004827600.jpg\" style=\"height:627px; width:760px\" /></p>\r\n\r\n<p><em>Hiệu năng h&agrave;ng đầu</em></p>\r\n\r\n<p>iPhone SE sẽ đem đến cho bạn một trải nghiệm mượt m&agrave; v&agrave; trơn tru với cấu h&igrave;nh khủng của m&igrave;nh, việc chơi game nặng hay chơi c&aacute;c video độ ph&acirc;n giải cao với iPhone SE sẽ trở n&ecirc;n dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng hơn bao giờ hết.</p>\r\n\r\n<h3><strong>Camera 12 MP cho ảnh chụp đẹp</strong></h3>\r\n\r\n<p>Camera tr&ecirc;n iPhone SE cũng l&agrave; sự n&acirc;ng cấp lớn so với thế hệ iPhone 5S cũ với camera ch&iacute;nh 12 MP. iPhone SE cũng hỗ trợ t&iacute;nh năng Live Photo tương tự như tr&ecirc;n iPhone 6s cho bạn những bức ảnh vui nhộn để chia sẻ với bạn b&egrave;.</p>\r\n\r\n<p><img alt=\"\" src=\"upload/907536529.jpg\" style=\"height:367px; width:640px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '4', 1, 'upload/ipse.jpg'),
(16, 'Samsung Galaxy A80', 500, 'Điện thoại của samsung', '<h2><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-a80\" target=\"_blank\">Samsung Galaxy A80</a>&nbsp;l&agrave; chiếc smartphone mang trong m&igrave;nh rất nhiều đột ph&aacute; của Samsung v&agrave; hứa hẹn sẽ l&agrave; &quot;ngọn cờ đầu&quot; cho những chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;sở hữu một m&agrave;n h&igrave;nh tr&agrave;n viền thật sự.</h2>\r\n\r\n<h3><em><strong>Camera vừa trượt vừa xoay đầu ti&ecirc;n tr&ecirc;n thế giới</strong></em></h3>\r\n\r\n<p>Thực tế th&igrave; xu hướng m&agrave;n h&igrave;nh tr&agrave;n viền đ&atilde; bắt đầu c&aacute;ch đ&acirc;y kh&aacute; l&acirc;u nhưng c&oacute; rất &iacute;t c&aacute;c h&atilde;ng c&oacute; thể mang một m&agrave;n h&igrave;nh tr&agrave;n viền đ&uacute;ng nghĩa l&ecirc;n chiếc smartphone của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"upload/1365152455.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Chất lượng camera kh&ocirc;ng k&eacute;m flagship</h3>\r\n\r\n<p>Samsung Galaxy A80 l&agrave; chiếc smartphone d&ograve;ng A đầu ti&ecirc;n được Samsung ưu &aacute;i mang l&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cam-bien-camera-time-of-flight-tof-la-gi-no-duoc-dung-lam-gi-1154334\" target=\"_blank\">cảm biến 3D ToF</a>&nbsp;gi&uacute;p tăng khả năng nhận diện độ s&acirc;u, hỗ trợ quay video xo&aacute; ph&ocirc;ng v&agrave; c&aacute;c t&iacute;nh năng AR th&uacute; vị.</p>\r\n', '4', 2, 'upload/samsung-galaxy-a80-16.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `name`, `password`, `admin`) VALUES
('admin', 'Admin', '123', b'1'),
('khanh', 'khánh', '123', b'0'),
('test', 'Tester đẹp trai', '123', b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f3` (`id_product`),
  ADD KEY `f4` (`username`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`id_product`),
  ADD KEY `fk2` (`username`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `f3` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f4` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

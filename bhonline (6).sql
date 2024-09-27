-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 17, 2024 lúc 05:33 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bhonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `idhd` int NOT NULL,
  `idsp` int NOT NULL,
  `slban` int NOT NULL,
  `dongia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`idhd`, `idsp`, `slban`, `dongia`) VALUES
(0, 4, 1, 340000),
(12, 4, 1, 340000),
(12, 7, 1, 455000),
(13, 1, 1, 340000),
(13, 2, 1, 250000),
(13, 3, 1, 270000),
(14, 1, 1, 340000),
(15, 4, 1, 340000),
(15, 5, 1, 543300),
(15, 6, 1, 543300),
(16, 5, 1, 543300),
(16, 6, 1, 543300),
(16, 2, 1, 250000),
(17, 2, 1, 250000),
(17, 1, 1, 340000),
(18, 1, 1, 340000),
(19, 1, 1, 340000),
(20, 10, 3, 250000),
(20, 5, 5, 543300),
(21, 6, 1, 543300),
(21, 2, 1, 250000),
(21, 1, 1, 340000),
(22, 2, 1, 250000),
(22, 6, 1, 543300),
(22, 10, 1, 250000),
(22, 5, 2, 543300),
(22, 3, 3, 270000),
(23, 13, 2, 89000),
(23, 14, 1, 50000),
(23, 16, 1, 50000),
(24, 13, 1, 89000),
(24, 14, 1, 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `idnv` int NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` int NOT NULL,
  `quyen` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `idct` int NOT NULL,
  `tenct` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tenndd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` int NOT NULL,
  `stk` int NOT NULL,
  `mst` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia`
--

CREATE TABLE `gia` (
  `idgia` int NOT NULL,
  `idsp` int NOT NULL,
  `dongianhap` int NOT NULL,
  `dongiaban` int NOT NULL,
  `ngayad` date NOT NULL,
  `chon` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gia`
--

INSERT INTO `gia` (`idgia`, `idsp`, `dongianhap`, `dongiaban`, `ngayad`, `chon`) VALUES
(1, 1, 240000, 340000, '2024-01-02', '1'),
(2, 2, 345000, 250000, '2024-01-23', '1'),
(3, 3, 255000, 270000, '2024-01-19', '1'),
(4, 4, 255000, 340000, '2024-01-23', '1'),
(5, 5, 345000, 543300, '2024-01-02', '1'),
(6, 6, 255000, 543300, '2024-01-23', '1'),
(7, 7, 345000, 455000, '2024-01-23', '1'),
(8, 10, 120000, 250000, '2024-06-01', '1'),
(9, 11, 120000, 250000, '2024-06-16', '1'),
(10, 12, 100000, 90000, '2024-06-13', '1'),
(11, 13, 120000, 89000, '2024-06-26', '1'),
(12, 14, 70000, 50000, '2024-05-29', '1'),
(13, 15, 60000, 55000, '2024-06-10', '1'),
(14, 16, 100000, 50000, '2024-06-05', '1'),
(16, 17, 120000, 100000, '2024-06-10', '1'),
(17, 18, 133000, 112000, '2024-06-06', '1'),
(18, 19, 100000, 99000, '2024-06-08', '1'),
(19, 20, 75000, 60000, '2024-06-09', '1'),
(20, 21, 80000, 75000, '2024-06-11', '1'),
(21, 22, 70000, 55000, '2024-06-11', '1'),
(22, 24, 120000, 50000, '2024-06-01', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsx`
--

CREATE TABLE `hangsx` (
  `idhang` int NOT NULL,
  `tenhang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsx`
--

INSERT INTO `hangsx` (`idhang`, `tenhang`) VALUES
(5, 'Món ăn kèm'),
(6, 'Gà rán'),
(7, 'Burger'),
(8, 'Sandwich');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int NOT NULL,
  `idkh` int NOT NULL,
  `ngaymua` date NOT NULL,
  `noidung` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phuongthuctt` int NOT NULL,
  `trangthai` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `idkh`, `ngaymua`, `noidung`, `phuongthuctt`, `trangthai`) VALUES
(9, 1, '2024-04-03', 'Mua hang online.', 1, 0),
(10, 1, '2024-04-03', 'Mua hang online.', 1, 2),
(11, 1, '2024-04-03', 'Mua hang online.', 2, 0),
(12, 1, '2024-04-03', 'Mua hang online.', 2, 1),
(13, 2, '2024-04-03', 'Mua hang online.', 3, 0),
(14, 2, '2024-04-08', 'Mua hang online.', 1, 1),
(15, 1, '2024-04-20', 'Mua hang online.', 1, 4),
(16, 2, '2024-05-14', 'Mua hang online.', 2, 2),
(17, 2, '2024-05-14', 'Mua hang online.', 3, 0),
(18, 1, '2024-05-30', 'Mua hang online.', 1, 0),
(19, 1, '2024-05-30', 'Mua hang online.', 2, 4),
(20, 3, '2024-06-03', 'Mua hang online.', 2, 0),
(21, 2, '2024-06-04', 'Mua hang online.', 3, 0),
(22, 1, '2024-06-15', 'Mua hang online.', 3, 0),
(23, 1, '2024-06-16', 'Mua hang online.', 2, 0),
(24, 3, '2024-06-17', 'Mua hang online.', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `quyentruycap` int NOT NULL,
  `diachikh` varchar(50) NOT NULL,
  `sdtkh` int NOT NULL,
  `mstkh` int NOT NULL,
  `emailkh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `tenkh`, `tendangnhap`, `password`, `quyentruycap`, `diachikh`, `sdtkh`, `mstkh`, `emailkh`) VALUES
(1, 'Quản trị viên', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0, '123 Nguyễn Lương Bằng', 2334667, 12345679, 'admin@gmail.com'),
(2, 'Đỗ Thị Khánh Hân', 'han', '827ccb0eea8a706c4c34a16891f84e7b', 1, '123 Hòa Nhơn, Hòa Vang', 9248645, 23456777, 'han@gmail.com'),
(3, 'Đỗ Thị Hạnh', 'Hanh', '827ccb0eea8a706c4c34a16891f84e7b', 0, '123 Nguyễn Lương Bằng', 2334667, 12345679, 'hanh@gmail.com'),
(4, 'Võ Thị Kim Thoa', 'Thoa', '12345', 1, '123 Nguyễn Lương Bằng - Liên Chiểu - Đà Nẵng', 2152512, 12345655, 'thoa@gmail.com'),
(6, 'Trần Thị Thu Thảo', 'Thao', '12345', 0, '123 Nguyễn Lương Bằng - Liên Chiểu - Đà Nẵng', 4575222, 12345655, 'thao@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `idloaisp` int NOT NULL,
  `tenloaisp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`idloaisp`, `tenloaisp`) VALUES
(8, 'Bánh Ngọt'),
(9, 'Thức ăn nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `idncc` int NOT NULL,
  `tenncc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nguoidaidien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sdtncc` int NOT NULL,
  `stkncc` int NOT NULL,
  `emailncc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachincc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`idncc`, `tenncc`, `nguoidaidien`, `sdtncc`, `stkncc`, `emailncc`, `diachincc`) VALUES
(1, 'Nguyễn Văn Linh', 'Linh', 35251111, 564215421, 'linh@gmail.com', '123 Nguyễn Lương Bằng'),
(2, 'Phạm Khánh', 'Khánh', 2152512, 12345655, 'khanh@gmail.com', '123 Nguyễn Lương Bằng - Liên Chiểu - Đà Nẵng'),
(3, 'Phạm Thị Quí', 'Quí', 4575222, 12345655, 'qui@gmail.com', '123 Nguyễn Lương Bằng - Liên Chiểu - Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int NOT NULL,
  `tennv` int NOT NULL,
  `diachinv` int NOT NULL,
  `sdtnv` int NOT NULL,
  `stknv` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `idloaisp` int NOT NULL,
  `idncc` int NOT NULL,
  `idhang` int NOT NULL,
  `motasp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hddsp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `idloaisp`, `idncc`, `idhang`, `motasp`, `hddsp`) VALUES
(11, 'Burger Whopper phô mai thịt xông khói', 9, 2, 7, 'Burger Whopper phô mai thịt xông khói là một món ăn đặc biệt trong thực đơn của Burger King, nổi bật với hương vị thơm ngon và đậm đà. Chiếc burger này kết hợp hoàn hảo giữa miếng thịt bò nướng trên lửa, mang đến hương vị khói đặc trưng, cùng với các lát phô mai tan chảy mềm mại và thịt xông khói giòn rụm. Sự kết hợp này tạo ra một trải nghiệm ẩm thực phong phú, hấp dẫn mọi thực khách.\r\n\r\nBên cạnh đó, Whopper phô mai thịt xông khói còn được bổ sung thêm rau diếp tươi xanh, cà chua mọng nước, hành tây giòn và dưa chuột muối chua, tất cả được kẹp giữa hai lát bánh mì mè mềm mại. Nước sốt mayonnaise và sốt cà chua thơm ngon được phết đều, giúp kết nối các nguyên liệu với nhau, mang lại hương vị tuyệt hảo trong mỗi miếng cắn.\r\n\r\nMón ăn này không chỉ là sự lựa chọn lý tưởng cho những ai yêu thích burger mà còn là điểm nhấn đáng thử cho bất kỳ ai muốn trải nghiệm một chiếc burger đậm đà, chất lượng cao. Whopper phô mai thịt xông khói thực sự là biểu tượng của sự kết hợp hoàn hảo giữa hương vị và chất lượng, đem lại sự hài lòng tối đa cho người thưởng thức.', 'a.jpg'),
(12, 'Burger Cá', 9, 3, 7, '\r\nBurger cá là một món ăn nhanh phổ biến, thường được ưa chuộng bởi những người yêu thích hương vị biển cả và muốn thưởng thức một lựa chọn thay thế lành mạnh hơn so với burger thịt. Chiếc bánh burger này thường bao gồm một miếng cá tẩm bột chiên giòn, đặt trong một chiếc bánh mì mềm mại. Loại cá được sử dụng phổ biến nhất là cá tuyết hoặc cá phi lê, được chế biến sao cho giữ được độ ngọt tự nhiên và thịt mềm mại.\r\n\r\nThành phần chính của burger cá không chỉ là miếng cá chiên giòn mà còn đi kèm với các loại rau tươi như xà lách, cà chua, và hành tây, tạo sự cân bằng về dinh dưỡng và hương vị. Đặc biệt, sốt tartar, một loại sốt kem chua với các loại thảo mộc và dưa chua, thường được thêm vào để tăng thêm hương vị độc đáo cho món ăn. Ngoài ra, một số nơi còn bổ sung thêm phô mai, làm cho burger cá thêm phần hấp dẫn và phong phú.\r\n\r\nBurger cá không chỉ là một món ăn ngon miệng mà còn mang lại lợi ích về sức khỏe. Cá là nguồn cung cấp protein chất lượng cao, omega-3, và các dưỡng chất thiết yếu khác, tốt cho tim mạch và hệ thần kinh. Với sự kết hợp hoàn hảo giữa hương vị và dinh dưỡng, burger cá đã trở thành một lựa chọn tuyệt vời cho bữa ăn nhanh, phù hợp với mọi lứa tuổi và khẩu vị.', '6-burger-ca.jpg'),
(13, 'Burger gà giòn cay', 9, 1, 7, 'Burger gà giòn cay là một món ăn nhanh được yêu thích bởi hương vị đậm đà và độ giòn rụm đặc trưng. Thành phần chính của món burger này là miếng gà tẩm bột chiên giòn, được tẩm ướp kỹ lưỡng với các loại gia vị cay nồng như ớt bột, tiêu, và các loại thảo mộc. Quá trình chiên giúp miếng gà có lớp vỏ ngoài giòn tan, bên trong vẫn giữ được độ mềm mọng và đậm đà hương vị.\r\n\r\nChiếc bánh mì burger mềm mại, thường được phết thêm một lớp sốt mayonnaise hoặc sốt cay để tăng thêm hương vị. Rau tươi như xà lách, cà chua, và dưa leo được thêm vào để cân bằng độ cay và mang lại sự tươi mát cho món ăn. Một số biến tấu của burger gà giòn cay còn bổ sung thêm phô mai tan chảy, làm tăng thêm độ béo ngậy và hấp dẫn.', 'b.jpg'),
(14, 'Burger gà nướng', 9, 2, 7, 'Burger gà nướng là một lựa chọn hoàn hảo cho những ai yêu thích hương vị thơm ngon và lành mạnh. Thành phần chính của món burger này là miếng ức gà được tẩm ướp gia vị và nướng chín tới. Quá trình nướng giúp giữ lại độ ẩm và vị ngọt tự nhiên của thịt gà, đồng thời mang đến hương vị đặc trưng của món nướng.\r\n\r\nBánh mì burger mềm mại được bổ sung thêm một lớp sốt mayonnaise hoặc sốt BBQ để tăng thêm hương vị. Rau tươi như xà lách, cà chua, và hành tây thái mỏng được thêm vào để cung cấp độ giòn và sự tươi mát. Một lát phô mai tan chảy có thể được thêm lên trên miếng gà nướng để tăng thêm độ béo ngậy và hấp dẫn.Sự kết hợp hoàn hảo giữa vị ngọt tự nhiên của thịt gà, hương thơm của món nướng, và độ tươi mát của rau xanh làm cho burger gà nướng trở thành một món ăn không thể bỏ qua, đặc biệt trong những bữa ăn ngoài trời hoặc picnic cùng gia đình và bạn bè.', 'd.jpg'),
(15, 'Khoai tây phô mai', 1, 1, 5, 'Khoai tây tắm phô mai là một món ăn vặt hấp dẫn và ngon miệng, phù hợp cho mọi lứa tuổi. Món ăn này thường được làm từ khoai tây chiên giòn, phủ lên trên là lớp phô mai tan chảy, tạo nên sự kết hợp hoàn hảo giữa vị béo ngậy và độ giòn rụm.Đầu tiên, khoai tây được cắt thành thanh dài và mỏng, sau đó chiên vàng giòn trong dầu nóng. Khi khoai tây đạt độ giòn hoàn hảo, chúng được lấy ra và để ráo dầu. Lớp phô mai thường là phô mai cheddar hoặc mozzarella, được đun chảy và rưới đều lên khắp bề mặt khoai tây chiên. Để tăng thêm hương vị, nhiều người còn rắc thêm ít hành lá thái nhỏ, thịt xông khói giòn, hoặc một ít ớt bột để tạo sự cay nồng hấp dẫn.Khoai tây tắm phô mai không chỉ là món ăn vặt lý tưởng cho các buổi tụ họp bạn bè, mà còn là món ăn kèm tuyệt vời cho các bữa tiệc nướng hay những buổi tối xem phim tại nhà. Vị béo của phô mai kết hợp với khoai tây chiên giòn tan trong miệng, tạo nên một trải nghiệm ẩm thực khó quên.', 'sp_1718526298_t.jpg'),
(16, 'Phô mai vòng', 1, 1, 5, 'Phô mai vòng, hay còn được gọi là \"Cheese Rings,\" là một món ăn vặt thú vị và hấp dẫn, được làm từ những chiếc bánh vòng giòn rụm với hương vị phô mai đậm đà. Món ăn này rất phổ biến ở nhiều nơi trên thế giới và thường được ưa chuộng trong các buổi tiệc tùng, dã ngoại hay đơn giản là một món ăn nhẹ trong các bữa ăn hàng ngày.  Phô mai vòng thường có kích thước nhỏ, vừa miệng, được chế biến từ các nguyên liệu như bột mì, phô mai, bơ và gia vị. Bột mì được nhào kỹ với bơ và các loại gia vị, sau đó trộn đều với phô mai bào nhỏ. Hỗn hợp này được tạo hình thành những chiếc vòng nhỏ xinh và đem nướng ở nhiệt độ cao cho đến khi vàng giòn. Một số phiên bản khác của món này có thể được chiên thay vì nướng, tạo ra một hương vị và kết cấu khác biệt nhưng không kém phần ngon miệng.  Điểm đặc biệt của phô mai vòng chính là vị béo ngậy của phô mai kết hợp với độ giòn tan của lớp bánh. Khi thưởng thức, bạn sẽ cảm nhận được sự hòa quyện hoàn hảo giữa vị mặn mà của phô mai và vị thơm bùi của bánh, tạo nên một cảm giác thú vị và khó cưỡng.', 'sp_1718526269_sp_1718526105_r.jpg'),
(17, 'Khoai tây chiên', 9, 1, 5, 'Khoai tây chiên, một món ăn vặt phổ biến và được yêu thích trên khắp thế giới, không chỉ bởi hương vị thơm ngon mà còn bởi sự dễ dàng trong việc chế biến. Được làm từ những củ khoai tây tươi ngon, món ăn này thường được cắt thành các thanh dài hoặc miếng mỏng, sau đó chiên giòn trong dầu nóng cho đến khi có màu vàng nâu hấp dẫn.Khoai tây chiên có thể được thưởng thức theo nhiều cách khác nhau. Ở dạng cơ bản, chúng thường được rắc một chút muối để tăng hương vị. Tuy nhiên, có rất nhiều biến tấu sáng tạo với các loại gia vị và nước sốt khác nhau. Một số người thích khoai tây chiên với hương vị ớt cay nồng, bột phô mai, hoặc thậm chí là gia vị thảo mộc để tạo ra sự mới mẻ. Đối với những ai yêu thích sự phong phú, khoai tây chiên còn có thể được ăn kèm với các loại sốt như sốt cà chua, sốt mayonnaise, hay sốt BBQ.', 'sp_1718526048_e.jpg'),
(18, 'Hot dog', 9, 1, 5, 'Hot dog là một món ăn nhanh phổ biến khắp thế giới, với nguồn gốc từ nước Mỹ nhưng đã lan rộng và được biến tấu theo nhiều cách khác nhau tùy theo văn hóa và khẩu vị của từng nơi. Món hot dog gồm một xúc xích được làm từ thịt heo, bò hoặc cả hai, được nướng hoặc luộc và đặt trong một bánh mì dài mềm, có hình dáng và kích thước phù hợp với xúc xích.Hot dog thường được ăn kèm với nhiều loại gia vị và sốt như mustard (mù tạt), ketchup, hành phi, ớt chuông, dưa chua, hạt điều, nước sốt đậu nành, hạt tiêu, bột mù tạt, sốt barbecue, sốt đậu phộng, dưa chua, sốt tương, dầu dừa, gia vị thái, và cà tím.', 'sp_1718526012_l.jpg'),
(19, 'Sandwich cá', 9, 1, 8, 'Sandwich cá là một món ăn phổ biến và đa dạng, được làm từ các loại cá khác nhau tùy thuộc vào vùng miền và sở thích ẩm thực của mỗi người. Món sandwich này thường được làm từ các miếng cá tươi hoặc cá đông lạnh được nướng, chiên hoặc nướng nóng trên một miếng bánh mì mềm, có thể là loại bánh mì sandwich hoặc bánh mì nướng.Món sandwich cá có thể được phục vụ nóng hoặc lạnh tùy vào cách chế biến và thói quen ăn uống của từng người. Đây là món ăn tiện lợi, phù hợp cho bữa ăn sáng, trưa hoặc tối, và có thể được tùy chỉnh theo khẩu vị riêng của mỗi người.', 'sp_1718525983_ư.jpg'),
(20, 'Club sandwich', 9, 1, 8, 'Club sandwich là một loại sandwich kinh điển, được biết đến với sự hài hòa của các lớp nguyên liệu và hương vị hấp dẫn. Thông thường, club sandwich gồm ba tầng bánh mì sandwich (thường là bánh mì toát lên), giữa mỗi tầng là các lớp thịt và rau sống, được kết hợp với sốt và mayonnaise để tăng thêm hương vị. Club sandwich thường được cắt chéo thành ba phần nhỏ, được giữ chặt bằng que thân cây hay những que đặc biệt để không bị rơi ra ngoài khi ăn. Loại sandwich này là một sự kết hợp hoàn hảo giữa các thành phần tươi ngon và bổ dưỡng, thích hợp cho bữa ăn trưa hay những buổi picnic.', 'sp_1718525927_sp_1718513340_b.jpg'),
(21, 'Gà rán', 9, 1, 6, 'Gà rán là món ăn được yêu thích bởi sự đơn giản, thơm ngon và đặc biệt là vị giòn tan của lớp da gà. Phần thịt gà được tẩm ướp với các gia vị như muối, tiêu, tỏi và các loại gia vị khác tùy theo khẩu vị địa phương hoặc công thức riêng của từng nhà hàng. Sau khi ướp gia vị, thịt gà được chiên hoặc rán trong dầu nóng cho đến khi chín và vàng đều, lớp da giòn tan hấp dẫn.Món gà rán thường được phục vụ cùng với các loại xà lách tươi, rau sống, khoai tây chiên hoặc bánh mì sandwich. Ngoài ra, có những loại sốt như sốt cay, sốt mayonnaise, sốt mật ong hoặc sốt BBQ thêm vào để tăng thêm hương vị cho món ăn.Gà rán là món ăn phổ biến trong các nhà hàng nhanh và cũng được yêu thích làm món nhẹ tại gia. Với hương vị đa dạng và sự dễ dàng trong chế biến, gà rán đã trở thành món ăn quen thuộc và được ưa chuộng trên khắp các châu lục.', 'sp_1718525951_q.jpg'),
(22, 'Gà chiên giòn', 9, 3, 6, 'Gà chiên giòn là một món ăn phổ biến và được yêu thích rộng rãi nhờ vào lớp vỏ ngoài giòn tan và phần thịt bên trong mềm mại, đậm đà. Để chế biến món gà chiên giòn, các miếng thịt gà thường được tẩm ướp kỹ lưỡng với gia vị như muối, tiêu, bột tỏi, bột hành, và các loại thảo mộc khác để tạo ra hương vị đặc trưng. Sau khi ướp, thịt gà được nhúng vào bột chiên giòn hoặc hỗn hợp bột mì, bột bắp và trứng để tạo lớp vỏ ngoài giòn rụm.\r\n\r\nGà sau đó được chiên ngập dầu ở nhiệt độ cao cho đến khi có màu vàng óng và lớp vỏ ngoài giòn rụm. Món gà chiên giòn thường được phục vụ kèm với các loại sốt chấm phong phú như sốt tương ớt, sốt BBQ, sốt mật ong hoặc sốt phô mai, tạo nên hương vị đa dạng và hấp dẫn.\r\n\r\nĐặc biệt, món gà chiên giòn thường xuất hiện trong các bữa tiệc, picnic, hoặc đơn giản là bữa ăn hàng ngày, mang đến sự ngon miệng và hài lòng cho mọi lứa tuổi. Thưởng thức gà chiên giòn cùng với khoai tây chiên và salad tươi mát là sự kết hợp tuyệt vời, mang lại trải nghiệm ẩm thực khó quên.', 'ga-chien-gion-1.jpg'),
(24, 'Hamburger', 8, 1, 5, 'ttttttttttttttttrrrrrrrrrrrr', 'sp_1718591112_t.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `s_status`
--

CREATE TABLE `s_status` (
  `id` int NOT NULL,
  `tenStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `s_status`
--

INSERT INTO `s_status` (`id`, `tenStatus`) VALUES
(0, 'Chờ xác nhận'),
(1, 'Đã xác nhận'),
(2, 'Chờ lấy hàng'),
(3, 'Đang giao hàng'),
(4, 'Đã giao hàng'),
(5, 'Đã thanh toán'),
(6, 'Đã hủy đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donvi`
--

CREATE TABLE `tbl_donvi` (
  `iddv` int NOT NULL,
  `TenDV` varchar(150) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(40) NOT NULL,
  `MST` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `tbl_donvi`
--

INSERT INTO `tbl_donvi` (`iddv`, `TenDV`, `DiaChi`, `DienThoai`, `MST`, `Email`, `Website`) VALUES
(1, 'Công ty Fast Food Đà Nẵng', '311 - Nguyễn Tất Thành - Đà Nẵng', '0236 998 998/ 0956 879 987', '04872652442', 'ffdn@gmail.com', 'http://wwww.abchoang.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ton`
--

CREATE TABLE `ton` (
  `idsp` int NOT NULL,
  `slton` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`idct`);

--
-- Chỉ mục cho bảng `gia`
--
ALTER TABLE `gia`
  ADD PRIMARY KEY (`idgia`),
  ADD UNIQUE KEY `sanpham` (`idsp`);

--
-- Chỉ mục cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`idhang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`idloaisp`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`idncc`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `s_status`
--
ALTER TABLE `s_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ton`
--
ALTER TABLE `ton`
  ADD PRIMARY KEY (`idsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gia`
--
ALTER TABLE `gia`
  MODIFY `idgia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `idhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `idloaisp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `idncc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

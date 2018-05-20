-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2018 lúc 02:19 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `academy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `program_id` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `course_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `program_id`, `code`, `course_name`, `body`) VALUES
(1, 1, 'tutu', 'Toan Tu', '<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Một to&aacute;n tử l&agrave; một biểu tượng, m&agrave; n&oacute;i cho compiler thực hiện c&aacute;c thao t&aacute;c to&aacute;n học v&agrave; logic cụ thể. C++ cung cấp nhiều to&aacute;n tử c&oacute; sẵn, đ&oacute; l&agrave;:</p>\r\n\r\n<ul style=\"margin-left:0px; margin-right:0px\">\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử số học</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử quan hệ</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử logic</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử so s&aacute;nh bit</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử g&aacute;n</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử hỗn hợp</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">To&aacute;n tử số học trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Bảng dưới liệt k&ecirc; c&aacute;c to&aacute;n tử số học được hỗ trợ bởi ng&ocirc;n ngữ C++:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Giả sử biến A giữ gi&aacute; trị 10, biến B giữ 20 th&igrave;:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/toan_tu_so_hoc_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử số học trong C++\">V&iacute; dụ to&aacute;n tử số học</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top\">Mi&ecirc;u tả</th>\r\n			<th style=\"text-align:left; vertical-align:top\">V&iacute; dụ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">+</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Cộng hai to&aacute;n hạng</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A + B kết quả l&agrave; 30</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">-</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Trừ to&aacute;n hạng thứ hai từ to&aacute;n hạng đầu</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A - B kết quả l&agrave; -10</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">*</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Nh&acirc;n hai to&aacute;n hạng</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A * B kết quả l&agrave; 200</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">/</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p chia</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">B / A kết quả l&agrave; 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">%</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p lấy số dư</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">B % A kết quả l&agrave; 0</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">++</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_tang_giam_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử tăng (++) trong C++\">To&aacute;n tử tăng (++)</a>, tăng gi&aacute; trị to&aacute;n hạng th&ecirc;m một đơn vị</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A++ kết quả l&agrave; 11</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">--</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_tang_giam_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử giảm (--) trong C++\">To&aacute;n tử giảm (--)</a>, giảm gi&aacute; trị to&aacute;n hạng đi một đơn vị</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A-- kết quả l&agrave; 9</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div class=\"inactive_mobile_ads_only\" style=\"-webkit-text-stroke-width:0px; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:center; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">&nbsp;</div>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">To&aacute;n tử quan hệ trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Bảng dưới đ&acirc;y liệt k&ecirc; c&aacute;c to&aacute;n tử quan hệ được hỗ trợ bởi ng&ocirc;n ngữ C++:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Giả sử biến A giữ gi&aacute; trị 10, biến B giữ 20 th&igrave;:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/toan_tu_quan_he_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử quan hệ trong C++\">V&iacute; dụ to&aacute;n tử quan hệ</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top\">Mi&ecirc;u tả</th>\r\n			<th style=\"text-align:left; vertical-align:top\">V&iacute; dụ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">==</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra nếu 2 to&aacute;n hạng bằng nhau hay kh&ocirc;ng. Nếu bằng th&igrave; điều kiện l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A == B) l&agrave; kh&ocirc;ng đ&uacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">!=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra 2 to&aacute;n hạng c&oacute; gi&aacute; trị kh&aacute;c nhau hay kh&ocirc;ng. Nếu kh&ocirc;ng bằng th&igrave; điều kiện l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A != B) l&agrave; true</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&gt;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra nếu to&aacute;n hạng b&ecirc;n tr&aacute;i c&oacute; gi&aacute; trị lớn hơn to&aacute;n hạng b&ecirc;n phải hay kh&ocirc;ng. Nếu lớn hơn th&igrave; điều kiện l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &gt; B) l&agrave; kh&ocirc;ng đ&uacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra nếu to&aacute;n hạng b&ecirc;n tr&aacute;i nhỏ hơn to&aacute;n hạng b&ecirc;n phải hay kh&ocirc;ng. Nếu nhỏ hơn th&igrave; l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &lt; B) l&agrave; true</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&gt;=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra nếu to&aacute;n hạng b&ecirc;n tr&aacute;i c&oacute; gi&aacute; trị lớn hơn hoặc bằng gi&aacute; trị của to&aacute;n hạng b&ecirc;n phải hay kh&ocirc;ng. Nếu đ&uacute;ng l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &gt;= B) l&agrave; kh&ocirc;ng đ&uacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt;=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Kiểm tra nếu to&aacute;n hạng b&ecirc;n tr&aacute;i c&oacute; gi&aacute; trị nhỏ hơn hoặc bằng to&aacute;n hạng b&ecirc;n phải hay kh&ocirc;ng. Nếu đ&uacute;ng l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &lt;= B) l&agrave; true</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">To&aacute;n tử logic trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Bảng dưới đ&acirc;y chỉ r&otilde; tất cả c&aacute;c to&aacute;n tử logic được hỗ trợ bởi ng&ocirc;n ngữ C.</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Giả sử biến A c&oacute; gi&aacute; trị 1 v&agrave; biến B c&oacute; gi&aacute; trị 0:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/toan_tu_logic_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử logic trong C++\">V&iacute; dụ to&aacute;n tử logic</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top; width:67px\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top; width:370px\">Mi&ecirc;u tả</th>\r\n			<th style=\"text-align:left; vertical-align:top\">V&iacute; dụ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;&amp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Được gọi l&agrave; to&aacute;n tử logic AND (v&agrave;). Nếu cả hai to&aacute;n tử đều c&oacute; gi&aacute; trị kh&aacute;c 0 th&igrave; điều kiện trở l&ecirc;n true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &amp;&amp; B) l&agrave; false.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">||</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Được gọi l&agrave; to&aacute;n tử logic OR (hoặc). Nếu một trong hai to&aacute;n tử kh&aacute;c 0, th&igrave; điều kiện l&agrave; true.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A || B) l&agrave; true.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">!</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Được gọi l&agrave; to&aacute;n tử NOT (phủ định). Sử dụng để đảo ngược lại trạng th&aacute;i logic của to&aacute;n hạng đ&oacute;. Nếu điều kiện to&aacute;n hạng l&agrave; true th&igrave; phủ định n&oacute; sẽ l&agrave; false.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">!(A &amp;&amp; B) l&agrave; true.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div class=\"inactive_mobile_ads_only\" style=\"-webkit-text-stroke-width:0px; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; orphans:2; text-align:center; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px\">\r\n<div class=\"ad_360\" style=\"box-sizing:border-box; text-align:center\">&nbsp;</div>\r\n</div>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">To&aacute;n tử so s&aacute;nh bit trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">To&aacute;n tử so s&aacute;nh bit l&agrave;m việc tr&ecirc;n đơn vị bit, t&iacute;nh to&aacute;n biểu thức so s&aacute;nh từng bit. Bảng dưới đ&acirc;y về &amp;, |, v&agrave; ^ như sau:</p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">p</th>\r\n			<th style=\"text-align:left; vertical-align:top\">q</th>\r\n			<th style=\"text-align:left; vertical-align:top\">p &amp; q</th>\r\n			<th style=\"text-align:left; vertical-align:top\">p | q</th>\r\n			<th style=\"text-align:left; vertical-align:top\">p ^ q</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">0</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Giả sử nếu A = 60; v&agrave; B = 13; th&igrave; b&acirc;y giờ trong định dạng nhị ph&acirc;n ch&uacute;ng sẽ l&agrave; như sau:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">A = 0011 1100</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">B = 0000 1101</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">-----------------</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">A&amp;B = 0000 1100</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">A|B = 0011 1101</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">A^B = 0011 0001</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">~A&nbsp; = 1100 0011</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">C&aacute;c to&aacute;n tử so s&aacute;nh bit được hỗ trợ bởi ng&ocirc;n ngữ C++ được liệt k&ecirc; trong bảng dưới đ&acirc;y. Gi&aacute; sử ta c&oacute; biến A c&oacute; gi&aacute; tri 60 v&agrave; biến B c&oacute; gi&aacute; trị 13, ta c&oacute;:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/toan_tu_so_sanh_bit_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử so sánh bit trong C++\">V&iacute; dụ</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top; width:67px\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top; width:370px\">Mi&ecirc;u tả</th>\r\n			<th style=\"text-align:left; vertical-align:top\">V&iacute; dụ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử AND (v&agrave;) nhị ph&acirc;n sao ch&eacute;p một bit tới kết quả nếu n&oacute; tồn tại trong cả hai to&aacute;n hạng.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A &amp; B) sẽ cho kết quả l&agrave; 12, tức l&agrave; 0000 1100</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">|</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử OR (hoặc) nhị ph&acirc;n sao ch&eacute;p một bit tới kết quả nếu n&oacute; tồn tại trong một hoặc hai to&aacute;n hạng.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A | B) sẽ cho kết quả l&agrave; 61, tức l&agrave; 0011 1101</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">^</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử XOR nhị ph&acirc;n sao ch&eacute;p bit m&agrave; n&oacute; chỉ tồn tại trong một to&aacute;n hạng m&agrave; kh&ocirc;ng phải cả hai.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(A ^ B) sẽ cho kết quả l&agrave; 49, tức l&agrave; 0011 0001</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">~</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử đảo bit (đảo bit 1 th&agrave;nh bit 0 v&agrave; ngược lại).</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">(~A ) sẽ cho kết quả l&agrave; -61, tức l&agrave; 1100 0011.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt;&lt;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử dịch tr&aacute;i. Gi&aacute; trị to&aacute;n hạng tr&aacute;i được dịch chuyển sang tr&aacute;i bởi số c&aacute;c bit được x&aacute;c định bởi to&aacute;n hạng b&ecirc;n phải.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A &lt;&lt; 2 sẽ cho kết quả 240, tức l&agrave; 1111 0000 (dịch sang tr&aacute;i hai bit)</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&gt;&gt;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử dịch phải. Gi&aacute; trị to&aacute;n hạng tr&aacute;i được dịch chuyển sang phải bởi số c&aacute;c bit được x&aacute;c định bởi to&aacute;n hạng b&ecirc;n phải.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">A &gt;&gt; 2 sẽ cho kết quả l&agrave; 15, tức l&agrave; 0000 1111 (dịch sang phải hai bit)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">To&aacute;n tử g&aacute;n trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Dưới đ&acirc;y l&agrave; những to&aacute;n tử g&aacute;n được hỗ trợ bởi ng&ocirc;n ngữ C++:</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/toan_tu_gan_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Toán tử gán trong C++\">V&iacute; dụ</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top; width:67px\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top; width:370px\">Mi&ecirc;u tả</th>\r\n			<th style=\"text-align:left; vertical-align:top\">V&iacute; dụ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">To&aacute;n tử g&aacute;n đơn giản. G&aacute;n gi&aacute; trị to&aacute;n hạng b&ecirc;n phải cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C = A + B sẽ g&aacute;n gi&aacute; trị của A + B v&agrave;o trong C</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">+=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Th&ecirc;m gi&aacute; trị to&aacute;n hạng phải tới to&aacute;n hạng tr&aacute;i v&agrave; g&aacute;n gi&aacute; trị đ&oacute; cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C += A tương đương với C = C + A</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">-=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Trừ đi gi&aacute; trị to&aacute;n hạng phải từ to&aacute;n hạng tr&aacute;i v&agrave; g&aacute;n gi&aacute; trị n&agrave;y cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C -= A tương đương với C = C - A</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">*=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Nh&acirc;n gi&aacute; trị to&aacute;n hạng phải với to&aacute;n hạng tr&aacute;i v&agrave; g&aacute;n gi&aacute; trị n&agrave;y cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C *= A tương đương với C = C * A</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">/=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Chia to&aacute;n hạng tr&aacute;i cho to&aacute;n hạng phải v&agrave; g&aacute;n gi&aacute; trị n&agrave;y cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C /= A tương đương với C = C / A</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">%=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Lấy phần dư của ph&eacute;p chia to&aacute;n hạng tr&aacute;i cho to&aacute;n hạng phải v&agrave; g&aacute;n cho to&aacute;n hạng tr&aacute;i.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C %= A tương đương với C = C % A</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt;&lt;=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Dịch tr&aacute;i to&aacute;n hạng tr&aacute;i sang số vị tr&iacute; l&agrave; gi&aacute; trị to&aacute;n hạng phải.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C &lt;&lt;= 2 tương đương với C = C &lt;&lt; 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&gt;&gt;=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Dịch phải to&aacute;n hạng tr&aacute;i sang số vị tr&iacute; l&agrave; gi&aacute; trị to&aacute;n hạng phải.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C &gt;&gt;= 2 tương đương với C = C &gt;&gt; 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p AND bit</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C &amp;= 2 tương đương với C = C &amp; 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">^=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p OR loại trừ bit</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C ^= 2 tương đương với C = C ^ 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">|=</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p OR bit.</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C |= 2 tương đương với C = C | 2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">C&aacute;c to&aacute;n tử hỗn hợp trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Dưới đ&acirc;y l&agrave; một số to&aacute;n tử hỗn hợp quan trọng được hỗ trợ bởi ng&ocirc;n ngữ C++.</p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">To&aacute;n tử</th>\r\n			<th style=\"text-align:left; vertical-align:top\">Mi&ecirc;u tả</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">sizeof</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_sizeof_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử sizeof trong C++</a>&nbsp;trả về k&iacute;ch cỡ của một biến. V&iacute; dụ: sizeof(a), với a l&agrave; integer, sẽ trả về 4</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Điều kiện ? X : Y</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_dieu_kien_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử điều kiện trong C++</a>. Nếu Condition l&agrave; true ? th&igrave; n&oacute; trả về gi&aacute; trị X : nếu kh&ocirc;ng th&igrave; trả về Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">,</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_comma_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử Comma trong C++</a>&nbsp;l&agrave;m cho một d&atilde;y hoạt động được thực hiện. Gi&aacute; trị của to&agrave;n biểu thức comma l&agrave; gi&aacute; trị của biểu thức cuối c&ugrave;ng trong danh s&aacute;ch được ph&acirc;n biệt bởi dấu phảy</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">. (dot) v&agrave; -&gt; (arrow)</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_thanh_vien_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử th&agrave;nh vi&ecirc;n trong C++</a>&nbsp;được sử dụng để tham chiếu c&aacute;c phần tử đơn của c&aacute;c lớp, c&aacute;c cấu tr&uacute;c, v&agrave; union</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Cast</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_ep_kieu_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử &eacute;p kiểu (Casting) trong C++</a>&nbsp;biến đổi một kiểu dữ liệu th&agrave;nh kiểu kh&aacute;c. V&iacute; dụ: int(2.2000) sẽ trả về 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_con_tro_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử con trỏ &amp; trong C++</a>&nbsp;trả về địa chỉ của một biến. V&iacute; du: &amp;a; sẽ trả về địa chỉ thực sự của biến n&agrave;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">*</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\"><a href=\"http://vietjack.com/cplusplus/toan_tu_con_tro_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\">To&aacute;n tử con trỏ * trong C++</a>&nbsp;l&agrave; trỏ tới một biến. V&iacute; dụ: *var sẽ trỏ tới một biến var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2 style=\"font-style:normal; margin-left:0px; margin-right:0.2em; text-align:start\">Thứ tự ưu ti&ecirc;n to&aacute;n tử trong C++</h2>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Thứ tự ưu ti&ecirc;n to&aacute;n tử trong C++ x&aacute;c định c&aacute;ch biểu thức được t&iacute;nh to&aacute;n. V&iacute; dụ, to&aacute;n tử nh&acirc;n c&oacute; quyền ưu ti&ecirc;n hơn to&aacute;n tử cộng, v&agrave; n&oacute; được thực hiện trước.</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">V&iacute; dụ, x = 7 + 3 * 2; ở đ&acirc;y, x được g&aacute;n gi&aacute; trị 13, chứ kh&ocirc;ng phải 20 bởi v&igrave; to&aacute;n tử * c&oacute; quyền ưu ti&ecirc;n cao hơn to&aacute;n tử +, v&igrave; thế đầu ti&ecirc;n n&oacute; thực hiện ph&eacute;p nh&acirc;n 3 * 2 v&agrave; sau đ&oacute; th&ecirc;m với 7.</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\">Bảng dưới đ&acirc;y liệt k&ecirc; thứ tự ưu ti&ecirc;n của c&aacute;c to&aacute;n tử. C&aacute;c to&aacute;n tử với quyền ưu ti&ecirc;n cao nhất xuất hiện tr&ecirc;n c&ugrave;ng của bảng, v&agrave; c&aacute;c to&aacute;n tử c&oacute; quyền ưu ti&ecirc;n thấp nhất th&igrave; ở b&ecirc;n dưới c&ugrave;ng của bảng. Trong một biểu thức, c&aacute;c to&aacute;n tử c&oacute; quyền ưu ti&ecirc;n cao nhất được t&iacute;nh to&aacute;n đầu ti&ecirc;n.</p>\r\n\r\n<p style=\"margin-left:0.2em; margin-right:0.2em; text-align:justify\"><a href=\"http://vietjack.com/cplusplus/thu_tu_uu_tien_toan_tu_trong_cplusplus.jsp\" style=\"box-sizing: border-box; text-decoration: none; color: rgb(49, 49, 49); background: right center; transition: color 0.3s ease-in-out; padding-right: 22px; padding-bottom: 2px; font-weight: 700; outline: 0px !important;\" title=\"Thứ tự ưu tiên toán tử trong C++\">V&iacute; dụ</a></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"table table-bordered\" style=\"-webkit-text-stroke-width:0px; background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid #dddddd; box-sizing:border-box; color:#313131; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:400; letter-spacing:normal; margin-bottom:20px; max-width:100%; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; width:675px; word-spacing:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"text-align:left; vertical-align:top\">Loại&nbsp;</th>\r\n			<th style=\"text-align:left; vertical-align:top\">To&aacute;n tử&nbsp;</th>\r\n			<th style=\"text-align:left; vertical-align:top\">Thứ tự ưu ti&ecirc;n&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Postfix&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">() [] -&gt; . ++ - - &nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Unary&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">+ - ! ~ ++ - - (type)* &amp; sizeof&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Phải sang tr&aacute;i&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">T&iacute;nh nh&acirc;n&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">* / %&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">T&iacute;nh cộng&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">+ -&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Dịch chuyển&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt;&lt; &gt;&gt;&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Quan hệ&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&lt; &lt;= &gt; &gt;=&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">C&acirc;n bằng&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">== !=&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p AND bit&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p XOR bit&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">^&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p OR bit&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">|&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p AND logic&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">&amp;&amp;&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Ph&eacute;p OR logic&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">||&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Điều kiện&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">?:&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Phải sang tr&aacute;i&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">G&aacute;n&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">= += -= *= /= %=&gt;&gt;= &lt;&lt;= &amp;= ^= |=&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Phải sang tr&aacute;i&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Dấu phảy&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">,&nbsp;</td>\r\n			<td style=\"border-color:#dddddd; vertical-align:top\">Tr&aacute;i sang phải&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(2, 1, 'bienC++', 'Kieu Bien Trong C/C++', ''),
(4, 1, '', 'Vòng Lặp', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_student`
--

CREATE TABLE `course_student` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `task` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`, `task`) VALUES
(1, 1, 3, 46),
(2, 2, 3, 0),
(3, 3, 3, 0),
(4, 4, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `exam`
--

INSERT INTO `exam` (`id`, `course_id`, `question`) VALUES
(1, 1, 'Nhập vào 2 số nguyên a,b. In ra tổng của 2 số đó. ^^');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `in_out_exam`
--

CREATE TABLE `in_out_exam` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `input` text NOT NULL,
  `output` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `in_out_exam`
--

INSERT INTO `in_out_exam` (`id`, `exam_id`, `input`, `output`) VALUES
(1, 1, '1 2', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `program`
--

CREATE TABLE `program` (
  `id` int(10) NOT NULL,
  `program_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `code` varchar(10) NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `date_create` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `program`
--

INSERT INTO `program` (`id`, `program_name`, `code`, `detail`, `date_create`, `user_id`) VALUES
(1, 'C++', 'c++', '', '2018-04-29 00:25:03.800865', 2),
(2, 'Java', 'jav', '123', '2018-04-29 00:07:07.446206', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prog_student`
--

CREATE TABLE `prog_student` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `prog_student`
--

INSERT INTO `prog_student` (`id`, `program_id`, `student_id`, `approve`, `user_id`, `subject`, `body`) VALUES
(13, 1, 3, 1, 2, 'Student waiting accept to  C++', 'Student waiting accept to  C++'),
(20, 1, 3, 0, 0, '', ''),
(21, 2, 3, 0, 2, 'Student waiting accept to  Java', 'Student waiting accept to  Java');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quizz`
--

CREATE TABLE `quizz` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quizz`
--

INSERT INTO `quizz` (`id`, `course_id`, `question`, `answer`) VALUES
(1, 1, 'Khi sửa đoạn chương trình dùng để nhập mảng hai chiều, người ta viết lại dòng lệnh sau: scanf(\"%d\", &A[i][j]);  Thành  scanf(\"%d\", A[i]+j);  Sửa như vậy đúng hay sai?', 1),
(7, 1, 'Sau khi thực hiện đoạn chương trình sau, a sẽ có giá trị là 45 ?  i = a = 0;  do { a += ++i;  } while (i <= 8); Theo bạn đáp án này đúng hay sai ?', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `level`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'Administrator', 1),
(2, 'teacher', 'demo', 'teacher@demo.com', 'Teacher', 2),
(3, 'student', 'demo', 'student@gmail.com', 'Student', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `in_out_exam`
--
ALTER TABLE `in_out_exam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `prog_student`
--
ALTER TABLE `prog_student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `in_out_exam`
--
ALTER TABLE `in_out_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `program`
--
ALTER TABLE `program`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `prog_student`
--
ALTER TABLE `prog_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

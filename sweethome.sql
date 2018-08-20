-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2018 lúc 06:59 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sweethome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apartments`
--

CREATE TABLE `apartments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `apartments`
--

INSERT INTO `apartments` (`id`, `name`, `address`, `price`, `information`, `detail`, `images`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Chung cư RoyalCity', 'Ngã tư Sở, Thanh Xuân, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(2, 'Chung cư Hòa Bình', 'Minh Khai, Hai Bà Trưng, Hà Nội', 100000000, 'Cao tầng ngắm cảnh', 'Rộng 60m2', 'https://www.chotot.com/kinhnghiem/wp-content/uploads/2016/07/mot-so-cach-trang-tri-nha-chung-cu-hien-dai-va-tien-loi.png', NULL, NULL, 1),
(3, 'Chung cư RoyalCity R8', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 60000000, 'Nhà rất đẹp và thoáng', 'Rộng 40m2', 'http://www.muabannhadat.vn/tin-tuc/wp-content/uploads/2016/12/uu-diem-cua-can-ho-chung-cu.jpg', NULL, NULL, 1),
(4, 'Chung cư TimeCity T4', 'Minh Khai, Hai Bà Trưng, Hà Nội', 99000000, 'Nhà rộng thênh thang', 'Rộng 80m2', 'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/img20151031100016763.jpg', NULL, NULL, 1),
(5, 'Chung cư RoyalCity R6', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(6, 'Chung cư Giải Phóng', 'Giải Phóng, Hà Nội', 40000000, 'Hàng xóm thân thiện', 'Rộng 40m2', 'http://sohanews.sohacdn.com/thumb_w/660/2015/2-nhung-dai-ky-trong-phong-thuy-cho-nha-o-chung-cu-hinh-anh-2-1450845209462-63-0-267-400-crop-1450845440312.jpg', NULL, NULL, 1),
(7, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(8, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(9, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(10, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(11, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(12, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(13, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(14, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(15, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(16, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(17, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(18, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(19, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1),
(20, 'Chung cư RoyalCity', 'Ngã tư Sở, Hai Bà Trưng, Hà Nội', 80000000, 'Nhà rất đẹp và thoáng', 'Rộng 60m2', 'http://cafefcdn.com/thumb_w/650/2016/x1-1-1461721725242.jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_04_120041_create_apartments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

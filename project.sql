-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 10:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'John', 'Snow', 'snow123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Apple'),
(2, 'Microsoft'),
(3, 'Samsung'),
(4, 'Google'),
(5, 'Logitech');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Mouse'),
(2, 'keybords'),
(3, 'Laptops'),
(4, 'Mobiles Phones'),
(5, 'TV'),
(6, 'Moniters'),
(7, 'Headphones');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Microsoft Wireless Mobile Mouse 1850: Essential, Sleek, Microsoft Mouse - Cyan Blue', ' Brand	Microsoft Colour	Cyan Blue Connectivity technology	Radio Frequency Special feature	Wireless Movement detection technology	Optical', 'Wireless, Mouse, Optical, Bluetooth, USB, Scroll wheel, DPI, Laser, Battery life, Ergonomic, Grip, Responsive, Precision, Buttons, Connectivity, Ambidextrous, Receiver, Tracking', 1, 2, '51u+EXdzefL._AC_SL1327_.jpg', '51WlGFZ4pjL._AC_SL1338_.jpg', '511TY5AqO3L._AC_SL1415_.jpg', '11', '2023-03-27 17:56:49', 'true'),
(2, 'Logitech Signature M650 L Full Size Wireless Mouse - For Large Sized Hands, 2-Year Battery, Silent C', 'Brand	Logitech Colour	Black Connectivity technology	Bluetooth Special feature	Wireless, Portable, Lightweight, Soundless Movement detection technology	Optical', 'Wireless, Mouse, Optical, Bluetooth, USB, Scroll wheel, DPI, Laser, Battery life, Ergonomic, Grip, Responsive, Precision, Buttons, Connectivity, Ambidextrous, Receiver, Tracking', 1, 5, '71EAPVwnbzL._AC_SL1500_.jpg', '71LfjJKakjL._AC_SL1500_.jpg', '613dSxX5hGL._AC_SL1500_.jpg', '49', '2023-03-27 18:00:24', 'true'),
(3, 'Logitech K380 Multi-Device Bluetooth Wireless Keyboard with Easy-Switch for up to 3 Devices, Slim, 2', ' Brand	Logitech Compatible devices	Laptop, PC Connectivity technology	Bluetooth Keyboard description	Ergonomic Recommended uses for product	Office Special feature	Lightweight Colour	Dark Grey Operating System	Windows 10, 11 or later, Chrome OS, macOS 10.1', 'Typing, Keys, Layout, QWERTY, Mechanical, Switches, Wireless, USB, Backlit, Gaming, Macro, Ergonomic, Numeric keypad, Function keys, Multimedia keys, Shortcuts, Bluetooth, Connectivity, Keycaps, Response time', 2, 5, '61CA6tFSxcL._AC_SL1500_.jpg', '61tV6ktHvqL._AC_SL1500_.jpg', '71VqDN2eXbL._AC_SL1500_.jpg', '49', '2023-03-27 18:02:27', 'true'),
(4, 'Microsoft Bluetooth Keyboard: Slim portable, Ergonomic design, Microsoft Wireless Mouse and Keyboard', 'Brand	Microsoft Compatible devices	Microsoft Windows 11/10/8.1 Device must support Bluetooth 4.0 or higher IOS/MacOS and Android devices are compatible with limited featuresMicrosoft Windows 11/10/8.1 Device must support Bluetooth 4.0 or higher IOS/MacOS ', 'Typing, Keys, Layout, QWERTY, Mechanical, Switches, Wireless, USB, Backlit, Gaming, Macro, Ergonomic, Numeric keypad, Function keys, Multimedia keys, Shortcuts, Bluetooth, Connectivity, Keycaps, Response time', 2, 2, '51hQNN2422L._AC_SL1000_.jpg', '51oGnvUSNQL._AC_SL1000_.jpg', '51tG-kaSDJL._AC_SL1000_.jpg', '54', '2023-03-27 18:05:42', 'true'),
(5, 'Microsoft Surface Laptop Go 2 (2022): 12.4\" Touchscreen Laptop (Intel Core i5/8GB RAM/128GB SSD/Wind', ' Brand	Microsoft Series	Microsoft Surface Laptop Go 2 Screen size	12.45 Inches Colour	Platinum Hard disk size	128 GB CPU model	Core i5 RAM memory installed size	8 GB Operating System	Windows 11 Home Card description	Integrated CPU speed	4.2 GHz', 'Typing, Keys, Layout, QWERTY, Mechanical, Switches, Wireless, USB, Backlit, Gaming, Macro, Ergonomic, Numeric keypad, Function keys, Multimedia keys, Shortcuts, Bluetooth, Connectivity, Keycaps, Response time', 3, 2, '51bT9uZPx5L._AC_SL1080_.jpg', '41yH3K8H5JL._AC_SL1080_.jpg', '31gD7QRsoBL._AC_SL1080_.jpg', '869', '2023-03-27 18:07:21', 'true'),
(6, 'Apple 2023 MacBook Pro Laptop, Apple M2 Pro chip, 12‑core CPU and 19‑core GPU: 16.2-inch Liquid Reti', ' Brand	Apple Model name	MacBook Pro Screen size	16.2 Inches Colour	Space Grey Hard disk size	512 GB CPU model	Unknown RAM memory installed size	16 GB Operating system	Mac OS Special feature	Fingerprint Reader, Backlit Keyboard, Memory Card Slot Graphics c', 'Portable, Battery life, Display, Screen size, Resolution, Processor, RAM, Storage, SSD, Graphics card, Integrated graphics, Dedicated graphics, Touchpad, Keyboard, Backlit keyboard, Webcam, Microphone, Speakers, Ports, Wi-Fi.', 3, 1, '61fd2oCrvyL._AC_SL1500_.jpg', '71ZAeHYYlHL._AC_SL1500_.jpg', '81j1XDaqcML._AC_SL1500_.jpg', '3,179.', '2023-03-27 18:08:45', 'true'),
(7, 'Samsung Galaxy Book3 Pro 360 16\" AMOLED 3K |i7RPL-P (13th Gen)|16G DDR5|1TB SSD|S-Pen|Touchscreen', 'Brand	Samsung Series	Galaxy Book3 Pro 360 Screen size	16 Inches Colour	Graphite Hard disk size	1 TB CPU model	Core i7-12700KF RAM memory installed size	16 GB Operating System	Windows 11 Home Special feature	Fingerprint Reader Card description	Integrated', 'Portable, Battery life, Display, Screen size, Resolution, Processor, RAM, Storage, SSD, Graphics card, Integrated graphics, Dedicated graphics, Touchpad, Keyboard, Backlit keyboard, Webcam, Microphone, Speakers, Ports, Wi-Fi.', 3, 3, '71y58933-kL._AC_SL1500_.jpg', '61uGWYkvA9L._AC_SL1500_.jpg', '51YQCgPo2SL._AC_SL1500_.jpg', '2,499', '2023-03-27 18:09:45', 'true'),
(8, 'Apple 2020 MacBook Air Laptop: Apple M1 Chip, 13\" Retina Display, 8GB RAM, 256GB SSD Storage, Backli', 'Brand	Apple Model name	MGN63LL/A Screen size	13.3 Inches Colour	Space Grey Hard disk size	256 GB CPU model	Apple M1 RAM memory installed size	8 GB Operating system	Mac OS Special feature	Backlit Keyboard Graphics card description	Integrated', 'Portable, Battery life, Display, Screen size, Resolution, Processor, RAM, Storage, SSD, Graphics card, Integrated graphics, Dedicated graphics, Touchpad, Keyboard, Backlit keyboard, Webcam, Microphone, Speakers, Ports, Wi-Fi.', 3, 1, '71jG+e7roXL._AC_SL1500_.jpg', '71ZAeHYYlHL._AC_SL1500_.jpg', '71LG4S9ZB9L._AC_SL1500_.jpg', '1,099', '2023-03-27 18:11:42', 'true'),
(9, 'Samsung Galaxy S22 Ultra 5G 128GB - Green - Unlocked', '6.8-inch high-resolution screen, with an adaptive 120Hz resolution gives you bright display and silky smooth pixel (based on average battery life under typical usage conditions) Ultra-clear 108MP photo resolution brings out premium detail, turning your sh', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 3, '15952621.jpg', '15952621_1.jpg', '15952621_7.jpg', '1,099', '2023-03-27 18:12:49', 'true'),
(10, 'Apple iPhone 14 128GB - Blue - Unlocked', '6.1-inch Super Retina XDR display All-day battery life and up to 20 hours of video playback A15 Bionic chip with 5-core GPU for lightning-fast performance. Superfast 5G cellular (data plan required) Industry-leading durability features with Ceramic Shield', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 1, '16472785_1.jpg', '16472785.jpg', '16472785_3.jpg', '1,099', '2023-03-27 18:13:52', 'true'),
(11, 'Apple iPhone 14 Pro Max 128GB - Deep Purple - Unlocked', '6.7-inch Super Retina XDR display features Always-On and ProMotion modes for a more responsive feel 4K Dolby Vision cinematic mode delivers clear video at 30fps Action mode allows for smoother and steadier handheld video recording', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 1, '16472832_1.jpg', '16472832_2.jpg', '16472832_4.jpg', '1,549', '2023-03-27 18:15:51', 'true'),
(12, 'Samsung Galaxy S22 5G 128GB - Green', '6.1-inch high-resolution screen with 120Hz adaptive display makes every pixel silky smooth so your content looks even more bright and epic 50MP photo resolution lets you capture intensely detailed portraits, landscapes, and close-ups in vivid details 128G', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 3, '15954840.jpg', '15954840_6.jpg', '15954840_1.jpg', '829', '2023-03-27 18:18:16', 'true'),
(13, 'Google Pixel 7 128GB - Snow - Unlocked', 'Incredibly sharp 6.3-inch FHD+ display with rich and vivid colours, is fast and responsive to give you smooth scrolling and switching between apps Google Tensor G2 allows for fast and efficient processing and delivers features that help you with your day-', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 4, '16494356.jpg', '16494356_2.jpg', '16494356_3.jpg', '599', '2023-03-27 18:26:43', 'true'),
(14, 'Google Pixel 7 Pro 128GB - Obsidian - Unlocked', '6.7-inch LTPO QHD+ screen delivers visuals in sharp and vivid colours, and automatically adjusts to optimize for best viewing and battery performance LTPO smooth display with QHD+ 1440 x 3120 resolution at 512ppi and HDR support presents everything in vib', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 4, '16494357.jpg', '16494357_2.jpg', '16494357_3.jpg', '979', '2023-03-27 18:28:06', 'true'),
(15, 'Google Pixel 6a 128GB - Charcoal - Unlocked', '6.1-inch FHD+ with 1080 x 2400 resolution and OLED screen delivers visuals in sharp and vivid colours 128GB built-in storage capacity provides plenty of space for your contacts, photos, games, and more Fast and secure phone is powered by Google Tensor for', 'Screen, Touchscreen, Display, Resolution, Camera, Selfie, Video, Processor, RAM, Storage, Battery, Wireless, Bluetooth, 5G, LTE, Headphone jack, Speakers, Microphone, SIM card, GPS, Operating system.', 4, 4, '16299237.jpg', '16299237_2.jpg', '16299237_18.jpg', '399', '2023-03-27 18:30:48', 'true'),
(16, 'Samsung 55\" 4K UHD HDR QLED Tizen Smart TV (QN55Q60BAFXZC) - Titan Grey', '55-inch 4K Ultra HD screen supports resolutions of up to 3,840 x 2,160 for crystal clear displays QLED technology ensures vibrant colours and incredible picture quality 60Hz refresh rate reduces motion blur for a clearer picture', 'Television, Screen, Display, Resolution, Smart TV, Streaming, HDR, 4K, Ultra HD, Full HD, LED, OLED, QLED, Curved, Flat, HDMI, USB, Wi-Fi, Ethernet, Bluetooth, Soundbar, Remote control, Voice control, Gaming.', 5, 3, '16009737.jpg', '16009737_4.jpg', '16009737_3.jpg', '763', '2023-03-27 18:51:30', 'true'),
(17, 'Samsung 43\" 4K UHD HDR LED Tizen Smart TV (UN43TU7000FXZC) - Titan Grey', 'High Dynamic Range (HDR) delivers a wide range of colours and enhances the colour shades even in dark scenes Crystal Display makes sure every colour is fine-tuned and delivers pictures with vivid, true-to-life colours PurColor technology offers amazing vi', 'Television, Screen, Display, Resolution, Smart TV, Streaming, HDR, 4K, Ultra HD, Full HD, LED, OLED, QLED, Curved, Flat, HDMI, USB, Wi-Fi, Ethernet, Bluetooth, Soundbar, Remote control, Voice control, Gaming.', 5, 3, '14469345.jpg', '14469345_4.jpg', '14469345_3.jpg', '505', '2023-03-27 18:53:35', 'true'),
(18, 'Apple TV 4K 128GB with Wi-Fi & Ethernet (3rd Generation)', '4K Dolby Vision and HDR10+ for vivid picture quality (Not all content is available in all 4K HDR formats. 4K resolution requires 4K-capable TV) Dolby Atmos for three-dimensional, theatre-like sound (Require Dolby Atmos–capable devices and may not be avail', 'Television, Screen, Display, Resolution, Smart TV, Streaming, HDR, 4K, Ultra HD, Full HD, LED, OLED, QLED, Curved, Flat, HDMI, USB, Wi-Fi, Ethernet, Bluetooth, Soundbar, Remote control, Voice control, Gaming.', 5, 1, '16567067.jpg', '16567067_2.jpg', '16567067_5.jpg', '202', '2023-03-27 18:55:24', 'true'),
(19, 'Samsung 27\" FHD 75Hz 5ms GTG IPS LED FreeSync Gaming Monitor (LF27T350FHNXZA) - Dark Blue Grey', '27-inch LED display with a 1920 x 1080 resolution delivers Full HD imagery for an immersive viewing experience 5ms response time and 75Hz refresh rate help to minimise motion blur so that even fast scenes display smoothly Extra-wide 178-degree viewing ang', 'Monitor, Display, Screen, Resolution, Size, Refresh rate, Response time, Gaming, Curved, Flat, Ultrawide, 4K, HDR, IPS, LED, VGA, DVI, HDMI, DisplayPort, USB-C, Mount, Stand, Adjustability, Connectivity.', 6, 3, '14933348.jpg', '14933348_2.jpg', '14933348_4.jpg', '183', '2023-03-27 18:57:56', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

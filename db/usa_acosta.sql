-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 06:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usa_acosta`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `img_url` varchar(225) NOT NULL,
  `album_name` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `songs` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `img_url`, `album_name`, `type`, `songs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'https://upload.wikimedia.org/wikipedia/en/8/8d/Got7_GotIt%3F.jpg', 'Got it?', 'Mini Album', 'Hello\r\nGirls Girls Girls\r\nI Like You\r\nFollow Me\r\nLike Oh\r\nPlayground', '2023-05-21 14:37:28', '2023-05-21 14:47:53', '2023-05-21 14:47:53'),
(12, 'https://kprofiles.com/wp-content/uploads/2020/03/GOT7_Around_the_World_regular_edition_cover.jpg', 'Got it?', 'mini', 'ss', '2023-05-21 14:42:56', '2023-05-21 14:47:55', '2023-05-21 14:47:55'),
(13, 'https://st.cdjapan.co.jp/pictures/l/03/28/ESCL-4583.jpg', 'Moriagatteyo', 'Japanese Full Album', 'Shaking the World\r\nYo Moriagatte Yo\r\nGot Ur Luv\r\nLaugh Laugh Laugh\r\nBe My Girl\r\nAround the World\r\nLove Train\r\nJibberish\r\nO.M.G\r\nAngel\r\nStay\r\nSo Lucky\r\nGirls Girls Girls (Japanese Ver.)\r\nA (Japanese Ver.)\r\nStop Stop It (Japanese Ver.)\r\nJust Right (Japanese Ver.)', '2023-05-21 14:50:11', '2023-05-21 15:08:06', '2023-05-21 15:08:06'),
(14, 'https://upload.wikimedia.org/wikipedia/en/8/8d/Got7_GotIt%3F.jpg', 'Got it?', 'Mini Album', 'Hello\r\nGirls Girls Girls\r\nI Like You\r\nFollow Me\r\nLike Oh\r\nPlayground', '2023-05-21 14:56:27', '2023-05-21 14:57:09', '2023-05-21 14:57:09'),
(15, 'https://i.pinimg.com/736x/99/02/e4/9902e438ec1136ac7c54e13f0079437a--log-boy-groups.jpg', 'Flight Log: Turbulence', 'Full Album', 'Skyway\r\nHard Carry\r\nBoom x3\r\nProve It\r\nNo Jam\r\nHey\r\nMayday', '2023-05-21 14:58:17', '2023-05-21 14:58:17', '0000-00-00 00:00:00'),
(16, 'https://i1.sndcdn.com/artworks-000212802747-zp1ee5-t500x500.jpg', 'Flight Log: Arrival', 'Mini Album', 'Never Ever\r\nShopping Mall\r\nParadise\r\nSign\r\nGo Higher\r\nQ\r\nDon’t Care\r\nOut', '2023-05-21 15:00:06', '2023-05-21 15:00:06', '0000-00-00 00:00:00'),
(17, 'https://lastfm.freetls.fastly.net/i/u/ar0/793e9f8ace573e1a7f48039e89c3b800.jpg', 'My Swagger', 'Japanese Single', 'My Swagger\r\nMeet Me\r\nMy Swagger (Instrumental)\r\nMeet Me (Instrumental)', '2023-05-21 15:00:46', '2023-05-21 15:01:16', '0000-00-00 00:00:00'),
(18, 'https://d3ugyf2ht6aenh.cloudfront.net/stores/777/009/products/eihilhyucaermfe1-29cffb028c0b1b871d15734081486463-640-0.jpg', 'Call My Name', 'Mini Album', '', '2023-05-21 15:19:56', '2023-05-21 16:29:32', '0000-00-00 00:00:00'),
(19, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnURWqb8rbKClF8rEx_R5_91hxlQUQfV7giV0KiwMhFtVk8EdJS4DITgFsNU0g7SOMNlQ&usqp=CAU', 'Swagger', 'Mini Album', '', '2023-05-21 15:30:43', '2023-05-21 15:30:43', '0000-00-00 00:00:00'),
(20, 'https://upload.wikimedia.org/wikipedia/en/0/02/7for7albumcover.jpg', '7 for 7', 'Mini Album', '', '2023-05-21 16:20:01', '2023-05-21 16:20:01', '0000-00-00 00:00:00'),
(21, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC4Zy4HTyO07TDPWuj6s-Y13_JpZi2zh5DZcfYyeKOwLk9CLprg7gS5KaOnEZtdM8p5Zk&usqp=CAU', 'Turn Up', 'Japanese Mini Album', '', '2023-05-21 16:20:57', '2023-05-21 16:22:31', '0000-00-00 00:00:00'),
(22, 'https://upload.wikimedia.org/wikipedia/en/2/2c/GOT7-PRESENTYOU-COVER.jpeg', 'Present: You', 'Full Album', '', '2023-05-21 16:24:57', '2023-05-21 16:26:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `timed`
--

CREATE TABLE `timed` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `messages` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timed`
--

INSERT INTO `timed` (`username`, `email`, `phone`, `messages`, `date`) VALUES
('ahd', 'hs2@gmail.com', 987564536, 'fsh', '2023-05-05'),
('allen', 'allen@gmail.com', 9645342212, 'aaaaaaaaaaaaa', '2023-05-05'),
('anna', 'anna@gmail.com', 9786352631, 'jjjjjjjjj', '2023-05-05'),
('ano', 'ano@gmail.com', 975463213, 'hgfdddjjse', '2023-05-05'),
('franz', 'franz@gmail.com', 9784673274, 'im franz', '2023-05-05'),
('hanna', 'han@gmail.com', 9878467362, 'huihbjwr', '2023-05-05'),
('jeff', 'jeff@gmail.com', 9653425635, 'hhhhhhhhhh', '2023-05-05'),
('jesi', 'jesi@gmail.com', 9875645362, 'aga', '2023-05-05'),
('jesiee', 'jesii@gmail.com', 9784636785, 'anyeonghhhhh', '2023-05-09'),
('kaye', 'kaye@gmail.com', 9876545654, 'sagh', '2023-05-05'),
('kev', 'kev@gmail.com', 9876775434, 'hello', '2023-05-05'),
('Mhymy', 'mhy@gmail.com', 9786543423, 'mhy', '2023-05-05'),
('mica', 'mica@gmail.com', 9823214553, 'message', '2023-05-05'),
('olla', 'olla@gmail.com', 9437284532, 'hiiii', '2023-05-05'),
('try', 'try@gmail.com', 9876564534, 'try', '2023-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timed`
--
ALTER TABLE `timed`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 12:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `about` text NOT NULL,
  `twitter` varchar(350) NOT NULL,
  `linkedin` varchar(350) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `instagram` varchar(350) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `image`, `about`, `twitter`, `linkedin`, `facebook`, `instagram`, `time`) VALUES
(12, 'Kulpreet Chopra', 'Kulpreet Chopra', 'kulpreet', 'blogimage/admin.jpg', 'Web Developer & Designer<br>(ITM GOI Gwalior)', 'https://mobile.twitter.com/ChopraKulpreet', 'https://www.linkedin.com/in/kulpreet-singh-chopra-9203671a4', 'https://www.facebook.com/cutexchorra.sam.3', 'https://instagram.com/kulpreet_chopra?igshid=awc27ncm3p25', '2020-12-02 08:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tittle` varchar(250) NOT NULL,
  `link` varchar(350) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tittle`, `link`, `about`, `image`, `time`) VALUES
(15, 'Console Gamming Using c&c++', 'github.com/kulpreetchopra/console_gamming.git', 'Console gamming consist multiple option to play different games like snake game, Tetris game, Tik Tak Toe and Who become a millionaire game. To increase efficiency by help of switch case we join all this game in a menu.', 'blogimage/1606983594958.jpg', '2020-12-03 09:32:21'),
(38, 'Blog Website For Developers', 'kulpreetchopra.epizy.com', 'This is a live project on Blog website for Developers with frontend and backend work ,maintain database which is fully Dynamic and also css is fully Dynamic. Every user subscribe this blog easily.', 'blogimage/Screenshot (757).png', '2020-12-03 09:10:54'),
(39, 'Zayaka Restaurant Dynamic Website', 'zayaka.ml', 'This is a live project on Restaurant website with frontend and backend work manage stuff and customer both and maintain database which is fully Dynamic. Users online order their favorite Meal and reserve table for any time. ', 'blogimage/Screenshot (769).png', '2020-12-03 08:27:42'),
(16, 'Smart Calculator using speech recognition ', 'github.com/kulpreetchopra/smart_calculator.git', 'This project is a smart calculator which calculate numerical problem by speech recognition. It has two features such as graphical user interface and speech recognition. By the help of this we can improve our IQ.', 'blogimage/pbl.jpg', '2020-12-03 09:32:54'),
(37, 'Visit Bharat Tourism website ', 'visitbharat.cf ', 'Visit Bharat is a website which gives us familiarity with many priceless tourist places of India and gives information about various historical & religious visits in India.\r\nThis website also makes us aware of the impact of corona virus.', 'blogimage/Screenshot (768).png', '2020-12-03 09:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(350) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `time`) VALUES
(23, 'kulpreetsingh0128@gmail.com', '2020-12-02 06:19:19'),
(32, 'kunalkhandelwal172000@gmail.com', '2020-12-02 10:04:31'),
(26, 'gg2354875@gmail.com', '2020-12-02 09:21:34'),
(27, 'ruchikaverma149@gmail.com', '2020-12-02 09:23:39'),
(28, 'gupta433smarty@gmail.com', '2020-12-02 09:33:21'),
(29, 'tmayank723@gmail.co', '2020-12-02 09:33:27'),
(33, 'mahendrapalsingh.chopra31@gmail.com', '2020-12-03 11:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `color` varchar(350) NOT NULL,
  `shade` varchar(350) NOT NULL,
  `font` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `color`, `shade`, `font`) VALUES
(3, '#138086', '#13808699', 'Rubik, sans-serif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

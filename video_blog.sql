-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 03:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `user_id`, `create_at`) VALUES
(36, 'Computer', 1, 1, '2019-03-27 19:35:27'),
(37, 'OOP JAVA', 0, 1, '2019-03-28 20:32:59'),
(38, 'game', 1, 1, '2019-03-27 17:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `long_desc` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `like_count` int(11) NOT NULL,
  `postal_img` varchar(500) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `short_desc`, `long_desc`, `cat_id`, `user_id`, `view`, `like_count`, `postal_img`, `tags`, `create_at`) VALUES
(1, 'this_is_the_best', 'sfdsvc saf asfas cfasfcq ', 'bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb bdjkn fsdfbsdhkfbsd dbfklsdb fsdnl fsdnvdbfksdfj bsdlkfb ', 37, 27, 0, 0, 'assets/img/content/35ecd64e-e463-4522-f666-227525d0db24.png', 'php,java', '2019-03-31 05:22:57'),
(2, 'this_issgdsghd_sdjs', 'his paper describes a Data Management System ', 'This paper describes a Data Management System for Multimedial Information Visualization called DaMI. It is possible to create 2D or 3D model based on data out of standard databases and additional metainformation. DaMI is a generic system guaranteeing an optimal reusability and compatibility.', 37, 30, 0, 0, 'assets/img/content/fb332526-3f27-42f1-8fdf-462a4456cdf9.png', 'php,java', '2019-04-01 13:07:39'),
(3, 'Yael', 'Consequatur dolor m', 'Ut numquam consequat', 37, 27, 0, 0, 'assets/img/content/814a3d2b-d308-4f4d-f3ad-3c87acdfb747.jpg', 'Dorian', '2019-03-31 05:23:01'),
(4, 'Prothom_Jedin', 'Tawsif Mahbub & Tanjin Tisha | Music Video | New Song 2019', 'Song : Prothom Jedin\r\nSinger : Sajid Mohammad\r\nLyric : S Khan\r\nTune & Music : Rafi Mohammad \r\nLabel : My Sound\r\nReleased Date : 28/02/2019\r\nProduced and Distributed by My Sound.\r\n\r\nOST of Tumi Bina\r\nCast : Tawsif Mahbub & Tanjin Tisha\r\nDOP : Sani Khan\r\nEdit & Color: Saif Russel\r\nDirector : Mohon Ahmed\r\nProduction: Local Bus Entertainment\r\nAgency: Factor Three Solution\r\nProduced and Distributed by My Sound.', 36, 30, 0, 0, 'assets/img/content/cde1315e-0118-4db4-be45-1aa37cf66c5d.jpg', 'Prothom,Jedin,Tawsif ,Tanjin ', '2019-03-31 05:23:06'),
(5, 'Quinn', 'Aut eum eu ut fugit', 'Quis voluptatem Nul', 37, 27, 0, 0, 'assets/img/content/97aa66a9-329b-472e-86d7-fce83884ad1e.jpg', 'Venus', '2019-03-31 05:23:12'),
(6, 'Brynn', 'Nesciunt veniam et', 'Repudiandae id aspe', 37, 30, 0, 0, 'assets/img/content/4c12f10a-2067-4c83-d9a7-96636b20fa0e.jpg', 'Zorita', '2019-03-31 05:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(52) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(32) NOT NULL COMMENT '0=female, 1=male',
  `status` int(11) NOT NULL COMMENT '1=Active,0=Deactive',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `phone`, `password`, `photo`, `address`, `gender`, `status`, `create_at`) VALUES
(27, 'Shihab', 'Shihab', 'shihab@gmail.com', 1780597143, '202cb962ac59075b964b07152d234b70', 'assets/img/Shihab01780597143.jpg', 'Dhaka', '1', 1, '2019-03-26 11:39:59'),
(29, 'Fiona', 'zadife', 'gyquji@mailinator.com', 1, '7215ee9c7d9dc229d2921a40e899ec5f', 'assets/img/zadife+1 (381) 801-4811.png', 'Dolor impedit ullam', '1', 0, '2019-03-27 06:31:02'),
(30, 'Marah', 'noziluzamu', 'xesadumowi@mailinator.com', 1, '202cb962ac59075b964b07152d234b70', 'assets/img/noziluzamu+1 (761) 242-7458.jpeg', 'Corrupti totam ipsa', '0', 1, '2019-03-27 04:59:58'),
(31, 'Raven', 'sugik', 'covyf@mailinator.net', 1, 'MTIzMTIz', 'assets/img/sugik+1 (988) 688-5012.jpg', 'Incididunt qui sed d', '1', 0, '2019-03-27 12:01:13'),
(32, 'Maminul', 'hyqeluroti', 'kafopi@mailinator.com', 1, '56de48825b002939979921f9ea0c9033', 'assets/img/80343cfd-997a-4c3e-e280-5995a22173a1.png', 'Cumque exercitation ', '1', 0, '2019-03-30 13:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=Active,0=Deactive',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `content_id`, `file_path`, `user_id`, `status`, `create_at`) VALUES
(1, 1, 'https://www.youtube.com/watch?v=JoPZMfF3xsk', 27, 1, '2019-03-31 11:14:40'),
(2, 4, 'https://www.youtube.com/watch?v=e7fMkfm29_U ', 30, 1, '2019-03-31 11:14:44'),
(3, 4, 'https://www.youtube.com/watch?v=kmnMaUofTpY', 30, 1, '2019-03-31 11:08:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 12:46 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `b_id` int(8) NOT NULL AUTO_INCREMENT,
  `b_name` text NOT NULL,
  `b_floor` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`b_id`, `b_name`, `b_floor`) VALUES
(1, 'A', '3'),
(2, 'B', '2');

-- --------------------------------------------------------

--
-- Table structure for table `buildingrooms`
--

CREATE TABLE IF NOT EXISTS `buildingrooms` (
  `broom_id` int(8) NOT NULL AUTO_INCREMENT,
  `b_id` int(8) NOT NULL,
  `room_id` int(8) NOT NULL,
  PRIMARY KEY (`broom_id`),
  KEY `b_id` (`b_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `buildingrooms`
--

INSERT INTO `buildingrooms` (`broom_id`, `b_id`, `room_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 2, 19),
(20, 2, 20),
(21, 2, 21),
(22, 2, 22),
(23, 2, 23),
(24, 2, 24),
(25, 2, 25),
(26, 2, 26),
(27, 2, 27),
(28, 2, 28),
(29, 2, 29),
(30, 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `res_id` int(8) NOT NULL AUTO_INCREMENT,
  `res_type` varchar(50) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`res_id`, `res_type`) VALUES
(1, 'chairs'),
(2, 'computers'),
(4, 'cameras'),
(5, 'printers'),
(6, 'televisions'),
(7, 'projectors');

-- --------------------------------------------------------

--
-- Table structure for table `roomresources`
--

CREATE TABLE IF NOT EXISTS `roomresources` (
  `roomres_id` int(8) NOT NULL AUTO_INCREMENT,
  `room_id` int(8) NOT NULL,
  `res_id` int(8) NOT NULL,
  `no_of_res` int(20) NOT NULL,
  PRIMARY KEY (`roomres_id`),
  KEY `room_id` (`room_id`),
  KEY `res_id` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(8) NOT NULL AUTO_INCREMENT,
  `room_num` varchar(20) NOT NULL,
  `room_type` text NOT NULL,
  `room_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_num`, `room_type`, `room_desc`) VALUES
(1, '101', 'Administration Office', 'This room is for Administration.'),
(2, '102', 'Academic', 'Allocated to IPCT students.'),
(3, '103', 'Academic', 'Allocated to Business students.'),
(4, '104', 'Academic ', 'Alocated to Proect Management students'),
(5, '105', 'Library', 'Library for the students.'),
(6, '106', 'Student Activity Room', 'This room is a student activity room. Students can enjoy their break here. It has many indoor games like Foosball, carom and chess. Play it and Have fun..!!'),
(7, '201', 'Office\r\n', 'This room is a staff room.'),
(8, '202', 'Academic\r\n', 'Allocated to MBDT students.'),
(9, '203', 'Academic', 'Allocated to Networking students.'),
(10, '204', 'Academic', 'Allocated to Finance students.'),
(11, '205', 'Academic', 'Allocated to Electrical students.'),
(12, '206', 'Student activity room', 'This room is a student activity room. Students can enjoy their break here. It has many indoor games like Foosball, carom and chess. Play it and Have fun..!!'),
(13, '301', 'Office', 'It is a staff room.'),
(14, '302', 'Academic', 'Allocated to Civil students'),
(15, '303', 'Academic\r\n', 'Allocated to Electronics students'),
(16, '304', 'Academic', 'Allocated to Mechanical students'),
(17, '305', 'Store Room', 'Just used as a store room.!!'),
(18, '306', 'Store Room', 'Just used as a store room..!!'),
(19, '101', 'Administration Office', 'All administrative task done here.'),
(20, '102', 'Administration Office', 'All administrative task done here.'),
(21, '103', 'Administration Office', 'All administrative task done here.'),
(22, '104', 'Student Service.', 'Just for the students who need help regarding their issues.'),
(23, '105', 'Student Service.', 'Just for the students who need help regarding their issues.'),
(24, '106', 'Student Service.', 'Just for the students who need help regarding their issues.'),
(25, '201', 'Gymnasium', 'Allocated for gym.'),
(26, '202', 'Gymnasium', 'Allocated for gym.'),
(27, '203', 'Gymnasium', 'Allocated for gym.'),
(28, '204', 'Student Activity Room', 'For all activities and leisure purpose.'),
(29, '205', 'Student Activity Room', 'For all activities and leisure purpose.'),
(30, '206', 'Student Activity Room', 'For all activities and leisure purpose.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(320) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'bdarji01', '5f4dcc3b5aa765d61d8327deb882cf99', 'Bhargav', 'Darji'),
(4, 'dpatel', '5f4dcc3b5aa765d61d8327deb882cf99', 'Dhaumik', 'Patel'),
(5, 'nshah', '5f4dcc3b5aa765d61d8327deb882cf99', 'Nishit', 'Shah'),
(6, 'mross', '0c04db4ae140a5e42afb455876d9c7a4', 'Mike', 'Ross'),
(7, 'hspecter', '985b614677fdd42d9cc492d4c8950a2c', 'Harvey', 'Specter'),
(8, 'elitt', 'd2495948c29be2f7e7a614ca0341fe6f', 'Ester', 'Litt'),
(9, 'sspecter', 'c08f146c9026f394a8e663c9188a5cf3', 'Scottie', 'Specter'),
(10, 'llitt', 'fc2d28475552f09ea2676e6c1cb9610c', 'Louis', 'Litt');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buildingrooms`
--
ALTER TABLE `buildingrooms`
  ADD CONSTRAINT `fk_buildingrooms_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`Room_id`),
  ADD CONSTRAINT `fk_buildingrooms_b_id` FOREIGN KEY (`b_id`) REFERENCES `building` (`b_id`);

--
-- Constraints for table `roomresources`
--
ALTER TABLE `roomresources`
  ADD CONSTRAINT `fk_roomresources_res_id` FOREIGN KEY (`res_id`) REFERENCES `resources` (`Res_id`),
  ADD CONSTRAINT `fk_roomresources_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`Room_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

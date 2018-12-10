-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 01:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rhapsody`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE IF NOT EXISTS `coordinators` (
  `Coordinator` varchar(15) NOT NULL,
  `Event` varchar(20) NOT NULL,
  `Event_id` varchar(5) NOT NULL,
  `Contact` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Coordinator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`Coordinator`, `Event`, `Event_id`, `Contact`) VALUES
('Anup Mittal', 'Science exhibition', 'SE002', '4657869607'),
('Aranyak Swain', '          Quiz', 'Q001', '5768947566'),
('Arnab Bose', '             Singin', 'S004', '9976544678'),
('Dipali Bar', 'Elocution', 'E005', '7856746555'),
('Dipanjana Basu', 'Spell Bee', 'S002', '7689053322'),
('Gurleen Kaur', 'Cooking', 'C006', '3456789076'),
('Harshit Kumar', '60 Seconds', 'S008', '8765434567'),
('Megha Satpathy', 'Debate', 'D003', '5746354789'),
('Shrutika Atal', 'Instrumental', 'I005', '6578937465'),
('Sushant Minz', 'Solo Dance', 'SD007', '8765432456'),
('Swastik Panda', 'Group Dance', 'GD001', '8765435678');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` varchar(5) NOT NULL,
  `Event name` varchar(20) NOT NULL,
  `Timing` time DEFAULT NULL,
  `Place` varchar(5) DEFAULT NULL,
  `Judge` varchar(15) DEFAULT NULL,
  `Coordinator` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Event name`, `Timing`, `Place`, `Judge`, `Coordinator`) VALUES
('C006', 'Cooking', '08:30:00', 'LA111', 'Prateek Rout', 'Gurleen Kaur'),
('D003', 'Debate', '09:30:00', 'LA106', 'R K Biswal', 'Megha Satpathy'),
('E005', 'Elocutioin', '12:00:00', 'LA105', 'N R Mishra', 'Dipali Bar'),
('GD001', 'Group Dance', '11:00:00', 'LA103', 'Monica Hebram', 'Swastik Panda'),
('I005', 'Instrumental', '12:30:00', 'LA109', 'Sashwat Rungta', 'Roshni Biswas'),
('Q001', 'Quiz', '09:00:00', 'LA101', 'D P Sinha', 'Aranyak Swain'),
('S002', 'Spell Bee', '10:00:00', 'LA107', 'Mitesh Mandal', 'Dipanjana Basu'),
('S004', 'Singing', '07:30:00', 'LA101', 'P M Khilar', 'Arnab Bose'),
('S008', '60 Seconds', '07:00:00', 'LA104', 'Vamsi Reddy', 'Harshit'),
('SD007', 'Solo Dance', '11:30:00', 'LA102', 'Sahiti Pendh', 'Sushant Minz'),
('SE002', 'Science exhibition', '10:30:00', 'LA110', 'S N Dash', 'Anup Mittal');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE IF NOT EXISTS `judge` (
  `Judge` varchar(20) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Event` varchar(20) NOT NULL,
  `Event_id` varchar(5) NOT NULL,
  PRIMARY KEY (`Judge`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`Judge`, `Contact`, `Event`, `Event_id`) VALUES
('D P Sinha', '7659865420', 'Quiz', 'Q001'),
('Mitesh Mandal', '7077621100', 'Spell bee', 'S002'),
('Monica Hembram', '9876503254', 'Group dance', 'GD001'),
('N R Mishra', '9231254870', 'Elocution', 'E005'),
('P M Khilar', '9876503254', 'Singing', 'S004'),
('Prateek Rout', '7777856203', 'Cooking', 'C006'),
('R K Biswal', '9203214587', 'Debate', 'D003'),
('S N Dash', '9875632042', 'Science exhibition', 'SE002'),
('Sahiti Pendh', '8956475896', 'Solo dance', 'SD007'),
('Sashwat Rungta', '9986544785', 'Instrumental', 'I005'),
('Vamsi Reddy', '8965658963', '60 Seconds', 'S008');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `Participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Ageg` varchar(1) DEFAULT NULL,
  `Contact` varchar(12) DEFAULT NULL,
  `Event` varchar(20) NOT NULL,
  `School` varchar(50) NOT NULL,
  PRIMARY KEY (`Participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`Participant_id`, `Name`, `Ageg`, `Contact`, `Event`, `School`) VALUES
(1, 'Aditi', 'A', '5789546321', 'Singing', 'Amina Haroon Girl''s School'),
(2, 'Lalatendu', 'B', '4589654123', 'Solo Dance', 'Chinmay Public School'),
(4, 'Sonali', 'A', '7890876543', '60 seconds', 'DAV Public School'),
(5, 'Aishwarya', 'B', '897654356', 'Elocution', 'Deepika English Medium School'),
(6, 'Anurag', 'C', '789087658', 'Debate', 'DPS, Rourkela'),
(7, 'Saswat', 'A', '5678976543', 'Spell Bee', 'Guru Nanak Public High Sc'),
(8, 'Chinmay', 'B', '8789900876', 'Quiz', 'Gyan Jyoti School'),
(9, 'Yusuf', 'C', '7898767898', 'Instrumental', 'Ispat English Medium School'),
(10, 'Rohan', 'A', '8789987678', 'Science exhibition', 'Kalinga Public School'),
(11, 'David', 'B', '878989876', 'Cooking', 'KV, Rourkela'),
(12, 'Anukta', 'C', '8765456654', 'Singing', 'MGM English Medium School'),
(13, 'Srimoy', 'A', '7656776567', 'Solo Dance', 'Mount Carmel High School'),
(14, 'Roshni', 'B', '7876567765', 'Group Dance', 'Paul''s School'),
(15, 'Yash', 'C', '8876787543', '60 seconds', 'REC'),
(16, 'Mebin', 'A', '7876564323', 'Elocution', 'Sai Valley World School'),
(17, 'Akansha', 'B', '7654567865', 'Debate', 'Sri Aurobindo''s School'),
(18, 'Abhishek', 'C', '6787678767', 'Spell Bee', 'St. Arnold''s School'),
(19, 'Harsha', 'A', '6545654567', 'Quiz', 'St. Gregorious High School'),
(20, 'Jobin', 'B', '6545678987', 'Instrumental', 'St. Joseph''s Convent School'),
(21, 'Harshitha', 'C', '6567654345', 'Cooking', 'Amina Haroon Girl''s School'),
(22, 'Rajdeep', 'A', '3456354635', 'Cooking', 'Chinmay Public School'),
(23, 'Aditi', 'B', '6758675867', 'Group Dance', 'REC'),
(24, 'Aditya', 'C', '5654567656', 'Group Dance', 'REC'),
(25, 'Pratik', 'A', '7876789087', 'Group Dance', 'Paul''s School'),
(26, 'Pratikshya', 'B', '7898786756', 'Science exhibition', 'Paul''s School'),
(27, 'Harpreet', 'C', '6567654443', 'Quiz', 'KV, Rourkela'),
(28, 'Hanisha', 'A', '6765456545', 'Instrumental', 'DPS, Rourkela'),
(29, 'Aliva', 'B', '6765456788', 'Cooking', 'KV, Rourkela'),
(30, 'Somali', 'C', '5654567890', 'Singing', 'Sai Valley World School'),
(31, 'Vikas', 'A', '7876545678', '60 seconds', 'At. Arnold''s School'),
(32, 'Annie', 'B', '7876789999', 'Elocution', 'MGM English Medium School'),
(33, 'Sanchari', 'C', '8520741376', 'Debate', 'Paul''s'),
(34, 'Asmita', 'C', '8654654465', 'Quiz', 'DPS,'),
(35, 'Alolika', 'C', '9632581470', 'Elocutioin', 'REC');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `School_id` varchar(4) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Representative` varchar(20) NOT NULL,
  PRIMARY KEY (`School`),
  FULLTEXT KEY `School` (`School`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`School_id`, `School`, `Address`, `Contact`, `Representative`) VALUES
('AH01', 'Amina Haroon Girl''s School', '23A Lalu Road, Uditnagar', '9521470236', 'Aditi'),
('CP45', 'Chinmay Public Schoo', '5/9 MG Road, Uditnagar', '9963200124', 'Lalatendu'),
('DS89', 'D''Souza''s School ', '12 Station Road, Uditnagar', '5698520325', 'Soham'),
('DP84', 'DAV Public School', '56 Basant Colony, Rourkela', '9632587410', 'Sonali'),
('DE20', 'Deepika English Medium School', '3/2 Block A, Sector 2, Rourkel', '9632365896', 'Aishwarya'),
('DD02', 'DPS, Rourkela', '12 Park Avenue, Rourkela', '9898741023', 'Anurag'),
('GN55', 'Guru Nanak Public High School', '67/A, Civil Township', '9632365896', 'Saswat'),
('GJ11', 'Gyan Jyoti School', '15 Lake View Road', '2584956542', 'Chinmay'),
('IS18', 'Ispat English Medium Schoo', '90 Ispat Road, Ispat', '9896520145', 'Yusuf'),
('KP56', 'Kalinga Public School', '48 Uditnagar Road, Uditnagar', '9520364120', 'Rohan'),
('KV47', 'KV, Rourkela', '19/a Koelnagar', '9896523659', 'David'),
('MG33', 'MGM English Medium School', 'Ispat Road, Rourkela', '4521022569', 'Anukta'),
('MC90', 'Mount Carmel High School', '23/7 Yasmin Road, Rourkela', '1122445566', 'Srimoy'),
('PS87', 'Paul''s School', '14 Paul Avenue, Rourkela', '7025896314', 'Aishwarya'),
('RE13', 'REC', '118 NSC Bose Road, Rourkela', '9852014236', 'Yash'),
('SV11', 'Sai Valley World School', '45-C, Sai Valley, Rourkela ', '9658965471', 'Mebin'),
('SA22', 'Sri Aurobindo''s Scho', '79 Park Road, Rourkela', '2356478952', 'Asmita'),
('ST79', 'St. Arnold''s School', '23 Block F, Sector 2', '9652147852', 'Abhishek'),
('SG69', 'St. Gregorious High School', '13 Rose Road, Koelnagar', '1785962036', 'Harsha'),
('SJ46', 'St. Joseph''s Convent School', '78/5 Alipore Road, Rourkela', '2587458963', 'Jobin');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `Sponsor` varchar(15) NOT NULL DEFAULT '',
  `Event` varchar(20) DEFAULT NULL,
  `id` varchar(5) NOT NULL DEFAULT '',
  `Amount` int(11) NOT NULL,
  `Contact` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`Sponsor`, `Event`, `id`, `Amount`, `Contact`) VALUES
('Dominos', 'Cooking', 'C006', 4000, '8576980988'),
('Pallavi', 'Debate', 'D003', 3000, '3748576389'),
('Zever', 'Elocution', 'E005', 6000, '3746573890'),
('Baskin Robbins', 'Group Dance', 'GD001', 2500, '3746587465'),
('Hercules', 'Instrumental', 'I005', 4800, '76589036'),
('Central Park', 'Quiz', 'Q001', 12000, '756859867'),
('Sundari ', 'Spell Bee', 'S002', 6000, '3647589763'),
('Nirvana', 'Singing', 'S004', 4000, '47889542'),
('Estinno', '60 seconds', 'S008', 5000, '37465839'),
('Mokshaa', 'Solo Dance', 'SD007', 5000, '3456782765'),
('KitKat', 'Science Exhibition', 'SE002', 3500, '8679509867');

-- --------------------------------------------------------

--
-- Table structure for table `travel_acco`
--

CREATE TABLE IF NOT EXISTS `travel_acco` (
  `Participant_id` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `School` varchar(50) NOT NULL,
  `No. of days` int(2) NOT NULL,
  PRIMARY KEY (`Participant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_acco`
--

INSERT INTO `travel_acco` (`Participant_id`, `Name`, `School`, `No. of days`) VALUES
(1, 'Aditi', 'Amina Haroon Girl''s School', 3),
(2, 'Lalatendu', 'Chinmay Public School', 2),
(3, 'Soham', 'D''Souza''s Public School', 0),
(4, 'Sonali', 'DAV Public School', 4),
(5, 'Aishwarya', 'Deepika English Medium School', 2),
(6, 'Anurag', 'DPS, Rourkela', 1),
(7, 'Saswat', 'Guru Nanak Public High Sc', 3),
(8, 'Chinmay', 'Gyan Jyoti School', 2),
(9, 'Yusuf', 'Ispat English Medium School', 5),
(10, 'Rohan', 'Kalinga Public School', 0),
(11, 'David', 'KV, Rourkela', 1),
(12, 'Anukta', 'MGM English Medium School', 0),
(13, 'Srimoy', 'Mount Carmel High School', 1),
(14, 'Roshni', 'Paul''s School', 1),
(15, 'Yash', 'REC', 0),
(16, 'Mebin', 'Sai Valley World School', 3),
(17, 'Akansha', 'Sri Aurobindo''s School', 2),
(18, 'Abhishek', 'St Arnold''s School', 1),
(19, 'Harsha', 'St Gregorious High School', 3),
(20, 'Jobin', 'St Joseph''s Convent School', 3),
(21, 'Harshitha', 'Amina Haroon Girl''s School', 2),
(22, 'Rajdeep', 'Chinmay Public School', 1),
(23, 'Aditi', 'REC', 2),
(24, 'Aditya', 'REC', 2),
(25, 'Pratik', 'Paul''s School', 3),
(26, 'Pratikshya', 'Paul''s School', 3),
(27, 'Harpreet', 'KV, Rourkela', 0),
(28, 'Hanisha', 'DPS, Rourkela', 1),
(29, 'Aliva', 'KV, Rourkela', 0),
(30, 'Somali', 'Sai Valley World School', 4),
(31, 'Vikas', 'At. Arnol''s School', 3),
(32, 'Annie', 'MGM English Medium School', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`) VALUES
(1, 'Admin', '5514ae81cf9b1af3b5719d9446f062e2b1f0ca9d');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE IF NOT EXISTS `winners` (
  `Participant_id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `School` varchar(30) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Event` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Participant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`Participant_id`, `Name`, `School`, `Score`, `Event`) VALUES
(1, 'Aditi', 'Amina Haroon Girl''s School', 80, 'Singing'),
(7, 'Saswat', 'Guru Nanak Public High School', 90, 'Spell Bee'),
(11, 'David', 'KV, Rourkela', 69, 'Cooking'),
(13, 'Srimoy', 'Mount Carmel High School', 72, 'Solo Dance'),
(15, 'Yash', 'REC', 63, '60 seconds'),
(17, 'Akansha', 'Sri Aurobindo''s School', 84, 'Debate'),
(19, 'Harsha', 'St. Gregorious High School', 93, 'Quiz'),
(23, 'Aditi', 'REC', 67, 'Group Dance'),
(24, 'Aditya', 'REC', 67, 'Group Dance'),
(26, 'Pratikshya', 'Paul''s School', 56, 'Science exhibition'),
(28, 'Hanisha', 'DPS, Rourkela', 59, 'Instrumental'),
(32, 'Annie', 'MGM English Medium School', 98, 'Elocution');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

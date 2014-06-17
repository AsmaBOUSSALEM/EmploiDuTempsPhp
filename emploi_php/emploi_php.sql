-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2013 at 01:10 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emploi_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `year_id` (`year`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `year`) VALUES
(1, 'smi3', 2013),
(2, 'smi4', 2013),
(3, 'smi5', 2013),
(4, 'smi6', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(3, 'architecture/codage'),
(6, 'structures do donnees'),
(10, 'reseaux informatiques'),
(11, 'bases de donnees'),
(12, 'programmation orienté objet : java'),
(13, 'UML'),
(15, 'java avance'),
(16, 'php'),
(17, '.net'),
(18, 'OS');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE IF NOT EXISTS `period` (
  `period_num` int(11) NOT NULL AUTO_INCREMENT,
  `period_start` varchar(12) NOT NULL,
  `period_end` varchar(12) NOT NULL,
  PRIMARY KEY (`period_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_num`, `period_start`, `period_end`) VALUES
(1, '8H30', '10H'),
(2, '10H', '11H30'),
(3, '14H30', '16H'),
(4, '16H', '17H30');

-- --------------------------------------------------------

--
-- Table structure for table `planned_tmtbl`
--

CREATE TABLE IF NOT EXISTS `planned_tmtbl` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_name` varchar(44) NOT NULL,
  `period_num` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `course_id` (`course_id`),
  KEY `period_num` (`period_num`),
  KEY `planned_tmtbl_ibfk_3` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `planned_tmtbl`
--

INSERT INTO `planned_tmtbl` (`schedule_id`, `day_name`, `period_num`, `course_id`, `class_id`) VALUES
(6, 'mercredi', 2, 6, 2),
(10, 'mardi', 1, 16, 1),
(11, 'mardi', 3, 6, 1),
(13, 'jeudi', 2, 6, 2),
(14, 'mardi', 1, 12, 2),
(17, 'mercredi', 3, 17, 4),
(18, 'mercredi', 3, 11, 3),
(27, 'jeudi', 3, 12, 1),
(34, 'jeudi', 2, 13, 1),
(35, 'mercredi', 2, 3, 1),
(36, 'mercredi', 2, 6, 1),
(38, 'mardi', 3, 3, 1),
(39, 'mardi', 1, 16, 1),
(41, 'mardi', 1, 16, 1),
(43, 'mardi', 1, 16, 1),
(47, 'samedi', 3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_teacher`
--

CREATE TABLE IF NOT EXISTS `sub_teacher` (
  `subject` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`subject`,`teacher_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sub_teacher`
--

INSERT INTO `sub_teacher` (`subject`, `teacher_id`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` text NOT NULL,
  `teacher_account` text NOT NULL,
  `teacher_password` text NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_account`, `teacher_password`) VALUES
(1, 'Mr MASSAQ', 'Mr_MASSAQ', 'fsa'),
(2, 'Mr MACHKOUR', 'Mr_MACHKOUR', 'fsa'),
(3, 'Mr AFDEL', 'Mr_AFDEL', 'fsa'),
(4, 'Mr ENNAJI', 'Mr_ENNAJI', 'fsa'),
(5, 'Mr EL ANSSARI', 'MR_ANSSARI', 'fsa'),
(6, 'Mr BOULOUZ', 'Mr_BOULOUZ', 'fsa');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tmtbl`
--

CREATE TABLE IF NOT EXISTS `teacher_tmtbl` (
  `teacher_tmtbl_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_name` varchar(45) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `period_num` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_tmtbl_id`),
  KEY `period_num` (`period_num`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `teacher_tmtbl`
--

INSERT INTO `teacher_tmtbl` (`teacher_tmtbl_id`, `day_name`, `disponible`, `period_num`, `teacher_id`) VALUES
(16, 'lundi', 1, 1, 3),
(18, 'mercredi', 1, 2, 3),
(20, 'jeudi', 1, 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `planned_tmtbl`
--
ALTER TABLE `planned_tmtbl`
  ADD CONSTRAINT `planned_tmtbl_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `planned_tmtbl_ibfk_2` FOREIGN KEY (`period_num`) REFERENCES `period` (`period_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `planned_tmtbl_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_teacher`
--
ALTER TABLE `sub_teacher`
  ADD CONSTRAINT `sub_teacher_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_tmtbl`
--
ALTER TABLE `teacher_tmtbl`
  ADD CONSTRAINT `teacher_tmtbl_ibfk_1` FOREIGN KEY (`period_num`) REFERENCES `period` (`period_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_tmtbl_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

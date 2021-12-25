-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2021 at 09:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `tel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `email`, `id_emp`, `tel`) VALUES
('moulay ', 'moulaymoulay@gmail.com', 2, '34545678'),
('sidi ', 'sidisidi@yahoo.com', 3, '89898990'),
('medfal ', 'medfal@gmail.com', 8, '34567973'),
('MOUSTAFA ', 'moulay2323@gmail.com', 9, '45767988'),
('cheikh ', 'cheickcheick@yahoo.fr', 10, '26162898'),
('KALOUM ', 'oumar@gmail.com', 11, '45456567'),
('mohamed ', 'cheickcheick@yahoo.fr', 12, '45565656'),
('cheikh ', 'hassenhassen@gmal.com', 13, '56565656'),
('cheick ', 'mouhamedoufai@yahoo.com', 14, '46567889'),
('med mahmoud ', 'medmahmoud@gmail.com', 15, '45454546'),
('khalid ', 'sidihhhh@yahoo.com', 16, '46567889'),
('mohamed ', 'ahmedahmed@gmail.com', 17, '45456567'),
('abdellahi ', 'salah.vall333@gmail.com', 18, '45565656'),
('mouhamedou ', 'sidisidi@yahoo.com', 19, '89898990'),
('sidi ', 'nournour@yahoo.com', 20, '45454546'),
('cheick ', 'cheickcheick@yahoo.fr', 21, '23232323'),
('hassen ', 'cheickcheicLJLk@yahoo.fr', 22, '26162898'),
('nour ', 'nouhhhhh@yahoo.com', 23, '89898990'),
('mohamed ', 'salahvall333@gmail.com', 24, '45454656'),
('mouhamedou ', 'sidiali@yahoo.com', 25, '34545678'),
('hassen ', 'medmahmoud@gmail.com', 26, '26162898');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

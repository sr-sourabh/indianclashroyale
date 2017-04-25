

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `indian`
--
CREATE DATABASE IF NOT EXISTS `a3687005_papa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a3687005_papa`;

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE IF NOT EXISTS `clan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clan`
--

INSERT INTO `clan` (`id`, `name`) VALUES
(1, 'Indian'),
(2, 'Indian 2.0'),
(3, 'Indian 3.0'),
(4, 'Indian 0.0'),
(5, '$BoS$');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `player_id` varchar(50) NOT NULL,
  `clan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clan_id` (`clan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`clan_id`) REFERENCES `clan` (`id`) ON DELETE CASCADE;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `player_id`, `clan_id`) VALUES
(1, 'Bino', 'P0WLL', 1),
(2, 'SR', 'P1WLL', 1),
(3, 'Yash', 'P2WLL', 2),
(4, 'Adi', 'P4WLL', 3),
(5, 'Prabhu', 'P5WLL', 4),
(6, 'Shibe', 'P6WLL', 3),
(7, 'Ni3', 'P7WLL', 2);

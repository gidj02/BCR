-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 08:07 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcrdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `main_process`(IN `pprevcrop` VARCHAR(20), IN `pclimate` VARCHAR(20), IN `psoil` VARCHAR(20), IN `pmonth` VARCHAR(20))
    NO SQL
BEGIN
	
 DECLARE vprevcrops double(5,4) DEFAULT 0.000;
 DECLARE vklima double(5,4) DEFAULT 0.000;
 DECLARE vsoil double(5,4) DEFAULT 0.000;
 DECLARE vmonth double(5,4) DEFAULT 0.000;
 DECLARE prior int(4) DEFAULT 0;
 DECLARE likelihood int(4) DEFAULT 0;
 DECLARE proba double(5,4) DEFAULT 0.000;
 declare i int (4) default 1;
 declare n int (4) default 50;
 declare cropname varchar (20);
 
 
 
 while i <= n do
 
 SELECT crop into cropname FROM prob_table WHERE crop_id = i;
 select cropname;
 

 set prior = (SELECT COUNT(crop) FROM data where crop = cropname); 
 
 set likelihood = (SELECT COUNT(crop) FROM data where crop = cropname and prevcrop = pprevcrop) ;
 set vprevcrops = (likelihood/prior);
 select prior, likelihood, vprevcrops;
 
 set likelihood = (SELECT COUNT(crop) FROM data where crop = cropname and klima = pclimate) ;
 set vklima = (likelihood/prior);
 
 
 select prior, likelihood, vklima;
 
 set likelihood = (SELECT COUNT(crop) FROM data where crop = cropname and soil = psoil) ;
 set vsoil = (likelihood/prior);
 
 
 select prior, likelihood, vsoil;
 
 set likelihood = (SELECT COUNT(crop) FROM data where crop = cropname and month = pmonth) ;
 set vmonth = (likelihood/prior);
 
 
 select prior, likelihood, vmonth;
 
 
 set proba = (vmonth*vsoil*vklima*vprevcrops);
 select proba;
 
 update prob_table set prob = proba where crop_id = i;
 
 set i = i+1;
 
 
 end while;
 
 
    
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `crop` varchar(30) NOT NULL,
  `prevcrop` varchar(30) NOT NULL,
  `klima` varchar(30) NOT NULL,
  `soil` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `production` char(1) NOT NULL,
`dataid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`crop`, `prevcrop`, `klima`, `soil`, `month`, `production`, `dataid`) VALUES
('kamatis', 'sili', 'maulan', 'mapula', 'january', 'G', 1),
('kamatis', 'sili', 'maulan', 'mapula', 'january', 'G', 2),
('kamatis', 'sili', 'maulan ', 'mapula', 'january', 'G', 3),
('kamatis', 'sili', 'maulan ', 'mapula', 'january', 'G', 4),
('kamatis', 'sili', 'maulan ', 'mapula', 'january', 'G', 5),
('singkamas', 'talong', 'mainit', 'mabuhaghag', 'january', 'G', 6),
('singkamas', 'talong', 'mainit', 'mabuhaghag', 'january ', 'G', 7),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 8),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 9),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 10),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 11),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 12),
('Onion', 'Lettuce', 'Mainit', 'Loamy', 'January', 'G', 13),
('Onion', 'Raddish', 'Mainit', 'Loamy', 'January', 'G', 14),
('Onion', 'Canola', 'Mainit', 'Loamy', 'January', 'G', 15),
('Onion', 'Canola', 'Mainit', 'Sandy', 'March', 'G', 16),
('Onion', 'Raddish', 'Mainit', 'Loamy', 'March', 'G', 17);

-- --------------------------------------------------------

--
-- Table structure for table `prob_table`
--

CREATE TABLE IF NOT EXISTS `prob_table` (
`crop_id` int(11) NOT NULL,
  `crop` varchar(30) NOT NULL,
  `prob` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `prob_table`
--

INSERT INTO `prob_table` (`crop_id`, `crop`, `prob`) VALUES
(1, 'Onion', 0.108),
(2, 'Scallion', 0),
(3, 'Leek', 0),
(4, 'Garlic', 0),
(5, 'Bean', 0),
(6, 'Pea', 0),
(7, 'Lettuce', 0),
(8, 'Potato', 0),
(9, 'Tomato', 0),
(10, 'Eggplant', 0),
(11, 'Pepper', 0),
(12, 'Carrot', 0),
(13, 'Celery', 0),
(14, 'Celeriac', 0),
(15, 'Crucifer Greens', 0),
(16, 'Broccoli', 0),
(17, 'Cauliflower', 0),
(18, 'Cabbage', 0),
(19, 'Kale', 0),
(20, 'Raddish', 0),
(21, 'Kale', 0),
(22, 'Turnip ', 0),
(23, 'Cucumber', 0),
(24, 'Melon', 0),
(25, 'Pumpkin', 0),
(26, 'Summer Squash', 0),
(27, 'Spinach', 0),
(28, 'Beet', 0),
(29, 'Sweetcorn', 0),
(30, 'Strawbery', 0),
(31, 'Field corn', 0),
(32, 'Oat', 0),
(33, 'Spring Barley', 0),
(34, 'Winter Wheat', 0),
(35, 'Rye', 0),
(36, 'Soybean', 0),
(37, 'Dry Bean', 0),
(38, 'Alfafa Hay', 0),
(39, 'Winter Grain', 0),
(40, 'Spring Grain', 0),
(41, 'Annual ryegrass', 0),
(42, 'Sorghum-sudangrass', 0),
(43, 'Buckwheat', 0),
(44, 'White clover', 0),
(45, 'Sweet clover', 0),
(46, 'Hairy vetch', 0),
(47, 'Field pea', 0),
(48, 'Bell bean', 0),
(49, 'Rape', 0),
(50, 'Oilseed radish', 0);

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE IF NOT EXISTS `season` (
`seasonid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `weather` varchar(50) NOT NULL,
  `soiltype` varchar(50) NOT NULL,
  `rainfall` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `surname`, `age`, `gender`, `address`, `username`, `password`, `contact`, `email`) VALUES
(2, 'Gino', 'de Jesus', 19, 'M', 'Rodriguez, Rizal', 'gidj02', 'ginodejesus02', '09308229814', ''),
(3, 'Gerald', 'Magracia', 18, '1', 'caloocan city', 'gerald', 'pogi', '09177840518', 'gerald.adad@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`dataid`);

--
-- Indexes for table `prob_table`
--
ALTER TABLE `prob_table`
 ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
 ADD PRIMARY KEY (`seasonid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `dataid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `prob_table`
--
ALTER TABLE `prob_table`
MODIFY `crop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
MODIFY `seasonid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

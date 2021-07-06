-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 04:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowa_state`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `copies` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `title`, `author`, `copies`, `image`, `description`, `category`, `_status`) VALUES
(3, 'Say That Again (The Faderville Novels Book 2)', 'N Gemini Sasson', 1, 'Say that again.png', '', 'Novel', NULL),
(4, 'All the Light we Cannot See', 'Anthony Doerr', 1, 'all the light we cannot see.png', '', 'Novel', NULL),
(5, 'Basic computer engineering', 'Satya Prakashan', 1, 'basic-computer-engineering-book-500x500.png', '', 'Computers & Tech', NULL),
(6, 'Starport (A graphic Novel)', 'George R. R. Martin', 1, 'startport.jpg', '', 'Novel', NULL),
(7, 'Devil in Springs', 'Lisa Kleypas', 1, 'devil in springs.png', '', 'Novel', NULL),
(8, 'Alaxander Hamilton', 'Ron Chernow', 1, 'alaxandder hamilton.png', '', 'Biography', NULL),
(9, 'Prince charles', 'Sally Bedell Smith', 1, 'prince charles.png', '', 'Biography', NULL),
(10, 'Stephan King', 'Albert Rolls', 1, 'stephan king.png', '', 'Biography', NULL),
(11, 'Nepolean', 'Andrew Roberts', 1, 'nepolean.png', '', 'Biography', NULL),
(12, 'Princess Diana', 'Drew L. Crichton', 1, 'Princess diana.png', '', 'Biography', NULL),
(13, 'Principles and Practive of Medicine', 'Davidson', 1, 'Principles and Practive of Medicine.png', '', 'Medical', NULL),
(14, 'Anatomy and physiology', 'Payal Mittal', 1, 'anatomy.png', '', 'Medical', NULL),
(15, 'Medical Terminology', 'Adam Brown', 1, 'medical terminology.png', '', 'Medical', NULL),
(16, 'Emergency Medicine', 'Douglas D. Brunette', 1, 'Emergency medicine.png', '', 'Medical', NULL),
(17, 'Physical Medicine And Rehabilitation', 'Ian B. Maitin', 1, 'physical medicine and rehabilitation.png', '', 'Medical', NULL),
(18, 'Data structures Algorithm made easy', 'Narasimha Karumanchi', 1, 'data-structures-and-algorithms-made-easy-original-imafazxbzdxyhjdq.jpeg', '', 'Computers & Tech', NULL),
(19, 'Upgrading and repairing PCs', 'Scott Mueller', 1, 'tech-ad.jpg', '', 'Computers & Tech', NULL),
(20, 'Supervised Learing with Quantum Computers', 'Maria Schuld', 1, '9783319964232.jpg', '', 'Computers & Tech', NULL),
(21, 'Invent your own computer games with python', 'Al Sweigart', 1, 'cover_invent4th_thumb.png', '', 'Computers & Tech', NULL),
(22, 'Mathematics as a tool', 'Johannes Lenhard', 1, 'preview.jpg', '', 'Science & Math', NULL),
(23, 'Electronic Structure and the properties of solids', 'Walter A. Harrison', 1, '4c83dc6e4cfbf284f04e25826d84fb3e--book-covers-book-jacket.jpg', '', 'Science & Math', NULL),
(24, 'Probability and statistics for data science', 'Norman Matloff', 1, '9781138393295.jpg', '', 'Science & Math', NULL),
(25, 'Computer Arts', 'No Author', 1, '841fcb98889cc5a35c95a1b319c38431.jpg', '', 'Magazine', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fname`, `lname`, `email`, `pass1`, `pass2`) VALUES
('a', 'Mohamed', 'Sakeel', 'mhmdsakeel123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('sakeel', 'Mohamed', 'Sakeel', 'mhmdsakeel123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

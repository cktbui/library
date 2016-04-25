-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2016 at 03:10 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorid` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorid`, `name`) VALUES
(1, 'J.R.R. Tolken'),
(2, 'C. S. Lewis'),
(3, 'Alex Haley'),
(4, 'Tom Clancy'),
(5, 'Isaac Asimov'),
(6, 'Anna Gavalda'),
(7, 'Gene Kim, Kevin Behr, George Spafford');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `pub_year` smallint(6) NOT NULL,
  `Available` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `Available`) VALUES
(1, 1, 'The Two Towers', '0-261-10236-2', 1954, '5'),
(2, 1, 'The Return of The King ', '0-261-10237-0', 1955, '5'),
(3, 6, 'Hunting and Gathering', '9782842630850', 2006, '8'),
(5, 2, 'The Lion, the Witch and the Wardrobe', '7207376', 1950, '5'),
(6, 2, 'Prince Caspian', '978-0-00-671679-2', 1951, '5'),
(7, 2, 'The Voyage of the Dawn Treader', '978-0-00-671680-8', 1952, '5'),
(8, 2, 'The Silver Chair', '978-0-00-671681-5', 1953, '5'),
(9, 2, 'The Horse and His Boy', '978-0-00-671678-5', 1954, '4'),
(10, 7, 'The Phoenix Project', '9780988262591', 2013, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
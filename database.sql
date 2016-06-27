-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 27, 2016 at 12:46 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `test_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `employees_tbl`
-- 

CREATE TABLE `employees_tbl` (
  `empid` int(10) NOT NULL auto_increment,
  `ename` varchar(100) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `salary` double NOT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY  (`empid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `employees_tbl`
-- 

INSERT INTO `employees_tbl` VALUES (1, 'vikram', 'manager', 50000, '2016-06-01');
INSERT INTO `employees_tbl` VALUES (2, 'lucky', 'General Manager', 75000, '2016-06-13');
INSERT INTO `employees_tbl` VALUES (3, 'balraj', 'System Admin', 4500, '2016-06-15');
INSERT INTO `employees_tbl` VALUES (4, 'Srujana', 'Programmer', 6000, '2016-03-15');
INSERT INTO `employees_tbl` VALUES (5, 'Vijaya', 'Software Analyst', 5000, '2016-06-27');
INSERT INTO `employees_tbl` VALUES (6, 'Gloria Little', 'Systems Administrator', 6000, '2016-06-08');
INSERT INTO `employees_tbl` VALUES (7, ' Kennedy', 'Secretary', 3000, '2016-06-27');
INSERT INTO `employees_tbl` VALUES (8, 'Hatfield', 'Regional Director', 15000, '2016-06-01');
INSERT INTO `employees_tbl` VALUES (9, 'Caldwell', 'Development Lead', 6000, '2016-06-20');
INSERT INTO `employees_tbl` VALUES (10, 'Jennifer ', ' Javascript Developer', 7500, '2016-06-13');
INSERT INTO `employees_tbl` VALUES (11, 'Bradshaw', 'Office Manager', 6500, '2016-06-07');
INSERT INTO `employees_tbl` VALUES (12, 'Wilder', 'Sales Assistant', 3500, '2016-06-08');
INSERT INTO `employees_tbl` VALUES (13, 'Green', 'Accountant', 2500, '2016-06-20');
INSERT INTO `employees_tbl` VALUES (14, 'Joyce', 'Developer', 4500, '2016-06-14');
INSERT INTO `employees_tbl` VALUES (15, 'Winters', 'Accountant', 4500, '2016-06-21');
INSERT INTO `employees_tbl` VALUES (16, 'Chang', 'Developer', 4500, '2016-06-27');
INSERT INTO `employees_tbl` VALUES (17, 'Michael ', 'Javascript Developer', 6500, '2016-06-27');
INSERT INTO `employees_tbl` VALUES (26, 'k', 'k', 9, '2016-06-17');

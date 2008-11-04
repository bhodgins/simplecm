-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `version` text NOT NULL,
  `admin` text NOT NULL,
  `modinstall` text NOT NULL,
  `layout` text NOT NULL,
  `updateserver` text NOT NULL,
  `title` text NOT NULL
);

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES ('0.2.0', 'yes', 'yes', 'none', ' ', 'SimpleCM');

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_log`
-- 

CREATE TABLE `admin_log` (
  `scm` text NOT NULL,
  `user` text NOT NULL,
  `useragent` text NOT NULL,
  `date` text NOT NULL,
  `ip` text NOT NULL
);

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_mod`
-- 

CREATE TABLE `admin_mod` (
  `modname` text NOT NULL,
  `modver` text NOT NULL,
  `installdate` text NOT NULL,
  `updateurl` text NOT NULL,
  `ai` text NOT NULL,
  `optionfile` text NOT NULL
);

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_motd`
-- 

CREATE TABLE `admin_motd` (
  `motd` text NOT NULL,
  `id` text NOT NULL
);

-- 
-- Dumping data for table `admin_motd`
-- 


INSERT INTO `admin_motd` VALUES ('There are always updates coming soon, so dont worry too much if you discover a bug!!!', '3');
INSERT INTO `admin_motd` VALUES ('Check simplecm.org for the newest updates', '4');
INSERT INTO `admin_motd` VALUES ('visit simplecm.org for the latest news', '5');
INSERT INTO `admin_motd` VALUES ('send suggestions to georgemoody@gmail.com', '6');

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `contact_id` text NOT NULL
);


-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Content` text NOT NULL,
  `DateAdded` text NOT NULL,
  `news_id` text NOT NULL
);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `username` text NOT NULL,
  `passwd` text NOT NULL,
  `id` text NOT NULL,
  `permissions` text NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `location` text NOT NULL,
  `timezone` text NOT NULL,
  `email` text NOT NULL
);
INSERT INTO `users` (`username`, `passwd`, `id`, `permissions`, `first`, `last`, `location`, `timezone`, `email`) VALUES 
('user', '1a1dc91c907325c69271ddf0c944bc72', '0', 'admin', 'first', 'last', 'n', 'n', 'user@localhost');


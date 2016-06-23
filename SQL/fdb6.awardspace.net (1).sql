-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Host: fdb6.awardspace.net
-- Generation Time: Oct 18, 2015 at 04:46 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1966405_journal`
--
CREATE DATABASE `1966405_journal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `1966405_journal`;

-- --------------------------------------------------------

--
-- Table structure for table `decisions`
--

CREATE TABLE IF NOT EXISTS `decisions` (
  `SubmissionTitle` varchar(100) NOT NULL,
  `DecisionID` int(11) NOT NULL DEFAULT '1',
  `MEDecision` int(11) NOT NULL DEFAULT '1',
  `AEDecision` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decisions`
--

INSERT INTO `decisions` (`SubmissionTitle`, `DecisionID`, `MEDecision`, `AEDecision`) VALUES
('Jackson Dance', 1, 5, 1),
('Bioethical Test', 2, 1, 5),
('Bulls on Parade', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manuscriptAssignment`
--

CREATE TABLE IF NOT EXISTS `manuscriptAssignment` (
  `AssignmentID` int(11) NOT NULL AUTO_INCREMENT,
  `SubmissionTitle` varchar(500) NOT NULL,
  `AssocEditorAssign` varchar(100) NOT NULL,
  `ReviewerAssigned` varchar(100) NOT NULL,
  `Review` longtext NOT NULL,
  `ReviewFile` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `JBIN` varchar(100) NOT NULL,
  PRIMARY KEY (`AssignmentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `manuscriptAssignment`
--

INSERT INTO `manuscriptAssignment` (`AssignmentID`, `SubmissionTitle`, `AssocEditorAssign`, `ReviewerAssigned`, `Review`, `ReviewFile`, `Author`, `JBIN`) VALUES
(1, 'Bioethical Test', '', 'chris1', ' Great', 'Testing1234.pdf', 'John Doe', 'JBIN-15-12'),
(5, 'Bioethical Test', 'drew13', '', '', '', 'John Doe', 'JBIN-15-12'),
(6, 'Bioethical Test', '', 'Reviewer2', ' Great Article', 'reviewer2.docx', 'John Doe', 'JBIN-15-12'),
(7, 'Bulls on Parade', 'drew13', '', '', '', 'Jimmy Theo', 'JBIN-15-46');

-- --------------------------------------------------------

--
-- Table structure for table `manuscriptStatus`
--

CREATE TABLE IF NOT EXISTS `manuscriptStatus` (
  `Status` int(11) NOT NULL,
  `DescriptionStatus` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manuscriptStatus`
--

INSERT INTO `manuscriptStatus` (`Status`, `DescriptionStatus`) VALUES
(1, 'New Status - not assigned'),
(2, 'Assigned to Associate Editor for Review'),
(3, 'Assigned to Reviewer'),
(4, 'Reviewed and Assigned back to Associate Editor'),
(5, 'Assigned back to Chief Editor');

-- --------------------------------------------------------

--
-- Table structure for table `manuscripts`
--

CREATE TABLE IF NOT EXISTS `manuscripts` (
  `ManuscriptID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(40) NOT NULL,
  `ArticleType` varchar(40) NOT NULL,
  `SymposiumName` varchar(500) NOT NULL,
  `SubmissionTitle` varchar(100) NOT NULL,
  `FirstAuthor` varchar(100) NOT NULL,
  `SecondAuthor` varchar(100) NOT NULL,
  `ThirdAuthor` varchar(100) NOT NULL,
  `FourthAuthor` varchar(100) NOT NULL,
  `FunderName` varchar(100) NOT NULL,
  `GrantNumber` varchar(500) NOT NULL,
  `GrantRecipient` varchar(100) NOT NULL,
  `Abstract` longtext NOT NULL,
  `Comments` longtext NOT NULL,
  `Status` int(10) NOT NULL DEFAULT '1',
  `DecisionID` int(11) NOT NULL DEFAULT '1',
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `JBIN` varchar(100) NOT NULL,
  `CorrespondingAuthor` varchar(100) NOT NULL,
  `CorrespondingEmail` varchar(100) NOT NULL,
  `SympSpIssue` varchar(10) NOT NULL,
  `Published1` varchar(10) NOT NULL,
  `Published2` varchar(10) NOT NULL,
  `Published3` varchar(10) NOT NULL,
  PRIMARY KEY (`ManuscriptID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`ManuscriptID`, `Username`, `ArticleType`, `SymposiumName`, `SubmissionTitle`, `FirstAuthor`, `SecondAuthor`, `ThirdAuthor`, `FourthAuthor`, `FunderName`, `GrantNumber`, `GrantRecipient`, `Abstract`, `Comments`, `Status`, `DecisionID`, `DateCreated`, `JBIN`, `CorrespondingAuthor`, `CorrespondingEmail`, `SympSpIssue`, `Published1`, `Published2`, `Published3`) VALUES
(12, 'Chris', 'Original Research', '', 'Bioethical Test', 'John Doe', '', '', '', '', '', '', ' ', ' ', 3, 2, '2015-10-14 00:22:02', 'JBIN-15-12', '', '', '', '', '', ''),
(46, 'Submitter3', 'Original Research', 'Jacksonss', 'Bulls on Parade', 'Jimmy Theo', 'John Derk ', 'Jim Frank', 'Frank Thomas', 'AASU', 'AASU123', 'Tom Jones', ' After slamming into Aurora''s Casiguran town after midnight Saturday, the typhoon weakened and slowed down, hemmed in by the Sierra Madre mountain range and a high pressure area in the country''s north and another typhoon far out in the Pacific in the east, government forecaster Gladys Saludes said.\r\n\r\nHowling winds knocked down trees and electric posts, leaving nine entire provinces without power, while floods and small landslides made 25 roads and bridges impassable. Authorities suspended dozens of flights and sea voyages due to the stormy weather, and many cities canceled classes on Monday.\r\n\r\nBy Sunday afternoon, the typhoon had veered toward the north from a westward course and was barreling across mountainous Nueva Vizcaya province with sustained winds of 150 kilometers (93 miles) per hour and gusts of up to 185 kph (115 mph), according to the government''s weather agency.\r\n\r\nSatellite images showed that the typhoon appeared to be losing its eye, a sign of its dissipating strength, acting weather bureau chief Esperanza Cayanan said, adding that Koppu was forecast to move at a slow pace of 5 kph (3 mph) across the mountainous north before exiting the main northern island of Luzon on Wednesday.\r\n\r\nWhile weather conditions had begun to improve in some towns, and villagers had started to clear roads of fallen trees and debris, Koppu still packed a ferocity that could set off landslides and flash floods, officials said.\r\n\r\n"We''re asking our countrymen not to become complacent," said Alexander Pama, who heads the government''s disaster-response agency, citing how rainwater could cascade down mountainsides after Koppu passed and flood villages.', ' course and was barreling across mountainous Nueva Vizcaya province with sustained winds of 150 kilometers (93 miles) per hour and gusts of up to 185 kph (115 mph), according to the government''s weather agency.', 2, 1, '2015-10-18 14:39:26', 'JBIN-15-46', 'Robin Yount', 'yount@brewers.com', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `DecisionID` int(11) NOT NULL,
  `DescriptionDecision` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`DecisionID`, `DescriptionDecision`) VALUES
(1, 'None'),
(2, 'Accept'),
(3, 'minor revisions'),
(4, 'major revisions'),
(5, 'reject before review'),
(6, 'reject after review');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `SubmissionTitle` varchar(100) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`SubmissionTitle`, `Username`, `File`) VALUES
('Jackson Dance', 'jackson', 'andrewjackson.docx'),
('Bioethical Test', 'Chris', 'Testing1234.pdf'),
('Bulls on Parade', 'Submitter3', 'submitter3new.docx');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `ID` int(10) NOT NULL,
  `First` varchar(40) NOT NULL,
  `Last` varchar(40) NOT NULL,
  `AcademicDegrees` varchar(40) NOT NULL,
  `Organizations` varchar(100) NOT NULL,
  `Email` varchar(40) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `First`, `Last`, `AcademicDegrees`, `Organizations`, `Email`) VALUES
(40, 'Andrew', 'Cooper', 'Doctorate of Super Cool Stuff', 'Masters of the Universe', 'ac7454@web-students.armstorng.edu'),
(18, 'Chris', 'Tomsyck', '', '', 'a@bc.com'),
(39, 'Fworks', 'Lworks', 'Aworked', 'Oworked', 'works@worked.edu'),
(46, 'Reggie', 'Jackson', '', '', 'r@g.com'),
(41, 'John', 'Submitter', 'PHD', 'AASU', 'john@submit.com'),
(42, 'John', 'submit', '', '', 'jj@sub.com'),
(43, 'Andrew', 'Jackson', 'PHD', 'AASU', 'andrew@jackson.com'),
(44, 'Managing', 'Editor', '', '', 'm@a.com'),
(45, 'Reviewer2', 'Reviewer2', '', '', 'a@defg.com');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE IF NOT EXISTS `userroles` (
  `Role` int(2) NOT NULL,
  `DescriptionRole` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`Role`, `DescriptionRole`) VALUES
(1, 'Administration'),
(2, 'Associate Editor'),
(3, 'Submitter'),
(4, 'Reviewer'),
(5, 'Managing Editor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Role` int(10) NOT NULL DEFAULT '3',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Role`) VALUES
(18, 'Chris', 'C1hrischris', 1),
(46, 'Submitter3', 'Submitter3', 3),
(45, 'Reviewer2', 'Reviewer2', 4),
(44, 'managing', 'M1anaging', 5),
(43, 'jackson', 'J1ackson', 3),
(42, 'submit', 'S1ubmitter', 3),
(40, 'drew13', 'Drewcooper13', 2),
(41, 'submitter', 'S1ubmitter', 3),
(39, 'chris1', 'C1hrischris', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

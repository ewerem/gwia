-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 10:19 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_gwia`
--

CREATE TABLE IF NOT EXISTS `admin_gwia` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_gwia`
--

INSERT INTO `admin_gwia` (`id`, `user`, `pass`) VALUES
(1, 'gwia', 'gwia');

-- --------------------------------------------------------

--
-- Table structure for table `admin_super`
--

CREATE TABLE IF NOT EXISTS `admin_super` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_super`
--

INSERT INTO `admin_super` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `para1` longtext NOT NULL,
  `para2` longtext NOT NULL,
  `para3` longtext NOT NULL,
  `para4` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certified`
--

CREATE TABLE IF NOT EXISTS `certified` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certified`
--

INSERT INTO `certified` (`id`, `course`, `email`, `time`) VALUES
(1, 'DE', 'g@k.com', '2020-09-03 18:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `cname`) VALUES
(1, 'NIGERIA'),
(2, 'GHANA'),
(3, 'UNITED STATES (USA)'),
(4, 'UNITED KINGDOM (UK)'),
(5, 'CANADA'),
(6, 'SOUTH AFRICA'),
(7, 'AUSTRALIA'),
(8, 'BAHAMAS'),
(9, 'BENIN'),
(10, 'CAMEROON'),
(11, 'CHILE'),
(12, 'CHINA'),
(13, 'KENYA'),
(14, 'CONGO'),
(15, 'FRANCE'),
(16, 'GAMBIA'),
(17, 'GABON'),
(18, 'NETHERLAND (HOLLAND)'),
(20, 'SWITZERLAND'),
(21, 'ITALY'),
(22, 'SPAIN'),
(23, 'SWEDEN'),
(24, 'SWAZILAND'),
(25, 'SINGAPORE'),
(26, 'JAPAN'),
(27, 'MADAGASCAR'),
(28, 'SIERRA LEONE'),
(29, 'SUDAN'),
(30, 'ZIMBABWE'),
(31, 'MALAWI'),
(32, 'UGANDA'),
(33, 'JORDAN'),
(34, 'LESOTHO'),
(35, 'TANZANIA'),
(36, 'TOGO'),
(37, 'TUNISIA'),
(38, 'UKRAINE'),
(39, 'UNITED ARAB EMIRATE'),
(40, 'URUGUAY'),
(41, 'SERBIA'),
(42, 'SENEGAL'),
(43, 'RWANDA'),
(44, 'PHILLIPPINES'),
(45, 'POLAND'),
(46, 'PERU'),
(47, 'PORTUGAL'),
(48, 'PARAGUAY'),
(49, 'BRAZIL'),
(50, 'NIGER'),
(51, 'NEW ZEALAND'),
(52, 'MOROCCO'),
(53, 'MOZAMBIQUE'),
(54, 'MEXICO'),
(55, 'ANGOLA'),
(57, 'MALAYSIA'),
(58, 'LIBERIA'),
(60, 'LEBANON'),
(61, 'ISRAEL'),
(62, 'INDIA'),
(63, 'INDONESIA'),
(64, 'HONG KONG'),
(65, 'GUINEA'),
(66, 'GERMANY'),
(67, 'GREECE'),
(68, 'ETHIOPIA'),
(69, 'ECUADOR'),
(70, 'DENMARK'),
(71, 'COSTA RICA'),
(74, 'BURKINA FASO'),
(75, 'BOTSWANA'),
(76, 'BELGIUM'),
(77, 'ARGENTINA'),
(78, 'ALGERIA');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `costn` varchar(100) NOT NULL,
  `costd` varchar(100) NOT NULL,
  `abbr` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cname`, `costn`, `costd`, `abbr`, `time`) VALUES
(3, 'Advance Diploma in Personal Development Education', '57,100', '150', 'ADPDE', '2020-09-03 16:12:59'),
(4, 'Master Diploma in Personal Development Education', '76,200', '200', 'MDPDE', '2020-09-03 16:13:55'),
(5, 'Digital Education', '6000', '15', 'DE', '2020-09-03 16:15:11'),
(6, 'DIPLOMA IN PERSONAL DEVELOPMENT EDUCATION', '38100', '100', 'DPDE', '2020-09-03 16:34:06'),
(7, 'Certificate in Personal Development Education', '19000', '50', 'CPDE', '2020-09-05 19:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `course_question`
--

CREATE TABLE IF NOT EXISTS `course_question` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `question` longtext NOT NULL,
  `optA` longtext NOT NULL,
  `optB` longtext NOT NULL,
  `optC` longtext NOT NULL,
  `optD` longtext NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_question`
--

INSERT INTO `course_question` (`id`, `course`, `question`, `optA`, `optB`, `optC`, `optD`, `answer`) VALUES
(1, 'DE', 'now is', 'jj', 'uu', 'kk', 'dd', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `c_modules`
--

CREATE TABLE IF NOT EXISTS `c_modules` (
  `id` int(11) NOT NULL,
  `mtitle` varchar(250) NOT NULL,
  `mcourse` varchar(100) NOT NULL,
  `mnum` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_modules`
--

INSERT INTO `c_modules` (`id`, `mtitle`, `mcourse`, `mnum`, `time`) VALUES
(1, 'good', 'DE', 1, '2020-08-12 22:49:07'),
(2, 'now', 'DE', 2, '2020-08-12 22:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `job_subscribe`
--

CREATE TABLE IF NOT EXISTS `job_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE IF NOT EXISTS `job_vacancy` (
  `id` int(11) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lchat`
--

CREATE TABLE IF NOT EXISTS `lchat` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `who` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lchat`
--

INSERT INTO `lchat` (`id`, `course`, `name`, `msg`, `who`, `time`) VALUES
(11, 'DE', 'DE/2/0320/4235', 'hello sir', 'student', '2020-09-04 21:12:32'),
(12, 'DE', 'john okafor', 'what''s up', 'tutor', '2020-09-04 21:23:46'),
(13, 'DE', 'john okafor', 'to DE/3/0320/4235, you question is answered already', 'tutor', '2020-09-04 21:27:54'),
(14, 'DE', 'DE/2/0320/4235', 'thanks Sir', 'student', '2020-09-04 21:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `module_topics`
--

CREATE TABLE IF NOT EXISTS `module_topics` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `tnum` int(11) NOT NULL,
  `tcourse` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_content`
--

CREATE TABLE IF NOT EXISTS `mt_content` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `para1` longtext NOT NULL,
  `para2` longtext NOT NULL,
  `tcourse` varchar(100) NOT NULL,
  `file` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `head` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL,
  `head` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `open_job`
--

CREATE TABLE IF NOT EXISTS `open_job` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `jtitle` varchar(250) NOT NULL,
  `jlocate` varchar(250) NOT NULL,
  `jtype` varchar(100) NOT NULL,
  `jstop` varchar(100) NOT NULL,
  `jsum` longtext NOT NULL,
  `jduty` longtext NOT NULL,
  `jqualify` longtext NOT NULL,
  `jskill` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `p_channel` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `amt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `gender` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `leveledu` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `adnum` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `oname`, `email`, `country`, `state`, `address`, `gender`, `course`, `leveledu`, `pass`, `phone`, `photo`, `terms`, `payment`, `adnum`, `time`) VALUES
(1, 'Adamu', 'fff', 'g@k.com', 'BOTSWANA', 'ogun', 'uu hh 56, ojuh njkj', 'Male', 'DE', 'NCE', 'goo', 'no', 'no', 'Accept', 'yes', 'DE/2/0320/4235', '2020-08-12 21:53:46'),
(2, 'jjjh', 'vbmn', 'gggg@h.com', 'UNITED', 'uyoiuy', 'jj', 'Male', 'CPDE', 'Doctorate', 'hh', 'no', 'no', 'Accept', 'yes', 'no', '2020-08-18 18:31:11'),
(3, 'j', 'j', 'sade@g.com', 'UNITED_STATES_(USA)', 'm', 'k', 'Male', 'CPDE', 'Doctorate', 'k', 'no', 'no', 'Accept', 'yes', 'no', '2020-08-18 18:36:56'),
(4, 'tt', 'gg', 't@t.com', 'UNITED_ARAB_EMIRATE', 'jjj', 'uuu', 'Female', 'DE', 'High School', 't', 'no', 'no', 'Accept', 'yes', 'DE/2/1820/4259', '2020-08-18 18:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_q_ans`
--

CREATE TABLE IF NOT EXISTS `student_q_ans` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `quest_ans` varchar(50) NOT NULL,
  `stud_ans` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_q_ans`
--

INSERT INTO `student_q_ans` (`id`, `qid`, `course`, `user`, `quest_ans`, `stud_ans`, `mark`) VALUES
(1, 1, 'DE', 'g@k.com', 'b', 'b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tcourse` varchar(100) NOT NULL,
  `leveledu` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `photo`, `name`, `email`, `phone`, `country`, `state`, `tcourse`, `leveledu`, `gender`, `pass`, `time`) VALUES
(1, 'no', 'john okafor', 'f@f.com', '+234 8788765543', 'nigeria', 'ib', 'DE', 'Masters', 'Male', 'gud', '2020-08-12 22:38:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_gwia`
--
ALTER TABLE `admin_gwia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_super`
--
ALTER TABLE `admin_super`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certified`
--
ALTER TABLE `certified`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_question`
--
ALTER TABLE `course_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_modules`
--
ALTER TABLE `c_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_subscribe`
--
ALTER TABLE `job_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lchat`
--
ALTER TABLE `lchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_topics`
--
ALTER TABLE `module_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_content`
--
ALTER TABLE `mt_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_job`
--
ALTER TABLE `open_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_q_ans`
--
ALTER TABLE `student_q_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_gwia`
--
ALTER TABLE `admin_gwia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_super`
--
ALTER TABLE `admin_super`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `certified`
--
ALTER TABLE `certified`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `course_question`
--
ALTER TABLE `course_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `c_modules`
--
ALTER TABLE `c_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job_subscribe`
--
ALTER TABLE `job_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lchat`
--
ALTER TABLE `lchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `module_topics`
--
ALTER TABLE `module_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_content`
--
ALTER TABLE `mt_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `open_job`
--
ALTER TABLE `open_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_q_ans`
--
ALTER TABLE `student_q_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

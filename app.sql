-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 11:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('Robin45', 'Robin@4513');

-- --------------------------------------------------------

--
-- Table structure for table `app_developer_table`
--

CREATE TABLE `app_developer_table` (
  `q_id` int(11) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `option_1` varchar(60) NOT NULL,
  `option_2` varchar(60) NOT NULL,
  `option_3` varchar(60) NOT NULL,
  `option_4` varchar(60) NOT NULL,
  `correct_ans` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_developer_table`
--

INSERT INTO `app_developer_table` (`q_id`, `q_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_ans`) VALUES
(1, 'Which keyword can be used for coming out of recursion?', 'break', 'return', 'exit', 'continue', '2'),
(2, 'What\'s a web browser?', 'A kind of spider', 'A computer that stores WWW files', 'A person who likes to look at websites', 'A software program that allows you to access sites on the Wo', '4'),
(3, 'How many bits is a byte?', '4', '8', '16', '32', '2'),
(4, 'The speed of your net access is defined in terms of...', 'RAM', 'MHz', 'Kbps', 'Megabytes', '3'),
(5, 'Which of these is a search engine?', 'FTP', 'Google', 'Archie', 'SMTP', '2'),
(6, '\"DOS\" stands for..', 'Data Out System', 'Disk Out System', 'Disk Operating System', 'Data Operating System', '3'),
(7, 'What does CPU stand for?', 'Computer Parts United', 'Common Process Unit', 'Computer Processing Unit', 'Central Processing Unit', '4'),
(8, 'ISP stands for…', 'Internet Survey Period', 'Integrated Service Provider', 'Internet Security Protocol', 'Internet Service Provider', '4'),
(9, 'Internet Explorer is a...', 'Any person browsing the net', 'Web Browser', 'Graphing Package', 'News Reader', '2'),
(10, 'The \"http\" you type at the beginning of any site\'s address stands for…', 'HTML Transfer Technology Process', 'Hyperspace Terms and Tech Protocol', 'Hyperspace Techniques & Tech Progress', 'Hyper Text Transfer Protocol', '4'),
(11, 'Which of the following is not a part of the Internet?', 'World Wide Web', 'Email', 'CD-ROM', 'HTTP', '3'),
(12, 'What is not always necessary for accessing the Web?', 'A modem', 'A connection to an Internet Access Provider', 'A computer', 'A Web browser', '1'),
(13, '\"MAC\" stands for..', 'Mediocre Apple Computer', 'A Computer made by Apple', 'Memory Address Corruption', 'Media Access Control', '4'),
(14, 'What does ICMP stand for?', 'Internet Control Message Protocol', 'Internal Conflict Management Program', 'Intranet Control Message Program', 'Internet Connection Modem Protocol', '1'),
(15, 'What is a URL?', 'A computer software program', 'A type of UFO', 'The address of a document or \"page\" on the World Wide Web', 'An acronym for Uniform Resources Learning', '3'),
(16, 'What is a NIC?', 'Netware Intranet Controller', 'No Internet Connection', 'Network Interface Card', 'Network Interference Control', '3'),
(17, 'Another word for the CPU is...', 'Execute', 'Microprocessor', 'Micro chip', '          \nDecode', '2'),
(18, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', '2'),
(19, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', '4'),
(20, 'Which of the following is the original purpose of SQL?', 'To specify the syntax and semantics of SQL data definition l', 'To specify the syntax and semantics of SQL manipulation lang', 'To define the data structures', 'All of the above', '4');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_role`
--

CREATE TABLE `deleted_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deleted_role`
--

INSERT INTO `deleted_role` (`role_id`, `role_name`) VALUES
(5, 'Cloud Engineer'),
(2, 'Developer'),
(3, 'HR'),
(3, 'Tester'),
(4, 'App Developer'),
(6, 'Cloud Enginner');

-- --------------------------------------------------------

--
-- Table structure for table `developer_table`
--

CREATE TABLE `developer_table` (
  `q_id` int(11) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `option_1` varchar(60) NOT NULL,
  `option_2` varchar(60) NOT NULL,
  `option_3` varchar(60) NOT NULL,
  `option_4` varchar(60) NOT NULL,
  `correct_ans` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `developer_table`
--

INSERT INTO `developer_table` (`q_id`, `q_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_ans`) VALUES
(1, 'Which keyword can be used for coming out of recursion?', 'break', 'return', 'exit', 'continue', '2'),
(2, 'What\'s a web browser?', 'A kind of spider', 'A computer that stores WWW files', 'A person who likes to look at websites', 'A software program that allows you to access sites on the Wo', '4'),
(3, 'How many bits is a byte?', '4', '8', '16', '32', '2'),
(4, 'The speed of your net access is defined in terms of...', 'RAM', 'MHz', 'Kbps', 'Megabytes', '3'),
(5, 'Which of these is a search engine?', 'FTP', 'Google', 'Archie', 'SMTP', '2'),
(6, '\"DOS\" stands for..', 'Data Out System', 'Disk Out System', 'Disk Operating System', 'Data Operating System', '3'),
(7, 'What does CPU stand for?', 'Computer Parts United', 'Common Process Unit', 'Computer Processing Unit', 'Central Processing Unit', '4'),
(8, 'ISP stands for…', 'Internet Survey Period', 'Integrated Service Provider', 'Internet Security Protocol', 'Internet Service Provider', '4'),
(9, 'Internet Explorer is a...', 'Any person browsing the net', 'Web Browser', 'Graphing Package', 'News Reader', '2'),
(10, 'The \"http\" you type at the beginning of any site\'s address stands for…', 'HTML Transfer Technology Process', 'Hyperspace Terms and Tech Protocol', 'Hyperspace Techniques & Tech Progress', 'Hyper Text Transfer Protocol', '4'),
(11, 'Which of the following is not a part of the Internet?', 'World Wide Web', 'Email', 'CD-ROM', 'HTTP', '3'),
(12, 'What is not always necessary for accessing the Web?', 'A modem', 'A connection to an Internet Access Provider', 'A computer', 'A Web browser', '1'),
(13, '\"MAC\" stands for..', 'Mediocre Apple Computer', 'A Computer made by Apple', 'Memory Address Corruption', 'Media Access Control', '4'),
(14, 'What does ICMP stand for?', 'Internet Control Message Protocol', 'Internal Conflict Management Program', 'Intranet Control Message Program', 'Internet Connection Modem Protocol', '1'),
(15, 'What is a URL?', 'A computer software program', 'A type of UFO', 'The address of a document or \"page\" on the World Wide Web', 'An acronym for Uniform Resources Learning', '3'),
(16, 'What is a NIC?', 'Netware Intranet Controller', 'No Internet Connection', 'Network Interface Card', 'Network Interference Control', '3'),
(17, 'Another word for the CPU is...', 'Execute', 'Microprocessor', 'Micro chip', '          \nDecode', '2'),
(18, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', '2'),
(19, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', '4'),
(20, 'Which of the following is the original purpose of SQL?', 'To specify the syntax and semantics of SQL data definition l', 'To specify the syntax and semantics of SQL manipulation lang', 'To define the data structures', 'All of the above', '4');

-- --------------------------------------------------------

--
-- Table structure for table `hr_table`
--

CREATE TABLE `hr_table` (
  `q_id` int(11) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `option_1` varchar(60) NOT NULL,
  `option_2` varchar(60) NOT NULL,
  `option_3` varchar(60) NOT NULL,
  `option_4` varchar(60) NOT NULL,
  `correct_ans` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr_table`
--

INSERT INTO `hr_table` (`q_id`, `q_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_ans`) VALUES
(1, 'Which keyword can be used for coming out of recursion?', 'break', 'return', 'exit', 'continue', '2'),
(2, 'What\'s a web browser?', 'A kind of spider', 'A computer that stores WWW files', 'A person who likes to look at websites', 'A software program that allows you to access sites on the Wo', '4'),
(3, 'How many bits is a byte?', '4', '8', '16', '32', '2'),
(4, 'The speed of your net access is defined in terms of...', 'RAM', 'MHz', 'Kbps', 'Megabytes', '3'),
(5, 'Which of these is a search engine?', 'FTP', 'Google', 'Archie', 'SMTP', '2'),
(6, '\"DOS\" stands for..', 'Data Out System', 'Disk Out System', 'Disk Operating System', 'Data Operating System', '3'),
(7, 'What does CPU stand for?', 'Computer Parts United', 'Common Process Unit', 'Computer Processing Unit', 'Central Processing Unit', '4'),
(8, 'ISP stands for…', 'Internet Survey Period', 'Integrated Service Provider', 'Internet Security Protocol', 'Internet Service Provider', '4'),
(9, 'Internet Explorer is a...', 'Any person browsing the net', 'Web Browser', 'Graphing Package', 'News Reader', '2'),
(10, 'The \"http\" you type at the beginning of any site\'s address stands for…', 'HTML Transfer Technology Process', 'Hyperspace Terms and Tech Protocol', 'Hyperspace Techniques & Tech Progress', 'Hyper Text Transfer Protocol', '4'),
(11, 'Which of the following is not a part of the Internet?', 'World Wide Web', 'Email', 'CD-ROM', 'HTTP', '3'),
(12, 'What is not always necessary for accessing the Web?', 'A modem', 'A connection to an Internet Access Provider', 'A computer', 'A Web browser', '1'),
(13, '\"MAC\" stands for..', 'Mediocre Apple Computer', 'A Computer made by Apple', 'Memory Address Corruption', 'Media Access Control', '4'),
(14, 'What does ICMP stand for?', 'Internet Control Message Protocol', 'Internal Conflict Management Program', 'Intranet Control Message Program', 'Internet Connection Modem Protocol', '1'),
(15, 'What is a URL?', 'A computer software program', 'A type of UFO', 'The address of a document or \"page\" on the World Wide Web', 'An acronym for Uniform Resources Learning', '3'),
(16, 'What is a NIC?', 'Netware Intranet Controller', 'No Internet Connection', 'Network Interface Card', 'Network Interference Control', '3'),
(17, 'Another word for the CPU is...', 'Execute', 'Microprocessor', 'Micro chip', '          \nDecode', '2'),
(18, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', '2'),
(19, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', '4'),
(20, 'Which of the following is the original purpose of SQL?', 'To specify the syntax and semantics of SQL data definition l', 'To specify the syntax and semantics of SQL manipulation lang', 'To define the data structures', 'All of the above', '4');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'HR'),
(2, 'Tester'),
(3, 'Developer'),
(4, 'App Developer'),
(5, 'System Desginer');

-- --------------------------------------------------------

--
-- Table structure for table `system_desginer_table`
--

CREATE TABLE `system_desginer_table` (
  `q_id` int(11) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `option_1` varchar(60) NOT NULL,
  `option_2` varchar(60) NOT NULL,
  `option_3` varchar(60) NOT NULL,
  `option_4` varchar(60) NOT NULL,
  `correct_ans` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_desginer_table`
--

INSERT INTO `system_desginer_table` (`q_id`, `q_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_ans`) VALUES
(1, 'Which keyword can be used for coming out of recursion?', 'break', 'return', 'exit', 'continue', '2'),
(2, 'What\'s a web browser?', 'A kind of spider', 'A computer that stores WWW files', 'A person who likes to look at websites', 'A software program that allows you to access sites on the Wo', '4'),
(3, 'How many bits is a byte?', '4', '8', '16', '32', '2'),
(4, 'The speed of your net access is defined in terms of...', 'RAM', 'MHz', 'Kbps', 'Megabytes', '3'),
(5, 'Which of these is a search engine?', 'FTP', 'Google', 'Archie', 'SMTP', '2'),
(6, '\"DOS\" stands for..', 'Data Out System', 'Disk Out System', 'Disk Operating System', 'Data Operating System', '3'),
(7, 'What does CPU stand for?', 'Computer Parts United', 'Common Process Unit', 'Computer Processing Unit', 'Central Processing Unit', '4'),
(8, 'ISP stands for…', 'Internet Survey Period', 'Integrated Service Provider', 'Internet Security Protocol', 'Internet Service Provider', '4'),
(9, 'Internet Explorer is a...', 'Any person browsing the net', 'Web Browser', 'Graphing Package', 'News Reader', '2'),
(10, 'The \"http\" you type at the beginning of any site\'s address stands for…', 'HTML Transfer Technology Process', 'Hyperspace Terms and Tech Protocol', 'Hyperspace Techniques & Tech Progress', 'Hyper Text Transfer Protocol', '4'),
(11, 'Which of the following is not a part of the Internet?', 'World Wide Web', 'Email', 'CD-ROM', 'HTTP', '3'),
(12, 'What is not always necessary for accessing the Web?', 'A modem', 'A connection to an Internet Access Provider', 'A computer', 'A Web browser', '1'),
(13, '\"MAC\" stands for..', 'Mediocre Apple Computer', 'A Computer made by Apple', 'Memory Address Corruption', 'Media Access Control', '4'),
(14, 'What does ICMP stand for?', 'Internet Control Message Protocol', 'Internal Conflict Management Program', 'Intranet Control Message Program', 'Internet Connection Modem Protocol', '1'),
(15, 'What is a URL?', 'A computer software program', 'A type of UFO', 'The address of a document or \"page\" on the World Wide Web', 'An acronym for Uniform Resources Learning', '3'),
(16, 'What is a NIC?', 'Netware Intranet Controller', 'No Internet Connection', 'Network Interface Card', 'Network Interference Control', '3'),
(17, 'Another word for the CPU is...', 'Execute', 'Microprocessor', 'Micro chip', '          \nDecode', '2'),
(18, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', '2'),
(19, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', '4'),
(20, 'Which of the following is the original purpose of SQL?', 'To specify the syntax and semantics of SQL data definition l', 'To specify the syntax and semantics of SQL manipulation lang', 'To define the data structures', 'All of the above', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tester_table`
--

CREATE TABLE `tester_table` (
  `q_id` int(11) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `option_1` varchar(60) NOT NULL,
  `option_2` varchar(60) NOT NULL,
  `option_3` varchar(60) NOT NULL,
  `option_4` varchar(60) NOT NULL,
  `correct_ans` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tester_table`
--

INSERT INTO `tester_table` (`q_id`, `q_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_ans`) VALUES
(1, 'Which keyword can be used for coming out of recursion?', 'break', 'return', 'exit', 'continue', '2'),
(2, 'What\'s a web browser?', 'A kind of spider', 'A computer that stores WWW files', 'A person who likes to look at websites', 'A software program that allows you to access sites on the Wo', '4'),
(3, 'How many bits is a byte?', '4', '8', '16', '32', '2'),
(4, 'The speed of your net access is defined in terms of...', 'RAM', 'MHz', 'Kbps', 'Megabytes', '3'),
(5, 'Which of these is a search engine?', 'FTP', 'Google', 'Archie', 'SMTP', '2'),
(6, '\"DOS\" stands for..', 'Data Out System', 'Disk Out System', 'Disk Operating System', 'Data Operating System', '3'),
(7, 'What does CPU stand for?', 'Computer Parts United', 'Common Process Unit', 'Computer Processing Unit', 'Central Processing Unit', '4'),
(8, 'ISP stands for…', 'Internet Survey Period', 'Integrated Service Provider', 'Internet Security Protocol', 'Internet Service Provider', '4'),
(9, 'Internet Explorer is a...', 'Any person browsing the net', 'Web Browser', 'Graphing Package', 'News Reader', '2'),
(10, 'The \"http\" you type at the beginning of any site\'s address stands for…', 'HTML Transfer Technology Process', 'Hyperspace Terms and Tech Protocol', 'Hyperspace Techniques & Tech Progress', 'Hyper Text Transfer Protocol', '4'),
(11, 'Which of the following is not a part of the Internet?', 'World Wide Web', 'Email', 'CD-ROM', 'HTTP', '3'),
(12, 'What is not always necessary for accessing the Web?', 'A modem', 'A connection to an Internet Access Provider', 'A computer', 'A Web browser', '1'),
(13, '\"MAC\" stands for..', 'Mediocre Apple Computer', 'A Computer made by Apple', 'Memory Address Corruption', 'Media Access Control', '4'),
(14, 'What does ICMP stand for?', 'Internet Control Message Protocol', 'Internal Conflict Management Program', 'Intranet Control Message Program', 'Internet Connection Modem Protocol', '1'),
(15, 'What is a URL?', 'A computer software program', 'A type of UFO', 'The address of a document or \"page\" on the World Wide Web', 'An acronym for Uniform Resources Learning', '3'),
(16, 'What is a NIC?', 'Netware Intranet Controller', 'No Internet Connection', 'Network Interface Card', 'Network Interference Control', '3'),
(17, 'Another word for the CPU is...', 'Execute', 'Microprocessor', 'Micro chip', '          \nDecode', '2'),
(18, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', '2'),
(19, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', '4'),
(20, 'Which of the following is the original purpose of SQL?', 'To specify the syntax and semantics of SQL data definition l', 'To specify the syntax and semantics of SQL manipulation lang', 'To define the data structures', 'All of the above', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `role` varchar(50) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `followup_1` varchar(60) NOT NULL,
  `followup_2` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `role`, `qualification`, `date`, `score`, `grade`, `followup_1`, `followup_2`, `status`) VALUES
(1, 'John Doe', '9123456678', 'johndoe@gmail.com', 'HR', 'B/tech', '2023-10-10', 0, 'Fail', '', '', ''),
(4, 'John Doe', '9172566735', 'Johndoe@gmail.com', 'Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(5, 'John Doe', '9172566735', 'Johndoe1@gmail.com', 'App Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(6, 'John Doe', '9172566735', 'Johndoe2@gmail.com', 'HR', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(7, 'John Doe', '9172566735', 'Johndoe2@gmail.com', 'Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(8, 'John Doe', '9172566735', 'Johndoe3@gmail.com', 'HR', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(9, 'John Doe', '9172566735', 'Johndoe3@gmail.com', 'App Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(10, 'John Doe', '9172566735', 'Johndoe4@gmail.com', 'HR', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(11, 'John Doe', '9172566735', 'Johndoe4@gmail.com', 'App Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(12, 'John Doe', '9172566735', 'Johndoe5@gmail.com', 'HR', 'B.Tech ', '2023-10-10', 0, 'Fail', '', '', ''),
(13, 'John Doe', '9172566735', 'Johndoe5@gmail.com', 'App Developer', 'B.Tech ', '2023-10-10', 0, 'Fail', '', '', ''),
(14, 'John Doe', '9172566735', 'Johndoe6@gmail.com', 'HR', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(15, 'John Doe', '9172566735', 'Johndoe6@gmail.com', 'Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(16, 'Masroor', '8657675555', 'Johndoe111@gmail.com', 'Developer', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', ''),
(17, 'John Doe', '9172566735', 'Johndoe111@gmail.com', 'HR', 'B.Tech ', '2024-02-02', 0, 'Fail', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_developer_table`
--
ALTER TABLE `app_developer_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `developer_table`
--
ALTER TABLE `developer_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `hr_table`
--
ALTER TABLE `hr_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `system_desginer_table`
--
ALTER TABLE `system_desginer_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `tester_table`
--
ALTER TABLE `tester_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_developer_table`
--
ALTER TABLE `app_developer_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `developer_table`
--
ALTER TABLE `developer_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hr_table`
--
ALTER TABLE `hr_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_desginer_table`
--
ALTER TABLE `system_desginer_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tester_table`
--
ALTER TABLE `tester_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

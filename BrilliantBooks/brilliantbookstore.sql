-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 07:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brilliantbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `method` varchar(128) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(65) NOT NULL,
  `province` varchar(65) NOT NULL,
  `country` varchar(65) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `total_products` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `province`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Katlego Kgotse', '0662362301', 'katlegokgotse88@gmail.com', 'credit cart', '1 Augrabies Rd', '68 Valley Farm', 'Pretoria', 'Gauteng', 'South Africa', 81, 0, 2083);

-- --------------------------------------------------------

--
-- Table structure for table `tbladministrator`
--

CREATE TABLE `tbladministrator` (
  `id` int(11) NOT NULL,
  `administrator_username` varchar(30) NOT NULL,
  `administrator_password` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `type` varchar(45) NOT NULL,
  `book_author` varchar(40) NOT NULL,
  `book_description` text NOT NULL,
  `book_year_of_release` varchar(4) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `book_price` decimal(25,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`book_id`, `book_name`, `type`, `book_author`, `book_description`, `book_year_of_release`, `publisher_name`, `book_price`, `image`, `featured`) VALUES
(4, 'IOT and building smart cities', 'Technology', 'Rashmi Nanda', 'Know how Smart TVs, Smart Cars, Smart Homes, and Smart Cities are changing the World!\r\n\r\nKey Features Learn to successfully create, launch and manage the Internet of Things services Know the process of specifying, implementing, and deploying IoT services Learn the fundamentals of IoT services, building blocks and the key factors Learn the fast track approach to IoT Learn a dual perspective on the Internet of Things and ubiquitous computing Know detailed coverage of the underlying architecture, framework and state of the art methodologies\r\n\r\nDescription The Internet of Things (IoT) not only connect people but will connect ‘smart’ homes, appliances, cars, offices, factories, cities, basically the world. This book discusses how smart cities strive to deploy and interconnect infrastructures and services to guarantee that the authorities and citizens have access to reliable and global customized services. The book describes a wide range of topics present in the design, development, and running of smart cities, ranging from big data management, Internet of Things, and sustainable urban planning. The technical aspects of smart cities enabled primarily by the Internet of Things, the socio-economic motivations and impact of smart city development are covered in this book.\r\n\r\nWhat You Will Learn The purpose of this book is to help you to work with cities and learn to develop them into smart cities. You will learn to develop a plan and learn what an smart city is, how to plan the smart city infrastructure and from where do you start while developing the smart city. You will learn what kind of planning is involved and about permitting, rent, acquisition, construction planning, with whom should you work? You can learn all this and more from case studies and deployment planning described in the book.\r\n\r\nWho this book is for Students studying IoT in universities and who want to know the fundamentals of the IoT business. For business executives and IoT startups.', '2021', 'BDP Publications', 650, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\iot.png', 1),
(5, 'Be Light', 'Religion', 'Gladys Lorezana Rivera', '', '2023', 'Celier', 195, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\be_light.png', 1),
(6, 'MANAGING THE MICROTEACHING PROCESS', 'Education', 'Van Schulk', 'In South Africa and elsewhere in the world, those in the teaching profession require specialised knowledge and skills if they are to prepare learners to develop to their fullest potential and grow up to be the best that they can be.. However, many of these competencies can only be imparted through the actual practice of teaching. Managing the microteaching process: a practical guide to teaching practice preparation is a resource developed to support the teaching practice module of pre-service teaching programmes offered at tertiary institutions in South Africa and other African countries.,,Managing the microteaching process: a practical guide to teaching practice preparation provides lecturers and students in both face-to-face and open distance learning environments with the opportunity to participate in simple, carefully planned teacher training tasks. In addition to covering the theoretical foundation, it develops teaching knowledge and skills through practising in a controlled environment', '', 'Van Schaik Publishers a division of Media24 Boeke', 414, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\micro_teaching.png', 1),
(7, 'Introduction to Legal Pluralism in Sa', 'Law', 'Jan Christoffel Bekker', 'The fourth edition was necessary because the law has developed considerably in several areas since the publication of the third edition in 2010. Barring a few exceptions, the research that preceded this book was concluded at the end of March 2014.', '2015', 'LexisNexis South Africa', 821, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\introduction_to_pluralism.jpg', 1),
(8, 'Administrative Law', 'Law', 'W. Wade, C. Forsyth', 'Wade and Forsyth\'s Administrative Law has been a cornerstone text since its first edition in 1961. It provides a comprehensive and perceptive account of the principles of judicial review and the administrative arrangements of the United Kingdom. For over fifty years, Administrative Law has been trusted by students in the UK and internationally and is extensively cited by Courts in England and Wales. The book\'s clarity of exposition makes it accessible to the student approaching the subject for the first time, whilst its breadth of coverage and perceptive insight ensure its value to all interested in this field, academics and practitioners alike.', '2021', 'Oxford University Press', 1320, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\Administrative_law.jpg', 1),
(9, 'Workplace Law', 'Law', 'J. Grogan', 'First published in 1996, Workplace Law has become one of the most widely used and frequently quoted text books on South African labour law. This 13th edition has been revised and supplemented to incorporate the latest case law, as well as the latest amendments to labour legislation. Workplace Law provides a complete overview of issues that have arisen and are likely to arise on the shop floor, in court and in arbitration proceedings – from unfair labour practices, through employment equity, dismissal and collective bargaining, to strikes. Students, HR and IR practitioners, lawyers, employers, employees and trade union officials will find this updated, comprehensive and reliable work a convenient and indispensable guide to a complex and fascinating area of law. Workplace Law is also available in electronic form in Juta’s Labour Law Library, where it is updated quarterly.', '2009', 'Juta', 1020, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\Workplace_law.jpg', 1),
(10, 'Business Law', 'Law', 'C. Nagel', 'This title is aimed at non-law students and owes its existence to the need for a less comprehensive and affordable student handbook dealing with all the legal issues normally relevant for such students', '2020', 'Lexis Nexis', 1480, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\Business_law.jpg', 1),
(11, 'The African Philosophy Reader', 'Philosophy', 'P. H Coetzee', 'Divided into eight sections, each with introductory essays, the selections offer rich and detailed insights into a diverse multinational philosophical landscape. Revealed in this pathbreaking work is the way in which traditional philosophical issues related to ethics, metaphysics, and epistemology, for instance, take on specific forms in Africa\'s postcolonial struggles. Much of its moral, political, and social philosophy is concerned with the turbulent processes of embracing modern identities while protecting ancient cultures.', '2003', 'Jonathan Ball', 1710, '\\BrilliantBooks\\BrilliantBooks\\images\\images\\books\\African_philosophy.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblseller`
--

CREATE TABLE `tblseller` (
  `id` int(11) NOT NULL,
  `sellerTitle` varchar(45) NOT NULL,
  `sellerEmail` varchar(50) NOT NULL,
  `seller_password` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblslideshows`
--

CREATE TABLE `tblslideshows` (
  `slide_id` int(11) NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(45) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblslideshows`
--

INSERT INTO `tblslideshows` (`slide_id`, `image_name`, `title`, `created`, `modified`, `status`) VALUES
(1, 'dreams.png', 'Dreams', '2023-05-17 10:58:26', '2023-05-17 10:58:26', 0),
(2, 'design_fund.png', 'Design', '2023-05-17 10:59:15', '2023-05-17 10:59:15', 0),
(3, 'human_anatomy.png', 'Human Anatomy', '2023-05-17 10:59:57', '2023-05-17 10:59:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_number` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `student_number` varchar(10) NOT NULL,
  `university` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladministrator`
--
ALTER TABLE `tbladministrator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tblseller`
--
ALTER TABLE `tblseller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `tblslideshows`
--
ALTER TABLE `tblslideshows`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladministrator`
--
ALTER TABLE `tbladministrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblslideshows`
--
ALTER TABLE `tblslideshows`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbladministrator`
--
ALTER TABLE `tbladministrator`
  ADD CONSTRAINT `tbladministrator_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblseller`
--
ALTER TABLE `tblseller`
  ADD CONSTRAINT `tblseller_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD CONSTRAINT `tblstudent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 04:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `checkid` (`id` INT)  BEGIN 

IF id < 0
THEN
UPDATE courses
SET courses.Course_Number =-id
WHERE courses.Course_Number = id;
END IF;END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `checkid` (`id` INT) RETURNS INT(11) BEGIN 

IF id < 0
THEN
UPDATE teacher
SET teacher.TeacherId =-id
WHERE teacher.TeacherId = id;
END IF; RETURN (id) ; END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Samirs co Company', '01521424154', '2019-05-10 04:39:40', '2019-05-10 04:39:40'),
(2, 'Samirs Company', '01521424154', '2019-05-10 04:39:46', '2019-05-10 04:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `company_models`
--

CREATE TABLE `company_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Number` int(11) NOT NULL,
  `Course_Title` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Obtained_Point` float NOT NULL,
  `Credit` float NOT NULL,
  `StudentId` int(11) NOT NULL,
  `TeacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_Number`, `Course_Title`, `Status`, `Obtained_Point`, `Credit`, `StudentId`, `TeacherId`) VALUES
(-98, 'unknown', 'taken', 30, 1.5, 1607073, 125),
(-78, 'unik', 'taken', 4, 3, 1607073, 125),
(965, '74yv', 'taken', 4, 3, 1607073, 125),
(2202, 'unknown', 'taken', 30, 3, 1607073, 13355),
(2202, 'unknown 1', 'taken', 3.5, 3, 1607077, 13355),
(2203, 'unknown', 'taken', 30, 1.5, 1607073, 13355),
(2203, 'unknown 2', 'taken', 3.5, 1.5, 1607077, 13355),
(2204, 'unknown 2', 'taken', 3, 1.5, 1607073, 13355),
(78745, 'unikh', 'taken', 4, 3, 1607073, 125);

-- --------------------------------------------------------

--
-- Table structure for table `currentuser`
--

CREATE TABLE `currentuser` (
  `useremail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentuser`
--

INSERT INTO `currentuser` (`useremail`) VALUES
('samirimtiaz1234@gmail.com'),
('samirimtiaz1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_id`, `name`, `email`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rotary weeder', 'samirimtiaz1234@gmail.com', 1, '2019-05-10 04:39:58', '2019-05-10 04:39:58'),
(2, 2, 'Rotary weeder', 'samirimtiaz1234567@gmail.com', 1, '2019-05-10 04:40:03', '2019-05-10 04:40:03'),
(3, 1, 'labDatabase', 'samirimtiazhh1234567@gmail.com', 1, '2019-05-10 04:40:44', '2019-05-10 04:40:44'),
(4, 1, 'samir1996', 'samirimtiaz1234@gmail.com', 0, '2019-05-10 05:02:01', '2019-05-10 05:02:01'),
(5, 1, 'Rotary weeder', 'samirimtiaz1234@gmail.com', 1, '2019-05-12 07:15:13', '2019-05-12 07:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_models`
--

CREATE TABLE `customer_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_07_051302_create_customer_models_table', 1),
(4, '2019_05_10_031305_create_company_models_table', 1),
(5, '2019_05_10_102422_create_customers_table', 1),
(6, '2019_05_10_102436_create_companies_table', 1),
(7, '2019_05_11_171337_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_No` int(11) NOT NULL,
  `Room_Block` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_No`, `Room_Block`) VALUES
(101, 'g'),
(103, 'c'),
(103, 'o'),
(103, 'y');

--
-- Triggers `room`
--
DELIMITER $$
CREATE TRIGGER `before_inser_roomno` BEFORE INSERT ON `room` FOR EACH ROW BEGIN
        IF NEW.Room_No < 0 THEN
    SET NEW
        .Room_No=
        -NEW.Room_No;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Batch` int(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Status` varchar(10) NOT NULL,
  `StudentName` varchar(20) NOT NULL,
  `Room_No` int(11) NOT NULL,
  `Room_Block` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `Password`, `Date_of_birth`, `Batch`, `Email`, `Status`, `StudentName`, `Room_No`, `Room_Block`) VALUES
(1607073, '1965', '1996-02-27', 2016, 'samirimtiaz1234@gmail.com', 'active', 'samir imtiaz', 103, 'c'),
(1607077, '1965', '1998-02-07', 2016, 'neom1234@gmail.com', 'active', 'neom', 103, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherId` int(11) NOT NULL,
  `TeacherName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` char(15) NOT NULL,
  `Room_No` int(11) NOT NULL,
  `Room_Block` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherId`, `TeacherName`, `Password`, `Email`, `PhoneNumber`, `Room_No`, `Room_Block`) VALUES
(125, 'sirq', '1965', 'samirimtiaz123451234ww5@gmail.', '+8515233', 101, 'g'),
(965, 'sirq', '1965', 'samirimtiaz12345ii12345@gmail.', '+8515233', 101, 'g'),
(13355, 'auvi sir', '1965', 'samirimtiaz1234@gmail.com', '+8515233', 103, 'c'),
(1335512, 'auvi sir', 'S@mir1965618', 'samirimtiaz122234567@gmail.com', '+8515233', 101, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samir Imtiaz', 'samirimtiaz1234@gmail.com', NULL, '$2y$10$NRcyMdqoQW1HORBFxStBaOxAWrGyrPbrUD2ccjSUoFR6I22SifFr6', NULL, '2019-05-10 08:38:17', '2019-05-10 08:38:17'),
(2, 'Rotary weeder', 'samirimtiaz12345@gmail.com', NULL, '$2y$10$lljwGr0Grc4bhZ.r3WDAz.HcqPWpH3gddQo9y4dIU45D.2Wo0iOp.', NULL, '2019-06-12 11:16:15', '2019-06-12 11:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_models`
--
ALTER TABLE `company_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Number`,`StudentId`),
  ADD KEY `StudentId` (`StudentId`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_models`
--
ALTER TABLE `customer_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_No`,`Room_Block`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`),
  ADD KEY `Room_No` (`Room_No`,`Room_Block`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherId`),
  ADD KEY `Room_No` (`Room_No`,`Room_Block`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_models`
--
ALTER TABLE `company_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_models`
--
ALTER TABLE `customer_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`StudentId`) REFERENCES `student` (`StudentId`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`TeacherId`) REFERENCES `teacher` (`TeacherId`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Room_No`,`Room_Block`) REFERENCES `room` (`Room_No`, `Room_Block`) ON DELETE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`Room_No`,`Room_Block`) REFERENCES `room` (`Room_No`, `Room_Block`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

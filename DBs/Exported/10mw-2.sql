-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 12:10 AM
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
-- Database: `10mw`
--
CREATE DATABASE IF NOT EXISTS `10mw` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `10mw`;

-- --------------------------------------------------------

--
-- Table structure for table `academicyears`
--

CREATE TABLE `academicyears` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academicyears`
--

INSERT INTO `academicyears` (`id`, `start_date`, `end_date`) VALUES
(1, '2021-09-01', '2022-08-31'),
(2, '2022-09-01', '2023-08-31'),
(3, '2023-09-01', '2024-08-31'),
(4, '2024-09-01', '2025-08-31'),
(5, '2025-09-01', '2026-08-31'),
(6, '2026-09-01', '2027-08-31'),
(7, '2027-09-01', '2028-08-31'),
(8, '2028-09-01', '2029-08-31'),
(9, '2029-09-01', '2030-08-31'),
(10, '2030-09-01', '2031-08-31'),
(11, '2021-09-01', '2022-06-30'),
(12, '2022-09-01', '2023-06-30'),
(13, '2023-09-01', '2024-06-30'),
(14, '2021-09-01', '2022-06-30'),
(15, '2022-09-01', '2023-06-30'),
(16, '2023-09-01', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `study_field_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location_id` int(11) NOT NULL,
  `image_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `study_field_id`, `start_date`, `end_date`, `location_id`, `image_banner`) VALUES
(1, 'Introduction to Computer Science', 1, '2021-09-01', '2022-12-15', 1, NULL),
(2, 'Data Structures and Algorithms', 1, '2022-01-03', '2022-05-13', 1, NULL),
(3, 'Introduction to Electrical Engineering', 2, '2021-09-01', '2022-12-15', 2, NULL),
(4, 'Circuits and Systems', 2, '2022-01-03', '2022-05-13', 2, NULL),
(5, 'Introduction to Mechanical Engineering', 3, '2021-09-01', '2022-12-15', 3, NULL),
(6, 'Dynamics and Controls', 3, '2022-01-03', '2022-05-13', 3, NULL),
(7, 'Introduction to Mathematics', 4, '2021-09-01', '2022-12-15', 4, NULL),
(8, 'Calculus I', 4, '2022-01-03', '2022-05-13', 4, NULL),
(9, 'Introduction to Physics', 5, '2021-09-01', '2022-12-15', 5, NULL),
(10, 'Classical Mechanics', 5, '2022-01-03', '2022-05-13', 5, NULL),
(11, 'Introduction to Programming', 1, '2021-09-01', '2021-12-15', 1, NULL),
(12, 'Data Structures and Algorithms', 2, '2021-09-01', '2021-12-15', 2, NULL),
(13, 'Software Design Patterns', 3, '2021-09-01', '2021-12-15', 3, NULL),
(47, 'HTML5', 17, '2021-10-01', '2022-07-15', 13, 'html.jpg'),
(48, 'CSS3', 17, '2020-10-01', '2024-07-15', 13, 'css.png'),
(49, 'JavaScripts', 17, '2020-10-01', '2021-07-15', 13, 'js.jpg'),
(50, 'PHP', 17, '2020-10-01', '2024-07-15', 13, 'php.jpeg'),
(51, 'Node.js', 17, '2020-10-01', '2022-07-15', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classgroup`
--

CREATE TABLE `classgroup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `study_field_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classgroup`
--

INSERT INTO `classgroup` (`id`, `name`, `class_id`, `study_field_id`, `start_date`, `end_date`, `location_id`) VALUES
(1, 'Group A', 1, 1, '2021-09-01', '2021-12-15', 1),
(2, 'Group B', 2, 2, '2021-09-01', '2021-12-15', 2),
(3, 'Group C', 3, 3, '2021-09-01', '2021-12-15', 3),
(4, 'Group A', 1, 1, '2021-09-01', '2021-12-15', 1),
(5, 'Group B', 2, 2, '2021-09-01', '2021-12-15', 2),
(6, 'Group C', 3, 3, '2021-09-01', '2021-12-15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `country`, `city`, `address`) VALUES
(1, 'University of California, Berkeley', 'USA', 'Berkeley', '200 California Hall #1500, Berkeley, CA 94720-1500'),
(2, 'Massachusetts Institute of Technology', 'USA', 'Cambridge', '77 Massachusetts Ave, Cambridge, MA 02139'),
(3, 'Stanford University', 'USA', 'Stanford', '450 Serra Mall, Stanford, CA 94305'),
(4, 'University of Oxford', 'UK', 'Oxford', 'University of Oxford, Oxford OX1 2JD'),
(5, 'University of Cambridge', 'UK', 'Cambridge', 'The Old Schools, Trinity Lane, Cambridge CB2 1TN'),
(6, 'Harvard University', 'USA', 'Cambridge', 'Massachusetts Hall, 1 Harvard Yard, Cambridge, MA 02138'),
(7, 'California Institute of Technology', 'USA', 'Pasadena', '1200 E California Blvd, Pasadena, CA 91125'),
(8, 'University of Chicago', 'USA', 'Chicago', '5801 S Ellis Ave, Chicago, IL 60637'),
(9, 'Princeton University', 'USA', 'Princeton', 'Princeton, NJ 08544'),
(10, 'Yale University', 'USA', 'New Haven', 'New Haven, CT 06520'),
(11, 'Ecole Polytechnique Fédérale de Lausanne', 'France', 'Lausanne', 'Station 14'),
(12, 'Université de Technologie de Troyes', 'France', 'Troyes', '12 Rue Marie Curie'),
(13, 'Telecom SudParis', 'France', 'Évry-Courcouronnes', '9 Rue Charles Fourier'),
(14, 'Ecole Polytechnique Fédérale de Lausanne', 'France', 'Lausanne', 'Station 14'),
(15, 'Université de Technologie de Troyes', 'France', 'Troyes', '12 Rue Marie Curie');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `image_profile` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `role` enum('student','teacher','admin') NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `gender`, `birth_date`, `created_at`, `image_profile`, `country`, `city`, `location_id`, `role`) VALUES
(1, 'John', 'Doe', 'johndoe', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'john.doe@example.com', 'male', '1990-01-01', '2021-01-01 00:00:00', '', 'USA', 'Berkeley', 1, 'student'),
(2, 'Jane', 'Doe', 'janedoe', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'jane.doe@example.com', 'female', '1995-05-10', '2021-01-02 10:00:00', '', 'USA', 'Berkeley', 1, 'student'),
(3, 'Alice', 'Smith', 'alicesmith', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'alice.smith@example.com', 'female', '1992-12-15', '2021-01-03 20:20:20', 'student-1.jpg', 'USA', 'Stanford', 3, 'student'),
(4, 'Bob', 'Johnson', 'bobjohnson', '$2y$12$aGgwYrIGvPa0LqG68MDvJeP3NH5i/LRB2uB/iQ1h1G0QsW1QfM9m.', 'bob.johnson@example.com', 'male', '1985-07-22', '2021-01-04 05:05:05', '', 'UK', 'Oxford', 4, 'admin'),
(5, 'Charlie', 'Brown', 'charliebrown', '$2y$12$PzyF2DU8K5hb12TEilw1Jud6AfBiE385vJLwZlO4Fmj0FL8GHjRym', 'charlie.brown@example.com', 'male', '1998-09-09', '2021-01-05 13:37:00', '', 'USA', 'Cambridge', 2, 'teacher'),
(6, 'Emma', 'Watson', 'emmawatson', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'emma.watson@example.com', 'female', '1990-04-15', '2021-01-06 23:45:20', '', 'UK', 'Cambridge', 5, 'student'),
(7, 'Ella', 'Johnson', 'ellajohnson', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'ella.johnson@example.com', 'female', '2000-11-11', '2021-01-07 15:15:15', '', 'USA', 'Princeton', 9, 'student'),
(8, 'Fred', 'Smith', 'fredsmith', '$2y$12$PzyF2DU8K5hb12TEilw1Jud6AfBiE385vJLwZlO4Fmj0FL8GHjRym', 'fred.smith@example.com', 'male', '1988-05-27', '2021-01-08 08:08:08', '', 'USA', 'Chicago', 8, 'teacher'),
(9, 'Grace', 'Davis', 'gracedavis', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'grace.davis@example.com', 'female', '1997-02-18', '2021-01-09 10:10:10', '', 'USA', 'New Haven', 10, 'student'),
(10, 'Henry', 'Miller', 'henrymiller', '$2y$12$PzyF2DU8K5hb12TEilw1Jud6AfBiE385vJLwZlO4Fmj0FL8GHjRym', 'henry.miller@example.com', 'male', '1993-08-04', '2021-01-10 12:12:12', '', 'USA', 'Pasadena', 7, 'teacher'),
(11, 'Jean', 'Dupont', 'jeandupont', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'jeandupont@example.com', 'male', '1998-01-01', '2021-09-01 10:00:00', '', 'France', 'Lausanne', 1, 'student'),
(13, 'Pierre', 'Hermite', 'pierrehermite', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'pierrehermite@example.com', 'male', '2000-01-01', '2021-09-01 10:00:00', '', 'France', 'Évry-Courcouronnes', 3, 'student'),
(14, 'Jean', 'Dupont', 'jeandupont', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'jeandupont@example.com', 'male', '1998-01-01', '2021-09-01 10:00:00', '', 'France', 'Lausanne', 1, 'student'),
(15, 'Marie', 'Curie', 'mariecurie', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'mariecurie@example.com', 'female', '1999-01-01', '2021-09-01 10:00:00', '', 'France', 'Troyes', 2, 'student'),
(16, 'Pierre', 'Hermit', 'pierrehermite', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'pierre@gmail.com', 'male', '2000-01-01', '2021-09-01 10:00:00', '', 'France', 'Évry-Courcouronnes', 3, 'student'),
(17, 'Maxime', 'Dupont', 'mdupont', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'mdupont@email.com', 'male', '1990-05-12', '2024-04-20 00:14:11', '', 'France', 'Paris', 11, 'student'),
(18, 'Amélie', 'Durand', 'adurand', '$2y$12$PzyF2DU8K5hb12TEilw1Jud6AfBiE385vJLwZlO4Fmj0FL8GHjRym', 'adurand@email.com', 'female', '1985-08-03', '2024-04-20 00:14:11', '', 'France', 'Lyon', 12, 'teacher'),
(19, 'Lucas', 'Martin', 'lmartin', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'lmartin@email.com', 'male', '1995-11-25', '2024-04-20 00:14:11', '', 'France', 'Marseille', 13, 'student'),
(20, 'Juliette', 'Leroy', 'jleroy', '$2y$12$PzyF2DU8K5hb12TEilw1Jud6AfBiE385vJLwZlO4Fmj0FL8GHjRym', 'jleroy@email.com', 'female', '1988-02-07', '2024-04-20 00:14:11', '', 'France', 'Toulouse', 14, 'teacher'),
(21, 'Nathan', 'Fournier', 'nfournier', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'nfournier@email.com', 'male', '1992-09-18', '2024-04-20 00:14:11', '', 'France', 'Nice', 15, 'student'),
(22, 'Camille', 'Thompson', 'cthompson', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'cthompson@email.com', 'female', '1989-12-30', '2024-04-20 00:14:11', '', 'France', 'Bordeaux', 15, 'student'),
(23, 'Théo', 'Robert', 'trobert', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'trobert@email.com', 'male', '1998-04-22', '2024-04-20 00:14:11', '', 'France', 'Strasbourg', 14, 'student'),
(24, 'Léa', 'Henry', 'lhenry', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'lhenry@email.com', 'female', '1991-07-09', '2024-04-20 00:14:11', '', 'France', 'Lille', 13, 'student'),
(25, 'Arthur', 'Petit', 'apetit', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'apetit@email.com', 'male', '1993-10-15', '2024-04-20 00:14:11', '', 'France', 'Rennes', 12, 'student'),
(26, 'Louise', 'Michell', 'lmichell', '$2y$12$uH/riSDkD4W//mfMP7QF4OoG1BQYZF/.tr20TUN.ECplkJYoil1/O', 'lmichell@email.com', 'female', '1994-06-28', '2024-04-20 00:14:11', '', 'France', 'Grenoble', 11, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `grade` enum('partial','semi-final','final') NOT NULL,
  `passed` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `class_id`, `semester`, `academic_year_id`, `note`, `grade`, `passed`) VALUES
(1, 1, '1', 1, 'Great job on understanding the basics of programing! Keep up the good work!', 'partial', 'yes'),
(2, 1, '2', 1, 'Your code is well-organized and easy to understand. Keep practicing and improving your skills!', 'semi-final', 'yes'),
(3, 2, '1', 1, 'You did well on the midterm exam. Keep reading and practicing the algorithms, and also improve your understanding of the time complexity.', 'partial', 'yes'),
(4, 2, '2', 1, 'Excellent job on solving the algorithmic problems! You have a solid understanding of the concepts. Keep working hard!', 'final', 'yes'),
(5, 3, '1', 1, 'Your understanding of electrical circuits is improving. Keep up the good work!', 'partial', 'yes'),
(6, 3, '2', 1, 'Great job on understanding the concepts of electrical circuits. Keep practicing and improving your skills!', 'semi-final', 'yes'),
(7, 4, '1', 1, 'You did well on the midterm exam. Keep reading and practicing the concepts, and also improve your understanding of the applications.', 'partial', 'yes'),
(8, 4, '2', 1, 'Excellent job on understanding the concepts of electrical circuits. Keep working hard!', 'final', 'yes'),
(9, 5, '1', 1, 'Your understanding of mechanical systems is improving. Keep up the good work!', 'partial', 'yes'),
(10, 5, '2', 1, 'Great job on understanding the concepts of mechanical systems. Keep practicing and improving your skills!', 'semi-final', 'yes'),
(11, 1, '1', 1, 'Lecture 1: Introduction to Programming - 10/20', 'partial', 'no'),
(12, 2, '1', 1, 'Lecture 1: Data Structures and Algorithms - 15/20', 'partial', 'yes'),
(13, 3, '1', 1, 'Lecture 1: Software Design Patterns - 17/20', 'partial', 'yes'),
(14, 1, '1', 1, 'Lecture 1: Introduction to Programming - 10/20', 'partial', 'no'),
(15, 2, '1', 1, 'Lecture 1: Data Structures and Algorithms - 15/20', 'partial', 'yes'),
(16, 3, '1', 1, 'Lecture 1: Software Design Patterns - 17/20', 'partial', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `rolechanges`
--

CREATE TABLE `rolechanges` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `old_role` enum('student','teacher','admin') NOT NULL,
  `new_role` enum('student','teacher','admin') NOT NULL,
  `changed_by` int(11) NOT NULL,
  `changed_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rolechanges`
--

INSERT INTO `rolechanges` (`id`, `member_id`, `old_role`, `new_role`, `changed_by`, `changed_at`) VALUES
(1, 1, 'student', 'teacher', 4, '2021-09-01 14:00:00'),
(2, 2, 'student', 'teacher', 5, '2021-09-01 15:00:00'),
(3, 3, 'student', 'teacher', 6, '2021-09-01 16:00:00'),
(4, 1, 'student', 'teacher', 4, '2021-09-01 14:00:00'),
(5, 2, 'student', 'teacher', 5, '2021-09-01 15:00:00'),
(6, 3, 'student', 'teacher', 6, '2021-09-01 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `study_field_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `semester` enum('1','2') NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `notes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `member_id`, `study_field_id`, `class_id`, `group_id`, `semester`, `academic_year_id`, `notes_id`) VALUES
(1, 1, 1, 1, 1, '1', 1, 1),
(2, 2, 2, 2, 2, '1', 1, 2),
(3, 3, 3, 3, 3, '1', 1, 3),
(4, 11, 3, 1, 1, '1', 1, 1),
(5, 13, 3, 2, 2, '1', 1, 2),
(6, 15, 3, 3, 3, '1', 1, 3),
(7, 6, 1, 12, 1, '1', 1, 1),
(14, 17, 17, 47, NULL, '1', 16, NULL),
(15, 18, 17, 47, NULL, '1', 16, NULL),
(16, 19, 17, 47, NULL, '1', 16, NULL),
(17, 20, 17, 47, NULL, '1', 16, NULL),
(18, 21, 17, 47, NULL, '1', 16, NULL),
(19, 22, 17, 47, NULL, '1', 16, NULL),
(20, 23, 17, 47, NULL, '1', 16, NULL),
(21, 24, 17, 47, NULL, '1', 16, NULL),
(22, 25, 17, 47, NULL, '1', 16, NULL),
(23, 26, 17, 47, NULL, '1', 16, NULL),
(24, 19, 17, 48, NULL, '1', 16, NULL),
(32, 17, 17, 48, NULL, '1', 16, NULL),
(33, 17, 17, 51, NULL, '1', 16, NULL),
(34, 17, 17, 49, NULL, '1', 16, NULL),
(35, 17, 17, 50, NULL, '1', 16, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studyfields`
--

CREATE TABLE `studyfields` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `image_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studyfields`
--

INSERT INTO `studyfields` (`id`, `name`, `location_id`, `image_banner`) VALUES
(1, 'Computer Science', 1, NULL),
(2, 'Electrical Engineering', 2, NULL),
(3, 'Mechanical Engineering', 3, NULL),
(4, 'Mathematics', 4, NULL),
(5, 'Physics', 5, NULL),
(6, 'Economics', 6, NULL),
(7, 'Chemistry', 7, NULL),
(8, 'Biology', 8, NULL),
(9, 'Political Science', 9, NULL),
(10, 'Psychology', 10, NULL),
(11, 'Computer Science', 1, NULL),
(12, 'Data Science', 2, NULL),
(13, 'Software Engineering', 3, NULL),
(14, 'Computer Science', 1, NULL),
(15, 'Data Science', 2, NULL),
(16, 'Data analyste', 3, NULL),
(17, 'Développeur web & web mobile', 13, 'web-tech.jpg'),
(18, 'concepteur développeur web', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacherclasses`
--

CREATE TABLE `teacherclasses` (
  `member_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherclasses`
--

INSERT INTO `teacherclasses` (`member_id`, `class_id`, `semester`) VALUES
(4, 1, '1'),
(5, 1, '1'),
(5, 1, '2'),
(5, 2, ''),
(5, 2, '1'),
(5, 2, '2'),
(6, 3, '1'),
(8, 3, '1'),
(8, 3, '2'),
(8, 4, '1'),
(8, 4, '2'),
(10, 5, '1'),
(10, 5, '2'),
(10, 6, '1'),
(10, 6, '2');

-- --------------------------------------------------------

--
-- Table structure for table `teacherfiles`
--

CREATE TABLE `teacherfiles` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherfiles`
--

INSERT INTO `teacherfiles` (`id`, `member_id`, `class_id`, `semester`, `file_name`, `file_path`, `uploaded_at`) VALUES
(1, 5, 1, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(2, 5, 1, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(3, 5, 1, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(4, 5, 1, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00'),
(5, 8, 3, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(6, 8, 3, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(7, 8, 3, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(8, 8, 3, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00'),
(9, 10, 5, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(10, 10, 5, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(11, 10, 5, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(12, 10, 5, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00'),
(13, 4, 1, '1', 'Introduction to Programming - Slides.pdf', '/files/introduction-to-programming-slides.pdf', '2021-09-01 10:00:00'),
(14, 5, 2, '1', 'Data Structures and Algorithms - Slides.pdf', '/files/data-structures-and-algorithms-slides.pdf', '2021-09-01 11:00:00'),
(15, 6, 3, '1', 'Software Design Patterns - Slides.pdf', '/files/software-design-patterns-slides.pdf', '2021-09-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `member_id`, `class_id`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 8, 3),
(4, 8, 4),
(5, 10, 5),
(6, 10, 6),
(7, 8, 1),
(8, 5, 2),
(9, 10, 3),
(10, 10, 1),
(11, 5, 2),
(12, 10, 3),
(13, 18, 47),
(14, 18, 48),
(15, 18, 49),
(16, 18, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicyears`
--
ALTER TABLE `academicyears`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_field_id` (`study_field_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `classgroup`
--
ALTER TABLE `classgroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `study_field_id` (`study_field_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `academic_year_id` (`academic_year_id`);

--
-- Indexes for table `rolechanges`
--
ALTER TABLE `rolechanges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `changed_by` (`changed_by`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `study_field_id` (`study_field_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `academic_year_id` (`academic_year_id`),
  ADD KEY `notes_id` (`notes_id`);

--
-- Indexes for table `studyfields`
--
ALTER TABLE `studyfields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `teacherclasses`
--
ALTER TABLE `teacherclasses`
  ADD PRIMARY KEY (`member_id`,`class_id`,`semester`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teacherfiles`
--
ALTER TABLE `teacherfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicyears`
--
ALTER TABLE `academicyears`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `classgroup`
--
ALTER TABLE `classgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rolechanges`
--
ALTER TABLE `rolechanges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `studyfields`
--
ALTER TABLE `studyfields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacherfiles`
--
ALTER TABLE `teacherfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`study_field_id`) REFERENCES `studyfields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classgroup`
--
ALTER TABLE `classgroup`
  ADD CONSTRAINT `classgroup_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classgroup_ibfk_2` FOREIGN KEY (`study_field_id`) REFERENCES `studyfields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classgroup_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`academic_year_id`) REFERENCES `academicyears` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rolechanges`
--
ALTER TABLE `rolechanges`
  ADD CONSTRAINT `rolechanges_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rolechanges_ibfk_2` FOREIGN KEY (`changed_by`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`study_field_id`) REFERENCES `studyfields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `classgroup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`academic_year_id`) REFERENCES `academicyears` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_6` FOREIGN KEY (`notes_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studyfields`
--
ALTER TABLE `studyfields`
  ADD CONSTRAINT `studyfields_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherclasses`
--
ALTER TABLE `teacherclasses`
  ADD CONSTRAINT `teacherclasses_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacherclasses_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherfiles`
--
ALTER TABLE `teacherfiles`
  ADD CONSTRAINT `teacherfiles_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacherfiles_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

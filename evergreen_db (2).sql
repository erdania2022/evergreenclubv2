-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2024 at 04:50 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evergreen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(150) NOT NULL,
  `activity_date` date NOT NULL,
  `no_participants` int NOT NULL,
  `project_chief` varchar(150) NOT NULL,
  `contact_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `activity_name`, `activity_date`, `no_participants`, `project_chief`, `contact_no`) VALUES
(1, 'Climate Change Crisis Talk @ SK Seri Negeri', '2024-02-15', 50, 'Erdania Putri', '0193737883'),
(2, 'Nature Walk', '2024-03-15', 150, 'Wan Maisarah', '0198254346'),
(3, 'Community Cleanup Day', '2024-02-19', 30, 'Joana Liew', '0125374573'),
(4, 'Riverbank Cleanup Day', '2024-02-29', 30, 'Chong Wei Cheng', '0176243241'),
(5, 'Forest Fitness Challenge', '2024-03-05', 40, 'Ryan Wong', '01872434123'),
(6, 'Green Art Exhibition', '2024-03-14', 50, 'Ahmad Nadim Faisal', '01673547123'),
(7, 'Environmental Solutions Seminar', '2024-02-17', 50, 'Nur Adawiyah Aziman', '0187245432'),
(8, 'Biodegradable Chess Tournament', '2024-03-29', 40, 'Che Wan Muhammad Rifqi', '01466784321'),
(9, 'Green Robotics Competition', '2024-04-03', 30, 'Sharifah Nurul Ain', '0135628961'),
(10, 'Green Entrepreneurship Workshop', '2024-05-10', 35, 'Erdania Putri', '01111447479'),
(11, 'Upcycled Fashion Show @ UiTM Machang', '2024-05-15', 50, 'Nur Aiman Ashari', '01987246321'),
(12, 'Green Tech Expo', '2024-05-21', 40, 'Ava Yung', '01436237091'),
(13, 'Sustainable Gardening Workshop', '2024-06-15', 20, 'Amalin Eliana', '0197325172'),
(14, 'Bike Trails Exploration', '2024-05-22', 30, 'Mia Hassan', '01054263413'),
(15, 'SK Belukar Gotong Royong', '2024-06-01', 50, 'Shamierul Muiz', '0198634512');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `contact_no`) VALUES
(2, 'Nur', 'Adawiyah', 'adawiyah@gmail.com', 'female', '0123456789'),
(3, 'Sharifah', 'Nurul Ain', 'sharifahnurul@gmail.com', 'female', '0156435226'),
(4, 'Fahmie', 'Mansur', 'fahmieneko@gmail.com', 'male', '0133220207'),
(5, 'Muhammad', 'Izzat', 'kiraizzat@gmail.com', 'male', '0122621462'),
(6, 'Ezreen', 'Dlaila', 'ezreendlaila05@gmail.com', 'female', '0171129223'),
(7, 'Ezreen', 'Erdyna', 'ezreenerdyna@gmail.com', 'female', '0125239806'),
(8, 'Ahmad', 'Nadim', 'ahmadnadimfaisal@gmail.com', 'male', '0148481847'),
(9, 'Wan Nur', 'Amalin Eliana', 'amalin@gmail.com', 'female', '0145001920'),
(10, 'Che Wan Muhammad', 'Rifqi', 'cwmrifqi@gmail.com', 'male', '0146329836'),
(11, 'Muhammad', 'Danish', 'danisheizlan@gmail.com', 'male', '0123118840'),
(12, 'Nurul Alya', 'Rohaizad', 'nurulalya@gmail.com', 'female', '0197671160'),
(13, 'Juita', 'Mat Daud', 'juita2015@gmail.com', 'female', '01256358263'),
(14, 'Siew Ping', 'Choong', 'csiewping@gmail.com', 'female', '01243622342'),
(15, 'Henry', 'Kam', 'henrykamsiang@gmail.com', 'male', '01824362436'),
(16, 'Erdania', 'Putri', 'erdputri@gmail.com', 'female', '01111447479'),
(17, 'Chong Wei', 'Cheng', 'cwc@gmail.com', 'male', '0198263461'),
(18, 'Joana', 'Wong', 'joan245@gmail.com', 'female', '019172565132'),
(19, 'Doreen', 'Ooi', 'doreeeeen@gmail.com', 'female', '01426526312');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Administrator'),
(2, 'adawiyah', 'adawiyah123', 'Nur Adawiyah Aziman'),
(3, 'erdania', 'erdania123', 'Erdania Putri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

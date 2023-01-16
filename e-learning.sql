-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 03:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(12) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `add_by_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `add_date`, `add_by_email`) VALUES
(4, 'Python', 'Sun Oct 16 18:02:32 IST 2022', 'user@gmail.com'),
(5, 'Computer Networking', 'Sun Oct 16 18:02:38 IST 2022', 'user@gmail.com'),
(7, 'Artificial Intelligence', 'Sun Oct 16 18:03:38 IST 2022', 'user@gmail.com'),
(8, 'Data Structure and Algorithms', 'Sun Oct 16 18:03:50 IST 2022', 'user@gmail.com'),
(10, 'java', 'Tue Oct 18 22:56:45 IST 2022', 'user@gmail.com'),
(12, 'PHP', 'Mon Oct 24 13:43:11 IST 2022', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lecture` int(10) NOT NULL,
  `quiz` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `dis` int(10) NOT NULL,
  `skill` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `assesment` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `add_by_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_enroll` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `review` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `category`, `image`, `lecture`, `quiz`, `price`, `dis`, `skill`, `language`, `assesment`, `description`, `about`, `add_by_email`, `add_date`, `total_enroll`, `review`) VALUES
(1, 'Basics of java', 'Python', 'https://d2alvkbeky9xdq.cloudfront.net/course/9uy14.jpg', 20, 15, 2400, 2000, 'Basic', 'English', 'No', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', 'teacher@gmail.com', 'Sun Oct 16 ', '0', 2),
(5, 'Basics of java', 'Java', 'https://5.imimg.com/data5/QQ/CT/AO/GLADMIN-25397883/selection-064-500x500.png', 20, 15, 2400, 2000, 'Basic', 'English', 'No', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', 'sharmarajat687@gmail.com', 'Sun Oct 16 ', '0', 2),
(6, 'Basics of C++', 'Computer Networking', 'https://res.cloudinary.com/practicaldev/image/fetch/s--BbBxREeP--/c_imagga_scale,f_auto,fl_progressive,h_720,q_auto,w_1280/https://dev-to-uploads.s3.amazonaws.com/i/h2917prj7ldo0ow5x5ih.png', 502, 219, 556, 281, 'Intermediate', 'English', 'No', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', ' Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.Hi, My Scenario is after session timeout through web.xml or calling method session.setMaxInactiveInterval(30); I want the user to be redirect to login page. Please suggest some example for the mentioned scenario.', 'Sun Oct 23 13:08:55 IST 2022', 'teacher@gmail.com', '0', 0),
(7, 'Machine Learning', 'Computer Networking', 'https://miro.medium.com/max/1400/1*cG6U1qstYDijh9bPL42e-Q.jpeg', 154, 471, 103, 313, 'Basic', 'English', 'Yes', 'Architecto aut neque recusandae sint perferendis.', 'Marshall Islands', 'Sun Oct 23 13:11:29 IST 2022', 'teacher@gmail.com', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `enroll_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `enroll_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `reg_no` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(5) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `dis_price` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `enroll_name`, `enroll_email`, `reg_no`, `reg_date`, `course_id`, `course_name`, `course_category`, `price`, `dis_price`, `img`) VALUES
(2, 'Rajat Sharma', 'user@gmail.com', '12122', '2022-11-05T18:05:08.377600800', 1, 'Basics of java', 'Python', 2000, 2400, 'https://learnsamskrit.online/assets/course_img/sangeetratnakar.jpg'),
(4, 'Rajat Sharma', 'user@gmail.com', '12122', '2022-11-24T20:33:11.546928', 5, 'Basics of java', 'Java', 2000, 2400, 'https://5.imimg.com/data5/QQ/CT/AO/GLADMIN-25397883/selection-064-500x500.png');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `email`, `password`, `mobile`, `gender`, `dob`, `qualification`, `about`) VALUES
(1, 'Teacher', 'teacher@gmail.com', '12', '08447886642', 'Male', '2022-10-21', 'B.Tech', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(2, 'Rajat Sharma', 'teacher12@gmail.com', '122232', '12121212', 'Male', '2022-10-21', 'B.Tech', 'asdasd'),
(3, 'Paolo Reilly', 'your.email+fakedata54620@gmail.com', '12345', '12345', 'Male', '2021-12-06', 'B.Tech', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `review_by_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `review_by_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `course_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `video_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `video_cat` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `add_by_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `course_id`, `video_id`, `course_name`, `video_name`, `video_cat`, `add_by_email`) VALUES
(3, '1', '29903598', 'Basics of Python', 'Introduction', 'Python', 'teacher@gmail.com'),
(5, '1', '243909371', 'Basics of Python', 'Variables in Python', 'Python', 'teacher@gmail.com'),
(6, '1', '243918300', 'Basics of Python', 'Operators in Python', 'Python', 'teacher@gmail.com'),
(7, '2', '69563313', 'Basics of Python', 'Data Types in Python', 'Python', 'teacher@gmail.com'),
(8, '2', '121212', 'Basics of Python', 'Functions in Python', 'Python', 'teacher@gmail.com'),
(9, '2', '121212', 'Basics of Python', 'File Handling in Python', 'Python', 'teacher@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

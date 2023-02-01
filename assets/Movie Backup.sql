-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 01, 2023 at 09:10 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('music','ch-norris','animals','movies','d-n-d','astronautics','technology','ai','geography','sports','science','informatics','gen-knowledge') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-4` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-5` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer-1`, `answer-2`, `answer-3`, `answer-4`, `answer-5`, `correct`) VALUES
(301, 'movies', 'Who directed the film \"Pulp Fiction\"?\r\n', 'Martin Scorsese', 'Quentin Tarantino', 'Steven Spielberg', '', '', 'answer-2'),
(302, 'movies', 'Who did the snake dance in \"From Dusk Till Dawn\"?\r\n', 'Salma Hayek', 'Penelope Cruz', 'Sofia Vergara', '', '', 'answer-1'),
(303, 'movies', 'Who played the lead role in the movie \"The Godfather\"?\r\n', 'Marlon Brando', 'Al Pacino', 'Robert De Niro', '', '', 'answer-1'),
(304, 'movies', 'Who directed the film \"The Shawshank Redemption\"?\r\n', 'Martin Scorsese', 'Frank Darabont', 'Steven Spielberg', '', '', 'answer-2'),
(305, 'movies', 'What is the title of the first Star Wars film, released in 1977?\r\n', 'A New Hope', 'The Empire Strikes Back', 'Return of the Jedi', '', '', 'answer-1'),
(306, 'movies', 'Which actor had his Hollywood breakthrough with the film \"Easy Rider\"? \r\n', 'Marlon Brando', 'Roberto de Niro ', 'Jack Nicholson', '', '', 'answer-3'),
(307, 'movies', 'Who directed the film \"Avatar\"?\r\n', 'Frank Darabont', 'James Cameron', 'Steven Spielberg', '', '', 'answer-2'),
(308, 'movies', 'What is the title of the first Avengers film, released in 2012?', 'Avengers: Infinity War', 'Avengers: Endgame', 'The Avengers', '', '', 'answer-3'),
(309, 'movies', 'What is the name of the ring at the center of the story in \"The Lord of the Rings\"?', 'The One Ring', 'The Ring of Power', 'The Golden Ring', '', '', 'answer-1'),
(310, 'movies', 'Who directed the film \"Interstellar\"?', 'Christopher Nolan', 'Stanley Kubrick', 'George Lucas', '', '', 'answer-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

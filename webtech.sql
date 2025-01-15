-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2025 at 09:22 AM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(3) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `image`) VALUES
(1, 'To Kill A Mocking Bird', 'Harper Lee', 'https://pathakshamabesh.com/wp-content/uploads/2022/02/4084a0711c388099e55c08e2c0f28a25.jpg'),
(2, 'Pride and Prejudice', 'Jane Austen', 'https://m.media-amazon.com/images/M/MV5BMTA1NDQ3NTcyOTNeQTJeQWpwZ15BbWU3MDA0MzA4MzE@._V1_.jpg'),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 'https://upload.wikimedia.org/wikipedia/commons/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg'),
(4, 'Moby Dick', 'Herman Melville', 'https://m.media-amazon.com/images/M/MV5BZWUyOTgyMzktMjhmNi00NThkLTkxMGEtMGU0ZDEzZWQxNjNlXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'),
(5, 'War and Peace', 'Leo Tolstoy', 'https://m.media-amazon.com/images/I/81W6BFaJJWL._AC_UF1000,1000_QL80_.jpg'),
(6, '1984', 'George Orwell', 'https://miro.medium.com/v2/resize:fit:800/1*g8s4n-puPV3y-F2b7ilJ_A.jpeg'),
(7, 'The Catcher in the Rye', 'J. D. Salinger', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1398034300i/5107.jpg'),
(8, 'Jane Eyre', 'Charlotte Brontë', 'https://cdn.kobo.com/book-images/3fa794c2-7ac9-409f-b308-0229dd2ce3f8/353/569/90/False/jane-eyre-601.jpg'),
(9, 'Crime and Punishment', 'Fyodor Dostoevsky', 'https://d129gwz7aecqjo.cloudfront.net/images/thumbs/0006530_crime-and-punishment-fyodor-dostoyevsky.webp'),
(10, 'The Odyssey', 'Homer', 'https://m.media-amazon.com/images/M/MV5BOTQ4OTExMTYtY2RiZS00OWZmLWI0OGQtZGJjNzA5ZmZkNDQxXkEyXkFqcGc@._V1_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `used_token`
--

CREATE TABLE `used_token` (
  `id` int(3) NOT NULL,
  `used_token_number` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `used_token`
--

INSERT INTO `used_token` (`id`, `used_token_number`) VALUES
(6, 111),
(7, 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `used_token`
--
ALTER TABLE `used_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `used_token`
--
ALTER TABLE `used_token`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

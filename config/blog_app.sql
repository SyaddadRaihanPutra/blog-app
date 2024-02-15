-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Feb 2024 pada 04.00
-- Versi server: 8.0.30
-- Versi PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `date_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `body`, `image`, `date_publish`) VALUES
(2, 1, '10 Must-Have VSCode Extensions for Web Development', '10-musthave-vscode-extensions-for-web-development', 'Visual Studio Code is one of the most widely-used source code editors out there, with over 136k stars on GitHub. Its popularity comes about due to its lightness, flexibility, open-source nature, simplicity, and extensibility.\r\n\r\nSpeaking of extensibility, VSCode has thousands of extensions you can install to ramp up your developer productivity and save yourself from mundane tasks. They are all available in the Visual Studio Code marketplace and the vast majority of them are completely free.\r\n\r\nThis article looks at 10 powerful Visual Studio Code extensions that significantly improve the web development experience. Example usage and installation links are provided for every one of them.', '10-musthave-vscode-extensions-for-web-development.jpg', '2022-10-12'),
(3, 1, '8 Skills you must have as a Front-End Developer in 2022', '8-skills-you-must-have-as-a-frontend-developer-in-2022', 'There are different types of web developers, all of whom participate in the coding, maintaining, and analyzing the websites and significant projects worldwide.\r\n\r\nWhile a Backend Developer builds the infrastructure that enables a website to handle data requests and queries. A front-end developer focuses on the user environment and experience and makes all of that accessible and convenient for the users', '8-skills-you-must-have-as-a-frontend-developer-in-2022.jpg', '2022-10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `description`, `photo`) VALUES
(1, 'Syaddad Raihan Putra', 'syaddad@siotics.org', 'password', 'Saya seorang Fullstack Web Developer dari SMKN 1 Jakarta', 'syaddad-raihan-putra.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

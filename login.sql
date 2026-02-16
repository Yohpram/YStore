-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2026 pada 02.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `avatar`, `created_at`, `password`) VALUES
(1, '104055572537811623793', 'Yohanes Walwiyo', 'walwiyopramuviadi@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocLhsH8hgYKmxYXwXHAYFAu_YFouXYIeI83hZbO959xH-o23prGS=s96-c', '2025-02-06 06:05:40', NULL),
(2, '106276318979028942161', 'ynx pp', 'yohaneswaluyo060@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocK5RZKlJer7jEMNKjpoCu5d4k8vrpnBQNDlFi2tt1of9NxOMAjo=s96-c', '2025-02-06 06:06:19', NULL),
(3, '105397775251203781557', 'agustinus saryadi', 'saryadiag@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocJsjvAv1vmsPSUzDIPuGMKghHgGJaCXdo9NO94ADBlLY4zDSg=s96-c', '2025-02-07 05:20:14', NULL),
(4, '105403581676021061390', 'Katarina Wening Hildasari', 'katarinaweningh@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocJI888gxtQEDh7F5IRRGMfseiOPN4YC01xfayKqpLisyf8tFA2l=s96-c', '2025-02-07 05:50:02', NULL),
(5, '', ' Pramuviadi', 'pramuviadi@gmail.com', 'uploads/default.png', '2025-02-23 20:20:50', '$2y$10$Vma6Q2ar'),
(15, NULL, 'saryadi', 'saryadi@gmail.com', 'default.png', '2025-02-23 21:15:08', '$2y$10$IFGw/4kP'),
(16, NULL, 'wening', 'wening@mail.com', 'default.png', '2025-02-23 21:17:01', '$2y$10$gZ3TLrGW'),
(17, NULL, 'kiki', 'kiki@gmail.com', 'default.png', '2025-02-23 21:20:18', '$2y$10$CE41Lz0v'),
(18, NULL, 'lulu', 'lulu@gmail.com', 'default.png', '2025-02-23 21:36:36', '$2y$10$pqP2Ll3u'),
(19, '106252036414182457248', 'pram walwiyo', 'pramwalwiyo@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocI5aSaR3Skq--XMqUiI4Rfp0SO6QS8kNTCdDW-PzTtP9GDVJQ=s96-c', '2025-02-24 04:40:17', NULL),
(20, NULL, 'didi', 'didi@gmail.com', 'default.png', '2025-02-23 21:41:05', '$2y$10$lT9Muyu9'),
(21, NULL, 'wal', 'wal@mail.com', 'default.png', '2025-02-24 18:48:29', '$2y$10$5QQRoKe7'),
(22, NULL, 'nig', 'nig@gmail.co', 'default.png', '2025-02-24 18:55:55', '$2y$10$T.Iwtk/H'),
(23, NULL, 'wiwi', 'wiwi@gmail.com', 'default.png', '2025-02-24 19:09:42', '$2y$10$6mP4j6NZ'),
(24, NULL, 'yoyo', 'yoyo@gmail.com', 'default.png', '2025-02-24 19:16:28', '$2y$10$KFwPoVbd'),
(25, NULL, 'toto', 'toto@gmail.com', 'default.png', '2025-02-24 19:18:49', '$2y$10$Ui6ZkDfqL.3poO/Klxu3nOyTg937XIBUa.eHc33QYFX7iah9AOX9y'),
(26, NULL, 'niga', 'niga@gmail.com', 'default.png', '2025-02-24 19:22:10', '$2y$10$KMH3rpl9VrKkG9hT.GI9v.cl3fXwbQ2ZUSB3TbVAIAiSjarWuKPte'),
(27, NULL, 'dani', 'dani@gmail.com', 'default.png', '2025-02-24 22:07:58', '$2y$10$pJGWNxZMFRuL.F6LWkxtw.4grFq/3ueSBbm9cENi2pQBySXf09BbO'),
(28, NULL, 'nana', 'nana@gmail.com', 'default.png', '2025-02-26 19:25:43', '$2y$10$NYlJ.EmJsUzLj/KLlVS/ouRh9BIR7zefrvofI1cw/m7Nl3yiP.Ot6'),
(29, NULL, 'nini', 'nini@gmail.com', 'default.png', '2025-03-02 20:12:46', '$2y$10$gdBoAK.gUJj4cPvrauRvE.YBrX.FLE7o/6bQQh1g3X3P7PYzPbeoC'),
(30, NULL, 'tata', 'tata@gmail.com', 'icon.jpg', '2025-04-09 04:44:45', '$2y$10$bao6XKpNge4FQj1yFfFbEu5uTryGv1WkBXV.J5zL1JI9UQZfMz9RG'),
(31, NULL, 'rudi', 'rudi@gmail.com', 'icon.jpg', '2025-04-09 04:53:04', '$2y$10$qguoTwBqe.nzZOplD9k2t.8gycqVhXbMaA6sSQ37IetSbuEMY6rhi'),
(32, NULL, 'walwiyo', 'walwiyo@gmail.com', 'icon.jpg', '2025-04-10 05:36:14', '$2y$10$NtWJ8X0KIyMedX5YzfFPFuIp7CV11dskl2ENM3L2vETiJIqSL7kYK'),
(33, NULL, 'indah', 'indah@gmail.com', 'icon.jpg', '2025-08-03 21:13:55', '$2y$10$JfwmdI1CzHTn5FsIhx8qXunYbSC5Rr03YW.kqn/4cLWV.4ClhHOlq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `google_id` (`google_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

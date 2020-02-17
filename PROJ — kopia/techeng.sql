-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2020, 23:56
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `techeng`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `class_student`
--

CREATE TABLE `class_student` (
  `id_class` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `class_unit`
--

CREATE TABLE `class_unit` (
  `id_class` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lesson_word`
--

CREATE TABLE `lesson_word` (
  `id_lesson` int(11) NOT NULL,
  `id_eng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `meaning`
--

CREATE TABLE `meaning` (
  `id_eng` int(11) NOT NULL,
  `id_pol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `type`, `name`, `surname`) VALUES
(0, '1234', '123', 'teacher', '123', '123'),
(1, 'admin', 'admin', 'admin', 'Michał', 'Korcz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `word_eng`
--

CREATE TABLE `word_eng` (
  `id_eng` int(11) NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `word_pol`
--

CREATE TABLE `word_pol` (
  `id_pol` int(11) NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `teacher` (`teacher`);

--
-- Indeksy dla tabeli `class_student`
--
ALTER TABLE `class_student`
  ADD PRIMARY KEY (`id_class`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `class_unit`
--
ALTER TABLE `class_unit`
  ADD PRIMARY KEY (`id_class`,`id_unit`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indeksy dla tabeli `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indeksy dla tabeli `lesson_word`
--
ALTER TABLE `lesson_word`
  ADD PRIMARY KEY (`id_lesson`,`id_eng`),
  ADD KEY `id_eng` (`id_eng`);

--
-- Indeksy dla tabeli `meaning`
--
ALTER TABLE `meaning`
  ADD PRIMARY KEY (`id_eng`,`id_pol`),
  ADD KEY `id_pol` (`id_pol`);

--
-- Indeksy dla tabeli `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`),
  ADD KEY `teacher` (`teacher`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indeksy dla tabeli `word_eng`
--
ALTER TABLE `word_eng`
  ADD PRIMARY KEY (`id_eng`),
  ADD UNIQUE KEY `word` (`word`);

--
-- Indeksy dla tabeli `word_pol`
--
ALTER TABLE `word_pol`
  ADD PRIMARY KEY (`id_pol`),
  ADD UNIQUE KEY `word` (`word`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`teacher`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`teacher`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`id_class`) REFERENCES `class_student` (`id_class`),
  ADD CONSTRAINT `class_ibfk_4` FOREIGN KEY (`teacher`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `class_ibfk_5` FOREIGN KEY (`id_class`) REFERENCES `class_student` (`id_class`);

--
-- Ograniczenia dla tabeli `class_student`
--
ALTER TABLE `class_student`
  ADD CONSTRAINT `class_student_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ograniczenia dla tabeli `class_unit`
--
ALTER TABLE `class_unit`
  ADD CONSTRAINT `class_unit_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `class_unit_ibfk_2` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`),
  ADD CONSTRAINT `class_unit_ibfk_3` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `class_unit_ibfk_4` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`);

--
-- Ograniczenia dla tabeli `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `lesson_ibfk_3` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `lesson_ibfk_4` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `lesson_ibfk_5` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `lesson_ibfk_6` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);

--
-- Ograniczenia dla tabeli `lesson_word`
--
ALTER TABLE `lesson_word`
  ADD CONSTRAINT `lesson_word_ibfk_1` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`),
  ADD CONSTRAINT `lesson_word_ibfk_2` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`),
  ADD CONSTRAINT `lesson_word_ibfk_3` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`),
  ADD CONSTRAINT `lesson_word_ibfk_4` FOREIGN KEY (`id_eng`) REFERENCES `word_eng` (`id_eng`),
  ADD CONSTRAINT `lesson_word_ibfk_5` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`),
  ADD CONSTRAINT `lesson_word_ibfk_6` FOREIGN KEY (`id_eng`) REFERENCES `word_eng` (`id_eng`),
  ADD CONSTRAINT `lesson_word_ibfk_7` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`),
  ADD CONSTRAINT `lesson_word_ibfk_8` FOREIGN KEY (`id_eng`) REFERENCES `word_eng` (`id_eng`);

--
-- Ograniczenia dla tabeli `meaning`
--
ALTER TABLE `meaning`
  ADD CONSTRAINT `meaning_ibfk_1` FOREIGN KEY (`id_pol`) REFERENCES `word_pol` (`id_pol`),
  ADD CONSTRAINT `meaning_ibfk_2` FOREIGN KEY (`id_eng`) REFERENCES `word_eng` (`id_eng`);

--
-- Ograniczenia dla tabeli `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`teacher`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

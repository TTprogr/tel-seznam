-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 15. kvě 2024, 17:12
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `telefon`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam`
--

CREATE TABLE `seznam` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `telefon` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `seznam`
--

INSERT INTO `seznam` (`id`, `jmeno`, `prijmeni`, `telefon`) VALUES
(1, 'Tom', 'Uložený', 777555666),
(2, 'Pepa', 'Klouzek', 123654789),
(3, 'Jiří', 'Poděbrad', 741258963),
(4, 'Otakar', 'Přemysl', 722001002),
(5, 'Kateřina', 'Flívová', 605423881),
(6, 'Karolína', 'Hrušková', 654723541),
(7, 'Veronika', 'Malá', 567235412);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `seznam`
--
ALTER TABLE `seznam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `seznam`
--
ALTER TABLE `seznam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

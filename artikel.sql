-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 19 nov 2026 kl 08:36
-- Serverversion: 10.4.32-MariaDB
-- PHP-version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `artikel`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumpning av Data i tabell `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$5ZJ/IVGBXEHs.jk6nlnI1ealZSHv28NcF.42YT.CO7Na26sEJv5k.');

-- --------------------------------------------------------

--
-- Tabellstruktur `artiklar`
--

CREATE TABLE `artiklar` (
  `id` int(11) NOT NULL,
  `artikel_headline` varchar(100) NOT NULL,
  `artikel_text` varchar(456) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumpning av Data i tabell `artiklar`
--

INSERT INTO `artiklar` (`id`, `artikel_headline`, `artikel_text`, `img_path`) VALUES
(2, 'The Flash Saves Central City from a Mysterious Explosion', 'A massive explosion shook downtown Central City last night, but the city\'s fastest hero arrived just in time to prevent a disaster.\n\nResidents of Central City experienced a terrifying evening after a powerful explosion occurred near the city center. Witnesses reported seeing a bright flash of red lightning moments before the explosion.\r\n\r\nFortunately, The Flash arrived within seconds and managed to evacuate nearby buildings before emergency services re', 'https://images.openai.com/static-rsc-4/AIvkN7iSuiJf6bAKxgjJ22v7-29U8IfMqQHHbrRocjfNYALVxnadvIT3-jR2e-EDAnRbcHM0AtOUl6dfU2CNqPolC0_TP5j7QCgujulIU1zR4L8COexzapaAkC5dd5x3C6HKFPy1QvJ0wcu-R0116ndky3AvknAr48H4MpCjMFAxjCrvE6rD5y8SS_JF6A6S?purpose=fullsize'),
(3, 'Central City Police Investigate Mysterious Disappearances', 'Several residents have mysteriously disappeared across Central City, leaving police searching for answers.\n\nThe Central City Police Department has launched an investigation after multiple residents were reported missing over the past few days.\r\n\r\nInvestigators have discovered unusual energy readings at several locations connected to the disappearances. Some witnesses claim they saw a strange figure moving at incredible speeds shortly before people vani', 'https://images.openai.com/static-rsc-4/bdStCDhQoLYFKy7rkX5Z2Dlwm8lSCLVTw7_IR2N5Gp4BBErecneoFBvG2iysn1StWi5sTKieOYtKJkNvXOzOzTzYQxiNwqMxNz4XjSroysd6BWvlHK6d6t_KzhF7m-t-VYzqYq_UkvDCDWImxLRsoiZz7w-5-mBCvdNQkCMjBrlCCvEyDWxINIsTZnXFDnrU?purpose=fullsize'),
(4, 'New Speedster Spotted in Central City', 'Reports of a mysterious speedster have caused concern among Central City residents after several sightings of unusual lightning.\n\nA mysterious figure has reportedly been spotted running through the streets of Central City at incredible speeds.\r\n\r\nMultiple witnesses describe seeing yellow lightning moving through the city during late-night hours. The sightings have raised questions about whether The Flash is the only speedster operating in Central City.', 'https://images.openai.com/static-rsc-4/jHPnHff1OZVRb22DwFT8QIM7UStf1gJ_Gyf7VkEu0hn0eRv3VGZWlpJ9RGpQ5Fj7A4oCGqVDkDZU-tpdFE984TI7jHWE0RMPQlUHJXtilv6an34r8ufndvYc71-BmTStqsG5Yh01PPEwovm5wqGtHU0TLJcCn6EjAhY6YR9Feovscw0xMjl1XeyPlU-BWn3a?purpose=fullsize');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `artiklar`
--
ALTER TABLE `artiklar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `artiklar`
--
ALTER TABLE `artiklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

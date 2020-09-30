-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2020 at 09:07 PM
-- Server version: 5.7.31-log
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `benutzer`
--

CREATE TABLE `benutzer` (
  `benutzer_ID` int(11) NOT NULL,
  `geburtsdatum` date NOT NULL,
  `vorname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `geschlecht` enum('HERR','FRAU') CHARACTER SET utf8 DEFAULT NULL,
  `benutzername` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`benutzer_ID`, `geburtsdatum`, `vorname`, `name`, `email`, `geschlecht`, `benutzername`, `password`) VALUES
(1, '1983-09-04', 'Hamed', 'Tohid', 'hamed.tohidtabar@Hotmail.com', 'HERR', 'Hamed', 'e10adc3949ba59abbe56e057f20f88'),
(4, '1981-01-01', 'Taner', 'TanerFamily', 'Taner@taner.com', 'HERR', 'Taner', '123456'),
(5, '1989-01-22', 'Elif', 'Elif***', 'elif@elif.com', 'FRAU', 'Elif', '123456'),
(6, '1981-09-01', 'Emre', 'Emre***', 'Emre@Emre.com', 'HERR', 'Emre', '123456'),
(7, '1983-09-22', 'Mohammad', 'Alkadi', 'Mohammad@Mohammad.com', 'HERR', 'Mohammad', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bestellungen`
--

CREATE TABLE `bestellungen` (
  `bestellung_ID` int(11) NOT NULL,
  `benutzer_ID` int(11) DEFAULT NULL,
  `bestellpreis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `bestellungen`
--

INSERT INTO `bestellungen` (`bestellung_ID`, `benutzer_ID`, `bestellpreis`) VALUES
(1, 1, 74),
(2, 4, 35),
(3, 5, 70);

-- --------------------------------------------------------

--
-- Table structure for table `oberabteilung`
--

CREATE TABLE `oberabteilung` (
  `abteilung_ID` int(11) NOT NULL,
  `abteilung_Name` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `oberabteilung`
--

INSERT INTO `oberabteilung` (`abteilung_ID`, `abteilung_Name`) VALUES
(1, 'Bekleidung'),
(2, 'Schuhe');

-- --------------------------------------------------------

--
-- Table structure for table `produkten`
--

CREATE TABLE `produkten` (
  `produkt_ID` int(11) NOT NULL,
  `Produkt_Name` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `subabteilung_ID` int(11) DEFAULT NULL,
  `preis` float DEFAULT NULL,
  `groesse` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `farbe` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `geschlecht` enum('Damen','Herren','Kinder','') CHARACTER SET utf8 DEFAULT NULL,
  `bilder_path` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `anzahl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `produkten`
--

INSERT INTO `produkten` (`produkt_ID`, `Produkt_Name`, `subabteilung_ID`, `preis`, `groesse`, `farbe`, `geschlecht`, `bilder_path`, `anzahl`) VALUES
(1, 'Langarmshirt', 10, 19.99, 'M', 'beige', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/51e89487e43730a39f341e71f39c55d0/2ac8c91994fc493a9a582499f8a5493c.jpg', 12),
(2, 'G-Star\r\nBASE - Langarmshirt', 10, 19.05, 'XS', 'black', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/b4c9ef0d6e693ad09a6864ca8954a6ba/e850d2dbf87c4f418d4036ab241fa901.jpg', 20),
(3, 'Selected Femme\r\nSFMIO NOOS - Langarmshirt', 10, 29.19, 'S', 'hell grey', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/74618311af6f36719a9e72d7863f58bb/75b2318a3ac94e99b5443230b103ff01.jpg', 19),
(4, 'Moves\r\nSAVISA - Hemdbluse', 3, 77.45, '42', 'mint green', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/afd14ff2cc403810bea30a78a4206e23/b5cf1f935e164fd4b45194ce4afca4b8.jpg', 10),
(5, 'Cecil\r\nSTEPPJACKE - Übergangsjacke', 13, 96.99, 'L', 'gelb', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/ccffd7012e28360c9d09e3b2b2fa8004/47fa2debd9404708998741c95071bee5.jpg', 11),
(6, 'TOM TAILOR \r\nMIT BRUSTTASCHE - Hemd', 11, 48.73, 'XXL', 'olive night green', 'Herren', 'https://img01.ztat.net/article/spp-media-p1/7c339063edca3c81b8208296b70ed348/8512a89170704da68ac89836ac751fc4.jpg', 11),
(7, 'Alessandro Zavetti\r\nCANADA MALVINI PUFFER JACKET - Winterjacke', 13, 120.95, 'L', 'Alessandro Zavetti\r\nCANADA MALVINI PUFFER JACKET - Winterjacke', 'Herren', 'https://img01.ztat.net/article/spp-media-p1/476e32ab26b931f2ad9a204aca9aac00/a2764e6a517742688dbb24c44924b6fb.jpg', 20),
(8, 'Gym King\r\nDISTRESSED - Jeans Skinny Fit', 7, 57.95, '36', 'dark gray', NULL, 'https://img01.ztat.net/article/spp-media-p1/c3ba808e50823a929e1fd1d96ff0cca9/c494ebce67bb4cf484668bdab9e97ddf.jpg', 18),
(9, 'Benetton\r\nLangarmshirt', 2, 9.65, '62', 'white', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/54142a54ecc23cccbf0b5023c51d2c93/0a3a9391fb114fe4b7ff955f3f2828b4.jpg', 100),
(10, 'Jacky Baby\r\nLUMBERJACK - Hemd', 11, 24.25, '92', 'rot', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/928bc377ef9b33e5985e91401615f7f9/96750c10950740a7921424dd2467e2cb.jpg', 104),
(11, 'Lemon Beret\r\nBOYS SHIRT - Hemd', 11, 24.25, '86', 'navy blazer', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/17f0096022a3338dbfcb14ac418c8f2b/70681d8f4ab046a38a7d228ea3c2bc52.jpg', 110),
(12, 'Name it\r\nCORD - Hemd', 11, 33.83, '64', 'cathay spice', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/2ef25c846a6139ababe0e8070f7d3c1c/f21c436e2cf946debc630dd55eae721b.jpg', 122),
(13, 'Next\r\nStoffhose', 8, 48.22, '74/100', 'gray', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/3662a65c7d0a3ee5bd630903a8a5ae99/62a4ecdaa6cd4b54ba3ca1bd5bcae95f.jpg', 132),
(14, 'Selected Femme\r\nDONNA - Sneaker low', 17, 33.99, '40', 'black', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/b91fc1adb555349da8a8eeae017b3865/316cbc12a90b4072aebf016cd7c09355.jpg', 30),
(15, 'Woden\r\nNORA - Sneaker low', 17, 38.99, '39', 'black', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/44c5b93b052a35c393b8ce430f10fc7b/88f52497c6d2431cb12962e461bd6012.jpg', 40),
(16, 'Puma\r\nSMASH - Sneaker low - white', 17, 48.55, '36', 'white', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/ba7c4db4cc763860a51aad06444c711c/f3bd4dee79e644c59b785022b5163f34.jpg', 40),
(17, 'Who What Wear\r\nMEARA - High Heel Sandalette', 21, 80.22, '38', 'black', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/925c614cf3cf3b3ab5c04fa12160422f/e1abe4eb2cbc4d62ab121a72f3c2ed10.jpg', 82),
(18, '4th & Reckless\r\nRACHEL - High Heel Sandalette', 21, 49.99, '36', 'white', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/f6d2f4dde4673c369f57d2dd79ae0326/53aee99c2bff40949acc26ea275cb891.jpg', 20),
(19, 'Les Tropéziennes par M Belarbi\r\nBADEN - Riemensandalette', 21, 89, '36', 'tan', 'Damen', 'https://img01.ztat.net/article/spp-media-p1/4510fb557a813e07829cc90e4c55b010/3476e873d0074d79827e463986fecbb3.jpg', 33),
(20, 'adidas Performance\r\nTENSAUR RUN - Laufschuh Neutral', 27, 24, '22', 'blue', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/6d6c8bc252ae3984bd99d3da8f2c8142/01100fc828684a8db3317a77a6042a13.jpg', 100),
(21, 'Puma\r\nSTEPFLEEX 2 UNISEX - Trainings-/Fitnessschuh', 27, 50, '21', 'quarry/white/yellow alert', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/811bcaf077ea34b1a6dea0721a4b9be9/2f13cf51a90d455099465745e06d46a3.jpg', 111),
(22, 'Jordan\r\nMAX 200 UNISEX - Basketballschuh', 27, 33, '27', 'black', 'Kinder', 'https://img01.ztat.net/article/spp-media-p1/e77e9a3fc68834e6bfda5004a4e439ce/ad7297d0b8fb4ea6892da7990fd01bef.jpg', 120);

-- --------------------------------------------------------

--
-- Table structure for table `subabteilung`
--

CREATE TABLE `subabteilung` (
  `subabteilung_ID` int(11) NOT NULL,
  `abteilung_ID` int(11) DEFAULT NULL,
  `subabteilung_Name` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `subabteilung`
--

INSERT INTO `subabteilung` (`subabteilung_ID`, `abteilung_ID`, `subabteilung_Name`) VALUES
(1, 1, 'Kleider'),
(2, 1, 'Shirts & Tops'),
(3, 1, 'Blusen & Tuniken'),
(4, 1, 'Pullover & Strickjacken'),
(5, 1, 'Jacken & Blazer'),
(6, 1, 'Mäntel'),
(7, 1, 'Jeans'),
(8, 1, 'Hosen'),
(9, 1, 'Röcke'),
(10, 1, 'T-Shirts'),
(11, 1, 'Hemden'),
(12, 1, 'Sweatshirts'),
(13, 1, 'Jacken'),
(17, 2, 'Sneaker'),
(18, 2, 'Pumps'),
(19, 2, 'High Heels'),
(20, 2, 'Ballerinas'),
(21, 2, 'Sandalen'),
(22, 2, 'Stiefeletten'),
(23, 2, 'Schnürschuhe'),
(24, 2, 'Halbschuhe'),
(25, 2, 'Pantoletten'),
(26, 2, 'Stiefel'),
(27, 2, 'Sportschuhe'),
(28, 2, 'Outdoor Schuhe'),
(29, 2, 'Badeschuhe'),
(30, 2, 'Hausschuhe'),
(31, 2, 'Schuhzubehör');

-- --------------------------------------------------------

--
-- Table structure for table `transaktionen`
--

CREATE TABLE `transaktionen` (
  `transaktion_ID` int(11) NOT NULL,
  `bestellung_group_id` int(11) DEFAULT NULL,
  `produkt_ID` int(11) DEFAULT NULL,
  `stuecke` int(11) DEFAULT NULL,
  `transaction_preis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `transaktionen`
--

INSERT INTO `transaktionen` (`transaktion_ID`, `bestellung_group_id`, `produkt_ID`, `stuecke`, `transaction_preis`) VALUES
(1, 1, 1, 2, 30),
(2, 2, 2, 3, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`benutzer_ID`),
  ADD UNIQUE KEY `benutzer_benutzername_uindex` (`benutzername`),
  ADD UNIQUE KEY `benutzer_email_uindex` (`email`);

--
-- Indexes for table `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`bestellung_ID`),
  ADD KEY `bestellungen_benutzer_benutzer_ID_fk` (`benutzer_ID`);

--
-- Indexes for table `oberabteilung`
--
ALTER TABLE `oberabteilung`
  ADD PRIMARY KEY (`abteilung_ID`),
  ADD UNIQUE KEY `oberabteilung_abteilung_Name_uindex` (`abteilung_Name`);

--
-- Indexes for table `produkten`
--
ALTER TABLE `produkten`
  ADD PRIMARY KEY (`produkt_ID`),
  ADD KEY `produkten_subabteilung_subabteilung_ID_fk` (`subabteilung_ID`);

--
-- Indexes for table `subabteilung`
--
ALTER TABLE `subabteilung`
  ADD PRIMARY KEY (`subabteilung_ID`),
  ADD UNIQUE KEY `subabteilung_subabteilung_Name_uindex` (`subabteilung_Name`),
  ADD KEY `subabteilung_oberabteilung_abteilung_ID_fk` (`abteilung_ID`);

--
-- Indexes for table `transaktionen`
--
ALTER TABLE `transaktionen`
  ADD PRIMARY KEY (`transaktion_ID`),
  ADD KEY `transaktionen_bestellungen_bestellung_ID_fk` (`bestellung_group_id`),
  ADD KEY `transaktionen_produkten_produkt_ID_fk` (`produkt_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `benutzer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `bestellung_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oberabteilung`
--
ALTER TABLE `oberabteilung`
  MODIFY `abteilung_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produkten`
--
ALTER TABLE `produkten`
  MODIFY `produkt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subabteilung`
--
ALTER TABLE `subabteilung`
  MODIFY `subabteilung_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transaktionen`
--
ALTER TABLE `transaktionen`
  MODIFY `transaktion_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD CONSTRAINT `bestellungen_benutzer_benutzer_ID_fk` FOREIGN KEY (`benutzer_ID`) REFERENCES `benutzer` (`benutzer_ID`);

--
-- Constraints for table `produkten`
--
ALTER TABLE `produkten`
  ADD CONSTRAINT `produkten_subabteilung_subabteilung_ID_fk` FOREIGN KEY (`subabteilung_ID`) REFERENCES `subabteilung` (`subabteilung_ID`);

--
-- Constraints for table `subabteilung`
--
ALTER TABLE `subabteilung`
  ADD CONSTRAINT `subabteilung_oberabteilung_abteilung_ID_fk` FOREIGN KEY (`abteilung_ID`) REFERENCES `oberabteilung` (`abteilung_ID`);

--
-- Constraints for table `transaktionen`
--
ALTER TABLE `transaktionen`
  ADD CONSTRAINT `transaktionen_bestellungen_bestellung_ID_fk` FOREIGN KEY (`bestellung_group_id`) REFERENCES `bestellungen` (`bestellung_ID`),
  ADD CONSTRAINT `transaktionen_produkten_produkt_ID_fk` FOREIGN KEY (`produkt_ID`) REFERENCES `produkten` (`produkt_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

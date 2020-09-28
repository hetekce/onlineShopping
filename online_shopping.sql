-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 09:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
  `geschlecht` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `benutzername` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bestellungen`
--

CREATE TABLE `bestellungen` (
  `bestellung_ID` int(11) NOT NULL,
  `benutzer_ID` int(11) DEFAULT NULL,
  `bestellpreis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oberabteilung`
--

CREATE TABLE `oberabteilung` (
  `abteilung_ID` int(11) NOT NULL,
  `abteilung_Name` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produkten`
--

CREATE TABLE `produkten` (
  `produkt_ID` int(11) NOT NULL,
  `abteilung_ID` int(11) DEFAULT NULL,
  `subabteilung_ID` int(11) DEFAULT NULL,
  `preis` float DEFAULT NULL,
  `groesse` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `farbe` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `geschlecht` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `bilder` longblob DEFAULT NULL,
  `anzahl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subabteilung`
--

CREATE TABLE `subabteilung` (
  `subabteilung_ID` int(11) NOT NULL,
  `abteilung_ID` int(11) DEFAULT NULL,
  `subabteilung_Name` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaktionen`
--

CREATE TABLE `transaktionen` (
  `transaktion_ID` int(11) NOT NULL,
  `bestellung_group_id` int(11) DEFAULT NULL,
  `produkt_ID` int(11) DEFAULT NULL,
  `benutzer_ID` int(11) DEFAULT NULL,
  `stuecke` int(11) DEFAULT NULL,
  `transaction_preis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

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
  ADD PRIMARY KEY (`abteilung_ID`);

--
-- Indexes for table `produkten`
--
ALTER TABLE `produkten`
  ADD PRIMARY KEY (`produkt_ID`),
  ADD KEY `produkten_oberabteilung_abteilung_ID_fk` (`abteilung_ID`),
  ADD KEY `produkten_subabteilung_subabteilung_ID_fk` (`subabteilung_ID`);

--
-- Indexes for table `subabteilung`
--
ALTER TABLE `subabteilung`
  ADD PRIMARY KEY (`subabteilung_ID`),
  ADD KEY `subabteilung_oberabteilung_abteilung_ID_fk` (`abteilung_ID`);

--
-- Indexes for table `transaktionen`
--
ALTER TABLE `transaktionen`
  ADD PRIMARY KEY (`transaktion_ID`),
  ADD KEY `transaktionen_benutzer_benutzer_ID_fk` (`benutzer_ID`),
  ADD KEY `transaktionen_bestellungen_bestellung_ID_fk` (`bestellung_group_id`),
  ADD KEY `transaktionen_produkten_produkt_ID_fk` (`produkt_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `benutzer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `bestellung_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oberabteilung`
--
ALTER TABLE `oberabteilung`
  MODIFY `abteilung_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produkten`
--
ALTER TABLE `produkten`
  MODIFY `produkt_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subabteilung`
--
ALTER TABLE `subabteilung`
  MODIFY `subabteilung_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaktionen`
--
ALTER TABLE `transaktionen`
  MODIFY `transaktion_ID` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `produkten_oberabteilung_abteilung_ID_fk` FOREIGN KEY (`abteilung_ID`) REFERENCES `oberabteilung` (`abteilung_ID`),
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
  ADD CONSTRAINT `transaktionen_benutzer_benutzer_ID_fk` FOREIGN KEY (`benutzer_ID`) REFERENCES `benutzer` (`benutzer_ID`),
  ADD CONSTRAINT `transaktionen_bestellungen_bestellung_ID_fk` FOREIGN KEY (`bestellung_group_id`) REFERENCES `bestellungen` (`bestellung_ID`),
  ADD CONSTRAINT `transaktionen_produkten_produkt_ID_fk` FOREIGN KEY (`produkt_ID`) REFERENCES `produkten` (`produkt_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

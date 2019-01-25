-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 25 Janvier 2019 à 17:53
-- Version du serveur :  5.7.24-0ubuntu0.18.10.1
-- Version de PHP :  7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chartchallenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `annee` int(11) NOT NULL,
  `janvier` int(11) NOT NULL,
  `fevrier` int(11) NOT NULL,
  `mars` int(11) NOT NULL,
  `avril` int(11) NOT NULL,
  `mai` int(11) NOT NULL,
  `juin` int(11) NOT NULL,
  `juillet` int(11) NOT NULL,
  `aout` int(11) NOT NULL,
  `septembre` int(11) NOT NULL,
  `octobre` int(11) NOT NULL,
  `novembre` int(11) NOT NULL,
  `decembre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `data`
--

INSERT INTO `data` (`annee`, `janvier`, `fevrier`, `mars`, `avril`, `mai`, `juin`, `juillet`, `aout`, `septembre`, `octobre`, `novembre`, `decembre`) VALUES
(2013, 50, 20, 10, 80, 40, 35, 24, 10, 12, 30, 35, 90),
(2014, 10, 14, 20, 41, 30, 40, 75, 36, 41, 68, 10, 45),
(2015, 70, 20, 45, 35, 72, 100, 80, 70, 20, 50, 87, 70),
(2016, 10, 45, 35, 25, 89, 70, 85, 70, 18, 60, 45, 80),
(2017, 45, 80, 41, 30, 45, 23, 77, 64, 50, 15, 14, 78),
(2018, 5, 67, 70, 80, 12, 13, 40, 60, 70, 46, 78, 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

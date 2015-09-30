-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 30 Septembre 2015 à 20:14
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bibliothequeaudio`
--

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Emplacement` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `playlistaudio`
--

CREATE TABLE IF NOT EXISTS `playlistaudio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PlayListId` int(11) NOT NULL,
  `UserAudioId` int(11) NOT NULL,
  `Place` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mail` varchar(20) NOT NULL,
  `Grade` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `useraudio`
--

CREATE TABLE IF NOT EXISTS `useraudio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `AudioID` int(11) NOT NULL,
  `Temps` time NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

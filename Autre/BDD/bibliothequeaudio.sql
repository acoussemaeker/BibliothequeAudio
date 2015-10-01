-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 01 Octobre 2015 à 14:26
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `audio`
--

INSERT INTO `audio` (`Id`, `Nom`, `Emplacement`) VALUES
(1, 'bouh', 'c:/test/'),
(2, 'baah', 'c:/test/');

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
-- Structure de la table `requestaudio`
--

CREATE TABLE IF NOT EXISTS `requestaudio` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `IdUser` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Emplacement` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `requestaudio`
--

INSERT INTO `requestaudio` (`Id`, `IdUser`, `Nom`, `Emplacement`) VALUES
(1, 1, 'banboulala', 'C:/enAttente/'),
(2, 2, 'bidoula', 'C:/enAttente/');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Grade` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Id`, `Pseudo`, `Password`, `Mail`, `Grade`) VALUES
(1, 'gertrude', 'boul', 'gertrude.hg@gmail.co', 0),
(2, 'robert', 'test', 'robert.trypo@gmail.c', 0);

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

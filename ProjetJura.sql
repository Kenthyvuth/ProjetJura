-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 01 déc. 2021 à 14:03
-- Version du serveur :  8.0.27-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ProjetJura`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `idClient` int NOT NULL,
  `nomClient` varchar(255) DEFAULT NULL,
  `prenomClient` varchar(255) DEFAULT NULL,
  `identifiant` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`idClient`, `nomClient`, `prenomClient`, `identifiant`, `mdp`, `mail`) VALUES
(1, 'Emma', 'Dodson', 'Wong', 'TBF71PQB6BO', 'demma@outlook.edu'),
(2, 'Farrah', 'Avery', 'Klein', 'NJP35WLX7SD', 'f-avery5493@hotmail.org'),
(3, 'Stone', 'Kemp', 'Daniels', 'QHM98GVI0LB', 'kemp-stone2096@yahoo.edu'),
(4, 'Virginia', 'Wilder', 'Morgan', 'MVF53PIE8CO', 'virginia-wilder@yahoo.net'),
(5, 'Seth', 'Valenzuela', 'Orr', 'FAR73XWY7EI', 's_valenzuela2623@yahoo.edu');

-- --------------------------------------------------------

--
-- Structure de la table `Hebergement`
--

CREATE TABLE `Hebergement` (
  `idHebergement` int NOT NULL,
  `id_typeHebergement` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Hebergement`
--

INSERT INTO `Hebergement` (`idHebergement`, `id_typeHebergement`) VALUES
(3, 1),
(1, 2),
(5, 2),
(2, 3),
(7, 3),
(4, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE `Reservation` (
  `idReservation` int NOT NULL,
  `dateArrivee` date DEFAULT NULL,
  `dateDepart` date DEFAULT NULL,
  `nbPersonne` int DEFAULT NULL,
  `etatReservation` tinyint(1) DEFAULT NULL,
  `dateReservation` date DEFAULT NULL,
  `pension` tinyint(1) DEFAULT NULL,
  `idHebergement` int DEFAULT NULL,
  `idClient` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Reservation`
--

INSERT INTO `Reservation` (`idReservation`, `dateArrivee`, `dateDepart`, `nbPersonne`, `etatReservation`, `dateReservation`, `pension`, `idHebergement`, `idClient`) VALUES
(1, '2022-01-03', '2022-01-24', 2, 1, '2021-12-28', 0, 1, 1),
(2, '2022-01-01', '2022-01-25', 3, 1, '2021-12-01', 1, 2, 2),
(3, '2022-01-01', '2022-01-27', 5, 1, '2021-12-06', 1, 3, 3),
(4, '2022-01-04', '2022-01-22', 4, 1, '2021-12-28', 0, 4, 4),
(5, '2022-01-01', '2022-01-30', 4, 1, '2021-12-14', 1, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `typeHebergement`
--

CREATE TABLE `typeHebergement` (
  `idType` int NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `descriptionHebergement` varchar(255) DEFAULT NULL,
  `batiment` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `typeHebergement`
--

INSERT INTO `typeHebergement` (`idType`, `libelle`, `descriptionHebergement`, `batiment`) VALUES
(1, 'logement', 'entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon.', 'A'),
(2, 'chambres doubles', 'entrée, douche et wc, 1 lit double', 'B'),
(3, 'chambre triples', '3 lits séparés par une cloison mobile avec coin toilette, wc, douche.', 'C'),
(4, 'chambre quadruples', '4 lits séparés par une cloison mobile avec douche, wc et balcon.', 'D'),
(5, 'logement adapté', 'Pour les personnes à mobilité réduite', 'A');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `Hebergement`
--
ALTER TABLE `Hebergement`
  ADD PRIMARY KEY (`idHebergement`),
  ADD KEY `fk_id_typeHebergement` (`id_typeHebergement`);

--
-- Index pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `fk_id_hebergement` (`idHebergement`),
  ADD KEY `fk_idClient` (`idClient`);

--
-- Index pour la table `typeHebergement`
--
ALTER TABLE `typeHebergement`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `idClient` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Hebergement`
--
ALTER TABLE `Hebergement`
  MODIFY `idHebergement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `idReservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `typeHebergement`
--
ALTER TABLE `typeHebergement`
  MODIFY `idType` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Hebergement`
--
ALTER TABLE `Hebergement`
  ADD CONSTRAINT `fk_id_typeHebergement` FOREIGN KEY (`id_typeHebergement`) REFERENCES `typeHebergement` (`idType`);

--
-- Contraintes pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `fk_id_hebergement` FOREIGN KEY (`idHebergement`) REFERENCES `Client` (`idClient`),
  ADD CONSTRAINT `fk_idClient` FOREIGN KEY (`idClient`) REFERENCES `Client` (`idClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 12:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filmprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `serie_film` int(10) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `genre` varchar(80) NOT NULL,
  `directeur` varchar(80) NOT NULL,
  `date_sortie` varchar(80) NOT NULL,
  `duree` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`serie_film`, `titre`, `genre`, `directeur`, `date_sortie`, `duree`) VALUES
(111, 'Momento  ', 'Mystérie and action ', 'Christophan Nolan  ', '15-09-2003', '1 heure et 30 minutes  '),
(222, 'TENET', 'action', 'Christophan Nolan', '15-09-2023', '1 heure et 30 minutes'),
(888, 'Spider-Man', 'action', 'Stan Lee', '15/20/2022', '2 heures et 38 min');

-- --------------------------------------------------------

--
-- Structure de la table `login_reserve`
--

CREATE TABLE `login_reserve` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `login_reserve`
--

INSERT INTO `login_reserve` (`id`, `name`, `mail`, `password`) VALUES
(1, 'tarek', 'tarekchebbi@gmail.com', 'tarek123'),
(2, 'chebbi', 'chebbitarek@yahoo.fr', 'chebbi'),
(4, 'ahmed', 'ahmedrebah@gmail.com', 'ahmed123');

-- --------------------------------------------------------

--
-- Structure de la table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'tarek', 'tarek', 'tarek');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(20) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `siege_option` varchar(80) NOT NULL,
  `num_ticket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `titre`, `nom`, `email`, `phone`, `siege_option`, `num_ticket`) VALUES
(8, 'TENET', 'ch chebbi Tarek', 'chebbitarek@yahoo.fr', '52664477', 'Balcony', 6),
(9, 'People Who Eat Darkness', 'Tarek', 'chebbitarek@yahoo.fr', '52664477', 'Middle', 2),
(10, 'Momento', 'Levi', 'Levi@gmail.com', '44558877', 'Balcony', 4),
(12, 'Spider-Man', 'Tarek', 'tarekchebbi@yahoo.fr', '52664477', 'Front stage', 3),
(13, 'TENET', 'ch chebbi Tarek', 'chebbitarek@yahoo.fr', '52664477', 'Front stage', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`serie_film`);

--
-- Index pour la table `login_reserve`
--
ALTER TABLE `login_reserve`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `login_reserve`
--
ALTER TABLE `login_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

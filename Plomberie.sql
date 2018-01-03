-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 09 déc. 2017 à 19:26
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Plomberie`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(3000) NOT NULL,
  `writer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`message_id`, `content`, `writer_id`) VALUES
(1, 'Hello world', 1),
(2, 'Hello world', 1),
(4, 'toto', 2);

-- --------------------------------------------------------

--
-- Structure de la table `writers`
--

CREATE TABLE `writers` (
  `writer_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `zipcode` int(10) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `writers`
--

INSERT INTO `writers` (`writer_id`, `firstname`, `lastname`, `zipcode`, `mail`) VALUES
(1, 'yang', 'XU', 59118, 'yangxumailbox@gmail.com'),
(2, 'T1', 'T1', 0, 't1@t1.com'),
(3, 't2', 't2', 59000, 't2@t2.com'),
(4, 'T3', 'T3', 59000, 't3@t3.com'),
(5, 'T3', 'T3', 59000, 't3@t3.com'),
(6, 'T3', 'T3', 59180, 't3@t3.com'),
(7, 'T3', 'T3', 59180, 't3@t3.com'),
(8, 'T3', 'T3', 59000, 't3@t3.com'),
(9, 'T4', 'T4', 59000, 't4@t4.com'),
(10, 'T4', 'T4', 59000, 't4@t4.com'),
(11, 'T4', 'T4', 59000, 't4@t4.com'),
(12, 'T4', 'T4', 59000, 't4@t4.com'),
(13, 'T4', 'T4', 59000, 't4@t4.com'),
(14, 'T4', 'T4', 59000, 't4@t4.com'),
(15, 'T5', 'T5', 59000, 't5@t5.com'),
(16, 'T6', 'T6', 69000, 't6@t6.com'),
(17, 'T6', 'T6', 69000, 't6@t6.com'),
(18, 'T7', 'T7', 70000, 't7@t7.com'),
(19, 'T7', 'T7', 70000, 't7@t7.com'),
(20, 'T7', 'T7', 70000, 't7@t7.com'),
(21, 'T8', 'T8', 80000, 't8@t8.com'),
(22, 'T8', 'T8', 80000, 't8@t8.com'),
(23, 'T4', 'T4', 59000, 't4@t4.com'),
(24, 'T3', 'T3', 59000, 't3@t3.com'),
(25, 'T5', 'T5', 59000, 't5@t5.com'),
(26, 'T8', 'T8', 59000, 't8@t8.com'),
(27, 'T4', 'T4', 59000, 't4@t4.com'),
(28, 'T6', 'T6', 59000, 't6@t6.com'),
(29, 'T3', 'T3', 59000, 't3@t3.com'),
(30, 'T5', 'T5', 59000, 't5@t5.com'),
(31, 'T5', 'T5', 59000, 't5@t5.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Index pour la table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`writer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `writers`
--
ALTER TABLE `writers`
  MODIFY `writer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_MESSAGES` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`);

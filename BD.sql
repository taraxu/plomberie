-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 09 mars 2018 à 20:39
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
(67, 'T', 130),
(68, 'id exist, cp2 replace by 45000', 127),
(69, 'TEST POUR NEW WRITER', 132),
(70, 'NEW WRITER', 133),
(71, 'cp2 ok\r\nid exist', 134),
(72, 'cp2 ok\r\nid exist', 134),
(73, 'id exist\r\ncp2\r\nmessage', 134),
(74, 'id ok, cp ok, test', 134),
(75, 'id exist, cp2 exist', 128),
(76, 'ttttt', 127),
(77, 'ttttt', 127),
(78, 'ttttt', 127),
(79, 'ttttt', 127),
(80, 'ttttt', 127),
(81, 'test message js', 135),
(82, 'test message js', 135),
(83, 'js test', 127),
(84, 'js test with P', 127),
(85, 'js test with P', 127),
(86, 'js test with P', 127),
(87, 'js test with P', 127),
(88, 'js test with P', 127),
(89, 'photo add test', 127),
(90, 'test multiphoto to bdd', 128),
(91, 'T multiphoto', 128),
(92, 'T sans id mult photo', 127),
(93, 'T multi photo bdd', 127),
(94, 't photo bdd', 127),
(95, 'catch id', 137),
(96, 'new id test', 138),
(97, 'photo test', 139),
(98, 'insert photo with id', 140),
(99, 'y4 photo insert', 141),
(100, 'y5', 142),
(101, 'y6', 143),
(102, 'y7', 144),
(103, 'y8', 145),
(104, 'yx new id with photo', 146),
(105, 'yx new id with photo', 146),
(106, 'yh new id', 147),
(107, 'a@a cp2 11000', 127),
(108, 'b@b cp2 11000', 128),
(109, 'ww@ww add cp2', 137),
(110, 'i@i photo doublon test', 148),
(111, 'c@c ', 129),
(112, 'd@d photo doublon ok', 130);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `picture_id` int(10) UNSIGNED NOT NULL,
  `writer_id` int(10) UNSIGNED NOT NULL,
  `photo_name` varchar(256) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`picture_id`, `writer_id`, `photo_name`, `reg_date`) VALUES
(29, 147, 'e1c91e911e3eb3bbd4bb20f8defbf328.jpeg', '2018-03-08 01:03:45'),
(30, 147, '059f61011e2bdd88f419c883383137f5.jpeg', '2018-03-08 01:03:45'),
(31, 147, 'f11e87be69897e331fb48ff8067ee589.', '2018-03-08 01:03:45'),
(32, 147, '25ab08378a0ac69626db6f52fe878052.', '2018-03-08 01:03:45'),
(33, 127, '850ad07b037027359dcdb59a305eab38.jpeg', '2018-03-08 01:11:57'),
(34, 127, '0573c9921d049023fcde6bebc63923f0.jpeg', '2018-03-08 01:11:57'),
(35, 127, '13fe580478b30cbf0bd058e6cc310643.', '2018-03-08 01:11:57'),
(36, 127, '1b281cc8e75f0ef2b20e3b73561fa203.', '2018-03-08 01:11:57'),
(37, 128, '4a5e7c11c5930d899ce30bb7a10c91ed.jpeg', '2018-03-08 01:14:05'),
(38, 128, '8b0434632a64b53b68a55b10939ee595.png', '2018-03-08 01:14:05'),
(39, 128, 'f040001c5cf91f8274d77e222f52bb6f.', '2018-03-08 01:14:05'),
(40, 128, '0061a2a581704c661ad4974d62940157.', '2018-03-08 01:14:05'),
(41, 137, '6b8acd73b1277538b72f77ee1f3e2d1b.', '2018-03-08 01:15:50'),
(42, 137, 'def232befd1a5e454fc3d1dcda68de90.', '2018-03-08 01:15:50'),
(43, 137, '5c13832413413217db8a86eca529a2c3.jpeg', '2018-03-08 01:15:50'),
(44, 137, '174273aa0e680a0dd6c001f1ebe0c4e5.jpeg', '2018-03-08 01:15:50'),
(45, 127, 'aaaa.jpg', '2018-03-08 01:19:25'),
(46, 148, '175c368ae7db395c956f4e42959fefca.', '2018-03-08 01:21:13'),
(47, 129, 'c8ea611235830b79d880d21c7142e63e.jpeg', '2018-03-08 01:26:39'),
(48, 129, '4cc6097d46d88ecd74975299b26c8791.png', '2018-03-08 01:26:39'),
(49, 129, '440530533fe535ccea99e21e0b9440f3.', '2018-03-08 01:26:39'),
(50, 129, '3428004eca002c08eeda27cb7bb321db.jpg', '2018-03-08 01:26:39'),
(51, 130, '5f4d1ef58892759d5fe3bf11789cf2d3.jpeg', '2018-03-08 01:30:03'),
(52, 130, 'c70cb595c2ebdd388e3bfae19dedd476.jpeg', '2018-03-08 01:30:03');

-- --------------------------------------------------------

--
-- Structure de la table `writers`
--

CREATE TABLE `writers` (
  `writer_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `zipcode` int(10) UNSIGNED NOT NULL,
  `zipcode2` int(10) UNSIGNED DEFAULT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `writers`
--

INSERT INTO `writers` (`writer_id`, `firstname`, `lastname`, `zipcode`, `zipcode2`, `mail`) VALUES
(127, 'a', 'a', 59000, 21000, 'a@a.com'),
(128, 'b', 'b', 59000, 11000, 'b@b.com'),
(129, 'c', 'c', 59000, 20000, 'c@c.com'),
(130, 'd', 'd', 59000, 11000, 'd@d.com'),
(131, 'e', 'e', 59000, 59118, 'e@e.com'),
(132, 'f', 'f', 59000, 59118, 'f@f.com'),
(133, 'g', 'g', 59000, 59118, 'g@g.com'),
(134, 'h', 'h', 59000, 59118, 'h@h.com'),
(135, 'Romain', 'DISNEUR', 59000, NULL, 'monplombierbienaime@gmail.com'),
(136, 'Général', 'Leclerc', 59118, NULL, 'g@leclerc.com'),
(137, 'ww', 'ww', 90000, 11000, 'ww@ww.fr'),
(138, 'Yang', 'Xu', 26000, NULL, 'yxu@gmail.com'),
(139, 'y2', 'y2', 26000, NULL, 'y2@y2.fr'),
(140, 'y3', 'y3', 59118, NULL, 'y3@y3.com'),
(141, 'y4', 'y4', 59118, NULL, 'y4@y4.com'),
(142, 'y5', 'y5', 59118, NULL, 'y5@y5.com'),
(143, 'y6', 'y6', 59118, NULL, 'y6@y6.com'),
(144, 'y7', 'y7', 59118, NULL, 'y7@y7.com'),
(145, 'y8', 'y8', 59118, NULL, 'y8@y8.com'),
(146, 'yx', 'yx', 59118, NULL, 'yx@yx.com'),
(147, 'yh', 'yh', 59118, NULL, 'yh@yh.com'),
(148, 'i', 'i', 59340, NULL, 'i@i.fr');

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
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`picture_id`),
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
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `picture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `writers`
--
ALTER TABLE `writers`
  MODIFY `writer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_MESSAGES` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `FK_PHOTOS` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

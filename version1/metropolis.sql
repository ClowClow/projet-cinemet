-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 13 Mai 2019 à 12:07
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `metropolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTEUR`
--

CREATE TABLE `ACTEUR` (
  `id_acteur` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Presentation` text NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Appartenir`
--

CREATE TABLE `Appartenir` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Avoir`
--

CREATE TABLE `Avoir` (
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `FILM`
--

CREATE TABLE `FILM` (
  `id_film` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Date_de_sortie` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_realisateur` int(11) DEFAULT NULL,
  `id_acteur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FILM`
--

INSERT INTO `FILM` (`id_film`, `Titre`, `Description`, `Date_de_sortie`, `image`, `id_realisateur`, `id_acteur`) VALUES
(1, 'Avengers-Endgame', 'Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel.', '2019-04-24', 'avengers.jpg', NULL, 0),
(2, 'Captain Marvel', 'Captain Marvel raconte l’histoire de Carol Danvers qui va devenir l’une des super-héroïnes les plus puissantes de l’univers lorsque la Terre se révèle l’enjeu d’une guerre galactique entre deux races extraterrestres.', '2019-03-06', 'marvel.jpg', NULL, 0),
(3, 'Shazam!', 'On a tous un super-héros qui sommeille au fond de soi… il faut juste un peu de magie pour le réveiller. Pour Billy Batson, gamin débrouillard de 14 ans placé dans une famille d\'accueil, il suffit de crier \"Shazam !\" pour se transformer en super-héros.\r\nAdo dans un corps d\'adulte sculpté à la perfection, Shazam s\'éclate avec ses tout nouveaux superpouvoirs. Est-il capable de voler ? De voir à travers n\'importe quel type de matière ? De faire jaillir la foudre de ses mains ? Et de sauter son examen de sciences sociales ? Shazam repousse les limites de ses facultés avec l\'insouciance d\'un enfant. Mais il lui faudra maîtriser rapidement ses pouvoirs pour combattre les forces des ténèbres du Dr Thaddeus Sivana…', '2019-04-03', 'shazam.jpg', NULL, 0),
(4, 'La malédiction de la dame blanche', 'La Dame Blanche. Spectre terrifiant, pris en étau entre le paradis et l\'enfer, piégé par un terrible destin dont elle est elle-même l\'artisan. La seule évocation de son nom sème la terreur dans le monde depuis des siècles. Quand elle était en vie, elle a noyé ses enfants dans un accès de folle jalousie, puis, dévastée par le chagrin, elle s\'est jetée dans le fleuve déchaîné.\r\nDésormais, ses larmes sont devenues éternelles. Elles sont même mortelles et tous ceux qui entendent ses appels sinistres la nuit sont maudits. Tapie dans l\'ombre, la Dame Blanche s\'attaque aux enfants, cherchant désespérément à remplacer les siens. Au fil des siècles, elle est devenue de plus en plus prédatrice… et ses méthodes de plus en plus terrifiantes.\r\nLos Angeles, années 1970. La Dame Blanche hante la nuit… et les enfants.\r\nIgnorant les avertissements d\'une mère soupçonnée de violence sur mineurs, une assistante sociale et ses enfants sont projetés dans un monde surnaturel des plus effrayants. Pour espérer survivre à la fureur mortelle de la Dame Blanche, leur seul recours est un prêtre désabusé et ses pratiques mystiques destinées à repousser les forces du mal… à la frontière où la peur et la foi se rencontrent…\r\nMéfiez-vous de ses pleurs glaçants… Elle est prête à tout pour vous entraîner vers les ténèbres. Car sa douleur ne connaît pas de répit – son âme tourmentée n\'a pas droit au repos. Et il n\'existe aucun moyen d\'échapper à la malédiction de la Dame Blanche.', '2019-04-17', '', NULL, 0),
(5, 'Royal Corgi', 'Les aventures de Rex, le chien préféré de Sa Majesté, qui perd son statut de favori et se retrouve perdu dans un chenil au milieu de chiens abandonnés. Sa quête pour retourner à Buckingham et retrouver les faveurs de la Reine l\'amènera à affronter de nombreux dangers mais aussi à rencontrer l’amour.', '2019-04-10', '', NULL, 0),
(6, 'L\'incroyable aventure de Bella', 'L\'incroyable voyage d\'un chien prêt à parcourir plus de 600 km pour retrouver son maître, un jeune étudiant en médecine.', '2019-04-10', '', NULL, 0),
(7, 'Dumbo', 'Les enfants de Holt Farrier, ex-artiste de cirque chargé de s’occuper d’un éléphanteau dont les oreilles démesurées sont la risée du public, découvrent que ce dernier sait voler...', '2019-03-27', '', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `GENRE`
--

CREATE TABLE `GENRE` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `REALISATEUR`
--

CREATE TABLE `REALISATEUR` (
  `id_realisateur` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Presentation` text NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD PRIMARY KEY (`id_genre`,`id_film`),
  ADD KEY `Appartenir_FILM0_FK` (`id_film`);

--
-- Index pour la table `Avoir`
--
ALTER TABLE `Avoir`
  ADD PRIMARY KEY (`id_acteur`,`id_film`),
  ADD KEY `Avoir_FILM0_FK` (`id_film`);

--
-- Index pour la table `FILM`
--
ALTER TABLE `FILM`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `FILM_REALISATEUR_FK` (`id_realisateur`);

--
-- Index pour la table `GENRE`
--
ALTER TABLE `GENRE`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `REALISATEUR`
--
ALTER TABLE `REALISATEUR`
  ADD PRIMARY KEY (`id_realisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `FILM`
--
ALTER TABLE `FILM`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `GENRE`
--
ALTER TABLE `GENRE`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `REALISATEUR`
--
ALTER TABLE `REALISATEUR`
  MODIFY `id_realisateur` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD CONSTRAINT `Appartenir_FILM0_FK` FOREIGN KEY (`id_film`) REFERENCES `FILM` (`id_film`),
  ADD CONSTRAINT `Appartenir_GENRE_FK` FOREIGN KEY (`id_genre`) REFERENCES `GENRE` (`id_genre`);

--
-- Contraintes pour la table `Avoir`
--
ALTER TABLE `Avoir`
  ADD CONSTRAINT `Avoir_ACTEUR_FK` FOREIGN KEY (`id_acteur`) REFERENCES `ACTEUR` (`id_acteur`),
  ADD CONSTRAINT `Avoir_FILM0_FK` FOREIGN KEY (`id_film`) REFERENCES `FILM` (`id_film`);

--
-- Contraintes pour la table `FILM`
--
ALTER TABLE `FILM`
  ADD CONSTRAINT `FILM_REALISATEUR_FK` FOREIGN KEY (`id_realisateur`) REFERENCES `REALISATEUR` (`id_realisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

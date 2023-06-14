-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 juin 2023 à 12:06
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pretooty`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'clé'),
(2, 'couper'),
(3, 'frapper'),
(4, 'tracer'),
(5, 'manutention'),
(6, 'mesurer'),
(7, 'poncer'),
(8, 'jardiner'),
(9, 'attacher'),
(10, 'percer'),
(11, 'pincer'),
(12, 'équipement de protection individuelle'),
(13, 'peindre'),
(14, 'visser'),
(15, 'souder');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_u`
--

CREATE TABLE `categorie_u` (
  `id_categorie_u` int(11) NOT NULL,
  `nom_categorie_u` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie_u`
--

INSERT INTO `categorie_u` (`id_categorie_u`, `nom_categorie_u`) VALUES
(1, 'professionnel'),
(2, 'particulier');

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `id_disponibilite` int(11) NOT NULL,
  `date_debut_dispo` date DEFAULT NULL,
  `date_fin_dispo` date DEFAULT NULL,
  `id_outil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id_disponibilite`, `date_debut_dispo`, `date_fin_dispo`, `id_outil`) VALUES
(1, '2023-06-01', '2023-06-15', 1),
(2, '2023-06-10', '2023-06-17', 5),
(3, '2023-06-10', '2023-06-11', 2);

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `id_emprunt` int(11) NOT NULL,
  `date_debut_emprunt` date DEFAULT NULL,
  `date_fin_emprunt` date DEFAULT NULL,
  `note_pret` int(11) DEFAULT NULL,
  `comm_pret` varchar(250) DEFAULT NULL,
  `etat_outil_pret` int(11) NOT NULL,
  `note_empr` int(11) DEFAULT NULL,
  `comm_empr` varchar(250) DEFAULT NULL,
  `etat_outil_empr` int(11) NOT NULL,
  `id_outil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id_emprunt`, `date_debut_emprunt`, `date_fin_emprunt`, `note_pret`, `comm_pret`, `etat_outil_pret`, `note_empr`, `comm_empr`, `etat_outil_empr`, `id_outil`) VALUES
(1, '2023-06-10', '2023-06-11', NULL, NULL, 7, NULL, NULL, 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `etat_outil`
--

CREATE TABLE `etat_outil` (
  `id_etat_outil` int(11) NOT NULL,
  `nom_etat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etat_outil`
--

INSERT INTO `etat_outil` (`id_etat_outil`, `nom_etat`) VALUES
(1, 'usagé'),
(2, 'mauvais'),
(3, 'bon'),
(4, 'très bon'),
(5, 'comme neuf'),
(6, 'neuf'),
(7, 'à renseigner à la fin du prêt');

-- --------------------------------------------------------

--
-- Structure de la table `outil`
--

CREATE TABLE `outil` (
  `id_outil` int(11) NOT NULL,
  `nom_outil` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `outil`
--

INSERT INTO `outil` (`id_outil`, `nom_outil`, `description`, `photo`, `id_utilisateur`, `id_categorie`) VALUES
(1, 'Marteau perforateur skil', 'Utilisation : L’outil est conçu pour le martelage dans le béton, la brique et dans la pierre naturelle ainsi que pour d’autres travaux de burinage légers, pour le perçage dans le bois, le métal et les matières plastiques ainsi que pour le vissage avec des accessoires spécifiques.\r\nConsignes de sécurité :\r\nPorter des lunettes de protection.\r\nTenir fermement l’outil et garder une position stable.\r\nPorter un casque anti-bruit.\r\nFixer solidement la pièce à travailler.\r\nSélectionner le mode de fonctionnement seulement lorsque l’outil n’est pas sous tension.\r\nAccessoires fournis avec l’outil :\r\nBoite de mèches pour perfo inclus à l’achat\r\nAdaptateur SDS\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Marteau perforateur Skil.jpg', 1, 10),
(2, 'Scie circulaire sans fil bosch', 'Utilisation : Outil conçu pour réaliser sur un support stable des coupes dans le bois.\r\nConsignes de sécurité :\r\nNe pas approcher les mains de la zone de coupe et de la lame.\r\nAjuster la profondeur de découpe à l’épaisseur de la pièce à travailler.\r\nToujours placer la pièce à découper sur un support stable.\r\nBien maintenir la scie avec les deux mains et toujours se placer d’un des côtés de la lame, et non dans son alignement.\r\nBloquer la pièce à travailler.\r\nNe pas sciez des métaux ferreux.\r\nPorter un masque anti-poussière, des lunettes de protection.\r\nAccessoires fournis avec l’outil :\r\nUne batterie et un chargeur.\r\nDes lunettes de protection.\r\nUne butée parallèle\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Scie circulaire sans fil bosch.jpg', 3, 2),
(3, 'Perceuse percussion visseuse sans fil', 'Utilisation : l’outil est conçu pour le perçage avec percussion dans la brique, la maçonnerie en briques et la maçonnerie. Il convient aussi pour le vissage et perçage sans percussion dans le bois, le métal, la céramique et le plastique.\r\nConsignes de sécurité :\r\nPorter un casque anti-bruit.\r\nTenir fermement l’outil.\r\nNe pas toucher le foret ou la pièce immédiatement après son utilisation, ils peuvent être extrêmement chaud.\r\nPour le perçage utiliser les forets qui conviennent à la matière à percer (ex : pour du métal utiliser un foret pour le métal).\r\nAccessoires fournis avec l’outil :\r\nBatteries et chargeur.\r\nBoite d’embout foret\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Perceuse percussion visseuse sans fil.jpg', 3, 10),
(4, 'Ponceuse orbitale pour plaques de plâtre', 'Utilisation : Pour poncer le plâtre et les plaques de plâtres (murs, sous-pente, plafonds).\r\nDescription du produit :\r\nOutils très maniable et léger pour un travail en toute sécurité. Il dispose d’un système d\'évacuation des poussières qui se raccorde à l’aspirateur. Il possède un variateur de vitesse pour réguler le travail du ponçage. Fourni avec deux adaptateurs et un flexible de 3m pour une grande liberté de mouvement. Ouverture du carter pour un ponçage d’angle. Il existe différentes vitesses.\r\nConsigne de sécurité :\r\nAttention à l’effet d’aspiration.\r\nPorter des lunettes de sécurité et un casque anti-bruit.\r\nTenir l’outil fermement et bien à plat lors de son utilisation.\r\nAccessoires fournis avec l’outil :\r\nUn disque pour poncer.\r\nUn raccord aspirateur.\r\nUne poignée amovible.\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Ponceuse orbitale pour plaques de plâtre.jpg', 3, 7),
(5, 'Scie sauteuse makita', 'Utilisation :\r\nL’outil est conçu pour la coupe des matériaux de bois, de plastique et de métal. Tout dépend de la lame utiliser pour la coupe. Particulièrement adéquat pour une coupe circulaire et des lignes incurvées, arrondies.\r\nConsignes de sécurité :\r\nIl est possible d’accorder un aspirateur à la scie afin de collecter la poussière.\r\nUtiliser un dispositif de serrage pour fixer la pièce à découper sur une surface de travail stable.\r\nPorter des lunettes de sécurité.\r\nNe pas couper des pièces trop grandes.\r\nToujours vérifier qu’il y ait assez d’espace sous la pièce à découper pour que la lame ne heurte aucune surface (sol, établi etc.).\r\nPorter un masque anti-poussière.\r\nTenir l’outil fermement.\r\nBien régler la scie en fonction de la coupe désirée (ligne droite, petite orbite, orbite moyenne, grande orbite) et du matériau à couper (bois, acier doux, acier inoxydable, aluminium, plastique).\r\nBien utiliser la lame en la mettant dans le bon sens.\r\nAccessoires fournis avec l’outil :\r\nLames de scie sauteuse x2\r\nLunette de protection\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Scie sauteuse makita.jpg', 3, 2),
(6, 'Ponceuse à bande', 'Utilisation : L’outil est conçu pour le ponçage à sec de surface en bois, matières plastiques, métal, mastic et surfaces vernies. Les bandes abrasives doivent être choisies en fonction du matériau à poncer et de l’enlèvement de la matière souhaité.\r\nConsignes de sécurité :\r\nPorter des lunettes de protection.\r\nBien tenir l’outil et maintenir une pression constante lors de son utilisation pour avoir un ponçage égal.\r\nPorter un casque anti-bruit.\r\nLors du ponçage de certains types de produits, l’utilisateur de l’outil peut être exposé çà des substances chimiques dangereuses, veillez à porter un masque anti-poussière.\r\nAccessoires fournis avec l’outil :\r\nUne bande pour poncer.\r\nBoitier microfibre pour la poussière\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Ponceuse à bande.jpg', 1, 7),
(7, 'Ponceuse excentrique Makita', 'Utilisation : L’outil est conçu pour le ponçage de grandes surfaces de bois, de plastique et de métal, ainsi que des surfaces peintes.\r\nConsignes de sécurité :\r\nPorter des lunettes de protection.\r\nTenir l’outil fermement.\r\nLors du ponçage de certains types de produits, l’utilisateur de l’outil peut être exposé çà des substances chimiques dangereuses, veillez à porter un masque anti-poussière.\r\nToujours vérifier que l’outil est hors tension avant de le brancher, c’est-à-dire qu’il est en mode off.\r\nAvant d’utiliser l’outil attendre qu’il ait atteint sa pleine vitesse.\r\nExercer une légère pression sur l’outil. Ne jamais exercer une trop grande pression cela peut causer une diminution de l’efficacité du ponçage, l’endommagement du disque de ponçage.\r\nRégler la vitesse en fonction du ponçage désiré (plage A = polissage, plage B = ponçage fin, plage C = ponçage ordinaire).\r\nAccessoires fournis avec l’outil :\r\nUn disque pour poncer.\r\nUn sac à poussière.\r\nEtat de l’outil : neuf', 'C:\\xampp\\htdocs\\pretooty\\img\\Ponceuse excentrique Makita.jpg', 3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id_statut` int(11) NOT NULL,
  `nom_statut` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `nom_statut`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `taille_police`
--

CREATE TABLE `taille_police` (
  `id_taille_police` int(11) NOT NULL,
  `nom_taille` varchar(50) NOT NULL,
  `titres_1` int(11) NOT NULL,
  `titres_2` int(11) NOT NULL,
  `titres_3` int(11) NOT NULL,
  `titres_4` int(11) NOT NULL,
  `titres_5` int(11) NOT NULL,
  `titres_6` int(11) NOT NULL,
  `textes_1` int(11) NOT NULL,
  `textes_2` int(11) NOT NULL,
  `textes_3` int(11) NOT NULL,
  `textes_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `taille_police`
--

INSERT INTO `taille_police` (`id_taille_police`, `nom_taille`, `titres_1`, `titres_2`, `titres_3`, `titres_4`, `titres_5`, `titres_6`, `textes_1`, `textes_2`, `textes_3`, `textes_4`) VALUES
(1, 'Petite', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Moyenne', 30, 24, 20, 16, 14, 12, 20, 18, 16, 14),
(3, 'Grande', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Très grande', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `nom_theme` varchar(50) NOT NULL,
  `couleur1` varchar(10) DEFAULT NULL,
  `couleur2` varchar(10) DEFAULT NULL,
  `couleur3` varchar(50) DEFAULT NULL,
  `couleur4` varchar(10) DEFAULT NULL,
  `couleur5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `nom_theme`, `couleur1`, `couleur2`, `couleur3`, `couleur4`, `couleur5`) VALUES
(1, 'Pretooty', '#3C5E68', '#33A4B2', '#FFFDF9', '#CCC9CB', '#6D6E6F'),
(2, 'Nuit', NULL, NULL, NULL, NULL, NULL),
(3, '', NULL, NULL, NULL, NULL, NULL),
(4, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `id_provisoire` varchar(50) NOT NULL,
  `pseudonyme` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `id_theme` int(11) NOT NULL,
  `id_police` int(11) NOT NULL,
  `id_statut` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` int(15) NOT NULL,
  `categorie_u` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `id_provisoire`, `pseudonyme`, `mail`, `mdp`, `ville`, `id_theme`, `id_police`, `id_statut`, `nom_utilisateur`, `prenom_utilisateur`, `tel`, `adresse`, `cp`, `categorie_u`) VALUES
(1, '', 'Lodipuce', 'lodipuce@coucou.fr', '$2y$10$wEyUf1PMXCbTj/qSU/oEEu8GIaPRwOZp./Xb1QHTr80.E8hzqwNxS', 'Poitiers', 1, 0, 2, '', '', '0', '', 0, 0),
(2, '', 'Bricoltou', 'bricoltou@gmail.com', '******************', 'Poitiers', 1, 0, 1, '', '', '0', '', 0, 0),
(3, '', 'Bricoleur du Dimanche', 'bricoleurdudimanche@yahou.fr', '************', 'Biard', 1, 0, 2, '', '', '0', '', 0, 0),
(4, '', 'Antoinelepro', 'leprodelareno@antoinereno.fr', '***********************', 'Chasseneuil du Poitou', 4, 0, 2, '', '', '0', '', 0, 0),
(5, '', 'debutanteMotivee', 'debutantemotivee@orange.fr', '*******', 'Poitiers', 3, 0, 2, '', '', '0', '', 0, 0),
(6, '', 'Jul', 'jul@popo.gg', '$2y$10$jQ0mC06ieHev5Hl4vBZO/OeuDtr0wg2PgA3tTyJ6VFbZSWSPFKwOe', '', 1, 0, 2, '', '', '0', '', 0, 0),
(9, '', 'maddy', 'elodie-thierry@orange.com', '$2y$10$m.zcwo8gB9LGU4fTUSYDFe7GU4KktDFRgdv7KOznAAKyd4garIIQe', '', 1, 0, 2, '', '', '0', '', 0, 0),
(10, '', 'maddyf', 'elodie-thierry@orange.ch', '$2y$10$fMksGhfZchWjkb4T0vCOMe97dKMRtOX5seXZRoes23RBg0Qw19apq', '', 1, 0, 2, '', '', '0', '', 0, 0),
(11, '', 'Dave', 'dave@toto.fr', '$2y$10$sttD5tN7RGLEpAe8mR0veemari1E0KMiehqMwPloY991Fu6XgqYmm', '', 1, 0, 2, '', '', '0', '', 0, 0),
(12, '', 'EA', 'eangenard@deastanceservices.fr', '$2y$10$X6nhBx7HUVmI1KQBmuEfCOknT68pAqYqqQuMEDzjRu/oLRweJn2Pa', '', 1, 0, 2, '', '', '0', '', 0, 0),
(13, '', 'marty', 'marty@toutou.fr', '$2y$10$A28azzCd5pFfF81hJdyVge54AiJBh0k.5t3oyn6RFm3LHi6E.D/xW', 'Nieuil L\'Espoir', 1, 0, 2, 'Angenard', 'Marty', '05 49 53 17 10', '13 rue des cèdres', 86340, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `categorie_u`
--
ALTER TABLE `categorie_u`
  ADD PRIMARY KEY (`id_categorie_u`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD PRIMARY KEY (`id_disponibilite`),
  ADD KEY `id_outil` (`id_outil`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`id_emprunt`),
  ADD KEY `id_outil` (`id_outil`),
  ADD KEY `etat_outil_empr_fk` (`etat_outil_empr`),
  ADD KEY `etat_outil_pret_fk` (`etat_outil_pret`);

--
-- Index pour la table `etat_outil`
--
ALTER TABLE `etat_outil`
  ADD PRIMARY KEY (`id_etat_outil`);

--
-- Index pour la table `outil`
--
ALTER TABLE `outil`
  ADD PRIMARY KEY (`id_outil`),
  ADD UNIQUE KEY `id_outil` (`id_outil`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id_statut`);

--
-- Index pour la table `taille_police`
--
ALTER TABLE `taille_police`
  ADD PRIMARY KEY (`id_taille_police`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `pseudonyme` (`pseudonyme`),
  ADD KEY `id_theme` (`id_theme`),
  ADD KEY `id_statut` (`id_statut`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `categorie_u`
--
ALTER TABLE `categorie_u`
  MODIFY `id_categorie_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  MODIFY `id_disponibilite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `id_emprunt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etat_outil`
--
ALTER TABLE `etat_outil`
  MODIFY `id_etat_outil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `outil`
--
ALTER TABLE `outil`
  MODIFY `id_outil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id_statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `taille_police`
--
ALTER TABLE `taille_police`
  MODIFY `id_taille_police` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

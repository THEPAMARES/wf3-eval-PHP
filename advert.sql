-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 15:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_pamela`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `postal_code` int(5) UNSIGNED ZEROFILL NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `reservation_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'Vente studio', 'Studio avec vue exceptionnelle - 75006 - Odéon / Saint-Michel. Face à l\'école de médecine, à proximité immédiate des transports et des commerces, au dernier étage avec ascenseur d\'un bel immeuble pierre de taille, venez découvrir ce charmant studio avec une vue imprenable sur de nombreux monuments parisiens (Tour Eiffel, Panthéon, Invalides...). ', 75006, 'PARIS', 'VENTE', '179 000€', 'IYFUVKH.'),
(3, 'Michigan Garden', 'DÉBUT DES VENTES // inscrivez-vous pour prendre rendez-vous avec votre conseiller ! C\'est au pied du métro parisien (arrêt Bibliothèque François Mitterrand) qu\'ICADE a choisi de réaliser une résidence neuve à l\'architecture moderne composée d\' appartements neufs du studio au 5P aux prestations soignées pour votre bien-être. Idéal pour habiter ou investir . La résidence vous ouvre les portes d\'un cadre de vie privilégié. ', 75013, 'PARIS', 'VENTE', '397 400€', ''),
(4, 'Appartement 2 pièces 10m²', 'Charmant studio pour 2 personnes à Saint-Germain-des-Près. ', 75006, 'PARIS', 'LOCATION', '1 366€ par mois charges comprises', ''),
(5, 'Appartement meublé 2 pièces 85 m²', 'Appartement meublé. Télévision avec barre son. Visite virtuelle disponible.Consultez d\'autres annonces similaires sur notre site Paris Rental.Pour une location d\'un an à trois ans, les honoraires représentent 10% du loyer annuel.Pour une location de moins d\'un an, les honoraires représentent un mois de loyer.', 75006, 'PARIS', 'LOCATION', '3 200€ par mois charges comprises', ''),
(6, 'Appartement 5 pièces 160 m²', 'Appartement familial avec beaux volumes, 3 chambres. Appartement d\'une surface de 160 m² situé au deuxième étage d\'un bel immeuble datant du XVIIIe siècle. En parfait état, exposé est-ouest, il se compose d\'une entrée, d\'une double réception, d\'une vaste salle à manger, d\'une cuisine équipée, de trois chambres, d\'un dressing, d\'une salle de bains avec toilettes, d\'une buanderie, d\'une salle de douche et toilettes séparés. Une cave et un local vélo complètent ce bien.', 75006, 'PARIS', 'VENTE', '2 750 000€', ''),
(7, 'Duplex 4 pièces 107 m²', 'Situé rue Saint-André des Arts, dans un bel immeuble du XIXème siècle, dans l\'esprit d\'une Maison, un appartement en DUPLEX donnant sur une grande cour intérieure, à l\'entresol et au 1er étage.', 75006, 'PARIS', 'VENTE', '1 490 000€', ''),
(8, 'Appartement 2 pièces 38 m²', 'Paris 6 - Monnaie - Rénové - Beaux Volumes - Calme et lumineux. Au cœur du quartier de la Monnaie, à deux pas des quais de Seine, au 3ème étage par escalier d\'une très belle copropriété ancienne bien entretenue, un appartement deux pièces de 37,64m2 carrez et 38.36m² au sol composé comme suit : une pièce de vie avec cuisine ouverte, une chambre et une salle de douche avec WC.', 75006, 'PARIS', 'VENTE', '625 000€', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

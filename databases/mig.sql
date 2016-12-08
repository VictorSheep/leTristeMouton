
DROP DATABASE IF EXISTS db_ltm;

--
-- Base de données :  `db_le_triste_mouton`
--
CREATE DATABASE `db_ltm`;

use `db_ltm`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `articles`
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pour la table `articles`
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


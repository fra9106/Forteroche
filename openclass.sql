-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 14 oct. 2019 à 08:59
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `openclass`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `signalement` tinyint(1) NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_billet`, `id_user`, `comment`, `signalement`, `comment_date`) VALUES
(1, 7, 2, 'Très belle prose monsieur l\'écrivain...', 0, '2019-10-14 10:52:24');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Chapitre : 1', 'Paris, 20 avril 185..\r\nVoici la seconde soirée que je passe dans cette misérable chambre à regarder d’un oeil morne mon foyer vide, écoutant stupidement les murmures et les roulements monotones de la rue, et me sentant, au milieu de cette grande ville, plus seul, plus abandonné et plus voisin du désespoir que le naufragé qui grelotte en plein Océan sur sa planche brisée. – C’est assez de lâcheté ! Je veux regarder mon destin en face pour lui ôter son air de spectre : je veux aussi ouvrir mon coeur, où le chagrin déborde, au seul confident dont la pitié ne puisse m’offenser, à ce pâle et dernier ami qui me regarde dans ma glace. – Je veux donc écrire mes pensées et ma vie, non pas avec une exactitude quotidienne et puérile, mais sans omission sérieuse, et surtout sans mensonge. J’aimerai ce journal : il sera comme un écho fraternel qui trompera ma solitude, il me sera en même temps comme une seconde conscience.', '2019-10-14 10:38:27'),
(2, 'Chap 2 : Et rebelotte...', 'Je cherche maintenant dans le passé avec une triste avidité tous les faits, tous les incidents qui dès longtemps auraient dû m’éclairer, si le respect filial, l’habitude et l’indifférence d’un oisif heureux n’avaient fermé mes yeux à toute lumière. Cette mélancolie constante et profonde de ma mère m’est expliquée ; je m’explique encore son dégoût du monde, et ce costume simple et uniforme, objet tantôt de railleries, tantôt du courroux de mon père : – Vous avez l’air d’une servante, lui disait-il.\r\nJe ne pouvais me dissimuler que notre vie de famille ne fût quelquefois troublée par des querelles d’un caractère plus sérieux : mais je n’en étais jamais directement témoin. Les accents irrités et impérieux de mon père, les murmures d’une voix qui paraissait supplier, des sanglots étouffés, c’était tout ce que j’en pouvais entendre. J’attribuais ces orages à des tentatives violentes et infructueuses pour ramener ma mère au goût de la vie élégante et bruyante qu’elle avait aimée.', '2019-10-14 10:40:37'),
(3, 'Chap 3 : Que du bonheur !', 'J’étais alors un fat, très enflé de mon nom, de ma jeune importance et de mes petits succès de salon ; mais j’avais le coeur sain, j’adorais ma mère, avec laquelle j’avais vécu pendant vingt ans dans la plus étroite intimité qui puisse unir deux âmes en ce monde : je courus l’assurer de mon obéissance ; elle me remercia en inclinant le tête avec un triste sourire, et me fit embrasser ma soeur endormie sur ses genoux.\r\nNous demeurions à une demi-lieue de Grenoble ; je pus donc suivre un cours de droit sans quitter le logis paternel. Ma mère se faisait rendre compte jour par jour du progrès de mes études avec un intérêt si persévérant, si passionné, que j’en vins à me demander s’il n’y avait pas au fond de cette préoccupation extraordinaire quelque chose de plus qu’une fantaisie maladive : si, par hasard, la répugnance et le dédain de mon père pour le côté positif et ennuyeux de la vie n’avaient pas introduit dans notre fortune quelque secret désordre que la connaissance du droit et l’habitude des affaires.', '2019-10-14 10:42:04'),
(4, 'Chap 4 : C\'est lundi !', 'La santé de ma mère cependant déclinait sur une pente à peine sensible, mais continue. Il arriva un temps où ce caractère angélique s’altéra. Cette bouche, qui n’avait jamais eu que de douces paroles, en ma présence du moins, devint amère et agressive ; chacun de mes pas hors du château fut l’objet d’un commentaire ironique. Mon père, qui n’était pas plus épargné que moi, supportait ces attaques avec une patience qui de sa part me paraissait méritoire ; mais il prit l’habitude de vivre plus que jamais hors de chez lui, éprouvant, me disait-il, le besoin de se distraire, de s’étourdir sans cesse. Il m’engageait toujours à l’accompagner ; et trouvait dans mon amour du plaisir, dans l’ardeur impatiente de mon âge, et, pour dire tout, dans la lâcheté de mon coeur, une trop facile obéissance.\r\nUn jour du mois de septembre 185., des courses dans lesquelles mon père avait engagé plusieurs chevaux devaient avoir lieu sur un emplacement situé à quelque distance du château.', '2019-10-14 10:42:51'),
(5, 'Chap 5 : Une belle bolée!', 'Nous étions partis de grand matin, mon père et moi, et nous avions déjeuné sur le théâtre de la course. Vers le milieu de la journée, comme je galopais sur la lisière de l’hippodrome pour suivre de plus près les péripéties de la lutte, je fus rejoint tout à coup par un de nos domestiques, qui me cherchait, me dit-il, depuis plus d’une demi-heure : il ajouta que mon père était déjà retourné au château, où ma mère l’avait fait appeler, et où il me priait de le suivre sans retard. – Mais qu’y a-t-il, au nom du ciel ? – Je crois que madame est plus mal, me répondit cet homme. Et je partis comme un fou.\r\nEn arrivant, je vis ma soeur qui jouait sur la pelouse, au milieu de la grande coeur silencieuse et déserte. Elle accourut au-devant de moi, comme je descendais de cheval, et me dit en m’embrassant, avec un air de mystère affairé et presque joyeux : « Le curé est venu ! » Je n’apercevais pourtant dans la maison aucune animation extraordinaire, aucun signe de désordre ou d’alarme. Je gravis l’escalier à la hâte, et je traversai le boudoir qui communiquait à la chambre de ma mère, quand la porte s’ouvrit...', '2019-10-14 10:43:43'),
(6, 'Chap 6 : Promenade viviante !', 'Je n’ai pu encore sonder jusqu’au fond l’abîme où nous sommes engloutis. Une semaine après la mort de mon père, je tombai gravement malade, et c’est à peine si, après deux mois de souffrance, j’ai pu quitter notre château patrimonial le jour où un étranger en prenait possession. Heureusement un vieil ami de ma mère qui habite Paris, et qui était chargé autrefois des affaires de notre famille en qualité de notaire, est venu à mon aide dans ces tristes circonstances : il m’a offert d’entreprendre lui-même un travail de liquidation qui présentait à mon inexpérience des difficultés inextricables. Je lui ai abandonné absolument le soin de régler les affaires de la succession, et je présume que sa tâche est aujourd’hui terminée. À peine arrivé hier matin, j’ai couru chez lui : il était à la campagne, d’où il ne doit revenir que demain. Ces deux journées ont été cruelles : l’incertitude est vraiment le pire de tous les maux, parce qu’il est le seul qui suspende nécessairement les ressorts de l’âme et qui ajourne le courage.', '2019-10-14 10:44:33'),
(7, 'Chap 7 : On est parti !', 'À six heures, j’étais rue Cassette, chez M. Laubépin. Je ne sais quel âge peut avoir notre vieil ami ; mais, aussi loin que remontent mes souvenirs dans le passé, je l’y retrouve tel que je l’ai revu aujourd’hui, grand, sec, un peu voûté, cheveux blancs en désordre, oeil perçant sous des touffes de sourcils noirs, une physionomie robuste et fine tout à la fois. J’ai revu en même temps l’habit noir d’une coupe antique, la cravate blanche professionnelle, le diamant héréditaire au jabot, – bref, tous les signes extérieurs d’un esprit grave, méthodique et ami des traditions. Le vieillard m’attendait devant la porte ouverte de son petit salon : après une profonde inclination, il a saisi légèrement ma main entre deux doigts, et m’a conduit en face d’une vieille dame d’apparence assez simple qui se tenait debout devant la cheminée : M. le marquis de Champcey d’Hauterive ! a dit alors M. Laubépin de sa voix forte, grasse et emphatique.\r\nNous nous sommes assis, et il y a eu un moment de silence embarrassé. Je m’étais attendu à un éclaircissement immédiat sur ma situation définitive : voyant qu’il était différé, j’ai présumé qu’il ne pouvait être d’une nature agréable, et cette présomption m’était confirmée par les regards de compassion discrète dont Mme Laubépin m’honorait furtivement. Quant à M. Laubépin, il m’observait avec une attention singulière, qui ne me paraissait pas exempte de malice. Je me suis rappelé alors que mon père avait toujours prétendu flairer dans le coeur du cérémonieux tabellion et sous ses respects affectés, un vieux reste de levain bourgeois, roturier, et même jacobin. Il m’a semblé que ce levain fermentait un peu en ce moment, et que les secrètes antipathies du vieillard trouvaient quelque satisfaction dans le spectacle d’un gentilhomme à la torture.', '2019-10-14 10:46:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail` text CHARACTER SET utf8 NOT NULL,
  `motdepasse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `droits` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `motdepasse`, `droits`) VALUES
(2, 'tyty', 'gugut@gmail.fr', '95752f86c99f1055feba64e03924cb71f0c08315', 0),
(3, 'Zezette', 'fra.06@look.fr', '95752f86c99f1055feba64e03924cb71f0c08315', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

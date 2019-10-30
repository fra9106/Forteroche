-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 30 oct. 2019 à 10:36
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
  `signalement` tinyint(1) NOT NULL DEFAULT '0',
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_billet`, `id_user`, `comment`, `signalement`, `comment_date`) VALUES
(1, 7, 2, 'Très belle prose monsieur l\'écrivain...', 0, '2019-10-14 10:52:24'),
(2, 7, 2, 'poiuytrdvb,:;,', 0, '2019-10-14 15:29:15'),
(3, 7, 2, 'Joli texte bravo jean!', 0, '2019-10-14 15:56:25'),
(4, 6, 2, 'Ahhhhhh!!!!! Formidable ce Forteroche!', 1, '2019-10-15 10:12:15'),
(5, 5, 2, 'Encore un commentaire', 1, '2019-10-15 11:29:22'),
(6, 7, 2, 'et encore un commentaire :)', 0, '2019-10-15 19:01:52'),
(7, 8, 2, 'Beau chapitre!', 0, '2019-10-16 12:15:41'),
(8, 8, 2, '<p>Chapeau!</p>', 0, '2019-10-17 16:23:33'),
(9, 16, 2, 'c\'est beauuuuu!!!!!', 0, '2019-10-17 16:32:24'),
(10, 7, 2, 'Quand c\'est bo C bo !', 0, '2019-10-18 18:54:34'),
(11, 16, 2, 'Bravo!!!', 0, '2019-10-19 19:00:46'),
(12, 18, 2, 'ça fonctionne!', 0, '2019-10-21 09:48:05'),
(13, 23, 2, 'un peu court comme chapitre!\r\n', 0, '2019-10-21 13:29:38'),
(14, 23, 2, 'j\'aurais aimé plus de texte!\r\n', 0, '2019-10-21 13:30:04'),
(15, 23, 2, 'tien salut', 0, '2019-10-21 15:06:52'),
(16, 28, 2, 'bravo kiki!', 0, '2019-10-22 19:27:37'),
(17, 27, 2, 'belle voiture!\r\n', 0, '2019-10-23 08:30:09'),
(18, 29, 2, 'super comment!\r\n', 0, '2019-10-23 11:02:02'),
(19, 31, 2, 'Quel beau texte!!!', 0, '2019-10-23 15:11:07'),
(34, 38, 2, 'non?????', 0, '2019-10-28 13:24:27'),
(29, 36, 2, 'C\'est la vie!', 0, '2019-10-27 16:20:02'),
(22, 35, 2, 'elle se dit ma foi...', 1, '2019-10-26 18:44:50'),
(33, 38, 2, 'Ah ouais?!', 0, '2019-10-28 13:11:27'),
(30, 34, 2, '...Qui vendait du foie...', 0, '2019-10-27 16:21:51'),
(31, 37, 2, 'Ah ben ça c\'est cool!', 1, '2019-10-27 20:13:48'),
(32, 14, 2, 'Coucou!!', 0, '2019-10-27 20:14:27'),
(36, 5, 5, 'poiuytre', 0, '2019-10-29 11:17:26'),
(37, 5, 5, 'nouveau commentaire!', 0, '2019-10-29 11:22:57'),
(38, 6, 6, 'jojo', 0, '2019-10-29 11:24:47'),
(39, 6, 6, 'hihihihihihi', 0, '2019-10-29 11:31:22'),
(40, 39, 6, 'kiki le kikou!!!', 1, '2019-10-29 11:33:46'),
(41, 39, 5, 'coucou!!', 0, '2019-10-29 12:34:06'),
(42, 39, 5, 'hgf', 0, '2019-10-30 08:43:38'),
(43, 39, 5, 'C\'est la fête!!!!!', 0, '2019-10-30 09:04:17'),
(44, 39, 5, '... c\'est la fête!', 1, '2019-10-30 09:04:49'),
(45, 39, 5, 'pas trop d\'idée', 0, '2019-10-30 09:07:27'),
(46, 14, 5, 'Purée! Ca c\'est du chapitre!', 1, '2019-10-30 11:15:07'),
(47, 39, 6, 'Le commentaire de Jojo!!', 0, '2019-10-30 11:24:05');

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

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
(7, 'Chap 7 : On est parti !', 'À six heures, j’étais rue Cassette, chez M. Laubépin. Je ne sais quel âge peut avoir notre vieil ami ; mais, aussi loin que remontent mes souvenirs dans le passé, je l’y retrouve tel que je l’ai revu aujourd’hui, grand, sec, un peu voûté, cheveux blancs en désordre, oeil perçant sous des touffes de sourcils noirs, une physionomie robuste et fine tout à la fois. J’ai revu en même temps l’habit noir d’une coupe antique, la cravate blanche professionnelle, le diamant héréditaire au jabot, – bref, tous les signes extérieurs d’un esprit grave, méthodique et ami des traditions. Le vieillard m’attendait devant la porte ouverte de son petit salon : après une profonde inclination, il a saisi légèrement ma main entre deux doigts, et m’a conduit en face d’une vieille dame d’apparence assez simple qui se tenait debout devant la cheminée : M. le marquis de Champcey d’Hauterive ! a dit alors M. Laubépin de sa voix forte, grasse et emphatique.\r\nNous nous sommes assis, et il y a eu un moment de silence embarrassé. Je m’étais attendu à un éclaircissement immédiat sur ma situation définitive : voyant qu’il était différé, j’ai présumé qu’il ne pouvait être d’une nature agréable, et cette présomption m’était confirmée par les regards de compassion discrète dont Mme Laubépin m’honorait furtivement. Quant à M. Laubépin, il m’observait avec une attention singulière, qui ne me paraissait pas exempte de malice. Je me suis rappelé alors que mon père avait toujours prétendu flairer dans le coeur du cérémonieux tabellion et sous ses respects affectés, un vieux reste de levain bourgeois, roturier, et même jacobin. Il m’a semblé que ce levain fermentait un peu en ce moment, et que les secrètes antipathies du vieillard trouvaient quelque satisfaction dans le spectacle d’un gentilhomme à la torture.', '2019-10-14 10:46:24'),
(8, 'Chap 8 :  Le train', 'Je n’ai pu encore sonder jusqu’au fond l’abîme où nous sommes engloutis. Une semaine après la mort de mon père, je tombai gravement malade, et c’est à peine si, après deux mois de souffrance, j’ai pu quitter notre château patrimonial le jour où un étranger en prenait possession. Heureusement un vieil ami de ma mère qui habite Paris, et qui était chargé autrefois des affaires de notre famille en qualité de notaire, est venu à mon aide dans ces tristes circonstances : il m’a offert d’entreprendre lui-même un travail de liquidation qui présentait à mon inexpérience des difficultés inextricables. Je lui ai abandonné absolument le soin de régler les affaires de la succession, et je présume que sa tâche est aujourd’hui terminée. À peine arrivé hier matin, j’ai couru chez lui : il était à la campagne, d’où il ne doit revenir que demain. Ces deux journées ont été cruelles : l’incertitude est vraiment le pire de tous les maux, parce qu’il est le seul qui suspende nécessairement les ressorts de l’âme et qui ajourne le courage.', '2019-10-16 11:47:08'),
(38, 'Un chapitre...', '<p>Nouveau chapitre? de ouf!...!!!mmmm</p>', '2019-10-28 13:08:57'),
(39, 'nouvo chapite', '<p>Pou&ecirc;te-pou&ecirc;te : c\'est la f&ecirc;te!</p>', '2019-10-29 07:12:54'),
(13, 'Chap 13 : Et re- coucou !', '<p>Je n&rsquo;ai pu encore sonder jusqu&rsquo;au fond l&rsquo;ab&icirc;me o&ugrave; nous sommes engloutis. Une semaine apr&egrave;s la mort de mon p&egrave;re, je tombai gravement malade, et c&rsquo;est &agrave; peine si, apr&egrave;s deux mois de souffrance, j&rsquo;ai pu quitter notre ch&acirc;teau patrimonial le jour o&ugrave; un &eacute;tranger en prenait possession. Heureusement un vieil ami de ma m&egrave;re qui habite Paris, et qui &eacute;tait charg&eacute; autrefois des affaires de notre famille en qualit&eacute; de notaire, est venu &agrave; mon aide dans ces tristes circonstances : il m&rsquo;a offert d&rsquo;entreprendre lui-m&ecirc;me un travail de liquidation qui pr&eacute;sentait &agrave; mon inexp&eacute;rience des difficult&eacute;s inextricables. Je lui ai abandonn&eacute; absolument le soin de r&eacute;gler les affaires de la succession, et je pr&eacute;sume que sa t&acirc;che est aujourd&rsquo;hui termin&eacute;e. &Agrave; peine arriv&eacute; hier matin, j&rsquo;ai couru chez lui : il &eacute;tait &agrave; la campagne, d&rsquo;o&ugrave; il ne doit revenir que demain. Ces deux journ&eacute;es ont &eacute;t&eacute; cruelles : l&rsquo;incertitude est vraiment le pire de tous les maux, parce qu&rsquo;il est le seul qui suspende n&eacute;cessairement les ressorts de l&rsquo;&acirc;me et qui ajourne le courage.</p>', '2019-10-17 13:36:47'),
(14, 'Chap 13 : Et Re- coucou !', '<p>jusqu&rsquo;au fond l&rsquo;ab&icirc;me o&ugrave; nous sommes engloutis. Une semaine apr&egrave;s la mort de mon p&egrave;re, je tombai gravement malade, et c&rsquo;est &agrave; peine si, apr&egrave;s deux mois de souffrance, j&rsquo;ai pu quitter notre ch&acirc;teau patrimonial le jour o&ugrave; un &eacute;tranger en prenait possession. Heureusement un vieil ami de ma m&egrave;re qui habite Paris, et qui &eacute;tait charg&eacute; autrefois des affaires de notre famille en qualit&eacute; de notaire, est venu &agrave; mon aide dans ces tristes circonstances : il m&rsquo;a offert d&rsquo;entreprendre lui-m&ecirc;me un travail de liquidation qui pr&eacute;sentait &agrave; mon inexp&eacute;rience des difficult&eacute;s inextricables. Je lui ai abandonn&eacute; absolument le soin de r&eacute;gler les affaires de la succession, et je pr&eacute;sume que sa t&acirc;che est aujourd&rsquo;hui termin&eacute;e. &Agrave; peine arriv&eacute; hier matin, j&rsquo;ai couru chez lui : il &eacute;tait &agrave; la campagne, d&rsquo;o&ugrave; il ne doit revenir que demain. Ces deux journ&eacute;es ont &eacute;t&eacute; cruelles : l&rsquo;incertitude est vraiment le pire de tous les maux, parce qu&rsquo;il est le seul qui suspende n&eacute;cessairement les ressorts de l&rsquo;&acirc;me et qui ajourne le courage.</p>', '2019-10-17 13:38:34'),
(34, 'Encore un chapitre', '<p>Il &eacute;tait une fois...Une marchande de foie...</p>', '2019-10-25 11:37:41'),
(35, 'Essai...', '<p>Alors, la marchande de foie...</p>', '2019-10-25 11:51:01'),
(36, 'Samedi soir...', '<p>Tujur au buloche!!!!</p>', '2019-10-26 18:46:32'),
(37, 'Un dimanche soir...', '<p>Plut&ocirc;t de bel augure... gal&egrave;re depuis cette ap&egrave;m, et pis &ccedil;a matche d\'une pierre deux coups... le kiffe :)</p>', '2019-10-27 19:03:21');

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
  `droits` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `motdepasse`, `droits`) VALUES
(14, 'Toto', 'toto@toto.com', '$2y$10$M3frAjuqcg4XHAIFMvNtqO41q6paKic65oYTL5N4JRiU.h4x.2Jaq', 0),
(13, 'titi', 'titi@titi.fr', '$2y$10$CbDN9JGoFUQWlOBLilUKr./3EwgO2RwcYQLtRVu4WTi8OHHG7lmCi', 0),
(5, 'Bibi', 'bibi@bibi.fr', '$2y$10$EG450b/1/o7v3949w2oh1ebWD/Z4xozn5.S2u3dXKp94LryfvAXIe', 1),
(6, 'jojo', 'jojo@jojo.fr', '$2y$10$Y6OearwgA7lpsYU/V6ZTa.edF9Gjvp4l/QEzM/IVZmnnL99MOM7hO', 0),
(11, 'bibou', 'bibou@bibou.com', '$2y$10$z2qGQWFEoXMEFbo2qxjmNuwilzSp31xIf4FDh1GCyFKQsjU9UxqrW', 0),
(12, 'Josette', 'jozette@josette.com', '$2y$10$JsftVbpu.iEgb5wRujdzTuxKudCkpNspaOp8fewuelYsQ.iB/ZkZq', 0),
(15, 'Toto', 'toto@toto.com', '$2y$10$xWCcpcxoEAXf.grxcYEJKuZTV8XdxGkuxpgQxuvlu49r9qCMxj8hC', 0),
(16, 'Toto', 'toto@toto.com', '$2y$10$gRRWGsHoVr.YHjrTbSeEUuyXb21a5JtPHVqa8GA56RJ4rTDB6bstC', 0),
(17, 'Toto', 'toto@toto.com', '$2y$10$5X4/sD2Fk6RgFBSVuv/gyuiuIeLNiRAQ..PAnTgea0ci/D6OxLaBi', 0),
(18, 'Toto', 'toto@toto.com', '$2y$10$lF4WxQ1nmgKJxFZ2YupRx.yqiq3JRZWTzWQpVastUzp2qmu.cLc5a', 0),
(19, 'Toto', 'toto@toto.com', '$2y$10$QPFpJlt2AmvzT0X4tigR8uoSyXIzZ7OYE1k6sajBWflCCt0NT1tr6', 0),
(20, 'Fra', 'fra.06@look.fr', '$2y$10$XyI3yQxyiR8bN6GsiQ/wN.mXDFtkwh0b18QZY9vr0haTmeFaVcY8q', 0),
(21, 'Fra', 'fra.06@look.fr', '$2y$10$Go1V1MuBwL9zqwn8FJ117e933I1EDWGPbzScDauOsYeq2z9iHEVB6', 0),
(22, 'Fra', 'lou@lou.fr', '$2y$10$4OW55XdHTvf4fnygq5URzeJU7ADgtbw1bFZYJGwQQ4NdRD2bg8Myi', 0),
(23, 'tata', 'tata@tata.com', '$2y$10$alHC2APh4w47RckEMbX3E.JpqQX56tUF5B4fewLiVAhwYFiOJCH3O', 0),
(24, 'hihan', 'hihan@hihan.fr', '$2y$10$g3GiSXqw4N7EOkYB7Ag9/.m/hN6HMyeeL5VQC/BksmZCTZvdc4hFm', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

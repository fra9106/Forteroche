-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 nov. 2019 à 15:32
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
  `comment` text NOT NULL,
  `signalement` tinyint(1) NOT NULL DEFAULT '0',
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_billet`, `id_user`, `comment`, `signalement`, `comment_date`) VALUES
(1, 45, 5, 'Un premier commentaire!', 0, '2019-11-05 15:37:17'),
(2, 45, 6, 'Un autre de Jojo!!', 0, '2019-11-05 15:38:12'),
(3, 44, 6, 'Oh le beau commentaire!!', 0, '2019-11-05 15:39:29'),
(4, 44, 25, 'Magnifique!', 0, '2019-11-05 15:40:41'),
(5, 43, 25, 'J\'ai adoré!', 0, '2019-11-05 15:41:18'),
(6, 43, 12, 'Paris! Paris!! Paris!!!', 0, '2019-11-05 15:43:46'),
(7, 43, 11, 'Saperlipopette!', 1, '2019-11-05 15:46:59'),
(8, 45, 14, 'Cucu Néné!!', 1, '2019-11-05 15:48:43'),
(9, 44, 14, 'Pouête-pouête!', 1, '2019-11-05 15:49:35'),
(10, 43, 14, 'Ici c\'est pôris!', 1, '2019-11-05 15:50:11'),
(11, 56, 5, 'oh très beau châpitre!', 0, '2019-11-05 16:28:53');

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
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(54, '4 : Prêt pour le voyage', '<p>Moins on a d&eacute;jeun&eacute;, plus on d&eacute;sire d&icirc;ner. C&rsquo;est un axiome dont j&rsquo;ai senti aujourd&rsquo;hui toute la force bien avant que le soleil e&ucirc;t achev&eacute; son cours. Parmi les promeneurs que la douceur du ciel avait attir&eacute;s cet apr&egrave;s-midi aux Tuileries, et qui regardaient se jouer les premiers sourires du printemps sur la face de marbre des sylvains, on remarquait un homme jeune encore, et d&rsquo;une tenue irr&eacute;prochable, qui paraissait &eacute;tudier avec une sollicitude extraordinaire le r&eacute;veil de la nature. Non content de d&eacute;vorer de l&rsquo;oeil la verdure nouvelle, il n&rsquo;&eacute;tait point rare de voir ce personnage d&eacute;tacher furtivement de leurs tiges de jeunes pousses app&eacute;tissantes, des feuilles &agrave; demi d&eacute;roul&eacute;es, et les porter &agrave; ses l&egrave;vres avec une curiosit&eacute; de botaniste. J&rsquo;ai pu m&rsquo;assurer que cette ressource alimentaire, qui m&rsquo;avait &eacute;t&eacute; indiqu&eacute;e par l&rsquo;histoire des naufrages, &eacute;tait d&rsquo;une valeur fort m&eacute;diocre. Toutefois j&rsquo;ai enrichi mon exp&eacute;rience de quelques notions int&eacute;ressantes. La sant&eacute; de ma m&egrave;re cependant d&eacute;clinait sur une pente &agrave; peine sensible, mais continue. Il arriva un temps o&ugrave; ce caract&egrave;re ang&eacute;lique s&rsquo;alt&eacute;ra. Cette bouche, qui n&rsquo;avait jamais eu que de douces paroles, en ma pr&eacute;sence du moins, devint am&egrave;re et agressive ; chacun de mes pas hors du ch&acirc;teau fut l&rsquo;objet d&rsquo;un commentaire ironique. Mon p&egrave;re, qui n&rsquo;&eacute;tait pas plus &eacute;pargn&eacute; que moi, supportait ces attaques avec une patience qui de sa part me paraissait m&eacute;ritoire ; mais il prit l&rsquo;habitude de vivre plus que jamais hors de chez lui, &eacute;prouvant, me disait-il, le besoin de se distraire, de s&rsquo;&eacute;tourdir sans cesse. Il m&rsquo;engageait toujours &agrave; l&rsquo;accompagner ; et trouvait dans mon amour du plaisir, dans l&rsquo;ardeur impatiente de mon &acirc;ge, et, pour dire tout, dans la l&acirc;chet&eacute; de mon coeur, une trop facile ob&eacute;issance.<br />Un jour du mois de septembre 185., des courses dans lesquelles mon p&egrave;re avait engag&eacute; plusieurs chevaux devaient avoir lieu sur un emplacement situ&eacute; &agrave; quelque distance du ch&acirc;teau.</p>', '2019-11-05 16:22:30'),
(55, '5 : Voyage', '<p>Je le croyais un de ces hommes qui promettent peu et qui tiennent beaucoup. Je crains de m&rsquo;&ecirc;tre m&eacute;pris. Ce matin, je m&rsquo;&eacute;tais d&eacute;termin&eacute; &agrave; me rendre chez lui, sous pr&eacute;texte de lui remettre les pi&egrave;ces qu&rsquo;il m&rsquo;avait confi&eacute;es, et dont j&rsquo;ai pu v&eacute;rifier la triste exactitude. On m&rsquo;a dit que le bonhomme &eacute;tait all&eacute; go&ucirc;ter les douceurs de la vill&eacute;giature dans je ne sais quel ch&acirc;teau au fond de la Bretagne. Il est encore absent pour deux ou trois jours. Ceci m&rsquo;a v&eacute;ritablement constern&eacute;. Je n&rsquo;&eacute;prouvais pas seulement le chagrin de rencontrer l&rsquo;indiff&eacute;rence et l&rsquo;abandon o&ugrave; j&rsquo;avais pens&eacute; trouver l&rsquo;empressement d&rsquo;une amiti&eacute; d&eacute;vou&eacute;e ; j&rsquo;avais de plus l&rsquo;amertume de m&rsquo;en retourner comme j&rsquo;&eacute;tais venu, avec une bourse vide. Je comptais en effet prier M. Laub&eacute;pin de m&rsquo;avancer quelque argent sur les trois ou quatre mille francs qui doivent nous revenir apr&egrave;s le paiement int&eacute;gral de nos dettes, car j&rsquo;ai eu beau vivre en anachor&egrave;te depuis mon arriv&eacute;e &agrave; Paris, la somme insignifiante que j&rsquo;avais pu r&eacute;server pour mon voyage est compl&egrave;tement &eacute;puis&eacute;e, et si compl&egrave;tement, qu&rsquo;apr&egrave;s avoir fait ce matin un v&eacute;ritable d&eacute;jeuner.&nbsp; &ndash; Oh ! vraiment, non, Maxime ; j&rsquo;ai &eacute;t&eacute; trop &eacute;mue, vois-tu, et puis il faut te dire qu&rsquo;il est arriv&eacute; aujourd&rsquo;hui une &eacute;l&egrave;ve, une nouvelle, qui nous a donn&eacute; un r&eacute;gal de meringues, d&rsquo;&eacute;clairs et de chocolat &agrave; la cr&egrave;me, de sorte que je n&rsquo;ai pas faim du tout. Je suis m&ecirc;me tr&egrave;s embarrass&eacute;e, parce que dans mon trouble j&rsquo;ai oubli&eacute; tout &agrave; l&rsquo;heure de remettre mon pain au panier, comme on doit le faire quand on n&rsquo;a pas faim au go&ucirc;ter, et j&rsquo;ai peur d&rsquo;&ecirc;tre punie ; mais, en passant dans la cour, je vais t&acirc;cher de jeter mon pain dans le soupirail de la cave sans qu&rsquo;on s&rsquo;en aper&ccedil;oive.<br />&ndash; Comment ! petite soeur, ai-je repris en rougissant l&eacute;g&egrave;rement, tu vas perdre ce gros morceau de pain-l&agrave; ?<br />&ndash; Ah ! je sais que ce n&rsquo;est pas bien, car il y a peut-&ecirc;tre des pauvres qui seraient bien heureux de l&rsquo;avoir, n&rsquo;est-ce pas, Maxime ?<br />&ndash; Il y en a certainement, ma ch&egrave;re enfant.</p>', '2019-11-05 16:25:19'),
(56, '6 : Secret', '<p>J&rsquo;achevais d&rsquo;&eacute;crire ces lignes apr&egrave;s avoir fait honneur au d&icirc;ner de Louison, quand j&rsquo;ai entendu dans l&rsquo;escalier le bruit d&rsquo;un pas lourd et grave ; en m&ecirc;me temps j&rsquo;ai cru distinguer la voix de mon humble providence s&rsquo;exprimant sur le ton d&rsquo;une confidence h&acirc;tive et agit&eacute;e. Peu d&rsquo;instants apr&egrave;s, on a frapp&eacute;, et, pendant que Louison s&rsquo;effa&ccedil;ait dans l&rsquo;ombre, j&rsquo;ai vu para&icirc;tre dans le cadre de la porte la silhouette solennelle du vieux notaire. M. Laub&eacute;pin a jet&eacute; un regard rapide sur le plateau o&ugrave; j&rsquo;avais r&eacute;uni les d&eacute;bris de mon repas ; puis, s&rsquo;avan&ccedil;ant vers moi et ouvrant les bras en signe de confusion et de reproche &agrave; la fois : &ndash; Monsieur le marquis, a-t-il dit, au nom du ciel ! comment ne m&rsquo;avez-vous pas ?... &ndash; Il s&rsquo;est interrompu, s&rsquo;est promen&eacute; &agrave; grands pas &agrave; travers la chambre, et s&rsquo;arr&ecirc;tant tout &agrave; coup : &ndash; Jeune homme, a-t-il repris, ce n&rsquo;est pas bien ; vous avez bless&eacute; un ami, vous avez fait rougir un vieillard ! &ndash; Il &eacute;tait fort &eacute;mu. Je le regardais, un peu &eacute;mu moi-m&ecirc;me et ne sachant trop que r&eacute;pondre, quand il m&rsquo;a brusquement attir&eacute; sur sa poitrine, et, me serrant &agrave; m&rsquo;&eacute;touffer, il a murmur&eacute; &agrave; mon oreille : &ndash; Mon pauvre enfant !... &ndash; Il y a eu ensuite un moment de silence entre nous. Nous nous sommes assis. &ndash; Maxime, a repris alors M. Laub&eacute;pin, &ecirc;tes-vous toujours dans les dispositions o&ugrave; je vous ai laiss&eacute; ? Aurez-vous le courage d&rsquo;accepter le travail le plus humble, l&rsquo;emploi le plus modeste, pourvu seulement qu&rsquo;il soit honorable, et qu&rsquo;en assurant votre existence personnelle, il &eacute;loigne de votre soeur, dans le pr&eacute;sent et dans l&rsquo;avenir, les douleurs et les dangers de la pauvret&eacute; ?</p>', '2019-11-05 16:27:22'),
(45, '3 : Ma mère', '<p style=\"text-align: justify;\">Les sentiments de ma m&egrave;re &agrave; l&rsquo;&eacute;gard de mon p&egrave;re me semblaient d&rsquo;une nature ind&eacute;finissable. Les regards qu&rsquo;elle attachait sur lui paraissaient s&rsquo;enflammer quelquefois d&rsquo;une &eacute;trange expression de s&eacute;v&eacute;rit&eacute; ; mais ce n&rsquo;&eacute;tait qu&rsquo;un &eacute;clair, et l&rsquo;instant d&rsquo;apr&egrave;s ses beaux yeux humides et son visage inalt&eacute;r&eacute; ne lui t&eacute;moignaient plus qu&rsquo;un d&eacute;vouement attendri et une soumission passionn&eacute;e.<br />Ma m&egrave;re avait &eacute;t&eacute; mari&eacute;e &agrave; quinze ans, et je touchais ma vingt-deuxi&egrave;me ann&eacute;e, quand ma soeur, ma pauvre H&eacute;l&egrave;ne, vint au monde. Peu de temps apr&egrave;s sa naissance, mon p&egrave;re, sortant un matin, le front soucieux, de la chambre o&ugrave; ma m&egrave;re languissait, me fit signe de le suivre dans le jardin. Apr&egrave;s deux ou trois tours faits en silence :</p>\r\n<p>&ndash; Votre m&egrave;re, Maxime, me dit-il, devient de plus en plus bizarre !<br />&ndash; Elle est si souffrante, mon p&egrave;re !<br />&ndash; Oui, sans doute ; mais elle a une fantaisie bien singuli&egrave;re : elle d&eacute;sire que vous fassiez votre droit.<br />&ndash; Mon droit ! Comment ma m&egrave;re veut-elle qu&rsquo;&agrave; mon &acirc;ge, avec ma naissance et dans ma situation, j&rsquo;aille me tra&icirc;ner sur les bancs d&rsquo;une &eacute;cole ? Ce serait ridicule !<br />&ndash; C&rsquo;est mon opinion, dit s&egrave;chement mon p&egrave;re ;<br /><br />mais votre m&egrave;re est malade, et tout est dit.<br />J&rsquo;&eacute;tais alors un fat, tr&egrave;s enfl&eacute; de mon nom, de ma jeune importance et de mes petits succ&egrave;s de salon ; mais j&rsquo;avais le coeur sain, j&rsquo;adorais ma m&egrave;re, avec laquelle j&rsquo;avais v&eacute;cu pendant vingt ans dans la plus &eacute;troite intimit&eacute; qui puisse unir deux &acirc;mes en ce monde : je courus l&rsquo;assurer de mon ob&eacute;issance ; elle me remercia en inclinant le t&ecirc;te avec un triste sourire, et me fit embrasser ma soeur endormie sur ses genoux.<br />Nous demeurions &agrave; une demi-lieue de Grenoble ; je pus donc suivre un cours de droit sans quitter le logis paternel. Ma m&egrave;re se faisait rendre compte jour par jour du progr&egrave;s de mes &eacute;tudes avec un int&eacute;r&ecirc;t si pers&eacute;v&eacute;rant, si passionn&eacute;, que j&rsquo;en vins &agrave; me demander s&rsquo;il n&rsquo;y avait pas au fond de cette pr&eacute;occupation extraordinaire quelque chose de plus qu&rsquo;une fantaisie maladive : si, par hasard, la r&eacute;pugnance et le d&eacute;dain de mon p&egrave;re pour le c&ocirc;t&eacute; positif et ennuyeux de la vie n&rsquo;avaient pas introduit dans notre fortune quelque secret d&eacute;sordre que la connaissance du droit et l&rsquo;habitude des affaires devraient, suivant les esp&eacute;rances de ma m&egrave;re, permettre &agrave; son fils de r&eacute;parer. Je ne pus cependant m&rsquo;arr&ecirc;ter &agrave; cette pens&eacute;e : je me souvenais, &agrave; la v&eacute;rit&eacute;, d&rsquo;avoir entendu mon p&egrave;re se plaindre am&egrave;rement des d&eacute;sastres que notre fortune avait subis &agrave; l&rsquo;&eacute;poque r&eacute;volutionnaire, mais d&egrave;s longtemps ces plaintes avaient cess&eacute;, et en tout temps d&rsquo;ailleurs je n&rsquo;avais pu m&rsquo;emp&ecirc;cher de les trouver assez injustes, notre situation de fortune me paraissant des plus satisfaisantes. Nous habitions en effet aupr&egrave;s de Grenoble le ch&acirc;teau h&eacute;r&eacute;ditaire de notre famille, qui &eacute;tait cit&eacute; dans le pays pour son grand air seigneurial. Il nous arrivait souvent, &agrave; mon p&egrave;re et &agrave; moi, de chasser tout un jour sans sortir de nos terres ou de nos bois. Nos &eacute;curies &eacute;taient monumentales, et toujours peupl&eacute;es de chevaux de prix qui &eacute;taient la passion et l&rsquo;orgueil de mon p&egrave;re. Nous avions de plus &agrave; Paris, sur le boulevard des Capucines, un bel h&ocirc;tel o&ugrave; un pied-&agrave;-terre confortable nous &eacute;tait r&eacute;serv&eacute;. Enfin, dans la tenue habituelle de notre maison, rien ne pouvait trahir l&rsquo;ombre de la g&ecirc;ne ou de l&rsquo;exp&eacute;dient. Notre table m&ecirc;me &eacute;tait toujours servie avec une d&eacute;licatesse particuli&egrave;re et raffin&eacute;e &agrave; laquelle mon p&egrave;re attachait du prix.<br />La sant&eacute; de ma m&egrave;re cependant d&eacute;clinait sur une pente &agrave; peine sensible, mais continue. Il arriva un temps o&ugrave; ce caract&egrave;re ang&eacute;lique s&rsquo;alt&eacute;ra. Cette bouche, qui n&rsquo;avait jamais eu que de douces paroles, en ma pr&eacute;sence du moins, devint am&egrave;re et agressive ; chacun de mes pas hors du ch&acirc;teau fut l&rsquo;objet d&rsquo;un commentaire ironique. Mon p&egrave;re, qui n&rsquo;&eacute;tait pas plus &eacute;pargn&eacute; que moi, supportait ces attaques avec une patience qui de sa part me paraissait m&eacute;ritoire ; mais il prit l&rsquo;habitude de vivre plus que jamais hors de chez lui, &eacute;prouvant, me disait-il, le besoin de se distraire, de s&rsquo;&eacute;tourdir sans cesse. Il m&rsquo;engageait toujours &agrave; l&rsquo;accompagner ; et trouvait dans mon amour du plaisir, dans l&rsquo;ardeur impatiente de mon &acirc;ge, et, pour dire tout, dans la l&acirc;chet&eacute; de mon coeur, une trop facile ob&eacute;issance.<br />Un jour du mois de septembre 185., des courses dans lesquelles mon p&egrave;re avait engag&eacute; plusieurs chevaux devaient avoir lieu sur un emplacement situ&eacute; &agrave; quelque distance du ch&acirc;teau.</p>', '2019-10-31 16:32:46'),
(44, '2 : Mon père', '<p>&Agrave; la suite de ces crises, il &eacute;tait rare que mon p&egrave;re ne cour&ucirc;t pas acheter quelques beau bijou que ma m&egrave;re trouvait sous sa serviette en se mettant &agrave; table, et qu&rsquo;elle ne portait jamais. Un jour, elle re&ccedil;ut de Paris, au milieu de l&rsquo;hiver, une grande caisse pleine de fleurs pr&eacute;cieuses : elle remercia mon p&egrave;re avec effusion ; mais, d&egrave;s qu&rsquo;il fut sorti de sa chambre, je la vis hausser l&eacute;g&egrave;rement les &eacute;paules et lever vers le ciel un regard d&rsquo;incurable d&eacute;sespoir.<br />Pendant mon enfance et ma premi&egrave;re jeunesse, j&rsquo;avais eu pour mon p&egrave;re beaucoup de respect, mais assez peu d&rsquo;affection. Dans le cours de cette p&eacute;riode, en effet, je ne connaissais que le c&ocirc;t&eacute; sombre de son caract&egrave;re, le seul qui se r&eacute;v&eacute;l&acirc;t dans la vie int&eacute;rieure, pour laquelle mon p&egrave;re n&rsquo;&eacute;tait point fait. Plus tard, quand mon &acirc;ge me permit de l&rsquo;accompagner dans le monde, je fus surpris et ravi de d&eacute;couvrir en lui un homme que je n&rsquo;avais pas m&ecirc;me soup&ccedil;onn&eacute;. Il semblait qu&rsquo;il se sent&icirc;t, dans l&rsquo;enceinte de notre vieux ch&acirc;teaude famille, sous le poids de quelque enchantement fatal : &agrave; peine hors des portes, je voyais son front s&rsquo;&eacute;claircir, sa poitrine se dilater ; il rajeunissait. &ndash; Allons ! Maxime, criait-il, un temps de galop ! &ndash; Et nous d&eacute;vorions gaiement l&rsquo;espace. Il avait alors des cris de joie juv&eacute;nile, des enthousiasmes, des fantaisies d&rsquo;esprit, des effusions de sentiment qui charmaient mon jeune coeur, et dont j&rsquo;aurais voulu seulement pouvoir rapporter quelque chose &agrave; ma pauvre m&egrave;re, oubli&eacute;e dans son coin. Je commen&ccedil;ai alors &agrave; aimer mon p&egrave;re, et ma tendresse pour lui s&rsquo;accrut m&ecirc;me d&rsquo;une v&eacute;ritable admiration quand je pus le voir, dans toutes les solennit&eacute;s de la vie mondaine, chasses, courses, bals, d&icirc;ners, d&eacute;velopper les qualit&eacute;s sympathiques de sa brillante nature. &Eacute;cuyer admirable, causeur &eacute;blouissant, beau joueur, coeur intr&eacute;pide, main ouverte, je le regardais comme un type achev&eacute; de gr&acirc;ce virile et de noblesse chevaleresque. Il s&rsquo;appelait lui-m&ecirc;me, en souriant avec une sorte d&rsquo;amertume, le dernier gentilhomme.<br />Tel &eacute;tait mon p&egrave;re dans le monde ; mais, aussit&ocirc;t rentr&eacute; au logis, nous n&rsquo;avions plus sous les yeux, ma m&egrave;re et moi, qu&rsquo;un vieillard inquiet, morose et violent.<br />Les emportements de mon p&egrave;re vis-&agrave;-vis d&rsquo;une cr&eacute;ature aussi douce, aussi d&eacute;licate que l&rsquo;&eacute;tait ma m&egrave;re, m&rsquo;auraient assur&eacute;ment r&eacute;volt&eacute;, s&rsquo;ils n&rsquo;avaient &eacute;t&eacute; suivis de ces vifs retours de tendresse et de ces redoublements d&rsquo;attentions dont j&rsquo;ai parl&eacute;. Justifi&eacute; &agrave; mes yeux par ces t&eacute;moignages de repentir, mon p&egrave;re ne me paraissait plus qu&rsquo;un homme naturellement bon et sensible, mais jet&eacute; quelquefois hors de lui-m&ecirc;me par une r&eacute;sistance opini&acirc;tre et syst&eacute;matique &agrave; tous ses go&ucirc;ts et &agrave; toutes ses pr&eacute;dilections. Je croyais ma m&egrave;re atteinte d&rsquo;une affection nerveuse, d&rsquo;une sorte de maladie noire. Mon p&egrave;re me le donnait &agrave; entendre, bien qu&rsquo;observant toujours sur ce sujet une r&eacute;serve que je jugeais trop l&eacute;gitime.</p>', '2019-10-31 16:30:01'),
(43, '1 : Paris...', '<p>Paris, 20 avril 185..<br />Voici la seconde soir&eacute;e que je passe dans cette mis&eacute;rable chambre &agrave; regarder d&rsquo;un oeil morne mon foyer vide, &eacute;coutant stupidement les murmures et les roulements monotones de la rue, et me sentant, au milieu de cette grande ville, plus seul, plus abandonn&eacute; et plus voisin du d&eacute;sespoir que le naufrag&eacute; qui grelotte en plein Oc&eacute;an sur sa planche bris&eacute;e. &ndash; C&rsquo;est assez de l&acirc;chet&eacute; ! Je veux regarder mon destin en face pour lui &ocirc;ter son air de spectre : je veux aussi ouvrir mon coeur, o&ugrave; le chagrin d&eacute;borde, au seul confident dont la piti&eacute; ne puisse m&rsquo;offenser, &agrave; ce p&acirc;le et dernier ami qui me regarde dans ma glace.</p>\r\n<p>&ndash; Je veux donc &eacute;crire mes pens&eacute;es et ma vie, non pas avec une exactitude quotidienne et pu&eacute;rile, mais sans omission s&eacute;rieuse, et surtout sans mensonge. J&rsquo;aimerai ce journal : il sera comme un &eacute;cho fraternel qui trompera ma solitude, il me sera en m&ecirc;me temps comme une seconde conscience, m&rsquo;avertissant de ne laisser passerdans ma vie aucun trait que ma propre main ne puisse &eacute;crire avec fermet&eacute;.<br />Je cherche maintenant dans le pass&eacute; avec une triste avidit&eacute; tous les faits, tous les incidents qui d&egrave;s longtemps auraient d&ucirc; m&rsquo;&eacute;clairer, si le respect filial, l&rsquo;habitude et l&rsquo;indiff&eacute;rence d&rsquo;un oisif heureux n&rsquo;avaient ferm&eacute; mes yeux &agrave; toute lumi&egrave;re. Cette m&eacute;lancolie constante et profonde de ma m&egrave;re m&rsquo;est expliqu&eacute;e ; je m&rsquo;explique encore son d&eacute;go&ucirc;t du monde, et ce costume simple et uniforme, objet tant&ocirc;t de railleries, tant&ocirc;t du courroux de mon p&egrave;re : &ndash; Vous avez l&rsquo;air d&rsquo;une servante, lui disait-il.<br />Je ne pouvais me dissimuler que notre vie de famille ne f&ucirc;t quelquefois troubl&eacute;e par des querelles d&rsquo;un caract&egrave;re plus s&eacute;rieux : mais je n&rsquo;en &eacute;tais jamais directement t&eacute;moin. Les accents irrit&eacute;s et imp&eacute;rieux de mon p&egrave;re, les murmures d&rsquo;une voix qui paraissait supplier, des sanglots &eacute;touff&eacute;s, c&rsquo;&eacute;tait tout ce que j&rsquo;en pouvais entendre. J&rsquo;attribuais ces orages &agrave; des tentatives violentes et infructueuses pour ramener ma m&egrave;re au go&ucirc;t de la vie &eacute;l&eacute;gante et bruyante qu&rsquo;elle avait aim&eacute;e<br />autant qu&rsquo;une honn&ecirc;te femme peut l&rsquo;aimer, mais au milieu de laquelle elle ne suivait plus mon p&egrave;re qu&rsquo;avec une r&eacute;pugnance chaque jour plus obstin&eacute;e.</p>', '2019-10-31 16:27:03');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `droits` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

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
(20, 'Fra', 'fra.06@look.fr', '$2y$10$XyI3yQxyiR8bN6GsiQ/wN.mXDFtkwh0b18QZY9vr0haTmeFaVcY8q', 0),
(25, 'robert', 'roro@robert.com', '$2y$10$puHb4kUcsVDD5tXCPzGI3.mDT1TFekAUstLJ.juKz8/aBoV80LR8W', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

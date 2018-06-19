SET NAMES utf8;

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` char(2) NOT NULL DEFAULT '',
  `alpha_3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `countries` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
(4,'Afghánistán','af','afg'),
(248,'Ålandy','ax','ala'),
(8,'Albánie','al','alb'),
(12,'Alžírsko','dz','dza'),
(16,'Americká Samoa','as','asm'),
(850,'Americké Panenské ostrovy','vi','vir'),
(20,'Andorra','ad','and'),
(24,'Angola','ao','ago'),
(660,'Anguilla','ai','aia'),
(10,'Antarktida','aq','ata'),
(28,'Antigua a Barbuda','ag','atg'),
(32,'Argentina','ar','arg'),
(51,'Arménie','am','arm'),
(533,'Aruba','aw','abw'),
(36,'Austrálie','au','aus'),
(31,'Ázerbájdžán','az','aze'),
(44,'Bahamy','bs','bhs'),
(48,'Bahrajn','bh','bhr'),
(50,'Bangladéš','bd','bgd'),
(52,'Barbados','bb','brb'),
(56,'Belgie','be','bel'),
(84,'Belize','bz','blz'),
(112,'Bělorusko','by','blr'),
(204,'Benin','bj','ben'),
(60,'Bermudy','bm','bmu'),
(64,'Bhútán','bt','btn'),
(68,'Bolívie','bo','bol'),
(535,'Bonaire, Svatý Eustach a Saba','bq','bes'),
(70,'Bosna a Hercegovina','ba','bih'),
(72,'Botswana','bw','bwa'),
(74,'Bouvetův ostrov','bv','bvt'),
(76,'Brazílie','br','bra'),
(86,'Britské indickooceánské území','io','iot'),
(92,'Britské Panenské ostrovy','vg','vgb'),
(96,'Brunej','bn','brn'),
(100,'Bulharsko','bg','bgr'),
(854,'Burkina Faso','bf','bfa'),
(108,'Burundi','bi','bdi'),
(184,'Cookovy ostrovy','ck','cok'),
(531,'Curaçao','cw','cuw'),
(148,'Čad','td','tcd'),
(499,'Černá Hora','me','mne'),
(203,'Česko','cz','cze'),
(156,'Čína','cn','chn'),
(208,'Dánsko','dk','dnk'),
(180,'Demokratická republika Kongo','cd','cod'),
(212,'Dominika','dm','dma'),
(214,'Dominikánská republika','do','dom'),
(262,'Džibutsko','dj','dji'),
(818,'Egypt','eg','egy'),
(218,'Ekvádor','ec','ecu'),
(232,'Eritrea','er','eri'),
(233,'Estonsko','ee','est'),
(231,'Etiopie','et','eth'),
(234,'Faerské ostrovy','fo','fro'),
(238,'Falklandy (Malvíny)','fk','flk'),
(242,'Fidži','fj','fji'),
(608,'Filipíny','ph','phl'),
(246,'Finsko','fi','fin'),
(250,'Francie','fr','fra'),
(254,'Francouzská Guyana','gf','guf'),
(260,'Francouzská jižní a antarktická území','tf','atf'),
(258,'Francouzská Polynésie','pf','pyf'),
(266,'Gabon','ga','gab'),
(270,'Gambie','gm','gmb'),
(288,'Ghana','gh','gha'),
(292,'Gibraltar','gi','gib'),
(308,'Grenada','gd','grd'),
(304,'Grónsko','gl','grl'),
(268,'Gruzie','ge','geo'),
(312,'Guadeloupe','gp','glp'),
(316,'Guam','gu','gum'),
(320,'Guatemala','gt','gtm'),
(324,'Guinea','gn','gin'),
(624,'Guinea-Bissau','gw','gnb'),
(831,'Guernsey','gg','ggy'),
(328,'Guyana','gy','guy'),
(332,'Haiti','ht','hti'),
(334,'Heardův ostrov a McDonaldovy ostrovy','hm','hmd'),
(340,'Honduras','hn','hnd'),
(344,'Hongkong','hk','hkg'),
(152,'Chile','cl','chl'),
(191,'Chorvatsko','hr','hrv'),
(356,'Indie','in','ind'),
(360,'Indonésie','id','idn'),
(368,'Irák','iq','irq'),
(364,'Írán','ir','irn'),
(372,'Irsko','ie','irl'),
(352,'Island','is','isl'),
(380,'Itálie','it','ita'),
(376,'Izrael','il','isr'),
(388,'Jamajka','jm','jam'),
(392,'Japonsko','jp','jpn'),
(887,'Jemen','ye','yem'),
(832,'Jersey','je','jey'),
(710,'Jihoafrická republika','za','zaf'),
(239,'Jižní Georgie a Jižní Sandwichovy ostrovy','gs','sgs'),
(410,'Jižní Korea','kr','kor'),
(728,'Jižní Súdán','ss','ssd'),
(400,'Jordánsko','jo','jor'),
(136,'Kajmanské ostrovy','ky','cym'),
(116,'Kambodža','kh','khm'),
(120,'Kamerun','cm','cmr'),
(124,'Kanada','ca','can'),
(132,'Kapverdy','cv','cpv'),
(634,'Katar','qa','qat'),
(398,'Kazachstán','kz','kaz'),
(404,'Keňa','ke','ken'),
(296,'Kiribati','ki','kir'),
(166,'Kokosové ostrovy','cc','cck'),
(170,'Kolumbie','co','col'),
(174,'Komory','km','com'),
(178,'Kongo','cg','cog'),
(188,'Kostarika','cr','cri'),
(192,'Kuba','cu','cub'),
(414,'Kuvajt','kw','kwt'),
(196,'Kypr','cy','cyp'),
(417,'Kyrgyzstán','kg','kgz'),
(418,'Laos','la','lao'),
(426,'Lesotho','ls','lso'),
(422,'Libanon','lb','lbn'),
(430,'Libérie','lr','lbr'),
(434,'Libye','ly','lby'),
(438,'Lichtenštejnsko','li','lie'),
(440,'Litva','lt','ltu'),
(428,'Lotyšsko','lv','lva'),
(442,'Lucembursko','lu','lux'),
(446,'Macao','mo','mac'),
(450,'Madagaskar','mg','mdg'),
(348,'Maďarsko','hu','hun'),
(807,'Makedonie','mk','mkd'),
(458,'Malajsie','my','mys'),
(454,'Malawi','mw','mwi'),
(462,'Maledivy','mv','mdv'),
(466,'Mali','ml','mli'),
(470,'Malta','mt','mlt'),
(833,'Ostrov Man','im','imn'),
(504,'Maroko','ma','mar'),
(584,'Marshallovy ostrovy','mh','mhl'),
(474,'Martinik','mq','mtq'),
(480,'Mauricius','mu','mus'),
(478,'Mauritánie','mr','mrt'),
(175,'Mayotte','yt','myt'),
(581,'Menší odlehlé ostrovy USA','um','umi'),
(484,'Mexiko','mx','mex'),
(583,'Mikronésie','fm','fsm'),
(498,'Moldavsko','md','mda'),
(492,'Monako','mc','mco'),
(496,'Mongolsko','mn','mng'),
(500,'Montserrat','ms','msr'),
(508,'Mosambik','mz','moz'),
(104,'Myanmar','mm','mmr'),
(516,'Namibie','na','nam'),
(520,'Nauru','nr','nru'),
(276,'Německo','de','deu'),
(524,'Nepál','np','npl'),
(562,'Niger','ne','ner'),
(566,'Nigérie','ng','nga'),
(558,'Nikaragua','ni','nic'),
(570,'Niue','nu','niu'),
(528,'Nizozemsko','nl','nld'),
(574,'Norfolk','nf','nfk'),
(578,'Norsko','no','nor'),
(540,'Nová Kaledonie','nc','ncl'),
(554,'Nový Zéland','nz','nzl'),
(512,'Omán','om','omn'),
(586,'Pákistán','pk','pak'),
(585,'Palau','pw','plw'),
(275,'Palestinská autonomie','ps','pse'),
(591,'Panama','pa','pan'),
(598,'Papua-Nová Guinea','pg','png'),
(600,'Paraguay','py','pry'),
(604,'Peru','pe','per'),
(612,'Pitcairnovy ostrovy','pn','pcn'),
(384,'Pobřeží slonoviny','ci','civ'),
(616,'Polsko','pl','pol'),
(630,'Portoriko','pr','pri'),
(620,'Portugalsko','pt','prt'),
(40,'Rakousko','at','aut'),
(638,'Réunion','re','reu'),
(226,'Rovníková Guinea','gq','gnq'),
(642,'Rumunsko','ro','rou'),
(643,'Rusko','ru','rus'),
(646,'Rwanda','rw','rwa'),
(300,'Řecko','gr','grc'),
(666,'Saint-Pierre a Miquelon','pm','spm'),
(222,'Salvador','sv','slv'),
(882,'Samoa','ws','wsm'),
(674,'San Marino','sm','smr'),
(682,'Saúdská Arábie','sa','sau'),
(686,'Senegal','sn','sen'),
(408,'Severní Korea','kp','prk'),
(580,'Severní Mariany','mp','mnp'),
(690,'Seychely','sc','syc'),
(694,'Sierra Leone','sl','sle'),
(702,'Singapur','sg','sgp'),
(703,'Slovensko','sk','svk'),
(705,'Slovinsko','si','svn'),
(706,'Somálsko','so','som'),
(784,'Spojené arabské emiráty','ae','are'),
(826,'Spojené království','gb','gbr'),
(840,'Spojené státy americké','us','usa'),
(688,'Srbsko','rs','srb'),
(140,'Středoafrická republika','cf','caf'),
(729,'Súdán','sd','sdn'),
(740,'Surinam','sr','sur'),
(654,'Svatá Helena, Ascension a Tristan da Cunha','sh','shn'),
(662,'Svatá Lucie','lc','lca'),
(652,'Svatý Bartoloměj','bl','blm'),
(659,'Svatý Kryštof a Nevis','kn','kna'),
(663,'Svatý Martin (francouzská část)','mf','maf'),
(534,'Svatý Martin (nizozemská část)','sx','sxm'),
(678,'Svatý Tomáš a Princův ostrov','st','stp'),
(670,'Svatý Vincenc a Grenadiny','vc','vct'),
(748,'Svazijsko','sz','swz'),
(760,'Sýrie','sy','syr'),
(90,'Šalamounovy ostrovy','sb','slb'),
(724,'Španělsko','es','esp'),
(744,'Špicberky a Jan Mayen','sj','sjm'),
(144,'Šrí Lanka','lk','lka'),
(752,'Švédsko','se','swe'),
(756,'Švýcarsko','ch','che'),
(762,'Tádžikistán','tj','tjk'),
(834,'Tanzanie','tz','tza'),
(764,'Thajsko','th','tha'),
(158,'Tchaj-wan','tw','twn'),
(768,'Togo','tg','tgo'),
(772,'Tokelau','tk','tkl'),
(776,'Tonga','to','ton'),
(780,'Trinidad a Tobago','tt','tto'),
(788,'Tunisko','tn','tun'),
(792,'Turecko','tr','tur'),
(795,'Turkmenistán','tm','tkm'),
(796,'Turks a Caicos','tc','tca'),
(798,'Tuvalu','tv','tuv'),
(800,'Uganda','ug','uga'),
(804,'Ukrajina','ua','ukr'),
(858,'Uruguay','uy','ury'),
(860,'Uzbekistán','uz','uzb'),
(162,'Vánoční ostrov','cx','cxr'),
(548,'Vanuatu','vu','vut'),
(336,'Vatikán','va','vat'),
(862,'Venezuela','ve','ven'),
(704,'Vietnam','vn','vnm'),
(626,'Východní Timor','tl','tls'),
(876,'Wallis a Futuna','wf','wlf'),
(894,'Zambie','zm','zmb'),
(732,'Západní Sahara','eh','esh'),
(716,'Zimbabwe','zw','zwe')
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Ian 2018 la 19:02
-- Versiune server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvcablu1`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `contracte`
--

CREATE TABLE `contracte` (
  `nr_contract` int(11) DEFAULT NULL,
  `id_utilizator` int(11) DEFAULT NULL,
  `id_pachet` int(11) DEFAULT NULL,
  `data_inceput` date DEFAULT NULL,
  `data_ultima_ac` date DEFAULT NULL,
  `statut` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Salvarea datelor din tabel `contracte`
--

INSERT INTO `contracte` (`nr_contract`, `id_utilizator`, `id_pachet`, `data_inceput`, `data_ultima_ac`, `statut`) VALUES
(1004, 1, 5, '2014-01-04', '2017-12-24', 'Activ'),
(1302, 2, 7, '2011-03-10', '2017-05-16', 'Suspendat'),
(1034, 3, 1, '2010-05-23', '2017-12-01', 'Activ'),
(1103, 4, 9, '2015-04-22', '2018-01-10', 'Activ'),
(1204, 5, 2, '2011-10-03', '2017-03-14', 'Suspendat'),
(1089, 6, 8, '2013-08-18', '2017-04-26', 'Suspendat'),
(1074, 7, 3, '2013-09-01', '2017-11-25', 'Activ'),
(1017, 8, 4, '2016-02-08', '2017-12-30', 'Activ'),
(1302, 9, 6, '2009-10-30', '2017-02-26', 'Suspendat'),
(1005, 10, 4, '2011-10-25', '2016-04-30', 'Suspendat'),
(1302, 11, 7, '2013-03-21', '2018-01-04', 'Activ'),
(1029, 12, 2, '2015-07-03', '2016-04-18', 'Suspendat'),
(1001, 13, 3, '2010-12-02', '2017-12-04', 'Activ');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `operatori`
--

CREATE TABLE `operatori` (
  `id_op` int(11) NOT NULL,
  `nume_op` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `director` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `adresa_Sediu` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `telefon_op` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Salvarea datelor din tabel `operatori`
--

INSERT INTO `operatori` (`id_op`, `nume_op`, `director`, `adresa_Sediu`, `telefon_op`) VALUES
(1, 'SunTV', 'Botan Marcel', 'bd.Decebal 63', 22764884),
(2, 'MoldTV', 'Lanuta Andrei', 'str. Mihail Kogalniceanu 12', 22349612),
(3, 'ChannelTV', 'Mirza Flaviu', 'str.Grigore Vieru 93', 22989015);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pachete`
--

CREATE TABLE `pachete` (
  `id_pachet` int(11) NOT NULL,
  `nume_pachet` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `canale_incluse` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `id_op` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Salvarea datelor din tabel `pachete`
--

INSERT INTO `pachete` (`id_pachet`, `nume_pachet`, `canale_incluse`, `pret`, `id_op`) VALUES
(1, 'SunJunior', 'Nikelodeon, DisneyChannel, Minimax, Rebeonok+, KidPlanet, Jetix', 130, 1),
(2, 'SunSenior', 'Discovery, AnimalPlanet, SONY, TNT, STS, Mir, Publika, PROTV', 240, 1),
(3, 'SunCook', 'Paprika, ProperTasty, Vkusno, ZdorovoePitanie, Mm+', 100, 1),
(4, 'MoldKid', 'Nikelodeon, Mica, TKID, DisneyChannel, Minimax', 97, 2),
(5, 'MoldUp', 'Net, Scifi, SONY, History, TNT, STS, Mir, Publika', 190, 2),
(6, 'ChannelTasty', 'Vkusno, ZdorovoePitanie, Mm+, GotoviDoma, Vkus, Paprika', 160, 3),
(7, 'ChannelScience', 'Fact, RenTV, Discovery, AnimalPlanet, History, Agricult, Ohota&Ribalka, DidYou', 230, 3),
(8, 'ChannelJunior', 'Mica,Jetix, TKID, DisneyChannel, STSKID, Minimax, Baby', 189, 3),
(9, 'ChannelArt', 'PaintTV, ArtHistory, A+, Culture, TripTV', 120, 3);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_utilizator` int(11) NOT NULL,
  `idnp` int(11) DEFAULT NULL,
  `nume_prenume` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `telefon_ut` int(11) DEFAULT NULL,
  `localitate` varchar(40) CHARACTER SET latin1 NOT NULL,
  `adresa` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Salvarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id_utilizator`, `idnp`, `nume_prenume`, `telefon_ut`, `localitate`, `adresa`) VALUES
(1, 2009458747, 'Birna Andrei', 69772345, 'Edinet', 'str.Columnei 56 ap.14'),
(2, 2009452334, 'Chelu Stas', 69856867, 'Donduseni', 'str.Vlahuta 17'),
(3, 2009485824, 'Motruc Anastasia', 79841115, 'Leova', 'str.Pustii 24'),
(4, 2009485245, 'Gonta Flaviu', 69346683, 'Brinzeni', 'str.Vacii 34'),
(5, 2009583753, 'Micu Aleona', 79458853, 'Balti', 'str.Ciuflea 34'),
(6, 2009489952, 'Tarita Silvia', 22496648, 'Lozova', 'str.Batului 19 ap 94'),
(7, 2008345924, 'Tenchiu Marina', 79486511, 'Chisinau', 'str.Vasile Alecsandri 34 ap.85'),
(8, 2009457333, 'Hirtop Anastasia', 22486639, 'Chisinau', 'str.Columnei 23 ap.1'),
(9, 2009468214, 'Lezghie Larisa', 69832256, 'Anenii Noi', 'str.Piritei 34'),
(10, 2008499110, 'Glavan Petru', 69385523, 'Piririta', 'str.Plaiului 26 ap.22'),
(11, 2009485764, 'Leanca Marcel', 22586732, 'Schinoasa', 'str.Cisco 13'),
(12, 2009548669, 'Drumov Andrei', 22496683, 'Chisinau', 'str.Diminetii 13'),
(13, 2009134402, 'Recea Victoria', 79346668, 'Nisporeni', 'str.Valiste 112 ap.85'),
(14, 344, 'ion', 12, 'ffff', 'gfds'),
(16, 200005745, 'Vechiu Alina', 69245763, 'Chisinau', 'str.Morcov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracte`
--
ALTER TABLE `contracte`
  ADD KEY `id_utilizator` (`id_utilizator`),
  ADD KEY `id_pachet` (`id_pachet`);

--
-- Indexes for table `operatori`
--
ALTER TABLE `operatori`
  ADD PRIMARY KEY (`id_op`);

--
-- Indexes for table `pachete`
--
ALTER TABLE `pachete`
  ADD PRIMARY KEY (`id_pachet`),
  ADD KEY `id_op` (`id_op`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_utilizator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operatori`
--
ALTER TABLE `operatori`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pachete`
--
ALTER TABLE `pachete`
  MODIFY `id_pachet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id_utilizator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `contracte`
--
ALTER TABLE `contracte`
  ADD CONSTRAINT `contracte_ibfk_1` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id_utilizator`),
  ADD CONSTRAINT `contracte_ibfk_2` FOREIGN KEY (`id_pachet`) REFERENCES `pachete` (`id_pachet`);

--
-- Restrictii pentru tabele `pachete`
--
ALTER TABLE `pachete`
  ADD CONSTRAINT `pachete_ibfk_1` FOREIGN KEY (`id_op`) REFERENCES `operatori` (`id_op`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

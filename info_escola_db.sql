-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 01:22 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_escola`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(8) NOT NULL,
  `titulu` varchar(50) NOT NULL,
  `konteudu` text NOT NULL,
  `status` enum('Publika','La Publika') DEFAULT 'Publika',
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `titulu`, `konteudu`, `status`, `id_user`) VALUES
('EBFA4', 'Naroman Perumnas', '<p>Eskola Naroman hanesan eskola ne&#39;ebe lokaliza iha Perumnas, Eskola ida ne&#39;e nu&#39;udar eskola ensino Basiku Filial ne&#39;ebe nu&#39;udar eskola publiku nian. Eskola ne&#39;e komesa harii husi tempu Indonezia ho naran SD 10 Perumnas</p>', 'Publika', 1),
('EBFA5', 'Bairo-Pite', '<p>Eskola Bairo-Pite nu&#39;udar eskola ne&#39;ebe lokaliza iha Bairo-Pite eskola ida ne&#39;e konesidu ona iha parte Bairo-Pite nu&#39;udar eskola ne&#39;ebe tuan ne&#39;ebe harii husi tempu Portugues nian, Iha tempu Indonezia eskola ne&#39;e bolu ho naran SD 3 no mai iha tempu ukun aan nian hetan renovasaun husi parte Governu Estadus Unidus nian ne&#39;ebe troka nia naran sai eskola Hans-Klem Bairo-Pite.</p>', 'Publika', 2),
('EBFA6', 'Fatuhada', '<p>Eskola Fatuhada nu&#39;udar eskola ne&#39;ebe lokaliza iha Fatuhad, eskola ne&#39;e nu&#39;udar eskola ne&#39;ebe publiku,eskola ida ne&#39;e mos nu&#39;udar eskola ne&#39;ebe harii ona husi tempu Indonezia.</p>', 'Publika', 2),
('EBFA7', 'Esperansa', '<p>Eskola Esperanasa</p>', 'Publika', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detallu`
--

CREATE TABLE `detallu` (
  `id_detallu` int(5) NOT NULL,
  `id_eskola` varchar(8) NOT NULL,
  `id_populasaun` varchar(8) NOT NULL,
  `id_artikel` varchar(8) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `lokalizasaun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detallu`
--

INSERT INTO `detallu` (`id_detallu`, `id_eskola`, `id_populasaun`, `id_artikel`, `latitude`, `longitude`, `lokalizasaun`) VALUES
(2, 'EBF2', 'EBFP2', 'EBFA5', '-8.562085', '125.5617712', 'Bairo-Pite'),
(3, 'EBF3', 'EBFP3', 'EBFA6', '-8.5590107', '125.5617712', 'Fatuhada'),
(4, 'EBF4', 'EBFP4', 'EBFA7', '-8.558954', '125.548968', 'Bairo-Pite');

-- --------------------------------------------------------

--
-- Table structure for table `eskola`
--

CREATE TABLE `eskola` (
  `id_eskola` varchar(8) NOT NULL,
  `naran_eskola` varchar(50) NOT NULL,
  `tipu_eskola` enum('Publiku','Privadu') DEFAULT 'Publiku',
  `kondisaun` enum('Diak','Ladiak') DEFAULT 'Diak',
  `imajen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eskola`
--

INSERT INTO `eskola` (`id_eskola`, `naran_eskola`, `tipu_eskola`, `kondisaun`, `imajen`) VALUES
('EBF2', 'Bairo - Pite', 'Privadu', 'Ladiak', 'top6702.jpg'),
('EBF3', 'Fatuhada', 'Publiku', 'Diak', 'eskola1.jpg'),
('EBF4', 'Esperansa', 'Privadu', 'Ladiak', 'eskola4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentariu`
--

CREATE TABLE `komentariu` (
  `id_komen` int(11) NOT NULL,
  `id_artigu` varchar(25) NOT NULL,
  `naran` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `koment` text NOT NULL,
  `estatuto` enum('Publika','La Publika') NOT NULL DEFAULT 'La Publika'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentariu`
--

INSERT INTO `komentariu` (`id_komen`, `id_artigu`, `naran`, `email`, `koment`, `estatuto`) VALUES
(3, 'EBFA7', 'Apeu', 'yyhhh@gmail.com', 'Koko', 'Publika'),
(4, 'EBFA5', 'Leonardo da Silva', 'leo@gmail.com', 'Gaya', 'Publika'),
(5, 'EBFA5', 'Mouzinhu', 'mou@gmail.com', 'Diak', 'Publika');

-- --------------------------------------------------------

--
-- Table structure for table `populasaun`
--

CREATE TABLE `populasaun` (
  `id_populasaun` varchar(8) NOT NULL,
  `id_eskola` varchar(8) NOT NULL,
  `funsionariu_estadu` int(11) DEFAULT NULL,
  `funsionariu_kontratadu` int(11) DEFAULT NULL,
  `total_alunos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `populasaun`
--

INSERT INTO `populasaun` (`id_populasaun`, `id_eskola`, `funsionariu_estadu`, `funsionariu_kontratadu`, `total_alunos`) VALUES
('EBFP2', 'EBF2', 15, 13, 125),
('EBFP3', 'EBF3', 12, 16, 121),
('EBFP4', 'EBF4', 20, 5, 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `naran` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `naran`, `username`, `password`) VALUES
(1, 'Leonardo', 'Leo', '12345678'),
(2, 'Riko', 'Riko', '12345678'),
(3, 'Petronela', 'Petronela', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `detallu`
--
ALTER TABLE `detallu`
  ADD PRIMARY KEY (`id_detallu`),
  ADD KEY `id_eskola` (`id_eskola`),
  ADD KEY `detallu_ibfk_5` (`id_populasaun`),
  ADD KEY `detallu_ibfk_4` (`id_artikel`);

--
-- Indexes for table `eskola`
--
ALTER TABLE `eskola`
  ADD PRIMARY KEY (`id_eskola`);

--
-- Indexes for table `komentariu`
--
ALTER TABLE `komentariu`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_artigu_fk` (`id_artigu`);

--
-- Indexes for table `populasaun`
--
ALTER TABLE `populasaun`
  ADD PRIMARY KEY (`id_populasaun`),
  ADD KEY `id_eskola` (`id_eskola`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentariu`
--
ALTER TABLE `komentariu`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detallu`
--
ALTER TABLE `detallu`
  ADD CONSTRAINT `detallu_ibfk_1` FOREIGN KEY (`id_eskola`) REFERENCES `eskola` (`id_eskola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallu_ibfk_4` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallu_ibfk_5` FOREIGN KEY (`id_populasaun`) REFERENCES `populasaun` (`id_populasaun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentariu`
--
ALTER TABLE `komentariu`
  ADD CONSTRAINT `id_artigu_fk` FOREIGN KEY (`id_artigu`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `populasaun`
--
ALTER TABLE `populasaun`
  ADD CONSTRAINT `populasaun_ibfk_1` FOREIGN KEY (`id_eskola`) REFERENCES `eskola` (`id_eskola`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 03:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medajar`
--
CREATE DATABASE IF NOT EXISTS `medajar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medajar`;

-- --------------------------------------------------------

--
-- Table structure for table `bagi_waktu`
--

CREATE TABLE `bagi_waktu` (
  `id` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `wilayah_waktu` enum('WIB','WITA','WIT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bagi_waktu`
--

INSERT INTO `bagi_waktu` (`id`, `kota`, `wilayah_waktu`) VALUES
(1, 'BANDA ACEH', 'WIB'),
(2, 'MANADO', 'WIB'),
(3, 'PADANG', 'WIB'),
(4, 'PEKANBARU', 'WIB'),
(5, 'TANJUNG PINANG', 'WIB'),
(6, 'JAMBI', 'WIB'),
(7, 'PALEMBANG', 'WIB'),
(8, 'BANDAR LAMPUNG', 'WIB'),
(9, 'PANGKAL PINANG', 'WIB'),
(10, 'BENGKULU', 'WIB'),
(11, 'JAKARTA', 'WIB'),
(12, 'BANDUNG', 'WIB'),
(13, 'SERANG', 'WIB'),
(14, 'SEMARANG', 'WIB'),
(15, 'YOGYAKARTA', 'WIB'),
(16, 'SURABAYA', 'WIB'),
(17, 'PONTIANAK', 'WIB'),
(18, 'PALANGKARAYA', 'WIB'),
(19, 'SAMARINDA', 'WITA'),
(20, 'BANJARMASIN', 'WITA'),
(22, 'DENPASAR', 'WITA'),
(23, 'MATARAM', 'WITA'),
(24, 'KUPANG', 'WITA'),
(25, 'PALU', 'WITA'),
(26, 'MAKASSAR', 'WITA'),
(27, 'KENDARI', 'WITA'),
(28, 'MANADO', 'WITA'),
(29, 'GORONTALO', 'WITA'),
(30, 'AMBON', 'WIT'),
(31, 'SOFIFI', 'WIT'),
(32, 'JAYAPURA', 'WIT'),
(33, 'MANOKWARI', 'WIT'),
(34, 'TIMIKA', 'WIT');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kuis`
--

CREATE TABLE `detail_kuis` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan_a` varchar(50) NOT NULL,
  `pilihan_b` varchar(50) NOT NULL,
  `pilihan_c` varchar(50) NOT NULL,
  `pilihan_d` varchar(50) NOT NULL,
  `jawaban` char(1) NOT NULL,
  `id_kuis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kuis`
--

INSERT INTO `detail_kuis` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `id_kuis`) VALUES
(1, 'asdsds', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 'a', 1),
(2, 'dfdf', '  xx    ', '  xx  ', '  xx  ', '  xx  ', 'c', 2),
(3, 'sdsds', '  xx', 'xx', 'xxx', 'xxx', 'b', 2),
(4, 'aaaaa', 'xxxxxxx', 'xxxxxxxxx', 'xxxxxxx', 'xxxxxxx', 'd', 2),
(5, 'aaaaa', '  a', 'b', 'c', 'd', 'c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembagian_waktu`
--

CREATE TABLE `detail_pembagian_waktu` (
  `id` int(11) NOT NULL,
  `nama_daerah` varchar(50) NOT NULL,
  `id_pembagian_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembagian_waktu`
--

INSERT INTO `detail_pembagian_waktu` (`id`, `nama_daerah`, `id_pembagian_waktu`) VALUES
(11, 'Semarang', 2),
(12, 'Wonosobo', 2),
(13, 'Pekalongan', 2),
(14, 'Surakarta', 2),
(15, 'Tegal', 2),
(16, 'Cilacap', 2),
(17, 'Kebumen', 2),
(18, 'Klaten', 2),
(19, 'Purworejo', 2),
(20, 'Sragen', 2),
(21, 'Bandung', 1),
(22, 'Bandung Barat', 1),
(23, 'Bekasi', 1),
(24, 'Bogor', 1),
(25, 'Ciamis', 1),
(26, 'Cianjur', 1),
(27, 'Cirebon', 1),
(28, 'Garut', 1),
(29, 'Indramayu', 1),
(30, 'Karawang', 1),
(31, 'Makassar', 3),
(32, 'Bontoala', 3),
(33, 'Biring Kanaya ', 3),
(34, 'Mamajang', 3),
(35, 'Manggala', 3),
(36, 'Panakkukang', 3),
(37, 'Rappocini', 3),
(38, 'Tallo', 3),
(39, 'Tamalanrea', 3),
(40, 'Tamalate', 3),
(41, 'Denpasar Barat', 4),
(42, 'Denpasar Selatan', 4),
(43, 'Denpasar Timur', 4),
(44, 'Denpasar Utara', 4),
(45, 'Asmat', 5),
(46, 'Biak Numfor', 5),
(47, 'Boven Digoel', 5),
(48, 'Deiyai', 5),
(49, 'Dogiyai', 5),
(50, 'Buru', 6),
(51, 'Buru Selatan', 6),
(52, 'Kepulauan Aru', 6),
(53, 'Maluku Barat Daya', 6),
(54, 'Maluku Tengah', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id`, `nama`) VALUES
(1, 'Jogja'),
(2, 'Jawa Timur'),
(3, '8Â°');

-- --------------------------------------------------------

--
-- Table structure for table `pembagian_waktu`
--

CREATE TABLE `pembagian_waktu` (
  `id` int(11) NOT NULL,
  `waktu` varchar(4) NOT NULL,
  `propinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembagian_waktu`
--

INSERT INTO `pembagian_waktu` (`id`, `waktu`, `propinsi`) VALUES
(1, 'wib', 'Jawa Barat'),
(2, 'wib', 'Jawa Tengah'),
(3, 'wita', 'Makasar'),
(4, 'wita', 'Bali'),
(5, 'wit', 'Papua'),
(6, 'wit', 'Maluku');

-- --------------------------------------------------------

--
-- Table structure for table `peta_buta_laut`
--

CREATE TABLE `peta_buta_laut` (
  `id` int(11) NOT NULL,
  `nama_laut` varchar(50) NOT NULL,
  `coordinat` text NOT NULL,
  `position_label_css` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta_buta_laut`
--

INSERT INTO `peta_buta_laut` (`id`, `nama_laut`, `coordinat`, `position_label_css`) VALUES
(1, 'Laut jawa', '467,294,433,325,441,366,596,381,608,358,610,335', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:65%;margin-left: 33%;'),
(2, 'Laut Banda', '864,356,896,334,990,337,986,386,952,400,810,406,800,380,808,367', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:72%;margin-left: 60%;'),
(3, 'Laut Buru', '1119,394,1138,377,1155,381,1204,373,1208,394,1190,401,1128,404', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:73%;margin-left: 83%;'),
(4, 'Laut Arafuru', '710,516,704,473,600,471,556,466,544,500,562,520,650,525', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:89%;margin-left:41%;');

-- --------------------------------------------------------

--
-- Table structure for table `peta_buta_pulau`
--

CREATE TABLE `peta_buta_pulau` (
  `id` int(11) NOT NULL,
  `nama_pulau` varchar(50) NOT NULL,
  `coordinat` text NOT NULL,
  `position_label_css` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta_buta_pulau`
--

INSERT INTO `peta_buta_pulau` (`id`, `nama_pulau`, `coordinat`, `position_label_css`) VALUES
(1, 'Jawa', '592,442,596,437,588,430,592,418,592,411,582,410,580,406,577,398,584,390,570,388,557,388,548,388,544,391,539,388,529,388,517,382,505,382,500,377,492,377,488,390,480,390,453,388,443,388,432,372,412,372,401,366,396,367,384,367,376,364,366,366,364,374,360,385,350,382,348,384,348,390,359,393,378,398,380,407,396,409,417,415,429,415,440,410,450,413,478,416,488,423,512,430,532,430,559,426', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:500px;margin-left: 430px;'),
(2, 'kalimantan', '644,316,651,310,654,299,652,291,653,284,661,270,656,255,664,242,673,235,683,232,687,223,683,217,681,211,686,192,704,190,719,188,723,183,719,176,700,166,691,160,700,147,699,143,682,127,689,118,690,108,683,99,662,95,637,96,630,103,627,124,621,131,617,131,617,143,610,150,610,154,607,150,606,165,605,171,592,170,577,176,565,169,553,164,542,170,536,182,519,179,504,182,493,186,485,173,473,157,472,152,452,179,451,196,457,205,456,218,459,231,472,234,481,246,480,256,485,263,487,274,489,287,496,287,505,294,522,285,531,296,528,302,540,296,548,302,565,289,574,298,594,301,602,308,599,319,632,305', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top: 300px;margin-left: 500px;'),
(3, 'sulawesi', '820,357,824,353,830,349,829,343,826,334,825,322,832,318,829,311,821,310,808,303,808,296,808,288,807,284,799,276,793,266,787,258,798,251,809,244,816,248,823,249,835,249,839,243,832,239,822,238,832,236,838,232,834,224,827,220,817,225,811,228,805,225,800,232,794,233,785,229,775,244,769,241,765,240,757,230,748,223,747,212,756,195,782,199,791,198,832,202,860,200,871,184,884,170,872,160,849,182,826,181,814,185,794,175,785,180,776,174,768,173,764,182,760,186,756,183,755,177,738,202,735,215,736,221,729,235,724,256,722,267,715,278,711,283,715,299,727,295,734,310,732,329,728,345,724,354,747,353,759,355,759,350,754,334,758,330,759,312,753,306,758,300,757,288,751,286,758,281,764,277,772,278,769,289,765,297,775,309,785,316,785,327,795,338,794,350', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top: 360px;margin-left: 700px;'),
(4, 'maluku utara', '904,275,902,262,913,257,940,254,958,254,960,248,963,234,967,231,956,213,953,198,963,201,975,204,977,204,977,198,960,190,965,183,975,173,975,166,968,165,959,166,956,174,956,176,949,184,946,182,955,169,955,162,952,159,956,153,962,158,975,144,967,137,959,142,951,147,942,158,936,173,937,189,943,205,943,214,944,218,936,213,929,215,928,224,936,229,941,233,952,233,959,235,958,245,944,242,933,251,913,254,900,251,880,250,866,250,860,250,853,257,855,262,868,259,880,258,896,259,899,271', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top: 260px;margin-left: 900px;'),
(5, 'maluku', '1030,420,1042,401,1042,394,1108,390,1124,370,1123,350,1115,348,1106,362,1101,368,1024,306,1014,296,1011,290,986,281,976,280,956,282,940,287,932,293,924,294,908,286,892,288,892,300,913,310,929,304,937,301,948,311,957,309,961,303,945,297,972,299,989,303,1007,309,1020,313,1098,370,1097,381,1098,386,1037,394,1029,403,1025,414', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:390px;margin-left: 900px;'),
(6, 'papua', '1292,445,1293,384,1287,381,1290,377,1291,372,1293,370,1292,272,1284,270,1278,270,1270,267,1266,265,1256,265,1212,242,1188,254,1188,262,1177,254,1168,248,1166,241,1167,234,1159,231,1152,224,1134,224,1114,229,1108,224,1096,224,1073,210,1056,222,1042,222,1033,226,1035,211,1014,209,1000,213,1003,221,1013,231,1021,242,1008,251,990,254,990,262,1008,262,1022,244,1036,247,1050,251,1063,265,1075,270,1058,276,1060,283,1074,290,1076,302,1082,318,1097,309,1099,302,1167,328,1208,345,1221,374,1224,390,1222,403,1207,411,1201,428,1236,426,1243,423,1267,422', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top: 380px;margin-left:85%;'),
(7, 'nusa tenggara timur', '889,419,897,414,912,414,915,407,910,403,899,405,893,407,887,407,846,419,832,419,818,414,812,422,807,426,781,426,759,421,754,419,742,427,738,434,740,450,717,452,717,458,734,465,747,475,752,481,762,475,791,485,820,496,832,482,848,474,865,470,875,456,874,439,861,440,861,449,850,454,845,450', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 20%;top:81%;margin-left:52%;'),
(8, 'nusa tenggara barat', '691,441,692,445,698,442,709,442,716,438,711,426,700,426,695,426,691,426,680,421,674,421,668,417,668,426,662,428,658,429,650,430,645,423,636,426,632,430,631,435,624,437,635,444,646,446,656,450', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30%;top:76%;margin-left:46%;'),
(9, 'bali', '618,434,624,435,630,430,623,419,608,419,600,421,596,422,595,426,605,432,613,438', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 20%;top:78%;margin-left:44%;'),
(10, 'sumatera', '373,353,376,323,375,315,378,307,376,296,381,287,385,282,394,286,418,287,427,287,433,286,438,276,428,269,421,268,416,271,397,274,392,269,381,262,380,248,373,239,433,115,442,107,437,96,428,92,420,101,428,109,426,118,370,239,364,244,360,245,356,251,352,257,345,255,341,234,337,224,342,216,347,216,351,215,345,205,339,204,342,186,346,178,340,173,332,173,324,174,320,178,326,226,314,222,320,214,318,207,318,201,311,190,297,191,302,186,304,181,296,175,289,171,282,162,274,162,268,160,266,151,259,149,254,151,244,143,240,150,232,146,232,136,224,134,221,127,196,109,184,103,177,96,175,87,164,74,136,68,108,60,96,66,101,81,138,112,156,133,133,142,116,131,109,131,114,138,128,143,148,170,160,196,168,191,188,226,184,236,198,254,206,262,216,269,242,258,272,303,300,327,339,349', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top: 260px;margin-left: 10%;');

-- --------------------------------------------------------

--
-- Table structure for table `peta_buta_selat`
--

CREATE TABLE `peta_buta_selat` (
  `id` int(11) NOT NULL,
  `nama_selat` varchar(50) NOT NULL,
  `coordinat` text NOT NULL,
  `position_label_css` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta_buta_selat`
--

INSERT INTO `peta_buta_selat` (`id`, `nama_selat`, `coordinat`, `position_label_css`) VALUES
(1, 'karimata', '446,229,440,186,345,186,364,238', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:45%;margin-left: 26%;'),
(2, 'sunda', '390,363,388,348,375,355,360,358,329,355,340,378,354,377,361,363,374,364', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:69%;margin-left: 24%;'),
(3, 'makassar', '703,308,709,260,724,225,728,202,696,198,690,210,693,224,684,242,668,257,661,308', 'color: white;font-size: 30px;position:absolute;z-index:5; width: 30px;top:50%;margin-left: 49%;');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama_prov` varchar(30) NOT NULL,
  `ibukota` varchar(30) NOT NULL,
  `jml_penduduk` int(11) NOT NULL,
  `luas_wilayah` int(11) NOT NULL,
  `rumah_adat` varchar(30) NOT NULL,
  `tari_adat` varchar(30) NOT NULL,
  `bhs_daerah` varchar(30) NOT NULL,
  `suku` varchar(30) NOT NULL,
  `gbr_baju_adat` varchar(100) NOT NULL,
  `gbr_rumah_adat` varchar(100) NOT NULL,
  `coords` text NOT NULL,
  `nama_baju_adat` varchar(40) NOT NULL,
  `wilwak` enum('WIB','WITA','WIT') NOT NULL,
  `position_label_css` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama_prov`, `ibukota`, `jml_penduduk`, `luas_wilayah`, `rumah_adat`, `tari_adat`, `bhs_daerah`, `suku`, `gbr_baju_adat`, `gbr_rumah_adat`, `coords`, `nama_baju_adat`, `wilwak`, `position_label_css`) VALUES
(1, 'Kalimantan Utara', 'Sumatra', 3000, 3000, 'Rumah Bolay Tidung', 'tari Kencel Ledo', 'Tidung dan Dayak  ', 'Dayak', 'B20170416045216000000PM.gif', 'R20170422055546000000AM.jpg', '600,173,618,186,625,182,635,182,647,159,657,149,669,146,680,148,684,150,696,150,696,145,686,137,680,125,688,116,690,108,675,99,668,97,636,98,628,107,627,128,617,131,618,143,609,152', 'Kulavi Donggala', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:34%;margin-left:46%;'),
(3, 'Kalimantan Timur', 'Tanjung Selor', 355, 3737753, 'Rumah Lamin', 'Tari Gong', 'Melayu, Dayak, Bugis, Banjar  ', 'Ngaju, Laut, Maanyan, Bakumpai', 'B20170416045323000000PM.gif', 'R20170422055612000000AM.jpg', '719,185,717,180,701,169,688,162,696,150,685,148,681,148,669,146,663,147,655,150,650,154,638,178,636,182,627,180,620,183,619,186,602,176,597,172,598,170,592,169,590,175,586,179,582,181,583,186,581,192,586,192,593,193,608,188,615,194,612,200,608,202,612,210,618,208,620,214,618,217,623,222,624,227,631,234,630,247,632,253,644,264,654,262,651,257,675,233,684,229,684,219,679,216,679,204,685,193,689,189,703,190,716,188', 'Kalimantan Timur', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:44%;margin-left:45%;'),
(9, 'Kalimantan Selatan', 'Banjarmasin', 363, 3737753, 'Rumah Banjar Bubungan Tinggi', 'Tari Baksa Kembang', 'Jawa', 'Ngaju, Laut, Maanyan, Bakumpai', 'B20170416045342000000PM.gif', 'R20170422055646000000AM.jpg', '655,262,658,266,656,270,649,286,650,299,650,309,646,316,643,316,639,316,636,310,632,306,629,307,616,313,607,317,602,318,600,316,600,308,598,301,597,299,598,290,613,274,614,268,622,260,623,249,630,248,632,255,636,261,644,266', 'Pengantin Bagajah Gamuling Baular Lulut', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:56%;margin-left:45%;'),
(10, 'Kalimantan Tengah', 'Palangkaraya', 22, 153800, 'Rumah Bentang', 'Tari Tambun & Bungai', 'Melayu, Dayak, dan Mandarin  ', 'Dayak,Kapuas, Ot Danum, Ngaju,', 'B20170416045359000000PM.gif', 'R20170422055708000000AM.jpg', '595,301,598,290,614,273,613,268,621,261,622,253,624,248,629,247,632,238,626,231,623,229,622,223,620,221,618,217,620,209,612,212,609,203,614,197,612,191,608,189,594,195,587,193,581,193,578,195,574,200,568,203,570,214,567,216,564,221,556,223,549,226,538,227,532,231,527,231,524,236,521,241,516,243,508,249,508,253,510,259,510,265,512,270,514,278,500,287,501,290,507,294,517,287,522,288,526,289,528,292,528,301,531,304,540,297,548,303,560,293,564,292,574,300,586,301,584,298', 'Kalimantan Tengah', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:52%;margin-left:39%;'),
(11, 'Kalimantan Barat', 'Pontianak', 439, 146807, 'Rumah Istana Kesultanan Pontia', 'Tari Monong', 'Melayu, Dayak,  dan Tionghoa  ', 'Kayau, Ulu Aer, Mbaluh, Manyuk', 'B20170416045426000000PM.gif', 'R20170422055722000000AM.jpg', '500,289,496,284,489,289,486,288,486,280,485,267,485,263,477,256,480,247,472,235,466,237,458,227,454,217,460,208,456,205,451,200,453,188,463,163,472,153,472,165,479,173,489,180,496,187,508,184,518,183,530,183,539,181,542,172,553,168,562,169,571,176,584,171,591,171,591,176,584,179,582,184,583,188,580,196,577,197,568,203,568,207,570,213,566,216,564,221,556,222,550,226,538,227,529,232,525,236,520,241,510,247,507,252,508,257,508,260,510,262,510,265,510,268,513,271,513,278', 'Perang', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width:auto;top:46%;margin-left:35%;'),
(12, 'Kepulauan Riau', 'Tanjung Pinang', 169, 13741, 'Belah Bubung', 'Tandak', 'Melayu', 'Melayu, Siak, Sakai, Kubu, Ker', 'B20170416045450000000PM.gif', 'R20170422055740000000AM.jpg', '432,118,439,111,439,105,431,95,424,98,421,103,426,111,424,114,341,175,324,174,319,180,328,184,334,184,338,187,334,207,331,219,338,223,346,216,347,210,342,207,342,189,344,181,342,178,424,117', 'Belanga', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:42%;margin-left: 24%;'),
(13, 'Riau', 'Pekan Baru', 554, 94561, 'Selaso Jatuh Kemba', 'Joged lambak', 'Melayu', 'Melayu, Akit, Talang Mamak, Hu', 'B20170416045502000000PM.gif', 'R20170422055755000000AM.jpg', '231,140,233,144,240,150,243,146,245,145,251,148,256,151,261,150,262,150,266,151,267,155,268,162,272,168,275,164,277,164,284,166,286,165,288,170,290,175,294,173,299,176,303,181,304,184,300,191,301,194,305,191,310,190,316,194,318,198,320,204,316,208,318,212,320,214,315,220,312,222,309,227,300,224,290,233,287,234,273,227,266,227,258,221,252,220,249,218,242,206,245,200,238,192,234,192,230,194,228,192,226,183,227,175,226,173,225,170,224,167,226,169,232,167,230,161', 'Melayu', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:43%;margin-left: 18%;'),
(14, 'Jambi', 'Jambi', 309, 244477, 'Panjang', 'Sekapur Sirih', 'Kubu, Kerinci, Batin, Melayu, ', 'Batin, Kerinci, Penghulu, Peda', 'B20170416045533000000PM.gif', 'R20170422055900000000AM.jpg', '312,223,316,225,325,228,334,228,336,230,340,246,334,246,328,248,323,249,314,249,312,250,309,251,312,255,311,259,308,260,308,260,305,256,302,258,299,261,296,263,294,262,292,268,289,270,280,270,276,271,273,270,268,271,258,262,251,254,253,251,253,248,257,250,262,243,265,242,265,240,264,237,268,232,267,228,272,228,278,230,282,234,288,235,292,233,298,227,302,224,308,228,312,224', 'Melayu Jambi', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:52%;margin-left: 20%;'),
(15, 'Sumatera Barat', 'Padang', 484, 42575, 'Rumah Gadang', 'Tari Baralek Gadang', 'Minang', 'Minangkabau, Melayu, dan Menta', 'B20170416045913000000PM.gif', 'R20170422085711000000AM.jpg', '236,192,230,195,226,192,227,190,227,187,226,185,225,184,222,182,219,180,218,183,220,187,218,190,217,190,214,190,210,189,208,189,205,193,200,196,200,198,210,201,214,208,221,216,196,225,190,228,188,228,188,231,186,235,186,239,193,247,200,252,210,260,214,269,218,266,216,262,211,255,206,248,200,238,198,235,196,228,221,218,225,222,234,238,244,254,245,256,243,261,246,267,248,267,254,262,250,254,252,251,253,251,255,249,264,240,264,236,267,232,265,227,257,224,259,222,253,221,248,218,241,207,244,202,243,198', 'Batu Sangkar, Pakaian Penghulu, Pakaian ', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:49%;margin-left: 13%;'),
(16, 'Bengkulu', 'Bengkulu', 171, 72078, 'Rakya', 'Bidadari', 'Melayu, Serawai, Rejang, Pasem', 'Suku Rejang, Suku Serawai, Suk', 'B20170416045812000000PM.gif', 'R20170422060031000000AM.jpg', '312,332,319,327,317,326,313,322,310,316,307,312,301,310,297,308,294,305,290,300,300,292,298,291,293,292,287,287,276,276,273,274,266,272,261,267,254,262,249,266,248,268,256,278,261,288,266,290,277,302,293,319', 'Bengkulu', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:58%;margin-left:15%;'),
(17, 'Sumatera Selatan', 'Palembang', 744, 11333907, 'Adat Limas', 'Putri Bekhusek', 'Melayu Palembang', 'Melayu, Kikim, Semenda, Komeri', 'B20170416045947000000PM.gif', 'R20170422060110000000AM.jpg', '268,272,272,272,274,273,276,273,280,271,279,271,285,271,289,270,291,269,293,271,295,265,295,264,294,263,297,262,298,261,299,263,303,260,304,259,304,259,306,260,307,263,311,260,310,257,312,253,311,252,314,251,317,252,320,251,325,250,329,248,334,247,339,248,340,253,346,258,346,260,346,267,349,268,353,269,356,265,360,265,363,266,365,266,366,267,368,272,370,277,374,281,378,284,378,287,374,292,373,296,370,297,375,304,374,307,372,310,369,311,364,305,362,303,356,300,356,301,353,307,349,312,340,316,334,320,330,322,329,331,328,333,321,329,316,327,313,321,309,316,301,311,293,309,292,303,293,300,301,294,294,293,289,293,285,287,279,280,273,273', 'Aesan Gede', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:58%;margin-left:22%;'),
(18, 'Lampung', 'Lampung', 759, 3537684, 'Nowou Sesat', 'Melinting', 'Lampung (Api dan Nyo)', 'Pesisir, Pubian, Sungkai, Seme', 'B20170416050011000000PM.gif', 'R20170422060125000000AM.jpg', '369,354,375,338,376,325,378,323,376,316,373,312,370,312,368,310,364,305,360,299,357,300,353,303,352,308,351,311,345,313,336,317,329,321,329,327,330,332,328,334,322,328,321,327,317,328,313,331,312,335,332,348,340,347,341,345,347,350,355,348,357,345', 'Tulang Bawang', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:64%;margin-left:25%;'),
(19, 'Kepulauan Bangka Belitung', 'Pangkal Pinang', 122, 8172474, 'Rakit Limas', 'Zapin', 'Melayu Bangka ', 'Suku Melayu (suku bangsa asli)', 'B20170416050117000000PM.gif', 'R20170422060150000000AM.jpg', '424,283,427,287,430,287,433,282,437,279,436,274,433,271,426,267,420,269,417,273,417,275,397,271,390,266,381,263,381,262,381,257,381,251,377,245,376,241,371,239,366,239,364,240,360,243,358,245,357,250,355,252,353,255,356,259,366,260,373,268,373,271,372,272,376,279,384,279,389,283,395,287,396,279,397,273,417,278,416,281,419,290,424,285', 'Paksian', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; max-width: 200px;top:50%;margin-left:25%;'),
(20, 'Sumatera Utara', 'Medan', 1298, 71680, 'Adat Bolon', 'Tor-Tor', 'Batak', 'Batak Karo, Batak Simalungun, ', 'B20170416050149000000PM.gif', 'R20170422060211000000AM.jpg', '200,196,208,189,209,188,217,191,220,190,221,186,219,183,218,180,222,182,225,183,226,178,225,174,225,171,222,168,223,167,228,167,230,167,230,163,230,156,232,144,229,135,226,134,222,133,221,126,209,118,200,111,194,111,189,105,185,100,178,98,173,96,166,105,170,120,171,126,170,130,173,132,172,139,177,147,173,151,189,162,158,167,151,167,148,169,152,175,161,185,162,191,170,192,171,182,171,178,165,174,161,172,160,169,189,164,191,167,194,179', 'Ulos', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:37%;margin-left: 13%;'),
(21, 'Nagro Aceh Daru Salam', 'Banda Aceh', 448, 5736557, 'Krong Bade', 'Seudati', 'Aceh Gayo, Alas, Aneuk Jamee, ', 'Aceh, Gayo, Alas, Kluet, Melay', 'B20170416050217000000PM.gif', 'R20170422060238000000AM.jpg', '173,150,175,146,175,143,171,138,174,134,170,130,168,127,169,124,169,122,170,116,166,110,168,102,177,96,178,92,177,90,170,88,167,76,155,70,144,70,128,70,119,68,104,61,98,67,99,76,110,91,131,107,140,113,150,124,159,131,131,142,119,132,116,130,112,131,113,137,122,141,129,146,131,144,159,132,161,140,166,148', 'Ulee Balang', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: auto;top:27%;margin-left: 7%;'),
(22, 'Banten', 'Serang', 1054, 880083, 'Kesepuhan', 'Tari Topeng', ' Sunda, Banyumasan, dan Jawa', 'Baduy , Sunda, dan Banten', 'B20170416050237000000PM.gif', 'R20170422060400000000AM.jpg', '388,367,384,367,376,364,369,363,362,371,360,379,360,384,350,381,348,382,346,386,352,391,362,391,375,396,381,392,378,386,380,379,388,372', 'Pakaian Pengantin', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:72%;margin-left:24%;'),
(23, 'DKI Jakarta', 'Jakarta', 959, 15400, 'Rumah Kebaya', 'Tari Yapong', 'Betawi', 'Betawi, Jawa, dan  Sunda', 'B20170416050257000000PM.gif', 'R20170422060414000000AM.jpg', '389,373,393,375,396,377,399,376,398,372,397,368,396,367,389,368,388,368', 'Betawi', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: auto;top:69%;margin-left:28%;'),
(24, 'Jawa Barat', 'Bandung', 4302, 3266559, 'Kraton Kesepuhan Cirebon', 'Tari Merak', 'Sunda', 'Sunda , Betawi , Jawa Cirebon', 'B20170416050316000000PM.gif', 'R20170422060436000000AM.jpg', '399,376,396,369,396,365,405,364,412,371,424,373,433,373,440,382,442,388,444,394,439,397,439,404,441,413,435,415,427,417,421,415,412,415,403,413,394,408,382,407,377,402,374,398,380,394,380,389,378,381,385,375,389,373,395,379', 'Kebaya', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width:auto;top:72%;margin-left:28%;'),
(25, 'Jawa Tengah', 'Semarang', 3238, 34966, 'Rumah Jago', 'Tari Bambangan Cakil', 'Jawa', 'Jawa, Karimun, dan Samin', 'B20170416050331000000PM.gif', 'R20170422060513000000AM.jpg', '443,387,473,389,484,392,485,389,492,377,497,376,503,381,505,384,512,383,519,385,516,388,513,392,514,396,511,400,502,398,498,405,501,407,505,409,505,413,504,417,504,421,499,418,495,423,487,420,486,420,489,419,492,415,489,414,485,412,483,408,482,409,477,411,474,411,472,414,461,415,449,411,444,415,436,411,438,408,440,405,441,398', 'Kain Kebaya', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width:auto;top:74%;margin-left:33%;'),
(26, 'Yogyakarta', 'Yogyakarta', 345, 3142, 'Bangsai Kencono dan Rumah Jogl', 'Tari Serimpi', 'Jawa', 'Jawa', 'B20170416050500000000PM.gif', 'R20170422060525000000AM.jpg', '492,424,491,421,491,415,491,414,486,413,484,412,482,407,482,407,478,411,476,409,474,408,473,412,473,413,478,419,485,420,488,424', 'Kesatrian', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:79%;margin-left:33%;'),
(27, 'Jawa Timur', 'Surabaya', 3747, 4792198, 'Rumah Joglo(Jawa Timuran)', 'Tari Remong', 'Jawa dan Madura', 'Jawa, Madura, Tengger, dan Osi', 'B20170416053532000000PM.gif', 'R20170422060614000000AM.jpg', '493,425,512,429,522,428,520,427,546,432,558,427,572,433,581,438,584,437,590,441,595,439,588,430,591,414,590,410,584,409,580,406,578,405,572,409,567,411,574,399,581,393,584,391,573,387,560,387,550,388,541,392,545,396,553,399,567,401,573,399,565,410,556,412,547,403,540,391,537,387,532,388,524,388,520,386,514,387,515,397,509,400,501,401,502,408,506,413,504,421,499,421,493,424', 'Pesaan', 'WIB', 'color: white;font-size: 15px;position:absolute;z-index:5; width:auto;top:76%;margin-left:38%;'),
(28, 'Bali', 'Denpasar', 389, 563286, 'Candi Bentar', 'Tari Legong', 'Bali dan Sasak', 'Bali Aga dan Bali Majapahit', 'B20170416050728000000PM.gif', 'R20170422100325000000AM.jpg', '616,439,619,432,626,432,627,428,626,423,626,423,617,416,606,417,601,420,594,420,592,421,594,429,606,430', 'Bali', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:79%;margin-left:44%;'),
(29, 'Nusa Tenggara Barat', 'Mataram', 449, 2015315, 'Rumah Dalam Loka Sumawa', 'Tari Mpaa Lenggogo', 'Sasak, Bali, Sumbawa, Bima', 'Bali, Sasak, Samawa, Mata, Don', 'B20170416050820000000PM.gif', 'R20170422061552000000AM.jpg', '649,448,679,444,688,442,691,440,694,441,698,441,708,441,714,436,712,428,706,425,699,424,692,423,685,425,678,419,672,420,670,418,666,420,663,428,658,427,651,429,648,427,642,422,635,422,630,425,631,433,624,435,625,443,635,444,644,444', 'Lombok', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: auto;top:78%;margin-left:47%;'),
(30, 'Nusa Tenggara Timur', 'Kupang', 468, 473499, 'Rumah Musalaki', 'Tari Gareng Lameng', 'Alor, Belu, Ende, Larantuka, M', 'Sabu, Sumba, Rote, Kedang, Hel', 'B20170416050836000000PM.gif', 'R20170422061426000000AM.jpg', '889,419,896,414,905,416,914,409,913,405,905,404,898,407,890,405,887,407,848,422,831,418,822,418,816,413,812,418,812,423,798,428,778,427,766,421,754,417,747,420,737,429,737,437,749,440,764,443,746,451,741,449,738,451,739,448,730,451,717,451,717,454,721,460,732,461,748,472,756,477,766,471,791,477,788,484,796,483,818,489,822,492,829,487,836,484,837,477,848,477,857,476,870,460,878,455,873,447,877,443,874,440,867,440,884,416,889,409,884,411,849,423,837,430,821,433,801,440,779,441,765,444,750,455,754,456,761,456,762,462,765,468,790,478,797,478,801,482,818,487,827,480,834,477,835,470,840,456,846,449,848,451,851,454,852,453,855,455,858,450,860,447,862,444,866,441', 'Nusa Tenggara Timur', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width:auto;top:81%;margin-left:56%;'),
(31, 'Maluku', 'Ambon', 153, 851000, 'Rumah Baileo', 'Tari Lenso', 'Banda, Buru, Furu, Aru, Kei, K', 'Buru, Banda, Seram, Kei, Ambon', 'B20170416050900000000PM.gif', 'R20170422060641000000AM.jpg', '1023,408,1025,413,1030,418,1034,412,1041,400,1041,395,1102,388,1108,386,1117,378,1121,368,1121,353,1116,347,1108,359,1102,366,1100,380,1100,386,1017,312,1021,303,1015,296,1011,290,1005,286,986,280,979,279,972,282,954,282,941,288,935,290,932,292,925,293,909,286,894,284,892,288,888,298,897,308,913,311,925,304,934,298,939,299,943,308,954,307,960,304,953,299,946,293,956,296,965,296,977,301,990,300,1003,306,1014,311,1096,384,1037,392', 'Baju Cele', 'WIT', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:60%;margin-left:67%;'),
(32, 'Papua', 'Jayapura', 285, 116571, 'Rumah Honai', 'Tari Musyoh , Tari Selamat Dat', '  ', 'Mey Brat, Arfak, Asmat, Dani, ', 'B20170416050919000000PM.gif', 'R20170422060700000000AM.jpg', '1287,442,1289,435,1291,386,1286,380,1287,374,1287,371,1292,366,1290,272,1286,274,1282,270,1271,271,1268,264,1261,266,1211,243,1196,246,1184,252,1176,254,1165,249,1154,248,1163,240,1164,236,1160,233,1152,224,1144,222,1133,225,1137,234,1143,233,1150,240,1153,252,1132,246,1124,247,1135,255,1144,256,1156,258,1168,260,1173,259,1171,264,1165,263,1165,274,1159,276,1154,281,1152,289,1144,292,1136,291,1129,280,1124,264,1118,267,1118,273,1119,279,1119,284,1125,294,1128,300,1132,300,1139,304,1143,303,1142,308,1144,313,1140,312,1142,320,1140,322,1205,345,1218,364,1226,378,1224,385,1230,394,1213,400,1205,410,1205,424,1200,427,1235,426,1242,420,1249,422,1262,421', 'Papua', 'WIT', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:60%;margin-left:87%;'),
(33, 'Papua Barat', 'Manokwari', 76, 116571, 'Rumah Honai', 'Tari Selamat Datang', ' ', 'Mey Brat, Arfak, Asmat, Dani, ', 'B20170416050936000000PM.gif', 'R20170422060719000000AM.jpg', '1140,323,1125,314,1117,311,1112,308,1099,302,1093,304,1094,312,1076,318,1073,312,1072,292,1068,284,1050,282,1055,274,1065,271,1075,275,1084,269,1096,268,1093,264,1070,266,1064,267,1050,256,1050,251,1040,243,1034,247,1008,231,1002,248,1010,259,1007,265,995,263,989,258,993,254,1001,249,1006,227,1006,219,997,216,1001,210,1014,208,1030,210,1032,219,1021,221,1032,228,1033,228,1044,223,1050,223,1061,214,1073,211,1086,218,1106,222,1113,229,1113,234,1112,248,1113,255,1110,263,1117,272,1119,279,1118,284,1124,292,1129,299,1137,300,1141,304,1143,304,1145,309', 'Ewer', 'WIT', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:50%;margin-left:78%;'),
(34, 'Maluku Utara', 'Sofifi', 103, 3332122, 'Rumah Baileo', 'Tari Lenso', 'Bacan, Damar, Balela, Fayo, Lo', 'Halmahera, Obi, Morotai, Terna', 'B20170416050951000000PM.gif', 'R20170422060733000000AM.jpg', '901,276,893,265,889,259,873,258,862,260,854,260,855,252,862,246,873,245,881,248,892,250,907,252,909,250,933,244,938,230,934,227,927,222,925,218,928,212,932,211,938,211,937,200,936,188,933,178,934,171,937,167,939,158,942,152,951,147,956,146,960,138,967,136,974,138,975,147,965,154,957,159,956,167,956,172,968,164,971,165,973,175,969,185,959,187,970,194,975,198,975,198,974,207,964,202,953,203,955,208,960,219,964,224,967,234,958,244,959,254,944,255,930,254,912,256,902,261', 'Manteren Lamo', 'WIT', 'color: white;font-size: 15px;position:absolute;z-index:5; width: auto;top:43%;margin-left:69%;'),
(35, 'Sulawesi Utara', 'Manado', 223, 25768, 'Rumah Pewaris', 'Tari Maengket', 'Minahasa, Sangir, dan Talaud', 'Minahasa, Bolaang Mangondow, T', 'B20170416051017000000PM.gif', 'R20170422060750000000AM.jpg', '883,171,878,176,876,182,869,185,866,190,861,199,848,203,840,203,827,203,821,202,821,197,824,192,822,190,818,187,818,181,825,181,840,184,846,183,858,174,864,167,870,160,880,161', 'Kulavi (Donggala)', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:41%;margin-left:62%;'),
(36, 'Gorontalo', 'Gorontalo', 104, 10804, 'Rumah Dulohupa & Rumah Pewaris', 'Tari Pule Cinde', 'Atinggola, Gorontalo, Mongondo', 'Gorontalo, Atinggola, Suwawa, ', 'B20170416051030000000PM.gif', 'R20170422060808000000AM.jpg', '821,199,824,194,824,188,818,187,817,183,797,178,793,175,790,176,796,180,797,182,793,183,782,183,775,182,770,181,769,184,770,189,774,193,772,195,769,197,786,196,793,201,817,201', 'Gorontalo', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:43%;margin-left:57%;'),
(37, 'Sulawesi Tengah', 'Palu', 263, 68033, 'Rumah Pewaris', 'Tari Lumense', 'Balantak, Banggai, Bungku, Buo', 'Buol, Toli-toli, Tomini, Dompe', 'B20170416051042000000PM.gif', 'R20170422060820000000AM.jpg', '770,197,774,195,770,192,768,184,772,180,778,181,788,183,796,182,797,179,790,178,790,176,785,178,782,176,778,174,776,174,768,172,762,177,760,182,758,183,756,184,757,180,754,176,748,180,732,201,732,203,734,218,735,223,738,226,737,231,734,235,731,241,733,244,735,243,737,245,738,246,741,254,741,256,740,255,754,255,760,259,765,263,770,264,777,268,784,270,788,275,788,277,789,279,787,280,794,280,800,284,805,289,807,290,810,287,811,286,799,277,797,273,793,266,788,263,783,259,781,258,788,258,793,252,798,252,810,246,816,251,826,247,831,249,839,244,836,238,821,238,822,235,835,235,837,228,834,220,824,217,816,221,808,225,801,224,797,227,791,228,785,224,779,224,774,230,775,231,772,237,768,240,764,240,763,238,763,232,762,229,754,228,752,227,749,219,748,210,748,207,754,199,763,198', 'Nggembe', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:49%;margin-left:55%;'),
(38, 'Sulawesi Barat', 'Mamuju', 116, 1679619, 'Rumah Tongkonan', 'Tari Kipas', 'Mandar, Bugis, Toraja, dan  Ma', 'Mandar, Toraja, Bugis, Jawa, d', 'B20170416051056000000PM.gif', 'R20170422060846000000AM.jpg', '726,296,718,301,715,300,712,295,710,280,710,277,722,266,722,261,724,247,722,241,729,233,733,225,736,224,740,228,733,235,732,243,731,242,735,246,739,246,740,255,737,266,734,275,735,276,732,279,734,284,730,289,728,291', 'Sulawesi Barat', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:55%;margin-left:52%;'),
(39, 'Sulawesi Selatan', 'Makassar', 803, 6248254, 'Rumah Tongkonan', 'Tari Kipas', 'Bugis, Makssar, Mandar, dan To', 'Mandar, Bugis, Toraja, Saâ€™da', 'B20170416051112000000PM.gif', 'R20170422060909000000AM.jpg', '738,258,753,256,762,261,767,264,774,265,782,271,788,275,788,280,781,285,768,299,764,297,768,289,770,280,768,279,760,280,757,284,750,286,754,290,756,291,757,304,755,310,756,317,758,324,757,333,753,337,756,348,756,356,746,355,741,357,732,355,723,349,727,339,728,333,732,326,734,317,732,307,729,300,727,296,726,294,728,290,734,284,733,281,732,276,736,276,736,273,734,272', 'Bodo', 'WITA', 'color: white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:62%;margin-left:53%;'),
(40, 'Sulawesi Tenggara', 'Kendari', 1, 68033, 'Rumah Istana Buton', 'Tari Balumpa(Buton)', 'Balantak, Banggai, Bungku, Buo', 'Buol, Toli-toli, Tomini, Dompe', 'B20170416051123000000PM.gif', 'R20170422060930000000AM.jpg', '766,299,781,283,786,282,788,280,797,282,807,291,805,294,806,300,812,304,818,310,822,311,828,308,830,313,830,316,827,319,824,322,822,338,826,340,829,344,826,350,820,351,820,355,816,357,808,352,810,350,806,351,799,349,794,351,789,347,790,340,794,335,790,335,782,328,780,322,780,319,782,315', 'Suku Tolaki', 'WITA', 'color:white;font-size: 15px;position:absolute;z-index:5; width: 30px;top:63%;margin-left:58%;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ngadimin', '5449ccea16d1cc73990727cd835e45b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagi_waktu`
--
ALTER TABLE `bagi_waktu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kuis`
--
ALTER TABLE `detail_kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pembagian_waktu`
--
ALTER TABLE `detail_pembagian_waktu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembagian_waktu` (`id_pembagian_waktu`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembagian_waktu`
--
ALTER TABLE `pembagian_waktu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagi_waktu`
--
ALTER TABLE `bagi_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `detail_kuis`
--
ALTER TABLE `detail_kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_pembagian_waktu`
--
ALTER TABLE `detail_pembagian_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembagian_waktu`
--
ALTER TABLE `pembagian_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembagian_waktu`
--
ALTER TABLE `detail_pembagian_waktu`
  ADD CONSTRAINT `detail_pembagian_waktu_ibfk_1` FOREIGN KEY (`id_pembagian_waktu`) REFERENCES `pembagian_waktu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

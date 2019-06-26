-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 05:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumita_ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `kode_aka` int(100) NOT NULL,
  `semester` int(5) NOT NULL,
  `TA` varchar(10) NOT NULL,
  `ips` decimal(10,2) DEFAULT NULL,
  `ipk` decimal(10,2) DEFAULT NULL,
  `fk_nim` varchar(10) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`kode_aka`, `semester`, `TA`, `ips`, `ipk`, `fk_nim`, `keterangan`) VALUES
(1, 9, '2018/2019', '3.99', '3.50', 'L200144017', '');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `kode_admin` char(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tp_lahir` varchar(50) DEFAULT NULL,
  `tg_lahir` date DEFAULT NULL,
  `jenkel` varchar(20) DEFAULT NULL,
  `alamat` text,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`kode_admin`, `password`, `hak_akses`, `nama`, `tp_lahir`, `tg_lahir`, `jenkel`, `alamat`, `notelp`, `email`) VALUES
('ADM01', '2991fd10eb5ca192bcbe8108f63af8ba', 1, 'Didik Maryono', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `kode_angkatan` char(5) NOT NULL,
  `tahun` int(5) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`kode_angkatan`, `tahun`, `keterangan`) VALUES
('UMS00', 2014, 'Angkatan 2014'),
('UMS01', 2015, 'Angkatan 2015'),
('UMS02', 2016, 'Angkatan 2016'),
('UMS03', 2017, 'Angkatan 2017'),
('UMS04', 2018, 'Angkatan 2018');

-- --------------------------------------------------------

--
-- Table structure for table `data_bumita`
--

CREATE TABLE `data_bumita` (
  `A` varchar(10) DEFAULT NULL,
  `B` varchar(10) DEFAULT NULL,
  `C` varchar(35) DEFAULT NULL,
  `D` varchar(25) DEFAULT NULL,
  `E` varchar(8) DEFAULT NULL,
  `F` varchar(45) DEFAULT NULL,
  `G` varchar(37) DEFAULT NULL,
  `H` varchar(8) DEFAULT NULL,
  `I` varchar(8) DEFAULT NULL,
  `J` varchar(6) DEFAULT NULL,
  `K` varchar(111) DEFAULT NULL,
  `L` varchar(13) DEFAULT NULL,
  `M` varchar(35) DEFAULT NULL,
  `N` varchar(4) DEFAULT NULL,
  `O` varchar(8) DEFAULT NULL,
  `P` varchar(9) DEFAULT NULL,
  `Q` varchar(11) DEFAULT NULL,
  `R` varchar(10) DEFAULT NULL,
  `S` varchar(11) DEFAULT NULL,
  `T` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_bumita`
--

INSERT INTO `data_bumita` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`, `N`, `O`, `P`, `Q`, `R`, `S`, `T`) VALUES
('nim', 'password', 'nama', 'nomorMoU', 'tglMoU', 'jurusan', 'fakultas', 'tp_lahir', 'tg_lahir', 'jenkel', 'alamat', 'notelp', 'email', 'foto', 'nama_ibu', 'nama_ayah', 'notelp_ayah', 'notelp_ibu', 'alamat_ortu', 'angkatan'),
('D200140149', 'D200140149', 'Abdul Rahman', '051/I/2016', '02/12/17', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Tanjung RT 14/ RW 06, Pomah, Tulung, Klaten', '085226054187', 'aabrahman01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000164019', 'G000164019', 'Adibatul Kamila', '465/A.4-II/SR/VIII/2016', '16/08/16', 'Pai Internasional', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Gg. Sanjaya no. 39 kebondalem kendal', '081224005990', 'adibatulkamila@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J310170222', 'J310170222', 'Adik Fitriana Feri', '487/PMB-UMS/VIII/2017', '03/08/17', 'Gizi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jl. Perhutani Gg Anggrek RT 09/Rw04 kec. Kayen kab. Pati Jawa tengah kode pos 59171', '085225056750', 'anaputri027@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L200170024', 'L200170024', 'Afgani Bima Pradana', '487/PMB-UMS/VIII/2017', '03/08/17', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Ds. Tambaharjo runting RT 04 RW 1 kecamatan Pati Kabupaten pati, Jawa Tengah', '085222222376', 'zzone445@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A510160192', 'A510160192', 'Afifah Istiqomah', '338/A.4-II/SR/VIII/2016', '01/08/17', 'Pgsd', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Purworejo Rt/Rw 001/005 Jumapolo Jumapolo Karanganyar', '082243489790', 'afifahistiqomah91898@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('I000170181', 'I000170181', 'Afiq Miftahurrizqi Alhaq', '487/PMB-UMS/VII/2017', '03/08/17', 'Hukum Ekonomi Syariah', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Mangkuyudan,Rt 02 Rw 01,Purwosari,Laweyan', '085725032182', 'afiqalhaq97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('C100150202', 'C100150202', 'Agung Rahayu', '332/A.4-II/SR/VII/2015', '14/07/17', 'Hukum', 'FAKULTAS HUKUM', NULL, NULL, NULL, 'JL.GAMBIR SAWIT SELATAN 03 KEC.MANGUNHARJO KOTA MADIUN', '085879514712', 'agungrahayu17@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A710170029', 'A710170029', 'Agustina Iriyanti', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Tekhnik Informatika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'KEMIT RT.02 RW. 03, KWAREN, NGAWEN, KLATEN', '087734841533', 'agustinairiyanti716@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D600160146', 'D600160146', 'Ahmad Fauzi', '365/A.4-II/SR/VIII/2016', '17/03/98', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'JETIS RT03/04 KLEPU CEPER KLATEN', '085729332275', 'ahmadfauzi262@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J210160110', 'J210160110', 'Ahmad Maarif', '338/A.4-11/SR/VIII/2016', '01/08/16', 'Keperawatan', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Kp. Kebon Raya RT 12/03 Ds. Banyuasih Kec. Mauk Kab. TANGERANG', '089654886145', 'maarif.arabica0798@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('E100140105', 'E100140105', 'Ahmad Salikin', '169/IV/2015', '09/10/15', 'Geografi', 'FAKULTAS GEOGRAFI', NULL, NULL, NULL, 'Kalitulang 01/03, Guwo, Kemusu, Boyolali', '081226881706', 'sholikin11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('F100170235', 'F100170235', 'Aisyah Zahra Firdausi', '487/PMB-UMS/VIII/2017', '03/08/17', 'Psikologi', 'FAKULTAS PSIKOLOGI', NULL, NULL, NULL, 'Ponorogo, Jawa Timur', '085785788773', 'aisyazhrafirdaus@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G100170036', 'G100170036', 'Alfin Faiz Alfarizi', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ilmu Al-Qur\'An Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, NULL, '085875562101', 'faizalfin173@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J310150084', 'J310150084', 'Ali Mahfudhin', '332/A.4-11/SR/VII/2015', '14/07/15', 'Ilmu Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl. Raya Desa Bulu Meduro RT 02/RW 01 - Kec. Bancar - Kab. Tuban - Jawa Timur', '081233014671', 'mbahdawi14@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A520150067', 'A520150067', 'Amalia Khasanah', '413/A.4-II/SR/VIII/2015', '19/05/97', 'Pg-Paud', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Gg.Tumbakkeris, RT 02 RW 03, Petanahan, Kebumen, Jawa Tengah', '08979627838', 'amaliakhasanah97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B200160354', 'B200160354', 'Amir Fatahuddin', '338/A.4-II/SR/VIII/2016', '08/01/16', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Niten, Lampar, Musuk, Boyolali', '081390886703', 'fatahamir757@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A610150016', 'A610150016', 'Ana Nur Hanifah', '219/IV/2015', '12/02/15', 'Geografi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Simo kidul, rt2/5,kebak,kebakkramat,karanganyar', '085225531509', 'anahanifah@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200150065', 'L200150065', 'Angga Pratama', '176/A.4-II/SR/IV/2015', '18/04/15', 'Teknik Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Ds. Biting RT/RW. 02/04 Kec. Sambong Kab. Blora', '089654574504', 'tamapratama36588@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('C100160266', 'C100160266', 'Anggarita Intan Masyitoh', '338/A.4-11/SR/VIII/2016', '08/01/17', 'Ilmu Hukum', 'FAKULTAS HUKUM', NULL, NULL, NULL, 'Ds.Sukosari Rt.07/Rw.02 Kec.Dagangan Kab.Madiun', '089676233202', 'anggiintan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D200150289', 'D200150289', 'Anggit Dwi Suryanto', '413/A.4-II/SR/VIII/2015', '05/10/97', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'TELOYO WETAN RT04/02, TELOYO, WONOSARI, KLATEN', '089609321197', 'Anggitdwi64@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A310140189', 'A310140189', 'Anggraeni Dewi Sulistyowati', '084/IV/2015', '19/05/15', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Panasan Rt 2 rw 29 Donoharjo Ngaglik Sleman Yogyakarta', '085864083521', 'anggraenisuprat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G100150004', 'G100150004', 'Anggraini', '332/A.4-11/SR/VII/2015', '17/08/15', 'Ilmu Al-Quran Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'jambe, manjung, wonogiri', '082138378808', 'anggrasholihah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B100160016', 'B100160016', 'Anida Latifah', '291/A.4-11/SR/VI/2016', '29/06/16', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Pekuncen, Rt. 07 Rw. 01 Kec. Pekuncen Kab. Banyumas', '08973079171', 'anidalatifah1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B200160156', 'B200160156', 'Anindita Sari Handayani', 'NO.187/I/2016', '15/12/16', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Cumpleng rt19, Tunggul, Gondang, Sragen', '082214603608', 'aninditasari17@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A320150122', 'A320150122', 'Anisa Nur Rohmah', '051/I/2016', '17/02/16', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Sampang Semampir RT 03/04 Sempor Kebumen', '085725742918', 'ayundaanisa5@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A810170034', 'A810170034', 'Annas Rais Arni Royhan', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Olahraga', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Undaan lor Gg 20 Rt/Rw 02/04 undaan kudus', '085875850995', 'annasrais@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400160068', 'D400160068', 'Anugra Dwi Yulianto', '338/A.4-11/SR/VIII/2016', '07/01/16', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jl.Merbabu no.113 RT02 RW09,Surowedanan,Pulisen,kec.Boyolali,Boyolali', '085702610690', 'anugrayulianto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('L200160099', 'L200160099', 'Arif Nur Faudin', '-', '16/08/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Ds. Mayong kidul rt 01/05 kec. Mayong kab. Jepara', '089670104523', 'arifnurfaudin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L100150025', 'L100150025', 'Arif Surya Kusuma', '176/A.4-II/SR/IV/2015', '18/04/15', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Gatak Rt 02/II, Pabelan, Kartasura, Sukoharjo', '081215210725', 'ichisurya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('E100160324', 'E100160324', 'Asep Saifulloh', '338/A.4-11/SR/VIII/2016', '01/08/16', 'Geografi', 'FAKULTAS GEOGRAFI', NULL, NULL, NULL, 'Perum.cindelaras RT 4 RW 8 kec.Tuntang kel.KarangTengah kab.Semarang', '0895398947005', 'asepsaifulloh24@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('K100170171', 'K100170171', 'Astri Dwi Kusumawati', '487/PMB-UMS/VIII/2017', '03/08/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, 'Jl. Raya jenangan-Kesugihan, rt.02/ rw.02, Ds. Nglayang, Kec. Jenangan, kab. Ponorogo, jawa timur', '083845392498', 'astridwikusuma.wati@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G000150103', 'G000150103', 'Atha Zha Zha Zaky', '332/A.4-II/SR/VII/2015', '14/07/15', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Perumbulu, RT 06/RW 17, Bulu, Jaten, Karanganyar', '085865292885', 'muhabduh6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A420160205', 'A420160205', 'Aulia Zakiyah Inas', '365/A.4-LL/SR/VLLL/2016', '22/09/16', 'Fkip Pend.Biologi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Perum. Puri Mandiri ll, rt 06 rw 05, mojorejo, sawahan, ngemplak, boyolali', '085700186141', 'auliadekirudenki@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J410160067', 'J410160067', 'Aulia Zumrotus Sholikhah', '209/A.4-11/SR/V/2016', '09/05/16', 'Kesehatan Masyarakat', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Ds. Undaan Lor 03/04 Kec. Undaan Kab. Kudus', '085868873766', 'Aulia.zumrotussholikhah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D200160257', 'D200160257', 'Auliya Imam Maulana', '338/A.4-11/SR/VIII/2016', '01/08/16', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'BUARA, RT.08/RW.07, KETANGGUNGAN, BREBES', '085740926449', 'auliyaimammaulana@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B300150051', 'B300150051', 'Ayunda Fitriani', '219/IV/2015', '02/12/15', 'Iesp', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl.Ronggolono No.36 03/02 Gendingan Lor Widodaren Ngawi', '085785307664', 'afyunda97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410160202', 'A410160202', 'Ayuning Tyas Maharani', 'NO. 187/I/2016', '15/12/16', 'Pendidikan Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Brambang 1, Wonokerso, Kedawung, Sragen', '085786374813', 'ayutyas58@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('F100170152', 'F100170152', 'Azi Mulyaningsih', '487/PMB-UMS/VII/2017', '03/08/17', 'Twinning Program', 'FAKULTAS PSIKOLOGI', NULL, NULL, NULL, 'Jl. Projosumarto 01 rt 15 rw 04 Cangkring Talang Tegal', '0895382838776', 'azimulyaningsih21@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J310170115', 'J310170115', 'Azizah Ainurrohmah', '257/PMB-UMS/V/2017', '19/05/17', 'Gizi (S1)', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Pasuruhan Lor Rt 1/Rw 10 Kec. Jati Kab. Kudus', '085741585719', 'ainurrohmah.azizah3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J120160023', 'J120160023', 'Azizah Rahmawati', '365/A.4-11/SR/VIII/2016', '24/09/98', 'Fisioterapi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Senden RT.08/RW.04, Ngawonggo , Ceper , Klaten, Jawa Tengah', '085600615691', 'Azizahrahmawati78@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B300142019', 'B300142019', 'Bangkit Muhammad Amir', '051/I/2016', '17/02/16', 'Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Pokakan RT 01/04 Jetis Sukoharjo', '082134643955', 'bangkit.ma@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L100150026', 'L100150026', 'Bangkit Nurullah', '051/1/2016', '17/02/16', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Ds. Babalan Kidul RT 04/02 Kec. Bojong Kab. Pekalongan', '081567822968', 'bangkitnurullah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L100170043', 'L100170043', 'Banu Adzkar', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Kranggan RT 04 RW 03 Kec. Pekuncen Kab. Banyumas', '085747142924', 'banujarwis19@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J410150047', 'J410150047', 'Banun Afidhotus Sholekhah', '176/A.4-II/SR/IV/2015', '14/07/15', 'Kesehatan Masyarakat', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Desa Banteng Mati rt 03 rw 02 kecamatan Mijen Kabupaten Demak Jawa Tengah', '085712392256', 'banun.sholihah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('I000170042', 'I000170042', 'Beny Bagus Saputro', '257/PMB-UMS/V/2017', '19/05/17', 'Hukum Ekonomi Syariah', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Jomblang Rejo Rt 01 Rw 08, Kelurahan Sonorejo,Kecamatan Sukoharjo, Sukoharjo, Jawa Tengah.', '0895364272475', 'beny_bagus_saputro@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400170049', 'D400170049', 'Budi Utomo', '257/PMB-UMS/V/2017', '19/05/17', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Ds Sudo Rt 01 Rw 04 Kec. Sulang Kab. Rembang', '089667218272', 'budiibadurrohman2207@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D200170211', 'D200170211', 'Chairul Sholeh', '487/PMB-UMS/VLLL/2017', '03/08/17', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Desa kedungjaran RT 5 RW 3 kecamatan Sragi kabupaten Pekalongan', '082325153955', 'Csholeh2017@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B300160092', 'B300160092', 'Chalimatus Sa\'Diyyah', '208/A.4-II/SR/V/2016', '09/05/16', 'Ilmu Ekonomi Studi Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Trunosuran, Rt 03 Rw 06 Pasar kliwon. Surakarta', '0895367963720', 'diyyah27@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D600160144', 'D600160144', 'Cindy Saraswati', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Rt 06 Rw 01 Desa Rejomulyo, Kecamatan Panekan, Kabupaten Magetan, Jawa Timur', '081330277284', 'saraswaticindy43@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D400164002', 'D400164002', 'Crismoni Gracia Susanto', '292/A.4-II/SR/VI/2016', '29/06/16', 'Electrical Engineering International', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Bembem 02/03, Gentan, Bendosari, Sukoharjo', '082242020076', 'crismonigracia98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B100140112', 'B100140112', 'Deden Kurnia', '051/I/2016', '17/02/16', 'Ekonomi Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl. Ampera Gg. alam Pontianak, Kalimantan barat', '081522984019', 'dedenkurnia99145@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A810170033', 'A810170033', 'Dela Kusumawati', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Olahraga', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jl. Irian gang.3 No.6 Rt 002/ rw 009 Panggung Tegal timur', '083836630944', 'Delakusumawati49@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A320160260', 'A320160260', 'Destiyana', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'KALONGAN WETAN RT 01 RW 17, PAPAHAN, TASIKMADU, KARANGANYAR.', '087836446773', 'destiyanasuyatmin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('I000162024', 'I000162024', 'Devi Mustika', '291/A.4-II/SR/VI/2016', '01/07/17', 'Hukum Ekonomi Syari\'Ah', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Sangatta Selatan, Kab.Kutai Timur, Kalimantan Timur', '081346222800', 'devinustika80@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A220150012', 'A220150012', 'Devi Ratna Yulianti', '219/IV/2015', '12/02/15', 'Ppkn', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Joho Kidul Rt 04/03 Mojolaban Sukoharjo', '087812734531', 'deviratnayulia@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A220150039', 'A220150039', 'Dhika Elisa Putri', '219/IV/2015', '12/02/15', 'Pend. Pancasila & Kewarganegaraan', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'PETORAN RT 03/ RW 09 JEBRES SURAKARTA', '085725640543', 'dhikaelisa36@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A210160008', 'A210160008', 'Diana Ofintan', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pendidikan Akuntansi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Desa Tubanan-Duren Rt 03 Rw 04', '081542597972', 'dianaindra011@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D200170081', 'D200170081', 'Diat Rian Anugrah', '257/PMB-UMS/V/2017', '19/05/17', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'RT 03 RW 02 Kelurahan Banjaranyar, Kec. Pekuncen, Kab. Banyumas, Jawa Tengah kode pos 53164', '085747309274', 'diatrian069@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400160021', 'D400160021', 'Dwi Aji Pamungkas', '209/A.4-11/SR/V/2016', '22/10/97', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Lesmana, RT05/RW06, Ajibarang, Banyumas, Jawa Tengah', '089631051489', 'dwiajipamungkas10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('G000170086', 'G000170086', 'Dwi Lestari', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Kloposawit Rt 16/Rw 05, Kayen, Juwangi, Boyolali', '085600032548', 'Dwilestari110500@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('k100170203', 'k100170203', 'Dwi Sri Utaminingsih', '487/PMB-UMS/VIII/2017', '08/03/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, 'Dsn. Kernekan03/07 . DS. Tunggak. Kec. Toroh. Kab. Grobogan', '085740450211', 'naningutaminingsih07@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A220160051', 'A220160051', 'Eka Jumaidah Sumarsih', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Ppkn', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Gabusan Rt 21/06 , tanon,tanon,sragen', '085802536679', 'ekajumaidah@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('G100171017', 'G100171017', 'Eko Sedayu', '257/PMB-UMS/V/2017', '19/05/17', 'Ilmu Quran Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Padan, Daleman, Tulung, Klaten', '085800124545', 'e.s3d4yu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J310160103', 'J310160103', 'Elsa Febriana Pawestri', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Ilmu Gizi S1', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jln Bima III No 8 Rt 01/ Rw 01 Serengan, Surakarta', '085865925728', 'elsa.ee9@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('L100160115', 'L100160115', 'Elvira Dyahajeng Syavala', '291/A.4-II/SR/VI/2016', '29/06/16', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Desa Kertasari RT 02 / RW 03 Kec. Suradadi Kab. Tegal', '085225306684', 'elviradsy05@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A220170085', 'A220170085', 'Ema Fidiyawati', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pend. Pancasila Dan Kewarganegaraan', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'KRAJAN, RT 01 RW 05 KEC. PEKUNCEN KAB. BANYUMAS JAWA TENGAH', '085878459890', 'emafidiyawati@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B300150069', 'B300150069', 'Emi Lestari', '219/IV/2015', '02/12/15', 'Ekonomi Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'DONDIL RT. 05 / RW. 02 JATISARI\nSAMBI, BOYOLALI', '085759596199', 'Emilestari585@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J310170112', 'J310170112', 'Ervina Eryono Anjani', '257/PMB-UMS/V/2017', '19/05/17', 'Ilmu Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Desa kelet RT 01 RW 01 kecamatan keling kabupaten jepara provinsi jawa tengah', '089678364884', 'ervina19anjani@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L200150146', 'L200150146', 'Fakhrur Razi', '413/A.4-II/SR/VIII/2015', '19/07/97', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'DUKUH RT 03/06 TRANGSAN, GATAK, SUKOHARJO', '085728646196', 'fakhrur19.razi97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200160077', 'L200160077', 'Faris Zaky Alfaiz', '209/A.4-11/SR/V/2016', '05/09/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'ds. 02 RT 06/RW 02, Sendang Retno, kec. Sendang Agung, Lampung Tengah - Lampung', '085768424845', 'generasi.pena98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B100170339', 'B100170339', 'Fatekhah Herlyana Elsasari', '257/PMB-UMS/V/2017', '19/05/17', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, NULL, '087833713267', 'fatekhahhelsasari@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B100170426', 'B100170426', 'Fauziah Arahmah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ekonomi Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Depok', '087720052973', 'fauziaharahmah3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B100150243', 'B100150243', 'Fazria Kintanindea', '176/A.4-II/SR/IV/2015', '18/04/15', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Rawa Kalieung RT/RW 07/02 Ds.Linggawangi Kec.Leuwisari Kab.Tasikmalaya Prov. Jawa Barat', '081225197757', 'fazriakintanindea@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B300160221', 'B300160221', 'Ferdian Ade Vinangon', '338/A.4-11/SR/VIII/2016', '01/08/16', 'Ilmu Ekonomi Dan Studi Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl.Kantil Rt.22 Rw.09 Ds.Pilangkenceng Kec.Pilangkenceng Kab.Madiun Prov.Jawa Timur', '083866722182', 'ferdianade903@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A520150052', 'A520150052', 'Ferdian Prawiga', '219/IV/2015', '02/12/15', 'Paud', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Kerten', '08971511834', 'ferdianprawiga80@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D300170102', 'D300170102', 'Fika Annisa\' Sholihah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Teknik Arsitektur', 'FAKULTAS TEKNIK', NULL, NULL, NULL, NULL, '085735239260', 'annisa.fika@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J210170153', 'J210170153', 'Fitri Puji Rahayu', '487/PMB-UMS/VIII/2017', '03/08/17', 'Keperawatan', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Dsn. Gondang Ds. Mendiro Rt/Rw. 01/05 Kec. Ngrambe Ngawi', '089510303036', 'fichanhisekai@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G000170192', 'G000170192', 'Galuh Dwi Astuti', '487/PMB-UMS/VIII/2017', '08/03/17', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'NAMPU RT 01/RW 01 KARANGRAYUNG GROBOGAN', '085602147507', 'galuhastuti11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D300150135', 'D300150135', 'Hafsah Intifadhoh Rabbaniyah', '413/A.4-II/SR/VIII/2015', '10/11/97', 'Arsitektur', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Ngancan, RT 003/ RW 005, Sobokerto, Ngemplak, Boyolali', '082325913450', 'hirabbaniyah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000160029', 'G000160029', 'Harun Mujahid Irsyad', '291/A.4-II/SR/VI/2016', '29/06/16', 'Pai', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Bendorejo 04/09 Ngadiluwih Matesih Karanganyar', '087822765460', 'Harunirsyad54@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('K100160109', 'K100160109', 'Hesti Pawarti', '209/A.4-II/SR/V/2016', '09/05/16', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, 'Jl. Raya Desa Longkeyang RT. 07 RW.02, Kec. Bodeh, Kab. Pemalang, Jawa Tengah', '082322672587', 'pawartihesti@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('L200160076', 'L200160076', 'Hesti Rahayu Lestari', '209/A.4-II/SR/V/2016', '09/05/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Jl.matamin Basar, desa Sepaso timur, kecamatan Bengalon kabupaten Kutai timur, provinsi Kalimantan timur', '082353133893', 'hesty4300@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('K100170169', 'K100170169', 'Hidayaturrizqika Maulida', '487/PMB-UMS/VIII/2017', '03/08/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, NULL, '082119590418', 'hrm.lidafajrin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B200170255', 'B200170255', 'Himammul Adhim Ramadani', '257/PMB-UMS/V/2017', '19/05/17', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Bakalan Krapyak 03/01Kaliwungu Kudus', '082115141505', 'himammul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B300170155', 'B300170155', 'Huda Einurohmah', '257/PMB-UMS/V/2017', '19/05/17', 'Ekonomi Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Ponorogo', '085606285299', 'hudaeinurohmah@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A510170119', 'A510170119', 'Ike Sutriyani', '257/PMB-UMS/V/2017', '19/05/17', 'Pgsd', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Sekardoja Rt 2 Rw 9 Pamulihan, Larangan Brebes', '085867356815', 'ikesutriyani@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G100170037', 'G100170037', 'Ikhsan Susanto', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ilmu Al Qur\'An Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Cipasung 14/05, Darma, Kuningan, Jawa Barat', '085602025751', 'ihsansusanto1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400140041', 'D400140041', 'Ilham Fahmi Huda', '051/1/2016', '17/02/16', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Losari RT 05 RW 04 Ampelgading Pemalang', '085742338896', 'ilhamfahmi434@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200160180', 'L200160180', 'Inayah Nurfadilah', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Dusun Sumyang, RT/RW 014/002, Desa Susukan, Kec. Susukan, Kab. Cirebon 45166', '089633100863', 'inayahnrfdlh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A320170239', 'A320170239', 'Isnaeni Sofiana', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, NULL, '087826722313', 'isnainisofiana6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A320170095', 'A320170095', 'Ivan Nur Rohman Rahayu', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Guyangan Rt 05 Rw 05 Bangsri Jepara, Jawa Tengah', '085601626616', 'ivan99rohman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310170215', 'A310170215', 'Kresna Setyawan', '487/PMB-UMS/2017', '03/08/17', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Mladri,Tempursari,Sambi,Boyolali', '085842106725', 'kresnasetyawan99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('C100140347', 'C100140347', 'Krisni Sri Megasari', '169/IV/2015', '09/10/15', 'Hukum', 'FAKULTAS HUKUM', NULL, NULL, NULL, 'Jl. Nanas 11b Mojo RT02 RW VIII Kel. Gayam Kec.Sukoharjo Kab.Sukoharjo Jawa Tengah', '089661331396', 'krisnimega@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G100170038', 'G100170038', 'Latif Muhlisin', '487/PMB-UMS/VII/2017', '03/08/17', 'Ilmu Al Qur’An Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Niten, Weru, Weru, Weru, Sukoharjo, Jawa Tengah', '081548620026', 'latifmuhlisin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('E100150131', 'E100150131', 'Lia Afriliani', '051/I/2016', '17/02/16', 'Geografi', 'FAKULTAS GEOGRAFI', NULL, NULL, NULL, 'Dsn. Sambirejo desa Putatnganten kec. Karangrayung kab. Grobogan', '081319252911', 'Liaafril61@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410170082', 'A410170082', 'Lina Wahyu Sri Fatmasari', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Desa Jambangan, Dusun Sanggrak, RT 09/01, Kecamatan Geyer, Kabupaten Grobogan.', '082313034743', 'wahyulina145@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D100150198', 'D100150198', 'Luay Nuha', '332/A.4-11/SR/VII/2015', '14/07/15', 'Teknik Sipil', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Ngale, Paron, Ngawi', '085746382958', 'duluaynuha@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('K100170161', 'K100170161', 'Lucky Pratiwi', '257/PMB-UMS/V/2017', '19/05/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, NULL, '085708258318', 'luckypratiwi24@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B200150147', 'B200150147', 'Lukman', '176/A.4-II/SR/IV/2015', '18/04/15', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Kampung Lamekohok. Rt03. Rw05. Desa Jayamukti Kecamatan Cihurip Kabuten Garut, Jawa Barat', '0895328969575', 'lukmanlukaman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A420160203', 'A420160203', 'Lutfiyanti Nabila', '365/A.4-11/SR/VIII/2016', '20/07/16', 'Pendidikan Biologi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Rt3Rw2 desa karangduwur kec petanahan kab kebumen', '082138503479', 'lutfiyantinabila98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B100160202', 'B100160202', 'Luthfi Rizaldi', '208/A.4-II/SR/V/2016', '09/05/17', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Dusun Karya Basuki, RT/RW 011/004, Desa Karya Basuki, Kec. Waway Karya, Kab. Lampung Timur', '085664887011', 'luthfirizaldi98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A810170028', 'A810170028', 'M Idzhar Hakiki', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Olahraga', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Debong kidul Rt 02 Rw 03 - Tegal Selatan', '082323970528', 'idzharhakiki@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A320150031', 'A320150031', 'M Yoga Oktama', '176/A.4-II/SR/IV/2015', '18/04/15', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Banyumas Asri, RT 1, RW 2, Kec. Buay Madang Timur, Kab. OKU Timur, Sumatera Selatan', '085201166646', 'myogaoktama@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000150046', 'G000150046', 'Ma\'Rifah', '176/A.4-II/SR/IV/2015', '18/04/17', 'Pai', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'kaliajir Rt 04 Rw 03 kec. purwanegar kab.banjarnegara', '085640388334', 'marifahly@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J120160100', 'J120160100', 'Martina Dwi Anjoni', '208/A.4-11/SR/V/2016', '09/05/16', 'Fisioterapi (S1)', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Kp. Pondok RT. 03/02 No.56 Kel. Curug Kec. Bojongsari Kota Depok Kode Pos 16517', '085718539937', 'martina.dwianjoni@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A320160319', 'A320160319', 'Mb Dian Khusnul Hidayah', '365/A.4-II/SR/VIII/2016', '23/10/97', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'TEMPURREJO RT 02 RW 02 DESA KEDUNGGUDEL KECAMATAN WIDODAREN NGAWI', '085749460921', 'mbdian23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D500150043', 'D500150043', 'Meyla Helena Widy Pradisca', '332/A.4-II/SR/VII/2015', '14/07/15', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jalan Untung Suropati 2/Plendungan, RT.01, RW.02, Kel.Kuripan, Kec.Purwodadi, Kab.Grobogan', '089692021210', 'meylahelena70@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B200170142', 'B200170142', 'Miftah Nur Arifin Ahimsah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl Menco 17 no 8 Gonilan Kartasura Sukoharjo', '081375906161', 'mifnurahimsah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G000170233', 'G000170233', 'Miftakhul Rokhman', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, NULL, '083844120304', 'rokhman64@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G100170014', 'G100170014', 'Mir-Atun Mashfiyyah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ilmu Qur\'An Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Nguter rt.01 rw.04 Nguter Sukoharjo 57571', '085640927763', 'mirmashfiyah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A220170078', 'A220170078', 'Misti', '487/PMB-UMS/VIII/2017', '08/03/17', 'Pendidikan Pancasila Dan Kewarganegaraan', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jln al fajr', '085740788183', 'misticamut6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L100150132', 'L100150132', 'Muh Yusuf Ruhbana', '413/A.4-II/SR/VIII/2015', '09/08/17', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Jl. Ganesha Utara 3 no 325', '088215492941', 'yruhbana@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000150215', 'G000150215', 'Muhamad Aminudin', '166/II/2015', '26/10/95', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Tuwak, Rt 01 Rw 02, Gonilan, Kartasura, Sukoharjo', '085225304107', 'muhaminudin100@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J120170120', 'J120170120', 'Muhamad Heru Setiawan', '257/PMB-UMS/V/2017', '19/05/17', 'Fisioterapi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl.Bahagia No 24 Rt 01 Rw 04 Banyumudal Moga Pemalang Jawa tengah', '082324942297', 'kholidibnusina1429@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400170140', 'D400170140', 'Muhamad Irfan Assani', '487/PMB-UMS/VII/2017', '03/08/17', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'DESA KETITANG LOR RT/RW 10/02 KECAMATAN BOJONG KABUPATEN PEKALONGAN', '085601645157', 'irfanassani@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L100150061', 'L100150061', 'Muhamad Risqi Mei Sonjaya', '176/A.4-11/SR/VII/2015', '18/04/15', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Dk. Legok RT. 02 RW. 05 Desa Kalilangkap, Kec. Bumiayu Kab. Brebes 52276 Jawa Tengah', '085870236488', 'sonjayarizki10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D400160060', 'D400160060', 'Muhammad Abdul Rahman Irham Harfi', '291/A.4-II/SR/VI/2016', '29/06/16', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jl. Ngemplak Raya Rt. 4 Rw.1 , Gentan ,Baki ,Sukoharjo', '082153936707', 'irhamirham46@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('G000160132', 'G000160132', 'Muhammad Adam Ilham Mizani', '291/A.4-II/SR/VI/2016', '29/06/16', 'Pendidikan Agama Islam(Pai)', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, NULL, '085201544275', 'mizani.adam@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B100160304', 'B100160304', 'Muhammad Agung Prasojo', '218//A.1-I/MAWA/VIII/2016', '20/12/16', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Desa Kedungasri RT004/002 Kecamatan Ringinarum Kabupaten Kendal', '085950698878', 'agungprsj17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410170053', 'A410170053', 'Muhammad Arif Syaifudin', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Plosorejo Rt. 04 Rw. 03, Jagoan, Sambi, Boyolali', '085869015514', 'muhammadarifsambi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B300170158', 'B300170158', 'Muhammad Nurrois', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ekonomi Pembangunan', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Glondongan RT 01 RW 02 Mranggen Polokarto Sukoharjo', '083865210355', 'muhammad.nurrois21@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('G000170084', 'G000170084', 'Muhammad Sulaiman', '257/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Agama Islam', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Ngaran,Mlese,Ceper,Klaten', '085883052814', 'sulaimanalqorni@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D100160214', 'D100160214', 'Muklis Indarto', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Teknik Sipil', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Macanan, Blimbing, Karangnongko, Klaten, Jawa Tengah', '085602096466', 'mukhlisindarto95@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D100170217', 'D100170217', 'Muthmainnah', '487/PMB-UMS/VII/2017', '08/03/17', 'Teknik Sipil', 'FAKULTAS TEKNIK', NULL, NULL, NULL, NULL, '081243821762', 'muthmainnahkhaerah17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L200150130', 'L200150130', 'Nadya Wahyu Permata', '332/A.4-11/SR/VII/2015', '14/07/15', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Blimbingrejo Rt/Rw 06/IV, Nalumsari, Jepara', '085712755925', 'nadyawahyupermata@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J120170126', 'J120170126', 'Nafsa Chafiyya', '257/PMB-UMS/V/2017', '19/05/17', 'Fisioterapi (S1)', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Warungboto UH 4/971-A', '089639117759', 'chafiyyanafsa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D200170212', 'D200170212', 'Natana Elselo Kristian', '487/PMB-UMS/VIII/2017', '08/03/17', 'Teknik Mesin', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Joyotakan rt03 rw03 serengan surakarta', '0895611806002', 'natananail@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D500160005', 'D500160005', 'Naura Nazhifah', '208/A.4-II/SR/V/2016', '05/09/16', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jerukwangi 01/02 Bangsri Jepara', '082221435396', 'nauranazhifah20@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('E100160277', 'E100160277', 'Nava Ayu Dwi Rosita', '338/A.4-11/SR/VIII/2016', '01/08/16', 'Geografi', 'FAKULTAS GEOGRAFI', NULL, NULL, NULL, 'Dsn. Jugong, Ds. Dumplengan,Kec. Pitu, Kab. Ngawi', '081946514920', 'navadwi87@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A210160098', 'A210160098', 'Nidhaul \'Ilmi Nur Aviffah', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pendidikan Akuntansi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Karangduren Rt 04/04 Jati Jaten Kra', '085385138140', 'nidhaulilmin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J410160040', 'J410160040', 'Novita Yuliana', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Kesehatan Masyarakat', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Dagen rt 03/07 suruh tasikmadu karanganyar', '081805935359', 'novitayuliana52@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A320160084', 'A320160084', 'Nur Amaliyah', '206/A.4-11/SR/V/2016', '09/05/16', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Gumelar, Kutosari, Doro, Pekalongan, Jawa Tengah', '085200020699', 'amaliyahnur03@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A520160039', 'A520160039', 'Nur Nafiah Rohmah', '187/I/2016', '15/12/16', 'Pg Paud', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'BUTUH RT.07 RW.02, GEDONGAN, PLUPUH, SRAGEN', '081514589367', 'nurnafiah19@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D400170048', 'D400170048', 'Nur Rohman', '257/PMB-UMS/V/2017', '19/05/17', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jl. KH Ahmad Dasuki RT 02 RW 02 Dk. Gumelar, Ds. Kutosari, Kec. Doro, Kab. Pekalongan', '082324893380', 'rohmannur288@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('K100170202', 'K100170202', 'Nuurus Sa\'Adah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, NULL, '085389313805', 'nuurussaadah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A410150161', 'A410150161', 'Oktaviani Miftachul Jaanah', '332/A.4-11/SR/VII/2015', '14/07/17', 'Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Tangen,Katelan,Tangen,Sragen', '085741650777', 'oktavianimj04@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D400150020', 'D400150020', 'Panji Akbar Ramadhani', '176/A.4-II/SR/IV/2015', '18/04/17', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Bawu RT01/01 Batealit Jepara', '085726353762', 'panji.akbar98@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000170087', 'G000170087', 'Parjiyem', '257/PMB-UMS/V/2017', '19/05/17', 'Pai', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Brangkal Rt 05 Rw 04, Nampu, Karangrayung, Grobogan', '085728594477', 'parjiyem2809@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310160217', 'A310160217', 'Putri Haryanti', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Singget,RT/RW 01/11, Tawang Sari, Kerjo, Karanganyar', '082134530177', 'putriharyanti567@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D500170129', 'D500170129', 'Qiqi Lorenza', '487/PMB-UMS/VIII/2017', '07/03/17', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Soko Rt 04 Rw 03 Grogol, Sukoharjo.', '087823477697', 'qiqilorenza06@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D600170035', 'D600170035', 'Qolila', '257/PMB-UMS/V/2017', '19/05/17', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Ds.Kayen RT 4 RW 6,Kec.Kayen,Kab.Pati', '085865218734', 'velixqolila@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D500150039', 'D500150039', 'Qorrotul \'Aini Tsaaniyah', '332/A.4-11/SR/VII/2015', '14/07/15', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Bulu banjarjo RT.15 RW.05 Bulu Bancar Tuban', '081554496140', 'qurrotulaini438@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A420150085', 'A420150085', 'Qosim Nurseha', '332/A.4-II/SR/VII/2015', '14/07/15', 'Pendidikan Biologi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jatirejo, Rt 03/013 Wonorejo, Jatiyoso, Karanganyar', '087835736139', 'qosimjambul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000170082', 'G000170082', 'Rasno', '257/PMB-UMS/V/2017', '19/05/17', 'Tarbiyah', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'TALAGENING RT 03 RW 05 KEC.BOBOTSARI KAB.PURBALINGGA', '085865123971', 'rasnokedawungjaya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J120170072', 'J120170072', 'Raveina Velanindya Dewi', '257/PMB-UMS/V/2017', '19/05/17', 'Fisioterapi (S1)', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'sinanggul 10/02, mlonggo, jepara', '089648340014', 'rvelanindya2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B200160005', 'B200160005', 'Renny Agustin Permatasari', '292/A.4-II/SR/VI/2016', '29/06/16', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Ngendro RT 03 RW 12 Bolon, Colomadu, Karanganyar,Jawa Tengah (no.11)', '08995395004', 'renny120898@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A520150068', 'A520150068', 'Renny Setyowati', '413/A.4-II/SR/VIII/2015', '02/01/96', 'Pg Paud', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'BRONTOWIRYAN RT O7/01 NGABEYAN KARTASURA SUKOHARJO', '089613930351', 'rennysetyowati09@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410170054', 'A410170054', 'Ria Nur Arifah', '254/PMB-UMS/V/2017', '19/05/17', 'Pendidikan Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jalan Kerinci Gebang 02/17 Kadipiro Banjarsari Surakarta', '081214698114', 'ria.nrfh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D500170131', 'D500170131', 'Ria Setyani', '487/PMB-UMS/VIII/2017', '08/03/17', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'DESA NGLOBAR. DUSUN SELOKROMO. RT 02 RW 01', '081575043632', 'riasetyani39@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310150148', 'A310150148', 'Rido Wahyudi', '332/A.4-II/SR/VII/2015', '14/07/15', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Sampang Jurang-jero, Rt 01/06, kec. Sempor, kab. Kebumen, Jawa Tengah', '081225157049', 'ridobuffa41@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200160026', 'L200160026', 'Ridwan Renaldi', '332/A.4-11/SR/VII/2016', '14/07/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'JL. TEGALMULYO II, RT03/ RW07 KEL.PURWOSARI/ KEC.LAWEYAN, KOTA SURAKARTA', '087836722269', 'renaldiridwan009@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D600150080', 'D600150080', 'Rima Ambarsari', '219/IV/2015', '02/12/15', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Grobog Rt. 02/Rw. 04, Wuryorejo, Wonogiri', '082226536746', 'rima.ambarsari@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A310170218', 'A310170218', 'Rini Nurhanifah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Bahasa Indonesia Dan Sastra Daerah', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Desa Boncong Rt.04/02 Kec. Bancar Kab.Tuban', '085736335060', 'rinirahayu6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('F100170162', 'F100170162', 'Riska Yuniarti', '257/PMB-UMS/V/2017', '19/05/17', 'Psikologi', 'FAKULTAS PSIKOLOGI', NULL, NULL, NULL, 'DUSUN SIDO MAKMUR', '085348765520', 'riska.pelangi7warna@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A320150253', 'A320150253', 'Ristamani Wulandari Santoso', '413/A.4-II/SR/VIII/2015', '15/05/97', 'Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'mendungan rt02/04, pabelan, kartasura, sukoharjo', '083836011992', 'little_sister28@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B100150244', 'B100150244', 'Rizky Kurniawan', '176/A.4-II/SR/IV/2015', '18/04/15', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Nganjuk jawa timur', '085749913480', 'ipmawan.rizky@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J100160050', 'J100160050', 'Rizky Putri Bintari', '292/A.4-II/SR/VI/2016', '29/06/16', 'Fisioterapi D3', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl. Hansip Gg. Kecapi No. 58 RT 02 RW 01, Kota Singkawang - Kalimantan Barat', '089675079376', 'rizkyputri017@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D600160102', 'D600160102', 'Rudy Nur Ardyan Syah', '291/A.4-II/SR/VI/2016', '29/06/17', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jln slamet riyadi no 441 Surakarta', '081231755862', 'rudynur.ardyansyah05@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J310170152', 'J310170152', 'Ruth Cindy Erasi Awaliza', '487/PMB-UMS/VIII/2017', '03/08/17', 'Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Perum. Bekasi Griya Asri 2 Blok H 29 no 10. RT 10 RW 24 Kelurahan Sumber Jaya, Kec. Tambun Selatan, Kab. Bekasi', '08998008969', 'cindyawaliza@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('C100152001', 'C100152001', 'Sa\'Aadah Assalamah', '176/A.4-II/SR/IV/2015', '18/04/15', 'Hukum Syari\'Ah (Twinning Program)', 'FAKULTAS HUKUM', NULL, NULL, NULL, 'Bogo, Sempu, Andong, Boyolali', '085725504937', 'suryasaadah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200160181', 'L200160181', 'Saffana Ziyan Agamilla', '365/A.4-II/SR/VIII/2016', '04/11/98', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'jl.Slamet riyadi no 10 Pucangan rt 03 rw 13 Kartasura ,Sukoharjo, Jawa Tengah', '085740787651', 'saffanazian@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A410170117', 'A410170117', 'Sari Rini Hapsari', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pend. Metematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Kiringan,canden,sambi,boyolali', '085867987954', 'sariponpes@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A320150254', 'A320150254', 'Septia Gendis Pangestu', '413/A.4-11/SR/VIII/2015', '14/09/96', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Baturan rt 01/05 Colomadu Karanganyar', '087736437368', 'septiagendisp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B100160396', 'B100160396', 'Septiawan Aji Nugroho', '365/A.4-11/SR/VIII/2016', '05/09/96', 'Manajemen', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'DESA BEGAJAH RT 2/IV, KELURAHAN BEGAJAH, KEC/KAB SUKOHARJO', '087804940474', 'sajinugroho471@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('B200170281', 'B200170281', 'Shafira Anissakinah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ekonomi Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl. Imam Bonjol Gang 1 (Kompas) No 3 RT 03 RW 01 Pacitan, Jawa Timur Barat Kabupaten', '087758823398', 'shafiraanissakinah17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A220160017', 'A220160017', 'Shella Agustina Ayuningtyas', '365/A.4-II/SR/VIII/2016', '07/06/16', 'Ppkn', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Mangkunegaran Rt 02/06 Keprabon Banjarsari Surakarta', '089627192294', 'shellaagustinaayuningtyas@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J120150084', 'J120150084', 'Silvia Rahma Maulida', '176/A.4-II/SR/IV/2015', '18/04/15', 'Fisioterapi S1', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Pati', '085700056098', 'silvia.rahma57@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B200150231', 'B200150231', 'Singgih Wisnu Groho', '332/A.4-11/SR/VII/2015', '11/08/17', 'Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Sawahan rt01/06 jaten karanganyar', '082134371024', 'singgihwisnu21@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A710150034', 'A710150034', 'Siti Al Muyassaroh', '-', '-', 'Pendidikan Teknik Informatika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Dk. Kasocikal RT. 02/ RW. 05, Ds. Doro, Kec. Doro, Kab. Pekalongan', '085742508827', 'almuyassaroh.alya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410160201', 'A410160201', 'Siti Atitah', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pendidikan Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Kragan 01/07, Krogowanan, Sawangan, Magelang', '085701533818', 'atitah28@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016');
INSERT INTO `data_bumita` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`, `N`, `O`, `P`, `Q`, `R`, `S`, `T`) VALUES
('F100170144', 'F100170144', 'Siti Aulia', '487/PMB-UMS/VIII/2017', '03/08/17', 'Psikologi', 'FAKULTAS PSIKOLOGI', NULL, NULL, NULL, 'Loktangga Rt 003 Rw 001 Kecamatan Karang Intan Kabupaten Banjar Kalimantan Selatan', '083842736991', 'auliasiti82@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A210150112', 'A210150112', 'Siti Chomariyah', '332/A.4-11/SR/VII/2015', '14/07/15', 'Pend.Akuntansi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Poncol magetan', '085749301570', 'shity_chomariyah@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G000150106', 'G000150106', 'Sri Rahayu', '332/A.4-11/SR/VII/2015', '14/07/15', 'Tarbiyah/Pai', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Karang Anyar Rt.09/Rw.02, Klego, Klego, Boyolali', '085647349246', 'Rahayu9246@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A420160170', 'A420160170', 'Sugiarni', '338/A.4-II/SR/VIII/2016', '08/01/16', 'Pendidikan Bioligi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'BEGAJAH RT 01 RW 07 POPONGAN KARANGANYAR', '087836740299', 'Sugiarni02031998@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('L200170002', 'L200170002', 'Sugiyo', '487/PMB-UMS/VIII/2017', '03/08/17', 'Teknik Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Ngemplak RT 01 RW 04 Ngemplak, Karangpandan, Karanganyar, Jawa Tengah', '087836003983', 'sugiyocyber@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A210170241', 'A210170241', 'Suka Lelana', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Akuntansi', 'FAKULTAS KEGURUAN & ILMU PENDIDIKAN', NULL, NULL, NULL, 'Cinderejo Lor rt 02/ rw 05', '089686641294', 'sukalatifa99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('B200150004', 'B200150004', 'Sulis Setyorini', '332/A.4-II/SR/VII/2015', '14/07/15', 'Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Rt.03 Rw.01 Ds. Bulakrejo Kec. Balerejo Kab. Madiun', '085606227550', 'sulissetyorini2808@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D400160020', 'D400160020', 'Supriyadi', '209/A.4-LL/SR/V/2016', '09/05/16', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jl.Slamet Riyadi No.441 Surakarta', '08979102866', 'supryvianysty97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('D400150081', 'D400150081', 'Supriyadik', '332/A.4-II/SR/VII/2015', '14/07/15', 'Teknik Elektro', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'RT 002/003 Ds.Sedayu Kec.Grobogan Kab.Grobogan Jawa Tengah', '085875895930', 'supriyadik741@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('G100150003', 'G100150003', 'Syahrur Rizqi Hidayatullah', '332/A.4-II/SR/VII/2015', '14/07/15', 'Ilmu Al Qur\'An Dan Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Jln. Sunan Kalijogo Rt/Rw 01/02 Des. Ngabar Kec. Siman Kab. Ponorogo Prov. Jawa Timur', '085731757601', 'Syahrurrizqi8@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('K100170156', 'K100170156', 'Syarifah Izat', '257/PMB-UMS/V/2017', '19/05/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, NULL, '085225472424', 'syariifahizat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('F100150164', 'F100150164', 'Syukriyah', '219/IV/2015', '02/12/15', 'Psikologi', 'FAKULTAS PSIKOLOGI', NULL, NULL, NULL, 'Desa Kapung 01/02 Kec. Tanggungharjo Kab. Grobogan', '085867750978', 'riarara64@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J310170123', 'J310170123', 'Talitha Raudya Tuzzahra Yulistiyani', '487/PMB-UMS/VIII/2017', '03/08/17', 'Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl kali baru utara no 169 kota cirebon rt 005 rw 001 kec.kejaksan kelurahan.kejaksan', '082315157052', 'Itaraudya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310150019', 'A310150019', 'Tantawi', '332/A.4-II/SR/VII/2015', '14/07/17', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Sepadan, kota Subulussalam, prov. Aceh.', '085740991518', 'tantawibasyma@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('B200150183', 'B200150183', 'Taufiq Bayu Aji Ramadhan', '413/A.4-II/SR/VIII/2015', '27/01/96', 'Akuntansi', 'FAKULTAS EKONOMI DAN BISNIS', NULL, NULL, NULL, 'Jl Rajawali, Gg Siem No 12, Bareng Kidul, Bareng, Klaten Tengah, Klaten', '085743190717', 'taufiqbayu2727@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('D500160088', 'D500160088', 'Tenny Rizki Kurniati', '292/A.4-11/SR/VI/2016', '29/06/16', 'Teknik Kimia', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Jln. zainul arifin gang smp 6.6 No 38 RT 28 RW 02 Kelurahan Dusun Besar Kecamatan Singaran Pati kode pos 38229', '085311086762', 'tenniriski@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A320160082', 'A320160082', 'Tina Damayanti', '209/A.4-11/SR/V/2016', '09/05/16', 'Pendidikan Bahasa Inggris', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Dagen, Rt.01 Rw. 07 Suruh, Tasikmadu, Karanganyar', '085740668231', 'damayantitina3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A520160051', 'A520160051', 'Tira Lapan Sari', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Pg. Paud', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'DOMAS RT1/RW2, KWADUNGAN, KERJO, KARANGANYAR', '085600974794', 'tiralapansari@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A410150054', 'A410150054', 'Titiek Nur Hidayah', '176/A.4-II/SR/IV/2015', '18/04/15', 'Pendidikan Matematika', 'KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Jl. Gebang Anom x /26 Rt.03/06 Genuk sari kec. Genuk kota semarang', '085741388420', 'Titiekvolvacie@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J210170177', 'J210170177', 'Tjahyaning Pangastuti Ayuningtias', '487/PMB-UMS/VIII/2017', '08/03/17', 'Keperawatan', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Blok Bantarwaru Rt. 03/Rw. 01 Ds. Mekarwaru Kec. Gantar Kab. Indramayu - Jawa Barat', '089617910998', 'cahyaning.tyas02@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310170213', 'A310170213', 'Tobi Saputra', '487/PMB-UMS/VIII/2017', '03/08/17', 'Pendidikan Bahasa Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Desa Kracak RT 03 RW 02 Kec. Ajibarang Kab. Banyumas Prov. Jawa Tengah', '085868172414', 'tobisaputra45ssat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('L100160168', 'L100160168', 'Tri Alviya Andriana', '338/A.4-II/SR/VIII/2016', '01/08/17', 'Ilmu Komunikasi', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'RT 08 RW 01 DESA DOHO KEC. DOLOPO KAB. MADIUN PROVINSI JAWA TIMUR', '089666105561', 'trialviyaa5@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J410160041', 'J410160041', 'Tursiti', '294/A.4-II/SR/VI/2016', '29/06/16', 'Kesehatan Masyarakat', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Sidakangen, Rt 01 Rw 02. Kec.Kalibening Kab.Banjarnegara', '085742595403', 'Tursitifs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A220150033', 'A220150033', 'Umi Fatimah', '219/IV/2015', '02/12/15', 'Pendidikan Pancasila Dan Kewarganegaraan', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Brijokidul, Kalikebo, Trucuk, Klaten', '085799853220', 'fatimahumi85@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('K100170201', 'K100170201', 'Uswatun Hasanah', '487/PMB-UMS/VIII/2017', '03/08/17', 'Farmasi', 'FAKULTAS FARMASI', NULL, NULL, NULL, 'Jl.Una-una No.193 RT.05 RW.02 BTN Nusantara kel.argasunya kec.harjamukti', '089660720740', 'uswatun01hasanah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J310170206', 'J310170206', 'Veria Adriyani Situmorang', '487/PMB-UMS/VIII/2017', '03/08/17', 'Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl.Propinsi KM.15 RT.02 RW.01 Penajam Paser Utara', '081257435238', 'veriaadriyanisitumorang@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('J310170114', 'J310170114', 'Viky Sukma Melati', '257/PMB-UMS/V/2017', '19/05/17', 'Ilmu Gizi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Ds. Kelet Rt 32 Rw 05 Keling-Jepara', '085878536200', 'vikymelati@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('A310160213', 'A310160213', 'Vira Ghusmalia', '194/I/2016', '20/12/16', 'Pendidikan Bahasa Dan Sastra Indonesia', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Kestalan RT 03/ RW 01, Nepen, Teras, Boyolali', '085728226044', 'viraghusmalia09@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A510150039', 'A510150039', 'Viska Aprilliana', '413/A.4-11/SR/VIII/2015', '17/04/97', 'Pgsd', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'GROGOL RT 02/RW 03, NGADIREJO, MOJOGEDANG, KARANGANYAR', '085642420320', 'viskaaprilliana5@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('A410150209', 'A410150209', 'Wildan Ilham Muhammad', '413/A.4-II/SR/VIII/2015', '03/09/96', 'Pend. Matematika', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Sentono, Ngawonggo, Kec. Ceper, Kab. Klaten', '085867750891', 'zakariya.ibnu.thoha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('L200160163', 'L200160163', 'Winda Kusuma Wardani', '291/A.4-II/SR/VI/2016', '29/06/16', 'Informatika', 'FAKULTAS KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 'Pulutan,Nogosari,Boyolali', '085642342540', 'windutwinda95@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A610150003', 'A610150003', 'Wiwin Daryanti', '219/IV/2015', '02/12/15', 'Pendidikan Geografi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Rt 04/Rw 06 Jaten, Ngroto, Kidmantoro, Wonogiri', '081227178580', 'Wiwindaryanti123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J100160045', 'J100160045', 'Yolanda', '292/A.4-II/SR/VI/2016', '29/06/16', 'Fisioterapi (D3)', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Jl. Merdeka Raya No.14 Rt.13 Pendang, Kalimantan Tengah', '085249052157', 'yola683@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('A210150018', 'A210150018', 'Yuliati', '176/A.4-II/SR/IV/2015', '18/04/15', 'Pendidikan Akuntansi', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', NULL, NULL, NULL, 'Pepedan rt 2 rw 3 Karangmoncol Purbalingga', '085726492631', 'yuliati.cae19@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2015'),
('J120170005', 'J120170005', 'Yunia Ayu Saputri', '487/PMB-UMS/VIII/2017', '08/03/17', 'Fisioterapi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Tambas Rt 01/07 Kismoyoso Ngemplak Boyolali', '082134867838', 'yuniayunia806@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017'),
('D600160105', 'D600160105', 'Yusakh Ivanovic', '292/A.4-11/SR/VI/2016', '29/06/16', 'Teknik Industri', 'FAKULTAS TEKNIK', NULL, NULL, NULL, 'Desa Getas Pejaten, RT/RW 04/03 Kecamatan Jati, Kabupaten Kudus', '085866481886', 'ivanovic.yusakh23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('J120160032', 'J120160032', 'Zuhrotun Nisak', '338/A.4-II/SR/VIII/2016', '01/08/16', 'Fisioterapi', 'FAKULTAS ILMU KESEHATAN', NULL, NULL, NULL, 'Gumelar 02/02 kutosari doro kab. Pekalongan Jawa Tengah', '085325824083', 'Zuhrotunnisa89@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
('G100170011', 'G100170011', 'Zulfa Mumtaza', '487/PMB-UMS/VIII/2017', '03/08/17', 'Ilmu Quran Tafsir', 'FAKULTAS AGAMA ISLAM', NULL, NULL, NULL, 'Blimbing rt 04 rw 05 Wonorejo Polokarto Sukoharjo', '081225961748', 'zulfamumtaza080@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `kode_informasi` char(5) NOT NULL,
  `jenis_informasi` varchar(50) DEFAULT NULL,
  `tgl_informasi` date DEFAULT NULL,
  `akses_informasi` int(1) DEFAULT NULL,
  `isi_informasi` text,
  `gambar_informasi` text,
  `ket_informasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `kode_log` char(5) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `author` text,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `kode_org` int(100) NOT NULL,
  `semester` int(5) NOT NULL,
  `TA` varchar(25) NOT NULL,
  `nama_organisasi` text NOT NULL,
  `nomorSK` text NOT NULL,
  `tglSK` date NOT NULL,
  `foto_SK` text NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tingkat` varchar(100) DEFAULT NULL,
  `fk_nim` varchar(10) DEFAULT NULL,
  `nama_lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`kode_org`, `semester`, `TA`, `nama_organisasi`, `nomorSK`, `tglSK`, `foto_SK`, `jabatan`, `tingkat`, `fk_nim`, `nama_lokasi`) VALUES
(1, 9, '2018/2019', 'IPM', '729/20', '0000-00-00', '', 'Ketua Umum', 'Daerah', 'L200144017', 'Sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_umum`
--

CREATE TABLE `pengaturan_umum` (
  `judul_halaman` varchar(100) DEFAULT NULL,
  `logo` text,
  `icon` text,
  `copyright` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pu1` text,
  `pu2` text,
  `pu3` text,
  `pu4` text,
  `pu5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan_umum`
--

INSERT INTO `pengaturan_umum` (`judul_halaman`, `logo`, `icon`, `copyright`, `tahun`, `instansi`, `alamat`, `telp`, `email`, `pu1`, `pu2`, `pu3`, `pu4`, `pu5`) VALUES
('BUMITA UMSurakarta', 'logo-ums.png', 'logo-ums.png', 'BUMITA', 2018, 'UMSurakarta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `kode_keg` int(100) NOT NULL,
  `nama_keg` varchar(100) NOT NULL,
  `tgl_keg` date NOT NULL,
  `lokasi` text NOT NULL,
  `ortom_peny` text NOT NULL,
  `deskripsi_keg` text NOT NULL,
  `dokumentasi_keg` text NOT NULL,
  `keterangan` text NOT NULL,
  `fk_nim` varchar(10) NOT NULL,
  `TA` varchar(15) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`kode_keg`, `nama_keg`, `tgl_keg`, `lokasi`, `ortom_peny`, `deskripsi_keg`, `dokumentasi_keg`, `keterangan`, `fk_nim`, `TA`, `semester`) VALUES
(1, 'Darul Arqam Dasar', '2018-12-01', 'Boyolali', 'IMM', '       Pelatihan', '', '', 'L200144017', '2018/2019', 9);

-- --------------------------------------------------------

--
-- Table structure for table `scoring`
--

CREATE TABLE `scoring` (
  `kode_score` char(7) NOT NULL,
  `tgl_penilaian` datetime DEFAULT NULL,
  `fk_nim` varchar(10) DEFAULT NULL,
  `fk_kode_org` char(5) DEFAULT NULL,
  `fk_kode_aka` char(5) DEFAULT NULL,
  `fk_semester` int(5) DEFAULT NULL,
  `tahun` int(5) NOT NULL,
  `fk_kode_committee` char(5) DEFAULT NULL,
  `nilai_organisasi` decimal(10,0) DEFAULT NULL,
  `nilai_akademik` decimal(10,0) DEFAULT NULL,
  `rerata` decimal(10,0) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoring`
--

INSERT INTO `scoring` (`kode_score`, `tgl_penilaian`, `fk_nim`, `fk_kode_org`, `fk_kode_aka`, `fk_semester`, `tahun`, `fk_kode_committee`, `nilai_organisasi`, `nilai_akademik`, `rerata`, `keterangan`) VALUES
('S0001', '2018-12-10 00:00:00', 'L200144017', 'R0001', 'A0001', 9, 2018, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `kode` int(10) NOT NULL,
  `angka` varchar(5) NOT NULL,
  `link` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`kode`, `angka`, `link`, `ket`) VALUES
(1, 'I', '#', ''),
(2, 'II', '#', ''),
(3, 'III', '#', ''),
(4, 'IV', '#', ''),
(5, 'V', '#', ''),
(6, 'VI', '#', ''),
(7, 'VII', '#', ''),
(8, 'VIII', '#', ''),
(9, 'IX', '#', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorMoU` text NOT NULL,
  `tglMoU` date NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `tp_lahir` varchar(50) DEFAULT NULL,
  `tg_lahir` date DEFAULT NULL,
  `jenkel` varchar(20) DEFAULT NULL,
  `alamat` text,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` text,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `notelp_ayah` varchar(15) DEFAULT NULL,
  `notelp_ibu` varchar(15) DEFAULT NULL,
  `alamat_ortu` text,
  `angkatan` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nim`, `password`, `nama`, `nomorMoU`, `tglMoU`, `jurusan`, `fakultas`, `tp_lahir`, `tg_lahir`, `jenkel`, `alamat`, `notelp`, `email`, `foto`, `nama_ibu`, `nama_ayah`, `notelp_ayah`, `notelp_ibu`, `alamat_ortu`, `angkatan`) VALUES
('L200144017', 'MTIzNDU2', 'Didik Maryono', '457/MOU/2014', '2014-12-25', 'Informatika', 'Komunikasi dan Informatika', 'Wonogiri', '1996-03-17', 'Laki-Laki', 'Tangkluk Rt 4 Rw 4 Pare Selogiri Wonogiri', '087812538105', 'di2k.skh@gmail.com', '', 'Ngatinem', 'Pariman', '087812538105', '087812538105', 'Tangkluk Rt 4 Rw 4 Pare Selogiri Wonogiri', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `year_education`
--

CREATE TABLE `year_education` (
  `kode` int(5) NOT NULL,
  `tahun` text,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_education`
--

INSERT INTO `year_education` (`kode`, `tahun`, `keterangan`) VALUES
(1, '2018/2019', ''),
(2, '2019/2020', ''),
(3, '2020/2021', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`kode_aka`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`kode_angkatan`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`kode_informasi`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`kode_log`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`kode_org`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`kode_keg`);

--
-- Indexes for table `scoring`
--
ALTER TABLE `scoring`
  ADD PRIMARY KEY (`kode_score`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `year_education`
--
ALTER TABLE `year_education`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `kode_aka` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `kode_org` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `kode_keg` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `year_education`
--
ALTER TABLE `year_education`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

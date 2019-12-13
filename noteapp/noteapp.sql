-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 03:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11877144_ci_noteapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id_day` int(11) NOT NULL,
  `nm_day` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id_day`, `nm_day`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_report_test`
--

CREATE TABLE `meeting_report_test` (
  `id_meeting` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_report_test`
--

INSERT INTO `meeting_report_test` (`id_meeting`, `date`) VALUES
(1, '2019-11-01'),
(2, '2019-11-02'),
(3, '2019-11-30'),
(4, '2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nm_menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Menu'),
(6, 'Meeting'),
(7, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `menu_access`
--

CREATE TABLE `menu_access` (
  `id_access` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_access`
--

INSERT INTO `menu_access` (`id_access`, `id_role`, `id_menu`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 3, 2),
(11, 2, 3),
(15, 1, 4),
(17, 1, 6),
(30, 2, 4),
(31, 2, 6),
(33, 3, 6),
(35, 4, 2),
(36, 4, 6),
(39, 5, 2),
(40, 5, 6),
(43, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL COMMENT 'Report ID',
  `no_report` varchar(128) NOT NULL COMMENT 'Report Number',
  `dy_report` int(11) NOT NULL COMMENT 'Report Day',
  `dt_report` date NOT NULL COMMENT 'Report Date',
  `st_report` time NOT NULL COMMENT 'Report Time Start',
  `fi_report` time NOT NULL COMMENT 'Report Time End',
  `pl_report` varchar(256) NOT NULL COMMENT 'Report Place',
  `mm_report` varchar(256) NOT NULL COMMENT 'Report Member',
  `mt_report` varchar(256) NOT NULL,
  `ty_report` int(11) NOT NULL COMMENT 'Report Type',
  `nm_report` varchar(256) NOT NULL COMMENT 'Report Name',
  `ag_report` varchar(256) NOT NULL COMMENT 'Report Agenda',
  `rd_report` varchar(5000) NOT NULL COMMENT 'Report Rundown',
  `cn_report` varchar(5000) NOT NULL COMMENT 'Report Conclusion',
  `dc_report` varchar(256) NOT NULL COMMENT 'Report File Document',
  `sn_report` varchar(256) NOT NULL COMMENT 'Report File Sound',
  `id_rv` int(11) NOT NULL COMMENT 'Report ID Reviewer',
  `rv_report` int(11) NOT NULL COMMENT 'Report Revied',
  `id_av` int(11) NOT NULL COMMENT 'Report ID Approver',
  `av_report` int(11) NOT NULL COMMENT 'Report Approved',
  `id_user` int(11) NOT NULL COMMENT 'Report ID User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `no_report`, `dy_report`, `dt_report`, `st_report`, `fi_report`, `pl_report`, `mm_report`, `mt_report`, `ty_report`, `nm_report`, `ag_report`, `rd_report`, `cn_report`, `dc_report`, `sn_report`, `id_rv`, `rv_report`, `id_av`, `av_report`, `id_user`) VALUES
(1, 'NOT-1/C.5.2/102019', 1, '2019-10-10', '08:00:00', '09:00:00', 'Ruang Aula Lt.2 PT TASPEN (Persero) Madiun', '1. Yonpizera\r\n2. Sri Diwa Mukariwati\r\n3. Riyanta Widyaka\r\n4. Dayan Rorong\r\n5. Moh. Soleh\r\n6. Dwi Adi Sulistijo\r\n7. Hani Fajrurrohman', '1. Kepala Cabang\r\n2. Kepala Bidang Umum dan SDM\r\n3. Kepala Bidang Layanan dan Manfaat\r\n4. Kepala Bidang Kepesertaan\r\n5. Kepala Bidang Kas dan Verifikasi SPJ\r\n6. Kepala Bidang Administrasi Keuangan\r\n7. Pelakasana Umum dan SDM', 5, 'Pembahasan', 'Pembahasan pencapaian kinreja KC Madiun periode bulan September 2019(Triwulan III).', 'Rapat dibuka oleh Kepala Cabang dengan memberikan arahan pada masing-masing bidang agar dalam mengukur performa kinerja berpedoman pada Keputusan Direksi PT TASPEN (PERSERO) KD-5/DIR/2019 tentang Indikator Penilaian dan Target Kinerja bagi Kantor Cabang Utama/Kantor Cabang Tahun 2019. Pembahasan rapat dilanjutkan dengan penyampaian hasil pencapaian kinerja Kantor Cabang Madiun sampai dengan Triwulan ke III. Kantor Cabang Madiun menempati ranking kedua selindo dengan nilai kinerja 93,91 dengan kategori BAIK (B-). Aspek finansial dan aspek proses bisnis internal masih memiliki peluang untuk dimaksimalkan, yaitu pada indikator penerimaan iuran JKK dan JKM non-PNS dan pengelolaan SPTB. Sedangkan untuk indikator-indikator lain yang telah tercapai agar dipertahankan sampai dengan akhir tahun.', 'Rapat dibuka oleh Kepala Cabang dengan memberikan arahan pada masing-masing bidang agar dalam mengukur performa kinerja berpedoman pada Keputusan Direksi PT TASPEN (PERSERO) KD-5/DIR/2019 tentang Indikator Penilaian dan Target Kinerja bagi Kantor Cabang Utama/Kantor Cabang Tahun 2019. Pembahasan rapat dilanjutkan dengan penyampaian hasil pencapaian kinerja Kantor Cabang Madiun sampai dengan Triwulan ke III. Kantor Cabang Madiun menempati ranking kedua selindo dengan nilai kinerja 93,91 dengan kategori BAIK (B-). Aspek finansial dan aspek proses bisnis internal masih memiliki peluang untuk dimaksimalkan, yaitu pada indikator penerimaan iuran JKK dan JKM non-PNS dan pengelolaan SPTB. Sedangkan untuk indikator-indikator lain yang telah tercapai agar dipertahankan sampai dengan akhir tahun.', 'contoh.pdf', 'contoh.pdf', 1, 1, 1, 1, 15),
(2, 'NT BEST', 2, '2019-11-22', '08:00:00', '09:00:00', 'Gedung Kosan', 'Sendirian', '', 1, 'Merenung', 'Merenung kesalahan pada diri sendiri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'contoh1.pdf', 'contoh.mp3', 2, 1, 2, 1, 15),
(3, 'TEST/01/01/1994', 1, '2019-12-31', '13:00:00', '14:00:00', 'Kantor', 'Sendiri', '', 2, 'Merenung pt.2', 'Masih merenung gaes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'contoh2.pdf', 'contoh1.mp3', 3, 1, 3, 1, 38),
(4, 'TES/1234', 1, '2019-12-31', '12:59:00', '13:00:00', 'Lokasi', 'RT 5 RW 3', '', 1, 'Penting', 'Banyak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'contoh3.pdf', 'contoh2.mp3', 4, 1, 4, 1, 1),
(5, 'TES/12/C.4.5/22001', 1, '2019-01-01', '12:59:00', '13:59:00', 'Lokasi', '1. Dika\r\n2. Dikaka\r\n3. Dikakaka', '1. Penting\r\n2. Sangat Penting\r\n3. Paling Sangat Penting', 1, 'Lokasi', 'Banyak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'contoh4.pdf', 'contoh3.mp3', 5, 1, 5, 1, 1),
(6, 'TEEE', 2, '2019-01-01', '01:00:00', '01:00:00', 'ad', 'asda', 'asda', 1, 'asd', 'asda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'contoh5.pdf', 'contoh4.mp3', 6, 1, 6, 1, 1),
(9, 'NOT-1/C.5.2/102019', 4, '2019-10-10', '08:00:00', '11:00:00', 'Ruang Aula Lt. 2 PT TASPEN (Persero) Madiun', '1. Yonpizera\r\n2. Sri Diwa Mukariwati\r\n3. Riyanta Widyaka\r\n4. Dayan Rorong\r\n5. Moh. Sholeh\r\n6. Dwi Adi Sulistijo\r\n7. Hani Fajrurrohman', '1. Kepala Cabang\r\n2. Kabid Umum dan SDM\r\n3. Kabid Layanan dan Manfaat\r\n4. Kabid Kepesertaan\r\n5. Kabid Kas dan Verif SPJ\r\n6. Kabid Adm Keuangan\r\n7. Pelaksana Umum dan SDM', 6, 'Rapat Pencapaian Kinerja Triwulan III Tahun 2019 KC Madiun', 'Pembahasan pencapaian kinerja KC Madiun periode bulan September 2019 (Triwulan III).', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'NOTULEN_RAPAT_KINERJA_KC_MADIUN_TRIWULAN_3_2019_-1331215.pdf', 'NOTULEN_RAPAT_KINERJA_KC_MADIUN_TRIWULAN_3_2019_-1331215.pdf', 9, 1, 9, 1, 15),
(10, 'MANA', 2, '2019-12-31', '12:59:00', '12:59:00', 'Lokasi', 'sda', 'as', 1, 'asd', 'asd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio justo, viverra eu egestas eget, dictum ac ipsum. Duis eu mauris volutpat, convallis risus vestibulum, malesuada lorem. Donec venenatis vestibulum porttitor. Pellentesque sodales libero in efficitur fringilla. Donec enim ante, suscipit ut ipsum in, iaculis vehicula lectus. Fusce efficitur orci molestie turpis mattis, sed malesuada dolor interdum. Fusce et maximus quam. Donec non neque ante. Aenean eget orci nec tellus sollicitudin convallis.', 'Document1.pdf', 'Document2.pdf', 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report_approve`
--

CREATE TABLE `report_approve` (
  `id_approve` int(11) NOT NULL,
  `st_approve` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_approve`
--

INSERT INTO `report_approve` (`id_approve`, `st_approve`) VALUES
(1, 'Approved'),
(2, 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `report_day`
--

CREATE TABLE `report_day` (
  `id_day` int(11) NOT NULL,
  `nm_day` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_day`
--

INSERT INTO `report_day` (`id_day`, `nm_day`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `report_review`
--

CREATE TABLE `report_review` (
  `id_review` int(11) NOT NULL,
  `st_review` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_review`
--

INSERT INTO `report_review` (`id_review`, `st_review`) VALUES
(1, 'Reviewed'),
(2, 'Not Reviewed');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `id_type` int(11) NOT NULL,
  `ty_report` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`id_type`, `ty_report`) VALUES
(1, 'Rapat Pejabat'),
(2, 'Forum Diskusi'),
(3, 'Bimbingan Teknis'),
(4, 'Pengarahan'),
(5, 'Morning Briefing'),
(6, 'Rapat Koordinasi'),
(7, 'Rapat Komite Anggaran');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id_sub` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `tl_sub` varchar(128) NOT NULL COMMENT 'Sub Menu Title',
  `ur_sub` varchar(128) NOT NULL COMMENT 'Sub Menu URL',
  `ic_sub` varchar(128) NOT NULL COMMENT 'Sub Menu Icon',
  `ac_sub` int(11) NOT NULL COMMENT 'Sub Menu Active State'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub`, `id_menu`, `tl_sub`, `ur_sub`, `ic_sub`, `ac_sub`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'far fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 4, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'Employee', 'admin/employee', 'fas fa-fw fa-users', 1),
(10, 6, 'Write Report', 'meeting/report', 'fas fa-fw fa-pencil-alt', 1),
(11, 7, 'Review Report', 'report/review', 'fas fa-fw fa-eye', 1),
(12, 7, 'Approve Report', 'report/approve', 'fas fa-fw fa-thumbs-up', 1),
(13, 6, 'Archive Board', 'meeting/archive', 'fas fa-fw fa-archive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL COMMENT 'User ID',
  `id_nik` int(11) NOT NULL,
  `nm_user` varchar(128) NOT NULL COMMENT 'User Fullname',
  `username` varchar(128) NOT NULL COMMENT 'Username',
  `im_user` varchar(128) NOT NULL COMMENT 'User Image',
  `password` varchar(256) NOT NULL COMMENT 'Password',
  `lv_user` int(11) NOT NULL COMMENT 'User Level/Roler',
  `sb_user` int(11) NOT NULL,
  `cd_rv` int(11) NOT NULL COMMENT 'Code Reviewer',
  `cd_av` int(11) NOT NULL COMMENT 'Code Approver',
  `ac_user` int(1) NOT NULL COMMENT 'User Active State',
  `dt_user` date NOT NULL COMMENT 'User Date Registration'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_nik`, `nm_user`, `username`, `im_user`, `password`, `lv_user`, `sb_user`, `cd_rv`, `cd_av`, `ac_user`, `dt_user`) VALUES
(1, 1178, 'Dika', 'mahardika.it', 'gl-king.jpg', '1234', 1, 1, 1, 1, 1, '2019-12-01'),
(2, 2080, 'YONPIZERA', 'yonpizera2080', 'bl-king.jpg', 'Taspen1234', 3, 1, 1, 1, 1, '2019-12-01'),
(8, 1101, 'SRI DIWA MUKARIWATI', 'sri1101', 'default1.jpg', 'Taspen1234', 4, 2, 0, 1, 1, '2019-12-01'),
(9, 1567, 'MOH. SHOLEH', 'sholeh1567', 'default1.jpg', 'Taspen1234', 4, 3, 0, 1, 1, '2019-12-01'),
(10, 1610, 'DWI ADI SULISTIJO', 'dwi1610', 'default1.jpg', 'Taspen1234', 4, 4, 0, 1, 1, '2019-12-01'),
(11, 2287, 'DAYAN RORONG', 'dayan2287', 'default1.jpg', 'Taspen1234', 4, 5, 0, 1, 1, '2019-12-01'),
(12, 1405, 'RIYANTA WIDYAKA', 'riyanta1405', 'default1.jpg', 'Taspen1234', 4, 6, 0, 1, 1, '2019-12-01'),
(13, 2842, 'SUMARNI', 'sumarni2842', 'default1.jpg', 'Taspen1234', 5, 7, 0, 0, 1, '2019-12-01'),
(14, 3322, 'CATUR SAKTI KURNIAWAN', 'catur3322', 'default1.jpg', 'Taspen1234', 5, 8, 0, 0, 1, '2019-12-01'),
(15, 3691, 'HANI FAJRURROHMAN', 'hani3691', 'default1.jpg', 'Taspen1234', 5, 9, 0, 0, 1, '2019-12-01'),
(16, 3331, 'EDWIN SUPRAYOGI', 'edwin3331', 'default1.jpg', 'Taspen1234', 5, 10, 0, 0, 1, '2019-12-01'),
(17, 3650, 'DHIAH PANGESTI MURTI', 'dhiah3650', 'default.jpg', 'Taspen1234', 5, 11, 0, 0, 1, '2019-12-01'),
(18, 3852, 'RINANGLING HAYUNINGDYAH', 'rinangling3852', 'default.jpg', 'Taspen1234', 5, 12, 0, 0, 1, '2019-12-01'),
(19, 3330, 'ANGGI WINDI SAPUTRI', 'anggi3330', 'default.jpg', 'Taspen1234', 5, 13, 0, 0, 1, '2019-12-01'),
(20, 2033, 'ARFLAN KENTJORO', 'arflan2033', 'default.jpg', 'Taspen1234', 5, 14, 0, 0, 1, '2019-12-01'),
(21, 1780, 'UNTUNG AHMAD BAHARUDIN', 'untung1780', 'default.jpg', 'Taspen1234', 5, 15, 0, 0, 1, '2019-12-01'),
(22, 2838, 'TITUK NILAWATI', 'tituk2838', 'default.jpg', 'Taspen1234', 5, 15, 0, 0, 1, '2019-12-01'),
(23, 2392, 'PURWADI', 'purwadi2392', 'default.jpg', 'Taspen1234', 5, 16, 0, 0, 1, '2019-12-01'),
(24, 3792, 'UMMI LATIFAH', 'ummi3792', 'default.jpg', 'Taspen1234', 5, 16, 0, 0, 1, '2019-12-01'),
(25, 2843, 'SUPRI HASTUTIK', 'supri2843', 'default.jpg', 'Taspen1234', 5, 17, 0, 0, 1, '2019-12-01'),
(26, 2843, 'ASIYAH', 'asiyah2840', 'default.jpg', 'Taspen1234', 5, 17, 0, 0, 1, '2019-12-01'),
(27, 2840, 'ANGGIT PUTRI PAMUNGKAS', 'anggit3499', 'default.jpg', 'Taspen1234', 5, 17, 0, 0, 1, '2019-12-01'),
(28, 3499, 'ADAM AKBAR VELAYATY HUSEIN', 'adam3329', 'default.jpg', 'Taspen1234', 5, 18, 0, 0, 1, '2019-12-01'),
(29, 3329, 'NANANG EFFENDI', 'nanang2003', 'default.jpg', 'Taspen1234', 5, 17, 0, 0, 1, '2019-12-01'),
(30, 2003, 'SUWIYONO', 'suwiyono2845', 'default.jpg', 'Taspen1234', 5, 17, 0, 0, 1, '2019-12-01'),
(35, 2845, 'Fullname', 'fullname2', 'default.jpg', 'fullname2', 5, 1, 1, 1, 1, '0000-00-00'),
(38, 1194, 'Mahardika Inra Takaendengan', 'mahardika', 'default.jpg', 'alchemist78', 1, 1, 1, 1, 1, '0000-00-00'),
(39, 7894, 'Mahardika Inra Takaendengan', 'mamama', 'bl-bishop.jpg', 'mamama', 2, 1, 1, 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_active`
--

CREATE TABLE `user_active` (
  `id_active` int(11) NOT NULL,
  `st_active` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_active`
--

INSERT INTO `user_active` (`id_active`, `st_active`) VALUES
(1, 'Active'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `ty_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `ty_role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Kepala Cabang'),
(4, 'Kepala Bidang'),
(5, 'Pelaksana');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_role`
--

CREATE TABLE `user_sub_role` (
  `id_sub_role` int(11) NOT NULL COMMENT 'Sub Role ID',
  `sb_role` varchar(256) NOT NULL COMMENT 'Sub Role Name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_role`
--

INSERT INTO `user_sub_role` (`id_sub_role`, `sb_role`) VALUES
(1, '-'),
(2, 'Umum dan SDM'),
(3, 'Kas dan Verifikasi SPJ'),
(4, 'Administrasi Keuangan'),
(5, 'Kepesertaan'),
(6, 'Layanan dan Manfaat'),
(7, 'Administrasi SDM'),
(8, 'Hubungan dan Masyarakat'),
(9, 'Analis Harga, Kebutuhan, Pengadaan Barang dan Jasa '),
(10, 'Verifikasi SPJ Non DAPEM dan DAPEM'),
(11, 'Kasir Keuangan'),
(12, 'Administrasi Keuangan'),
(13, 'Kepesertaan Aktif'),
(14, 'Dosir Kepesertaan'),
(15, 'Kepesertaan Pensiun'),
(16, 'DAPEM'),
(17, 'Layanan 1'),
(18, 'Account Officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id_day`);

--
-- Indexes for table `meeting_report_test`
--
ALTER TABLE `meeting_report_test`
  ADD PRIMARY KEY (`id_meeting`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_access`
--
ALTER TABLE `menu_access`
  ADD PRIMARY KEY (`id_access`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_approve`
--
ALTER TABLE `report_approve`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indexes for table `report_day`
--
ALTER TABLE `report_day`
  ADD PRIMARY KEY (`id_day`);

--
-- Indexes for table `report_review`
--
ALTER TABLE `report_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_active`
--
ALTER TABLE `user_active`
  ADD PRIMARY KEY (`id_active`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_sub_role`
--
ALTER TABLE `user_sub_role`
  ADD PRIMARY KEY (`id_sub_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id_day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meeting_report_test`
--
ALTER TABLE `meeting_report_test`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_access`
--
ALTER TABLE `menu_access`
  MODIFY `id_access` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Report ID', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_approve`
--
ALTER TABLE `report_approve`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_day`
--
ALTER TABLE `report_day`
  MODIFY `id_day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_review`
--
ALTER TABLE `report_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_active`
--
ALTER TABLE `user_active`
  MODIFY `id_active` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_role`
--
ALTER TABLE `user_sub_role`
  MODIFY `id_sub_role` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sub Role ID', AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

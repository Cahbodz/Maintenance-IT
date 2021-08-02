-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2021 pada 03.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gipit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komputer`
--

CREATE TABLE `tb_komputer` (
  `id_komputer` int(11) NOT NULL,
  `ip_adres` varchar(50) NOT NULL,
  `ip_gateway` varchar(50) NOT NULL,
  `nama_kom` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jenis_inter` varchar(50) NOT NULL,
  `level_inter` varchar(50) NOT NULL,
  `jenis_deks_netbook` varchar(50) NOT NULL,
  `merek_deks_netbook` varchar(50) NOT NULL,
  `tipe_deks_netbook` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `merek_monit` varchar(50) NOT NULL,
  `size_monit` varchar(50) NOT NULL,
  `merek_procesr` varchar(50) NOT NULL,
  `tipe_procesr` varchar(50) NOT NULL,
  `speed_procesr` varchar(50) NOT NULL,
  `amount_ram` varchar(50) NOT NULL,
  `tipe_ram` varchar(50) NOT NULL,
  `merek_hards` varchar(50) NOT NULL,
  `size_hards` varchar(50) NOT NULL,
  `merek_grapc` varchar(50) NOT NULL,
  `tipe_grapc` varchar(50) NOT NULL,
  `memory_grapc` varchar(50) NOT NULL,
  `mobo` varchar(50) NOT NULL,
  `power_suply` varchar(50) NOT NULL,
  `mouse` varchar(50) NOT NULL,
  `keyboard` varchar(50) NOT NULL,
  `apk_terinstall` varchar(50) NOT NULL,
  `ups` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komputer`
--

INSERT INTO `tb_komputer` (`id_komputer`, `ip_adres`, `ip_gateway`, `nama_kom`, `nama_user`, `jenis_inter`, `level_inter`, `jenis_deks_netbook`, `merek_deks_netbook`, `tipe_deks_netbook`, `os`, `merek_monit`, `size_monit`, `merek_procesr`, `tipe_procesr`, `speed_procesr`, `amount_ram`, `tipe_ram`, `merek_hards`, `size_hards`, `merek_grapc`, `tipe_grapc`, `memory_grapc`, `mobo`, `power_suply`, `mouse`, `keyboard`, `apk_terinstall`, `ups`) VALUES
(6, '200.10.11.59', '200.10.11.7', 'cetak-div', 'hendri', 'KabelLan', 'bebas', 'notebook', 'toshiba', 'satelite l645', 'win 7 64bit ultimate', 'toshiba', '14\"', 'intel', 'core i3', '2.40ghz', '2gb', 'ddr3', 'seagate', '500gb', 'intel', 'hd graphic', '1gb', 'Intel HM55 Express', '-', 'logitech', 'toshiba', 'aplikasi standar, avtech', 'tidak'),
(7, '200.10.11.52', '200.10.11.1', 'cetak-02', 'eko.h', 'KabelLan', 'bebas', 'notebook', 'lenovo', 'b490 / 20207', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i3-3110m', '2.40ghz', '4gb', 'ddr3', 'seagate', '500gb', 'intel', 'hd graphics 4000', '2gb', '-', '-', 'logitech', 'lenovo', 'aplikasi standar', 'tidak'),
(8, '200.10.11.50', '200.10.11.1', 'cetak-03', 'fuad.f', 'KabelLan', 'bebas', 'cloude computer', 'pc station', 'agc340', 'win 7 64bit ultimate', 'BenQ', '16\"', 'intel', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '100-250 VAC', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(9, 'dhcp', 'dhcp', 'sales-div', 'abdullatief', 'wireles_kabel', 'bebas', 'notebook', 'hp', 'pavilion g4', 'win 7 ultimate 64bit', 'hp', '14\"', 'intel', 'core i3-m390', '2.67ghz', '4gb', 'ddr3', 'seagate', '300gb', 'intel', 'hd graphic', '1,6gb', '-', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak'),
(10, '200.10.11.145', '200.10.11.1', 'server-pc', 'Sulaeman', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'BenQ', '14\"', 'intel', 'pentium(R) Dual-core', '3.00ghz', '4gb', 'ddr3', 'seagate', '-', 'intel', 'g41 express', '1,6gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(11, '200.10.11.73', '200.10.11.7', 'sales-01', 'irsan', 'wireles_kabel', 'bebas', 'notebook', 'asus', 'k45dr', 'win 8 pro 64-bit', 'asus', '14\"', 'amd', 'quad core a8', '1.90ghz', '2gb', 'ddr3', '-', '500gb', 'ati', 'radeon hd 7640g', '1gb', '-', '-', 'logitech', 'asus', 'aplikasi standar', 'tidak'),
(13, '200.10.11.115', '200.10.11.7', 'fin-div', 'eka.s', 'wireles_kabel', 'bebas', 'notebook', 'hp', '14-am015tx', 'win 10 pro 64-bit', 'hp', '14\"', 'intel', 'core i5', '2.30ghz', '8gb', 'ddr3', 'seagate', '500gb', 'Intel', 'hd graphic 520', '4gb', 'hp 81dc (u3e1)', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak'),
(14, '200.10.11.81', '200.10.11.7', 'acc-bag', 'm.rizqi', 'wireles_kabel', 'bebas', 'notebook', 'hp', '14-am015tx', 'Win 10 Pro 64bit', 'hp', '14\"', 'intel', 'core i5-6200u', '2.30ghz', '4gb', 'ddr4', '-', '500gb', 'intel', 'hd graphic 520', '2gb', '-', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak'),
(15, '200.10.11.80', '200.10.11.7', 'acc-01', 'atma.s', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '19\"', 'intel', 'core i3', '3.60ghz', '4gb', 'ddr3', '-', '1tb', 'intel', 'uhd graphic 630', '2gb', 'asusTek h310m-d', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(17, '200.10.11.83', '200.10.11.7', 'acc-02', 'nurliana', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'LG', '19\"', 'intel', 'core 2 duo e7500', '2.93ghz', '2gb', 'ddr2', 'seagate', '150gb', 'intel', 'g33/g31 express', '256mb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(18, '200.10.11.85', '200.10.11.7', 'fin-01', 'virna.w', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '16\"', 'intel', 'core i3', '3.60ghz', '4gb', 'ddr3', '-', '1tb', 'intel', 'uhd graphic 630', '2gb', 'asusTek h310m-d', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(19, '200.10.11.86', '200.10.11.7', 'fin-02', 'iwan.n', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 64bit ultimate', 'LG', '17\"', 'intel', 'core i3-6100', '3.79ghz', '4gb', 'ddr4', '-', '1tb', 'intel', 'hd graphic 530', '2gb', 'ASUSTek H110M-K', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak'),
(20, '200.10.11.82', '200.10.11.7', 'fin-03', 'dodi.s', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'LG', '17\"', 'intel', 'core i3-6100', '3.79ghz', '4gb', 'ddr4', '-', '1tb', 'intel', 'hd graphic 530', '2gb', 'ASUSTek H110M-K', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(21, '200.10.11.94', '200.10.11.5', 'marketing-01', 'resa', 'wireles_kabel', 'bebas', 'notebook', 'asus', 'a455l', 'Win 10 Pro 64bit', 'asus', '14\"', 'intel', 'core i5-5200u', '2.20ghz', '4gb', 'ddr4', '-', '500gb', 'intel', 'hd graphic', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(22, '200.10.11.90', '200.10.11.5', 'marketing-pos01', 'ira.f', '- Pilih -', 'bebas', 'notebook', 'lenovo', 'thinkped t440p', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-4300m', '2.60ghz', '4gb', 'ddr3', 'samsung ssd', '128gb', 'intel', 'hd graphic 4600', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(23, '200.10.11.95', '200.10.11.5', 'marketing-pos02', 'ami.st', 'wireles_kabel', 'bebas', 'notebook', 'lenovo', 'thinkped t440p', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-4300m', '2.60ghz', '4gb', 'ddr3', 'samsung ssd', '128gb', 'intel', 'hd graphic 4600', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(24, '200.10.11.96', '200.10.11.5', 'dig-publishing', 'dira', 'wireles_kabel', 'bebas', 'notebook', 'lenovo', 'thinkped t440p', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-4300m', '2.60ghz', '4gb', 'ddr3', 'samsung ssd', '128gb', 'intel', 'hd graphic 4600', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(25, '200.10.11.92', '200.10.11.5', 'marketing-07', 'reni', 'KabelLan', 'bebas', 'dekstop', 'hp', '-', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-3770', '3.40ghz', '16gb', 'ddr3', 'western wdc & v-gent ssd', '1240gb', 'nvidia', 'GT 640', '12gb', 'pegatron corporation 2ad5', '-', 'steel series', 'dell', 'aplikasi standar,adobe', 'ya'),
(26, '200.10.11.93', '200.10.11.5', 'marketing-pos03', 'junia', 'wireles_kabel', 'bebas', 'notebook', 'lenovo', 'thinkped t440p', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-4200m', '2.46ghz', '4gb', 'ddr3', 'samsung ssd', '128gb', 'intel', 'hd graphic 4600', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(27, '200.10.11.99', '200.10.11.9', 'pos-depok', 'imron', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'BenQ', '16\"', 'intel', 'core 2 quad', '2.83ghz', '4gb', 'ddr2', 'western wdc', '150gb', 'nvidia', 'GeForce9800 GT', '2gb', 'asusTek p5q-pro', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(28, '200.10.11.106', '200.10.11.9', 'pracetak-02', 'Harpanca Jaya', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 750-101d', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr3', 'wd', '1tb', 'nvidia', 'GeForce gtx 745', '12gb', 'hp 2b4b', '500 w(100v-240v)', 'steel series', 'hp wireles', 'aplikasi standar,adobe,irfan view', 'ya'),
(29, '200.10.11.107', '200.10.11.9', 'pracetak-01', 'agus.s', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'LG', '23\"', 'intel', 'core i5-2320', '3.00ghz', '6gb', 'ddr3', 'seagate', '75gb', 'amd', 'radeon hd 5600/5700', '3gb', 'asusTek p8h61-m lx', '-', 'logitech', 'hp', 'aplikasi standar', 'ya'),
(30, '200.10.11.104', '200.10.11.7', 'ctcp', 'user', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'hp', '23\"', 'intel', 'pentium g4560', '3.50ghz', '4gb', 'ddr4', 'seagate', '1500gb', 'intel', 'hd graphic 610', '2gb', 'h110m pro-vh plus', '-', 'logitech', 'a4tech', 'aplikasi standar,express rip,adobe', 'ya'),
(31, '200.10.11.112', '200.10.11.9', 'ti02', 'ikhsan', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '23\"', 'intel', 'core i3', '3.60ghz', '4gb', 'ddr3', 'seagate', '1tb', 'intel', 'uhd graphic 630', '4gb', 'asusTek h310m-d', '-', 'logitech', 'logitech', 'aplikasi standar,aplikasi develop', 'tidak'),
(32, '200.10.11.113', '200.10.11.9', 'IT-02', 'faiz.a', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'BenQ', '16\"', 'intel', 'core i5-2320', '3.00ghz', '4gb', 'ddr3', 'seagate', '233gb', 'amd', 'radeon hd 6700', '2gb', 'ASUSTeK P8H61-M LX', '-', 'logitech', 'alcatroz', 'aplikasi standar,aplikasi develop', 'tidak'),
(33, '200.10.11.117', '200.10.11.7', 'hcsm-01', 'ani.n', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'aoc', '16\"', 'intel', 'core 2 duo e7500', '2.93ghz', '4gb', 'ddr3', 'seagate', '233gb', 'intel', 'g41 express', '1695mb', 'asusTek p5g41t-m lx', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(34, '200.10.11.123', '200.10.11.7', 'whouse-3', 'zakaria', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'BenQ', '16\"', 'intel', 'pentium g4560', '3.50ghz', '4gb', 'ddr3', 'seagate', '500gb', 'intel', 'hd graphic 610', '2122mb', 'msi h110m pro-vh', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(35, '200.10.11.122', '200.10.11.7', 'adcomp-02', 'firmansyah', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'BenQ', '16\"', 'intel', 'core i5-2320', '3.00ghz', '4gb', 'ddr3', 'seagate', '233gb', 'intel', 'hd graphic', '1760mb', 'asusTek p8h61-m lx', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(36, '200.10.11.198', '200.10.11.7', 'whouse-01', 'suroji', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'BenQ', '16\"', 'intel', 'pentium e5700', '3.00ghz', '4gb', 'ddr3', 'seagate', '300gb', 'intel', 'g41 express', '1695mb', 'ecs g41t-m16', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(37, '200.10.11.146', '200.10.11.9', 'pembelian-01', 'ahmadwahyudi', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'hp', '17\"', 'intel', 'core i5-2320', '3.00ghz', '2gb', 'ddr3', 'seagate', '500gb', 'intel', 'hd graphic', '861mb', 'asusTek p8h61-m lx', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(38, '200.10.11.151', '200.10.11.9', 'penerbitan-01', 'rudiansyah', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'BenQ', '16\"', 'intel', 'pentium e5700', '3.00ghz', '4gb', 'ddr2', 'seagate', '250gb', 'ati', 'radeon hd 4300/4500', '2296mb', 'asusTek p5qpl-am', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(39, '200.10.11.152', '200.10.11.9', 'penerbitan-02', 'yuni', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'samsung', '16\"', 'intel', 'pentium e5200', '2.50ghz', '4gb', 'ddr2', 'seagate', '80gb', 'intel', 'g41 express', '1695mb', 'foxconn g41mx/g41mx-k', '-', 'logitech', 'genius', 'aplikasi standar', 'ya'),
(40, '200.10.11.132', '200.10.11.9', 'editor-01', 'suchail.s', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'hp', '19\"', 'intel', 'pentium e5300', '2.60ghz', '3gb', 'ddr2', 'seagate', '500gb', 'intel', 'g33/g31 express', '256mb', 'asusTek p5kpl-am', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(41, '200.10.11.160', '200.10.11.9', 'arwk-01', 'ika wijayati', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 750-200d', 'win 8 pro 64-bit', 'hp', '23\"', 'intel', 'core i7-4770', '3.40ghz', '8gb', 'ddr3', 'seagate', '500gb', 'nvidia', 'GeForce gt 640', '8092mb', 'hewlett-packard 2af3', '-', 'logitech', 'hp wireles', 'aplikasi standar,adobe', 'ya'),
(42, '200.10.11.164', '200.10.11.9', 'arwk-06', 'aghnia', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 750-1010', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr4', 'seagate&v-gent ssd', '1240gb', 'nvidia', 'GeForce gtx 745', '12213mb', 'hp 2b4b', '-', 'steel series', 'hp wireles', 'aplikasi standar,adobe', 'ya'),
(43, '200.10.11.131', '200.10.11.9', 'editor-02', 'kartika', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '16\"', 'intel', 'pentium g4560', '3.50ghz', '4gb', 'ddr4', 'seagate', '500gb', 'intel', 'hd graphic 610', '-', 'msi H110M-K', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(44, '200.10.11.174', '200.10.11.9', 'layouter', 'tutik', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy', 'Win 10 Pro 64bit', 'dell', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr4', 'seagate & v-gent ssd', '5240gb', 'nvidia', 'GeForce gtx 745', '12gb', 'msi h110m pro-vh', '-', 'steel series', 'logitech', 'aplikasi standar,adobe', 'ya'),
(45, '200.10.11.163', '200.10.11.9', 'arwk-03', 'mardiati', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 ultimate 64bit', 'asus', '23\"', 'intel', 'core 2 duo e7400', '2.80ghz', '4gb', 'ddr2', 'seagate', '150gb', 'ati', 'radeon hd 3450', '1786mb', 'asusTek p5kpl-am', '-', 'powerup', 'logitech', 'aplikasi standar', 'ya'),
(46, '200.10.11.159', '200.10.11.9', 'arwk-04', 'aminah.n', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'dell', '23\"', 'intel', 'core i5-2320', '3.00ghz', '4gb', 'ddr3', 'seagate', '500gb', 'ati', 'radeon hd 2600', '2gb', 'asusTek p8h61-m lx', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(47, '200.10.11.167', '200.10.11.9', 'arwk-02', 'sufina', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 700-200d', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-4770', '3.40ghz', '16gb', 'ddr3', 'seagate & v-gent ssd', '1240gb', 'nvidia', 'GeForce gt 640', '12gb', 'Hewlett-Packard 2AF3', '-', 'steel series', 'hp wireles', 'aplikasi standar,adobe', 'ya'),
(48, '200.10.11.175', '200.10.11.9', 'desain-01', 'fikri', 'KabelLan', 'bebas', 'dekstop', 'hp', '-', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-3770', '3.40ghz', '6gb', 'ddr3', 'western wdc & v-gent ssd', '1240gb', 'nvidia', 'GeForce gt 640', '7gb', 'pegatron corporation 2ad5', '-', 'steel series', 'logitech', 'aplikasi standar,adobe', 'ya'),
(49, '200.10.11.194', '200.10.11.9', 'digpub-01', 'anis.h', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '16\"', 'intel', 'core i7-4790', '3.60ghz', '8gb', 'ddr3', 'seagate', '1tb', 'intel', 'gtx 750ti', '6gb', 'h81m-ds2', '-', 'logitech', 'logitech', 'aplikasi standar,adobe', 'ya'),
(50, '200.10.11.171', '200.10.11.9', 'layouter-01', 'irfan.f', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy phoenix 860-001d', 'Win 10 Pro 64bit', 'hp', '27\"', 'intel', 'core i7-6700', '3.40ghz', '32gb', 'ddr4', 'seagate & v-gent ssd', '2103gb', 'nvidia', 'GeForce gtx 960', '18gb', 'hp 2b4b', '-', 'steel series', 'logitech', 'aplikasi standar,adobe', 'ya'),
(51, '200.10.11.176', '200.10.11.9', 'desain-04', 'jatmiko', 'KabelLan', 'bebas', 'dekstop', 'hp', 'ENVY 700-092D', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-4770', '3.40ghz', '16gb', 'ddr3', 'seagate & v-gent ssd', '1240gb', 'nvidia', 'GeForce gt 640', '12gb', 'hewlett-packard 2af3', '-', 'steel series', 'logitech', 'aplikasi standar,adobe', 'ya'),
(52, '200.10.11.121', '200.10.11.9', 'layouter-03', 'fitria', 'KabelLan', 'bebas', 'dekstop', 'dell', 'Inspiron 620', 'Win 10 Pro 64bit', 'LG', '16\"', 'intel', 'core i5-2400', '3.10ghz', '8gb', 'ddr3', 'seagate', '1tb', 'ati', 'hd graphic 5400', '4850mb', 'dell', '-', '-', 'logitech', 'aplikasi standar', 'ya'),
(53, '200.10.11.177', '200.10.11.9', 'desain-02', 'dede', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 750-101d', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr4', 'v-gen', '240gb', 'nvidia', 'GeForce gtx 745', '12gb', 'hp 2b4b', '-', 'steel series', 'logitech', 'aplikasi standar,adobe', 'ya'),
(54, '200.10.11.181', '200.10.11.5', 'marketing-09', 'zikri', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy 750-101d', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr4', 'western wdc & v-gent ssd', '1240gb', 'nvidia', 'GeForce gtx 745', '12gb', 'hp 2b4b', '-', 'steel series', 'hp wireles', 'aplikasi standar,adobe', 'ya'),
(55, '200.10.11.183', '200.10.11.5', 'marketing-06', 'anjas', 'KabelLan', 'bebas', 'dekstop', 'hp', 'envy', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-6700', '3.40ghz', '16gb', 'ddr4', 'western wdc & v-gent ssd', '1240gb', 'nvidia', 'GeForce gtx 745', '12gb', 'hp 2b4b', '-', 'steel series', 'hp wireles', 'aplikasi standar,adobe', 'ya'),
(56, '200.10.11.166', '200.10.11.9', 'dekstop-4hj7fbo', 'jumi.h', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'asus', '23\"', 'intel', 'core i5-2320', '3.00ghz', '8gb', 'ddr3', 'seagate', '160gb', 'ati', 'radeon hd 5400', '4850mb', 'Intel h61', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(57, '200.10.11.88', '200.10.11.9', 'cs-dist', 'delia', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'Win 10 Pro 64bit', 'LG', '16\"', 'intel', 'pentium g4560', '3.50ghz', '8gb', 'ddr4', 'seagate', '1tb', 'Intel', 'hd graphic 610', '4gb', 'msi h110m', '-', '-', 'logitech', 'aplikasi standar', 'ya'),
(58, '200.10.11.87', '200.10.11.7', 'desktop', 'fajar', 'wireles_kabel', 'bebas', 'notebook', 'lenovo', '-', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-3320', '2.60ghz', '4gb', 'ddr3', 'ssd', '128gb', 'intel', 'hd graphic 4000', '1792mb', 'lenovo 2347a81', '-', 'logitech', 'lenovo', 'aplikasi standar', 'tidak'),
(59, '200.10.11.184', '200.10.11.7', 'marketing-02', 'berliana', 'KabelLan', 'bebas', 'dekstop', '-', 'rakitan', 'win 7 enterprise 64bit', 'hp', '16\"', 'intel', 'core i5-2320', '3.00ghz', '4gb', 'ddr3', 'seagate', '500gb', 'Intel', 'hd graphic', '1544mb', 'h61h2-mv', '-', 'logitech', 'logitech', 'aplikasi standar', 'ya'),
(60, '200.10.11.133', '200.10.11.5', 'dekstop-r2jn85t', 'shofi', 'KabelLan', 'bebas', 'mini pc', '-', '-', 'Win 10 Pro 64bit', 'LG', '19\"', 'intel', 'intel celeron j3455', '1.50ghz', '4gb', '-', 'seagate', '500gb', 'Intel', 'hd graphic 500', '2gb', 'intel corporation nuc6cayb', '-', 'hp', 'logitech', 'aplikasi standar', 'tidak'),
(61, '200.10.11.203', '200.10.11.7', 'adcomp-bag', 'andi.sh', 'wireles_kabel', 'bebas', 'dekstop', 'hp', '14-ac003tx', 'win 8 pro 64-bit', 'hp', '14\"', 'intel', 'core i5-5200u', '2.20ghz', '4gb', 'ddr3', 'seagate', '500gb', 'amd', 'radeon r5m330 graphics', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(62, '200.10.11.126', '200.10.11.7', 'whouse-bag', 'andi.s', 'wireles_kabel', 'bebas', 'notebook', 'hp', '14-ac003tx', 'win 8 pro 64-bit', 'hp', '14\"', 'intel', 'core i5-5200u', '2.20ghz', '4gb', 'ddr3', 'seagate', '500gb', 'amd', 'radeon r5m330 graphics', '2gb', '-', '-', 'logitech', 'logitech', 'aplikasi standar', 'tidak'),
(63, 'dhcp', 'dhcp', 'Qc-div', 'slamet riyanto', 'wireles', 'bebas', 'notebook', 'asus', 'x455lf', 'win 8 pro 64-bit', 'asus', '14\"', 'intel', 'core i5-5200u', '2.20ghz', '4gb', 'ddr3', 'seagate', '500gb', 'nvidia', 'GeForce 930M', '2gb', '-', '-', 'logitech', 'asus', 'aplikasi standar', 'tidak'),
(64, '200.10.11.154', '200.10.11.9', 'dekstop-9n80l44', 'ratih.k', 'wireles_kabel', 'bebas', 'notebook', 'lenovo', 'thinkped t440p', 'Win 10 Pro 64bit', 'lenovo', '14\"', 'intel', 'core i5-4300m', '2.60ghz', '4gb', 'ddr3', 'samsung ssd', '128gb', 'Intel', 'hd graphic 4600', '2gb', '-', '-', 'logitech', 'lenovo', 'aplikasi standar', 'tidak'),
(65, '200.10.11.252', '200.10.11.5', 'sales-bag', 'm.yusuf', 'wireles', 'bebas', 'notebook', 'hp', '14AM015TX', 'Win 10 Pro 64bit', 'hp', '14\"', 'intel', 'core i5-6200u', '2.40ghz', '4gb', 'ddr3', '-', '-', 'intel', 'hd graphic 520', '2gb', '-', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak'),
(66, '200.10.11.178', '200.10.11.9', 'desain-03', 'rofi.n', 'KabelLan', 'bebas', 'dekstop', 'hp', 'ENVY 700-092D', 'Win 10 Pro 64bit', 'hp', '23\"', 'intel', 'core i7-3770', '3.40ghz', '16gb', 'ddr3', 'thoshiba & v-gen', '1240gb', 'nvidia', 'GeForce gt 640', '11gb', 'pegatron corporation 2ad5', '-', 'logitech', 'logitech', 'aplikasi standar,adobe', 'ya'),
(67, '200.10.11.196', '200.10.11.8', 'corp-sec', 'hary', 'wireles_kabel', 'bebas', 'notebook', 'hp', 'cf0080tx', 'Win 10 Pro 64bit', 'hp', '14\"', 'intel', 'core i5', '1.60ghz', '8gb', 'ddr4', 'hitachi ssd', '1tb', 'Intel', 'uhd graphic 620', '2gb', 'hp 84b3', '-', 'logitech', 'hp', 'aplikasi standar', 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `username`, `password`) VALUES
(3, 'faiz', 'gema'),
(4, 'ihsan', 'gema'),
(5, 'fauzi', 'gema');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_kom`
--

CREATE TABLE `tb_log_kom` (
  `id_log` int(11) NOT NULL,
  `id_komputer` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `kerusakan` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `nama_it` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log_kom`
--

INSERT INTO `tb_log_kom` (`id_log`, `id_komputer`, `nama_user`, `kerusakan`, `tindakan`, `ket`, `bagian`, `nama_it`, `tgl_mulai`, `tgl_selesai`) VALUES
(7, 8, 'faiz.a2', 'error', 'install', 'ew', 'hardware', 'd', '2021-04-23', '2021-04-24'),
(8, 7, 'faiz.a', 'error', 'install', 'A', 'hardware', 'ihsan', '2021-04-23', '2021-04-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_printer`
--

CREATE TABLE `tb_log_printer` (
  `id_log_printer` int(11) NOT NULL,
  `id_printer` int(50) NOT NULL,
  `masalah` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log_printer`
--

INSERT INTO `tb_log_printer` (`id_log_printer`, `id_printer`, `masalah`, `ket`, `tgl`) VALUES
(3, 3, 'tes', 'selesa', '2021-04-26'),
(4, 1, 'hasil print bergaris', 'bersihin rol', '2021-04-26'),
(5, 1, 'hasil print kotor', 'diservice ke fixprint', '2021-04-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_printer`
--

CREATE TABLE `tb_printer` (
  `id_printer` int(11) NOT NULL,
  `marek` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `ip_server` varchar(100) NOT NULL,
  `multifungsi` varchar(50) NOT NULL,
  `pilihan_warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_printer`
--

INSERT INTO `tb_printer` (`id_printer`, `marek`, `model`, `ip_server`, `multifungsi`, `pilihan_warna`) VALUES
(1, 'canon', 'mp280', '200.10.11.80', 'print - scant', 'hitam putih - warna'),
(4, 'canon', 'IR3235', '200.10.11.17', 'print - fotocopy', 'hitam putih'),
(5, 'hp', 'laserjet 700 m712', '200.10.11.20', 'print', 'hitam putih'),
(6, 'hp', 'laserjet M101-M106m', '200.10.11.123', 'print', 'hitam putih'),
(7, 'epson', 'LQ 2180', '200.10.11.122', 'print', 'hitam putih'),
(8, 'hp', 'laserjet 1320 pcl 5', '200.10.11.122', 'print', 'hitam putih'),
(9, 'Fuji xerox', 'Docuprint p115 w', '200.10.11.44', 'print', 'hitam putih'),
(10, 'canon', 'mp287', '200.10.11.115', 'print - scant', 'hitam putih'),
(11, 'Fuji xerox', 'dc-ii c3300 pcl', '200.10.11.145', 'print', 'hitam putih'),
(12, 'Fuji xerox', 'Docuprint c3055 pcl', '200.10.11.145', 'print', 'hitam putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trouble`
--

CREATE TABLE `tb_trouble` (
  `id` int(11) NOT NULL,
  `code_error` varchar(200) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `langkah` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_trouble`
--

INSERT INTO `tb_trouble` (`id`, `code_error`, `pesan`, `solusi`, `langkah`, `link`, `tgl`, `judul`) VALUES
(4, '-', 'you need to format the disk in drive', 'scant dengan testdisk', 'download testdisk->extrak->run admins->No log->pilih drive->intel->analisys->quet serch->tunggu sampai selesai->klik p', 'https://www.youtube.com/watch?v=J8R2kyY7h9Q', '2021-05-03', 'flashdisk tidak terbaca'),
(5, 'adobe ilustrator', 'the operation cannot complete because of unknow error.', 'update adobe creative cloude', 'buka adobe cloude lalu update adobe yg error', '-', '2021-05-03', 'adobe'),
(6, 'network not connect to 172.168.1.88', 'disconnct', 'maping ulang', '1. klik kanan open net & inter ---&gt;diskonek jaringan basysprint\r\n2.disconek maping jobs //172.168.1.88\r\n3. enable jaringan basysprint\r\n4.ketik di url explorer \\\\172.168.1.88', '-', '2021-05-04', 'maping mesin ctcp'),
(7, '-', 'lan orang lain tidak muncul', 'tutup lan dan buka lagi', '1.klik kanan pada lan lalu exit kemudian coba buka kembali\r\n2.trun off kan windows defender firewallnya\r\n3.buka avast jadikan network privet', '-', '2021-05-10', 'lan messager'),
(8, 'code lisence failed', 'code lisence failed', 'uninstall kutools, restart pc, lalu coba install kembali', 'Download kemudian extract\r\nselanjutnya install sampai selesai\r\nsetelah itu buka folder jamu, copy semua isinya dan paste ke\r\nC:\\Program Files (x86)\\Kutools for Excel\r\n\r\nreplace yang asli\r\ndone full ve', 'https://www.kuyhaa-me.com/kutools-for-excel-full-version.html', '2021-05-10', 'activate kutools pd excel'),
(9, '-', 'bing selalu muncul ketika tab baru di buka', 'hapus di bagian setting', 'setting->tampilan->mesin telusur->klola mesin telusur->klik dropdown lalu hapus yang ingin di hapus lalu restart chrom', 'https://www.wikihow.com/Remove-Bing-from-Chrome', '2021-06-03', 'menghilangkan extensi di chrom'),
(10, '-', 'add ins tidak bisa terpasang di word', 'install dari wordnya', 'masuk word ->file-> option -> add ins ->manage klik Go..->add lalu cari setup add-ins install lalu oke\r\njika masih tidak bisa install menggunakan administrator', '-', '2021-06-22', 'add-ins word');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_komputer`
--
ALTER TABLE `tb_komputer`
  ADD PRIMARY KEY (`id_komputer`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_log_kom`
--
ALTER TABLE `tb_log_kom`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `tb_log_printer`
--
ALTER TABLE `tb_log_printer`
  ADD PRIMARY KEY (`id_log_printer`);

--
-- Indeks untuk tabel `tb_printer`
--
ALTER TABLE `tb_printer`
  ADD PRIMARY KEY (`id_printer`);

--
-- Indeks untuk tabel `tb_trouble`
--
ALTER TABLE `tb_trouble`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_komputer`
--
ALTER TABLE `tb_komputer`
  MODIFY `id_komputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_log_kom`
--
ALTER TABLE `tb_log_kom`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_log_printer`
--
ALTER TABLE `tb_log_printer`
  MODIFY `id_log_printer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_printer`
--
ALTER TABLE `tb_printer`
  MODIFY `id_printer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_trouble`
--
ALTER TABLE `tb_trouble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

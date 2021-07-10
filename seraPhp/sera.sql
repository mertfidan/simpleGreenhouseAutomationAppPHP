-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2015, 17:14:19
-- Sunucu sürümü: 5.5.20
-- PHP Sürümü: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sera`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `konu` text NOT NULL,
  `mail` text NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sera`
--

CREATE TABLE IF NOT EXISTS `sera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seraadi` text NOT NULL,
  `sebze` text NOT NULL,
  `dikimolcu` text NOT NULL,
  `dikimesafe` text NOT NULL,
  `gecesicaklik` text NOT NULL,
  `gunduzsicaklik` text NOT NULL,
  `cimsicaklik` text NOT NULL,
  `usumedonma` text NOT NULL,
  `nem` text NOT NULL,
  `isiksure` text NOT NULL,
  `ekistarihi` text NOT NULL,
  `bitistarihi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

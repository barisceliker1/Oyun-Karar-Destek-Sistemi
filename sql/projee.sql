-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Haz 2019, 03:29:15
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projee`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `market`
--

DROP TABLE IF EXISTS `market`;
CREATE TABLE IF NOT EXISTS `market` (
  `Yer` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Hacim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `market`
--

INSERT INTO `market` (`Yer`, `Hacim`) VALUES
('Cin', 34),
('Amerika', 30),
('Japonya', 19),
('Güney Kore', 6),
('Almanya', 5),
('Fransa', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyunlar`
--

DROP TABLE IF EXISTS `oyunlar`;
CREATE TABLE IF NOT EXISTS `oyunlar` (
  `OyunTuru` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `OyunSayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `oyunlar`
--

INSERT INTO `oyunlar` (`OyunTuru`, `OyunSayisi`) VALUES
('Aksiyon', 20),
('Rol Yapma', 5),
('Macera', 15),
('Battle-Royale', 7),
('Fps', 7),
('Strateji', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

DROP TABLE IF EXISTS `satis`;
CREATE TABLE IF NOT EXISTS `satis` (
  `Platformlar` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Satis_Rakamlari` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`Platformlar`, `Satis_Rakamlari`) VALUES
('Konsol Oyunlari', '35 '),
('Tarayici Oyunlari', '4'),
('Bilgisayar Oyunlari', '29'),
('Mobil Oyunlari', '56'),
('Tablet Oyunlari', '14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

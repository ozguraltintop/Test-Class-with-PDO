-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Mar 2023, 17:23:18
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `testcase`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `surname` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `birth` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pass` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `country`, `birth`, `gender`, `phone`, `pass`) VALUES
(12, 'Özgür', 'Altıntop', 'altintopozgur@gmail.com', 'Afghanistan', '1212-12-12', 'male', '5442303119', '12345');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2017 г., 18:11
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `sr` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productName` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `char` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`sr`, `productID`, `productName`, `price`, `image`, `char`) VALUES
(1, 1, 'Lenovo Ideapad Y700', '679.00', '../images/products/Y700.jpg', ' *6th generation Intel(R) core(tm) i5 processor\r\n* Windows 10\r\n* 14" Full HD(1920x1080), anti glare display with integrated camera\r\n* 8GB DDR4 memory\r\n* 1TB HDD 128GB SSD\r\n* AMD Radeon R9 graphics'),
(2, 2, 'Lenovo Yoga 900s', '999.99', '../images/products/Yoga900s.jpg', '6th generation Intel(R) core(tm) M7 processor\r\n* Windows 10\r\n* 12.5" display,QHD(2560x1440) with IDS technology\r\n* 8GB LPDDR3 memory\r\n* 256GB PCLe SSD storage \r\n* Integrated Intel(R) HD Graphics\r\n\r\n'),
(3, 3, 'Lenovo M800z', '584.10', '../images/products/M800z.jpg', '* 6th generation Intel(R) core(tm) i7 processor\r\n* Windows 10\r\n* 21.5" FHD(1920x1080),LED backlit LCD display with optional touchscreen\r\n* 16GB DDR4 memory\r\n* 256GB SSD, 500GB SATA HDD, 180GB OPAL SSD'),
(4, 4, 'OMEN Laptop UHD', '1249.99', '../images/products/HP_OMEN.jpg', '* 6th generation Intel(R) core(tm) i7 processor\r\n* Windows 10\r\n* 15.6" diagonal UHD IPS UWVA anti-glare WLED-backlit(3840x2160)\r\n* 16GB DDR4 memory\r\n* 2TB 5400 rpm SATA, 128GB SSD\r\n* NVIDIA(R) GeForce'),
(5, 5, 'HP 250 G5 PC', '549.00', '../images/products/HP250g5.jpg', '* 6th generation Intel(R) core(tm) i5 processor\r\n* Windows 10\r\n* 15.6" diagonal HD SVA, anti-glare slim LED-backlit(1366x768)\r\n* 4GB DDR3L-1600 SDRAM\r\n* 500GB 7200rpm SATA\r\n* Intel(R) HD graphics 5500'),
(6, 6, 'Hp-24-g010z', '529.99', '../images/products/HP-24.jpg', '* AMD A6 Quad-core Processor\r\n* Windows 10\r\n* 23.8" Full HD(1920x1080)2BD WLED Antiglare\r\n* 8GB DDR3 memory\r\n* 1TB HDD storage\r\n* Integrated Radeon(TM) R4 Graphics\r\n'),
(7, 7, 'Asus N750JK', '655.49', '../images/products/N750JK.jpg', '* 6th generation Intel(R) core(tm) i7 processor\r\n* Windows 10\r\n* 17.3" Full HD(1920x1080), Backlit Non-Glare LCD Panel\r\n* 4GB DDR3L memory\r\n* 1600 MHZ SDRAM\r\n* Integrated Intel(R) HD Graphics\r\n'),
(8, 8, 'Del XPS 13', '799.99', '../images/products/XPS13.jpg', '* 7th generation Intel(R) core(tm) i3-700u processor\r\n* Windows 10\r\n* 13..3" Full HD(1920x1080), infinity Edge display\r\n* 4GB LPDDR3 1866MHZ\r\n* 128GB Solid State Drive\r\n* Intel(R) HD graphics\r\n'),
(21, 21, 'Lenovo Gaming Keyboard ', '139.99', '../images/products/Lkeyboard.jpg', '* Connector type Wireless\r\n* Color Black\r\n* Warranty 1year\r\n\r\n'),
(22, 22, 'Lenovo Yoga Mouse ', '69.99', '../images/products/Ymouse.jpg', '* Connector type Wireless\r\n* Color Black\r\n* Number of buttons 4\r\n* Warranty 1year\r\n'),
(23, 23, 'HP 15.6 Backpack', '79.00', '../images/products/B.jpg', '* Compability NoteBooks up to 15.6"\r\n* Color Brown\r\n* Warranty 1year\r\n'),
(24, 24, 'Beats Solo3', '299.95', '../images/products/solo3.jpg', '* Connector type Wireless\r\n* Color Black\r\n* 40 hours battery life\r\n\r\n'),
(25, 25, 'Beats EP', '99.95', '../images/products/ep.jpg', '* Connector type Wire\r\n* Color Black\r\n* Warranty 1year\r\n'),
(26, 26, 'Beats X', '149.95', '../images/products/beatsx.jpg', '* Connector type Wireless\r\n* Color Black\r\n* 8hours battery life\r\n'),
(27, 27, 'Lenovo 15.6 by NAVA', '27.99', '../images/products/bag.jpg', '* Campability NoteBook up 15.6\r\n* Color gray\r\n* Warranty 1year\r\n'),
(28, 28, 'Y Stereo Headset', '49.99', '../images/products/Yheadset.jpg', '* Color Red&Black\r\n* Weight 0.6lbs \r\n* Warranty 1year\r\n'),
(41, 41, 'Galaxy Tab S2', '499.99', '../images/products/TS2.jpg', '\r\n* Android 6.0 Marshmallow\r\n* 9.7" Super AMOLED 2048x1536\r\n* Octa-core APQ8076\r\n* 3GB RAM\r\n* 32GB ROM\r\n'),
(42, 42, 'Tab2 A10-30', '129.99', '../images/products/tab2A.jpg', '\r\n* Android 4.4 KitKat\r\n* 10.1" IPS LED LCD Touch 1920x1200\r\n* 2.0 GB PC3-14900R DDR3 \r\n* 16GB Storage \r\n* 10 hours battery life\r\n'),
(43, 43, 'Sumsung Galaxy Tab A', '384.00', '../images/products/TabA.jpg', '* Android 6.0 Marshmallow\r\n* 10.1" PLS LCD 1920x1200\r\n* MSM 8953, Octa-Core \r\n* 2GB RAM\r\n* 16GB ROM\r\n'),
(44, 44, 'Jumper EZpad 5SE', '227.15', '../images/products/Jumper.jpg', '* Intel Cherry Trail x5-z8300 quad core\r\n* 10.6" Capacitive Screen 1920x1080\r\n* 4GB RAM\r\n* 64GB ROM\r\n'),
(45, 45, 'Huawei MediaPad M3', '301.26', '../images/products/M3.jpg', '* Android 6.0 Marshmallow\r\n* 8.4" (2560x1600) \r\n* 4GB RAM\r\n* 32GB ROM\r\n'),
(46, 46, 'Hiaomi MiPad2', '232.05', '../images/products/Mipad2.jpg', '* Android 5.1\r\n* 7.9" (2048x1536) \r\n* 2GB RAM\r\n* 64GB ROM\r\n\r\n'),
(47, 47, 'Chuwi Hi10', '220.79', '../images/products/chuwi.jpg', '* Android5.1 and Windows 10  Quad core\r\n* Intel Hd graphics, Generation 8 processor \r\n* 10.1" (1920x1200) \r\n* 4GB LPDDR3\r\n* 64GB ROM\r\n'),
(48, 48, 'Yuntab 7', '106.99', '../images/products/yuntab7.jpg', '* Android 5.1 QuadCore\r\n* 7" (1024x600) \r\n* 1GB RAM\r\n* 8GB ROM\r\n'),
(61, 61, 'Samsung Galaxy S8', '750', '../images/products/S8.jpg', '* Android 7.0 Nougat\r\n* 5.8" full rectangle 2960x1440\r\n* Octa Core(2.35GHz Quad + 1.9 GHz Quad)\r\n* 64GB Memory\r\n'),
(62, 62, 'Huawai G9', '170.58', '../images/products/hg9.jpg', '* Android\r\n* 5.2"  1920x1080\r\n* Dual sim cards \r\n* 3GB RAM\r\n* 16GB ROM\r\n'),
(63, 63, 'Samsung Galaxy J5', '289.99', '../images/products/J5.jpg', '* Android\r\n* 5.2" Super AMOLED 1280x720\r\n* 2GB RAM\r\n* 16GB ROM\r\n'),
(64, 64, 'Lenovo k10E70', '94.99', '../images/products/lenovok10.jpg', '* Android\r\n* 5" 1280x720\r\n* 2GB RAM\r\n* 16GB ROM\r\n'),
(65, 65, 'Samsung Galaxy J3', '225.55', '../images/products/J3.jpg', '* Android 5.1.1\r\n* 5.0" sAMOLED 720x1280HD\r\n* 1.2GHz Quad A7 \r\n* 16GB eMMC+1.5GB LPDDR3 RAM\r\n'),
(66, 66, 'LG G4', '127.19', '../images/products/LGg4.jpg', '* Android\r\n* 5.5"  2560x1440\r\n* 3GB RAM\r\n* 32GB ROM\r\n'),
(67, 67, 'Apple iPhone 7', '836.42', '../images/products/iphone7.jpg', '* IOS\r\n* 5.5" 1920x1080\r\n* 3GB RAM\r\n* 32GB ROM\r\n'),
(68, 68, 'HTC ONE M9', '182.11', '../images/products/htcM9.jpg', '* Android\r\n* 5.0" 1920x1080\r\n* 3GB RAM\r\n* 32GB ROM\r\n'),
(100, 100, 'ASUS', '800', '', ''),
(101, 101, 'SAMSUNG', '500', '', ''),
(102, 102, 'HUAWEI', '400', '', ''),
(103, 103, 'MOTOROLLA', '450', '', ''),
(104, 104, 'SMART WATCH', '150', '', ''),
(105, 105, 'BEATS', '80', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `signin`
--

CREATE TABLE `signin` (
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `signin`
--

INSERT INTO `signin` (`username`, `email`, `password`) VALUES
('shahboz', 'boss@mail.ru', '071bb63cdbb9f492c4fccef9aa0fe34e'),
('aaaaaa', 'qwe@mail.ru', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sr`);

--
-- Индексы таблицы `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`password`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

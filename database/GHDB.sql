-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 01:45 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GHDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `productID` char(10) NOT NULL DEFAULT '',
  `productName` varchar(20) NOT NULL,
  `imageLocation` varchar(30) NOT NULL,
  `productType` varchar(20) NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `productPrice` decimal(8,2) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productID`, `productName`, `imageLocation`, `productType`, `manufacturer`, `productPrice`, `description`) VALUES
('GCIGC', 'GameCube', 'media/products/1/0.jpg', 'Gaming Console', 'Nintendo', 74.99, 'The GameCube is unlike any video game system you''ve ever seen before! It''s power and gaming capabilities will shock you! 40MB of onboard memory means bigger game worlds, bigger enemies, and bigger battles can be stored Store your games on memory cards and load them instantly Analog AV output Includes analog controller'),
('GCPGC', 'GameCube', 'media/products/0/0.jpg', 'Gaming Console', 'Nintendo', 59.99, 'Get the all-new sleek and stylish Nintendo GameCube Limited Edition Platinum. Nintendo''s next-generation console is back and better than ever. This collector''s edition console is home to a massive variety of games and a super-powerful 485MHz processor to bring you the ultimate speed, graphics and animation in the gaming world. This console has everything that the original has; only now it''s cooler, trendier and classier.'),
('NSBGGC', 'Nintendo Switch', 'media/products/7/0.jpg', 'Gaming Console', 'Nintendo', 499.99, 'A hardware bundle for Super Smash Bros. Ultimate is here! The bundle contains a specially designed dock featuring fighters from the original Super Smash Bros.  game, a download code for Super Smash Bros. Ultimate, and Super Smash Bros. themed Joy-Con controllers. Introducing Nintendo Switch, the new home video game system from Nintendo. In addition to providing single and multiplayer thrills at home, the Nintendo Switch system can be taken on the go so players can enjoy a full home console experience anytime, anywhere. The mobility of a handheld is now added to the power of a home gaming system, with unprecedented new play styles brought to life by the two new Joy-Con controllers. PLAY ANYWHERE.'),
('NSBYGC', 'Nintendo Switch', 'media/products/9/0.jpg', 'Gaming Console', 'Nintendo', 409.99, 'Take your Pokemon journey to the Kanto region with this special hardware bundle! It packs in the Nintendo Switch system, a Pikachu and Eevee themed dock and matching Joy-Con controllers, the Poke Ball Plus accessory, and a download code the Pokemon: Let''s Go, Eevee! game. With your steadfast partner, Eevee, become a top Pokemon Trainer by battling other trainers! Use a gentle throwing motion to catch Pokemon in the wild with either one Joy-Con controller or Poke Ball Plus, which will light up, vibrate, and make sounds to bring your adventure to life.'),
('NSYBGC', 'Nintendo Switch', 'media/products/8/0.jpg', 'Gaming Console', 'Nintendo', 409.99, 'Take your Pokemon journey to the Kanto region with this special hardware bundle! It packs in the Nintendo Switch system, a Pikachu and Eevee themed dock and matching Joy-Con controllers, the Poke Ball Plus accessory, and a download code the Pokemon: Let''s Go, Pikachu! game. With your energetic partner, Pikachu, become a top Pokemon Trainer by battling other trainers! Use a gentle throwing motion to catch Pokemon in the wild with either one Joy-Con controller or Poke Ball Plus, which will light up, vibrate, and make sounds to bring your adventure to life.'),
('PSCGC', 'Playstation 4', 'media/products/3/0.jpg', 'Gaming Console', 'Sony', 449.99, 'Call of Duty: WWII on PlayStation 4 tells an all-new story of common men doing extraordinary things. Drop into the most action-packed battles as you land in Normandy and fight your way across Europe through to Aukam. Feel the gritty authenticity and surreal terror of trench warfare on the most popular console of the year.1 Featuring a limited edition Green Camouflage 1TB PlayStation4 and matching DUALSHOCK4 wireless controller, the Best Place to Play Call of Duty is on PlayStation 4. Call of Duty on PlayStation 4 - Play Map Packs 30 Days Early, Only on PlayStation 2. The title has been rated mature 17 plus blood and gore, intense violence and strong language.'),
('PSGGC', 'Playstation 4', 'media/products/4/0.jpg', 'Gaming Console', 'Sony', 499.99, 'The limited edition gold PlayStation 4 system. Complete with a 1TB hard drive and a gold Dualshock 4 wireless controller. Play incredible games, team up or compete with friends with PlayStation Plus, watch live TV and movies, listen to your favorite music and more. The possibilities are endless. Greatness Awaits.'),
('PSWGC', 'Playstation 4', 'media/products/2/0.jpg', 'Gaming Console', 'Sony', 399.99, 'From the makers of the acclaimed hit game Destiny, comes the much-anticipated sequel. An action shooter that takes you on an epic journey across the solar system. Humanity''s last safe city has fallen to an overwhelming invasion force, led by Ghaul, the imposing commander of the brutal Red Legion.'),
('XBRGC', 'Xbox One', 'media/products/5/0.jpg', 'Gaming Console', 'Microsoft', 289.99, 'The Xbox One S 2TB Console - Gears of War 4 Limited Edition Bundle features a custom console and controller, and a full game download of Gears of War 4: Ultimate Edition for Xbox One and Windows 10, with early access, exclusive in-game items, a Season Pass, and much more.'),
('XBWGC', 'Xbox One', 'media/products/6/0.jpg', 'Gaming Console', 'Microsoft', 209.99, 'Xbox One S has over 1,300 games: blockbusters, popular franchises, and Xbox One exclusives. Play with friends, use apps, and enjoy built-in 4K Ultra HD Blu-ray and 4K video streaming. NOTE: Does not include Xbox stand.');

-- --------------------------------------------------------

--
-- Table structure for table `PurchaseOrder`
--

CREATE TABLE IF NOT EXISTS `PurchaseOrder` (
  `po` int(10) NOT NULL,
  `productID` char(10) NOT NULL,
  `qty` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cardName` varchar(100) NOT NULL,
  `ccNumber` varchar(20) NOT NULL,
  `expMonth` varchar(20) NOT NULL,
  `expYear` year(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `shipping` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PurchaseOrder`
--

INSERT INTO `PurchaseOrder` (`po`, `productID`, `qty`, `name`, `phone`, `email`, `address`, `cardName`, `ccNumber`, `expMonth`, `expYear`, `cvv`, `shipping`) VALUES
(1, 'GCIGC', 221, 'Peter MuffAnteater', '111-111-1111', 'peter@anteater.edu', '12345 Kobe Bryant St', 'Peter Anteater', '9999-9999-9999-9999', 'December', 2022, 445, 'Regular'),
(2, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(3, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(4, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(5, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(6, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(7, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(8, 'GCIGC', 1, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(9, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(10, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(11, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(12, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(13, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight'),
(14, 'GCIGC', 2, 'Peter Anteater', '111-111-1111', 'peter@anteater.com', '123 Lemon Street, An', 'John Smith', '6666-6666-6666-6666', 'October', 0000, 666, 'Overnight');

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE IF NOT EXISTS `Tags` (
  `productID` char(10) NOT NULL DEFAULT '',
  `tag` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tags`
--

INSERT INTO `Tags` (`productID`, `tag`) VALUES
('GCIGC', 'blue'),
('GCIGC', 'classic'),
('GCIGC', 'console'),
('GCIGC', 'gamecube'),
('GCIGC', 'nintendo'),
('GCPGC', ' gamecube'),
('GCPGC', 'classic'),
('GCPGC', 'console'),
('GCPGC', 'gray'),
('GCPGC', 'grey'),
('GCPGC', 'nintendo'),
('GCPGC', 'platinum'),
('NSBGGC', 'black'),
('NSBGGC', 'bros'),
('NSBGGC', 'nintendo'),
('NSBGGC', 'smash'),
('NSBGGC', 'super'),
('NSBGGC', 'switch'),
('NSBYGC', 'nintendo'),
('NSBYGC', 'pikachu'),
('NSBYGC', 'pokemon'),
('NSBYGC', 'switch'),
('NSBYGC', 'yellow'),
('NSYBGC', 'eevee'),
('NSYBGC', 'nintendo'),
('NSYBGC', 'pokemon'),
('NSYBGC', 'switch'),
('NSYBGC', 'yellow'),
('PSCGC', 'camo'),
('PSCGC', 'cod'),
('PSCGC', 'console'),
('PSCGC', 'green'),
('PSCGC', 'playstation'),
('PSCGC', 'ps4'),
('PSCGC', 'slim'),
('PSCGC', 'sony'),
('PSGGC', 'console'),
('PSGGC', 'gold'),
('PSGGC', 'playstation'),
('PSGGC', 'ps4'),
('PSGGC', 'slim'),
('PSGGC', 'sony'),
('PSWGC', 'console'),
('PSWGC', 'destiny'),
('PSWGC', 'playstation'),
('PSWGC', 'ps4'),
('PSWGC', 'sony'),
('PSWGC', 'white'),
('XBRGC', 'console'),
('XBRGC', 'microsoft'),
('XBRGC', 'one'),
('XBRGC', 'red'),
('XBRGC', 'xbox'),
('XBWGC', 'console'),
('XBWGC', 'microsoft'),
('XBWGC', 'one'),
('XBWGC', 'white'),
('XBWGC', 'xbox');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `PurchaseOrder`
--
ALTER TABLE `PurchaseOrder`
  ADD PRIMARY KEY (`po`,`productID`,`qty`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`productID`,`tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PurchaseOrder`
--
ALTER TABLE `PurchaseOrder`
  MODIFY `po` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `PurchaseOrder`
--
ALTER TABLE `PurchaseOrder`
  ADD CONSTRAINT `PurchaseOrder_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `Products` (`productID`);

--
-- Constraints for table `Tags`
--
ALTER TABLE `Tags`
  ADD CONSTRAINT `Tags_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `Products` (`productID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

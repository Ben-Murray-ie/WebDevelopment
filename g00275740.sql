-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 05:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `g00275740`
--
CREATE DATABASE IF NOT EXISTS `g00275740` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `g00275740`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Ibanez RG421HPAM', 'Pure combusting metal. Be a warrior of the stage. The Ibanez Ibanez RG421HPAM is impressive in both style and playability. Look authentic with the mesmerising Nyatoh body smothered in an antique brown stain finish. The Ash top Nyatoh gives a tone that allows you to use expression with a toasty warm edge. Be visually and phonically original.', 650),
(2, 'Epiphone SG Standard', 'The Epiphone SG Standard pays homage to one of the most celebrated and recognisable guitars in the world. Inspired by the legendary Gibson models, it offers the same feel and aesthetics at an affordable price.', 300),
(3, 'Fender Vintera 50s Stratocaster', 'The original era. The Fender Vintera 50s Stratocaster carries the origins of the Strat into the modern day. Because no guitar can compete with the style, sound, and feel of a vintage Fender. Featuring era-specific components and a construction faithful to the original design - the Vintera 50s Strat makes that heritage Fender tone more accessible than ever.', 1000),
(4, 'Fender FSR American Performer Telecaster', 'The Fender FSR American Performer Telecaster is a shining example of why. The sleek, comfortable body shape, stunning aesthetic, and pristine sound all combine to make for a supreme playing experience.', 1200),
(5, 'Gibson Les Paul Tribute', 'The Gibson Les Paul Tribute brings all of the hallmark quality of a legendary model into an affordable instrument that goes right back to the roots of the Les Paul name. It\'s been tirelessly designed from the ground up, inspired by all of the iconic features that made the Les Paul so celebrated in the first place.', 1400),
(6, 'Gibson Explorer', 'Born in 1958, the Explorer was first released alongside the Flying V, and it represented a new era of guitar design and innovation. The shape allows it to be well balanced and comfortable, with each contour naturally fitting around the person playing it. That\'s why it\'s become a favourite amongst professional artists and musicians across the world. ', 1600),
(7, 'Jackson DK3XR Dinky', 'Just imagine the thrilling performances you\'ll have with this guitar... the Jackson DK3XR Dinky is built for unforgettable gigs. It exudes immense power. Push the Jackson high-output pickups hard and prepare for a spicy tone that promises to shake the walls.', 550),
(8, 'Jackson JS32T Rhoads', 'Extreme style, killer sound. The Jackson JS32T Rhoads delivers both in abundance. Its unique body shape makes this guitar perfect for someone who is not only looking for an aggressive sound, but also aggressive style.', 350),
(9, 'PRS S2 McCarty 594 Singlecut', 'The PRS S2 McCarty 594 Singlecut is a magnificent creation. It will unlock your creativity on your guitar and pave the way to total mastery. It features 58/15 \'S\' pickups in the neck and bridge, giving it a beautifully rich, full sound which bursts with harmonics and flavour.', 2000),
(10, 'PRS SE Custom 24', 'The PRS SE Custom 24. This guitar is the epitome of PRS quality and showcases exquisite expertise and meticulous attention to detail. Explore the wonders of such a divine instrument and unleash your potential with 85/15S pickups.', 900);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

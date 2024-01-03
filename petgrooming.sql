-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql211.byetcluster.com
-- Generation Time: Jan 03, 2024 at 09:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petgrooming`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpesanan`
--

CREATE TABLE `detailpesanan` (
  `id_detailpesanan` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailpesanan`
--

INSERT INTO `detailpesanan` (`id_detailpesanan`, `jumlah`, `id_produk`, `id_pesanan`) VALUES
(1, 2, 2, 1),
(2, 2, 66, 2),
(3, 2, 83, 3),
(4, 2, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Food'),
(2, 'Snack'),
(3, 'Toys'),
(4, 'Health'),
(5, 'Wash'),
(6, 'Grooming'),
(7, 'Accessories'),
(8, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `tanggal_pesanan`, `id_user`) VALUES
(1, '2024-01-01', 2),
(2, '2024-01-01', 2),
(3, '2024-01-03', 2),
(5, '2024-01-03', 3);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `gambar`, `id_kategori`) VALUES
(1, 'Pedigree Chicken & Vegetables Adult', 160, 100000, 'Pedigree Chicken & Vegetables Adult.png', 1),
(2, 'Pedigree PRO Puppy', 157, 80000, 'Pedigree PRO Puppy.png', 1),
(3, 'Pedigree Can Lamb & Rice Puppy', 195, 25000, 'Pedigree Can Lamb & Rice Puppy.png', 1),
(4, 'Pedigree Can Lamb & Vegetable Adult', 198, 25000, 'Pedigree Can Lamb & Vegetable Adult.png', 1),
(5, 'Whiskas Tuna Adult 1+ Years', 105, 70000, 'Whiskas Tuna Adult 1+ Years.png', 1),
(6, 'Whiskas Chicken Junior 2-12 Months', 129, 70000, 'Whiskas Chicken Junior 2-12 Months.png', 1),
(7, 'Whiskas Pouch Meats Junior 2-12 Months', 130, 8000, 'Whiskas Pouch Meats Junior 2-12 Months.png', 1),
(8, 'Whiskas Can Chicken 1+ Years', 174, 25000, 'Whiskas Can Chicken 1+ Years.png', 1),
(9, 'Dog Choize Lamb Adult', 173, 18000, 'Dog Choize Lamb Adult.png', 1),
(10, 'Dog Choize Beef Adult', 145, 18000, 'Dog Choize Beef Adult.png', 1),
(11, 'Cat Choize Salmon Kitten', 106, 18000, 'Cat Choize Salmon Kitten.png', 1),
(12, 'Cat Choize Tuna Adult', 195, 18000, 'Cat Choize Tuna Adult.png', 1),
(13, 'Royal Canin Puppy', 157, 200000, 'Royal Canin Puppy.png', 1),
(14, 'Royal Canin Adult', 102, 210000, 'Royal Canin Adult.png', 1),
(15, 'Royal Canin Can Puppy', 139, 50000, 'Royal Canin Can Puppy.png', 1),
(16, 'Royal Canin Can Adult', 188, 50000, 'Royal Canin Can Adult.png', 1),
(17, 'Pedigree Dentastix Puppy', 123, 23000, 'Pedigree Dentastix Puppy.png', 2),
(18, 'Pedigree Dentastix Adult', 154, 25000, 'Pedigree Dentastix Adult.png', 2),
(19, 'Pedigree Dentastix Chewy Chunx', 199, 25000, 'Pedigree Dentastix Chewy Chunx.png', 2),
(20, 'Pedigree Meat Jerky', 136, 22000, 'Pedigree Meat Jerky.png', 2),
(21, 'JerHigh Variety Stix', 181, 28000, 'JerHigh Variety Stix.png', 2),
(22, 'JerHigh Milky Stix', 197, 28000, 'JerHigh Milky Stix.png', 2),
(23, 'JerHigh Liver Stix', 143, 28000, 'JerHigh Liver Stix.png', 2),
(24, 'JerHigh Chicken Blueberry Stix', 124, 28000, 'JerHigh Chicken Blueberry Stix.png', 2),
(25, 'Me-O Creamy Treats Chicken & Liver', 191, 12000, 'Me-O Creamy Treats Chicken & Liver.png', 2),
(26, 'Me-O Creamy Treats Chicken & Liver', 182, 12000, 'Me-O Creamy Treats Chicken & Liver.png', 2),
(27, 'Me-O Creamy Treats Bonito', 141, 12000, 'Me-O Creamy Treats Bonito.png', 2),
(28, 'Me-O Creamy Treats Goat Milk', 159, 12000, 'Me-O Creamy Treats Goat Milk.png', 2),
(29, 'Friskies Party Mix Cheese Flavor with Egg & Bacon', 171, 20000, 'Friskies Party Mix Cheese Flavor with Egg & Bacon.png', 2),
(30, 'Friskies Party Mix Liver & Turkey Flavor with Chicken', 180, 20000, 'Friskies Party Mix Liver & Turkey Flavor with Chicken.png', 2),
(31, 'Friskies Party Mix Chicken', 188, 20000, 'Friskies Party Mix Chicken.png', 2),
(32, 'Friskies Party Mix Shrimp, Crab & Tuna Flavor with Ocean Whitefish', 101, 20000, 'Friskies Party Mix Shrimp, Crab & Tuna Flavor with Ocean Whitefish.png', 2),
(33, 'Chewy Baseball Toy for Dog', 141, 20000, 'Chewy Baseball Toy for Dog.png', 3),
(34, 'Chewy Ball Toy for Dog ', 100, 20000, 'Chewy Ball Toy for Dog.png', 3),
(35, 'Dog Chew Cotton Rope Toy', 180, 7000, 'Dog Chew Cotton Rope Toy.png', 3),
(36, 'Dog Training Teething Rope Toys', 102, 40000, 'Dog Training Teething Rope Toys.png', 3),
(37, 'Tennis Ball', 167, 10000, 'Tennis Ball.png', 3),
(38, 'Dogs Ball Chew Teething Aid', 132, 50000, 'Dogs Ball Chew Teething Aid.png', 3),
(39, 'Duck Toy', 157, 35000, 'Duck Toy.png', 3),
(40, 'Alligator Toy', 189, 35000, 'Alligator Toy.png', 3),
(41, 'Bird Teaser Wand with Catnip', 178, 12000, 'Bird Teaser Wand with Catnip.png', 3),
(42, 'Mice Plush with Catnip', 121, 10000, 'Mice Plush with Catnip.png', 3),
(43, 'Fish Toy Filled with Catnip', 172, 15000, 'Fish Toy Filled with Catnip.png', 3),
(44, 'Electric Fish Interactive Toy', 199, 20000, 'Electric Fish Interactive Toy.png', 3),
(45, 'Cat Scratching Ball Playground', 179, 100000, 'Cat Scratching Ball Playground.png', 3),
(46, 'Variety Pack with Cat Tunnel Jingle Bell', 198, 95000, 'Variety Pack with Cat Tunnel Jingle Bell.png', 3),
(47, 'Catnip Balls Rotatable Licking Treats', 154, 65000, 'Catnip Balls Rotatable Licking Treats.png', 3),
(48, 'Electric Moving Mouse', 176, 30000, 'Electric Moving Mouse.png', 3),
(49, 'Vetericyn +plus Anitimicrobial Eye Wash', 117, 75000, 'Vetericyn +plus Anitimicrobial Eye Wash.png', 4),
(50, 'Naturvet Hemp Joint Health', 160, 100000, 'Naturvet Hemp Joint Health.png', 4),
(51, 'Hervalvet Intestine Cleanse', 149, 200000, 'Hervalvet Intestine Cleanse.png', 4),
(52, 'ProDen PlaqueOff Cat', 165, 80000, 'ProDen PlaqueOff Cat.png', 4),
(53, 'Supplement For Total Health 7-IN-1', 178, 250000, 'Supplement For Total Health 7-IN-1.png', 4),
(54, 'Nutrition Strength Multi-vitamin For Dog', 195, 70000, 'Nutrition Strength Multi-vitamin For Dog.png', 4),
(55, 'AminAvast', 140, 70000, 'AminAvast.png', 4),
(56, 'Basepaws CatKit', 117, 60000, 'Basepaws CatKit.png', 4),
(57, 'Petlabco Joint Care Chew', 166, 120000, 'Petlabco Joint Care Chew.png', 4),
(58, 'Naturvet Digestive Enzymes', 179, 100000, 'Naturvet Digestive Enzymes.png', 4),
(59, 'Feliway', 199, 80000, 'Feliway.png', 4),
(60, 'Wellness Natural Hairball Control', 160, 150000, 'Wellness Natural Hairball Control.png', 4),
(61, 'NaturVet ArthriSoothe-Gold', 100, 125000, 'NaturVet ArthriSoothe-Gold.png', 4),
(62, 'Petnc Dog Aspirin', 121, 115000, 'Petnc Dog Aspirin.png', 4),
(63, 'Tomlyn Immune Support', 104, 100000, 'Tomlyn Immune Support.png', 4),
(64, 'Tick Remove Spray', 161, 55000, 'Tick Remove Spray.png', 4),
(65, 'Silicone Brush with Hose', 191, 55000, 'Silicone Brush with Hose.png', 5),
(66, 'Silicone Brush', 173, 30000, 'Silicone Brush.png', 5),
(67, 'SPA Massage Comb', 101, 40000, 'SPA Massage Comb.png', 5),
(68, 'Woof Washer 360°', 179, 60000, 'Woof Washer 360.png', 5),
(69, 'Dog Medicated Shampoo Purotex', 196, 60000, 'Dog Medicated Shampoo Purotex.png', 5),
(70, 'Dog Sanitiser Tick and Flea Shampoo', 140, 65000, 'Dog Sanitiser Tick and Flea Shampoo.png', 5),
(71, 'Pawsitive Vibes Pet Shampoo', 115, 65000, 'Pawsitive Vibes Pet Shampoo.png', 5),
(72, 'Paws N Tail Coconut Shampoo & Kondisioner', 155, 65000, 'Paws N Tail Coconut Shampoo & Kondisioner.png', 5),
(73, 'Gentle Touch Cat Shampoo ', 132, 65000, 'Gentle Touch Cat Shampoo.png', 5),
(74, 'Cat Shampoo Anti Flea & Tick ', 194, 65000, 'Cat Shampoo Anti Flea & Tick.png', 5),
(75, 'Cat Rainbow Shampoo ', 176, 65000, 'Cat Rainbow Shampoo.png', 5),
(76, 'Light & Healthy Premium Shampoo', 197, 150000, 'Light & Healthy Premium Shampoo.png', 5),
(77, 'Shower Bag For Cat', 160, 45000, 'Shower Bag For Cat.png', 5),
(78, 'Big Cat and Dog Towel', 107, 40000, 'Big Cat and Dog Towel.png', 5),
(79, 'Dog & Cat Finger Toothbrush', 155, 15000, 'Dog & Cat Finger Toothbrush.png', 5),
(80, 'Small Cat and Dog Towels', 157, 40000, 'Small Cat and Dog Towels.png', 5),
(81, 'Retractable Dog Leash', 118, 55000, 'Retractable Dog Leash.png', 7),
(82, 'Classic Dog Leash', 121, 30000, 'Classic Dog Leash.png', 7),
(83, 'Dog Harness with Leash', 150, 60000, 'Dog Harness with Leash.png', 7),
(84, 'Cat Harness with Leash', 198, 55000, 'Cat Harness with Leash.png', 7),
(85, 'Cat Harness with Leash Strawberry Pink', 135, 70000, 'Cat Harness with Leash Strawberry Pink.png', 7),
(86, 'Cat Leash with Backpack', 181, 65000, 'Cat Leash with Backpack.png', 7),
(87, 'Dog Leash with Backpack', 198, 75000, 'Dog Leash with Backpack.png', 7),
(88, 'Cat and Dog Neck Collar', 150, 35000, 'Cat and Dog Neck Collar.png', 7),
(89, 'Small Dog Collar', 154, 20000, 'Small Dog Collar.png', 7),
(90, 'Big Dog Collar', 123, 30000, 'Big Dog Collar.png', 7),
(91, 'Cat Collar with Ribbon', 153, 25000, 'Cat Collar with Ribbon.png', 7),
(92, 'Elegant Cat Collar', 196, 20000, 'Elegant Cat Collar.png', 7),
(93, 'Dog Clothes', 120, 60000, 'Dog Clothes.png', 7),
(94, 'Dog Deer Hat', 112, 40000, 'Dog Deer Hat.png', 7),
(95, 'Cat Clothes', 102, 60000, 'Cat Clothes.png', 7),
(96, 'Cat Crochet Hat', 174, 50000, 'Cat Crochet Hat.png', 7),
(97, 'Backpack for Cats', 164, 55000, 'Backpack for Cats.png', 8),
(98, 'Litter Boxes & Enclosures Furniture', 197, 30000, 'Litter Boxes & Enclosures Furniture.png', 8),
(99, 'Animal Cage Cat Dog Transport Box Spring Lock Door', 195, 60000, 'Animal Cage Cat Dog Transport Box Spring Lock Door.png', 8),
(100, 'Slingbag for Cats', 184, 55000, 'Slingbag for Cats.png', 8),
(101, 'Cat Tree Playground', 134, 70000, 'Cat Tree Playground.png', 8),
(102, 'Cat and Dog Food Bowl Spiral', 120, 65000, 'Cat and Dog Food Bowl Spiral.png', 8),
(103, 'Cat Beds', 198, 75000, 'Cat Beds.png', 8),
(104, 'Dog Beds', 132, 35000, 'Dog Beds.png', 8),
(105, 'Dog Muzzle', 164, 20000, 'Dog Muzzle.png', 8),
(106, 'Pet Water Dispenser Bottle', 126, 30000, 'Pet Water Dispenser Bottle.png', 8),
(107, 'Food Pet Supplies', 137, 25000, 'Food Pet Supplies.png', 8),
(108, 'Pet Stroller', 109, 20000, 'Pet Stroller.png', 8),
(109, 'Pet Brush Gloves', 134, 25000, 'Pet Brush Gloves.png', 6),
(110, 'Pet Dematting Comb', 144, 50000, 'Pet Dematting Comb.png', 6),
(111, 'Pet Slicker Brush', 118, 40000, 'Pet Slicker Brush.png', 6),
(112, 'Pet Hair Trimmer', 157, 95000, 'Pet Hair Trimmer.png', 6),
(113, 'Pet Hair Dryer', 134, 300000, 'Pet Hair Dryer.png', 6),
(114, 'Pet Grooming Scissors', 199, 200000, 'Pet Grooming Scissors.png', 6),
(115, 'Grooming Hammock for Pets', 192, 60000, 'Grooming Hammock for Pets.png', 6),
(116, 'Pet Nail Clipper', 163, 40000, 'Pet Nail Clipper.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `role`, `password`) VALUES
(1, 'admin@gmail.com', 'admin1', 'Admin', 'admin123'),
(2, 'anggi@gmail.com', 'anggi', 'Customer', 'acac42696bbf796cfc818a1b3a58461c6edafd71e0d33400356246dca989e44f'),
(3, 'resuma@gmail.com', 'resuma', 'Customer', 'd66102f1e1727c238782b536ac6e68df41374ed2989a7fd669bf2bb4269765ff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD PRIMARY KEY (`id_detailpesanan`),
  ADD KEY `id_produk` (`id_produk`) USING BTREE,
  ADD KEY `id_pesanan` (`id_pesanan`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `pesanan_ibfk_1` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpesanan`
--
ALTER TABLE `detailpesanan`
  MODIFY `id_detailpesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD CONSTRAINT `id_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

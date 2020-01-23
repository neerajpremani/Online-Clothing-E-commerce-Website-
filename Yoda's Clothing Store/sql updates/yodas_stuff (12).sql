-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 06:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yodas_stuff`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `ser_no` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `product_code` varchar(500) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `price` varchar(200) NOT NULL,
  `ratings` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `ratings`) VALUES
(3, 'neeraj5665@gmail.com', 'Anime T-shirt', 'T-shirt', '2t.jpg', '1', '700', ''),
(4, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(5, 'neeraj5665@gmail.com', 'Anime bag3', 'Anime', 'bag3.jpg', '1', '1250', ''),
(6, 'neeraj5665@gmail.com', 'Anime T-shirt', 'T-shirt', '2t.jpg', '1', '700', ''),
(7, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(8, 'neeraj5665@gmail.com', 'Anime Sketch', 'Dragonball-z', 'art.jpg', '1', '450', ''),
(9, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(10, 'neeraj5665@gmail.com', 'Keychains2', 'keychains', 'key4.jpg', '1', '100', ''),
(11, 'neeraj5665@gmail.com', 'Keychains4', 'keychains', 'key1.jpg', '1', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.no` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_acc`
--

CREATE TABLE `history_acc` (
  `ser_no` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `ratings` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_acc`
--

INSERT INTO `history_acc` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `ratings`) VALUES
(22, 'neeraj5665@gmail.com', 'Anime T-shirt', 'T-shirt', '2t.jpg', '1', '700', ''),
(23, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(24, 'neeraj5665@gmail.com', 'Anime bag3', 'Anime', 'bag3.jpg', '1', '1250', ''),
(25, 'neeraj5665@gmail.com', 'Anime T-shirt', 'T-shirt', '2t.jpg', '1', '700', ''),
(26, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(27, 'neeraj5665@gmail.com', 'Anime Sketch', 'Dragonball-z', 'art.jpg', '1', '450', ''),
(28, 'neeraj5665@gmail.com', 'Anime Poster2', 'Anime', 'p4.jpg', '1', '300', ''),
(29, 'neeraj5665@gmail.com', 'Keychains2', 'keychains', 'key4.jpg', '1', '100', ''),
(30, 'neeraj5665@gmail.com', 'Keychains4', 'keychains', 'key1.jpg', '1', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ser_no` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ser_no`, `user_name`, `password`) VALUES
(1, 'neeraj', 'neeraj'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ser_no` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `Ratings` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `waranty` varchar(200) NOT NULL,
  `shipping_time` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `save` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `quantity` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ser_no`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `Ratings`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `image1`, `quantity`) VALUES
(50, 'Anime bag1', 'anime', 'bags', '1500', 'Bag', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.8', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '6 months', '1 week', '1500', '1300', '200', 'bag1.jpg', 7),
(51, 'Anime bag2', 'Anime', 'bags', '1700', 'Bag', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.2', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '6 months', '1 week', '1700', '1550', '150', 'bag2.jpg', 7),
(47, 'Anime Poster1', 'Anime', 'posters', '400', 'poster', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.9', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '2 days', '1 day', '400', '350', '50', 'p3.jpg', 7),
(48, 'Anime Poster2', 'Anime', 'posters', '400', 'poster', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.0', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '2 days', '1 day', '400', '300', '100', 'p4.jpg', 4),
(49, 'Anime Poster3', 'Anime', 'posters', '400', 'poster', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.1', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '2 days', '1 day', '400', '375', '25', 'p5.jpg', 7),
(45, 'Anime Poster4', 'Anime', 'posters', '350', 'poster', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.8', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '2 days', '1 day', '350', '300', '50', 'p1.jpg', 7),
(46, 'Anime Poster5', 'Anime', 'posters', '450', 'poster', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.3', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '2 days', '1 day', '450', '350', '100', 'p2.jpg', 7),
(57, 'Keychains1', 'keychains', 'keychains', '100', 'Best', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.8', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '3 days', '100', '100', '0', 'key3.jpg', 7),
(58, 'Keychains2', 'keychains', 'keychains', '110', 'Best', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.0', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '3 days', '110', '100', '10', 'key4.jpg', 6),
(56, 'Keychains3', 'keychains', 'keychains', '120', 'Best', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.2', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '3 days', '120', '100', '20', 'key2.jfif', 7),
(55, 'Keychains4', 'keychains', 'keychains', '130', 'Best', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.3', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '3 days', '130', '100', '30', 'key1.jpg', 6),
(59, 'Anime Art', 'Pokemon Pikachu', 'unique', '450', '<3', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.5', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '4 days', '450', '400', '50', 'pokemon.jpg', 6),
(60, 'Anime Sketch', 'Dragonball-z', 'unique', '500', '<3', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.5', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', 'NA', '3 days', '500', '450', '50', 'art.jpg', 5),
(61, 'Anime Shoes', 'Minion Shoes', 'unique', '900', 'Reliable', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.5', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '14 days', '2 days', '900', '800', '100', 'shoe2.jpg', 7),
(52, 'Anime bag3', 'Anime', 'bags', '1500', 'Bag', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.7', 'YODA''S STORE', 'YODA''S STORE', '--', '8 months', '5-7 days', '1500', '1250', '250', 'bag3.jpg', 5),
(53, 'Anime bag4', 'Anime', 'bags', '1600', 'Bag', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '4.1', 'YODA''S STORE', 'YODA''S STORE', '--', '8 months', '5-7 days', '1600', '1400', '200', 'bag4.jpg', 7),
(54, 'Anime bag5', 'Anime', 'bags', '1500', 'Bag', 'YODA''S STORE', 'YODA''S STORE', 'YODA''S STORE', '3.9', 'YODA''S STORE', 'YODA''S STORE', '--', '6 months', '5-7 dyas', '1500', '1400', '100', 'bag5.jpeg', 7),
(44, 'HODOR T-SHIRT', 'T-shirt', 'tshirts', '1200', 'cotton', 'YODA''S STORE', 'T-shirts', 'YODA''S STORE', '4.3', '--', 'YODA''S STORE', '--', '31 days', '5-7 days', '1200', '1000', '200', '13.jpg', 7),
(42, 'Anime T-shirt', 'T-shirt', 'tshirts', '800', 'cotton', 'YODA''S STORE', 'T-shirts', 'YODA''S STORE', '3.7', '--', 'YODA''S STORE', '--', '31 dyas', '5-7 days', '800', '700', '100', '2t.jpg', 18),
(43, 'StarBoy T-shirt', 'T-shirt', 'tshirts', '1000', 'cotton', 'YODA''S STORE', 'T-shirts', 'YODA''S STORE', '4.1', 'YODA''S STORE', 'YODA''S STORE', '--', '30 days', '5-7 days', '1000', '800', '200', '3.jpg', 7),
(37, 'Tokyo Ghaul', 'TSHIRT', 'tshirts', '800', 'cotton', 'YODA''S STORE', 'MOBILE', 'YODA''S STORE', '4.4', '--', 'YODA''S STORE', '--', '31 days', '5-7 days', '800', '800', '0', '1.jpg', 7),
(40, 'Bulbasaur Tshirt', 'T-shirt', 'tshirts', '1000', 'cotton', 'YODA''S STORE', 'T-SHIHRTS', 'YODA''S STORE', '4.3', '--', 'YODA''S STORE', '--', '30 days', '5-7 days', '1000', '800', '200', '4.jpg', 7),
(65, 'Anime tshirts2', 'SWAG', 'tshirts', '800', 'kuch bhi', 'yy', 'tshirts', 'hh', '4.2', 'kkl', 'kk', 'kk', '20 days', '5-8 days', '800', '500', '300', '10.jpg', 6),
(66, 'yy', 'yy', 'tshirts', '800', 'yy', 'yy', 'tshirts', 'jj', '4.3', 'jj', 'jj', 'jj', '12', '5-8 days', '800', '500', '300', '7.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ser_no` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `txn_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `static_id` int(11) NOT NULL,
  `page` varchar(200) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `details`) VALUES
(1, 'aboutus', '\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n <font style="font-family: Verdana, Geneva, sans-serif;">\n <div style="text-align: justify;"><font face="times new roman" color="#000033"><b>Yoda''s Store - </b>in full bloom</font></div><div style="text-align: justify;"><font face="times new roman" color="#000033"><br></font></div><div><font face="times new roman"><div style="text-align: justify;"><b style="color: rgb(0, 0, 51);">Yoda''s Store</b><font color="#000033">, holds the distinction of being the one-stop-destination for quality electronic Products in Central India. It offers an array of world-renowned brands like Apple, Sony, Samsung, LG, Philips, Nokia, Dell, Lenovo, Blackberry, Compaq, Nikon, Canon, Whirlpool, Hitachi etc. all under one roof.</font></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">Online shopping - Great Brands, Great Value</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">Apart from 9 mega showrooms in Delhi,&nbsp;</font><b style="color: rgb(0, 0, 51);">Yoda''s Store</b><font color="#000033">&nbsp;now boasts of a strong presence in the virtual world too. Its website&nbsp;www.phpgurukul.com facilitates safe &amp; convenient online shopping for the customers.&nbsp;</font></div></div><div><div style="text-align: justify;"><font color="#000033">There are many wonderful things that you can do on this website - Get acquainted with the vast number of brands available for each product. Get in-depth information about them, compare the options &amp; select the product of your choice. You can also chat online with our advisors - clear queries &amp; get expert guidance. Plus there are special schemes and offers for the customers. The buying process too is very easy &amp; convenient. Every purchase comes with an assurance of timely delivery, anywhere in India. The happiness does not fade away even after the purchase. The prompt after-sales service keeps the product and your smile intact - year after year.</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">RishtaBehtarZindagi se: A way of life.</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">A bond with a better life, this is the philosophy that we live by and it is reflected in each and every endeavor of the company.</font></div></div><div style="text-align: justify;">&nbsp;</div></font></div></font>\n\n</font>\n\n</font>\n\n\n\n'),
(2, 'contact', '\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\n <font style="font-family: Verdana, Geneva, sans-serif;">\n <font style="font-family: Verdana, Geneva, sans-serif;">\n <font style="font-family: Verdana, Geneva, sans-serif;">\n <div><b>Yoda''s Store</b></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Address : &nbsp; &nbsp; &nbsp;New Delhi</font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Email-Id : &nbsp; &nbsp; yodas_store@gmail.com</font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Contact No : &nbsp;+91-962381000000</font></div><div style="color: rgb(153, 51, 0);"><font face="Verdana, Geneva, sans-serif">&nbsp;</font></div></font>\n\n</font>\n\n</font>\n\n</font>\n\n</font>\n\n</font>\n\n</font>\n\n</font>\n\n\n\n'),
(3, 'Privacy&Policy', ''),
(4, 'Terms&Condition', '');

-- --------------------------------------------------------

--
-- Table structure for table `txn_status`
--

CREATE TABLE `txn_status` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `txn_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_add`
--

CREATE TABLE `user_add` (
  `ser_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) NOT NULL,
  `country` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_add`
--

INSERT INTO `user_add` (`ser_no`, `name`, `address`, `city`, `state`, `zip`, `country`, `email`, `phone`) VALUES
(1, 'n', 'p', 'a', 'a', 1, 'a', 'n@gmail.com', 5),
(2, 'n', 'p', 'a', 'a', 1, 'a', 'n@gmail.com', 5),
(3, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(4, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(5, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(6, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(7, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(8, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(9, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(10, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(11, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(12, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(13, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(14, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(15, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(16, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(17, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(18, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(19, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(20, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(21, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(22, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(23, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(24, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(25, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(26, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(27, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(28, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(29, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(30, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(31, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(32, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(33, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(34, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(35, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(36, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(37, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(38, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(39, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(40, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(41, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(42, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(43, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(44, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(45, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(46, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(47, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(48, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(49, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(50, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(51, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(52, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647),
(53, 'neeraj', 'chembur', 'mumbai', 'maharashtra', 400074, 'IND', 'neeraj5665@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ser_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ser_no`, `name`, `email`, `contact`, `password`) VALUES
(14, 'Neeraj Premani', 'neeraj5665@gmail.com', '9623100200', 'neeraj'),
(15, 'neeraj_p', 'neeraj_p@gmail.com', '8899665544', 'abcd'),
(16, 'nitin', 'nitinpandey304@gmail.com', '8108844973', '123456'),
(17, 'name', 'n@gmail,com', '1234', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `history_acc`
--
ALTER TABLE `history_acc`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ser_no`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`static_id`);

--
-- Indexes for table `txn_status`
--
ALTER TABLE `txn_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_add`
--
ALTER TABLE `user_add`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ser_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history_acc`
--
ALTER TABLE `history_acc`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `static_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `txn_status`
--
ALTER TABLE `txn_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_add`
--
ALTER TABLE `user_add`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

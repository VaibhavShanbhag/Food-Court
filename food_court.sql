-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 05:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_court`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `mobile_number`, `email`, `address`, `password`) VALUES
(1, 'Vaibhav Shanbhag', '7219111959', 'vaibhavshanbhag22@gmail.com', 'Mrago', '12345678'),
(2, 'Virat Kohli', '7665667789', 'ViratKohli112@gmail.com', 'Mumbai, India', '12345678'),
(3, 'Vaibhav Shanbhag', '7219111955', 'vaibhavshanbhag2212@gmail.com', 'Fatorada, Margao - Goa, India', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `image`, `food_name`, `type`, `category`, `description`, `price`) VALUES
(1, 'Chicken Supreme Pizza.jpg', 'Chicken Supreme Pizza', 'non-veg', 'pizza', 'Herbed Chicken, Schezwan Chicken Meatball, Chicken Tikka.', 350),
(2, 'Chili Burger with Pepper Relish.jpg', 'Chili Burger with Pepper Relish', 'veg', 'burger', 'An American recipe of chilli burgers. A spiced lamb patty slapped between burger buns served with a roasted red bell pepper dip.', 120),
(3, 'Crispy Chicken Burger.jpg', 'Crispy Chicken Burger', 'non-veg', 'burger', 'These fried chicken burgers are ultra crispy and absolutely bursting with flavour. Better still, they couldn’t be easier to make.', 200),
(4, 'Double Cheese Pizza.jpg', 'Double Cheese Pizza', 'veg', 'pizza', 'Extra Cheese on Cheese on pizza.', 160),
(5, 'Grilled Mushroom Burger.jpg', 'Grilled Mushroom Burger', 'veg', 'burger', 'With grilled mushrooms, mushroom pate, pickled mushroom, tomato compote, grilled onions and home-made potato pepper bun.', 220),
(6, 'Margherita.jpg', 'Margherita', 'veg', 'pizza', 'This margherita pizza recipe tastes like a woodfired pie from Italy! It stars a flavor-popping pizza sauce and perfectly chewy pizza crust.', 380),
(7, 'Perfect Lamb Satay Burger.jpg', 'Perfect Lamb Satay Burger', 'veg', 'burger', 'Succulent lamb burgers with the crunchiness of cashew nuts and the creaminess of peanut butter. Smothered with satay sauce containing sweet chilli sauce, penaut butter and coconut cream.', 240),
(8, 'Schezwan Cheese Burger.jpg', 'Schezwan Cheese Burger', 'veg', 'burger', 'They’re mostly combined with spices, corn, and root-based vegetables. These veggie burgers will taste beany, earthy and a little spicy occasionally.', 90),
(9, 'Tandoori Paneer.jpg', 'Tandoori Paneer', 'veg', 'pizza', 'Spiced paneer, Onion, Green Capsicum & Red Paprika in Tandoori Sauce.', 200),
(10, 'Veggie Supreme Pizza.jpg', 'Veggie Supreme Pizza', 'veg', 'pizza', 'Black Olives, Green Capsicum, Mushroom, Onion, Red Paprika, Sweet Corn.', 260),
(11, 'Blackberry Ice Cream.jpg', 'Blackberry Ice Cream', 'veg', 'icecream', 'This eggless ice cream puts summer blackberries center stage, without any hint of custard to distract from their tart, jammy flavor. A tiny pinch of ground cinnamon highlights their natural aroma without any overt spiciness, while a squeeze of fresh lemon juice helps cut through the richness of cream.', 30),
(12, 'Lavender Ice Cream.jpg', 'Lavender Ice Cream', 'veg', 'icecream', 'Cream and honey make any recipe richer and more luscious, and when lavender is added, it becomes an elegant dish. This lavender honey ice cream recipe takes the winning flavor combination and makes it even more luxurious with the addition of infused lavender buds. Simply put, this lavender ice cream is dreamy.', 40),
(13, 'Cotton Candy Ice Cream.jpg', 'Cotton Candy Ice Cream', 'veg', 'icecream', 'Your favorite fluffy carnival treat is now your new favorite ice cream! Colorfully creamy and dreamy, our Cotton Candy flavored ice cream has all of the festive flavor we know you’ll love.', 50),
(14, 'Iced White Chocolate Mocha.jpg', 'Iced White Chocolate Mocha', 'veg', 'colddrink', 'Espresso, white chocolate sauce, and milk are shaken with ice to make this delicious Iced White Chocolate Mocha drink, just like the one at Starbucks. See how quick and easy this drink is to make, including the fluffy homemade whipped cream.', 380),
(16, 'Nimbu Soda.jpg', 'Nimbu Soda', 'veg', 'colddrink', 'A perfect summer drink, Nimbu Soda is a popular Indian drink flavoured with lemon along with some, sugar and soda. Popularly known as Banta in the northern region of India, many people also add a pinch of spice to the drink for a tasty sweet and spicy flavour.', 40),
(17, 'Pepsi Cold Drink.jpg', 'Pepsi Cold Drink', 'veg', 'colddrink', 'Pepsi is the pop that shakes things up! Pepsi is ubiquitous on just about every social occasion.', 30),
(18, 'Gulab Jamun.jpg', 'Gulab Jamun', 'veg', 'sweets', 'Gulab Jamun is a very popular Indian sweet. There are some versions of making it with khoya, milk powder, bread or sweet potatoes. Indeed it is a favorite Indian sweet for many of us.', 40),
(19, 'Boston Cream Doughnut.jpg', 'Boston Cream Doughnut', 'non-veg', 'sweets', 'Say no to waxy brown, chocolate-esque frosting and cloying, gloppy, fake-y vanilla flavored goo. Making everything from scratch is time commitment and a labor of love, but if you count yourself as a doughnut enthusiast, this is well worth trying.', 80),
(20, 'Jalebi.jpg', 'Jalebi', 'veg', 'sweets', 'Of all the many delectable Indian sweets, Jalebi are considered superlative the world over. Crisp, crunchy funnel-cake style fried spirals are doused in a syrupy sweet sauce for a delightful treat that everyone in your family will love.', 50),
(21, 'Cinnamon Pancakes.jpeg', 'Cinnamon Pancakes', 'veg', 'sweets', 'Soft and fluffy eggless pancakes with the mild aroma of cinnamon.', 120),
(22, 'Red Velvet Pastry.jpg', 'Red Velvet Pastry', 'non-veg', 'sweets', 'Our Red Velvet Pastry is made by layering a cocoa and buttermilk sponge with our signature cream cheese & lime juice frosting. It is intentionally slightly sour in order to balance the sweetness of the sponge. The hint of tartness cuts through the creaminess and sweetness, leading to the perfectly balanced red velvet pastry.', 130),
(23, 'Masala Dosa.jpg', 'Masala Dosa', 'veg', 'breakfast', 'Masala Dosa is one of the most popular South Indian Breakfast Dishes. Masala is one of the crisp, aromatic, flavoured and a potato masala spiced  stuffed inside it. This crispy are quite addictive and delicious.', 60),
(24, 'Aloo Paratha.jpg', 'Aloo Paratha', 'veg', 'breakfast', 'Aloo paratha are popular Indian flatbreads stuffed with a delicious spiced potato mixture. Aloo means potatoes and paratha are flatbreads. Firstly a dough is made with whole wheat flour.', 100),
(25, 'Veg Grilled Sandwich.jfif', 'Veg Grilled Sandwich', 'veg', 'breakfast', 'These veg grilled sandwich can be made for breakfast, brunch or a snack and are quite filling. These can also be carried to work as they keep good for few hours. Green chutney and sandwich masala are the key ingredients to make these grilled sandwiches taste great.', 40),
(26, 'Chicken Biryani With Coconut Milk.jpg', 'Chicken Biryani With Coconut Milk', 'non-veg', 'biryani', 'This one is a heartwarming combination of spices and condiments simmering with chicken pieces and rice. An added dose of coconut milk makes this one a creamy, aromatic treat.', 120),
(27, 'Makhni Paneer Biryani.jpg', 'Makhni Paneer Biryani', 'veg', 'biryani', 'Fried paneer cubes doused in a luscious creamy gravy, layered with rice and cooked dum style. A perfect biryani recipe for vegetarians and a paneer lover delight.', 120);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_id`, `cust_id`, `food_id`, `quantity`, `total_price`, `date_time`) VALUES
(4, 2, 2, 1, 1, 350, '2022-01-07 08:07:52'),
(5, 2, 2, 17, 1, 30, '2022-01-07 08:07:53'),
(6, 3, 3, 1, 4, 1400, '2022-01-07 08:24:58'),
(7, 3, 3, 16, 4, 160, '2022-01-07 08:24:58'),
(8, 1, 1, 1, 4, 1400, '2022-01-07 08:33:22'),
(9, 1, 1, 16, 4, 160, '2022-01-07 08:33:22'),
(10, 2, 2, 2, 1, 120, '2022-01-07 08:36:04'),
(11, 2, 2, 2, 1, 120, '2022-01-07 08:41:16'),
(12, 2, 2, 23, 2, 120, '2022-01-07 08:52:54'),
(13, 2, 2, 2, 3, 360, '2022-01-07 09:35:21'),
(14, 2, 2, 1, 3, 1050, '2022-01-07 09:35:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id_fk` (`cust_id`),
  ADD KEY `food_id_fk` (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `cust_id_fk` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `food_id_fk` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

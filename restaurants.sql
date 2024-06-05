-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 07:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'soup'),
(2, 'starter'),
(3, 'punjabi'),
(4, 'gujarati'),
(5, 'bread'),
(6, 'rice'),
(7, 'chiness'),
(8, 'south'),
(9, 'sweet'),
(10, 'drink');

-- --------------------------------------------------------

--
-- Table structure for table `dinetable`
--

CREATE TABLE `dinetable` (
  `id` int(11) NOT NULL,
  `table_size` int(11) DEFAULT NULL,
  `table_status` varchar(255) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinetable`
--

INSERT INTO `dinetable` (`id`, `table_size`, `table_status`, `image_id`) VALUES
(1, 2, 'active', 1),
(2, 2, 'active', 1),
(3, 2, 'deactive', 1),
(4, 2, 'deactive', 1),
(5, 2, 'active', 1),
(6, 2, 'active', 1),
(7, 4, 'active', 2),
(8, 4, 'active', 2),
(9, 4, 'active', 2),
(10, 4, 'active', 2),
(11, 4, 'active', 2),
(12, 4, 'active', 2),
(13, 4, 'active', 2),
(14, 4, 'active', 2),
(15, 4, 'active', 2),
(16, 6, 'active', 3),
(17, 6, 'active', 3),
(18, 6, 'active', 3),
(19, 6, 'active', 3),
(20, 6, 'active', 3),
(21, 6, 'active', 3),
(22, 6, 'active', 3),
(23, 6, 'active', 3),
(24, 6, 'active', 3),
(25, 8, 'active', 4),
(26, 8, 'active', 4),
(27, 8, 'active', 4),
(28, 8, 'active', 4),
(29, 8, 'active', 4),
(30, 8, 'active', 4),
(31, 8, 'active', 4),
(32, 10, 'active', 5),
(33, 10, 'active', 5),
(34, 10, 'active', 5),
(35, 10, 'active', 5),
(36, 10, 'active', 5),
(37, 10, 'active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `images` varchar(400) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`id`, `food_name`, `description`, `price`, `time`, `images`, `category`) VALUES
(5, 'Spicy Sweet Potato ', 'An exotic blend of sweet potatoes, carrots, and spices, this soup brings together a perfect balance of sweetness and heat. Topped with a dollop of Greek yogurt and cilantro for a cooling contrast.', 175, 1, 'creamy.jpeg', 'soup'),
(6, 'Quinoa Harvest Delight', 'Packed with nutrient-rich vegetables, protein-packed quinoa, and a savory vegetable broth, this soup is a wholesome celebration of autumn flavors. A hint of thyme adds a touch of sophistication.', 170, 1, 'harvest.jpeg', 'soup'),
(7, 'Tomato Basil Elegance', 'A classic yet refined tomato soup with a twist of fresh basil. Smooth and rich, this timeless combination is elevated with a drizzle of olive oil and a sprinkle of croutons for added texture.', 180, 1, 'tomato bails.jpeg', 'soup'),
(8, 'Manchow', 'Manchow Soup is a popular Indo-Chinese dish, a flavorful blend of finely chopped vegetables, tofu, and sometimes chicken, in a spicy and tangy broth. Infused with garlic, ginger, and soy sauce, this soup is often garnished with crispy noodles, providing a delightful crunch in every spoonful.', 100, 1, 'manchaou.jpeg', 'soup'),
(9, 'Sweet Corn Sunshine', 'Indulge in the comforting warmth of Sweet Corn Sunshine. This velvety soup combines plump corn kernels, a touch of cream, and a medley of aromatic spices. The result is a rich and satisfying bowl, balancing sweetness with a hint of savory goodness. A cozy hug for your taste buds.', 120, 1, 'swwet corn.jpeg', 'soup'),
(11, 'Mushroom Medley Marvel', 'Earthy and robust, this soup features a diverse array of mushrooms, sautéed onions, and garlic in a flavorful broth. A splash of white wine and a touch of thyme add complexity to this umami-packed creation.', 175, 1, 'maussroom.jpeg', 'soup'),
(12, 'Panner Tikka', 'Grilled Indian cottage cheese cubes, marinated in a spiced yogurt mix for a smoky flavor explosion.', 200, 5, 'panner.jpeg', 'starter'),
(13, 'Samosa', 'Triangular pastries stuffed with a zesty mix of spiced potatoes and peas, deep-fried to golden perfection.', 150, 2, 'samosa.jpeg', 'starter'),
(14, 'Vegetable Pakora', 'Crispy fritters featuring an assortment of vegetables, dipped in a chickpea flour batter and fried until crunchy.', 130, 5, 'pakoda.jpeg', 'starter'),
(15, 'Aloo Tikki', 'Mashed potato patties, seasoned with aromatic spices, pan-fried to a crispy outer layer.', 120, 5, 'allu tikki.jpeg', 'starter'),
(16, 'Dhokla', 'Soft and spongy steamed cakes made from fermented gram flour, offering a light and tangy sensation', 130, 10, 'dhokala.jpeg', 'starter'),
(17, 'Hara Bhara Kebab', 'Vibrant green kebabs made from spinach, green peas, and other herbs, providing a fresh and earthy taste.', 150, 8, 'harbhar.jpeg', 'starter'),
(18, 'Vegetable Spring Rolls', 'Delicate, crispy rolls filled with a medley of sautéed vegetables, presenting a delightful mix of textures.', 130, 10, 'spring rool.jpeg', 'starter'),
(19, 'Papri Chaat', ' A tantalizing street food delicacy featuring crispy dough wafers, chickpeas, and a melange of chutneys, creating a burst of sweet, tangy, and spicy flavors.', 100, 5, 'papari chat.jpeg', 'starter'),
(20, 'Masala Papad', 'Thin, crispy papad topped with a savory mixture of chopped vegetables and spices, adding a crunchy and flavorful touch.', 100, 5, 'ppapa.jpeg', 'starter'),
(21, 'Minestrone Madness', '515151', 120, 2, 'harbhar.jpeg', 'starter'),
(23, 'Paneer Tikka', 'Cubes of paneer marinated in yogurt and spices, grilled to perfection.', 210, 15, '1) paneer tikka.jpeg', 'punjabi'),
(24, 'Paneer Butter Masala', 'Soft paneer cubes cooked in a creamy and rich tomato-based gravy with butter and aromatic spices.', 300, 15, '2) paneer butter masala.jpeg', 'punjabi'),
(25, 'Palak Paneer', 'Paneer cubes cooked in a flavorful spinach (palak) gravy, seasoned with spices like cumin, garam masala, and fenugreek.', 320, 15, '3) palak paneer.jpeg', 'punjabi'),
(26, 'Shahi Paneer', 'Paneer cooked in a luxurious creamy gravy made from cashews, tomatoes, cream, and aromatic spices', 330, 15, '4) sahi paneer.jpeg', 'punjabi'),
(27, 'Kadai Paneer', 'Paneer and bell peppers cooked in a spicy and tangy tomato-based gravy, flavored with freshly ground spices and cooked in a traditional Indian kadai (wok).', 360, 15, '5) kadai paneer.jpeg', 'punjabi'),
(28, 'Paneer Bhurji', 'Crumbled paneer cooked with onions, tomatoes, and spices, often served as a side dish or filling for wraps and sandwiches.', 300, 15, '6) paneer bhurji.jpeg', 'punjabi'),
(29, 'Matar Paneer', 'A classic dish where paneer and peas are cooked in a spiced tomato-based gravy, often enjoyed with rice or roti.', 310, 15, '7) Matar paneer.jpeg', 'punjabi'),
(30, 'Paneer Kofta', 'Soft paneer and potato dumplings seasoned with spices, fried until golden, and served in a rich and creamy gravy', 350, 15, '8) paneer kofta.jpeg', 'punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `tableiamges`
--

CREATE TABLE `tableiamges` (
  `Id` int(11) NOT NULL,
  `images` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tableiamges`
--

INSERT INTO `tableiamges` (`Id`, `images`) VALUES
(1, '2person2.jpg'),
(2, '4person.jpeg'),
(3, '6person.jpeg'),
(4, '8person.jpeg'),
(5, '10peson.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinetable`
--
ALTER TABLE `dinetable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableiamges`
--
ALTER TABLE `tableiamges`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dinetable`
--
ALTER TABLE `dinetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tableiamges`
--
ALTER TABLE `tableiamges`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dinetable`
--
ALTER TABLE `dinetable`
  ADD CONSTRAINT `dinetable_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `tableiamges` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 11:20 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.3.1-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--
CREATE DATABASE IF NOT EXISTS `homestead` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `homestead`;
--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Beer', 'beer', '2019-05-06 01:18:50', '2019-05-06 01:18:50'),
(2, 'Wine', 'wine', '2019-05-06 01:18:50', '2019-05-06 01:18:50'),
(3, 'Liquor', 'liquor', '2019-05-06 01:18:50', '2019-05-06 01:18:50'),
(4, 'Extras', 'extras', '2019-05-06 01:18:50', '2019-05-06 01:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 5, 2, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 3, NULL, NULL),
(8, 8, 3, NULL, NULL),
(9, 9, 3, NULL, NULL),
(10, 10, 4, NULL, NULL),
(11, 11, 4, NULL, NULL),
(12, 12, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_04_23_173445_create_products_table', 1),
(14, '2019_05_05_231852_create_categories_table', 1),
(15, '2019_05_05_243351_create_category_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `details`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bud Light', 'bud-light', 'https://i.ibb.co/WHfnr8C/bud-light.jpg', 'Region: Missouri - United States, ABV(alcoholByVolumne): 4.2% ', 509, 'Introduced in 1982, Bud Light is a premium light lager\n                                with a superior drinkability that has made it the best-selling\n                                and most popular beer in the United States. Bud Light is brewed\n                                using a blend of premium aroma hop varieties, both American-grown\n                                and imported, and a combination of barley malts and rice.\n                                The light-bodied beer features a fresh, clean and subtle hop aroma,\n                                delicate malt sweetness and a crisp finish that delivers the ultimate\n                                refreshment. Brewed in the U.S.A. 4.2% alcohol by volume.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(2, 'Corona Extra', 'corona-extra', 'https://i.ibb.co/k35s5H8/coronaextra.jpg', 'Region: Mexico, ABV(alcoholByVolumne): 4.6%', 509, 'A staple at everything from summer beach parties to\n                                everyday occasions, Corona Extra is a pilsner-type Mexican\n                                beer with a slightly sweet taste and a dash of citrus. Hints\n                                of lemon and ginger round out the flavor for a crisp and firm\n                                taste. Corona Extra was first introduced in the U.S. in 1981,\n                                and became the fastest growing imported beer in U.S. history.\n                                Corona Extra has been brewed and bottled in Mexico since 1925,\n                                and is the #1 selling imported beer in the U.S. For serving,\n                                try adding a fresh wedge of lime to bring out the citrus flavors.\n                                We recommend enjoying this simple brew from the bottle (or can),\n                                and if possible on a beach somewhere.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(3, 'Stella Artois', 'stella-artois', 'https://i.ibb.co/Hhdn6F1/stellabeer.jpg', 'Region: Belgium, ABV(alcoholByVolumne): 5%', 504, 'Enjoy the European way with the #1 best-selling Belgian beer\n                                in the world. With its wonderful floral aroma, well-balanced malt sweetness,\n                                crisp hop bitterness and soft dry finish, Stella Artois is the perfect beer to\n                                pair with food and friends. Serve in its signature glass chalice to enhance flavor\n                                and aroma. Brewed in Belgium. Pairs well with steak, mussels, and chocolate desserts.\n                                5% alcohol by volume.\n', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(4, 'Apothic Red', 'apothic-red', 'https://i.ibb.co/6tb73rB/redwine.jpg', 'Region: California - United States, ABV(alcoholByVolumne): 13.5%', 1894, 'Defy convention. Apothic Red is a masterful blend of intense flavors\n                                and luscious texture creates a truly unique experience. Zinfandel lends notes of dark\n                                fruit and subtle spice while Merlot and Syrah bring hints of black fruit and a smooth\n                                mouthfeel. They are complemented by Cabernet Sauvignon that contributes a firm structure\n                                and bold flavors. All of the varietals combine to offer layers of dark fruit that are enhanced\n                                by soft vanilla and mocha tones leading to a soft, lasting finish.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(5, 'Barefoot Pinot Grigio', 'barefoot-pinot', 'https://i.ibb.co/7VMzFLR/whitewine.jpg', 'Region: California - United States, ABV(alcoholByVolumne): 12.4%', 1300, 'Tart green apple flavors get down with a white peach undertone.\n                                Floral blossoms and citrus aromas do the tango. Barefoot’s Pinot\n                                Grigio is light-bodied with a bright finish.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(6, 'Veuve Clicquot Brut Yellow Label', 'veuve-clicquot', 'https://i.ibb.co/St63TGS/champagne.jpg', 'Region: Champagne - France, ABV(alcoholByVolumne): 12%', 999, 'Veuve Clicquot Yellow Label Champagne is the signature champagne of the House.\n                                Dominated by Pinot Noir, it offers a perfect balance of structure and finesse.\n                                Grapes from as many as 50 to 60 different Crus go to the blending of Yellow Label.\n\n                                Traditionally, the proportion of each grape variety used is 50 to 55% Pinot Noir,\n                                15 to 20% Meunier and 28 to 33% Chardonnay. These figures vary slightly from year to\n                                year according to conditions.\n\n                                Cellar Master Dominique Demarville has to achieve the consistency that makes Yellow\n                                Label so immediately recognizable, so utterly reliable both in terms of quality, color\n                                and bouquet.\n\n                                He will draw on priceless reserve wines for the blend: from 30 to 45% to ensure the continuity\n                                of the House’s style. All wines are kept separately to preserve the unique qualities of their\n                                vineyard and / or vintage.\n\n                                This product may be available in a gift box depending upon retailer availability. Please contact\n                                customer support with any questions. ', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(7, 'Bulleit Bourbon', 'bulleit-bourbon', 'https://i.ibb.co/y6bBLqd/bourbon.jpg', 'Region: Kentucky - United States, ABV(alcoholByVolumne): 45.6%', 1699, 'Bulleit Bourbon Whiskey allows you to savor the complex flavor and warm finish\n                                inspired by the whiskey pioneered by Augustus Bulleit 150 years ago. With its\n                                amber color and oaky aroma, our aged whiskey makes a good first impression before\n                                its even opened. The flavor profile of our bourbon whiskey combines hints of maple,\n                                oak and nutmeg for a dry, well-balanced finish that lingers long after the final sip.\n                                Simply combine our bourbon whiskey with cloves, lemon juice, brown sugar and hot water\n                                for a comforting Hot Toddy.\n\n                                Bulleit Bourbon is still distilled and aged in the Bulleit family tradition. High rye\n                                content gives it a bold, spicy character with a distinctively smooth, clean finish.\n                                Kentucky limestone-filtered water provides a foundation for the bourbons character,\n                                while charred American oak barrels lend a smoky backbone. Please drink responsibly.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(8, 'Smirnoff No. 21 Vodka', 'smirnoff-vodka', 'https://i.ibb.co/jg6GzKJ/smirnoff.jpg', 'Region: United States, ABV(alcoholByVolumne): 40%', 1499, 'Whether you sip it on the rocks or with soda and a twist, Smirnoff No. 21 is the\n                                perfect addition to a cocktail party. Our award-winning, 80 proof vodka has robust\n                                flavor with a dry finish for ultimate smoothness and clarity.\n\n                                Triple distilled and 10 times filtered, our vodka traditionally can be taken alone or\n                                added to your favorite mixed drink. Simply mix with ginger beer and lime juice for a\n                                classic Moscow Mule.\n\n                                Founded in 1864, the Smirnoff brand traveled from Russia to the rest of the world due\n                                to our award-winning quality and smooth liquid. We pride ourselves on bringing our famous\n                                beverage to connoisseurs and newcomers alike, assuring the consistently great taste and\n                                quality expected from our traditionally distilled vodka. Please drink responsibly.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(9, 'Don Julio Blanco', 'julio-blanco', 'https://i.ibb.co/cD4X524/tequila.jpg', 'Region: Mexico, ABV(alcoholByVolumne): 40%', 3299, 'Using the finest blue agave plant and a time honored distillation process,\n                                Don Julio Blanco is tequila in its truest form. Double-distilled agave to achieve a clean and\n                                dry finish. Blanco is the base of all Don Julio aged tequilas. Gluten-free & Kosher.\n                                Sip it neat or in a Don Julio Luxury margarita.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(10, 'Diet Coke', 'diet-coke', 'https://i.ibb.co/52p5vNd/diet-coke.jpg', 'Region: United States', 229, 'Diet Coke® is a delicious, crisp tasting, no calorie sparkling cola\n                                that gives you the refreshment you want throughout the day. It’s the\n                                original sparkling beverage for those who want great flavor without\n                                the calories - a drink for those with great taste.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(11, 'Coca Cola', 'coca-cola', 'https://i.ibb.co/c3vJnt9/cola.jpg', 'Region: United States', 229, 'Bring home the refreshing taste of Coca-Cola. Serve ice cold for maximum refreshment.', '2019-05-06 01:18:51', '2019-05-06 01:18:51'),
(12, 'Canada Dry Ginger Ale', 'canada-dry', 'https://i.ibb.co/R24K3ZS/ginger-ale.jpg', 'Region: Canada', 229, 'Any time is a great time for the crisp goodness of Canada Dry Ginger Ale. Never skimping\n                                on quality, Canada Dry Ginger Ale offers refreshingly real ginger taste thats made from\n                                real ginger and is caffeine free. Enhance your favorite cocktails with a sparkling splash\n                                of Canada Dry or enjoy by itself for crisp, clean refreshment. Creating quality beverages\n                                and mixers since 1904, enjoy the best in refreshment with Canada Dry.', '2019-05-06 01:18:51', '2019-05-06 01:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_image_unique` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 07:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc-cameras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_details`
--

CREATE TABLE `contact_form_details` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(10) NOT NULL,
  `created_date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form_details`
--

INSERT INTO `contact_form_details` (`contact_us_id`, `name`, `email`, `phone_number`, `subject`, `message`, `status`, `created_date`) VALUES
(1, 'Lesley Slater', 'hudukiju@mailinator.com', '739739739739', 'Ex necessitatibus en', 'Et deleniti ipsum e', 0, '13/05/2021');

-- --------------------------------------------------------

--
-- Table structure for table `products_types`
--

CREATE TABLE `products_types` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_types`
--

INSERT INTO `products_types` (`product_type_id`, `product_type_name`, `product_image`, `product_description`, `created_date`, `modified_date`) VALUES
(1, 'Dome CCTV Cameras', 'dome.jpg', 'A dome CCTV camera gets its name from the dome-shaped casing that the camera sits in. Whilst these are relatively discreet CCTV cameras in appearance, this doesn’t stop them from deterring criminals. This is because the dome casing makes it really difficult for people to see which direction the camera is pointing. This creates an air of uncertainty for potential thieves or vandals approaching from all directions.', '2021-03-29 18:53:01', '2021-03-29 18:53:01'),
(2, 'Bullet CCTV Cameras', 'Bullet-CCTV.jpg', 'Bullet CCTV cameras have an iconic design that is highly visible. They are cylindrical in shape and are capable of observing long distances. Bullet cameras are most commonly placed outdoors so their casings are made resistant to water, dust and dirt.', '2021-03-29 18:53:01', '2021-03-29 18:53:01'),
(3, 'C-Mount CCTV Cameras', 'C-Mount-CCTV.jpg', 'C-Mount CCTV cameras are the ideal option for those who may wish to adapt the field of vision. They are equipped with detachable lenses that can be switched around to monitor varying distances. C-Mount cameras are typically bulky so, like bullet cameras, act as a visible deterrent to criminal activity.', '2021-03-29 18:55:16', '2021-03-29 18:55:16'),
(4, 'PTZ Pan Tilt & Zoom Cameras', 'PTZ-Pan-Tilt-&-Zoom-Cameras.jpg', 'With a PTZ (Pan Tilt & Zoom) camera, your security team can have complete control on what is recorded. At the touch of a button, the camera lens can pan left and right, tilt up and down or zoom in and out. It’s the ideal choice if you have a security guard who is monitoring a live video feed on site.', '2021-03-29 18:55:16', '2021-03-29 18:55:16'),
(5, 'Day/Night CCTV Cameras', 'Day-Night-CCTV-Cameras.jpg', 'These cameras have been built specifically to operate effectively, regardless of how well lit their environment is. During both daytime and night-time, they will record clear video images that will not be obscured by differing light conditions. This is achieved through their extra sensitive imaging chips.', '2021-03-29 18:56:45', '2021-03-29 18:56:45'),
(6, 'Infrared/night vision CCTV Cameras', 'Infrared-Night-Vision-CCTV-Cameras.jpg', 'As the name suggests, these cameras are designed to operate optimally in pitch black conditions. They achieve this by using infrared technology. Infrared models are more expensive than day/night cameras and those opting for this option usually do so because night recording is vital to the security of their business.', '2021-03-29 18:56:45', '2021-03-29 18:56:45'),
(7, 'Network/IP CCTV Cameras', 'Network-IP-CCTV-Cameras.jpg', 'These cameras share live footage across the internet so images can be easily accessed from anywhere on the globe. The bandwidth of the video is compressed, in order to make the  online feed reliable. Archive footage is stored on network video recorders (NVRs) or on secure software for later access', '2021-03-29 18:58:13', '2021-03-29 18:58:13'),
(8, 'Wireless CCTV Cameras', 'Wireless-CCTV-Cameras.jpg', 'Wireless CCTV cameras were created to minimise installation time. They also make the appearance of the camera much tidier, which may be an important factor for locations such as churches, museums or stately homes.', '2021-03-29 18:58:13', '2021-03-29 18:58:13'),
(9, 'High Definition (HD) CCTV Cameras', 'High-Definition-HD-CCTV-Cameras.jpg', 'HD CCTV cameras offer an unrivalled picture quality that delivers high clarity images. Depending on your budget, they can deliver resolutions of 720p, all the way up to 4K. Therefore, there’s no danger that the subject of recordings will ever appear grainy or distorted.', '2021-03-29 18:59:39', '2021-03-29 18:59:39'),
(22, 'guduri', '1624285753.jpg', 'hai', '2021-06-21 19:59:13', '2021-06-21 19:59:13'),
(23, '', '1624288402673588021.jpg', 'bokka le', '2021-06-21 20:43:22', '2021-06-21 20:43:22'),
(24, 'hmm', '1624288444558920268.jpg', 'bokkale', '2021-06-21 20:44:04', '2021-06-21 20:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_details`
--
ALTER TABLE `contact_form_details`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `products_types`
--
ALTER TABLE `products_types`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form_details`
--
ALTER TABLE `contact_form_details`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_types`
--
ALTER TABLE `products_types`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

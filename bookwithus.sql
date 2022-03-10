-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 07:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookwithus`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `AboutUs_ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`AboutUs_ID`, `Image`, `Title`, `Description`) VALUES
(1, 'http://localhost/Book With Us/book-with-us/admin/images/uploads/ourStart.jpg', 'Our Start', ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit Rielmodi, eius vero qui quisquam doloremque molestiae maxime est veniam ut fugit eveniet similique omnis quos assumenda vitae voluptates, odio magni?	'),
(2, 'http://localhost/Book With Us/book-with-us/admin/images/uploads/ourVission.jpg', 'Our Vission', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit Rielmodi, eius vero qui quisquam doloremque molestiae maxime est veniam ut fugit eveniet similique omnis quos assumenda vitae voluptates, odio magni? '),
(6, 'http://localhost/Book With Us/book-with-us/admin/images/uploads/ourProcess.png', 'Our Process', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor labore quo odit qui laboriosam eligendi in earum accusamus veniam beatae velit nobis, explicabo adipisci suscipit debitis fugiat dolore doloremque soluta? ipsum dolor sit amet consectetur adipisicing elit. Magni ea doloremque aspernatur consequuntur suscipit rerum quod dicta, aliquid in fuga quo sint excepturi obcaecati assumenda quia, repellendus, laborum totam odio? Lorem ipsum dolor sit amet consectetur, adipisicing elit Rielmodi, eius vero qui quisquam doloremque molestiae maxime est veniam ut fugit eveniet similique omnis quos assumenda vitae voluptates, odio magni?');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Libri_ID` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Libri_ID`, `ISBN`, `Title`, `Author`, `Genre`, `Description`, `Image`, `Likes`) VALUES
(1, '9780316557955', 'Life and Death', 'Stephenie Meyer', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/life-and-death.jpg', 2),
(2, '9780375842207', 'The Book Thief', 'Markus Zusak', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-book-thief.png', 12),
(3, '9781416955078', 'City of Bones', 'Cassandra Clare', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/city-of-bones.jpg', 13),
(4, '9781585740604', 'The SAS Self-Defense Handbook', 'John ', 'Self-Defence', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-sas.jpg', 3),
(5, '9781423155157', 'The House Of Hades', 'Rick Riordan', 'Mythology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-house-of-hades.jpg', 0),
(6, '9781484732748', 'The Trials of Apollo: The Hidden Oracle', 'Rick Riordan', 'Mythology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-trials-of-apollo.jpg', 0),
(7, '9781619630635', 'Crown Of Midnight', 'Sarah J. Maas', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/crown-of-midnight.jpg', 0),
(8, '9780237525804', 'Pride And Prejudice', 'Jane Austen', 'Romance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/pride-and-prejudice.jpg', 2),
(9, '9781411431973', 'Sherlock Holmes', 'Sir Arthur Conan Doyle', 'Crime/Detective', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/sherlock-holmes.jpg', 0),
(10, '9781408857885', 'A Court of Mist and Fury', 'Sarah J. Maas', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/a-court-of-mist-and-fury.png', 0),
(11, '9780062878021', 'Serpent and Dove', 'Shelby Mahurin', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/serpent-dove.jpg', 0),
(12, '9781681196312', 'A Court of Frost and Starlight', 'Sarah J. Maas', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/a-court-of-frost-and-starlight.png', 0),
(13, '9780141375632', 'One of Us is Lying', 'Karen M. McManus', 'Crime/Detective', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/one-of-us-is-lying.jpg', 0),
(14, '9780375836671', 'I Am The Messenger', 'Markus Zusak', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/i-am-the-messenger.jpg', 0),
(15, '9780670894789', 'Anna Karenina', 'Leo Tolstoy', 'Literary realism', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/anna-karenina.jpg', 0),
(16, '9781411432109', 'Emma', 'Jane Austen', 'Romance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/emma.jpg', 0),
(17, '9781920135128', 'Chronicle in Stone', 'Ismail Kadare', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/chronicle-in-stone.jpg', 0),
(18, '9780099529965', 'Les Miserables', 'Victor Hugo', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/les-miserables.jpg', 0),
(19, '9781561310654', 'Broken April', 'Ismail Kadare', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/broken-april.jpg', 0),
(20, '9781400079988', 'War and Peace', 'Leo Tolstoy', 'War story', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/war-and-peace.jpg', 0),
(21, '9780316556330', 'Circe', 'Madeline Miller', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/circe.jpg', 0),
(22, '9780141335766', 'The Mark Of Athena', 'Rick Riordan', 'Mythology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-mark-of-athena.jpg', 1),
(23, '9780007183302', 'SAS Survival Guide', 'John \"Lofty\" Wiseman', 'Self-Defense', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/sas-survival-guide.jpg', 0),
(24, '9780063041172', 'Blood and Honey', 'Shelby Mahurin', 'Fantasy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/blood-honey.jpg', 0),
(25, '9781593081409', 'The Hunchback of Notre Dame', 'Victor Hugo', 'Gothic fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.', 'http://localhost/BookWithUs/book-with-us/dist/Images/books/the-hunchback-of-notre-dame.jpg', 0),
(26, '9780061743528', 'To Kill A Mockingbird', 'Lee Harper', 'Fiction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	   ', 'http://localhost/Book With Us/book-with-us/admin/images/uploads/to-kill-a-mockingbird.jpg', 0),
(27, '978-1-61963-846-4', 'When We Collided', 'Lord Emery', 'Romance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	', 'http://localhost/Book With Us/book-with-us/admin/images/uploads/when-we-collided.jpg', 0),
(28, '9780374707729', 'Call Me by Your Name', 'Aciman André', 'Romance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	  ', 'http://localhost/Book With Us/book-with-us/admin/images/uploads/cmbyn.jpg', 3),
(36, '9781940768946', 'Jack The Reaper', 'Capri Diane', 'Crime', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat.	 ', 'http://localhost/Book With Us/book-with-us/admin/images/uploads/jack-the-reaper.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUs_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUs_ID`, `Username`, `Email`, `Subject`, `Message`) VALUES
(3, 'krenki', 'krenki@mail.com', 'hello', 'hello people, you are dhe best.'),
(4, 'rinesarafu', 'rinesa1@gmail.com', 'hello', 'you people are the best'),
(6, 'eriona', 'eriona@mail.com', 'ksajcasj', 'xksaxaksjckdsajcajc');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_ID` int(11) NOT NULL,
  `Role_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Role_ID`, `Role_Type`) VALUES
(1, 'Simple User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` binary(60) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `Email`, `Password`, `Role`) VALUES
(5, 'rinesarafuna', 'rinesar@mail.com', 0x2432792431302452525949744849536a7a3837424243555979523961655845492e336c4479714b78743341726179343532733245364576625248784f, 1),
(6, 'rinesaavdyli', 'rinesa@gmail.com', 0x2432792431302430576f3962752f704f562e45305439642e62565451754f536a62335230495457723249714a746f6a33324b47776846435561702e2e, 1),
(31, 'rinesss', 'riness@gmail.com', 0x24327924313024566a5a493158646a3534786b652e4844494658656765742f526d3568454579615a37557450435a79517a4f656a76515a677262684b, 1),
(32, 'rina', 'rina@gmail.com', 0x2432792431302438554453766b6b67773336466c764f724c45354d6b7550523164352e58786362584f6d7645637655376b5a2e2f502e4162794d5457, 1),
(33, 'ge54yig', 'nesa-r@live.com', 0x24327924313024354f745876694f7665706c2f504f434f6f496d34524f32323553323835456d53304b63356e585a4771664764652f6e334b4b2f502e, 2),
(34, 'krenki', 'krenki@mail.com', 0x243279243130247943376d51756b464c6e7a717969534358624c30674f4e7453515462424f387141706c576f3367635949444b635a6e596f39686f32, 2),
(35, 'rinesarafu', 'rinesa1@gmail.com', 0x243279243130245a626f416278764e3453623962414b6e53366b365a4f426f4d43577270594e4d6f62792e542e4c2e6b5862324a77526c7234714761, 2),
(36, 'eriona', 'eriona@mail.com', 0x2432792431302462527469555547542e4a3666353876717135725575756c4568574a314170383338355039637454587968473042592e344c7a367471, 1),
(37, 'Sherlock', 'sherlock@gmail.com', 0x243279243130243668694d494359776e755971724b676d7333487251652e42342e684d754a527138414b483367756b51357052744f77735577754b79, 1),
(38, 'rinavdyli', 'rinavdyli@mail.com', 0x243279243130247079455176742f5a506578646f6b6e526d304d355a2e512f3364537577704d794e65724277352e427a785165786650797776487536, 1),
(39, 'rrafuns', 'rr@mail.cc', 0x24327924313024566361714a6159526e4a7830453854667143494e312e2e647373764a484c302f64344153744f514a387077636a676f68754d745371, 1),
(40, 'rinnnn', 'ra@mail.cc', 0x24327924313024626155634d7179757363494473436b566d524a71684f4a68624a58744b702f34744245564770303273686a567638793471616a634f, 1),
(41, 'krenaree', 'krenare@mail.cc', 0x2432792431302456374436717253735938397a5653754d54674364344f4c356d4953334c704b563570735061506636525a6862396e44303375563865, 1),
(42, 'rraf', 'rinn@mail.com', 0x2432792431302459462e446e544a466a56665030714b4d4b6c442e42757442516567387262774663506177473458384a4150754e47326b477a693736, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`AboutUs_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Libri_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUs_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Role` (`Role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `AboutUs_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Libri_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUs_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `role` (`Role_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

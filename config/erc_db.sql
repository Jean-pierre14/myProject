-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 06:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tb`
--

CREATE TABLE `blog_tb` (
  `id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `context` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tb`
--

INSERT INTO `blog_tb` (`id`, `user_Id`, `context`, `create_at`) VALUES
(1, 5, 'test pastor', '2020-10-25 15:16:02'),
(2, 5, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus, deleniti asperiores nostrum odio, deserunt itaque facilis doloremque blanditiis a in repudiandae. Minima molestias accusantium nisi velit asperiores recusandae voluptatem?', '2020-10-25 15:32:00'),
(3, 5, 'test api', '2020-10-25 16:59:01'),
(4, 5, 'erros ot the form rest', '2020-10-25 17:02:16'),
(5, 5, 'erros ot the form rest', '2020-10-25 17:02:17'),
(6, 5, 'erros ot the form rest', '2020-10-25 17:02:19'),
(7, 73, 'Good job dear grace web master', '2020-10-25 17:09:18'),
(8, 5, 'Yes success to the scroll animation ', '2020-10-26 06:42:48'),
(9, 5, 'Yes success to the scroll animation ', '2020-10-26 06:42:55'),
(10, 5, 'Hello today this the project', '2020-10-26 06:57:32'),
(11, 5, 'Hello today this the project', '2020-10-26 06:57:37'),
(12, 5, 'Hey ', '2020-10-26 07:03:13'),
(13, 5, 'Good job', '2020-10-26 07:11:43'),
(14, 5, 'Test 12', '2020-10-26 07:14:18'),
(15, 5, 'Good job again', '2020-10-26 07:14:44'),
(16, 5, 'Chrome refuse', '2020-10-26 07:15:24'),
(17, 5, 'hey', '2020-10-26 15:57:39'),
(18, 5, 'Hello today this scroll makes my bad', '2020-10-26 16:00:25'),
(19, 5, 'Hour format', '2020-10-26 16:08:27'),
(20, 5, 'Good ', '2020-10-26 16:16:03'),
(21, 5, 'this the try of this animation using jquery and javascript, everybody can think it but one can make it better than me', '2020-10-26 16:17:15'),
(22, 5, 'Let us test', '2020-10-26 16:17:53'),
(23, 5, 'And again', '2020-10-26 16:19:21'),
(24, 5, 'cool', '2020-10-26 16:19:34'),
(25, 5, 'cool', '2020-10-26 16:19:39'),
(26, 5, 'Cool again', '2020-10-26 16:24:09'),
(27, 5, 'Cool again this is a mistake', '2020-10-26 16:24:22'),
(28, 5, 'cooooooool cooooool', '2020-10-26 16:25:34'),
(29, 5, 'let us test', '2020-10-26 16:26:18'),
(30, 5, 'Hey', '2020-10-26 16:27:48'),
(31, 5, 'Not matter we are the best', '2020-10-26 16:28:21'),
(32, 5, 'youtube now', '2020-10-26 16:29:06'),
(33, 5, 'today too', '2020-10-27 10:15:02'),
(34, 5, 'this is the javascript', '2020-10-27 16:57:26'),
(35, 5, 'today i am gonna made the request enpoint and API', '2020-10-28 06:28:28'),
(36, 5, 'this the trial', '2020-10-28 06:31:06'),
(37, 5, 'hello', '2020-12-29 09:27:38'),
(38, 5, 'this the blog done send message', '2020-12-29 09:28:54'),
(39, 5, 'End if we are testing it\'s just to sure if really works', '2020-12-29 09:29:51'),
(40, 5, 'usi', '2020-12-29 09:32:32'),
(41, 5, 'Good', '2020-12-29 09:38:04'),
(42, 5, 'Good again', '2020-12-29 09:38:56'),
(43, 5, 'Let us test the setTimeout', '2020-12-29 09:41:10'),
(44, 5, 'It works', '2020-12-29 09:41:24'),
(45, 5, 'this message comes from uc Browser. it the old browser i need to use', '2020-12-29 09:44:46'),
(46, 5, 'test', '2021-01-04 04:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `cultes_tb`
--

CREATE TABLE `cultes_tb` (
  `id` int(11) NOT NULL,
  `culte` varchar(100) NOT NULL,
  `moment` varchar(100) NOT NULL,
  `pastorId` int(64) NOT NULL,
  `pastor_name` varchar(100) NOT NULL,
  `moderator` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_tb`
--

CREATE TABLE `department_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tb`
--

INSERT INTO `department_tb` (`id`, `name`) VALUES
(1, 'intercession'),
(2, 'protocol'),
(3, 'media'),
(4, 'security'),
(5, 'christian'),
(6, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `divorce_tb`
--

CREATE TABLE `divorce_tb` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `w_id` int(11) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_tb`
--

CREATE TABLE `news_tb` (
  `id` int(11) NOT NULL,
  `UserId` int(64) NOT NULL,
  `file` text,
  `context` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tb`
--

INSERT INTO `news_tb` (`id`, `UserId`, `file`, `context`, `title`, `create_at`, `create_date`) VALUES
(1, 4, NULL, 'we are waiting for the request', 'Asking', '2020-12-31 12:22:12', '0000-00-00'),
(3, 5, NULL, 'Goma pour Christ this week. be ready we are preparing to walk for God', 'Goma pour chris', '2020-12-31 12:24:04', '2020-12-09'),
(4, 5, NULL, 'ERC, call all pastors this sunday after the thridth messe', 'Pastors\'s Calling', '2020-12-31 12:33:30', '2020-12-01'),
(5, 5, '/assets/images/use/user/1608072015-IMG-20200922-WA0014.jpg', 'Pastor Grace for Kinshasa is going to preach to us this sunday? in the second mess. make sure you are here on time. places could few, come on time and get in', '', '2020-12-31 12:54:42', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `pastor_tb`
--

CREATE TABLE `pastor_tb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pastor_name` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastor_tb`
--

INSERT INTO `pastor_tb` (`id`, `user_id`, `pastor_name`, `create_at`) VALUES
(1, 21, 'Pastor Hadassa Mbanza', '2020-06-14 16:38:53'),
(2, 2, 'Pastor Chiruza bisimwa', '2020-06-14 16:40:24'),
(3, 17, 'Goly Bonny Pastor', '2020-08-07 10:16:09'),
(4, 8, 'lord lombo', '2020-08-19 04:48:26'),
(5, 9, 'Pastor Bonheur kambale', '2020-08-19 04:48:46'),
(6, 9, 'Pastor Bonheur kambale', '2020-08-19 04:48:49'),
(7, 8, 'lord lombo', '2020-09-19 12:43:50'),
(8, 1, 'lord lombo', '2020-10-15 21:39:20'),
(9, 25, 'test pastor', '2020-10-15 21:42:49'),
(10, 20, 'Pastor NDAYE AMISI', '2020-12-25 09:25:57'),
(11, 19, 'Pastor NDAYE AMISI', '2020-12-25 09:26:19'),
(12, 19, 'Pastor NDAYE AMISI', '2020-12-25 09:26:24'),
(13, 66, 'Pastor mango', '2021-01-04 08:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `programmes_tb`
--

CREATE TABLE `programmes_tb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `context` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmes_tb`
--

INSERT INTO `programmes_tb` (`id`, `title`, `context`, `created_at`, `userId`) VALUES
(2, 'This sunday', 'This sunday we will have visites we will have visites we will have visites', '2020-10-11 18:55:50', 2),
(3, 'This monday', 'Leo kuko ibada na 12heur ka maman hadasa', '2020-10-11 19:06:15', 5),
(4, 'Kesho', 'Leo kuko ibada na 12heur ka maman hadasa', '2020-10-11 19:06:59', 1),
(5, 'Kesho', 'Leo kuko ibada na 12heur ka maman hadasa', '2020-10-11 19:07:08', 2),
(6, 'dimanche ya kesho', 'Leo kuko ibada na 10heur30 kwa maman hadasa', '2020-10-11 19:08:21', 2),
(7, 'Select join using inner lef', 'lorem is prefecte', '2020-10-23 17:57:33', 28),
(8, 'Youtube video', 'normalement nous sommes en pleine confusion', '2020-10-23 17:57:33', 22),
(9, 'this is a trial', 'Grace ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex aut quidem quae et. Assumenda vero, error nostrum maiores, numquam laborum deserunt earum qui soluta explicabo similique architecto at sint\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex aut quidem quae et. Assumenda vero, error nostrum maiores, numquam laborum deserunt earum qui soluta explicabo similique architecto at sint', '2020-10-23 18:07:39', 37),
(10, 'Goma pour christ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex aut quidem quae et. Assumenda vero, error nostrum maiores, numquam laborum deserunt earum qui soluta explicabo similique architecto at sint', '2020-10-23 18:07:39', 49),
(11, 'eunick', 'i love you so much', '2020-12-06 10:32:57', 4),
(12, 'julia wedding', 'this year', '2020-12-06 10:34:18', 5),
(13, 'Grace bisimwa get a job to UN security', 'everybody are called to celebrete with him', '2020-12-06 10:38:16', 5),
(14, 'eunick', 'everybody are called to celebrete with him', '2020-12-06 10:38:43', 5),
(15, 'julia wedding', 'everybody are called to celebrete with him', '2020-12-06 10:39:20', 4),
(16, 'eunick', 'everybody are called to celebrete with him', '2020-12-06 10:46:48', 1),
(17, 'eunick', 'this year', '2020-12-06 10:47:22', 1),
(18, 'eunick', 'i love you so much', '2020-12-06 11:34:19', 12),
(19, 'eunick', 'i love you so much try', '2020-12-06 11:34:45', 12),
(20, 'Goma pour christ', 'Tout le chretien de la ville de goma et ses environ sont appele a faire un marche pour notre Dieu, nous devons manifeste l\'amour pour notre Dieu', '2020-12-08 23:30:23', 23),
(21, 'eunick', 'this test', '2020-12-11 09:13:07', 5),
(22, 'eunick THIS second test', 'Hello members', '2020-12-11 09:14:49', 5),
(23, '12 dec 2020', 'nous somme tous invite a la fete de meres', '2020-12-11 09:16:54', 5),
(24, 'eunick', 'ert', '2020-12-11 09:17:32', 5),
(25, 'eunick', 'hello sons of God', '2020-12-11 09:26:51', 5),
(26, 'Goma pour christ', 'nous somme tous invite a marcher pour christ', '2020-12-17 20:42:48', 5);

-- --------------------------------------------------------

--
-- Table structure for table `status_tb`
--

CREATE TABLE `status_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_tb`
--

INSERT INTO `status_tb` (`id`, `name`) VALUES
(1, 'single'),
(2, 'fiance'),
(3, 'married'),
(4, 'divorce');

-- --------------------------------------------------------

--
-- Table structure for table `suscribe_tb`
--

CREATE TABLE `suscribe_tb` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `context` text NOT NULL,
  `read_unread` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suscribe_tb`
--

INSERT INTO `suscribe_tb` (`id`, `email`, `context`, `read_unread`, `create_at`) VALUES
(1, 'chiruzabisimwa@yahoo.fr', 'oky is oky', 'unread', '2020-06-07 08:58:02'),
(2, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:34:08'),
(3, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:34:41'),
(4, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:34:52'),
(5, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:34:57'),
(6, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:35:07'),
(7, 'blaise@gmail.cd', 'Je.veux savoir.comment on fait pour etre baptise???', 'unread', '2020-08-19 00:35:11'),
(8, 'johnsmith@gmail.com', 'I blesse the lord for the  preacher. He blessed my heart. And thank God that', '', '2020-08-19 00:36:40'),
(9, 'estherchiruza@gmail.com', 'Jesus est notre seigneur pourquoi le chretian on alors beaucoup de problemes???', '', '2020-08-19 01:24:18'),
(10, 'estherchiruza@gmail.com', 'Je vais une reponse a ma question  aujourd\'hui', 'unread', '2020-08-19 01:26:06'),
(11, 'gold@g.com', 'God is able', 'unread', '2020-08-19 01:28:04'),
(12, 'estherchiruza@gmail.com', 'Hey', 'unread', '2020-08-19 01:29:03'),
(13, 'arno.cvpd@gmail.com', 'lets try', 'unread', '2020-08-31 09:25:08'),
(14, 'error@gmail.com', 'this is the trial of today', 'unread', '2020-09-07 09:07:27'),
(16, 'esther@gmail.com', 'this the new test', 'unread', '2020-11-02 07:25:01'),
(17, 'grace@erc.com', 'this the greatest day of progrmming', 'unread', '2020-11-02 07:26:07'),
(18, 'grace@erc.com', 'gooal', 'unread', '2020-11-02 07:27:17'),
(19, 'grace@gmail.com', 'Hello, I need to know about you', 'unread', '2020-12-11 15:58:10'),
(22, 'chiruzabisimwa@gmail.com', 'Good morning ERC. i need to know the programs of this week, about the pastors Gabi', 'unread', '2021-01-04 04:04:23'),
(23, 'chiruzabisimwa@gmail.com', 'And I need to discus with him, Pastor Gabi from Gisenyi or Maman Hadassa', 'unread', '2021-01-04 04:05:15'),
(24, 'evaristeshabani4@gmail.com', 'Hi, how are you doing my church. I am fine and good now I thank God t have this favor to to to you as my chu', 'unread', '2021-01-04 04:07:57'),
(25, 'emile@gmail.com', 'How to create an account to this platform', 'unread', '2021-01-04 05:41:25'),
(26, 'try@gmail.com', 'we need to know who is going to preach us this week', 'unread', '2021-01-07 04:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `locatio` varchar(255) NOT NULL,
  `statu` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_pic` text NOT NULL,
  `user_level` int(10) NOT NULL,
  `about` text NOT NULL,
  `on_off` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `name`, `email`, `username`, `pass`, `locatio`, `statu`, `gender`, `phone`, `department`, `dob`, `create_at`, `profile_pic`, `user_level`, `about`, `on_off`) VALUES
(1, 'chiruza13Update', 'chiruzaupdate@gmail.com', 'Grace', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'fiance', 'Male', '0976353543', 'media', '1997-04-14', '2020-06-07 09:44:55', '/assets/images/use/user/face-1.jpg', 1, 'I am the son of Gog updated', 'online'),
(2, 'Chiruza Bisimwa', 'chiruzabisimwa@gmail.com', 'chiruza', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma DRC himbi2 avenu du lac 131', 'married', 'Male', '0976353543', 'intercession', '1997-04-14', '2020-06-07 09:54:12', '/assets/images/use/user/face-1.jpg', 0, 'My God is able to make all i want', 'offline'),
(3, 'Grace bisimwa', 'grace@g.com', 'grace12', '81dc9bdb52d04dc20036dbd8313ed055', 'Bukavu', 'married', 'Male', '0990969848', 'media', '0000-00-00', '2020-06-08 10:17:20', '/assets/images/use/user/face-1.jpg', 0, 'Our God is able, hold on and worship Jesus Christ', 'offline'),
(4, 'florence kitumaini', 'florence@gmail.com', 'florence', '81dc9bdb52d04dc20036dbd8313ed055', 'Lubumbashi Town', 'married', 'Female', '0999646336', 'intercession', '1998-07-26', '2020-06-12 11:05:54', '/assets/images/use/user/1608006252.png', 0, 'all sons have one father, my is God', ''),
(5, 'eunick bahama', 'eunickbahama@gmail.com', 'eunick', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '099698998', 'protocol', '1996-12-05', '2020-06-12 11:08:47', '/assets/images/use/user/1608072015-IMG-20200922-WA0014.jpg', 1, 'Let god lead me, i don\'t care about this life, this is not my place heaven is waiting for me', 'online'),
(6, 'germain chiruza', 'germainchiruza@gmail.com', 'gemain', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '0996989878', 'security', '1999-03-01', '2020-06-12 11:25:07', '/assets/images/use/user/face-1.jpg', 0, 'Jesus est mon seigneur et mon Dieu', ''),
(7, 'Germain chiruza', 'germain@gmail.com', 'germain', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '09996699974', 'intercession', '1996-12-04', '2020-06-12 11:27:38', '/assets/images/use/user/face-1.jpg', 0, 'Jesus is the lord', ''),
(8, 'lea lombo', 'lealombo@gmail.com', 'lea', '81dc9bdb52d04dc20036dbd8313ed055', 'kinshasa', 'married', 'Female', '0895455663', 'intercession', '1993-12-05', '2020-06-12 11:30:29', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', ''),
(9, 'bonheur kambale', 'bonheurkambale@gmail.com', 'Bob', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '09966632254', 'intercession', '2003-02-06', '2020-06-12 11:32:50', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(10, 'Enzo carlos', 'enzo@gmail.com', 'Enzo', '81dc9bdb52d04dc20036dbd8313ed055', 'Beni', 'married', 'Male', '085447123', 'media', '2020-06-03', '2020-06-12 11:36:30', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(11, 'joel mungo', 'joelmungo@gmail.com', 'joel', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '0996998544477', 'protocol', '1995-06-13', '2020-06-12 13:16:50', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(12, 'adolf chiruza', 'adolf@gmail.com', 'adolf', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '+243990969848', 'media', '2001-05-22', '2020-06-12 13:33:48', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(13, 'alice mungo', 'alice@gmail.com', 'Alice', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '00123456', 'intercession', '2020-06-03', '2020-06-12 14:05:34', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(14, 'aline lembo', 'aline@gmail.com', 'aline', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma ville', 'married', 'Female', '0123456', 'intercession', '2020-06-30', '2020-06-12 14:06:24', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(15, 'chiruza bisimwa jean-louis', 'chiruza@gmail.com', 'chiruza', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'fiance', 'Male', '0991757504', 'intercession', '2020-06-08', '2020-06-12 21:37:16', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(16, 'dada byenge marie', 'dada@gmail.com', 'dada', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Himbi', 'married', 'Female', '0990969848', 'intercession', '2020-06-10', '2020-06-12 21:38:13', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(17, 'Goly Bonny', 'golybonny@gmail.com', 'Goly', '81dc9bdb52d04dc20036dbd8313ed055', 'Kigale', 'married', 'Female', '0781422555', 'intercession', '2020-06-24', '2020-06-13 13:51:22', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(18, 'serge bigola', 'sergebigola@gmail.com', 'serge', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma keshero', 'married', 'Male', '0998785541', 'protocol', '1979-06-13', '2020-06-13 13:53:02', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(19, 'Papa ndaye amisi', 'ndaye@gmail.com', 'ndaye', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi1 avenu du misee', 'married', 'Male', '0998744456', 'intercession', '1978-03-08', '2020-06-13 13:54:58', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(20, 'ntabaza jolie', 'jolie@gmail.com', 'jolie', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi', 'married', 'Female', '07855356595', 'protocol', '1991-08-23', '2020-06-13 13:56:14', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(21, 'hadassa mbanza', 'hadassa@gmail.com', 'hadassa', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Av les volcans', 'married', 'Female', '0999695986, 0990919493', 'intercession', '1970-11-10', '2020-06-13 14:14:08', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(22, 'ziada shinzungu aisha', 'ziada@gmail.com', 'ziada', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Katoyi', 'married', 'Female', '0998455621', 'protocol', '1996-08-02', '2020-06-13 14:15:59', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(23, 'Ghost', 'sniper@gmail.com', 'Sniper', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'single', 'Male', '0976353543', 'intercession', '1997-04-14', '2020-07-11 22:53:40', '/assets/images/use/user/face-1.jpg', 1, 'I am christian', 'online'),
(24, 'grace el bisimwa', 'chiruzabisimwa@gmail.com', 'chiruza', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'single', 'Male', '0976353543', 'intercession', '2020-08-10', '2020-08-02 07:26:22', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(25, 'grace el bisimwa', 'chiruzabisimwa@gmail.com', 'chiruzabisimwa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'single', 'Male', '0991747696', 'intercession', '2020-08-10', '2020-08-02 07:26:50', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(26, 'grace el bisimwa', 'chiruzabisimwa@gmail.com', 'chiruzabisimwa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '09909989876', 'intercession', '2020-08-10', '2020-08-02 07:27:15', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(27, 'Diane Kobolo', 'diane@erc.fr', 'Diane', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Female', '00999887766', 'media', '2020-08-11', '2020-08-09 13:15:39', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(28, 'joelle katala', 'joelle@g.com', 'joelle', '81dc9bdb52d04dc20036dbd8313ed055', 'Rwanda', 'fiance', 'Female', '+250780000', 'protocol', '2020-08-19', '2020-08-09 13:16:47', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(29, 'bolingo', 'belinda@gmail.com', 'belinda', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '09909989876', 'protocol', '2020-08-12', '2020-08-09 20:42:20', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(30, 'Gobe', 'gobe@gmail.com', 'Goge', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '12345567899', 'protocol', '2020-08-25', '2020-08-09 20:42:55', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(31, 'Wande', 'chiruzabisimwa@gmail.com', 'chiruza', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'fiance', 'Female', '0976353543', 'intercession', '2020-08-12', '2020-08-09 20:43:18', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(32, 'Violene carine', 'carine@g.com', 'carine', '81dc9bdb52d04dc20036dbd8313ed055', 'goma', 'single', 'Female', '123654789', 'protocol', '1997-12-04', '2020-08-09 20:44:06', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(33, 'zawadi solange kolongo', 'zawadi@gmail.com', 'Zawadi', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'single', 'Female', '452365874', 'protocol', '2020-08-25', '2020-08-09 20:45:09', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(34, 'elodie badashoderana', 'elodie@gmail.com', 'elodie', '81dc9bdb52d04dc20036dbd8313ed055', 'Uganda', 'fiance', 'Female', '076985421', 'media', '2020-08-28', '2020-08-10 00:14:11', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(35, 'elodie baraka', 'elodieBaraka@gmail.com', 'elodie', '81dc9bdb52d04dc20036dbd8313ed055', 'kinshasa', 'married', 'Female', '0784545120', 'media', '2020-08-24', '2020-08-10 00:15:03', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(36, 'victoria Florence', 'victoria@gmail.com', 'Victoria', '81dc9bdb52d04dc20036dbd8313ed055', 'Kigali', 'married', 'Female', '45210369', 'protocol', '2020-08-19', '2020-08-10 00:17:55', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(37, 'KHMZ', 'peter@madame.com', 'Peter', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '0975848171', 'protocol', '2020-08-11', '2020-08-12 11:10:01', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(38, 'juli B', 'juliabutelezi@gmail.com', 'julia', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Kihisi', 'single', 'Female', '0991163777', 'protocol', '2005-07-23', '2020-08-12 12:02:24', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(39, 'moise katumbi', 'moise@g.com', 'moise', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '1236547890', 'media', '2020-08-03', '2020-08-12 12:04:48', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(40, 'eddy matabishi', 'eddy.matabishi1976@gmail.com', 'eddy1997', '3a2e8986d4c2bc69a82effbe87e86757', 'Goma himbi', 'fiance', 'Male', '+10995793845', 'intercession', '2020-08-13', '2020-08-16 02:20:21', '/assets/images/use/user/face-1.jpg', 0, 'I am th&eacute; child of God', ''),
(41, 'david', 'david@gmail.com', 'Grace', '81dc9bdb52d04dc20036dbd8313ed055', 'goma', 'single', 'Male', '0973967724', 'intercession', '0000-00-00', '2020-08-17 14:30:36', '/assets/images/use/user/face-1.jpg', 0, 'i am the son of God', ''),
(42, 'ziada safari', 'ziadasafari@gmail.com', 'ziada', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma majenge', 'single', 'Female', '097854213', 'intercession', '2020-08-19', '2020-08-19 05:35:26', '/assets/images/use/user/face-1.jpg', 0, 'Allah akbal', ''),
(43, 'amani', 'zintaamani@gmail.com', 'zinta', '81dc9bdb52d04dc20036dbd8313ed055', 'gisenyi goma', 'single', 'Female', '07800012', 'security', '2020-08-10', '2020-08-22 08:11:34', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(44, 'zunguloka kahindo', 'merdy@gmail.cd', 'merdy', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '1203033', 'intercession', '2020-08-12', '2020-08-22 08:12:32', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(45, 'umutoni uwase', 'consoleumutoni@gmail.rw', 'console', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi Rwanda', 'fiance', 'Female', '07896663', 'media', '2020-08-02', '2020-08-23 04:27:13', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(46, 'Ngabo Lecturer', 'ngabo@gmail.com', 'Ngabo', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi Rwanda', 'married', 'Male', '+25078965412', 'media', '2020-08-10', '2020-08-23 04:28:11', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(47, 'katarata', 'juniorkatara@gmail.com', 'junior', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '1425369', 'protocol', '2020-08-10', '2020-08-23 05:36:19', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(48, 'mukongo', 'esthermukongo@gmial.com', 'esther', '81dc9bdb52d04dc20036dbd8313ed055', 'goma Q des volcans', 'fiance', 'Female', '1452365', 'media', '2020-08-17', '2020-08-23 05:37:13', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(49, 'sebihene', 'denisesebihene@gmail.com', 'denise', '81dc9bdb52d04dc20036dbd8313ed055', 'goma keshero', 'divorce', 'Female', '1425879', 'protocol', '2020-08-16', '2020-08-23 05:38:13', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(50, 'bula', 'daniella@gmail.cd', 'daniella', '81dc9bdb52d04dc20036dbd8313ed055', 'goma', 'single', 'Female', '09998554', 'protocol', '1996-12-20', '2020-08-23 05:39:09', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(51, 'saidi', 'aishasaidi@gmail.com', 'aisha', '81dc9bdb52d04dc20036dbd8313ed055', 'Burundi', 'single', 'Female', '+2438977444', 'protocol', '1997-04-14', '2020-08-23 05:40:14', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(52, 'maneno', 'powermaneno@gmail.com', 'power', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'fiance', 'Male', '0123654789', 'intercession', '2020-08-25', '2020-08-23 05:41:02', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(53, 'useni', 'junioruseni@gmail.com', 'junior', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi av du lac', 'single', 'Male', '4755698', 'protocol', '2020-08-11', '2020-08-23 05:48:03', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(54, 'mupanda taadja', 'fadhilimupanda@gmail.com', 'fadhila', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma kyeshero', 'single', 'Female', '12366666', 'protocol', '2020-08-09', '2020-08-23 05:48:55', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(55, 'azilo', 'robertazilo@yahoo.fr', 'robert', '81dc9bdb52d04dc20036dbd8313ed055', 'goma Q des volcans', 'fiance', 'Male', '+2439754466', 'protocol', '1976-08-02', '2020-08-23 05:50:54', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(56, 'el bisimwa', 'jean-pierreelbisimwa@gmail.com', 'jean-pierre', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi', 'fiance', 'Male', '+24395554556', 'protocol', '2020-08-03', '2020-08-23 05:51:50', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(57, 'bahizi', 'christianbahizi@gmail.com', 'christian', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi Rwanda', 'single', 'Male', '7856236589', 'intercession', '2020-08-03', '2020-08-23 06:01:46', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(58, 'mapendano', 'mapendano3@gmail.com', 'Christian', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi Rwanda', 'single', 'Male', '789562410', 'media', '2020-08-02', '2020-08-23 06:02:35', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(59, 'khana', 'prince@gmail.com', 'prince', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma kyeshero', 'single', 'Male', '902123365', 'intercession', '2020-08-10', '2020-08-23 06:03:31', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(60, 'mukubiza', 'regissemukubiza@gmail.com', 'Regisse', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '099555444', 'intercession', '2020-08-02', '2020-08-23 06:04:22', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(61, 'ndeba', 'assanindeba@gmail.com', 'assani', '81dc9bdb52d04dc20036dbd8313ed055', 'goma birere', 'single', 'Male', '0999453000', 'media', '2020-08-03', '2020-08-23 06:05:05', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(62, 'Lwaboshi kawata', 'lwaboshi@gmail.com', 'Christian', '81dc9bdb52d04dc20036dbd8313ed055', 'goma Himbi 1', 'single', 'Male', '0973063306', 'intercession', '1997-08-09', '2020-08-23 06:06:23', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(63, 'mwamba kalala', 'marcelmwambakalala@yahoo.fr', 'marcel', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma kyeshero', 'single', 'Male', '97885441', 'protocol', '1964-08-09', '2020-08-23 06:09:09', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(64, 'prayer grace', 'lesage@gmail.com', 'lesage', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Himbi 1 carmel', 'single', 'Male', '099986654', 'intercession', '2020-08-02', '2020-08-23 06:10:12', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(65, 'pokea', 'solangepokea@gmail.com', 'solange', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Katindo', 'single', 'Female', '0996985874', 'protocol', '2020-08-03', '2020-08-25 13:54:44', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(66, 'Mango cunitec', 'mango.cunitec@g.cd', 'Mango', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'married', 'Male', '0978451236', 'media', '2020-09-18', '2020-09-19 12:41:50', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(67, 'grace el bisimwa', 'graceelbisimwa@gmail.com', 'grace', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0973967724', 'intercession', '2020-09-07', '2020-09-24 18:01:24', '/assets/images/use/user/face-1.jpg', 0, 'I am not everyone', ''),
(68, 'roman', 'ericroman@gmali.com', 'eric', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0786565432', 'none', '1990-10-19', '2020-10-20 06:45:08', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(69, 'Elena vulonder', 'elena@gmail.com', 'elena', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Ville', 'single', 'Female', '096635241', 'none', '1999-11-03', '2020-10-20 06:46:23', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(70, 'wasukundi mwisa', 'rolandwasukundi@gmail.com', 'roland', '81dc9bdb52d04dc20036dbd8313ed055', 'Inde', 'single', 'Male', '0098765444', 'none', '2020-10-13', '2020-10-24 15:50:27', '../assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(71, 'nsereko uganda', 'jsnsereko@gmail.com', 'josua', '81dc9bdb52d04dc20036dbd8313ed055', 'Uganda', 'single', 'Male', '+25678456985', 'none', '2020-10-24', '2020-10-24 15:55:07', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(72, 'morrongani', 'tonny@gmail.com', 'Tonny', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi', 'single', 'Male', '0973967724', 'none', '2020-10-14', '2020-10-24 16:02:09', '/assets/images/use/user/face-0.jpg', 0, 'Create your an account and join us in our website, where we make discussions in our blog, the object is to be link each other in the name of jesus our lord', ''),
(73, 'admin test', 'admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0976353543', 'none', '1997-04-14', '2020-10-25 19:07:50', '/assets/images/use/user/face-0.jpg', 1, 'This the admin test', 'offline'),
(74, 'test image', 'test@erx.com', 'test3', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'fiance', 'Female', '0973967724', 'security', '2020-10-06', '2020-10-25 19:13:44', '/assets/images/use/user/face-0.jpg', 0, 'the son of god', ''),
(75, 'last test image', 'image@gmail.com', 'last', '81dc9bdb52d04dc20036dbd8313ed055', 'goma', 'married', 'Female', '0999999999', 'christian', '2020-10-25', '2020-10-25 19:18:43', '/assets/images/use/user/face-0.jpg', 0, 'Good job grace', ''),
(76, 'BAHIZI', 'kanandachristian@gmail.com', 'chrisbahizi', '81dc9bdb52d04dc20036dbd8313ed055', 'gisenyi', 'single', 'Male', '087654345', 'christian', '2020-11-03', '2020-11-02 09:19:08', '/assets/images/use/user/face-1.jpg', 0, 'Bahizi mean christian and christian is my name', ''),
(77, 'Grace Bisimwa', 'grace12@gmail.com', 'grace12', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0973967724', 'intercession', '1996-04-12', '2020-12-02 12:41:28', '/assets/images/use/user/face-0.jpg', 0, 'this the status', ''),
(78, 'grace ghost', 'ghost@gmail.com', 'grace12', '81dc9bdb52d04dc20036dbd8313ed055', 'kigali', 'single', 'Male', '45236987', 'none', '2020-12-07', '2020-12-02 12:44:05', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(79, 'jeanette bisimwa', 'jeanette@gmail.com', 'jeanette', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '0976353543', 'none', '2017-09-13', '2020-12-03 17:56:17', '/assets/images/use/user/250.jpg', 0, 'this is what we call test user', 'offline'),
(80, 'akilimali', 'rebeccaakilimali@gmail.com', 'rebecca', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi 2', 'single', 'Female', '0789246200', 'none', '2017-12-06', '2020-12-16 01:09:23', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(81, 'Job23 updated', 'good@gmail.com', 'Good', '81dc9bdb52d04dc20036dbd8313ed055', 'California', 'married', 'Male', '00125412', 'none', '2020-12-07', '2020-12-16 01:43:29', '/assets/images/use/user/face-0.jpg', 0, 'Only god know what i want only him knows the time he will call me back', 'offline'),
(82, 'kambale zabulo', 'youston@gmail.com', 'youston', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0991757504', 'none', '2020-05-12', '2020-12-25 12:12:03', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(83, 'mutumishi', 'moise@gmail.com', 'moise', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi', 'single', 'Male', '789563210', 'christian', '1999-12-22', '2020-12-29 07:23:28', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(84, 'julia BUTELEZI PONGA', 'julia@gmail.com', 'julia', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '078456985', 'protocol', '1990-12-01', '2020-12-29 09:41:38', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(85, 'julia BUTELEZI PONGA', 'julia@gmail.com', 'julia', '81dc9bdb52d04dc20036dbd8313ed055', 'goma', 'single', 'Female', '909900099', 'security', '2020-12-03', '2020-12-29 09:42:20', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(86, 'esther chiru', 'esther@gmail.com', 'esther', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi 2', 'single', 'Female', '0990969848', 'none', '2020-12-08', '2020-12-30 22:16:52', '/assets/images/use/user/face-1.jpg', 0, 'Je suis une fille de Dieu. sauve de jesus christ', ''),
(87, 'esther12', 'esther@gmail.com', 'esther12', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma himbi 2', 'single', 'Female', '0990969848', 'none', '2020-12-16', '2020-12-30 22:18:06', '/assets/images/use/user/face-0.jpg', 0, 'This my status none', 'offline'),
(88, 'denise amahoro', 'deniseamahoro@gmail.com', 'Denise', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma Keshero', 'single', 'Female', '098778545', 'christian', '2020-12-07', '2020-12-31 00:58:07', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(89, 'emile kabongo', 'emilekabongo@gmail.com', 'Emile', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '89456324', 'security', '2020-12-02', '2020-12-31 00:59:21', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(90, 'elodie badashonderana', 'elodie@gmail.com', 'elodie', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'fiance', 'Female', '8965236547', 'intercession', '2000-06-21', '2020-12-31 01:00:44', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(91, 'tatyana mwangalayi', 'tatyana@goma.cd', 'tatyana', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Female', '78451236', 'protocol', '2006-08-24', '2020-12-31 01:01:47', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(92, 'bonheur kambale', 'bonheurkambale@gmail.fr', 'bonheur', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '45012360', 'none', '2021-01-05', '2021-01-04 06:18:20', '/assets/images/use/user/face-1.jpg', 0, 'My status!!! Who are you?', 'offline'),
(93, 'Joel elisee', 'elisee758@gmail.com', 'Elisee', '81dc9bdb52d04dc20036dbd8313ed055', 'Goma', 'single', 'Male', '0975041411', 'media', '1997-01-08', '2021-01-04 07:25:17', '/assets/images/use/user/face-1.jpg', 0, 'Yesu njo chef', 'offline'),
(94, 'Furaha uwase Diane', 'furahadiane@gmail.com', 'Diane', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi', 'single', 'Female', '0784545831', 'none', '2002-01-27', '2021-01-04 07:34:41', '/assets/images/use/user/face-1.jpg', 0, 'My love jesus love ðŸ’“... Thank you Lord\r\nAm yours jesus', 'offline'),
(95, 'Christian mapendano', 'christianmapendano@gmail.com', 'Map', '81dc9bdb52d04dc20036dbd8313ed055', 'kigali', 'single', 'Male', '078365214', 'intercession', '1996-01-16', '2021-01-04 08:08:36', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline'),
(96, 'Amisa fatuma', 'amisa@gmail.com', 'Christelle', '81dc9bdb52d04dc20036dbd8313ed055', 'Gisenyi', 'single', 'Female', '87542136', 'none', '2021-01-04', '2021-01-04 08:09:48', '/assets/images/use/user/face-0.jpg', 0, 'My status!!! Who are you?', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_tb`
--

CREATE TABLE `wedding_tb` (
  `id` int(11) NOT NULL,
  `pastor_name` varchar(255) NOT NULL,
  `date_of` date NOT NULL,
  `husband_id` int(11) NOT NULL,
  `wife_id` int(11) NOT NULL,
  `about` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pastorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding_tb`
--

INSERT INTO `wedding_tb` (`id`, `pastor_name`, `date_of`, `husband_id`, `wife_id`, `about`, `create_at`, `pastorId`) VALUES
(1, 'Pastor Chiruza bisimwa', '2020-08-04', 10, 22, 'Good job', '2020-08-09 12:35:20', 0),
(2, 'Pastor Chiruza bisimwa', '2020-08-04', 7, 8, 'Good job for me', '2020-08-09 12:49:28', 0),
(3, 'Pastor Chiruza bisimwa', '2020-08-19', 6, 27, 'Good job for me', '2020-08-09 12:50:37', 0),
(4, 'Goly Bonny Pastor', '2020-08-05', 13, 16, 'Good job', '2020-08-09 12:51:27', 0),
(5, 'Pastor Chiruza bisimwa', '2020-04-01', 37, 36, 'love u for ever', '2020-08-12 09:14:40', 0),
(6, 'Pastor Chiruza bisimwa', '2021-02-22', 39, 35, 'Good job for me', '2020-08-12 10:05:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `words_tb`
--

CREATE TABLE `words_tb` (
  `id` int(11) NOT NULL,
  `context` text NOT NULL,
  `userId` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words_tb`
--

INSERT INTO `words_tb` (`id`, `context`, `userId`, `created`) VALUES
(1, '13 Car ce n\'est pas ennemi qui m\'outrage, je ke supporterais ce n\'est pas celui qui me deteste qui s\'eleve contre moi, je pourais  me cacher de lui. 14 c\'est toi, un homme comme moi, mon initime, toi que je connais bien! 15 ensemble nous connaissions la douleur des secrets partages, nous allions avec foule a la maison de Dieu! ', 3, '2020-11-07 08:42:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tb`
--
ALTER TABLE `blog_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `cultes_tb`
--
ALTER TABLE `cultes_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pastorId` (`pastorId`);

--
-- Indexes for table `department_tb`
--
ALTER TABLE `department_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divorce_tb`
--
ALTER TABLE `divorce_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `w_id` (`w_id`);

--
-- Indexes for table `news_tb`
--
ALTER TABLE `news_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `pastor_tb`
--
ALTER TABLE `pastor_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `programmes_tb`
--
ALTER TABLE `programmes_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `status_tb`
--
ALTER TABLE `status_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suscribe_tb`
--
ALTER TABLE `suscribe_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_tb`
--
ALTER TABLE `wedding_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `husband_id` (`husband_id`),
  ADD KEY `wife_id` (`wife_id`);

--
-- Indexes for table `words_tb`
--
ALTER TABLE `words_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tb`
--
ALTER TABLE `blog_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cultes_tb`
--
ALTER TABLE `cultes_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_tb`
--
ALTER TABLE `department_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divorce_tb`
--
ALTER TABLE `divorce_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_tb`
--
ALTER TABLE `news_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pastor_tb`
--
ALTER TABLE `pastor_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `programmes_tb`
--
ALTER TABLE `programmes_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `status_tb`
--
ALTER TABLE `status_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suscribe_tb`
--
ALTER TABLE `suscribe_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `wedding_tb`
--
ALTER TABLE `wedding_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `words_tb`
--
ALTER TABLE `words_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tb`
--
ALTER TABLE `blog_tb`
  ADD CONSTRAINT `blog_tb_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `cultes_tb`
--
ALTER TABLE `cultes_tb`
  ADD CONSTRAINT `cultes_tb_ibfk_1` FOREIGN KEY (`pastorId`) REFERENCES `pastor_tb` (`id`);

--
-- Constraints for table `divorce_tb`
--
ALTER TABLE `divorce_tb`
  ADD CONSTRAINT `divorce_tb_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `divorce_tb_ibfk_2` FOREIGN KEY (`w_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `news_tb`
--
ALTER TABLE `news_tb`
  ADD CONSTRAINT `news_tb_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `pastor_tb`
--
ALTER TABLE `pastor_tb`
  ADD CONSTRAINT `pastor_tb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `programmes_tb`
--
ALTER TABLE `programmes_tb`
  ADD CONSTRAINT `programmes_tb_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `wedding_tb`
--
ALTER TABLE `wedding_tb`
  ADD CONSTRAINT `wedding_tb_ibfk_1` FOREIGN KEY (`husband_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `wedding_tb_ibfk_2` FOREIGN KEY (`wife_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `words_tb`
--
ALTER TABLE `words_tb`
  ADD CONSTRAINT `words_tb_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

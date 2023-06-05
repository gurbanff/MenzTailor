-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 09:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menztailer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_img`) VALUES
(1, 'Gurbanff', 'admin', '202cb962ac59075b964b07152d234b70 ', '1660171730595.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ban_id` int(11) NOT NULL,
  `ban_hero_caption` varchar(255) NOT NULL,
  `ban_span` varchar(255) NOT NULL,
  `ban_file` varchar(255) NOT NULL,
  `ban_file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ban_id`, `ban_hero_caption`, `ban_span`, `ban_file`, `ban_file_ext`) VALUES
(45, 'Kingsman The Services', 'MenzTailor', 'kingsman-the-secret-services-agent-galahad-wallpaper-1366x768_463.jpg', '.jpg'),
(46, 'Dress Well With Us', 'MenzTailor', 'h1_hero3.jpg', '.jpg'),
(47, 'Discover false personalization.', 'MenzTailor', '48702381.jpg', '.jpg'),
(48, 'Discover false personalization', 'MenzTailor', '48703163.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_area`
--

CREATE TABLE `blog_area` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `blog_user` varchar(255) NOT NULL,
  `blog_comment` varchar(255) NOT NULL,
  `s_date` varchar(255) NOT NULL,
  `s_monday` varchar(255) NOT NULL,
  `blog_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_area`
--

INSERT INTO `blog_area` (`id`, `title`, `description`, `blog_user`, `blog_comment`, `s_date`, `s_monday`, `blog_file`) VALUES
(4, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'Travel, Lifestyle', 'Comments', '19', 'Dec', 'single_blog_12.png'),
(8, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'Travel, Lifestyle', 'Comments', '17', 'Oct', 'single_blog_23.png'),
(9, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'Travel, Lifestyle', 'Comments', '1', 'Sep', 'single_blog_3.png'),
(10, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'Travel, Lifestyle', 'Comments', '10', 'May', 'single_blog_4.png'),
(11, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', 'Travel, Lifestyle', 'Comments', '10', 'Feb', 'single_blog_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_banner`
--

CREATE TABLE `blog_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_banner`
--

INSERT INTO `blog_banner` (`id`, `title`, `blog_file`) VALUES
(3, 'Our Blog', 'about2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cate`
--

CREATE TABLE `blog_cate` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `linked` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_cate`
--

INSERT INTO `blog_cate` (`id`, `title`, `description`, `linked`, `icon`) VALUES
(9, 'Resaurant Food', 'List Of Dishes', 'https://www.bic.az/', 'mdi mdi-account-key'),
(10, 'Travel news', 'List of New News', 'https://www.nytimes.com/section/travel', 'mdi mdi-wallet-travel'),
(11, 'Modern Technology', 'List of Modern Technologies', 'https://www.sciencedirect.com/topics/computer-science/modern-technology', 'mdi mdi-home-modern'),
(12, 'Product', 'Product List', 'https://economictimes.indiatimes.com/definition/product', 'mdi mdi-cart'),
(13, 'Inspiration', 'List of Inspirations', 'https://www.etwinning.net/en/pub/get-inspired.htm', 'mdi mdi-chart-pie'),
(15, 'Health Care', 'Health topics', 'http://germanhealthadvisors.com/en', 'mdi mdi-heart-pulse');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cate_title`
--

CREATE TABLE `blog_cate_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_cate_title`
--

INSERT INTO `blog_cate_title` (`id`, `title`) VALUES
(1, 'Category');

-- --------------------------------------------------------

--
-- Table structure for table `client_feedback`
--

CREATE TABLE `client_feedback` (
  `id` int(11) NOT NULL,
  `h_one_title` varchar(255) NOT NULL,
  `h_two_title` varchar(255) NOT NULL,
  `user_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_feedback`
--

INSERT INTO `client_feedback` (`id`, `h_one_title`, `h_two_title`, `user_file`) VALUES
(4, 'Client Feedback', 'Our Work For Clients', 'h1_hero.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_feed_img`
--

CREATE TABLE `client_feed_img` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_feed_img`
--

INSERT INTO `client_feed_img` (`id`, `file`, `file_ext`) VALUES
(10, 'speech-client14.jpg', '.jpg'),
(11, 'mens-grooming-services1.jpg', '.jpg'),
(12, '2921446.jpg', '.jpg'),
(13, 'papers_co-hd79-tokio-hotel-german-pop-rock-band-music-celebrity-29-wallpaper.jpg', '.jpg'),
(14, '2921535.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_offers`
--

CREATE TABLE `client_offers` (
  `id` int(11) NOT NULL,
  `fade_in_up` varchar(255) NOT NULL,
  `fade_in_down` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_offers`
--

INSERT INTO `client_offers` (`id`, `fade_in_up`, `fade_in_down`) VALUES
(14, 'What We Offer', 'What we offer of Clients');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `comment_name` varchar(80) NOT NULL,
  `comment_email` varchar(80) NOT NULL,
  `news_id` varchar(11) NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `comment_type` varchar(255) NOT NULL,
  `comment_user_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `comment_name`, `comment_email`, `news_id`, `comment_date`, `comment_type`, `comment_user_img`) VALUES
(60, 'Nice News', 'Elmeddin', 'qqcar.qqoi@gmail.com', '72', 'April 1, 2022, 15:04', 'guest', 'comment.png'),
(61, 'Nice Comment', 'ql_eljn0', 'elcan@gmail.com', '69', 'April 1, 2022, 16:04', 'user', '597b4b0adeb2b2e6fcc9f8e76c20f6f0.jpg'),
(62, 'asdasd', 'rony_dev', 'rony@gmail.com', '49', 'May 28, 2022, 19:05', 'user', 'no_user.jpg'),
(63, 'asd', 'asd', 'asdasd@adasdasd', '62', 'May 31, 2022, 17:05', 'guest', 'comment.png'),
(64, 'Hello World', 'Herbaxs', 'herbaxs@gmail.com', '62', 'May 31, 2022, 17:05', 'guest', 'comment.png'),
(65, 'Xow GeLDim', 'ASdasdasdasdasd', 'asdasdasdasd@gmail.com', '65', 'October 28, 2022, 19:10', 'guest', 'comment.png'),
(66, 'Hello!', 'Lucifer', 'gurbanov@gmail.com', '65', 'October 29, 2022, 11:10', 'guest', 'comment.png');

-- --------------------------------------------------------

--
-- Table structure for table `cont_address`
--

CREATE TABLE `cont_address` (
  `id` int(11) NOT NULL,
  `address_icon` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `add_desc` varchar(255) NOT NULL,
  `phone_icon` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ph_desc` varchar(255) NOT NULL,
  `email_icon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `e_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cont_address`
--

INSERT INTO `cont_address` (`id`, `address_icon`, `address`, `add_desc`, `phone_icon`, `phone`, `ph_desc`, `email_icon`, `email`, `e_desc`) VALUES
(1, 'fa fa-home', 'Buttonwood, California', 'Rosemead, CA 91770', 'fa fa-tablet', '+1 253 565 2365', 'Mon to Fri 9am to 6pm', 'fa fa-envelope', 'support@menztailor.com', 'Send us your query anytime!');

-- --------------------------------------------------------

--
-- Table structure for table `cont_message`
--

CREATE TABLE `cont_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cont_message`
--

INSERT INTO `cont_message` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mr. Herbaxs', 'ern.herbaxs@gmail.com', 'Hello admin'),
(7, 'asdas', 'asdasda', 'sdasdasdasd'),
(8, 'Lucifer', 'lucifermichaelson@gmail.com', 'No more love'),
(9, 'Lucifer', 'gurbanff@gmail.com', 'Hello'),
(10, 'Lemin', 'lemin@gmail.com', '29/10/2022'),
(11, 'Hello', 'gurbanff@gmail.com', 'asdasda'),
(12, 'Eziz', 'Esgerov', 'Xow Geldiniz'),
(13, 'Gunay', 'wukurowva@gmail.com', 'Ebdul menim en yaxsh teLebem');

-- --------------------------------------------------------

--
-- Table structure for table `cont_title`
--

CREATE TABLE `cont_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cont_title`
--

INSERT INTO `cont_title` (`id`, `title`) VALUES
(4, 'Get in Touch');

-- --------------------------------------------------------

--
-- Table structure for table `con_banner`
--

CREATE TABLE `con_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `con_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `con_banner`
--

INSERT INTO `con_banner` (`id`, `title`, `con_file`) VALUES
(1, 'Contact Us', 'gallery2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `con_location`
--

CREATE TABLE `con_location` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `location` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `con_location`
--

INSERT INTO `con_location` (`id`, `country`, `location`) VALUES
(6, 'Azerbaycan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122458.983829698!2d45.510713944316294!3d40.158400399349446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307cd91aa21ddf%3A0xe6c9526b3e83cd08!2sAzerbaycan!5e0!3m2!1str!2s!4v1652893412575!5m2!1str!2s\" width=\"1170\" height=\"490\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `footer_desc`
--

CREATE TABLE `footer_desc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_desc`
--

INSERT INTO `footer_desc` (`id`, `title`, `desc`) VALUES
(1, 'Contact', '71 Madison Ave 10013 New York, 914-309701, 914-329211, reservations@laurent.com, office@laurent.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer_icons`
--

CREATE TABLE `footer_icons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_https` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_icons`
--

INSERT INTO `footer_icons` (`id`, `title`, `icon`, `icon_https`) VALUES
(1, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com/?hl=tr'),
(2, 'Globe', 'fas fa-globe', 'https://global.com/'),
(3, 'Twitter', 'fab fa-twitter', 'https://twitter.com/?lang=tr');

-- --------------------------------------------------------

--
-- Table structure for table `footer_icon_title`
--

CREATE TABLE `footer_icon_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_icon_title`
--

INSERT INTO `footer_icon_title` (`id`, `title`) VALUES
(1, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL,
  `home_link` longtext NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `gallery_link` longtext NOT NULL,
  `blog` varchar(255) NOT NULL,
  `blog_link` longtext NOT NULL,
  `contact` varchar(255) NOT NULL,
  `contact_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `home`, `home_link`, `gallery`, `gallery_link`, `blog`, `blog_link`, `contact`, `contact_link`) VALUES
(1, 'Home', 'index.php', 'Gallery', 'Gallery', 'Blog', 'Blog', 'Contact', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link_title`
--

CREATE TABLE `footer_link_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_link_title`
--

INSERT INTO `footer_link_title` (`id`, `title`) VALUES
(1, 'Links');

-- --------------------------------------------------------

--
-- Table structure for table `footer_title`
--

CREATE TABLE `footer_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gall_banner`
--

CREATE TABLE `gall_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `gall_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gall_banner`
--

INSERT INTO `gall_banner` (`id`, `title`, `gall_file`) VALUES
(4, 'Gallery', 'gallery3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gall_client`
--

CREATE TABLE `gall_client` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `secondary_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gall_client`
--

INSERT INTO `gall_client` (`id`, `title`, `secondary_title`) VALUES
(5, 'Client Feedback', 'Our Work For Clients');

-- --------------------------------------------------------

--
-- Table structure for table `gall_client_img`
--

CREATE TABLE `gall_client_img` (
  `id` int(11) NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gall_client_img`
--

INSERT INTO `gall_client_img` (`id`, `client_img`, `file_ext`) VALUES
(10, '2921446.jpg', '.jpg'),
(11, 'Brands_Men_s_fashion_from_Brioni_092562_.jpg', '.jpg'),
(14, 'papers_co-hd79-tokio-hotel-german-pop-rock-band-music-celebrity-29-wallpaper.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gall_photos`
--

CREATE TABLE `gall_photos` (
  `id` int(11) NOT NULL,
  `gall_file` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gall_photos`
--

INSERT INTO `gall_photos` (`id`, `gall_file`, `file_ext`) VALUES
(17, '04c6d9fdba35082705e0cbc7ed2f0d16.jpg', '.jpg'),
(18, '504e9fd8c0130ac08cca68f1ea3cb04f.jpg', '.jpg'),
(19, 'dc44a5e2e787a5e4c1f2354df2d9122e.jpg', '.jpg'),
(21, 'Sam_Webb.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gall_photo_title`
--

CREATE TABLE `gall_photo_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gall_photo_title`
--

INSERT INTO `gall_photo_title` (`id`, `title`) VALUES
(1, 'Testimonial');

-- --------------------------------------------------------

--
-- Table structure for table `navitem`
--

CREATE TABLE `navitem` (
  `nav_id` int(11) NOT NULL,
  `nav_home` varchar(255) NOT NULL,
  `nav_gallery` varchar(255) NOT NULL,
  `nav_blog` varchar(255) NOT NULL,
  `nav_contact` varchar(255) NOT NULL,
  `nav_visitus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navitem`
--

INSERT INTO `navitem` (`nav_id`, `nav_home`, `nav_gallery`, `nav_blog`, `nav_contact`, `nav_visitus`) VALUES
(6, 'Home', 'Gallery', 'Blog', 'Contact', 'Visit Us');

-- --------------------------------------------------------

--
-- Table structure for table `our_history`
--

CREATE TABLE `our_history` (
  `id` int(11) NOT NULL,
  `hs_title` varchar(255) NOT NULL,
  `hs_two_til` varchar(255) NOT NULL,
  `hs_desc` varchar(255) NOT NULL,
  `hs_button` varchar(255) NOT NULL,
  `user_file` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_history`
--

INSERT INTO `our_history` (`id`, `hs_title`, `hs_two_til`, `hs_desc`, `hs_button`, `user_file`, `file_ext`) VALUES
(12, 'History', 'Our History', ' Even Small tailoring businesses without an international following will sometimes travel from one city to another within their home country, and quite a number will visit customers at the customers\' places of work or homes. ', 'About Us', 'videobg2.jpg', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `single_blog_title`
--

CREATE TABLE `single_blog_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_blog_title`
--

INSERT INTO `single_blog_title` (`id`, `title`, `blog_file`) VALUES
(5, 'Single Blog', 'papers_co-hd79-tokio-hotel-german-pop-rock-band-music-celebrity-29-wallpaper2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `single_message`
--

CREATE TABLE `single_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `news_id` varchar(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_message`
--

INSERT INTO `single_message` (`id`, `name`, `comment`, `news_id`, `date`) VALUES
(1, 'Devil', 'Hello World', '1', '2022-04-22 14:06:55'),
(2, 'Herbaxs', 'Hello PhP', '2', 'May 16, 2022, 04:05');

-- --------------------------------------------------------

--
-- Table structure for table `single_offers`
--

CREATE TABLE `single_offers` (
  `id` int(11) NOT NULL,
  `offers_num` varchar(255) NOT NULL,
  `offers_cap` varchar(255) NOT NULL,
  `offers_des` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_offers`
--

INSERT INTO `single_offers` (`id`, `offers_num`, `offers_cap`, `offers_des`, `file`, `file_ext`) VALUES
(1, '1', 'Perfect Body Measurements', 'The quest for the “perfect” body is almost as old as time itself.', '12.png', '.png'),
(2, '2', 'Premioum Style Cutting-out ', 'Men’s hair is anything but boring! From pomps to fades!', '21.png', '.png'),
(3, '3', 'Restoration with Sincerity ', 'We are ready to do our best for you', '31.png', '.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_area`
--

CREATE TABLE `testimonial_area` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial_area`
--

INSERT INTO `testimonial_area` (`id`, `description`, `user_file`) VALUES
(6, ' This is the best suit I\'ve ever owned and get I compliments all the time. Ben is going to be the ONLY suit maker I am going to use moving forward. ', 'testimonial2.png'),
(7, ' Tailor on Ten in Bangkok is an honest operation. You get what you pay for. You will get good value for what you buy at Tailor on Ten. ', 'testimonial3.png'),
(8, ' I was struck by just how special it made me feel being measured for my suit. I think every gentleman should experience that at least once in their life. ', 'testimonial4.png'),
(10, ' i have been showing off my new clothes to everyone I can. \"From the second I walked in, it was first-class the entire time.\"', 'testimonial6.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_title`
--

CREATE TABLE `testimonial_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial_title`
--

INSERT INTO `testimonial_title` (`id`, `title`) VALUES
(4, 'Testimonial');

-- --------------------------------------------------------

--
-- Table structure for table `twondbanner`
--

CREATE TABLE `twondbanner` (
  `id` int(11) NOT NULL,
  `hero_caption` varchar(255) NOT NULL,
  `hero_span` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twondbanner`
--

INSERT INTO `twondbanner` (`id`, `hero_caption`, `hero_span`, `file`, `file_ext`) VALUES
(8, 'Discover true personalization.', 'MenzTailer', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `visit_offers`
--

CREATE TABLE `visit_offers` (
  `id` int(11) NOT NULL,
  `hpercent` varchar(255) NOT NULL,
  `visit_button` varchar(255) NOT NULL,
  `user_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit_offers`
--

INSERT INTO `visit_offers` (`id`, `hpercent`, `visit_button`, `user_file`) VALUES
(1, '50% Off', 'Get Offer', 'visit_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visit_tailor`
--

CREATE TABLE `visit_tailor` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ndtitle` varchar(255) NOT NULL,
  `loca` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `nddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit_tailor`
--

INSERT INTO `visit_tailor` (`id`, `title`, `ndtitle`, `loca`, `email`, `desc`, `date`, `nddate`) VALUES
(4, 'Our Location', 'Visit Our Tailor', '71 Madison Ave 10013 New York, 914-309701, 914-329211', 'reservations@laurent.com', 'Opening hours:', 'Mon – Thu: 10.00 am – 01:00 am', 'Fri – Sun: 03:00 am - 05:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `visit_tailor_icons`
--

CREATE TABLE `visit_tailor_icons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_https` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit_tailor_icons`
--

INSERT INTO `visit_tailor_icons` (`id`, `title`, `icon`, `icon_https`) VALUES
(1, 'Facebook', 'fab fa-facebook', 'https://www.facebook.com/'),
(2, 'Twitter', 'fab fa-twitter', 'https://twitter.com/?lang=tr'),
(3, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `blog_area`
--
ALTER TABLE `blog_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_banner`
--
ALTER TABLE `blog_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_cate`
--
ALTER TABLE `blog_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_cate_title`
--
ALTER TABLE `blog_cate_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_feedback`
--
ALTER TABLE `client_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_feed_img`
--
ALTER TABLE `client_feed_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_offers`
--
ALTER TABLE `client_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cont_address`
--
ALTER TABLE `cont_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cont_message`
--
ALTER TABLE `cont_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cont_title`
--
ALTER TABLE `cont_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_banner`
--
ALTER TABLE `con_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_location`
--
ALTER TABLE `con_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_desc`
--
ALTER TABLE `footer_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_icons`
--
ALTER TABLE `footer_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_icon_title`
--
ALTER TABLE `footer_icon_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link_title`
--
ALTER TABLE `footer_link_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_title`
--
ALTER TABLE `footer_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gall_banner`
--
ALTER TABLE `gall_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gall_client`
--
ALTER TABLE `gall_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gall_client_img`
--
ALTER TABLE `gall_client_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gall_photos`
--
ALTER TABLE `gall_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gall_photo_title`
--
ALTER TABLE `gall_photo_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navitem`
--
ALTER TABLE `navitem`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `our_history`
--
ALTER TABLE `our_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_blog_title`
--
ALTER TABLE `single_blog_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_message`
--
ALTER TABLE `single_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_offers`
--
ALTER TABLE `single_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_area`
--
ALTER TABLE `testimonial_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_title`
--
ALTER TABLE `testimonial_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twondbanner`
--
ALTER TABLE `twondbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_offers`
--
ALTER TABLE `visit_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_tailor`
--
ALTER TABLE `visit_tailor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_tailor_icons`
--
ALTER TABLE `visit_tailor_icons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `blog_area`
--
ALTER TABLE `blog_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_banner`
--
ALTER TABLE `blog_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_cate`
--
ALTER TABLE `blog_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_cate_title`
--
ALTER TABLE `blog_cate_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_feedback`
--
ALTER TABLE `client_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_feed_img`
--
ALTER TABLE `client_feed_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `client_offers`
--
ALTER TABLE `client_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cont_address`
--
ALTER TABLE `cont_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cont_message`
--
ALTER TABLE `cont_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cont_title`
--
ALTER TABLE `cont_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `con_banner`
--
ALTER TABLE `con_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `con_location`
--
ALTER TABLE `con_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer_desc`
--
ALTER TABLE `footer_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_icons`
--
ALTER TABLE `footer_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_icon_title`
--
ALTER TABLE `footer_icon_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_link_title`
--
ALTER TABLE `footer_link_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_title`
--
ALTER TABLE `footer_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gall_banner`
--
ALTER TABLE `gall_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gall_client`
--
ALTER TABLE `gall_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gall_client_img`
--
ALTER TABLE `gall_client_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gall_photos`
--
ALTER TABLE `gall_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gall_photo_title`
--
ALTER TABLE `gall_photo_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navitem`
--
ALTER TABLE `navitem`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_history`
--
ALTER TABLE `our_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `single_blog_title`
--
ALTER TABLE `single_blog_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `single_message`
--
ALTER TABLE `single_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `single_offers`
--
ALTER TABLE `single_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial_area`
--
ALTER TABLE `testimonial_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonial_title`
--
ALTER TABLE `testimonial_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `twondbanner`
--
ALTER TABLE `twondbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visit_offers`
--
ALTER TABLE `visit_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visit_tailor`
--
ALTER TABLE `visit_tailor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visit_tailor_icons`
--
ALTER TABLE `visit_tailor_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

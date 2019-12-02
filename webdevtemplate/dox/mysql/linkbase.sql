-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2019 at 11:18 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link` varchar(525) NOT NULL,
  `categorie` varchar(115) NOT NULL,
  `source` varchar(125) NOT NULL,
  `type` varchar(50) NOT NULL,
  `author` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link`, `categorie`, `source`, `type`, `author`) VALUES
(6, 'https://css-tricks.com/centering-css-complete-guide', 'CSS', 'Student', 'www', ''),
(7, 'https://technicalseo.com/tools/schema-markup-generator', 'HTML', 'Peter', 'www', 'Test your code'),
(8, 'http://flexboxfroggy.com/#nl', 'CSS', 'Student', 'www', 'Fun'),
(9, 'https://michalsnik.github.io/aos', 'JS', 'Peter', 'www', 'Library'),
(10, 'http://css3generator.com', 'CSS', 'Student', 'www', 'Tool'),
(11, 'https://zurb.com/playground/twentytwenty', 'jQuery', 'Peter', 'www', 'Tool'),
(12, 'https://www.hongkiat.com/blog/js-image-comparison-sliders', 'jQuery', 'Peter', 'www', 'Tool'),
(13, 'http://codingheroes.io/resources', 'otherCategorie', 'Student', 'www', 'Resource'),
(14, 'https://www.youtube.com/watch?v=3nrLc_JOF7k', 'jQuery', 'Peter', 'www', 'Brad Traversy'),
(15, 'https://www.youtube.com/watch?v=eY4sXczY5AQ', 'Animation', 'Peter', 'www', 'DesignCourse'),
(16, 'https://www.youtube.com/channel/UClb90NQQcskPUGDIXsQEz5Q', 'otherCategorie', 'Peter', 'www', 'Dev Ed'),
(17, 'https://www.youtube.com/channel/UCVBRUNC4aeBIj3KmUwmiZHQ', 'Animation', 'Peter', 'www', 'MilkIsNice'),
(18, 'https://www.lynda.com/learning-paths/Web/become-a-front-end-web-developer', 'otherCategorie', 'Student', 'www', '1MonthFreeTrialCourse'),
(19, 'https://www.linkedin.com/learning/me', 'otherCategorie', 'Student', 'www', '1MonthFreeTrialLearning'),
(20, 'https://www.youtube.com/watch?v=ceNMP-aQkQ4', 'CSS', 'Peter', 'www', 'Kevin Powell'),
(21, 'https://www.youtube.com/watch?v=OwgsglJbJmI&t=1s', 'Bootstrap', 'Peter', 'www', 'Onze eigen Bootstrap'),
(22, 'https://uxplanet.org/how-to-customize-bootstrap-b8078a011203', 'Bootstrap', 'Peter', 'www', 'Customize Bootstrap'),
(23, 'https://www.freecodecamp.org/news/the-complete-flex-animated-tutorial/', 'CSS', 'Student', 'www', 'Flex-anmated Tutorial'),
(24, 'https://www.youtube.com', 'HTML', 'self', 'www', 'tst nieuwe link'),
(25, 'netninja.be', 'HTML', 'self', 'www', ''),
(26, 'netninja.be/gaming', 'HTML', 'self', 'www', ''),
(27, 'http://svg-edit.github.io/svgedit/releases/svg-edit-2.8.1/svg-editor.html', 'SVG', 'Stef', 'www', 'SVG editor online'),
(28, 'https://jakearchibald.github.io/svgomg/', 'SVG', 'self', 'www', 'SVG optimiser '),
(29, 'https://thegymnasium.com/', 'otherCategorie', 'Stef', 'www', 'Les site'),
(30, 'https://www.youtube.com/watch?v=mtZJUvzQrA4', 'otherCategorie', 'Stef', 'www', 'How to prototype with XD'),
(31, 'https://vimeo.com/24278115', 'CSS', 'Stef', 'www', 'Quick introduction to Sass'),
(32, 'https://youtu.be/39yvSEB3fNo', 'Wordpress', 'Stef', 'www', 'Woo Commerce tutorial'),
(33, 'https://css-tricks.com/useful-nth-child-recipies/', 'CSS', 'Stef', 'www', 'nth-of-type CSS Tricks'),
(34, 'https://gist.github.com/gokulkrishh/242e68d1ee94ad05f488', 'CSS', 'Stef', 'www', 'Device driven breakpoints'),
(35, 'http://codingheroes.io/resources/', 'otherCategorie', 'Student', 'www', 'Resources for building beautiful websites'),
(36, 'https://www.udemy.com/course/web-design-secrets/', 'CSS', 'Student', 'www', 'Tips over Layout, kleuren en typografie'),
(37, 'https://remysharp.com/2012/05/24/issues-with-position-fixed-scrolling-on-ios', 'CSS', 'Stef', 'www', 'Issues with position fixed & scrolling on iOS'),
(38, 'https://stackoverflow.com/questions/5449412/styling-input-buttons-for-ipad-and-iphone', 'CSS', 'Student', 'www', 'Styling input buttons for iPad and iPhone'),
(39, 'https://www.youtube.com/watch?v=_2LLXnUdUIc', 'CSS', 'Peter', 'www', 'Het begin van Graphic Design : Kleur'),
(40, 'https://www.youtube.com/watch?v=sByzHoiYFX0', 'CSS', 'Peter', 'www', 'Beginning Graphic Design : Typography'),
(41, 'https://www.youtube.com/watch?v=a5KYlHNKQB8', 'CSS', 'Peter', 'www', 'Beginning Graphic Design : Layout & Composition'),
(42, 'https://amp.dev/about/stories/', 'otherCategorie', 'Peter', 'www', 'AMP Stories'),
(43, 'https://www.youtube.com/watch?v=QgMQeLymAdU&feature=youtu.be', 'CSS', 'Peter', 'www', 'Sass & BrowserSync setup'),
(44, 'https://css-tricks.com/animated-position-of-focus-ring/', 'CSS', 'Peter', 'www', 'Animated Position of Focus Ring'),
(45, 'https://www.youtube.com/watch?v=Mvu5OMGcdVA&feature=youtu.be', 'CSS', 'Peter', 'www', 'You are doing :focus wrong (and I was too)');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `idmeta` int(11) NOT NULL,
  `titlemeta` varchar(125) NOT NULL,
  `descriptionmeta` varchar(255) NOT NULL,
  `imagemeta` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`idmeta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `idmeta` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

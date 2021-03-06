-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2016 a las 08:25:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blog_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_blog` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `valoración` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `id_blog`, `author`, `comment`, `date`, `valoración`) VALUES
(1, 2, 'sergio', 'esta chido', '2016-04-04 14:40:18', 0),
(2, 2, 'sergio', '123', '2016-04-04 14:40:55', 0),
(3, 2, 'sergio', '123', '2016-04-04 14:41:02', 0),
(4, 2, 'sergio', 'tres tres', '2016-04-04 14:41:28', 0),
(5, 1, 'sergio', 'lorem', '2016-04-04 14:43:49', 0),
(6, 1, 'sergio', 'lorem', '2016-04-04 14:50:19', 0),
(7, 4, 'sergio', '', '2016-04-04 15:05:35', 0),
(8, 4, 'sergio', '', '2016-04-04 15:05:37', 0),
(9, 4, 'sergio', '', '2016-04-04 15:05:39', 0),
(10, 2, 'enrique', 'rityudrifthdir', '2016-04-04 15:19:43', 0),
(11, 1, 'enrique', '', '2016-04-04 15:28:01', 0),
(12, 1, 'enrique', 'sda', '2016-04-04 15:28:18', 0),
(13, 2, 'sergio', 'test día 2', '2016-04-05 06:17:21', 0),
(14, 2, 'sergio', 'fsdñfdsfksd`p', '2016-04-05 06:23:17', 0),
(15, 2, 'sergio', '685', '2016-04-05 06:51:39', 0),
(16, 6, 'sergio', 'dasdasfasfasg34223', '2016-04-05 07:08:29', 0),
(17, 9, 'admin', 'Lorem ipsum', '2016-04-06 06:25:28', 0),
(18, 14, 'admin', 'Verde', '2016-04-06 09:08:56', 0),
(19, 14, 'admin', 'Rojo', '2016-04-06 09:12:03', 0),
(20, 14, 'admin', 'm auctor nec. Praesent vulputate, metus ac suscipit interdum, tortor mauris tempus lectus, ut vehicula lacus mi nec sapien. ', '2016-04-06 09:12:26', 0),
(21, 41, 'admin', 'wolololo', '2016-04-08 08:31:55', 0),
(22, 56, 'admin', 'Test', '2016-04-08 13:06:49', 0),
(23, 56, 'admin', 'test2', '2016-04-08 13:07:26', 0),
(24, 56, 'admin', 'test3', '2016-04-08 13:07:42', 0),
(25, 57, 'admin', 'Internet explorer rules!', '2016-04-11 11:05:28', 0),
(26, 61, 'Juan23', 'Lorem ipsum!!!!!', '2016-04-11 11:20:14', 0),
(27, 62, 'test', 'Intel', '2016-04-11 12:44:34', 0),
(28, 65, 'admin', 'test', '2016-04-12 06:55:38', 0),
(29, 67, 'admin', 'dasdas', '2016-04-12 09:17:20', 0),
(30, 13, 'admin', 'test hora', '2016-04-12 12:18:08', 0),
(31, 62, 'admin', 'Comentado desde Internet explorer', '2016-04-13 11:52:01', 0),
(32, 64, 'Juan23', 'Probando', '2016-04-15 15:25:06', 0),
(33, 64, 'Juan23', 'Probando otra vez.', '2016-04-15 15:26:23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permalink` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `tags` text NOT NULL,
  `image` text NOT NULL,
  `editInfo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Volcado de datos para la tabla `entries`
--

INSERT INTO `entries` (`id`, `permalink`, `author`, `title`, `content`, `date`, `tags`, `image`, `editInfo`) VALUES
(13, 'sed-euismod', 'sergio', 'Sed euismod ', 'Sed euismod molestie nibh ut dignissim. Duis pharetra, tellus ac bibendum venenatis, dui nunc consectetur lacus, in cursus quam ex commodo elit. In vestibulum venenatis blandit. Aenean blandit leo ac consequat pellentesque. Ut facilisis blandit ullamcorper. Nullam vestibulum purus pulvinar congue sodales. Mauris dapibus eros quis tincidunt pellentesque. Nullam sollicitudin vulputate felis eleifend tincidunt. Maecenas auctor condimentum augue, at rutrum nisl mollis blandit. Phasellus ornare magna ut mauris ultricies hendrerit. Integer vel dignissim lectus, at tempor diam. Duis volutpat vitae eros et pretium.', '2016-04-06 06:56:42', 'Sed,vag', 'http://findicons.com/files/icons/1008/quiet/256/netscape.png', '<br/><br/><i> Editado por: admin a las 16:27:46 del 14-04-2016</i>'),
(56, 'pellentesque-quis-euismod-justo.', 'admin', 'Pellentesque quis euismod justo.', 'Pellentesque quis euismod justo. Nullam mattis felis nec faucibus imperdiet. Sed euismod dolor vel mi scelerisque tempus. Cras pellentesque neque in hendrerit varius. Etiam vitae purus mollis, sodales lectus sed, ullamcorper enim. Vestibulum egestas sem arcu. Nunc fringilla lectus sit amet commodo sodales. Nam in sollicitudin est, id mattis leo. Curabitur auctor magna tincidunt leo laoreet convallis nec et lorem. Nam condimentum, erat non sagittis scelerisque, ante sapien egestas ex, eu mollis orci risus in quam. Integer imperdiet turpis eget mi gravida congue sit amet quis nunc. Etiam eu arcu sollicitudin, porta tortor sit amet, tristique felis. Nullam luctus at purus ac hendrerit.', '2016-04-08 13:06:25', 'sed,', 'https://4.bp.blogspot.com/-DoaEqgEulvE/VrR6wjJ0t2I/AAAAAAAAAO4/llPlnzAhE3I/s1600/forum.png', ''),
(57, 'in-fringilla-', 'admin', 'In fringilla ', 'In fringilla nisi sit amet tortor lacinia, id varius massa pretium. Morbi leo turpis, rutrum id eleifend sit amet, blandit ac lorem. Etiam eu nibh vulputate, interdum ante vestibulum, euismod ligula. Suspendisse eros mauris, imperdiet ut odio at, pharetra pharetra enim. Curabitur a turpis purus. Integer sed finibus nisi, sit amet tempus dui. In sem nulla, tristique scelerisque sollicitudin et, interdum et magna. Ut pellentesque lorem in odio bibendum, mollis cursus velit placerat. Etiam tristique vitae nulla in mattis. Aliquam cursus tincidunt gravida.\r\nExplorer rules shur!', '2016-04-08 13:14:43', 'Java, PHP, ', 'https://upload.wikimedia.org/wikipedia/en/1/10/Internet_Explorer_7_Logo.png', '<br/><br/><i> Editado por: admin a las 09:54:32 del 12-04-2016</i>'),
(61, 'lorem-ipsum', 'admin', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices congue urna, eget aliquet odio vestibulum quis. Nullam ultricies, erat sit amet hendrerit porta, augue turpis finibus purus, quis iaculis massa eros vitae dui. Cras accumsan ullamcorper nisi vel elementum. Phasellus vestibulum, sapien et tempor porta, sem nisl lobortis ligula, vitae iaculis dolor turpis non metus. Nulla facilisi. Vivamus metus velit, elementum non quam id, ultrices venenatis leo. Quisque tincidunt posuere dapibus. Pellentesque quis convallis lacus. Nullam condimentum nisi quis nisi egestas, pulvinar aliquet est iaculis. Cras et vehicula eros. Aenean sit amet quam ut augue facilisis tempus.\n', '2016-04-11 11:13:03', 'Lorem, Ipsum, ', 'http://stephboreldesign.com/wp-content/uploads/2012/03/lorem-ipsum-logo.jpg', ''),
(62, 'opera', 'Juan23', 'Etiam pretium', 'Etiam pretium, orci nec venenatis pulvinar, nisl neque fermentum tellus, vel eleifend justo lectus imperdiet nibh. Pellentesque id convallis libero. Donec scelerisque, purus non volutpat blandit, mi sapien fermentum enim, at rhoncus neque metus non nulla. Nam bibendum velit tortor. Aliquam cursus elementum velit quis ornare. Vestibulum fermentum consectetur ornare. Phasellus in arcu dictum, iaculis neque non, lacinia augue. Sed ullamcorper lectus risus, sit amet lacinia odio ultricies eu. Fusce tincidunt interdum dui, eget consectetur odio volutpat in. Fusce accumsan, arcu vitae tempus tristique, purus erat feugiat nisi, ac aliquam magna nisl sed erat. Phasellus a sapien porttitor, hendrerit ligula vitae, pellentesque eros. Pellentesque scelerisque, felis vel viverra accumsan, mauris lectus auctor quam, vulputate pulvinar ante leo sed mauris. Nullam commodo id lacus id viverra. Maecenas vehicula massa non enim egestas, id accumsan nibh placerat. Duis iaculis elit diam, quis scelerisque justo auctor vel.\r\n', '2016-04-11 11:20:01', 'Ipsum, Duis, Maecenas, ', 'http://findicons.com/files/icons/1008/quiet/128/opera.png', '<br/><br/><i> Editado por: Juan23 a las 15:19:00 del 15-04-2016</i>'),
(64, 'quisque-eleifend', 'test', 'Quisque eleifend', 'Quisque eleifend ante a erat pulvinar, ac consequat lectus congue. Suspendisse odio erat, posuere eu eleifend vel, venenatis laoreet libero. Donec ultricies faucibus ornare. Sed condimentum sapien libero, sit amet fermentum turpis viverra sed. Aliquam erat volutpat. Fusce odio ex, tristique at imperdiet finibus, ultrices mollis sapien. Sed pretium velit orci. Nunc dignissim, lorem quis venenatis maximus, eros diam rhoncus turpis, ut molestie turpis velit vel neque. Vivamus luctus dignissim ex, eu pharetra est auctor sed. Praesent turpis massa, semper eget nisi et, hendrerit elementum tortor. Ut velit eros, vestibulum in lobortis vel, fermentum in lectus. Donec diam ligula, laoreet eget consequat id, fringilla aliquam ligula. Duis magna nisi, dapibus in commodo at, convallis et nunc. Fusce eget tellus id lacus tempus scelerisque id egestas diam. Cras non nulla dui. Sed eget dui vehicula, porttitor massa ut, auctor dolor.\n', '2016-04-11 13:48:28', 'wasd, Scelerisque, ', 'http://www.mind-crime.com/stage3/images/instructions/controls_wsad.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(2, 'sergio', 'sergio', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(3, 'enrique', 'enrique', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(4, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(14, 'Juan23', 'Juan23', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(15, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(22, 'test33', 'test33', '9cb45d54b2ccdc1c486e2f3eb87fbe9f'),
(24, '', '', 'f6e2b781e6e5cb68a66f2fd65bb62f1f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wurfldata`
--

CREATE TABLE IF NOT EXISTS `wurfldata` (
  `complete_device_name` text NOT NULL,
  `form_factor` text NOT NULL,
  `is_mobile` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `user` text NOT NULL,
  `ip_address` text NOT NULL,
  `remote_host` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `wurfldata`
--

INSERT INTO `wurfldata` (`complete_device_name`, `form_factor`, `is_mobile`, `id`, `date`, `user`, `ip_address`, `remote_host`) VALUES
('generic web browser', 'Desktop', ' Dispositivo no movil', 32, '2016-04-12 15:25:51', 'admin', '::1', 'scasado'),
('generic web browser', 'Desktop', ' Dispositivo no movil', 33, '2016-04-12 16:19:16', 'admin', '::1', 'scasado'),
('generic web browser', 'Desktop', ' Dispositivo no movil', 34, '2016-04-13 12:14:22', 'admin', '::1', 'scasado'),
('generic web browser', 'Desktop', ' Dispositivo no movil', 35, '2016-04-14 14:51:22', 'admin', '::1', 'scasado'),
('generic web browser', 'Desktop', ' Dispositivo no movil', 36, '2016-04-14 14:51:58', 'admin', '::1', 'scasado'),
('generic web browser', 'Desktop', ' Dispositivo no movil', 37, '2016-04-15 13:02:15', 'admin', '::1', 'scasado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

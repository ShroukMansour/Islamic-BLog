-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 11:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `situation`
--

-- --------------------------------------------------------

--
-- Table structure for table `situation`
--

CREATE TABLE `situation` (
  `id` int(11) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `situation`
--

INSERT INTO `situation` (`id`, `tag`, `content`, `type`, `created_at`) VALUES
(3, 'حسنة', 'كَلِمَتَانِ خَفِيفَتَانِ عَلَى اللِّسَانِ، ثَقِيلَتَانِ فِي الْمِيزَانِ، حَبِيبَتَانِ إِلَى الرَّحْمنِ: سُبْحَانَ اللهِ الْعَظِيمِ، سبْحَانَ اللهِ وَبِحَمْدِهِ\r\n\r\n', 0, '2016-12-14 20:27:40'),
(4, 'حسنة', '"مَنْ قَالَ لاَ إِلهَ إِلاَّ اللهُ وَحْدَهُ لاَ شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ فِي كُلِّ يَوْمٍ، مَائَةَ مَرَّةٍ كَانَتْ لَهُ عَدْلَ عَشْرِ رِقَابٍ، وَكُتِبَتْ لَهُ مَائَةُ حَسَنَةٍ، وَمُحِيَتْ عَنْهُ مَائَةُ سَيِّئَةٍ، وَكَانَتْ لَهُ حِرْزًا مِنَ الشَّيْطَانِ، يَوْمَهُ ذلِكَ، حَتَّى يُمْسِي وَلَمْ يَأْتِ أَحَدٌ بِأَفْضَلَ مِمَّا جَاءَ بِهِ، إِلاَّ أَحَدٌ عَمِلَ أَكْثَرَ مِنْ ذَلِكَ" متفق عليه من حديث أَبِي هُرَيْرَةَ رضي الله عنه\r\n\r\nإقرأ المزيد على موضوع.كوم: \r\n\r\n', 0, '2016-12-14 20:28:21'),
(5, 'مغفرة', 'اللَّهُمَّ رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً، وَفِي الآخِرَةِ حَسَنَةً، وَقِنَا عَذَابَ النَّارِ\r\n\r\n', 0, '2016-12-14 20:28:53'),
(6, 'لقاء الله', 'مَنْ أَحَبَّ لِقَاءَ اللهِ، أَحَبَّ اللهُ لِقَاءَهُ وَمَنْ كَرِهَ لِقَاءَ اللهِ، كَرِهَ اللهُ لِقَاءَهُ\r\n\r\n\r\n', 0, '2016-12-14 20:29:23'),
(7, 'سنة', 'لَوْلاَ أَنْ أَشُقَّ عَلَى أُمَّتِي أَوْ عَلَى النَّاسِ لأَمَرْتُهُمْ بِالسِّوَاكِ مَعَ كُلِّ صَلاَةٍ\r\n\r\n \r\n\r\n', 0, '2016-12-14 20:30:16'),
(9, 'مغفرة', 'كَانَ النَّبيُّ إِذَا قَامَ مِنَ اللَّيْلِ يَشُوص فَاهُ بِالسِّوَاكِ\r\n\r\n ', 0, '2016-12-14 22:22:00'),
(10, 'رحمة', 'هبت معه مرة في سفر .. فلما قفلوا راجعين واقتربوا من المدينة .. قال صلى الله عليه وعلى آله وسلم للناس :\r\nتقدموا عنا .. \r\nفتقدم الناس عنه .. حتى بقي مع عائشة .. \r\nوكانت جارية حديثة السن .. نشيطة البدن ..\r\nفالتفت إليها ثم قال : تعاليْ حتى أسابقك .. فسابقته .. وركضت وركضت .. حتى سبقته ..\r\nوبعدها بزمان .. خرجت معه صلى الله عليه وعلى آله وسلم في سفر .. \r\nبعدما كبرت وسمنت .. وحملت اللحم وبدنت .. \r\nفقال صلى اللهُ عليه وعلى آله وسلم للناس : تقدموا .. فتقدموا .. \r\nثم قال لعائشة : تعاليْ حتى أسابقك .. فسابقته .. فسبقها .. \r\nفلما رأى ذلك ..\r\nجعل يضحك ويضرب بين كتفيها .. ويقول : هذه بتلك .. هذه بتلك ..\r\n\r\n ', 1, '2016-12-14 22:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `situation`
--
ALTER TABLE `situation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

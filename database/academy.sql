-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2016 at 02:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `date`) VALUES
(1, 'jqPlot Examples Baseline', '\n<p xss=removed>Consultants, in general, are professionals who provide expert advice in a specific area of knowledge.  CPE consultants are the Institute trained and certified in the use of tDCS technology for the purposes of cognitive performance enhancement amongst otherwise healthy individuals.  The CPE consultants are neither therapists nor are they providers of any type of medical</p>', '2016/07/29'),
(2, 'Bootstrap 3 - Datepicker', '<p> </p>\n<p xss=removed>Many occupations require long periods of complex multi-task training. There has always existed a clear interest in facilitating acquisition of ordinary cognitive multi-tasking that otherwise requires long periods of training. Recently, that interest turned to the use of tDCS as a facilitator in acquisition of cognitive tasks that are quite complex and capture aspects </p>', 'July 29, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `name`, `dob`, `address`, `city`, `country`, `tel`, `email`, `user_id`) VALUES
(1, 'Asim Bilal', '2016-08-04', '001 Block A kohinoor Plaza Jail Road', 'Karachi', 'Pakistan', '+923333908980', 'asimbilal@mail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `url` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `url`) VALUES
(1, 'Module I', '            ', '<iframe src="https://docs.google.com/presentation/d/1E-LbWvgvCA952kLPYkGGFoSv3PLLVhPp7lRg7_fBAy4/embed?start=true&amp;loop=false&amp;delayms=3000" width="700" height="554" frameborder="0" allowfullscreen="allowfullscreen"></iframe>\n'),
(2, 'Module II', '            ', '<iframe src="https://docs.google.com/presentation/d/1Nl_vPrhl1a-EpWI1LeL4o5fjnr6tNP1uNRbMZVBH_oc/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>'),
(4, 'Module III', '', '<iframe src="https://docs.google.com/presentation/d/1sOzFKgCkrb6iYGcG8Jk-Qg16VVfgEDBagK6MalVUwA4/embed?start=true&loop=false&delayms=3000" frameborder="0" width="700" height="554" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>'),
(5, 'Module IV ', '', '<iframe src="https://docs.google.com/presentation/d/1YBWhI2PIL_2vZHTUK-D38ctf4h5j86Zrgg-WCLW9tTo/embed?start=true&loop=false&delayms=3000" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>'),
(6, 'Module V', '', '<iframe src="https://docs.google.com/presentation/d/1Guu5GtYZhQmTuHQCTZgNN6ESoXDMFrWcQt39iCE2VrQ/embed?start=true&loop=false&delayms=3000" frameborder="0" width="700" height="554" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>'),
(7, 'Module VI', '', '<iframe src="https://docs.google.com/presentation/d/1P_ZSNWxTvuEGowSwU4wJ3GnkUY3ocatfX1GNdXTGa2I/embed?start=true&loop=false&delayms=3000" frameborder="0" width="700" height="554" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `paypal_id` text NOT NULL,
  `paypal_status` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `course_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `course_id`) VALUES
(14, 'What is our cognitive performance enhancement (CPE) method?', 'tDCS combined with a specific occupational task in progress or (OTP)', 'tDCS administered during subject’s state of total relaxation', 'tDCS performed with anodal electrode of the left DPLFC area', 'tDCS performed over a period of time with repeated multiple sessions', '1', 1),
(15, 'Dorso-lateral prefrontal cortex (DLPFC) area of the brain supports the following?', 'working memory functions', 'temporary storage', 'manipulation of visual and verbal material', 'all of the above', '4', 1),
(16, 'Which of the following has been found to improve accuracy in task performance?', 'anodal stimulation of the left DLPFC', 'cathode stimulation of either of the DLPFC areas', 'sponge electrode stimulation of the DLPFC', 'anodal stimulation of the cortical area at 1mA or less', '1', 1),
(17, 'Working memory is necessary for complex cognitive tasks such as?', 'language comprehension', 'learning', 'reasoning', 'all of the above', '4', 1),
(18, 'What is a reference “return” electrode?', 'a stimulation (anode) electrode', 'a sponge electrolyte saturated electrode ', 'an inhibitory (cathode) electrode', 'a stimulation (anode) electrode placed on the shoulder', '3', 1),
(19, 'tDCS over the DLPFC can improve performance when?', 'a cognitive task is concentration-requiring', 'especially difficult to perform', 'a concentration - requiring information processing task is in progress', 'all of the above', '4', 1),
(20, 'Observing basic CPE safety protocols for administering of tDCS is important because it?', 'reduces or avoids the side-effects felt by a person receiving tDCS', 'reduces the potential for skin damage', 'helps to avoid potential neuronal or brain tissue damage', 'all of the above', '4', 2),
(21, 'The potential for skin damage may result from the following?', 'use of non-metallic, electrolyte-saturated sponge electrodes', 'electro-chemical toxicity caused by (metallic) electrode dissolution products', 'the interface – in the form of heat development under the electrodes', 'both (1) and (2)', '4', 2),
(22, 'tDCS using the CPE protocols may not induce damage from the heating of neuronal tissue because?', 'total charge entering the brain at only about  50% of that directly under the electrode ', 'research shows that current densities below 25 mA/cm2 do not induce brain tissue damage', 'maximum current density used of 0.03 mA/cm2 – is only a 1/1000 of what is considered safe', 'all of the above', '4', 2),
(23, 'Avoid stimulating if the following conditions are present?', 'chronic skin disorder ', 'severe or frequent headache ', 'adverse reactions to previous tDCS treatment ', 'all of the above ', '4', 2),
(24, 'The stimulation device should guarantee a constant current density because?', 'current density and not voltage is the relevant parameter for inducing neuronal damage', 'if resistance is unstable, a constant voltage device could result in unwanted changes of current density ', 'both (1) and (2)', 'none of the above', '3', 2),
(25, 'To minimise chemical reactions at the electrode–skin interface, tDCS should be performed with?', 'non-metallic, conductive rubber electrodes, covered completely by electrolyte saturated sponges', 'current densities above 0.03 mA/cm2 (1 mA/35 cm2)', 'a minimum total charge of 216 C/cm2', 'all of the above', '1', 2),
(26, 'One of the electrolyte’s purposes in a sponge electrode is that it?', 'saturates the hair and provides a needed contact between the electrode and the skin', 'reduces and homogenises skin’s resistance', 'both (1) and (2)', 'none of the above', '3', 4),
(27, 'tDCS electrode assembly for CPE should consist of?', 'a flat rubber electrode', 'an electrolyte saturated perforated sponge', 'ggj', 'all of the above', '4', 4),
(28, 'Control these factors to regulate current flow density across the skin?', 'sponge thickness', 'electrode size', 'excess fluid at the skin surface', 'all of the above', '4', 4),
(29, 'The following electrode parameters influence current density peak and profile at the skin?', 'sponge salinity', 'single vs. pocket sponge design ', 'both (1) and (2)', 'none of the above', '3', 4),
(30, 'The following parameter changes lead to more concentration of current density at the sponge edges?', 'Increasing sponge thickness', 'Decreasing scalp conductivity ', 'Increasing the surface area of the rubber electrode ', 'All of the above', '4', 4),
(31, 'Removing the top sponge from the electrode assembly leads to?', 'more current density concentration in the centre of the sponge', 'less current density concentration in the centre of the sponge', 'more concentration of current density at the sponge edges', 'less concentration of current density at the sponge edges', '1', 4),
(35, 'CPE dosage is determined by the following?', 'current dosage', 'duration of stimulation', 'electrode montage', 'all of the above ', '4', 5),
(36, 'Unequal response to CPE is mainly due to?', 'tDCS dose', 'electrode montage', 'total applied current', 'all of the above  ', '4', 5),
(37, 'To produce the most significant effects in cognitive performance during active CPE?', 'stimulate at 1mA', 'stimulate at 2mA', 'stimulate at 5mA', 'stimulate at 10mA', '1', 5),
(38, 'The optimal current flow of tDCS on working memory improvement?', 'up to 10 minutes with an intensity of 1.0 – 2.0 mA', 'up to 20 minutes with an intensity of 1.0 – 2.0 mA', 'up to 20 minutes with an intensity of 0.2 – 1.0 mA  ', 'up to 20 minutes with an intensity of 1.0 – 2.0 mA', '3', 5),
(39, 'To ensure proper electrode contact, exercise control over the following?', 'salinity concentration of electrolyte', 'proper saturation of a sponge with electrolyte', 'practical means of securing the electrodes on the skin', 'all of the above', '4', 5),
(40, 'To influence current flow through the target region directly under the active electrode?', 'ensure salinity concentration of electrolyte', 'ensure proper placement of electrodes over hair ', 'change the position of the “return” electrode', 'all of the above', '3', 5),
(41, 'Anodal stimulation produces?', 'inhibition of cortical activity', 'excitatory effects   ', 'unilateral bipolar effects', 'enhanced visual memory', '2', 6),
(42, 'Mono-polar electrode montage?', 'involves positioning only one electric pole over the cranium?', 'involves symmetric placement of electrodes', 'causes excitation of the left DLPFC', 'involves placing of the target electrode over the midline region', '1', 6),
(43, 'Bipolar-balanced montage?', 'both electrodes are positioned over the same hemisphere', 'modulates frontal-parietal networks', 'Involves symmetric placement of electrodes', 'electrodes are positioned over different regions non-symmetrically', '3', 6),
(44, 'The CPE electrode montage to improve concentration involves?', 'unilateral mono-polar anodal stimulation of the right temporal (T4 )', 'unilateral mono-polar anodal stimulation of the orbital PFC (FP1) or (FP2)', 'unilateral mono-polar anodal stimulation of the parietal (P4) ', 'unilateral mono-polar anodal stimulation of the occipital (O1, Oz, and/or O2)', '2', 6),
(45, 'The CPE electrode montage to improve mathematic ability involves?', 'unilateral mono-polar anodal stimulation of the occipital (O1, Oz, and/or O2) ', 'unilateral mono-polar anodal stimulation of the right temple (F10) ', 'unilateral mono-polar anodal stimulation of the right temporal (T4)', 'unilateral mono-polar anodal stimulation of the parietal (P4)', '4', 6),
(46, 'The CPE electrode montage to accelerate learning involves?', 'unilateral mono-polar anodal stimulation of the right temporal (T4)', 'unilateral mono-polar anodal stimulation of the right temple (F10)', 'unilateral mono-polar anodal stimulation of the orbital PFC (FP1) or (FP2)', 'unilateral mono-polar anodal stimulation of the parietal (P4)', '2', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `user_email`, `password`, `type`) VALUES
(1, 'moiz123', 'moiz123', 'moiz123', 'TYPE'),
(2, 'moiz123123', 'moiz@mail.com', 'moiz123', 'TYPE'),
(3, 'moiz123', 'moiz1@mail.com', '12312312', 'TYPE');

-- --------------------------------------------------------

--
-- Table structure for table `user_attempt_module`
--

CREATE TABLE `user_attempt_module` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `course_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_attempt_module`
--

INSERT INTO `user_attempt_module` (`id`, `user_id`, `course_id`) VALUES
(1, 2, 2),
(2, 2, 4),
(3, 2, 1),
(4, 2, 1),
(5, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attempt_module`
--
ALTER TABLE `user_attempt_module`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_attempt_module`
--
ALTER TABLE `user_attempt_module`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

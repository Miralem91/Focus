-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 11:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `focus_ws`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `cName` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `cName`) VALUES
(1, 'News'),
(2, 'Reviews'),
(3, 'Tutorials'),
(4, 'Trending'),
(5, 'NovaKategorija'),
(6, 'Mods');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `userid`, `date`, `comment`, `article_id`) VALUES
(59, '1', '2020-09-05 11:00:41', 'Sjaajan clanak, zaista!! Vrh update1', 40),
(62, '1', '2020-09-05 11:47:56', 'Komentar za Ford Focus MK2 Review.', 42),
(75, '1', '2020-09-08 09:26:37', 'Nice review.', 50),
(78, '1', '2020-09-08 10:23:24', 'MK4 is amazin! Love it', 50),
(80, '1', '2020-09-08 11:13:11', 'Genijalno!', 40);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `author_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `cName` varchar(45) NOT NULL,
  `snippet` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author_id`, `content`, `cName`, `snippet`) VALUES
(40, 'Ford Focus MK2', 1, 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and most luxury cars under the Lincoln brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in Jiangling Motors. It also has joint-ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.\r\n\r\n\r\nFord Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and most luxury cars under the Lincoln brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in Jiangling Motors. It also has joint-ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.\r\n\r\n\r\nFord Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and most luxury cars under the Lincoln brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in Jiangling Motors. It also has joint-ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.', 'News', 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and most luxury cars under the Lincoln brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in Jiangling Motors. It also has joint-ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.\r\n'),
(50, 'Ford Focus MK4 Review', 1, 'On April 10 2018 Ford unveiled the Euorpean and Asisan-market version of the forth geneeration of Focus to mark 20th anniversary. As in the previous generation, model is aveilable with sedan, hatchback and estate bodystyles. \r\n\r\nThe exterior features a sportier design, while Ford described its interior as being simpler. The company also emphasized technology featured in the new model, including the Sync 3 infotainment system, FordPass Connect, and the CoPilot360 driver assistance suite.\r\n\r\nFord limited sales of fourth generation Focus in its 4-door saloon form in Estonia, Latvia, Lithuania, Serbia, Montenegro, North Macedonia, Albania, Bulgaria, Romania, Moldova, Turkey, Cyprus as well as many Asian and African countries. Ford no longer sells the Focus in Russia, Belarus, Kazakhstan, and Israel due to a broader reorganization of their European branch.\r\n\r\nOn April 10 2018 Ford unveiled the Euorpean and Asisan-market version of the forth geneeration of Focus to mark 20th anniversary. As in the previous generation, model is aveilable with sedan, hatchback and estate bodystyles. \r\n\r\nThe exterior features a sportier design, while Ford described its interior as being simpler. The company also emphasized technology featured in the new model, including the Sync 3 infotainment system, FordPass Connect, and the CoPilot360 driver assistance suite.\r\n\r\nFord limited sales of fourth generation Focus in its 4-door saloon form in Estonia, Latvia, Lithuania, Serbia, Montenegro, North Macedonia, Albania, Bulgaria, Romania, Moldova, Turkey, Cyprus as well as many Asian and African countries. Ford no longer sells the Focus in Russia, Belarus, Kazakhstan, and Israel due to a broader reorganization of their European branch.\r\n\r\nOn April 10 2018 Ford unveiled the Euorpean and Asisan-market version of the forth geneeration of Focus to mark 20th anniversary. As in the previous generation, model is aveilable with sedan, hatchback and estate bodystyles. \r\n\r\nThe exterior features a sportier design, while Ford described its interior as being simpler. The company also emphasized technology featured in the new model, including the Sync 3 infotainment system, FordPass Connect, and the CoPilot360 driver assistance suite.\r\n\r\nFord limited sales of fourth generation Focus in its 4-door saloon form in Estonia, Latvia, Lithuania, Serbia, Montenegro, North Macedonia, Albania, Bulgaria, Romania, Moldova, Turkey, Cyprus as well as many Asian and African countries. Ford no longer sells the Focus in Russia, Belarus, Kazakhstan, and Israel due to a broader reorganization of their European branch.\r\n\r\n', 'Reviews', 'On April 10 2018 Ford unveiled the Euorpean and Asisan-market version of the forth geneeration of Focus to mark 20th anniversary. As in the previous generation, model is aveilable with sedan, hatchback and estate bodystyles. \r\n\r\nThe exterior features a sportier design, while Ford described its interior as being simpler. The company also emphasized technology featured in the new model, including the Sync 3 infotainment system, FordPass Connect, and the CoPilot360 driver assistance suite.\r\n\r\nThe exterior features a sportier design, while Ford described its interior as being simpler. The company also emphasized technology featured in the new model, including the Sync 3 infotainment system, FordPass Connect, and the CoPilot360 driver assistance suite.\r\n\r\nFord limited sales of fourth generation Focus in its 4-door saloon form in Estonia, Latvia, Lithuania, Serbia, Montenegro, North Macedonia, Albania, Bulgaria, Romania, Moldova, Turkey, Cyprus as well as many Asian and African countries. Ford no longer sells the Focus in Russia, Belarus, Kazakhstan, and Israel due to a broader reorganization of their European branch.\r\n'),
(51, 'How to wash a car DIY', 1, 'Washing your car by hand can be a relaxing and satisfying activity. Washing your own car will save you the money that would otherwise be spent paying for a car wash, and allows you to give extra attention to especially dirty areas of your vehicle. Commercial car washes use abrasive materials that may scratch or damage your cars paint, so washing your own car by hand will allow you to keep the vehicle and paint job in pristine condition. To wash your own car by hand, youll need a flat, shady patch of concrete, and access to plenty of water and a hose. Youll need to wash your entire car in one session, which usually takes an hour or two depending on the size of your vehicle and how dirty it is.\r\n\r\nPark the car out of direct sunlight. This prevents premature drying which can leave splotches on the paint. Washing your car in direct sunlight also runs the risk of your car becoming hot while you wash it, which will result in water evaporating more quickly and making the cleaning process more difficult.[1]\r\nCheck that all windows are closed and retract the antenna, in order to prevent water from getting inside the car or the antenna from being snapped off.\r\nPull the windshield wipers away from the windshield until they click into their propped position, away from the glass.\r\n\r\n Set everything you will need near the car. This includes cleaning material: the car wash detergent that you will use for cleaning, a large supply of water (depending on the size of the vehicle), three buckets (two for washing, one for rinsing), a hose, and microfiber cloths or towels to dry your car.[2] Youll also want to have two or three wash mitts on hand, plus a large sponge, a stiff scrubbing brush, and maybe a separate brush to scrub your tires with.\r\n\r\n Be prepared to get wet and soapy. Wear the appropriate work clothes: shoes, shorts and rubber sandals when the weather permits, long pants and rubber boots when it is a bit chilly.\r\n You can purchase car-specific detergent at your local auto parts store. When filling the two wash buckets with detergent, be careful to follow the manufacturers recommendations concerning the suggested water-to-detergent ratio.\r\n Fill a bucket with water. Then add car wash soap in the quantity directed on its bottle. This will be your washing bucket. If your car is very dirty or if youd like to have a washing bucket for the body of your car and a separate washing bucket for washing your cars wheel wells, you can fill two buckets with water and soap.[3] \r\n\r\n\r\n', 'Tutorials', 'Washing your car by hand can be a relaxing and satisfying activity. Washing your own car will save you the money that would otherwise be spent paying for a car wash, and allows you to give extra attention to especially dirty areas of your vehicle. Commercial car washes use abrasive materials that may scratch or damage your cars paint, so washing your own car by hand will allow you to keep the vehicle and paint job in pristine condition. To wash your own car by hand, youll need a flat, shady patch of concrete, and access to plenty of water and a hose. Youll need to wash your entire car in one session, which usually takes an hour or two depending on the size of your vehicle and how dirty it is.\r\n'),
(63, 'First generation (1998–2007)', 1, 'Ford of Europe introduced the Focus in 1998 to the European market as a replacement for the Ford Escort. The decision to name the new car the \"Ford Focus\" was made in early 1998, as Ford s senior management had been planning to keep the \"Escort\" nameplate for its new generation of small family cars. A last-minute problem arose in July 1998 when a Cologne court, responding to a case brought by the publisher Burda, ordered Ford to avoid the name \"Focus\" for the cars in the German market since the name was already taken by one of its magazines (Focus).[3] This eleventh-hour dispute was resolved, however, and the car was launched with the name Focus. The Focus MK1 was awarded the 1999 European Car of the Year award.[4] The project manager for the Ford Focus at Dunton was Rose Mary Farenden.\r\n\r\nFord of North America began marketing the Focus in September 1999 for the 2000 model year, with some changes from the European version. The car was launched as a three-door hatchback, four-door sedan, and five-door wagon; a five-door hatchback debuted in 2001.[5]\r\n\r\nIn 2002, Ford launched its highest performance version of the Focus, called the Focus RS. It came with a 2.0-litre turbocharged Duratec RS engine, a Quaife ATB limited-slip differential, Brembo brakes, and a host of other performance changes, combined with a much more aggressive appearance, and was available only in Fords Imperial blue. 70% of the components found on the Focus RS were unique, revised or uprated. This original Focus RS was only available in Europe with a limited run of 4501 cars being built; just under half (2147) of these were sold in the UK.\r\n\r\nFor decades, in the U.S., small cars like the Focus were seen as a tool to draw in younger buyers looking for a cheap basic transportation and to increase auto maker fleet average fuel economies to meet U.S. federal standards.[6] Ford was said not to concern about losing money on the Focus so the company could sell gas guzzlers for big profits.[6] However, recent sales of new Focuss have been able to maintain lower or overall discounting incentive rates than many competing vehicles in its class.[7] Many industry insiders view cars like the Focus as compliance cars because of their role in helping to bring up the corporate fleet average fuel economy to meet current fuel-economy standards.[8]', 'Reviews', 'Ford of Europe introduced the Focus in 1998 to the European market as a replacement for the Ford Escort. The decision to name the new car the \"Ford Focus\" was made in early 1998, as Fords senior management had been planning to keep the \"Escort\" nameplate for its new generation of small family cars. A last-minute problem arose in July 1998 when a Cologne court, responding to a case brought by the publisher Burda, ordered Ford to avoid the name \"Focus\" for the cars in the German market since the name was already taken by one of its magazines (Focus).[3] This eleventh-hour dispute was resolved, however, and the car was launched with the name Focus. The Focus MK1 was awarded the 1999 European Car of the Year award.[4] The project manager for the Ford Focus at Dunton was Rose Mary Farenden.\r\n'),
(70, 'Ford Focus third generation', 1, 'The design was built on Fords Kinetic Design. The lights at the front have a different shape. The trapezoidal grille has triangular features. At the rear, the hatchback tail lights are positioned lower, similar to the Ford Fiesta. The interior has been changed from the second generation in the NA and International versions. Ford wanted to make the Focus more upmarket so it offers two types of central consoles: the basic is associated with smaller engines and the premium is available to more powerful engines.\r\n\r\nThis generation of Focus incorporated a redesigned cabin, changed materials, and a new infotainment system. Following the industry trend towards decontenting, and in keeping with the sedans downmarket \"economy car\" image vs. the \"premium\" hatchback, the earlier sedans space-saving gas strut trunk hinges are replaced with cheaper, intrusive goose neck hinges. The Focus also has Fords patented capless fuel tank, which doesnt require a cap to prevent siphoning. \r\nThe design was built on Fords Kinetic Design. The lights at the front have a different shape. The trapezoidal grille has triangular features. At the rear, the hatchback tail lights are positioned lower, similar to the Ford Fiesta. The interior has been changed from the second generation in the NA and International versions. Ford wanted to make the Focus more upmarket so it offers two types of central consoles: the basic is associated with smaller engines and the premium is available to more powerful engines.\r\n\r\nThis generation of Focus incorporated a redesigned cabin, changed materials, and a new infotainment system. Following the industry trend towards decontenting, and in keeping with the sedans downmarket \"economy car\" image vs. the \"premium\" hatchback, the earlier sedans space-saving gas strut trunk hinges are replaced with cheaper, intrusive goose neck hinges. The Focus also has Fords patented capless fuel tank, which doesnt require a cap to prevent siphoning. ', 'Reviews', 'The design was built on Fords Kinetic Design. The lights at the front have a different shape. The trapezoidal grille has triangular features. At the rear, the hatchback tail lights are positioned lower, similar to the Ford Fiesta. The interior has been changed from the second generation in the NA and International versions. Ford wanted to make the Focus more upmarket so it offers two types of central consoles: the basic is associated with smaller engines and the premium is available to more powerful engines.\r\n\r\n'),
(71, 'FORD ANNOUNCES GOAL TO DONATE 100 MILLION MASKS', 1, 'DEARBORN, Mich., Sept. 4, 2020 – Following completion of its 50,000th ventilator to help clinicians treat COVID-19 patients, Ford is pivoting to target production of 100 million masks through 2021 for communities across the U.S. with limited access to personal protective equipment. The company, currently manufacturing 2.5 million medical-grade masks a week for its employees and at-risk communities, is growing the number of mask-making machines by mid- to late-October to increase production and deliver on its goal.\r\n\r\nFord is working with Ford Motor Company Fund, the company s philanthropic arm, to identify donation recipients across the U.S. through a network of nonprofit and state and local partners. The company is focusing on military veterans, schools, food banks and African American communities, among others.\r\n\r\n“As the pandemic continues, so does the spirit, grit and dedication of our Ford team and UAW partners to step up and contribute to help our country,” said Jim Hackett, Ford president and CEO. “Working together, we are setting a goal of producing 100 million masks for families, children, individuals and communities who need them most.”\r\n\r\nThis announcement comes ahead of a new short documentary by award-winning director Peter Berg (“Friday Night Lights,” “Patriots Day,” “Lone Survivor”) titled “On the Line.” Premiering on YouTube at 2 p.m. EDT today, the documentary focuses on Fords Project Apollo, the internal codename for the company s all-out effort to design and manufacture personal protective equipment, including powered air-purifying respirators, face shields, medical gowns for healthcare workers and first responders, plus ventilators for COVID-19 patients.\r\n\r\nBergs deep dive into the story features members of Ford s Project Apollo team – from the engineers who led the project to the UAW team members who volunteered to work at the height of the pandemic.\r\n\r\nTo commemorate release of the documentary ahead of Labor Day, the Aspen Institute, as part of the “Aspen Ideas Now” virtual speaker series, will feature a conversation with Hackett, UAW President Rory Gamble and Berg, exploring the state of the American labor force, the importance of a strong automotive manufacturing base and the role American corporations can play in times of need. A trailer for the documentary is available now and can be found here and a link to todays 2 p.m. Aspen conversation is here.', 'News', 'DEARBORN, Mich., Sept. 4, 2020 – Following completion of its 50,000th ventilator to help clinicians treat COVID-19 patients, Ford is pivoting to target production of 100 million masks through 2021 for communities across the U.S. with limited access to personal protective equipment. The company, currently manufacturing 2.5 million medical-grade masks a week for its employees and at-risk communities, is growing the number of mask-making machines by mid- to late-October to increase production and deliver on its goal.\r\n\r\nFord is working with Ford Motor Company Fund, the company s philanthropic arm, to identify donation recipients across the U.S. through a network of nonprofit and state and local partners. The company is focusing on military veterans, schools, food banks and African American communities, among others.\r\n\r\n“As the pandemic continues, so does the spirit, grit and dedication of our Ford team and UAW partners to step up and contribute to help our country,” said Jim Hackett, Ford president and CEO. “Working together, we are setting a goal of producing 100 million masks for families, children, individuals and communities who need them most.”'),
(72, 'Auto Repair Essentials', 1, 'Mechanics require tools and there are a few essentials that youll need to make most car repairs. A beginnes set of tools can include screwdrivers, a few wrenches, pliers, and a good pair of channel locks. Add a jack, penetrating oil, and a little safety gear and youre good to go. What you dont have means a trip to the parts store, but eventually youll have a garage full after enough repairs, so dont worry about that. You will also want to get your hands on a good car repair manual. A manual thats specific to your model of car can give you great insight into where parts are located and any special functions or techniques you need to use. \r\n\r\nRemember, while cars are essentially the same, different makes and models do have subtle differences that can lead to a lot of frustration if youre using generic tips. The other thing to consider is when its okay to buy used auto parts. Yes, you can save some cash at the junkyard, but youre also taking a risk that the part wont work. In the end, a bad choice can end up costing you more money. In an Emergency Youre driving down the road and a tire blows out. Or, your car wont start in the morning and you need to get to work. Do you know what to do in these emergencies? Its a good idea for every driver to know how to jump-start a dead battery because calling a tow truck in to do it can waste both time and money. Also, this can be especially tricky on some newer cars. Do yourself a favor and familiarize yourself with the procedures on your car before it happens. In case you cant get your car started, you might be able to get a friend or family member to tow you instead of calling the truck. Learning how to properly use tow straps is key to making this happen without damaging either car and to keep everyone safe. Diagnosing Common Problems Whats leaking under my car? Is the color of my exhaust okay? Should my engine sound like that? Weve all asked these questions and you can get a pretty good idea of whts causing many problems without going to the mechanic. When it comes to fluids, you can usually identify them by color. \r\n\r\n\r\nGrab a paper towel and dab it in the leak. If its green or pink, youre probably looking at coolant. Power steering fluid is yellowish and transmission fluid is a redder color. Every fluid has a distinct color, so this is a pretty easy one to diagnose. Your exhaust can also lead you to necessary repairs. White, blue, or black smoke coming out of your exhaust will each point you in a different direction. It may be a problem with engine valves or your head gasket and its best not to delay when you see these problems because they can get worse. In addition, you should be listening for unusual sounds and which part of the car theyre coming from. There are also common signs that youre low on power steering fluid and when something may be wrong with your brakes. Other common car problems include overheating and that unbearable moment when your car simply wont turn over.', 'Tutorials', 'Mechanics require tools and there are a few essentials that youll need to make most car repairs. A beginnes set of tools can include screwdrivers, a few wrenches, pliers, and a good pair of channel locks. Add a jack, penetrating oil, and a little safety gear and youre good to go. What you dont have means a trip to the parts store, but eventually youll have a garage full after enough repairs, so dont worry about that. You will also want to get your hands on a good car repair manual. A manual thats specific to your model of car can give you great insight into where parts are located and any special functions or techniques you need to use. \r\n\r\nRemember, while cars are essentially the same, different makes and models do have subtle differences that can lead to a lot of frustration if youre using generic tips. The other thing to consider is when its okay to buy used auto parts. Yes, you can save some cash at the junkyard, but youre also taking a risk that the part wont work. In the end, a bad choice can end up costing you more money. In an Emergency Youre driving down the road and a tire blows out. Or, your car wont start in the morning and you need to get to work. Do you know what to do in these emergencies? Its a good idea for every driver to know how to jump-start a dead battery because calling a tow truck in to do it can waste both time and money. Also, this can be especially tricky on some newer cars. Do yourself a favor and familiarize yourself with the procedures on your car before it happens. In case you cant get your car started, you might be able to get a friend or family member to tow you instead of calling the truck. Learning how to properly use tow straps is key to making this happen without damaging either car and to keep everyone safe. Diagnosing Common Problems Whats leaking under my car? Is the color of my exhaust okay? Should my engine sound like that? Weve all asked these questions and you can get a pretty good idea of whts causing many problems without going to the mechanic. When it comes to fluids, you can usually identify them by color. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  `userType` varchar(20) NOT NULL DEFAULT 'user',
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `userType`, `pwd`) VALUES
(1, 'admin', 'admin', '12345'),
(3, 'petroley', 'user', '123'),
(4, 'merjem', 'admin', '123'),
(27, 'anton1', 'user', '123'),
(28, 'fiesta1', 'user', '123'),
(29, 'cehov', 'user', '123'),
(30, 'fjodor', 'admin', '345'),
(31, 'BruceLee', 'user', '123'),
(32, 'ado', 'user', '123'),
(33, 'jack', 'user', '123'),
(34, 'Wick', 'user', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

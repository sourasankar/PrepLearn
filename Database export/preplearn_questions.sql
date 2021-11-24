-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u708245423_kootty420`
--

-- --------------------------------------------------------

--
-- Table structure for table `preplearn_questions`
--

CREATE TABLE `preplearn_questions` (
  `question_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `option1` varchar(1000) NOT NULL,
  `option2` varchar(1000) NOT NULL,
  `option3` varchar(1000) NOT NULL,
  `option4` varchar(1000) NOT NULL,
  `answer` int(11) NOT NULL,
  `explanation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preplearn_questions`
--

INSERT INTO `preplearn_questions` (`question_id`, `sub_category_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `explanation`) VALUES
(1, 27, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', 4, '1'),
(2, 27, 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', 2, '2'),
(3, 27, 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', '200 m', '225 m', '245 m', '250 m', 3, '3'),
(4, 1, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', '3.6', '7.2', '8.4', '10', 2, '4'),
(5, 1, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:', '300 kmph', '360 kmph\r\n', '600 kmph\r\n', '720 kmph\r\n', 4, '5'),
(6, 1, '	\r\nIf a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:', '50 km\r\n', '56 km\r\n', '70 km\r\n', '80 km\r\n', 1, '6'),
(7, 2, '	\r\nTwo ships are sailing in the sea on the two sides of a lighthouse. The angle of elevation of the top of the lighthouse is observed from the ships are 30° and 45° respectively. If the lighthouse is 100 m high, the distance between the two ships is:', '173 m\r\n', '200 m\r\n', '273 m\r\n', '300 m\r\n', 3, '7'),
(8, 2, 'The angle of elevation of a ladder leaning against a wall is 60° and the foot of the ladder is 4.6 m away from the wall. The length of the ladder is:', '2.3 m\r\n', '4.6 m', '7.8 m', '9.2 m\r\n', 4, '8'),
(9, 2, '	\r\nFrom a point P on a level ground, the angle of elevation of the top tower is 30°. If the tower is 100 m high, the distance of point P from the foot of the tower is:', '149 m\r\n', '156 m\r\n', '173 m\r\n', '200 m\r\n', 3, '9'),
(10, 3, 'A, B and C can do a piece of work in 20, 30 and 60 days respectively. In how many days can A do the work if he is assisted by B and C on every third day?', '12 days\r\n', '15 days\r\n', '16 days\r\n', '18 days\r\n', 2, '10'),
(11, 3, 'A alone can do a piece of work in 6 days and B alone in 8 days. A and B undertook to do it for Rs. 3200. With the help of C, they completed the work in 3 days. How much is to be paid to C?', 'Rs. 375\r\n', 'Rs. 400\r\n', 'Rs. 600\r\n', 'Rs. 800\r\n', 2, '11'),
(12, 3, '	\r\nIf 6 men and 8 boys can do a piece of work in 10 days while 26 men and 48 boys can do the same in 2 days, the time taken by 15 men and 20 boys in doing the same type of work will be:', '4 days', '5 days', '6 days', '7 days', 1, '12'),
(13, 4, 'A sum of money at simple interest amounts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:', 'Rs. 650\r\n', 'Rs. 690\r\n', 'Rs. 698\r\n', 'Rs. 700\r\n', 3, '13'),
(14, 4, '	\r\nMr. Thomas invested an amount of Rs. 13,900 divided in two different schemes A and B at the simple interest rate of 14% p.a. and 11% p.a. respectively. If the total amount of simple interest earned in 2 years be Rs. 3508, what was the amount invested in Scheme B?', 'Rs. 6400\r\n', 'Rs. 6500\r\n', 'Rs. 7200\r\n', 'Rs. 7500\r\n', 1, '14'),
(15, 4, 'A sum fetched a total simple interest of Rs. 4016.25 at the rate of 9 p.c.p.a. in 5 years. What is the sum?', 'Rs. 4462.50\r\n', 'Rs. 8032.50\r\n', 'Rs. 8900\r\n', 'Rs. 8925\r\n', 4, '15'),
(16, 5, 'A bank offers 5% compound interest calculated on half-yearly basis. A customer deposits Rs. 1600 each on 1st January and 1st July of a year. At the end of the year, the amount he would have gained by way of interest is:', 'Rs. 120\r\n', 'Rs. 121\r\n', 'Rs. 122\r\n', 'Rs. 123\r\n', 2, '16'),
(17, 5, '	\r\nThe difference between simple and compound interests compounded annually on a certain sum of money for 2 years at 4% per annum is Re. 1. The sum (in Rs.) is:', '625\r\n', '630\r\n', '640', '650', 1, '17'),
(18, 5, '	\r\nThere is 60% increase in an amount in 6 years at simple interest. What will be the compound interest of Rs. 12,000 after 3 years at the same rate?', 'Rs. 2160\r\n', 'Rs. 3120\r\n', 'Rs. 3972\r\n', 'Rs. 6240\r\n', 3, '18'),
(19, 6, 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:\r\n\r\n', '15', '16', '18', '25', 2, '19'),
(20, 6, 'In a certain store, the profit is 320% of the cost. If the cost increases by 25% but the selling price remains constant, approximately what percentage of the selling price is the profit?\r\n\r\n', '30%\r\n', '70%\r\n', '100%\r\n', '250%\r\n', 2, '20'),
(21, 6, 'A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?\r\n\r\n', '3', '4', '5', '6', 3, '21'),
(22, 7, 'A and B invest in a business in the ratio 3 : 2. If 5% of the total profit goes to charity and A\'s share is Rs. 855, the total profit is:\r\n\r\n', 'Rs. 1425\r\n', 'Rs. 1500\r\n', 'Rs. 1537.50\r\n', 'Rs. 1576\r\n', 2, '22'),
(23, 7, 'A, B and C jointly thought of engaging themselves in a business venture. It was agreed that A would invest Rs. 6500 for 6 months, B, Rs. 8400 for 5 months and C, Rs. 10,000 for 3 months. A wants to be the working member for which, he was to receive 5% of the profits. The profit earned was Rs. 7400. Calculate the share of B in the profit.\r\n\r\n', 'Rs. 1900\r\n', 'Rs. 2660\r\n', 'Rs. 2800\r\n', 'Rs. 2840\r\n', 2, '23'),
(24, 7, 'A, B, C subscribe Rs. 50,000 for a business. A subscribes Rs. 4000 more than B and B Rs. 5000 more than C. Out of a total profit of Rs. 35,000, A receives:\r\n\r\n', 'Rs. 8400\r\n', 'Rs. 11,900\r\n', 'Rs. 13,600\r\n', 'Rs. 14,700\r\n', 4, '24'),
(25, 8, 'Two students appeared at an examination. One of them secured 9 marks more than the other and his marks was 56% of the sum of their marks. The marks obtained by them are:\r\n\r\n', '39, 30\r\n', '41, 32\r\n', '42, 33\r\n', '43, 34\r\n', 3, '25'),
(26, 8, 'A fruit seller had some apples. He sells 40% apples and still has 420 apples. Originally, he had:\r\n\r\n', '588 apples\r\n', '600 apples\r\n', '672 apples\r\n', '700 apples\r\n', 4, '26'),
(27, 8, 'What percentage of numbers from 1 to 70 have 1 or 9 in the unit\'s digit?\r\n\r\n', '1', '14', '20', '21', 3, '27'),
(28, 1, 'A train can travel 50% faster than a car. Both start from point A at the same time and reach point B 75 kms away from A at the same time. On the way, however, the train lost about 12.5 minutes while stopping at the stations. The speed of the car is:', '100 kmph', '110 kmph\r\n', '120 kmph\r\n', '130 kmph\r\n', 3, '28'),
(29, 1, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?', '9', '10', '12', '20', 2, '29'),
(30, 1, '	\r\nIn a flight of 600 km, an aircraft was slowed down due to bad weather. Its average speed for the trip was reduced by 200 km/hr and the time of flight increased by 30 minutes. The duration of the flight is:', '1 hour\r\n', '2 hours\r\n', '3 hours\r\n', '4 hours\r\n', 1, '30'),
(31, 1, 'A man complete a journey in 10 hours. He travels first half of the journey at the rate of 21 km/hr and second half at the rate of 24 km/hr. Find the total journey in km.', '220 km', '224 km\r\n', '230 km\r\n', '234 km\r\n', 2, '31'),
(32, 1, '	\r\nThe ratio between the speeds of two trains is 7 : 8. If the second train runs 400 km in 4 hours, then the speed of the first train is:', '70 km/hr\r\n', '75 km/hr\r\n', '84 km/hr\r\n', '87.5 km/hr\r\n', 4, '32'),
(33, 1, '	\r\nA man on tour travels first 160 km at 64 km/hr and the next 160 km at 80 km/hr. The average speed for the first 320 km of the tour is:', '35.55 km/hr\r\n', '36 km/hr\r\n', '71.11 km/hr\r\n', '71 km/hr\r\n', 3, '33'),
(34, 1, 'In covering a distance of 30 km, Abhay takes 2 hours more than Sameer. If Abhay doubles his speed, then he would take 1 hour less than Sameer. Abhay\'s speed is:', '5 kmph\r\n', '6 kmph\r\n', '6.25 kmph\r\n', '7.5 kmph\r\n', 1, '34'),
(35, 3, 'A can do a piece of work in 4 hours; B and C together can do it in 3 hours, while A and C together can do it in 2 hours. How long will B alone take to do it?', '8 hours\r\n', '10 hours\r\n', '12 hours\r\n', '24 hours\r\n', 3, '35'),
(36, 3, '	\r\nA can do a certain work in the same time in which B and C together can do it. If A and B together could do it in 10 days and C alone in 50 days, then B alone could do it in:', '15 days\r\n', '20 days\r\n', '25 days\r\n', '30 days\r\n', 3, '36'),
(37, 3, 'A does 80% of a work in 20 days. He then calls in B and they together finish the remaining work in 3 days. How long B alone would take to do the whole work?', '23 days\r\n', '37 days\r\n', '37(1/2)\r\n', '40 days\r\n', 3, '37'),
(38, 3, 'A machine P can print one lakh books in 8 hours, machine Q can print the same number of books in 10 hours while machine R can print them in 12 hours. All the machines are started at 9 A.M. while machine P is closed at 11 A.M. and the remaining two machines complete work. Approximately at what time will the work (to print one lakh books) be finished ?', '11:30 A.M.\r\n', '12 noon\r\n', '12:30 P.M.\r\n', '1:00 P.M.\r\n', 4, '38'),
(39, 3, 'A can finish a work in 18 days and B can do the same work in 15 days. B worked for 10 days and left the job. In how many days, A alone can finish the remaining work?', '5', '10', '6', '8', 3, '39'),
(40, 3, '	\r\n4 men and 6 women can complete a work in 8 days, while 3 men and 7 women can complete it in 10 days. In how many days will 10 women complete it?', '35', '40', '45', '50', 2, '40'),
(41, 3, '10 women can complete a work in 7 days and 10 children take 14 days to complete the work. How many days will 5 women and 10 children take to complete the work?', '3', '5', '7', '10', 3, '41'),
(42, 4, '	\r\nHow much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?', '3.5 years\r\n', '4 years\r\n', '4.5 years\r\n', '5 years\r\n', 2, '42'),
(43, 4, '	\r\nReena took a loan of Rs. 1200 with simple interest for as many years as the rate of interest. If she paid Rs. 432 as interest at the end of the loan period, what was the rate of interest?', '3.6\r\n', '6', '18\r\n', 'Cannot be determined\r\n', 2, '43'),
(44, 5, '	\r\nWhat is the difference between the compound interests on Rs. 5000 for 1(1/2) years at 4% per annum compounded yearly and half-yearly?', 'Rs. 2.04', 'Rs. 3.06\r\n', 'Rs. 4.80\r\n', 'Rs. 8.30\r\n', 1, '44'),
(45, 5, 'The compound interest on Rs. 30,000 at 7% per annum is Rs. 4347. The period (in years) is:', '2', '10', '3', '4', 1, '45'),
(46, 6, 'The percentage profit earned by selling an article for Rs. 1920 is equal to the percentage loss incurred by selling the same article for Rs. 1280. At what price should the article be sold to make 25% profit?', 'Rs. 2000\r\n', 'Rs. 2200\r\n', 'Rs. 2400\r\n', 'Data inadequate\r\n', 1, '46'),
(47, 6, 'A shopkeeper expects a gain of 22.5% on his cost price. If in a week, his sale was of Rs. 392, what was his profit?\r\n\r\n', 'Rs. 18.20', 'Rs. 70', 'Rs. 72', 'Rs. 88.25', 3, '47'),
(48, 7, 'Three partners shared the profit in a business in the ratio 5 : 7 : 8. They had partnered for 14 months, 8 months and 7 months respectively. What was the ratio of their investments?', '5 : 7 : 8', '20 : 49 : 64', '38 : 28 : 21', 'None of these', 2, '48'),
(49, 7, '	\r\nA starts business with Rs. 3500 and after 5 months, B joins with A as his partner. After a year, the profit is divided in the ratio 2 : 3. What is B\'s contribution in the capital?', 'Rs. 7500\r\n', 'Rs. 8000\r\n', 'Rs. 8500\r\n', 'Rs. 9000\r\n', 4, '49'),
(50, 8, '	\r\nIf A = x% of y and B = y% of x, then which of the following is true?', 'A is smaller than B.', 'A is greater than B', 'Relationship between A and B cannot be determined.', 'None of these', 4, '50'),
(51, 8, 'If 20% of a = b, then b% of 20 is the same as:', '4% of a', '5% of a', '20% of a', 'None of these', 1, '51'),
(52, 27, 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:', '1 : 3', '3 : 2', '3 : 4', 'None of these', 2, '52'),
(53, 27, 'A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?', '120 m\r\n', '240 m\r\n', '300 m\r\n', 'None of these\r\n', 2, '53'),
(54, 9, 'Read each sentence to find out whether there is any grammatical error in it.', 'We discussed about the problem so thoroughly', 'on the eve of the examination', 'that I found it very easy to work it out.', 'No error.', 1, '54'),
(55, 9, 'Read each sentence to find out whether there is any grammatical error in it.', 'An Indian ship', 'laden with merchandise\r\n', 'got drowned in the Pacific Ocean.', 'No error.', 3, '55'),
(56, 9, 'Read each sentence to find out whether there is any grammatical error in it.', 'I could not put up in a hotel', 'because the boarding and lodging charges', 'were exorbitant.', 'No error.', 1, '56'),
(57, 9, 'Read each sentence to find out whether there is any grammatical error in it.', 'The Indian radio', 'which was previously controlled by the British rulers', 'is free now from the narrow vested interests.\r\n', 'No error.', 3, '57'),
(58, 9, 'Read each sentence to find out whether there is any grammatical error in it.', 'If I had known', 'this yesterday\r\n', 'I will have helped him.', 'No error.', 3, '58'),
(59, 10, 'CORPULENT (Synonym?)', 'Lean', 'Gaunt', 'Emaciated', 'Obese', 4, 'no'),
(60, 10, 'BRIEF (Synonym?)', 'Limited', 'Small', 'Little', 'Short', 4, 'no'),
(61, 10, 'EMBEZZLE (Synonym?)', 'Misappropriate', 'Balance', 'Remunerate', 'Clear\r\n', 1, 'no'),
(62, 10, 'VENT (Synonym?)', 'Opening', 'Stodge', 'End', 'Past tense of go\r\n', 1, 'no'),
(63, 10, 'AUGUST (Synonym?)', 'Common', 'Ridiculous', 'Dignified', 'Petty', 3, 'no'),
(64, 10, 'CANNY (Synonym?)', 'Obstinate', 'Handsome', 'Clever\r\n', 'Stout', 3, 'no'),
(65, 10, 'ALERT (Synonym?)', 'Energetic', 'Observant', 'Intelligent', 'Watchful', 4, 'no'),
(66, 11, 'ENORMOUS (Antonym?)', 'Soft', 'Average', 'Tiny', 'Weak', 3, 'no'),
(67, 11, 'COMMISSIONED (Antonym?)', 'Started', 'Closed', 'Finished', 'Terminated', 4, 'no'),
(68, 11, 'ARTIFICIAL (Antonym?)', 'Red', 'Natural', 'Truthful', 'Solid', 2, 'no'),
(69, 11, 'EXODUS (Antonym?)', 'Influx', 'Home-coming\r\n', 'Return\r\n', 'Restoration', 1, 'no'),
(70, 11, 'RELINQUISH (Antonym?)', 'Abdicate', 'Renounce', 'Possess', 'Deny', 3, 'no'),
(71, 11, 'EXPAND (Antonym?)', 'Convert', 'Condense', 'Congest', 'Conclude', 2, 'no'),
(72, 11, 'MORTAL (Antonym?)', 'Divine', 'Immortal', 'Spiritual', 'Eternal', 2, 'no'),
(73, 11, 'QUIESCENT (Antonym?)', 'Active', 'Dormant', 'Weak', 'Unconcerned\r\n', 1, 'no'),
(74, 11, 'OBEYING (Antonym?)', 'Ordering', 'Following', 'Refusing', 'Contradicting', 1, 'no'),
(75, 11, 'FRAUDULENT (Antonym?)', 'Candid', 'Direct', 'Forthright', 'Genuine', 4, 'no'),
(76, 12, 'Find the correctly spelt word.', 'Efficient', 'Treatmeant', 'Beterment', 'Employd', 1, 'no'),
(77, 12, 'Find the correctly spelt words.', 'Foreign', 'Foreine', 'Fariegn', 'Forein', 1, 'no'),
(78, 12, 'Find the correctly spelt words.', 'Ommineous', 'Omineous', 'Ominous', 'Omenous', 3, 'no'),
(79, 12, 'Find the correctly spelt words.', 'Pessenger', 'Passenger', 'Pasanger', 'Pesanger', 2, 'no'),
(80, 12, 'Find the correctly spelt words.', 'Benefitted', 'Benifited', 'Benefited', 'Benefeted', 3, 'no'),
(81, 12, 'Find the correctly spelt words.', 'Treachrous', 'Trecherous', 'Trechearous', 'Treacherous', 4, 'no'),
(82, 12, 'Find the correctly spelt words.', 'Forcast', 'Forecaste', 'Forcaust', 'Forecast', 4, 'no'),
(83, 12, 'Find the correctly spelt words.', 'Rigerous', 'Rigourous', 'Regerous', 'Rigorous', 4, 'no'),
(84, 12, 'Find the correctly spelt words.', 'Palete', 'Palet', 'Palate', 'Pelate', 3, 'no'),
(85, 12, 'Find the correctly spelt words.', 'Bouquete', 'Bouquette', 'Bouquet', 'Boqquet', 3, 'no'),
(86, 13, 'When he <br>\r\nP :	did not know<br>\r\nQ :	he was nervous and<br>\r\nR :	heard the hue and cry at midnight<br>\r\nS :	what to do<br>\r\nThe Proper sequence should be:', 'RQPS', 'QSPR', 'SQPR', 'PQRS', 1, 'no'),
(87, 13, 'It has been established that<br>\r\nP :	Einstein was<br>\r\nQ :	although a great scientist<br>\r\nR :	weak in arithmetic<br>\r\nS :	right from his school days<br>\r\nThe Proper sequence should be:', 'SRPQ', 'QPRS', 'QPSR', 'RQPS', 2, 'no'),
(88, 13, 'Then<br>\r\nP :	it struck me<br>\r\nQ :	of course<br>\r\nR :	suitable it was<br>\r\nS :	how eminently<br>\r\nThe Proper sequence should be:', 'SPQR', 'QSRP', 'PSRQ', 'QPSR', 3, 'no'),
(89, 13, 'I read an advertisement that said<br>\r\nP :	posh, air-conditioned<br>\r\nQ :	gentleman of taste<br>\r\nR :	are available for<br>\r\nS :	fully furnished rooms<br>\r\nThe Proper sequence should be:', 'PQRS', 'PSRQ', 'PSQR', 'SRPQ', 2, 'no'),
(90, 13, 'Since the beginning of history<br>\r\nP :	have managed to catch<br>\r\nQ :	the Eskimos and Red Indians<br>\r\nR :	by a very difficulty method<br>\r\nS :	a few specimens of this aquatic animal<br>\r\nThe Proper sequence should be:', 'QRPS', 'SQPR', 'SQRP', 'QPSR', 4, 'no'),
(91, 14, 'The workers are <u><i>hell bent at getting</i></u> what is due to them. (Sentence Improvement)', 'hell bent on getting\r\n', 'hell bent for getting\r\n', 'hell bent upon getting\r\n', 'No improvement\r\n', 3, 'no'),
(92, 14, 'When it was feared that the serfs might go too far and gain their freedom from serfdom, the protestant leaders joined the princes <u><i>at crushing</i></u> them. (Sentence Improvement)', 'into crushing\r\n', 'in crushing\r\n', 'without crushing\r\n', 'No improvement\r\n', 2, 'no'),
(93, 14, '<u><i>If the room had been brighter</i></u>, I would have been able to read for a while before bed time. (Sentence Improvement)', 'If the room was brighter\r\n', 'If the room are brighter\r\n', 'Had the room been brighter\r\n', 'No improvement\r\n', 3, 'no'),
(94, 14, 'The record for the biggest tiger hunt has not been <u><i>met</i></u> since 1911 when Lord Hardinge. then Viceroy of India, shot a tiger than measured 11 feet and 6 inches. (Sentence Improvement)', 'improved\r\n', 'broken', 'bettered\r\n', 'No improvement\r\n', 2, 'no'),
(95, 14, '<u><i>his powerful desire</i></u> brought about his downfall. (Sentence Improvement)', 'His intense desire\r\n', 'His desire for power\r\n', 'His fatal desire\r\n', 'No improvement\r\n', 2, 'no'),
(96, 14, 'Will you kindly <u><i>open</i></u> the knot? (Sentence Improvement)', 'untie\r\n', 'break\r\n', 'loose\r\n', 'No improvement\r\n', 1, 'no'),
(97, 14, 'He <u><i>sent a word</i></u> to me that he would be coming late. (Sentence Improvement)', 'sent word\r\n', 'had sent a word\r\n', 'sent words\r\n', 'No improvement\r\n', 1, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preplearn_questions`
--
ALTER TABLE `preplearn_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preplearn_questions`
--
ALTER TABLE `preplearn_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preplearn_questions`
--
ALTER TABLE `preplearn_questions`
  ADD CONSTRAINT `preplearn_questions_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `preplearn_question_sub_category` (`sub_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

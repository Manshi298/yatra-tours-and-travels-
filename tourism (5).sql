-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 01:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_No` varchar(25) NOT NULL,
  `BookingDate` date NOT NULL,
  `User_id` varchar(30) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `PackageID` int(6) NOT NULL,
  `No_of_Adult` int(3) NOT NULL,
  `No_of_Infant` int(3) NOT NULL,
  `Adult_Rate` decimal(12,2) NOT NULL,
  `Infant_Rate` decimal(12,2) NOT NULL,
  `Total_Pkg_Cost` decimal(12,2) NOT NULL,
  `Booking_Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_No`, `BookingDate`, `User_id`, `Email`, `contactno`, `PackageID`, `No_of_Adult`, `No_of_Infant`, `Adult_Rate`, `Infant_Rate`, `Total_Pkg_Cost`, `Booking_Status`) VALUES
('2021-07-22/1', '2021-07-22', 'moukr73@gmail.com', 'moukr73@gmail.com', '98837373', 2, 2, 1, '1299.00', '1000.00', '3598.00', 'Canceled'),
('2021-07-22/2', '2021-07-22', 'moukr73@gmail.com', 'moukr73@gmail.com', '5366632', 1, 2, 0, '200.00', '100.00', '400.00', 'Confirmed'),
('2021-07-22/3', '2021-07-22', 'moukr73@gmail.com', 'moukr73@gmail.com', '5366632', 1, 3, 1, '200.00', '100.00', '700.00', 'Confirmed'),
('2021-07-23/10', '2021-07-23', 'moukr73@gmail.com', 'moukr73@gmail.com', '6664664', 2, 1, 0, '1299.00', '1000.00', '1299.00', 'Pending'),
('2021-07-23/4', '2021-07-23', 'moukr73@gmail.com', 'moukr73@gmail.com', '21313', 1, 3, 0, '200.00', '100.00', '600.00', 'Pending'),
('2021-07-23/5', '2021-07-23', 'parnak28@gmail.com', 'parnak28@gmail.com', '546363', 1, 1, 1, '200.00', '100.00', '300.00', 'Pending'),
('2021-07-23/6', '2021-07-23', 'parnak28@gmail.com', 'parnak28@gmail.com', '5366632', 2, 1, 1, '1299.00', '1000.00', '2299.00', 'Pending'),
('2021-07-23/7', '2021-07-23', 'parnak28@gmail.com', 'parnak28@gmail.com', '12345', 2, 2, 0, '1299.00', '1000.00', '2598.00', 'Pending'),
('2021-07-23/8', '2021-07-23', 'parnak28@gmail.com', 'parnak28@gmail.com', '6666363', 1, 1, 0, '200.00', '100.00', '200.00', 'Pending'),
('2021-07-23/9', '2021-07-23', 'moukr73@gmail.com', 'moukr73@gmail.com', '727277', 2, 2, 0, '1299.00', '1000.00', '2598.00', 'Pending'),
('2021-08-02/10', '2021-08-02', 'moukr73@gmail.com', 'moukr73@gmail.com', '444455', 7, 2, 1, '12000.00', '11000.00', '35000.00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_booking`
--

CREATE TABLE `cancel_booking` (
  `Cancel_Srl_no` int(6) NOT NULL,
  `Booking_No` varchar(25) NOT NULL,
  `Booking_cancel_Date` date NOT NULL,
  `Reason_for_cancel` varchar(300) NOT NULL,
  `Package_ID` int(6) NOT NULL,
  `User_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel_booking`
--

INSERT INTO `cancel_booking` (`Cancel_Srl_no`, `Booking_No`, `Booking_cancel_Date`, `Reason_for_cancel`, `Package_ID`, `User_id`) VALUES
(0, '2021-07-22/1', '2021-07-22', 'Not required', 2, 'moukr73@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

CREATE TABLE `customer_master` (
  `User_ID` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Pin` int(10) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `Adharcardno` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Securityquestion` varchar(150) NOT NULL,
  `Securityanswer` varchar(30) NOT NULL,
  `code` mediumint(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_master`
--

INSERT INTO `customer_master` (`User_ID`, `user_name`, `Address`, `City`, `Pin`, `contactno`, `Adharcardno`, `Password`, `Securityquestion`, `Securityanswer`, `code`, `status`) VALUES
('moukr73@gmail.com', 'Mausumi Paul', '122 dumdum', 'Kolkata', 700152, '98383882', '2627171717', 'Mou@2006', 'Your First School Name?', 'Oxford', 0, 'verified'),
('parnak28@gmail.com', 'Parna Karmakar', 'Garia station', 'Kolkata', 700152, '73773377', '637277272', '1234@Xyz', 'Your First School Name?', 'nava nalanda', 1423, 'verified'),
('Shawmanshi7@gmail.com', 'Manshi Shaw', '34/5. S.C Mallick Road, Jadavpur', 'KOLKATA', 700094, '234567778', '123466554', 'Man@123', 'What is the name of your pet ?', 'talky', 304819, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` int(6) NOT NULL,
  `Package_Name` varchar(400) NOT NULL,
  `Package_Desc` varchar(5000) NOT NULL,
  `place` varchar(500) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Startdate` date NOT NULL,
  `Enddate` date NOT NULL,
  `Totaldays` int(3) NOT NULL,
  `Tour_type` varchar(30) NOT NULL,
  `Full_pkg_rate` decimal(12,2) NOT NULL,
  `Max_Head_Allowed` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_Name`, `Package_Desc`, `place`, `Source`, `Destination`, `Startdate`, `Enddate`, `Totaldays`, `Tour_type`, `Full_pkg_rate`, `Max_Head_Allowed`) VALUES
(1, 'KASHMIR BEST SELLING PACKAGES', 'Duration : 3 Nights / 4 Days. (Day Trip)\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\nWith our Srinagar Sonmarg  Gulmarg Tour Packages, you can visit the\r\nmost scared Shankaracharya temple also known as Jyesteshwara temple built atop the Zabarwan mountain in Srinagar.The shikara boat ride on \r\nDal Lake is a refreshing aspect of Srinagar Sonmarg  Gulmarg Packages.\r\nPahalgam is another major tourist attraction in the neighborhood of Srinagar that is included in this Srinagar Sonmarg  Gulmarg Tour.\r\n. Lucky enough, you can even catch \r\na movie shooting here real time with this Srinagar Gulmarg  holiday package!', 'Kashmir(Srinagar - Sonamarg - Gulmarg)', 'Kolkata', 'Srinagar', '2021-09-21', '2021-09-30', 9, 'Best selling', '12000.00', 6),
(2, 'KASHMIR FAMILY PACKAGES', 'Duration : 4 Nights / 5 Days. (Day Trip)\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nVisit Srinagar,the Jhelum River, a tributary of the Indus,Pahalgam which is the most famous place for Indian Film Industry.', 'Kashmir(Srinagar - Sonamarg - Gulmarg- Phalgam)', 'Kolkata', 'Srinagar', '2021-11-10', '2021-11-17', 7, 'Family tour', '9600.00', 6),
(3, 'KASHMIR SPECIAL PACKAGES', 'Duration : 5 Nights / 6 Days. (Day Trip),\r\nINCLUDES\r\nAirport Transfer,\r\nAll Sightseeing,\r\n3 Star Hotel ,\r\nDouble Sharing Rooms,\r\nLocated at a distance of 150 kms from Pahalgam, Gulmarg is a tourist delight. You will be exploring snow capped mountains all around. The place is an ideal retreat for winter sports and skiing, also a highest run cable car almost 14000 fts above ground level.followed by leisure time to enjoy on your own', 'Kashmir( Srinagar - Sonamarg - Gulmarg - Pahalgam - Srinagar)', 'Kolkata', 'Srinagar', '2022-02-04', '2022-02-10', 6, 'Special', '11200.00', 7),
(4, 'KERALA PILGRIMAGE PACKAGE', 'Duration : 4Nights / 5 Days.  (Day Trip),\r\nINCLUDES\r\nAirport Transfer,\r\nAll Sightseeing,\r\n3 Star Hotel ,\r\nDouble Sharing Rooms,\r\nProceed for a full day sightseeing tour of Munnar. Visit the hydel park, tea museum, Rose Garden,\r\nMattupetty dam, Echo Point, Dream land Spice Park and Honeybee Tree. Back to the resort for\r\novernight stay. checkout and drive to Thekkady. Visit the Periyar National Park and proceed for a \r\nboat ride in the park reservoir where you sight wild animals on the bank that come to drink water.\r\nSpice Plantation visit, Elephant Park, Kathakali and Martial Arts Show. Optional Kerala Massage.\r\nOvernight ', 'Kerala( Cochin-Munnar-Thekkady-Alleppey)', 'Kolkata', 'Alleppey', '2021-08-20', '2021-08-25', 5, 'Pilgrimage', '11500.00', 5),
(5, 'KERALA SHORT BREAKS PACKEGE', 'Duration : 5Nights / 6Days.  (Day Trip)\r\nDestinations :Munnar-Thekkady-Alleppey-Kovalam.\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms', 'Kerala(Munnar-Thekkady-Alleppey-Kovalam)', 'Kolkata', 'Kovalam', '2021-09-23', '2021-09-28', 5, 'Short breaks', '11600.00', 6),
(6, 'KERALA HONEYMOON PACKAGE', 'Duration : 7Nights / 8Days.  (Day Trip)\r\nDestinations : Cochin- Kanyakumari- Trivandrum\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\n', 'Kerala(Cochin- Kanyakumari- Trivandrum)', 'Kolkata', 'Trivandrum', '2021-11-12', '2021-11-19', 7, 'Honeymoon', '12000.00', 6),
(7, 'RAJASTHAN PILGRIMAGE & HERITAGE PACKAGE', 'Duration : 3Nights / 4Days.  (Day Trip)\r\nDestinations : Jaipur-Pushkar-Jodhpur-Udaipur\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\n', 'Rajasthan(Jaipur-Pushkar-Jodhpur-Udaipur)', 'Kolkata', 'Udaipur', '2021-10-15', '2021-10-25', 10, 'Pilgrimage', '12000.00', 8),
(8, 'RAJASTHAN BESTSELLING PACKAGES', 'Duration : 5Nights / 6Days.  (Day Trip)\r\nDestinations : Jaipur-Jodhpur-Jaisalmer\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\n', 'Rajasthan(Jaipur-Jodhpur-Jaisalmer)', 'Kolkata', 'Jaisalmer', '2021-12-09', '2021-12-18', 9, 'Best selling', '17200.00', 4),
(9, 'RAJASTHAN LUXURY HOLIDAYS', 'Duration : 7Nights / 8Days.  (Day Trip)\r\nDestinations : Jaipur-Ranthambore-Udaipur\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms', 'Rajasthan(Jaipur-Ranthambore-Udaipur)', 'Kolkata', 'Udaipur', '2021-08-22', '2021-08-30', 8, 'Luxury holidays', '12000.00', 4),
(10, 'LOST IN THE NATURE- CHARMING MUSSOORIE, HARIDWAR & RISHIKESH', 'Duration : 4Nights / 5Days.  (Day Trip)\r\nDestinations : Haridwar - Dehradun - Mussoorie \r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\n', 'Mussoorie(Haridwar - Dehradun - Mussoorie)', 'Kolkata', 'Mussoorie', '2021-09-20', '2021-09-25', 5, 'Family tour', '11200.00', 4),
(11, 'WEEKEND GETAWAY IN MUSSOORIE', 'Duration : 4Nights / 5Days.  (Day Trip)\r\nDestinations :  Rishikesh-Mussoorie- Doon Valley\r\nINCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms\r\n', 'Mussoorie( Rishikesh-Mussoorie- DoonValley)', 'Kolkata', 'Doon-valley', '2022-01-18', '2022-01-23', 5, 'Weekend gateway', '11200.00', 6),
(12, 'RISHIKESH WITH MUSSOORIE', 'Duration : 8Nights / 9Days.  (Day Trip)\r\nDestinations :  Uttarakhand- Haridwar, Rishikesh, Dehradun, and Mussoorie.\r\n INCLUDES\r\nAirport Transfer\r\nAll Sightseeing\r\n3 Star Hotel \r\nDouble Sharing Rooms', 'Mussoorie( Uttarakhand- Haridwar - Rishikesh - Dehradun - Mussoorie)', 'Kolkata', 'Mussoorie', '2022-03-20', '2022-03-27', 7, 'Family tour', '12000.00', 8),
(13, 'MUMBAI-BEST SELLING PACKAGES', 'Covers whole mumbai city', 'MUMBAI', 'Kolkata', 'MUMBAI', '2021-12-12', '2021-12-22', 10, 'Best Selling Holidays', '19000.00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `Booking_No` varchar(15) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` char(7) NOT NULL,
  `Category` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`Booking_No`, `First_Name`, `Last_Name`, `Age`, `Gender`, `Category`) VALUES
('2021-07-22/1', 'Rohit ', 'Roy', 24, 'Male', 'Adult'),
('2021-07-22/1', 'Sumit', 'Roy', 27, 'Male', 'Adult'),
('2021-07-22/1', 'Rony', 'Roy', 10, 'Male', 'Infant'),
('2021-07-22/2', 'PIJUSH', 'KARMAKAR', 49, 'Male', 'Adult'),
('2021-07-22/3', 'Subhra', 'Das', 39, 'Male', 'Adult'),
('2021-07-22/3', 'Swati', 'Das', 32, 'Female', 'Adult'),
('2021-07-22/3', 'Joti', 'ghosh', 27, 'Female', 'Adult'),
('2021-07-22/3', 'priya', 'Das', 5, 'Female', 'Infant'),
('2021-07-23/4', 'Avijit', 'paul', 51, 'Male', 'Adult'),
('2021-07-23/4', 'Sanchita', 'Paul', 46, 'Female', 'Adult'),
('2021-07-23/4', 'Aryan', 'Paul', 2, 'Male', 'Infant'),
('2021-07-23/5', 'Parna', 'Karmakar', 10, 'Female', 'Infant'),
('2021-07-23/5', 'Pijush', 'Karmakar', 48, 'Male', 'Adult'),
('2021-07-23/6', 'RATAN', 'Das', 34, 'Male', 'Adult'),
('2021-07-23/6', 'MIMI', 'DAS', 5, 'Female', 'Infant'),
('2021-07-23/7', 'Sanjay', 'Ghosh', 27, 'Male', 'Adult'),
('2021-07-23/7', 'Bijoy', 'Kundu', 26, 'Male', 'Adult'),
('2021-07-23/8', 'Sujoy', 'Bose', 56, 'Male', 'Adult'),
('2021-07-23/9', 'Manas', 'Roy', 45, 'Male', 'Adult'),
('2021-07-23/9', 'Sweta', 'Roy', 39, 'Female', 'Infant'),
('2021-07-23/10', 'RAJA', 'sen', 23, 'Male', 'Adult'),
('2021-08-02/10', 'Rony', 'Das', 45, 'Male', 'Adult'),
('2021-08-02/10', 'Dip', 'Das', 43, 'Male', 'Adult'),
('2021-08-02/10', 'Rohon', 'Das', 5, 'Male', 'Infant');

-- --------------------------------------------------------

--
-- Table structure for table `payment1`
--

CREATE TABLE `payment1` (
  `PaymentSrlNo` int(8) NOT NULL,
  `Booking_No` varchar(25) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Card_No` varchar(25) NOT NULL,
  `Bank_IFSC` varchar(15) NOT NULL,
  `Account_No` varchar(20) NOT NULL,
  `Bank_Name` varchar(40) NOT NULL,
  `Name_In_Account` varchar(30) NOT NULL,
  `Amount_paid` decimal(12,2) NOT NULL,
  `Cancel_SrlNo` int(6) NOT NULL,
  `Amount_paid_Returned` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment1`
--

INSERT INTO `payment1` (`PaymentSrlNo`, `Booking_No`, `Payment_Date`, `Card_No`, `Bank_IFSC`, `Account_No`, `Bank_Name`, `Name_In_Account`, `Amount_paid`, `Cancel_SrlNo`, `Amount_paid_Returned`) VALUES
(1, '2021-07-22/1', '2021-07-22', '67785455', 'SBI9889', '55677644', 'SBI', 'Pijush Karmakar', '3598.00', 0, '0.00'),
(2, '2021-07-22/2', '2021-07-22', '5325325', 'SBI7667', '2525252', 'SBI', 'Ronit Roy', '400.00', 0, '0.00'),
(3, '2021-07-22/3', '2021-07-22', '73377373', 'UBI6676', '25252525', 'UBI', 'Rohit Das', '700.00', 0, '0.00'),
(4, '2021-07-23/4', '2021-07-23', '83873737', 'UBI6767', '6262677', 'UBI', 'Kartick Dhali', '600.00', 0, '0.00'),
(5, '2021-07-23/5', '2021-07-23', '8383737', 'SBI73773', '83833773', 'SBI', 'Jhelam Das', '300.00', 0, '0.00'),
(6, '2021-07-23/6', '2021-07-23', '383838', 'HDFC33773', '2773733', 'HDFC', 'Parana Karmakar', '2299.00', 0, '0.00'),
(7, '2021-07-23/7', '2021-07-23', '6272781181', 'UCO3663', '62272181', 'UCO', 'Raja Ghosh', '2598.00', 0, '0.00'),
(8, '2021-07-23/8', '2021-07-23', '7373272727', 'PNB34555', '2772772', 'PNB', 'Nitin Pandey', '200.00', 0, '0.00'),
(9, '2021-07-23/9', '2021-07-23', '383883', 'SBI8383', '72833883', 'SBI', 'Probhat Haldar', '6000.00', 0, '0.00'),
(10, '2021-07-23/10', '2021-07-23', '8378377', 'UBI6363', '27277272', 'UBI', 'Sunny Das', '1299.00', 0, '0.00'),
(11, '2021-08-02/10', '2021-08-02', '56556e3', 'UBI7767', '77843748', 'UBI', 'Rony Das', '35000.00', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `pkg_day_plans`
--

CREATE TABLE `pkg_day_plans` (
  `PackageID` int(6) NOT NULL,
  `Dayno` int(3) NOT NULL,
  `Daydate` date NOT NULL,
  `Trip_Desc1` varchar(2200) NOT NULL,
  `Trip_Desc2` varchar(2200) NOT NULL,
  `Trip_Desc3` varchar(2200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkg_day_plans`
--

INSERT INTO `pkg_day_plans` (`PackageID`, `Dayno`, `Daydate`, `Trip_Desc1`, `Trip_Desc2`, `Trip_Desc3`) VALUES
(1, 3, '2021-09-27', 'visit Srinagar city sites that includes site temples, marketplace,etc', 'visitThe Valley is towards northeast of Pahalgam and falls between Pahalgam and Chandanwari and is en route Amarnath Temple Yatra. The valley surrounded by lush green meadows, snow clad mountains and covered with dense vegetation', 'Visit Aru Valley: -Aru is located around 12 from Pahalgam, 11 km upstream from the Lidder River.'),
(3, 1, '2022-02-06', 'After refreshment go for leisure activities. Verified Srinagar is the summer capital of the Indian State of Jammu and Kashmir. It is situated in the Kashmir Valley and lies on the banks of the Jhelum River, a tributary of the Indus.', 'View various historical places\r\nand take lunch from a well furnished hotel', 'Finally by the lunch time you will reach Pahalgam which is the most famous place for Indian Film Industry. After lunch enjoy the nature charm of the valley.'),
(1, 1, '2021-09-23', 'visit the most scared Shankaracharya temple also known as Jyesteshwara temple built atop the Zabarwan mountain in Srinagar. The serene environment at the temple fills one with unexplained tranquility and peace.', 'The shikara boat ride on Dal Lake is a refreshing aspect of Srinagar Sonmarg  Gulmarg Packages. An hour-long ride on long wooden shikari boats takes you to the calmest and placid waters of the lake and the surrounding scenic beauty is sure to melt your heart.', ''),
(1, 2, '2021-09-25', 'Pahalgam is another major tourist attraction in the neighborhood of Srinagar that is included in this Srinagar Sonmarg  Gulmarg Tour. With extremely scenic meadows and countryside huts by the River Lidder, Pahalgam has been inspiring Bollywood for decades now. ', 'The Hajan Valley in Pahalgam has been renamed by the local people as the ‘Betaab valley’ after the Bollywood movie which was shot here by the same name turned to be a blockbuster hit at the box office.', ''),
(3, 3, '2022-02-10', 'Finally by the lunch time you will reach Pahalgam which is the most famous place for Indian Film Industry. After lunch enjoy the nature charm of the valley. ', 'Overnight at Hotel. The Valley is towards northeast of Pahalgam and falls between Pahalgam and Chandanwari and is en route Amarnath Temple Yatra. ', 'The valley surrounded by lush green meadows, snow clad mountains and covered with dense vegetation. Aru Valley: -Aru is located around 12 from Pahalgam, 11 km upstream from the Lidder River. '),
(3, 2, '2022-02-08', '. After breakfast, leave from Gulmarg and drive to Pahalgam 2440 Mtrs (Vale of Kashmir) on the way visit Saffron fields and Avantipur ruins which is eleven hundred years old temple. ', 'Finally by the lunch time you will reach Pahalgam which is the most famous place for Indian Film Industry. ', 'After lunch enjoy the nature charm of the valley. Overnight at Hotel. '),
(2, 1, '2021-11-10', 'Our representative will meet and greet you on arrival in Srinagar. Transfer to the deluxe houseboat in Srinagar. ', 'Evening free to relax and enjoy the scenic views of the high mountains and valleys. Dinner and overnight stay will be at the deluxe houseboat.', ''),
(2, 2, '2021-11-14', '. Located at a distance of 150 kms from Pahalgam, Gulmarg is a tourist delight. You will be exploring snow capped mountains all around. ', 'The place is an ideal retreat for winter sports and skiing, also a highest run cable car almost 14000 fts above ground level.followed by leisure time to enjoy on your own. ', 'Departure transfer to the Srinagar airport, located at a distance of 60 kms from Gulmarg, proceeds for your schedule flight for onward destination.'),
(4, 1, '2021-08-22', 'Proceed for a full day sightseeing tour of Munnar.', 'Visit the hydel park, tea museum, Rose Garden, Mattupetty dam, Echo Point, Dream land Spice Park and Honeybee Tree.', 'Back to the resort for overnight stay. checkout and drive to Thekkady'),
(4, 2, '2021-08-24', 'Visit the Periyar National Park and proceed for a boat ride in the park reservoir where you sight wild animals on the bank that come to drink water. ', 'Spice Plantation visit, Elephant Park, Kathakali and Martial Arts Show. Optional Kerala Massage. ', 'Overnight stay at Thekkady'),
(4, 3, '2021-08-25', '. Kerala houseboat from the resort at Alleppey Referred to as the Venice of the East, the place is home to  diverse animal and bird life. ', 'Alleppey is also famous for its beaches, marine products, coir industry and boat races.', ''),
(5, 1, '2021-09-22', 'Have a fun-filled trip with friends to the fantastic places in Southwest Coastal area in India. Take in the view of exotic beaches, coconut groves, and agricultural street markets, during this seven-day trip.', '. Enjoy cruising along the emerald backwaters of Alleppey and savor coastal delicacies.', ''),
(5, 2, '2021-09-27', '. Explore the local markets, shop for souvenirs and enjoy walking along the winding avenues. ', 'A visit to the famous temples in Kanyakumari will be a refreshing experience. ', 'Visit Padmanabhapuram Palace, Poovar Backwater, and Suchindram Temple, before ending the trip.'),
(6, 1, '2021-11-14', 'After breakfast check-out from the hotel and drive to Kanyakumari; on arrival check-in into hotel. Afternoon, proceed for a local sightseeing tour of Kanyakumari. ', 'Kanyakumari is located at the southernmost tip of the Indian subcontinent at the confluence of three major water bodies videlicet the Arabian Sea, Bay of Bengal and Indian Ocean.', 'A small temple dedicated to goddess Kanyakumari - the youthful form of the primeval energy Shakti (Mother Goddess), is located on the seashore. Swami Vivekananda, the great visionary and spiritual leader, spent days in deep meditation on a rock around 400 m off the Kanyakumari coastline. There is a memorial built on the stone in honor of Swami Vivekananda and adjacent to it stands the 133 ft high statue of Tiruvalluvar, the author of the philosophical work Tirukkural. '),
(6, 2, '2021-11-16', 'Visit the Padmanbhapuram Palace, Suchithram Temple, Devi Kanyakumari Temple, Vivekananda Memorial, and Triveni Sangamam', 'Overnight at hotel.', ''),
(7, 1, '2021-10-18', 'Jaipur, the sea of palaces and forts is an architectural brilliance. It is the capital to the most flamboyant state, Rajasthan. The moment you set foot in Jaipur, ', 'you will feel like everything out of the pages of a novel has come to life. The town is enthralling and talks of the great history that it holds.', ''),
(7, 2, '2021-10-20', 'Jodhpur is called the “Gateway to Thar”, as it is literally on the edge of the desert. It is also called the “Sun City” as the sun shines, very bright and hot, almost every day of the year.', '', ''),
(7, 2, '2021-10-21', 'On the other hand, Jaisalmer is the “Golden City”. The city conjures up images of an Arabian Nights fable owing the mirage-like golden sandstone desert', '', ''),
(8, 1, '2021-12-12', 'So the pink city and the capital of Rajasthan is the largest in the state. Founded by Maharaja Sawai Jai Singh in 1727, Jaipur is one of the most popular Rajasthan tourist places in Jaipur', 'Long list of historic and heritage monuments, swift connectivity from major cities and an amazing city plan where all the streets of the city run from east to west – Jaipur is a marvel to be at. ', 'Well, Jodhpur is just an extension of the royalty that you get to see at Jaisalmer and Jaipur. The royal city was the center of power of the then Mewar state and has got several forts, palaces, and temples to enchant travelers from different corners of the world. '),
(8, 2, '2021-12-15', 'Jodhpur is also known as Blue City for the blue houses near the Mehrangarh Fort that is a spectacle of magnificence', 'Jodhpur is also known as Blue City for the blue houses near the Mehrangarh Fort that is a spectacle of magnificence. The blue houses have played muse to the acclaimed photographer Steve McCurry', ''),
(9, 1, '2021-08-25', 'Our Ranthambore tour packages are your getaway to the best wildlife holiday experience in India. We offer Ranthambore tours from all major destinations in the world, and cater to a variety of wildlife enthusiasts, both domestic and international.', 'Choose from our wide range of family-friendly wildlife tours, photography, corporate outings, honeymoon, educational tour, tiger or birdwatching tour in Ranthambore, and avail the best services, deals, and experiences', ''),
(10, 1, '2021-09-23', 'Treat yourself in a 5 day tour of Haridwar, Rishikesh and Mussoorie tour, a perfect long weekend getaway from Delhi. ', 'Embark the tour from Delhi to Haridwar which is also known as “Gateway of God” , witness the rituals for the famous Ganga aarti on the Ghats and take a holy dip in one of the most sacred ghats of India - “Har ki Pauri” in Haridwar. ', ''),
(10, 2, '2021-09-25', 'Proceeding to Rishikesh “The Yoga Capital Of India” endeavour river rafting under experts assistance and attend the evening aarti on the Triveni Ghat which offers you a peace of thoughts. ', 'Conclude the tour by visiting to the Queen of Hills - “Mussoorie” eyewitnessing the beautiful Kempty Falls, Company garden,Happy valley and the mesmerising view from the highest point - Clouds End in Mussoorie.Spiritually, adventure, romance, and natural beauty all come together in one to make this kind of tour package very appealing.', 'Comfortable and sanitized vehicle (Sedan/ SUV depending on group size) for sightseeing on all days as per the itinerary.Toll tax and parking. Driver Allowance. Accommodation in Standard, Deluxe and Luxury Properties. Breakfast and Dinner (North Indian Cuisine) at all hotels as per itinerary. Experienced Driver cum Guide.\r\n\r\n'),
(11, 1, '2022-01-21', 'Visit the swaying Ram Jhula and the Laxman Jhula which are the popular landmarks in Rishikesh.', 'The tour also takes you through popular landmarks including Ram Jhula, Laxman Jhula, Kempy Falls, Company Garden, and Mussoorie Lake.', ' '),
(11, 2, '2022-01-23', 'Do some shopping at Mall Road and spend your evening exploring the streets or local bazaar of Mussoorie.', 'Malsi Deer Park which is a major wildlife attraction and is widely famous for deers', ''),
(12, 1, '2022-03-23', 'The tour lets you explore mesmerizing sights of Uttarakhand covering the cities of Haridwar, Rishikesh, Dehradun, and Mussoorie.', 'Pay a visit to the famous Mansa Devi Temple that lies atop the Bilwa Parwat which is a part of the Sivalik Hills, the southernmost mountain chain of the Himalayas.', ''),
(12, 2, '2022-03-24', 'On the banks of the holy river, Ganga lies Har ki Pauri. This revered spot is the place where Lord Vishnu and Lord Shiva are believed to have visited in the Vedic times.', 'At Har ki Pauri, you can also see the large footprint on a stone wall that is believed to be of Lord Vishnu.', 'Get to visit the two suspension bridges of great mythological importance, Ram Jhoola and Laxman Jhoola built over the holy river Ganga.');

-- --------------------------------------------------------

--
-- Table structure for table `pkg_images`
--

CREATE TABLE `pkg_images` (
  `P_IMG_ID` int(11) NOT NULL,
  `Package_ID` int(255) NOT NULL,
  `Image_path` varchar(5000) NOT NULL,
  `Place_name` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkg_images`
--

INSERT INTO `pkg_images` (`P_IMG_ID`, `Package_ID`, `Image_path`, `Place_name`) VALUES
(1, 1, 'IMAGES/KBSP_IMG_1.png ', 'Kashmir(Srinagar - Sonamarg - Gulmarg)'),
(2, 2, 'IMAGES/KFP_IMG_1.png', 'Kashmir(Srinagar - Sonamarg - Gulmarg- Phalgam)'),
(4, 3, 'IMAGES/KSP_IMG_1.png', 'Kashmir( Srinagar - Sonamarg - Gulmarg - Pahalgam - Srinagar)'),
(5, 4, 'IMAGES/KERALAPILGRIM_IMG_1.png', 'Kerala( Cochin-Munnar-Thekkady-Alleppey)'),
(6, 5, 'IMAGES/KERALASHORTBRK_IMG_1.png', 'Kerala(Munnar-Thekkady-Alleppey-Kovalam)'),
(7, 6, 'IMAGES/KHP_IMG_1.png ', 'Kerala(Cochin- Kanyakumari- Trivandrum)'),
(8, 7, 'IMAGES/RP&HP_IMG_1.png', 'Rajasthan(Jaipur-Pushkar-Jodhpur-Udaipur)'),
(9, 8, 'IMAGES/RBP_IMG_1.png', 'Rajasthan(Jaipur-Jodhpur-Jaisalmer)'),
(10, 9, 'IMAGES/RLH_IMG_1.png', 'Rajasthan(Jaipur-Ranthambore-Udaipur)'),
(11, 10, 'IMAGES/LOST_CMHR_IMG_1.png ', 'Mussoorie(Haridwar - Dehradun - Mussoorie)'),
(12, 11, 'IMAGES/WGIM_IMG_1.png ', 'Mussoorie( Rishikesh-Mussoorie- DoonValley)'),
(13, 12, 'IMAGES/RWM_IMG_1.png', 'Mussoorie( Uttarakhand- Haridwar - Rishikesh - Dehradun - Mussoorie)'),
(14, 4, 'images/KERALAPILGRIM_IMG_1.png', 'Kerala(Munnar-Thekkady)'),
(15, 4, 'images/KERALAPILGRIM_IMG_2.png', 'Kerala(Munnar-Thekkady-Alleppey-Kovalam)'),
(16, 11, 'images/WGIM_IMG_2.png', 'Mussoorie( Rishikesh-Mussoorie- DoonValley)'),
(17, 8, 'images/RBP_IMG_2.png', 'Rajasthan(Jaipur-Pushkar-Jodhpur-Udaipur)'),
(18, 1, 'images/KSP_IMG_1.png', 'Gulmarg'),
(19, 12, 'IMAGES/RWM_IMG_1.png', 'MUssorie'),
(20, 9, 'images/RP&HP_IMG_1.png', 'Ajmir port'),
(21, 12, 'IMAGES/RWM_IMG_2.png', 'Rishikesh-Ram jhula'),
(22, 9, 'image/RLH_IMG_2.png', 'Ranthambore'),
(23, 7, 'image/RP&HP_IMG_2.png', 'Hawa Mahal');

-- --------------------------------------------------------

--
-- Table structure for table `pkg_transport_cost`
--

CREATE TABLE `pkg_transport_cost` (
  `PackageID` int(6) NOT NULL,
  `Transport_By` varchar(15) NOT NULL,
  `Source_transport_By` varchar(40) NOT NULL,
  `Desti_transport_By` varchar(40) NOT NULL,
  `Adult_Rate` decimal(12,2) NOT NULL,
  `Infant_Rate` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkg_transport_cost`
--

INSERT INTO `pkg_transport_cost` (`PackageID`, `Transport_By`, `Source_transport_By`, `Desti_transport_By`, `Adult_Rate`, `Infant_Rate`) VALUES
(2, 'Bus', 'Gulmarg', 'Pahelgam', '1299.00', '1000.00'),
(1, 'Flight', 'Kolkata Airport', 'Srinagar', '12000.00', '10000.00'),
(5, 'train', 'Howrah station', 'Kerala', '6000.00', '5000.00'),
(3, 'Flight', 'Kolkata', 'Srinagar', '5000.00', '4000.00'),
(4, 'Train', 'Howrah station', 'Kerala', '9600.00', '8600.00'),
(6, 'Train', 'Howrah station', 'Kerala', '12000.00', '11000.00'),
(7, 'Train', 'Howrah station', 'Jaipur', '12000.00', '11000.00'),
(8, 'Train', 'Howrah station', 'Udaipur', '13000.00', '12000.00');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Abhnav Banerjee', 'abc@gmail.com', '560', 0, 'verified'),
(2, 'Digontio Banerjee', 'fgh75@gmail.com', '789', 118151, 'verified'),
(3, 'Raju Das', 'xy268@gmail.com', '908', 457241, 'verified'),
(4, 'Dip Ghosh', 'def@gmail.com', '123', 336320, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_No`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `booking_ibfk_1` (`PackageID`);

--
-- Indexes for table `cancel_booking`
--
ALTER TABLE `cancel_booking`
  ADD PRIMARY KEY (`Cancel_Srl_no`),
  ADD KEY `Booking_No` (`Booking_No`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `customer_master`
--
ALTER TABLE `customer_master`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD KEY `Booking_No` (`Booking_No`);

--
-- Indexes for table `payment1`
--
ALTER TABLE `payment1`
  ADD PRIMARY KEY (`PaymentSrlNo`);

--
-- Indexes for table `pkg_day_plans`
--
ALTER TABLE `pkg_day_plans`
  ADD KEY `PackageID` (`PackageID`);

--
-- Indexes for table `pkg_images`
--
ALTER TABLE `pkg_images`
  ADD PRIMARY KEY (`P_IMG_ID`),
  ADD KEY `Package_ID` (`Package_ID`);

--
-- Indexes for table `pkg_transport_cost`
--
ALTER TABLE `pkg_transport_cost`
  ADD KEY `PackageID` (`PackageID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Package_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment1`
--
ALTER TABLE `payment1`
  MODIFY `PaymentSrlNo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pkg_images`
--
ALTER TABLE `pkg_images`
  MODIFY `P_IMG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`PackageID`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `cancel_booking`
--
ALTER TABLE `cancel_booking`
  ADD CONSTRAINT `cancel_booking_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `customer_master` (`User_ID`);

--
-- Constraints for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD CONSTRAINT `passenger_details_ibfk_1` FOREIGN KEY (`Booking_No`) REFERENCES `booking` (`Booking_No`);

--
-- Constraints for table `pkg_day_plans`
--
ALTER TABLE `pkg_day_plans`
  ADD CONSTRAINT `pkg_day_plans_ibfk_1` FOREIGN KEY (`PackageID`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `pkg_images`
--
ALTER TABLE `pkg_images`
  ADD CONSTRAINT `pkg_images_ibfk_1` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `pkg_transport_cost`
--
ALTER TABLE `pkg_transport_cost`
  ADD CONSTRAINT `pkg_transport_cost_ibfk_1` FOREIGN KEY (`PackageID`) REFERENCES `package` (`Package_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

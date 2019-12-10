-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 12:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsdetails`
--

CREATE TABLE `doctorsdetails` (
  `DoctorId` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Website` varchar(200) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Availability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsdetails`
--

INSERT INTO `doctorsdetails` (`DoctorId`, `FirstName`, `LastName`, `Phone`, `Street`, `City`, `Country`, `Website`, `Gender`, `DOB`, `Nationality`, `Speciality`, `Department`, `Qualifications`, `Availability`) VALUES
(6, 'Martin', 'King', '987654321', '1 Rue', 'London', 'England', '', 'Male', '2019-12-10', 'English', 'Cardiologist', 'Orthopedics', 'MBBS', 'No'),
(18, 'George', 'Martin', '1234657980', '14 Chatlet', 'Paris', 'France', '', 'Other', '2017-12-31', 'French', 'General', 'Regular', 'Bachelors', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Phone_number` varchar(45) DEFAULT NULL,
  `BirthDate` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Cholesterol` varchar(450) DEFAULT NULL,
  `Emerg_FirstName` varchar(45) DEFAULT NULL,
  `Emerg_LastName` varchar(45) DEFAULT NULL,
  `Emerg_Relaton` varchar(45) DEFAULT NULL,
  `Emerg_PhoneNumber1` varchar(20) DEFAULT NULL,
  `Emerg2_PhoneNumber2` varchar(20) DEFAULT NULL,
  `Emerg_PhoneNumber2` varchar(20) DEFAULT NULL,
  `HepatitisB` varchar(45) DEFAULT NULL,
  `ChickenPox` varchar(45) DEFAULT NULL,
  `Measles` varchar(45) DEFAULT NULL,
  `Medical_History` varchar(800) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `DoctorId` int(11) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Marital_Status` varchar(30) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `Social_Security` varchar(50) NOT NULL,
  `Emerg2_Relation` varchar(50) NOT NULL,
  `Emerg2_FirstName` varchar(50) NOT NULL,
  `Emerg2_PhoneNumber1` varchar(20) NOT NULL,
  `BloodPressure` varchar(100) NOT NULL,
  `HeartDisease` varchar(100) NOT NULL,
  `Vaccination_History` varchar(100) NOT NULL,
  `OtherHealthIssues` varchar(500) NOT NULL,
  `Emerg2_LastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idPatient`, `First_Name`, `Last_Name`, `Phone_number`, `BirthDate`, `Address`, `Cholesterol`, `Emerg_FirstName`, `Emerg_LastName`, `Emerg_Relaton`, `Emerg_PhoneNumber1`, `Emerg2_PhoneNumber2`, `Emerg_PhoneNumber2`, `HepatitisB`, `ChickenPox`, `Measles`, `Medical_History`, `Height`, `Weight`, `DoctorId`, `Username`, `Password`, `Gender`, `Occupation`, `Marital_Status`, `EmailID`, `Social_Security`, `Emerg2_Relation`, `Emerg2_FirstName`, `Emerg2_PhoneNumber1`, `BloodPressure`, `HeartDisease`, `Vaccination_History`, `OtherHealthIssues`, `Emerg2_LastName`) VALUES
(2, 'Frank', 'Peterson', '91', 'January', '10', 'no', 'John', 'Kennedy', 'Friend', '123456798', '', '', 'Yes', 'IMMUNE', 'NOT IMMUNE', 'Liver disease', '199', '99', NULL, 'Frank', '1a1dc91c907325c69271ddf0c944bc72', 'Male', 'Unemployed', 'Other', 'frank@gmail.com', '1234567890', 'Brother', 'Mark', '987987987', 'Yes', 'No', 'Small pox', 'Kidney Failure', 'Henry'),
(3, 'vishal', 'patel', '33', 'October', '1 rue des poissonniers', 'wcvcwv', 'qqqq', 'sss', 'ssssss', '5556522255', '5265558522', '54545454545', 'No', 'NOT IMMUNE', 'NOT IMMUNE', 'fdgfxbxcb cv cv ', '178', '70', NULL, 'Vishal123', '1a1dc91c907325c69271ddf0c944bc72', 'Male', 'Unemployed', 'Married', 'vishalpatel2788@gmail.com', '2222455214', 'xcxzcxzvzx', 'ddddd', '7845855545', 'High', 'No', 'General', 'Liver problem', 'Fred'),
(30, 'Final', 'Test', '2133453245', '30July2001', '1rueeras123Barbados', 's', 'F', 'A', 'frnd', '764061654', '', '', 'No', 'IMMUNE', 'IMMUNE', 'asdf', '211', '100', NULL, 'FinalTest', 'pass', 'Male', 'Unemployed', 'Single', 'finaltest@email.com', '12314325', 'Bro', 'J', '714354353', 'n', '+', 'heart', 'na', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `idRoomDetails` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `SensorId` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `idSensor` int(11) NOT NULL,
  `SensorName` varchar(45) DEFAULT NULL,
  `SensorDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sensordata`
--

CREATE TABLE `sensordata` (
  `idSensorData` int(11) NOT NULL,
  `Sleep_hours` varchar(45) DEFAULT NULL,
  `HeartRate` varchar(45) DEFAULT NULL,
  `BloodPressure` varchar(45) DEFAULT NULL,
  `RoomTemprature` varchar(45) DEFAULT NULL,
  `Motionsensordata` varchar(45) DEFAULT NULL,
  `PatientId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Aniruddha', 'aniruddha04@gmail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Frank', 'frank@gmail.com', 'patient', '1a1dc91c907325c69271ddf0c944bc72'),
(3, 'Vishal123', 'vishalpatel2788@gmail.com', 'patient', '1a1dc91c907325c69271ddf0c944bc72'),
(4, 'test', 'test@email.com', 'doctor', '098f6bcd4621d373cade4e832627b4f6'),
(6, 'Doctor', 'doc@email.com', 'doctor', '9a09b4dfda82e3e665e31092d1c3ec8d'),
(18, 'George', 'george@email.com', 'doctor', '202cb962ac59075b964b07152d234b70'),
(30, 'FinalTest', 'finaltest@email.com', 'patient', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsdetails`
--
ALTER TABLE `doctorsdetails`
  ADD PRIMARY KEY (`DoctorId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`);

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`idRoomDetails`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`idSensor`);

--
-- Indexes for table `sensordata`
--
ALTER TABLE `sensordata`
  ADD PRIMARY KEY (`idSensorData`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

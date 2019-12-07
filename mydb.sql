-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 12:50 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `Adress` varchar(45) DEFAULT NULL,
  `Mobile_number` int(11) DEFAULT NULL,
  `Emergency_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `Username`, `Password`, `Adress`, `Mobile_number`, `Emergency_contact`) VALUES
(1, 'administrator', 'pass', 'Paris', 987654321, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `idDoctor` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Mobile_number` varchar(45) DEFAULT NULL,
  `Emergency_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctorsdetails`
--

CREATE TABLE `doctorsdetails` (
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Website` varchar(200) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Availability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsdetails`
--

INSERT INTO `doctorsdetails` (`Name`, `Phone`, `Street`, `City`, `Country`, `Website`, `gen`, `dob`, `Nationality`, `Speciality`, `Department`, `Qualifications`, `Availability`) VALUES
('rakesh', '56885444', 'kmm', 'kmm', 'india', 'http://rakesh.hh', 'male', '1998-01-07', 'indian', 'nothing', 'cse', 'hhhh', 'yes'),
('Doctor1', '1234657980', 'Rue ', 'Paris', 'France', 'www.doctor.com', 'male', '2019-06-18', 'French', 'Surgeon', 'Surgery', 'MBBS', 'yes'),
('Doctor1', '1234657980', 'Rue ', 'Paris', 'France', 'www.doctor.com', 'male', '2019-06-18', 'French', 'Surgeon', 'Surgery', 'MBBS', 'yes'),
('Doctor100', '1234657980', 'Rue ', 'Paris', 'France', 'www.doctor.com', 'female', '2017-12-09', 'French', 'General', 'Regular', 'Bachelors', 'No');

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
  `Patientcol` varchar(450) DEFAULT NULL,
  `Emerg_FirstName` varchar(45) DEFAULT NULL,
  `Emerg_LastName` varchar(45) DEFAULT NULL,
  `Emerg_Address` varchar(45) DEFAULT NULL,
  `Emerg_HomePhoneNumber` varchar(45) DEFAULT NULL,
  `Emerg_WorkPhoneNumber` varchar(45) DEFAULT NULL,
  `Emerg_MobileNumber` varchar(45) DEFAULT NULL,
  `HepatitisB` varchar(45) DEFAULT NULL,
  `ChickenPox` varchar(45) DEFAULT NULL,
  `Measles` varchar(45) DEFAULT NULL,
  `Medical_History` varchar(800) DEFAULT NULL,
  `Medical_Problems` varchar(605) DEFAULT NULL,
  `Medication_Taken_Regularly` varchar(405) DEFAULT NULL,
  `Allergies` varchar(405) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `DoctorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `areacode` int(5) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `dobmonth` varchar(20) NOT NULL,
  `dobdate` int(2) NOT NULL,
  `dobyear` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `socialsecurity` int(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `street2` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postal` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `e_firstname` varchar(30) NOT NULL,
  `e_lastname` varchar(30) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `e_areacode` int(10) NOT NULL,
  `e_phonenumber` int(10) NOT NULL,
  `e_areacode2` int(10) NOT NULL,
  `e_phonenumber2` int(10) NOT NULL,
  `e2_firstname` varchar(30) NOT NULL,
  `e2_lastname` varchar(30) NOT NULL,
  `e2_relationship` varchar(30) NOT NULL,
  `e2_areacode` int(10) NOT NULL,
  `e2_phonenumber` int(10) NOT NULL,
  `e2_areacode2` int(10) NOT NULL,
  `e2_phonenumber2` int(10) NOT NULL,
  `hepatitis` varchar(10) NOT NULL,
  `chickenpox` varchar(10) NOT NULL,
  `measles` varchar(10) NOT NULL,
  `significantmedical` varchar(128) NOT NULL,
  `cdate` varchar(20) NOT NULL,
  `c_details` varchar(50) NOT NULL,
  `c_results` varchar(10) NOT NULL,
  `bpdate` varchar(20) NOT NULL,
  `bp_details` varchar(50) NOT NULL,
  `bp_result` varchar(10) NOT NULL,
  `hdate` varchar(20) NOT NULL,
  `h_detaiils` varchar(50) NOT NULL,
  `h_result` varchar(10) NOT NULL,
  `vaccination_history` varchar(128) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `other_issues` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`firstname`, `lastname`, `areacode`, `phonenumber`, `dobmonth`, `dobdate`, `dobyear`, `gender`, `occupation`, `marital_status`, `email`, `socialsecurity`, `street`, `street2`, `city`, `state`, `postal`, `country`, `e_firstname`, `e_lastname`, `relationship`, `e_areacode`, `e_phonenumber`, `e_areacode2`, `e_phonenumber2`, `e2_firstname`, `e2_lastname`, `e2_relationship`, `e2_areacode`, `e2_phonenumber`, `e2_areacode2`, `e2_phonenumber2`, `hepatitis`, `chickenpox`, `measles`, `significantmedical`, `cdate`, `c_details`, `c_results`, `bpdate`, `bp_details`, `bp_result`, `hdate`, `h_detaiils`, `h_result`, `vaccination_history`, `height`, `weight`, `other_issues`) VALUES
('rakesh', 'nuvvula', 91, 2147483647, '0', 7, 1998, 'Male', 'Unemployed', 'Single', 'manofcoding07@gmail.com', 12345678, 'kmm', 'kmm', 'kmm', 'ts', 507003, 'India', 'rakesh', 'nuvvula', 'hhh', 456, 875, 847, 7, 'rakesh', 'nuvvula', 'rak', 384, 87776, 87667, 8876, 'No', 'NOT IMMUNE', 'NOT IMMUNE', 'nothing', '2014-09-03', 'nothing', '-', '2014-10-29', 'nothing', '-', '2007-05-28', 'nothing', '-', 'nothing', '6.1', '70', 'nothing'),
('rakesh', 'nuvvula', 91, 2147483647, '0', 7, 1998, 'Male', 'Unemployed', 'Single', 'manofcoding07@gmail.com', 2147483647, 'kmm', 'hhh', 'khammam', 'khammam', 507003, 'India', 'nuvvula', 'sathyanarayana', 'son', 91, 2147483647, 91, 2147483647, 'nuvvula', 'nagamani', 'son', 91, 2147483647, 0, 0, 'No', 'NOT IMMUNE', 'NOT IMMUNE', '', '1945-01-01', 'nothing', '+', '1998-08-31', 'nothing', '-', '2917-07-05', 'nothing', '+', '', '6', '74', ''),
('rakesh', 'nuvvula', 91, 2147483647, 'January', 7, 1998, 'Male', 'Unemployed', 'Single', 'manofcoding07@gmail.com', 2147483647, 'kmm', 'hhh', 'khammam', 'khammam', 507003, 'India', 'nuvvula', 'sathyanarayana', 'son', 91, 2147483647, 91, 2147483647, 'nuvvula', 'nagamani', 'son', 91, 2147483647, 91, 2147483647, 'No', 'NOT IMMUNE', 'NOT IMMUNE', '', '1945-01-01', 'nothing', '+', '1998-08-31', 'nothing', '-', '2917-07-05', 'nothing', '+', '', '6', '74', ''),
('rakesh', 'nuvvula', 91, 2147483647, 'January', 7, 1998, 'Male', 'Unemployed', 'Single', 'manofcoding07@gmail.com', 2147483647, 'kmm', 'hhh', 'khammam', 'khammam', 507003, 'India', 'nuvvula', 'sathyanarayana', 'son', 91, 2147483647, 91, 2147483647, 'nuvvula', 'nagamani', 'son', 91, 2147483647, 91, 2147483647, 'No', 'NOT IMMUNE', 'NOT IMMUNE', '', '1945-01-01', 'nothing', '+', '1998-08-31', 'nothing', '-', '2917-07-05', 'nothing', '+', '', '6', '74', ''),
('Ani', 'R', 91, 2147483647, 'April', 24, 1996, 'Male', 'Employed', 'Single', 'aniruddha04@gmail.com', 2147483647, 'Rue', 'Vaugirad', 'Paris', 'Ille', 75015, 'France', 'John', 'M', 'Friend', 91, 2147483647, 0, 0, 'Frank', 'J', 'Uncle', 91, 1234567890, 0, 0, 'No', 'IMMUNE', 'IMMUNE', 'Broken leg', '2019-01-02', 'Yes', '+', '2019-03-04', 'No', '-', '2019-12-07', 'No', '-', 'Pox\r\n', '185', '70', 'Liver');

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
(0, 'Aniruddha', 'aniruddha04@gmail.com', '', '1a1dc91c907325c69271ddf0c944bc72'),
(0, 'Frank', 'frank@gmail.com', '', '1a1dc91c907325c69271ddf0c944bc72'),
(0, 'John', 'john@email.com', '', '1a1dc91c907325c69271ddf0c944bc72'),
(0, 'David', 'david@email.com', '', '1a1dc91c907325c69271ddf0c944bc72'),
(0, 'Joe', 'joe@email.com', '', '1a1dc91c907325c69271ddf0c944bc72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`idDoctor`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

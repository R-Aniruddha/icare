-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 12:32 AM
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
('Doctor1', '1234657980', 'Rue ', 'Paris', 'France', 'www.doctor.com', 'male', '2019-06-18', 'French', 'Surgeon', 'Surgery', 'MBBS', 'yes');

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
(0, 'Aniruddha', 'aniruddha04@gmail.com', '', '1a1dc91c907325c69271ddf0c944bc72');

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

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2022 at 09:06 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendent`
--

DROP TABLE IF EXISTS `attendent`;
CREATE TABLE IF NOT EXISTS `attendent` (
  `Emp_No` int(10) NOT NULL,
  `Hourly_Rate` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendent`
--

INSERT INTO `attendent` (`Emp_No`, `Hourly_Rate`) VALUES
(26, '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `Bed_ID` int(4) NOT NULL AUTO_INCREMENT,
  `Ward_No` int(3) DEFAULT NULL,
  PRIMARY KEY (`Bed_ID`),
  KEY `WardNo` (`Ward_No`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`Bed_ID`, `Ward_No`) VALUES
(1, 4),
(2, 4),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

DROP TABLE IF EXISTS `cleaner`;
CREATE TABLE IF NOT EXISTS `cleaner` (
  `Emp_No` int(10) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Contract_No` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`Emp_No`, `Start_Date`, `End_Date`, `Contract_No`) VALUES
(25, '2022-07-23', '2022-09-09', 345);

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

DROP TABLE IF EXISTS `diagnose`;
CREATE TABLE IF NOT EXISTS `diagnose` (
  `Diagnose_Code` int(5) NOT NULL AUTO_INCREMENT,
  `Emp_No` int(10) NOT NULL,
  `Patient_ID` int(10) NOT NULL,
  `Diagnosis_Name` varchar(50) NOT NULL,
  `Diagnosis_Date` date NOT NULL,
  `Diagnosis_Time` time NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`Diagnose_Code`),
  KEY `Emp_No` (`Emp_No`),
  KEY `Patient_ID` (`Patient_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_unit`
--

DROP TABLE IF EXISTS `diagnostic_unit`;
CREATE TABLE IF NOT EXISTS `diagnostic_unit` (
  `Diagnostic_Unit_No` int(3) NOT NULL AUTO_INCREMENT,
  `Diagnostic_Name` varchar(50) NOT NULL,
  `Unit_ID` int(2) NOT NULL,
  PRIMARY KEY (`Diagnostic_Unit_No`),
  KEY `DignosePCU` (`Unit_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostic_unit`
--

INSERT INTO `diagnostic_unit` (`Diagnostic_Unit_No`, `Diagnostic_Name`, `Unit_ID`) VALUES
(2, 'bla', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Emp_No` int(10) NOT NULL,
  `DEA_No` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Emp_No`, `DEA_No`) VALUES
(21, 3),
(22, 6),
(23, 7);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_speciality`
--

DROP TABLE IF EXISTS `doctor_speciality`;
CREATE TABLE IF NOT EXISTS `doctor_speciality` (
  `Emp_No` int(10) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  PRIMARY KEY (`Emp_No`,`Speciality`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_speciality`
--

INSERT INTO `doctor_speciality` (`Emp_No`, `Speciality`) VALUES
(23, 'Dermatology'),
(23, 'Neurology');

-- --------------------------------------------------------

--
-- Table structure for table `dotreatment`
--

DROP TABLE IF EXISTS `dotreatment`;
CREATE TABLE IF NOT EXISTS `dotreatment` (
  `Emp_No` int(10) NOT NULL,
  `Treat_Code` int(5) NOT NULL,
  `Patient_ID` int(10) NOT NULL,
  `Treatment_Date` date NOT NULL,
  `Treatment_Time` time NOT NULL,
  PRIMARY KEY (`Emp_No`,`Treat_Code`,`Patient_ID`),
  KEY `Treat_Code` (`Treat_Code`),
  KEY `Patient_ID` (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

DROP TABLE IF EXISTS `drug`;
CREATE TABLE IF NOT EXISTS `drug` (
  `Drug_Code` int(5) NOT NULL AUTO_INCREMENT,
  `Drug_Name` varchar(50) NOT NULL,
  `Drug_Type` varchar(20) NOT NULL,
  `Unit_Cost` decimal(5,2) NOT NULL,
  `Treat_Code` int(5) NOT NULL,
  PRIMARY KEY (`Drug_Code`),
  KEY `Treat_Code` (`Treat_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Drug_Code`, `Drug_Name`, `Drug_Type`, `Unit_Cost`, `Treat_Code`) VALUES
(2, 'two', 'Tablet', '100.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

DROP TABLE IF EXISTS `emergency_contact`;
CREATE TABLE IF NOT EXISTS `emergency_contact` (
  `Patient_ID` int(10) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Fname`,`Lname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`Patient_ID`, `Fname`, `Lname`, `Address`, `Relationship`, `Contact_No`) VALUES
(13, 'Kamal', 'Liyanarachchi', 'Hoamagama', 'Son', '0772853581'),
(13, 'NIpun', 'samarasinghe', 'colombo', 'neighbor', '0117563442'),
(16, 'anura', 'abeysinghe', 'kaluthara', 'friend', '0772834680'),
(21, 'varuna', 'samaraweera', 'Hikkaduwa', 'friend', '0723456698'),
(22, 'Varuni', 'wijesinghe', 'kotahena', 'neighbor', '0117765444'),
(23, 'chandula', 'perera', 'kottawa', 'friend', '0772279718'),
(24, 'sandew', 'senerath', 'kirulapone', 'friend', '0771878091'),
(25, 'Ahamed', 'ilham', 'Kalutara', 'friend', '0772864388'),
(26, 'vinuk', 'perera', 'padukka', 'friend', '0772854781'),
(27, 'pasindu', 'abeyweera', 'kotahena', 'neighbor', '0117756442'),
(29, 'Kasun', 'Liyanarachchi', 'Hoamagama', 'Son', '0771856888'),
(29, 'nimal', 'Liyanarachchi', 'colombo', 'friend', '0771857798');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_No` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Work_Status` varchar(50) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_No`, `Name`, `Address`, `Work_Status`, `Type`, `Contact_No`) VALUES
(21, 'Mendis', 'Kirulapana', 'Full-Time', 'Medical', '0777244824'),
(22, 'Priyantha', 'Awissawella', 'Part-Time', 'Medical', '0112532850'),
(23, 'Menura', 'Godagama', 'Part-Time', 'Medical', '0117856758'),
(24, 'Vishmi', 'No 35 Colombo 07', 'Full-Time', 'Non-Medical', '0112876852'),
(25, 'Shantha', 'No1, Baker Street', 'Full-Time', 'Non-Medical', '0777289877'),
(26, 'Suranimala', 'town street', 'Part-Time', 'Non-Medical', '0112878055');

-- --------------------------------------------------------

--
-- Table structure for table `inpatientdailysymptoms`
--

DROP TABLE IF EXISTS `inpatientdailysymptoms`;
CREATE TABLE IF NOT EXISTS `inpatientdailysymptoms` (
  `Patient_ID` int(10) NOT NULL,
  `Emp_No` int(10) NOT NULL,
  `Record_Time` time NOT NULL,
  `Record_Date` date NOT NULL,
  `Symptom` varchar(50) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Emp_No`,`Record_Time`,`Record_Date`,`Symptom`),
  KEY `symptom` (`Emp_No`,`Patient_ID`,`Record_Date`,`Record_Time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inpatient_daily_record`
--

DROP TABLE IF EXISTS `inpatient_daily_record`;
CREATE TABLE IF NOT EXISTS `inpatient_daily_record` (
  `Patient_ID` int(10) NOT NULL,
  `Emp_No` int(10) NOT NULL,
  `Record_Date` date NOT NULL,
  `Record_Time` time NOT NULL,
  `Blood_Pressure` int(3) NOT NULL,
  `Weight` decimal(5,2) NOT NULL,
  `Pulse` int(11) NOT NULL,
  `Temperature` float NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Emp_No`,`Record_Date`,`Record_Time`),
  KEY `Emp_No` (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

DROP TABLE IF EXISTS `insurance_company`;
CREATE TABLE IF NOT EXISTS `insurance_company` (
  `Patient_ID` int(10) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Branch_Name` varchar(50) NOT NULL,
  `Branch_Address` varchar(100) NOT NULL,
  `Company_Address` varchar(150) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Company_Name`),
  KEY `Company_Name` (`Company_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`Patient_ID`, `Company_Name`, `Branch_Name`, `Branch_Address`, `Company_Address`, `Contact_No`) VALUES
(13, 'first Company', 'Kottawa branch', 'kottawa', 'Kottawa', '0112675758'),
(13, 'second company', 'maharagama', 'maharagama', 'maharagama', '0112678948'),
(16, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, 'final company', 'Kaluthara branch', 'kaluthara', 'kaluthara', '0112467758'),
(29, 'random Company', 'Nugegoda', 'Nugegoda', 'Nugegoda', '0112487758');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_subscriber`
--

DROP TABLE IF EXISTS `insurance_subscriber`;
CREATE TABLE IF NOT EXISTS `insurance_subscriber` (
  `Patient_ID` int(10) NOT NULL,
  `Company_Name` char(100) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Company_Name`,`Fname`,`Lname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_subscriber`
--

INSERT INTO `insurance_subscriber` (`Patient_ID`, `Company_Name`, `Fname`, `Lname`, `Relationship`, `Address`, `Contact_No`) VALUES
(13, 'first Company', 'waruna', 'weerathunga', 'friend', 'colombo', '0778652314'),
(13, 'second company', 'Nimal', 'Liyanarachchi', 'son', 'kaluthara', '0778652314'),
(16, '', '', '', '', '', ''),
(21, '', '', '', '', '', ''),
(22, '', '', '', '', '', ''),
(23, '', '', '', '', '', ''),
(24, '', '', '', '', '', ''),
(25, '', '', '', '', '', ''),
(26, 'final company', 'kamal', 'Liyanarachchi', 'friend', 'kaluthara', '0778652314'),
(29, 'random Company', 'Anura', 'wijethunga', 'friend', 'pannipitiya', '0778652314');

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

DROP TABLE IF EXISTS `medical_staff`;
CREATE TABLE IF NOT EXISTS `medical_staff` (
  `Emp_No` int(10) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Joined_Date` date NOT NULL,
  `Resign_Date` date NOT NULL,
  `Council_RegNo` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`Emp_No`, `Type`, `Joined_Date`, `Resign_Date`, `Council_RegNo`) VALUES
(21, 'Doctor', '2022-09-09', '2022-09-29', 2),
(22, 'Doctor', '2022-09-23', '2022-10-07', 5),
(23, 'Doctor', '2022-09-02', '2022-09-22', 157),
(24, 'Nurse', '2022-09-29', '2022-09-09', 13);

-- --------------------------------------------------------

--
-- Table structure for table `non_medical_staff`
--

DROP TABLE IF EXISTS `non_medical_staff`;
CREATE TABLE IF NOT EXISTS `non_medical_staff` (
  `Emp_No` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_medical_staff`
--

INSERT INTO `non_medical_staff` (`Emp_No`, `Type`) VALUES
(25, 'Cleaner'),
(26, 'Attendant');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `Emp_No` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Emp_No`) VALUES
(24);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Patient_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Arrival_Date` date DEFAULT NULL,
  `Arrival_Time` time DEFAULT NULL,
  `Admitted_Date` date DEFAULT NULL,
  `Admitted_Time` time DEFAULT NULL,
  `Discharged_Date` date DEFAULT NULL,
  `Discharged_Time` time DEFAULT NULL,
  `Weight` float DEFAULT NULL,
  `Blood_Pressure` float DEFAULT NULL,
  `Temperature` float DEFAULT NULL,
  `Pulse` int(11) DEFAULT NULL,
  `Vital_Date` date DEFAULT NULL,
  `Vital_Time` time DEFAULT NULL,
  `In_Flag` varchar(20) DEFAULT NULL,
  `Out_Flag` varchar(20) DEFAULT NULL,
  `Admitted_Doctor` int(10) DEFAULT NULL,
  `Company_Name` varchar(100) DEFAULT NULL,
  `Ward_No` int(3) DEFAULT NULL,
  `Bed_ID` int(4) DEFAULT NULL,
  PRIMARY KEY (`Patient_ID`),
  KEY `Admit` (`Admitted_Doctor`),
  KEY `Bed_ID` (`Bed_ID`),
  KEY `Ward_No` (`Ward_No`),
  KEY `Company_Name` (`Company_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Name`, `Arrival_Date`, `Arrival_Time`, `Admitted_Date`, `Admitted_Time`, `Discharged_Date`, `Discharged_Time`, `Weight`, `Blood_Pressure`, `Temperature`, `Pulse`, `Vital_Date`, `Vital_Time`, `In_Flag`, `Out_Flag`, `Admitted_Doctor`, `Company_Name`, `Ward_No`, `Bed_ID`) VALUES
(13, 'Ashan', '2022-09-16', '07:05:00', '2022-09-01', '19:24:00', '2022-09-15', '15:08:00', NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'YES', NULL, 'second Company', 2, 2),
(14, 'Ashan', NULL, NULL, '2022-09-15', '10:09:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'YES', NULL, NULL, NULL, 2),
(16, 'Vinuk', NULL, NULL, '2022-09-02', '18:22:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, NULL, 2, 1),
(20, 'Vinuk kp', '2022-09-16', '18:45:00', NULL, NULL, NULL, NULL, 61, 123, 38, 70, '2021-09-08', '22:48:00', 'NO', 'YES', NULL, NULL, NULL, NULL),
(21, 'InPatient', NULL, NULL, '2022-09-07', '09:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, '', NULL, NULL),
(22, 'jayani', NULL, NULL, '2022-09-14', '09:42:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, '', NULL, NULL),
(23, 'pandula', NULL, NULL, '2022-09-09', '06:46:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, '', NULL, NULL),
(24, 'ahmad', NULL, NULL, '2022-09-14', '06:53:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, '', NULL, NULL),
(25, 'Randinu', NULL, NULL, '2022-09-01', '09:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'YES', NULL, '', NULL, NULL),
(26, 'Santhush', NULL, NULL, '2022-09-22', '08:11:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, 'final company', NULL, NULL),
(27, 'vanindu', NULL, NULL, '2022-09-01', '08:13:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, NULL, NULL, NULL),
(28, 'wanidu', '2022-09-23', '08:17:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NO', 'YES', NULL, NULL, NULL, NULL),
(29, 'nipuni', NULL, NULL, '2022-09-22', '08:19:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YES', 'NO', NULL, 'second Company', NULL, NULL),
(30, 'dulvi', '2022-09-23', '08:21:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NO', 'YES', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_care_unit`
--

DROP TABLE IF EXISTS `patient_care_unit`;
CREATE TABLE IF NOT EXISTS `patient_care_unit` (
  `Unit_ID` int(2) NOT NULL AUTO_INCREMENT,
  `Emp_No` int(10) NOT NULL,
  PRIMARY KEY (`Unit_ID`),
  KEY `EmpPCU` (`Emp_No`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_care_unit`
--

INSERT INTO `patient_care_unit` (`Unit_ID`, `Emp_No`) VALUES
(2, 21),
(3, 24);

-- --------------------------------------------------------

--
-- Table structure for table `patient_symptom`
--

DROP TABLE IF EXISTS `patient_symptom`;
CREATE TABLE IF NOT EXISTS `patient_symptom` (
  `Patient_ID` int(10) NOT NULL,
  `Symptom` varchar(50) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Symptom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_symptom`
--

INSERT INTO `patient_symptom` (`Patient_ID`, `Symptom`) VALUES
(20, 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `pcuassign`
--

DROP TABLE IF EXISTS `pcuassign`;
CREATE TABLE IF NOT EXISTS `pcuassign` (
  `Emp_No` int(10) NOT NULL,
  `Unit_ID` int(2) NOT NULL,
  `No_Of_Hours_Per_Week` int(3) NOT NULL,
  PRIMARY KEY (`Emp_No`,`Unit_ID`),
  KEY `Unit_ID` (`Unit_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `see_patient`
--

DROP TABLE IF EXISTS `see_patient`;
CREATE TABLE IF NOT EXISTS `see_patient` (
  `Patient_ID` int(10) NOT NULL,
  `Emp_No` int(10) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Emp_No`),
  KEY `Emp_No` (`Emp_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

DROP TABLE IF EXISTS `supply`;
CREATE TABLE IF NOT EXISTS `supply` (
  `Registration_No` int(10) NOT NULL,
  `Drug_Code` int(5) NOT NULL,
  `Supply_Date` date NOT NULL,
  `Unit_Cost` decimal(5,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total_Cost` decimal(10,2) NOT NULL,
  `Drug_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`Registration_No`,`Drug_Code`),
  KEY `Drug_Code` (`Drug_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Test_Code` int(5) NOT NULL AUTO_INCREMENT,
  `Test_Name` varchar(50) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Treat_Code` int(5) NOT NULL,
  PRIMARY KEY (`Test_Code`),
  KEY `test_ibfk_1` (`Treat_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
CREATE TABLE IF NOT EXISTS `treatment` (
  `Treat_Code` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Treat_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treat_Code`) VALUES
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `Registration_No` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact_No` char(10) NOT NULL,
  PRIMARY KEY (`Registration_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `Ward_No` int(3) NOT NULL AUTO_INCREMENT,
  `Ward_Name` varchar(50) NOT NULL,
  `Unit_ID` int(2) NOT NULL,
  PRIMARY KEY (`Ward_No`),
  KEY `WardPCU` (`Unit_ID`),
  KEY `WardNo` (`Ward_No`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`Ward_No`, `Ward_Name`, `Unit_ID`) VALUES
(4, 'ward 3', 3),
(6, 'ward 7', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendent`
--
ALTER TABLE `attendent`
  ADD CONSTRAINT `EmpAttendent` FOREIGN KEY (`Emp_No`) REFERENCES `employee` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `wardbed` FOREIGN KEY (`Ward_No`) REFERENCES `ward` (`Ward_No`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD CONSTRAINT `EmpCleaning` FOREIGN KEY (`Emp_No`) REFERENCES `employee` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnose`
--
ALTER TABLE `diagnose`
  ADD CONSTRAINT `diagnose_ibfk_1` FOREIGN KEY (`Emp_No`) REFERENCES `doctor` (`Emp_No`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnose_ibfk_2` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnostic_unit`
--
ALTER TABLE `diagnostic_unit`
  ADD CONSTRAINT `DignosePCU` FOREIGN KEY (`Unit_ID`) REFERENCES `patient_care_unit` (`Unit_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `MedStaffDoc` FOREIGN KEY (`Emp_No`) REFERENCES `medical_staff` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_speciality`
--
ALTER TABLE `doctor_speciality`
  ADD CONSTRAINT `DecSpec` FOREIGN KEY (`Emp_No`) REFERENCES `doctor` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dotreatment`
--
ALTER TABLE `dotreatment`
  ADD CONSTRAINT `dotreatment_ibfk_1` FOREIGN KEY (`Emp_No`) REFERENCES `doctor` (`Emp_No`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `dotreatment_ibfk_2` FOREIGN KEY (`Treat_Code`) REFERENCES `treatment` (`Treat_Code`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dotreatment_ibfk_3` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `drug_ibfk_1` FOREIGN KEY (`Treat_Code`) REFERENCES `treatment` (`Treat_Code`) ON UPDATE CASCADE;

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `PatientEmergency` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inpatientdailysymptoms`
--
ALTER TABLE `inpatientdailysymptoms`
  ADD CONSTRAINT `symptom` FOREIGN KEY (`Emp_No`,`Patient_ID`,`Record_Date`,`Record_Time`) REFERENCES `inpatient_daily_record` (`Emp_No`, `Patient_ID`, `Record_Date`, `Record_Time`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inpatient_daily_record`
--
ALTER TABLE `inpatient_daily_record`
  ADD CONSTRAINT `inpatient_daily_record_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inpatient_daily_record_ibfk_2` FOREIGN KEY (`Emp_No`) REFERENCES `nurse` (`Emp_No`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD CONSTRAINT `PatientInsurance` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `insurance_subscriber`
--
ALTER TABLE `insurance_subscriber`
  ADD CONSTRAINT `PatientInsuSub1` FOREIGN KEY (`Patient_ID`,`Company_Name`) REFERENCES `insurance_company` (`Patient_ID`, `Company_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD CONSTRAINT `EmpMedical` FOREIGN KEY (`Emp_No`) REFERENCES `employee` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `MedStaffNurse` FOREIGN KEY (`Emp_No`) REFERENCES `medical_staff` (`Emp_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `Admit` FOREIGN KEY (`Admitted_Doctor`) REFERENCES `doctor` (`Emp_No`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_company_fk4` FOREIGN KEY (`Company_Name`) REFERENCES `insurance_company` (`Company_Name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Bed_ID`) REFERENCES `bed` (`Bed_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD CONSTRAINT `EmpPCU` FOREIGN KEY (`Emp_No`) REFERENCES `employee` (`Emp_No`) ON UPDATE CASCADE;

--
-- Constraints for table `patient_symptom`
--
ALTER TABLE `patient_symptom`
  ADD CONSTRAINT `patientSymp` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pcuassign`
--
ALTER TABLE `pcuassign`
  ADD CONSTRAINT `pcuassign_ibfk_1` FOREIGN KEY (`Emp_No`) REFERENCES `employee` (`Emp_No`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pcuassign_ibfk_2` FOREIGN KEY (`Unit_ID`) REFERENCES `patient_care_unit` (`Unit_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `see_patient`
--
ALTER TABLE `see_patient`
  ADD CONSTRAINT `see_patient_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `see_patient_ibfk_2` FOREIGN KEY (`Emp_No`) REFERENCES `doctor` (`Emp_No`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `registrationsupply` FOREIGN KEY (`Registration_No`) REFERENCES `vendor` (`Registration_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`Drug_Code`) REFERENCES `drug` (`Drug_Code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`Treat_Code`) REFERENCES `treatment` (`Treat_Code`) ON UPDATE CASCADE;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `WardPCU` FOREIGN KEY (`Unit_ID`) REFERENCES `patient_care_unit` (`Unit_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

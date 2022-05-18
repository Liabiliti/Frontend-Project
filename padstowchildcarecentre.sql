-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: May 18, 2022 at 02:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padstowchildcarecentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE `allergy` (
  `AllergyID` int(11) NOT NULL,
  `AllergyType` varchar(45) NOT NULL,
  `AllergyName` varchar(45) NOT NULL,
  `AllergySymptoms` varchar(200) NOT NULL,
  `AllergyDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`AllergyID`, `AllergyType`, `AllergyName`, `AllergySymptoms`, `AllergyDescription`) VALUES
(510, 'Insect Allergy', 'Bee sting', 'Anaphylaxis', 'An abnormal reaction to a bee sting'),
(511, 'Food Allergy', 'Peanut butter', 'Hives', 'An unpleasant or dangerous immune system reaction after Peanut butter is consumed'),
(512, 'Latex Allergy', 'Latex', 'Skin irritation', 'An allergic reaction to certain proteins found in natural rubber latex'),
(513, 'Pollen Allergy', 'Pollen', 'Inflamed eyes', 'When pollen is breathed in an immune system reaction occurs'),
(514, 'Pet Allergy', 'Cat', 'Runny nose and sneezing', 'An abnormal immune reaction to proteins in a cats skin cells, saliva or urine.'),
(515, 'Food Allergy', 'Chocolate', 'Anaphylaxis', 'An unpleasant or dangerous immune system reaction after chocolate is consumed'),
(516, 'Pet Allergy', 'Dog', 'Runny nose and sneezing', 'An abnormal immune reaction to proteins in a dogs skin cells, saliva or urine.'),
(517, 'Drug Allergy', 'Ibuprofen', 'Anaphylaxis', 'An abnormal reaction of your immune system to Ibuprofen'),
(518, 'Mold Allergy', 'Mildew', 'Runny nose and sneezing', 'Immune system overreacts when you breathe in mold spores.'),
(519, 'Drug Allergy', 'Penicillin', 'Anaphylaxis', 'An abnormal reaction of your immune system to Penicillin');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `ChildID` int(11) NOT NULL,
  `ChildFirstName` varchar(50) NOT NULL,
  `ChildLastName` varchar(50) NOT NULL,
  `ChildDOB` date NOT NULL,
  `ChildGender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`ChildID`, `ChildFirstName`, `ChildLastName`, `ChildDOB`, `ChildGender`) VALUES
(15, 'Nicholas', 'Payk', '2019-08-21', 'M'),
(16, 'Peter', 'Parker', '2018-08-10', 'M'),
(17, 'Richard ', 'Grayson', '2017-12-01', 'M'),
(18, 'Rachel', 'Roth', '2019-12-10', 'F'),
(19, 'Koriandr', 'Starfire', '2018-10-18', 'F'),
(20, 'Garfield', 'Logan', '2019-02-22', 'M'),
(21, 'Miles', 'Moralis', '2018-08-03', 'M'),
(22, 'Victor', 'Stone', '2018-06-29', 'O'),
(23, 'Jaime', 'Reyes', '2017-06-15', 'O'),
(24, 'Conner', 'Kent', '2017-03-21', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `childallergy`
--

CREATE TABLE `childallergy` (
  `ChildAllergyID` int(11) NOT NULL,
  `ChildID` int(11) NOT NULL,
  `AllergyID` int(11) NOT NULL,
  `Severity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childallergy`
--

INSERT INTO `childallergy` (`ChildAllergyID`, `ChildID`, `AllergyID`, `Severity`) VALUES
(1, 15, 510, 'Local'),
(2, 16, 511, 'Medium'),
(3, 18, 517, 'Severe'),
(4, 18, 514, 'Local'),
(5, 21, 511, 'Medium'),
(6, 15, 515, 'Medium'),
(7, 24, 512, 'Medium'),
(8, 17, 516, 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `childmedicine`
--

CREATE TABLE `childmedicine` (
  `ChildMedicineID` int(11) NOT NULL,
  `ChildID` int(11) NOT NULL,
  `MedicineID` int(11) NOT NULL,
  `Dosage` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childmedicine`
--

INSERT INTO `childmedicine` (`ChildMedicineID`, `ChildID`, `MedicineID`, `Dosage`) VALUES
(1, 17, 3, '50'),
(2, 19, 7, '10'),
(3, 18, 2, '100'),
(4, 19, 3, '10'),
(5, 20, 3, '25'),
(6, 24, 1, '10'),
(7, 20, 3, '20'),
(8, 22, 6, '15');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `DoctorLastName` varchar(50) NOT NULL,
  `DoctorStreetAddress` varchar(100) NOT NULL,
  `DoctorTown` varchar(50) NOT NULL,
  `DoctorState` varchar(10) NOT NULL,
  `DoctorPostcode` int(11) NOT NULL,
  `DoctorPhoneNumber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `DoctorLastName`, `DoctorStreetAddress`, `DoctorTown`, `DoctorState`, `DoctorPostcode`, `DoctorPhoneNumber`) VALUES
(3, 'House', '65 Gregory Way', 'Marrinup', 'WA', 6213, '(08) 9416 8024'),
(4, 'Howser', '57 Fairview Street', 'Kariah', 'VIC', 3260, '(03) 5309 1481'),
(5, 'Scully', '19 Weemala Avenue', 'Wyangala', 'NSW', 2808, '(02) 4032 8816'),
(6, 'Quinn', '94 Romawi Road', 'Broadlands', 'VIC', 3875, '(03) 5367 0846'),
(7, 'Crane', '65 Noalimba Avenue', 'Torryburn', 'NSW', 2358, '(02) 5993 5859'),
(8, 'Dorian', '62 Normans Road', 'Apsley', 'VIC', 3319, '(03) 5384 8168'),
(9, 'Quincy', '5 Shadforth Street', 'Benjeroop', 'VIC', 3579, '(03) 5320 2210');

-- --------------------------------------------------------

--
-- Table structure for table `doctorchild`
--

CREATE TABLE `doctorchild` (
  `DoctorChildID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `ChildID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorchild`
--

INSERT INTO `doctorchild` (`DoctorChildID`, `DoctorID`, `ChildID`) VALUES
(1, 4, 18),
(2, 4, 21),
(3, 8, 15),
(4, 3, 18),
(5, 6, 17),
(6, 7, 18),
(7, 5, 23),
(8, 5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `GuardianID` int(11) NOT NULL,
  `GuardianFirstName` varchar(50) NOT NULL,
  `GuardianLastName` varchar(50) NOT NULL,
  `GuardianStreetAddress` varchar(100) NOT NULL,
  `GuardianTown` varchar(50) NOT NULL,
  `GuardianState` varchar(10) NOT NULL,
  `GuardianPostcode` int(11) NOT NULL,
  `GuardianPhoneNumber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`GuardianID`, `GuardianFirstName`, `GuardianLastName`, `GuardianStreetAddress`, `GuardianTown`, `GuardianState`, `GuardianPostcode`, `GuardianPhoneNumber`) VALUES
(1, 'Bruce', 'Wayne', '65 Kooljak Road', 'Marybrook', 'WA', 6280, '(08) 9059 3635'),
(2, 'Tony', 'Stark', '66 Plug Street', 'Wandsworth', 'NSW', 2365, '(02) 6791 1145'),
(3, 'Clark', 'Kent', '67 Healy Road', 'Mullalyup', 'WA', 6252, '(08) 9082 8787'),
(4, 'Steve', 'Rogers', '92 Cornish Street', 'Hillside', 'VIC', 3037, '(03) 9100 9852'),
(5, 'James', 'Howlett', '90 Seninis Road', 'Townsville Mc', 'QLD', 4810, '(07) 4083 3484'),
(6, 'Bruce', 'Banner', '89 Kogil Street', 'Weetaliba', 'NSW', 2395, '(02) 6726 7957'),
(7, 'Thor', 'Odinson', '19 Arthur Street', 'Bobadah', 'NSW', 2825, '(02) 4062 4137');

-- --------------------------------------------------------

--
-- Table structure for table `guardianchild`
--

CREATE TABLE `guardianchild` (
  `GuardianChildID` int(11) NOT NULL,
  `GuardianID` int(11) NOT NULL,
  `ChildID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardianchild`
--

INSERT INTO `guardianchild` (`GuardianChildID`, `GuardianID`, `ChildID`) VALUES
(1, 2, 16),
(2, 2, 19),
(3, 5, 15),
(4, 1, 16),
(5, 7, 22),
(6, 3, 18),
(7, 5, 15),
(8, 4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `guardianpayment`
--

CREATE TABLE `guardianpayment` (
  `GuardianPaymentID` int(11) NOT NULL,
  `GuardianID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardianpayment`
--

INSERT INTO `guardianpayment` (`GuardianPaymentID`, `GuardianID`, `PaymentID`) VALUES
(4, 1, 1),
(5, 3, 4),
(6, 4, 3),
(7, 5, 2),
(8, 4, 5),
(9, 6, 2),
(10, 7, 7),
(11, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MedicineID` int(11) NOT NULL,
  `MedicineType` varchar(50) NOT NULL,
  `MedicineName` varchar(50) NOT NULL,
  `MedicineDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`MedicineID`, `MedicineType`, `MedicineName`, `MedicineDescription`) VALUES
(1, 'Capsules', 'Doxycycline', 'Used in the treatment of infections caused by bacteria and certain parasites.'),
(2, 'Capsules', 'Cephalexin', 'An antibiotic that can treat a number of bacterial infections.'),
(3, 'Capsules', 'Lansoprazole', 'A medication which reduces stomach acid.'),
(4, 'Liquid', 'Amoxicillin', 'An antibiotic used to treat a number of bacterial infections.'),
(5, 'Inhalers', 'Albuterol', 'A medication that opens up the medium and large airways in the lungs.'),
(6, 'Tablet', 'Ibuprofen', 'A medication in the nonsteroidal anti inflammatory drug class that is used for treating pain, fever, and inflammation.'),
(7, 'Tablet', 'Prednisone', 'A glucocorticoid medication mostly used to suppress the immune system and decrease inflammation in conditions such as asthma, COPD, and rheumatologic diseases.'),
(8, 'Liquid', 'Azithromycin', 'An antibiotic medication used for the treatment of a number of bacterial infections.'),
(9, 'Cream', 'Fluticasone', 'A manufactured glucocorticoid used to treat nasal symptoms.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `PaymentDueDate` date NOT NULL,
  `AmountDue` decimal(10,0) NOT NULL,
  `PaymentPaidDate` date NOT NULL,
  `ActualAmountPaid` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `PaymentDueDate`, `AmountDue`, `PaymentPaidDate`, `ActualAmountPaid`) VALUES
(1, '2022-04-16', '110', '2022-05-16', '100'),
(2, '2022-04-12', '300', '2022-05-13', '300'),
(3, '2022-02-02', '500', '2022-05-03', '225'),
(4, '2022-01-01', '50', '2022-12-30', '50'),
(5, '2022-03-12', '350', '2022-03-21', '350'),
(6, '2022-05-23', '700', '2022-06-04', '200'),
(7, '2022-03-04', '540', '2022-05-06', '500'),
(8, '2022-02-20', '430', '2022-03-21', '400'),
(9, '2022-05-06', '100', '2022-05-16', '100');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffFirstName` varchar(50) NOT NULL,
  `StaffLastName` varchar(50) NOT NULL,
  `StaffGender` varchar(10) NOT NULL,
  `StaffHomePhone` varchar(14) NOT NULL,
  `StaffWorkPhone` varchar(14) NOT NULL,
  `StaffonDuty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffFirstName`, `StaffLastName`, `StaffGender`, `StaffHomePhone`, `StaffWorkPhone`, `StaffonDuty`) VALUES
(1, 'Rick', 'Jones', 'M', '02 6129 3553 ', '02 4991 6938 ', 'No'),
(2, 'Franklin', 'Nelson', 'M', '03 8253 0816', '03 5385 8302', 'No'),
(3, 'Phil', 'Coulson', 'M', '08 9084 3134', '08 8779 7746', 'No'),
(4, 'Mary', 'Jane', 'F', '07 3955 0753', '07 4989 7802', 'No'),
(5, 'Nick', 'Fury', 'M', '08 8277 2390', '08 8287 7712', 'No'),
(6, 'Lois', 'Lane', 'F', '03 5318 1699', '03 5392 1350', 'No'),
(7, 'Lana', 'Lang', 'F', '02 4713 1423', '02 4707 3821', 'No'),
(8, 'Harley', 'Quinn', 'F', '02 4041 1848', '02 4991 2452', 'No'),
(9, 'Bucky', 'Barnes', 'M', '03 5333 1253', '03 6228 1361', 'No'),
(10, 'Wally', 'West', 'M', '03 5312 4851', '03 5338 4823', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `staffchild`
--

CREATE TABLE `staffchild` (
  `StaffChildID` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `ChildID1` int(11) NOT NULL,
  `ChildID2` int(11) NOT NULL,
  `ChildID3` int(11) NOT NULL,
  `ChildID4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffchild`
--

INSERT INTO `staffchild` (`StaffChildID`, `StaffID`, `ChildID1`, `ChildID2`, `ChildID3`, `ChildID4`) VALUES
(4, 1, 16, 17, 18, 19),
(5, 2, 16, 17, 18, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergy`
--
ALTER TABLE `allergy`
  ADD PRIMARY KEY (`AllergyID`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `childallergy`
--
ALTER TABLE `childallergy`
  ADD PRIMARY KEY (`ChildAllergyID`),
  ADD KEY `Child_FK` (`ChildID`),
  ADD KEY `Allergy_FK` (`AllergyID`);

--
-- Indexes for table `childmedicine`
--
ALTER TABLE `childmedicine`
  ADD PRIMARY KEY (`ChildMedicineID`),
  ADD KEY `Child_FK` (`ChildID`),
  ADD KEY `Medicine_FK` (`MedicineID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `doctorchild`
--
ALTER TABLE `doctorchild`
  ADD PRIMARY KEY (`DoctorChildID`),
  ADD KEY `Doctor_FK` (`DoctorID`),
  ADD KEY `Child_FK` (`ChildID`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`GuardianID`);

--
-- Indexes for table `guardianchild`
--
ALTER TABLE `guardianchild`
  ADD PRIMARY KEY (`GuardianChildID`),
  ADD KEY `Guardian_FK` (`GuardianID`),
  ADD KEY `Child_FK` (`ChildID`);

--
-- Indexes for table `guardianpayment`
--
ALTER TABLE `guardianpayment`
  ADD PRIMARY KEY (`GuardianPaymentID`),
  ADD KEY `Guardian_FK` (`GuardianID`),
  ADD KEY `Payment_FK` (`PaymentID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`MedicineID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `staffchild`
--
ALTER TABLE `staffchild`
  ADD PRIMARY KEY (`StaffChildID`),
  ADD KEY `Child1_FK` (`ChildID1`),
  ADD KEY `Child2_FK` (`ChildID2`),
  ADD KEY `Child3_FK` (`ChildID3`),
  ADD KEY `Child4_FK` (`ChildID4`),
  ADD KEY `Staff_FK` (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergy`
--
ALTER TABLE `allergy`
  MODIFY `AllergyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `ChildID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `childallergy`
--
ALTER TABLE `childallergy`
  MODIFY `ChildAllergyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `childmedicine`
--
ALTER TABLE `childmedicine`
  MODIFY `ChildMedicineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctorchild`
--
ALTER TABLE `doctorchild`
  MODIFY `DoctorChildID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `GuardianID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guardianchild`
--
ALTER TABLE `guardianchild`
  MODIFY `GuardianChildID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guardianpayment`
--
ALTER TABLE `guardianpayment`
  MODIFY `GuardianPaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `MedicineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staffchild`
--
ALTER TABLE `staffchild`
  MODIFY `StaffChildID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `childallergy`
--
ALTER TABLE `childallergy`
  ADD CONSTRAINT `childallergy_ibfk_1` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `childallergy_ibfk_2` FOREIGN KEY (`AllergyID`) REFERENCES `allergy` (`AllergyID`) ON UPDATE CASCADE;

--
-- Constraints for table `childmedicine`
--
ALTER TABLE `childmedicine`
  ADD CONSTRAINT `childmedicine_ibfk_1` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `childmedicine_ibfk_2` FOREIGN KEY (`MedicineID`) REFERENCES `medicine` (`MedicineID`) ON UPDATE CASCADE;

--
-- Constraints for table `doctorchild`
--
ALTER TABLE `doctorchild`
  ADD CONSTRAINT `doctorchild_ibfk_1` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorchild_ibfk_2` FOREIGN KEY (`DoctorID`) REFERENCES `doctor` (`DoctorID`) ON UPDATE CASCADE;

--
-- Constraints for table `guardianchild`
--
ALTER TABLE `guardianchild`
  ADD CONSTRAINT `guardianchild_ibfk_1` FOREIGN KEY (`GuardianID`) REFERENCES `guardian` (`GuardianID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `guardianchild_ibfk_2` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE;

--
-- Constraints for table `guardianpayment`
--
ALTER TABLE `guardianpayment`
  ADD CONSTRAINT `guardianpayment_ibfk_1` FOREIGN KEY (`GuardianID`) REFERENCES `guardian` (`GuardianID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `guardianpayment_ibfk_2` FOREIGN KEY (`PaymentID`) REFERENCES `payment` (`PaymentID`) ON UPDATE CASCADE;

--
-- Constraints for table `staffchild`
--
ALTER TABLE `staffchild`
  ADD CONSTRAINT `staffchild_ibfk_1` FOREIGN KEY (`ChildID1`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staffchild_ibfk_2` FOREIGN KEY (`ChildID2`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staffchild_ibfk_3` FOREIGN KEY (`ChildID3`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staffchild_ibfk_4` FOREIGN KEY (`ChildID4`) REFERENCES `child` (`ChildID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staffchild_ibfk_5` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 03:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `contct_no` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `nic`, `contct_no`, `date`, `time`, `doctor_name`, `email`) VALUES
(3, 'buddhima', '1000000001', '0766037332', '06/06/2023', '22:41', 'maya', 'buddima60@gmail.com'),
(29, 'buddhima', '1000000001', '0766037332', '2023-05-04', '00:38', 'maya', 'buddhima@gmail.com'),
(44, 'Gayan', '1000000001', '0675486215', '07/06/2023', '16:00', 'Mrs.Perera', 'tharaka0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(6) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `time`, `type`, `image`) VALUES
(24, 'Mrs.Perera', '16:00', 'Specialization', '2.jpg'),
(25, 'Mical', '09:00', 'Doctor', '4.jpg'),
(26, 'Jacson perera', '10:20', 'Specialization', '3.jpg'),
(29, 'buddhima', '15:06', 'Doctor', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `number`, `email`) VALUES
(3, 'buddhima', '0754895612', 'buddima60@gmail.com'),
(4, 'buddhima', '0771234565', 'buddima60@gmail.com'),
(10, 'Patience Roy', '0771234565', 'dakikilax@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `icu`
--

CREATE TABLE `icu` (
  `icu_bed_number` varchar(20) NOT NULL,
  `availability` int(20) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `patient_nic` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icu`
--

INSERT INTO `icu` (`icu_bed_number`, `availability`, `patient_id`, `patient_nic`, `address`, `contact_number`) VALUES
('1', 14, 'p1', '7894561230', 'matale', '0766037332'),
('2', 13, 'p2', '7894562222', 'kandy', '0722220002');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `admission_date` text NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `patient_id` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `patient_name`, `admission_date`, `medicine_name`, `price`, `quantity`, `patient_id`, `date`, `payment_status`) VALUES
(9, 'buddhima', '2023-07-06', 'capsule', 651, 2, 'p1', '2023-07-06', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_age` int(20) NOT NULL,
  `patient_address` varchar(20) NOT NULL,
  `patient_contact` varchar(20) NOT NULL,
  `patient_admission` varchar(20) NOT NULL,
  `patient_state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `nic`, `patient_name`, `patient_age`, `patient_address`, `patient_contact`, `patient_admission`, `patient_state`) VALUES
('p1', '7894561230', 'buddhima', 20, 'kandy', '0662234567', '2023-07-06', 'normal'),
('p2', '1254445623', 'gayan', 15, 'no22', '0662234567', '2023-07-06', 'critical');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contct_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `userName`, `password`, `contct_no`, `email`, `address`) VALUES
(3, 'buddhima', '11111111', '0713472888', 'buddhima@gmail.com', 'matale'),
(6, 'kavindu', '1234', '0766037332', 'buddima60@gmail.com', 'matale No 23');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_number` varchar(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `job_role` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `home_address` varchar(20) NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `duty_shift` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_number`, `full_name`, `job_role`, `age`, `home_address`, `telephone_number`, `duty_shift`) VALUES
('ATD', 'Abe', 'attendent', 47, '84870 Road', '0112786534', 'night'),
('Dr1', 'gayan perera', 'doctor', 33, 'no12', '0788884555', 'night'),
('Dr4', 'Nihal Bandara', 'doctor', 28, 'Kandy', '0755361457', 'day'),
('Dr5', 'Gayan Perera', 'doctor', 45, 'colombo', '0788884555', 'night'),
('NRS', 'Suminda', 'nurse', 23, 'Kandy', '0125456221', 'day');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `category`, `brand`, `quantity`) VALUES
('1', 'capsule', 'equipment', 'paracitamol', '266'),
('3', 'C vitormin', 'medicine', 'cc', '11'),
('IT345', 'Ashly Hudson', 'hygiene_necessary', 'OXYGEN', '50');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `user_name`, `password`) VALUES
(1, 'sadmin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `nic` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `first_dose_date` varchar(30) NOT NULL,
  `second_dose_date` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`nic`, `name`, `address`, `contact`, `brand`, `first_dose_date`, `second_dose_date`, `price`) VALUES
('1234567890', 'siripala', 'haputhale', '0871112345', 'moderna', '2023-07-06', '', '651');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icu`
--
ALTER TABLE `icu`
  ADD PRIMARY KEY (`icu_bed_number`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

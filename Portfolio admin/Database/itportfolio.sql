-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:58 AM
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
-- Database: `itportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ClientId` varchar(225) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Picture`, `date`) VALUES
(15, 'Lachit', 'Goswami', 'lachit', 'lachit@gmail.com', '$2y$10$z4l8bFagWoT6jeknFlhg7uzX6AnAB8xdcUKrTF5tanByySIZX2UAm', 'CLT-431569', '987654321', 'Jai Tech', 'Guwahati, Assam', 'Avatar Lachit.svg', '2022-09-28'),
(17, 'Peshwa', 'Bajirao', 'peshwa', 'peshwa@protonmail.com', '$2y$10$bSz/d.hVjgePdeUcbpOny.CfO.e4MOI3aoH4BZxHqbp6BeMNBcPHi', 'CLT-169250', '987654321', 'Ajai Infotech', 'Nagpur, Maharastra', 'Avatar Bhima.svg', '2022-09-28'),
(26, 'Vasishta', 'Goswami', 'vasishta', 'vasishta@gmail.com', '$2y$10$vtfaq/Jl4mwiUZqIp4079eRyVzcA.fjAjRYTkfYNkFdFB2vzDod9q', 'CLT-896310', '987654321', 'Rishi Softwares', 'Ujjain, Madhya Pradesh.', 'Avatar Vasishta.svg', '2022-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Department`, `Date`) VALUES
(2, 'Marketing', '2022-09-26'),
(3, 'IT Department', '2022-09-26'),
(6, 'Executive', '2022-09-19'),
(9, 'Field Technitian', '2022-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `Designation`, `Department`, `Date`) VALUES
(1, 'Web Designer', 'Web Development', '2022-09-27'),
(2, 'Web Development', 'Web Development', '2022-09-27'),
(6, 'Executive', 'Executive', '2022-10-07'),
(8, 'API Developer', 'App Development', '2022-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Joining_Date` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Employee_Id`, `Phone`, `Department`, `Designation`, `Joining_Date`, `Picture`, `DateTime`) VALUES
(19, 'Sukarna', 'Radheya', 'sukarna', 'sukarna@gmail.com', '$2y$10$s/7askjnqKXU.MQcPDDmJ.0oSCbUFoWFslEkAcSDHPU0M5aw88822', 'EMP-713249', '987654321', 'Web Development', 'Testing', '2022-09-28', 'Avatar Sukarna.svg', '2022-09-28 16:50:56'),
(20, 'Lakshmi', 'Priya', 'lakshmi', 'lakshmi@gmail.com', '$2y$10$ki5aQfiSWwAjXtpag9BjUOlaDQbRGuSaxsjJbk1U3KBJ/pDG1vNKe', 'EMP-486195', '987654321', 'App Development', 'UI & UX', '2022-09-28', 'Avatar Lakshmi.svg', '2022-09-28 16:52:11'),
(21, 'Samyukta', 'Devi', 'samyukta', 'samyukta@gmail.com', '$2y$10$u2tyq.jSY3DYUUZEbIfoxeamPkqw4G5HUsG4K8rFhJDboWB/IdMMm', 'EMP-128576', '987654321', 'Excecutive', 'Excecutive', '2022-09-28', 'Avatar Samyukta Devi.svg', '2022-09-28 16:53:26'),
(22, 'Adithyavarman', 'Pulakesi', 'pulakesi', 'pulakesi@gmail.com', '$2y$10$tCj6XzaXGq/7Vfag8lzCtOZFDcXK6RDj/xFjP/qfdL2oDapfalDvG', 'EMP-102548', '987654321', 'App Development', 'SEO', '2022-09-28', 'Avatar Pulakesi.svg', '2022-09-28 16:55:27'),
(23, 'Narasimha', 'Deva', 'narasimha', 'narasimha@gmail.com', '$2y$10$9tlXoO38WKbmtqUKXtbb2.XB9AhOe1jZZOSnQUbUt86WtT6GIUsF6', 'EMP-253678', '987654321', 'App Development', 'Team Head', '2022-09-28', 'Avatar Narasimha dev.svg', '2022-09-28 18:48:41'),
(26, 'Shankara', 'Narayana', 'shankar', 'shankar@gmail.com', '$2y$10$VvpRMBpEONpr4RecEBQr3OJaQV9xTqWXV6XhMXS4kdmg.rLmraE..', 'EMP-953824', '987654321', 'Machine Learning', 'Manual Testing', '2022-10-11', 'Avatar Ranjith Singh.svg', '2022-10-11 14:36:12'),
(27, 'Arjun', 'Parthasarathy', 'arjun', 'arjun@gmail.com', '$2y$10$LecbuzkVvXClKZAsTvkkKOZh2hDZaQTtbutc4BS7PHRVFK2B/ZgD6', 'EMP-851320', '987654321', 'Cloud Computing', 'Cloud Storage', '2022-10-11', 'Avatar arjun.svg', '2022-10-11 14:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `Clients` varchar(150) NOT NULL,
  `Project_name` varchar(150) NOT NULL,
  `Company` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Invoice_date` varchar(100) NOT NULL,
  `Due_date` varchar(100) NOT NULL,
  `Invoice_id` varchar(100) NOT NULL,
  `Bank_name` varchar(150) NOT NULL,
  `Bank_address` varchar(250) NOT NULL,
  `Project_cost` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `Sum_total` varchar(50) NOT NULL,
  `Gst_price` varchar(50) NOT NULL,
  `grand_total_pay` varchar(50) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Discount_percentage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `Clients`, `Project_name`, `Company`, `Email`, `Address`, `Invoice_date`, `Due_date`, `Invoice_id`, `Bank_name`, `Bank_address`, `Project_cost`, `Qty`, `Amount`, `Sum_total`, `Gst_price`, `grand_total_pay`, `Description`, `Discount_percentage`) VALUES
(10, 'Devi Priya', 'Winter Rains', 'Devi Technologies.', 'devi@gmail.com', 'Theppakulam, Madurai.', '01/08/2022', '03/11/2022', '#INV-8765', 'ABC Bank', 'Basavanagudi, Bengaluru', '5500', '2', '11000', '22000', '25960', '25440.80', 'This project is developed, so please pay according to this invoice procedure.', '2'),
(11, 'Sawai Jai Singh', 'Secure Paymentz', 'Jai Industries', 'jaisingh@gmail.com', 'Near Tanot Rai Mata Temple, Jaisalmer', '15/08/2022', '05/11/2022', '#INV-3276', 'City Bank', 'Raja Jaisal Road, Jaisalmer', '10000', '1', '10000', '10000', '11800', '10000.50', 'This project is developed, so please pay pending amount according to this invoice.', '15.25'),
(12, 'Padmini Shiva', 'Hospital Management', 'Shiva Infos', 'padmini@gmail.com', 'Kadu Malleshwara, Bengaluru', '12/10/2022', '28/10/2022', '#INV-2438', 'YESBI', 'Malleshwaram, Bengaluru', '10999', '1', '10999', '10999', '12978.82', '12719.24', 'This project is developed, so please pay according to this invoice procedure.', '2');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Starting_At` date NOT NULL,
  `Ending_On` date NOT NULL,
  `Days` int(200) NOT NULL,
  `Reason` text NOT NULL,
  `Time_Added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `Employee`, `Starting_At`, `Ending_On`, `Days`, `Reason`, `Time_Added`) VALUES
(7, 'Gowri', '2022-09-15', '2022-09-30', 15, 'going to bangalore', '2022-09-19 15:06:21'),
(8, 'Ranjith Singh', '2022-09-12', '2022-09-20', 8, 'I want to attend my Sisters marriage.', '2022-10-11 14:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `Payslip_id` varchar(100) NOT NULL,
  `Salary_month` varchar(100) NOT NULL,
  `Basic_salary` varchar(100) NOT NULL,
  `HRA` varchar(100) NOT NULL,
  `Conveyance` varchar(100) NOT NULL,
  `Other_allowance` varchar(100) NOT NULL,
  `Total_earning` varchar(100) NOT NULL,
  `TDS` varchar(100) NOT NULL,
  `Provident_fund` varchar(100) NOT NULL,
  `ESI` varchar(100) NOT NULL,
  `Loan` varchar(100) NOT NULL,
  `Total_deductions` varchar(100) NOT NULL,
  `Net_salary` varchar(100) NOT NULL,
  `Employee_name` varchar(200) NOT NULL,
  `Employee_id` varchar(100) NOT NULL,
  `Joining_date` varchar(100) NOT NULL,
  `Designations` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `salary_words` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Payslip_id`, `Salary_month`, `Basic_salary`, `HRA`, `Conveyance`, `Other_allowance`, `Total_earning`, `TDS`, `Provident_fund`, `ESI`, `Loan`, `Total_deductions`, `Net_salary`, `Employee_name`, `Employee_id`, `Joining_date`, `Designations`, `Email`, `Address`, `salary_words`) VALUES
(1, '#PAY-8624', 'May', '50000', '2000', '1000', '1000', '54000', '1000', '1000', '1000', '5000', '8000', '46000.00', '20', '20', '20', '20', '20', 'Bengaluru', ''),
(2, '#PAY-1702', 'November', '28450', '4200', '1000', '1200', '34850', '1025', '1500', '1450', '5200', '9175', '25675.00', '23', '23', '23', '23', '23', 'Kolhapur, Maharastra', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `Project_name` varchar(200) NOT NULL,
  `Project_id` varchar(100) NOT NULL,
  `Client` varchar(200) NOT NULL,
  `Start_date` varchar(50) NOT NULL,
  `Deadline` varchar(50) NOT NULL,
  `Project_cost` varchar(50) NOT NULL,
  `leader_1` varchar(150) NOT NULL,
  `leader_1p` varchar(200) NOT NULL,
  `Team_1` varchar(150) NOT NULL,
  `Team_1p` varchar(200) NOT NULL,
  `Team_2` varchar(150) NOT NULL,
  `Team_2p` varchar(200) NOT NULL,
  `Team_3` varchar(150) NOT NULL,
  `Team_3p` varchar(200) NOT NULL,
  `Team_4` varchar(150) NOT NULL,
  `Team_4p` varchar(200) NOT NULL,
  `Description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `Project_name`, `Project_id`, `Client`, `Start_date`, `Deadline`, `Project_cost`, `leader_1`, `leader_1p`, `Team_1`, `Team_1p`, `Team_2`, `Team_2p`, `Team_3`, `Team_3p`, `Team_4`, `Team_4p`, `Description`) VALUES
(10, 'Secure Payments', 'PRJ-938476', 'Srijai Technology', '01/04/2022', '30/06/2022', '500', 'Padmini', 'Avatar Padmini.svg', 'Narasimhadev', 'Avatar Narasimha dev.svg', 'Lakshmi Priya', 'Avatar Lakshmi.svg', 'Madho Rao', 'Avatar Madho Rao.svg', 'Ranjith Singh', 'Avatar Ranjith Singh.svg', 'This project is intended to develop a well secured payments gateway with simple and user friendly interface.'),
(12, 'SAS Airways', 'PRJ-345017', 'SAS Organisations', '05/05/2022', '03/05/2023', '600', 'Bhima', 'Avatar Bhima.svg', 'Divya', 'Avatar Divya.svg', 'Arjun', 'Avatar arjun.svg', 'Sukarna', 'Avatar Sukarna.svg', 'Lakshmi Devi', 'Avatar Lakshmi.svg', 'These systems that allow an airline to sell their inventory (Seats). Contains info on schedules, fares, reservations, tickets etc.'),
(13, 'Hospital Management', 'PRJ-261304', 'Vishwa Solutions', '20/10/2022', '30/11/2022', '10000', 'Vasishta', 'Avatar Vasishta.svg', 'Prithviraj', 'Avatar Prithviraj.svg', 'Padmini', 'Avatar Padmini.svg', 'Nakula', 'Avatar Nakula.svg', 'Indhumati', 'Avatar Indhumati.svg', 'This project is developed using most advanced features. Our team is working very consistently to bring this project in efficient manner. ');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Promotion_from` varchar(200) NOT NULL,
  `Promotion_to` varchar(200) NOT NULL,
  `Promotion_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `Employee`, `Department`, `Promotion_from`, `Promotion_to`, `Promotion_date`) VALUES
(5, 'Sukarna Radheya', 'Web Development', 'Web Designer', 'Web Developer', '2022-08-17'),
(7, 'Vishnu Priyas', 'SEO', 'Associate Engineer', 'Senior Engineer', '2022-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `resignation`
--

CREATE TABLE `resignation` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `Notice_date` varchar(200) NOT NULL,
  `Resignation_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resignation`
--

INSERT INTO `resignation` (`id`, `Employee`, `Department`, `Reason`, `Notice_date`, `Resignation_date`) VALUES
(9, 'Lakshmi Priya', 'Excecutive', 'Due to some reason iam resigning.', '2021-08-19', '2021-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `termination`
--

CREATE TABLE `termination` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Termin_type` varchar(200) NOT NULL,
  `Termin_date` varchar(200) NOT NULL,
  `Reason` varchar(200) NOT NULL,
  `Notice_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termination`
--

INSERT INTO `termination` (`id`, `Employee`, `Department`, `Termin_type`, `Termin_date`, `Reason`, `Notice_date`) VALUES
(2, 'Gourav Vasu', 'HR', 'Misconduct', '2022-07-17', 'Misconduct with staff', '2022-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Projects` varchar(200) NOT NULL,
  `Assigned_days` varchar(100) NOT NULL,
  `Completed_days` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `FirstName`, `LastName`, `Date`, `Projects`, `Assigned_days`, `Completed_days`, `Description`, `Designation`, `Picture`) VALUES
(6, 'Abhimanyu', 'Arjun', '2022-10-30', 'Weather App', '50', '20', 'Our team is working on it.', 'Designing', 'Avatar Abhimanyu.svg'),
(9, 'Samyukta', 'Devi', '2022-11-12', 'Secure Paymentz', '100', '55', 'Project is developed', 'API Developer', 'Avatar Samyukta Devi.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Client_id` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Client_id`, `Phone`, `Picture`, `DateTime`, `Address`) VALUES
(10, 'Lakshmi', 'Priya', 'lakshmi', 'lakshmi@gmail.com', '$2y$10$2e51ghqLl2mvzQexYVIZlukSwjAaFYxVYjKn48SEubskeFLQAMhq.', 'CLT-817543', '987654321', 'Avatar Lakshmi.svg', '0000-00-00 00:00:00', 'Madurai'),
(11, 'Sukarna', 'Radheya', 'sukarna', 'sukarna@gmail.com', '$2y$10$DrvMZl40R8i0jCfH3Zy1KusGEMY5jd3QZnqhu/vEnDu7sQO4ybWjS', 'CLT-146980', '987654321', 'Avatar Sukarna.svg', '0000-00-00 00:00:00', 'Karnal, Haryana'),
(12, 'Arjun', 'Parthasarathy', 'arjun', 'arjun@gmail.com', '$2y$10$/QepOrLHcJJEvFqW1RUVjOPHdz8DDziwKI9/AJn6p/.ArgoA24YCe', 'USR-683721', '987654321', 'Avatar arjun.svg', '0000-00-00 00:00:00', 'Dharashiv, Maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `date`) VALUES
(1, 'admin\r\n', '2022-09-21'),
(2, 'employee', '2022-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClientId` (`ClientId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Department` (`Department`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resignation`
--
ALTER TABLE `resignation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termination`
--
ALTER TABLE `termination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resignation`
--
ALTER TABLE `resignation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `termination`
--
ALTER TABLE `termination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

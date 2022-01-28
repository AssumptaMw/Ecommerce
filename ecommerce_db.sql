-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 12:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'Administrator', 0),
(2, 'Client', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role`, `is_deleted`) VALUES
(4, 'Cameran ', 'Terry', 'xebut@mailinator.com', '$2y$10$wF4CbQRHfHEYk.IhEDaQ5eVowwqgbipsKGl4NtRiNOuuuNwf12zqi', 'Female', 2, 0),
(5, 'Zena ', 'May', 'cacifokovo@mailinator.com', '$2y$10$/JVuTev9Jnd3xPtec.dyteAWtEMNFu4azBe6ejWEqdfRc/AsIdiQe', 'Female', 2, 0),
(6, 'Lesley ', 'Adrienne ', 'rozo@mailinator.com', '$2y$10$H64t8zjpUvsZ8ksBwddccez1lNM9hsA1IEerV5.zH7vi/Z1duZYAS', 'Male', 2, 0),
(7, 'Nayda ', 'Morgan ', 'meqahipyr@mailinator.com', '$2y$10$fvaearCy/ikZkC2bvE8.kuv1/tD3tguLHbVkmpaR44tFTANyoCngO', 'Female', 2, 0),
(8, 'Susan', 'Kibet', 'susan@gmail.com', '', 'Female', 2, 0),
(9, 'Melodie ', 'Jerome ', 'feciqub@mailinator.com', '', 'Male', 2, 0),
(10, 'Vanna ', 'Phoebe ', 'pibojeko@mailinator.com', '$2y$10$zZ1yhW76g47i0bhxqnxhn.gVAO6vwX3IgyPC8100o.cCIMXXVFlmi', 'Female', 2, 0),
(11, 'Fleskine', 'Opiyo', 'fleskine@gmail.com', '$2y$10$LMtpV7jpFp24LUPd5CqR5enaLh9QX/girXE6mEXCOtsiBNiAAZ7lq', 'Male', 1, 0),
(22, 'Rhea ', 'Todd', 'kekogi@mailinator.com', '$2y$10$Cmxx8B2SQe3iTvHnKhMUTe4pSliF9jHADRpX6ZF1ydcKjlY5qc7RG', 'Male', 2, 0),
(23, 'Rhea ', 'Todd', 'kekogi@mailinator.com', '$2y$10$5Pv2BwLLCBbA19VKHeAdoert6v80q5m3ZsbI7Qso07GCNtUlMi6IS', 'Male', 2, 0),
(24, 'Flessu', 'Omondi', 'flessu@gmail.com', '$2y$10$y4CNWe9aKUoI.iKw.tPoQ.ehbHo7xq3.MUh4AgXHucfquCJQtUIIa', 'Male', 2, 0),
(25, 'Flessu', 'Omondi', 'flessu@gmail.com', '$2y$10$1sla7Q5LqKH/dFxBbSi5yOv95PRm6gBJSKwv1QtKsen.heFx3KM7e', 'Male', 2, 0),
(26, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$QkD0xaLozTeSssR0ylD7yOpVr/U/.v4ZbwlvG/a6320SBhsd.hxwW', 'Female', 2, 0),
(27, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$J0kLp03dstTFRLlLkY7WYuWW3ZHiCdHO7xBrcU0qR70Mua4wrCdT6', 'Female', 2, 0),
(28, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$0J.mD/fx3xF.bRDteHs/TuIg9mNA4bbU2J76fJZuoCi5Ct2m1aSSe', 'Female', 2, 0),
(29, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$uitV6nsfQJ.Hj.42TWcabe6AjoIDG0bULf5iarrO7uKt9DLHnYq7e', 'Female', 2, 0),
(30, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$5XgALYra9PHmMkJHSjR3kORZrmb1FUMgAR.HZXYO7ZINx..8KQgw6', 'Female', 2, 0),
(31, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$WiOM48UcE6KTcvxd2TDnUuE7imuy4FsvdgX38kiudLvEdHwENYyci', 'Female', 2, 0),
(32, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$pzEN/tSUY92WUeUXEKbmjOa8TC0ZseHGbBCsqHd6AUoj04FGX5tUq', 'Female', 2, 0),
(33, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$RKuoag3.WOEa2fL0vNkm1.nuI2tIo4yNU50HKa9YnHs0jf9HBFI0i', 'Female', 2, 0),
(34, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$rhPTd1VHj2bNSrLRUwJQauIljaYeP6sMIPR.P3Z0RhcQWRZndr2CK', 'Female', 2, 0),
(35, 'Triciah', 'Kamande', 'triciah@gmail.com', '$2y$10$fYeYiA3i9EBorwSretvBmeZIua2EmnBKwsAotkSuLdx1B.2DaEcri', 'Female', 2, 0),
(36, 'Phyllis ', 'Stafford', 'fudu@mailinator.com', '$2y$10$Qy9BtIEhs6ToY49HmntZfupSFq22OlZYGQqhXmEG3Xj1xGLr4Hlsu', 'Male', 2, 0),
(37, 'Dean', 'Benjamin ', 'rekav@mailinator.com', '$2y$10$VAeFj/ekzLoTsaXJznVnHuRK.ubUts7X8ato5mLFcbtf9ODL1nG06', 'Male', 2, 0),
(38, 'Evans', 'Jeremy ', 'rymyv@mailinator.com', '$2y$10$wbNVFEeV0FYMws2.m0J2H.67tJdmvILJMWZ3T5WLRA70tbQ/SrgT.', 'Male', 2, 0),
(39, 'Sean', 'Iola', 'xitaqyl@mailinator.com', '$2y$10$Vd2fYXi4LSiv706XhGX6VeRUh8dZMhD0DknQ/78b2Qt/eq0oBc/oy', 'Female', 2, 0),
(40, 'Grace', 'Harvey', 'kymimi@mailinator.com', '$2y$10$MAJebL8FPiRCctY.VYH/Pu7KKGEDsJ2/zC3chFXDj5ejpArNu5rTK', 'Male', 2, 0),
(41, 'Taylor', 'Emery', 'doqug@mailinator.com', '$2y$10$hYXMHLeellQnolXCGOH.X.7uBkNP.AtnEWoaaKpwoeCu5sjwSCQji', 'Male', 2, 0),
(42, 'Meadows', 'Armand', 'hatis@mailinator.com', '$2y$10$5Oa3y/rD/s2qpC5Ns7Mhl.tdGAljHdzVoxx0g0xiMp5dgctOdNQFe', 'Female', 2, 0),
(43, 'Erin', 'Doris', 'caqy@mailinator.com', '$2y$10$ylz7/F6A78aviW/H8uUO0.P6kjkq/Gx4S40CvML7rQbZ9UffkozrG', 'Male', 2, 0),
(44, 'Cindy', 'Sydney', 'cindy@gmail.com', '$2y$10$zM/UeQzTHbSV/LqZWLf4lefU4L1HNn95.kjaEDxC1C20KAr9YErUW', 'Female', 2, 0),
(45, 'Lila', 'Sydnee', 'pisuwiqi@mailinator.com', '$2y$10$mRbwm5l1Ap8TKcx1owRE9OrEpHF4yForwsux490narSxxGSjtuF2a', 'Female', 2, 0),
(46, 'Lila', 'Sydnee', 'pisuwiqi@mailinator.com', '$2y$10$A1WbIxR9nouI37cvH9A3.u.kkqYOtrLpceVwnydU5/mz7W/tECQP.', 'Female', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

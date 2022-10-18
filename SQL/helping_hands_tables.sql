/***************************************** TABLE 1 ************************************************/

CREATE TABLE IF NOT EXISTS `tbl_role`(
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(25) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`roleID`)
);
ALTER TABLE `tbl_role` AUTO_INCREMENT=25257672;
ALTER TABLE `tbl_role` ADD UNIQUE(`roleName`);

/***************************************** TABLE 2 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user`(
	`userID` int(11) NOT NULL AUTO_INCREMENT,
  `roleID` int(11) NOT NULL,
  `roleName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`),
  FOREIGN KEY (`roleID`) REFERENCES `tbl_role`(`roleID`) ON DELETE CASCADE
);
ALTER TABLE `tbl_user` AUTO_INCREMENT=84575460;
ALTER TABLE `tbl_user` ADD UNIQUE(`email`);

/***************************************** TABLE 3 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_donor`(
	`donorID` int(11) NOT NULL AUTO_INCREMENT,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donorLocation` varchar(60),
  `total` int(7),
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`donorID`)
);
ALTER TABLE `tbl_donor` AUTO_INCREMENT=78625744;

/***************************************** TABLE 4 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_donation`(
	`donationID` int(11) NOT NULL AUTO_INCREMENT,
  `donationAmount` int(6) NOT NULL,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donationPaymentMethod` enum('MPESA','PayPal') NOT NULL DEFAULT 'MPESA',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`donationID`)
);
ALTER TABLE `tbl_donation` AUTO_INCREMENT=40442782;

/***************************************** TABLE 5 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_cause`(
	`causeID` int(11) NOT NULL AUTO_INCREMENT,
  `causeTitle` varchar(255) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `causeDetails` varchar(255) NOT NULL,
  `amountRaised` int(10) NOT NULL,
  `targetAmount` int(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`causeID`)
);
ALTER TABLE `tbl_cause` AUTO_INCREMENT=59872484;

/***************************************** TABLE 6 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_event`(
	`eventID` int(11) NOT NULL AUTO_INCREMENT,
  `eventDate` int(2) NOT NULL,
  `eventMonth` varchar(25) NOT NULL,
  `eventStartTime` varchar(25) NOT NULL,
  `eventEndTime` varchar(25) NOT NULL,
  `eventDescription` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`eventID`)
);
ALTER TABLE `tbl_event` AUTO_INCREMENT=28727466;

/***************************************** TABLE 7 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_student_testimonial`(
	`studentTestimonialID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `studentName` varchar(60) NOT NULL,
  `school` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`studentTestimonialID`)
);
ALTER TABLE `tbl_student_testimonial` AUTO_INCREMENT=71777258;

/***************************************** TABLE 8 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_team_member`(
	`teamMemberID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`teamMemberID`)
);
ALTER TABLE `tbl_team_member` AUTO_INCREMENT=80165623;

/***************************************** TABLE 9 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_sponsor`(
	`sponsorID` int(11) NOT NULL AUTO_INCREMENT,
  `sponsorName` varchar(255) NOT NULL,
  `sponsorGender` varchar(13) NOT NULL,
  `sponsorEmail` varchar(255) NOT NULL,
  `sponsorMethodOfInformation` varchar(255) NOT NULL,
  `sponsorNationalID` varchar(255) NOT NULL DEFAULT 'nationalID.jpg',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`sponsorID`)
);
ALTER TABLE `tbl_sponsor` AUTO_INCREMENT=79015993;

/***************************************** TABLE 9 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_feedback`(
	`feedbackID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`feedbackID`)
);
ALTER TABLE `tbl_feedback` AUTO_INCREMENT=53148842;

/***************************************** TABLE 10 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_donor_payment`(
	`donorPaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donorPaymentMethod` varchar(60),
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`donorPaymentID`)
);
ALTER TABLE `tbl_donor_payment` AUTO_INCREMENT=57447862;

/***************************************** TABLE 11 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_student_class_8`(
	`studentClass8ID` int(11) NOT NULL AUTO_INCREMENT,
  `studentClass8FName` varchar(255) NOT NULL,
  `studentClass8MName` varchar(255),
  `studentClass8LName` varchar(255) NOT NULL,
  `studentClass8KCPEIndexNo` int(13) NOT NULL,
  `studentClass8Email` varchar(255),
  `studentClass8Stream` varchar(25),
  `studentClass8GuardianContact` varchar(13) NOT NULL,
  `studentClass8GuardianNatIdNo` int(8) NOT NULL,
  `studentClass8SponsorAChildStatus` enum('Inactive','Requested','Pending','Approved','Rejected') NOT NULL DEFAULT 'Inactive',
  `studentClass8SponsorAChildStatusRejectionMessage` enum('Indiscipline','Request Withdrawn','Invalid Documents','Other') NOT NULL DEFAULT 'Other',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`studentClass8ID`)
);
ALTER TABLE `tbl_student_class_8` AUTO_INCREMENT=55991574;

/***************************************** TABLE 12 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_student_sponsored`(
	`studentSponsoredID` int(11) NOT NULL AUTO_INCREMENT,
  `studentSponsoredFName` varchar(255) NOT NULL,
  `studentSponsoredMName` varchar(255),
  `studentSponsoredLName` varchar(255) NOT NULL,
  `studentSponsoredAmountRaised` int(6) NOT NULL,
  `studentSponsoredTargetAmount` int(6) NOT NULL,
  `studentSponsoredDonationClosingDate` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`studentSponsoredID`)
);
ALTER TABLE `tbl_student_sponsored` AUTO_INCREMENT=64534138;





/***************************************** TABLE 3 ************************************************/

CREATE TABLE IF NOT EXISTS `tbl_user_login`(
  `userLoginID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userIP` varchar(25) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userLoginID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_login` AUTO_INCREMENT=50906154;

/***************************************** TABLE 4 ************************************************/

CREATE TABLE IF NOT EXISTS `tbl_api_user`(
	`apiUserID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `apiKey` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`apiUserID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_api_user` AUTO_INCREMENT=92485867;

/***************************************** TABLE 5 ************************************************/

CREATE TABLE IF NOT EXISTS `tbl_api_token`(
	`apiTokenID` int(11) NOT NULL AUTO_INCREMENT,
  `apiUserID` int(11) NOT NULL,
  `apiToken` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiresAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`apiTokenID`),
  FOREIGN KEY (`apiUserID`) REFERENCES `tbl_api_user`(`apiUserID`)
);
ALTER TABLE `tbl_api_token` AUTO_INCREMENT=21824263;

/***************************************** TABLE 6 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_address`(
	`userAddressID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userLocation` varchar(255) NOT NULL DEFAULT 'Nairobi',
  `dropOffInstructions` varchar(255) NOT NULL DEFAULT 'Leave with doorman',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userAddressID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_address` AUTO_INCREMENT=96548141;

/***************************************** TABLE 7 ************************************************/

CREATE TABLE IF NOT EXISTS `tbl_user_feedback`(
	`userFeedbackID` int(15) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userFeedbackID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_feedback` AUTO_INCREMENT=67394262;

/***************************************** TABLE 8 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_settings`(
	`userSettingsID` int(15) NOT NULL AUTO_INCREMENT,
	`userID` int(11) NOT NULL,
  `twoFAEnabled` enum('0', '1') NOT NULL DEFAULT '0',
  `alternateEmail` varchar(60),
  `emailNotificationsEnabled` enum('0', '1') NOT NULL DEFAULT '1',
  `userImagePath` varchar(255) NOT NULL DEFAULT '../imagesDashboard/user_default.png',
  `otp` int(6),
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userSettingsID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_settings` AUTO_INCREMENT=69062181;
ALTER TABLE `tbl_user_settings` ADD UNIQUE(`userID`);

/***************************************** TABLE 9 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_notifications`(
	`userNotificationsID` int(15) NOT NULL AUTO_INCREMENT,
	`userSettingsID` int(15) NOT NULL,
	`userID` int(11) NOT NULL,
  `newDeals` enum('0', '1') NOT NULL DEFAULT '1',
  `newRestaurants` enum('0', '1') NOT NULL DEFAULT '1',
  `orderStatuses` enum('0', '1') NOT NULL DEFAULT '1',
  `passwordChanges` enum('0', '1') NOT NULL DEFAULT '1',
  `specialOffers` enum('0', '1') NOT NULL DEFAULT '1',
  `newsLetter` enum('0', '1') NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userNotificationsID`),
  FOREIGN KEY (`userSettingsID`) REFERENCES `tbl_user_settings`(`userSettingsID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_notifications` AUTO_INCREMENT=53922922;
ALTER TABLE `tbl_user_notifications` ADD UNIQUE(`userSettingsID`);
ALTER TABLE `tbl_user_notifications` ADD UNIQUE(`userID`);

/***************************************** TABLE 10 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_card_sessions`(
	`userCardSessionID` int(15) NOT NULL AUTO_INCREMENT,
	`userID` int(11) NOT NULL,
  `cardHolder` varchar(60) NOT NULL DEFAULT 'Jane Doe',
  `CCN` varchar(19) NOT NULL DEFAULT '4000 1234 5678 9010',
  `validity` varchar(5) NOT NULL DEFAULT '12/22',
  `CVV` int(3) NOT NULL DEFAULT '208',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userCardSessionID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_card_sessions` AUTO_INCREMENT=87168318;
ALTER TABLE `tbl_user_card_sessions` ADD UNIQUE(`userID`);

/***************************************** TABLE 11 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_order`(
	`userOrderID` int(15) NOT NULL AUTO_INCREMENT,
	`userID` int(11) NOT NULL,
	`restaurantName` varchar(255) NOT NULL,
	`deliveryFee` int(5) NOT NULL,
	`orderTotal` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userOrderID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_order` AUTO_INCREMENT=15146206;

/***************************************** TABLE 12 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_user_order_item`(
	`userOrderItemID` int(15) NOT NULL AUTO_INCREMENT,
	`userOrderID` int(11) NOT NULL,
	`userID` int(11) NOT NULL,
	`itemOrderedName` varchar(255) NOT NULL,
	`itemOrderedQty` int(3) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userOrderItemID`),
  FOREIGN KEY (`userOrderID`) REFERENCES `tbl_user_order`(`userOrderID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_user_order_item` AUTO_INCREMENT=27116132;

/***************************************** TABLE 12 ************************************************/
CREATE TABLE IF NOT EXISTS `tbl_dummy`(
  `userOrderID` int(15) NOT NULL AUTO_INCREMENT,
	`userID` int(11) NOT NULL,
	`restaurantName` varchar(255) NOT NULL,
	`deliveryFee` int(5) NOT NULL,
	`orderTotal` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`userOrderID`),
  FOREIGN KEY (`userID`) REFERENCES `tbl_user`(`userID`)
);
ALTER TABLE `tbl_dummy` AUTO_INCREMENT=15146210;

CREATE TABLE `tbl_order_verification` (
  `verificationID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `order_mpesa_code` varchar(30) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` enum('0', '1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`verificationID`),
  FOREIGN KEY (`user_id`) REFERENCES `tbl_user`(`userID`)
);

ALTER TABLE `tbl_order_verification` AUTO_INCREMENT=55113410;

ALTER TABLE `tbl_user_order` AUTO_INCREMENT=15146206;

ALTER TABLE `tbl_user_order_item` AUTO_INCREMENT=27116132;

ALTER TABLE `tbl_order` AUTO_INCREMENT=15146210;

CREATE TABLE `tbl_restaurant` (
  `restaurantID` int(8) NOT NULL,
  `locationID` int(8) NOT NULL,
  `restaurantName` varchar(25) NOT NULL,
  `restaurantImage` varchar(100) NOT NULL,
  `addedAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDeleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`restaurantID`),
  FOREIGN KEY (`locationID`) REFERENCES `tbl_location`(`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

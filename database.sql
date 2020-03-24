CREATE DATABASE IF NOT EXISTS `flip_test` ;
USE `flip_test`;

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactions_id` varchar(100) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT '0',
  `status` varchar(100) DEFAULT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `bank_code` varchar(100) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `beneficiary_name` varchar(100) DEFAULT NULL,
  `remark` varchar(250) DEFAULT NULL,
  `receipt` varchar(250) DEFAULT NULL,
  `time_served` datetime DEFAULT CURRENT_TIMESTAMP,
  `fee` decimal(10,0) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id),
  UNIQUE KEY (`transactions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


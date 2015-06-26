
CREATE TABLE IF NOT EXISTS `band` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` CHAR(3) NOT NULL,
  `name` VARCHAR(30) NOT NULL,
  `range` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `band` (`id`, `code`, `name`, `range`) VALUES
(1, 'LW', 'Long Wave', '150 - 300 kHz'),
(2, 'MW', 'Medium Wave', '526 - 1700 kHz'),
(3, 'SW', 'Short Wave', '3 - 30 MHz'),
(4, 'FM', 'Frequency Modulation', '87.5 - 108.5 MHz');



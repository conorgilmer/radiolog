

CREATE TABLE IF NOT EXISTS `radiolog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date`        DATE        NOT NULL,
  `frequency`   VARCHAR(10) NOT NULL,
  `name`        VARCHAR(30) NOT NULL,
  `band`        CHAR(5)     NOT NULL,
  `type`        CHAR(5)     NOT NULL,
  `transmitter` VARCHAR(10),
  `country`     VARCHAR(10),
  `report`      VARCHAR(30),
  `receiver`    VARCHAR(10),
  `aerial`      VARCHAR(10),
  `sinpo`       VARCHAR(10),
  `remarks`     VARCHAR(50),
  `times`       DATETIME    NOT NULL,
  PRIMARY KEY (`id`)
);

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


CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` CHAR(3) NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `comment` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `type` (`id`, `code`, `name`, `comment`) VALUES
(1, 'AM', 'Amplitude Modulation', 'Public Radio'),
(2, 'FM', 'Frequency Modulation', 'Military/Communications/Public Radio'),
(3, 'DAB', 'Digital Audio Broadcasting', 'Public Radio'),
(4, 'DRM', 'Digital Radio Mondiale', 'Public Radio'),
(5, 'SSB', 'Single Side Band', 'Amateur Radio');



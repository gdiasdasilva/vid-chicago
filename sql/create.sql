CREATE TABLE `crimes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `case_number` varchar(100) NOT NULL,
 `date` datetime NOT NULL,
 `block` varchar(250) NOT NULL,
 `iucr` varchar(100) NOT NULL,
 `primary_type` varchar(250) NOT NULL,
 `description` varchar(250) NOT NULL,
 `location_description` varchar(250) NOT NULL,
 `arrest` tinyint(1) NOT NULL,
 `domestic` tinyint(1) NOT NULL,
 `beat` varchar(250) NOT NULL,
 `district` varchar(100) NOT NULL,
 `ward` varchar(10) NOT NULL,
 `community_area` varchar(100) NOT NULL,
 `fbi_code` varchar(100) NOT NULL,
 `x_coordinate` varchar(100) NOT NULL,
 `y_coordinate` varchar(100) NOT NULL,
 `year` int(11) NOT NULL,
 `updated_on` datetime NOT NULL,
 `latitude` varchar(100) NOT NULL,
 `longitude` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10285324 DEFAULT CHARSET=latin1

update crimes set community_area = 27 where community_area = 26;
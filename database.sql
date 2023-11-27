create database facevisionai;

use facevisionai;

CREATE TABLE `contas` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);
-- SQL
CREATE TABLE users (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
);

CREATE TABLE contact (
  `name` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(100) NOT NULL,
  `texte` varchar(100) NOT NULL,
);

CREATE TABLE newsletter (
  `email` varchar(100) NOT NULL,
);
CREATE DATABASE LoginSystem;

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);


create table feedback(
    name varchar(30),
    message varchar(10000)
);

create table booking(
    `name` varchar(20),
    `from` varchar(20),
    `to` varchar(20)
);


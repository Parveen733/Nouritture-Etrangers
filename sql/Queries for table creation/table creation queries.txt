//Users Table

CREATE TABLE `users` (
   `usr_id` int(11) NOT NULL AUTO_INCREMENT,
   `firstname` varchar(100) NOT NULL,
   `lastname` varchar(100) NOT NULL,
   `username` varchar(100) NOT NULL,
   `email` varchar(100) NOT NULL,
   `password` varchar(100) NOT NULL,
   `Profile_pic` varchar(100) DEFAULT NULL,
   `hash` varchar(100) DEFAULT NULL,
   `active` int(100) DEFAULT NULL,
   `Role` varchar(45) NOT NULL DEFAULT 'user',
   PRIMARY KEY (`usr_id`),
   UNIQUE KEY `email_UNIQUE` (`email`),
   UNIQUE KEY `email` (`email`)
 ) ;



//Recipe Table

CREATE TABLE `recipe` (
   `Recipe_Id` int(11) NOT NULL AUTO_INCREMENT,
   `Recipe_Name` varchar(100) NOT NULL,
   `Recipe_Desc` varchar(400) NOT NULL,
   `Recipe_Ingrediants` varchar(200) NOT NULL,
   `Recipe_Method` varchar(500) NOT NULL,
   `Recipe_category` varchar(100) DEFAULT NULL,
   `usr_id` int(11) NOT NULL,
   `Recipe_Image` varchar(100) DEFAULT NULL,
   PRIMARY KEY (`Recipe_Id`)
 );
 
 
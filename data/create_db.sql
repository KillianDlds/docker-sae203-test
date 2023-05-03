CREATE DATABASE IF NOT EXISTS stock;

USE stock;

Drop   table VIDEOS;
Create table VIDEOS (
    liens varchar(80) NOT NULL PRIMARY KEY,
    titre varchar(50)
);

Drop   table Users;
Create table Users (
    username varchar(20) NOT NULL PRIMARY KEY,
    mdp      varchar(20) NOT NULL
);


Insert into VIDEOS ('https://www.youtube.com/embed/duwL7PbJXbk','lol');
Insert into VIDEOS ('https://www.youtube.com/embed/XabEY5X-Bg4','mdr');
Insert into VIDEOS ('https://www.youtube.com/embed/2RIScMW53F0','ptdr');
Insert into VIDEOS ('https://www.youtube.com/embed/UNNZ8L2J9uI','aefe');
Insert into VIDEOS ('https://www.youtube.com/embed/ikmp_akyXW4','jrfj');

Insert into Users ('admin', 'mdp');
Insert into Users ('lorenzo', 'mdp');
Insert into Users ('killian', 'mdp');
Insert into Users ('damien', 'mdp');

GRANT ALL ON stock.* to review_site@localhost IDENTIFIED by 'password';
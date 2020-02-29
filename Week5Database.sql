CREATE database CSC306Class;

use CSC306Class; /* Used this to use the database that was created */

/*CREATING TABLES*/

CREATE TABLE studentInf(
studentID int primary key,
firstName varchar(50),
lastName varchar(50),
studentEmail varchar(50),
DateOfBirth date
);

CREATE TABLE IntructorInf(
instID int primary key,
instFirstName varchar(50),
instLastName varchar(50),
instEmail varchar(50),
instStartDate date
);

CREATE TABLE LikedAndDisliked(
LikedAndDislikedID int primary key,
studentID int,
instID int,
LikeOrDislike boolean,
DateOfFeedback date
);


/* INSERTING DATA TO THE TABLES */
INSERT INTO studentInf VALUES(1, "Nitish", "Kafle", "kaflenitish1@gmail.com", '2020/01/01');
INSERT INTO studentInf VALUES(2, "Sam", "Adams", "samadams@gmail.com", '2020/02/08');
INSERT INTO studentInf VALUES(3, "Bruce", "Lee", "brucelee@gmail.com", '2020/05/12');
INSERT INTO studentInf VALUES(4, "Alicia", "Keys", "aliciakeys@gmail.com", '2020/08/19');
INSERT INTO studentInf VALUES(5, "Brett", "Johnson", "brettjohnson@gmail.com", '2020/02/27');

INSERT INTO IntructorInf VALUES(10, "John", "Goodwin", "johngoodwin@gmail.com", '2010/01/01');
INSERT INTO IntructorInf VALUES(11, "Mary", "Jane", "maryjane@gmail.com", '2012/01/01');
INSERT INTO IntructorInf VALUES(12, "Elon", "Musk", "elonmusk@gmail.com", '2015/01/01');
INSERT INTO IntructorInf VALUES(13, "Mark", "Dane", "markdane@gmail.com", '2019/01/01');
INSERT INTO IntructorInf VALUES(14, "Daisy", "Lee", "daisylee@gmail.com", '2020/01/21');

INSERT INTO LikedAndDisliked VALUES(100, 1, 10, true, '2020/01/01');
INSERT INTO LikedAndDisliked VALUES(101, 2, 11, false, '2020/01/01');
INSERT INTO LikedAndDisliked VALUES(102, 3, 12, true, '2020/01/01');
INSERT INTO LikedAndDisliked VALUES(103, 4, 13, false, '2020/01/01');
INSERT INTO LikedAndDisliked VALUES(104, 5, 14, true, '2020/01/01');




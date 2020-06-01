select * from LikedAndDisliked;

/* Deleting a specific row */
DELETE FROM LikedAndDisliked
WHERE studentID = 1
ORDER BY LikedAndDislikedID
LIMIT 2;

/* using select and from to retrieve data from a specific table */
SELECT firstName, lastName, studentEmail FROM studentInf;

-- Dropping table if exist, then creating a new one and inserting data
SELECT * FROM studentInf;
DROP TABLE IF EXISTS studentInf;
CREATE TABLE IF NOT EXISTS studentInf(
studentID int primary key,
firstName varchar(50),
lastName varchar(50),
studentEmail varchar(50),
DateOfBirth date
);
-- Entering Values for the tables
INSERT INTO studentInf VALUES(1, "Bill", "Kafle", "kaflenitish1@gmail.com", '2020/01/01');
INSERT INTO studentInf VALUES(2, "Adam", "Adams", "samadams@gmail.com", '2020/02/08');
INSERT INTO studentInf VALUES(3, "Neil", "Lee", "brucelee@gmail.com", '2020/05/12');
INSERT INTO studentInf VALUES(4, "Grape", "Keys", "aliciakeys@gmail.com", '2020/08/19');
INSERT INTO studentInf VALUES(5, "Ester", "Johnson", "brettjohnson@gmail.com", '2020/02/27');


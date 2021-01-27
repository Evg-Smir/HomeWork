<?php
$hostname = 'localhost';
$username = 'Evgeny';
$password = 'kiloman';
$db_name = 'people';

$db_connect = mysqli_connect($hostname, $username, $password);

$sql = mysqli_query($db_connect, "CREATE DATABASE $db_name");

mysqli_select_db($db_connect, $db_name);

$sql2 = mysqli_query($db_connect, "CREATE TABLE people(
    ID_person INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(25) NOT NULL,
    Surname VARCHAR(25) NOT NULL,
    Age INT UNSIGNED
)");

mysqli_query($db_connect, "INSERT INTO people VALUES(NULL, 'Sean','Stanly',22)");
mysqli_query($db_connect, "INSERT INTO people VALUES(NULL, 'John','Billigan',20)");
mysqli_query($db_connect, "INSERT INTO people VALUES(NULL, 'Rose','McKenzy',30)");
mysqli_query($db_connect, "INSERT INTO people VALUES(NULL, 'Paul','Henry',29)");
mysqli_query($db_connect, "INSERT INTO people VALUES(NULL, 'Kate','Mitchell',25)");

$sql2 = mysqli_query($db_connect, "CREATE TABLE Hobbies(
    ID_hobbies INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    DESCRIPTION VARCHAR(300) NOT NULL
)");

mysqli_query($db_connect, "INSERT INTO Hobbies VALUES(NULL, 'Sean','skateboarding')");
mysqli_query($db_connect, "INSERT INTO Hobbies VALUES(NULL, 'John','swimming')");
mysqli_query($db_connect, "INSERT INTO Hobbies VALUES(NULL, 'Rose','reading')");
mysqli_query($db_connect, "INSERT INTO Hobbies VALUES(NULL, 'Paul','scuba diving ')");
mysqli_query($db_connect, "INSERT INTO Hobbies VALUES(NULL, 'Sean','painting')");

$sql3 = mysqli_query($db_connect, "CREATE TABLE People_hobbies(
    ID_record INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ID_people INT UNSIGNED,
    ID_hobbies INT UNSIGNED,
    CONSTRAINT FOREIGN KEY(ID_people) REFERENCES people (ID_PERSON) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY(ID_hobbies) REFERENCES hobbies (ID_hobbies) ON DELETE CASCADE ON UPDATE CASCADE)") ;

mysqli_query($db_connect, "INSERT INTO people_hobbies VALUES(NULL,1,1)");

mysqli_query($db_connect, "INSERT INTO people_hobbies VALUES(NULL,2,2)");

mysqli_query($db_connect, "INSERT INTO people_hobbies VALUES(NULL,3,3)");

mysqli_query($db_connect, "INSERT INTO people_hobbies VALUES(NULL,4,4)");
mysqli_query($db_connect, "INSERT INTO people_hobbies VALUES(NULL,5,5)");

$select = mysqli_query($db_connect,"SELECT People.Name, Surname, Age, Description FROM People_hobbies JOIN people ON People.ID_person = People_hobbies.ID_PERSON  JOIN Hobbies ON People_hobbies.ID_hobbies = Hobbies.ID_hobbies");

$arr = mysqli_fetch_all($select, MYSQLI_ASSOC);

echo "<pre>";
print_r($arr);
echo "</pre>";





?>
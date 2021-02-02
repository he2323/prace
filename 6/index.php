<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE dbnowa";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
//create user
$dbname = "dbnowa";
$sql = "CREATE USER 'wdbnowa'@'%' IDENTIFIED WITH mysql_native_password BY 'wdbnowa123';GRANT ALL PRIVILEGES ON *.* TO 'wdbnowa'@'%' WITH GRANT OPTION;ALTER USER 'wdbnowa'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `2020_10`.* TO 'wdbnowa'@'%';";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->query($sql) === TRUE) {
    echo "USer created successfully";
} else {
    echo "Error creating user: " . $conn->error;
}
$username = "wdbnowa";
$password = "wdbnowa123";

//create table miejsca
$sql = "CREATE TABLE dane (
    pesel INT NOT NULL PRIMARY KEY,
    imie VARCHAR(20) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO `dane`(`pesel`, `imie`, `nazwisko` ) VALUES (89030312345, 'Andrzej','Biały');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO `dane`(`pesel`, `imie`, `nazwisko` ) VALUES (72102176543, 'Małgorzata','Wiśniewska');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO `dane`(`pesel`, `imie`, `nazwisko` ) VALUES (02321204567, 'Błażej','Prążkowski');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
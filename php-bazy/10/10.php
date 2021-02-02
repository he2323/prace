<?php
$servername = "localhost";
$username = "root";
$password = "";

echo "<div style='display:block'>";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE data10  DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_polish_ci";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$dbname = "data10";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE dane (
    nr_rej VARCHAR(7) NOT NULL PRIMARY KEY,
    marka VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    rocznik VARCHAR(50) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE inne (
    nr_rej VARCHAR(7) NOT NULL PRIMARY KEY,
    przebieg INT NOT NULL,
    kraj VARCHAR(50) NOT NULL,
    cenat INT NOT NULL,
    wartoscpocz INT NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE koszty (
    nr_rej VARCHAR(7) NOT NULL PRIMARY KEY,
    koszt INT NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$filename = "./dane.csv";
$dane = [];
$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
    array_push($dane, $emapData[0]);
}
fclose($file);
var_dump(sizeof($dane));
for ($i = 1; $i < sizeof($dane); $i++) {
    $data = explode(";", $dane[$i]);
    $sql = "INSERT into dane(nr_rej,marka,model,rocznik) values('$data[0]','$data[1]','$data[2]','$data[3]')";
    mysqli_query($conn, $sql);
}

echo "CSV File dane has been successfully Imported.";

$filename = "./koszty.csv";
$koszty = [];
$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
    array_push($koszty, $emapData[0]);
}
fclose($file);

for ($i = 1; $i < sizeof($koszty); $i++) {
    $data = explode(";", $koszty[$i]);
    $sql = "INSERT into koszty(nr_rej,koszt) values('$data[0]','$data[1]')";
    mysqli_query($conn, $sql);
}

echo "CSV File koszty has been successfully Imported.";

$filename = "./inne.csv";
$inne = [];
$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
    array_push($inne, $emapData[0]);
}
fclose($file);

for ($i = 1; $i < sizeof($inne); $i++) {
    $data = explode(";", $inne[$i]);
    $sql = "INSERT into inne(nr_rej,przebieg,kraj,cenat,wartoscpocz) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
    mysqli_query($conn, $sql);
}

echo "CSV File koszty has been successfully Imported.";

$sql = "INSERT into dane(nr_rej,marka,model,rocznik) values('ZS12378','oper','2','4321')";
mysqli_query($conn, $sql);
$sql = "INSERT into koszty(nr_rej,koszt) values('ZS12378','1000')";
mysqli_query($conn, $sql);
$sql = "INSERT into inne(nr_rej,przebieg,kraj,cenat,wartoscpocz) values('ZS12378','12312','Polska','1000','2000')";
mysqli_query($conn, $sql);


echo "</div>";

if (isset($_POST['sub'])) {
    $zapytanie = $_POST['sub'];
    $result = $conn->query($zapytanie);
    echo "<table border='1px'>";
    var_dump($result);
    foreach ($result as $value) {
        echo "<tr>";
        foreach ($value as $v) {
            echo "<td>" . $v . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

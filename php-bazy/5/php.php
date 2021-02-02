<?php

$servername = "localhost";
$username = "root";
$password = "";

echo "<div style='display:none'>";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE 2020_10";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
//create user
$dbname = "2020_10";
$sql = "CREATE USER 'admin_10'@'%' IDENTIFIED WITH mysql_native_password BY '***';GRANT ALL PRIVILEGES ON *.* TO 'admin_10'@'%' WITH GRANT OPTION;ALTER USER 'admin_10'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `2020_10`.* TO 'admin_10'@'%';";
$conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->query($sql) === TRUE) {
//     echo "USer created successfully";
// } else {
//     echo "Error creating user: " . $conn->error;
// }


//delete table
$sql = "DROP TABLE `2020_10`.`miejsca`";
if ($conn->query($sql) === TRUE) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . $conn->error;
}
//create table miejsca
$sql = "CREATE TABLE miejsca (
        id_miejsce_urodzenia INT(12) PRIMARY KEY,
        miejsce_urodzenia VARCHAR(30) NOT NULL
        )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//insert data to miejsca
for ($i = 1; $i <= 10; $i++) {
    $sql = "INSERT INTO `miejsca`(`id_miejsce_urodzenia`, `miejsce_urodzenia` ) VALUES (" . $i . ",'miejsce" . $i . "');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//delete table
$sql = "DROP TABLE `2020_10`.`osoby`";
if ($conn->query($sql) === TRUE) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . $conn->error;
}

//create table
$sql = "CREATE TABLE osoby (
        pesel INT(12) PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        data_urodzenia VARCHAR(50),
        id_miejsce_urodzenia int(20)
        )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//insert data

for ($i = 1; $i <= 5; $i++) {
    $sql = "INSERT INTO `osoby`(`pesel`, `imie`, `nazwisko`, `data_urodzenia`, `id_miejsce_urodzenia`) VALUES (" . (1223344556 + $i) . ",'Ala','asdfd','2020-10-2', " . $i . ");";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
echo "</div>";
if (isset($_POST['sub'])) {
    $zapytanie = $_POST['sub'];
    $result = $conn->query($zapytanie);
    echo "<table border='1px'>";
    foreach ($result as $value) {
        echo "<tr>";
        foreach ($value as $v) {
            echo "<td>" . $v . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
if (isset($_POST['dodaj'])) {
    $sql = "INSERT INTO `osoby`(`pesel`, `imie`, `nazwisko`, `data_urodzenia`, `id_miejsce_urodzenia`) VALUES (" . $_POST['pesel'] . ",'" . $_POST['imie'] . "','" . $_POST['nazwisko'] . "','" . $_POST['data_urodzenia'] . "','" . $_POST['id_miejsce_urodzenia'] . "');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

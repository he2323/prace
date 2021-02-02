<?php

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE IF NOT EXISTS `test_przed` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `test_przed`;";

if ($conn->query($sql) === true) {
  echo "new database created";
} else "zjebales".$conn;

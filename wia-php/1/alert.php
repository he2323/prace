<?php

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];

if (isset($_POST["imie"]) && isset($_POST["nazwisko"]) && $nazwisko != "" && $imie != "") {
    $message = "cześć " . $imie . " " . $nazwisko;
    echo "<script type='text/javascript'>alert('$message');</script>";
}

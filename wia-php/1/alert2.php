<?php

$miesiac = $_POST["miesiac"];


if (isset($miesiac) && $miesiac != "") {

    $array = array("styczen", "luty", "marzec", "kwiecien", "maj", "czerwiec", "lipiec", "sierpien", "wrzesien", "pazdziernik", "listopad", "grudzien");
    $message = $array[(int)$miesiac - 1];

    echo "<script type='text/javascript'>alert('$message');</script>";
}

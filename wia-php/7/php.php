<?php
if (isset($_POST["createFile"])) {
    if (fopen($_POST["source"] . ".txt", "w")) {
        echo "plik stworzony";
    } else echo "plik nie stworzony";
} else if (isset($_POST["deleteFile"])) {
    $file_pointer = $_POST["source"] . ".txt";

    // Use unlink() function to delete a file  
    if (!unlink($file_pointer)) {
        echo ("$file_pointer nie istnieje");
    } else {
        echo ("$file_pointer has been deleted");
    }
} else if (isset($_POST["changeName"])) {
    if (rename($_POST["source"] . ".txt", $_POST["destination"] . ".txt")) {
        echo "nazwa zmieniona";
    } else echo "nie zmieniono nazwy";
} else if (isset($_POST["createFiles"])) {
    mkdir($_POST["file1"]);
    mkdir($_POST["file2"]);
} else if (isset($_POST["insertFromTextarea"])) {
    $file = fopen($_POST["fileTextarea"] . ".txt", "w");
    fwrite($file, $_POST["textarea"]);
    fclose($file);
} elseif (isset($_POST["showDestination"])) {
    $files1 = scandir("./");
    foreach ($files1 as $value) {
        echo $value ."<br>";
    }
}

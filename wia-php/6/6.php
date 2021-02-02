<?php
$fileContent = file_get_contents("imiona.txt");
$newFileContent = preg_replace('/[^a-zA-Z0-9]/', '', $fileContent);
$newFileContentArray = preg_split('/(?=[A-Z])/', $newFileContent);
$value = 0;
$newArr = [];
for ($i = 1; $i < count($newFileContentArray); $i++) {
    file_put_contents("imiona_czyste.txt", $newFileContentArray[$i] . "\n", FILE_APPEND);
    if (strlen($newFileContentArray[$i]) > 0) {
        echo "First letter of name " . $newFileContentArray[$i] . " is " . $newFileContentArray[$i][0] . "<br>";
        $value++;
        if (array_key_exists($newFileContentArray[$i][0], $newArr)) $newArr[$newFileContentArray[$i][0]] += 1;
        else $newArr[$newFileContentArray[$i][0]] = 1;
    }
}
echo "Wszystkich linii jest " . (count($newFileContentArray)) . "<br>";
var_dump($newArr);
echo "wszystkich niepustych linii jest " . $value . "<br>";
echo "wszystkich imion jest " . $value . "<br>";
echo "ilość znaków to " . strlen($newFileContent);

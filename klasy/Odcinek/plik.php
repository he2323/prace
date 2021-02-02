
    <?php
if(isset($_POST['submit']))
{
    /*
    if(isset($_POST['startX'])){ $startX = $_POST['startX'];}
    if(!isset($_POST['startX'])){ $startX = rand(-100, 100);}

    if(isset($_POST['startY'])){ $startY = $_POST['startY'];}
    if(!isset($_POST['startY'])){ $startY = rand(-100, 100);}
    if(isset($_POST['endX'])) {$endX = $_POST['endX'];}
    if(!isset($_POST['endX'])){ $endX = rand(-100, 100);}
    if(isset($_POST['endY'])) {$endY = $_POST['endY'];}
    if(!isset($_POST['endY'])) {$endY = rand(-100, 100);}
    */
    $startX = rand(-100, 100);
    $startY = rand(-100, 100);
    $endX = rand(-100, 100);
    $endY = rand(-100, 100);
    include("Odcinek.class.php");
    $Odcinek1 = new Odcinek($startX, $startY, $endX, $endY);
    echo "<br>ODcinek 1   <br>";
    echo $Odcinek1->liczDlugosc();
    echo "<br>Odcinek2  <br>";
    $Odcinek2 = new Odcinek($startX, $startY, $endX, $endY);
    echo $Odcinek2->liczDlugosc();
}


?>
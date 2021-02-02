
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name = "title" content = "Main">
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
require('mod_menu.php');


$current_file_path = dirname(__FILE__);
echo $current_file_path;
if($title['title'] = "Main") include('mod_carousel.php');




require("mod_grid.php");
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name = "title" content = "Main">
    <title>grid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    .col align-self-center
    {
        background-color: red;
    }
    .col align-self-start
    {
        background-color: black;
        color: white;
    }
    </style>



</head>
<body>

<div class="container" style="height= 50px !important;">
  <div class="row">
    <div class="col align-self-start">
    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>  
    </div>
    <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>

</body>
</html>
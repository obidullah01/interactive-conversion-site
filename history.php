<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Page 3 [History]</p> 
   <p>Conversion site </p>
   1. <a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>

   <p>Conversion History</p>
   <?php

   $csvFile = fopen('history.csv', 'r');

   // echo fread($csvFile,filesize("history.csv"));

   while(! feof($csvFile))
  {
  echo fgets($csvFile). "<br />";
  }


   ?>
<br>
<br>
   <script src="./script.js"></script>
</body>
</html>